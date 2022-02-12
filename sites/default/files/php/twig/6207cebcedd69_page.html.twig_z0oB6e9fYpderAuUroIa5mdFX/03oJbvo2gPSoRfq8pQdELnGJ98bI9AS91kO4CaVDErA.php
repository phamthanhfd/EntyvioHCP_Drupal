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
class __TwigTemplate_d7ffc5e882fe68933dab45b21ab75690b2306c43d68f3de321eb8d7a45692e5f extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top", [], "any", false, false, true, 2) - ($context["header"] ?? null))) {
            // line 3
            echo "      <div class=\"top-header\">
        ";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top", [], "any", false, false, true, 4) - ($context["header"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 7)) {
            // line 8
            echo "      <div class=\"main-header\">
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
            echo "   <main aria-label=\"Site main content\" class=\"content main-content_container\" id=\"content\" role=\"main\">
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
   <div class=\"footer_container\">
       ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
   </div>
</footer>
";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky", [], "any", false, false, true, 43) - ($context["bar"] ?? null))) {
            // line 44
            echo "<section class=\"sticky-bar\" style=\"position: fixed; top: 100%;\">
    <div class=\"sticky-bar_container\">
      ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_bar", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
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
        return array (  139 => 46,  135 => 44,  133 => 43,  127 => 40,  122 => 37,  116 => 34,  113 => 33,  111 => 32,  108 => 31,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  88 => 22,  85 => 21,  83 => 20,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  65 => 12,  59 => 9,  56 => 8,  53 => 7,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/entyviohcp/templates/page.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\page.html.twig");
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
