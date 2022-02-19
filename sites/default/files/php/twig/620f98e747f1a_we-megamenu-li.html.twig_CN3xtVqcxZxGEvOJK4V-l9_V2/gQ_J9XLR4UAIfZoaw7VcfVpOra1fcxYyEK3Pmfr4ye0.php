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

/* modules/contrib/we_megamenu/templates/we-megamenu-li.html.twig */
class __TwigTemplate_30107a1b14ca0ffa31c6ec777caf787ceb24a19a504c641392f60121c973d2ae extends \Twig\Template
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
        echo "<li ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
  ";
        // line 2
        if (twig_test_empty(($context["href"] ?? null))) {
            // line 3
            echo "    <a href='#' data-drupal-link-system-path=\"<front>\" class=\"we-megamenu-nolink\">
      ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", true, true, true, 4) && twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 4)))) {
                // line 5
                echo "        <i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
            // line 9
            echo "</a>
  ";
        } else {
            // line 11
            echo "    <a class=\"we-mega-menu-li\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 11, $this->source), "html", null, true);
            echo "\" target=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-target", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
      ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", true, true, true, 12) && twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 12)))) {
                // line 13
                echo "        <i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-icon", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 16, $this->source), "html", null, true);
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", true, true, true, 18) && twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 18)))) {
                // line 19
                echo "        <span class=\"we-mega-menu-caption\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "data-caption", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 21
            echo "    </a>
  ";
        }
        // line 23
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/we_megamenu/templates/we-megamenu-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  84 => 19,  82 => 18,  80 => 16,  74 => 13,  72 => 12,  63 => 11,  59 => 9,  57 => 8,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li {{ attributes }}>
  {% if href is empty %}
    <a href='#' data-drupal-link-system-path=\"<front>\" class=\"we-megamenu-nolink\">
      {% if (attribute(attributes, 'data-icon') is defined and attribute(attributes, 'data-icon')|trim) %}
        <i class=\"{{ attribute(attributes, 'data-icon') }}\"></i>
      {% endif %}

      {{- title -}}
    </a>
  {% else %}
    <a class=\"we-mega-menu-li\" title=\"{{ attribute(attributes, 'description') }}\" href=\"{{ href }}\" target=\"{{ attribute(attributes, 'data-target') }}\">
      {% if (attribute(attributes, 'data-icon') is defined and attribute(attributes, 'data-icon')|trim) %}
        <i class=\"{{ attribute(attributes, 'data-icon') }}\"></i>
      {% endif %}

      {{- title -}}

      {% if (attribute(attributes, 'data-caption') is defined and attribute(attributes, 'data-caption')|trim) %}
        <span class=\"we-mega-menu-caption\">{{ attribute(attributes, 'data-caption') }}</span>
      {% endif %}
    </a>
  {% endif %}
  {{ content }}
</li>", "modules/contrib/we_megamenu/templates/we-megamenu-li.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\modules\\contrib\\we_megamenu\\templates\\we-megamenu-li.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 1, "trim" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim'],
                []
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
