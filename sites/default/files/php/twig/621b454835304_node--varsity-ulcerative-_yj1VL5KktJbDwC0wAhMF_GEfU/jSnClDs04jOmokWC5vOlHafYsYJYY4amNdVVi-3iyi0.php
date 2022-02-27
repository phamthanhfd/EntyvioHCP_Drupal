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

/* themes/custom/entyviohcp/templates/content/node--varsity-ulcerative-colitis-clini--full.html.twig */
class __TwigTemplate_4a923774e280675b8577763faef570b5fda112cd4c7e654dd237e422e5be8a04 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/varsity-styling"), "html", null, true);
        echo "
<div data-page-id=\"VarsityTrial\" data-page-category=\"ClinicalEfficacy\" class=\"page-content varsity-content\">
<div id=\"hero\">
    <div>
                    <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/images/hero/mobile-gemini-varsity-ed.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/desktop-gemini-varsity-ed.png\">
                <img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-gemini-varsity-ed.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        <img src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
        echo "/images/logos/logo-varsity.svg\" alt=\"Entyvio® (vedolizumab) VARSITY trial logo.\"><br>
                        <span>Trial</span>
                    </h1>
                </div>

                <div>
                    <h2 class=\"varsity\">Results of the <br><strong>landmark <br>HEAD-TO-HEAD <br class=\"breakpoint\" data-only=\"desktop\">STUDY</strong></h2>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source)), "html", null, true);
        echo "/images/hero/mobile-gemini-i-varsity-dosing-tricia.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/images/hero/desktop-gemini-i-varsity-dosing-tricia.png\">
                <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/images/hero/desktop-gemini-i-varsity-dosing-tricia.png\" alt=\"Healthcare professional.\">
            </picture>
                            </div>
</div>

<div id=\"first_section\">
    <div id=\"indication_bar\" class=\"close\">
