<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/entyviohcp/templates/content/node--request-an-representative--full.html.twig */
class __TwigTemplate_8aad3f15fc7e9cda3f9b417356c3d33dd78e227912f9a48c98d290280c9dcb84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/request-an-representative-styling"), "html", null, true);
        echo "
<div class=\"page-content resources-content\" data-page-id=\"RequestARepresentative\" data-page-category=\"Resources\">
\t<div id=\"skip-to-content\"></div>

\t<div id=\"hero\">
\t\t<div>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-patient.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\">
\t\t\t\t<img src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
\t\t\t</picture>
\t\t\t<article>
\t\t\t\t<div>
\t\t\t\t\t<h1>
\t\t\t\t\t\tResources
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<h2>Information<br>
\t\t\t\t\t\tto Help You<br>
\t\t\t\t\t\tand Your Patients</h2>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 26, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-stu.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 27, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\">
\t\t\t\t<img src=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 28, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
\t\t\t</picture>


\t\t</div>
\t</div>

\t<div id=\"first_section\">
\t\t<div id=\"indication_bar\" class=\"close\">
\t\t\t<div>
\t\t\t\t<div class=\"section\">
\t\t\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"body-content\">
\t\t\t<article>
\t\t\t\t<div class=\"title-area\">
\t\t\t\t\t<p class=\"go-back\">
\t\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 48, $this->source), "html", null, true);
        echo "resources/professional-resources\" target=\"_self\">Back to Resources list</a>
