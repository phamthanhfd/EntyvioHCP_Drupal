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

/* themes/gin/templates/misc/status-messages.html.twig */
class __TwigTemplate_afb5a3ae91bf876729b76ac2134449b39f5f4ed6b1e733c9475622efee2ce540 extends \Twig\Template
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
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_messages"), "html", null, true);
        echo "
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "      ";
            // line 30
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 33
$context["type"], 33, $this->source))];
            // line 36
            echo "      ";
            // line 37
            $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null);
            // line 39
            echo "      ";
            // line 40
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 42
            echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null), 43, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
        ";
            // line 44
            if (($context["type"] == "error")) {
                // line 45
                echo "          <div role=\"alert\">
        ";
            }
            // line 47
            echo "          ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 48
                echo "            <div class=\"messages__header\">
              ";
                // line 49
                if (($context["is_message_with_title"] ?? null)) {
                    // line 50
                    echo "                <h2 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 50, $this->source), "html", null, true);
                    echo "\" class=\"messages__title\">
                  ";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 51, $this->source), "html", null, true);
                    echo "
                </h2>
              ";
                }
                // line 54
                echo "            </div>
          ";
            }
            // line 56
            echo "          <button type=\"button\" class=\"button button--dismiss\" title=\"Dismiss\"><span class=\"icon-close\"></span>Close</button>
          <div class=\"messages__content\">
            ";
            // line 58
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 59
                echo "              <ul class=\"messages__list\">
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 61
                    echo "                  <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 61, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "              </ul>
            ";
            } else {
                // line 65
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 65, $this->source)), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "          </div>
        ";
            // line 68
            if (($context["type"] == "error")) {
                // line 69
                echo "          </div>
        ";
            }
            // line 71
            echo "      </div>
      ";
            // line 73
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 73);
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 75,  147 => 74,  144 => 73,  141 => 71,  137 => 69,  135 => 68,  132 => 67,  126 => 65,  122 => 63,  113 => 61,  109 => 60,  106 => 59,  104 => 58,  100 => 56,  96 => 54,  90 => 51,  85 => 50,  83 => 49,  80 => 48,  77 => 47,  73 => 45,  71 => 44,  65 => 43,  62 => 42,  60 => 40,  58 => 39,  56 => 37,  54 => 36,  52 => 33,  51 => 30,  49 => 29,  45 => 28,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 * - title_ids: A list of unique ids keyed by message type.
 *
 * @see claro_preprocess_status_messages().
 */
#}
{{ attach_library('gin/gin_messages') }}
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    {% for type, messages in message_list %}
      {%
        set classes = [
          'messages-list__item',
          'messages',
          'messages--' ~ type,
        ]
      %}
      {%
        set is_message_with_title = status_headings[type]
      %}
      {%
        set is_message_with_icon = type in ['error', 'status', 'warning']
      %}

      <div role=\"contentinfo\" aria-labelledby=\"{{ title_ids[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
        {% if type == 'error' %}
          <div role=\"alert\">
        {% endif %}
          {% if is_message_with_title or is_message_with_icon %}
            <div class=\"messages__header\">
              {% if is_message_with_title %}
                <h2 id=\"{{ title_ids[type] }}\" class=\"messages__title\">
                  {{ status_headings[type] }}
                </h2>
              {% endif %}
            </div>
          {% endif %}
          <button type=\"button\" class=\"button button--dismiss\" title=\"Dismiss\"><span class=\"icon-close\"></span>Close</button>
          <div class=\"messages__content\">
            {% if messages|length > 1 %}
              <ul class=\"messages__list\">
                {% for message in messages %}
                  <li class=\"messages__item\">{{ message }}</li>
                {% endfor %}
              </ul>
            {% else %}
              {{ messages|first }}
            {% endif %}
          </div>
        {% if type == 'error' %}
          </div>
        {% endif %}
      </div>
      {# Remove type specific classes. #}
      {% set attributes = attributes.removeClass(classes) %}
    {% endfor %}
  </div>
</div>
", "themes/gin/templates/misc/status-messages.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\gin\\templates\\misc\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28, "set" => 30, "if" => 44);
        static $filters = array("escape" => 25, "without" => 43, "length" => 58, "first" => 65);
        static $functions = array("attach_library" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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