\t<div>
\t\t<div class=\"section\">
\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t</div>
\t</div>
</div>
    <div>
        <article>
            <div id=\"pivotal-trial-data-intro\" class=\"pivotal-trial-data-intro\">
                <h2 class=\"border\">GEMINI I TRIAL DATA</h2>
                <p class=\"trial-description\">The trial studied Entyvio vs. placebo in adult patients with moderately to severely active ulcerative colitis.<sup>1,2</sup></p>
            </div>
            <div id=\"overview-trial-data\" class=\"overview-trial-data\">
                <h2 class=\"border\">OVERVIEW OF VARSITY TRIAL</h2>
                <p class=\"subheading\">In the First Head-to-Head Study of Biologics in Moderate to Severe Ulcerative Colitis, Entyvio Demonstrated Superiority to <span class=\"nobr\">Humira<sup>®</sup>* (adalimumab)</span> in Clinical Remission Rates at Week 52 in the Overall&nbsp;Population<sup>3,4</sup></p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"half graph-1\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Primary End Point</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION <br class=\"special-breakpoint-1\" data-only=\"desktop\">RATES AT <br class=\"special-breakpoint-1\" data-only=\"desktop\"><br class=\"special-breakpoint-2\" data-only=\"desktop\">WEEK&nbsp;52<sup>3†‡</sup></h3>
                                <div class=\"image-container side-by-side varsity\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 56, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-clinical-remission.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
        echo "/images/charts/desktop-varsity-clinical-remission.png\">
                                            <img src=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-clinical-remission.png\" class=\"varsity\" alt=\"Entyvio® (vedolizumab) VARSITY trial clinical remission at Week 52 data.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"half graph-2\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Secondary End Point</p>
                            <div class=\"tile\">
                                <h3>ENDOSCOPIC IMPROVEMENT AT WEEK&nbsp;52<sup>3‡‖</sup></h3>
                                <div class=\"image-container side-by-side varsity\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 71, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 71, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-endoscopic-improvement.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 72, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 72, $this->source)), "html", null, true);
        echo "/images/charts/desktop-varsity-endoscopic-improvement.png\">
                                            <img src=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 73, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 73, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-endoscopic-improvement.png\" class=\"varsity\" alt=\"Entyvio® (vedolizumab) VARSITY trial data: endoscopic improvement at Week 52.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"full text-description\">
                            <p class=\"end-point-description\"><strong>Study Design:</strong> VARSITY was a double‑blind, double‑dummy, active‑controlled trial that compared Entyvio with <span class=\"nobr\">Humira<sup>®</sup>*&nbsp;(adalimumab)</span> in adults with moderately to severely active ulcerative colitis. Eligible patients were randomized (1:1) to receive Entyvio and placebo, or Humira<sup>®</sup> and placebo. After induction, patients remained in their respective treatment group throughout the maintenance phase (treat-through design). Previous exposure to TNFα inhibitors other than Humira<sup>®</sup> was permitted in up to 25% of patients. Patients who had no response or lost response to conventional therapies were eligible. Dosing was consistent with the US product label for both Entyvio and Humira<sup>®</sup>; no dose escalation was permitted for either treatment group.<sup>3</sup> Click below to see full study design and additional study details.</p>
                        </div>
                        <div class=\"half graph-3\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Secondary End Point</p>
                            <div class=\"tile last-tile varsity\">
                                <h3>CORTICOSTEROID-FREE CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3¶</sup></h3>
                                <div class=\"image-container\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 89, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 89, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-corticosteroid-free.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 90, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 90, $this->source)), "html", null, true);
        echo "/images/charts/desktop-varsity-corticosteroid-free.png\">
                                            <img src=\"";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 91, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 91, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-corticosteroid-free.png\" class=\"solo varsity\" alt=\"Corticosteroid-free remission at Week 52 in Entyvio® (vedolizumab) VARSITY ulcerative colitis clinical trial.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                                <p class=\"text-area\">For patients on corticosteroids at baseline: Doses must have been stable for ≥2 weeks prior to the first dose and remained unaltered through Week&nbsp;6. After Week&nbsp;6, a nonfixed dose tapering was started upon achieving response. During tapering, patients could return to baseline doses only once for loss of response before repeating tapering. Per protocol, patients unable to taper were withdrawn from the study and considered treatment failures for each of the outcomes.</p>
                            </div>
                        </div>
                        <div class=\"half button-and-footnotes\" data-col=\"mobile-12 desktop-6\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical remission was defined as a complete Mayo score of ≤2 points and no subscore&nbsp;&gt;1&nbsp;point.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">Superiority was demonstrated in the overall population.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‖</sup></span>
                                <span class=\"text\">Endoscopic improvement was defined as a Mayo endoscopic subscore of ≤1 point.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>¶</sup></span>
                                <span class=\"text\">CS‑free clinical remission rates was assessed in patients who were receiving corticosteroids at baseline (as reported in electronic case report form). CS‑free clinical remission was defined as the population of patients in this subgroup who discontinued corticosteroids by Week&nbsp;52 and were in clinical remission (defined as complete Mayo score ≤2 points and no subscore &gt;1&nbsp;point at Week&nbsp;52).</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval; CS = corticosteroids; <br data-only=\"mobile\">TNFα = tumor necrosis factor alpha.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"second_section\" class=\"move-ahead-header\">
    <div>
        <article>
            <div class=\"move-ahead\">
                <h2 class=\"border-center\"><span>MOVE AHEAD TO <br data-only=\"mobile\">ADDITIONAL DATA</span></h2>
                <div class=\"link-container\" data-row=\"\">
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#clinical-response-rates\">Clinical Response Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#long-term-remission\">Long-Term Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#study-design\">Study Design</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"third_section\">
    <div>
        <article>
            <div id=\"clinical-response-rates\" class=\"clinical-response-rates\">
                <h2 class=\"banner below-nav\"><span>CLINICAL RESPONSE DATA</span></h2>
                <p class=\"subheading\">Clinical Response Rates for Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab) Based on Change in Partial Mayo&nbsp;Score<sup>3</sup></p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"figure-container varsity\" data-col=\"mobile-12 desktop-8\">
                            <figcaption>CLINICAL RESPONSE RATES BY VISIT BASED ON CHANGE IN PARTIAL MAYO SCORE FROM BASELINE<sup>3†‡</sup></figcaption>
                            <div class=\"mobile-scroll-container\">
                                <figure>
                                    <img src=\"";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 170, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 170, $this->source)), "html", null, true);
        echo "/images/charts/crr-partial-mayo-score.png\" alt=\"Entyvio® (vedolizumab) VARSITY trial clinical response rates.\" title=\"VARSITY Trial Clinical Response Rates\" class=\"varsity\">
                                </figure>
                            </div>
                            <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                        </div>
                        <div class=\"copy-container varsity\" data-col=\"mobile-12 desktop-4\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response based on partial Mayo score is defined as a reduction in partial Mayo score of ≥2 points and ≥25% from baseline, with an accompanying decrease in rectal bleeding subscore (RBS) of ≥1 point or absolute RBS of ≤1 point. The partial Mayo score is a composite index of 3 disease activity variables (stool frequency, rectal bleeding, and physician's global assessment), each scored on a scale from 0 to 3 (higher scores indicate greater disease activity). Partial Mayo score is calculated analogously to the complete Mayo score but excludes the sigmoidoscopy subscore.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">Patients with missing clinical response status were considered&nbsp;nonresponders.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval.</span>
                            </p>

                            <p class=\"jump-to primary\"><strong>Go back to top of page for VARSITY Primary End Point&nbsp;Data</strong></p>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab) Response Rates at Week 14<sup>3,5</sup></p>
                <div class=\"container\">
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\">
                            <div class=\"accordion-list\">
                                <ul class=\"accordion-controls\">
                                    <li class=\"active\">
                                        <button id=\"humira_trigger_id_1\" aria-controls=\"humira_content_id_1\" aria-expanded=\"true\">
                                            OVERALL POPULATION
                                            <span></span>
                                        </button>
                                        <p class=\"gotham-medium\">Clinical response<sup>‖</sup> based on Mayo score at Week&nbsp;14.</p>
                                        <div id=\"humira_content_id_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>In an exploratory analysis at Week 14, in the overall population, clinical response rates were 67.1% for patients who received Entyvio vs. 45.9% for those who received Humira<sup>®</sup>.*<sup>3,5</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 223
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 223, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 223, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-overall-population.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 224
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 224, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 224, $this->source)), "html", null, true);
        echo "/images/charts/desktop-ccr-overall-population.png\">
                                                    <img src=\"";
        // line 225
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 225, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 225, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-overall-population.png\" alt=\"Response at Week 14 overall population data for Entyvio® VARSITY trial.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        <button id=\"humira_trigger_id_2\" aria-controls=\"humira_content_id_2\" aria-expanded=\"false\">
                                            NO PREVIOUS ANTI‑TNFα THERAPY <em class=\"and\">AND</em> PREVIOUS ANTI‑TNFα THERAPY SUBPOPULATIONS
                                            <span></span>
                                        </button>
                                        <p class=\"gotham-medium\">Clinical response<sup>‖</sup> based on Mayo score at Week&nbsp;14.</p>
                                        <div id=\"humira_content_id_2\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>In an exploratory analysis at Week 14, among patients who had not previously received anti‑TNFα therapy, clinical response rates were 70.1% for patients who received Entyvio vs. 49.5% for those who received Humira<sup class=\"adjusted-for-line-height\">®</sup>.* Among patients who had previously received anti‑TNFα therapy, clinical response rates were 55.7% for those who received Entyvio vs. 32.1% for those who received Humira<sup>®</sup>.<sup>5</sup>*</p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 243
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 243, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 243, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-no-previous-anti-tnf-a.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 244
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 244, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 244, $this->source)), "html", null, true);
        echo "/images/charts/desktop-ccr-no-previous-anti-tnf-a.png\">
                                                    <img src=\"";
        // line 245
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 245, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 245, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-no-previous-anti-tnf-a.png\" alt=\"Entyvio® VARSITY trial response at Week 14 Anti-TNFα subpopulation data.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"sub-accordion-container\">
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                        <p class=\"primary\"><strong>Go back to top of page for VARSITY Primary End Point Data</strong></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‖</sup></span>
                                        <span class=\"text\">Clinical response is defined as a reduction in Mayo score of ≥3 points and ≥30% from baseline with an accompanying decrease in rectal bleeding subscore of ≥1 point or absolute rectal bleeding subscore of ≤1 point. Patients with missing clinical response status were considered nonresponders.</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 273
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 273, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 273, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-overall-population.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 274
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 274, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 274, $this->source)), "html", null, true);
        echo "/images/charts/desktop-ccr-overall-population.png\">
                                        <img src=\"";
        // line 275
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 275, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 275, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ccr-overall-population.png\" alt=\"Response at Week 14 overall population data for Entyvio® VARSITY trial.\" title=\"VARSITY Trial Data\">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>
            </div>
            <div id=\"long-term-remission\" class=\"long-term-remission\">
                <h2 class=\"banner\"><span>LONG-TERM DATA</span></h2>
                <p class=\"subheading\">Clinical Remission Rates at Week&nbsp;52: Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab)<sup>3</sup></p>
                <div class=\"container week-52\">
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\">
                            <div class=\"accordion-list\">
                                <ul class=\"accordion-controls\">
                                    <li class=\"active\">
                                        <div data-empty-button=\"\">
                                            NO PREVIOUS ANTI‑TNFα THERAPY <em class=\"and\">AND</em> PREVIOUS ANTI‑TNFα THERAPY SUBPOPULATIONS
                                        </div>
                                        <p class=\"gotham-medium\">Clinical remission<sup>†</sup> rates at Week&nbsp;52 - exploratory end points.</p>
                                        <div id=\"long_term_remission_content_id_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>At Week 52, in patients who had not previously received anti‑TNFα therapy, clinical remission rates were 34.2% for patients who received Entyvio vs. 24.3% for those who received Humira<sup>®</sup>.* In patients who had previously received anti‑TNFα therapy, clinical remission rates were 20.3% for those who received Entyvio vs. 16% for those who received Humira<sup>®</sup>.<sup>3</sup>*</p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL REMISSION RATES AT WEEK 52<sup>3†</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 305
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 305, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 305, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 306
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 306, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 306, $this->source)), "html", null, true);
        echo "/images/charts/desktop-ltr-no-previous-anti-tnf-a.png\">
                                                    <img src=\"";
        // line 307
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 307, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 307, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\" alt=\"VARSITY trial data: remission at Week 52 in Anti-TNFα subpopulations.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"sub-accordion-container\">
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                        <p class=\"primary\"><strong>Go back to top of page for VARSITY Primary End Point Data</strong></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>†</sup></span>
                                        <span class=\"text\">Clinical remission was defined as complete Mayo score of ≤2 points and no subscore &gt;1&nbsp;point.</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <h3>CLINICAL REMISSION RATES AT WEEK 52<sup>3†</sup></h3>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 335
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 335, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 335, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 336
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 336, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 336, $this->source)), "html", null, true);
        echo "/images/charts/desktop-ltr-no-previous-anti-tnf-a.png\">
                                        <img src=\"";
        // line 337
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 337, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 337, $this->source)), "html", null, true);
        echo "/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\" alt=\"VARSITY trial data: remission at Week 52 in Anti-TNFα subpopulations.\" title=\"VARSITY Trial Data\">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>


                <div id=\"endoscopic-improvments\" class=\"endoscopic-improvments\">
                    <p class=\"subheading\">Endoscopic Improvement and Corticosteroid-Free Clinical Remission Rates at Week 52: <br>Entyvio and Humira<sup>®</sup>* (adalimumab)<sup>3</sup></p>
                    <div class=\"container\">
                        <div class=\"flex-container\" data-row=\"\">
                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"end-point-heading\">Endoscopic Improvement Rates</p>

                                <div class=\"tile\">
                                    <h3>ENDOSCOPIC IMPROVEMENT AT WEEK&nbsp;52<sup>3‡§</sup></h3>
                                    <div class=\"image-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 359
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 359, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 359, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-endoscopic-improvement-rates.png\">
                                                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 360
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 360, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 360, $this->source)), "html", null, true);
        echo "/images/charts/desktop-varsity-endoscopic-improvement-rates.png\">
                                                <img src=\"";
        // line 361
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 361, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 361, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-endoscopic-improvement-rates.png\" alt=\"VARSITY ulcerative colitis trial data: endoscopic improvement in subpopulation at Week 52.\" title=\"VARSITY Trial Data\">
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                                <p data-only=\"mobile\" class=\"sub-text\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point&nbsp;Data</strong></span></p>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"end-point-heading\">Corticosteroid-Free Clinical Remission Rates</p>

                                <div class=\"tile\">
                                    <h3>CORTICOSTEROID-FREE Clinical Remission RATES at Week&nbsp;52<sup>3‖</sup></h3>
                                    <div class=\"image-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 377
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 377, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 377, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-clinical-remission-rates.png\">
                                                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 378
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 378, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 378, $this->source)), "html", null, true);
        echo "/images/charts/desktop-varsity-clinical-remission-rates.png\">
                                                <img src=\"";
        // line 379
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 379, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 379, $this->source)), "html", null, true);
        echo "/images/charts/mobile-varsity-clinical-remission-rates.png\" alt=\"Entyvio® VARSITY trial corticosteroid-free remission in subpopulation at Week 52.\" title=\"VARSITY Trial Data\">
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <div class=\"sub-accordion-container\">
                                    <p data-only=\"desktop\" class=\"jump-to\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point Data</strong></span></p>
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‡</sup></span>
                                        <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>§</sup></span>
                                        <span class=\"text\">Endoscopic improvement was defined as a Mayo endoscopic subscore of ≤1 point.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‖</sup></span>
                                        <span class=\"text\">CS-free clinical remission rates was assessed in patients who were receiving corticosteroids at baseline (as reported in electronic case report form). CS-free clinical remission was defined as the population of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission (defined as complete Mayo score ≤2 points and no subscore &gt;1 point at Week 52).</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; CS = corticosteroids; TNFα = tumor necrosis factor alpha.</span>
                                    </p>
                                </div>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"sub-text\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point Data</strong></span><br><br>For patients on corticosteroids at baseline: Doses must have been stable for ≥2 weeks prior to the first dose and remained unaltered through Week 6. After Week 6, a nonfixed dose tapering was started upon achieving response. During tapering, patients could return to baseline doses only once for loss of response before repeating tapering. Per protocol, patients unable to taper were withdrawn from the study and considered treatment failures for each of the outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <p class=\"subheading\">Histologic Remission at Week 52—Supporting Key Efficacy End Point<sup>3</sup></p>
                <div class=\"container\">
                    <div class=\"inner-container\">
                        <h3>EXPLORATORY END POINT: HISTOLOGIC REMISSION AT WEEK&nbsp;52<sup>3¶#</sup>**</h3>
                        <p class=\"inner-p less-padding\">Not powered for statistical significance.</p>
                        <p class=\"inner-p\">Several definitions of histologic remission in UC have been described. There is no single gold standard for assessing histologic activity in UC, and none of the currently available histologic scoring indices have been fully validated.<sup>6-8</sup></p>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-7\">
                            <figure>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 431
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 431, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 431, $this->source)), "html", null, true);
        echo "/images/charts/mobile-histologic-remission.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 432
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 432, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 432, $this->source)), "html", null, true);
        echo "/images/charts/desktop-histologic-remission.png\">
                                    <img src=\"";
        // line 433
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 433, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 433, $this->source)), "html", null, true);
        echo "/images/charts/mobile-histologic-remission.png\" alt=\"Histologic remission at Week 52 data in Entyvio® VARSITY clinical study.\" title=\"VARSITY Trial Data\">
                                </picture>
                            </figure>
                        </div>
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-5\">
                            <p class=\"gotham-medium\">Robarts Histopathology Index Score (RHI)&nbsp;&lt;3<sup>#</sup></p>
                            <ul data-bullet=\"primary\">
                                <li>RHI is a 4-item measurement that was developed using items from previously validated measurements of histologic change, and includes signs of inflammation, epithelial changes, and/or erosions/ulcers<sup>9</sup></li>
                                <li>RHI score ranges from 0 (no disease activity) to 33 (severe disease activity)<sup>3</sup></li>
                            </ul>
                            <p class=\"gotham-medium\">Geboes Score (GS) ≤2**</p>
                            <ul data-bullet=\"primary\">
                                <li>GS is a 7-item measurement that assesses biopsied tissue for signs of histologic changes, which include structural changes, signs of inflammation, epithelial changes, and/or erosions/ulcers<sup>9,10</sup></li>
                                <li>GS is calculated by using a scale that ranges from 0 to 5.4, with higher scores indicating more severe disease activity<sup>3</sup></li>
                            </ul>
                            <p class=\"primary gotham-medium jump-to\">Go back to top of page for VARSITY Primary and Secondary End&nbsp;Point&nbsp;Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>¶</sup></span>
                                <span class=\"text\">Patients with missing histologic remission status are considered as nonresponders. Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>#</sup></span>
                                <span class=\"text\">Histologic remission per RHI is defined as an RHI score &lt;3.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\">**</span>
                                <span class=\"text\">Histologic remission per Geboes score is defined as a GS &lt;2.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval; UC = ulcerative colitis.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"varsity-adverse-events\" class=\"expand varsity-adverse-events\">
                <h3 class=\"expand-trigger\"><button id=\"expand_varsity-adverse-events\" aria-controls=\"varsity-adverse-events-content\" aria-expanded=\"false\">See VARSITY safety data <span></span></button></h3>
                <div id=\"varsity-adverse-events-content\" aria-hidden=\"true\">
                    <p class=\"subheading\">Safety was Evaluated in 383 Patients: No New Safety Signals were Observed for Entyvio<sup>3-5</sup></p>
                    <div class=\"container\">
                        <h3>STUDY WAS NOT DESIGNED TO ASSESS SAFETY DIFFERENCES</h3>
