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
        echo "      <div class=\"top-menu-header\">
        <div class=\"top-menu-header_container\">
          <div class=\"top-menu-header_sm\">FOR U.S. HEALTHCARE PROFESSIONALS</div>
          ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu_left", [], "any", false, false, true, 10)) {
            // line 11
            echo "            <div class=\"top-menu-left\">
              ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu_left", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 15
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu_right", [], "any", false, false, true, 15)) {
            // line 16
            echo "            <div class=\"top-menu-right\">
              ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu_right", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 20
        echo "        </div>
      </div>
    <div class=\"main-header\">
        <div class=\"main-header_container\">
          ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo_header", [], "any", false, false, true, 24)) {
            // line 25
            echo "            <div class=\"logo-header\">
              ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo_header", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 29
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu_header", [], "any", false, false, true, 29)) {
            // line 30
            echo "            <div class=\"main-navigation-header ";
            if (($context["is_front"] ?? null)) {
                echo " front-page ";
            }
            echo "\">
              ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu_header", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 34
        echo "        </div>
    </div>
</header>
<section class=\"main\" id=\"main\">
  ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight", [], "any", false, false, true, 38)) {
            // line 39
            echo "  <div class=\"highlight_container\">
    ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlight", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 44)) {
            // line 45
            echo "  <div class=\"highlight_about\">
    ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 50)) {
            // line 51
            echo "  <div class=\"highlight_services\">
    ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 56)) {
            // line 57
            echo "   <main aria-label=\"Site main content\" class=\"content main-content_container\" id=\"page-content\" role=\"main\">
     ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
   </main>
   ";
        }
        // line 61
        echo "</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
   <div class=\"footer_container\" >
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <div class=\"footer-logo\">
       <a href=\"http://www.takeda.com/\">";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 69
        echo "    <div class=\"footer-content\">
    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 70)) {
            // line 71
            echo "      <div class=\"footer-menu\">
       ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 75
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 75)) {
            // line 76
            echo "      <div class=\"footer-detail\">
       ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
       </div>
       ";
        }
        // line 80
        echo "    </div>
   </div>
</footer>
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_bar", [], "any", false, false, true, 83)) {
            // line 84
            echo "<section class=\"sticky-bar\" style=\"\">
    <div class=\"sticky-bar_container\">
      ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sticky_bar", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
    </div>
</section>
";
        }
        // line 90
        echo "<button class=\"back-to-top show\" tabindex=\"0\">Back to top</button>

<section class=\"main-menu-mb\" style=\"\">
    <div class=\"main-menu-mb_container\">
        <div class=\"sologan\">
        </div>
      <div class=\"logo-mn\">
          <div class=\"logo\">
          </div>
        <button class=\"close-menu\"><span></span></button>
      </div>
      <div class=\"menus\">
          <div class=\"menu-list\">
            <div class=\"menu1 lmenu ";
        // line 103
        if (($context["is_front"] ?? null)) {
            echo " front-page ";
        }
        echo "\"></div>
            <div class=\"menu2 lmenu\"></dic>
          </div>
      </div>
    </div>
</section>

";
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
        return array (  248 => 103,  233 => 90,  226 => 86,  222 => 84,  220 => 83,  215 => 80,  209 => 77,  206 => 76,  203 => 75,  197 => 72,  194 => 71,  192 => 70,  189 => 69,  183 => 66,  180 => 65,  178 => 64,  173 => 61,  167 => 58,  164 => 57,  162 => 56,  159 => 55,  153 => 52,  150 => 51,  148 => 50,  145 => 49,  139 => 46,  136 => 45,  134 => 44,  131 => 43,  125 => 40,  122 => 39,  120 => 38,  114 => 34,  108 => 31,  101 => 30,  98 => 29,  92 => 26,  89 => 25,  87 => 24,  81 => 20,  75 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  53 => 7,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
    {% if page.top_header %}
      <div class=\"top-header\">
        {{ page.top_header }}
      </div>
    {% endif %}
      <div class=\"top-menu-header\">
        <div class=\"top-menu-header_container\">
          <div class=\"top-menu-header_sm\">FOR U.S. HEALTHCARE PROFESSIONALS</div>
          {% if page.top_menu_left %}
            <div class=\"top-menu-left\">
              {{ page.top_menu_left }}
            </div>
          {% endif %}
          {% if page.top_menu_right %}
            <div class=\"top-menu-right\">
              {{ page.top_menu_right }}
            </div>
          {% endif %}
        </div>
      </div>
    <div class=\"main-header\">
        <div class=\"main-header_container\">
          {% if page.logo_header %}
            <div class=\"logo-header\">
              {{ page.logo_header }}
            </div>
          {% endif %}
          {% if page.main_menu_header %}
            <div class=\"main-navigation-header {% if is_front %} front-page {% endif %}\">
              {{ page.main_menu_header }}
            </div>
          {% endif %}
        </div>
    </div>
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
{% if page.sticky_bar %}
<section class=\"sticky-bar\" style=\"\">
    <div class=\"sticky-bar_container\">
      {{ page.sticky_bar }}
    </div>
</section>
{% endif %}
<button class=\"back-to-top show\" tabindex=\"0\">Back to top</button>

<section class=\"main-menu-mb\" style=\"\">
    <div class=\"main-menu-mb_container\">
        <div class=\"sologan\">
        </div>
      <div class=\"logo-mn\">
          <div class=\"logo\">
          </div>
        <button class=\"close-menu\"><span></span></button>
      </div>
      <div class=\"menus\">
          <div class=\"menu-list\">
            <div class=\"menu1 lmenu {% if is_front %} front-page {% endif %}\"></div>
            <div class=\"menu2 lmenu\"></dic>
          </div>
      </div>
    </div>
</section>

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