\t\t\t\t\t</p>
\t\t\t\t\t<h2 class=\"border\">Request A Representative</h2>
\t\t\t\t\t<h3>Connect with an Entyvio Clinical Sales Specialist.</h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"main-container\">
\t\t\t\t\t<form action=\"https://www.entyviohcp.com/vital/requestrep\" method=\"post\" class=\"requestRep\" id=\"requestRep\" name=\"requestRep\" novalidate=\"novalidate\">
\t\t\t\t\t\t<input name=\"__RequestVerificationToken\" type=\"hidden\" value=\"MAy9uKkRHTW5k9NEJ3IaJbLqf_RjveAHxRIeJskSNpZim52FzvESAuQOj0XQC7a-mTgA3bX8UZnkH5VSHPMUqPsVOVtAjLBZro8UrOEI-MQ1\">
\t\t\t\t\t\t<section data-step=\"1\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>Please fill out the appropriate fields indicated to have a Takeda representative contact you.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" data-val=\"true\" data-val-required=\"Please make a selection.\" id=\"DEA\" type=\"radio\" value=\"DEA\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"DEA\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>DEA #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"ME\" type=\"radio\" value=\"ME\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ME\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>ME #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"SLN\" type=\"radio\" value=\"SLN\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"SLN\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>SLN #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"NPI\" type=\"radio\" value=\"NPI\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"NPI\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>NPI #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDType\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"npi-lookup hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://npiregistry.cms.hhs.gov/\" data-modal=\"external_third_party\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Click here</a>
\t\t\t\t\t\t\t\t\t\t\t\tto look up your NPI #.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber\" data-val=\"true\" data-val-idtype=\"#DEA\" data-val-maxlength=\"The field IDDEA must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDDEA\" maxlength=\"30\" name=\"IDDEA\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDDEA\">DEA</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDDEA\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#ME\" data-val-maxlength=\"The field IDME must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDME\" maxlength=\"30\" name=\"IDME\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDME\">ME</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDME\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#SLN\" data-val-maxlength=\"The field IDSLN must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDSLN\" maxlength=\"30\" name=\"IDSLN\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDSLN\">SLN</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDSLN\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#NPI\" data-val-maxlength=\"The field IDNPI must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDNPI\" maxlength=\"30\" name=\"IDNPI\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDNPI\">NPI</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDNPI\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field ID must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" data-val-required=\"Please enter your identification number.\" id=\"ID\" name=\"ID\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"ID\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"FirstName\">First Name</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field First Name must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your first name.\" id=\"FirstName\" maxlength=\"50\" name=\"FirstName\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"FirstName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"LastName\">Last Name</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Last Name must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your last name.\" id=\"LastName\" maxlength=\"50\" name=\"LastName\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"LastName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button id=\"step_1_submit\" class=\"btn btn-primary\" type=\"submit\" formaction=\"https://www.entyviohcp.com/vital/validateuser\">Continue</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"error hidden\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section data-step=\"2\" class=\"hidden\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>Please fill out the appropriate fields indicated to have a Takeda representative contact you.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<label for=\"Email\">Email</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-regex=\"Please enter a valid email address.\" data-val-regex-pattern=\"^([-!#\$%&amp;'&quot;\\*\\+/=?^_`{|}~\\w\\[\\]\\.]+)@([-\\w\\.\\[\\]:]+)\\.([-\\w\\[\\]:]+)\$\" data-val-required=\"Please enter your email address.\" id=\"Email\" name=\"Email\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Email\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"Phone\">Phone Number</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Phone Number must be a string or array type with a maximum length of '10'.\" data-val-maxlength-max=\"10\" data-val-required=\"Please enter a valid 10 digit phone number.\" id=\"Phone\" maxlength=\"10\" name=\"Phone\" type=\"tel\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Phone\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Address1\" maxlength=\"255\">Address line 1</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Address line 1 must be a string or array type with a maximum length of '255'.\" data-val-maxlength-max=\"255\" data-val-required=\"Please enter your address.\" id=\"Address1\" name=\"Address1\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Address1\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Address2\">Address line 2</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Address line 2 must be a string or array type with a maximum length of '255'.\" data-val-maxlength-max=\"255\" id=\"Address2\" maxlength=\"255\" name=\"Address2\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Address2\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label for=\"City\">City</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field City must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your city.\" id=\"City\" maxlength=\"50\" name=\"City\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"City\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"State\">State</label>
\t\t\t\t\t\t\t\t\t\t\t<select data-val=\"true\" data-val-maxlength=\"The field State must be a string or array type with a maximum length of '2'.\" data-val-maxlength-max=\"2\" data-val-required=\"Please select your state.\" id=\"State\" name=\"State\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">State</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AK\">AK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AL\">AL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AR\">AR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AZ\">AZ</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CA\">CA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CO\">CO</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CT\">CT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DC\">DC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DE\">DE</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"FL\">FL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"GA\">GA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"HI\">HI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IA\">IA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ID\">ID</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IL\">IL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IN\">IN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"KS\">KS</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"KY\">KY</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"LA\">LA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MA\">MA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MD\">MD</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ME\">ME</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MI\">MI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MN\">MN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MO\">MO</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MS\">MS</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MT\">MT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NC\">NC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ND\">ND</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NE\">NE</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NH\">NH</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NJ\">NJ</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NM\">NM</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NV\">NV</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NY\">NY</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OH\">OH</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OK\">OK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OR\">OR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"PA\">PA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"PR\">PR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"RI\">RI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"SC\">SC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"SD\">SD</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"TN\">TN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"TX\">TX</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UT\">UT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VA\">VA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VI\">VI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VT\">VT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WA\">WA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WI\">WI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WV\">WV</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WY\">WY</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"State\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Zip\">ZIP Code</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field ZIP Code must be a string or array type with a maximum length of '5'.\" data-val-maxlength-max=\"5\" data-val-regex=\"Please enter a valid ZIP code.\" data-val-regex-pattern=\"^(\\d{5})(\\-?\\d{4}){0,1}\$\" data-val-required=\"Please enter your ZIP code.\" id=\"Zip\" maxlength=\"5\" name=\"Zip\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Zip\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button id=\"step_2_submit\" class=\"btn btn-primary\" type=\"submit\">Submit</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"error hidden\" id=\"Server-error\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"success hidden\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h2>Thank you</h2>
\t\t\t\t\t\t\t\t<h3>We have received your request.</h3>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>

\t<!-- *********************** -->
<!-- **** CODE ENDS **** *** -->
\t<!-- *********************** -->
</div>
<div id=\"isi\">
\t<aside class=\"section\">
\t\t<article>
\t\t\t<button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
\t\t\t\t<span></span>
\t\t\t</button>
\t\t\t<div class=\"isi-header\">
\t\t\t\t<h2>Important Safety Information</h2>
\t\t\t</div>
\t\t\t<ul>
\t\t\t\t<li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

\t\t\t\t<li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

\t\t\t\t<li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

\t\t\t\t<li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup>
\t\t\t\t\tand prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

\t\t\t\t<li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

\t\t\t\t<li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

\t\t\t\t<li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
\t\t\t</ul>