<div class=\"image-container\">
    <figure>
        <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 485
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 485, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 485, $this->source)), "html", null, true);
        echo "/images/tables/mobile-safety-differences.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 486
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 486, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 486, $this->source)), "html", null, true);
        echo "/images/tables/desktop-safety-differences.png\">
            <img src=\"";
        // line 487
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 487, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 487, $this->source)), "html", null, true);
        echo "/images/tables/mobile-safety-differences.png\" alt=\"VARSITY trial adverse event data for Entyvio® vs Humira®.\" title=\"VARSITY Trial Adverse Event Data\">
        </picture>
    </figure>
</div>
<h3>ADVERSE EVENTS IN SAFETY POPULATION</h3>
<ul data-bullet=\"primary\">
    <li>The most frequent AEs* for adalimumab and Entyvio were as follows: ≥1 TEAE, 35.8% and 32.9%; ulcerative colitis, 16.3% and 11.5%; nasopharyngitis, 7.8% and 7.0%; headache, 5.4% and 7.0%; anemia, 6.7% and 5.2%; abdominal pain, 5.2% and 4.7%; upper respiratory tract infection, 4.4% and 5.2%</li>
</ul>
<p class=\"footnote\">
    <span class=\"ref\">*</span>
    <span class=\"text\">Adverse events that occurred during the trial period. Trial period was the time from the first dose of a trial drug and up to 126 days after the last dose.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>†</sup></span>
    <span class=\"text\">Adverse events were classified according to the Medical Dictionary for Regulatory Activities System Organ Class categorization and preferred terms (version 21.0). The safety population was defined as all patients who received at least one dose of the study drug.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>‡</sup></span>
    <span class=\"text\">No cases of progressive multifocal leukoencephalopathy.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>§</sup></span>
    <span class=\"text\">Not related to Entyvio.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>‖</sup></span>
    <span class=\"text\">Updated to include final 68-week safety follow-up. </span>
</p>
<p class=\"footnote acronyms\">
    AE = adverse event; TEAE = treatment-emergent adverse event.
