/*!
 * jQuery Validation Plugin v1.19.3
 *
 * https://jqueryvalidation.org/
 *
 * Copyright (c) 2021 Jörn Zaefferer
 * Released under the MIT license
 */
(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

$.extend( $.fn, {

	// https://jqueryvalidation.org/validate/
	validate: function( options ) {

		// If nothing is selected, return nothing; can't chain anyway
		if ( !this.length ) {
			if ( options && options.debug && window.console ) {
				console.warn( "Nothing selected, can't validate, returning nothing." );
			}
			return;
		}

		// Check if a validator for this form was already created
		var validator = $.data( this[ 0 ], "validator" );
		if ( validator ) {
			return validator;
		}

		// Add novalidate tag if HTML5.
		this.attr( "novalidate", "novalidate" );

		validator = new $.validator( options, this[ 0 ] );
		$.data( this[ 0 ], "validator", validator );

		if ( validator.settings.onsubmit ) {

			this.on( "click.validate", ":submit", function( event ) {

				// Track the used submit button to properly handle scripted
				// submits later.
				validator.submitButton = event.currentTarget;

				// Allow suppressing validation by adding a cancel class to the submit button
				if ( $( this ).hasClass( "cancel" ) ) {
					validator.cancelSubmit = true;
				}

				// Allow suppressing validation by adding the html5 formnovalidate attribute to the submit button
				if ( $( this ).attr( "formnovalidate" ) !== undefined ) {
					validator.cancelSubmit = true;
				}
			} );

			// Validate the form on submit
			this.on( "submit.validate", function( event ) {
				if ( validator.settings.debug ) {

					// Prevent form submit to be able to see console output
					event.preventDefault();
				}

				function handle() {
					var hidden, result;

					// Insert a hidden input as a replacement for the missing submit button
					// The hidden input is inserted in two cases:
					//   - A user defined a `submitHandler`
					//   - There was a pending request due to `remote` method and `stopRequest()`
					//     was called to submit the form in case it's valid
					if ( validator.submitButton && ( validator.settings.submitHandler || validator.formSubmitted ) ) {
						hidden = $( "<input type='hidden'/>" )
							.attr( "name", validator.submitButton.name )
							.val( $( validator.submitButton ).val() )
							.appendTo( validator.currentForm );
					}

					if ( validator.settings.submitHandler && !validator.settings.debug ) {
						result = validator.settings.submitHandler.call( validator, validator.currentForm, event );
						if ( hidden ) {

							// And clean up afterwards; thanks to no-block-scope, hidden can be referenced
							hidden.remove();
						}
						if ( result !== undefined ) {
							return result;
						}
						return false;
					}
					return true;
				}

				// Prevent submit for invalid forms or custom submit handlers
				if ( validator.cancelSubmit ) {
					validator.cancelSubmit = false;
					return handle();
				}
				if ( validator.form() ) {
					if ( validator.pendingRequest ) {
						validator.formSubmitted = true;
						return false;
					}
					return handle();
				} else {
					validator.focusInvalid();
					return false;
				}
			} );
		}

		return validator;
	},

	// https://jqueryvalidation.org/valid/
	valid: function() {
		var valid, validator, errorList;

		if ( $( this[ 0 ] ).is( "form" ) ) {
			valid = this.validate().form();
		} else {
			errorList = [];
			valid = true;
			validator = $( this[ 0 ].form ).validate();
			this.each( function() {
				valid = validator.element( this ) && valid;
				if ( !valid ) {
					errorList = errorList.concat( validator.errorList );
				}
			} );
			validator.errorList = errorList;
		}
		return valid;
	},

	// https://jqueryvalidation.org/rules/
	rules: function( command, argument ) {
		var element = this[ 0 ],
			isContentEditable = typeof this.attr( "contenteditable" ) !== "undefined" && this.attr( "contenteditable" ) !== "false",
			settings, staticRules, existingRules, data, param, filtered;

		// If nothing is selected, return empty object; can't chain anyway
		if ( element == null ) {
			return;
		}

		if ( !element.form && isContentEditable ) {
			element.form = this.closest( "form" )[ 0 ];
			element.name = this.attr( "name" );
		}

		if ( element.form == null ) {
			return;
		}

		if ( command ) {
			settings = $.data( element.form, "validator" ).settings;
			staticRules = settings.rules;
			existingRules = $.validator.staticRules( element );
			switch ( command ) {
			case "add":
				$.extend( existingRules, $.validator.normalizeRule( argument ) );

				// Remove messages from rules, but allow them to be set separately
				delete existingRules.messages;
				staticRules[ element.name ] = existingRules;
				if ( argument.messages ) {
					settings.messages[ element.name ] = $.extend( settings.messages[ element.name ], argument.messages );
				}
				break;
			case "remove":
				if ( !argument ) {
					delete staticRules[ element.name ];
					return existingRules;
				}
				filtered = {};
				$.each( argument.split( /\s/ ), function( index, method ) {
					filtered[ method ] = existingRules[ method ];
					delete existingRules[ method ];
				} );
				return filtered;
			}
		}

		data = $.validator.normalizeRules(
		$.extend(
			{},
			$.validator.classRules( element ),
			$.validator.attributeRules( element ),
			$.validator.dataRules( element ),
			$.validator.staticRules( element )
		), element );

		// Make sure required is at front
		if ( data.required ) {
			param = data.required;
			delete data.required;
			data = $.extend( { required: param }, data );
		}

		// Make sure remote is at back
		if ( data.remote ) {
			param = data.remote;
			delete data.remote;
			data = $.extend( data, { remote: param } );
		}

		return data;
	}
} );

// JQuery trim is deprecated, provide a trim method based on String.prototype.trim
var trim = function( str ) {

	// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/trim#Polyfill
	return str.replace( /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "" );
};

// Custom selectors
$.extend( $.expr.pseudos || $.expr[ ":" ], {		// '|| $.expr[ ":" ]' here enables backwards compatibility to jQuery 1.7. Can be removed when dropping jQ 1.7.x support

	// https://jqueryvalidation.org/blank-selector/
	blank: function( a ) {
		return !trim( "" + $( a ).val() );
	},

	// https://jqueryvalidation.org/filled-selector/
	filled: function( a ) {
		var val = $( a ).val();
		return val !== null && !!trim( "" + val );
	},

	// https://jqueryvalidation.org/unchecked-selector/
	unchecked: function( a ) {
		return !$( a ).prop( "checked" );
	}
} );

// Constructor for validator
$.validator = function( options, form ) {
	this.settings = $.extend( true, {}, $.validator.defaults, options );
	this.currentForm = form;
	this.init();
};

// https://jqueryvalidation.org/jQuery.validator.format/
$.validator.format = function( source, params ) {
	if ( arguments.length === 1 ) {
		return function() {
			var args = $.makeArray( arguments );
			args.unshift( source );
			return $.validator.format.apply( this, args );
		};
	}
	if ( params === undefined ) {
		return source;
	}
	if ( arguments.length > 2 && params.constructor !== Array  ) {
		params = $.makeArray( arguments ).slice( 1 );
	}
	if ( params.constructor !== Array ) {
		params = [ params ];
	}
	$.each( params, function( i, n ) {
		source = source.replace( new RegExp( "\\{" + i + "\\}", "g" ), function() {
			return n;
		} );
	} );
	return source;
};

$.extend( $.validator, {

	defaults: {
		messages: {},
		groups: {},
		rules: {},
		errorClass: "error",
		pendingClass: "pending",
		validClass: "valid",
		errorElement: "label",
		focusCleanup: false,
		focusInvalid: true,
		errorContainer: $( [] ),
		errorLabelContainer: $( [] ),
		onsubmit: true,
		ignore: ":hidden",
		ignoreTitle: false,
		onfocusin: function( element ) {
			this.lastActive = element;

			// Hide error label and remove error class on focus if enabled
			if ( this.settings.focusCleanup ) {
				if ( this.settings.unhighlight ) {
					this.settings.unhighlight.call( this, element, this.settings.errorClass, this.settings.validClass );
				}
				this.hideThese( this.errorsFor( element ) );
			}
		},
		onfocusout: function( element ) {
			if ( !this.checkable( element ) && ( element.name in this.submitted || !this.optional( element ) ) ) {
				this.element( element );
			}
		},
		onkeyup: function( element, event ) {

			// Avoid revalidate the field when pressing one of the following keys
			// Shift       => 16
			// Ctrl        => 17
			// Alt         => 18
			// Caps lock   => 20
			// End         => 35
			// Home        => 36
			// Left arrow  => 37
			// Up arrow    => 38
			// Right arrow => 39
			// Down arrow  => 40
			// Insert      => 45
			// Num lock    => 144
			// AltGr key   => 225
			var excludedKeys = [
				16, 17, 18, 20, 35, 36, 37,
				38, 39, 40, 45, 144, 225
			];

			if ( event.which === 9 && this.elementValue( element ) === "" || $.inArray( event.keyCode, excludedKeys ) !== -1 ) {
				return;
			} else if ( element.name in this.submitted || element.name in this.invalid ) {
				this.element( element );
			}
		},
		onclick: function( element ) {

			// Click on selects, radiobuttons and checkboxes
			if ( element.name in this.submitted ) {
				this.element( element );

			// Or option elements, check parent select in that case
			} else if ( element.parentNode.name in this.submitted ) {
				this.element( element.parentNode );
			}
		},
		highlight: function( element, errorClass, validClass ) {
			if ( element.type === "radio" ) {
				this.findByName( element.name ).addClass( errorClass ).removeClass( validClass );
			} else {
				$( element ).addClass( errorClass ).removeClass( validClass );
			}
		},
		unhighlight: function( element, errorClass, validClass ) {
			if ( element.type === "radio" ) {
				this.findByName( element.name ).removeClass( errorClass ).addClass( validClass );
			} else {
				$( element ).removeClass( errorClass ).addClass( validClass );
			}
		}
	},

	// https://jqueryvalidation.org/jQuery.validator.setDefaults/
	setDefaults: function( settings ) {
		$.extend( $.validator.defaults, settings );
	},

	messages: {
		required: "This field is required.",
		remote: "Please fix this field.",
		email: "Please enter a valid email address.",
		url: "Please enter a valid URL.",
		date: "Please enter a valid date.",
		dateISO: "Please enter a valid date (ISO).",
		number: "Please enter a valid number.",
		digits: "Please enter only digits.",
		equalTo: "Please enter the same value again.",
		maxlength: $.validator.format( "Please enter no more than {0} characters." ),
		minlength: $.validator.format( "Please enter at least {0} characters." ),
		rangelength: $.validator.format( "Please enter a value between {0} and {1} characters long." ),
		range: $.validator.format( "Please enter a value between {0} and {1}." ),
		max: $.validator.format( "Please enter a value less than or equal to {0}." ),
		min: $.validator.format( "Please enter a value greater than or equal to {0}." ),
		step: $.validator.format( "Please enter a multiple of {0}." )
	},

	autoCreateRanges: false,

	prototype: {

		init: function() {
			this.labelContainer = $( this.settings.errorLabelContainer );
			this.errorContext = this.labelContainer.length && this.labelContainer || $( this.currentForm );
			this.containers = $( this.settings.errorContainer ).add( this.settings.errorLabelContainer );
			this.submitted = {};
			this.valueCache = {};
			this.pendingRequest = 0;
			this.pending = {};
			this.invalid = {};
			this.reset();

			var currentForm = this.currentForm,
				groups = ( this.groups = {} ),
				rules;
			$.each( this.settings.groups, function( key, value ) {
				if ( typeof value === "string" ) {
					value = value.split( /\s/ );
				}
				$.each( value, function( index, name ) {
					groups[ name ] = key;
				} );
			} );
			rules = this.settings.rules;
			$.each( rules, function( key, value ) {
				rules[ key ] = $.validator.normalizeRule( value );
			} );

			function delegate( event ) {
				var isContentEditable = typeof $( this ).attr( "contenteditable" ) !== "undefined" && $( this ).attr( "contenteditable" ) !== "false";

				// Set form expando on contenteditable
				if ( !this.form && isContentEditable ) {
					this.form = $( this ).closest( "form" )[ 0 ];
					this.name = $( this ).attr( "name" );
				}

				// Ignore the element if it belongs to another form. This will happen mainly
				// when setting the `form` attribute of an input to the id of another form.
				if ( currentForm !== this.form ) {
					return;
				}

				var validator = $.data( this.form, "validator" ),
					eventType = "on" + event.type.replace( /^validate/, "" ),
					settings = validator.settings;
				if ( settings[ eventType ] && !$( this ).is( settings.ignore ) ) {
					settings[ eventType ].call( validator, this, event );
				}
			}

			$( this.currentForm )
				.on( "focusin.validate focusout.validate keyup.validate",
					":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], " +
					"[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], " +
					"[type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], " +
					"[type='radio'], [type='checkbox'], [contenteditable], [type='button']", delegate )

				// Support: Chrome, oldIE
				// "select" is provided as event.target when clicking a option
				.on( "click.validate", "select, option, [type='radio'], [type='checkbox']", delegate );

			if ( this.settings.invalidHandler ) {
				$( this.currentForm ).on( "invalid-form.validate", this.settings.invalidHandler );
			}
		},

		// https://jqueryvalidation.org/Validator.form/
		form: function() {
			this.checkForm();
			$.extend( this.submitted, this.errorMap );
			this.invalid = $.extend( {}, this.errorMap );
			if ( !this.valid() ) {
				$( this.currentForm ).triggerHandler( "invalid-form", [ this ] );
			}
			this.showErrors();
			return this.valid();
		},

		checkForm: function() {
			this.prepareForm();
			for ( var i = 0, elements = ( this.currentElements = this.elements() ); elements[ i ]; i++ ) {
				this.check( elements[ i ] );
			}
			return this.valid();
		},

		// https://jqueryvalidation.org/Validator.element/
		element: function( element ) {
			var cleanElement = this.clean( element ),
				checkElement = this.validationTargetFor( cleanElement ),
				v = this,
				result = true,
				rs, group;

			if ( checkElement === undefined ) {
				delete this.invalid[ cleanElement.name ];
			} else {
				this.prepareElement( checkElement );
				this.currentElements = $( checkElement );

				// If this element is grouped, then validate all group elements already
				// containing a value
				group = this.groups[ checkElement.name ];
				if ( group ) {
					$.each( this.groups, function( name, testgroup ) {
						if ( testgroup === group && name !== checkElement.name ) {
							cleanElement = v.validationTargetFor( v.clean( v.findByName( name ) ) );
							if ( cleanElement && cleanElement.name in v.invalid ) {
								v.currentElements.push( cleanElement );
								result = v.check( cleanElement ) && result;
							}
						}
					} );
				}

				rs = this.check( checkElement ) !== false;
				result = result && rs;
				if ( rs ) {
					this.invalid[ checkElement.name ] = false;
				} else {
					this.invalid[ checkElement.name ] = true;
				}

				if ( !this.numberOfInvalids() ) {

					// Hide error containers on last error
					this.toHide = this.toHide.add( this.containers );
				}
				this.showErrors();

				// Add aria-invalid status for screen readers
				$( element ).attr( "aria-invalid", !rs );
			}

			return result;
		},

		// https://jqueryvalidation.org/Validator.showErrors/
		showErrors: function( errors ) {
			if ( errors ) {
				var validator = this;

				// Add items to error list and map
				$.extend( this.errorMap, errors );
				this.errorList = $.map( this.errorMap, function( message, name ) {
					return {
						message: message,
						element: validator.findByName( name )[ 0 ]
					};
				} );

				// Remove items from success list
				this.successList = $.grep( this.successList, function( element ) {
					return !( element.name in errors );
				} );
			}
			if ( this.settings.showErrors ) {
				this.settings.showErrors.call( this, this.errorMap, this.errorList );
			} else {
				this.defaultShowErrors();
			}
		},

		// https://jqueryvalidation.org/Validator.resetForm/
		resetForm: function() {
			if ( $.fn.resetForm ) {
				$( this.currentForm ).resetForm();
			}
			this.invalid = {};
			this.submitted = {};
			this.prepareForm();
			this.hideErrors();
			var elements = this.elements()
				.removeData( "previousValue" )
				.removeAttr( "aria-invalid" );

			this.resetElements( elements );
		},

		resetElements: function( elements ) {
			var i;

			if ( this.settings.unhighlight ) {
				for ( i = 0; elements[ i ]; i++ ) {
					this.settings.unhighlight.call( this, elements[ i ],
						this.settings.errorClass, "" );
					this.findByName( elements[ i ].name ).removeClass( this.settings.validClass );
				}
			} else {
				elements
					.removeClass( this.settings.errorClass )
					.removeClass( this.settings.validClass );
			}
		},

		numberOfInvalids: function() {
			return this.objectLength( this.invalid );
		},

		objectLength: function( obj ) {
			/* jshint unused: false */
			var count = 0,
				i;
			for ( i in obj ) {

				// This check allows counting elements with empty error
				// message as invalid elements
				if ( obj[ i ] !== undefined && obj[ i ] !== null && obj[ i ] !== false ) {
					count++;
				}
			}
			return count;
		},

		hideErrors: function() {
			this.hideThese( this.toHide );
		},

		hideThese: function( errors ) {
			errors.not( this.containers ).text( "" );
			this.addWrapper( errors ).hide();
		},

		valid: function() {
			return this.size() === 0;
		},

		size: function() {
			return this.errorList.length;
		},

		focusInvalid: function() {
			if ( this.settings.focusInvalid ) {
				try {
					$( this.findLastActive() || this.errorList.length && this.errorList[ 0 ].element || [] )
					.filter( ":visible" )
					.trigger( "focus" )

					// Manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
					.trigger( "focusin" );
				} catch ( e ) {

					// Ignore IE throwing errors when focusing hidden elements
				}
			}
		},

		findLastActive: function() {
			var lastActive = this.lastActive;
			return lastActive && $.grep( this.errorList, function( n ) {
				return n.element.name === lastActive.name;
			} ).length === 1 && lastActive;
		},

		elements: function() {
			var validator = this,
				rulesCache = {};

			// Select all valid inputs inside the form (no submit or reset buttons)
			return $( this.currentForm )
			.find( "input, select, textarea, [contenteditable]" )
			.not( ":submit, :reset, :image, :disabled" )
			.not( this.settings.ignore )
			.filter( function() {
				var name = this.name || $( this ).attr( "name" ); // For contenteditable
				var isContentEditable = typeof $( this ).attr( "contenteditable" ) !== "undefined" && $( this ).attr( "contenteditable" ) !== "false";

				if ( !name && validator.settings.debug && window.console ) {
					console.error( "%o has no name assigned", this );
				}

				// Set form expando on contenteditable
				if ( isContentEditable ) {
					this.form = $( this ).closest( "form" )[ 0 ];
					this.name = name;
				}

				// Ignore elements that belong to other/nested forms
				if ( this.form !== validator.currentForm ) {
					return false;
				}

				// Select only the first element for each name, and only those with rules specified
				if ( name in rulesCache || !validator.objectLength( $( this ).rules() ) ) {
					return false;
				}

				rulesCache[ name ] = true;
				return true;
			} );
		},

		clean: function( selector ) {
			return $( selector )[ 0 ];
		},

		errors: function() {
			var errorClass = this.settings.errorClass.split( " " ).join( "." );
			return $( this.settings.errorElement + "." + errorClass, this.errorContext );
		},

		resetInternals: function() {
			this.successList = [];
			this.errorList = [];
			this.errorMap = {};
			this.toShow = $( [] );
			this.toHide = $( [] );
		},

		reset: function() {
			this.resetInternals();
			this.currentElements = $( [] );
		},

		prepareForm: function() {
			this.reset();
			this.toHide = this.errors().add( this.containers );
		},

		prepareElement: function( element ) {
			this.reset();
			this.toHide = this.errorsFor( element );
		},

		elementValue: function( element ) {
			var $element = $( element ),
				type = element.type,
				isContentEditable = typeof $element.attr( "contenteditable" ) !== "undefined" && $element.attr( "contenteditable" ) !== "false",
				val, idx;

			if ( type === "radio" || type === "checkbox" ) {
				return this.findByName( element.name ).filter( ":checked" ).val();
			} else if ( type === "number" && typeof element.validity !== "undefined" ) {
				return element.validity.badInput ? "NaN" : $element.val();
			}

			if ( isContentEditable ) {
				val = $element.text();
			} else {
				val = $element.val();
			}

			if ( type === "file" ) {

				// Modern browser (chrome & safari)
				if ( val.substr( 0, 12 ) === "C:\\fakepath\\" ) {
					return val.substr( 12 );
				}

				// Legacy browsers
				// Unix-based path
				idx = val.lastIndexOf( "/" );
				if ( idx >= 0 ) {
					return val.substr( idx + 1 );
				}

				// Windows-based path
				idx = val.lastIndexOf( "\\" );
				if ( idx >= 0 ) {
					return val.substr( idx + 1 );
				}

				// Just the file name
				return val;
			}

			if ( typeof val === "string" ) {
				return val.replace( /\r/g, "" );
			}
			return val;
		},

		check: function( element ) {
			element = this.validationTargetFor( this.clean( element ) );

			var rules = $( element ).rules(),
				rulesCount = $.map( rules, function( n, i ) {
					return i;
				} ).length,
				dependencyMismatch = false,
				val = this.elementValue( element ),
				result, method, rule, normalizer;

			// Prioritize the local normalizer defined for this element over the global one
			// if the former exists, otherwise user the global one in case it exists.
			if ( typeof rules.normalizer === "function" ) {
				normalizer = rules.normalizer;
			} else if (	typeof this.settings.normalizer === "function" ) {
				normalizer = this.settings.normalizer;
			}

			// If normalizer is defined, then call it to retreive the changed value instead
			// of using the real one.
			// Note that `this` in the normalizer is `element`.
			if ( normalizer ) {
				val = normalizer.call( element, val );

				// Delete the normalizer from rules to avoid treating it as a pre-defined method.
				delete rules.normalizer;
			}

			for ( method in rules ) {
				rule = { method: method, parameters: rules[ method ] };
				try {
					result = $.validator.methods[ method ].call( this, val, element, rule.parameters );

					// If a method indicates that the field is optional and therefore valid,
					// don't mark it as valid when there are no other rules
					if ( result === "dependency-mismatch" && rulesCount === 1 ) {
						dependencyMismatch = true;
						continue;
					}
					dependencyMismatch = false;

					if ( result === "pending" ) {
						this.toHide = this.toHide.not( this.errorsFor( element ) );
						return;
					}

					if ( !result ) {
						this.formatAndAdd( element, rule );
						return false;
					}
				} catch ( e ) {
					if ( this.settings.debug && window.console ) {
						console.log( "Exception occurred when checking element " + element.id + ", check the '" + rule.method + "' method.", e );
					}
					if ( e instanceof TypeError ) {
						e.message += ".  Exception occurred when checking element " + element.id + ", check the '" + rule.method + "' method.";
					}

					throw e;
				}
			}
			if ( dependencyMismatch ) {
				return;
			}
			if ( this.objectLength( rules ) ) {
				this.successList.push( element );
			}
			return true;
		},

		// Return the custom message for the given element and validation method
		// specified in the element's HTML5 data attribute
		// return the generic message if present and no method specific message is present
		customDataMessage: function( element, method ) {
			return $( element ).data( "msg" + method.charAt( 0 ).toUpperCase() +
				method.substring( 1 ).toLowerCase() ) || $( element ).data( "msg" );
		},

		// Return the custom message for the given element name and validation method
		customMessage: function( name, method ) {
			var m = this.settings.messages[ name ];
			return m && ( m.constructor === String ? m : m[ method ] );
		},

		// Return the first defined argument, allowing empty strings
		findDefined: function() {
			for ( var i = 0; i < arguments.length; i++ ) {
				if ( arguments[ i ] !== undefined ) {
					return arguments[ i ];
				}
			}
			return undefined;
		},

		// The second parameter 'rule' used to be a string, and extended to an object literal
		// of the following form:
		// rule = {
		//     method: "method name",
		//     parameters: "the given method parameters"
		// }
		//
		// The old behavior still supported, kept to maintain backward compatibility with
		// old code, and will be removed in the next major release.
		defaultMessage: function( element, rule ) {
			if ( typeof rule === "string" ) {
				rule = { method: rule };
			}

			var message = this.findDefined(
					this.customMessage( element.name, rule.method ),
					this.customDataMessage( element, rule.method ),

					// 'title' is never undefined, so handle empty string as undefined
					!this.settings.ignoreTitle && element.title || undefined,
					$.validator.messages[ rule.method ],
					"<strong>Warning: No message defined for " + element.name + "</strong>"
				),
				theregex = /\$?\{(\d+)\}/g;
			if ( typeof message === "function" ) {
				message = message.call( this, rule.parameters, element );
			} else if ( theregex.test( message ) ) {
				message = $.validator.format( message.replace( theregex, "{$1}" ), rule.parameters );
			}

			return message;
		},

		formatAndAdd: function( element, rule ) {
			var message = this.defaultMessage( element, rule );

			this.errorList.push( {
				message: message,
				element: element,
				method: rule.method
			} );

			this.errorMap[ element.name ] = message;
			this.submitted[ element.name ] = message;
		},

		addWrapper: function( toToggle ) {
			if ( this.settings.wrapper ) {
				toToggle = toToggle.add( toToggle.parent( this.settings.wrapper ) );
			}
			return toToggle;
		},

		defaultShowErrors: function() {
			var i, elements, error;
			for ( i = 0; this.errorList[ i ]; i++ ) {
				error = this.errorList[ i ];
				if ( this.settings.highlight ) {
					this.settings.highlight.call( this, error.element, this.settings.errorClass, this.settings.validClass );
				}
				this.showLabel( error.element, error.message );
			}
			if ( this.errorList.length ) {
				this.toShow = this.toShow.add( this.containers );
			}
			if ( this.settings.success ) {
				for ( i = 0; this.successList[ i ]; i++ ) {
					this.showLabel( this.successList[ i ] );
				}
			}
			if ( this.settings.unhighlight ) {
				for ( i = 0, elements = this.validElements(); elements[ i ]; i++ ) {
					this.settings.unhighlight.call( this, elements[ i ], this.settings.errorClass, this.settings.validClass );
				}
			}
			this.toHide = this.toHide.not( this.toShow );
			this.hideErrors();
			this.addWrapper( this.toShow ).show();
		},

		validElements: function() {
			return this.currentElements.not( this.invalidElements() );
		},

		invalidElements: function() {
			return $( this.errorList ).map( function() {
				return this.element;
			} );
		},

		showLabel: function( element, message ) {
			var place, group, errorID, v,
				error = this.errorsFor( element ),
				elementID = this.idOrName( element ),
				describedBy = $( element ).attr( "aria-describedby" );

			if ( error.length ) {

				// Refresh error/success class
				error.removeClass( this.settings.validClass ).addClass( this.settings.errorClass );

				// Replace message on existing label
				error.html( message );
			} else {

				// Create error element
				error = $( "<" + this.settings.errorElement + ">" )
					.attr( "id", elementID + "-error" )
					.addClass( this.settings.errorClass )
					.html( message || "" );

				// Maintain reference to the element to be placed into the DOM
				place = error;
				if ( this.settings.wrapper ) {

					// Make sure the element is visible, even in IE
					// actually showing the wrapped element is handled elsewhere
					place = error.hide().show().wrap( "<" + this.settings.wrapper + "/>" ).parent();
				}
				if ( this.labelContainer.length ) {
					this.labelContainer.append( place );
				} else if ( this.settings.errorPlacement ) {
					this.settings.errorPlacement.call( this, place, $( element ) );
				} else {
					place.insertAfter( element );
				}

				// Link error back to the element
				if ( error.is( "label" ) ) {

					// If the error is a label, then associate using 'for'
					error.attr( "for", elementID );

					// If the element is not a child of an associated label, then it's necessary
					// to explicitly apply aria-describedby
				} else if ( error.parents( "label[for='" + this.escapeCssMeta( elementID ) + "']" ).length === 0 ) {
					errorID = error.attr( "id" );

					// Respect existing non-error aria-describedby
					if ( !describedBy ) {
						describedBy = errorID;
					} else if ( !describedBy.match( new RegExp( "\\b" + this.escapeCssMeta( errorID ) + "\\b" ) ) ) {

						// Add to end of list if not already present
						describedBy += " " + errorID;
					}
					$( element ).attr( "aria-describedby", describedBy );

					// If this element is grouped, then assign to all elements in the same group
					group = this.groups[ element.name ];
					if ( group ) {
						v = this;
						$.each( v.groups, function( name, testgroup ) {
							if ( testgroup === group ) {
								$( "[name='" + v.escapeCssMeta( name ) + "']", v.currentForm )
									.attr( "aria-describedby", error.attr( "id" ) );
							}
						} );
					}
				}
			}
			if ( !message && this.settings.success ) {
				error.text( "" );
				if ( typeof this.settings.success === "string" ) {
					error.addClass( this.settings.success );
				} else {
					this.settings.success( error, element );
				}
			}
			this.toShow = this.toShow.add( error );
		},

		errorsFor: function( element ) {
			var name = this.escapeCssMeta( this.idOrName( element ) ),
				describer = $( element ).attr( "aria-describedby" ),
				selector = "label[for='" + name + "'], label[for='" + name + "'] *";

			// 'aria-describedby' should directly reference the error element
			if ( describer ) {
				selector = selector + ", #" + this.escapeCssMeta( describer )
					.replace( /\s+/g, ", #" );
			}

			return this
				.errors()
				.filter( selector );
		},

		// See https://api.jquery.com/category/selectors/, for CSS
		// meta-characters that should be escaped in order to be used with JQuery
		// as a literal part of a name/id or any selector.
		escapeCssMeta: function( string ) {
			return string.replace( /([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1" );
		},

		idOrName: function( element ) {
			return this.groups[ element.name ] || ( this.checkable( element ) ? element.name : element.id || element.name );
		},

		validationTargetFor: function( element ) {

			// If radio/checkbox, validate first element in group instead
			if ( this.checkable( element ) ) {
				element = this.findByName( element.name );
			}

			// Always apply ignore filter
			return $( element ).not( this.settings.ignore )[ 0 ];
		},

		checkable: function( element ) {
			return ( /radio|checkbox/i ).test( element.type );
		},

		findByName: function( name ) {
			return $( this.currentForm ).find( "[name='" + this.escapeCssMeta( name ) + "']" );
		},

		getLength: function( value, element ) {
			switch ( element.nodeName.toLowerCase() ) {
			case "select":
				return $( "option:selected", element ).length;
			case "input":
				if ( this.checkable( element ) ) {
					return this.findByName( element.name ).filter( ":checked" ).length;
				}
			}
			return value.length;
		},

		depend: function( param, element ) {
			return this.dependTypes[ typeof param ] ? this.dependTypes[ typeof param ]( param, element ) : true;
		},

		dependTypes: {
			"boolean": function( param ) {
				return param;
			},
			"string": function( param, element ) {
				return !!$( param, element.form ).length;
			},
			"function": function( param, element ) {
				return param( element );
			}
		},

		optional: function( element ) {
			var val = this.elementValue( element );
			return !$.validator.methods.required.call( this, val, element ) && "dependency-mismatch";
		},

		startRequest: function( element ) {
			if ( !this.pending[ element.name ] ) {
				this.pendingRequest++;
				$( element ).addClass( this.settings.pendingClass );
				this.pending[ element.name ] = true;
			}
		},

		stopRequest: function( element, valid ) {
			this.pendingRequest--;

			// Sometimes synchronization fails, make sure pendingRequest is never < 0
			if ( this.pendingRequest < 0 ) {
				this.pendingRequest = 0;
			}
			delete this.pending[ element.name ];
			$( element ).removeClass( this.settings.pendingClass );
			if ( valid && this.pendingRequest === 0 && this.formSubmitted && this.form() ) {
				$( this.currentForm ).submit();

				// Remove the hidden input that was used as a replacement for the
				// missing submit button. The hidden input is added by `handle()`
				// to ensure that the value of the used submit button is passed on
				// for scripted submits triggered by this method
				if ( this.submitButton ) {
					$( "input:hidden[name='" + this.submitButton.name + "']", this.currentForm ).remove();
				}

				this.formSubmitted = false;
			} else if ( !valid && this.pendingRequest === 0 && this.formSubmitted ) {
				$( this.currentForm ).triggerHandler( "invalid-form", [ this ] );
				this.formSubmitted = false;
			}
		},

		previousValue: function( element, method ) {
			method = typeof method === "string" && method || "remote";

			return $.data( element, "previousValue" ) || $.data( element, "previousValue", {
				old: null,
				valid: true,
				message: this.defaultMessage( element, { method: method } )
			} );
		},

		// Cleans up all forms and elements, removes validator-specific events
		destroy: function() {
			this.resetForm();

			$( this.currentForm )
				.off( ".validate" )
				.removeData( "validator" )
				.find( ".validate-equalTo-blur" )
					.off( ".validate-equalTo" )
					.removeClass( "validate-equalTo-blur" )
				.find( ".validate-lessThan-blur" )
					.off( ".validate-lessThan" )
					.removeClass( "validate-lessThan-blur" )
				.find( ".validate-lessThanEqual-blur" )
					.off( ".validate-lessThanEqual" )
					.removeClass( "validate-lessThanEqual-blur" )
				.find( ".validate-greaterThanEqual-blur" )
					.off( ".validate-greaterThanEqual" )
					.removeClass( "validate-greaterThanEqual-blur" )
				.find( ".validate-greaterThan-blur" )
					.off( ".validate-greaterThan" )
					.removeClass( "validate-greaterThan-blur" );
		}

	},

	classRuleSettings: {
		required: { required: true },
		email: { email: true },
		url: { url: true },
		date: { date: true },
		dateISO: { dateISO: true },
		number: { number: true },
		digits: { digits: true },
		creditcard: { creditcard: true }
	},

	addClassRules: function( className, rules ) {
		if ( className.constructor === String ) {
			this.classRuleSettings[ className ] = rules;
		} else {
			$.extend( this.classRuleSettings, className );
		}
	},

	classRules: function( element ) {
		var rules = {},
			classes = $( element ).attr( "class" );

		if ( classes ) {
			$.each( classes.split( " " ), function() {
				if ( this in $.validator.classRuleSettings ) {
					$.extend( rules, $.validator.classRuleSettings[ this ] );
				}
			} );
		}
		return rules;
	},

	normalizeAttributeRule: function( rules, type, method, value ) {

		// Convert the value to a number for number inputs, and for text for backwards compability
		// allows type="date" and others to be compared as strings
		if ( /min|max|step/.test( method ) && ( type === null || /number|range|text/.test( type ) ) ) {
			value = Number( value );

			// Support Opera Mini, which returns NaN for undefined minlength
			if ( isNaN( value ) ) {
				value = undefined;
			}
		}

		if ( value || value === 0 ) {
			rules[ method ] = value;
		} else if ( type === method && type !== "range" ) {

			// Exception: the jquery validate 'range' method
			// does not test for the html5 'range' type
			rules[ method ] = true;
		}
	},

	attributeRules: function( element ) {
		var rules = {},
			$element = $( element ),
			type = element.getAttribute( "type" ),
			method, value;

		for ( method in $.validator.methods ) {

			// Support for <input required> in both html5 and older browsers
			if ( method === "required" ) {
				value = element.getAttribute( method );

				// Some browsers return an empty string for the required attribute
				// and non-HTML5 browsers might have required="" markup
				if ( value === "" ) {
					value = true;
				}

				// Force non-HTML5 browsers to return bool
				value = !!value;
			} else {
				value = $element.attr( method );
			}

			this.normalizeAttributeRule( rules, type, method, value );
		}

		// 'maxlength' may be returned as -1, 2147483647 ( IE ) and 524288 ( safari ) for text inputs
		if ( rules.maxlength && /-1|2147483647|524288/.test( rules.maxlength ) ) {
			delete rules.maxlength;
		}

		return rules;
	},

	dataRules: function( element ) {
		var rules = {},
			$element = $( element ),
			type = element.getAttribute( "type" ),
			method, value;

		for ( method in $.validator.methods ) {
			value = $element.data( "rule" + method.charAt( 0 ).toUpperCase() + method.substring( 1 ).toLowerCase() );

			// Cast empty attributes like `data-rule-required` to `true`
			if ( value === "" ) {
				value = true;
			}

			this.normalizeAttributeRule( rules, type, method, value );
		}
		return rules;
	},

	staticRules: function( element ) {
		var rules = {},
			validator = $.data( element.form, "validator" );

		if ( validator.settings.rules ) {
			rules = $.validator.normalizeRule( validator.settings.rules[ element.name ] ) || {};
		}
		return rules;
	},

	normalizeRules: function( rules, element ) {

		// Handle dependency check
		$.each( rules, function( prop, val ) {

			// Ignore rule when param is explicitly false, eg. required:false
			if ( val === false ) {
				delete rules[ prop ];
				return;
			}
			if ( val.param || val.depends ) {
				var keepRule = true;
				switch ( typeof val.depends ) {
				case "string":
					keepRule = !!$( val.depends, element.form ).length;
					break;
				case "function":
					keepRule = val.depends.call( element, element );
					break;
				}
				if ( keepRule ) {
					rules[ prop ] = val.param !== undefined ? val.param : true;
				} else {
					$.data( element.form, "validator" ).resetElements( $( element ) );
					delete rules[ prop ];
				}
			}
		} );

		// Evaluate parameters
		$.each( rules, function( rule, parameter ) {
			rules[ rule ] = typeof parameter === "function" && rule !== "normalizer" ? parameter( element ) : parameter;
		} );

		// Clean number parameters
		$.each( [ "minlength", "maxlength" ], function() {
			if ( rules[ this ] ) {
				rules[ this ] = Number( rules[ this ] );
			}
		} );
		$.each( [ "rangelength", "range" ], function() {
			var parts;
			if ( rules[ this ] ) {
				if ( Array.isArray( rules[ this ] ) ) {
					rules[ this ] = [ Number( rules[ this ][ 0 ] ), Number( rules[ this ][ 1 ] ) ];
				} else if ( typeof rules[ this ] === "string" ) {
					parts = rules[ this ].replace( /[\[\]]/g, "" ).split( /[\s,]+/ );
					rules[ this ] = [ Number( parts[ 0 ] ), Number( parts[ 1 ] ) ];
				}
			}
		} );

		if ( $.validator.autoCreateRanges ) {

			// Auto-create ranges
			if ( rules.min != null && rules.max != null ) {
				rules.range = [ rules.min, rules.max ];
				delete rules.min;
				delete rules.max;
			}
			if ( rules.minlength != null && rules.maxlength != null ) {
				rules.rangelength = [ rules.minlength, rules.maxlength ];
				delete rules.minlength;
				delete rules.maxlength;
			}
		}

		return rules;
	},

	// Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
	normalizeRule: function( data ) {
		if ( typeof data === "string" ) {
			var transformed = {};
			$.each( data.split( /\s/ ), function() {
				transformed[ this ] = true;
			} );
			data = transformed;
		}
		return data;
	},

	// https://jqueryvalidation.org/jQuery.validator.addMethod/
	addMethod: function( name, method, message ) {
		$.validator.methods[ name ] = method;
		$.validator.messages[ name ] = message !== undefined ? message : $.validator.messages[ name ];
		if ( method.length < 3 ) {
			$.validator.addClassRules( name, $.validator.normalizeRule( name ) );
		}
	},

	// https://jqueryvalidation.org/jQuery.validator.methods/
	methods: {

		// https://jqueryvalidation.org/required-method/
		required: function( value, element, param ) {

			// Check if dependency is met
			if ( !this.depend( param, element ) ) {
				return "dependency-mismatch";
			}
			if ( element.nodeName.toLowerCase() === "select" ) {

				// Could be an array for select-multiple or a string, both are fine this way
				var val = $( element ).val();
				return val && val.length > 0;
			}
			if ( this.checkable( element ) ) {
				return this.getLength( value, element ) > 0;
			}
			return value !== undefined && value !== null && value.length > 0;
		},

		// https://jqueryvalidation.org/email-method/
		email: function( value, element ) {

			// From https://html.spec.whatwg.org/multipage/forms.html#valid-e-mail-address
			// Retrieved 2014-01-14
			// If you have a problem with this implementation, report a bug against the above spec
			// Or use custom methods to implement your own email validation
			return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test( value );
		},

		// https://jqueryvalidation.org/url-method/
		url: function( value, element ) {

			// Copyright (c) 2010-2013 Diego Perini, MIT licensed
			// https://gist.github.com/dperini/729294
			// see also https://mathiasbynens.be/demo/url-regex
			// modified to allow protocol-relative URLs
			return this.optional( element ) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z0-9\u00a1-\uffff][a-z0-9\u00a1-\uffff_-]{0,62})?[a-z0-9\u00a1-\uffff]\.)+(?:[a-z\u00a1-\uffff]{2,}\.?))(?::\d{2,5})?(?:[/?#]\S*)?$/i.test( value );
		},

		// https://jqueryvalidation.org/date-method/
		date: ( function() {
			var called = false;

			return function( value, element ) {
				if ( !called ) {
					called = true;
					if ( this.settings.debug && window.console ) {
						console.warn(
							"The `date` method is deprecated and will be removed in version '2.0.0'.\n" +
							"Please don't use it, since it relies on the Date constructor, which\n" +
							"behaves very differently across browsers and locales. Use `dateISO`\n" +
							"instead or one of the locale specific methods in `localizations/`\n" +
							"and `additional-methods.js`."
						);
					}
				}

				return this.optional( element ) || !/Invalid|NaN/.test( new Date( value ).toString() );
			};
		}() ),

		// https://jqueryvalidation.org/dateISO-method/
		dateISO: function( value, element ) {
			return this.optional( element ) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test( value );
		},

		// https://jqueryvalidation.org/number-method/
		number: function( value, element ) {
			return this.optional( element ) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test( value );
		},

		// https://jqueryvalidation.org/digits-method/
		digits: function( value, element ) {
			return this.optional( element ) || /^\d+$/.test( value );
		},

		// https://jqueryvalidation.org/minlength-method/
		minlength: function( value, element, param ) {
			var length = Array.isArray( value ) ? value.length : this.getLength( value, element );
			return this.optional( element ) || length >= param;
		},

		// https://jqueryvalidation.org/maxlength-method/
		maxlength: function( value, element, param ) {
			var length = Array.isArray( value ) ? value.length : this.getLength( value, element );
			return this.optional( element ) || length <= param;
		},

		// https://jqueryvalidation.org/rangelength-method/
		rangelength: function( value, element, param ) {
			var length = Array.isArray( value ) ? value.length : this.getLength( value, element );
			return this.optional( element ) || ( length >= param[ 0 ] && length <= param[ 1 ] );
		},

		// https://jqueryvalidation.org/min-method/
		min: function( value, element, param ) {
			return this.optional( element ) || value >= param;
		},

		// https://jqueryvalidation.org/max-method/
		max: function( value, element, param ) {
			return this.optional( element ) || value <= param;
		},

		// https://jqueryvalidation.org/range-method/
		range: function( value, element, param ) {
			return this.optional( element ) || ( value >= param[ 0 ] && value <= param[ 1 ] );
		},

		// https://jqueryvalidation.org/step-method/
		step: function( value, element, param ) {
			var type = $( element ).attr( "type" ),
				errorMessage = "Step attribute on input type " + type + " is not supported.",
				supportedTypes = [ "text", "number", "range" ],
				re = new RegExp( "\\b" + type + "\\b" ),
				notSupported = type && !re.test( supportedTypes.join() ),
				decimalPlaces = function( num ) {
					var match = ( "" + num ).match( /(?:\.(\d+))?$/ );
					if ( !match ) {
						return 0;
					}

					// Number of digits right of decimal point.
					return match[ 1 ] ? match[ 1 ].length : 0;
				},
				toInt = function( num ) {
					return Math.round( num * Math.pow( 10, decimals ) );
				},
				valid = true,
				decimals;

			// Works only for text, number and range input types
			// TODO find a way to support input types date, datetime, datetime-local, month, time and week
			if ( notSupported ) {
				throw new Error( errorMessage );
			}

			decimals = decimalPlaces( param );

			// Value can't have too many decimals
			if ( decimalPlaces( value ) > decimals || toInt( value ) % toInt( param ) !== 0 ) {
				valid = false;
			}

			return this.optional( element ) || valid;
		},

		// https://jqueryvalidation.org/equalTo-method/
		equalTo: function( value, element, param ) {

			// Bind to the blur event of the target in order to revalidate whenever the target field is updated
			var target = $( param );
			if ( this.settings.onfocusout && target.not( ".validate-equalTo-blur" ).length ) {
				target.addClass( "validate-equalTo-blur" ).on( "blur.validate-equalTo", function() {
					$( element ).valid();
				} );
			}
			return value === target.val();
		},

		// https://jqueryvalidation.org/remote-method/
		remote: function( value, element, param, method ) {
			if ( this.optional( element ) ) {
				return "dependency-mismatch";
			}

			method = typeof method === "string" && method || "remote";

			var previous = this.previousValue( element, method ),
				validator, data, optionDataString;

			if ( !this.settings.messages[ element.name ] ) {
				this.settings.messages[ element.name ] = {};
			}
			previous.originalMessage = previous.originalMessage || this.settings.messages[ element.name ][ method ];
			this.settings.messages[ element.name ][ method ] = previous.message;

			param = typeof param === "string" && { url: param } || param;
			optionDataString = $.param( $.extend( { data: value }, param.data ) );
			if ( previous.old === optionDataString ) {
				return previous.valid;
			}

			previous.old = optionDataString;
			validator = this;
			this.startRequest( element );
			data = {};
			data[ element.name ] = value;
			$.ajax( $.extend( true, {
				mode: "abort",
				port: "validate" + element.name,
				dataType: "json",
				data: data,
				context: validator.currentForm,
				success: function( response ) {
					var valid = response === true || response === "true",
						errors, message, submitted;

					validator.settings.messages[ element.name ][ method ] = previous.originalMessage;
					if ( valid ) {
						submitted = validator.formSubmitted;
						validator.resetInternals();
						validator.toHide = validator.errorsFor( element );
						validator.formSubmitted = submitted;
						validator.successList.push( element );
						validator.invalid[ element.name ] = false;
						validator.showErrors();
					} else {
						errors = {};
						message = response || validator.defaultMessage( element, { method: method, parameters: value } );
						errors[ element.name ] = previous.message = message;
						validator.invalid[ element.name ] = true;
						validator.showErrors( errors );
					}
					previous.valid = valid;
					validator.stopRequest( element, valid );
				}
			}, param ) );
			return "pending";
		}
	}

} );

// Ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort()

var pendingRequests = {},
	ajax;

// Use a prefilter if available (1.5+)
if ( $.ajaxPrefilter ) {
	$.ajaxPrefilter( function( settings, _, xhr ) {
		var port = settings.port;
		if ( settings.mode === "abort" ) {
			if ( pendingRequests[ port ] ) {
				pendingRequests[ port ].abort();
			}
			pendingRequests[ port ] = xhr;
		}
	} );
} else {

	// Proxy ajax
	ajax = $.ajax;
	$.ajax = function( settings ) {
		var mode = ( "mode" in settings ? settings : $.ajaxSettings ).mode,
			port = ( "port" in settings ? settings : $.ajaxSettings ).port;
		if ( mode === "abort" ) {
			if ( pendingRequests[ port ] ) {
				pendingRequests[ port ].abort();
			}
			pendingRequests[ port ] = ajax.apply( this, arguments );
			return pendingRequests[ port ];
		}
		return ajax.apply( this, arguments );
	};
}
return $;
}));


/*!
 * jQuery Validation Plugin v1.19.3
 *
 * https://jqueryvalidation.org/
 *
 * Copyright (c) 2021 Jörn Zaefferer
 * Released under the MIT license
 */
(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "./jquery.validate"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

( function() {

	function stripHtml( value ) {

		// Remove html tags and space chars
		return value.replace( /<.[^<>]*?>/g, " " ).replace( /&nbsp;|&#160;/gi, " " )

		// Remove punctuation
		.replace( /[.(),;:!?%#$'\"_+=\/\-“”’]*/g, "" );
	}

	$.validator.addMethod( "maxWords", function( value, element, params ) {
		return this.optional( element ) || stripHtml( value ).match( /\b\w+\b/g ).length <= params;
	}, $.validator.format( "Please enter {0} words or less." ) );

	$.validator.addMethod( "minWords", function( value, element, params ) {
		return this.optional( element ) || stripHtml( value ).match( /\b\w+\b/g ).length >= params;
	}, $.validator.format( "Please enter at least {0} words." ) );

	$.validator.addMethod( "rangeWords", function( value, element, params ) {
		var valueStripped = stripHtml( value ),
			regex = /\b\w+\b/g;
		return this.optional( element ) || valueStripped.match( regex ).length >= params[ 0 ] && valueStripped.match( regex ).length <= params[ 1 ];
	}, $.validator.format( "Please enter between {0} and {1} words." ) );

}() );

/**
 * This is used in the United States to process payments, deposits,
 * or transfers using the Automated Clearing House (ACH) or Fedwire
 * systems. A very common use case would be to validate a form for
 * an ACH bill payment.
 */
$.validator.addMethod( "abaRoutingNumber", function( value ) {
	var checksum = 0;
	var tokens = value.split( "" );
	var length = tokens.length;

	// Length Check
	if ( length !== 9 ) {
		return false;
	}

	// Calc the checksum
	// https://en.wikipedia.org/wiki/ABA_routing_transit_number
	for ( var i = 0; i < length; i += 3 ) {
		checksum +=	parseInt( tokens[ i ], 10 )     * 3 +
					parseInt( tokens[ i + 1 ], 10 ) * 7 +
					parseInt( tokens[ i + 2 ], 10 );
	}

	// If not zero and divisible by 10 then valid
	if ( checksum !== 0 && checksum % 10 === 0 ) {
		return true;
	}

	return false;
}, "Please enter a valid routing number." );

// Accept a value from a file input based on a required mimetype
$.validator.addMethod( "accept", function( value, element, param ) {

	// Split mime on commas in case we have multiple types we can accept
	var typeParam = typeof param === "string" ? param.replace( /\s/g, "" ) : "image/*",
		optionalValue = this.optional( element ),
		i, file, regex;

	// Element is optional
	if ( optionalValue ) {
		return optionalValue;
	}

	if ( $( element ).attr( "type" ) === "file" ) {

		// Escape string to be used in the regex
		// see: https://stackoverflow.com/questions/3446170/escape-string-for-use-in-javascript-regex
		// Escape also "/*" as "/.*" as a wildcard
		typeParam = typeParam
				.replace( /[\-\[\]\/\{\}\(\)\+\?\.\\\^\$\|]/g, "\\$&" )
				.replace( /,/g, "|" )
				.replace( /\/\*/g, "/.*" );

		// Check if the element has a FileList before checking each file
		if ( element.files && element.files.length ) {
			regex = new RegExp( ".?(" + typeParam + ")$", "i" );
			for ( i = 0; i < element.files.length; i++ ) {
				file = element.files[ i ];

				// Grab the mimetype from the loaded file, verify it matches
				if ( !file.type.match( regex ) ) {
					return false;
				}
			}
		}
	}

	// Either return true because we've validated each file, or because the
	// browser does not support element.files and the FileList feature
	return true;
}, $.validator.format( "Please enter a value with a valid mimetype." ) );

$.validator.addMethod( "alphanumeric", function( value, element ) {
	return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );

/*
 * Dutch bank account numbers (not 'giro' numbers) have 9 digits
 * and pass the '11 check'.
 * We accept the notation with spaces, as that is common.
 * acceptable: 123456789 or 12 34 56 789
 */
$.validator.addMethod( "bankaccountNL", function( value, element ) {
	if ( this.optional( element ) ) {
		return true;
	}
	if ( !( /^[0-9]{9}|([0-9]{2} ){3}[0-9]{3}$/.test( value ) ) ) {
		return false;
	}

	// Now '11 check'
	var account = value.replace( / /g, "" ), // Remove spaces
		sum = 0,
		len = account.length,
		pos, factor, digit;
	for ( pos = 0; pos < len; pos++ ) {
		factor = len - pos;
		digit = account.substring( pos, pos + 1 );
		sum = sum + factor * digit;
	}
	return sum % 11 === 0;
}, "Please specify a valid bank account number" );

$.validator.addMethod( "bankorgiroaccountNL", function( value, element ) {
	return this.optional( element ) ||
			( $.validator.methods.bankaccountNL.call( this, value, element ) ) ||
			( $.validator.methods.giroaccountNL.call( this, value, element ) );
}, "Please specify a valid bank or giro account number" );

/**
 * BIC is the business identifier code (ISO 9362). This BIC check is not a guarantee for authenticity.
 *
 * BIC pattern: BBBBCCLLbbb (8 or 11 characters long; bbb is optional)
 *
 * Validation is case-insensitive. Please make sure to normalize input yourself.
 *
 * BIC definition in detail:
 * - First 4 characters - bank code (only letters)
 * - Next 2 characters - ISO 3166-1 alpha-2 country code (only letters)
 * - Next 2 characters - location code (letters and digits)
 *   a. shall not start with '0' or '1'
 *   b. second character must be a letter ('O' is not allowed) or digit ('0' for test (therefore not allowed), '1' denoting passive participant, '2' typically reverse-billing)
 * - Last 3 characters - branch code, optional (shall not start with 'X' except in case of 'XXX' for primary office) (letters and digits)
 */
$.validator.addMethod( "bic", function( value, element ) {
    return this.optional( element ) || /^([A-Z]{6}[A-Z2-9][A-NP-Z1-9])(X{3}|[A-WY-Z0-9][A-Z0-9]{2})?$/.test( value.toUpperCase() );
}, "Please specify a valid BIC code" );

/*
 * Código de identificación fiscal ( CIF ) is the tax identification code for Spanish legal entities
 * Further rules can be found in Spanish on http://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
 *
 * Spanish CIF structure:
 *
 * [ T ][ P ][ P ][ N ][ N ][ N ][ N ][ N ][ C ]
 *
 * Where:
 *
 * T: 1 character. Kind of Organization Letter: [ABCDEFGHJKLMNPQRSUVW]
 * P: 2 characters. Province.
 * N: 5 characters. Secuencial Number within the province.
 * C: 1 character. Control Digit: [0-9A-J].
 *
 * [ T ]: Kind of Organizations. Possible values:
 *
 *   A. Corporations
 *   B. LLCs
 *   C. General partnerships
 *   D. Companies limited partnerships
 *   E. Communities of goods
 *   F. Cooperative Societies
 *   G. Associations
 *   H. Communities of homeowners in horizontal property regime
 *   J. Civil Societies
 *   K. Old format
 *   L. Old format
 *   M. Old format
 *   N. Nonresident entities
 *   P. Local authorities
 *   Q. Autonomous bodies, state or not, and the like, and congregations and religious institutions
 *   R. Congregations and religious institutions (since 2008 ORDER EHA/451/2008)
 *   S. Organs of State Administration and regions
 *   V. Agrarian Transformation
 *   W. Permanent establishments of non-resident in Spain
 *
 * [ C ]: Control Digit. It can be a number or a letter depending on T value:
 * [ T ]  -->  [ C ]
 * ------    ----------
 *   A         Number
 *   B         Number
 *   E         Number
 *   H         Number
 *   K         Letter
 *   P         Letter
 *   Q         Letter
 *   S         Letter
 *
 */
$.validator.addMethod( "cifES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	var cifRegEx = new RegExp( /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/gi );
	var letter  = value.substring( 0, 1 ), // [ T ]
		number  = value.substring( 1, 8 ), // [ P ][ P ][ N ][ N ][ N ][ N ][ N ]
		control = value.substring( 8, 9 ), // [ C ]
		all_sum = 0,
		even_sum = 0,
		odd_sum = 0,
		i, n,
		control_digit,
		control_letter;

	function isOdd( n ) {
		return n % 2 === 0;
	}

	// Quick format test
	if ( value.length !== 9 || !cifRegEx.test( value ) ) {
		return false;
	}

	for ( i = 0; i < number.length; i++ ) {
		n = parseInt( number[ i ], 10 );

		// Odd positions
		if ( isOdd( i ) ) {

			// Odd positions are multiplied first.
			n *= 2;

			// If the multiplication is bigger than 10 we need to adjust
			odd_sum += n < 10 ? n : n - 9;

		// Even positions
		// Just sum them
		} else {
			even_sum += n;
		}
	}

	all_sum = even_sum + odd_sum;
	control_digit = ( 10 - ( all_sum ).toString().substr( -1 ) ).toString();
	control_digit = parseInt( control_digit, 10 ) > 9 ? "0" : control_digit;
	control_letter = "JABCDEFGHI".substr( control_digit, 1 ).toString();

	// Control must be a digit
	if ( letter.match( /[ABEH]/ ) ) {
		return control === control_digit;

	// Control must be a letter
	} else if ( letter.match( /[KPQS]/ ) ) {
		return control === control_letter;
	}

	// Can be either
	return control === control_digit || control === control_letter;

}, "Please specify a valid CIF number." );

/*
 * Brazillian CNH number (Carteira Nacional de Habilitacao) is the License Driver number.
 * CNH numbers have 11 digits in total: 9 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cnhBR", function( value ) {

  // Removing special characters from value
  value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

  // Checking value to have 11 digits only
  if ( value.length !== 11 ) {
    return false;
  }

  var sum = 0, dsc = 0, firstChar,
		firstCN, secondCN, i, j, v;

  firstChar = value.charAt( 0 );

  if ( new Array( 12 ).join( firstChar ) === value ) {
    return false;
  }

  // Step 1 - using first Check Number:
  for ( i = 0, j = 9, v = 0; i < 9; ++i, --j ) {
    sum += +( value.charAt( i ) * j );
  }

  firstCN = sum % 11;
  if ( firstCN >= 10 ) {
    firstCN = 0;
    dsc = 2;
  }

  sum = 0;
  for ( i = 0, j = 1, v = 0; i < 9; ++i, ++j ) {
    sum += +( value.charAt( i ) * j );
  }

  secondCN = sum % 11;
  if ( secondCN >= 10 ) {
    secondCN = 0;
  } else {
    secondCN = secondCN - dsc;
  }

  return ( String( firstCN ).concat( secondCN ) === value.substr( -2 ) );

}, "Please specify a valid CNH number" );

/*
 * Brazillian value number (Cadastrado de Pessoas Juridica).
 * value numbers have 14 digits in total: 12 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cnpjBR", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	// Removing no number
	value = value.replace( /[^\d]+/g, "" );

	// Checking value to have 14 digits only
	if ( value.length !== 14 ) {
		return false;
	}

	// Elimina values invalidos conhecidos
	if ( value === "00000000000000" ||
		value === "11111111111111" ||
		value === "22222222222222" ||
		value === "33333333333333" ||
		value === "44444444444444" ||
		value === "55555555555555" ||
		value === "66666666666666" ||
		value === "77777777777777" ||
		value === "88888888888888" ||
		value === "99999999999999" ) {
		return false;
	}

	// Valida DVs
	var tamanho = ( value.length - 2 );
	var numeros = value.substring( 0, tamanho );
	var digitos = value.substring( tamanho );
	var soma = 0;
	var pos = tamanho - 7;

	for ( var i = tamanho; i >= 1; i-- ) {
		soma += numeros.charAt( tamanho - i ) * pos--;
		if ( pos < 2 ) {
			pos = 9;
		}
	}

	var resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

	if ( resultado !== parseInt( digitos.charAt( 0 ), 10 ) ) {
		return false;
	}

	tamanho = tamanho + 1;
	numeros = value.substring( 0, tamanho );
	soma = 0;
	pos = tamanho - 7;

	for ( var il = tamanho; il >= 1; il-- ) {
		soma += numeros.charAt( tamanho - il ) * pos--;
		if ( pos < 2 ) {
			pos = 9;
		}
	}

	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

	if ( resultado !== parseInt( digitos.charAt( 1 ), 10 ) ) {
		return false;
	}

	return true;

}, "Please specify a CNPJ value number" );

/*
 * Brazillian CPF number (Cadastrado de Pessoas Físicas) is the equivalent of a Brazilian tax registration number.
 * CPF numbers have 11 digits in total: 9 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cpfBR", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	// Removing special characters from value
	value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

	// Checking value to have 11 digits only
	if ( value.length !== 11 ) {
		return false;
	}

	var sum = 0,
		firstCN, secondCN, checkResult, i;

	firstCN = parseInt( value.substring( 9, 10 ), 10 );
	secondCN = parseInt( value.substring( 10, 11 ), 10 );

	checkResult = function( sum, cn ) {
		var result = ( sum * 10 ) % 11;
		if ( ( result === 10 ) || ( result === 11 ) ) {
			result = 0;
		}
		return ( result === cn );
	};

	// Checking for dump data
	if ( value === "" ||
		value === "00000000000" ||
		value === "11111111111" ||
		value === "22222222222" ||
		value === "33333333333" ||
		value === "44444444444" ||
		value === "55555555555" ||
		value === "66666666666" ||
		value === "77777777777" ||
		value === "88888888888" ||
		value === "99999999999"
	) {
		return false;
	}

	// Step 1 - using first Check Number:
	for ( i = 1; i <= 9; i++ ) {
		sum = sum + parseInt( value.substring( i - 1, i ), 10 ) * ( 11 - i );
	}

	// If first Check Number (CN) is valid, move to Step 2 - using second Check Number:
	if ( checkResult( sum, firstCN ) ) {
		sum = 0;
		for ( i = 1; i <= 10; i++ ) {
			sum = sum + parseInt( value.substring( i - 1, i ), 10 ) * ( 12 - i );
		}
		return checkResult( sum, secondCN );
	}
	return false;

}, "Please specify a valid CPF number" );

// https://jqueryvalidation.org/creditcard-method/
// based on https://en.wikipedia.org/wiki/Luhn_algorithm
$.validator.addMethod( "creditcard", function( value, element ) {
	if ( this.optional( element ) ) {
		return "dependency-mismatch";
	}

	// Accept only spaces, digits and dashes
	if ( /[^0-9 \-]+/.test( value ) ) {
		return false;
	}

	var nCheck = 0,
		nDigit = 0,
		bEven = false,
		n, cDigit;

	value = value.replace( /\D/g, "" );

	// Basing min and max length on
	// https://dev.ean.com/general-info/valid-card-types/
	if ( value.length < 13 || value.length > 19 ) {
		return false;
	}

	for ( n = value.length - 1; n >= 0; n-- ) {
		cDigit = value.charAt( n );
		nDigit = parseInt( cDigit, 10 );
		if ( bEven ) {
			if ( ( nDigit *= 2 ) > 9 ) {
				nDigit -= 9;
			}
		}

		nCheck += nDigit;
		bEven = !bEven;
	}

	return ( nCheck % 10 ) === 0;
}, "Please enter a valid credit card number." );

/* NOTICE: Modified version of Castle.Components.Validator.CreditCardValidator
 * Redistributed under the Apache License 2.0 at http://www.apache.org/licenses/LICENSE-2.0
 * Valid Types: mastercard, visa, amex, dinersclub, enroute, discover, jcb, unknown, all (overrides all other settings)
 */
$.validator.addMethod( "creditcardtypes", function( value, element, param ) {
	if ( /[^0-9\-]+/.test( value ) ) {
		return false;
	}

	value = value.replace( /\D/g, "" );

	var validTypes = 0x0000;

	if ( param.mastercard ) {
		validTypes |= 0x0001;
	}
	if ( param.visa ) {
		validTypes |= 0x0002;
	}
	if ( param.amex ) {
		validTypes |= 0x0004;
	}
	if ( param.dinersclub ) {
		validTypes |= 0x0008;
	}
	if ( param.enroute ) {
		validTypes |= 0x0010;
	}
	if ( param.discover ) {
		validTypes |= 0x0020;
	}
	if ( param.jcb ) {
		validTypes |= 0x0040;
	}
	if ( param.unknown ) {
		validTypes |= 0x0080;
	}
	if ( param.all ) {
		validTypes = 0x0001 | 0x0002 | 0x0004 | 0x0008 | 0x0010 | 0x0020 | 0x0040 | 0x0080;
	}
	if ( validTypes & 0x0001 && ( /^(5[12345])/.test( value ) || /^(2[234567])/.test( value ) ) ) { // Mastercard
		return value.length === 16;
	}
	if ( validTypes & 0x0002 && /^(4)/.test( value ) ) { // Visa
		return value.length === 16;
	}
	if ( validTypes & 0x0004 && /^(3[47])/.test( value ) ) { // Amex
		return value.length === 15;
	}
	if ( validTypes & 0x0008 && /^(3(0[012345]|[68]))/.test( value ) ) { // Dinersclub
		return value.length === 14;
	}
	if ( validTypes & 0x0010 && /^(2(014|149))/.test( value ) ) { // Enroute
		return value.length === 15;
	}
	if ( validTypes & 0x0020 && /^(6011)/.test( value ) ) { // Discover
		return value.length === 16;
	}
	if ( validTypes & 0x0040 && /^(3)/.test( value ) ) { // Jcb
		return value.length === 16;
	}
	if ( validTypes & 0x0040 && /^(2131|1800)/.test( value ) ) { // Jcb
		return value.length === 15;
	}
	if ( validTypes & 0x0080 ) { // Unknown
		return true;
	}
	return false;
}, "Please enter a valid credit card number." );

/**
 * Validates currencies with any given symbols by @jameslouiz
 * Symbols can be optional or required. Symbols required by default
 *
 * Usage examples:
 *  currency: ["£", false] - Use false for soft currency validation
 *  currency: ["$", false]
 *  currency: ["RM", false] - also works with text based symbols such as "RM" - Malaysia Ringgit etc
 *
 *  <input class="currencyInput" name="currencyInput">
 *
 * Soft symbol checking
 *  currencyInput: {
 *     currency: ["$", false]
 *  }
 *
 * Strict symbol checking (default)
 *  currencyInput: {
 *     currency: "$"
 *     //OR
 *     currency: ["$", true]
 *  }
 *
 * Multiple Symbols
 *  currencyInput: {
 *     currency: "$,£,¢"
 *  }
 */
$.validator.addMethod( "currency", function( value, element, param ) {
    var isParamString = typeof param === "string",
        symbol = isParamString ? param : param[ 0 ],
        soft = isParamString ? true : param[ 1 ],
        regex;

    symbol = symbol.replace( /,/g, "" );
    symbol = soft ? symbol + "]" : symbol + "]?";
    regex = "^[" + symbol + "([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)$";
    regex = new RegExp( regex );
    return this.optional( element ) || regex.test( value );

}, "Please specify a valid currency" );

$.validator.addMethod( "dateFA", function( value, element ) {
	return this.optional( element ) || /^[1-4]\d{3}\/((0?[1-6]\/((3[0-1])|([1-2][0-9])|(0?[1-9])))|((1[0-2]|(0?[7-9]))\/(30|([1-2][0-9])|(0?[1-9]))))$/.test( value );
}, $.validator.messages.date );

/**
 * Return true, if the value is a valid date, also making this formal check dd/mm/yyyy.
 *
 * @example $.validator.methods.date("01/01/1900")
 * @result true
 *
 * @example $.validator.methods.date("01/13/1990")
 * @result false
 *
 * @example $.validator.methods.date("01.01.1900")
 * @result false
 *
 * @example <input name="pippo" class="{dateITA:true}" />
 * @desc Declares an optional input element whose value must be a valid date.
 *
 * @name $.validator.methods.dateITA
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "dateITA", function( value, element ) {
	var check = false,
		re = /^\d{1,2}\/\d{1,2}\/\d{4}$/,
		adata, gg, mm, aaaa, xdata;
	if ( re.test( value ) ) {
		adata = value.split( "/" );
		gg = parseInt( adata[ 0 ], 10 );
		mm = parseInt( adata[ 1 ], 10 );
		aaaa = parseInt( adata[ 2 ], 10 );
		xdata = new Date( Date.UTC( aaaa, mm - 1, gg, 12, 0, 0, 0 ) );
		if ( ( xdata.getUTCFullYear() === aaaa ) && ( xdata.getUTCMonth() === mm - 1 ) && ( xdata.getUTCDate() === gg ) ) {
			check = true;
		} else {
			check = false;
		}
	} else {
		check = false;
	}
	return this.optional( element ) || check;
}, $.validator.messages.date );

$.validator.addMethod( "dateNL", function( value, element ) {
	return this.optional( element ) || /^(0?[1-9]|[12]\d|3[01])[\.\/\-](0?[1-9]|1[012])[\.\/\-]([12]\d)?(\d\d)$/.test( value );
}, $.validator.messages.date );

// Older "accept" file extension method. Old docs: http://docs.jquery.com/Plugins/Validation/Methods/accept
$.validator.addMethod( "extension", function( value, element, param ) {
	param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|gif";
	return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
}, $.validator.format( "Please enter a value with a valid extension." ) );

/**
 * Dutch giro account numbers (not bank numbers) have max 7 digits
 */
$.validator.addMethod( "giroaccountNL", function( value, element ) {
	return this.optional( element ) || /^[0-9]{1,7}$/.test( value );
}, "Please specify a valid giro account number" );

$.validator.addMethod( "greaterThan", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-greaterThan-blur" ).length ) {
        target.addClass( "validate-greaterThan-blur" ).on( "blur.validate-greaterThan", function() {
            $( element ).valid();
        } );
    }

    return value > target.val();
}, "Please enter a greater value." );

$.validator.addMethod( "greaterThanEqual", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-greaterThanEqual-blur" ).length ) {
        target.addClass( "validate-greaterThanEqual-blur" ).on( "blur.validate-greaterThanEqual", function() {
            $( element ).valid();
        } );
    }

    return value >= target.val();
}, "Please enter a greater value." );

/**
 * IBAN is the international bank account number.
 * It has a country - specific format, that is checked here too
 *
 * Validation is case-insensitive. Please make sure to normalize input yourself.
 */
$.validator.addMethod( "iban", function( value, element ) {

	// Some quick simple tests to prevent needless work
	if ( this.optional( element ) ) {
		return true;
	}

	// Remove spaces and to upper case
	var iban = value.replace( / /g, "" ).toUpperCase(),
		ibancheckdigits = "",
		leadingZeroes = true,
		cRest = "",
		cOperator = "",
		countrycode, ibancheck, charAt, cChar, bbanpattern, bbancountrypatterns, ibanregexp, i, p;

	// Check for IBAN code length.
	// It contains:
	// country code ISO 3166-1 - two letters,
	// two check digits,
	// Basic Bank Account Number (BBAN) - up to 30 chars
	var minimalIBANlength = 5;
	if ( iban.length < minimalIBANlength ) {
		return false;
	}

	// Check the country code and find the country specific format
	countrycode = iban.substring( 0, 2 );
	bbancountrypatterns = {
		"AL": "\\d{8}[\\dA-Z]{16}",
		"AD": "\\d{8}[\\dA-Z]{12}",
		"AT": "\\d{16}",
		"AZ": "[\\dA-Z]{4}\\d{20}",
		"BE": "\\d{12}",
		"BH": "[A-Z]{4}[\\dA-Z]{14}",
		"BA": "\\d{16}",
		"BR": "\\d{23}[A-Z][\\dA-Z]",
		"BG": "[A-Z]{4}\\d{6}[\\dA-Z]{8}",
		"CR": "\\d{17}",
		"HR": "\\d{17}",
		"CY": "\\d{8}[\\dA-Z]{16}",
		"CZ": "\\d{20}",
		"DK": "\\d{14}",
		"DO": "[A-Z]{4}\\d{20}",
		"EE": "\\d{16}",
		"FO": "\\d{14}",
		"FI": "\\d{14}",
		"FR": "\\d{10}[\\dA-Z]{11}\\d{2}",
		"GE": "[\\dA-Z]{2}\\d{16}",
		"DE": "\\d{18}",
		"GI": "[A-Z]{4}[\\dA-Z]{15}",
		"GR": "\\d{7}[\\dA-Z]{16}",
		"GL": "\\d{14}",
		"GT": "[\\dA-Z]{4}[\\dA-Z]{20}",
		"HU": "\\d{24}",
		"IS": "\\d{22}",
		"IE": "[\\dA-Z]{4}\\d{14}",
		"IL": "\\d{19}",
		"IT": "[A-Z]\\d{10}[\\dA-Z]{12}",
		"KZ": "\\d{3}[\\dA-Z]{13}",
		"KW": "[A-Z]{4}[\\dA-Z]{22}",
		"LV": "[A-Z]{4}[\\dA-Z]{13}",
		"LB": "\\d{4}[\\dA-Z]{20}",
		"LI": "\\d{5}[\\dA-Z]{12}",
		"LT": "\\d{16}",
		"LU": "\\d{3}[\\dA-Z]{13}",
		"MK": "\\d{3}[\\dA-Z]{10}\\d{2}",
		"MT": "[A-Z]{4}\\d{5}[\\dA-Z]{18}",
		"MR": "\\d{23}",
		"MU": "[A-Z]{4}\\d{19}[A-Z]{3}",
		"MC": "\\d{10}[\\dA-Z]{11}\\d{2}",
		"MD": "[\\dA-Z]{2}\\d{18}",
		"ME": "\\d{18}",
		"NL": "[A-Z]{4}\\d{10}",
		"NO": "\\d{11}",
		"PK": "[\\dA-Z]{4}\\d{16}",
		"PS": "[\\dA-Z]{4}\\d{21}",
		"PL": "\\d{24}",
		"PT": "\\d{21}",
		"RO": "[A-Z]{4}[\\dA-Z]{16}",
		"SM": "[A-Z]\\d{10}[\\dA-Z]{12}",
		"SA": "\\d{2}[\\dA-Z]{18}",
		"RS": "\\d{18}",
		"SK": "\\d{20}",
		"SI": "\\d{15}",
		"ES": "\\d{20}",
		"SE": "\\d{20}",
		"CH": "\\d{5}[\\dA-Z]{12}",
		"TN": "\\d{20}",
		"TR": "\\d{5}[\\dA-Z]{17}",
		"AE": "\\d{3}\\d{16}",
		"GB": "[A-Z]{4}\\d{14}",
		"VG": "[\\dA-Z]{4}\\d{16}"
	};

	bbanpattern = bbancountrypatterns[ countrycode ];

	// As new countries will start using IBAN in the
	// future, we only check if the countrycode is known.
	// This prevents false negatives, while almost all
	// false positives introduced by this, will be caught
	// by the checksum validation below anyway.
	// Strict checking should return FALSE for unknown
	// countries.
	if ( typeof bbanpattern !== "undefined" ) {
		ibanregexp = new RegExp( "^[A-Z]{2}\\d{2}" + bbanpattern + "$", "" );
		if ( !( ibanregexp.test( iban ) ) ) {
			return false; // Invalid country specific format
		}
	}

	// Now check the checksum, first convert to digits
	ibancheck = iban.substring( 4, iban.length ) + iban.substring( 0, 4 );
	for ( i = 0; i < ibancheck.length; i++ ) {
		charAt = ibancheck.charAt( i );
		if ( charAt !== "0" ) {
			leadingZeroes = false;
		}
		if ( !leadingZeroes ) {
			ibancheckdigits += "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf( charAt );
		}
	}

	// Calculate the result of: ibancheckdigits % 97
	for ( p = 0; p < ibancheckdigits.length; p++ ) {
		cChar = ibancheckdigits.charAt( p );
		cOperator = "" + cRest + "" + cChar;
		cRest = cOperator % 97;
	}
	return cRest === 1;
}, "Please specify a valid IBAN" );

$.validator.addMethod( "integer", function( value, element ) {
	return this.optional( element ) || /^-?\d+$/.test( value );
}, "A positive or negative non-decimal number please" );

$.validator.addMethod( "ipv4", function( value, element ) {
	return this.optional( element ) || /^(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)$/i.test( value );
}, "Please enter a valid IP v4 address." );

$.validator.addMethod( "ipv6", function( value, element ) {
	return this.optional( element ) || /^((([0-9A-Fa-f]{1,4}:){7}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}:[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){5}:([0-9A-Fa-f]{1,4}:)?[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){4}:([0-9A-Fa-f]{1,4}:){0,2}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){3}:([0-9A-Fa-f]{1,4}:){0,3}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){2}:([0-9A-Fa-f]{1,4}:){0,4}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(([0-9A-Fa-f]{1,4}:){0,5}:((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(::([0-9A-Fa-f]{1,4}:){0,5}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|([0-9A-Fa-f]{1,4}::([0-9A-Fa-f]{1,4}:){0,5}[0-9A-Fa-f]{1,4})|(::([0-9A-Fa-f]{1,4}:){0,6}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){1,7}:))$/i.test( value );
}, "Please enter a valid IP v6 address." );

$.validator.addMethod( "lessThan", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-lessThan-blur" ).length ) {
        target.addClass( "validate-lessThan-blur" ).on( "blur.validate-lessThan", function() {
            $( element ).valid();
        } );
    }

    return value < target.val();
}, "Please enter a lesser value." );

$.validator.addMethod( "lessThanEqual", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-lessThanEqual-blur" ).length ) {
        target.addClass( "validate-lessThanEqual-blur" ).on( "blur.validate-lessThanEqual", function() {
            $( element ).valid();
        } );
    }

    return value <= target.val();
}, "Please enter a lesser value." );

$.validator.addMethod( "lettersonly", function( value, element ) {
	return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "Letters only please" );

$.validator.addMethod( "letterswithbasicpunc", function( value, element ) {
	return this.optional( element ) || /^[a-z\-.,()'"\s]+$/i.test( value );
}, "Letters or punctuation only please" );

// Limit the number of files in a FileList.
$.validator.addMethod( "maxfiles", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length > param ) {
			return false;
		}
	}

	return true;
}, $.validator.format( "Please select no more than {0} files." ) );

// Limit the size of each individual file in a FileList.
$.validator.addMethod( "maxsize", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			for ( var i = 0; i < element.files.length; i++ ) {
				if ( element.files[ i ].size > param ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "File size must not exceed {0} bytes each." ) );

// Limit the size of all files in a FileList.
$.validator.addMethod( "maxsizetotal", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			var totalSize = 0;

			for ( var i = 0; i < element.files.length; i++ ) {
				totalSize += element.files[ i ].size;
				if ( totalSize > param ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "Total size of all files must not exceed {0} bytes." ) );


$.validator.addMethod( "mobileNL", function( value, element ) {
	return this.optional( element ) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)6((\s|\s?\-\s?)?[0-9]){8}$/.test( value );
}, "Please specify a valid mobile number" );

$.validator.addMethod( "mobileRU", function( phone_number, element ) {
	var ruPhone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || ruPhone_number.length > 9 && /^((\+7|7|8)+([0-9]){10})$/.test( ruPhone_number );
}, "Please specify a valid mobile number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */
$.validator.addMethod( "mobileUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?|0)7(?:[1345789]\d{2}|624)\s?\d{3}\s?\d{3})$/ );
}, "Please specify a valid mobile number" );

$.validator.addMethod( "netmask", function( value, element ) {
    return this.optional( element ) || /^(254|252|248|240|224|192|128)\.0\.0\.0|255\.(254|252|248|240|224|192|128|0)\.0\.0|255\.255\.(254|252|248|240|224|192|128|0)\.0|255\.255\.255\.(254|252|248|240|224|192|128|0)/i.test( value );
}, "Please enter a valid netmask." );

/*
 * The NIE (Número de Identificación de Extranjero) is a Spanish tax identification number assigned by the Spanish
 * authorities to any foreigner.
 *
 * The NIE is the equivalent of a Spaniards Número de Identificación Fiscal (NIF) which serves as a fiscal
 * identification number. The CIF number (Certificado de Identificación Fiscal) is equivalent to the NIF, but applies to
 * companies rather than individuals. The NIE consists of an 'X' or 'Y' followed by 7 or 8 digits then another letter.
 */
$.validator.addMethod( "nieES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	var nieRegEx = new RegExp( /^[MXYZ]{1}[0-9]{7,8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$/gi );
	var validChars = "TRWAGMYFPDXBNJZSQVHLCKET",
		letter = value.substr( value.length - 1 ).toUpperCase(),
		number;

	value = value.toString().toUpperCase();

	// Quick format test
	if ( value.length > 10 || value.length < 9 || !nieRegEx.test( value ) ) {
		return false;
	}

	// X means same number
	// Y means number + 10000000
	// Z means number + 20000000
	value = value.replace( /^[X]/, "0" )
		.replace( /^[Y]/, "1" )
		.replace( /^[Z]/, "2" );

	number = value.length === 9 ? value.substr( 0, 8 ) : value.substr( 0, 9 );

	return validChars.charAt( parseInt( number, 10 ) % 23 ) === letter;

}, "Please specify a valid NIE number." );

/*
 * The Número de Identificación Fiscal ( NIF ) is the way tax identification used in Spain for individuals
 */
$.validator.addMethod( "nifES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	value = value.toUpperCase();

	// Basic format test
	if ( !value.match( "((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)" ) ) {
		return false;
	}

	// Test NIF
	if ( /^[0-9]{8}[A-Z]{1}$/.test( value ) ) {
		return ( "TRWAGMYFPDXBNJZSQVHLCKE".charAt( value.substring( 8, 0 ) % 23 ) === value.charAt( 8 ) );
	}

	// Test specials NIF (starts with K, L or M)
	if ( /^[KLM]{1}/.test( value ) ) {
		return ( value[ 8 ] === "TRWAGMYFPDXBNJZSQVHLCKE".charAt( value.substring( 8, 1 ) % 23 ) );
	}

	return false;

}, "Please specify a valid NIF number." );

/*
 * Numer identyfikacji podatkowej ( NIP ) is the way tax identification used in Poland for companies
 */
$.validator.addMethod( "nipPL", function( value ) {
	"use strict";

	value = value.replace( /[^0-9]/g, "" );

	if ( value.length !== 10 ) {
		return false;
	}

	var arrSteps = [ 6, 5, 7, 2, 3, 4, 5, 6, 7 ];
	var intSum = 0;
	for ( var i = 0; i < 9; i++ ) {
		intSum += arrSteps[ i ] * value[ i ];
	}
	var int2 = intSum % 11;
	var intControlNr = ( int2 === 10 ) ? 0 : int2;

	return ( intControlNr === parseInt( value[ 9 ], 10 ) );
}, "Please specify a valid NIP number." );

/**
 * Created for project jquery-validation.
 * @Description Brazillian PIS or NIS number (Número de Identificação Social Pis ou Pasep) is the equivalent of a
 * Brazilian tax registration number NIS of PIS numbers have 11 digits in total: 10 numbers followed by 1 check numbers
 * that are being used for validation.
 * @copyright (c) 21/08/2018 13:14, Cleiton da Silva Mendonça
 * @author Cleiton da Silva Mendonça <cleiton.mendonca@gmail.com>
 * @link http://gitlab.com/csmendonca Gitlab of Cleiton da Silva Mendonça
 * @link http://github.com/csmendonca Github of Cleiton da Silva Mendonça
 */
$.validator.addMethod( "nisBR", function( value ) {
	var number;
	var cn;
	var sum = 0;
	var dv;
	var count;
	var multiplier;

	// Removing special characters from value
	value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

	// Checking value to have 11 digits only
	if ( value.length !== 11 ) {
		return false;
	}

	//Get check number of value
	cn = parseInt( value.substring( 10, 11 ), 10 );

	//Get number with 10 digits of the value
	number = parseInt( value.substring( 0, 10 ), 10 );

	for ( count = 2; count < 12; count++ ) {
		multiplier = count;
		if ( count === 10 ) {
			multiplier = 2;
		}
		if ( count === 11 ) {
			multiplier = 3;
		}
		sum += ( ( number % 10 ) * multiplier );
		number = parseInt( number / 10, 10 );
	}
	dv = ( sum % 11 );

	if ( dv > 1 ) {
		dv = ( 11 - dv );
	} else {
		dv = 0;
	}

	if ( cn === dv ) {
		return true;
	} else {
		return false;
	}
}, "Please specify a valid NIS/PIS number" );

$.validator.addMethod( "notEqualTo", function( value, element, param ) {
	return this.optional( element ) || !$.validator.methods.equalTo.call( this, value, element, param );
}, "Please enter a different value, values must not be the same." );

$.validator.addMethod( "nowhitespace", function( value, element ) {
	return this.optional( element ) || /^\S+$/i.test( value );
}, "No white space please" );

/**
* Return true if the field value matches the given format RegExp
*
* @example $.validator.methods.pattern("AR1004",element,/^AR\d{4}$/)
* @result true
*
* @example $.validator.methods.pattern("BR1004",element,/^AR\d{4}$/)
* @result false
*
* @name $.validator.methods.pattern
* @type Boolean
* @cat Plugins/Validate/Methods
*/
$.validator.addMethod( "pattern", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}
	if ( typeof param === "string" ) {
		param = new RegExp( "^(?:" + param + ")$" );
	}
	return param.test( value );
}, "Invalid format." );

/**
 * Dutch phone numbers have 10 digits (or 11 and start with +31).
 */
$.validator.addMethod( "phoneNL", function( value, element ) {
	return this.optional( element ) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)[1-9]((\s|\s?\-\s?)?[0-9]){8}$/.test( value );
}, "Please specify a valid phone number." );

/**
 * Polish telephone numbers have 9 digits.
 *
 * Mobile phone numbers starts with following digits:
 * 45, 50, 51, 53, 57, 60, 66, 69, 72, 73, 78, 79, 88.
 *
 * Fixed-line numbers starts with area codes:
 * 12, 13, 14, 15, 16, 17, 18, 22, 23, 24, 25, 29, 32, 33,
 * 34, 41, 42, 43, 44, 46, 48, 52, 54, 55, 56, 58, 59, 61,
 * 62, 63, 65, 67, 68, 71, 74, 75, 76, 77, 81, 82, 83, 84,
 * 85, 86, 87, 89, 91, 94, 95.
 *
 * Ministry of National Defence numbers and VoIP numbers starts with 26 and 39.
 *
 * Excludes intelligent networks (premium rate, shared cost, free phone numbers).
 *
 * Poland National Numbering Plan http://www.itu.int/oth/T02020000A8/en
 */
$.validator.addMethod( "phonePL", function( phone_number, element ) {
	phone_number = phone_number.replace( /\s+/g, "" );
	var regexp = /^(?:(?:(?:\+|00)?48)|(?:\(\+?48\)))?(?:1[2-8]|2[2-69]|3[2-49]|4[1-68]|5[0-9]|6[0-35-9]|[7-8][1-9]|9[145])\d{7}$/;
	return this.optional( element ) || regexp.test( phone_number );
}, "Please specify a valid phone number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */

// Matches UK landline + mobile, accepting only 01-3 for landline or 07 for mobile to exclude many premium numbers
$.validator.addMethod( "phonesUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?|0)(?:1\d{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/ );
}, "Please specify a valid uk phone number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */
$.validator.addMethod( "phoneUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/ );
}, "Please specify a valid phone number" );

/**
 * Matches US phone number format
 *
 * where the area code may not start with 1 and the prefix may not start with 1
 * allows '-' or ' ' as a separator and allows parens around area code
 * some people may want to put a '1' in front of their number
 *
 * 1(212)-999-2345 or
 * 212 999 2344 or
 * 212-999-0983
 *
 * but not
 * 111-123-5434
 * and not
 * 212 123 4567
 */
$.validator.addMethod( "phoneUS", function( phone_number, element ) {
	phone_number = phone_number.replace( /\s+/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]\d{2}-?\d{4}$/ );
}, "Please specify a valid phone number" );

/*
* Valida CEPs do brasileiros:
*
* Formatos aceitos:
* 99999-999
* 99.999-999
* 99999999
*/
$.validator.addMethod( "postalcodeBR", function( cep_value, element ) {
	return this.optional( element ) || /^\d{2}.\d{3}-\d{3}?$|^\d{5}-?\d{3}?$/.test( cep_value );
}, "Informe um CEP válido." );

/**
 * Matches a valid Canadian Postal Code
 *
 * @example jQuery.validator.methods.postalCodeCA( "H0H 0H0", element )
 * @result true
 *
 * @example jQuery.validator.methods.postalCodeCA( "H0H0H0", element )
 * @result false
 *
 * @name jQuery.validator.methods.postalCodeCA
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "postalCodeCA", function( value, element ) {
	return this.optional( element ) || /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ] *\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i.test( value );
}, "Please specify a valid postal code" );

/* Matches Italian postcode (CAP) */
$.validator.addMethod( "postalcodeIT", function( value, element ) {
	return this.optional( element ) || /^\d{5}$/.test( value );
}, "Please specify a valid postal code" );

$.validator.addMethod( "postalcodeNL", function( value, element ) {
	return this.optional( element ) || /^[1-9][0-9]{3}\s?[a-zA-Z]{2}$/.test( value );
}, "Please specify a valid postal code" );

// Matches UK postcode. Does not match to UK Channel Islands that have their own postcodes (non standard UK)
$.validator.addMethod( "postcodeUK", function( value, element ) {
	return this.optional( element ) || /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i.test( value );
}, "Please specify a valid UK postcode" );

/*
 * Lets you say "at least X inputs that match selector Y must be filled."
 *
 * The end result is that neither of these inputs:
 *
 *	<input class="productinfo" name="partnumber">
 *	<input class="productinfo" name="description">
 *
 *	...will validate unless at least one of them is filled.
 *
 * partnumber:	{require_from_group: [1,".productinfo"]},
 * description: {require_from_group: [1,".productinfo"]}
 *
 * options[0]: number of fields that must be filled in the group
 * options[1]: CSS selector that defines the group of conditionally required fields
 */
$.validator.addMethod( "require_from_group", function( value, element, options ) {
	var $fields = $( options[ 1 ], element.form ),
		$fieldsFirst = $fields.eq( 0 ),
		validator = $fieldsFirst.data( "valid_req_grp" ) ? $fieldsFirst.data( "valid_req_grp" ) : $.extend( {}, this ),
		isValid = $fields.filter( function() {
			return validator.elementValue( this );
		} ).length >= options[ 0 ];

	// Store the cloned validator for future validation
	$fieldsFirst.data( "valid_req_grp", validator );

	// If element isn't being validated, run each require_from_group field's validation rules
	if ( !$( element ).data( "being_validated" ) ) {
		$fields.data( "being_validated", true );
		$fields.each( function() {
			validator.element( this );
		} );
		$fields.data( "being_validated", false );
	}
	return isValid;
}, $.validator.format( "Please fill at least {0} of these fields." ) );

/*
 * Lets you say "either at least X inputs that match selector Y must be filled,
 * OR they must all be skipped (left blank)."
 *
 * The end result, is that none of these inputs:
 *
 *	<input class="productinfo" name="partnumber">
 *	<input class="productinfo" name="description">
 *	<input class="productinfo" name="color">
 *
 *	...will validate unless either at least two of them are filled,
 *	OR none of them are.
 *
 * partnumber:	{skip_or_fill_minimum: [2,".productinfo"]},
 * description: {skip_or_fill_minimum: [2,".productinfo"]},
 * color:		{skip_or_fill_minimum: [2,".productinfo"]}
 *
 * options[0]: number of fields that must be filled in the group
 * options[1]: CSS selector that defines the group of conditionally required fields
 *
 */
$.validator.addMethod( "skip_or_fill_minimum", function( value, element, options ) {
	var $fields = $( options[ 1 ], element.form ),
		$fieldsFirst = $fields.eq( 0 ),
		validator = $fieldsFirst.data( "valid_skip" ) ? $fieldsFirst.data( "valid_skip" ) : $.extend( {}, this ),
		numberFilled = $fields.filter( function() {
			return validator.elementValue( this );
		} ).length,
		isValid = numberFilled === 0 || numberFilled >= options[ 0 ];

	// Store the cloned validator for future validation
	$fieldsFirst.data( "valid_skip", validator );

	// If element isn't being validated, run each skip_or_fill_minimum field's validation rules
	if ( !$( element ).data( "being_validated" ) ) {
		$fields.data( "being_validated", true );
		$fields.each( function() {
			validator.element( this );
		} );
		$fields.data( "being_validated", false );
	}
	return isValid;
}, $.validator.format( "Please either skip these fields or fill at least {0} of them." ) );

/* Validates US States and/or Territories by @jdforsythe
 * Can be case insensitive or require capitalization - default is case insensitive
 * Can include US Territories or not - default does not
 * Can include US Military postal abbreviations (AA, AE, AP) - default does not
 *
 * Note: "States" always includes DC (District of Colombia)
 *
 * Usage examples:
 *
 *  This is the default - case insensitive, no territories, no military zones
 *  stateInput: {
 *     caseSensitive: false,
 *     includeTerritories: false,
 *     includeMilitary: false
 *  }
 *
 *  Only allow capital letters, no territories, no military zones
 *  stateInput: {
 *     caseSensitive: false
 *  }
 *
 *  Case insensitive, include territories but not military zones
 *  stateInput: {
 *     includeTerritories: true
 *  }
 *
 *  Only allow capital letters, include territories and military zones
 *  stateInput: {
 *     caseSensitive: true,
 *     includeTerritories: true,
 *     includeMilitary: true
 *  }
 *
 */
$.validator.addMethod( "stateUS", function( value, element, options ) {
	var isDefault = typeof options === "undefined",
		caseSensitive = ( isDefault || typeof options.caseSensitive === "undefined" ) ? false : options.caseSensitive,
		includeTerritories = ( isDefault || typeof options.includeTerritories === "undefined" ) ? false : options.includeTerritories,
		includeMilitary = ( isDefault || typeof options.includeMilitary === "undefined" ) ? false : options.includeMilitary,
		regex;

	if ( !includeTerritories && !includeMilitary ) {
		regex = "^(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$";
	} else if ( includeTerritories && includeMilitary ) {
		regex = "^(A[AEKLPRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$";
	} else if ( includeTerritories ) {
		regex = "^(A[KLRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$";
	} else {
		regex = "^(A[AEKLPRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$";
	}

	regex = caseSensitive ? new RegExp( regex ) : new RegExp( regex, "i" );
	return this.optional( element ) || regex.test( value );
}, "Please specify a valid state" );

// TODO check if value starts with <, otherwise don't try stripping anything
$.validator.addMethod( "strippedminlength", function( value, element, param ) {
	return $( value ).text().length >= param;
}, $.validator.format( "Please enter at least {0} characters" ) );

$.validator.addMethod( "time", function( value, element ) {
	return this.optional( element ) || /^([01]\d|2[0-3]|[0-9])(:[0-5]\d){1,2}$/.test( value );
}, "Please enter a valid time, between 00:00 and 23:59" );

$.validator.addMethod( "time12h", function( value, element ) {
	return this.optional( element ) || /^((0?[1-9]|1[012])(:[0-5]\d){1,2}(\ ?[AP]M))$/i.test( value );
}, "Please enter a valid time in 12-hour am/pm format" );

// Same as url, but TLD is optional
$.validator.addMethod( "url2", function( value, element ) {
	return this.optional( element ) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test( value );
}, $.validator.messages.url );

/**
 * Return true, if the value is a valid vehicle identification number (VIN).
 *
 * Works with all kind of text inputs.
 *
 * @example <input type="text" size="20" name="VehicleID" class="{required:true,vinUS:true}" />
 * @desc Declares a required input element whose value must be a valid vehicle identification number.
 *
 * @name $.validator.methods.vinUS
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "vinUS", function( v ) {
	if ( v.length !== 17 ) {
		return false;
	}

	var LL = [ "A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "P", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" ],
		VL = [ 1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 7, 9, 2, 3, 4, 5, 6, 7, 8, 9 ],
		FL = [ 8, 7, 6, 5, 4, 3, 2, 10, 0, 9, 8, 7, 6, 5, 4, 3, 2 ],
		rs = 0,
		i, n, d, f, cd, cdv;

	for ( i = 0; i < 17; i++ ) {
		f = FL[ i ];
		d = v.slice( i, i + 1 );
		if ( i === 8 ) {
			cdv = d;
		}
		if ( !isNaN( d ) ) {
			d *= f;
		} else {
			for ( n = 0; n < LL.length; n++ ) {
				if ( d.toUpperCase() === LL[ n ] ) {
					d = VL[ n ];
					d *= f;
					if ( isNaN( cdv ) && n === 8 ) {
						cdv = LL[ n ];
					}
					break;
				}
			}
		}
		rs += d;
	}
	cd = rs % 11;
	if ( cd === 10 ) {
		cd = "X";
	}
	if ( cd === cdv ) {
		return true;
	}
	return false;
}, "The specified vehicle identification number (VIN) is invalid." );

$.validator.addMethod( "zipcodeUS", function( value, element ) {
	return this.optional( element ) || /^\d{5}(-\d{4})?$/.test( value );
}, "The specified US ZIP Code is invalid" );

$.validator.addMethod( "ziprange", function( value, element ) {
	return this.optional( element ) || /^90[2-5]\d\{2\}-\d{4}$/.test( value );
}, "Your ZIP-code must be in the range 902xx-xxxx to 905xx-xxxx" );
return $;
}));
;
! function(t) {
  var n = {};

  function e(r) {
      if (n[r]) return n[r].exports;
      var i = n[r] = {
          i: r,
          l: !1,
          exports: {}
      };
      return t[r].call(i.exports, i, i.exports, e), i.l = !0, i.exports
  }
  e.m = t, e.c = n, e.d = function(t, n, r) {
      e.o(t, n) || Object.defineProperty(t, n, {
          enumerable: !0,
          get: r
      })
  }, e.r = function(t) {
      "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
          value: "Module"
      }), Object.defineProperty(t, "__esModule", {
          value: !0
      })
  }, e.t = function(t, n) {
      if (1 & n && (t = e(t)), 8 & n) return t;
      if (4 & n && "object" == typeof t && t && t.__esModule) return t;
      var r = Object.create(null);
      if (e.r(r), Object.defineProperty(r, "default", {
              enumerable: !0,
              value: t
          }), 2 & n && "string" != typeof t)
          for (var i in t) e.d(r, i, function(n) {
              return t[n]
          }.bind(null, i));
      return r
  }, e.n = function(t) {
      var n = t && t.__esModule ? function() {
          return t.default
      } : function() {
          return t
      };
      return e.d(n, "a", n), n
  }, e.o = function(t, n) {
      return Object.prototype.hasOwnProperty.call(t, n)
  }, e.p = "", e(e.s = 22)
}([function(t, n, e) {
  "use strict";
  (function(t) {
      e.d(n, "b", (function() {
          return r
      })), e.d(n, "a", (function() {
          return p
      }));
      var r = function(n, e) {
              if (n) {
                  var r = t(n);
                  e = e || 0;
                  t("html, body").stop(!1, !1).animate({
                      scrollTop: r.offset().top - e
                  }, 1e3, (function() {
                      n.focus({
                          preventScroll: !0
                      })
                  }))
              }
          },
          i = 1800,
          a = 960,
          o = 1024,
          d = 959,
          s = 374,
          p = window.matchMedia("screen and (min-width: " + a + "px) and (max-width: 9999px)");
      window.matchMedia("screen and (min-width: " + i + "px) and (max-width: 9999px)"), window.matchMedia("screen and (min-width: " + a + "px) and (max-width: " + i + "px)"), window.matchMedia("screen and (min-width: " + d + "px) and (max-width: " + o + "px)"), window.matchMedia("screen and (max-width : " + d + "px)"), window.matchMedia("screen and (max-width : " + s + "px)")
  }).call(this, e(1))
}, function(t, n, e) {
  var r;
  /*!
   * jQuery JavaScript Library v3.5.0
   * https://jquery.com/
   *
   * Includes Sizzle.js
   * https://sizzlejs.com/
   *
   * Copyright JS Foundation and other contributors
   * Released under the MIT license
   * https://jquery.org/license
   *
   * Date: 2020-04-10T15:07Z
   */
  ! function(n, e) {
      "use strict";
      "object" == typeof t.exports ? t.exports = n.document ? e(n, !0) : function(t) {
          if (!t.document) throw new Error("jQuery requires a window with a document");
          return e(t)
      } : e(n)
  }("undefined" != typeof window ? window : this, (function(e, i) {
      "use strict";
      var a = [],
          o = Object.getPrototypeOf,
          d = a.slice,
          s = a.flat ? function(t) {
              return a.flat.call(t)
          } : function(t) {
              return a.concat.apply([], t)
          },
          p = a.push,
          A = a.indexOf,
          c = {},
          l = c.toString,
          C = c.hasOwnProperty,
          g = C.toString,
          h = g.call(Object),
          m = {},
          f = function(t) {
              return "function" == typeof t && "number" != typeof t.nodeType
          },
          u = function(t) {
              return null != t && t === t.window
          },
          x = e.document,
          b = {
              type: !0,
              src: !0,
              nonce: !0,
              noModule: !0
          };

      function B(t, n, e) {
          var r, i, a = (e = e || x).createElement("script");
          if (a.text = t, n)
              for (r in b)(i = n[r] || n.getAttribute && n.getAttribute(r)) && a.setAttribute(r, i);
          e.head.appendChild(a).parentNode.removeChild(a)
      }

      function y(t) {
          return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? c[l.call(t)] || "object" : typeof t
      }
      var v = function(t, n) {
          return new v.fn.init(t, n)
      };

      function w(t) {
          var n = !!t && "length" in t && t.length,
              e = y(t);
          return !f(t) && !u(t) && ("array" === e || 0 === n || "number" == typeof n && n > 0 && n - 1 in t)
      }
      v.fn = v.prototype = {
          jquery: "3.5.0",
          constructor: v,
          length: 0,
          toArray: function() {
              return d.call(this)
          },
          get: function(t) {
              return null == t ? d.call(this) : t < 0 ? this[t + this.length] : this[t]
          },
          pushStack: function(t) {
              var n = v.merge(this.constructor(), t);
              return n.prevObject = this, n
          },
          each: function(t) {
              return v.each(this, t)
          },
          map: function(t) {
              return this.pushStack(v.map(this, (function(n, e) {
                  return t.call(n, e, n)
              })))
          },
          slice: function() {
              return this.pushStack(d.apply(this, arguments))
          },
          first: function() {
              return this.eq(0)
          },
          last: function() {
              return this.eq(-1)
          },
          even: function() {
              return this.pushStack(v.grep(this, (function(t, n) {
                  return (n + 1) % 2
              })))
          },
          odd: function() {
              return this.pushStack(v.grep(this, (function(t, n) {
                  return n % 2
              })))
          },
          eq: function(t) {
              var n = this.length,
                  e = +t + (t < 0 ? n : 0);
              return this.pushStack(e >= 0 && e < n ? [this[e]] : [])
          },
          end: function() {
              return this.prevObject || this.constructor()
          },
          push: p,
          sort: a.sort,
          splice: a.splice
      }, v.extend = v.fn.extend = function() {
          var t, n, e, r, i, a, o = arguments[0] || {},
              d = 1,
              s = arguments.length,
              p = !1;
          for ("boolean" == typeof o && (p = o, o = arguments[d] || {}, d++), "object" == typeof o || f(o) || (o = {}), d === s && (o = this, d--); d < s; d++)
              if (null != (t = arguments[d]))
                  for (n in t) r = t[n], "__proto__" !== n && o !== r && (p && r && (v.isPlainObject(r) || (i = Array.isArray(r))) ? (e = o[n], a = i && !Array.isArray(e) ? [] : i || v.isPlainObject(e) ? e : {}, i = !1, o[n] = v.extend(p, a, r)) : void 0 !== r && (o[n] = r));
          return o
      }, v.extend({
          expando: "jQuery" + ("3.5.0" + Math.random()).replace(/\D/g, ""),
          isReady: !0,
          error: function(t) {
              throw new Error(t)
          },
          noop: function() {},
          isPlainObject: function(t) {
              var n, e;
              return !(!t || "[object Object]" !== l.call(t)) && (!(n = o(t)) || "function" == typeof(e = C.call(n, "constructor") && n.constructor) && g.call(e) === h)
          },
          isEmptyObject: function(t) {
              var n;
              for (n in t) return !1;
              return !0
          },
          globalEval: function(t, n, e) {
              B(t, {
                  nonce: n && n.nonce
              }, e)
          },
          each: function(t, n) {
              var e, r = 0;
              if (w(t))
                  for (e = t.length; r < e && !1 !== n.call(t[r], r, t[r]); r++);
              else
                  for (r in t)
                      if (!1 === n.call(t[r], r, t[r])) break;
              return t
          },
          makeArray: function(t, n) {
              var e = n || [];
              return null != t && (w(Object(t)) ? v.merge(e, "string" == typeof t ? [t] : t) : p.call(e, t)), e
          },
          inArray: function(t, n, e) {
              return null == n ? -1 : A.call(n, t, e)
          },
          merge: function(t, n) {
              for (var e = +n.length, r = 0, i = t.length; r < e; r++) t[i++] = n[r];
              return t.length = i, t
          },
          grep: function(t, n, e) {
              for (var r = [], i = 0, a = t.length, o = !e; i < a; i++) !n(t[i], i) !== o && r.push(t[i]);
              return r
          },
          map: function(t, n, e) {
              var r, i, a = 0,
                  o = [];
              if (w(t))
                  for (r = t.length; a < r; a++) null != (i = n(t[a], a, e)) && o.push(i);
              else
                  for (a in t) null != (i = n(t[a], a, e)) && o.push(i);
              return s(o)
          },
          guid: 1,
          support: m
      }), "function" == typeof Symbol && (v.fn[Symbol.iterator] = a[Symbol.iterator]), v.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function(t, n) {
          c["[object " + n + "]"] = n.toLowerCase()
      }));
      var k =
          /*!
           * Sizzle CSS Selector Engine v2.3.5
           * https://sizzlejs.com/
           *
           * Copyright JS Foundation and other contributors
           * Released under the MIT license
           * https://js.foundation/
           *
           * Date: 2020-03-14
           */
          function(t) {
              var n, e, r, i, a, o, d, s, p, A, c, l, C, g, h, m, f, u, x, b = "sizzle" + 1 * new Date,
                  B = t.document,
                  y = 0,
                  v = 0,
                  w = st(),
                  k = st(),
                  E = st(),
                  I = st(),
                  D = function(t, n) {
                      return t === n && (c = !0), 0
                  },
                  G = {}.hasOwnProperty,
                  _ = [],
                  S = _.pop,
                  z = _.push,
                  P = _.push,
                  O = _.slice,
                  K = function(t, n) {
                      for (var e = 0, r = t.length; e < r; e++)
                          if (t[e] === n) return e;
                      return -1
                  },
                  R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                  H = "[\\x20\\t\\r\\n\\f]",
                  M = "(?:\\\\[\\da-fA-F]{1,6}" + H + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
                  F = "\\[" + H + "*(" + M + ")(?:" + H + "*([*^$|!~]?=)" + H + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + M + "))|)" + H + "*\\]",
                  T = ":(" + M + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + F + ")*)|.*)\\)|)",
                  q = new RegExp(H + "+", "g"),
                  j = new RegExp("^" + H + "+|((?:^|[^\\\\])(?:\\\\.)*)" + H + "+$", "g"),
                  L = new RegExp("^" + H + "*," + H + "*"),
                  U = new RegExp("^" + H + "*([>+~]|" + H + ")" + H + "*"),
                  Q = new RegExp(H + "|>"),
                  N = new RegExp(T),
                  Y = new RegExp("^" + M + "$"),
                  W = {
                      ID: new RegExp("^#(" + M + ")"),
                      CLASS: new RegExp("^\\.(" + M + ")"),
                      TAG: new RegExp("^(" + M + "|[*])"),
                      ATTR: new RegExp("^" + F),
                      PSEUDO: new RegExp("^" + T),
                      CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + H + "*(even|odd|(([+-]|)(\\d*)n|)" + H + "*(?:([+-]|)" + H + "*(\\d+)|))" + H + "*\\)|)", "i"),
                      bool: new RegExp("^(?:" + R + ")$", "i"),
                      needsContext: new RegExp("^" + H + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + H + "*((?:-\\d)?\\d*)" + H + "*\\)|)(?=[^-]|$)", "i")
                  },
                  Z = /HTML$/i,
                  V = /^(?:input|select|textarea|button)$/i,
                  X = /^h\d$/i,
                  $ = /^[^{]+\{\s*\[native \w/,
                  J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                  tt = /[+~]/,
                  nt = new RegExp("\\\\[\\da-fA-F]{1,6}" + H + "?|\\\\([^\\r\\n\\f])", "g"),
                  et = function(t, n) {
                      var e = "0x" + t.slice(1) - 65536;
                      return n || (e < 0 ? String.fromCharCode(e + 65536) : String.fromCharCode(e >> 10 | 55296, 1023 & e | 56320))
                  },
                  rt = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                  it = function(t, n) {
                      return n ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
                  },
                  at = function() {
                      l()
                  },
                  ot = bt((function(t) {
                      return !0 === t.disabled && "fieldset" === t.nodeName.toLowerCase()
                  }), {
                      dir: "parentNode",
                      next: "legend"
                  });
              try {
                  P.apply(_ = O.call(B.childNodes), B.childNodes), _[B.childNodes.length].nodeType
              } catch (t) {
                  P = {
                      apply: _.length ? function(t, n) {
                          z.apply(t, O.call(n))
                      } : function(t, n) {
                          for (var e = t.length, r = 0; t[e++] = n[r++];);
                          t.length = e - 1
                      }
                  }
              }

              function dt(t, n, r, i) {
                  var a, d, p, A, c, g, f, u = n && n.ownerDocument,
                      B = n ? n.nodeType : 9;
                  if (r = r || [], "string" != typeof t || !t || 1 !== B && 9 !== B && 11 !== B) return r;
                  if (!i && (l(n), n = n || C, h)) {
                      if (11 !== B && (c = J.exec(t)))
                          if (a = c[1]) {
                              if (9 === B) {
                                  if (!(p = n.getElementById(a))) return r;
                                  if (p.id === a) return r.push(p), r
                              } else if (u && (p = u.getElementById(a)) && x(n, p) && p.id === a) return r.push(p), r
                          } else {
                              if (c[2]) return P.apply(r, n.getElementsByTagName(t)), r;
                              if ((a = c[3]) && e.getElementsByClassName && n.getElementsByClassName) return P.apply(r, n.getElementsByClassName(a)), r
                          } if (e.qsa && !I[t + " "] && (!m || !m.test(t)) && (1 !== B || "object" !== n.nodeName.toLowerCase())) {
                          if (f = t, u = n, 1 === B && (Q.test(t) || U.test(t))) {
                              for ((u = tt.test(t) && ft(n.parentNode) || n) === n && e.scope || ((A = n.getAttribute("id")) ? A = A.replace(rt, it) : n.setAttribute("id", A = b)), d = (g = o(t)).length; d--;) g[d] = (A ? "#" + A : ":scope") + " " + xt(g[d]);
                              f = g.join(",")
                          }
                          try {
                              return P.apply(r, u.querySelectorAll(f)), r
                          } catch (n) {
                              I(t, !0)
                          } finally {
                              A === b && n.removeAttribute("id")
                          }
                      }
                  }
                  return s(t.replace(j, "$1"), n, r, i)
              }

              function st() {
                  var t = [];
                  return function n(e, i) {
                      return t.push(e + " ") > r.cacheLength && delete n[t.shift()], n[e + " "] = i
                  }
              }

              function pt(t) {
                  return t[b] = !0, t
              }

              function At(t) {
                  var n = C.createElement("fieldset");
                  try {
                      return !!t(n)
                  } catch (t) {
                      return !1
                  } finally {
                      n.parentNode && n.parentNode.removeChild(n), n = null
                  }
              }

              function ct(t, n) {
                  for (var e = t.split("|"), i = e.length; i--;) r.attrHandle[e[i]] = n
              }

              function lt(t, n) {
                  var e = n && t,
                      r = e && 1 === t.nodeType && 1 === n.nodeType && t.sourceIndex - n.sourceIndex;
                  if (r) return r;
                  if (e)
                      for (; e = e.nextSibling;)
                          if (e === n) return -1;
                  return t ? 1 : -1
              }

              function Ct(t) {
                  return function(n) {
                      return "input" === n.nodeName.toLowerCase() && n.type === t
                  }
              }

              function gt(t) {
                  return function(n) {
                      var e = n.nodeName.toLowerCase();
                      return ("input" === e || "button" === e) && n.type === t
                  }
              }

              function ht(t) {
                  return function(n) {
                      return "form" in n ? n.parentNode && !1 === n.disabled ? "label" in n ? "label" in n.parentNode ? n.parentNode.disabled === t : n.disabled === t : n.isDisabled === t || n.isDisabled !== !t && ot(n) === t : n.disabled === t : "label" in n && n.disabled === t
                  }
              }

              function mt(t) {
                  return pt((function(n) {
                      return n = +n, pt((function(e, r) {
                          for (var i, a = t([], e.length, n), o = a.length; o--;) e[i = a[o]] && (e[i] = !(r[i] = e[i]))
                      }))
                  }))
              }

              function ft(t) {
                  return t && void 0 !== t.getElementsByTagName && t
              }
              for (n in e = dt.support = {}, a = dt.isXML = function(t) {
                      var n = t.namespaceURI,
                          e = (t.ownerDocument || t).documentElement;
                      return !Z.test(n || e && e.nodeName || "HTML")
                  }, l = dt.setDocument = function(t) {
                      var n, i, o = t ? t.ownerDocument || t : B;
                      return o != C && 9 === o.nodeType && o.documentElement ? (g = (C = o).documentElement, h = !a(C), B != C && (i = C.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", at, !1) : i.attachEvent && i.attachEvent("onunload", at)), e.scope = At((function(t) {
                          return g.appendChild(t).appendChild(C.createElement("div")), void 0 !== t.querySelectorAll && !t.querySelectorAll(":scope fieldset div").length
                      })), e.attributes = At((function(t) {
                          return t.className = "i", !t.getAttribute("className")
                      })), e.getElementsByTagName = At((function(t) {
                          return t.appendChild(C.createComment("")), !t.getElementsByTagName("*").length
                      })), e.getElementsByClassName = $.test(C.getElementsByClassName), e.getById = At((function(t) {
                          return g.appendChild(t).id = b, !C.getElementsByName || !C.getElementsByName(b).length
                      })), e.getById ? (r.filter.ID = function(t) {
                          var n = t.replace(nt, et);
                          return function(t) {
                              return t.getAttribute("id") === n
                          }
                      }, r.find.ID = function(t, n) {
                          if (void 0 !== n.getElementById && h) {
                              var e = n.getElementById(t);
                              return e ? [e] : []
                          }
                      }) : (r.filter.ID = function(t) {
                          var n = t.replace(nt, et);
                          return function(t) {
                              var e = void 0 !== t.getAttributeNode && t.getAttributeNode("id");
                              return e && e.value === n
                          }
                      }, r.find.ID = function(t, n) {
                          if (void 0 !== n.getElementById && h) {
                              var e, r, i, a = n.getElementById(t);
                              if (a) {
                                  if ((e = a.getAttributeNode("id")) && e.value === t) return [a];
                                  for (i = n.getElementsByName(t), r = 0; a = i[r++];)
                                      if ((e = a.getAttributeNode("id")) && e.value === t) return [a]
                              }
                              return []
                          }
                      }), r.find.TAG = e.getElementsByTagName ? function(t, n) {
                          return void 0 !== n.getElementsByTagName ? n.getElementsByTagName(t) : e.qsa ? n.querySelectorAll(t) : void 0
                      } : function(t, n) {
                          var e, r = [],
                              i = 0,
                              a = n.getElementsByTagName(t);
                          if ("*" === t) {
                              for (; e = a[i++];) 1 === e.nodeType && r.push(e);
                              return r
                          }
                          return a
                      }, r.find.CLASS = e.getElementsByClassName && function(t, n) {
                          if (void 0 !== n.getElementsByClassName && h) return n.getElementsByClassName(t)
                      }, f = [], m = [], (e.qsa = $.test(C.querySelectorAll)) && (At((function(t) {
                          var n;
                          g.appendChild(t).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && m.push("[*^$]=" + H + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || m.push("\\[" + H + "*(?:value|" + R + ")"), t.querySelectorAll("[id~=" + b + "-]").length || m.push("~="), (n = C.createElement("input")).setAttribute("name", ""), t.appendChild(n), t.querySelectorAll("[name='']").length || m.push("\\[" + H + "*name" + H + "*=" + H + "*(?:''|\"\")"), t.querySelectorAll(":checked").length || m.push(":checked"), t.querySelectorAll("a#" + b + "+*").length || m.push(".#.+[+~]"), t.querySelectorAll("\\\f"), m.push("[\\r\\n\\f]")
                      })), At((function(t) {
                          t.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                          var n = C.createElement("input");
                          n.setAttribute("type", "hidden"), t.appendChild(n).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && m.push("name" + H + "*[*^$|!~]?="), 2 !== t.querySelectorAll(":enabled").length && m.push(":enabled", ":disabled"), g.appendChild(t).disabled = !0, 2 !== t.querySelectorAll(":disabled").length && m.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), m.push(",.*:")
                      }))), (e.matchesSelector = $.test(u = g.matches || g.webkitMatchesSelector || g.mozMatchesSelector || g.oMatchesSelector || g.msMatchesSelector)) && At((function(t) {
                          e.disconnectedMatch = u.call(t, "*"), u.call(t, "[s!='']:x"), f.push("!=", T)
                      })), m = m.length && new RegExp(m.join("|")), f = f.length && new RegExp(f.join("|")), n = $.test(g.compareDocumentPosition), x = n || $.test(g.contains) ? function(t, n) {
                          var e = 9 === t.nodeType ? t.documentElement : t,
                              r = n && n.parentNode;
                          return t === r || !(!r || 1 !== r.nodeType || !(e.contains ? e.contains(r) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(r)))
                      } : function(t, n) {
                          if (n)
                              for (; n = n.parentNode;)
                                  if (n === t) return !0;
                          return !1
                      }, D = n ? function(t, n) {
                          if (t === n) return c = !0, 0;
                          var r = !t.compareDocumentPosition - !n.compareDocumentPosition;
                          return r || (1 & (r = (t.ownerDocument || t) == (n.ownerDocument || n) ? t.compareDocumentPosition(n) : 1) || !e.sortDetached && n.compareDocumentPosition(t) === r ? t == C || t.ownerDocument == B && x(B, t) ? -1 : n == C || n.ownerDocument == B && x(B, n) ? 1 : A ? K(A, t) - K(A, n) : 0 : 4 & r ? -1 : 1)
                      } : function(t, n) {
                          if (t === n) return c = !0, 0;
                          var e, r = 0,
                              i = t.parentNode,
                              a = n.parentNode,
                              o = [t],
                              d = [n];
                          if (!i || !a) return t == C ? -1 : n == C ? 1 : i ? -1 : a ? 1 : A ? K(A, t) - K(A, n) : 0;
                          if (i === a) return lt(t, n);
                          for (e = t; e = e.parentNode;) o.unshift(e);
                          for (e = n; e = e.parentNode;) d.unshift(e);
                          for (; o[r] === d[r];) r++;
                          return r ? lt(o[r], d[r]) : o[r] == B ? -1 : d[r] == B ? 1 : 0
                      }, C) : C
                  }, dt.matches = function(t, n) {
                      return dt(t, null, null, n)
                  }, dt.matchesSelector = function(t, n) {
                      if (l(t), e.matchesSelector && h && !I[n + " "] && (!f || !f.test(n)) && (!m || !m.test(n))) try {
                          var r = u.call(t, n);
                          if (r || e.disconnectedMatch || t.document && 11 !== t.document.nodeType) return r
                      } catch (t) {
                          I(n, !0)
                      }
                      return dt(n, C, null, [t]).length > 0
                  }, dt.contains = function(t, n) {
                      return (t.ownerDocument || t) != C && l(t), x(t, n)
                  }, dt.attr = function(t, n) {
                      (t.ownerDocument || t) != C && l(t);
                      var i = r.attrHandle[n.toLowerCase()],
                          a = i && G.call(r.attrHandle, n.toLowerCase()) ? i(t, n, !h) : void 0;
                      return void 0 !== a ? a : e.attributes || !h ? t.getAttribute(n) : (a = t.getAttributeNode(n)) && a.specified ? a.value : null
                  }, dt.escape = function(t) {
                      return (t + "").replace(rt, it)
                  }, dt.error = function(t) {
                      throw new Error("Syntax error, unrecognized expression: " + t)
                  }, dt.uniqueSort = function(t) {
                      var n, r = [],
                          i = 0,
                          a = 0;
                      if (c = !e.detectDuplicates, A = !e.sortStable && t.slice(0), t.sort(D), c) {
                          for (; n = t[a++];) n === t[a] && (i = r.push(a));
                          for (; i--;) t.splice(r[i], 1)
                      }
                      return A = null, t
                  }, i = dt.getText = function(t) {
                      var n, e = "",
                          r = 0,
                          a = t.nodeType;
                      if (a) {
                          if (1 === a || 9 === a || 11 === a) {
                              if ("string" == typeof t.textContent) return t.textContent;
                              for (t = t.firstChild; t; t = t.nextSibling) e += i(t)
                          } else if (3 === a || 4 === a) return t.nodeValue
                      } else
                          for (; n = t[r++];) e += i(n);
                      return e
                  }, (r = dt.selectors = {
                      cacheLength: 50,
                      createPseudo: pt,
                      match: W,
                      attrHandle: {},
                      find: {},
                      relative: {
                          ">": {
                              dir: "parentNode",
                              first: !0
                          },
                          " ": {
                              dir: "parentNode"
                          },
                          "+": {
                              dir: "previousSibling",
                              first: !0
                          },
                          "~": {
                              dir: "previousSibling"
                          }
                      },
                      preFilter: {
                          ATTR: function(t) {
                              return t[1] = t[1].replace(nt, et), t[3] = (t[3] || t[4] || t[5] || "").replace(nt, et), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                          },
                          CHILD: function(t) {
                              return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || dt.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && dt.error(t[0]), t
                          },
                          PSEUDO: function(t) {
                              var n, e = !t[6] && t[2];
                              return W.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : e && N.test(e) && (n = o(e, !0)) && (n = e.indexOf(")", e.length - n) - e.length) && (t[0] = t[0].slice(0, n), t[2] = e.slice(0, n)), t.slice(0, 3))
                          }
                      },
                      filter: {
                          TAG: function(t) {
                              var n = t.replace(nt, et).toLowerCase();
                              return "*" === t ? function() {
                                  return !0
                              } : function(t) {
                                  return t.nodeName && t.nodeName.toLowerCase() === n
                              }
                          },
                          CLASS: function(t) {
                              var n = w[t + " "];
                              return n || (n = new RegExp("(^|" + H + ")" + t + "(" + H + "|$)")) && w(t, (function(t) {
                                  return n.test("string" == typeof t.className && t.className || void 0 !== t.getAttribute && t.getAttribute("class") || "")
                              }))
                          },
                          ATTR: function(t, n, e) {
                              return function(r) {
                                  var i = dt.attr(r, t);
                                  return null == i ? "!=" === n : !n || (i += "", "=" === n ? i === e : "!=" === n ? i !== e : "^=" === n ? e && 0 === i.indexOf(e) : "*=" === n ? e && i.indexOf(e) > -1 : "$=" === n ? e && i.slice(-e.length) === e : "~=" === n ? (" " + i.replace(q, " ") + " ").indexOf(e) > -1 : "|=" === n && (i === e || i.slice(0, e.length + 1) === e + "-"))
                              }
                          },
                          CHILD: function(t, n, e, r, i) {
                              var a = "nth" !== t.slice(0, 3),
                                  o = "last" !== t.slice(-4),
                                  d = "of-type" === n;
                              return 1 === r && 0 === i ? function(t) {
                                  return !!t.parentNode
                              } : function(n, e, s) {
                                  var p, A, c, l, C, g, h = a !== o ? "nextSibling" : "previousSibling",
                                      m = n.parentNode,
                                      f = d && n.nodeName.toLowerCase(),
                                      u = !s && !d,
                                      x = !1;
                                  if (m) {
                                      if (a) {
                                          for (; h;) {
                                              for (l = n; l = l[h];)
                                                  if (d ? l.nodeName.toLowerCase() === f : 1 === l.nodeType) return !1;
                                              g = h = "only" === t && !g && "nextSibling"
                                          }
                                          return !0
                                      }
                                      if (g = [o ? m.firstChild : m.lastChild], o && u) {
                                          for (x = (C = (p = (A = (c = (l = m)[b] || (l[b] = {}))[l.uniqueID] || (c[l.uniqueID] = {}))[t] || [])[0] === y && p[1]) && p[2], l = C && m.childNodes[C]; l = ++C && l && l[h] || (x = C = 0) || g.pop();)
                                              if (1 === l.nodeType && ++x && l === n) {
                                                  A[t] = [y, C, x];
                                                  break
                                              }
                                      } else if (u && (x = C = (p = (A = (c = (l = n)[b] || (l[b] = {}))[l.uniqueID] || (c[l.uniqueID] = {}))[t] || [])[0] === y && p[1]), !1 === x)
                                          for (;
                                              (l = ++C && l && l[h] || (x = C = 0) || g.pop()) && ((d ? l.nodeName.toLowerCase() !== f : 1 !== l.nodeType) || !++x || (u && ((A = (c = l[b] || (l[b] = {}))[l.uniqueID] || (c[l.uniqueID] = {}))[t] = [y, x]), l !== n)););
                                      return (x -= i) === r || x % r == 0 && x / r >= 0
                                  }
                              }
                          },
                          PSEUDO: function(t, n) {
                              var e, i = r.pseudos[t] || r.setFilters[t.toLowerCase()] || dt.error("unsupported pseudo: " + t);
                              return i[b] ? i(n) : i.length > 1 ? (e = [t, t, "", n], r.setFilters.hasOwnProperty(t.toLowerCase()) ? pt((function(t, e) {
                                  for (var r, a = i(t, n), o = a.length; o--;) t[r = K(t, a[o])] = !(e[r] = a[o])
                              })) : function(t) {
                                  return i(t, 0, e)
                              }) : i
                          }
                      },
                      pseudos: {
                          not: pt((function(t) {
                              var n = [],
                                  e = [],
                                  r = d(t.replace(j, "$1"));
                              return r[b] ? pt((function(t, n, e, i) {
                                  for (var a, o = r(t, null, i, []), d = t.length; d--;)(a = o[d]) && (t[d] = !(n[d] = a))
                              })) : function(t, i, a) {
                                  return n[0] = t, r(n, null, a, e), n[0] = null, !e.pop()
                              }
                          })),
                          has: pt((function(t) {
                              return function(n) {
                                  return dt(t, n).length > 0
                              }
                          })),
                          contains: pt((function(t) {
                              return t = t.replace(nt, et),
                                  function(n) {
                                      return (n.textContent || i(n)).indexOf(t) > -1
                                  }
                          })),
                          lang: pt((function(t) {
                              return Y.test(t || "") || dt.error("unsupported lang: " + t), t = t.replace(nt, et).toLowerCase(),
                                  function(n) {
                                      var e;
                                      do {
                                          if (e = h ? n.lang : n.getAttribute("xml:lang") || n.getAttribute("lang")) return (e = e.toLowerCase()) === t || 0 === e.indexOf(t + "-")
                                      } while ((n = n.parentNode) && 1 === n.nodeType);
                                      return !1
                                  }
                          })),
                          target: function(n) {
                              var e = t.location && t.location.hash;
                              return e && e.slice(1) === n.id
                          },
                          root: function(t) {
                              return t === g
                          },
                          focus: function(t) {
                              return t === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                          },
                          enabled: ht(!1),
                          disabled: ht(!0),
                          checked: function(t) {
                              var n = t.nodeName.toLowerCase();
                              return "input" === n && !!t.checked || "option" === n && !!t.selected
                          },
                          selected: function(t) {
                              return t.parentNode && t.parentNode.selectedIndex, !0 === t.selected
                          },
                          empty: function(t) {
                              for (t = t.firstChild; t; t = t.nextSibling)
                                  if (t.nodeType < 6) return !1;
                              return !0
                          },
                          parent: function(t) {
                              return !r.pseudos.empty(t)
                          },
                          header: function(t) {
                              return X.test(t.nodeName)
                          },
                          input: function(t) {
                              return V.test(t.nodeName)
                          },
                          button: function(t) {
                              var n = t.nodeName.toLowerCase();
                              return "input" === n && "button" === t.type || "button" === n
                          },
                          text: function(t) {
                              var n;
                              return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (n = t.getAttribute("type")) || "text" === n.toLowerCase())
                          },
                          first: mt((function() {
                              return [0]
                          })),
                          last: mt((function(t, n) {
                              return [n - 1]
                          })),
                          eq: mt((function(t, n, e) {
                              return [e < 0 ? e + n : e]
                          })),
                          even: mt((function(t, n) {
                              for (var e = 0; e < n; e += 2) t.push(e);
                              return t
                          })),
                          odd: mt((function(t, n) {
                              for (var e = 1; e < n; e += 2) t.push(e);
                              return t
                          })),
                          lt: mt((function(t, n, e) {
                              for (var r = e < 0 ? e + n : e > n ? n : e; --r >= 0;) t.push(r);
                              return t
                          })),
                          gt: mt((function(t, n, e) {
                              for (var r = e < 0 ? e + n : e; ++r < n;) t.push(r);
                              return t
                          }))
                      }
                  }).pseudos.nth = r.pseudos.eq, {
                      radio: !0,
                      checkbox: !0,
                      file: !0,
                      password: !0,
                      image: !0
                  }) r.pseudos[n] = Ct(n);
              for (n in {
                      submit: !0,
                      reset: !0
                  }) r.pseudos[n] = gt(n);

              function ut() {}

              function xt(t) {
                  for (var n = 0, e = t.length, r = ""; n < e; n++) r += t[n].value;
                  return r
              }

              function bt(t, n, e) {
                  var r = n.dir,
                      i = n.next,
                      a = i || r,
                      o = e && "parentNode" === a,
                      d = v++;
                  return n.first ? function(n, e, i) {
                      for (; n = n[r];)
                          if (1 === n.nodeType || o) return t(n, e, i);
                      return !1
                  } : function(n, e, s) {
                      var p, A, c, l = [y, d];
                      if (s) {
                          for (; n = n[r];)
                              if ((1 === n.nodeType || o) && t(n, e, s)) return !0
                      } else
                          for (; n = n[r];)
                              if (1 === n.nodeType || o)
                                  if (A = (c = n[b] || (n[b] = {}))[n.uniqueID] || (c[n.uniqueID] = {}), i && i === n.nodeName.toLowerCase()) n = n[r] || n;
                                  else {
                                      if ((p = A[a]) && p[0] === y && p[1] === d) return l[2] = p[2];
                                      if (A[a] = l, l[2] = t(n, e, s)) return !0
                                  } return !1
                  }
              }

              function Bt(t) {
                  return t.length > 1 ? function(n, e, r) {
                      for (var i = t.length; i--;)
                          if (!t[i](n, e, r)) return !1;
                      return !0
                  } : t[0]
              }

              function yt(t, n, e, r, i) {
                  for (var a, o = [], d = 0, s = t.length, p = null != n; d < s; d++)(a = t[d]) && (e && !e(a, r, i) || (o.push(a), p && n.push(d)));
                  return o
              }

              function vt(t, n, e, r, i, a) {
                  return r && !r[b] && (r = vt(r)), i && !i[b] && (i = vt(i, a)), pt((function(a, o, d, s) {
                      var p, A, c, l = [],
                          C = [],
                          g = o.length,
                          h = a || function(t, n, e) {
                              for (var r = 0, i = n.length; r < i; r++) dt(t, n[r], e);
                              return e
                          }(n || "*", d.nodeType ? [d] : d, []),
                          m = !t || !a && n ? h : yt(h, l, t, d, s),
                          f = e ? i || (a ? t : g || r) ? [] : o : m;
                      if (e && e(m, f, d, s), r)
                          for (p = yt(f, C), r(p, [], d, s), A = p.length; A--;)(c = p[A]) && (f[C[A]] = !(m[C[A]] = c));
                      if (a) {
                          if (i || t) {
                              if (i) {
                                  for (p = [], A = f.length; A--;)(c = f[A]) && p.push(m[A] = c);
                                  i(null, f = [], p, s)
                              }
                              for (A = f.length; A--;)(c = f[A]) && (p = i ? K(a, c) : l[A]) > -1 && (a[p] = !(o[p] = c))
                          }
                      } else f = yt(f === o ? f.splice(g, f.length) : f), i ? i(null, o, f, s) : P.apply(o, f)
                  }))
              }

              function wt(t) {
                  for (var n, e, i, a = t.length, o = r.relative[t[0].type], d = o || r.relative[" "], s = o ? 1 : 0, A = bt((function(t) {
                          return t === n
                      }), d, !0), c = bt((function(t) {
                          return K(n, t) > -1
                      }), d, !0), l = [function(t, e, r) {
                          var i = !o && (r || e !== p) || ((n = e).nodeType ? A(t, e, r) : c(t, e, r));
                          return n = null, i
                      }]; s < a; s++)
                      if (e = r.relative[t[s].type]) l = [bt(Bt(l), e)];
                      else {
                          if ((e = r.filter[t[s].type].apply(null, t[s].matches))[b]) {
                              for (i = ++s; i < a && !r.relative[t[i].type]; i++);
                              return vt(s > 1 && Bt(l), s > 1 && xt(t.slice(0, s - 1).concat({
                                  value: " " === t[s - 2].type ? "*" : ""
                              })).replace(j, "$1"), e, s < i && wt(t.slice(s, i)), i < a && wt(t = t.slice(i)), i < a && xt(t))
                          }
                          l.push(e)
                      } return Bt(l)
              }
              return ut.prototype = r.filters = r.pseudos, r.setFilters = new ut, o = dt.tokenize = function(t, n) {
                  var e, i, a, o, d, s, p, A = k[t + " "];
                  if (A) return n ? 0 : A.slice(0);
                  for (d = t, s = [], p = r.preFilter; d;) {
                      for (o in e && !(i = L.exec(d)) || (i && (d = d.slice(i[0].length) || d), s.push(a = [])), e = !1, (i = U.exec(d)) && (e = i.shift(), a.push({
                              value: e,
                              type: i[0].replace(j, " ")
                          }), d = d.slice(e.length)), r.filter) !(i = W[o].exec(d)) || p[o] && !(i = p[o](i)) || (e = i.shift(), a.push({
                          value: e,
                          type: o,
                          matches: i
                      }), d = d.slice(e.length));
                      if (!e) break
                  }
                  return n ? d.length : d ? dt.error(t) : k(t, s).slice(0)
              }, d = dt.compile = function(t, n) {
                  var e, i = [],
                      a = [],
                      d = E[t + " "];
                  if (!d) {
                      for (n || (n = o(t)), e = n.length; e--;)(d = wt(n[e]))[b] ? i.push(d) : a.push(d);
                      (d = E(t, function(t, n) {
                          var e = n.length > 0,
                              i = t.length > 0,
                              a = function(a, o, d, s, A) {
                                  var c, g, m, f = 0,
                                      u = "0",
                                      x = a && [],
                                      b = [],
                                      B = p,
                                      v = a || i && r.find.TAG("*", A),
                                      w = y += null == B ? 1 : Math.random() || .1,
                                      k = v.length;
                                  for (A && (p = o == C || o || A); u !== k && null != (c = v[u]); u++) {
                                      if (i && c) {
                                          for (g = 0, o || c.ownerDocument == C || (l(c), d = !h); m = t[g++];)
                                              if (m(c, o || C, d)) {
                                                  s.push(c);
                                                  break
                                              } A && (y = w)
                                      }
                                      e && ((c = !m && c) && f--, a && x.push(c))
                                  }
                                  if (f += u, e && u !== f) {
                                      for (g = 0; m = n[g++];) m(x, b, o, d);
                                      if (a) {
                                          if (f > 0)
                                              for (; u--;) x[u] || b[u] || (b[u] = S.call(s));
                                          b = yt(b)
                                      }
                                      P.apply(s, b), A && !a && b.length > 0 && f + n.length > 1 && dt.uniqueSort(s)
                                  }
                                  return A && (y = w, p = B), x
                              };
                          return e ? pt(a) : a
                      }(a, i))).selector = t
                  }
                  return d
              }, s = dt.select = function(t, n, e, i) {
                  var a, s, p, A, c, l = "function" == typeof t && t,
                      C = !i && o(t = l.selector || t);
                  if (e = e || [], 1 === C.length) {
                      if ((s = C[0] = C[0].slice(0)).length > 2 && "ID" === (p = s[0]).type && 9 === n.nodeType && h && r.relative[s[1].type]) {
                          if (!(n = (r.find.ID(p.matches[0].replace(nt, et), n) || [])[0])) return e;
                          l && (n = n.parentNode), t = t.slice(s.shift().value.length)
                      }
                      for (a = W.needsContext.test(t) ? 0 : s.length; a-- && (p = s[a], !r.relative[A = p.type]);)
                          if ((c = r.find[A]) && (i = c(p.matches[0].replace(nt, et), tt.test(s[0].type) && ft(n.parentNode) || n))) {
                              if (s.splice(a, 1), !(t = i.length && xt(s))) return P.apply(e, i), e;
                              break
                          }
                  }
                  return (l || d(t, C))(i, n, !h, e, !n || tt.test(t) && ft(n.parentNode) || n), e
              }, e.sortStable = b.split("").sort(D).join("") === b, e.detectDuplicates = !!c, l(), e.sortDetached = At((function(t) {
                  return 1 & t.compareDocumentPosition(C.createElement("fieldset"))
              })), At((function(t) {
                  return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
              })) || ct("type|href|height|width", (function(t, n, e) {
                  if (!e) return t.getAttribute(n, "type" === n.toLowerCase() ? 1 : 2)
              })), e.attributes && At((function(t) {
                  return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
              })) || ct("value", (function(t, n, e) {
                  if (!e && "input" === t.nodeName.toLowerCase()) return t.defaultValue
              })), At((function(t) {
                  return null == t.getAttribute("disabled")
              })) || ct(R, (function(t, n, e) {
                  var r;
                  if (!e) return !0 === t[n] ? n.toLowerCase() : (r = t.getAttributeNode(n)) && r.specified ? r.value : null
              })), dt
          }(e);
      v.find = k, v.expr = k.selectors, v.expr[":"] = v.expr.pseudos, v.uniqueSort = v.unique = k.uniqueSort, v.text = k.getText, v.isXMLDoc = k.isXML, v.contains = k.contains, v.escapeSelector = k.escape;
      var E = function(t, n, e) {
              for (var r = [], i = void 0 !== e;
                  (t = t[n]) && 9 !== t.nodeType;)
                  if (1 === t.nodeType) {
                      if (i && v(t).is(e)) break;
                      r.push(t)
                  } return r
          },
          I = function(t, n) {
              for (var e = []; t; t = t.nextSibling) 1 === t.nodeType && t !== n && e.push(t);
              return e
          },
          D = v.expr.match.needsContext;

      function G(t, n) {
          return t.nodeName && t.nodeName.toLowerCase() === n.toLowerCase()
      }
      var _ = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

      function S(t, n, e) {
          return f(n) ? v.grep(t, (function(t, r) {
              return !!n.call(t, r, t) !== e
          })) : n.nodeType ? v.grep(t, (function(t) {
              return t === n !== e
          })) : "string" != typeof n ? v.grep(t, (function(t) {
              return A.call(n, t) > -1 !== e
          })) : v.filter(n, t, e)
      }
      v.filter = function(t, n, e) {
          var r = n[0];
          return e && (t = ":not(" + t + ")"), 1 === n.length && 1 === r.nodeType ? v.find.matchesSelector(r, t) ? [r] : [] : v.find.matches(t, v.grep(n, (function(t) {
              return 1 === t.nodeType
          })))
      }, v.fn.extend({
          find: function(t) {
              var n, e, r = this.length,
                  i = this;
              if ("string" != typeof t) return this.pushStack(v(t).filter((function() {
                  for (n = 0; n < r; n++)
                      if (v.contains(i[n], this)) return !0
              })));
              for (e = this.pushStack([]), n = 0; n < r; n++) v.find(t, i[n], e);
              return r > 1 ? v.uniqueSort(e) : e
          },
          filter: function(t) {
              return this.pushStack(S(this, t || [], !1))
          },
          not: function(t) {
              return this.pushStack(S(this, t || [], !0))
          },
          is: function(t) {
              return !!S(this, "string" == typeof t && D.test(t) ? v(t) : t || [], !1).length
          }
      });
      var z, P = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
      (v.fn.init = function(t, n, e) {
          var r, i;
          if (!t) return this;
          if (e = e || z, "string" == typeof t) {
              if (!(r = "<" === t[0] && ">" === t[t.length - 1] && t.length >= 3 ? [null, t, null] : P.exec(t)) || !r[1] && n) return !n || n.jquery ? (n || e).find(t) : this.constructor(n).find(t);
              if (r[1]) {
                  if (n = n instanceof v ? n[0] : n, v.merge(this, v.parseHTML(r[1], n && n.nodeType ? n.ownerDocument || n : x, !0)), _.test(r[1]) && v.isPlainObject(n))
                      for (r in n) f(this[r]) ? this[r](n[r]) : this.attr(r, n[r]);
                  return this
              }
              return (i = x.getElementById(r[2])) && (this[0] = i, this.length = 1), this
          }
          return t.nodeType ? (this[0] = t, this.length = 1, this) : f(t) ? void 0 !== e.ready ? e.ready(t) : t(v) : v.makeArray(t, this)
      }).prototype = v.fn, z = v(x);
      var O = /^(?:parents|prev(?:Until|All))/,
          K = {
              children: !0,
              contents: !0,
              next: !0,
              prev: !0
          };

      function R(t, n) {
          for (;
              (t = t[n]) && 1 !== t.nodeType;);
          return t
      }
      v.fn.extend({
          has: function(t) {
              var n = v(t, this),
                  e = n.length;
              return this.filter((function() {
                  for (var t = 0; t < e; t++)
                      if (v.contains(this, n[t])) return !0
              }))
          },
          closest: function(t, n) {
              var e, r = 0,
                  i = this.length,
                  a = [],
                  o = "string" != typeof t && v(t);
              if (!D.test(t))
                  for (; r < i; r++)
                      for (e = this[r]; e && e !== n; e = e.parentNode)
                          if (e.nodeType < 11 && (o ? o.index(e) > -1 : 1 === e.nodeType && v.find.matchesSelector(e, t))) {
                              a.push(e);
                              break
                          } return this.pushStack(a.length > 1 ? v.uniqueSort(a) : a)
          },
          index: function(t) {
              return t ? "string" == typeof t ? A.call(v(t), this[0]) : A.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
          },
          add: function(t, n) {
              return this.pushStack(v.uniqueSort(v.merge(this.get(), v(t, n))))
          },
          addBack: function(t) {
              return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
          }
      }), v.each({
          parent: function(t) {
              var n = t.parentNode;
              return n && 11 !== n.nodeType ? n : null
          },
          parents: function(t) {
              return E(t, "parentNode")
          },
          parentsUntil: function(t, n, e) {
              return E(t, "parentNode", e)
          },
          next: function(t) {
              return R(t, "nextSibling")
          },
          prev: function(t) {
              return R(t, "previousSibling")
          },
          nextAll: function(t) {
              return E(t, "nextSibling")
          },
          prevAll: function(t) {
              return E(t, "previousSibling")
          },
          nextUntil: function(t, n, e) {
              return E(t, "nextSibling", e)
          },
          prevUntil: function(t, n, e) {
              return E(t, "previousSibling", e)
          },
          siblings: function(t) {
              return I((t.parentNode || {}).firstChild, t)
          },
          children: function(t) {
              return I(t.firstChild)
          },
          contents: function(t) {
              return null != t.contentDocument && o(t.contentDocument) ? t.contentDocument : (G(t, "template") && (t = t.content || t), v.merge([], t.childNodes))
          }
      }, (function(t, n) {
          v.fn[t] = function(e, r) {
              var i = v.map(this, n, e);
              return "Until" !== t.slice(-5) && (r = e), r && "string" == typeof r && (i = v.filter(r, i)), this.length > 1 && (K[t] || v.uniqueSort(i), O.test(t) && i.reverse()), this.pushStack(i)
          }
      }));
      var H = /[^\x20\t\r\n\f]+/g;

      function M(t) {
          return t
      }

      function F(t) {
          throw t
      }

      function T(t, n, e, r) {
          var i;
          try {
              t && f(i = t.promise) ? i.call(t).done(n).fail(e) : t && f(i = t.then) ? i.call(t, n, e) : n.apply(void 0, [t].slice(r))
          } catch (t) {
              e.apply(void 0, [t])
          }
      }
      v.Callbacks = function(t) {
          t = "string" == typeof t ? function(t) {
              var n = {};
              return v.each(t.match(H) || [], (function(t, e) {
                  n[e] = !0
              })), n
          }(t) : v.extend({}, t);
          var n, e, r, i, a = [],
              o = [],
              d = -1,
              s = function() {
                  for (i = i || t.once, r = n = !0; o.length; d = -1)
                      for (e = o.shift(); ++d < a.length;) !1 === a[d].apply(e[0], e[1]) && t.stopOnFalse && (d = a.length, e = !1);
                  t.memory || (e = !1), n = !1, i && (a = e ? [] : "")
              },
              p = {
                  add: function() {
                      return a && (e && !n && (d = a.length - 1, o.push(e)), function n(e) {
                          v.each(e, (function(e, r) {
                              f(r) ? t.unique && p.has(r) || a.push(r) : r && r.length && "string" !== y(r) && n(r)
                          }))
                      }(arguments), e && !n && s()), this
                  },
                  remove: function() {
                      return v.each(arguments, (function(t, n) {
                          for (var e;
                              (e = v.inArray(n, a, e)) > -1;) a.splice(e, 1), e <= d && d--
                      })), this
                  },
                  has: function(t) {
                      return t ? v.inArray(t, a) > -1 : a.length > 0
                  },
                  empty: function() {
                      return a && (a = []), this
                  },
                  disable: function() {
                      return i = o = [], a = e = "", this
                  },
                  disabled: function() {
                      return !a
                  },
                  lock: function() {
                      return i = o = [], e || n || (a = e = ""), this
                  },
                  locked: function() {
                      return !!i
                  },
                  fireWith: function(t, e) {
                      return i || (e = [t, (e = e || []).slice ? e.slice() : e], o.push(e), n || s()), this
                  },
                  fire: function() {
                      return p.fireWith(this, arguments), this
                  },
                  fired: function() {
                      return !!r
                  }
              };
          return p
      }, v.extend({
          Deferred: function(t) {
              var n = [
                      ["notify", "progress", v.Callbacks("memory"), v.Callbacks("memory"), 2],
                      ["resolve", "done", v.Callbacks("once memory"), v.Callbacks("once memory"), 0, "resolved"],
                      ["reject", "fail", v.Callbacks("once memory"), v.Callbacks("once memory"), 1, "rejected"]
                  ],
                  r = "pending",
                  i = {
                      state: function() {
                          return r
                      },
                      always: function() {
                          return a.done(arguments).fail(arguments), this
                      },
                      catch: function(t) {
                          return i.then(null, t)
                      },
                      pipe: function() {
                          var t = arguments;
                          return v.Deferred((function(e) {
                              v.each(n, (function(n, r) {
                                  var i = f(t[r[4]]) && t[r[4]];
                                  a[r[1]]((function() {
                                      var t = i && i.apply(this, arguments);
                                      t && f(t.promise) ? t.promise().progress(e.notify).done(e.resolve).fail(e.reject) : e[r[0] + "With"](this, i ? [t] : arguments)
                                  }))
                              })), t = null
                          })).promise()
                      },
                      then: function(t, r, i) {
                          var a = 0;

                          function o(t, n, r, i) {
                              return function() {
                                  var d = this,
                                      s = arguments,
                                      p = function() {
                                          var e, p;
                                          if (!(t < a)) {
                                              if ((e = r.apply(d, s)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                              p = e && ("object" == typeof e || "function" == typeof e) && e.then, f(p) ? i ? p.call(e, o(a, n, M, i), o(a, n, F, i)) : (a++, p.call(e, o(a, n, M, i), o(a, n, F, i), o(a, n, M, n.notifyWith))) : (r !== M && (d = void 0, s = [e]), (i || n.resolveWith)(d, s))
                                          }
                                      },
                                      A = i ? p : function() {
                                          try {
                                              p()
                                          } catch (e) {
                                              v.Deferred.exceptionHook && v.Deferred.exceptionHook(e, A.stackTrace), t + 1 >= a && (r !== F && (d = void 0, s = [e]), n.rejectWith(d, s))
                                          }
                                      };
                                  t ? A() : (v.Deferred.getStackHook && (A.stackTrace = v.Deferred.getStackHook()), e.setTimeout(A))
                              }
                          }
                          return v.Deferred((function(e) {
                              n[0][3].add(o(0, e, f(i) ? i : M, e.notifyWith)), n[1][3].add(o(0, e, f(t) ? t : M)), n[2][3].add(o(0, e, f(r) ? r : F))
                          })).promise()
                      },
                      promise: function(t) {
                          return null != t ? v.extend(t, i) : i
                      }
                  },
                  a = {};
              return v.each(n, (function(t, e) {
                  var o = e[2],
                      d = e[5];
                  i[e[1]] = o.add, d && o.add((function() {
                      r = d
                  }), n[3 - t][2].disable, n[3 - t][3].disable, n[0][2].lock, n[0][3].lock), o.add(e[3].fire), a[e[0]] = function() {
                      return a[e[0] + "With"](this === a ? void 0 : this, arguments), this
                  }, a[e[0] + "With"] = o.fireWith
              })), i.promise(a), t && t.call(a, a), a
          },
          when: function(t) {
              var n = arguments.length,
                  e = n,
                  r = Array(e),
                  i = d.call(arguments),
                  a = v.Deferred(),
                  o = function(t) {
                      return function(e) {
                          r[t] = this, i[t] = arguments.length > 1 ? d.call(arguments) : e, --n || a.resolveWith(r, i)
                      }
                  };
              if (n <= 1 && (T(t, a.done(o(e)).resolve, a.reject, !n), "pending" === a.state() || f(i[e] && i[e].then))) return a.then();
              for (; e--;) T(i[e], o(e), a.reject);
              return a.promise()
          }
      });
      var q = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
      v.Deferred.exceptionHook = function(t, n) {
          e.console && e.console.warn && t && q.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
      }, v.readyException = function(t) {
          e.setTimeout((function() {
              throw t
          }))
      };
      var j = v.Deferred();

      function L() {
          x.removeEventListener("DOMContentLoaded", L), e.removeEventListener("load", L), v.ready()
      }
      v.fn.ready = function(t) {
          return j.then(t).catch((function(t) {
              v.readyException(t)
          })), this
      }, v.extend({
          isReady: !1,
          readyWait: 1,
          ready: function(t) {
              (!0 === t ? --v.readyWait : v.isReady) || (v.isReady = !0, !0 !== t && --v.readyWait > 0 || j.resolveWith(x, [v]))
          }
      }), v.ready.then = j.then, "complete" === x.readyState || "loading" !== x.readyState && !x.documentElement.doScroll ? e.setTimeout(v.ready) : (x.addEventListener("DOMContentLoaded", L), e.addEventListener("load", L));
      var U = function(t, n, e, r, i, a, o) {
              var d = 0,
                  s = t.length,
                  p = null == e;
              if ("object" === y(e))
                  for (d in i = !0, e) U(t, n, d, e[d], !0, a, o);
              else if (void 0 !== r && (i = !0, f(r) || (o = !0), p && (o ? (n.call(t, r), n = null) : (p = n, n = function(t, n, e) {
                      return p.call(v(t), e)
                  })), n))
                  for (; d < s; d++) n(t[d], e, o ? r : r.call(t[d], d, n(t[d], e)));
              return i ? t : p ? n.call(t) : s ? n(t[0], e) : a
          },
          Q = /^-ms-/,
          N = /-([a-z])/g;

      function Y(t, n) {
          return n.toUpperCase()
      }

      function W(t) {
          return t.replace(Q, "ms-").replace(N, Y)
      }
      var Z = function(t) {
          return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
      };

      function V() {
          this.expando = v.expando + V.uid++
      }
      V.uid = 1, V.prototype = {
          cache: function(t) {
              var n = t[this.expando];
              return n || (n = Object.create(null), Z(t) && (t.nodeType ? t[this.expando] = n : Object.defineProperty(t, this.expando, {
                  value: n,
                  configurable: !0
              }))), n
          },
          set: function(t, n, e) {
              var r, i = this.cache(t);
              if ("string" == typeof n) i[W(n)] = e;
              else
                  for (r in n) i[W(r)] = n[r];
              return i
          },
          get: function(t, n) {
              return void 0 === n ? this.cache(t) : t[this.expando] && t[this.expando][W(n)]
          },
          access: function(t, n, e) {
              return void 0 === n || n && "string" == typeof n && void 0 === e ? this.get(t, n) : (this.set(t, n, e), void 0 !== e ? e : n)
          },
          remove: function(t, n) {
              var e, r = t[this.expando];
              if (void 0 !== r) {
                  if (void 0 !== n) {
                      e = (n = Array.isArray(n) ? n.map(W) : (n = W(n)) in r ? [n] : n.match(H) || []).length;
                      for (; e--;) delete r[n[e]]
                  }(void 0 === n || v.isEmptyObject(r)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
              }
          },
          hasData: function(t) {
              var n = t[this.expando];
              return void 0 !== n && !v.isEmptyObject(n)
          }
      };
      var X = new V,
          $ = new V,
          J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
          tt = /[A-Z]/g;

      function nt(t, n, e) {
          var r;
          if (void 0 === e && 1 === t.nodeType)
              if (r = "data-" + n.replace(tt, "-$&").toLowerCase(), "string" == typeof(e = t.getAttribute(r))) {
                  try {
                      e = function(t) {
                          return "true" === t || "false" !== t && ("null" === t ? null : t === +t + "" ? +t : J.test(t) ? JSON.parse(t) : t)
                      }(e)
                  } catch (t) {}
                  $.set(t, n, e)
              } else e = void 0;
          return e
      }
      v.extend({
          hasData: function(t) {
              return $.hasData(t) || X.hasData(t)
          },
          data: function(t, n, e) {
              return $.access(t, n, e)
          },
          removeData: function(t, n) {
              $.remove(t, n)
          },
          _data: function(t, n, e) {
              return X.access(t, n, e)
          },
          _removeData: function(t, n) {
              X.remove(t, n)
          }
      }), v.fn.extend({
          data: function(t, n) {
              var e, r, i, a = this[0],
                  o = a && a.attributes;
              if (void 0 === t) {
                  if (this.length && (i = $.get(a), 1 === a.nodeType && !X.get(a, "hasDataAttrs"))) {
                      for (e = o.length; e--;) o[e] && 0 === (r = o[e].name).indexOf("data-") && (r = W(r.slice(5)), nt(a, r, i[r]));
                      X.set(a, "hasDataAttrs", !0)
                  }
                  return i
              }
              return "object" == typeof t ? this.each((function() {
                  $.set(this, t)
              })) : U(this, (function(n) {
                  var e;
                  if (a && void 0 === n) return void 0 !== (e = $.get(a, t)) || void 0 !== (e = nt(a, t)) ? e : void 0;
                  this.each((function() {
                      $.set(this, t, n)
                  }))
              }), null, n, arguments.length > 1, null, !0)
          },
          removeData: function(t) {
              return this.each((function() {
                  $.remove(this, t)
              }))
          }
      }), v.extend({
          queue: function(t, n, e) {
              var r;
              if (t) return n = (n || "fx") + "queue", r = X.get(t, n), e && (!r || Array.isArray(e) ? r = X.access(t, n, v.makeArray(e)) : r.push(e)), r || []
          },
          dequeue: function(t, n) {
              n = n || "fx";
              var e = v.queue(t, n),
                  r = e.length,
                  i = e.shift(),
                  a = v._queueHooks(t, n);
              "inprogress" === i && (i = e.shift(), r--), i && ("fx" === n && e.unshift("inprogress"), delete a.stop, i.call(t, (function() {
                  v.dequeue(t, n)
              }), a)), !r && a && a.empty.fire()
          },
          _queueHooks: function(t, n) {
              var e = n + "queueHooks";
              return X.get(t, e) || X.access(t, e, {
                  empty: v.Callbacks("once memory").add((function() {
                      X.remove(t, [n + "queue", e])
                  }))
              })
          }
      }), v.fn.extend({
          queue: function(t, n) {
              var e = 2;
              return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? v.queue(this[0], t) : void 0 === n ? this : this.each((function() {
                  var e = v.queue(this, t, n);
                  v._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && v.dequeue(this, t)
              }))
          },
          dequeue: function(t) {
              return this.each((function() {
                  v.dequeue(this, t)
              }))
          },
          clearQueue: function(t) {
              return this.queue(t || "fx", [])
          },
          promise: function(t, n) {
              var e, r = 1,
                  i = v.Deferred(),
                  a = this,
                  o = this.length,
                  d = function() {
                      --r || i.resolveWith(a, [a])
                  };
              for ("string" != typeof t && (n = t, t = void 0), t = t || "fx"; o--;)(e = X.get(a[o], t + "queueHooks")) && e.empty && (r++, e.empty.add(d));
              return d(), i.promise(n)
          }
      });
      var et = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
          rt = new RegExp("^(?:([+-])=|)(" + et + ")([a-z%]*)$", "i"),
          it = ["Top", "Right", "Bottom", "Left"],
          at = x.documentElement,
          ot = function(t) {
              return v.contains(t.ownerDocument, t)
          },
          dt = {
              composed: !0
          };
      at.getRootNode && (ot = function(t) {
          return v.contains(t.ownerDocument, t) || t.getRootNode(dt) === t.ownerDocument
      });
      var st = function(t, n) {
          return "none" === (t = n || t).style.display || "" === t.style.display && ot(t) && "none" === v.css(t, "display")
      };

      function pt(t, n, e, r) {
          var i, a, o = 20,
              d = r ? function() {
                  return r.cur()
              } : function() {
                  return v.css(t, n, "")
              },
              s = d(),
              p = e && e[3] || (v.cssNumber[n] ? "" : "px"),
              A = t.nodeType && (v.cssNumber[n] || "px" !== p && +s) && rt.exec(v.css(t, n));
          if (A && A[3] !== p) {
              for (s /= 2, p = p || A[3], A = +s || 1; o--;) v.style(t, n, A + p), (1 - a) * (1 - (a = d() / s || .5)) <= 0 && (o = 0), A /= a;
              A *= 2, v.style(t, n, A + p), e = e || []
          }
          return e && (A = +A || +s || 0, i = e[1] ? A + (e[1] + 1) * e[2] : +e[2], r && (r.unit = p, r.start = A, r.end = i)), i
      }
      var At = {};

      function ct(t) {
          var n, e = t.ownerDocument,
              r = t.nodeName,
              i = At[r];
          return i || (n = e.body.appendChild(e.createElement(r)), i = v.css(n, "display"), n.parentNode.removeChild(n), "none" === i && (i = "block"), At[r] = i, i)
      }

      function lt(t, n) {
          for (var e, r, i = [], a = 0, o = t.length; a < o; a++)(r = t[a]).style && (e = r.style.display, n ? ("none" === e && (i[a] = X.get(r, "display") || null, i[a] || (r.style.display = "")), "" === r.style.display && st(r) && (i[a] = ct(r))) : "none" !== e && (i[a] = "none", X.set(r, "display", e)));
          for (a = 0; a < o; a++) null != i[a] && (t[a].style.display = i[a]);
          return t
      }
      v.fn.extend({
          show: function() {
              return lt(this, !0)
          },
          hide: function() {
              return lt(this)
          },
          toggle: function(t) {
              return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each((function() {
                  st(this) ? v(this).show() : v(this).hide()
              }))
          }
      });
      var Ct, gt, ht = /^(?:checkbox|radio)$/i,
          mt = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
          ft = /^$|^module$|\/(?:java|ecma)script/i;
      Ct = x.createDocumentFragment().appendChild(x.createElement("div")), (gt = x.createElement("input")).setAttribute("type", "radio"), gt.setAttribute("checked", "checked"), gt.setAttribute("name", "t"), Ct.appendChild(gt), m.checkClone = Ct.cloneNode(!0).cloneNode(!0).lastChild.checked, Ct.innerHTML = "<textarea>x</textarea>", m.noCloneChecked = !!Ct.cloneNode(!0).lastChild.defaultValue, Ct.innerHTML = "<option></option>", m.option = !!Ct.lastChild;
      var ut = {
          thead: [1, "<table>", "</table>"],
          col: [2, "<table><colgroup>", "</colgroup></table>"],
          tr: [2, "<table><tbody>", "</tbody></table>"],
          td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
          _default: [0, "", ""]
      };

      function xt(t, n) {
          var e;
          return e = void 0 !== t.getElementsByTagName ? t.getElementsByTagName(n || "*") : void 0 !== t.querySelectorAll ? t.querySelectorAll(n || "*") : [], void 0 === n || n && G(t, n) ? v.merge([t], e) : e
      }

      function bt(t, n) {
          for (var e = 0, r = t.length; e < r; e++) X.set(t[e], "globalEval", !n || X.get(n[e], "globalEval"))
      }
      ut.tbody = ut.tfoot = ut.colgroup = ut.caption = ut.thead, ut.th = ut.td, m.option || (ut.optgroup = ut.option = [1, "<select multiple='multiple'>", "</select>"]);
      var Bt = /<|&#?\w+;/;

      function yt(t, n, e, r, i) {
          for (var a, o, d, s, p, A, c = n.createDocumentFragment(), l = [], C = 0, g = t.length; C < g; C++)
              if ((a = t[C]) || 0 === a)
                  if ("object" === y(a)) v.merge(l, a.nodeType ? [a] : a);
                  else if (Bt.test(a)) {
              for (o = o || c.appendChild(n.createElement("div")), d = (mt.exec(a) || ["", ""])[1].toLowerCase(), s = ut[d] || ut._default, o.innerHTML = s[1] + v.htmlPrefilter(a) + s[2], A = s[0]; A--;) o = o.lastChild;
              v.merge(l, o.childNodes), (o = c.firstChild).textContent = ""
          } else l.push(n.createTextNode(a));
          for (c.textContent = "", C = 0; a = l[C++];)
              if (r && v.inArray(a, r) > -1) i && i.push(a);
              else if (p = ot(a), o = xt(c.appendChild(a), "script"), p && bt(o), e)
              for (A = 0; a = o[A++];) ft.test(a.type || "") && e.push(a);
          return c
      }
      var vt = /^key/,
          wt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
          kt = /^([^.]*)(?:\.(.+)|)/;

      function Et() {
          return !0
      }

      function It() {
          return !1
      }

      function Dt(t, n) {
          return t === function() {
              try {
                  return x.activeElement
              } catch (t) {}
          }() == ("focus" === n)
      }

      function Gt(t, n, e, r, i, a) {
          var o, d;
          if ("object" == typeof n) {
              for (d in "string" != typeof e && (r = r || e, e = void 0), n) Gt(t, d, e, r, n[d], a);
              return t
          }
          if (null == r && null == i ? (i = e, r = e = void 0) : null == i && ("string" == typeof e ? (i = r, r = void 0) : (i = r, r = e, e = void 0)), !1 === i) i = It;
          else if (!i) return t;
          return 1 === a && (o = i, (i = function(t) {
              return v().off(t), o.apply(this, arguments)
          }).guid = o.guid || (o.guid = v.guid++)), t.each((function() {
              v.event.add(this, n, i, r, e)
          }))
      }

      function _t(t, n, e) {
          e ? (X.set(t, n, !1), v.event.add(t, n, {
              namespace: !1,
              handler: function(t) {
                  var r, i, a = X.get(this, n);
                  if (1 & t.isTrigger && this[n]) {
                      if (a.length)(v.event.special[n] || {}).delegateType && t.stopPropagation();
                      else if (a = d.call(arguments), X.set(this, n, a), r = e(this, n), this[n](), a !== (i = X.get(this, n)) || r ? X.set(this, n, !1) : i = {}, a !== i) return t.stopImmediatePropagation(), t.preventDefault(), i.value
                  } else a.length && (X.set(this, n, {
                      value: v.event.trigger(v.extend(a[0], v.Event.prototype), a.slice(1), this)
                  }), t.stopImmediatePropagation())
              }
          })) : void 0 === X.get(t, n) && v.event.add(t, n, Et)
      }
      v.event = {
          global: {},
          add: function(t, n, e, r, i) {
              var a, o, d, s, p, A, c, l, C, g, h, m = X.get(t);
              if (Z(t))
                  for (e.handler && (e = (a = e).handler, i = a.selector), i && v.find.matchesSelector(at, i), e.guid || (e.guid = v.guid++), (s = m.events) || (s = m.events = Object.create(null)), (o = m.handle) || (o = m.handle = function(n) {
                          return void 0 !== v && v.event.triggered !== n.type ? v.event.dispatch.apply(t, arguments) : void 0
                      }), p = (n = (n || "").match(H) || [""]).length; p--;) C = h = (d = kt.exec(n[p]) || [])[1], g = (d[2] || "").split(".").sort(), C && (c = v.event.special[C] || {}, C = (i ? c.delegateType : c.bindType) || C, c = v.event.special[C] || {}, A = v.extend({
                      type: C,
                      origType: h,
                      data: r,
                      handler: e,
                      guid: e.guid,
                      selector: i,
                      needsContext: i && v.expr.match.needsContext.test(i),
                      namespace: g.join(".")
                  }, a), (l = s[C]) || ((l = s[C] = []).delegateCount = 0, c.setup && !1 !== c.setup.call(t, r, g, o) || t.addEventListener && t.addEventListener(C, o)), c.add && (c.add.call(t, A), A.handler.guid || (A.handler.guid = e.guid)), i ? l.splice(l.delegateCount++, 0, A) : l.push(A), v.event.global[C] = !0)
          },
          remove: function(t, n, e, r, i) {
              var a, o, d, s, p, A, c, l, C, g, h, m = X.hasData(t) && X.get(t);
              if (m && (s = m.events)) {
                  for (p = (n = (n || "").match(H) || [""]).length; p--;)
                      if (C = h = (d = kt.exec(n[p]) || [])[1], g = (d[2] || "").split(".").sort(), C) {
                          for (c = v.event.special[C] || {}, l = s[C = (r ? c.delegateType : c.bindType) || C] || [], d = d[2] && new RegExp("(^|\\.)" + g.join("\\.(?:.*\\.|)") + "(\\.|$)"), o = a = l.length; a--;) A = l[a], !i && h !== A.origType || e && e.guid !== A.guid || d && !d.test(A.namespace) || r && r !== A.selector && ("**" !== r || !A.selector) || (l.splice(a, 1), A.selector && l.delegateCount--, c.remove && c.remove.call(t, A));
                          o && !l.length && (c.teardown && !1 !== c.teardown.call(t, g, m.handle) || v.removeEvent(t, C, m.handle), delete s[C])
                      } else
                          for (C in s) v.event.remove(t, C + n[p], e, r, !0);
                  v.isEmptyObject(s) && X.remove(t, "handle events")
              }
          },
          dispatch: function(t) {
              var n, e, r, i, a, o, d = new Array(arguments.length),
                  s = v.event.fix(t),
                  p = (X.get(this, "events") || Object.create(null))[s.type] || [],
                  A = v.event.special[s.type] || {};
              for (d[0] = s, n = 1; n < arguments.length; n++) d[n] = arguments[n];
              if (s.delegateTarget = this, !A.preDispatch || !1 !== A.preDispatch.call(this, s)) {
                  for (o = v.event.handlers.call(this, s, p), n = 0;
                      (i = o[n++]) && !s.isPropagationStopped();)
                      for (s.currentTarget = i.elem, e = 0;
                          (a = i.handlers[e++]) && !s.isImmediatePropagationStopped();) s.rnamespace && !1 !== a.namespace && !s.rnamespace.test(a.namespace) || (s.handleObj = a, s.data = a.data, void 0 !== (r = ((v.event.special[a.origType] || {}).handle || a.handler).apply(i.elem, d)) && !1 === (s.result = r) && (s.preventDefault(), s.stopPropagation()));
                  return A.postDispatch && A.postDispatch.call(this, s), s.result
              }
          },
          handlers: function(t, n) {
              var e, r, i, a, o, d = [],
                  s = n.delegateCount,
                  p = t.target;
              if (s && p.nodeType && !("click" === t.type && t.button >= 1))
                  for (; p !== this; p = p.parentNode || this)
                      if (1 === p.nodeType && ("click" !== t.type || !0 !== p.disabled)) {
                          for (a = [], o = {}, e = 0; e < s; e++) void 0 === o[i = (r = n[e]).selector + " "] && (o[i] = r.needsContext ? v(i, this).index(p) > -1 : v.find(i, this, null, [p]).length), o[i] && a.push(r);
                          a.length && d.push({
                              elem: p,
                              handlers: a
                          })
                      } return p = this, s < n.length && d.push({
                  elem: p,
                  handlers: n.slice(s)
              }), d
          },
          addProp: function(t, n) {
              Object.defineProperty(v.Event.prototype, t, {
                  enumerable: !0,
                  configurable: !0,
                  get: f(n) ? function() {
                      if (this.originalEvent) return n(this.originalEvent)
                  } : function() {
                      if (this.originalEvent) return this.originalEvent[t]
                  },
                  set: function(n) {
                      Object.defineProperty(this, t, {
                          enumerable: !0,
                          configurable: !0,
                          writable: !0,
                          value: n
                      })
                  }
              })
          },
          fix: function(t) {
              return t[v.expando] ? t : new v.Event(t)
          },
          special: {
              load: {
                  noBubble: !0
              },
              click: {
                  setup: function(t) {
                      var n = this || t;
                      return ht.test(n.type) && n.click && G(n, "input") && _t(n, "click", Et), !1
                  },
                  trigger: function(t) {
                      var n = this || t;
                      return ht.test(n.type) && n.click && G(n, "input") && _t(n, "click"), !0
                  },
                  _default: function(t) {
                      var n = t.target;
                      return ht.test(n.type) && n.click && G(n, "input") && X.get(n, "click") || G(n, "a")
                  }
              },
              beforeunload: {
                  postDispatch: function(t) {
                      void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                  }
              }
          }
      }, v.removeEvent = function(t, n, e) {
          t.removeEventListener && t.removeEventListener(n, e)
      }, v.Event = function(t, n) {
          if (!(this instanceof v.Event)) return new v.Event(t, n);
          t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && !1 === t.returnValue ? Et : It, this.target = t.target && 3 === t.target.nodeType ? t.target.parentNode : t.target, this.currentTarget = t.currentTarget, this.relatedTarget = t.relatedTarget) : this.type = t, n && v.extend(this, n), this.timeStamp = t && t.timeStamp || Date.now(), this[v.expando] = !0
      }, v.Event.prototype = {
          constructor: v.Event,
          isDefaultPrevented: It,
          isPropagationStopped: It,
          isImmediatePropagationStopped: It,
          isSimulated: !1,
          preventDefault: function() {
              var t = this.originalEvent;
              this.isDefaultPrevented = Et, t && !this.isSimulated && t.preventDefault()
          },
          stopPropagation: function() {
              var t = this.originalEvent;
              this.isPropagationStopped = Et, t && !this.isSimulated && t.stopPropagation()
          },
          stopImmediatePropagation: function() {
              var t = this.originalEvent;
              this.isImmediatePropagationStopped = Et, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
          }
      }, v.each({
          altKey: !0,
          bubbles: !0,
          cancelable: !0,
          changedTouches: !0,
          ctrlKey: !0,
          detail: !0,
          eventPhase: !0,
          metaKey: !0,
          pageX: !0,
          pageY: !0,
          shiftKey: !0,
          view: !0,
          char: !0,
          code: !0,
          charCode: !0,
          key: !0,
          keyCode: !0,
          button: !0,
          buttons: !0,
          clientX: !0,
          clientY: !0,
          offsetX: !0,
          offsetY: !0,
          pointerId: !0,
          pointerType: !0,
          screenX: !0,
          screenY: !0,
          targetTouches: !0,
          toElement: !0,
          touches: !0,
          which: function(t) {
              var n = t.button;
              return null == t.which && vt.test(t.type) ? null != t.charCode ? t.charCode : t.keyCode : !t.which && void 0 !== n && wt.test(t.type) ? 1 & n ? 1 : 2 & n ? 3 : 4 & n ? 2 : 0 : t.which
          }
      }, v.event.addProp), v.each({
          focus: "focusin",
          blur: "focusout"
      }, (function(t, n) {
          v.event.special[t] = {
              setup: function() {
                  return _t(this, t, Dt), !1
              },
              trigger: function() {
                  return _t(this, t), !0
              },
              delegateType: n
          }
      })), v.each({
          mouseenter: "mouseover",
          mouseleave: "mouseout",
          pointerenter: "pointerover",
          pointerleave: "pointerout"
      }, (function(t, n) {
          v.event.special[t] = {
              delegateType: n,
              bindType: n,
              handle: function(t) {
                  var e, r = this,
                      i = t.relatedTarget,
                      a = t.handleObj;
                  return i && (i === r || v.contains(r, i)) || (t.type = a.origType, e = a.handler.apply(this, arguments), t.type = n), e
              }
          }
      })), v.fn.extend({
          on: function(t, n, e, r) {
              return Gt(this, t, n, e, r)
          },
          one: function(t, n, e, r) {
              return Gt(this, t, n, e, r, 1)
          },
          off: function(t, n, e) {
              var r, i;
              if (t && t.preventDefault && t.handleObj) return r = t.handleObj, v(t.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
              if ("object" == typeof t) {
                  for (i in t) this.off(i, n, t[i]);
                  return this
              }
              return !1 !== n && "function" != typeof n || (e = n, n = void 0), !1 === e && (e = It), this.each((function() {
                  v.event.remove(this, t, e, n)
              }))
          }
      });
      var St = /<script|<style|<link/i,
          zt = /checked\s*(?:[^=]|=\s*.checked.)/i,
          Pt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

      function Ot(t, n) {
          return G(t, "table") && G(11 !== n.nodeType ? n : n.firstChild, "tr") && v(t).children("tbody")[0] || t
      }

      function Kt(t) {
          return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
      }

      function Rt(t) {
          return "true/" === (t.type || "").slice(0, 5) ? t.type = t.type.slice(5) : t.removeAttribute("type"), t
      }

      function Ht(t, n) {
          var e, r, i, a, o, d;
          if (1 === n.nodeType) {
              if (X.hasData(t) && (d = X.get(t).events))
                  for (i in X.remove(n, "handle events"), d)
                      for (e = 0, r = d[i].length; e < r; e++) v.event.add(n, i, d[i][e]);
              $.hasData(t) && (a = $.access(t), o = v.extend({}, a), $.set(n, o))
          }
      }

      function Mt(t, n) {
          var e = n.nodeName.toLowerCase();
          "input" === e && ht.test(t.type) ? n.checked = t.checked : "input" !== e && "textarea" !== e || (n.defaultValue = t.defaultValue)
      }

      function Ft(t, n, e, r) {
          n = s(n);
          var i, a, o, d, p, A, c = 0,
              l = t.length,
              C = l - 1,
              g = n[0],
              h = f(g);
          if (h || l > 1 && "string" == typeof g && !m.checkClone && zt.test(g)) return t.each((function(i) {
              var a = t.eq(i);
              h && (n[0] = g.call(this, i, a.html())), Ft(a, n, e, r)
          }));
          if (l && (a = (i = yt(n, t[0].ownerDocument, !1, t, r)).firstChild, 1 === i.childNodes.length && (i = a), a || r)) {
              for (d = (o = v.map(xt(i, "script"), Kt)).length; c < l; c++) p = i, c !== C && (p = v.clone(p, !0, !0), d && v.merge(o, xt(p, "script"))), e.call(t[c], p, c);
              if (d)
                  for (A = o[o.length - 1].ownerDocument, v.map(o, Rt), c = 0; c < d; c++) p = o[c], ft.test(p.type || "") && !X.access(p, "globalEval") && v.contains(A, p) && (p.src && "module" !== (p.type || "").toLowerCase() ? v._evalUrl && !p.noModule && v._evalUrl(p.src, {
                      nonce: p.nonce || p.getAttribute("nonce")
                  }, A) : B(p.textContent.replace(Pt, ""), p, A))
          }
          return t
      }

      function Tt(t, n, e) {
          for (var r, i = n ? v.filter(n, t) : t, a = 0; null != (r = i[a]); a++) e || 1 !== r.nodeType || v.cleanData(xt(r)), r.parentNode && (e && ot(r) && bt(xt(r, "script")), r.parentNode.removeChild(r));
          return t
      }
      v.extend({
          htmlPrefilter: function(t) {
              return t
          },
          clone: function(t, n, e) {
              var r, i, a, o, d = t.cloneNode(!0),
                  s = ot(t);
              if (!(m.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || v.isXMLDoc(t)))
                  for (o = xt(d), r = 0, i = (a = xt(t)).length; r < i; r++) Mt(a[r], o[r]);
              if (n)
                  if (e)
                      for (a = a || xt(t), o = o || xt(d), r = 0, i = a.length; r < i; r++) Ht(a[r], o[r]);
                  else Ht(t, d);
              return (o = xt(d, "script")).length > 0 && bt(o, !s && xt(t, "script")), d
          },
          cleanData: function(t) {
              for (var n, e, r, i = v.event.special, a = 0; void 0 !== (e = t[a]); a++)
                  if (Z(e)) {
                      if (n = e[X.expando]) {
                          if (n.events)
                              for (r in n.events) i[r] ? v.event.remove(e, r) : v.removeEvent(e, r, n.handle);
                          e[X.expando] = void 0
                      }
                      e[$.expando] && (e[$.expando] = void 0)
                  }
          }
      }), v.fn.extend({
          detach: function(t) {
              return Tt(this, t, !0)
          },
          remove: function(t) {
              return Tt(this, t)
          },
          text: function(t) {
              return U(this, (function(t) {
                  return void 0 === t ? v.text(this) : this.empty().each((function() {
                      1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                  }))
              }), null, t, arguments.length)
          },
          append: function() {
              return Ft(this, arguments, (function(t) {
                  1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Ot(this, t).appendChild(t)
              }))
          },
          prepend: function() {
              return Ft(this, arguments, (function(t) {
                  if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                      var n = Ot(this, t);
                      n.insertBefore(t, n.firstChild)
                  }
              }))
          },
          before: function() {
              return Ft(this, arguments, (function(t) {
                  this.parentNode && this.parentNode.insertBefore(t, this)
              }))
          },
          after: function() {
              return Ft(this, arguments, (function(t) {
                  this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
              }))
          },
          empty: function() {
              for (var t, n = 0; null != (t = this[n]); n++) 1 === t.nodeType && (v.cleanData(xt(t, !1)), t.textContent = "");
              return this
          },
          clone: function(t, n) {
              return t = null != t && t, n = null == n ? t : n, this.map((function() {
                  return v.clone(this, t, n)
              }))
          },
          html: function(t) {
              return U(this, (function(t) {
                  var n = this[0] || {},
                      e = 0,
                      r = this.length;
                  if (void 0 === t && 1 === n.nodeType) return n.innerHTML;
                  if ("string" == typeof t && !St.test(t) && !ut[(mt.exec(t) || ["", ""])[1].toLowerCase()]) {
                      t = v.htmlPrefilter(t);
                      try {
                          for (; e < r; e++) 1 === (n = this[e] || {}).nodeType && (v.cleanData(xt(n, !1)), n.innerHTML = t);
                          n = 0
                      } catch (t) {}
                  }
                  n && this.empty().append(t)
              }), null, t, arguments.length)
          },
          replaceWith: function() {
              var t = [];
              return Ft(this, arguments, (function(n) {
                  var e = this.parentNode;
                  v.inArray(this, t) < 0 && (v.cleanData(xt(this)), e && e.replaceChild(n, this))
              }), t)
          }
      }), v.each({
          appendTo: "append",
          prependTo: "prepend",
          insertBefore: "before",
          insertAfter: "after",
          replaceAll: "replaceWith"
      }, (function(t, n) {
          v.fn[t] = function(t) {
              for (var e, r = [], i = v(t), a = i.length - 1, o = 0; o <= a; o++) e = o === a ? this : this.clone(!0), v(i[o])[n](e), p.apply(r, e.get());
              return this.pushStack(r)
          }
      }));
      var qt = new RegExp("^(" + et + ")(?!px)[a-z%]+$", "i"),
          jt = function(t) {
              var n = t.ownerDocument.defaultView;
              return n && n.opener || (n = e), n.getComputedStyle(t)
          },
          Lt = function(t, n, e) {
              var r, i, a = {};
              for (i in n) a[i] = t.style[i], t.style[i] = n[i];
              for (i in r = e.call(t), n) t.style[i] = a[i];
              return r
          },
          Ut = new RegExp(it.join("|"), "i");

      function Qt(t, n, e) {
          var r, i, a, o, d = t.style;
          return (e = e || jt(t)) && ("" !== (o = e.getPropertyValue(n) || e[n]) || ot(t) || (o = v.style(t, n)), !m.pixelBoxStyles() && qt.test(o) && Ut.test(n) && (r = d.width, i = d.minWidth, a = d.maxWidth, d.minWidth = d.maxWidth = d.width = o, o = e.width, d.width = r, d.minWidth = i, d.maxWidth = a)), void 0 !== o ? o + "" : o
      }

      function Nt(t, n) {
          return {
              get: function() {
                  if (!t()) return (this.get = n).apply(this, arguments);
                  delete this.get
              }
          }
      }! function() {
          function t() {
              if (A) {
                  p.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", A.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", at.appendChild(p).appendChild(A);
                  var t = e.getComputedStyle(A);
                  r = "1%" !== t.top, s = 12 === n(t.marginLeft), A.style.right = "60%", o = 36 === n(t.right), i = 36 === n(t.width), A.style.position = "absolute", a = 12 === n(A.offsetWidth / 3), at.removeChild(p), A = null
              }
          }

          function n(t) {
              return Math.round(parseFloat(t))
          }
          var r, i, a, o, d, s, p = x.createElement("div"),
              A = x.createElement("div");
          A.style && (A.style.backgroundClip = "content-box", A.cloneNode(!0).style.backgroundClip = "", m.clearCloneStyle = "content-box" === A.style.backgroundClip, v.extend(m, {
              boxSizingReliable: function() {
                  return t(), i
              },
              pixelBoxStyles: function() {
                  return t(), o
              },
              pixelPosition: function() {
                  return t(), r
              },
              reliableMarginLeft: function() {
                  return t(), s
              },
              scrollboxSize: function() {
                  return t(), a
              },
              reliableTrDimensions: function() {
                  var t, n, r, i;
                  return null == d && (t = x.createElement("table"), n = x.createElement("tr"), r = x.createElement("div"), t.style.cssText = "position:absolute;left:-11111px", n.style.height = "1px", r.style.height = "9px", at.appendChild(t).appendChild(n).appendChild(r), i = e.getComputedStyle(n), d = parseInt(i.height) > 3, at.removeChild(t)), d
              }
          }))
      }();
      var Yt = ["Webkit", "Moz", "ms"],
          Wt = x.createElement("div").style,
          Zt = {};

      function Vt(t) {
          var n = v.cssProps[t] || Zt[t];
          return n || (t in Wt ? t : Zt[t] = function(t) {
              for (var n = t[0].toUpperCase() + t.slice(1), e = Yt.length; e--;)
                  if ((t = Yt[e] + n) in Wt) return t
          }(t) || t)
      }
      var Xt = /^(none|table(?!-c[ea]).+)/,
          $t = /^--/,
          Jt = {
              position: "absolute",
              visibility: "hidden",
              display: "block"
          },
          tn = {
              letterSpacing: "0",
              fontWeight: "400"
          };

      function nn(t, n, e) {
          var r = rt.exec(n);
          return r ? Math.max(0, r[2] - (e || 0)) + (r[3] || "px") : n
      }

      function en(t, n, e, r, i, a) {
          var o = "width" === n ? 1 : 0,
              d = 0,
              s = 0;
          if (e === (r ? "border" : "content")) return 0;
          for (; o < 4; o += 2) "margin" === e && (s += v.css(t, e + it[o], !0, i)), r ? ("content" === e && (s -= v.css(t, "padding" + it[o], !0, i)), "margin" !== e && (s -= v.css(t, "border" + it[o] + "Width", !0, i))) : (s += v.css(t, "padding" + it[o], !0, i), "padding" !== e ? s += v.css(t, "border" + it[o] + "Width", !0, i) : d += v.css(t, "border" + it[o] + "Width", !0, i));
          return !r && a >= 0 && (s += Math.max(0, Math.ceil(t["offset" + n[0].toUpperCase() + n.slice(1)] - a - s - d - .5)) || 0), s
      }

      function rn(t, n, e) {
          var r = jt(t),
              i = (!m.boxSizingReliable() || e) && "border-box" === v.css(t, "boxSizing", !1, r),
              a = i,
              o = Qt(t, n, r),
              d = "offset" + n[0].toUpperCase() + n.slice(1);
          if (qt.test(o)) {
              if (!e) return o;
              o = "auto"
          }
          return (!m.boxSizingReliable() && i || !m.reliableTrDimensions() && G(t, "tr") || "auto" === o || !parseFloat(o) && "inline" === v.css(t, "display", !1, r)) && t.getClientRects().length && (i = "border-box" === v.css(t, "boxSizing", !1, r), (a = d in t) && (o = t[d])), (o = parseFloat(o) || 0) + en(t, n, e || (i ? "border" : "content"), a, r, o) + "px"
      }

      function an(t, n, e, r, i) {
          return new an.prototype.init(t, n, e, r, i)
      }
      v.extend({
          cssHooks: {
              opacity: {
                  get: function(t, n) {
                      if (n) {
                          var e = Qt(t, "opacity");
                          return "" === e ? "1" : e
                      }
                  }
              }
          },
          cssNumber: {
              animationIterationCount: !0,
              columnCount: !0,
              fillOpacity: !0,
              flexGrow: !0,
              flexShrink: !0,
              fontWeight: !0,
              gridArea: !0,
              gridColumn: !0,
              gridColumnEnd: !0,
              gridColumnStart: !0,
              gridRow: !0,
              gridRowEnd: !0,
              gridRowStart: !0,
              lineHeight: !0,
              opacity: !0,
              order: !0,
              orphans: !0,
              widows: !0,
              zIndex: !0,
              zoom: !0
          },
          cssProps: {},
          style: function(t, n, e, r) {
              if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                  var i, a, o, d = W(n),
                      s = $t.test(n),
                      p = t.style;
                  if (s || (n = Vt(d)), o = v.cssHooks[n] || v.cssHooks[d], void 0 === e) return o && "get" in o && void 0 !== (i = o.get(t, !1, r)) ? i : p[n];
                  "string" === (a = typeof e) && (i = rt.exec(e)) && i[1] && (e = pt(t, n, i), a = "number"), null != e && e == e && ("number" !== a || s || (e += i && i[3] || (v.cssNumber[d] ? "" : "px")), m.clearCloneStyle || "" !== e || 0 !== n.indexOf("background") || (p[n] = "inherit"), o && "set" in o && void 0 === (e = o.set(t, e, r)) || (s ? p.setProperty(n, e) : p[n] = e))
              }
          },
          css: function(t, n, e, r) {
              var i, a, o, d = W(n);
              return $t.test(n) || (n = Vt(d)), (o = v.cssHooks[n] || v.cssHooks[d]) && "get" in o && (i = o.get(t, !0, e)), void 0 === i && (i = Qt(t, n, r)), "normal" === i && n in tn && (i = tn[n]), "" === e || e ? (a = parseFloat(i), !0 === e || isFinite(a) ? a || 0 : i) : i
          }
      }), v.each(["height", "width"], (function(t, n) {
          v.cssHooks[n] = {
              get: function(t, e, r) {
                  if (e) return !Xt.test(v.css(t, "display")) || t.getClientRects().length && t.getBoundingClientRect().width ? rn(t, n, r) : Lt(t, Jt, (function() {
                      return rn(t, n, r)
                  }))
              },
              set: function(t, e, r) {
                  var i, a = jt(t),
                      o = !m.scrollboxSize() && "absolute" === a.position,
                      d = (o || r) && "border-box" === v.css(t, "boxSizing", !1, a),
                      s = r ? en(t, n, r, d, a) : 0;
                  return d && o && (s -= Math.ceil(t["offset" + n[0].toUpperCase() + n.slice(1)] - parseFloat(a[n]) - en(t, n, "border", !1, a) - .5)), s && (i = rt.exec(e)) && "px" !== (i[3] || "px") && (t.style[n] = e, e = v.css(t, n)), nn(0, e, s)
              }
          }
      })), v.cssHooks.marginLeft = Nt(m.reliableMarginLeft, (function(t, n) {
          if (n) return (parseFloat(Qt(t, "marginLeft")) || t.getBoundingClientRect().left - Lt(t, {
              marginLeft: 0
          }, (function() {
              return t.getBoundingClientRect().left
          }))) + "px"
      })), v.each({
          margin: "",
          padding: "",
          border: "Width"
      }, (function(t, n) {
          v.cssHooks[t + n] = {
              expand: function(e) {
                  for (var r = 0, i = {}, a = "string" == typeof e ? e.split(" ") : [e]; r < 4; r++) i[t + it[r] + n] = a[r] || a[r - 2] || a[0];
                  return i
              }
          }, "margin" !== t && (v.cssHooks[t + n].set = nn)
      })), v.fn.extend({
          css: function(t, n) {
              return U(this, (function(t, n, e) {
                  var r, i, a = {},
                      o = 0;
                  if (Array.isArray(n)) {
                      for (r = jt(t), i = n.length; o < i; o++) a[n[o]] = v.css(t, n[o], !1, r);
                      return a
                  }
                  return void 0 !== e ? v.style(t, n, e) : v.css(t, n)
              }), t, n, arguments.length > 1)
          }
      }), v.Tween = an, an.prototype = {
          constructor: an,
          init: function(t, n, e, r, i, a) {
              this.elem = t, this.prop = e, this.easing = i || v.easing._default, this.options = n, this.start = this.now = this.cur(), this.end = r, this.unit = a || (v.cssNumber[e] ? "" : "px")
          },
          cur: function() {
              var t = an.propHooks[this.prop];
              return t && t.get ? t.get(this) : an.propHooks._default.get(this)
          },
          run: function(t) {
              var n, e = an.propHooks[this.prop];
              return this.options.duration ? this.pos = n = v.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = n = t, this.now = (this.end - this.start) * n + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), e && e.set ? e.set(this) : an.propHooks._default.set(this), this
          }
      }, an.prototype.init.prototype = an.prototype, an.propHooks = {
          _default: {
              get: function(t) {
                  var n;
                  return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (n = v.css(t.elem, t.prop, "")) && "auto" !== n ? n : 0
              },
              set: function(t) {
                  v.fx.step[t.prop] ? v.fx.step[t.prop](t) : 1 !== t.elem.nodeType || !v.cssHooks[t.prop] && null == t.elem.style[Vt(t.prop)] ? t.elem[t.prop] = t.now : v.style(t.elem, t.prop, t.now + t.unit)
              }
          }
      }, an.propHooks.scrollTop = an.propHooks.scrollLeft = {
          set: function(t) {
              t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
          }
      }, v.easing = {
          linear: function(t) {
              return t
          },
          swing: function(t) {
              return .5 - Math.cos(t * Math.PI) / 2
          },
          _default: "swing"
      }, v.fx = an.prototype.init, v.fx.step = {};
      var on, dn, sn = /^(?:toggle|show|hide)$/,
          pn = /queueHooks$/;

      function An() {
          dn && (!1 === x.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(An) : e.setTimeout(An, v.fx.interval), v.fx.tick())
      }

      function cn() {
          return e.setTimeout((function() {
              on = void 0
          })), on = Date.now()
      }

      function ln(t, n) {
          var e, r = 0,
              i = {
                  height: t
              };
          for (n = n ? 1 : 0; r < 4; r += 2 - n) i["margin" + (e = it[r])] = i["padding" + e] = t;
          return n && (i.opacity = i.width = t), i
      }

      function Cn(t, n, e) {
          for (var r, i = (gn.tweeners[n] || []).concat(gn.tweeners["*"]), a = 0, o = i.length; a < o; a++)
              if (r = i[a].call(e, n, t)) return r
      }

      function gn(t, n, e) {
          var r, i, a = 0,
              o = gn.prefilters.length,
              d = v.Deferred().always((function() {
                  delete s.elem
              })),
              s = function() {
                  if (i) return !1;
                  for (var n = on || cn(), e = Math.max(0, p.startTime + p.duration - n), r = 1 - (e / p.duration || 0), a = 0, o = p.tweens.length; a < o; a++) p.tweens[a].run(r);
                  return d.notifyWith(t, [p, r, e]), r < 1 && o ? e : (o || d.notifyWith(t, [p, 1, 0]), d.resolveWith(t, [p]), !1)
              },
              p = d.promise({
                  elem: t,
                  props: v.extend({}, n),
                  opts: v.extend(!0, {
                      specialEasing: {},
                      easing: v.easing._default
                  }, e),
                  originalProperties: n,
                  originalOptions: e,
                  startTime: on || cn(),
                  duration: e.duration,
                  tweens: [],
                  createTween: function(n, e) {
                      var r = v.Tween(t, p.opts, n, e, p.opts.specialEasing[n] || p.opts.easing);
                      return p.tweens.push(r), r
                  },
                  stop: function(n) {
                      var e = 0,
                          r = n ? p.tweens.length : 0;
                      if (i) return this;
                      for (i = !0; e < r; e++) p.tweens[e].run(1);
                      return n ? (d.notifyWith(t, [p, 1, 0]), d.resolveWith(t, [p, n])) : d.rejectWith(t, [p, n]), this
                  }
              }),
              A = p.props;
          for (! function(t, n) {
                  var e, r, i, a, o;
                  for (e in t)
                      if (i = n[r = W(e)], a = t[e], Array.isArray(a) && (i = a[1], a = t[e] = a[0]), e !== r && (t[r] = a, delete t[e]), (o = v.cssHooks[r]) && "expand" in o)
                          for (e in a = o.expand(a), delete t[r], a) e in t || (t[e] = a[e], n[e] = i);
                      else n[r] = i
              }(A, p.opts.specialEasing); a < o; a++)
              if (r = gn.prefilters[a].call(p, t, A, p.opts)) return f(r.stop) && (v._queueHooks(p.elem, p.opts.queue).stop = r.stop.bind(r)), r;
          return v.map(A, Cn, p), f(p.opts.start) && p.opts.start.call(t, p), p.progress(p.opts.progress).done(p.opts.done, p.opts.complete).fail(p.opts.fail).always(p.opts.always), v.fx.timer(v.extend(s, {
              elem: t,
              anim: p,
              queue: p.opts.queue
          })), p
      }
      v.Animation = v.extend(gn, {
              tweeners: {
                  "*": [function(t, n) {
                      var e = this.createTween(t, n);
                      return pt(e.elem, t, rt.exec(n), e), e
                  }]
              },
              tweener: function(t, n) {
                  f(t) ? (n = t, t = ["*"]) : t = t.match(H);
                  for (var e, r = 0, i = t.length; r < i; r++) e = t[r], gn.tweeners[e] = gn.tweeners[e] || [], gn.tweeners[e].unshift(n)
              },
              prefilters: [function(t, n, e) {
                  var r, i, a, o, d, s, p, A, c = "width" in n || "height" in n,
                      l = this,
                      C = {},
                      g = t.style,
                      h = t.nodeType && st(t),
                      m = X.get(t, "fxshow");
                  for (r in e.queue || (null == (o = v._queueHooks(t, "fx")).unqueued && (o.unqueued = 0, d = o.empty.fire, o.empty.fire = function() {
                          o.unqueued || d()
                      }), o.unqueued++, l.always((function() {
                          l.always((function() {
                              o.unqueued--, v.queue(t, "fx").length || o.empty.fire()
                          }))
                      }))), n)
                      if (i = n[r], sn.test(i)) {
                          if (delete n[r], a = a || "toggle" === i, i === (h ? "hide" : "show")) {
                              if ("show" !== i || !m || void 0 === m[r]) continue;
                              h = !0
                          }
                          C[r] = m && m[r] || v.style(t, r)
                      } if ((s = !v.isEmptyObject(n)) || !v.isEmptyObject(C))
                      for (r in c && 1 === t.nodeType && (e.overflow = [g.overflow, g.overflowX, g.overflowY], null == (p = m && m.display) && (p = X.get(t, "display")), "none" === (A = v.css(t, "display")) && (p ? A = p : (lt([t], !0), p = t.style.display || p, A = v.css(t, "display"), lt([t]))), ("inline" === A || "inline-block" === A && null != p) && "none" === v.css(t, "float") && (s || (l.done((function() {
                              g.display = p
                          })), null == p && (A = g.display, p = "none" === A ? "" : A)), g.display = "inline-block")), e.overflow && (g.overflow = "hidden", l.always((function() {
                              g.overflow = e.overflow[0], g.overflowX = e.overflow[1], g.overflowY = e.overflow[2]
                          }))), s = !1, C) s || (m ? "hidden" in m && (h = m.hidden) : m = X.access(t, "fxshow", {
                          display: p
                      }), a && (m.hidden = !h), h && lt([t], !0), l.done((function() {
                          for (r in h || lt([t]), X.remove(t, "fxshow"), C) v.style(t, r, C[r])
                      }))), s = Cn(h ? m[r] : 0, r, l), r in m || (m[r] = s.start, h && (s.end = s.start, s.start = 0))
              }],
              prefilter: function(t, n) {
                  n ? gn.prefilters.unshift(t) : gn.prefilters.push(t)
              }
          }), v.speed = function(t, n, e) {
              var r = t && "object" == typeof t ? v.extend({}, t) : {
                  complete: e || !e && n || f(t) && t,
                  duration: t,
                  easing: e && n || n && !f(n) && n
              };
              return v.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in v.fx.speeds ? r.duration = v.fx.speeds[r.duration] : r.duration = v.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
                  f(r.old) && r.old.call(this), r.queue && v.dequeue(this, r.queue)
              }, r
          }, v.fn.extend({
              fadeTo: function(t, n, e, r) {
                  return this.filter(st).css("opacity", 0).show().end().animate({
                      opacity: n
                  }, t, e, r)
              },
              animate: function(t, n, e, r) {
                  var i = v.isEmptyObject(t),
                      a = v.speed(n, e, r),
                      o = function() {
                          var n = gn(this, v.extend({}, t), a);
                          (i || X.get(this, "finish")) && n.stop(!0)
                      };
                  return o.finish = o, i || !1 === a.queue ? this.each(o) : this.queue(a.queue, o)
              },
              stop: function(t, n, e) {
                  var r = function(t) {
                      var n = t.stop;
                      delete t.stop, n(e)
                  };
                  return "string" != typeof t && (e = n, n = t, t = void 0), n && this.queue(t || "fx", []), this.each((function() {
                      var n = !0,
                          i = null != t && t + "queueHooks",
                          a = v.timers,
                          o = X.get(this);
                      if (i) o[i] && o[i].stop && r(o[i]);
                      else
                          for (i in o) o[i] && o[i].stop && pn.test(i) && r(o[i]);
                      for (i = a.length; i--;) a[i].elem !== this || null != t && a[i].queue !== t || (a[i].anim.stop(e), n = !1, a.splice(i, 1));
                      !n && e || v.dequeue(this, t)
                  }))
              },
              finish: function(t) {
                  return !1 !== t && (t = t || "fx"), this.each((function() {
                      var n, e = X.get(this),
                          r = e[t + "queue"],
                          i = e[t + "queueHooks"],
                          a = v.timers,
                          o = r ? r.length : 0;
                      for (e.finish = !0, v.queue(this, t, []), i && i.stop && i.stop.call(this, !0), n = a.length; n--;) a[n].elem === this && a[n].queue === t && (a[n].anim.stop(!0), a.splice(n, 1));
                      for (n = 0; n < o; n++) r[n] && r[n].finish && r[n].finish.call(this);
                      delete e.finish
                  }))
              }
          }), v.each(["toggle", "show", "hide"], (function(t, n) {
              var e = v.fn[n];
              v.fn[n] = function(t, r, i) {
                  return null == t || "boolean" == typeof t ? e.apply(this, arguments) : this.animate(ln(n, !0), t, r, i)
              }
          })), v.each({
              slideDown: ln("show"),
              slideUp: ln("hide"),
              slideToggle: ln("toggle"),
              fadeIn: {
                  opacity: "show"
              },
              fadeOut: {
                  opacity: "hide"
              },
              fadeToggle: {
                  opacity: "toggle"
              }
          }, (function(t, n) {
              v.fn[t] = function(t, e, r) {
                  return this.animate(n, t, e, r)
              }
          })), v.timers = [], v.fx.tick = function() {
              var t, n = 0,
                  e = v.timers;
              for (on = Date.now(); n < e.length; n++)(t = e[n])() || e[n] !== t || e.splice(n--, 1);
              e.length || v.fx.stop(), on = void 0
          }, v.fx.timer = function(t) {
              v.timers.push(t), v.fx.start()
          }, v.fx.interval = 13, v.fx.start = function() {
              dn || (dn = !0, An())
          }, v.fx.stop = function() {
              dn = null
          }, v.fx.speeds = {
              slow: 600,
              fast: 200,
              _default: 400
          }, v.fn.delay = function(t, n) {
              return t = v.fx && v.fx.speeds[t] || t, n = n || "fx", this.queue(n, (function(n, r) {
                  var i = e.setTimeout(n, t);
                  r.stop = function() {
                      e.clearTimeout(i)
                  }
              }))
          },
          function() {
              var t = x.createElement("input"),
                  n = x.createElement("select").appendChild(x.createElement("option"));
              t.type = "checkbox", m.checkOn = "" !== t.value, m.optSelected = n.selected, (t = x.createElement("input")).value = "t", t.type = "radio", m.radioValue = "t" === t.value
          }();
      var hn, mn = v.expr.attrHandle;
      v.fn.extend({
          attr: function(t, n) {
              return U(this, v.attr, t, n, arguments.length > 1)
          },
          removeAttr: function(t) {
              return this.each((function() {
                  v.removeAttr(this, t)
              }))
          }
      }), v.extend({
          attr: function(t, n, e) {
              var r, i, a = t.nodeType;
              if (3 !== a && 8 !== a && 2 !== a) return void 0 === t.getAttribute ? v.prop(t, n, e) : (1 === a && v.isXMLDoc(t) || (i = v.attrHooks[n.toLowerCase()] || (v.expr.match.bool.test(n) ? hn : void 0)), void 0 !== e ? null === e ? void v.removeAttr(t, n) : i && "set" in i && void 0 !== (r = i.set(t, e, n)) ? r : (t.setAttribute(n, e + ""), e) : i && "get" in i && null !== (r = i.get(t, n)) ? r : null == (r = v.find.attr(t, n)) ? void 0 : r)
          },
          attrHooks: {
              type: {
                  set: function(t, n) {
                      if (!m.radioValue && "radio" === n && G(t, "input")) {
                          var e = t.value;
                          return t.setAttribute("type", n), e && (t.value = e), n
                      }
                  }
              }
          },
          removeAttr: function(t, n) {
              var e, r = 0,
                  i = n && n.match(H);
              if (i && 1 === t.nodeType)
                  for (; e = i[r++];) t.removeAttribute(e)
          }
      }), hn = {
          set: function(t, n, e) {
              return !1 === n ? v.removeAttr(t, e) : t.setAttribute(e, e), e
          }
      }, v.each(v.expr.match.bool.source.match(/\w+/g), (function(t, n) {
          var e = mn[n] || v.find.attr;
          mn[n] = function(t, n, r) {
              var i, a, o = n.toLowerCase();
              return r || (a = mn[o], mn[o] = i, i = null != e(t, n, r) ? o : null, mn[o] = a), i
          }
      }));
      var fn = /^(?:input|select|textarea|button)$/i,
          un = /^(?:a|area)$/i;

      function xn(t) {
          return (t.match(H) || []).join(" ")
      }

      function bn(t) {
          return t.getAttribute && t.getAttribute("class") || ""
      }

      function Bn(t) {
          return Array.isArray(t) ? t : "string" == typeof t && t.match(H) || []
      }
      v.fn.extend({
          prop: function(t, n) {
              return U(this, v.prop, t, n, arguments.length > 1)
          },
          removeProp: function(t) {
              return this.each((function() {
                  delete this[v.propFix[t] || t]
              }))
          }
      }), v.extend({
          prop: function(t, n, e) {
              var r, i, a = t.nodeType;
              if (3 !== a && 8 !== a && 2 !== a) return 1 === a && v.isXMLDoc(t) || (n = v.propFix[n] || n, i = v.propHooks[n]), void 0 !== e ? i && "set" in i && void 0 !== (r = i.set(t, e, n)) ? r : t[n] = e : i && "get" in i && null !== (r = i.get(t, n)) ? r : t[n]
          },
          propHooks: {
              tabIndex: {
                  get: function(t) {
                      var n = v.find.attr(t, "tabindex");
                      return n ? parseInt(n, 10) : fn.test(t.nodeName) || un.test(t.nodeName) && t.href ? 0 : -1
                  }
              }
          },
          propFix: {
              for: "htmlFor",
              class: "className"
          }
      }), m.optSelected || (v.propHooks.selected = {
          get: function(t) {
              var n = t.parentNode;
              return n && n.parentNode && n.parentNode.selectedIndex, null
          },
          set: function(t) {
              var n = t.parentNode;
              n && (n.selectedIndex, n.parentNode && n.parentNode.selectedIndex)
          }
      }), v.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function() {
          v.propFix[this.toLowerCase()] = this
      })), v.fn.extend({
          addClass: function(t) {
              var n, e, r, i, a, o, d, s = 0;
              if (f(t)) return this.each((function(n) {
                  v(this).addClass(t.call(this, n, bn(this)))
              }));
              if ((n = Bn(t)).length)
                  for (; e = this[s++];)
                      if (i = bn(e), r = 1 === e.nodeType && " " + xn(i) + " ") {
                          for (o = 0; a = n[o++];) r.indexOf(" " + a + " ") < 0 && (r += a + " ");
                          i !== (d = xn(r)) && e.setAttribute("class", d)
                      } return this
          },
          removeClass: function(t) {
              var n, e, r, i, a, o, d, s = 0;
              if (f(t)) return this.each((function(n) {
                  v(this).removeClass(t.call(this, n, bn(this)))
              }));
              if (!arguments.length) return this.attr("class", "");
              if ((n = Bn(t)).length)
                  for (; e = this[s++];)
                      if (i = bn(e), r = 1 === e.nodeType && " " + xn(i) + " ") {
                          for (o = 0; a = n[o++];)
                              for (; r.indexOf(" " + a + " ") > -1;) r = r.replace(" " + a + " ", " ");
                          i !== (d = xn(r)) && e.setAttribute("class", d)
                      } return this
          },
          toggleClass: function(t, n) {
              var e = typeof t,
                  r = "string" === e || Array.isArray(t);
              return "boolean" == typeof n && r ? n ? this.addClass(t) : this.removeClass(t) : f(t) ? this.each((function(e) {
                  v(this).toggleClass(t.call(this, e, bn(this), n), n)
              })) : this.each((function() {
                  var n, i, a, o;
                  if (r)
                      for (i = 0, a = v(this), o = Bn(t); n = o[i++];) a.hasClass(n) ? a.removeClass(n) : a.addClass(n);
                  else void 0 !== t && "boolean" !== e || ((n = bn(this)) && X.set(this, "__className__", n), this.setAttribute && this.setAttribute("class", n || !1 === t ? "" : X.get(this, "__className__") || ""))
              }))
          },
          hasClass: function(t) {
              var n, e, r = 0;
              for (n = " " + t + " "; e = this[r++];)
                  if (1 === e.nodeType && (" " + xn(bn(e)) + " ").indexOf(n) > -1) return !0;
              return !1
          }
      });
      var yn = /\r/g;
      v.fn.extend({
          val: function(t) {
              var n, e, r, i = this[0];
              return arguments.length ? (r = f(t), this.each((function(e) {
                  var i;
                  1 === this.nodeType && (null == (i = r ? t.call(this, e, v(this).val()) : t) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = v.map(i, (function(t) {
                      return null == t ? "" : t + ""
                  }))), (n = v.valHooks[this.type] || v.valHooks[this.nodeName.toLowerCase()]) && "set" in n && void 0 !== n.set(this, i, "value") || (this.value = i))
              }))) : i ? (n = v.valHooks[i.type] || v.valHooks[i.nodeName.toLowerCase()]) && "get" in n && void 0 !== (e = n.get(i, "value")) ? e : "string" == typeof(e = i.value) ? e.replace(yn, "") : null == e ? "" : e : void 0
          }
      }), v.extend({
          valHooks: {
              option: {
                  get: function(t) {
                      var n = v.find.attr(t, "value");
                      return null != n ? n : xn(v.text(t))
                  }
              },
              select: {
                  get: function(t) {
                      var n, e, r, i = t.options,
                          a = t.selectedIndex,
                          o = "select-one" === t.type,
                          d = o ? null : [],
                          s = o ? a + 1 : i.length;
                      for (r = a < 0 ? s : o ? a : 0; r < s; r++)
                          if (((e = i[r]).selected || r === a) && !e.disabled && (!e.parentNode.disabled || !G(e.parentNode, "optgroup"))) {
                              if (n = v(e).val(), o) return n;
                              d.push(n)
                          } return d
                  },
                  set: function(t, n) {
                      for (var e, r, i = t.options, a = v.makeArray(n), o = i.length; o--;)((r = i[o]).selected = v.inArray(v.valHooks.option.get(r), a) > -1) && (e = !0);
                      return e || (t.selectedIndex = -1), a
                  }
              }
          }
      }), v.each(["radio", "checkbox"], (function() {
          v.valHooks[this] = {
              set: function(t, n) {
                  if (Array.isArray(n)) return t.checked = v.inArray(v(t).val(), n) > -1
              }
          }, m.checkOn || (v.valHooks[this].get = function(t) {
              return null === t.getAttribute("value") ? "on" : t.value
          })
      })), m.focusin = "onfocusin" in e;
      var vn = /^(?:focusinfocus|focusoutblur)$/,
          wn = function(t) {
              t.stopPropagation()
          };
      v.extend(v.event, {
          trigger: function(t, n, r, i) {
              var a, o, d, s, p, A, c, l, g = [r || x],
                  h = C.call(t, "type") ? t.type : t,
                  m = C.call(t, "namespace") ? t.namespace.split(".") : [];
              if (o = l = d = r = r || x, 3 !== r.nodeType && 8 !== r.nodeType && !vn.test(h + v.event.triggered) && (h.indexOf(".") > -1 && (m = h.split("."), h = m.shift(), m.sort()), p = h.indexOf(":") < 0 && "on" + h, (t = t[v.expando] ? t : new v.Event(h, "object" == typeof t && t)).isTrigger = i ? 2 : 3, t.namespace = m.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : v.makeArray(n, [t]), c = v.event.special[h] || {}, i || !c.trigger || !1 !== c.trigger.apply(r, n))) {
                  if (!i && !c.noBubble && !u(r)) {
                      for (s = c.delegateType || h, vn.test(s + h) || (o = o.parentNode); o; o = o.parentNode) g.push(o), d = o;
                      d === (r.ownerDocument || x) && g.push(d.defaultView || d.parentWindow || e)
                  }
                  for (a = 0;
                      (o = g[a++]) && !t.isPropagationStopped();) l = o, t.type = a > 1 ? s : c.bindType || h, (A = (X.get(o, "events") || Object.create(null))[t.type] && X.get(o, "handle")) && A.apply(o, n), (A = p && o[p]) && A.apply && Z(o) && (t.result = A.apply(o, n), !1 === t.result && t.preventDefault());
                  return t.type = h, i || t.isDefaultPrevented() || c._default && !1 !== c._default.apply(g.pop(), n) || !Z(r) || p && f(r[h]) && !u(r) && ((d = r[p]) && (r[p] = null), v.event.triggered = h, t.isPropagationStopped() && l.addEventListener(h, wn), r[h](), t.isPropagationStopped() && l.removeEventListener(h, wn), v.event.triggered = void 0, d && (r[p] = d)), t.result
              }
          },
          simulate: function(t, n, e) {
              var r = v.extend(new v.Event, e, {
                  type: t,
                  isSimulated: !0
              });
              v.event.trigger(r, null, n)
          }
      }), v.fn.extend({
          trigger: function(t, n) {
              return this.each((function() {
                  v.event.trigger(t, n, this)
              }))
          },
          triggerHandler: function(t, n) {
              var e = this[0];
              if (e) return v.event.trigger(t, n, e, !0)
          }
      }), m.focusin || v.each({
          focus: "focusin",
          blur: "focusout"
      }, (function(t, n) {
          var e = function(t) {
              v.event.simulate(n, t.target, v.event.fix(t))
          };
          v.event.special[n] = {
              setup: function() {
                  var r = this.ownerDocument || this.document || this,
                      i = X.access(r, n);
                  i || r.addEventListener(t, e, !0), X.access(r, n, (i || 0) + 1)
              },
              teardown: function() {
                  var r = this.ownerDocument || this.document || this,
                      i = X.access(r, n) - 1;
                  i ? X.access(r, n, i) : (r.removeEventListener(t, e, !0), X.remove(r, n))
              }
          }
      }));
      var kn = e.location,
          En = {
              guid: Date.now()
          },
          In = /\?/;
      v.parseXML = function(t) {
          var n;
          if (!t || "string" != typeof t) return null;
          try {
              n = (new e.DOMParser).parseFromString(t, "text/xml")
          } catch (t) {
              n = void 0
          }
          return n && !n.getElementsByTagName("parsererror").length || v.error("Invalid XML: " + t), n
      };
      var Dn = /\[\]$/,
          Gn = /\r?\n/g,
          _n = /^(?:submit|button|image|reset|file)$/i,
          Sn = /^(?:input|select|textarea|keygen)/i;

      function zn(t, n, e, r) {
          var i;
          if (Array.isArray(n)) v.each(n, (function(n, i) {
              e || Dn.test(t) ? r(t, i) : zn(t + "[" + ("object" == typeof i && null != i ? n : "") + "]", i, e, r)
          }));
          else if (e || "object" !== y(n)) r(t, n);
          else
              for (i in n) zn(t + "[" + i + "]", n[i], e, r)
      }
      v.param = function(t, n) {
          var e, r = [],
              i = function(t, n) {
                  var e = f(n) ? n() : n;
                  r[r.length] = encodeURIComponent(t) + "=" + encodeURIComponent(null == e ? "" : e)
              };
          if (null == t) return "";
          if (Array.isArray(t) || t.jquery && !v.isPlainObject(t)) v.each(t, (function() {
              i(this.name, this.value)
          }));
          else
              for (e in t) zn(e, t[e], n, i);
          return r.join("&")
      }, v.fn.extend({
          serialize: function() {
              return v.param(this.serializeArray())
          },
          serializeArray: function() {
              return this.map((function() {
                  var t = v.prop(this, "elements");
                  return t ? v.makeArray(t) : this
              })).filter((function() {
                  var t = this.type;
                  return this.name && !v(this).is(":disabled") && Sn.test(this.nodeName) && !_n.test(t) && (this.checked || !ht.test(t))
              })).map((function(t, n) {
                  var e = v(this).val();
                  return null == e ? null : Array.isArray(e) ? v.map(e, (function(t) {
                      return {
                          name: n.name,
                          value: t.replace(Gn, "\r\n")
                      }
                  })) : {
                      name: n.name,
                      value: e.replace(Gn, "\r\n")
                  }
              })).get()
          }
      });
      var Pn = /%20/g,
          On = /#.*$/,
          Kn = /([?&])_=[^&]*/,
          Rn = /^(.*?):[ \t]*([^\r\n]*)$/gm,
          Hn = /^(?:GET|HEAD)$/,
          Mn = /^\/\//,
          Fn = {},
          Tn = {},
          qn = "*/".concat("*"),
          jn = x.createElement("a");

      function Ln(t) {
          return function(n, e) {
              "string" != typeof n && (e = n, n = "*");
              var r, i = 0,
                  a = n.toLowerCase().match(H) || [];
              if (f(e))
                  for (; r = a[i++];) "+" === r[0] ? (r = r.slice(1) || "*", (t[r] = t[r] || []).unshift(e)) : (t[r] = t[r] || []).push(e)
          }
      }

      function Un(t, n, e, r) {
          var i = {},
              a = t === Tn;

          function o(d) {
              var s;
              return i[d] = !0, v.each(t[d] || [], (function(t, d) {
                  var p = d(n, e, r);
                  return "string" != typeof p || a || i[p] ? a ? !(s = p) : void 0 : (n.dataTypes.unshift(p), o(p), !1)
              })), s
          }
          return o(n.dataTypes[0]) || !i["*"] && o("*")
      }

      function Qn(t, n) {
          var e, r, i = v.ajaxSettings.flatOptions || {};
          for (e in n) void 0 !== n[e] && ((i[e] ? t : r || (r = {}))[e] = n[e]);
          return r && v.extend(!0, t, r), t
      }
      jn.href = kn.href, v.extend({
          active: 0,
          lastModified: {},
          etag: {},
          ajaxSettings: {
              url: kn.href,
              type: "GET",
              isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(kn.protocol),
              global: !0,
              processData: !0,
              async: !0,
              contentType: "application/x-www-form-urlencoded; charset=UTF-8",
              accepts: {
                  "*": qn,
                  text: "text/plain",
                  html: "text/html",
                  xml: "application/xml, text/xml",
                  json: "application/json, text/javascript"
              },
              contents: {
                  xml: /\bxml\b/,
                  html: /\bhtml/,
                  json: /\bjson\b/
              },
              responseFields: {
                  xml: "responseXML",
                  text: "responseText",
                  json: "responseJSON"
              },
              converters: {
                  "* text": String,
                  "text html": !0,
                  "text json": JSON.parse,
                  "text xml": v.parseXML
              },
              flatOptions: {
                  url: !0,
                  context: !0
              }
          },
          ajaxSetup: function(t, n) {
              return n ? Qn(Qn(t, v.ajaxSettings), n) : Qn(v.ajaxSettings, t)
          },
          ajaxPrefilter: Ln(Fn),
          ajaxTransport: Ln(Tn),
          ajax: function(t, n) {
              "object" == typeof t && (n = t, t = void 0), n = n || {};
              var r, i, a, o, d, s, p, A, c, l, C = v.ajaxSetup({}, n),
                  g = C.context || C,
                  h = C.context && (g.nodeType || g.jquery) ? v(g) : v.event,
                  m = v.Deferred(),
                  f = v.Callbacks("once memory"),
                  u = C.statusCode || {},
                  b = {},
                  B = {},
                  y = "canceled",
                  w = {
                      readyState: 0,
                      getResponseHeader: function(t) {
                          var n;
                          if (p) {
                              if (!o)
                                  for (o = {}; n = Rn.exec(a);) o[n[1].toLowerCase() + " "] = (o[n[1].toLowerCase() + " "] || []).concat(n[2]);
                              n = o[t.toLowerCase() + " "]
                          }
                          return null == n ? null : n.join(", ")
                      },
                      getAllResponseHeaders: function() {
                          return p ? a : null
                      },
                      setRequestHeader: function(t, n) {
                          return null == p && (t = B[t.toLowerCase()] = B[t.toLowerCase()] || t, b[t] = n), this
                      },
                      overrideMimeType: function(t) {
                          return null == p && (C.mimeType = t), this
                      },
                      statusCode: function(t) {
                          var n;
                          if (t)
                              if (p) w.always(t[w.status]);
                              else
                                  for (n in t) u[n] = [u[n], t[n]];
                          return this
                      },
                      abort: function(t) {
                          var n = t || y;
                          return r && r.abort(n), k(0, n), this
                      }
                  };
              if (m.promise(w), C.url = ((t || C.url || kn.href) + "").replace(Mn, kn.protocol + "//"), C.type = n.method || n.type || C.method || C.type, C.dataTypes = (C.dataType || "*").toLowerCase().match(H) || [""], null == C.crossDomain) {
                  s = x.createElement("a");
                  try {
                      s.href = C.url, s.href = s.href, C.crossDomain = jn.protocol + "//" + jn.host != s.protocol + "//" + s.host
                  } catch (t) {
                      C.crossDomain = !0
                  }
              }
              if (C.data && C.processData && "string" != typeof C.data && (C.data = v.param(C.data, C.traditional)), Un(Fn, C, n, w), p) return w;
              for (c in (A = v.event && C.global) && 0 == v.active++ && v.event.trigger("ajaxStart"), C.type = C.type.toUpperCase(), C.hasContent = !Hn.test(C.type), i = C.url.replace(On, ""), C.hasContent ? C.data && C.processData && 0 === (C.contentType || "").indexOf("application/x-www-form-urlencoded") && (C.data = C.data.replace(Pn, "+")) : (l = C.url.slice(i.length), C.data && (C.processData || "string" == typeof C.data) && (i += (In.test(i) ? "&" : "?") + C.data, delete C.data), !1 === C.cache && (i = i.replace(Kn, "$1"), l = (In.test(i) ? "&" : "?") + "_=" + En.guid++ + l), C.url = i + l), C.ifModified && (v.lastModified[i] && w.setRequestHeader("If-Modified-Since", v.lastModified[i]), v.etag[i] && w.setRequestHeader("If-None-Match", v.etag[i])), (C.data && C.hasContent && !1 !== C.contentType || n.contentType) && w.setRequestHeader("Content-Type", C.contentType), w.setRequestHeader("Accept", C.dataTypes[0] && C.accepts[C.dataTypes[0]] ? C.accepts[C.dataTypes[0]] + ("*" !== C.dataTypes[0] ? ", " + qn + "; q=0.01" : "") : C.accepts["*"]), C.headers) w.setRequestHeader(c, C.headers[c]);
              if (C.beforeSend && (!1 === C.beforeSend.call(g, w, C) || p)) return w.abort();
              if (y = "abort", f.add(C.complete), w.done(C.success), w.fail(C.error), r = Un(Tn, C, n, w)) {
                  if (w.readyState = 1, A && h.trigger("ajaxSend", [w, C]), p) return w;
                  C.async && C.timeout > 0 && (d = e.setTimeout((function() {
                      w.abort("timeout")
                  }), C.timeout));
                  try {
                      p = !1, r.send(b, k)
                  } catch (t) {
                      if (p) throw t;
                      k(-1, t)
                  }
              } else k(-1, "No Transport");

              function k(t, n, o, s) {
                  var c, l, x, b, B, y = n;
                  p || (p = !0, d && e.clearTimeout(d), r = void 0, a = s || "", w.readyState = t > 0 ? 4 : 0, c = t >= 200 && t < 300 || 304 === t, o && (b = function(t, n, e) {
                      for (var r, i, a, o, d = t.contents, s = t.dataTypes;
                          "*" === s[0];) s.shift(), void 0 === r && (r = t.mimeType || n.getResponseHeader("Content-Type"));
                      if (r)
                          for (i in d)
                              if (d[i] && d[i].test(r)) {
                                  s.unshift(i);
                                  break
                              } if (s[0] in e) a = s[0];
                      else {
                          for (i in e) {
                              if (!s[0] || t.converters[i + " " + s[0]]) {
                                  a = i;
                                  break
                              }
                              o || (o = i)
                          }
                          a = a || o
                      }
                      if (a) return a !== s[0] && s.unshift(a), e[a]
                  }(C, w, o)), !c && v.inArray("script", C.dataTypes) > -1 && (C.converters["text script"] = function() {}), b = function(t, n, e, r) {
                      var i, a, o, d, s, p = {},
                          A = t.dataTypes.slice();
                      if (A[1])
                          for (o in t.converters) p[o.toLowerCase()] = t.converters[o];
                      for (a = A.shift(); a;)
                          if (t.responseFields[a] && (e[t.responseFields[a]] = n), !s && r && t.dataFilter && (n = t.dataFilter(n, t.dataType)), s = a, a = A.shift())
                              if ("*" === a) a = s;
                              else if ("*" !== s && s !== a) {
                          if (!(o = p[s + " " + a] || p["* " + a]))
                              for (i in p)
                                  if ((d = i.split(" "))[1] === a && (o = p[s + " " + d[0]] || p["* " + d[0]])) {
                                      !0 === o ? o = p[i] : !0 !== p[i] && (a = d[0], A.unshift(d[1]));
                                      break
                                  } if (!0 !== o)
                              if (o && t.throws) n = o(n);
                              else try {
                                  n = o(n)
                              } catch (t) {
                                  return {
                                      state: "parsererror",
                                      error: o ? t : "No conversion from " + s + " to " + a
                                  }
                              }
                      }
                      return {
                          state: "success",
                          data: n
                      }
                  }(C, b, w, c), c ? (C.ifModified && ((B = w.getResponseHeader("Last-Modified")) && (v.lastModified[i] = B), (B = w.getResponseHeader("etag")) && (v.etag[i] = B)), 204 === t || "HEAD" === C.type ? y = "nocontent" : 304 === t ? y = "notmodified" : (y = b.state, l = b.data, c = !(x = b.error))) : (x = y, !t && y || (y = "error", t < 0 && (t = 0))), w.status = t, w.statusText = (n || y) + "", c ? m.resolveWith(g, [l, y, w]) : m.rejectWith(g, [w, y, x]), w.statusCode(u), u = void 0, A && h.trigger(c ? "ajaxSuccess" : "ajaxError", [w, C, c ? l : x]), f.fireWith(g, [w, y]), A && (h.trigger("ajaxComplete", [w, C]), --v.active || v.event.trigger("ajaxStop")))
              }
              return w
          },
          getJSON: function(t, n, e) {
              return v.get(t, n, e, "json")
          },
          getScript: function(t, n) {
              return v.get(t, void 0, n, "script")
          }
      }), v.each(["get", "post"], (function(t, n) {
          v[n] = function(t, e, r, i) {
              return f(e) && (i = i || r, r = e, e = void 0), v.ajax(v.extend({
                  url: t,
                  type: n,
                  dataType: i,
                  data: e,
                  success: r
              }, v.isPlainObject(t) && t))
          }
      })), v.ajaxPrefilter((function(t) {
          var n;
          for (n in t.headers) "content-type" === n.toLowerCase() && (t.contentType = t.headers[n] || "")
      })), v._evalUrl = function(t, n, e) {
          return v.ajax({
              url: t,
              type: "GET",
              dataType: "script",
              cache: !0,
              async: !1,
              global: !1,
              converters: {
                  "text script": function() {}
              },
              dataFilter: function(t) {
                  v.globalEval(t, n, e)
              }
          })
      }, v.fn.extend({
          wrapAll: function(t) {
              var n;
              return this[0] && (f(t) && (t = t.call(this[0])), n = v(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && n.insertBefore(this[0]), n.map((function() {
                  for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                  return t
              })).append(this)), this
          },
          wrapInner: function(t) {
              return f(t) ? this.each((function(n) {
                  v(this).wrapInner(t.call(this, n))
              })) : this.each((function() {
                  var n = v(this),
                      e = n.contents();
                  e.length ? e.wrapAll(t) : n.append(t)
              }))
          },
          wrap: function(t) {
              var n = f(t);
              return this.each((function(e) {
                  v(this).wrapAll(n ? t.call(this, e) : t)
              }))
          },
          unwrap: function(t) {
              return this.parent(t).not("body").each((function() {
                  v(this).replaceWith(this.childNodes)
              })), this
          }
      }), v.expr.pseudos.hidden = function(t) {
          return !v.expr.pseudos.visible(t)
      }, v.expr.pseudos.visible = function(t) {
          return !!(t.offsetWidth || t.offsetHeight || t.getClientRects().length)
      }, v.ajaxSettings.xhr = function() {
          try {
              return new e.XMLHttpRequest
          } catch (t) {}
      };
      var Nn = {
              0: 200,
              1223: 204
          },
          Yn = v.ajaxSettings.xhr();
      m.cors = !!Yn && "withCredentials" in Yn, m.ajax = Yn = !!Yn, v.ajaxTransport((function(t) {
          var n, r;
          if (m.cors || Yn && !t.crossDomain) return {
              send: function(i, a) {
                  var o, d = t.xhr();
                  if (d.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                      for (o in t.xhrFields) d[o] = t.xhrFields[o];
                  for (o in t.mimeType && d.overrideMimeType && d.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest"), i) d.setRequestHeader(o, i[o]);
                  n = function(t) {
                      return function() {
                          n && (n = r = d.onload = d.onerror = d.onabort = d.ontimeout = d.onreadystatechange = null, "abort" === t ? d.abort() : "error" === t ? "number" != typeof d.status ? a(0, "error") : a(d.status, d.statusText) : a(Nn[d.status] || d.status, d.statusText, "text" !== (d.responseType || "text") || "string" != typeof d.responseText ? {
                              binary: d.response
                          } : {
                              text: d.responseText
                          }, d.getAllResponseHeaders()))
                      }
                  }, d.onload = n(), r = d.onerror = d.ontimeout = n("error"), void 0 !== d.onabort ? d.onabort = r : d.onreadystatechange = function() {
                      4 === d.readyState && e.setTimeout((function() {
                          n && r()
                      }))
                  }, n = n("abort");
                  try {
                      d.send(t.hasContent && t.data || null)
                  } catch (t) {
                      if (n) throw t
                  }
              },
              abort: function() {
                  n && n()
              }
          }
      })), v.ajaxPrefilter((function(t) {
          t.crossDomain && (t.contents.script = !1)
      })), v.ajaxSetup({
          accepts: {
              script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
          },
          contents: {
              script: /\b(?:java|ecma)script\b/
          },
          converters: {
              "text script": function(t) {
                  return v.globalEval(t), t
              }
          }
      }), v.ajaxPrefilter("script", (function(t) {
          void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
      })), v.ajaxTransport("script", (function(t) {
          var n, e;
          if (t.crossDomain || t.scriptAttrs) return {
              send: function(r, i) {
                  n = v("<script>").attr(t.scriptAttrs || {}).prop({
                      charset: t.scriptCharset,
                      src: t.url
                  }).on("load error", e = function(t) {
                      n.remove(), e = null, t && i("error" === t.type ? 404 : 200, t.type)
                  }), x.head.appendChild(n[0])
              },
              abort: function() {
                  e && e()
              }
          }
      }));
      var Wn, Zn = [],
          Vn = /(=)\?(?=&|$)|\?\?/;
      v.ajaxSetup({
          jsonp: "callback",
          jsonpCallback: function() {
              var t = Zn.pop() || v.expando + "_" + En.guid++;
              return this[t] = !0, t
          }
      }), v.ajaxPrefilter("json jsonp", (function(t, n, r) {
          var i, a, o, d = !1 !== t.jsonp && (Vn.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Vn.test(t.data) && "data");
          if (d || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = f(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, d ? t[d] = t[d].replace(Vn, "$1" + i) : !1 !== t.jsonp && (t.url += (In.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function() {
              return o || v.error(i + " was not called"), o[0]
          }, t.dataTypes[0] = "json", a = e[i], e[i] = function() {
              o = arguments
          }, r.always((function() {
              void 0 === a ? v(e).removeProp(i) : e[i] = a, t[i] && (t.jsonpCallback = n.jsonpCallback, Zn.push(i)), o && f(a) && a(o[0]), o = a = void 0
          })), "script"
      })), m.createHTMLDocument = ((Wn = x.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Wn.childNodes.length), v.parseHTML = function(t, n, e) {
          return "string" != typeof t ? [] : ("boolean" == typeof n && (e = n, n = !1), n || (m.createHTMLDocument ? ((r = (n = x.implementation.createHTMLDocument("")).createElement("base")).href = x.location.href, n.head.appendChild(r)) : n = x), a = !e && [], (i = _.exec(t)) ? [n.createElement(i[1])] : (i = yt([t], n, a), a && a.length && v(a).remove(), v.merge([], i.childNodes)));
          var r, i, a
      }, v.fn.load = function(t, n, e) {
          var r, i, a, o = this,
              d = t.indexOf(" ");
          return d > -1 && (r = xn(t.slice(d)), t = t.slice(0, d)), f(n) ? (e = n, n = void 0) : n && "object" == typeof n && (i = "POST"), o.length > 0 && v.ajax({
              url: t,
              type: i || "GET",
              dataType: "html",
              data: n
          }).done((function(t) {
              a = arguments, o.html(r ? v("<div>").append(v.parseHTML(t)).find(r) : t)
          })).always(e && function(t, n) {
              o.each((function() {
                  e.apply(this, a || [t.responseText, n, t])
              }))
          }), this
      }, v.expr.pseudos.animated = function(t) {
          return v.grep(v.timers, (function(n) {
              return t === n.elem
          })).length
      }, v.offset = {
          setOffset: function(t, n, e) {
              var r, i, a, o, d, s, p = v.css(t, "position"),
                  A = v(t),
                  c = {};
              "static" === p && (t.style.position = "relative"), d = A.offset(), a = v.css(t, "top"), s = v.css(t, "left"), ("absolute" === p || "fixed" === p) && (a + s).indexOf("auto") > -1 ? (o = (r = A.position()).top, i = r.left) : (o = parseFloat(a) || 0, i = parseFloat(s) || 0), f(n) && (n = n.call(t, e, v.extend({}, d))), null != n.top && (c.top = n.top - d.top + o), null != n.left && (c.left = n.left - d.left + i), "using" in n ? n.using.call(t, c) : ("number" == typeof c.top && (c.top += "px"), "number" == typeof c.left && (c.left += "px"), A.css(c))
          }
      }, v.fn.extend({
          offset: function(t) {
              if (arguments.length) return void 0 === t ? this : this.each((function(n) {
                  v.offset.setOffset(this, t, n)
              }));
              var n, e, r = this[0];
              return r ? r.getClientRects().length ? (n = r.getBoundingClientRect(), e = r.ownerDocument.defaultView, {
                  top: n.top + e.pageYOffset,
                  left: n.left + e.pageXOffset
              }) : {
                  top: 0,
                  left: 0
              } : void 0
          },
          position: function() {
              if (this[0]) {
                  var t, n, e, r = this[0],
                      i = {
                          top: 0,
                          left: 0
                      };
                  if ("fixed" === v.css(r, "position")) n = r.getBoundingClientRect();
                  else {
                      for (n = this.offset(), e = r.ownerDocument, t = r.offsetParent || e.documentElement; t && (t === e.body || t === e.documentElement) && "static" === v.css(t, "position");) t = t.parentNode;
                      t && t !== r && 1 === t.nodeType && ((i = v(t).offset()).top += v.css(t, "borderTopWidth", !0), i.left += v.css(t, "borderLeftWidth", !0))
                  }
                  return {
                      top: n.top - i.top - v.css(r, "marginTop", !0),
                      left: n.left - i.left - v.css(r, "marginLeft", !0)
                  }
              }
          },
          offsetParent: function() {
              return this.map((function() {
                  for (var t = this.offsetParent; t && "static" === v.css(t, "position");) t = t.offsetParent;
                  return t || at
              }))
          }
      }), v.each({
          scrollLeft: "pageXOffset",
          scrollTop: "pageYOffset"
      }, (function(t, n) {
          var e = "pageYOffset" === n;
          v.fn[t] = function(r) {
              return U(this, (function(t, r, i) {
                  var a;
                  if (u(t) ? a = t : 9 === t.nodeType && (a = t.defaultView), void 0 === i) return a ? a[n] : t[r];
                  a ? a.scrollTo(e ? a.pageXOffset : i, e ? i : a.pageYOffset) : t[r] = i
              }), t, r, arguments.length)
          }
      })), v.each(["top", "left"], (function(t, n) {
          v.cssHooks[n] = Nt(m.pixelPosition, (function(t, e) {
              if (e) return e = Qt(t, n), qt.test(e) ? v(t).position()[n] + "px" : e
          }))
      })), v.each({
          Height: "height",
          Width: "width"
      }, (function(t, n) {
          v.each({
              padding: "inner" + t,
              content: n,
              "": "outer" + t
          }, (function(e, r) {
              v.fn[r] = function(i, a) {
                  var o = arguments.length && (e || "boolean" != typeof i),
                      d = e || (!0 === i || !0 === a ? "margin" : "border");
                  return U(this, (function(n, e, i) {
                      var a;
                      return u(n) ? 0 === r.indexOf("outer") ? n["inner" + t] : n.document.documentElement["client" + t] : 9 === n.nodeType ? (a = n.documentElement, Math.max(n.body["scroll" + t], a["scroll" + t], n.body["offset" + t], a["offset" + t], a["client" + t])) : void 0 === i ? v.css(n, e, d) : v.style(n, e, i, d)
                  }), n, o ? i : void 0, o)
              }
          }))
      })), v.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function(t, n) {
          v.fn[n] = function(t) {
              return this.on(n, t)
          }
      })), v.fn.extend({
          bind: function(t, n, e) {
              return this.on(t, null, n, e)
          },
          unbind: function(t, n) {
              return this.off(t, null, n)
          },
          delegate: function(t, n, e, r) {
              return this.on(n, t, e, r)
          },
          undelegate: function(t, n, e) {
              return 1 === arguments.length ? this.off(t, "**") : this.off(n, t || "**", e)
          },
          hover: function(t, n) {
              return this.mouseenter(t).mouseleave(n || t)
          }
      }), v.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function(t, n) {
          v.fn[n] = function(t, e) {
              return arguments.length > 0 ? this.on(n, null, t, e) : this.trigger(n)
          }
      }));
      var Xn = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      v.proxy = function(t, n) {
          var e, r, i;
          if ("string" == typeof n && (e = t[n], n = t, t = e), f(t)) return r = d.call(arguments, 2), (i = function() {
              return t.apply(n || this, r.concat(d.call(arguments)))
          }).guid = t.guid = t.guid || v.guid++, i
      }, v.holdReady = function(t) {
          t ? v.readyWait++ : v.ready(!0)
      }, v.isArray = Array.isArray, v.parseJSON = JSON.parse, v.nodeName = G, v.isFunction = f, v.isWindow = u, v.camelCase = W, v.type = y, v.now = Date.now, v.isNumeric = function(t) {
          var n = v.type(t);
          return ("number" === n || "string" === n) && !isNaN(t - parseFloat(t))
      }, v.trim = function(t) {
          return null == t ? "" : (t + "").replace(Xn, "")
      }, void 0 === (r = function() {
          return v
      }.apply(n, [])) || (t.exports = r);
      var $n = e.jQuery,
          Jn = e.$;
      return v.noConflict = function(t) {
          return e.$ === v && (e.$ = Jn), t && e.jQuery === v && (e.jQuery = $n), v
      }, void 0 === i && (e.jQuery = e.$ = v), v
  }))
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.extend = d, n.indexOf = function(t, n) {
      for (var e = 0, r = t.length; e < r; e++)
          if (t[e] === n) return e;
      return -1
  }, n.escapeExpression = function(t) {
      if ("string" != typeof t) {
          if (t && t.toHTML) return t.toHTML();
          if (null == t) return "";
          if (!t) return t + "";
          t = "" + t
      }
      if (!a.test(t)) return t;
      return t.replace(i, o)
  }, n.isEmpty = function(t) {
      return !t && 0 !== t || !(!A(t) || 0 !== t.length)
  }, n.createFrame = function(t) {
      var n = d({}, t);
      return n._parent = t, n
  }, n.blockParams = function(t, n) {
      return t.path = n, t
  }, n.appendContextPath = function(t, n) {
      return (t ? t + "." : "") + n
  };
  var r = {
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;",
          '"': "&quot;",
          "'": "&#x27;",
          "`": "&#x60;",
          "=": "&#x3D;"
      },
      i = /[&<>"'`=]/g,
      a = /[&<>"'`=]/;

  function o(t) {
      return r[t]
  }

  function d(t) {
      for (var n = 1; n < arguments.length; n++)
          for (var e in arguments[n]) Object.prototype.hasOwnProperty.call(arguments[n], e) && (t[e] = arguments[n][e]);
      return t
  }
  var s = Object.prototype.toString;
  n.toString = s;
  var p = function(t) {
      return "function" == typeof t
  };
  p(/x/) && (n.isFunction = p = function(t) {
      return "function" == typeof t && "[object Function]" === s.call(t)
  }), n.isFunction = p;
  var A = Array.isArray || function(t) {
      return !(!t || "object" != typeof t) && "[object Array]" === s.call(t)
  };
  n.isArray = A
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = ["description", "fileName", "lineNumber", "endLineNumber", "message", "name", "number", "stack"];

  function i(t, n) {
      var e = n && n.loc,
          a = void 0,
          o = void 0,
          d = void 0,
          s = void 0;
      e && (a = e.start.line, o = e.end.line, d = e.start.column, s = e.end.column, t += " - " + a + ":" + d);
      for (var p = Error.prototype.constructor.call(this, t), A = 0; A < r.length; A++) this[r[A]] = p[r[A]];
      Error.captureStackTrace && Error.captureStackTrace(this, i);
      try {
          e && (this.lineNumber = a, this.endLineNumber = o, Object.defineProperty ? (Object.defineProperty(this, "column", {
              value: d,
              enumerable: !0
          }), Object.defineProperty(this, "endColumn", {
              value: s,
              enumerable: !0
          })) : (this.column = d, this.endColumn = s))
      } catch (t) {}
  }
  i.prototype = new Error, n.default = i, t.exports = n.default
}, function(t, n, e) {
  (function(n) {
      var e;
      e = "undefined" != typeof window ? window : void 0 !== n ? n : "undefined" != typeof self ? self : {}, t.exports = e
  }).call(this, e(9))
}, function(t, n, e) {
  (function(n) {
      var r, i = void 0 !== n ? n : "undefined" != typeof window ? window : {},
          a = e(27);
      "undefined" != typeof document ? r = document : (r = i["__GLOBAL_DOCUMENT_CACHE@4"]) || (r = i["__GLOBAL_DOCUMENT_CACHE@4"] = a), t.exports = r
  }).call(this, e(9))
}, function(t, n, e) {
  "use strict";
  (function(t) {
      e.d(n, "b", (function() {
          return i
      })), e.d(n, "a", (function() {
          return a
      })), e.d(n, "c", (function() {
          return o
      }));
      t("#modal"), t("[data-modal]"), t("#modal button.close"), t("[data-modal-content]");
      var r, i = {
              EXTERNAL: "external",
              EXTERNAL_MEDCONNECT: "external_medconnect",
              EXTERNAL_THIRD_PARTY: "external_third_party"
          },
          a = {
              SLIDE: "slide"
          },
          o = function(n, e, r) {
              var i, a, o, d;
              t("#modal").addClass("active").attr("data-modal-animation", n), t('[data-modal-content="' + e + '"]').addClass("active"), t('#modal [data-modal-content="' + e + '"] .external').attr("href", r), i = t("#modal"), a = i.find("select:visible, input:visible, textarea:visible, button:visible, a:visible"), o = a.first(), d = a.last(), o.focus(), d.on("keydown", (function(t) {
                  9 !== t.which || t.shiftKey || (t.preventDefault(), o.focus())
              })), o.on("keydown", (function(t) {
                  9 === t.which && t.shiftKey && (t.preventDefault(), d.focus())
              })), i.on("keyup", (function(n) {
                  27 === n.keyCode && (t("#modal").removeClass("active"), t("[data-modal-content]").removeClass("active"))
              }))
          };
      t(document).ready((function() {
          t("[data-modal]").on("click", (function(n) {
              n.preventDefault();
              var e = t(this).attr("data-animation"),
                  i = t(this).attr("data-modal"),
                  a = t(this).attr("href");
              r = t(this).attr("data-redirect"), o(e, i, a)
          })), t("#modal button.close, #modal > strong").on("click", (function() {
              t("#modal").removeClass("active"), t("[data-modal-content]").removeClass("active")
          })), t("#modal .btn.external").on("click", (function(n) {
              n.preventDefault(), t("#modal").removeClass("active"), t("[data-modal-content]").removeClass("active"), window.open(t(this).attr("href")), null != r && location.replace(r)
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  var r = e(34),
      i = e(35),
      a = e(36),
      o = e(37);
  t.exports = function(t) {
      return r(t) || i(t) || a(t) || o()
  }
}, function(t, n, e) {
  t.exports = e(38)
}, function(t, n) {
  var e;
  e = function() {
      return this
  }();
  try {
      e = e || new Function("return this")()
  } catch (t) {
      "object" == typeof window && (e = window)
  }
  t.exports = e
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0, n.HandlebarsEnvironment = A;
  var i = e(2),
      a = r(e(3)),
      o = e(16),
      d = e(48),
      s = r(e(17)),
      p = e(18);
  n.VERSION = "4.7.6";
  n.COMPILER_REVISION = 8;
  n.LAST_COMPATIBLE_COMPILER_REVISION = 7;
  n.REVISION_CHANGES = {
      1: "<= 1.0.rc.2",
      2: "== 1.0.0-rc.3",
      3: "== 1.0.0-rc.4",
      4: "== 1.x.x",
      5: "== 2.0.0-alpha.x",
      6: ">= 2.0.0-beta.1",
      7: ">= 4.0.0 <4.3.0",
      8: ">= 4.3.0"
  };

  function A(t, n, e) {
      this.helpers = t || {}, this.partials = n || {}, this.decorators = e || {}, o.registerDefaultHelpers(this), d.registerDefaultDecorators(this)
  }
  A.prototype = {
      constructor: A,
      logger: s.default,
      log: s.default.log,
      registerHelper: function(t, n) {
          if ("[object Object]" === i.toString.call(t)) {
              if (n) throw new a.default("Arg not supported with multiple helpers");
              i.extend(this.helpers, t)
          } else this.helpers[t] = n
      },
      unregisterHelper: function(t) {
          delete this.helpers[t]
      },
      registerPartial: function(t, n) {
          if ("[object Object]" === i.toString.call(t)) i.extend(this.partials, t);
          else {
              if (void 0 === n) throw new a.default('Attempting to register a partial called "' + t + '" as undefined');
              this.partials[t] = n
          }
      },
      unregisterPartial: function(t) {
          delete this.partials[t]
      },
      registerDecorator: function(t, n) {
          if ("[object Object]" === i.toString.call(t)) {
              if (n) throw new a.default("Arg not supported with multiple decorators");
              i.extend(this.decorators, t)
          } else this.decorators[t] = n
      },
      unregisterDecorator: function(t) {
          delete this.decorators[t]
      },
      resetLoggedPropertyAccesses: function() {
          p.resetLoggedProperties()
      }
  };
  var c = s.default.log;
  n.log = c, n.createFrame = i.createFrame, n.logger = s.default
}, function(t, n, e) {
  "use strict";
  (function(t) {
      e.d(n, "a", (function() {
          return c
      }));
      var r = e(12),
          i = [],
          a = {
              durationchange: function(t, n) {},
              ended: function(t, n) {},
              error: function(t, n) {},
              firstplay: function(t, n) {},
              fullscreenchange: function(t, n) {},
              loadedalldata: function(t, n) {},
              loadeddata: function(t, n) {},
              loadedmetadata: function(t, n) {
                  switch (n.tagAttributes["data-video-id"]) {
                      case "6221183646001":
                          n.setAttribute("data-video-title", "Hanauer and Feagan"), n.children_[0].setAttribute("data-video-title", "Hanauer and Feagan");
                          break;
                      case "6221185281001":
                          n.setAttribute("data-video-title", "Hanauer"), n.children_[0].setAttribute("data-video-title", "Hanauer");
                          break;
                      case "6221186163001":
                          n.setAttribute("data-video-title", "Panaccione"), n.children_[0].setAttribute("data-video-title", "Panaccione");
                          break;
                      case "6221186943001":
                          n.setAttribute("data-video-title", "Feagan"), n.children_[0].setAttribute("data-video-title", "Feagan")
                  }
              },
              loadstart: function(t, n) {
                  i.push(n)
              },
              pause: function(t, n) {},
              play: function(t, n) {
                  i.forEach((function(t) {
                      t !== n && t.pause()
                  }))
              },
              progress: function(t, n) {},
              timeupdate: function(t, n) {},
              volumechange: function(t, n) {},
              resize: function(t, n) {}
          },
          o = [];
      for (var d in a) o.push(d);

      function s() {
          var t = window.matchMedia("(max-width: 767px)").matches || window.matchMedia("(min-width: 768px) and (orientation: portrait)").matches,
              n = "camp cd" == document.querySelector("html").getAttribute("pagetype") ? "chef" : "camp";
          return t && "chef" == n ? "6211921276001" : t && "camp" == n ? "6211921385001" : t || "chef" != n ? t || "camp" != n ? void 0 : "6211921277001" : "6211915764001"
      }

      function p(t, n) {
          var e = {
                  refNode: t,
                  refNodeInsert: r.a.REF_NODE_INSERT_REPLACE,
                  accountId: t.getAttribute("data-bc-account") || "2574028764001"
              },
              i = t.getAttribute("data-bc-player"),
              d = t.getAttribute("data-bc-video");
          i && (e.playerId = i), d && (e.videoId = t.getAttribute("data-bc-video")), Object(r.a)(e).then((function(t) {
              var e = t.ref;
              e.on(o, (function(t) {
                  "function" == typeof a[t.type] && a[t.type](t, e), window.dispatchEvent(new CustomEvent("bcplayer", {
                      detail: {
                          originalEvent: t,
                          player: e
                      }
                  }))
              })), "function" == typeof n && n(e)
          })).catch((function(t) {
              throw t
          }))
      }

      function A(t) {
          return "video/mp4" == t.type && t.src.startsWith("https")
      }
      t((function() {
          if (t("[pageid='Home']").length) {
              var n, e, r = document.querySelector("#homepage_video");
              p(t("[data-bc-player]")[0], (function(t) {
                  n = t;
                  var e = s();
                  n.catalog.getVideo(e, (function(t, n) {
                      var e = n.sources.filter(A)[0];
                      r.src = e.src
                  })), r.addEventListener("timeupdate", (function(t) {
                      r.currentTime >= 4.5 && document.querySelector(".hero_video_wrapper a.learn-more-btn").classList.add("show")
                  }))
              })), window.addEventListener("resize", (function() {
                  var t = s();
                  t != e && n.catalog.getVideo(t, (function(t, n) {
                      var i = n.sources.filter(A)[0];
                      r.src = i.src, e = n.id
                  }))
              }))
          }
      }));
      var c = {
          loadPlayer: p
      }
  }).call(this, e(1))
}, function(t, n, e) {
  "use strict";
  var r = e(5),
      i = e.n(r),
      a = e(4),
      o = e.n(a);
  /*! @name @brightcove/player-loader @version 1.8.0 @license Apache-2.0 */
  function d() {
      return (d = Object.assign || function(t) {
          for (var n = 1; n < arguments.length; n++) {
              var e = arguments[n];
              for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r])
          }
          return t
      }).apply(this, arguments)
  }
  var s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
          return typeof t
      } : function(t) {
          return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
      },
      p = ["catalogSearch", "catalogSequence"],
      A = ["adConfigId", "applicationId", "catalogSearch", "catalogSequence", "playlistId", "playlistVideoId", "videoId"],
      c = function(t) {
          return Object.keys(t).filter((function(t) {
              return -1 !== A.indexOf(t)
          })).reduce((function(n, e) {
              var r = function(t, n) {
                  if (t && void 0 !== t[n]) {
                      if ("string" != typeof t[n] && -1 !== p.indexOf(n)) try {
                          return encodeURIComponent(JSON.stringify(t[n]))
                      } catch (t) {
                          return
                      }
                      return encodeURIComponent(String(t[n]).trim()) || void 0
                  }
              }(t, e);
              return void 0 !== r && (n += n ? "&" : "?", n += encodeURIComponent(e) + "=" + r), n
          }), "")
      },
      l = function(t) {
          var n = t.accountId,
              e = t.base,
              r = void 0 === e ? "https://players.brightcove.net" : e,
              i = t.playerId,
              a = void 0 === i ? "default" : i,
              o = t.embedId,
              d = void 0 === o ? "default" : o,
              p = t.iframe,
              A = void 0 !== p && p,
              l = t.minified,
              C = void 0 === l || l,
              g = t.queryParams,
              h = void 0 === g ? null : g,
              m = "";
          A ? m += "html" : (C && (m += "min."), m += "js"), "/" === r.charAt(r.length - 1) && (r = r.substring(0, r.length - 1));
          var f = "";
          return A && h && "object" === (void 0 === h ? "undefined" : s(h)) && (f = c(h)), r + "/" + (n = encodeURIComponent(n)) + "/" + (a = encodeURIComponent(a)) + "_" + (d = encodeURIComponent(d)) + "/index." + m + f
      };
  /*! @name @brightcove/player-url @version 1.2.0 @license Apache-2.0 */
  l.VERSION = "1.2.0";
  var C = {
          embedId: "default",
          embedType: "in-page",
          playerId: "default",
          Promise: o.a.Promise,
          refNodeInsert: "append"
      },
      g = "video",
      h = "video-js",
      m = "in-page",
      f = "iframe",
      u = "append",
      x = "prepend",
      b = "before",
      B = "after",
      y = "replace",
      v = ["catalogSearch", "catalogSequence"],
      w = "https://players.brightcove.net/",
      k = function(t) {
          if (t.playerUrl) return t.playerUrl;
          var n = t.accountId,
              e = t.playerId,
              r = t.embedId,
              i = t.embedOptions,
              a = t.embedType === f;
          return l({
              accountId: n,
              playerId: e,
              embedId: r,
              iframe: a,
              base: w,
              minified: !i || !i.unminified,
              queryParams: t
          })
      },
      E = function() {
          return w
      },
      I = function(t) {
          w = t
      },
      D = function(t) {
          return Boolean(t && 1 === t.nodeType)
      },
      G = function(t) {
          return Boolean(D(t) && t.parentNode)
      },
      _ = function(t, n, e) {
          return n ? function(t, n) {
              if (!t.pip) return n;
              var e = i.a.createElement("div");
              return e.classList.add("vjs-pip-container"), e.appendChild(n), e
          }(n, function(t, n, e) {
              if (!n.responsive) return e;
              e.style.position = "absolute", e.style.top = "0px", e.style.right = "0px", e.style.bottom = "0px", e.style.left = "0px", e.style.width = "100%", e.style.height = "100%";
              var r = d({
                      aspectRatio: "16:9",
                      iframeHorizontalPlaylist: !1,
                      maxWidth: "100%"
                  }, n.responsive),
                  a = r.aspectRatio.split(":").map(Number),
                  o = i.a.createElement("div"),
                  s = a[1] / a[0] * 100;
              t === f && r.iframeHorizontalPlaylist && (s *= 1.25), o.style.paddingTop = s + "%", o.appendChild(e);
              var p = i.a.createElement("div");
              return p.style.position = "relative", p.style.display = "block", p.style.maxWidth = r.maxWidth, p.appendChild(o), p
          }(t, n, e)) : e
      },
      S = function(t) {
          return function(t, n) {
              var e = t.refNode,
                  r = t.refNodeInsert,
                  a = e.parentNode,
                  o = _(t.embedType, t.embedOptions, n);
              if (r === b ? a.insertBefore(o, e) : r === B ? a.insertBefore(o, e.nextElementSibling || null) : r === y ? a.replaceChild(o, e) : r === x ? e.insertBefore(o, e.firstChild || null) : e.appendChild(o), t.embedOptions && t.embedOptions.playlist) {
                  var d = t.embedOptions.playlist.legacy ? "ul" : "div",
                      s = i.a.createElement(d);
                  s.classList.add("vjs-playlist"), n.parentNode.insertBefore(s, n.nextElementSibling || null)
              }
              return t.refNode = null, n
          }(t, function(t, n) {
              if ("function" != typeof t.onEmbedCreated) return n;
              var e = t.onEmbedCreated(n);
              return D(e) ? e : n
          }(t, t.embedType === f ? function(t) {
              var n = i.a.createElement("iframe");
              return n.setAttribute("allow", "autoplay;encrypted-media;fullscreen"), n.setAttribute("allowfullscreen", "allowfullscreen"), n.src = k(t), n
          }(t) : function(t) {
              var n = t.embedOptions,
                  e = {
                      adConfigId: "data-ad-config-id",
                      applicationId: "data-application-id",
                      catalogSearch: "data-catalog-search",
                      catalogSequence: "data-catalog-sequence",
                      deliveryConfigId: "data-delivery-config-id",
                      playlistId: "data-playlist-id",
                      playlistVideoId: "data-playlist-video-id",
                      poster: "poster",
                      videoId: "data-video-id"
                  },
                  r = n && n.tagName || h,
                  a = i.a.createElement(r);
              return Object.keys(e).filter((function(n) {
                  return t[n]
              })).forEach((function(n) {
                  var r;
                  if ("string" != typeof t[n] && -1 !== v.indexOf(n)) try {
                      r = JSON.stringify(t[n])
                  } catch (t) {
                      return
                  } else r = String(t[n]).trim();
                  a.setAttribute(e[n], r)
              })), a.setAttribute("controls", "controls"), a.classList.add("video-js"), a
          }(t)))
      },
      z = new o.a.Map,
      P = function(t) {
          return (t.accountId || "*") + "_" + t.playerId + "_" + t.embedId
      },
      O = function() {
          z.clear()
      },
      K = function(t) {
          z.forEach(t)
      },
      R = function(t) {
          return z.has(P(t))
      },
      H = function(t) {
          z.set(P(t), t.accountId ? k(t) : "")
      },
      M = /^([A-Za-z0-9]+)_([A-Za-z0-9]+)$/,
      F = function() {
          return o.a.bc ? Object.keys(o.a.bc).filter((function(t) {
              return M.test(t)
          })) : []
      },
      T = function(t) {
          t && Object.keys(t.players).forEach((function(n) {
              var e = t.players[n];
              e && e.dispose()
          }))
      },
      q = function() {
          K((function(t, n) {
              t && Array.prototype.slice.call(i.a.querySelectorAll('script[src="' + t + '"]')).forEach((function(t) {
                  return t.parentNode.removeChild(t)
              }))
          })), O(), T(o.a.videojs), F().forEach((function(t) {
              return T(o.a.bc[t].videojs)
          })), Object.keys(o.a).filter((function(t) {
              return /^videojs/i.test(t) || /^(bc)$/.test(t)
          })).forEach((function(t) {
              delete o.a[t]
          }))
      };
  (function() {
      F().forEach((function(t) {
          var n = t.match(M),
              e = {
                  playerId: n[1],
                  embedId: n[2]
              };
          R(e) || H(e)
      }))
  })();
  var j = function(t) {
          return "function" == typeof t
      },
      L = function(t) {
          var n, e = t.accountId,
              r = t.embedOptions,
              i = t.embedType,
              a = t.options,
              o = t.refNode,
              d = t.refNodeInsert;
          if (!e) throw new Error("accountId is required");
          if (!G(o)) throw new Error("refNode must resolve to a node attached to the DOM");
          if (! function(t) {
                  return t === m || t === f
              }(i)) throw new Error("embedType is missing or invalid");
          if (i === f && a) throw new Error("cannot use options with an iframe embed");
          if (r && void 0 !== r.tagName && ((n = r.tagName) !== h && n !== g)) throw new Error('embedOptions.tagName is invalid (value: "' + r.tagName + '")');
          if (r && r.responsive && r.responsive.aspectRatio && !/^\d+\:\d+$/.test(r.responsive.aspectRatio)) throw new Error('embedOptions.responsive.aspectRatio must be in the "n:n" format (value: "' + r.responsive.aspectRatio + '")');
          if (! function(t) {
                  return t === u || t === x || t === b || t === B || t === y
              }(d)) throw new Error("refNodeInsert is missing or invalid")
      },
      U = function(t, n, e, r) {
          var i, a = t.embedId,
              d = t.playerId,
              s = o.a.bc[d + "_" + a] || o.a.bc;
          if (!s) return r(new Error("missing bc function for " + d));
          H(t);
          try {
              (i = s(n, t.options)).bcinfo && (i.bcinfo.PLAYER_LOADER = !0)
          } catch (n) {
              var p = "Could not initialize the Brightcove Player.";
              return t.embedOptions.tagName === h && (p += ' You are attempting to embed using a "video-js" element. Please ensure that your Player is v6.11.0 or newer in order to support this embed type. Alternatively, pass `"video"` for `embedOptions.tagName`.'), r(new Error(p))
          }
          e({
              type: m,
              ref: i
          })
      },
      Q = function(t, n, e) {
          t.refNode = function(t) {
              return G(t) ? t : "string" == typeof t ? i.a.querySelector(t) : null
          }(t.refNode), L(t);
          var r = t.refNode,
              a = t.refNodeInsert,
              o = r.parentNode,
              d = S(t);
          if (t.embedType !== f) {
              if (R(t)) return U(t, d, n, e);
              var s = i.a.createElement("script");
              s.onload = function() {
                  return U(t, d, n, e)
              }, s.onerror = function() {
                  e(new Error("player script could not be downloaded"))
              }, s.async = !0, s.charset = "utf-8", s.src = k(t), a === y ? o.appendChild(s) : r.appendChild(s)
          } else n({
              type: f,
              ref: d
          })
      },
      N = function(t) {
          var n = d({}, C, t),
              e = n.Promise,
              r = n.onSuccess,
              i = n.onFailure;
          return !j(e) || j(r) || j(i) ? Q(n, j(r) ? r : function() {}, j(i) ? i : function(t) {
              throw t
          }) : new e((function(t, e) {
              return Q(n, t, e)
          }))
      },
      Y = function(t, n) {
          Object.defineProperty(N, t, {
              configurable: !1,
              enumerable: !0,
              value: n,
              writable: !1
          })
      };
  Y("getBaseUrl", (function() {
      return E()
  })), Y("setBaseUrl", (function(t) {
      I(t)
  })), Y("getUrl", (function(t) {
      return k(t)
  })), Y("reset", (function() {
      return q()
  })), [
      ["EMBED_TAG_NAME_VIDEO", g],
      ["EMBED_TAG_NAME_VIDEOJS", h],
      ["EMBED_TYPE_IN_PAGE", m],
      ["EMBED_TYPE_IFRAME", f],
      ["REF_NODE_INSERT_APPEND", u],
      ["REF_NODE_INSERT_PREPEND", x],
      ["REF_NODE_INSERT_BEFORE", b],
      ["REF_NODE_INSERT_AFTER", B],
      ["REF_NODE_INSERT_REPLACE", y],
      ["VERSION", "1.8.0"]
  ].forEach((function(t) {
      Y(t[0], t[1])
  })), n.a = N
}, function(t, n) {
  function e(t, n, e, r, i, a, o) {
      try {
          var d = t[a](o),
              s = d.value
      } catch (t) {
          return void e(t)
      }
      d.done ? n(s) : Promise.resolve(s).then(r, i)
  }
  t.exports = function(t) {
      return function() {
          var n = this,
              r = arguments;
          return new Promise((function(i, a) {
              var o = t.apply(n, r);

              function d(t) {
                  e(o, i, a, d, s, "next", t)
              }

              function s(t) {
                  e(o, i, a, d, s, "throw", t)
              }
              d(void 0)
          }))
      }
  }
}, function(t, n, e) {
  var r, i, a;
  /*!
   * jQuery Validation Plugin v1.19.1
   *
   * https://jqueryvalidation.org/
   *
   * Copyright (c) 2019 Jörn Zaefferer
   * Released under the MIT license
   */
  i = [e(1)], void 0 === (a = "function" == typeof(r = function(t) {
      var n;
      t.extend(t.fn, {
          validate: function(n) {
              if (this.length) {
                  var e = t.data(this[0], "validator");
                  return e || (this.attr("novalidate", "novalidate"), e = new t.validator(n, this[0]), t.data(this[0], "validator", e), e.settings.onsubmit && (this.on("click.validate", ":submit", (function(n) {
                      e.submitButton = n.currentTarget, t(this).hasClass("cancel") && (e.cancelSubmit = !0), void 0 !== t(this).attr("formnovalidate") && (e.cancelSubmit = !0)
                  })), this.on("submit.validate", (function(n) {
                      function r() {
                          var r, i;
                          return e.submitButton && (e.settings.submitHandler || e.formSubmitted) && (r = t("<input type='hidden'/>").attr("name", e.submitButton.name).val(t(e.submitButton).val()).appendTo(e.currentForm)), !(e.settings.submitHandler && !e.settings.debug) || (i = e.settings.submitHandler.call(e, e.currentForm, n), r && r.remove(), void 0 !== i && i)
                      }
                      return e.settings.debug && n.preventDefault(), e.cancelSubmit ? (e.cancelSubmit = !1, r()) : e.form() ? e.pendingRequest ? (e.formSubmitted = !0, !1) : r() : (e.focusInvalid(), !1)
                  }))), e)
              }
              n && n.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing.")
          },
          valid: function() {
              var n, e, r;
              return t(this[0]).is("form") ? n = this.validate().form() : (r = [], n = !0, e = t(this[0].form).validate(), this.each((function() {
                  (n = e.element(this) && n) || (r = r.concat(e.errorList))
              })), e.errorList = r), n
          },
          rules: function(n, e) {
              var r, i, a, o, d, s, p = this[0],
                  A = void 0 !== this.attr("contenteditable") && "false" !== this.attr("contenteditable");
              if (null != p && (!p.form && A && (p.form = this.closest("form")[0], p.name = this.attr("name")), null != p.form)) {
                  if (n) switch (i = (r = t.data(p.form, "validator").settings).rules, a = t.validator.staticRules(p), n) {
                      case "add":
                          t.extend(a, t.validator.normalizeRule(e)), delete a.messages, i[p.name] = a, e.messages && (r.messages[p.name] = t.extend(r.messages[p.name], e.messages));
                          break;
                      case "remove":
                          return e ? (s = {}, t.each(e.split(/\s/), (function(t, n) {
                              s[n] = a[n], delete a[n]
                          })), s) : (delete i[p.name], a)
                  }
                  return (o = t.validator.normalizeRules(t.extend({}, t.validator.classRules(p), t.validator.attributeRules(p), t.validator.dataRules(p), t.validator.staticRules(p)), p)).required && (d = o.required, delete o.required, o = t.extend({
                      required: d
                  }, o)), o.remote && (d = o.remote, delete o.remote, o = t.extend(o, {
                      remote: d
                  })), o
              }
          }
      }), t.extend(t.expr.pseudos || t.expr[":"], {
          blank: function(n) {
              return !t.trim("" + t(n).val())
          },
          filled: function(n) {
              var e = t(n).val();
              return null !== e && !!t.trim("" + e)
          },
          unchecked: function(n) {
              return !t(n).prop("checked")
          }
      }), t.validator = function(n, e) {
          this.settings = t.extend(!0, {}, t.validator.defaults, n), this.currentForm = e, this.init()
      }, t.validator.format = function(n, e) {
          return 1 === arguments.length ? function() {
              var e = t.makeArray(arguments);
              return e.unshift(n), t.validator.format.apply(this, e)
          } : (void 0 === e || (arguments.length > 2 && e.constructor !== Array && (e = t.makeArray(arguments).slice(1)), e.constructor !== Array && (e = [e]), t.each(e, (function(t, e) {
              n = n.replace(new RegExp("\\{" + t + "\\}", "g"), (function() {
                  return e
              }))
          }))), n)
      }, t.extend(t.validator, {
          defaults: {
              messages: {},
              groups: {},
              rules: {},
              errorClass: "error",
              pendingClass: "pending",
              validClass: "valid",
              errorElement: "label",
              focusCleanup: !1,
              focusInvalid: !0,
              errorContainer: t([]),
              errorLabelContainer: t([]),
              onsubmit: !0,
              ignore: ":hidden",
              ignoreTitle: !1,
              onfocusin: function(t) {
                  this.lastActive = t, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, t, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(t)))
              },
              onfocusout: function(t) {
                  this.checkable(t) || !(t.name in this.submitted) && this.optional(t) || this.element(t)
              },
              onkeyup: function(n, e) {
                  9 === e.which && "" === this.elementValue(n) || -1 !== t.inArray(e.keyCode, [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225]) || (n.name in this.submitted || n.name in this.invalid) && this.element(n)
              },
              onclick: function(t) {
                  t.name in this.submitted ? this.element(t) : t.parentNode.name in this.submitted && this.element(t.parentNode)
              },
              highlight: function(n, e, r) {
                  "radio" === n.type ? this.findByName(n.name).addClass(e).removeClass(r) : t(n).addClass(e).removeClass(r)
              },
              unhighlight: function(n, e, r) {
                  "radio" === n.type ? this.findByName(n.name).removeClass(e).addClass(r) : t(n).removeClass(e).addClass(r)
              }
          },
          setDefaults: function(n) {
              t.extend(t.validator.defaults, n)
          },
          messages: {
              required: "This field is required.",
              remote: "Please fix this field.",
              email: "Please enter a valid email address.",
              url: "Please enter a valid URL.",
              date: "Please enter a valid date.",
              dateISO: "Please enter a valid date (ISO).",
              number: "Please enter a valid number.",
              digits: "Please enter only digits.",
              equalTo: "Please enter the same value again.",
              maxlength: t.validator.format("Please enter no more than {0} characters."),
              minlength: t.validator.format("Please enter at least {0} characters."),
              rangelength: t.validator.format("Please enter a value between {0} and {1} characters long."),
              range: t.validator.format("Please enter a value between {0} and {1}."),
              max: t.validator.format("Please enter a value less than or equal to {0}."),
              min: t.validator.format("Please enter a value greater than or equal to {0}."),
              step: t.validator.format("Please enter a multiple of {0}.")
          },
          autoCreateRanges: !1,
          prototype: {
              init: function() {
                  this.labelContainer = t(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || t(this.currentForm), this.containers = t(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                  var n, e = this.currentForm,
                      r = this.groups = {};

                  function i(n) {
                      var r = void 0 !== t(this).attr("contenteditable") && "false" !== t(this).attr("contenteditable");
                      if (!this.form && r && (this.form = t(this).closest("form")[0], this.name = t(this).attr("name")), e === this.form) {
                          var i = t.data(this.form, "validator"),
                              a = "on" + n.type.replace(/^validate/, ""),
                              o = i.settings;
                          o[a] && !t(this).is(o.ignore) && o[a].call(i, this, n)
                      }
                  }
                  t.each(this.settings.groups, (function(n, e) {
                      "string" == typeof e && (e = e.split(/\s/)), t.each(e, (function(t, e) {
                          r[e] = n
                      }))
                  })), n = this.settings.rules, t.each(n, (function(e, r) {
                      n[e] = t.validator.normalizeRule(r)
                  })), t(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']", i).on("click.validate", "select, option, [type='radio'], [type='checkbox']", i), this.settings.invalidHandler && t(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler)
              },
              form: function() {
                  return this.checkForm(), t.extend(this.submitted, this.errorMap), this.invalid = t.extend({}, this.errorMap), this.valid() || t(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
              },
              checkForm: function() {
                  this.prepareForm();
                  for (var t = 0, n = this.currentElements = this.elements(); n[t]; t++) this.check(n[t]);
                  return this.valid()
              },
              element: function(n) {
                  var e, r, i = this.clean(n),
                      a = this.validationTargetFor(i),
                      o = this,
                      d = !0;
                  return void 0 === a ? delete this.invalid[i.name] : (this.prepareElement(a), this.currentElements = t(a), (r = this.groups[a.name]) && t.each(this.groups, (function(t, n) {
                      n === r && t !== a.name && (i = o.validationTargetFor(o.clean(o.findByName(t)))) && i.name in o.invalid && (o.currentElements.push(i), d = o.check(i) && d)
                  })), e = !1 !== this.check(a), d = d && e, this.invalid[a.name] = !e, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), t(n).attr("aria-invalid", !e)), d
              },
              showErrors: function(n) {
                  if (n) {
                      var e = this;
                      t.extend(this.errorMap, n), this.errorList = t.map(this.errorMap, (function(t, n) {
                          return {
                              message: t,
                              element: e.findByName(n)[0]
                          }
                      })), this.successList = t.grep(this.successList, (function(t) {
                          return !(t.name in n)
                      }))
                  }
                  this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
              },
              resetForm: function() {
                  t.fn.resetForm && t(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
                  var n = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                  this.resetElements(n)
              },
              resetElements: function(t) {
                  var n;
                  if (this.settings.unhighlight)
                      for (n = 0; t[n]; n++) this.settings.unhighlight.call(this, t[n], this.settings.errorClass, ""), this.findByName(t[n].name).removeClass(this.settings.validClass);
                  else t.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
              },
              numberOfInvalids: function() {
                  return this.objectLength(this.invalid)
              },
              objectLength: function(t) {
                  var n, e = 0;
                  for (n in t) void 0 !== t[n] && null !== t[n] && !1 !== t[n] && e++;
                  return e
              },
              hideErrors: function() {
                  this.hideThese(this.toHide)
              },
              hideThese: function(t) {
                  t.not(this.containers).text(""), this.addWrapper(t).hide()
              },
              valid: function() {
                  return 0 === this.size()
              },
              size: function() {
                  return this.errorList.length
              },
              focusInvalid: function() {
                  if (this.settings.focusInvalid) try {
                      t(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").trigger("focus").trigger("focusin")
                  } catch (t) {}
              },
              findLastActive: function() {
                  var n = this.lastActive;
                  return n && 1 === t.grep(this.errorList, (function(t) {
                      return t.element.name === n.name
                  })).length && n
              },
              elements: function() {
                  var n = this,
                      e = {};
                  return t(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter((function() {
                      var r = this.name || t(this).attr("name"),
                          i = void 0 !== t(this).attr("contenteditable") && "false" !== t(this).attr("contenteditable");
                      return !r && n.settings.debug && window.console && console.error("%o has no name assigned", this), i && (this.form = t(this).closest("form")[0], this.name = r), !(this.form !== n.currentForm || r in e || !n.objectLength(t(this).rules()) || (e[r] = !0, 0))
                  }))
              },
              clean: function(n) {
                  return t(n)[0]
              },
              errors: function() {
                  var n = this.settings.errorClass.split(" ").join(".");
                  return t(this.settings.errorElement + "." + n, this.errorContext)
              },
              resetInternals: function() {
                  this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = t([]), this.toHide = t([])
              },
              reset: function() {
                  this.resetInternals(), this.currentElements = t([])
              },
              prepareForm: function() {
                  this.reset(), this.toHide = this.errors().add(this.containers)
              },
              prepareElement: function(t) {
                  this.reset(), this.toHide = this.errorsFor(t)
              },
              elementValue: function(n) {
                  var e, r, i = t(n),
                      a = n.type,
                      o = void 0 !== i.attr("contenteditable") && "false" !== i.attr("contenteditable");
                  return "radio" === a || "checkbox" === a ? this.findByName(n.name).filter(":checked").val() : "number" === a && void 0 !== n.validity ? n.validity.badInput ? "NaN" : i.val() : (e = o ? i.text() : i.val(), "file" === a ? "C:\\fakepath\\" === e.substr(0, 12) ? e.substr(12) : (r = e.lastIndexOf("/")) >= 0 || (r = e.lastIndexOf("\\")) >= 0 ? e.substr(r + 1) : e : "string" == typeof e ? e.replace(/\r/g, "") : e)
              },
              check: function(n) {
                  n = this.validationTargetFor(this.clean(n));
                  var e, r, i, a, o = t(n).rules(),
                      d = t.map(o, (function(t, n) {
                          return n
                      })).length,
                      s = !1,
                      p = this.elementValue(n);
                  for (r in "function" == typeof o.normalizer ? a = o.normalizer : "function" == typeof this.settings.normalizer && (a = this.settings.normalizer), a && (p = a.call(n, p), delete o.normalizer), o) {
                      i = {
                          method: r,
                          parameters: o[r]
                      };
                      try {
                          if ("dependency-mismatch" === (e = t.validator.methods[r].call(this, p, n, i.parameters)) && 1 === d) {
                              s = !0;
                              continue
                          }
                          if (s = !1, "pending" === e) return void(this.toHide = this.toHide.not(this.errorsFor(n)));
                          if (!e) return this.formatAndAdd(n, i), !1
                      } catch (t) {
                          throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + n.id + ", check the '" + i.method + "' method.", t), t instanceof TypeError && (t.message += ".  Exception occurred when checking element " + n.id + ", check the '" + i.method + "' method."), t
                      }
                  }
                  if (!s) return this.objectLength(o) && this.successList.push(n), !0
              },
              customDataMessage: function(n, e) {
                  return t(n).data("msg" + e.charAt(0).toUpperCase() + e.substring(1).toLowerCase()) || t(n).data("msg")
              },
              customMessage: function(t, n) {
                  var e = this.settings.messages[t];
                  return e && (e.constructor === String ? e : e[n])
              },
              findDefined: function() {
                  for (var t = 0; t < arguments.length; t++)
                      if (void 0 !== arguments[t]) return arguments[t]
              },
              defaultMessage: function(n, e) {
                  "string" == typeof e && (e = {
                      method: e
                  });
                  var r = this.findDefined(this.customMessage(n.name, e.method), this.customDataMessage(n, e.method), !this.settings.ignoreTitle && n.title || void 0, t.validator.messages[e.method], "<strong>Warning: No message defined for " + n.name + "</strong>"),
                      i = /\$?\{(\d+)\}/g;
                  return "function" == typeof r ? r = r.call(this, e.parameters, n) : i.test(r) && (r = t.validator.format(r.replace(i, "{$1}"), e.parameters)), r
              },
              formatAndAdd: function(t, n) {
                  var e = this.defaultMessage(t, n);
                  this.errorList.push({
                      message: e,
                      element: t,
                      method: n.method
                  }), this.errorMap[t.name] = e, this.submitted[t.name] = e
              },
              addWrapper: function(t) {
                  return this.settings.wrapper && (t = t.add(t.parent(this.settings.wrapper))), t
              },
              defaultShowErrors: function() {
                  var t, n, e;
                  for (t = 0; this.errorList[t]; t++) e = this.errorList[t], this.settings.highlight && this.settings.highlight.call(this, e.element, this.settings.errorClass, this.settings.validClass), this.showLabel(e.element, e.message);
                  if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                      for (t = 0; this.successList[t]; t++) this.showLabel(this.successList[t]);
                  if (this.settings.unhighlight)
                      for (t = 0, n = this.validElements(); n[t]; t++) this.settings.unhighlight.call(this, n[t], this.settings.errorClass, this.settings.validClass);
                  this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
              },
              validElements: function() {
                  return this.currentElements.not(this.invalidElements())
              },
              invalidElements: function() {
                  return t(this.errorList).map((function() {
                      return this.element
                  }))
              },
              showLabel: function(n, e) {
                  var r, i, a, o, d = this.errorsFor(n),
                      s = this.idOrName(n),
                      p = t(n).attr("aria-describedby");
                  d.length ? (d.removeClass(this.settings.validClass).addClass(this.settings.errorClass), d.html(e)) : (r = d = t("<" + this.settings.errorElement + ">").attr("id", s + "-error").addClass(this.settings.errorClass).html(e || ""), this.settings.wrapper && (r = d.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(r) : this.settings.errorPlacement ? this.settings.errorPlacement.call(this, r, t(n)) : r.insertAfter(n), d.is("label") ? d.attr("for", s) : 0 === d.parents("label[for='" + this.escapeCssMeta(s) + "']").length && (a = d.attr("id"), p ? p.match(new RegExp("\\b" + this.escapeCssMeta(a) + "\\b")) || (p += " " + a) : p = a, t(n).attr("aria-describedby", p), (i = this.groups[n.name]) && (o = this, t.each(o.groups, (function(n, e) {
                      e === i && t("[name='" + o.escapeCssMeta(n) + "']", o.currentForm).attr("aria-describedby", d.attr("id"))
                  }))))), !e && this.settings.success && (d.text(""), "string" == typeof this.settings.success ? d.addClass(this.settings.success) : this.settings.success(d, n)), this.toShow = this.toShow.add(d)
              },
              errorsFor: function(n) {
                  var e = this.escapeCssMeta(this.idOrName(n)),
                      r = t(n).attr("aria-describedby"),
                      i = "label[for='" + e + "'], label[for='" + e + "'] *";
                  return r && (i = i + ", #" + this.escapeCssMeta(r).replace(/\s+/g, ", #")), this.errors().filter(i)
              },
              escapeCssMeta: function(t) {
                  return t.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1")
              },
              idOrName: function(t) {
                  return this.groups[t.name] || (this.checkable(t) ? t.name : t.id || t.name)
              },
              validationTargetFor: function(n) {
                  return this.checkable(n) && (n = this.findByName(n.name)), t(n).not(this.settings.ignore)[0]
              },
              checkable: function(t) {
                  return /radio|checkbox/i.test(t.type)
              },
              findByName: function(n) {
                  return t(this.currentForm).find("[name='" + this.escapeCssMeta(n) + "']")
              },
              getLength: function(n, e) {
                  switch (e.nodeName.toLowerCase()) {
                      case "select":
                          return t("option:selected", e).length;
                      case "input":
                          if (this.checkable(e)) return this.findByName(e.name).filter(":checked").length
                  }
                  return n.length
              },
              depend: function(t, n) {
                  return !this.dependTypes[typeof t] || this.dependTypes[typeof t](t, n)
              },
              dependTypes: {
                  boolean: function(t) {
                      return t
                  },
                  string: function(n, e) {
                      return !!t(n, e.form).length
                  },
                  function: function(t, n) {
                      return t(n)
                  }
              },
              optional: function(n) {
                  var e = this.elementValue(n);
                  return !t.validator.methods.required.call(this, e, n) && "dependency-mismatch"
              },
              startRequest: function(n) {
                  this.pending[n.name] || (this.pendingRequest++, t(n).addClass(this.settings.pendingClass), this.pending[n.name] = !0)
              },
              stopRequest: function(n, e) {
                  this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[n.name], t(n).removeClass(this.settings.pendingClass), e && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (t(this.currentForm).submit(), this.submitButton && t("input:hidden[name='" + this.submitButton.name + "']", this.currentForm).remove(), this.formSubmitted = !1) : !e && 0 === this.pendingRequest && this.formSubmitted && (t(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
              },
              previousValue: function(n, e) {
                  return e = "string" == typeof e && e || "remote", t.data(n, "previousValue") || t.data(n, "previousValue", {
                      old: null,
                      valid: !0,
                      message: this.defaultMessage(n, {
                          method: e
                      })
                  })
              },
              destroy: function() {
                  this.resetForm(), t(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur").find(".validate-lessThan-blur").off(".validate-lessThan").removeClass("validate-lessThan-blur").find(".validate-lessThanEqual-blur").off(".validate-lessThanEqual").removeClass("validate-lessThanEqual-blur").find(".validate-greaterThanEqual-blur").off(".validate-greaterThanEqual").removeClass("validate-greaterThanEqual-blur").find(".validate-greaterThan-blur").off(".validate-greaterThan").removeClass("validate-greaterThan-blur")
              }
          },
          classRuleSettings: {
              required: {
                  required: !0
              },
              email: {
                  email: !0
              },
              url: {
                  url: !0
              },
              date: {
                  date: !0
              },
              dateISO: {
                  dateISO: !0
              },
              number: {
                  number: !0
              },
              digits: {
                  digits: !0
              },
              creditcard: {
                  creditcard: !0
              }
          },
          addClassRules: function(n, e) {
              n.constructor === String ? this.classRuleSettings[n] = e : t.extend(this.classRuleSettings, n)
          },
          classRules: function(n) {
              var e = {},
                  r = t(n).attr("class");
              return r && t.each(r.split(" "), (function() {
                  this in t.validator.classRuleSettings && t.extend(e, t.validator.classRuleSettings[this])
              })), e
          },
          normalizeAttributeRule: function(t, n, e, r) {
              /min|max|step/.test(e) && (null === n || /number|range|text/.test(n)) && (r = Number(r), isNaN(r) && (r = void 0)), r || 0 === r ? t[e] = r : n === e && "range" !== n && (t[e] = !0)
          },
          attributeRules: function(n) {
              var e, r, i = {},
                  a = t(n),
                  o = n.getAttribute("type");
              for (e in t.validator.methods) "required" === e ? ("" === (r = n.getAttribute(e)) && (r = !0), r = !!r) : r = a.attr(e), this.normalizeAttributeRule(i, o, e, r);
              return i.maxlength && /-1|2147483647|524288/.test(i.maxlength) && delete i.maxlength, i
          },
          dataRules: function(n) {
              var e, r, i = {},
                  a = t(n),
                  o = n.getAttribute("type");
              for (e in t.validator.methods) "" === (r = a.data("rule" + e.charAt(0).toUpperCase() + e.substring(1).toLowerCase())) && (r = !0), this.normalizeAttributeRule(i, o, e, r);
              return i
          },
          staticRules: function(n) {
              var e = {},
                  r = t.data(n.form, "validator");
              return r.settings.rules && (e = t.validator.normalizeRule(r.settings.rules[n.name]) || {}), e
          },
          normalizeRules: function(n, e) {
              return t.each(n, (function(r, i) {
                  if (!1 !== i) {
                      if (i.param || i.depends) {
                          var a = !0;
                          switch (typeof i.depends) {
                              case "string":
                                  a = !!t(i.depends, e.form).length;
                                  break;
                              case "function":
                                  a = i.depends.call(e, e)
                          }
                          a ? n[r] = void 0 === i.param || i.param : (t.data(e.form, "validator").resetElements(t(e)), delete n[r])
                      }
                  } else delete n[r]
              })), t.each(n, (function(r, i) {
                  n[r] = t.isFunction(i) && "normalizer" !== r ? i(e) : i
              })), t.each(["minlength", "maxlength"], (function() {
                  n[this] && (n[this] = Number(n[this]))
              })), t.each(["rangelength", "range"], (function() {
                  var e;
                  n[this] && (t.isArray(n[this]) ? n[this] = [Number(n[this][0]), Number(n[this][1])] : "string" == typeof n[this] && (e = n[this].replace(/[\[\]]/g, "").split(/[\s,]+/), n[this] = [Number(e[0]), Number(e[1])]))
              })), t.validator.autoCreateRanges && (null != n.min && null != n.max && (n.range = [n.min, n.max], delete n.min, delete n.max), null != n.minlength && null != n.maxlength && (n.rangelength = [n.minlength, n.maxlength], delete n.minlength, delete n.maxlength)), n
          },
          normalizeRule: function(n) {
              if ("string" == typeof n) {
                  var e = {};
                  t.each(n.split(/\s/), (function() {
                      e[this] = !0
                  })), n = e
              }
              return n
          },
          addMethod: function(n, e, r) {
              t.validator.methods[n] = e, t.validator.messages[n] = void 0 !== r ? r : t.validator.messages[n], e.length < 3 && t.validator.addClassRules(n, t.validator.normalizeRule(n))
          },
          methods: {
              required: function(n, e, r) {
                  if (!this.depend(r, e)) return "dependency-mismatch";
                  if ("select" === e.nodeName.toLowerCase()) {
                      var i = t(e).val();
                      return i && i.length > 0
                  }
                  return this.checkable(e) ? this.getLength(n, e) > 0 : null != n && n.length > 0
              },
              email: function(t, n) {
                  return this.optional(n) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(t)
              },
              url: function(t, n) {
                  return this.optional(n) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(t)
              },
              date: (n = !1, function(t, e) {
                  return n || (n = !0, this.settings.debug && window.console && console.warn("The `date` method is deprecated and will be removed in version '2.0.0'.\nPlease don't use it, since it relies on the Date constructor, which\nbehaves very differently across browsers and locales. Use `dateISO`\ninstead or one of the locale specific methods in `localizations/`\nand `additional-methods.js`.")), this.optional(e) || !/Invalid|NaN/.test(new Date(t).toString())
              }),
              dateISO: function(t, n) {
                  return this.optional(n) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(t)
              },
              number: function(t, n) {
                  return this.optional(n) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)
              },
              digits: function(t, n) {
                  return this.optional(n) || /^\d+$/.test(t)
              },
              minlength: function(n, e, r) {
                  var i = t.isArray(n) ? n.length : this.getLength(n, e);
                  return this.optional(e) || i >= r
              },
              maxlength: function(n, e, r) {
                  var i = t.isArray(n) ? n.length : this.getLength(n, e);
                  return this.optional(e) || i <= r
              },
              rangelength: function(n, e, r) {
                  var i = t.isArray(n) ? n.length : this.getLength(n, e);
                  return this.optional(e) || i >= r[0] && i <= r[1]
              },
              min: function(t, n, e) {
                  return this.optional(n) || t >= e
              },
              max: function(t, n, e) {
                  return this.optional(n) || t <= e
              },
              range: function(t, n, e) {
                  return this.optional(n) || t >= e[0] && t <= e[1]
              },
              step: function(n, e, r) {
                  var i, a = t(e).attr("type"),
                      o = "Step attribute on input type " + a + " is not supported.",
                      d = new RegExp("\\b" + a + "\\b"),
                      s = function(t) {
                          var n = ("" + t).match(/(?:\.(\d+))?$/);
                          return n && n[1] ? n[1].length : 0
                      },
                      p = function(t) {
                          return Math.round(t * Math.pow(10, i))
                      },
                      A = !0;
                  if (a && !d.test(["text", "number", "range"].join())) throw new Error(o);
                  return i = s(r), (s(n) > i || p(n) % p(r) != 0) && (A = !1), this.optional(e) || A
              },
              equalTo: function(n, e, r) {
                  var i = t(r);
                  return this.settings.onfocusout && i.not(".validate-equalTo-blur").length && i.addClass("validate-equalTo-blur").on("blur.validate-equalTo", (function() {
                      t(e).valid()
                  })), n === i.val()
              },
              remote: function(n, e, r, i) {
                  if (this.optional(e)) return "dependency-mismatch";
                  i = "string" == typeof i && i || "remote";
                  var a, o, d, s = this.previousValue(e, i);
                  return this.settings.messages[e.name] || (this.settings.messages[e.name] = {}), s.originalMessage = s.originalMessage || this.settings.messages[e.name][i], this.settings.messages[e.name][i] = s.message, r = "string" == typeof r && {
                      url: r
                  } || r, d = t.param(t.extend({
                      data: n
                  }, r.data)), s.old === d ? s.valid : (s.old = d, a = this, this.startRequest(e), (o = {})[e.name] = n, t.ajax(t.extend(!0, {
                      mode: "abort",
                      port: "validate" + e.name,
                      dataType: "json",
                      data: o,
                      context: a.currentForm,
                      success: function(t) {
                          var r, o, d, p = !0 === t || "true" === t;
                          a.settings.messages[e.name][i] = s.originalMessage, p ? (d = a.formSubmitted, a.resetInternals(), a.toHide = a.errorsFor(e), a.formSubmitted = d, a.successList.push(e), a.invalid[e.name] = !1, a.showErrors()) : (r = {}, o = t || a.defaultMessage(e, {
                              method: i,
                              parameters: n
                          }), r[e.name] = s.message = o, a.invalid[e.name] = !0, a.showErrors(r)), s.valid = p, a.stopRequest(e, p)
                      }
                  }, r)), "pending")
              }
          }
      });
      var e, r = {};
      return t.ajaxPrefilter ? t.ajaxPrefilter((function(t, n, e) {
          var i = t.port;
          "abort" === t.mode && (r[i] && r[i].abort(), r[i] = e)
      })) : (e = t.ajax, t.ajax = function(n) {
          var i = ("mode" in n ? n : t.ajaxSettings).mode,
              a = ("port" in n ? n : t.ajaxSettings).port;
          return "abort" === i ? (r[a] && r[a].abort(), r[a] = e.apply(this, arguments), r[a]) : e.apply(this, arguments)
      }), t
  }) ? r.apply(n, i) : r) || (t.exports = a)
}, function(t, n) {
  t.exports = function(t, n) {
      (null == n || n > t.length) && (n = t.length);
      for (var e = 0, r = new Array(n); e < n; e++) r[e] = t[e];
      return r
  }
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0, n.registerDefaultHelpers = function(t) {
      i.default(t), a.default(t), o.default(t), d.default(t), s.default(t), p.default(t), A.default(t)
  }, n.moveHelperToHooks = function(t, n, e) {
      t.helpers[n] && (t.hooks[n] = t.helpers[n], e || delete t.helpers[n])
  };
  var i = r(e(41)),
      a = r(e(42)),
      o = r(e(43)),
      d = r(e(44)),
      s = r(e(45)),
      p = r(e(46)),
      A = r(e(47))
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = e(2),
      i = {
          methodMap: ["debug", "info", "warn", "error"],
          level: "info",
          lookupLevel: function(t) {
              if ("string" == typeof t) {
                  var n = r.indexOf(i.methodMap, t.toLowerCase());
                  t = n >= 0 ? n : parseInt(t, 10)
              }
              return t
          },
          log: function(t) {
              if (t = i.lookupLevel(t), "undefined" != typeof console && i.lookupLevel(i.level) <= t) {
                  var n = i.methodMap[t];
                  console[n] || (n = "log");
                  for (var e = arguments.length, r = Array(e > 1 ? e - 1 : 0), a = 1; a < e; a++) r[a - 1] = arguments[a];
                  console[n].apply(console, r)
              }
          }
      };
  n.default = i, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.createProtoAccessControl = function(t) {
      var n = Object.create(null);
      n.constructor = !1, n.__defineGetter__ = !1, n.__defineSetter__ = !1, n.__lookupGetter__ = !1;
      var e = Object.create(null);
      return e.__proto__ = !1, {
          properties: {
              whitelist: r.createNewLookupObject(e, t.allowedProtoProperties),
              defaultValue: t.allowProtoPropertiesByDefault
          },
          methods: {
              whitelist: r.createNewLookupObject(n, t.allowedProtoMethods),
              defaultValue: t.allowProtoMethodsByDefault
          }
      }
  }, n.resultIsAllowed = function(t, n, e) {
      return o("function" == typeof t ? n.methods : n.properties, e)
  }, n.resetLoggedProperties = function() {
      Object.keys(a).forEach((function(t) {
          delete a[t]
      }))
  };
  var r = e(50),
      i = function(t) {
          if (t && t.__esModule) return t;
          var n = {};
          if (null != t)
              for (var e in t) Object.prototype.hasOwnProperty.call(t, e) && (n[e] = t[e]);
          return n.default = t, n
      }(e(17)),
      a = Object.create(null);

  function o(t, n) {
      return void 0 !== t.whitelist[n] ? !0 === t.whitelist[n] : void 0 !== t.defaultValue ? t.defaultValue : (function(t) {
          !0 !== a[t] && (a[t] = !0, i.log("error", 'Handlebars: Access has been denied to resolve the property "' + t + '" because it is not an "own property" of its parent.\nYou can add a runtime option to disable the check or this warning:\nSee https://handlebarsjs.com/api-reference/runtime-options.html#options-to-control-prototype-access for details'))
      }(n), !1)
  }
}, function(t, n, e) {
  "use strict";
  (function(e) {
      n.__esModule = !0, n.default = function(t) {
          var n = void 0 !== e ? e : window,
              r = n.Handlebars;
          t.noConflict = function() {
              return n.Handlebars === t && (n.Handlebars = r), t
          }
      }, t.exports = n.default
  }).call(this, e(9))
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = {
      helpers: {
          helperExpression: function(t) {
              return "SubExpression" === t.type || ("MustacheStatement" === t.type || "BlockStatement" === t.type) && !!(t.params && t.params.length || t.hash)
          },
          scopedId: function(t) {
              return /^\.|this\b/.test(t.original)
          },
          simpleId: function(t) {
              return 1 === t.parts.length && !r.helpers.scopedId(t) && !t.depth
          }
      }
  };
  n.default = r, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r, i = e(3),
      a = (r = i) && r.__esModule ? r : {
          default: r
      };

  function o() {
      this.parents = []
  }

  function d(t) {
      this.acceptRequired(t, "path"), this.acceptArray(t.params), this.acceptKey(t, "hash")
  }

  function s(t) {
      d.call(this, t), this.acceptKey(t, "program"), this.acceptKey(t, "inverse")
  }

  function p(t) {
      this.acceptRequired(t, "name"), this.acceptArray(t.params), this.acceptKey(t, "hash")
  }
  o.prototype = {
      constructor: o,
      mutating: !1,
      acceptKey: function(t, n) {
          var e = this.accept(t[n]);
          if (this.mutating) {
              if (e && !o.prototype[e.type]) throw new a.default('Unexpected node type "' + e.type + '" found when accepting ' + n + " on " + t.type);
              t[n] = e
          }
      },
      acceptRequired: function(t, n) {
          if (this.acceptKey(t, n), !t[n]) throw new a.default(t.type + " requires " + n)
      },
      acceptArray: function(t) {
          for (var n = 0, e = t.length; n < e; n++) this.acceptKey(t, n), t[n] || (t.splice(n, 1), n--, e--)
      },
      accept: function(t) {
          if (t) {
              if (!this[t.type]) throw new a.default("Unknown type: " + t.type, t);
              this.current && this.parents.unshift(this.current), this.current = t;
              var n = this[t.type](t);
              return this.current = this.parents.shift(), !this.mutating || n ? n : !1 !== n ? t : void 0
          }
      },
      Program: function(t) {
          this.acceptArray(t.body)
      },
      MustacheStatement: d,
      Decorator: d,
      BlockStatement: s,
      DecoratorBlock: s,
      PartialStatement: p,
      PartialBlockStatement: function(t) {
          p.call(this, t), this.acceptKey(t, "program")
      },
      ContentStatement: function() {},
      CommentStatement: function() {},
      SubExpression: d,
      PathExpression: function() {},
      StringLiteral: function() {},
      NumberLiteral: function() {},
      BooleanLiteral: function() {},
      UndefinedLiteral: function() {},
      NullLiteral: function() {},
      Hash: function(t) {
          this.acceptArray(t.pairs)
      },
      HashPair: function(t) {
          this.acceptRequired(t, "value")
      }
  }, n.default = o, t.exports = n.default
}, function(t, n, e) {
  e(23), t.exports = e(63)
}, function(t, n, e) {
  "use strict";
  e.r(n);
  e(14), e(24), e(25), e(26), e(6), e(28), e(29), e(30), e(31), e(32), e(33), e(61), e(62);
  var r = e(1),
      i = e.n(r);
  window.$ = i.a, window.jQuery = i.a
}, function(t, n, e) {
  var r, i, a;
  i = [e(14)], void 0 === (a = "function" == typeof(r = function(t) {
      var n, e = t.validator;

      function r(t, n, e) {
          t.rules[n] = e, t.message && (t.messages[n] = t.message)
      }

      function i(t) {
          return t.replace(/([!"#$%&'()*+,./:;<=>?@\[\\\]^`{|}~])/g, "\\$1")
      }

      function a(t) {
          return t.substr(0, t.lastIndexOf(".") + 1)
      }

      function o(t, n) {
          return 0 === t.indexOf("*.") && (t = t.replace("*.", n)), t
      }

      function d(n, e) {
          var r = t(this).find("[data-valmsg-for='" + i(e[0].name) + "']"),
              a = r.attr("data-valmsg-replace"),
              o = a ? !1 !== t.parseJSON(a) : null;
          r.removeClass("field-validation-valid").addClass("field-validation-error"), n.data("unobtrusiveContainer", r), o ? (r.empty(), n.removeClass("input-validation-error").appendTo(r)) : n.hide()
      }

      function s(n, e) {
          var r = t(this).find("[data-valmsg-summary=true]"),
              i = r.find("ul");
          i && i.length && e.errorList.length && (i.empty(), r.addClass("validation-summary-errors").removeClass("validation-summary-valid"), t.each(e.errorList, (function() {
              t("<li />").html(this.message).appendTo(i)
          })))
      }

      function p(n) {
          var e = n.data("unobtrusiveContainer");
          if (e) {
              var r = e.attr("data-valmsg-replace"),
                  i = r ? t.parseJSON(r) : null;
              e.addClass("field-validation-valid").removeClass("field-validation-error"), n.removeData("unobtrusiveContainer"), i && e.empty()
          }
      }

      function A(n) {
          var e = t(this),
              r = "__jquery_unobtrusive_validation_form_reset";
          if (!e.data(r)) {
              e.data(r, !0);
              try {
                  e.data("validator").resetForm()
              } finally {
                  e.removeData(r)
              }
              e.find(".validation-summary-errors").addClass("validation-summary-valid").removeClass("validation-summary-errors"), e.find(".field-validation-error").addClass("field-validation-valid").removeClass("field-validation-error").removeData("unobtrusiveContainer").find(">*").removeData("unobtrusiveContainer")
          }
      }

      function c(n) {
          var r = t(n),
              i = r.data("unobtrusiveValidation"),
              a = t.proxy(A, n),
              o = e.unobtrusive.options || {},
              c = function(e, r) {
                  var i = o[e];
                  i && t.isFunction(i) && i.apply(n, r)
              };
          return i || (i = {
              options: {
                  errorClass: o.errorClass || "input-validation-error",
                  errorElement: o.errorElement || "span",
                  errorPlacement: function() {
                      d.apply(n, arguments), c("errorPlacement", arguments)
                  },
                  invalidHandler: function() {
                      s.apply(n, arguments), c("invalidHandler", arguments)
                  },
                  messages: {},
                  rules: {},
                  success: function() {
                      p.apply(n, arguments), c("success", arguments)
                  }
              },
              attachValidation: function() {
                  r.off("reset.unobtrusiveValidation", a).on("reset.unobtrusiveValidation", a).validate(this.options)
              },
              validate: function() {
                  return r.validate(), r.valid()
              }
          }, r.data("unobtrusiveValidation", i)), i
      }
      return e.unobtrusive = {
          adapters: [],
          parseElement: function(n, e) {
              var r, i, a, o = t(n),
                  d = o.parents("form")[0];
              d && ((r = c(d)).options.rules[n.name] = i = {}, r.options.messages[n.name] = a = {}, t.each(this.adapters, (function() {
                  var e = "data-val-" + this.name,
                      r = o.attr(e),
                      s = {};
                  void 0 !== r && (e += "-", t.each(this.params, (function() {
                      s[this] = o.attr(e + this)
                  })), this.adapt({
                      element: n,
                      form: d,
                      message: r,
                      params: s,
                      rules: i,
                      messages: a
                  }))
              })), t.extend(i, {
                  __dummy__: !0
              }), e || r.attachValidation())
          },
          parse: function(n) {
              var r = t(n),
                  i = r.parents().addBack().filter("form").add(r.find("form")).has("[data-val=true]");
              r.find("[data-val=true]").each((function() {
                  e.unobtrusive.parseElement(this, !0)
              })), i.each((function() {
                  var t = c(this);
                  t && t.attachValidation()
              }))
          }
      }, (n = e.unobtrusive.adapters).add = function(t, n, e) {
          return e || (e = n, n = []), this.push({
              name: t,
              params: n,
              adapt: e
          }), this
      }, n.addBool = function(t, n) {
          return this.add(t, (function(e) {
              r(e, n || t, !0)
          }))
      }, n.addMinMax = function(t, n, e, i, a, o) {
          return this.add(t, [a || "min", o || "max"], (function(t) {
              var a = t.params.min,
                  o = t.params.max;
              a && o ? r(t, i, [a, o]) : a ? r(t, n, a) : o && r(t, e, o)
          }))
      }, n.addSingleVal = function(t, n, e) {
          return this.add(t, [n || "val"], (function(i) {
              r(i, e || t, i.params[n])
          }))
      }, e.addMethod("__dummy__", (function(t, n, e) {
          return !0
      })), e.addMethod("regex", (function(t, n, e) {
          var r;
          return !!this.optional(n) || (r = new RegExp(e).exec(t)) && 0 === r.index && r[0].length === t.length
      })), e.addMethod("nonalphamin", (function(t, n, e) {
          var r;
          return e && (r = (r = t.match(/\W/g)) && r.length >= e), r
      })), e.methods.extension ? (n.addSingleVal("accept", "mimtype"), n.addSingleVal("extension", "extension")) : n.addSingleVal("extension", "extension", "accept"), n.addSingleVal("regex", "pattern"), n.addBool("creditcard").addBool("date").addBool("digits").addBool("email").addBool("number").addBool("url"), n.addMinMax("length", "minlength", "maxlength", "rangelength").addMinMax("range", "min", "max", "range"), n.addMinMax("minlength", "minlength").addMinMax("maxlength", "minlength", "maxlength"), n.add("equalto", ["other"], (function(n) {
          var e = a(n.element.name),
              d = o(n.params.other, e);
          r(n, "equalTo", t(n.form).find(":input").filter("[name='" + i(d) + "']")[0])
      })), n.add("required", (function(t) {
          "INPUT" === t.element.tagName.toUpperCase() && "CHECKBOX" === t.element.type.toUpperCase() || r(t, "required", !0)
      })), n.add("remote", ["url", "type", "additionalfields"], (function(n) {
          var e = {
                  url: n.params.url,
                  type: n.params.type || "GET",
                  data: {}
              },
              d = a(n.element.name);
          t.each(function(t) {
              return t.replace(/^\s+|\s+$/g, "").split(/\s*,\s*/g)
          }(n.params.additionalfields || n.element.name), (function(r, a) {
              var s = o(a, d);
              e.data[s] = function() {
                  var e = t(n.form).find(":input").filter("[name='" + i(s) + "']");
                  return e.is(":checkbox") ? e.filter(":checked").val() || e.filter(":hidden").val() || "" : e.is(":radio") ? e.filter(":checked").val() || "" : e.val()
              }
          })), r(n, "remote", e)
      })), n.add("password", ["min", "nonalphamin", "regex"], (function(t) {
          t.params.min && r(t, "minlength", t.params.min), t.params.nonalphamin && r(t, "nonalphamin", t.params.nonalphamin), t.params.regex && r(t, "regex", t.params.regex)
      })), n.add("fileextensions", ["extensions"], (function(t) {
          r(t, "extension", t.params.extensions)
      })), t((function() {
          e.unobtrusive.parse(document)
      })), e.unobtrusive
  }) ? r.apply(n, i) : r) || (t.exports = a)
}, function(t, n, e) {
  (function(t) {
      t.validator.addMethod("mustbetrue", (function(t, n, e) {
          return n.checked
      })), t.validator.unobtrusive.adapters.addBool("mustbetrue"), t.validator.addMethod("mustbetrueif", (function(n, e, r) {
          for (var i = (r.targetvalue || "").split("|"), a = 0; a < i.length; a++) {
              var o = t("#" + r.dependentproperty),
                  d = "checkbox" === o.attr("type") ? o.attr("checked") ? "true" : "false" : o.val().toLowerCase();
              if (i[a] === d) return t.validator.methods.mustbetrue.call(this, n, e, r)
          }
          return !0
      })), t.validator.unobtrusive.adapters.add("mustbetrueif", ["dependentproperty", "targetvalue"], (function(t) {
          t.rules.mustbetrueif = {
              dependentproperty: t.params.dependentproperty,
              targetvalue: t.params.targetvalue
          }, t.messages.mustbetrueif = t.message
      })), t.validator.addMethod("validateatleastoneselected", (function(n, e, r) {
          for (var i = t(e.form).find("input[type=checkbox][name=" + e.name + "]:checked").length, a = t(e.form).find("input[name=" + e.name + "]"), o = 0; o < a.length; o++) i ? (t(a[o]).removeClass("input-validation-error"), t(a[o]).addClass("input-validation-valid")) : (t(a[o]).removeClass("input-validation-valid"), t(a[o]).addClass("input-validation-error"));
          return i
      }), "Choose an option above."), t.validator.addClassRules("required-checkbox", {
          validateatleastoneselected: !0
      }), t.validator.addMethod("validateatleastoneselected", (function(n, e, r) {
          for (var i = t(e.form).find("input[type=checkbox][name=" + e.name + "]:checked").length, a = t(e.form).find("input[name=" + e.name + "]"), o = 0; o < a.length; o++) i ? (t(a[o]).removeClass("input-validation-error"), t(a[o]).addClass("input-validation-valid")) : (t(a[o]).removeClass("input-validation-valid"), t(a[o]).addClass("input-validation-error"));
          return i
      }), "Choose an option above."), t.validator.addClassRules("required-checkbox", {
          validateatleastoneselected: !0
      }), t.validator.unobtrusive.adapters.addSingleVal("atleastonerequired", "otherpropertynames"), t.validator.addMethod("atleastonerequired", (function(n, e, r) {
          for (var i = r.toString().split(","), a = 0; a < i.length; a++) i[a] = "input:checkbox[name='" + i[a] + "']";
          var o = !0;
          return t.each(i, (function(n, e) {
              t(e).is(":checked") && (o = !1)
          })), !o
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  "use strict";
  (function(t) {
      var n = e(0),
          r = e(11);
      t(document).ready((function() {
          t('a[href^="#"]').on("click", (function(e) {
              var r = t(this).attr("href");
              if (e.preventDefault(), null !== r) {
                  var i = window.pageYOffset || document.documentElement.scrollTop,
                      a = n.a.matches ? t(".move-ahead").length ? t(".move-ahead a").height() : -40 : 0;
                  t(r).offset().top < i && (a += t('header[data-device="' + (n.a.matches ? "desktop" : "mobile") + '"]').height()), Object(n.b)(document.querySelector(r), a + (r.includes("virtual_") && n.a.matches ? 100 : 0)), window.location.hash = r
              }
          }))
      }));
      t(document).ready((function() {
          var e;
          (e = {
              submenu: t(".has-submenu"),
              button: t(".has-submenu button"),
              anchor: t("a, button, input, select, textarea, svg, area, details, summary, iframe, object, embed, [tabindex], [contenteditable]")
          }).button.on("click", (function() {
              t(this).parent(".has-submenu").hasClass("open") ? (e.submenu.removeClass("open"), t(".has-submenu > a, .has-submenu > button").attr("aria-expanded", !1)) : (e.submenu.removeClass("open"), t(this).parent(".has-submenu").addClass("open"), t(".has-submenu.open > a, .has-submenu.open > button").attr("aria-expanded", !0))
          })), e.submenu.on("mouseover", (function() {
              n.a.matches && (t(this).addClass("open"), t(".has-submenu.open > a, .has-submenu.open > button").attr("aria-expanded", !0))
          })), e.submenu.on("mouseout", (function() {
              n.a.matches && setTimeout((function() {
                  e.submenu.removeClass("open"), t(".has-submenu > a, .has-submenu > button").attr("aria-expanded", !1)
              }), 1300)
          })), e.anchor.on("focus", (function() {
              t(this).parents(".has-submenu").hasClass("has-submenu") || (e.submenu.removeClass("open"), t(".has-submenu > a, .has-submenu > button").attr("aria-expanded", !1))
          }))
      }));
      var i = 0;
      window.addEventListener("scroll", (function(e) {
          var r = window.pageYOffset || document.documentElement.scrollTop,
              a = document.querySelector("html");
          if (r > t('[data-device="' + (n.a.matches ? "desktop" : "mobile") + '"]').innerHeight() && (a.classList.remove("scroll-state-up", "scroll-state-down"), r > i ? (a.classList.remove("scroll-state-up"), a.classList.add("scroll-state-down")) : (a.classList.add("scroll-state-up"), a.classList.remove("scroll-state-down")), i = r <= 0 ? 0 : r), t(".move-ahead").length && n.a.matches) {
              var o = document.querySelector(".move-ahead-header"),
                  d = (document.querySelector(".move-ahead-header > div"), o.getBoundingClientRect().top),
                  s = o.offsetHeight;
              d + t(".move-ahead .border-center").height() < 0 ? (a.classList.add("move-ahead-sticky"), o.style.height = "".concat(s, "px")) : (a.classList.remove("move-ahead-sticky"), o.removeAttribute("style"))
          }
      }), !1), t(window).resize((function() {
          window.matchMedia("screen and (max-width : 959px)").matches && t(".move-ahead-header").length && document.querySelector(".move-ahead-header").removeAttribute("style")
      }));
      t(document).ready((function() {
          var n;
          (n = {
              label: "mobile-menu-active",
              nav: t('[data-device="desktop"]'),
              trigger: t("button[data-mobile-menu]"),
              html: t("html"),
              focus: t('[data-device="desktop"] .logo')
          }).trigger.on("click", (function() {
              var e = t("html").hasClass(n.label);
              n.html[e ? "removeClass" : "addClass"](n.label), n.trigger.attr("aria-expanded", !e), e || n.focus.focus(), document.onkeydown = function(t) {
                  27 != (t = t || window.event).keyCode || e || (n.html.removeClass(n.label), n.trigger.attr("aria-expanded", !1))
              }
          }))
      }));
      t(document).ready((function() {
          t("button.fixed_isi_trigger").on("click", (function() {
              var n = t("#fixed_isi"),
                  e = n.hasClass("expanded");
              n[e ? "removeClass" : "addClass"]("expanded"), t("html")[e ? "removeClass" : "addClass"]("fixed-isi-active")
          }))
      }));
      t(document).ready((function() {
          var n;
          n = t("#fixed_isi"), new IntersectionObserver((function(t) {
              t.forEach((function(t) {
                  n[t.isIntersecting || t.boundingClientRect.top < 0 ? "removeClass" : "addClass"]("active")
              }))
          }), {
              rootMargin: "-150px"
          }).observe(document.querySelector("#isi"))
      }));
      t(document).ready((function() {
          location.hash && setTimeout((function() {
              window.scrollTo(0, 0), setTimeout((function() {
                  var e;
                  "" !== (e = window.location.hash) && n.a.matches ? e.includes("virtual_ccc") || e.includes("virtual_ddw") ? setTimeout((function() {
                      Object(n.b)(document.querySelector(e), 0)
                  }), 300) : Object(n.b)(document.querySelector(e), "#isi" === e ? t(".move-ahead-header").length ? 20 : -40 : e.includes("virtual_") && n.a.matches ? 60 : t("#entyvioconnect_nav").length && n.a.matches ? 15 : -20) : "" !== e && setTimeout((function() {
                      Object(n.b)(document.querySelector(e), 0)
                  }), 300)
              }), 500)
          }), 1)
      })), t((function() {
          (t("[data-page-id='DosingAdministration']").length || t("[data-page-id='MechanismOfAction']").length || t("[data-page-id='PatientResources']").length) && t("[data-bc-player]").each((function(t, n) {
              r.a.loadPlayer(n)
          }))
      })), t((function() {
          if (t("[data-page-id='Home']").length) {
              var n, e = document.querySelector("#video_homepage"),
                  i = t("[data-bc-player]")[0];
              r.a.loadPlayer(i, (function(t) {
                  n = t;
                  var r = i.getAttribute("data-bc-video");
                  n.catalog.getVideo(r, (function(t, n) {
                      var r = n.sources.filter(a)[0];
                      e.src = r.src
                  })), e.addEventListener("timeupdate", (function(t) {
                      e.currentTime >= 4.5 && document.querySelector(".ani-fadein").classList.add("show")
                  }))
              }))
          }

          function a(t) {
              return "video/mp4" == t.type && t.src.startsWith("https")
          }
      }))
  }).call(this, e(1))
}, function(t, n) {}, function(t, n, e) {
  "use strict";
  (function(t) {
      var n = e(0);
      t(document).ready((function() {
          t(".accordion button[aria-expanded]").on("click", (function(e) {
              var r = t(this).parent().hasClass("active"),
                  i = t(this).parents(".accordion");
              if (r);
              else {
                  i.find("button[aria-expanded]").attr("aria-expanded", !1), i.find("[aria-hidden]").attr("aria-hidden", !0), i.find("ul li").removeClass("active"), t(this).attr("aria-expanded", !0).parent().addClass("active"), t(this).parent().find("[aria-hidden]").attr("aria-hidden", !1);
                  var a = window.pageYOffset || document.documentElement.scrollTop,
                      o = n.a.matches && void 0 !== t(".move-ahead-sticky .move-ahead").innerHeight() ? t(".move-ahead-sticky .move-ahead").innerHeight() : 0,
                      d = a - (n.a.matches ? i.position().top : t(this).position().top) > 0 ? t('[data-device="' + (n.a.matches ? "desktop" : "mobile") + '"]').innerHeight() : 0;
                  Object(n.b)(n.a.matches ? i : t(this), d + o + 20)
              }
              if (n.a.matches) {
                  var s = t(this).parent().find("[aria-hidden]").children(".figure-content").html(),
                      p = t(this).parent().find("[aria-hidden]").children(".to_footnote").html();
                  i.find(".desktop-image").html(s), i.find(".footnote").html(p)
              }
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  "use strict";
  (function(t) {
      e(0);
      t(document).ready((function() {
          t(".expand button[aria-expanded]").on("click", (function() {
              var n = t(this).attr("aria-controls"),
                  e = t(this).attr("aria-expanded");
              t(this).attr("aria-expanded", "true" !== e), t("#" + n).attr("aria-hidden", "true" === e)
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  "use strict";
  (function(t) {
      var n = e(0);
      t((function() {
          var e = t(".back-to-top");
          e.click((function() {
              return Object(n.b)(document.body)
          })), window.addEventListener("scroll", (function() {
              return e[window.scrollY > 200 && document.documentElement.classList.contains("scroll-state-up") ? "addClass" : "removeClass"]("show")
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  (function(t) {
      t((function() {
          t(".tabs").each((function(n, e) {
              var r = t(e).find('button[role="tab"]'),
                  i = r.length - 1;

              function a(t) {
                  r.attr("tabindex", "-1"), r.eq(t).attr("tabindex", "0"), r.eq(t).focus(), r.eq(t).click()
              }
              r.on("click", (function() {
                  t(this).attr("aria-selected");
                  var n = t(this).attr("aria-controls"),
                      e = t(this).parents(".tabs");
                  e.children('[role="tabpanel"]').attr("aria-hidden", !0), e.find('[role="tab"]').attr("aria-selected", !1), t("#" + n).attr("aria-hidden", !1), t(this).attr("aria-selected", !0)
              })), r.keydown((function(n) {
                  var e = t(n.target),
                      o = r.index(e);
                  switch (n.which) {
                      case 37:
                          a(0 === o ? i : o - 1);
                          break;
                      case 39:
                          a(o === i ? 0 : o + 1)
                  }
              }))
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  (function(t) {
      window.matchMedia("screen and (min-width: 960px) and (max-width: 9999px)");
      var n = window.matchMedia("screen and (max-width : 959px)"),
          e = function() {
              t(".gallery-item").each((function(n) {
                  t(this).find(".toggle-synopsis").on("click", (function(n) {
                      t(this).parent().toggleClass("active-synopsis")
                  })), t(this).find(".toggle-transcript").on("click", (function(n) {
                      t(this).parent().toggleClass("active-transcript")
                  })), t(this).find(".poster-image").on("click", (function(n) {
                      t(this).hide(), t(this).parent().find(".video-js").show().get(0).player.play()
                  }))
              })), t(".video-selector").each((function(n) {
                  var e = t(this).attr("data-video-id");
                  t(this).on("click", (function(n) {
                      t(this).addClass("active"), t(".video-selector").not(t(this)).removeClass("active"), t(".feature-video").each((function(n) {
                              t(this).attr("data-video-id") == e ? (t(this).addClass("active"), t(".video-js").hide(), t(".poster-image-desktop").show()) : t(this).removeClass("active")
                          })),
                          function(n) {
                              t(".gallery-item").each((function(e) {
                                  t(this).attr("data-video-id") == n ? t(this).addClass("active") : t(this).removeClass("active")
                              }))
                          }(e), t("video").each((function(n) {
                              t(this).get(0).pause()
                          }))
                  }))
              })), t(".poster-image-desktop").on("click", (function(n) {
                  t(this).hide(), t(this).parent().find(".video-js").show().get(0).player.play()
              }));
              t('[data-page-id="PeerPerspective"]') && n.matches && t("video").on("play", (function() {
                  var e;
                  e = t(this).attr("id"), n.matches && t("video").each((function(n) {
                      var r = t(this).attr("id");
                      r != e && t("#" + r).get(0).pause()
                  }))
              }))
          };
      t(document).ready((function() {
          e()
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  "use strict";
  (function(t) {
      var n = e(7),
          r = e.n(n),
          i = e(8),
          a = e.n(i),
          o = e(13),
          d = e.n(o),
          s = e(6),
          p = e(39);
      t("input:not([type=radio]):not([type=checkbox])").on("focus blur", (function(t) {
          document.body.classList.toggle("noFixed", "focus" === t.type)
      }));
      var A = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          c = {
              AK: -9,
              AL: -6,
              AR: -6,
              AZ: -7,
              CA: -8,
              CO: -7,
              CT: -5,
              DC: -5,
              DE: -5,
              FL: -5,
              GA: -5,
              GU: -10,
              HI: -10,
              IA: -6,
              ID: -7,
              IL: -6,
              IN: -5,
              KS: -6,
              KY: -6,
              LA: -6,
              MA: -5,
              MD: -5,
              ME: -5,
              MI: -5,
              MN: -6,
              MO: -6,
              MS: -6,
              MT: -7,
              NC: -5,
              ND: -7,
              NE: -6,
              NH: -5,
              NJ: -5,
              NM: -7,
              NV: -8,
              NY: -5,
              OH: -5,
              OK: -6,
              OR: -8,
              PA: -5,
              PR: -4,
              RI: -5,
              SC: -5,
              SD: -6,
              TN: -5,
              TX: -6,
              UT: -7,
              VA: -5,
              VI: -4,
              VT: -5,
              WA: -8,
              WI: -6,
              WV: -5,
              WY: -7
          };

      function l(n) {
          var e = {
                  name: n.name,
                  address1: n.address1,
                  address2: n.address2 && "N/A" != n.address2 ? n.address2 : null,
                  website: n.website,
                  distance: Math.round(10 * n.distance, 1) / 10,
                  phone: n.phone && "N/A" != n.phone ? n.phone : null,
                  weekday_text: n.opening_hours && n.opening_hours.weekday_text,
                  openingClosing: null,
                  openingClosingSpecial: !1
              },
              r = t("input[name=Zip]").val();
          e.directions = "https://www.google.com/maps?saddr=".concat(r, "&daddr=").concat([C(n.name), C(n.address1, n.address2), C(n.city, n.state, n.zip)].join(",")), e.weekday_text && (e.weekday_text_separated = n.opening_hours.weekday_text.map((function(t) {
              var n = t.indexOf(":");
              return {
                  day: t.substring(0, n),
                  time: t.substring(n + 1)
              }
          })));
          var i = new Date,
              a = l(i, n.utc_offset || parseInt(function(t) {
                  if (t && c[t.toUpperCase()]) return c[t];
                  return 0
              }(n.state)));
          if (n.hours_of_operation) {
              var o = n.hours_of_operation.weekday_text[(a.getDay() + 6) % 7];
              o && (o.includes("24 hours") ? (e.openingClosingSpecial = !0, e.openingClosing = "Open 24 hours") : o.includes("appointment") && (e.openingClosingSpecial = !0, e.openingClosing = "By appointment only"))
          }
          if (!e.openingClosing && n.opening_hours)
              if (e.open = function(t, n) {
                      if (m(n)) return !0;
                      var e = l(t, n.utc_offset),
                          r = g(n.opening_hours.periods, e);
                      if (r) {
                          if (r.close) {
                              var i = e.getHours(),
                                  a = e.getMinutes();
                              return !(i < r.open.hours) && (!(i == r.open.hours && a < r.open.minutes) && (i < r.close.hours || i == r.close.hours && a < r.close.minutes))
                          }
                          return !0
                      }
                      return !1
                  }(i, n), m(n)) e.openingClosingSpecial = !0, e.openingClosing = "Open 24 hours";
              else {
                  e.hoursAvailable = !0;
                  var d = g(n.opening_hours.periods, a);
                  if (d)
                      if (e.open) e.openingClosing = A(d.close.hours, d.close.minutes);
                      else {
                          var s = h(n.opening_hours.periods, a);
                          e.openingClosing = A(s.open.hours, s.open.minutes)
                      }
                  else {
                      var p = h(n.opening_hours.periods, a);
                      e.openingClosing = A(p.open.hours, p.open.minutes)
                  }
              }
          function A(t, n) {
              return t > 12 ? "".concat((t - 12).toString().padStart(2, "0"), ":").concat(n.toString().padStart(2, "0"), " PM") : "".concat(t.toString().padStart(2, "0"), ":").concat(n.toString().padStart(2, "0"), " AM")
          }

          function l(t, n) {
              var e = parseInt(n) - -1 * t.getTimezoneOffset(),
                  r = new Date(t);
              return r.setHours(r.getHours() + e / 60), r
          }

          function g(t, n) {
              var e = n.getDay();
              return t.find((function(t) {
                  return t.open.day === e
              }))
          }

          function h(t, n) {
              var e = n.getDay();
              return t.find((function(t) {
                  return t.open.day > e
              })) || t.find((function(t) {
                  return t.open.day < e
              }))
          }

          function m(t) {
              return 1 == t.opening_hours.periods.length && "0000" == t.opening_hours.periods[0].open.time && !t.opening_hours.periods[0].close
          }
          return e
      }

      function C() {
          var t = Array.prototype.slice.call(arguments);
          return t.filter((function(t) {
              return "N/A" !== t
          })).join(" ").trim()
      }

      function g(n) {
          t(n).find("[data-modal='external_third_party']").click((function(t) {
              t.preventDefault(), Object(s.c)(s.a.SLIDE, s.b.EXTERNAL, t.target.href)
          }))
      }
      Date.prototype.stdTimezoneOffset = function() {
          var t = new Date(this.getFullYear(), 0, 1),
              n = new Date(this.getFullYear(), 6, 1);
          return Math.max(t.getTimezoneOffset(), n.getTimezoneOffset())
      }, window.initMap = function() {
          var n, e = t(".results"),
              i = t(".no-results"),
              o = t(".error"),
              s = p.compile(t("#locationResultTemplate").html()),
              c = p.compile(t("#infoTemplate").html()),
              C = t(".map-wrapper .poster"),
              h = [],
              m = [],
              f = !0,
              u = !1,
              x = (new google.maps.Geocoder, 42.877742),
              b = -97.380979,
              B = new google.maps.Map(document.getElementById("map"), {
                  center: {
                      lat: x,
                      lng: b
                  },
                  zoom: 4,
                  scrollwheel: !1,
                  streetViewControl: !1,
                  disableDoubleClickZoom: !0,
                  mapTypeControlOptions: {
                      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                      position: google.maps.ControlPosition.TOP_CENTER
                  },
                  styles: [{
                      featureType: "water",
                      elementType: "geometry",
                      stylers: [{
                          color: "#e9e9e9"
                      }, {
                          lightness: 17
                      }]
                  }, {
                      featureType: "landscape",
                      elementType: "geometry",
                      stylers: [{
                          color: "#f5f5f5"
                      }, {
                          lightness: 20
                      }]
                  }, {
                      featureType: "road.highway",
                      elementType: "geometry.fill",
                      stylers: [{
                          color: "#ffffff"
                      }, {
                          lightness: 17
                      }]
                  }, {
                      featureType: "road.highway",
                      elementType: "geometry.stroke",
                      stylers: [{
                          color: "#ffffff"
                      }, {
                          lightness: 29
                      }, {
                          weight: .2
                      }]
                  }, {
                      featureType: "road.arterial",
                      elementType: "geometry",
                      stylers: [{
                          color: "#ffffff"
                      }, {
                          lightness: 18
                      }]
                  }, {
                      featureType: "road.local",
                      elementType: "geometry",
                      stylers: [{
                          color: "#ffffff"
                      }, {
                          lightness: 16
                      }]
                  }, {
                      featureType: "poi",
                      elementType: "geometry",
                      stylers: [{
                          color: "#f5f5f5"
                      }, {
                          lightness: 21
                      }]
                  }, {
                      featureType: "poi.park",
                      elementType: "geometry",
                      stylers: [{
                          color: "#dedede"
                      }, {
                          lightness: 21
                      }]
                  }, {
                      elementType: "labels.text.stroke",
                      stylers: [{
                          visibility: "on"
                      }, {
                          color: "#ffffff"
                      }, {
                          lightness: 16
                      }]
                  }, {
                      elementType: "labels.text.fill",
                      stylers: [{
                          saturation: 36
                      }, {
                          color: "#333333"
                      }, {
                          lightness: 40
                      }]
                  }, {
                      elementType: "labels.icon",
                      stylers: [{
                          visibility: "off"
                      }]
                  }, {
                      featureType: "transit",
                      elementType: "geometry",
                      stylers: [{
                          color: "#f2f2f2"
                      }, {
                          lightness: 19
                      }]
                  }, {
                      featureType: "administrative",
                      elementType: "geometry.fill",
                      stylers: [{
                          color: "#fefefe"
                      }, {
                          lightness: 20
                      }]
                  }, {
                      featureType: "administrative",
                      elementType: "geometry.stroke",
                      stylers: [{
                          color: "#fefefe"
                      }, {
                          lightness: 17
                      }, {
                          weight: 1.2
                      }]
                  }]
              });
          p.registerHelper("ifNullOrEquals", (function(t, n, e) {
              return t && t != n ? e.inverse(this) : e.fn(this)
          })), p.registerHelper("ifNotNullOrEquals", (function(t, n, e) {
              return t && t != n ? e.fn(this) : e.inverse(this)
          })), p.registerHelper("round", (function(t, n) {
              return Math.round(10 * t * n, n) / (10 * n)
          })), e.on("click", "h4", (function(t) {
              var n = parseInt(t.target.getAttribute("data-id")),
                  r = e.find("li");
              r.removeClass("active"), r.eq(n).addClass("active"), new google.maps.event.trigger(h[n], "click")
          }));
          var y = function(t) {
              var n = new google.maps.Marker({
                  icon: "/Content/Images/icons/icon-map-pin-sm.png",
                  position: {
                      lat: +t.lat,
                      lng: +t.lng
                  },
                  map: B
              });
              return n.addListener("click", (function() {
                  var e = c(l(t)),
                      r = new google.maps.InfoWindow({
                          content: e,
                          maxWidth: 230
                      });
                  m.forEach((function(t) {
                      t.close()
                  })), (m = []).push(r), r.open(B, n), B.setCenter(n.getPosition()), document.querySelector('#map [aria-label="Close"]').removeAttribute("style"), google.maps.event.addListener(r, "domready", (function() {
                      g(".info-window ")
                  }))
              })), n
          };
          var v = function(t, n, e) {
                  if (!t) return null;
                  if (!n) return null;
                  if (!e) return null;
                  var r = new Date(t.getTime()),
                      i = n.split(":");
                  return i[0] && ("PM" == e.toUpperCase() ? r.setHours(+i[0] + 12) : r.setHours(+i[0])), i[1] && r.setMinutes(i[1]), i[2] && r.setSeconds(i[2]), r
              },
              w = function(t) {
                  return t ? t.charAt(0).toUpperCase() + t.slice(1) : t
              },
              k = function(n, e, r, i) {
                  var a = new Date,
                      o = 60 * e + a.getTimezoneOffset(),
                      d = new Date(a.getTime() + 60 * o * 1e3),
                      s = new Array;
                  s[0] = "Sunday", s[1] = "Monday", s[2] = "Tuesday", s[3] = "Wednesday", s[4] = "Thursday", s[5] = "Friday", s[6] = "Saturday";
                  var p = s[d.getDay()],
                      c = {
                          weekday_text: []
                      };
                  return n.split("|").forEach((function(n, e) {
                      var r = n.indexOf(":");
                      if (r > -1) {
                          var i = w(n.substring(0, r).trim().toLowerCase()),
                              a = n.substring(r + 1).trim().toLowerCase();
                          if (-1 !== t.inArray(i, A))
                              if ("closed" == a) c.weekday_text.push(i + ": " + w(a)), p == i && (c.open_now = !1);
                              else if ("by appointment only" == a) c.weekday_text.push(i + ": " + w(a));
                          else if ("open 24 hours" == a) c.weekday_text.push(i + ": " + w(a)), p == i && (c.open_now = !0);
                          else {
                              var o = a;
                              o = (o = (o = o.replace(/[\u2013]/g, "-")).replace("a.m.", "am")).replace("p.m.", "pm");
                              var s = /^(([\d: ]*)([ap]m){1})[ ]*[-](([\d: ]*)([ap]m){1})[ ]*(.*)$/gi.exec(o);
                              if (s) {
                                  var l = s[2] ? s[2].trim() : null,
                                      C = s[3] ? s[3].trim().toUpperCase() : null,
                                      g = v(d, l, C),
                                      h = s[5] ? s[5].trim() : null,
                                      m = s[6] ? s[6].trim().toUpperCase() : null,
                                      f = v(d, h, m),
                                      u = s[7] ? s[7].trim() : null;
                                  if (g && C && f && m) {
                                      var x = i + ": " + l + " " + C + " - " + h + " " + m;
                                      u && (x += " " + u), c.weekday_text.push(x), p == i && (d.getTime() >= g.getTime() && d.getTime() <= f.getTime() ? c.open_now = !0 : c.open_now = !1)
                                  }
                              }
                          }
                      }
                  })), !0 !== r && !1 !== r || (c.open_now = r), c
              };
          t("#centerLocator").submit((function(p) {
              if (p.preventDefault(), !u) {
                  var A, c = t(p.target),
                      m = c.find("button");
                  if (c.valid()) f && (f = !1, C.addClass("hidden")),
                      function(t) {
                          h.forEach((function(n) {
                              n.setMap(t)
                          }))
                      }(null), h = [], u = !0, c.addClass("loading"), m.prop("disabled", !0), o.addClass("hidden"), i.addClass("hidden"), t.ajax({
                          url: c[0].action,
                          method: c[0].method,
                          data: c.serialize(),
                          complete: (A = d()(a.a.mark((function t(r) {
                              var d;
                              return a.a.wrap((function(t) {
                                  for (;;) switch (t.prev = t.next) {
                                      case 0:
                                          if (u = !1, c.removeClass("loading"), m.prop("disabled", !1), n = [], r.responseJSON && !r.responseJSON.error) {
                                              t.next = 10;
                                              break
                                          }
                                          return e.addClass("hidden"), i.addClass("hidden"), o.removeClass("hidden"), dataLayer && dataLayer.push({
                                              event: "GAEvent",
                                              eventCategory: "Error - Infusion Center Locator",
                                              eventAction: null === (d = r.responseJSON) || void 0 === d ? void 0 : d.error,
                                              eventLabel: "Submission failed",
                                              eventValue: void 0
                                          }), t.abrupt("return");
                                      case 10:
                                          if (dataLayer && dataLayer.push({
                                                  event: "GAEvent",
                                                  eventCategory: "Infusion Center Locator",
                                                  eventAction: "Successful IC Search",
                                                  eventLabel: void 0,
                                                  eventValue: void 0
                                              }), 0 !== r.responseJSON.data.length) {
                                              t.next = 19;
                                              break
                                          }
                                          return e.addClass("hidden"), i.removeClass("hidden"), o.addClass("hidden"), c.removeClass("loading"), m.prop("disabled", !1), u = !1, t.abrupt("return");
                                      case 19:
                                          return n = r.responseJSON.data, t.next = 22, x(n);
                                      case 22:
                                          e.removeClass("hidden"), i.addClass("hidden"), o.addClass("hidden");
                                      case 25:
                                      case "end":
                                          return t.stop()
                                  }
                              }), t)
                          }))), function(t) {
                              return A.apply(this, arguments)
                          })
                      })
              }

              function x(t) {
                  return b.apply(this, arguments)
              }

              function b() {
                  return (b = d()(a.a.mark((function t(i) {
                      var o, d, p, A, c, C, m;
                      return a.a.wrap((function(t) {
                          for (;;) switch (t.prev = t.next) {
                              case 0:
                                  for (o = 0; o < i.length; o++)(d = i[o]).vitals_hours_of_operation && (d.hours_of_operation = k(d.vitals_hours_of_operation, d.timezone, null));
                                  e.empty(), i.forEach((function(t) {
                                      h.push(y(t))
                                  })), e.html(s({
                                      centers: i.map(l)
                                  })), g(e), p = Math.max.apply(Math, r()(n.map((function(t) {
                                      return parseFloat(t.lat)
                                  })))), A = Math.min.apply(Math, r()(n.map((function(t) {
                                      return parseFloat(t.lat)
                                  })))), c = Math.max.apply(Math, r()(n.map((function(t) {
                                      return parseFloat(t.lng)
                                  })))), C = Math.min.apply(Math, r()(n.map((function(t) {
                                      return parseFloat(t.lng)
                                  })))), m = new google.maps.LatLngBounds(new google.maps.LatLng(p, C), new google.maps.LatLng(A, c)), B.fitBounds(m, {
                                      top: 50
                                  }), B.getZoom() > 15 && B.setZoom(15);
                              case 13:
                              case "end":
                                  return t.stop()
                          }
                      }), t)
                  })))).apply(this, arguments)
              }
          }))
      }
  }).call(this, e(1))
}, function(t, n, e) {
  var r = e(15);
  t.exports = function(t) {
      if (Array.isArray(t)) return r(t)
  }
}, function(t, n) {
  t.exports = function(t) {
      if ("undefined" != typeof Symbol && Symbol.iterator in Object(t)) return Array.from(t)
  }
}, function(t, n, e) {
  var r = e(15);
  t.exports = function(t, n) {
      if (t) {
          if ("string" == typeof t) return r(t, n);
          var e = Object.prototype.toString.call(t).slice(8, -1);
          return "Object" === e && t.constructor && (e = t.constructor.name), "Map" === e || "Set" === e ? Array.from(e) : "Arguments" === e || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e) ? r(t, n) : void 0
      }
  }
}, function(t, n) {
  t.exports = function() {
      throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
  }
}, function(t, n, e) {
  var r = function(t) {
      "use strict";
      var n = Object.prototype,
          e = n.hasOwnProperty,
          r = "function" == typeof Symbol ? Symbol : {},
          i = r.iterator || "@@iterator",
          a = r.asyncIterator || "@@asyncIterator",
          o = r.toStringTag || "@@toStringTag";

      function d(t, n, e, r) {
          var i = n && n.prototype instanceof A ? n : A,
              a = Object.create(i.prototype),
              o = new y(r || []);
          return a._invoke = function(t, n, e) {
              var r = "suspendedStart";
              return function(i, a) {
                  if ("executing" === r) throw new Error("Generator is already running");
                  if ("completed" === r) {
                      if ("throw" === i) throw a;
                      return w()
                  }
                  for (e.method = i, e.arg = a;;) {
                      var o = e.delegate;
                      if (o) {
                          var d = x(o, e);
                          if (d) {
                              if (d === p) continue;
                              return d
                          }
                      }
                      if ("next" === e.method) e.sent = e._sent = e.arg;
                      else if ("throw" === e.method) {
                          if ("suspendedStart" === r) throw r = "completed", e.arg;
                          e.dispatchException(e.arg)
                      } else "return" === e.method && e.abrupt("return", e.arg);
                      r = "executing";
                      var A = s(t, n, e);
                      if ("normal" === A.type) {
                          if (r = e.done ? "completed" : "suspendedYield", A.arg === p) continue;
                          return {
                              value: A.arg,
                              done: e.done
                          }
                      }
                      "throw" === A.type && (r = "completed", e.method = "throw", e.arg = A.arg)
                  }
              }
          }(t, e, o), a
      }

      function s(t, n, e) {
          try {
              return {
                  type: "normal",
                  arg: t.call(n, e)
              }
          } catch (t) {
              return {
                  type: "throw",
                  arg: t
              }
          }
      }
      t.wrap = d;
      var p = {};

      function A() {}

      function c() {}

      function l() {}
      var C = {};
      C[i] = function() {
          return this
      };
      var g = Object.getPrototypeOf,
          h = g && g(g(v([])));
      h && h !== n && e.call(h, i) && (C = h);
      var m = l.prototype = A.prototype = Object.create(C);

      function f(t) {
          ["next", "throw", "return"].forEach((function(n) {
              t[n] = function(t) {
                  return this._invoke(n, t)
              }
          }))
      }

      function u(t, n) {
          var r;
          this._invoke = function(i, a) {
              function o() {
                  return new n((function(r, o) {
                      ! function r(i, a, o, d) {
                          var p = s(t[i], t, a);
                          if ("throw" !== p.type) {
                              var A = p.arg,
                                  c = A.value;
                              return c && "object" == typeof c && e.call(c, "__await") ? n.resolve(c.__await).then((function(t) {
                                  r("next", t, o, d)
                              }), (function(t) {
                                  r("throw", t, o, d)
                              })) : n.resolve(c).then((function(t) {
                                  A.value = t, o(A)
                              }), (function(t) {
                                  return r("throw", t, o, d)
                              }))
                          }
                          d(p.arg)
                      }(i, a, r, o)
                  }))
              }
              return r = r ? r.then(o, o) : o()
          }
      }

      function x(t, n) {
          var e = t.iterator[n.method];
          if (void 0 === e) {
              if (n.delegate = null, "throw" === n.method) {
                  if (t.iterator.return && (n.method = "return", n.arg = void 0, x(t, n), "throw" === n.method)) return p;
                  n.method = "throw", n.arg = new TypeError("The iterator does not provide a 'throw' method")
              }
              return p
          }
          var r = s(e, t.iterator, n.arg);
          if ("throw" === r.type) return n.method = "throw", n.arg = r.arg, n.delegate = null, p;
          var i = r.arg;
          return i ? i.done ? (n[t.resultName] = i.value, n.next = t.nextLoc, "return" !== n.method && (n.method = "next", n.arg = void 0), n.delegate = null, p) : i : (n.method = "throw", n.arg = new TypeError("iterator result is not an object"), n.delegate = null, p)
      }

      function b(t) {
          var n = {
              tryLoc: t[0]
          };
          1 in t && (n.catchLoc = t[1]), 2 in t && (n.finallyLoc = t[2], n.afterLoc = t[3]), this.tryEntries.push(n)
      }

      function B(t) {
          var n = t.completion || {};
          n.type = "normal", delete n.arg, t.completion = n
      }

      function y(t) {
          this.tryEntries = [{
              tryLoc: "root"
          }], t.forEach(b, this), this.reset(!0)
      }

      function v(t) {
          if (t) {
              var n = t[i];
              if (n) return n.call(t);
              if ("function" == typeof t.next) return t;
              if (!isNaN(t.length)) {
                  var r = -1,
                      a = function n() {
                          for (; ++r < t.length;)
                              if (e.call(t, r)) return n.value = t[r], n.done = !1, n;
                          return n.value = void 0, n.done = !0, n
                      };
                  return a.next = a
              }
          }
          return {
              next: w
          }
      }

      function w() {
          return {
              value: void 0,
              done: !0
          }
      }
      return c.prototype = m.constructor = l, l.constructor = c, l[o] = c.displayName = "GeneratorFunction", t.isGeneratorFunction = function(t) {
          var n = "function" == typeof t && t.constructor;
          return !!n && (n === c || "GeneratorFunction" === (n.displayName || n.name))
      }, t.mark = function(t) {
          return Object.setPrototypeOf ? Object.setPrototypeOf(t, l) : (t.__proto__ = l, o in t || (t[o] = "GeneratorFunction")), t.prototype = Object.create(m), t
      }, t.awrap = function(t) {
          return {
              __await: t
          }
      }, f(u.prototype), u.prototype[a] = function() {
          return this
      }, t.AsyncIterator = u, t.async = function(n, e, r, i, a) {
          void 0 === a && (a = Promise);
          var o = new u(d(n, e, r, i), a);
          return t.isGeneratorFunction(e) ? o : o.next().then((function(t) {
              return t.done ? t.value : o.next()
          }))
      }, f(m), m[o] = "Generator", m[i] = function() {
          return this
      }, m.toString = function() {
          return "[object Generator]"
      }, t.keys = function(t) {
          var n = [];
          for (var e in t) n.push(e);
          return n.reverse(),
              function e() {
                  for (; n.length;) {
                      var r = n.pop();
                      if (r in t) return e.value = r, e.done = !1, e
                  }
                  return e.done = !0, e
              }
      }, t.values = v, y.prototype = {
          constructor: y,
          reset: function(t) {
              if (this.prev = 0, this.next = 0, this.sent = this._sent = void 0, this.done = !1, this.delegate = null, this.method = "next", this.arg = void 0, this.tryEntries.forEach(B), !t)
                  for (var n in this) "t" === n.charAt(0) && e.call(this, n) && !isNaN(+n.slice(1)) && (this[n] = void 0)
          },
          stop: function() {
              this.done = !0;
              var t = this.tryEntries[0].completion;
              if ("throw" === t.type) throw t.arg;
              return this.rval
          },
          dispatchException: function(t) {
              if (this.done) throw t;
              var n = this;

              function r(e, r) {
                  return o.type = "throw", o.arg = t, n.next = e, r && (n.method = "next", n.arg = void 0), !!r
              }
              for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                  var a = this.tryEntries[i],
                      o = a.completion;
                  if ("root" === a.tryLoc) return r("end");
                  if (a.tryLoc <= this.prev) {
                      var d = e.call(a, "catchLoc"),
                          s = e.call(a, "finallyLoc");
                      if (d && s) {
                          if (this.prev < a.catchLoc) return r(a.catchLoc, !0);
                          if (this.prev < a.finallyLoc) return r(a.finallyLoc)
                      } else if (d) {
                          if (this.prev < a.catchLoc) return r(a.catchLoc, !0)
                      } else {
                          if (!s) throw new Error("try statement without catch or finally");
                          if (this.prev < a.finallyLoc) return r(a.finallyLoc)
                      }
                  }
              }
          },
          abrupt: function(t, n) {
              for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                  var i = this.tryEntries[r];
                  if (i.tryLoc <= this.prev && e.call(i, "finallyLoc") && this.prev < i.finallyLoc) {
                      var a = i;
                      break
                  }
              }
              a && ("break" === t || "continue" === t) && a.tryLoc <= n && n <= a.finallyLoc && (a = null);
              var o = a ? a.completion : {};
              return o.type = t, o.arg = n, a ? (this.method = "next", this.next = a.finallyLoc, p) : this.complete(o)
          },
          complete: function(t, n) {
              if ("throw" === t.type) throw t.arg;
              return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && n && (this.next = n), p
          },
          finish: function(t) {
              for (var n = this.tryEntries.length - 1; n >= 0; --n) {
                  var e = this.tryEntries[n];
                  if (e.finallyLoc === t) return this.complete(e.completion, e.afterLoc), B(e), p
              }
          },
          catch: function(t) {
              for (var n = this.tryEntries.length - 1; n >= 0; --n) {
                  var e = this.tryEntries[n];
                  if (e.tryLoc === t) {
                      var r = e.completion;
                      if ("throw" === r.type) {
                          var i = r.arg;
                          B(e)
                      }
                      return i
                  }
              }
              throw new Error("illegal catch attempt")
          },
          delegateYield: function(t, n, e) {
              return this.delegate = {
                  iterator: v(t),
                  resultName: n,
                  nextLoc: e
              }, "next" === this.method && (this.arg = void 0), p
          }
      }, t
  }(t.exports);
  try {
      regeneratorRuntime = r
  } catch (t) {
      Function("r", "regeneratorRuntime = r")(r)
  }
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0;
  var i = r(e(40)),
      a = r(e(20)),
      o = e(54),
      d = e(58),
      s = r(e(59)),
      p = r(e(21)),
      A = r(e(19)),
      c = i.default.create;

  function l() {
      var t = c();
      return t.compile = function(n, e) {
          return d.compile(n, e, t)
      }, t.precompile = function(n, e) {
          return d.precompile(n, e, t)
      }, t.AST = a.default, t.Compiler = d.Compiler, t.JavaScriptCompiler = s.default, t.Parser = o.parser, t.parse = o.parse, t.parseWithoutProcessing = o.parseWithoutProcessing, t
  }
  var C = l();
  C.create = l, A.default(C), C.Visitor = p.default, C.default = C, n.default = C, t.exports = n.default
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }

  function i(t) {
      if (t && t.__esModule) return t;
      var n = {};
      if (null != t)
          for (var e in t) Object.prototype.hasOwnProperty.call(t, e) && (n[e] = t[e]);
      return n.default = t, n
  }
  n.__esModule = !0;
  var a = i(e(10)),
      o = r(e(51)),
      d = r(e(3)),
      s = i(e(2)),
      p = i(e(52)),
      A = r(e(19));

  function c() {
      var t = new a.HandlebarsEnvironment;
      return s.extend(t, a), t.SafeString = o.default, t.Exception = d.default, t.Utils = s, t.escapeExpression = s.escapeExpression, t.VM = p, t.template = function(n) {
          return p.template(n, t)
      }, t
  }
  var l = c();
  l.create = c, A.default(l), l.default = l, n.default = l, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = e(2);
  n.default = function(t) {
      t.registerHelper("blockHelperMissing", (function(n, e) {
          var i = e.inverse,
              a = e.fn;
          if (!0 === n) return a(this);
          if (!1 === n || null == n) return i(this);
          if (r.isArray(n)) return n.length > 0 ? (e.ids && (e.ids = [e.name]), t.helpers.each(n, e)) : i(this);
          if (e.data && e.ids) {
              var o = r.createFrame(e.data);
              o.contextPath = r.appendContextPath(e.data.contextPath, e.name), e = {
                  data: o
              }
          }
          return a(n, e)
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  (function(r) {
      n.__esModule = !0;
      var i, a = e(2),
          o = e(3),
          d = (i = o) && i.__esModule ? i : {
              default: i
          };
      n.default = function(t) {
          t.registerHelper("each", (function(t, n) {
              if (!n) throw new d.default("Must pass iterator to #each");
              var e, i = n.fn,
                  o = n.inverse,
                  s = 0,
                  p = "",
                  A = void 0,
                  c = void 0;

              function l(n, e, r) {
                  A && (A.key = n, A.index = e, A.first = 0 === e, A.last = !!r, c && (A.contextPath = c + n)), p += i(t[n], {
                      data: A,
                      blockParams: a.blockParams([t[n], n], [c + n, null])
                  })
              }
              if (n.data && n.ids && (c = a.appendContextPath(n.data.contextPath, n.ids[0]) + "."), a.isFunction(t) && (t = t.call(this)), n.data && (A = a.createFrame(n.data)), t && "object" == typeof t)
                  if (a.isArray(t))
                      for (var C = t.length; s < C; s++) s in t && l(s, s, s === t.length - 1);
                  else if (r.Symbol && t[r.Symbol.iterator]) {
                  for (var g = [], h = t[r.Symbol.iterator](), m = h.next(); !m.done; m = h.next()) g.push(m.value);
                  for (C = (t = g).length; s < C; s++) l(s, s, s === t.length - 1)
              } else e = void 0, Object.keys(t).forEach((function(t) {
                  void 0 !== e && l(e, s - 1), e = t, s++
              })), void 0 !== e && l(e, s - 1, !0);
              return 0 === s && (p = o(this)), p
          }))
      }, t.exports = n.default
  }).call(this, e(9))
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r, i = e(3),
      a = (r = i) && r.__esModule ? r : {
          default: r
      };
  n.default = function(t) {
      t.registerHelper("helperMissing", (function() {
          if (1 !== arguments.length) throw new a.default('Missing helper: "' + arguments[arguments.length - 1].name + '"')
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r, i = e(2),
      a = e(3),
      o = (r = a) && r.__esModule ? r : {
          default: r
      };
  n.default = function(t) {
      t.registerHelper("if", (function(t, n) {
          if (2 != arguments.length) throw new o.default("#if requires exactly one argument");
          return i.isFunction(t) && (t = t.call(this)), !n.hash.includeZero && !t || i.isEmpty(t) ? n.inverse(this) : n.fn(this)
      })), t.registerHelper("unless", (function(n, e) {
          if (2 != arguments.length) throw new o.default("#unless requires exactly one argument");
          return t.helpers.if.call(this, n, {
              fn: e.inverse,
              inverse: e.fn,
              hash: e.hash
          })
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.default = function(t) {
      t.registerHelper("log", (function() {
          for (var n = [void 0], e = arguments[arguments.length - 1], r = 0; r < arguments.length - 1; r++) n.push(arguments[r]);
          var i = 1;
          null != e.hash.level ? i = e.hash.level : e.data && null != e.data.level && (i = e.data.level), n[0] = i, t.log.apply(t, n)
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.default = function(t) {
      t.registerHelper("lookup", (function(t, n, e) {
          return t ? e.lookupProperty(t, n) : t
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r, i = e(2),
      a = e(3),
      o = (r = a) && r.__esModule ? r : {
          default: r
      };
  n.default = function(t) {
      t.registerHelper("with", (function(t, n) {
          if (2 != arguments.length) throw new o.default("#with requires exactly one argument");
          i.isFunction(t) && (t = t.call(this));
          var e = n.fn;
          if (i.isEmpty(t)) return n.inverse(this);
          var r = n.data;
          return n.data && n.ids && ((r = i.createFrame(n.data)).contextPath = i.appendContextPath(n.data.contextPath, n.ids[0])), e(t, {
              data: r,
              blockParams: i.blockParams([t], [r && r.contextPath])
          })
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.registerDefaultDecorators = function(t) {
      a.default(t)
  };
  var r, i = e(49),
      a = (r = i) && r.__esModule ? r : {
          default: r
      }
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = e(2);
  n.default = function(t) {
      t.registerDecorator("inline", (function(t, n, e, i) {
          var a = t;
          return n.partials || (n.partials = {}, a = function(i, a) {
              var o = e.partials;
              e.partials = r.extend({}, o, n.partials);
              var d = t(i, a);
              return e.partials = o, d
          }), n.partials[i.args[0]] = i.fn, a
      }))
  }, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.createNewLookupObject = function() {
      for (var t = arguments.length, n = Array(t), e = 0; e < t; e++) n[e] = arguments[e];
      return r.extend.apply(void 0, [Object.create(null)].concat(n))
  };
  var r = e(2)
}, function(t, n, e) {
  "use strict";

  function r(t) {
      this.string = t
  }
  n.__esModule = !0, r.prototype.toString = r.prototype.toHTML = function() {
      return "" + this.string
  }, n.default = r, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.checkRevision = function(t) {
      var n = t && t[0] || 1,
          e = d.COMPILER_REVISION;
      if (n >= d.LAST_COMPATIBLE_COMPILER_REVISION && n <= d.COMPILER_REVISION) return;
      if (n < d.LAST_COMPATIBLE_COMPILER_REVISION) {
          var r = d.REVISION_CHANGES[e],
              i = d.REVISION_CHANGES[n];
          throw new o.default("Template was precompiled with an older version of Handlebars than the current runtime. Please update your precompiler to a newer version (" + r + ") or downgrade your runtime to an older version (" + i + ").")
      }
      throw new o.default("Template was precompiled with a newer version of Handlebars than the current runtime. Please update your runtime to a newer version (" + t[1] + ").")
  }, n.template = function(t, n) {
      if (!n) throw new o.default("No environment passed to template");
      if (!t || !t.main) throw new o.default("Unknown template object: " + typeof t);
      t.main.decorator = t.main_d, n.VM.checkRevision(t.compiler);
      var e = t.compiler && 7 === t.compiler[0];
      var r = {
          strict: function(t, n, e) {
              if (!t || !(n in t)) throw new o.default('"' + n + '" not defined in ' + t, {
                  loc: e
              });
              return t[n]
          },
          lookupProperty: function(t, n) {
              var e = t[n];
              return null == e || Object.prototype.hasOwnProperty.call(t, n) || A.resultIsAllowed(e, r.protoAccessControl, n) ? e : void 0
          },
          lookup: function(t, n) {
              for (var e = t.length, i = 0; i < e; i++) {
                  if (null != (t[i] && r.lookupProperty(t[i], n))) return t[i][n]
              }
          },
          lambda: function(t, n) {
              return "function" == typeof t ? t.call(n) : t
          },
          escapeExpression: i.escapeExpression,
          invokePartial: function(e, r, a) {
              a.hash && (r = i.extend({}, r, a.hash), a.ids && (a.ids[0] = !0)), e = n.VM.resolvePartial.call(this, e, r, a);
              var d = i.extend({}, a, {
                      hooks: this.hooks,
                      protoAccessControl: this.protoAccessControl
                  }),
                  s = n.VM.invokePartial.call(this, e, r, d);
              if (null == s && n.compile && (a.partials[a.name] = n.compile(e, t.compilerOptions, n), s = a.partials[a.name](r, d)), null != s) {
                  if (a.indent) {
                      for (var p = s.split("\n"), A = 0, c = p.length; A < c && (p[A] || A + 1 !== c); A++) p[A] = a.indent + p[A];
                      s = p.join("\n")
                  }
                  return s
              }
              throw new o.default("The partial " + a.name + " could not be compiled when running in runtime-only mode")
          },
          fn: function(n) {
              var e = t[n];
              return e.decorator = t[n + "_d"], e
          },
          programs: [],
          program: function(t, n, e, r, i) {
              var a = this.programs[t],
                  o = this.fn(t);
              return n || i || r || e ? a = c(this, t, o, n, e, r, i) : a || (a = this.programs[t] = c(this, t, o)), a
          },
          data: function(t, n) {
              for (; t && n--;) t = t._parent;
              return t
          },
          mergeIfNeeded: function(t, n) {
              var e = t || n;
              return t && n && t !== n && (e = i.extend({}, n, t)), e
          },
          nullContext: Object.seal({}),
          noop: n.VM.noop,
          compilerInfo: t.compiler
      };

      function a(n) {
          var e = arguments.length <= 1 || void 0 === arguments[1] ? {} : arguments[1],
              i = e.data;
          a._setup(e), !e.partial && t.useData && (i = C(n, i));
          var o = void 0,
              d = t.useBlockParams ? [] : void 0;

          function s(n) {
              return "" + t.main(r, n, r.helpers, r.partials, i, d, o)
          }
          return t.useDepths && (o = e.depths ? n != e.depths[0] ? [n].concat(e.depths) : e.depths : [n]), (s = g(t.main, s, r, e.depths || [], i, d))(n, e)
      }
      return a.isTop = !0, a._setup = function(a) {
          if (a.partial) r.protoAccessControl = a.protoAccessControl, r.helpers = a.helpers, r.partials = a.partials, r.decorators = a.decorators, r.hooks = a.hooks;
          else {
              var o = i.extend({}, n.helpers, a.helpers);
              ! function(t, n) {
                  Object.keys(t).forEach((function(e) {
                      var r = t[e];
                      t[e] = function(t, n) {
                          var e = n.lookupProperty;
                          return p.wrapHelper(t, (function(t) {
                              return i.extend({
                                  lookupProperty: e
                              }, t)
                          }))
                      }(r, n)
                  }))
              }(o, r), r.helpers = o, t.usePartial && (r.partials = r.mergeIfNeeded(a.partials, n.partials)), (t.usePartial || t.useDecorators) && (r.decorators = i.extend({}, n.decorators, a.decorators)), r.hooks = {}, r.protoAccessControl = A.createProtoAccessControl(a);
              var d = a.allowCallsToHelperMissing || e;
              s.moveHelperToHooks(r, "helperMissing", d), s.moveHelperToHooks(r, "blockHelperMissing", d)
          }
      }, a._child = function(n, e, i, a) {
          if (t.useBlockParams && !i) throw new o.default("must pass block params");
          if (t.useDepths && !a) throw new o.default("must pass parent depths");
          return c(r, n, t[n], e, 0, i, a)
      }, a
  }, n.wrapProgram = c, n.resolvePartial = function(t, n, e) {
      t ? t.call || e.name || (e.name = t, t = e.partials[t]) : t = "@partial-block" === e.name ? e.data["partial-block"] : e.partials[e.name];
      return t
  }, n.invokePartial = function(t, n, e) {
      var r = e.data && e.data["partial-block"];
      e.partial = !0, e.ids && (e.data.contextPath = e.ids[0] || e.data.contextPath);
      var a = void 0;
      e.fn && e.fn !== l && function() {
          e.data = d.createFrame(e.data);
          var t = e.fn;
          a = e.data["partial-block"] = function(n) {
              var e = arguments.length <= 1 || void 0 === arguments[1] ? {} : arguments[1];
              return e.data = d.createFrame(e.data), e.data["partial-block"] = r, t(n, e)
          }, t.partials && (e.partials = i.extend({}, e.partials, t.partials))
      }();
      void 0 === t && a && (t = a);
      if (void 0 === t) throw new o.default("The partial " + e.name + " could not be found");
      if (t instanceof Function) return t(n, e)
  }, n.noop = l;
  var r, i = function(t) {
          if (t && t.__esModule) return t;
          var n = {};
          if (null != t)
              for (var e in t) Object.prototype.hasOwnProperty.call(t, e) && (n[e] = t[e]);
          return n.default = t, n
      }(e(2)),
      a = e(3),
      o = (r = a) && r.__esModule ? r : {
          default: r
      },
      d = e(10),
      s = e(16),
      p = e(53),
      A = e(18);

  function c(t, n, e, r, i, a, o) {
      function d(n) {
          var i = arguments.length <= 1 || void 0 === arguments[1] ? {} : arguments[1],
              d = o;
          return !o || n == o[0] || n === t.nullContext && null === o[0] || (d = [n].concat(o)), e(t, n, t.helpers, t.partials, i.data || r, a && [i.blockParams].concat(a), d)
      }
      return (d = g(e, d, t, o, r, a)).program = n, d.depth = o ? o.length : 0, d.blockParams = i || 0, d
  }

  function l() {
      return ""
  }

  function C(t, n) {
      return n && "root" in n || ((n = n ? d.createFrame(n) : {}).root = t), n
  }

  function g(t, n, e, r, a, o) {
      if (t.decorator) {
          var d = {};
          n = t.decorator(n, d, e, r && r[0], a, o, r), i.extend(n, d)
      }
      return n
  }
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.wrapHelper = function(t, n) {
      if ("function" != typeof t) return t;
      return function() {
          var e = arguments[arguments.length - 1];
          return arguments[arguments.length - 1] = n(e), t.apply(this, arguments)
      }
  }
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0, n.parseWithoutProcessing = p, n.parse = function(t, n) {
      var e = p(t, n);
      return new a.default(n).accept(e)
  };
  var i = r(e(55)),
      a = r(e(56)),
      o = function(t) {
          if (t && t.__esModule) return t;
          var n = {};
          if (null != t)
              for (var e in t) Object.prototype.hasOwnProperty.call(t, e) && (n[e] = t[e]);
          return n.default = t, n
      }(e(57)),
      d = e(2);
  n.parser = i.default;
  var s = {};

  function p(t, n) {
      return "Program" === t.type ? t : (i.default.yy = s, s.locInfo = function(t) {
          return new s.SourceLocation(n && n.srcName, t)
      }, i.default.parse(t))
  }
  d.extend(s, o)
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = function() {
      var t = {
              trace: function() {},
              yy: {},
              symbols_: {
                  error: 2,
                  root: 3,
                  program: 4,
                  EOF: 5,
                  program_repetition0: 6,
                  statement: 7,
                  mustache: 8,
                  block: 9,
                  rawBlock: 10,
                  partial: 11,
                  partialBlock: 12,
                  content: 13,
                  COMMENT: 14,
                  CONTENT: 15,
                  openRawBlock: 16,
                  rawBlock_repetition0: 17,
                  END_RAW_BLOCK: 18,
                  OPEN_RAW_BLOCK: 19,
                  helperName: 20,
                  openRawBlock_repetition0: 21,
                  openRawBlock_option0: 22,
                  CLOSE_RAW_BLOCK: 23,
                  openBlock: 24,
                  block_option0: 25,
                  closeBlock: 26,
                  openInverse: 27,
                  block_option1: 28,
                  OPEN_BLOCK: 29,
                  openBlock_repetition0: 30,
                  openBlock_option0: 31,
                  openBlock_option1: 32,
                  CLOSE: 33,
                  OPEN_INVERSE: 34,
                  openInverse_repetition0: 35,
                  openInverse_option0: 36,
                  openInverse_option1: 37,
                  openInverseChain: 38,
                  OPEN_INVERSE_CHAIN: 39,
                  openInverseChain_repetition0: 40,
                  openInverseChain_option0: 41,
                  openInverseChain_option1: 42,
                  inverseAndProgram: 43,
                  INVERSE: 44,
                  inverseChain: 45,
                  inverseChain_option0: 46,
                  OPEN_ENDBLOCK: 47,
                  OPEN: 48,
                  mustache_repetition0: 49,
                  mustache_option0: 50,
                  OPEN_UNESCAPED: 51,
                  mustache_repetition1: 52,
                  mustache_option1: 53,
                  CLOSE_UNESCAPED: 54,
                  OPEN_PARTIAL: 55,
                  partialName: 56,
                  partial_repetition0: 57,
                  partial_option0: 58,
                  openPartialBlock: 59,
                  OPEN_PARTIAL_BLOCK: 60,
                  openPartialBlock_repetition0: 61,
                  openPartialBlock_option0: 62,
                  param: 63,
                  sexpr: 64,
                  OPEN_SEXPR: 65,
                  sexpr_repetition0: 66,
                  sexpr_option0: 67,
                  CLOSE_SEXPR: 68,
                  hash: 69,
                  hash_repetition_plus0: 70,
                  hashSegment: 71,
                  ID: 72,
                  EQUALS: 73,
                  blockParams: 74,
                  OPEN_BLOCK_PARAMS: 75,
                  blockParams_repetition_plus0: 76,
                  CLOSE_BLOCK_PARAMS: 77,
                  path: 78,
                  dataName: 79,
                  STRING: 80,
                  NUMBER: 81,
                  BOOLEAN: 82,
                  UNDEFINED: 83,
                  NULL: 84,
                  DATA: 85,
                  pathSegments: 86,
                  SEP: 87,
                  $accept: 0,
                  $end: 1
              },
              terminals_: {
                  2: "error",
                  5: "EOF",
                  14: "COMMENT",
                  15: "CONTENT",
                  18: "END_RAW_BLOCK",
                  19: "OPEN_RAW_BLOCK",
                  23: "CLOSE_RAW_BLOCK",
                  29: "OPEN_BLOCK",
                  33: "CLOSE",
                  34: "OPEN_INVERSE",
                  39: "OPEN_INVERSE_CHAIN",
                  44: "INVERSE",
                  47: "OPEN_ENDBLOCK",
                  48: "OPEN",
                  51: "OPEN_UNESCAPED",
                  54: "CLOSE_UNESCAPED",
                  55: "OPEN_PARTIAL",
                  60: "OPEN_PARTIAL_BLOCK",
                  65: "OPEN_SEXPR",
                  68: "CLOSE_SEXPR",
                  72: "ID",
                  73: "EQUALS",
                  75: "OPEN_BLOCK_PARAMS",
                  77: "CLOSE_BLOCK_PARAMS",
                  80: "STRING",
                  81: "NUMBER",
                  82: "BOOLEAN",
                  83: "UNDEFINED",
                  84: "NULL",
                  85: "DATA",
                  87: "SEP"
              },
              productions_: [0, [3, 2],
                  [4, 1],
                  [7, 1],
                  [7, 1],
                  [7, 1],
                  [7, 1],
                  [7, 1],
                  [7, 1],
                  [7, 1],
                  [13, 1],
                  [10, 3],
                  [16, 5],
                  [9, 4],
                  [9, 4],
                  [24, 6],
                  [27, 6],
                  [38, 6],
                  [43, 2],
                  [45, 3],
                  [45, 1],
                  [26, 3],
                  [8, 5],
                  [8, 5],
                  [11, 5],
                  [12, 3],
                  [59, 5],
                  [63, 1],
                  [63, 1],
                  [64, 5],
                  [69, 1],
                  [71, 3],
                  [74, 3],
                  [20, 1],
                  [20, 1],
                  [20, 1],
                  [20, 1],
                  [20, 1],
                  [20, 1],
                  [20, 1],
                  [56, 1],
                  [56, 1],
                  [79, 2],
                  [78, 1],
                  [86, 3],
                  [86, 1],
                  [6, 0],
                  [6, 2],
                  [17, 0],
                  [17, 2],
                  [21, 0],
                  [21, 2],
                  [22, 0],
                  [22, 1],
                  [25, 0],
                  [25, 1],
                  [28, 0],
                  [28, 1],
                  [30, 0],
                  [30, 2],
                  [31, 0],
                  [31, 1],
                  [32, 0],
                  [32, 1],
                  [35, 0],
                  [35, 2],
                  [36, 0],
                  [36, 1],
                  [37, 0],
                  [37, 1],
                  [40, 0],
                  [40, 2],
                  [41, 0],
                  [41, 1],
                  [42, 0],
                  [42, 1],
                  [46, 0],
                  [46, 1],
                  [49, 0],
                  [49, 2],
                  [50, 0],
                  [50, 1],
                  [52, 0],
                  [52, 2],
                  [53, 0],
                  [53, 1],
                  [57, 0],
                  [57, 2],
                  [58, 0],
                  [58, 1],
                  [61, 0],
                  [61, 2],
                  [62, 0],
                  [62, 1],
                  [66, 0],
                  [66, 2],
                  [67, 0],
                  [67, 1],
                  [70, 1],
                  [70, 2],
                  [76, 1],
                  [76, 2]
              ],
              performAction: function(t, n, e, r, i, a, o) {
                  var d = a.length - 1;
                  switch (i) {
                      case 1:
                          return a[d - 1];
                      case 2:
                          this.$ = r.prepareProgram(a[d]);
                          break;
                      case 3:
                      case 4:
                      case 5:
                      case 6:
                      case 7:
                      case 8:
                          this.$ = a[d];
                          break;
                      case 9:
                          this.$ = {
                              type: "CommentStatement",
                              value: r.stripComment(a[d]),
                              strip: r.stripFlags(a[d], a[d]),
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 10:
                          this.$ = {
                              type: "ContentStatement",
                              original: a[d],
                              value: a[d],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 11:
                          this.$ = r.prepareRawBlock(a[d - 2], a[d - 1], a[d], this._$);
                          break;
                      case 12:
                          this.$ = {
                              path: a[d - 3],
                              params: a[d - 2],
                              hash: a[d - 1]
                          };
                          break;
                      case 13:
                          this.$ = r.prepareBlock(a[d - 3], a[d - 2], a[d - 1], a[d], !1, this._$);
                          break;
                      case 14:
                          this.$ = r.prepareBlock(a[d - 3], a[d - 2], a[d - 1], a[d], !0, this._$);
                          break;
                      case 15:
                          this.$ = {
                              open: a[d - 5],
                              path: a[d - 4],
                              params: a[d - 3],
                              hash: a[d - 2],
                              blockParams: a[d - 1],
                              strip: r.stripFlags(a[d - 5], a[d])
                          };
                          break;
                      case 16:
                      case 17:
                          this.$ = {
                              path: a[d - 4],
                              params: a[d - 3],
                              hash: a[d - 2],
                              blockParams: a[d - 1],
                              strip: r.stripFlags(a[d - 5], a[d])
                          };
                          break;
                      case 18:
                          this.$ = {
                              strip: r.stripFlags(a[d - 1], a[d - 1]),
                              program: a[d]
                          };
                          break;
                      case 19:
                          var s = r.prepareBlock(a[d - 2], a[d - 1], a[d], a[d], !1, this._$),
                              p = r.prepareProgram([s], a[d - 1].loc);
                          p.chained = !0, this.$ = {
                              strip: a[d - 2].strip,
                              program: p,
                              chain: !0
                          };
                          break;
                      case 20:
                          this.$ = a[d];
                          break;
                      case 21:
                          this.$ = {
                              path: a[d - 1],
                              strip: r.stripFlags(a[d - 2], a[d])
                          };
                          break;
                      case 22:
                      case 23:
                          this.$ = r.prepareMustache(a[d - 3], a[d - 2], a[d - 1], a[d - 4], r.stripFlags(a[d - 4], a[d]), this._$);
                          break;
                      case 24:
                          this.$ = {
                              type: "PartialStatement",
                              name: a[d - 3],
                              params: a[d - 2],
                              hash: a[d - 1],
                              indent: "",
                              strip: r.stripFlags(a[d - 4], a[d]),
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 25:
                          this.$ = r.preparePartialBlock(a[d - 2], a[d - 1], a[d], this._$);
                          break;
                      case 26:
                          this.$ = {
                              path: a[d - 3],
                              params: a[d - 2],
                              hash: a[d - 1],
                              strip: r.stripFlags(a[d - 4], a[d])
                          };
                          break;
                      case 27:
                      case 28:
                          this.$ = a[d];
                          break;
                      case 29:
                          this.$ = {
                              type: "SubExpression",
                              path: a[d - 3],
                              params: a[d - 2],
                              hash: a[d - 1],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 30:
                          this.$ = {
                              type: "Hash",
                              pairs: a[d],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 31:
                          this.$ = {
                              type: "HashPair",
                              key: r.id(a[d - 2]),
                              value: a[d],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 32:
                          this.$ = r.id(a[d - 1]);
                          break;
                      case 33:
                      case 34:
                          this.$ = a[d];
                          break;
                      case 35:
                          this.$ = {
                              type: "StringLiteral",
                              value: a[d],
                              original: a[d],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 36:
                          this.$ = {
                              type: "NumberLiteral",
                              value: Number(a[d]),
                              original: Number(a[d]),
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 37:
                          this.$ = {
                              type: "BooleanLiteral",
                              value: "true" === a[d],
                              original: "true" === a[d],
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 38:
                          this.$ = {
                              type: "UndefinedLiteral",
                              original: void 0,
                              value: void 0,
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 39:
                          this.$ = {
                              type: "NullLiteral",
                              original: null,
                              value: null,
                              loc: r.locInfo(this._$)
                          };
                          break;
                      case 40:
                      case 41:
                          this.$ = a[d];
                          break;
                      case 42:
                          this.$ = r.preparePath(!0, a[d], this._$);
                          break;
                      case 43:
                          this.$ = r.preparePath(!1, a[d], this._$);
                          break;
                      case 44:
                          a[d - 2].push({
                              part: r.id(a[d]),
                              original: a[d],
                              separator: a[d - 1]
                          }), this.$ = a[d - 2];
                          break;
                      case 45:
                          this.$ = [{
                              part: r.id(a[d]),
                              original: a[d]
                          }];
                          break;
                      case 46:
                          this.$ = [];
                          break;
                      case 47:
                          a[d - 1].push(a[d]);
                          break;
                      case 48:
                          this.$ = [];
                          break;
                      case 49:
                          a[d - 1].push(a[d]);
                          break;
                      case 50:
                          this.$ = [];
                          break;
                      case 51:
                          a[d - 1].push(a[d]);
                          break;
                      case 58:
                          this.$ = [];
                          break;
                      case 59:
                          a[d - 1].push(a[d]);
                          break;
                      case 64:
                          this.$ = [];
                          break;
                      case 65:
                          a[d - 1].push(a[d]);
                          break;
                      case 70:
                          this.$ = [];
                          break;
                      case 71:
                          a[d - 1].push(a[d]);
                          break;
                      case 78:
                          this.$ = [];
                          break;
                      case 79:
                          a[d - 1].push(a[d]);
                          break;
                      case 82:
                          this.$ = [];
                          break;
                      case 83:
                          a[d - 1].push(a[d]);
                          break;
                      case 86:
                          this.$ = [];
                          break;
                      case 87:
                          a[d - 1].push(a[d]);
                          break;
                      case 90:
                          this.$ = [];
                          break;
                      case 91:
                          a[d - 1].push(a[d]);
                          break;
                      case 94:
                          this.$ = [];
                          break;
                      case 95:
                          a[d - 1].push(a[d]);
                          break;
                      case 98:
                          this.$ = [a[d]];
                          break;
                      case 99:
                          a[d - 1].push(a[d]);
                          break;
                      case 100:
                          this.$ = [a[d]];
                          break;
                      case 101:
                          a[d - 1].push(a[d])
                  }
              },
              table: [{
                  3: 1,
                  4: 2,
                  5: [2, 46],
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  1: [3]
              }, {
                  5: [1, 4]
              }, {
                  5: [2, 2],
                  7: 5,
                  8: 6,
                  9: 7,
                  10: 8,
                  11: 9,
                  12: 10,
                  13: 11,
                  14: [1, 12],
                  15: [1, 20],
                  16: 17,
                  19: [1, 23],
                  24: 15,
                  27: 16,
                  29: [1, 21],
                  34: [1, 22],
                  39: [2, 2],
                  44: [2, 2],
                  47: [2, 2],
                  48: [1, 13],
                  51: [1, 14],
                  55: [1, 18],
                  59: 19,
                  60: [1, 24]
              }, {
                  1: [2, 1]
              }, {
                  5: [2, 47],
                  14: [2, 47],
                  15: [2, 47],
                  19: [2, 47],
                  29: [2, 47],
                  34: [2, 47],
                  39: [2, 47],
                  44: [2, 47],
                  47: [2, 47],
                  48: [2, 47],
                  51: [2, 47],
                  55: [2, 47],
                  60: [2, 47]
              }, {
                  5: [2, 3],
                  14: [2, 3],
                  15: [2, 3],
                  19: [2, 3],
                  29: [2, 3],
                  34: [2, 3],
                  39: [2, 3],
                  44: [2, 3],
                  47: [2, 3],
                  48: [2, 3],
                  51: [2, 3],
                  55: [2, 3],
                  60: [2, 3]
              }, {
                  5: [2, 4],
                  14: [2, 4],
                  15: [2, 4],
                  19: [2, 4],
                  29: [2, 4],
                  34: [2, 4],
                  39: [2, 4],
                  44: [2, 4],
                  47: [2, 4],
                  48: [2, 4],
                  51: [2, 4],
                  55: [2, 4],
                  60: [2, 4]
              }, {
                  5: [2, 5],
                  14: [2, 5],
                  15: [2, 5],
                  19: [2, 5],
                  29: [2, 5],
                  34: [2, 5],
                  39: [2, 5],
                  44: [2, 5],
                  47: [2, 5],
                  48: [2, 5],
                  51: [2, 5],
                  55: [2, 5],
                  60: [2, 5]
              }, {
                  5: [2, 6],
                  14: [2, 6],
                  15: [2, 6],
                  19: [2, 6],
                  29: [2, 6],
                  34: [2, 6],
                  39: [2, 6],
                  44: [2, 6],
                  47: [2, 6],
                  48: [2, 6],
                  51: [2, 6],
                  55: [2, 6],
                  60: [2, 6]
              }, {
                  5: [2, 7],
                  14: [2, 7],
                  15: [2, 7],
                  19: [2, 7],
                  29: [2, 7],
                  34: [2, 7],
                  39: [2, 7],
                  44: [2, 7],
                  47: [2, 7],
                  48: [2, 7],
                  51: [2, 7],
                  55: [2, 7],
                  60: [2, 7]
              }, {
                  5: [2, 8],
                  14: [2, 8],
                  15: [2, 8],
                  19: [2, 8],
                  29: [2, 8],
                  34: [2, 8],
                  39: [2, 8],
                  44: [2, 8],
                  47: [2, 8],
                  48: [2, 8],
                  51: [2, 8],
                  55: [2, 8],
                  60: [2, 8]
              }, {
                  5: [2, 9],
                  14: [2, 9],
                  15: [2, 9],
                  19: [2, 9],
                  29: [2, 9],
                  34: [2, 9],
                  39: [2, 9],
                  44: [2, 9],
                  47: [2, 9],
                  48: [2, 9],
                  51: [2, 9],
                  55: [2, 9],
                  60: [2, 9]
              }, {
                  20: 25,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 36,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  4: 37,
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  39: [2, 46],
                  44: [2, 46],
                  47: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  4: 38,
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  44: [2, 46],
                  47: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  15: [2, 48],
                  17: 39,
                  18: [2, 48]
              }, {
                  20: 41,
                  56: 40,
                  64: 42,
                  65: [1, 43],
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  4: 44,
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  47: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  5: [2, 10],
                  14: [2, 10],
                  15: [2, 10],
                  18: [2, 10],
                  19: [2, 10],
                  29: [2, 10],
                  34: [2, 10],
                  39: [2, 10],
                  44: [2, 10],
                  47: [2, 10],
                  48: [2, 10],
                  51: [2, 10],
                  55: [2, 10],
                  60: [2, 10]
              }, {
                  20: 45,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 46,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 47,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 41,
                  56: 48,
                  64: 42,
                  65: [1, 43],
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  33: [2, 78],
                  49: 49,
                  65: [2, 78],
                  72: [2, 78],
                  80: [2, 78],
                  81: [2, 78],
                  82: [2, 78],
                  83: [2, 78],
                  84: [2, 78],
                  85: [2, 78]
              }, {
                  23: [2, 33],
                  33: [2, 33],
                  54: [2, 33],
                  65: [2, 33],
                  68: [2, 33],
                  72: [2, 33],
                  75: [2, 33],
                  80: [2, 33],
                  81: [2, 33],
                  82: [2, 33],
                  83: [2, 33],
                  84: [2, 33],
                  85: [2, 33]
              }, {
                  23: [2, 34],
                  33: [2, 34],
                  54: [2, 34],
                  65: [2, 34],
                  68: [2, 34],
                  72: [2, 34],
                  75: [2, 34],
                  80: [2, 34],
                  81: [2, 34],
                  82: [2, 34],
                  83: [2, 34],
                  84: [2, 34],
                  85: [2, 34]
              }, {
                  23: [2, 35],
                  33: [2, 35],
                  54: [2, 35],
                  65: [2, 35],
                  68: [2, 35],
                  72: [2, 35],
                  75: [2, 35],
                  80: [2, 35],
                  81: [2, 35],
                  82: [2, 35],
                  83: [2, 35],
                  84: [2, 35],
                  85: [2, 35]
              }, {
                  23: [2, 36],
                  33: [2, 36],
                  54: [2, 36],
                  65: [2, 36],
                  68: [2, 36],
                  72: [2, 36],
                  75: [2, 36],
                  80: [2, 36],
                  81: [2, 36],
                  82: [2, 36],
                  83: [2, 36],
                  84: [2, 36],
                  85: [2, 36]
              }, {
                  23: [2, 37],
                  33: [2, 37],
                  54: [2, 37],
                  65: [2, 37],
                  68: [2, 37],
                  72: [2, 37],
                  75: [2, 37],
                  80: [2, 37],
                  81: [2, 37],
                  82: [2, 37],
                  83: [2, 37],
                  84: [2, 37],
                  85: [2, 37]
              }, {
                  23: [2, 38],
                  33: [2, 38],
                  54: [2, 38],
                  65: [2, 38],
                  68: [2, 38],
                  72: [2, 38],
                  75: [2, 38],
                  80: [2, 38],
                  81: [2, 38],
                  82: [2, 38],
                  83: [2, 38],
                  84: [2, 38],
                  85: [2, 38]
              }, {
                  23: [2, 39],
                  33: [2, 39],
                  54: [2, 39],
                  65: [2, 39],
                  68: [2, 39],
                  72: [2, 39],
                  75: [2, 39],
                  80: [2, 39],
                  81: [2, 39],
                  82: [2, 39],
                  83: [2, 39],
                  84: [2, 39],
                  85: [2, 39]
              }, {
                  23: [2, 43],
                  33: [2, 43],
                  54: [2, 43],
                  65: [2, 43],
                  68: [2, 43],
                  72: [2, 43],
                  75: [2, 43],
                  80: [2, 43],
                  81: [2, 43],
                  82: [2, 43],
                  83: [2, 43],
                  84: [2, 43],
                  85: [2, 43],
                  87: [1, 50]
              }, {
                  72: [1, 35],
                  86: 51
              }, {
                  23: [2, 45],
                  33: [2, 45],
                  54: [2, 45],
                  65: [2, 45],
                  68: [2, 45],
                  72: [2, 45],
                  75: [2, 45],
                  80: [2, 45],
                  81: [2, 45],
                  82: [2, 45],
                  83: [2, 45],
                  84: [2, 45],
                  85: [2, 45],
                  87: [2, 45]
              }, {
                  52: 52,
                  54: [2, 82],
                  65: [2, 82],
                  72: [2, 82],
                  80: [2, 82],
                  81: [2, 82],
                  82: [2, 82],
                  83: [2, 82],
                  84: [2, 82],
                  85: [2, 82]
              }, {
                  25: 53,
                  38: 55,
                  39: [1, 57],
                  43: 56,
                  44: [1, 58],
                  45: 54,
                  47: [2, 54]
              }, {
                  28: 59,
                  43: 60,
                  44: [1, 58],
                  47: [2, 56]
              }, {
                  13: 62,
                  15: [1, 20],
                  18: [1, 61]
              }, {
                  33: [2, 86],
                  57: 63,
                  65: [2, 86],
                  72: [2, 86],
                  80: [2, 86],
                  81: [2, 86],
                  82: [2, 86],
                  83: [2, 86],
                  84: [2, 86],
                  85: [2, 86]
              }, {
                  33: [2, 40],
                  65: [2, 40],
                  72: [2, 40],
                  80: [2, 40],
                  81: [2, 40],
                  82: [2, 40],
                  83: [2, 40],
                  84: [2, 40],
                  85: [2, 40]
              }, {
                  33: [2, 41],
                  65: [2, 41],
                  72: [2, 41],
                  80: [2, 41],
                  81: [2, 41],
                  82: [2, 41],
                  83: [2, 41],
                  84: [2, 41],
                  85: [2, 41]
              }, {
                  20: 64,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  26: 65,
                  47: [1, 66]
              }, {
                  30: 67,
                  33: [2, 58],
                  65: [2, 58],
                  72: [2, 58],
                  75: [2, 58],
                  80: [2, 58],
                  81: [2, 58],
                  82: [2, 58],
                  83: [2, 58],
                  84: [2, 58],
                  85: [2, 58]
              }, {
                  33: [2, 64],
                  35: 68,
                  65: [2, 64],
                  72: [2, 64],
                  75: [2, 64],
                  80: [2, 64],
                  81: [2, 64],
                  82: [2, 64],
                  83: [2, 64],
                  84: [2, 64],
                  85: [2, 64]
              }, {
                  21: 69,
                  23: [2, 50],
                  65: [2, 50],
                  72: [2, 50],
                  80: [2, 50],
                  81: [2, 50],
                  82: [2, 50],
                  83: [2, 50],
                  84: [2, 50],
                  85: [2, 50]
              }, {
                  33: [2, 90],
                  61: 70,
                  65: [2, 90],
                  72: [2, 90],
                  80: [2, 90],
                  81: [2, 90],
                  82: [2, 90],
                  83: [2, 90],
                  84: [2, 90],
                  85: [2, 90]
              }, {
                  20: 74,
                  33: [2, 80],
                  50: 71,
                  63: 72,
                  64: 75,
                  65: [1, 43],
                  69: 73,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  72: [1, 79]
              }, {
                  23: [2, 42],
                  33: [2, 42],
                  54: [2, 42],
                  65: [2, 42],
                  68: [2, 42],
                  72: [2, 42],
                  75: [2, 42],
                  80: [2, 42],
                  81: [2, 42],
                  82: [2, 42],
                  83: [2, 42],
                  84: [2, 42],
                  85: [2, 42],
                  87: [1, 50]
              }, {
                  20: 74,
                  53: 80,
                  54: [2, 84],
                  63: 81,
                  64: 75,
                  65: [1, 43],
                  69: 82,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  26: 83,
                  47: [1, 66]
              }, {
                  47: [2, 55]
              }, {
                  4: 84,
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  39: [2, 46],
                  44: [2, 46],
                  47: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  47: [2, 20]
              }, {
                  20: 85,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  4: 86,
                  6: 3,
                  14: [2, 46],
                  15: [2, 46],
                  19: [2, 46],
                  29: [2, 46],
                  34: [2, 46],
                  47: [2, 46],
                  48: [2, 46],
                  51: [2, 46],
                  55: [2, 46],
                  60: [2, 46]
              }, {
                  26: 87,
                  47: [1, 66]
              }, {
                  47: [2, 57]
              }, {
                  5: [2, 11],
                  14: [2, 11],
                  15: [2, 11],
                  19: [2, 11],
                  29: [2, 11],
                  34: [2, 11],
                  39: [2, 11],
                  44: [2, 11],
                  47: [2, 11],
                  48: [2, 11],
                  51: [2, 11],
                  55: [2, 11],
                  60: [2, 11]
              }, {
                  15: [2, 49],
                  18: [2, 49]
              }, {
                  20: 74,
                  33: [2, 88],
                  58: 88,
                  63: 89,
                  64: 75,
                  65: [1, 43],
                  69: 90,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  65: [2, 94],
                  66: 91,
                  68: [2, 94],
                  72: [2, 94],
                  80: [2, 94],
                  81: [2, 94],
                  82: [2, 94],
                  83: [2, 94],
                  84: [2, 94],
                  85: [2, 94]
              }, {
                  5: [2, 25],
                  14: [2, 25],
                  15: [2, 25],
                  19: [2, 25],
                  29: [2, 25],
                  34: [2, 25],
                  39: [2, 25],
                  44: [2, 25],
                  47: [2, 25],
                  48: [2, 25],
                  51: [2, 25],
                  55: [2, 25],
                  60: [2, 25]
              }, {
                  20: 92,
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 74,
                  31: 93,
                  33: [2, 60],
                  63: 94,
                  64: 75,
                  65: [1, 43],
                  69: 95,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  75: [2, 60],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 74,
                  33: [2, 66],
                  36: 96,
                  63: 97,
                  64: 75,
                  65: [1, 43],
                  69: 98,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  75: [2, 66],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 74,
                  22: 99,
                  23: [2, 52],
                  63: 100,
                  64: 75,
                  65: [1, 43],
                  69: 101,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  20: 74,
                  33: [2, 92],
                  62: 102,
                  63: 103,
                  64: 75,
                  65: [1, 43],
                  69: 104,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  33: [1, 105]
              }, {
                  33: [2, 79],
                  65: [2, 79],
                  72: [2, 79],
                  80: [2, 79],
                  81: [2, 79],
                  82: [2, 79],
                  83: [2, 79],
                  84: [2, 79],
                  85: [2, 79]
              }, {
                  33: [2, 81]
              }, {
                  23: [2, 27],
                  33: [2, 27],
                  54: [2, 27],
                  65: [2, 27],
                  68: [2, 27],
                  72: [2, 27],
                  75: [2, 27],
                  80: [2, 27],
                  81: [2, 27],
                  82: [2, 27],
                  83: [2, 27],
                  84: [2, 27],
                  85: [2, 27]
              }, {
                  23: [2, 28],
                  33: [2, 28],
                  54: [2, 28],
                  65: [2, 28],
                  68: [2, 28],
                  72: [2, 28],
                  75: [2, 28],
                  80: [2, 28],
                  81: [2, 28],
                  82: [2, 28],
                  83: [2, 28],
                  84: [2, 28],
                  85: [2, 28]
              }, {
                  23: [2, 30],
                  33: [2, 30],
                  54: [2, 30],
                  68: [2, 30],
                  71: 106,
                  72: [1, 107],
                  75: [2, 30]
              }, {
                  23: [2, 98],
                  33: [2, 98],
                  54: [2, 98],
                  68: [2, 98],
                  72: [2, 98],
                  75: [2, 98]
              }, {
                  23: [2, 45],
                  33: [2, 45],
                  54: [2, 45],
                  65: [2, 45],
                  68: [2, 45],
                  72: [2, 45],
                  73: [1, 108],
                  75: [2, 45],
                  80: [2, 45],
                  81: [2, 45],
                  82: [2, 45],
                  83: [2, 45],
                  84: [2, 45],
                  85: [2, 45],
                  87: [2, 45]
              }, {
                  23: [2, 44],
                  33: [2, 44],
                  54: [2, 44],
                  65: [2, 44],
                  68: [2, 44],
                  72: [2, 44],
                  75: [2, 44],
                  80: [2, 44],
                  81: [2, 44],
                  82: [2, 44],
                  83: [2, 44],
                  84: [2, 44],
                  85: [2, 44],
                  87: [2, 44]
              }, {
                  54: [1, 109]
              }, {
                  54: [2, 83],
                  65: [2, 83],
                  72: [2, 83],
                  80: [2, 83],
                  81: [2, 83],
                  82: [2, 83],
                  83: [2, 83],
                  84: [2, 83],
                  85: [2, 83]
              }, {
                  54: [2, 85]
              }, {
                  5: [2, 13],
                  14: [2, 13],
                  15: [2, 13],
                  19: [2, 13],
                  29: [2, 13],
                  34: [2, 13],
                  39: [2, 13],
                  44: [2, 13],
                  47: [2, 13],
                  48: [2, 13],
                  51: [2, 13],
                  55: [2, 13],
                  60: [2, 13]
              }, {
                  38: 55,
                  39: [1, 57],
                  43: 56,
                  44: [1, 58],
                  45: 111,
                  46: 110,
                  47: [2, 76]
              }, {
                  33: [2, 70],
                  40: 112,
                  65: [2, 70],
                  72: [2, 70],
                  75: [2, 70],
                  80: [2, 70],
                  81: [2, 70],
                  82: [2, 70],
                  83: [2, 70],
                  84: [2, 70],
                  85: [2, 70]
              }, {
                  47: [2, 18]
              }, {
                  5: [2, 14],
                  14: [2, 14],
                  15: [2, 14],
                  19: [2, 14],
                  29: [2, 14],
                  34: [2, 14],
                  39: [2, 14],
                  44: [2, 14],
                  47: [2, 14],
                  48: [2, 14],
                  51: [2, 14],
                  55: [2, 14],
                  60: [2, 14]
              }, {
                  33: [1, 113]
              }, {
                  33: [2, 87],
                  65: [2, 87],
                  72: [2, 87],
                  80: [2, 87],
                  81: [2, 87],
                  82: [2, 87],
                  83: [2, 87],
                  84: [2, 87],
                  85: [2, 87]
              }, {
                  33: [2, 89]
              }, {
                  20: 74,
                  63: 115,
                  64: 75,
                  65: [1, 43],
                  67: 114,
                  68: [2, 96],
                  69: 116,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  33: [1, 117]
              }, {
                  32: 118,
                  33: [2, 62],
                  74: 119,
                  75: [1, 120]
              }, {
                  33: [2, 59],
                  65: [2, 59],
                  72: [2, 59],
                  75: [2, 59],
                  80: [2, 59],
                  81: [2, 59],
                  82: [2, 59],
                  83: [2, 59],
                  84: [2, 59],
                  85: [2, 59]
              }, {
                  33: [2, 61],
                  75: [2, 61]
              }, {
                  33: [2, 68],
                  37: 121,
                  74: 122,
                  75: [1, 120]
              }, {
                  33: [2, 65],
                  65: [2, 65],
                  72: [2, 65],
                  75: [2, 65],
                  80: [2, 65],
                  81: [2, 65],
                  82: [2, 65],
                  83: [2, 65],
                  84: [2, 65],
                  85: [2, 65]
              }, {
                  33: [2, 67],
                  75: [2, 67]
              }, {
                  23: [1, 123]
              }, {
                  23: [2, 51],
                  65: [2, 51],
                  72: [2, 51],
                  80: [2, 51],
                  81: [2, 51],
                  82: [2, 51],
                  83: [2, 51],
                  84: [2, 51],
                  85: [2, 51]
              }, {
                  23: [2, 53]
              }, {
                  33: [1, 124]
              }, {
                  33: [2, 91],
                  65: [2, 91],
                  72: [2, 91],
                  80: [2, 91],
                  81: [2, 91],
                  82: [2, 91],
                  83: [2, 91],
                  84: [2, 91],
                  85: [2, 91]
              }, {
                  33: [2, 93]
              }, {
                  5: [2, 22],
                  14: [2, 22],
                  15: [2, 22],
                  19: [2, 22],
                  29: [2, 22],
                  34: [2, 22],
                  39: [2, 22],
                  44: [2, 22],
                  47: [2, 22],
                  48: [2, 22],
                  51: [2, 22],
                  55: [2, 22],
                  60: [2, 22]
              }, {
                  23: [2, 99],
                  33: [2, 99],
                  54: [2, 99],
                  68: [2, 99],
                  72: [2, 99],
                  75: [2, 99]
              }, {
                  73: [1, 108]
              }, {
                  20: 74,
                  63: 125,
                  64: 75,
                  65: [1, 43],
                  72: [1, 35],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  5: [2, 23],
                  14: [2, 23],
                  15: [2, 23],
                  19: [2, 23],
                  29: [2, 23],
                  34: [2, 23],
                  39: [2, 23],
                  44: [2, 23],
                  47: [2, 23],
                  48: [2, 23],
                  51: [2, 23],
                  55: [2, 23],
                  60: [2, 23]
              }, {
                  47: [2, 19]
              }, {
                  47: [2, 77]
              }, {
                  20: 74,
                  33: [2, 72],
                  41: 126,
                  63: 127,
                  64: 75,
                  65: [1, 43],
                  69: 128,
                  70: 76,
                  71: 77,
                  72: [1, 78],
                  75: [2, 72],
                  78: 26,
                  79: 27,
                  80: [1, 28],
                  81: [1, 29],
                  82: [1, 30],
                  83: [1, 31],
                  84: [1, 32],
                  85: [1, 34],
                  86: 33
              }, {
                  5: [2, 24],
                  14: [2, 24],
                  15: [2, 24],
                  19: [2, 24],
                  29: [2, 24],
                  34: [2, 24],
                  39: [2, 24],
                  44: [2, 24],
                  47: [2, 24],
                  48: [2, 24],
                  51: [2, 24],
                  55: [2, 24],
                  60: [2, 24]
              }, {
                  68: [1, 129]
              }, {
                  65: [2, 95],
                  68: [2, 95],
                  72: [2, 95],
                  80: [2, 95],
                  81: [2, 95],
                  82: [2, 95],
                  83: [2, 95],
                  84: [2, 95],
                  85: [2, 95]
              }, {
                  68: [2, 97]
              }, {
                  5: [2, 21],
                  14: [2, 21],
                  15: [2, 21],
                  19: [2, 21],
                  29: [2, 21],
                  34: [2, 21],
                  39: [2, 21],
                  44: [2, 21],
                  47: [2, 21],
                  48: [2, 21],
                  51: [2, 21],
                  55: [2, 21],
                  60: [2, 21]
              }, {
                  33: [1, 130]
              }, {
                  33: [2, 63]
              }, {
                  72: [1, 132],
                  76: 131
              }, {
                  33: [1, 133]
              }, {
                  33: [2, 69]
              }, {
                  15: [2, 12],
                  18: [2, 12]
              }, {
                  14: [2, 26],
                  15: [2, 26],
                  19: [2, 26],
                  29: [2, 26],
                  34: [2, 26],
                  47: [2, 26],
                  48: [2, 26],
                  51: [2, 26],
                  55: [2, 26],
                  60: [2, 26]
              }, {
                  23: [2, 31],
                  33: [2, 31],
                  54: [2, 31],
                  68: [2, 31],
                  72: [2, 31],
                  75: [2, 31]
              }, {
                  33: [2, 74],
                  42: 134,
                  74: 135,
                  75: [1, 120]
              }, {
                  33: [2, 71],
                  65: [2, 71],
                  72: [2, 71],
                  75: [2, 71],
                  80: [2, 71],
                  81: [2, 71],
                  82: [2, 71],
                  83: [2, 71],
                  84: [2, 71],
                  85: [2, 71]
              }, {
                  33: [2, 73],
                  75: [2, 73]
              }, {
                  23: [2, 29],
                  33: [2, 29],
                  54: [2, 29],
                  65: [2, 29],
                  68: [2, 29],
                  72: [2, 29],
                  75: [2, 29],
                  80: [2, 29],
                  81: [2, 29],
                  82: [2, 29],
                  83: [2, 29],
                  84: [2, 29],
                  85: [2, 29]
              }, {
                  14: [2, 15],
                  15: [2, 15],
                  19: [2, 15],
                  29: [2, 15],
                  34: [2, 15],
                  39: [2, 15],
                  44: [2, 15],
                  47: [2, 15],
                  48: [2, 15],
                  51: [2, 15],
                  55: [2, 15],
                  60: [2, 15]
              }, {
                  72: [1, 137],
                  77: [1, 136]
              }, {
                  72: [2, 100],
                  77: [2, 100]
              }, {
                  14: [2, 16],
                  15: [2, 16],
                  19: [2, 16],
                  29: [2, 16],
                  34: [2, 16],
                  44: [2, 16],
                  47: [2, 16],
                  48: [2, 16],
                  51: [2, 16],
                  55: [2, 16],
                  60: [2, 16]
              }, {
                  33: [1, 138]
              }, {
                  33: [2, 75]
              }, {
                  33: [2, 32]
              }, {
                  72: [2, 101],
                  77: [2, 101]
              }, {
                  14: [2, 17],
                  15: [2, 17],
                  19: [2, 17],
                  29: [2, 17],
                  34: [2, 17],
                  39: [2, 17],
                  44: [2, 17],
                  47: [2, 17],
                  48: [2, 17],
                  51: [2, 17],
                  55: [2, 17],
                  60: [2, 17]
              }],
              defaultActions: {
                  4: [2, 1],
                  54: [2, 55],
                  56: [2, 20],
                  60: [2, 57],
                  73: [2, 81],
                  82: [2, 85],
                  86: [2, 18],
                  90: [2, 89],
                  101: [2, 53],
                  104: [2, 93],
                  110: [2, 19],
                  111: [2, 77],
                  116: [2, 97],
                  119: [2, 63],
                  122: [2, 69],
                  135: [2, 75],
                  136: [2, 32]
              },
              parseError: function(t, n) {
                  throw new Error(t)
              },
              parse: function(t) {
                  var n = this,
                      e = [0],
                      r = [null],
                      i = [],
                      a = this.table,
                      o = "",
                      d = 0,
                      s = 0,
                      p = 0;
                  this.lexer.setInput(t), this.lexer.yy = this.yy, this.yy.lexer = this.lexer, this.yy.parser = this, void 0 === this.lexer.yylloc && (this.lexer.yylloc = {});
                  var A = this.lexer.yylloc;
                  i.push(A);
                  var c = this.lexer.options && this.lexer.options.ranges;
                  "function" == typeof this.yy.parseError && (this.parseError = this.yy.parseError);
                  for (var l, C, g, h, m, f, u, x, b, B, y = {};;) {
                      if (g = e[e.length - 1], this.defaultActions[g] ? h = this.defaultActions[g] : (null == l && (B = void 0, "number" != typeof(B = n.lexer.lex() || 1) && (B = n.symbols_[B] || B), l = B), h = a[g] && a[g][l]), void 0 === h || !h.length || !h[0]) {
                          var v = "";
                          if (!p) {
                              for (f in b = [], a[g]) this.terminals_[f] && f > 2 && b.push("'" + this.terminals_[f] + "'");
                              v = this.lexer.showPosition ? "Parse error on line " + (d + 1) + ":\n" + this.lexer.showPosition() + "\nExpecting " + b.join(", ") + ", got '" + (this.terminals_[l] || l) + "'" : "Parse error on line " + (d + 1) + ": Unexpected " + (1 == l ? "end of input" : "'" + (this.terminals_[l] || l) + "'"), this.parseError(v, {
                                  text: this.lexer.match,
                                  token: this.terminals_[l] || l,
                                  line: this.lexer.yylineno,
                                  loc: A,
                                  expected: b
                              })
                          }
                      }
                      if (h[0] instanceof Array && h.length > 1) throw new Error("Parse Error: multiple actions possible at state: " + g + ", token: " + l);
                      switch (h[0]) {
                          case 1:
                              e.push(l), r.push(this.lexer.yytext), i.push(this.lexer.yylloc), e.push(h[1]), l = null, C ? (l = C, C = null) : (s = this.lexer.yyleng, o = this.lexer.yytext, d = this.lexer.yylineno, A = this.lexer.yylloc, p > 0 && p--);
                              break;
                          case 2:
                              if (u = this.productions_[h[1]][1], y.$ = r[r.length - u], y._$ = {
                                      first_line: i[i.length - (u || 1)].first_line,
                                      last_line: i[i.length - 1].last_line,
                                      first_column: i[i.length - (u || 1)].first_column,
                                      last_column: i[i.length - 1].last_column
                                  }, c && (y._$.range = [i[i.length - (u || 1)].range[0], i[i.length - 1].range[1]]), void 0 !== (m = this.performAction.call(y, o, s, d, this.yy, h[1], r, i))) return m;
                              u && (e = e.slice(0, -1 * u * 2), r = r.slice(0, -1 * u), i = i.slice(0, -1 * u)), e.push(this.productions_[h[1]][0]), r.push(y.$), i.push(y._$), x = a[e[e.length - 2]][e[e.length - 1]], e.push(x);
                              break;
                          case 3:
                              return !0
                      }
                  }
                  return !0
              }
          },
          n = function() {
              var t = {
                  EOF: 1,
                  parseError: function(t, n) {
                      if (!this.yy.parser) throw new Error(t);
                      this.yy.parser.parseError(t, n)
                  },
                  setInput: function(t) {
                      return this._input = t, this._more = this._less = this.done = !1, this.yylineno = this.yyleng = 0, this.yytext = this.matched = this.match = "", this.conditionStack = ["INITIAL"], this.yylloc = {
                          first_line: 1,
                          first_column: 0,
                          last_line: 1,
                          last_column: 0
                      }, this.options.ranges && (this.yylloc.range = [0, 0]), this.offset = 0, this
                  },
                  input: function() {
                      var t = this._input[0];
                      return this.yytext += t, this.yyleng++, this.offset++, this.match += t, this.matched += t, t.match(/(?:\r\n?|\n).*/g) ? (this.yylineno++, this.yylloc.last_line++) : this.yylloc.last_column++, this.options.ranges && this.yylloc.range[1]++, this._input = this._input.slice(1), t
                  },
                  unput: function(t) {
                      var n = t.length,
                          e = t.split(/(?:\r\n?|\n)/g);
                      this._input = t + this._input, this.yytext = this.yytext.substr(0, this.yytext.length - n - 1), this.offset -= n;
                      var r = this.match.split(/(?:\r\n?|\n)/g);
                      this.match = this.match.substr(0, this.match.length - 1), this.matched = this.matched.substr(0, this.matched.length - 1), e.length - 1 && (this.yylineno -= e.length - 1);
                      var i = this.yylloc.range;
                      return this.yylloc = {
                          first_line: this.yylloc.first_line,
                          last_line: this.yylineno + 1,
                          first_column: this.yylloc.first_column,
                          last_column: e ? (e.length === r.length ? this.yylloc.first_column : 0) + r[r.length - e.length].length - e[0].length : this.yylloc.first_column - n
                      }, this.options.ranges && (this.yylloc.range = [i[0], i[0] + this.yyleng - n]), this
                  },
                  more: function() {
                      return this._more = !0, this
                  },
                  less: function(t) {
                      this.unput(this.match.slice(t))
                  },
                  pastInput: function() {
                      var t = this.matched.substr(0, this.matched.length - this.match.length);
                      return (t.length > 20 ? "..." : "") + t.substr(-20).replace(/\n/g, "")
                  },
                  upcomingInput: function() {
                      var t = this.match;
                      return t.length < 20 && (t += this._input.substr(0, 20 - t.length)), (t.substr(0, 20) + (t.length > 20 ? "..." : "")).replace(/\n/g, "")
                  },
                  showPosition: function() {
                      var t = this.pastInput(),
                          n = new Array(t.length + 1).join("-");
                      return t + this.upcomingInput() + "\n" + n + "^"
                  },
                  next: function() {
                      if (this.done) return this.EOF;
                      var t, n, e, r, i;
                      this._input || (this.done = !0), this._more || (this.yytext = "", this.match = "");
                      for (var a = this._currentRules(), o = 0; o < a.length && (!(e = this._input.match(this.rules[a[o]])) || n && !(e[0].length > n[0].length) || (n = e, r = o, this.options.flex)); o++);
                      return n ? ((i = n[0].match(/(?:\r\n?|\n).*/g)) && (this.yylineno += i.length), this.yylloc = {
                          first_line: this.yylloc.last_line,
                          last_line: this.yylineno + 1,
                          first_column: this.yylloc.last_column,
                          last_column: i ? i[i.length - 1].length - i[i.length - 1].match(/\r?\n?/)[0].length : this.yylloc.last_column + n[0].length
                      }, this.yytext += n[0], this.match += n[0], this.matches = n, this.yyleng = this.yytext.length, this.options.ranges && (this.yylloc.range = [this.offset, this.offset += this.yyleng]), this._more = !1, this._input = this._input.slice(n[0].length), this.matched += n[0], t = this.performAction.call(this, this.yy, this, a[r], this.conditionStack[this.conditionStack.length - 1]), this.done && this._input && (this.done = !1), t || void 0) : "" === this._input ? this.EOF : this.parseError("Lexical error on line " + (this.yylineno + 1) + ". Unrecognized text.\n" + this.showPosition(), {
                          text: "",
                          token: null,
                          line: this.yylineno
                      })
                  },
                  lex: function() {
                      var t = this.next();
                      return void 0 !== t ? t : this.lex()
                  },
                  begin: function(t) {
                      this.conditionStack.push(t)
                  },
                  popState: function() {
                      return this.conditionStack.pop()
                  },
                  _currentRules: function() {
                      return this.conditions[this.conditionStack[this.conditionStack.length - 1]].rules
                  },
                  topState: function() {
                      return this.conditionStack[this.conditionStack.length - 2]
                  },
                  pushState: function(t) {
                      this.begin(t)
                  },
                  options: {},
                  performAction: function(t, n, e, r) {
                      function i(t, e) {
                          return n.yytext = n.yytext.substring(t, n.yyleng - e + t)
                      }
                      switch (e) {
                          case 0:
                              if ("\\\\" === n.yytext.slice(-2) ? (i(0, 1), this.begin("mu")) : "\\" === n.yytext.slice(-1) ? (i(0, 1), this.begin("emu")) : this.begin("mu"), n.yytext) return 15;
                              break;
                          case 1:
                              return 15;
                          case 2:
                              return this.popState(), 15;
                          case 3:
                              return this.begin("raw"), 15;
                          case 4:
                              return this.popState(), "raw" === this.conditionStack[this.conditionStack.length - 1] ? 15 : (i(5, 9), "END_RAW_BLOCK");
                          case 5:
                              return 15;
                          case 6:
                              return this.popState(), 14;
                          case 7:
                              return 65;
                          case 8:
                              return 68;
                          case 9:
                              return 19;
                          case 10:
                              return this.popState(), this.begin("raw"), 23;
                          case 11:
                              return 55;
                          case 12:
                              return 60;
                          case 13:
                              return 29;
                          case 14:
                              return 47;
                          case 15:
                          case 16:
                              return this.popState(), 44;
                          case 17:
                              return 34;
                          case 18:
                              return 39;
                          case 19:
                              return 51;
                          case 20:
                              return 48;
                          case 21:
                              this.unput(n.yytext), this.popState(), this.begin("com");
                              break;
                          case 22:
                              return this.popState(), 14;
                          case 23:
                              return 48;
                          case 24:
                              return 73;
                          case 25:
                          case 26:
                              return 72;
                          case 27:
                              return 87;
                          case 28:
                              break;
                          case 29:
                              return this.popState(), 54;
                          case 30:
                              return this.popState(), 33;
                          case 31:
                              return n.yytext = i(1, 2).replace(/\\"/g, '"'), 80;
                          case 32:
                              return n.yytext = i(1, 2).replace(/\\'/g, "'"), 80;
                          case 33:
                              return 85;
                          case 34:
                          case 35:
                              return 82;
                          case 36:
                              return 83;
                          case 37:
                              return 84;
                          case 38:
                              return 81;
                          case 39:
                              return 75;
                          case 40:
                              return 77;
                          case 41:
                              return 72;
                          case 42:
                              return n.yytext = n.yytext.replace(/\\([\\\]])/g, "$1"), 72;
                          case 43:
                              return "INVALID";
                          case 44:
                              return 5
                      }
                  },
                  rules: [/^(?:[^\x00]*?(?=(\{\{)))/, /^(?:[^\x00]+)/, /^(?:[^\x00]{2,}?(?=(\{\{|\\\{\{|\\\\\{\{|$)))/, /^(?:\{\{\{\{(?=[^\/]))/, /^(?:\{\{\{\{\/[^\s!"#%-,\.\/;->@\[-\^`\{-~]+(?=[=}\s\/.])\}\}\}\})/, /^(?:[^\x00]+?(?=(\{\{\{\{)))/, /^(?:[\s\S]*?--(~)?\}\})/, /^(?:\()/, /^(?:\))/, /^(?:\{\{\{\{)/, /^(?:\}\}\}\})/, /^(?:\{\{(~)?>)/, /^(?:\{\{(~)?#>)/, /^(?:\{\{(~)?#\*?)/, /^(?:\{\{(~)?\/)/, /^(?:\{\{(~)?\^\s*(~)?\}\})/, /^(?:\{\{(~)?\s*else\s*(~)?\}\})/, /^(?:\{\{(~)?\^)/, /^(?:\{\{(~)?\s*else\b)/, /^(?:\{\{(~)?\{)/, /^(?:\{\{(~)?&)/, /^(?:\{\{(~)?!--)/, /^(?:\{\{(~)?![\s\S]*?\}\})/, /^(?:\{\{(~)?\*?)/, /^(?:=)/, /^(?:\.\.)/, /^(?:\.(?=([=~}\s\/.)|])))/, /^(?:[\/.])/, /^(?:\s+)/, /^(?:\}(~)?\}\})/, /^(?:(~)?\}\})/, /^(?:"(\\["]|[^"])*")/, /^(?:'(\\[']|[^'])*')/, /^(?:@)/, /^(?:true(?=([~}\s)])))/, /^(?:false(?=([~}\s)])))/, /^(?:undefined(?=([~}\s)])))/, /^(?:null(?=([~}\s)])))/, /^(?:-?[0-9]+(?:\.[0-9]+)?(?=([~}\s)])))/, /^(?:as\s+\|)/, /^(?:\|)/, /^(?:([^\s!"#%-,\.\/;->@\[-\^`\{-~]+(?=([=~}\s\/.)|]))))/, /^(?:\[(\\\]|[^\]])*\])/, /^(?:.)/, /^(?:$)/],
                  conditions: {
                      mu: {
                          rules: [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44],
                          inclusive: !1
                      },
                      emu: {
                          rules: [2],
                          inclusive: !1
                      },
                      com: {
                          rules: [6],
                          inclusive: !1
                      },
                      raw: {
                          rules: [3, 4, 5],
                          inclusive: !1
                      },
                      INITIAL: {
                          rules: [0, 1, 44],
                          inclusive: !0
                      }
                  }
              };
              return t
          }();

      function e() {
          this.yy = {}
      }
      return t.lexer = n, e.prototype = t, t.Parser = e, new e
  }();
  n.default = r, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r, i = e(21),
      a = (r = i) && r.__esModule ? r : {
          default: r
      };

  function o() {
      var t = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0];
      this.options = t
  }

  function d(t, n, e) {
      void 0 === n && (n = t.length);
      var r = t[n - 1],
          i = t[n - 2];
      return r ? "ContentStatement" === r.type ? (i || !e ? /\r?\n\s*?$/ : /(^|\r?\n)\s*?$/).test(r.original) : void 0 : e
  }

  function s(t, n, e) {
      void 0 === n && (n = -1);
      var r = t[n + 1],
          i = t[n + 2];
      return r ? "ContentStatement" === r.type ? (i || !e ? /^\s*?\r?\n/ : /^\s*?(\r?\n|$)/).test(r.original) : void 0 : e
  }

  function p(t, n, e) {
      var r = t[null == n ? 0 : n + 1];
      if (r && "ContentStatement" === r.type && (e || !r.rightStripped)) {
          var i = r.value;
          r.value = r.value.replace(e ? /^\s+/ : /^[ \t]*\r?\n?/, ""), r.rightStripped = r.value !== i
      }
  }

  function A(t, n, e) {
      var r = t[null == n ? t.length - 1 : n - 1];
      if (r && "ContentStatement" === r.type && (e || !r.leftStripped)) {
          var i = r.value;
          return r.value = r.value.replace(e ? /\s+$/ : /[ \t]+$/, ""), r.leftStripped = r.value !== i, r.leftStripped
      }
  }
  o.prototype = new a.default, o.prototype.Program = function(t) {
      var n = !this.options.ignoreStandalone,
          e = !this.isRootSeen;
      this.isRootSeen = !0;
      for (var r = t.body, i = 0, a = r.length; i < a; i++) {
          var o = r[i],
              c = this.accept(o);
          if (c) {
              var l = d(r, i, e),
                  C = s(r, i, e),
                  g = c.openStandalone && l,
                  h = c.closeStandalone && C,
                  m = c.inlineStandalone && l && C;
              c.close && p(r, i, !0), c.open && A(r, i, !0), n && m && (p(r, i), A(r, i) && "PartialStatement" === o.type && (o.indent = /([ \t]+$)/.exec(r[i - 1].original)[1])), n && g && (p((o.program || o.inverse).body), A(r, i)), n && h && (p(r, i), A((o.inverse || o.program).body))
          }
      }
      return t
  }, o.prototype.BlockStatement = o.prototype.DecoratorBlock = o.prototype.PartialBlockStatement = function(t) {
      this.accept(t.program), this.accept(t.inverse);
      var n = t.program || t.inverse,
          e = t.program && t.inverse,
          r = e,
          i = e;
      if (e && e.chained)
          for (r = e.body[0].program; i.chained;) i = i.body[i.body.length - 1].program;
      var a = {
          open: t.openStrip.open,
          close: t.closeStrip.close,
          openStandalone: s(n.body),
          closeStandalone: d((r || n).body)
      };
      if (t.openStrip.close && p(n.body, null, !0), e) {
          var o = t.inverseStrip;
          o.open && A(n.body, null, !0), o.close && p(r.body, null, !0), t.closeStrip.open && A(i.body, null, !0), !this.options.ignoreStandalone && d(n.body) && s(r.body) && (A(n.body), p(r.body))
      } else t.closeStrip.open && A(n.body, null, !0);
      return a
  }, o.prototype.Decorator = o.prototype.MustacheStatement = function(t) {
      return t.strip
  }, o.prototype.PartialStatement = o.prototype.CommentStatement = function(t) {
      var n = t.strip || {};
      return {
          inlineStandalone: !0,
          open: n.open,
          close: n.close
      }
  }, n.default = o, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0, n.SourceLocation = function(t, n) {
      this.source = t, this.start = {
          line: n.first_line,
          column: n.first_column
      }, this.end = {
          line: n.last_line,
          column: n.last_column
      }
  }, n.id = function(t) {
      return /^\[.*\]$/.test(t) ? t.substring(1, t.length - 1) : t
  }, n.stripFlags = function(t, n) {
      return {
          open: "~" === t.charAt(2),
          close: "~" === n.charAt(n.length - 3)
      }
  }, n.stripComment = function(t) {
      return t.replace(/^\{\{~?!-?-?/, "").replace(/-?-?~?\}\}$/, "")
  }, n.preparePath = function(t, n, e) {
      e = this.locInfo(e);
      for (var r = t ? "@" : "", i = [], o = 0, d = 0, s = n.length; d < s; d++) {
          var p = n[d].part,
              A = n[d].original !== p;
          if (r += (n[d].separator || "") + p, A || ".." !== p && "." !== p && "this" !== p) i.push(p);
          else {
              if (i.length > 0) throw new a.default("Invalid path: " + r, {
                  loc: e
              });
              ".." === p && o++
          }
      }
      return {
          type: "PathExpression",
          data: t,
          depth: o,
          parts: i,
          original: r,
          loc: e
      }
  }, n.prepareMustache = function(t, n, e, r, i, a) {
      var o = r.charAt(3) || r.charAt(2),
          d = "{" !== o && "&" !== o;
      return {
          type: /\*/.test(r) ? "Decorator" : "MustacheStatement",
          path: t,
          params: n,
          hash: e,
          escaped: d,
          strip: i,
          loc: this.locInfo(a)
      }
  }, n.prepareRawBlock = function(t, n, e, r) {
      o(t, e), r = this.locInfo(r);
      var i = {
          type: "Program",
          body: n,
          strip: {},
          loc: r
      };
      return {
          type: "BlockStatement",
          path: t.path,
          params: t.params,
          hash: t.hash,
          program: i,
          openStrip: {},
          inverseStrip: {},
          closeStrip: {},
          loc: r
      }
  }, n.prepareBlock = function(t, n, e, r, i, d) {
      r && r.path && o(t, r);
      var s = /\*/.test(t.open);
      n.blockParams = t.blockParams;
      var p = void 0,
          A = void 0;
      if (e) {
          if (s) throw new a.default("Unexpected inverse block on decorator", e);
          e.chain && (e.program.body[0].closeStrip = r.strip), A = e.strip, p = e.program
      }
      i && (i = p, p = n, n = i);
      return {
          type: s ? "DecoratorBlock" : "BlockStatement",
          path: t.path,
          params: t.params,
          hash: t.hash,
          program: n,
          inverse: p,
          openStrip: t.strip,
          inverseStrip: A,
          closeStrip: r && r.strip,
          loc: this.locInfo(d)
      }
  }, n.prepareProgram = function(t, n) {
      if (!n && t.length) {
          var e = t[0].loc,
              r = t[t.length - 1].loc;
          e && r && (n = {
              source: e.source,
              start: {
                  line: e.start.line,
                  column: e.start.column
              },
              end: {
                  line: r.end.line,
                  column: r.end.column
              }
          })
      }
      return {
          type: "Program",
          body: t,
          strip: {},
          loc: n
      }
  }, n.preparePartialBlock = function(t, n, e, r) {
      return o(t, e), {
          type: "PartialBlockStatement",
          name: t.path,
          params: t.params,
          hash: t.hash,
          program: n,
          openStrip: t.strip,
          closeStrip: e && e.strip,
          loc: this.locInfo(r)
      }
  };
  var r, i = e(3),
      a = (r = i) && r.__esModule ? r : {
          default: r
      };

  function o(t, n) {
      if (n = n.path ? n.path.original : n, t.path.original !== n) {
          var e = {
              loc: t.path.loc
          };
          throw new a.default(t.path.original + " doesn't match " + n, e)
      }
  }
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0, n.Compiler = s, n.precompile = function(t, n, e) {
      if (null == t || "string" != typeof t && "Program" !== t.type) throw new i.default("You must pass a string or Handlebars AST to Handlebars.precompile. You passed " + t);
      "data" in (n = n || {}) || (n.data = !0);
      n.compat && (n.useDepths = !0);
      var r = e.parse(t, n),
          a = (new e.Compiler).compile(r, n);
      return (new e.JavaScriptCompiler).compile(a, n)
  }, n.compile = function(t, n, e) {
      void 0 === n && (n = {});
      if (null == t || "string" != typeof t && "Program" !== t.type) throw new i.default("You must pass a string or Handlebars AST to Handlebars.compile. You passed " + t);
      "data" in (n = a.extend({}, n)) || (n.data = !0);
      n.compat && (n.useDepths = !0);
      var r = void 0;

      function o() {
          var r = e.parse(t, n),
              i = (new e.Compiler).compile(r, n),
              a = (new e.JavaScriptCompiler).compile(i, n, void 0, !0);
          return e.template(a)
      }

      function d(t, n) {
          return r || (r = o()), r.call(this, t, n)
      }
      return d._setup = function(t) {
          return r || (r = o()), r._setup(t)
      }, d._child = function(t, n, e, i) {
          return r || (r = o()), r._child(t, n, e, i)
      }, d
  };
  var i = r(e(3)),
      a = e(2),
      o = r(e(20)),
      d = [].slice;

  function s() {}

  function p(t, n) {
      if (t === n) return !0;
      if (a.isArray(t) && a.isArray(n) && t.length === n.length) {
          for (var e = 0; e < t.length; e++)
              if (!p(t[e], n[e])) return !1;
          return !0
      }
  }

  function A(t) {
      if (!t.path.parts) {
          var n = t.path;
          t.path = {
              type: "PathExpression",
              data: !1,
              depth: 0,
              parts: [n.original + ""],
              original: n.original + "",
              loc: n.loc
          }
      }
  }
  s.prototype = {
      compiler: s,
      equals: function(t) {
          var n = this.opcodes.length;
          if (t.opcodes.length !== n) return !1;
          for (var e = 0; e < n; e++) {
              var r = this.opcodes[e],
                  i = t.opcodes[e];
              if (r.opcode !== i.opcode || !p(r.args, i.args)) return !1
          }
          n = this.children.length;
          for (e = 0; e < n; e++)
              if (!this.children[e].equals(t.children[e])) return !1;
          return !0
      },
      guid: 0,
      compile: function(t, n) {
          return this.sourceNode = [], this.opcodes = [], this.children = [], this.options = n, this.stringParams = n.stringParams, this.trackIds = n.trackIds, n.blockParams = n.blockParams || [], n.knownHelpers = a.extend(Object.create(null), {
              helperMissing: !0,
              blockHelperMissing: !0,
              each: !0,
              if: !0,
              unless: !0,
              with: !0,
              log: !0,
              lookup: !0
          }, n.knownHelpers), this.accept(t)
      },
      compileProgram: function(t) {
          var n = (new this.compiler).compile(t, this.options),
              e = this.guid++;
          return this.usePartial = this.usePartial || n.usePartial, this.children[e] = n, this.useDepths = this.useDepths || n.useDepths, e
      },
      accept: function(t) {
          if (!this[t.type]) throw new i.default("Unknown type: " + t.type, t);
          this.sourceNode.unshift(t);
          var n = this[t.type](t);
          return this.sourceNode.shift(), n
      },
      Program: function(t) {
          this.options.blockParams.unshift(t.blockParams);
          for (var n = t.body, e = n.length, r = 0; r < e; r++) this.accept(n[r]);
          return this.options.blockParams.shift(), this.isSimple = 1 === e, this.blockParams = t.blockParams ? t.blockParams.length : 0, this
      },
      BlockStatement: function(t) {
          A(t);
          var n = t.program,
              e = t.inverse;
          n = n && this.compileProgram(n), e = e && this.compileProgram(e);
          var r = this.classifySexpr(t);
          "helper" === r ? this.helperSexpr(t, n, e) : "simple" === r ? (this.simpleSexpr(t), this.opcode("pushProgram", n), this.opcode("pushProgram", e), this.opcode("emptyHash"), this.opcode("blockValue", t.path.original)) : (this.ambiguousSexpr(t, n, e), this.opcode("pushProgram", n), this.opcode("pushProgram", e), this.opcode("emptyHash"), this.opcode("ambiguousBlockValue")), this.opcode("append")
      },
      DecoratorBlock: function(t) {
          var n = t.program && this.compileProgram(t.program),
              e = this.setupFullMustacheParams(t, n, void 0),
              r = t.path;
          this.useDecorators = !0, this.opcode("registerDecorator", e.length, r.original)
      },
      PartialStatement: function(t) {
          this.usePartial = !0;
          var n = t.program;
          n && (n = this.compileProgram(t.program));
          var e = t.params;
          if (e.length > 1) throw new i.default("Unsupported number of partial arguments: " + e.length, t);
          e.length || (this.options.explicitPartialContext ? this.opcode("pushLiteral", "undefined") : e.push({
              type: "PathExpression",
              parts: [],
              depth: 0
          }));
          var r = t.name.original,
              a = "SubExpression" === t.name.type;
          a && this.accept(t.name), this.setupFullMustacheParams(t, n, void 0, !0);
          var o = t.indent || "";
          this.options.preventIndent && o && (this.opcode("appendContent", o), o = ""), this.opcode("invokePartial", a, r, o), this.opcode("append")
      },
      PartialBlockStatement: function(t) {
          this.PartialStatement(t)
      },
      MustacheStatement: function(t) {
          this.SubExpression(t), t.escaped && !this.options.noEscape ? this.opcode("appendEscaped") : this.opcode("append")
      },
      Decorator: function(t) {
          this.DecoratorBlock(t)
      },
      ContentStatement: function(t) {
          t.value && this.opcode("appendContent", t.value)
      },
      CommentStatement: function() {},
      SubExpression: function(t) {
          A(t);
          var n = this.classifySexpr(t);
          "simple" === n ? this.simpleSexpr(t) : "helper" === n ? this.helperSexpr(t) : this.ambiguousSexpr(t)
      },
      ambiguousSexpr: function(t, n, e) {
          var r = t.path,
              i = r.parts[0],
              a = null != n || null != e;
          this.opcode("getContext", r.depth), this.opcode("pushProgram", n), this.opcode("pushProgram", e), r.strict = !0, this.accept(r), this.opcode("invokeAmbiguous", i, a)
      },
      simpleSexpr: function(t) {
          var n = t.path;
          n.strict = !0, this.accept(n), this.opcode("resolvePossibleLambda")
      },
      helperSexpr: function(t, n, e) {
          var r = this.setupFullMustacheParams(t, n, e),
              a = t.path,
              d = a.parts[0];
          if (this.options.knownHelpers[d]) this.opcode("invokeKnownHelper", r.length, d);
          else {
              if (this.options.knownHelpersOnly) throw new i.default("You specified knownHelpersOnly, but used the unknown helper " + d, t);
              a.strict = !0, a.falsy = !0, this.accept(a), this.opcode("invokeHelper", r.length, a.original, o.default.helpers.simpleId(a))
          }
      },
      PathExpression: function(t) {
          this.addDepth(t.depth), this.opcode("getContext", t.depth);
          var n = t.parts[0],
              e = o.default.helpers.scopedId(t),
              r = !t.depth && !e && this.blockParamIndex(n);
          r ? this.opcode("lookupBlockParam", r, t.parts) : n ? t.data ? (this.options.data = !0, this.opcode("lookupData", t.depth, t.parts, t.strict)) : this.opcode("lookupOnContext", t.parts, t.falsy, t.strict, e) : this.opcode("pushContext")
      },
      StringLiteral: function(t) {
          this.opcode("pushString", t.value)
      },
      NumberLiteral: function(t) {
          this.opcode("pushLiteral", t.value)
      },
      BooleanLiteral: function(t) {
          this.opcode("pushLiteral", t.value)
      },
      UndefinedLiteral: function() {
          this.opcode("pushLiteral", "undefined")
      },
      NullLiteral: function() {
          this.opcode("pushLiteral", "null")
      },
      Hash: function(t) {
          var n = t.pairs,
              e = 0,
              r = n.length;
          for (this.opcode("pushHash"); e < r; e++) this.pushParam(n[e].value);
          for (; e--;) this.opcode("assignToHash", n[e].key);
          this.opcode("popHash")
      },
      opcode: function(t) {
          this.opcodes.push({
              opcode: t,
              args: d.call(arguments, 1),
              loc: this.sourceNode[0].loc
          })
      },
      addDepth: function(t) {
          t && (this.useDepths = !0)
      },
      classifySexpr: function(t) {
          var n = o.default.helpers.simpleId(t.path),
              e = n && !!this.blockParamIndex(t.path.parts[0]),
              r = !e && o.default.helpers.helperExpression(t),
              i = !e && (r || n);
          if (i && !r) {
              var a = t.path.parts[0],
                  d = this.options;
              d.knownHelpers[a] ? r = !0 : d.knownHelpersOnly && (i = !1)
          }
          return r ? "helper" : i ? "ambiguous" : "simple"
      },
      pushParams: function(t) {
          for (var n = 0, e = t.length; n < e; n++) this.pushParam(t[n])
      },
      pushParam: function(t) {
          var n = null != t.value ? t.value : t.original || "";
          if (this.stringParams) n.replace && (n = n.replace(/^(\.?\.\/)*/g, "").replace(/\//g, ".")), t.depth && this.addDepth(t.depth), this.opcode("getContext", t.depth || 0), this.opcode("pushStringParam", n, t.type), "SubExpression" === t.type && this.accept(t);
          else {
              if (this.trackIds) {
                  var e = void 0;
                  if (!t.parts || o.default.helpers.scopedId(t) || t.depth || (e = this.blockParamIndex(t.parts[0])), e) {
                      var r = t.parts.slice(1).join(".");
                      this.opcode("pushId", "BlockParam", e, r)
                  } else(n = t.original || n).replace && (n = n.replace(/^this(?:\.|$)/, "").replace(/^\.\//, "").replace(/^\.$/, "")), this.opcode("pushId", t.type, n)
              }
              this.accept(t)
          }
      },
      setupFullMustacheParams: function(t, n, e, r) {
          var i = t.params;
          return this.pushParams(i), this.opcode("pushProgram", n), this.opcode("pushProgram", e), t.hash ? this.accept(t.hash) : this.opcode("emptyHash", r), i
      },
      blockParamIndex: function(t) {
          for (var n = 0, e = this.options.blockParams.length; n < e; n++) {
              var r = this.options.blockParams[n],
                  i = r && a.indexOf(r, t);
              if (r && i >= 0) return [n, i]
          }
      }
  }
}, function(t, n, e) {
  "use strict";

  function r(t) {
      return t && t.__esModule ? t : {
          default: t
      }
  }
  n.__esModule = !0;
  var i = e(10),
      a = r(e(3)),
      o = e(2),
      d = r(e(60));

  function s(t) {
      this.value = t
  }

  function p() {}
  p.prototype = {
          nameLookup: function(t, n) {
              return this.internalNameLookup(t, n)
          },
          depthedLookup: function(t) {
              return [this.aliasable("container.lookup"), '(depths, "', t, '")']
          },
          compilerInfo: function() {
              var t = i.COMPILER_REVISION;
              return [t, i.REVISION_CHANGES[t]]
          },
          appendToBuffer: function(t, n, e) {
              return o.isArray(t) || (t = [t]), t = this.source.wrap(t, n), this.environment.isSimple ? ["return ", t, ";"] : e ? ["buffer += ", t, ";"] : (t.appendToBuffer = !0, t)
          },
          initializeBuffer: function() {
              return this.quotedString("")
          },
          internalNameLookup: function(t, n) {
              return this.lookupPropertyFunctionIsUsed = !0, ["lookupProperty(", t, ",", JSON.stringify(n), ")"]
          },
          lookupPropertyFunctionIsUsed: !1,
          compile: function(t, n, e, r) {
              this.environment = t, this.options = n, this.stringParams = this.options.stringParams, this.trackIds = this.options.trackIds, this.precompile = !r, this.name = this.environment.name, this.isChild = !!e, this.context = e || {
                  decorators: [],
                  programs: [],
                  environments: []
              }, this.preamble(), this.stackSlot = 0, this.stackVars = [], this.aliases = {}, this.registers = {
                  list: []
              }, this.hashes = [], this.compileStack = [], this.inlineStack = [], this.blockParams = [], this.compileChildren(t, n), this.useDepths = this.useDepths || t.useDepths || t.useDecorators || this.options.compat, this.useBlockParams = this.useBlockParams || t.useBlockParams;
              var i = t.opcodes,
                  o = void 0,
                  d = void 0,
                  s = void 0,
                  p = void 0;
              for (s = 0, p = i.length; s < p; s++) o = i[s], this.source.currentLocation = o.loc, d = d || o.loc, this[o.opcode].apply(this, o.args);
              if (this.source.currentLocation = d, this.pushSource(""), this.stackSlot || this.inlineStack.length || this.compileStack.length) throw new a.default("Compile completed with content left on stack");
              this.decorators.isEmpty() ? this.decorators = void 0 : (this.useDecorators = !0, this.decorators.prepend(["var decorators = container.decorators, ", this.lookupPropertyFunctionVarDeclaration(), ";\n"]), this.decorators.push("return fn;"), r ? this.decorators = Function.apply(this, ["fn", "props", "container", "depth0", "data", "blockParams", "depths", this.decorators.merge()]) : (this.decorators.prepend("function(fn, props, container, depth0, data, blockParams, depths) {\n"), this.decorators.push("}\n"), this.decorators = this.decorators.merge()));
              var A = this.createFunctionContext(r);
              if (this.isChild) return A;
              var c = {
                  compiler: this.compilerInfo(),
                  main: A
              };
              this.decorators && (c.main_d = this.decorators, c.useDecorators = !0);
              var l = this.context,
                  C = l.programs,
                  g = l.decorators;
              for (s = 0, p = C.length; s < p; s++) C[s] && (c[s] = C[s], g[s] && (c[s + "_d"] = g[s], c.useDecorators = !0));
              return this.environment.usePartial && (c.usePartial = !0), this.options.data && (c.useData = !0), this.useDepths && (c.useDepths = !0), this.useBlockParams && (c.useBlockParams = !0), this.options.compat && (c.compat = !0), r ? c.compilerOptions = this.options : (c.compiler = JSON.stringify(c.compiler), this.source.currentLocation = {
                  start: {
                      line: 1,
                      column: 0
                  }
              }, c = this.objectLiteral(c), n.srcName ? (c = c.toStringWithSourceMap({
                  file: n.destName
              })).map = c.map && c.map.toString() : c = c.toString()), c
          },
          preamble: function() {
              this.lastContext = 0, this.source = new d.default(this.options.srcName), this.decorators = new d.default(this.options.srcName)
          },
          createFunctionContext: function(t) {
              var n = this,
                  e = "",
                  r = this.stackVars.concat(this.registers.list);
              r.length > 0 && (e += ", " + r.join(", "));
              var i = 0;
              Object.keys(this.aliases).forEach((function(t) {
                  var r = n.aliases[t];
                  r.children && r.referenceCount > 1 && (e += ", alias" + ++i + "=" + t, r.children[0] = "alias" + i)
              })), this.lookupPropertyFunctionIsUsed && (e += ", " + this.lookupPropertyFunctionVarDeclaration());
              var a = ["container", "depth0", "helpers", "partials", "data"];
              (this.useBlockParams || this.useDepths) && a.push("blockParams"), this.useDepths && a.push("depths");
              var o = this.mergeSource(e);
              return t ? (a.push(o), Function.apply(this, a)) : this.source.wrap(["function(", a.join(","), ") {\n  ", o, "}"])
          },
          mergeSource: function(t) {
              var n = this.environment.isSimple,
                  e = !this.forceBuffer,
                  r = void 0,
                  i = void 0,
                  a = void 0,
                  o = void 0;
              return this.source.each((function(t) {
                  t.appendToBuffer ? (a ? t.prepend("  + ") : a = t, o = t) : (a && (i ? a.prepend("buffer += ") : r = !0, o.add(";"), a = o = void 0), i = !0, n || (e = !1))
              })), e ? a ? (a.prepend("return "), o.add(";")) : i || this.source.push('return "";') : (t += ", buffer = " + (r ? "" : this.initializeBuffer()), a ? (a.prepend("return buffer + "), o.add(";")) : this.source.push("return buffer;")), t && this.source.prepend("var " + t.substring(2) + (r ? "" : ";\n")), this.source.merge()
          },
          lookupPropertyFunctionVarDeclaration: function() {
              return "\n      lookupProperty = container.lookupProperty || function(parent, propertyName) {\n        if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {\n          return parent[propertyName];\n        }\n        return undefined\n    }\n    ".trim()
          },
          blockValue: function(t) {
              var n = this.aliasable("container.hooks.blockHelperMissing"),
                  e = [this.contextName(0)];
              this.setupHelperArgs(t, 0, e);
              var r = this.popStack();
              e.splice(1, 0, r), this.push(this.source.functionCall(n, "call", e))
          },
          ambiguousBlockValue: function() {
              var t = this.aliasable("container.hooks.blockHelperMissing"),
                  n = [this.contextName(0)];
              this.setupHelperArgs("", 0, n, !0), this.flushInline();
              var e = this.topStack();
              n.splice(1, 0, e), this.pushSource(["if (!", this.lastHelper, ") { ", e, " = ", this.source.functionCall(t, "call", n), "}"])
          },
          appendContent: function(t) {
              this.pendingContent ? t = this.pendingContent + t : this.pendingLocation = this.source.currentLocation, this.pendingContent = t
          },
          append: function() {
              if (this.isInline()) this.replaceStack((function(t) {
                  return [" != null ? ", t, ' : ""']
              })), this.pushSource(this.appendToBuffer(this.popStack()));
              else {
                  var t = this.popStack();
                  this.pushSource(["if (", t, " != null) { ", this.appendToBuffer(t, void 0, !0), " }"]), this.environment.isSimple && this.pushSource(["else { ", this.appendToBuffer("''", void 0, !0), " }"])
              }
          },
          appendEscaped: function() {
              this.pushSource(this.appendToBuffer([this.aliasable("container.escapeExpression"), "(", this.popStack(), ")"]))
          },
          getContext: function(t) {
              this.lastContext = t
          },
          pushContext: function() {
              this.pushStackLiteral(this.contextName(this.lastContext))
          },
          lookupOnContext: function(t, n, e, r) {
              var i = 0;
              r || !this.options.compat || this.lastContext ? this.pushContext() : this.push(this.depthedLookup(t[i++])), this.resolvePath("context", t, i, n, e)
          },
          lookupBlockParam: function(t, n) {
              this.useBlockParams = !0, this.push(["blockParams[", t[0], "][", t[1], "]"]), this.resolvePath("context", n, 1)
          },
          lookupData: function(t, n, e) {
              t ? this.pushStackLiteral("container.data(data, " + t + ")") : this.pushStackLiteral("data"), this.resolvePath("data", n, 0, !0, e)
          },
          resolvePath: function(t, n, e, r, i) {
              var a = this;
              if (this.options.strict || this.options.assumeObjects) this.push(function(t, n, e, r) {
                  var i = n.popStack(),
                      a = 0,
                      o = e.length;
                  t && o--;
                  for (; a < o; a++) i = n.nameLookup(i, e[a], r);
                  return t ? [n.aliasable("container.strict"), "(", i, ", ", n.quotedString(e[a]), ", ", JSON.stringify(n.source.currentLocation), " )"] : i
              }(this.options.strict && i, this, n, t));
              else
                  for (var o = n.length; e < o; e++) this.replaceStack((function(i) {
                      var o = a.nameLookup(i, n[e], t);
                      return r ? [" && ", o] : [" != null ? ", o, " : ", i]
                  }))
          },
          resolvePossibleLambda: function() {
              this.push([this.aliasable("container.lambda"), "(", this.popStack(), ", ", this.contextName(0), ")"])
          },
          pushStringParam: function(t, n) {
              this.pushContext(), this.pushString(n), "SubExpression" !== n && ("string" == typeof t ? this.pushString(t) : this.pushStackLiteral(t))
          },
          emptyHash: function(t) {
              this.trackIds && this.push("{}"), this.stringParams && (this.push("{}"), this.push("{}")), this.pushStackLiteral(t ? "undefined" : "{}")
          },
          pushHash: function() {
              this.hash && this.hashes.push(this.hash), this.hash = {
                  values: {},
                  types: [],
                  contexts: [],
                  ids: []
              }
          },
          popHash: function() {
              var t = this.hash;
              this.hash = this.hashes.pop(), this.trackIds && this.push(this.objectLiteral(t.ids)), this.stringParams && (this.push(this.objectLiteral(t.contexts)), this.push(this.objectLiteral(t.types))), this.push(this.objectLiteral(t.values))
          },
          pushString: function(t) {
              this.pushStackLiteral(this.quotedString(t))
          },
          pushLiteral: function(t) {
              this.pushStackLiteral(t)
          },
          pushProgram: function(t) {
              null != t ? this.pushStackLiteral(this.programExpression(t)) : this.pushStackLiteral(null)
          },
          registerDecorator: function(t, n) {
              var e = this.nameLookup("decorators", n, "decorator"),
                  r = this.setupHelperArgs(n, t);
              this.decorators.push(["fn = ", this.decorators.functionCall(e, "", ["fn", "props", "container", r]), " || fn;"])
          },
          invokeHelper: function(t, n, e) {
              var r = this.popStack(),
                  i = this.setupHelper(t, n),
                  a = [];
              e && a.push(i.name), a.push(r), this.options.strict || a.push(this.aliasable("container.hooks.helperMissing"));
              var o = ["(", this.itemsSeparatedBy(a, "||"), ")"],
                  d = this.source.functionCall(o, "call", i.callParams);
              this.push(d)
          },
          itemsSeparatedBy: function(t, n) {
              var e = [];
              e.push(t[0]);
              for (var r = 1; r < t.length; r++) e.push(n, t[r]);
              return e
          },
          invokeKnownHelper: function(t, n) {
              var e = this.setupHelper(t, n);
              this.push(this.source.functionCall(e.name, "call", e.callParams))
          },
          invokeAmbiguous: function(t, n) {
              this.useRegister("helper");
              var e = this.popStack();
              this.emptyHash();
              var r = this.setupHelper(0, t, n),
                  i = ["(", "(helper = ", this.lastHelper = this.nameLookup("helpers", t, "helper"), " || ", e, ")"];
              this.options.strict || (i[0] = "(helper = ", i.push(" != null ? helper : ", this.aliasable("container.hooks.helperMissing"))), this.push(["(", i, r.paramsInit ? ["),(", r.paramsInit] : [], "),", "(typeof helper === ", this.aliasable('"function"'), " ? ", this.source.functionCall("helper", "call", r.callParams), " : helper))"])
          },
          invokePartial: function(t, n, e) {
              var r = [],
                  i = this.setupParams(n, 1, r);
              t && (n = this.popStack(), delete i.name), e && (i.indent = JSON.stringify(e)), i.helpers = "helpers", i.partials = "partials", i.decorators = "container.decorators", t ? r.unshift(n) : r.unshift(this.nameLookup("partials", n, "partial")), this.options.compat && (i.depths = "depths"), i = this.objectLiteral(i), r.push(i), this.push(this.source.functionCall("container.invokePartial", "", r))
          },
          assignToHash: function(t) {
              var n = this.popStack(),
                  e = void 0,
                  r = void 0,
                  i = void 0;
              this.trackIds && (i = this.popStack()), this.stringParams && (r = this.popStack(), e = this.popStack());
              var a = this.hash;
              e && (a.contexts[t] = e), r && (a.types[t] = r), i && (a.ids[t] = i), a.values[t] = n
          },
          pushId: function(t, n, e) {
              "BlockParam" === t ? this.pushStackLiteral("blockParams[" + n[0] + "].path[" + n[1] + "]" + (e ? " + " + JSON.stringify("." + e) : "")) : "PathExpression" === t ? this.pushString(n) : "SubExpression" === t ? this.pushStackLiteral("true") : this.pushStackLiteral("null")
          },
          compiler: p,
          compileChildren: function(t, n) {
              for (var e = t.children, r = void 0, i = void 0, a = 0, o = e.length; a < o; a++) {
                  r = e[a], i = new this.compiler;
                  var d = this.matchExistingProgram(r);
                  if (null == d) {
                      this.context.programs.push("");
                      var s = this.context.programs.length;
                      r.index = s, r.name = "program" + s, this.context.programs[s] = i.compile(r, n, this.context, !this.precompile), this.context.decorators[s] = i.decorators, this.context.environments[s] = r, this.useDepths = this.useDepths || i.useDepths, this.useBlockParams = this.useBlockParams || i.useBlockParams, r.useDepths = this.useDepths, r.useBlockParams = this.useBlockParams
                  } else r.index = d.index, r.name = "program" + d.index, this.useDepths = this.useDepths || d.useDepths, this.useBlockParams = this.useBlockParams || d.useBlockParams
              }
          },
          matchExistingProgram: function(t) {
              for (var n = 0, e = this.context.environments.length; n < e; n++) {
                  var r = this.context.environments[n];
                  if (r && r.equals(t)) return r
              }
          },
          programExpression: function(t) {
              var n = this.environment.children[t],
                  e = [n.index, "data", n.blockParams];
              return (this.useBlockParams || this.useDepths) && e.push("blockParams"), this.useDepths && e.push("depths"), "container.program(" + e.join(", ") + ")"
          },
          useRegister: function(t) {
              this.registers[t] || (this.registers[t] = !0, this.registers.list.push(t))
          },
          push: function(t) {
              return t instanceof s || (t = this.source.wrap(t)), this.inlineStack.push(t), t
          },
          pushStackLiteral: function(t) {
              this.push(new s(t))
          },
          pushSource: function(t) {
              this.pendingContent && (this.source.push(this.appendToBuffer(this.source.quotedString(this.pendingContent), this.pendingLocation)), this.pendingContent = void 0), t && this.source.push(t)
          },
          replaceStack: function(t) {
              var n = ["("],
                  e = void 0,
                  r = void 0,
                  i = void 0;
              if (!this.isInline()) throw new a.default("replaceStack on non-inline");
              var o = this.popStack(!0);
              if (o instanceof s) n = ["(", e = [o.value]], i = !0;
              else {
                  r = !0;
                  var d = this.incrStack();
                  n = ["((", this.push(d), " = ", o, ")"], e = this.topStack()
              }
              var p = t.call(this, e);
              i || this.popStack(), r && this.stackSlot--, this.push(n.concat(p, ")"))
          },
          incrStack: function() {
              return this.stackSlot++, this.stackSlot > this.stackVars.length && this.stackVars.push("stack" + this.stackSlot), this.topStackName()
          },
          topStackName: function() {
              return "stack" + this.stackSlot
          },
          flushInline: function() {
              var t = this.inlineStack;
              this.inlineStack = [];
              for (var n = 0, e = t.length; n < e; n++) {
                  var r = t[n];
                  if (r instanceof s) this.compileStack.push(r);
                  else {
                      var i = this.incrStack();
                      this.pushSource([i, " = ", r, ";"]), this.compileStack.push(i)
                  }
              }
          },
          isInline: function() {
              return this.inlineStack.length
          },
          popStack: function(t) {
              var n = this.isInline(),
                  e = (n ? this.inlineStack : this.compileStack).pop();
              if (!t && e instanceof s) return e.value;
              if (!n) {
                  if (!this.stackSlot) throw new a.default("Invalid stack pop");
                  this.stackSlot--
              }
              return e
          },
          topStack: function() {
              var t = this.isInline() ? this.inlineStack : this.compileStack,
                  n = t[t.length - 1];
              return n instanceof s ? n.value : n
          },
          contextName: function(t) {
              return this.useDepths && t ? "depths[" + t + "]" : "depth" + t
          },
          quotedString: function(t) {
              return this.source.quotedString(t)
          },
          objectLiteral: function(t) {
              return this.source.objectLiteral(t)
          },
          aliasable: function(t) {
              var n = this.aliases[t];
              return n ? (n.referenceCount++, n) : ((n = this.aliases[t] = this.source.wrap(t)).aliasable = !0, n.referenceCount = 1, n)
          },
          setupHelper: function(t, n, e) {
              var r = [];
              return {
                  params: r,
                  paramsInit: this.setupHelperArgs(n, t, r, e),
                  name: this.nameLookup("helpers", n, "helper"),
                  callParams: [this.aliasable(this.contextName(0) + " != null ? " + this.contextName(0) + " : (container.nullContext || {})")].concat(r)
              }
          },
          setupParams: function(t, n, e) {
              var r = {},
                  i = [],
                  a = [],
                  o = [],
                  d = !e,
                  s = void 0;
              d && (e = []), r.name = this.quotedString(t), r.hash = this.popStack(), this.trackIds && (r.hashIds = this.popStack()), this.stringParams && (r.hashTypes = this.popStack(), r.hashContexts = this.popStack());
              var p = this.popStack(),
                  A = this.popStack();
              (A || p) && (r.fn = A || "container.noop", r.inverse = p || "container.noop");
              for (var c = n; c--;) s = this.popStack(), e[c] = s, this.trackIds && (o[c] = this.popStack()), this.stringParams && (a[c] = this.popStack(), i[c] = this.popStack());
              return d && (r.args = this.source.generateArray(e)), this.trackIds && (r.ids = this.source.generateArray(o)), this.stringParams && (r.types = this.source.generateArray(a), r.contexts = this.source.generateArray(i)), this.options.data && (r.data = "data"), this.useBlockParams && (r.blockParams = "blockParams"), r
          },
          setupHelperArgs: function(t, n, e, r) {
              var i = this.setupParams(t, n, e);
              return i.loc = JSON.stringify(this.source.currentLocation), i = this.objectLiteral(i), r ? (this.useRegister("options"), e.push("options"), ["options=", i]) : e ? (e.push(i), "") : i
          }
      },
      function() {
          for (var t = "break else new var case finally return void catch for switch while continue function this with default if throw delete in try do instanceof typeof abstract enum int short boolean export interface static byte extends long super char final native synchronized class float package throws const goto private transient debugger implements protected volatile double import public let yield await null true false".split(" "), n = p.RESERVED_WORDS = {}, e = 0, r = t.length; e < r; e++) n[t[e]] = !0
      }(), p.isValidJavaScriptVariableName = function(t) {
          return !p.RESERVED_WORDS[t] && /^[a-zA-Z_$][0-9a-zA-Z_$]*$/.test(t)
      }, n.default = p, t.exports = n.default
}, function(t, n, e) {
  "use strict";
  n.__esModule = !0;
  var r = e(2),
      i = void 0;
  try {} catch (t) {}

  function a(t, n, e) {
      if (r.isArray(t)) {
          for (var i = [], a = 0, o = t.length; a < o; a++) i.push(n.wrap(t[a], e));
          return i
      }
      return "boolean" == typeof t || "number" == typeof t ? t + "" : t
  }

  function o(t) {
      this.srcFile = t, this.source = []
  }
  i || ((i = function(t, n, e, r) {
      this.src = "", r && this.add(r)
  }).prototype = {
      add: function(t) {
          r.isArray(t) && (t = t.join("")), this.src += t
      },
      prepend: function(t) {
          r.isArray(t) && (t = t.join("")), this.src = t + this.src
      },
      toStringWithSourceMap: function() {
          return {
              code: this.toString()
          }
      },
      toString: function() {
          return this.src
      }
  }), o.prototype = {
      isEmpty: function() {
          return !this.source.length
      },
      prepend: function(t, n) {
          this.source.unshift(this.wrap(t, n))
      },
      push: function(t, n) {
          this.source.push(this.wrap(t, n))
      },
      merge: function() {
          var t = this.empty();
          return this.each((function(n) {
              t.add(["  ", n, "\n"])
          })), t
      },
      each: function(t) {
          for (var n = 0, e = this.source.length; n < e; n++) t(this.source[n])
      },
      empty: function() {
          var t = this.currentLocation || {
              start: {}
          };
          return new i(t.start.line, t.start.column, this.srcFile)
      },
      wrap: function(t) {
          var n = arguments.length <= 1 || void 0 === arguments[1] ? this.currentLocation || {
              start: {}
          } : arguments[1];
          return t instanceof i ? t : (t = a(t, this, n), new i(n.start.line, n.start.column, this.srcFile, t))
      },
      functionCall: function(t, n, e) {
          return e = this.generateList(e), this.wrap([t, n ? "." + n + "(" : "(", e, ")"])
      },
      quotedString: function(t) {
          return '"' + (t + "").replace(/\\/g, "\\\\").replace(/"/g, '\\"').replace(/\n/g, "\\n").replace(/\r/g, "\\r").replace(/\u2028/g, "\\u2028").replace(/\u2029/g, "\\u2029") + '"'
      },
      objectLiteral: function(t) {
          var n = this,
              e = [];
          Object.keys(t).forEach((function(r) {
              var i = a(t[r], n);
              "undefined" !== i && e.push([n.quotedString(r), ":", i])
          }));
          var r = this.generateList(e);
          return r.prepend("{"), r.add("}"), r
      },
      generateList: function(t) {
          for (var n = this.empty(), e = 0, r = t.length; e < r; e++) e && n.add(","), n.add(a(t[e], this));
          return n
      },
      generateArray: function(t) {
          var n = this.generateList(t);
          return n.prepend("["), n.add("]"), n
      }
  }, n.default = o, t.exports = n.default
}, function(t, n, e) {
  (function(t) {
      t((function() {
          t(".requestRep").each((function(n, e) {
              var r = t(e),
                  i = r.find("[data-step]"),
                  a = r.find("[name='IDType']"),
                  o = r.find(".idnumber"),
                  d = r.find("button"),
                  s = 0,
                  p = r.find(".error"),
                  A = r.find(".success"),
                  c = r.find(".npi-lookup"),
                  l = (A.find("button"), !1);
              r.submit((function(n) {
                  if (n.preventDefault(), !l && r.valid()) {
                      var a = i.eq(s).find("[type='submit']").attr("formaction");
                      l = !0, r.addClass("loading"), d.prop("disabled", !0), p.addClass("hidden"), t.ajax({
                          url: a || e.action,
                          method: e.method,
                          data: r.serialize(),
                          complete: function(t) {
                              if (l = !1, r.removeClass("loading"), d.prop("disabled", !1), t.responseJSON && !t.responseJSON.error) dataLayer && dataLayer.push({
                                  event: "GAEvent",
                                  eventCategory: "Request a Rep",
                                  eventAction: "Form Submission",
                                  eventLabel: void 0,
                                  eventValue: void 0
                              }), i.eq(s).addClass("hidden"), ++s >= i.length ? A.removeClass("hidden") : i.eq(s).removeClass("hidden");
                              else {
                                  var n, e, a = (null === (n = t.responseJSON) || void 0 === n ? void 0 : n.error) || "Sorry, an error occurred while processing your request.";
                                  p.html(a), p.removeClass("hidden"), dataLayer && dataLayer.push({
                                      event: "GAEvent",
                                      eventCategory: "Error - Request a Rep",
                                      eventAction: null === (e = t.responseJSON) || void 0 === e ? void 0 : e.error,
                                      eventLabel: "Submission failed",
                                      eventValue: void 0
                                  })
                              }
                          }
                      })
                  }
              })), a.change((function(n) {
                  if (n.target.checked) {
                      var e = t(n.target),
                          r = a.index(e);
                      o.addClass("hidden"), o.eq(r).removeClass("hidden"), "NPI" == e.val() ? c.removeClass("hidden") : c.addClass("hidden")
                  }
              })), t.validator.addMethod("idnumber", (function(t, n, e) {
                  return !(document.querySelector(n.getAttribute("data-val-idtype")).checked && !t)
              }), "Please enter your identification number."), t.validator.addClassRules("idnumber", {
                  idnumber: !0
              })
          }))
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  (function(t) {
      t((function() {
          document.querySelectorAll("#video_homepage").length && ($hp_video = document.querySelector("#video_homepage"), $hp_video.ontimeupdate = function() {
              $hp_video.currentTime >= 4 && (document.querySelector("#hero .ani-fadein").classList.remove("ani-hidden"), document.querySelector("#hero .extra-list").classList.remove("ani-hidden"))
          })
      }))
  }).call(this, e(1))
}, function(t, n, e) {
  var r = e(64),
      i = e(65);
  "string" == typeof(i = i.__esModule ? i.default : i) && (i = [
      [t.i, i, ""]
  ]);
  var a = {
      insert: "head",
      singleton: !1
  };
  r(i, a);
  t.exports = i.locals || {}
}, function(t, n, e) {
  "use strict";
  var r, i = function() {
          return void 0 === r && (r = Boolean(window && document && document.all && !window.atob)), r
      },
      a = function() {
          var t = {};
          return function(n) {
              if (void 0 === t[n]) {
                  var e = document.querySelector(n);
                  if (window.HTMLIFrameElement && e instanceof window.HTMLIFrameElement) try {
                      e = e.contentDocument.head
                  } catch (t) {
                      e = null
                  }
                  t[n] = e
              }
              return t[n]
          }
      }(),
      o = [];

  function d(t) {
      for (var n = -1, e = 0; e < o.length; e++)
          if (o[e].identifier === t) {
              n = e;
              break
          } return n
  }

  function s(t, n) {
      for (var e = {}, r = [], i = 0; i < t.length; i++) {
          var a = t[i],
              s = n.base ? a[0] + n.base : a[0],
              p = e[s] || 0,
              A = "".concat(s, " ").concat(p);
          e[s] = p + 1;
          var c = d(A),
              l = {
                  css: a[1],
                  media: a[2],
                  sourceMap: a[3]
              }; - 1 !== c ? (o[c].references++, o[c].updater(l)) : o.push({
              identifier: A,
              updater: m(l, n),
              references: 1
          }), r.push(A)
      }
      return r
  }

  function p(t) {
      var n = document.createElement("style"),
          r = t.attributes || {};
      if (void 0 === r.nonce) {
          var i = e.nc;
          i && (r.nonce = i)
      }
      if (Object.keys(r).forEach((function(t) {
              n.setAttribute(t, r[t])
          })), "function" == typeof t.insert) t.insert(n);
      else {
          var o = a(t.insert || "head");
          if (!o) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
          o.appendChild(n)
      }
      return n
  }
  var A, c = (A = [], function(t, n) {
      return A[t] = n, A.filter(Boolean).join("\n")
  });

  function l(t, n, e, r) {
      var i = e ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
      if (t.styleSheet) t.styleSheet.cssText = c(n, i);
      else {
          var a = document.createTextNode(i),
              o = t.childNodes;
          o[n] && t.removeChild(o[n]), o.length ? t.insertBefore(a, o[n]) : t.appendChild(a)
      }
  }

  function C(t, n, e) {
      var r = e.css,
          i = e.media,
          a = e.sourceMap;
      if (i ? t.setAttribute("media", i) : t.removeAttribute("media"), a && btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a)))), " */")), t.styleSheet) t.styleSheet.cssText = r;
      else {
          for (; t.firstChild;) t.removeChild(t.firstChild);
          t.appendChild(document.createTextNode(r))
      }
  }
  var g = null,
      h = 0;

  function m(t, n) {
      var e, r, i;
      if (n.singleton) {
          var a = h++;
          e = g || (g = p(n)), r = l.bind(null, e, a, !1), i = l.bind(null, e, a, !0)
      } else e = p(n), r = C.bind(null, e, n), i = function() {
          ! function(t) {
              if (null === t.parentNode) return !1;
              t.parentNode.removeChild(t)
          }(e)
      };
      return r(t),
          function(n) {
              if (n) {
                  if (n.css === t.css && n.media === t.media && n.sourceMap === t.sourceMap) return;
                  r(t = n)
              } else i()
          }
  }
  t.exports = function(t, n) {
      (n = n || {}).singleton || "boolean" == typeof n.singleton || (n.singleton = i());
      var e = s(t = t || [], n);
      return function(t) {
          if (t = t || [], "[object Array]" === Object.prototype.toString.call(t)) {
              for (var r = 0; r < e.length; r++) {
                  var i = d(e[r]);
                  o[i].references--
              }
              for (var a = s(t, n), p = 0; p < e.length; p++) {
                  var A = d(e[p]);
                  0 === o[A].references && (o[A].updater(), o.splice(A, 1))
              }
              e = a
          }
      }
  }
}, function(t, n, e) {
  (n = e(66)(!0)).push([t.i, '', "", {
      version: 3,
      sources: [""],
      names: [],
      mappings: "",
      file: "main.scss",
      sourcesContent: ['']
  }]), t.exports = n
}, function(t, n, e) {
  "use strict";
  t.exports = function(t) {
      var n = [];
      return n.toString = function() {
          return this.map((function(n) {
              var e = function(t, n) {
                  var e = t[1] || "",
                      r = t[3];
                  if (!r) return e;
                  if (n && "function" == typeof btoa) {
                      var i = (o = r, d = btoa(unescape(encodeURIComponent(JSON.stringify(o)))), s = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(d), "/*# ".concat(s, " */")),
                          a = r.sources.map((function(t) {
                              return "/*# sourceURL=".concat(r.sourceRoot || "").concat(t, " */")
                          }));
                      return [e].concat(a).concat([i]).join("\n")
                  }
                  var o, d, s;
                  return [e].join("\n")
              }(n, t);
              return n[2] ? "@media ".concat(n[2], " {").concat(e, "}") : e
          })).join("")
      }, n.i = function(t, e, r) {
          "string" == typeof t && (t = [
              [null, t, ""]
          ]);
          var i = {};
          if (r)
              for (var a = 0; a < this.length; a++) {
                  var o = this[a][0];
                  null != o && (i[o] = !0)
              }
          for (var d = 0; d < t.length; d++) {
              var s = [].concat(t[d]);
              r && i[s[0]] || (e && (s[2] ? s[2] = "".concat(e, " and ").concat(s[2]) : s[2] = e), n.push(s))
          }
      }, n
  }
}]);
