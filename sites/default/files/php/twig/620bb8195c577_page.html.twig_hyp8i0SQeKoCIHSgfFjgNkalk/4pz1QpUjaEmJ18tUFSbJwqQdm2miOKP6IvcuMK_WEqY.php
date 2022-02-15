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

/* themes/custom/entyviohcp/templates/page.html.twig */
class __TwigTemplate_5b326ba4871be107e5e57822127ba6a9362ba36c083a8c306e9b68440245ae27 extends \Twig\Template
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
        echo "<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 2)) {
            // line 3
            echo "      <div class=\"top-header\">
        ";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 7)) {
            // line 8
            echo "      <div class=\"main-header ";
            if (($context["is_front"] ?? null)) {
                echo " front-page ";
            }
            echo "\">
        ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 12
        echo "</header>
<section class=\"main\" id=\"main\">
  ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight", [], "any", false, false, true, 14)) {
            // line 15
            echo "  <div class=\"highlight_container\">
    ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 20)) {
            // line 21
            echo "  <div class=\"highlight_about\">
    ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 26)) {
            // line 27
            echo "  <div class=\"highlight_services\">
    ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 32)) {
            // line 33
            echo "   <main aria-label=\"Site main content\" class=\"content main-content_container\" id=\"page-content\" role=\"main\">
     ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
   </main>
   ";
        }
        // line 37
        echo "</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer_container\" >
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 40)) {
            // line 41
            echo "    <div class=\"footer-logo\">
       <a href=\"http://www.takeda.com/\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 45
        echo "    <div class=\"footer-content\">
    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 46)) {
            // line 47
            echo "      <div class=\"footer-menu\">
       ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 51
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 51)) {
            // line 52
            echo "      <div class=\"footer-detail\">
       ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
       </div>
       ";
        }
        // line 56
        echo "    </div>
   </div>
</footer>
";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky", [], "any", false, false, true, 59) - ($context["bar"] ?? null))) {
            // line 60
            echo "<section class=\"sticky-bar\" style=\"position: fixed; top: 100%;\">
    <div class=\"sticky-bar_container\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_bar", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  175 => 60,  173 => 59,  168 => 56,  162 => 53,  159 => 52,  156 => 51,  150 => 48,  147 => 47,  145 => 46,  142 => 45,  136 => 42,  133 => 41,  131 => 40,  126 => 37,  120 => 34,  117 => 33,  115 => 32,  112 => 31,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  78 => 16,  75 => 15,  73 => 14,  69 => 12,  63 => 9,  56 => 8,  53 => 7,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    {% if page.top_header %}
      <div class=\"top-header\">
        {{ page.top_header }}
      </div>
    {% endif %}
    {% if page.header %}
      <div class=\"main-header {% if is_front %} front-page {% endif %}\">
        {{ page.header }}
      </div>
    {% endif %}
</header>
<section class=\"main\" id=\"main\">
  {% if page.highlight %}
  <div class=\"highlight_container\">
    {{ page.highlight }}
  </div>
  {% endif %}

  {% if page.about %}
  <div class=\"highlight_about\">
    {{ page.about }}
  </div>
  {% endif %}

  {% if page.services %}
  <div class=\"highlight_services\">
    {{ page.services }}
  </div>
  {% endif %}

  {% if page.content %}
   <main aria-label=\"Site main content\" class=\"content main-content_container\" id=\"page-content\" role=\"main\">
     {{ page.content }}
   </main>
   {% endif %}
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer_container\" >
    {% if page.footer_logo %}
    <div class=\"footer-logo\">
       <a href=\"http://www.takeda.com/\">{{ page.footer_logo }}</a>
    </div>
    {% endif %}
    <div class=\"footer-content\">
    {% if page.footer_menu %}
      <div class=\"footer-menu\">
       {{ page.footer_menu }}
      </div>
      {% endif %}
      {% if page.footer_content %}
      <div class=\"footer-detail\">
       {{ page.footer_content }}
       </div>
       {% endif %}
    </div>
   </div>
</footer>
{% if page.sticky-bar %}
<section class=\"sticky-bar\" style=\"position: fixed; top: 100%;\">
    <div class=\"sticky-bar_container\">
      {{ page.sticky_bar }}
    </div>
</section>
{% endif %}
", "themes/custom/entyviohcp/templates/page.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