</p>
                    </div>
                </div>
            </div>


            <div id=\"study-design\" class=\"study-design\">
                <h2 class=\"banner\"><span>STUDY DESIGN</span></h2>
                <h3 class=\"subheading\">VARSITY Trial Study Design</h3>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"";
        // line 530
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 530, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 530, $this->source)), "html", null, true);
        echo "/images/charts/varsity-trial-study-design.png\" alt=\"VARSITY ulcerative colitis trial study design.\" title=\"VARSITY Trial Design\" class=\"varsity\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container varsity\">
                        <h3>Study Details</h3>
                        <ul class=\"varsity\" data-bullet=\"primary\">
                            <li>Eligible patients were adults (aged 18 to 85 years) with moderately to severely active UC, defined as a complete Mayo score of 6 to 12 (range 0 to 12; higher scores represent more active disease), an endoscopic subscore of ≥2, colonic involvement of ≥15 cm, and confirmed diagnosis of UC for ≥3 months. Anti‑TNFα naïve patients who had not responded or lost response to conventional treatments were eligible. Centrally read endoscopies were performed at Weeks 14 and 52<sup>3</sup></li>
                            <li>Dosing was consistent with the US product label for both Entyvio and Humira<sup>®</sup>; no dose escalation was permitted for either treatment group<sup>3</sup></li>
                            <li>After induction, patients remained in their respective treatment group throughout the maintenance phase (treat-through design)<sup>3</sup></li>
                            <li>Enrollment, capped at 25% (~21% was reached), included patients who discontinued treatment with an anti‑TNFα (except adalimumab) due to documented reasons other than safety.<sup>3</sup> The majority of the trial population (97.3%) had moderately to severely active disease (Mayo score 6-12). Patients with mild disease represented significant protocol deviations. Per-protocol sensitivity analyses indicated no change from overall population results<sup>3-5</sup></li>
                            <li>Patients naïve to anti‑TNFα therapy were enrolled if they were failing current treatment (eg, CS, 5‑ASA, or immunomodulators).<sup>5</sup> Per-protocol sensitivity analyses indicated no change from overall population results.<sup>10</sup> Patients on a 5‑ASA or immunomodulator at baseline maintained stable doses throughout the study<sup>3</sup></li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\">*</span>
                            <span class=\"text\">Includes 2 patients randomized, but never received any study&nbsp;drug.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            IV = intravenous; Q2W = every 2 weeks; Q8W = every 8 weeks; SC = subcutaneous; TNFα = tumor necrosis factor alpha; CS = corticosteroids; 5‑ASA&nbsp;=&nbsp;5‑aminosalicylate.
                        </p>
                    </div>
                </div>
            </div>
            <div id=\"pivotal-trial-data\" class=\"pivotal-trial-data\">
                <h2 class=\"border\"><span>GEMINI I DATA</span></h2>
                <h3 class=\"subheading\">Primary and Secondary End Points from GEMINI I: UC Trials I and II</h3>
                <div class=\"container\">
                    <p class=\"body-copy\"><strong>Study Design:</strong> Two randomized, double‑blind, placebo‑controlled studies enrolled adult patients with moderately to severely active UC who had failed at least 1 conventional therapy, including corticosteroids or immunomodulators and/or ≥1 anti‑TNFα therapy.<sup>1,2</sup> In UC Trial I, patients were randomized (3:2) to receive Entyvio 300&nbsp;mg or placebo by intravenous infusion at Weeks 0 and 2. In UC Trial II, patients receiving Entyvio who demonstrated clinical response at Week 6 (from UC Trial I or an open-label cohort) were randomized (1:1:1) to receive either Entyvio 300&nbsp;mg every 8&nbsp;weeks, Entyvio 300&nbsp;mg every 4&nbsp;weeks, or placebo every 4&nbsp;weeks.<sup>1</sup> The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing regimen.</p>
                    <figure>
                        <figcaption>UC Trial I: Week 6 Results<sup>1,2</sup></figcaption>
                        <picture>
                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 562
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 562, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 562, $this->source)), "html", null, true);
        echo "/images/charts/mobile-pivotal-trial-1.png\">
                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 563
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 563, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 563, $this->source)), "html", null, true);
        echo "/images/charts/desktop-pivotal-trial-1.png\">
                            <img src=\"";
        // line 564
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 564, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 564, $this->source)), "html", null, true);
        echo "/images/charts/mobile-pivotal-trial-1.png\" alt=\"Entyvio® GEMINI I UC clinical trial I data.\" title=\"Entyvio® GEMINI I Trial Data\">
                        </picture>
                    </figure>
                    <figure>
                        <figcaption>UC Trial II: Week 52 Results<sup>1,2</sup></figcaption>
                        <picture>
                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 570
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 570, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 570, $this->source)), "html", null, true);
        echo "/images/charts/mobile-pivotal-trial-2.png\">
                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 571
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 571, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 571, $this->source)), "html", null, true);
        echo "/images/charts/desktop-pivotal-trial-2.png\">
                            <img src=\"";
        // line 572
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 572, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 572, $this->source)), "html", null, true);
        echo "/images/charts/mobile-pivotal-trial-2.png\" alt=\"Entyvio® GEMINI I UC clinical trial II data.\" title=\"Entyvio® GEMINI I Trial II Data\">
                        </picture>
                    </figure>
                    <div class=\"btn-container\">
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">VIEW GEMINI I: ENTYVIO VS. PLACEBO CLINICAL DATA</a>
                    </div>
                    <p class=\"footnote\">
                        <span class=\"ref\">*</span>
                        <span class=\"text\">Clinical response = reduction in complete Mayo score of ≥3 points and ≥30% from baseline with an accompanying decrease in rectal bleeding subscore of ≥1 point or absolute rectal bleeding subscore of ≤1 point.</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>†</sup></span>
                        <span class=\"text\">Improvement of endoscopic appearance of the mucosa = Mayo endoscopy subscore of 0 (normal or inactive disease) or 1 (erythema, decreased vascular pattern, mild friability).</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>‡</sup></span>
                        <span class=\"text\">Clinical remission = complete Mayo score of ≤2 points and no individual subscore &gt;1 point.</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>§</sup></span>
                        <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response at Week 6 (n=72 for placebo, and n=70 for Entyvio Q8W). CS‑free clinical remission was defined as the proportion of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                    </p>
                    <p class=\"footnote acronyms\">
                        <span class=\"text\">UC = ulcerative colitis; CI = confidence interval; Q8W = every 8 weeks; CS = corticosteroids; TNFα = tumor necrosis factor alpha.</span>
                    </p>
                    <h4>Safety was evaluated in clinical trials of over 3300 adults<sup>1</sup></h4>
                    <p class=\"smaller\">Trials included more than 800 patients who received Entyvio for more than 2 years.</p>

                    <p class=\"smaller\">UC Trials I &amp; II and CD Trials I &amp; III Select Adverse Events</p>
                    <ul class=\"ul-main\" data-bullet=\"primary\">
                        <li>Infection rates with Entyvio were 0.85 per patient-year vs 0.7 for placebo</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Infections consisted primarily of nasopharyngitis, upper respiratory tract infection, sinusitis, and urinary tract infection</li>
                            <li>2% of patients discontinued Entyvio due to infections</li>
                        </ul>
                        <li>Serious infection rates with Entyvio were 0.07 per patient-year vs 0.06 for placebo</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Serious infections included anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis</li>
                        </ul>
                        <li>Although unlikely, a risk of PML cannot be ruled out:</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>PML, a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised</li>
                            <li>1 case of PML in an Entyvio-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression)</li>
                        </ul>
                        <li>Adverse reactions were reported in 52% of patients treated with Entyvio (N=1434) and 45% of patients treated with placebo (N=297)</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Over 52 weeks, 7% of patients treated with Entyvio experienced serious adverse reactions compared to 4% treated with placebo</li>
                        </ul>
                    </ul>
                    <div class=\"btn-container\">
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial#study-design\" class=\"btn btn-secondary\">VIEW GEMINI I STUDY DESIGN</a>
                    </div>
                    <p class=\"footnote acronyms\">
                        <span class=\"text\">PML = progressive multifocal leukoencephalopathy.</span>
                    </p>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>GEMINI I Data: UC Trials I and II</p>
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">SEE THE DATA</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>Entyvio Safety Profile</p>
                        <a href=\"/safety-profile\" class=\"btn btn-secondary\">VIEW SAFETY PROFILE</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>




                <!-- *********************** -->
                <!-- **** CODE ENDS **** *** -->
                <!-- *********************** -->
            </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--varsity-ulcerative-colitis-clini--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 572,  759 => 571,  755 => 570,  746 => 564,  742 => 563,  738 => 562,  703 => 530,  657 => 487,  653 => 486,  649 => 485,  594 => 433,  590 => 432,  586 => 431,  531 => 379,  527 => 378,  523 => 377,  504 => 361,  500 => 360,  496 => 359,  471 => 337,  467 => 336,  463 => 335,  432 => 307,  428 => 306,  424 => 305,  391 => 275,  387 => 274,  383 => 273,  352 => 245,  348 => 244,  344 => 243,  323 => 225,  319 => 224,  315 => 223,  259 => 170,  177 => 91,  173 => 90,  169 => 89,  150 => 73,  146 => 72,  142 => 71,  126 => 58,  122 => 57,  118 => 56,  84 => 25,  80 => 24,  76 => 23,  63 => 13,  55 => 8,  51 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/varsity-styling') }}
