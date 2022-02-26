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

/* themes/custom/entyviohcp/templates/content/node--mechanism-of-action--full.html.twig */
class __TwigTemplate_8cb627de291bf2715f3ded1b84c70527 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/mechanism-styling"), "html", null, true);
        echo "
<div data-page-id=\"MechanismOfAction\" data-page-category=\"MechanismOfAction\" class=\"page-content mechanism-content\" >
    <div id=\"hero\">
        <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/images/hero/mobile-moa-shuya.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-shuya.png\">
                        <img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-shuya.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                            Mechanism<br>
                            <strong>of Action</strong>
                        </h1>
                </div>

                <div>
                    <h2>
                            Made for <br>
                            <strong>Selectivity</strong>
                        </h2>
                </div>

                <div class=\"extra-list\">
                    <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on the GI tract endothelial cells.<sup>1-7</sup>
                    </p>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
        echo "/images/hero/mobile-moa-rhitu.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 32, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 32, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-rhitu.png\">
                        <img src=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-rhitu.png\" alt=\"Healthcare professional.\">
            </picture>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--mechanism-of-action--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  81 => 31,  55 => 8,  51 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/mechanism-styling') }}
<div data-page-id=\"MechanismOfAction\" data-page-category=\"MechanismOfAction\" class=\"page-content mechanism-content\" >
    <div id=\"hero\">
        <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-moa-shuya.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-moa-shuya.png\">
                        <img src=\"{{ base_path ~ directory }}/images/hero/desktop-moa-shuya.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                            Mechanism<br>
                            <strong>of Action</strong>
                        </h1>
                </div>

                <div>
                    <h2>
                            Made for <br>
                            <strong>Selectivity</strong>
                        </h2>
                </div>

                <div class=\"extra-list\">
                    <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on the GI tract endothelial cells.<sup>1-7</sup>
                    </p>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-moa-rhitu.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-moa-rhitu.png\">
                        <img src=\"{{ base_path ~ directory }}/images/hero/desktop-moa-rhitu.png\" alt=\"Healthcare professional.\">
            </picture>

        </div>
    </div>
</div>", "themes/custom/entyviohcp/templates/content/node--mechanism-of-action--full.html.twig", "C:\\xampp\\htdocs\\EntyvioHCP_Drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--mechanism-of-action--full.html.twig");
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
