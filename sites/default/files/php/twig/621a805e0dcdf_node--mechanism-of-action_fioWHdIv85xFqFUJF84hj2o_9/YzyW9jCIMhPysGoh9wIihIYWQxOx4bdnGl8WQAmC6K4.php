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
    <div id=\"first_section\">
        <div id=\"indication_bar\" class=\"close\">
            <div>
                <div class=\"section\">
                    <h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
                </div>
            </div>
        </div>

        <div>
            <article>
                <div class=\"moa-intro\">
                    <h2 class=\"border\"><span>ENTYVIO WAS MADE FOR&nbsp;SELECTIVITY<sup>1‑6</sup></span></h2>
                    <div class=\"container\" data-row=\"\">
                        <div class=\"key-point\" data-col=\"mobile-12 desktop-5\">
                            <p>Entyvio helps address inflammation where it occurs—<span class=\"brand-secondary\">the gut</span><sup>1</sup></p>
                        </div>
                        <div class=\"body-copy\" data-col=\"mobile-12 desktop-7\">
                            <p>Ulcerative colitis and Crohn's disease cause chronic inflammation of the gut, and infiltrating T‑lymphocytes cross the endothelium into the inflamed GI tissue.<sup>8</sup> Entyvio is the first and only gut‑selective biologic to focus its action on an inflammatory pathway in the gut.<sup>1-6</sup></p>
                        </div>
                    </div>
                    <div class=\"video-container\" role=\"img\" aria-label=\"Entyvio® (vedolizumab) mechanism of action video.\">
                        <video class=\"video-js\" data-account=\"1841264443001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186623001\" data-video-title=\"Mechanism of Action\"  data-playlist-id=\"\" data-application-id=\"\" width=\"960\" height=\"540\"></video>
                        <script src=\"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.min.js\"></script>
                    </div>
                </div>
                <div class=\"moa-steps\">
                    <h2 class=\"border\"><span>THE ONLY GUT-SELECTIVE BIOLOGIC FOR UC AND CD<sup>1,5</sup></span></h2>
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\" data-accordion-type=\"list\">
                            <div class=\"accordion-list\">
                                <ul aria-label=\"Accordion Label\" class=\"accordion-controls\">
                                    <li class=\"active\" data-vitals-expansion=\"Lymphocytes cause inflammation\">
                                        <button id=\"accordion_trigger_id_1\" aria-controls=\"accordion_content_1\" aria-expanded=\"true\">
                                            Excess Lymphocytes cause inflammation<sup>1,8</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>Lymphocytes migrate into the GI tissue. An increased number of infiltrating lymphocytes and other inflammatory cells in the gut is one of the contributors to the inflammatory response.<sup>1,8</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 81, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 81, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation.png\" alt=\"Inflammation in the gut due to excess lymphocyte migration in UC and Crohn's disease.\" title=\"Inflammation in the Gut\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Lymphocytes enter gi tissue\">
                                        <button id=\"accordion_trigger_id_2\" aria-controls=\"accordion_content_2\" aria-expanded=\"false\">
                                            Certain Lymphocytes enter gi tissue<sup>1,7,8</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_2\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>The interaction between α4β7 integrin expressed on a certain subset of T cells, and its ligand, MAdCAM-1, contributes to inflammation in the GI tissue.<sup>1,7,8</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-gi-tissue.png\" alt=\"Lymphocytes in the GI tissue.\" title=\"Lymphocytes in the GI Tissue\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                            <div class=\"to_footnote\">
                                                <p>GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Entyvio blocks lymphocyte interaction\">
                                        <button id=\"accordion_trigger_id_3\" aria-controls=\"accordion_content_3\" aria-expanded=\"false\">
                                            Entyvio blocks lymphocyte interaction<sup>1</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_3\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on GI tract endothelial cells.<sup>1-7</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 114, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 114, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-entyvio-blocks.png\" alt=\"Mechanism of action for Entyvio® (vedolizumab).\" title=\"Mechanism of Action for Entyvio® (vedolizumab)\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                            <div class=\"to_footnote\">
                                                <p>GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Inflammation is reduced\">
                                        <button id=\"accordion_trigger_id_4\" aria-controls=\"accordion_content_4\" aria-expanded=\"false\">
                                            Inflammation is reduced<sup>1</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_4\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>T-lymphocyte migration into the gut is inhibited and inflammation is reduced.<sup>1</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation-reduced.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 134, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 134, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation-reduced.png\">
                                                    <img src=\"";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 135, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 135, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation-reduced.png\" alt=\"With Entyvio® (vedolizumab), gut inflammation is reduced.\" title=\"Reduced Gut Inflammation\">
                                                </picture>
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"footnote\">GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 147, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 147, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 148, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 148, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation.png\">
                                        <img src=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 149, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 149, $this->source)), "html", null, true);
        echo "/images/graphics/desktop-lymphocytes-inflammation.png\" alt=\"Inflammation due to excess lymphocyte migration\">
                                    </picture>
                                    <figcaption>Artist rendition</figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>
                <div class=\"interior-bottom-cta\">
                    <div class=\"cta-container\" data-row=\"\">
                        <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Crohn's Disease Data</p>
                            <a href=\"";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 162, $this->source), "html", null, true);
        echo "clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-secondary\">SEE RESULTS IN CD</a>
                        </div>
                        <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Entyvio Safety Profile</p>
                            <a href=\"";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 166, $this->source), "html", null, true);
        echo "safety-profile\" class=\"btn btn-secondary\">VIEW SAFETY PROFILE</a>
                        </div>
                    </div>
                </div>
            </article>
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
        return array (  255 => 166,  248 => 162,  232 => 149,  228 => 148,  224 => 147,  209 => 135,  205 => 134,  201 => 133,  179 => 114,  158 => 96,  140 => 81,  89 => 33,  85 => 32,  81 => 31,  55 => 8,  51 => 7,  47 => 6,  39 => 1,);
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
    <div id=\"first_section\">
        <div id=\"indication_bar\" class=\"close\">
            <div>
                <div class=\"section\">
                    <h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
                </div>
            </div>
        </div>

        <div>
            <article>
                <div class=\"moa-intro\">
                    <h2 class=\"border\"><span>ENTYVIO WAS MADE FOR&nbsp;SELECTIVITY<sup>1‑6</sup></span></h2>
                    <div class=\"container\" data-row=\"\">
                        <div class=\"key-point\" data-col=\"mobile-12 desktop-5\">
                            <p>Entyvio helps address inflammation where it occurs—<span class=\"brand-secondary\">the gut</span><sup>1</sup></p>
                        </div>
                        <div class=\"body-copy\" data-col=\"mobile-12 desktop-7\">
                            <p>Ulcerative colitis and Crohn's disease cause chronic inflammation of the gut, and infiltrating T‑lymphocytes cross the endothelium into the inflamed GI tissue.<sup>8</sup> Entyvio is the first and only gut‑selective biologic to focus its action on an inflammatory pathway in the gut.<sup>1-6</sup></p>
                        </div>
                    </div>
                    <div class=\"video-container\" role=\"img\" aria-label=\"Entyvio® (vedolizumab) mechanism of action video.\">
                        <video class=\"video-js\" data-account=\"1841264443001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186623001\" data-video-title=\"Mechanism of Action\"  data-playlist-id=\"\" data-application-id=\"\" width=\"960\" height=\"540\"></video>
                        <script src=\"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.min.js\"></script>
                    </div>
                </div>
                <div class=\"moa-steps\">
                    <h2 class=\"border\"><span>THE ONLY GUT-SELECTIVE BIOLOGIC FOR UC AND CD<sup>1,5</sup></span></h2>
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\" data-accordion-type=\"list\">
                            <div class=\"accordion-list\">
                                <ul aria-label=\"Accordion Label\" class=\"accordion-controls\">
                                    <li class=\"active\" data-vitals-expansion=\"Lymphocytes cause inflammation\">
                                        <button id=\"accordion_trigger_id_1\" aria-controls=\"accordion_content_1\" aria-expanded=\"true\">
                                            Excess Lymphocytes cause inflammation<sup>1,8</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>Lymphocytes migrate into the GI tissue. An increased number of infiltrating lymphocytes and other inflammatory cells in the gut is one of the contributors to the inflammatory response.<sup>1,8</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation.png\" alt=\"Inflammation in the gut due to excess lymphocyte migration in UC and Crohn's disease.\" title=\"Inflammation in the Gut\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Lymphocytes enter gi tissue\">
                                        <button id=\"accordion_trigger_id_2\" aria-controls=\"accordion_content_2\" aria-expanded=\"false\">
                                            Certain Lymphocytes enter gi tissue<sup>1,7,8</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_2\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>The interaction between α4β7 integrin expressed on a certain subset of T cells, and its ligand, MAdCAM-1, contributes to inflammation in the GI tissue.<sup>1,7,8</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-gi-tissue.png\" alt=\"Lymphocytes in the GI tissue.\" title=\"Lymphocytes in the GI Tissue\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                            <div class=\"to_footnote\">
                                                <p>GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Entyvio blocks lymphocyte interaction\">
                                        <button id=\"accordion_trigger_id_3\" aria-controls=\"accordion_content_3\" aria-expanded=\"false\">
                                            Entyvio blocks lymphocyte interaction<sup>1</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_3\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on GI tract endothelial cells.<sup>1-7</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <img src=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-entyvio-blocks.png\" alt=\"Mechanism of action for Entyvio® (vedolizumab).\" title=\"Mechanism of Action for Entyvio® (vedolizumab)\">
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                            <div class=\"to_footnote\">
                                                <p>GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-vitals-expansion=\"Inflammation is reduced\">
                                        <button id=\"accordion_trigger_id_4\" aria-controls=\"accordion_content_4\" aria-expanded=\"false\">
                                            Inflammation is reduced<sup>1</sup>
                                            <span></span>
                                        </button>
                                        <div id=\"accordion_content_4\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>T-lymphocyte migration into the gut is inhibited and inflammation is reduced.<sup>1</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation-reduced.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation-reduced.png\">
                                                    <img src=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation-reduced.png\" alt=\"With Entyvio® (vedolizumab), gut inflammation is reduced.\" title=\"Reduced Gut Inflammation\">
                                                </picture>
                                                <figcaption>Artist rendition</figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"footnote\">GI = gastrointestinal; MAdCAM-1 = mucosal addressin cell adhesion molecule‑1.</div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation.png\">
                                        <img src=\"{{ base_path ~ directory }}/images/graphics/desktop-lymphocytes-inflammation.png\" alt=\"Inflammation due to excess lymphocyte migration\">
                                    </picture>
                                    <figcaption>Artist rendition</figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>
                <div class=\"interior-bottom-cta\">
                    <div class=\"cta-container\" data-row=\"\">
                        <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Crohn's Disease Data</p>
                            <a href=\"{{ base_path}}clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-secondary\">SEE RESULTS IN CD</a>
                        </div>
                        <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Entyvio Safety Profile</p>
                            <a href=\"{{ base_path}}safety-profile\" class=\"btn btn-secondary\">VIEW SAFETY PROFILE</a>
                        </div>
                    </div>
                </div>
            </article>
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