<div data-page-id=\"VarsityTrial\" data-page-category=\"ClinicalEfficacy\" class=\"page-content varsity-content\">
<div id=\"hero\">
    <div>
                    <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-gemini-varsity-ed.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-gemini-varsity-ed.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-gemini-varsity-ed.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        <img src=\"{{ base_path ~ directory }}/images/logos/logo-varsity.svg\" alt=\"Entyvio® (vedolizumab) VARSITY trial logo.\"><br>
                        <span>Trial</span>
                    </h1>
                </div>

                <div>
                    <h2 class=\"varsity\">Results of the <br><strong>landmark <br>HEAD-TO-HEAD <br class=\"breakpoint\" data-only=\"desktop\">STUDY</strong></h2>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-gemini-i-varsity-dosing-tricia.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-gemini-i-varsity-dosing-tricia.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-gemini-i-varsity-dosing-tricia.png\" alt=\"Healthcare professional.\">
            </picture>
                            </div>
</div>

<div id=\"first_section\">
    <div id=\"indication_bar\" class=\"close\">
\t<div>
\t\t<div class=\"section\">
\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t</div>
\t</div>
</div>
    <div>
        <article>
            <div id=\"pivotal-trial-data-intro\" class=\"pivotal-trial-data-intro\">
                <h2 class=\"border\">GEMINI I TRIAL DATA</h2>
                <p class=\"trial-description\">The trial studied Entyvio vs. placebo in adult patients with moderately to severely active ulcerative colitis.<sup>1,2</sup></p>
            </div>
            <div id=\"overview-trial-data\" class=\"overview-trial-data\">
                <h2 class=\"border\">OVERVIEW OF VARSITY TRIAL</h2>
                <p class=\"subheading\">In the First Head-to-Head Study of Biologics in Moderate to Severe Ulcerative Colitis, Entyvio Demonstrated Superiority to <span class=\"nobr\">Humira<sup>®</sup>* (adalimumab)</span> in Clinical Remission Rates at Week 52 in the Overall&nbsp;Population<sup>3,4</sup></p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"half graph-1\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Primary End Point</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION <br class=\"special-breakpoint-1\" data-only=\"desktop\">RATES AT <br class=\"special-breakpoint-1\" data-only=\"desktop\"><br class=\"special-breakpoint-2\" data-only=\"desktop\">WEEK&nbsp;52<sup>3†‡</sup></h3>
                                <div class=\"image-container side-by-side varsity\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-clinical-remission.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-varsity-clinical-remission.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-clinical-remission.png\" class=\"varsity\" alt=\"Entyvio® (vedolizumab) VARSITY trial clinical remission at Week 52 data.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"half graph-2\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Secondary End Point</p>
                            <div class=\"tile\">
                                <h3>ENDOSCOPIC IMPROVEMENT AT WEEK&nbsp;52<sup>3‡‖</sup></h3>
                                <div class=\"image-container side-by-side varsity\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-endoscopic-improvement.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-varsity-endoscopic-improvement.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-endoscopic-improvement.png\" class=\"varsity\" alt=\"Entyvio® (vedolizumab) VARSITY trial data: endoscopic improvement at Week 52.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"full text-description\">
                            <p class=\"end-point-description\"><strong>Study Design:</strong> VARSITY was a double‑blind, double‑dummy, active‑controlled trial that compared Entyvio with <span class=\"nobr\">Humira<sup>®</sup>*&nbsp;(adalimumab)</span> in adults with moderately to severely active ulcerative colitis. Eligible patients were randomized (1:1) to receive Entyvio and placebo, or Humira<sup>®</sup> and placebo. After induction, patients remained in their respective treatment group throughout the maintenance phase (treat-through design). Previous exposure to TNFα inhibitors other than Humira<sup>®</sup> was permitted in up to 25% of patients. Patients who had no response or lost response to conventional therapies were eligible. Dosing was consistent with the US product label for both Entyvio and Humira<sup>®</sup>; no dose escalation was permitted for either treatment group.<sup>3</sup> Click below to see full study design and additional study details.</p>
                        </div>
                        <div class=\"half graph-3\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">Secondary End Point</p>
                            <div class=\"tile last-tile varsity\">
                                <h3>CORTICOSTEROID-FREE CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3¶</sup></h3>
                                <div class=\"image-container\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-corticosteroid-free.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-varsity-corticosteroid-free.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-corticosteroid-free.png\" class=\"solo varsity\" alt=\"Corticosteroid-free remission at Week 52 in Entyvio® (vedolizumab) VARSITY ulcerative colitis clinical trial.\" title=\"VARSITY Trial Data\">
                                        </picture>
                                    </figure>
                                </div>
                                <p class=\"text-area\">For patients on corticosteroids at baseline: Doses must have been stable for ≥2 weeks prior to the first dose and remained unaltered through Week&nbsp;6. After Week&nbsp;6, a nonfixed dose tapering was started upon achieving response. During tapering, patients could return to baseline doses only once for loss of response before repeating tapering. Per protocol, patients unable to taper were withdrawn from the study and considered treatment failures for each of the outcomes.</p>
                            </div>
                        </div>
                        <div class=\"half button-and-footnotes\" data-col=\"mobile-12 desktop-6\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical remission was defined as a complete Mayo score of ≤2 points and no subscore&nbsp;&gt;1&nbsp;point.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">Superiority was demonstrated in the overall population.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‖</sup></span>
                                <span class=\"text\">Endoscopic improvement was defined as a Mayo endoscopic subscore of ≤1 point.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>¶</sup></span>
                                <span class=\"text\">CS‑free clinical remission rates was assessed in patients who were receiving corticosteroids at baseline (as reported in electronic case report form). CS‑free clinical remission was defined as the population of patients in this subgroup who discontinued corticosteroids by Week&nbsp;52 and were in clinical remission (defined as complete Mayo score ≤2 points and no subscore &gt;1&nbsp;point at Week&nbsp;52).</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval; CS = corticosteroids; <br data-only=\"mobile\">TNFα = tumor necrosis factor alpha.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"second_section\" class=\"move-ahead-header\">
    <div>
        <article>
            <div class=\"move-ahead\">
                <h2 class=\"border-center\"><span>MOVE AHEAD TO <br data-only=\"mobile\">ADDITIONAL DATA</span></h2>
                <div class=\"link-container\" data-row=\"\">
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#clinical-response-rates\">Clinical Response Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#long-term-remission\">Long-Term Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#study-design\">Study Design</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"third_section\">
    <div>
        <article>
            <div id=\"clinical-response-rates\" class=\"clinical-response-rates\">
                <h2 class=\"banner below-nav\"><span>CLINICAL RESPONSE DATA</span></h2>
                <p class=\"subheading\">Clinical Response Rates for Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab) Based on Change in Partial Mayo&nbsp;Score<sup>3</sup></p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"figure-container varsity\" data-col=\"mobile-12 desktop-8\">
                            <figcaption>CLINICAL RESPONSE RATES BY VISIT BASED ON CHANGE IN PARTIAL MAYO SCORE FROM BASELINE<sup>3†‡</sup></figcaption>
                            <div class=\"mobile-scroll-container\">
                                <figure>
                                    <img src=\"{{ base_path ~ directory }}/images/charts/crr-partial-mayo-score.png\" alt=\"Entyvio® (vedolizumab) VARSITY trial clinical response rates.\" title=\"VARSITY Trial Clinical Response Rates\" class=\"varsity\">
                                </figure>
                            </div>
                            <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                        </div>
                        <div class=\"copy-container varsity\" data-col=\"mobile-12 desktop-4\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response based on partial Mayo score is defined as a reduction in partial Mayo score of ≥2 points and ≥25% from baseline, with an accompanying decrease in rectal bleeding subscore (RBS) of ≥1 point or absolute RBS of ≤1 point. The partial Mayo score is a composite index of 3 disease activity variables (stool frequency, rectal bleeding, and physician's global assessment), each scored on a scale from 0 to 3 (higher scores indicate greater disease activity). Partial Mayo score is calculated analogously to the complete Mayo score but excludes the sigmoidoscopy subscore.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">Patients with missing clinical response status were considered&nbsp;nonresponders.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval.</span>
                            </p>

                            <p class=\"jump-to primary\"><strong>Go back to top of page for VARSITY Primary End Point&nbsp;Data</strong></p>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab) Response Rates at Week 14<sup>3,5</sup></p>
                <div class=\"container\">
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\">
                            <div class=\"accordion-list\">
                                <ul class=\"accordion-controls\">
                                    <li class=\"active\">
                                        <button id=\"humira_trigger_id_1\" aria-controls=\"humira_content_id_1\" aria-expanded=\"true\">
                                            OVERALL POPULATION
                                            <span></span>
                                        </button>
                                        <p class=\"gotham-medium\">Clinical response<sup>‖</sup> based on Mayo score at Week&nbsp;14.</p>
                                        <div id=\"humira_content_id_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>In an exploratory analysis at Week 14, in the overall population, clinical response rates were 67.1% for patients who received Entyvio vs. 45.9% for those who received Humira<sup>®</sup>.*<sup>3,5</sup></p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-overall-population.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-ccr-overall-population.png\">
                                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-overall-population.png\" alt=\"Response at Week 14 overall population data for Entyvio® VARSITY trial.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                    <li>
                                        <button id=\"humira_trigger_id_2\" aria-controls=\"humira_content_id_2\" aria-expanded=\"false\">
                                            NO PREVIOUS ANTI‑TNFα THERAPY <em class=\"and\">AND</em> PREVIOUS ANTI‑TNFα THERAPY SUBPOPULATIONS
                                            <span></span>
                                        </button>
                                        <p class=\"gotham-medium\">Clinical response<sup>‖</sup> based on Mayo score at Week&nbsp;14.</p>
                                        <div id=\"humira_content_id_2\" aria-hidden=\"true\">
                                            <div class=\"content\">
                                                <p>In an exploratory analysis at Week 14, among patients who had not previously received anti‑TNFα therapy, clinical response rates were 70.1% for patients who received Entyvio vs. 49.5% for those who received Humira<sup class=\"adjusted-for-line-height\">®</sup>.* Among patients who had previously received anti‑TNFα therapy, clinical response rates were 55.7% for those who received Entyvio vs. 32.1% for those who received Humira<sup>®</sup>.<sup>5</sup>*</p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-no-previous-anti-tnf-a.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-ccr-no-previous-anti-tnf-a.png\">
                                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-no-previous-anti-tnf-a.png\" alt=\"Entyvio® VARSITY trial response at Week 14 Anti-TNFα subpopulation data.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"sub-accordion-container\">
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                        <p class=\"primary\"><strong>Go back to top of page for VARSITY Primary End Point Data</strong></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‖</sup></span>
                                        <span class=\"text\">Clinical response is defined as a reduction in Mayo score of ≥3 points and ≥30% from baseline with an accompanying decrease in rectal bleeding subscore of ≥1 point or absolute rectal bleeding subscore of ≤1 point. Patients with missing clinical response status were considered nonresponders.</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <h3>CLINICAL RESPONSE BASED ON MAYO SCORE AT WEEK&nbsp;14<sup>5‖</sup></h3>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-overall-population.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-ccr-overall-population.png\">
                                        <img src=\"{{ base_path ~ directory }}/images/charts/mobile-ccr-overall-population.png\" alt=\"Response at Week 14 overall population data for Entyvio® VARSITY trial.\" title=\"VARSITY Trial Data\">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>
            </div>
            <div id=\"long-term-remission\" class=\"long-term-remission\">
                <h2 class=\"banner\"><span>LONG-TERM DATA</span></h2>
                <p class=\"subheading\">Clinical Remission Rates at Week&nbsp;52: Entyvio and Humira<sup>®</sup>*&nbsp;(adalimumab)<sup>3</sup></p>
                <div class=\"container week-52\">
                    <div class=\"accordion-container\">
                        <!-- ACCORDION STARTS -->
                        <div class=\"accordion\">
                            <div class=\"accordion-list\">
                                <ul class=\"accordion-controls\">
                                    <li class=\"active\">
                                        <div data-empty-button=\"\">
                                            NO PREVIOUS ANTI‑TNFα THERAPY <em class=\"and\">AND</em> PREVIOUS ANTI‑TNFα THERAPY SUBPOPULATIONS
                                        </div>
                                        <p class=\"gotham-medium\">Clinical remission<sup>†</sup> rates at Week&nbsp;52 - exploratory end points.</p>
                                        <div id=\"long_term_remission_content_id_1\" aria-hidden=\"false\">
                                            <div class=\"content\">
                                                <p>At Week 52, in patients who had not previously received anti‑TNFα therapy, clinical remission rates were 34.2% for patients who received Entyvio vs. 24.3% for those who received Humira<sup>®</sup>.* In patients who had previously received anti‑TNFα therapy, clinical remission rates were 20.3% for those who received Entyvio vs. 16% for those who received Humira<sup>®</sup>.<sup>3</sup>*</p>
                                            </div>
                                            <figure class=\"figure-content\">
                                                <h3>CLINICAL REMISSION RATES AT WEEK 52<sup>3†</sup></h3>
                                                <picture>
                                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-ltr-no-previous-anti-tnf-a.png\">
                                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\" alt=\"VARSITY trial data: remission at Week 52 in Anti-TNFα subpopulations.\" title=\"VARSITY Trial Data\">
                                                </picture>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"sub-accordion-container\">
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                        <p class=\"primary\"><strong>Go back to top of page for VARSITY Primary End Point Data</strong></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>†</sup></span>
                                        <span class=\"text\">Clinical remission was defined as complete Mayo score of ≤2 points and no subscore &gt;1&nbsp;point.</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <figure class=\"desktop-image\">
                                    <h3>CLINICAL REMISSION RATES AT WEEK 52<sup>3†</sup></h3>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-ltr-no-previous-anti-tnf-a.png\">
                                        <img src=\"{{ base_path ~ directory }}/images/charts/mobile-ltr-no-previous-anti-tnf-a.png\" alt=\"VARSITY trial data: remission at Week 52 in Anti-TNFα subpopulations.\" title=\"VARSITY Trial Data\">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                        <!-- ACCORDION ENDS -->
                    </div>
                </div>


                <div id=\"endoscopic-improvments\" class=\"endoscopic-improvments\">
                    <p class=\"subheading\">Endoscopic Improvement and Corticosteroid-Free Clinical Remission Rates at Week 52: <br>Entyvio and Humira<sup>®</sup>* (adalimumab)<sup>3</sup></p>
                    <div class=\"container\">
                        <div class=\"flex-container\" data-row=\"\">
                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"end-point-heading\">Endoscopic Improvement Rates</p>

                                <div class=\"tile\">
                                    <h3>ENDOSCOPIC IMPROVEMENT AT WEEK&nbsp;52<sup>3‡§</sup></h3>
                                    <div class=\"image-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-endoscopic-improvement-rates.png\">
                                                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-varsity-endoscopic-improvement-rates.png\">
                                                <img src=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-endoscopic-improvement-rates.png\" alt=\"VARSITY ulcerative colitis trial data: endoscopic improvement in subpopulation at Week 52.\" title=\"VARSITY Trial Data\">
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                                <p data-only=\"mobile\" class=\"sub-text\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point&nbsp;Data</strong></span></p>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"end-point-heading\">Corticosteroid-Free Clinical Remission Rates</p>

                                <div class=\"tile\">
                                    <h3>CORTICOSTEROID-FREE Clinical Remission RATES at Week&nbsp;52<sup>3‖</sup></h3>
                                    <div class=\"image-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-clinical-remission-rates.png\">
                                                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-varsity-clinical-remission-rates.png\">
                                                <img src=\"{{ base_path ~ directory }}/images/charts/mobile-varsity-clinical-remission-rates.png\" alt=\"Entyvio® VARSITY trial corticosteroid-free remission in subpopulation at Week 52.\" title=\"VARSITY Trial Data\">
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <div class=\"sub-accordion-container\">
                                    <p data-only=\"desktop\" class=\"jump-to\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point Data</strong></span></p>
                                    <div class=\"btn-container\">
                                        <p><a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a></p>
                                    </div>
                                    <p class=\"footnote\">
                                        <span class=\"ref\">*</span>
                                        <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL). For more information related to Humira, please see AbbVie.com.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‡</sup></span>
                                        <span class=\"text\">Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>§</sup></span>
                                        <span class=\"text\">Endoscopic improvement was defined as a Mayo endoscopic subscore of ≤1 point.</span>
                                    </p>
                                    <p class=\"footnote\">
                                        <span class=\"ref\"><sup>‖</sup></span>
                                        <span class=\"text\">CS-free clinical remission rates was assessed in patients who were receiving corticosteroids at baseline (as reported in electronic case report form). CS-free clinical remission was defined as the population of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission (defined as complete Mayo score ≤2 points and no subscore &gt;1 point at Week 52).</span>
                                    </p>
                                    <p class=\"footnote acronyms\">
                                        <span class=\"text\">CI = confidence interval; CS = corticosteroids; TNFα = tumor necrosis factor alpha.</span>
                                    </p>
                                </div>
                            </div>

                            <div class=\"half\" data-col=\"mobile-12 desktop-6\">
                                <p class=\"sub-text\"><span class=\"primary\"><strong>Go back to top of page for VARSITY Primary and Secondary End Point Data</strong></span><br><br>For patients on corticosteroids at baseline: Doses must have been stable for ≥2 weeks prior to the first dose and remained unaltered through Week 6. After Week 6, a nonfixed dose tapering was started upon achieving response. During tapering, patients could return to baseline doses only once for loss of response before repeating tapering. Per protocol, patients unable to taper were withdrawn from the study and considered treatment failures for each of the outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <p class=\"subheading\">Histologic Remission at Week 52—Supporting Key Efficacy End Point<sup>3</sup></p>
                <div class=\"container\">
                    <div class=\"inner-container\">
                        <h3>EXPLORATORY END POINT: HISTOLOGIC REMISSION AT WEEK&nbsp;52<sup>3¶#</sup>**</h3>
                        <p class=\"inner-p less-padding\">Not powered for statistical significance.</p>
                        <p class=\"inner-p\">Several definitions of histologic remission in UC have been described. There is no single gold standard for assessing histologic activity in UC, and none of the currently available histologic scoring indices have been fully validated.<sup>6-8</sup></p>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-7\">
                            <figure>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-histologic-remission.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-histologic-remission.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-histologic-remission.png\" alt=\"Histologic remission at Week 52 data in Entyvio® VARSITY clinical study.\" title=\"VARSITY Trial Data\">
                                </picture>
                            </figure>
                        </div>
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-5\">
                            <p class=\"gotham-medium\">Robarts Histopathology Index Score (RHI)&nbsp;&lt;3<sup>#</sup></p>
                            <ul data-bullet=\"primary\">
                                <li>RHI is a 4-item measurement that was developed using items from previously validated measurements of histologic change, and includes signs of inflammation, epithelial changes, and/or erosions/ulcers<sup>9</sup></li>
                                <li>RHI score ranges from 0 (no disease activity) to 33 (severe disease activity)<sup>3</sup></li>
                            </ul>
                            <p class=\"gotham-medium\">Geboes Score (GS) ≤2**</p>
                            <ul data-bullet=\"primary\">
                                <li>GS is a 7-item measurement that assesses biopsied tissue for signs of histologic changes, which include structural changes, signs of inflammation, epithelial changes, and/or erosions/ulcers<sup>9,10</sup></li>
                                <li>GS is calculated by using a scale that ranges from 0 to 5.4, with higher scores indicating more severe disease activity<sup>3</sup></li>
                            </ul>
                            <p class=\"primary gotham-medium jump-to\">Go back to top of page for VARSITY Primary and Secondary End&nbsp;Point&nbsp;Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">View Full Study Design</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Humira<sup>®</sup> (AbbVie Inc. North Chicago, IL).&nbsp; For more information related to Humira, please see AbbVie.com.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>¶</sup></span>
                                <span class=\"text\">Patients with missing histologic remission status are considered as nonresponders. Full analysis set includes all randomized patients who received at least 1 dose of study drug.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>#</sup></span>
                                <span class=\"text\">Histologic remission per RHI is defined as an RHI score &lt;3.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\">**</span>
                                <span class=\"text\">Histologic remission per Geboes score is defined as a GS &lt;2.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CI = confidence interval; UC = ulcerative colitis.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"varsity-adverse-events\" class=\"expand varsity-adverse-events\">
                <h3 class=\"expand-trigger\"><button id=\"expand_varsity-adverse-events\" aria-controls=\"varsity-adverse-events-content\" aria-expanded=\"false\">See VARSITY safety data <span></span></button></h3>
                <div id=\"varsity-adverse-events-content\" aria-hidden=\"true\">
                    <p class=\"subheading\">Safety was Evaluated in 383 Patients: No New Safety Signals were Observed for Entyvio<sup>3-5</sup></p>
                    <div class=\"container\">
                        <h3>STUDY WAS NOT DESIGNED TO ASSESS SAFETY DIFFERENCES</h3>