\t\t\t<h2>Indications</h2>
\t\t\t<h3>Adult Ulcerative Colitis (UC)</h3>
\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t<h3>Adult Crohn's Disease (CD)</h3>
\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t<p>Please see
\t\t\t\t<a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including
\t\t\t\t<a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
\t\t</article>
\t</aside>

</div>

<script>
  const pauseVideo = (id, time) => {
      const video = document.getElementById(id);
      video.pause();
      video.classList.add('playing');
      video.currentTime = time;
  },
  homepage_hover = () => {
      document.querySelector('.head-to-head .btn').classList.add('hover');
      document.querySelector('.btn[href=\"/mechanism-of-action\"]').classList.add('hover');
  },
  Extra_Form_Errors = () => {
      setTimeout(function () {
          document.querySelectorAll('input, select').forEach(element => element.blur());
          document.getElementById('Email-error').innerHTML = '<span class=\"ed-templating\">[</span>Please enter your email address.<span class=\"ed-templating\">]</span><br /><span class=\"ed-templating\">[</span>Please enter a valid email address.<span class=\"ed-templating\">]</span>';
          document.getElementById('Zip-error').innerHTML = '<span class=\"ed-templating\">[</span>Please enter your ZIP code.<span class=\"ed-templating\">]</span><br /><span class=\"ed-templating\">[</span>Please enter a valid ZIP code.<span class=\"ed-templating\">]</span>';
          document.getElementById('Server-error').innerHTML = 'Sorry, an error occurred while processing your request.';
      }, 1000);
  };
</script>