<div class=\"image-container\">
    <figure>
        <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/tables/mobile-safety-differences.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/tables/desktop-safety-differences.png\">
            <img src=\"{{ base_path ~ directory }}/images/tables/mobile-safety-differences.png\" alt=\"VARSITY trial adverse event data for Entyvio® vs Humira®.\" title=\"VARSITY Trial Adverse Event Data\">
        </picture>
    </figure>
</div>
<h3>ADVERSE EVENTS IN SAFETY POPULATION</h3>
<ul data-bullet=\"primary\">
    <li>The most frequent AEs* for adalimumab and Entyvio were as follows: ≥1 TEAE, 35.8% and 32.9%; ulcerative colitis, 16.3% and 11.5%; nasopharyngitis, 7.8% and 7.0%; headache, 5.4% and 7.0%; anemia, 6.7% and 5.2%; abdominal pain, 5.2% and 4.7%; upper respiratory tract infection, 4.4% and 5.2%</li>
</ul>
<p class=\"footnote\">
    <span class=\"ref\">*</span>
    <span class=\"text\">Adverse events that occurred during the trial period. Trial period was the time from the first dose of a trial drug and up to 126 days after the last dose.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>†</sup></span>
    <span class=\"text\">Adverse events were classified according to the Medical Dictionary for Regulatory Activities System Organ Class categorization and preferred terms (version 21.0). The safety population was defined as all patients who received at least one dose of the study drug.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>‡</sup></span>
    <span class=\"text\">No cases of progressive multifocal leukoencephalopathy.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>§</sup></span>
    <span class=\"text\">Not related to Entyvio.</span>
</p>
<p class=\"footnote\">
    <span class=\"ref\"><sup>‖</sup></span>
    <span class=\"text\">Updated to include final 68-week safety follow-up. </span>
</p>
<p class=\"footnote acronyms\">
    AE = adverse event; TEAE = treatment-emergent adverse event.
</p>
                    </div>
                </div>
            </div>


            <div id=\"study-design\" class=\"study-design\">
                <h2 class=\"banner\"><span>STUDY DESIGN</span></h2>
                <h3 class=\"subheading\">VARSITY Trial Study Design</h3>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"{{ base_path ~ directory }}/images/charts/varsity-trial-study-design.png\" alt=\"VARSITY ulcerative colitis trial study design.\" title=\"VARSITY Trial Design\" class=\"varsity\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container varsity\">
                        <h3>Study Details</h3>
                        <ul class=\"varsity\" data-bullet=\"primary\">
                            <li>Eligible patients were adults (aged 18 to 85 years) with moderately to severely active UC, defined as a complete Mayo score of 6 to 12 (range 0 to 12; higher scores represent more active disease), an endoscopic subscore of ≥2, colonic involvement of ≥15 cm, and confirmed diagnosis of UC for ≥3 months. Anti‑TNFα naïve patients who had not responded or lost response to conventional treatments were eligible. Centrally read endoscopies were performed at Weeks 14 and 52<sup>3</sup></li>
                            <li>Dosing was consistent with the US product label for both Entyvio and Humira<sup>®</sup>; no dose escalation was permitted for either treatment group<sup>3</sup></li>
                            <li>After induction, patients remained in their respective treatment group throughout the maintenance phase (treat-through design)<sup>3</sup></li>
                            <li>Enrollment, capped at 25% (~21% was reached), included patients who discontinued treatment with an anti‑TNFα (except adalimumab) due to documented reasons other than safety.<sup>3</sup> The majority of the trial population (97.3%) had moderately to severely active disease (Mayo score 6-12). Patients with mild disease represented significant protocol deviations. Per-protocol sensitivity analyses indicated no change from overall population results<sup>3-5</sup></li>
                            <li>Patients naïve to anti‑TNFα therapy were enrolled if they were failing current treatment (eg, CS, 5‑ASA, or immunomodulators).<sup>5</sup> Per-protocol sensitivity analyses indicated no change from overall population results.<sup>10</sup> Patients on a 5‑ASA or immunomodulator at baseline maintained stable doses throughout the study<sup>3</sup></li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\">*</span>
                            <span class=\"text\">Includes 2 patients randomized, but never received any study&nbsp;drug.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            IV = intravenous; Q2W = every 2 weeks; Q8W = every 8 weeks; SC = subcutaneous; TNFα = tumor necrosis factor alpha; CS = corticosteroids; 5‑ASA&nbsp;=&nbsp;5‑aminosalicylate.
                        </p>
                    </div>
                </div>
            </div>
            <div id=\"pivotal-trial-data\" class=\"pivotal-trial-data\">
                <h2 class=\"border\"><span>GEMINI I DATA</span></h2>
                <h3 class=\"subheading\">Primary and Secondary End Points from GEMINI I: UC Trials I and II</h3>
                <div class=\"container\">
                    <p class=\"body-copy\"><strong>Study Design:</strong> Two randomized, double‑blind, placebo‑controlled studies enrolled adult patients with moderately to severely active UC who had failed at least 1 conventional therapy, including corticosteroids or immunomodulators and/or ≥1 anti‑TNFα therapy.<sup>1,2</sup> In UC Trial I, patients were randomized (3:2) to receive Entyvio 300&nbsp;mg or placebo by intravenous infusion at Weeks 0 and 2. In UC Trial II, patients receiving Entyvio who demonstrated clinical response at Week 6 (from UC Trial I or an open-label cohort) were randomized (1:1:1) to receive either Entyvio 300&nbsp;mg every 8&nbsp;weeks, Entyvio 300&nbsp;mg every 4&nbsp;weeks, or placebo every 4&nbsp;weeks.<sup>1</sup> The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing regimen.</p>
                    <figure>
                        <figcaption>UC Trial I: Week 6 Results<sup>1,2</sup></figcaption>
                        <picture>
                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-pivotal-trial-1.png\">
                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-pivotal-trial-1.png\">
                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-pivotal-trial-1.png\" alt=\"Entyvio® GEMINI I UC clinical trial I data.\" title=\"Entyvio® GEMINI I Trial Data\">
                        </picture>
                    </figure>
                    <figure>
                        <figcaption>UC Trial II: Week 52 Results<sup>1,2</sup></figcaption>
                        <picture>
                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-pivotal-trial-2.png\">
                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-pivotal-trial-2.png\">
                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-pivotal-trial-2.png\" alt=\"Entyvio® GEMINI I UC clinical trial II data.\" title=\"Entyvio® GEMINI I Trial II Data\">
                        </picture>
                    </figure>
                    <div class=\"btn-container\">
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">VIEW GEMINI I: ENTYVIO VS. PLACEBO CLINICAL DATA</a>
                    </div>
                    <p class=\"footnote\">
                        <span class=\"ref\">*</span>
                        <span class=\"text\">Clinical response = reduction in complete Mayo score of ≥3 points and ≥30% from baseline with an accompanying decrease in rectal bleeding subscore of ≥1 point or absolute rectal bleeding subscore of ≤1 point.</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>†</sup></span>
                        <span class=\"text\">Improvement of endoscopic appearance of the mucosa = Mayo endoscopy subscore of 0 (normal or inactive disease) or 1 (erythema, decreased vascular pattern, mild friability).</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>‡</sup></span>
                        <span class=\"text\">Clinical remission = complete Mayo score of ≤2 points and no individual subscore &gt;1 point.</span>
                    </p>
                    <p class=\"footnote\">
                        <span class=\"ref\"><sup>§</sup></span>
                        <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response at Week 6 (n=72 for placebo, and n=70 for Entyvio Q8W). CS‑free clinical remission was defined as the proportion of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                    </p>
                    <p class=\"footnote acronyms\">
                        <span class=\"text\">UC = ulcerative colitis; CI = confidence interval; Q8W = every 8 weeks; CS = corticosteroids; TNFα = tumor necrosis factor alpha.</span>
                    </p>
                    <h4>Safety was evaluated in clinical trials of over 3300 adults<sup>1</sup></h4>
                    <p class=\"smaller\">Trials included more than 800 patients who received Entyvio for more than 2 years.</p>

                    <p class=\"smaller\">UC Trials I &amp; II and CD Trials I &amp; III Select Adverse Events</p>
                    <ul class=\"ul-main\" data-bullet=\"primary\">
                        <li>Infection rates with Entyvio were 0.85 per patient-year vs 0.7 for placebo</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Infections consisted primarily of nasopharyngitis, upper respiratory tract infection, sinusitis, and urinary tract infection</li>
                            <li>2% of patients discontinued Entyvio due to infections</li>
                        </ul>
                        <li>Serious infection rates with Entyvio were 0.07 per patient-year vs 0.06 for placebo</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Serious infections included anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis</li>
                        </ul>
                        <li>Although unlikely, a risk of PML cannot be ruled out:</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>PML, a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised</li>
                            <li>1 case of PML in an Entyvio-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression)</li>
                        </ul>
                        <li>Adverse reactions were reported in 52% of patients treated with Entyvio (N=1434) and 45% of patients treated with placebo (N=297)</li>
                        <ul class=\"ul-inner\" data-bullet=\"darker_primary_light\">
                            <li>Over 52 weeks, 7% of patients treated with Entyvio experienced serious adverse reactions compared to 4% treated with placebo</li>
                        </ul>
                    </ul>
                    <div class=\"btn-container\">
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial#study-design\" class=\"btn btn-secondary\">VIEW GEMINI I STUDY DESIGN</a>
                    </div>
                    <p class=\"footnote acronyms\">
                        <span class=\"text\">PML = progressive multifocal leukoencephalopathy.</span>
                    </p>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>GEMINI I Data: UC Trials I and II</p>
                        <a href=\"/clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">SEE THE DATA</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>Entyvio Safety Profile</p>
                        <a href=\"/safety-profile\" class=\"btn btn-secondary\">VIEW SAFETY PROFILE</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>




                <!-- *********************** -->
                <!-- **** CODE ENDS **** *** -->
                <!-- *********************** -->
            </div>
", "themes/custom/entyviohcp/templates/content/node--varsity-ulcerative-colitis-clini--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--varsity-ulcerative-colitis-clini--full.html.twig");
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