<script type=\"text/javascript\" id=\"\">
var pulsePointPageConv={\"/\":\"502363\",\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":\"502364\",\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":\"502365\",\"/mechanism-of-action\":\"502366\",\"/safety-profile\":\"502968\",\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":\"502368\",\"/resources/clinical-reprints\":\"502369\",\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":\"502500\",\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":\"502501\",\"/resources/peer-perspective\":\"502502\",\"/local-coverage\":\"503415\",
\"/#isi\":\"503417\"},pulsePointPageRet={\"/\":{vid:\"5720\",token:\"C20G50\"},\"/clinical-data/uc-data\":{vid:\"5720\",token:\"WELCZN\"},\"/clinical-data/cd-data\":{vid:\"5720\",token:\"RCD24A\"},\"/mechanism-of-action\":{vid:\"5720\",token:\"AFZLUC\"},\"/safety-profile\":{vid:\"5720\",token:\"MHVJZX\"},\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":{vid:\"5720\",token:\"T3VKUO\"},\"/resources/clinical-reprints\":{vid:\"5720\",token:\"J72ZVR\"},\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":{vid:\"5720\",token:\"PMPJGL\"},\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":{vid:\"5720\",
token:\"CZOXCQ\"},\"/resources/peer-perspective\":{vid:\"5720\",token:\"Y0ARNC\"},\"/local-coverage\":{vid:\"5720\",token:\"LYTEQ0\"},\"/#isi\":{vid:\"5720\",token:\"JJJQSF\"}},sendPPConvTag=function(a){window.dataLayer.push({event:\"intouch.ppconv\",\"intouch.ppcv\":a})},sendPPRetTag=function(a){window.dataLayer.push({event:\"intouch.ppretarg\",\"intouch.ppadvid\":a.vid,\"intouch.pptoken\":a.token})};
(function(a,b,c,d){void 0!=b[a]&&sendPPConvTag(b[a]);void 0!=b[a+d]&&sendPPConvTag(b[a+d]);void 0!=c[a]&&sendPPRetTag(c[a]);void 0!=c[a+d]&&sendPPRetTag(c[a+d])})(document.location.pathname.toLowerCase(),pulsePointPageConv,pulsePointPageRet,document.location.hash.toLowerCase());
</script>
<script type=\"text/javascript\" id=\"\">(function(){!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version=\"2.0\",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,\"script\",\"https://connect.facebook.net/en_US/fbevents.js\");fbq(\"dataProcessingOptions\",[\"LDU\"],0,0);fbq(\"init\",\"225690442257893\");fbq(\"track\",\"PageView\")})();</script>
<script type=\"text/javascript\" id=\"\">
var fl_page={\"/clinical-data/cd-data\":{type:\"entyv0\",cat:\"taked000\"},\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":{type:\"entyv0\",cat:\"taked003\"},\"/resources/clinical-reprints\":{type:\"entyv0\",cat:\"taked004\"},\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":{type:\"entyv0\",cat:\"taked006\"},\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":{type:\"entyv0\",cat:\"taked005\"},\"/\":{type:\"entyv0\",cat:\"taked0\"},\"/mechanism-of-action\":{type:\"entyv0\",cat:\"taked001\"},\"/safety-profile\":{type:\"entyv0\",
cat:\"taked008\"},\"/clinical-data/uc-data\":{type:\"entyv0\",cat:\"taked00\"},\"/resources/peer-perspective\":{type:\"entyv0\",cat:\"taked007\"},\"#isi\":{page:\"/\",type:\"entyv0\",cat:\"taked00a\"},\"/local-coverage\":{type:\"entyv0\",cat:\"taked009\"}},path=document.location.pathname.toLowerCase(),hash=document.location.hash.toLowerCase(),fl_account=\"DC-9400057\";
(function(a,c,d,e){var g=function(f){window.gtag(\"event\",\"conversion\",{allow_custom_scripts:!0,send_to:c+\"/\"+f.type+\"/\"+f.cat+\"+standard\"})},b=document.createElement(\"script\");b.src=\"https://www.googletagmanager.com/gtag/js?id\\x3d\"+c;b.async=!0;b.onload=function(){window.dataLayer=window.dataLayer||[];window.gtag=function(){dataLayer.push(arguments)};window.gtag(\"js\",new Date);window.gtag(\"config\",c);try{void 0!=a[d]&&g(a[d]),void 0!=a[e]&&a[e].page==d&&g(a[e])}catch(f){}};document.getElementsByTagName(\"body\")[0].appendChild(b)})(fl_page,
fl_account,path,hash);
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--request-an-representative--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 48,  84 => 28,  80 => 27,  76 => 26,  57 => 10,  53 => 9,  49 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/request-an-representative-styling') }}
<div class=\"page-content resources-content\" data-page-id=\"RequestARepresentative\" data-page-category=\"Resources\">
\t<div id=\"skip-to-content\"></div>

\t<div id=\"hero\">
\t\t<div>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-patient.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\">
\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
\t\t\t</picture>
\t\t\t<article>
\t\t\t\t<div>
\t\t\t\t\t<h1>
\t\t\t\t\t\tResources
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<h2>Information<br>
\t\t\t\t\t\tto Help You<br>
\t\t\t\t\t\tand Your Patients</h2>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-stu.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\">
\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
\t\t\t</picture>


\t\t</div>
\t</div>

\t<div id=\"first_section\">
\t\t<div id=\"indication_bar\" class=\"close\">
\t\t\t<div>
\t\t\t\t<div class=\"section\">
\t\t\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"body-content\">
\t\t\t<article>
\t\t\t\t<div class=\"title-area\">
\t\t\t\t\t<p class=\"go-back\">
\t\t\t\t\t\t<a href=\"{{ base_path }}resources/professional-resources\" target=\"_self\">Back to Resources list</a>
\t\t\t\t\t</p>
\t\t\t\t\t<h2 class=\"border\">Request A Representative</h2>
\t\t\t\t\t<h3>Connect with an Entyvio Clinical Sales Specialist.</h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"main-container\">
\t\t\t\t\t<form action=\"https://www.entyviohcp.com/vital/requestrep\" method=\"post\" class=\"requestRep\" id=\"requestRep\" name=\"requestRep\" novalidate=\"novalidate\">
\t\t\t\t\t\t<input name=\"__RequestVerificationToken\" type=\"hidden\" value=\"MAy9uKkRHTW5k9NEJ3IaJbLqf_RjveAHxRIeJskSNpZim52FzvESAuQOj0XQC7a-mTgA3bX8UZnkH5VSHPMUqPsVOVtAjLBZro8UrOEI-MQ1\">
\t\t\t\t\t\t<section data-step=\"1\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>Please fill out the appropriate fields indicated to have a Takeda representative contact you.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" data-val=\"true\" data-val-required=\"Please make a selection.\" id=\"DEA\" type=\"radio\" value=\"DEA\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"DEA\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>DEA #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"ME\" type=\"radio\" value=\"ME\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ME\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>ME #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"SLN\" type=\"radio\" value=\"SLN\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"SLN\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>SLN #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div data-form=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"IDType\" id=\"NPI\" type=\"radio\" value=\"NPI\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"NPI\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>NPI #</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDType\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"npi-lookup hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://npiregistry.cms.hhs.gov/\" data-modal=\"external_third_party\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Click here</a>
\t\t\t\t\t\t\t\t\t\t\t\tto look up your NPI #.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber\" data-val=\"true\" data-val-idtype=\"#DEA\" data-val-maxlength=\"The field IDDEA must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDDEA\" maxlength=\"30\" name=\"IDDEA\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDDEA\">DEA</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDDEA\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#ME\" data-val-maxlength=\"The field IDME must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDME\" maxlength=\"30\" name=\"IDME\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDME\">ME</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDME\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#SLN\" data-val-maxlength=\"The field IDSLN must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDSLN\" maxlength=\"30\" name=\"IDSLN\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDSLN\">SLN</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDSLN\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input class=\"idnumber hidden\" data-val=\"true\" data-val-idtype=\"#NPI\" data-val-maxlength=\"The field IDNPI must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" id=\"IDNPI\" maxlength=\"30\" name=\"IDNPI\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<label class=\"visuallyhidden\" for=\"IDNPI\">NPI</label>
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"IDNPI\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field ID must be a string or array type with a maximum length of '30'.\" data-val-maxlength-max=\"30\" data-val-required=\"Please enter your identification number.\" id=\"ID\" name=\"ID\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"ID\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"FirstName\">First Name</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field First Name must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your first name.\" id=\"FirstName\" maxlength=\"50\" name=\"FirstName\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"FirstName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"LastName\">Last Name</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Last Name must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your last name.\" id=\"LastName\" maxlength=\"50\" name=\"LastName\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"LastName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button id=\"step_1_submit\" class=\"btn btn-primary\" type=\"submit\" formaction=\"https://www.entyviohcp.com/vital/validateuser\">Continue</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"error hidden\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section data-step=\"2\" class=\"hidden\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>Please fill out the appropriate fields indicated to have a Takeda representative contact you.</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<label for=\"Email\">Email</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-regex=\"Please enter a valid email address.\" data-val-regex-pattern=\"^([-!#\$%&amp;'&quot;\\*\\+/=?^_`{|}~\\w\\[\\]\\.]+)@([-\\w\\.\\[\\]:]+)\\.([-\\w\\[\\]:]+)\$\" data-val-required=\"Please enter your email address.\" id=\"Email\" name=\"Email\" type=\"email\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Email\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t<label for=\"Phone\">Phone Number</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Phone Number must be a string or array type with a maximum length of '10'.\" data-val-maxlength-max=\"10\" data-val-required=\"Please enter a valid 10 digit phone number.\" id=\"Phone\" maxlength=\"10\" name=\"Phone\" type=\"tel\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Phone\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Address1\" maxlength=\"255\">Address line 1</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Address line 1 must be a string or array type with a maximum length of '255'.\" data-val-maxlength-max=\"255\" data-val-required=\"Please enter your address.\" id=\"Address1\" name=\"Address1\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Address1\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Address2\">Address line 2</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field Address line 2 must be a string or array type with a maximum length of '255'.\" data-val-maxlength-max=\"255\" id=\"Address2\" maxlength=\"255\" name=\"Address2\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Address2\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<label for=\"City\">City</label>
\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field City must be a string or array type with a maximum length of '50'.\" data-val-maxlength-max=\"50\" data-val-required=\"Please enter your city.\" id=\"City\" maxlength=\"50\" name=\"City\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"City\" data-valmsg-replace=\"true\"></span>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"State\">State</label>
\t\t\t\t\t\t\t\t\t\t\t<select data-val=\"true\" data-val-maxlength=\"The field State must be a string or array type with a maximum length of '2'.\" data-val-maxlength-max=\"2\" data-val-required=\"Please select your state.\" id=\"State\" name=\"State\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">State</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AK\">AK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AL\">AL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AR\">AR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"AZ\">AZ</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CA\">CA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CO\">CO</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"CT\">CT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DC\">DC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DE\">DE</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"FL\">FL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"GA\">GA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"HI\">HI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IA\">IA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ID\">ID</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IL\">IL</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"IN\">IN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"KS\">KS</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"KY\">KY</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"LA\">LA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MA\">MA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MD\">MD</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ME\">ME</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MI\">MI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MN\">MN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MO\">MO</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MS\">MS</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"MT\">MT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NC\">NC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ND\">ND</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NE\">NE</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NH\">NH</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NJ\">NJ</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NM\">NM</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NV\">NV</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"NY\">NY</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OH\">OH</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OK\">OK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"OR\">OR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"PA\">PA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"PR\">PR</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"RI\">RI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"SC\">SC</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"SD\">SD</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"TN\">TN</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"TX\">TX</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UT\">UT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VA\">VA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VI\">VI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"VT\">VT</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WA\">WA</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WI\">WI</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WV\">WV</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"WY\">WY</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"State\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"half\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"Zip\">ZIP Code</label>
\t\t\t\t\t\t\t\t\t\t\t<input data-val=\"true\" data-val-maxlength=\"The field ZIP Code must be a string or array type with a maximum length of '5'.\" data-val-maxlength-max=\"5\" data-val-regex=\"Please enter a valid ZIP code.\" data-val-regex-pattern=\"^(\\d{5})(\\-?\\d{4}){0,1}\$\" data-val-required=\"Please enter your ZIP code.\" id=\"Zip\" maxlength=\"5\" name=\"Zip\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"field-validation-valid\" data-valmsg-for=\"Zip\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<button id=\"step_2_submit\" class=\"btn btn-primary\" type=\"submit\">Submit</button>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"error hidden\" id=\"Server-error\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"success hidden\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h2>Thank you</h2>
\t\t\t\t\t\t\t\t<h3>We have received your request.</h3>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>

\t<!-- *********************** -->
<!-- **** CODE ENDS **** *** -->
\t<!-- *********************** -->
</div>
<div id=\"isi\">
\t<aside class=\"section\">
\t\t<article>
\t\t\t<button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
\t\t\t\t<span></span>
\t\t\t</button>
\t\t\t<div class=\"isi-header\">
\t\t\t\t<h2>Important Safety Information</h2>
\t\t\t</div>
\t\t\t<ul>
\t\t\t\t<li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

\t\t\t\t<li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

\t\t\t\t<li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

\t\t\t\t<li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup>
\t\t\t\t\tand prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

\t\t\t\t<li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

\t\t\t\t<li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

\t\t\t\t<li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
\t\t\t</ul>

\t\t\t<h2>Indications</h2>
\t\t\t<h3>Adult Ulcerative Colitis (UC)</h3>
\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t<h3>Adult Crohn's Disease (CD)</h3>
\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t<p>Please see
\t\t\t\t<a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including
\t\t\t\t<a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
\t\t</article>
\t</aside>

</div>

<script>
  const pauseVideo = (id, time) => {
      const video = document.getElementById(id);
      video.pause();
      video.classList.add('playing');
      video.currentTime = time;
  },
  homepage_hover = () => {
      document.querySelector('.head-to-head .btn').classList.add('hover');
      document.querySelector('.btn[href=\"/mechanism-of-action\"]').classList.add('hover');
  },
  Extra_Form_Errors = () => {
      setTimeout(function () {
          document.querySelectorAll('input, select').forEach(element => element.blur());
          document.getElementById('Email-error').innerHTML = '<span class=\"ed-templating\">[</span>Please enter your email address.<span class=\"ed-templating\">]</span><br /><span class=\"ed-templating\">[</span>Please enter a valid email address.<span class=\"ed-templating\">]</span>';
          document.getElementById('Zip-error').innerHTML = '<span class=\"ed-templating\">[</span>Please enter your ZIP code.<span class=\"ed-templating\">]</span><br /><span class=\"ed-templating\">[</span>Please enter a valid ZIP code.<span class=\"ed-templating\">]</span>';
          document.getElementById('Server-error').innerHTML = 'Sorry, an error occurred while processing your request.';
      }, 1000);
  };
</script>

<script type=\"text/javascript\" id=\"\">
var pulsePointPageConv={\"/\":\"502363\",\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":\"502364\",\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":\"502365\",\"/mechanism-of-action\":\"502366\",\"/safety-profile\":\"502968\",\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":\"502368\",\"/resources/clinical-reprints\":\"502369\",\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":\"502500\",\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":\"502501\",\"/resources/peer-perspective\":\"502502\",\"/local-coverage\":\"503415\",
\"/#isi\":\"503417\"},pulsePointPageRet={\"/\":{vid:\"5720\",token:\"C20G50\"},\"/clinical-data/uc-data\":{vid:\"5720\",token:\"WELCZN\"},\"/clinical-data/cd-data\":{vid:\"5720\",token:\"RCD24A\"},\"/mechanism-of-action\":{vid:\"5720\",token:\"AFZLUC\"},\"/safety-profile\":{vid:\"5720\",token:\"MHVJZX\"},\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":{vid:\"5720\",token:\"T3VKUO\"},\"/resources/clinical-reprints\":{vid:\"5720\",token:\"J72ZVR\"},\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":{vid:\"5720\",token:\"PMPJGL\"},\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":{vid:\"5720\",
token:\"CZOXCQ\"},\"/resources/peer-perspective\":{vid:\"5720\",token:\"Y0ARNC\"},\"/local-coverage\":{vid:\"5720\",token:\"LYTEQ0\"},\"/#isi\":{vid:\"5720\",token:\"JJJQSF\"}},sendPPConvTag=function(a){window.dataLayer.push({event:\"intouch.ppconv\",\"intouch.ppcv\":a})},sendPPRetTag=function(a){window.dataLayer.push({event:\"intouch.ppretarg\",\"intouch.ppadvid\":a.vid,\"intouch.pptoken\":a.token})};
(function(a,b,c,d){void 0!=b[a]&&sendPPConvTag(b[a]);void 0!=b[a+d]&&sendPPConvTag(b[a+d]);void 0!=c[a]&&sendPPRetTag(c[a]);void 0!=c[a+d]&&sendPPRetTag(c[a+d])})(document.location.pathname.toLowerCase(),pulsePointPageConv,pulsePointPageRet,document.location.hash.toLowerCase());
</script>
<script type=\"text/javascript\" id=\"\">(function(){!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version=\"2.0\",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,\"script\",\"https://connect.facebook.net/en_US/fbevents.js\");fbq(\"dataProcessingOptions\",[\"LDU\"],0,0);fbq(\"init\",\"225690442257893\");fbq(\"track\",\"PageView\")})();</script>
<script type=\"text/javascript\" id=\"\">
var fl_page={\"/clinical-data/cd-data\":{type:\"entyv0\",cat:\"taked000\"},\"/clinical-efficacy/ulcerative-colitis/varsity-trial\":{type:\"entyv0\",cat:\"taked003\"},\"/resources/clinical-reprints\":{type:\"entyv0\",cat:\"taked004\"},\"/clinical-efficacy/ulcerative-colitis/gemini-trial\":{type:\"entyv0\",cat:\"taked006\"},\"/clinical-efficacy/crohns-disease/entyvio-placebo-trial\":{type:\"entyv0\",cat:\"taked005\"},\"/\":{type:\"entyv0\",cat:\"taked0\"},\"/mechanism-of-action\":{type:\"entyv0\",cat:\"taked001\"},\"/safety-profile\":{type:\"entyv0\",
cat:\"taked008\"},\"/clinical-data/uc-data\":{type:\"entyv0\",cat:\"taked00\"},\"/resources/peer-perspective\":{type:\"entyv0\",cat:\"taked007\"},\"#isi\":{page:\"/\",type:\"entyv0\",cat:\"taked00a\"},\"/local-coverage\":{type:\"entyv0\",cat:\"taked009\"}},path=document.location.pathname.toLowerCase(),hash=document.location.hash.toLowerCase(),fl_account=\"DC-9400057\";
(function(a,c,d,e){var g=function(f){window.gtag(\"event\",\"conversion\",{allow_custom_scripts:!0,send_to:c+\"/\"+f.type+\"/\"+f.cat+\"+standard\"})},b=document.createElement(\"script\");b.src=\"https://www.googletagmanager.com/gtag/js?id\\x3d\"+c;b.async=!0;b.onload=function(){window.dataLayer=window.dataLayer||[];window.gtag=function(){dataLayer.push(arguments)};window.gtag(\"js\",new Date);window.gtag(\"config\",c);try{void 0!=a[d]&&g(a[d]),void 0!=a[e]&&a[e].page==d&&g(a[e])}catch(f){}};document.getElementsByTagName(\"body\")[0].appendChild(b)})(fl_page,
fl_account,path,hash);
</script>
", "themes/custom/entyviohcp/templates/content/node--request-an-representative--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--request-an-representative--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
