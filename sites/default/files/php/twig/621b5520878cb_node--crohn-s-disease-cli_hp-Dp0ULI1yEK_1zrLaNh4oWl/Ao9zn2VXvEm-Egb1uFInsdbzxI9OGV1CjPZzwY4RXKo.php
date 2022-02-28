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

/* themes/custom/entyviohcp/templates/content/node--crohn-s-disease-clinical-trial--full.html.twig */
class __TwigTemplate_339a8a296b62c2a5a9dec304ce7bcec1 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/gemini2-styling"), "html", null, true);
        echo "
<div data-page-id=\"CrohnsDisease\" data-page-category=\"ClinicalEfficacy\" class=\"page-content gemini2-content\">
<div id=\"skip-to-content\"></div>
<div id=\"hero\">
    <div>
    <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/mobile-cdtrial-eva.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-cdtrial-eva.png\">
                <img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/images/hero/desktop-cdtrial-eva.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        Made <br class=\"breakpoint\" data-only=\"desktop\">For
                    </h1>
                </div>

                <div>
                    <h2>Long-term <br>Remission <br class=\"breakpoint\" data-only=\"desktop\">in CD</h2>
                </div>

                <div class=\"extra-list\">
                    <p>Remission was evaluated at Week&nbsp;52.<sup>1</sup> <br>Individual results may vary.</p>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 27, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 27, $this->source)), "html", null, true);
        echo "/images/hero/mobile-moa-rhitu.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 28, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 28, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-rhitu.png\">
                <img src=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 29, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 29, $this->source)), "html", null, true);
        echo "/images/hero/desktop-moa-rhitu.png\" alt=\"Healthcare professional.\">
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
            <div id=\"overview-trial-data\" class=\"overview-trial-data\">
                <h2 class=\"border\">OVERVIEW OF GEMINI II AND III DATA</h2>
                <p class=\"subheading\">CD Trials I, II, and III</p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"half graph-1\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading cd-trials\">CD Trial I: Primary End&nbsp;Points</p>
                            <div class=\"tile\">
                                <h3 class=\"clinical-remission-chart\"><span>CLINICAL REMISSION <br class=\"special-breakpoint-4\" data-only=\"desktop\">AND <br data-only=\"desktop\">RESPONSE RATES AT WEEK&nbsp;6<sup>1,2</sup></span></h3>
                                <div class=\"image-container side-by-side cd-trials\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t1-end-points.png\">
                                            <img src=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 59, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 59, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-end-points.png\" class=\"cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial I primary end points at Week 6.\" title=\"Crohn's disease trial I Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"half  graph-2\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading cd-trials\">CD Trial III: Primary and Secondary End&nbsp;Points</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION, CLINICAL RESPONSE AND STEROID-FREE REMISSION AT WEEK&nbsp;52<sup>1,2</sup></h3>
                                <div class=\"image-container side-by-side cd-trials\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 72, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 72, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 73, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 73, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t3-end-points.png\">
                                            <img src=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 74, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 74, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-end-points.png\" class=\"cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial III primary and secondary end points at Week 52.\" title=\"Crohn's disease trial III Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class=\"full text-description\">
                            <p class=\"end-point-description\">
                                <strong>Study Design:</strong> Three randomized, double-blind, placebo-controlled studies enrolled adult patients with moderately to severely active CD who had failed at least 1 conventional therapy, including corticosteroids, immunomodulators, and/or ≥1 anti-TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were permitted in all three trials.<br>
                                In CD Trial I, patients were randomized (3:2) to receive Entyvio 300&nbsp;mg or placebo by intravenous infusion at Weeks 0 and 2.<br>
                                In CD Trial II, patients were randomized (1:1) to receive either Entyvio 300&nbsp;mg or placebo at Weeks 0, 2, and 6.<br>
                                In CD Trial III, patients receiving Entyvio who demonstrated clinical response (≥70-point decrease in CDAI score from baseline) at Week&nbsp;6 (from CD Trial I or an open-label cohort) were randomized (1:1:1) to receive either Entyvio 300&nbsp;mg every 8 weeks, Entyvio 300&nbsp;mg every 4&nbsp;weeks,<sup>§</sup> or placebo every 4 weeks.
                            </p>
                        </div>

                        <div class=\"half graph-3\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">CD Trial II: Primary End&nbsp;Point</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION RATE AT WEEK&nbsp;6<sup>1</sup>*</h3>
                                <div class=\"image-container\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 97, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 97, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t2-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 98, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 98, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t2-end-points.png\">
                                            <img src=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 99, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 99, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t2-end-points.png\" class=\"solo cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial II primary end point at Week 6.\" title=\"Crohn's disease trial II Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class=\"half button-and-footnotes\" data-col=\"mobile-12 desktop-6\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score&nbsp;≤150.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response (defined as ≥70 decrease in CDAI from baseline) at Week 6 (n=82 for placebo and n=82 for Entyvio every 8 weeks). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup that discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing&nbsp;regimen.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; NS = not significant; Q8W = every 8 weeks; TNFα = tumor necrosis factor alpha.</span>
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
                        <a href=\"#clinical-remission-response-data\">Clinical Remission and Response&nbsp;Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#long-term-data\">Long-Term Data</a>
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
            <div id=\"clinical-remission-response-data\" class=\"clinical-response-rates cd-trials\">
                <h2 class=\"banner below-nav\"><span>CLINICAL REMISSION AND RESPONSE&nbsp;DATA</span></h2>
                <p class=\"subheading\">CD Trial I: Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical remission* rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 6, in the anti‑TNFα naïve subpopulation, clinical remission rates were 17% for those who received Entyvio vs. 9% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical remission rates were 12% for those who received Entyvio vs. 4% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"primary body-copy jump-to\"><strong>Go back to top of page for GEMINI II and III Primary End Point&nbsp;Data</strong></p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"jump-to primary body-copy\"><strong>Go back to top of page for GEMINI II and III Primary End Point&nbsp;Data</strong></p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score ≤150.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn’s Disease Activity Index; CI = confidence interval; TNFα = tumor necrosis factor alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL REMISSION RATES AT WEEK&nbsp;6<sup>3</sup>*</figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 189, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 189, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-remission-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 190, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 190, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t1-remission-rates.png\">
                                    <img src=\"";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 191, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 191, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-remission-rates.png\" class=\"\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial I remission rates at Week 6.\" title=\"Remission Rates at Week 6\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial I: Response Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t1-response-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical response<sup>†</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 6, in the anti‑TNFα naïve subpopulation, clinical response rates were 42% for those who received Entyvio vs. 30% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical response rates were 21% in both groups.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; NS = not significant; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL RESPONSE RATES AT WEEK&nbsp;6<sup>3†</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 223
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 223, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 223, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-response-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 224
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 224, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 224, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t1-response-rates.png\">
                                    <img src=\"";
        // line 225
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 225, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 225, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t1-response-rates.png\" class=\"\" alt=\"Response rates at Week 6 in Entyvio® (vedolizumab) Crohn's disease trial I.\" title=\"Response Rates at Week 6\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"long-term-data\" class=\"long-term-data cd-trials\">
                <h2 class=\"banner\"><span>LONG-TERM DATA</span></h2>
                <p class=\"subheading\">CD Trial III: Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-remission-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical remission* rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, clinical remission rates were 52% for those who received Entyvio vs. 27% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical remission rates were 28% for those who received Entyvio vs. 13% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"jump-to see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score ≤150.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3</sup>*</figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 260
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 260, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 260, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-remission-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 261
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 261, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 261, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t3-remission-rates.png\">
                                    <img src=\"";
        // line 262
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 262, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 262, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-remission-rates.png\" class=\"\" alt=\"Crohn's disease trial III remission rates at Week 52.\" title=\"Remission Rates at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial III: Response Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-response-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical response<sup>†</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, clinical response rates were 61% for those who received Entyvio vs. 38% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical response rates were 29% for those who received Entyvio vs. 21% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>

                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from baseline.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL RESPONSE RATES AT WEEK&nbsp;52<sup>3†</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 295
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 295, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 295, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-response-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 296
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 296, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 296, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t3-response-rates.png\">
                                    <img src=\"";
        // line 297
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 297, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 297, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-response-rates.png\" alt=\"Response rates at Week 52 in Entyvio® (vedolizumab) Crohn's disease trial III.\" title=\"Response Rates at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial III: Steroid-Free Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-steroid-free-remission-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Steroid-free clinical remission<sup>‡</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, steroid-free clinical remission rates were 40% for those who received Entyvio vs. 28% for those who received placebo. In the anti‑TNFα failure subpopulation, steroid-free clinical remission rates were 24% for those who received Entyvio vs. 0% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response (defined as ≥70 decrease in CDAI from baseline) at Week 6 (n=82 for placebo and n=82 for Entyvio every 8 weeks). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup that discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>STEROID-FREE CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3‡</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 329
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 329, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 329, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-steroid-free.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 330, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 330, $this->source)), "html", null, true);
        echo "/images/charts/desktop-cd-trials-t3-steroid-free.png\">
                                    <img src=\"";
        // line 331
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 331, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 331, $this->source)), "html", null, true);
        echo "/images/charts/mobile-cd-trials-t3-steroid-free.png\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial III steroid-free data at Week 52.\" title=\"Steroid-Free Data at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"study-design\" class=\"study-design\">
                <h2 class=\"banner\"><span>STUDY DESIGNS FOR <br data-only=\"mobile\">CD TRIALS I, II, AND III</span></h2>
                <p class=\"subheading description-below\">CD Trials I and III<sup>1-3</sup></p>
                <p class=\"trial-description\">CD Trials I and III were randomized, double-blind, placebo-controlled studies that enrolled adult patients with moderately to severely active CD who had failed at least one conventional therapy, including corticosteroids or immunomodulators and/or ≥1 TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were permitted. Corticosteroids were tapered after Week 6, and in the United States, immunosuppressants were discontinued after Week&nbsp;6.</p>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"";
        // line 346
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 346, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 346, $this->source)), "html", null, true);
        echo "/images/charts/cd-trials-t1-t3-study-design.png\" class=\"t1-t3\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial I and III design.\" title=\"Crohn's Disease Trials I and III Study Designs\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container\">
                        <ul class=\"cd-trials\" data-bullet=\"primary\">
                            <li><span class=\"gotham-medium\">CD Trial I:</span> 2 cohorts with primary end point evaluation at Week&nbsp;6</li>
                            <li><span class=\"gotham-medium\">CD Trial III:</span> Patients receiving Entyvio 300 mg in cohorts 1 and 2 of CD Trial I who had a clinical response<sup>‡</sup> at Week 6 were randomly assigned to continue receiving Entyvio 300 mg every 8 weeks, Entyvio 300 mg every 4 weeks, or placebo for up to 52&nbsp;weeks</li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\">*</span>
                            <span class=\"text\">The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing&nbsp;regimen.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>†</sup></span>
                            <span class=\"text\">Clinical remission = CDAI ≤150.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>‡</sup></span>
                            <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>§</sup></span>
                            <span class=\"text\">Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response at Week 6 (n=82 for placebo, and n=82 for Entyvio Q8W). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            <span class=\"text\">CDAI = Crohn's Disease Activity Index; IV = intravenous; Q4W = every 4 weeks; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                        </p>
                    </div>
                </div>
                <p class=\"subheading description-below\">CD Trial II<sup>1</sup></p>
                <p class=\"trial-description\">CD Trial II was a randomized, double-blind, placebo-controlled study that enrolled adult patients with moderately to severely active CD who had failed at least one conventional therapy, including corticosteroids or immunomodulators and/or ≥1 anti‑TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were&nbsp;permitted.</p>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"";
        // line 383
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 383, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 383, $this->source)), "html", null, true);
        echo "/images/charts/cd-trials-t2-study-design.png\" class=\"t2\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial II design.\" title=\"Crohn's disease trial II Study Design\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container\">
                        <ul class=\"cd-trials\" data-bullet=\"primary\">
                            <li><span class=\"gotham-medium\">CD Trial II:</span> Patients were randomized in a double-blinded fashion (1:1) to receive either placebo or&nbsp;Entyvio</li>
                            <li>76% of patients in CD Trial II had an inadequate response, loss of response, or intolerance to one or more TNF blockers</li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>†</sup></span>
                            <span class=\"text\">Clinical remission = CDAI ≤150.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            <span class=\"text\">CDAI = Crohn's Disease Activity Index; IV = intravenous; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>GEMINI I Data: UC Trials I and II</p>
                        <a href=\"";
        // line 407
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 407, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">SEE THE DATA</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>See How Entyvio Works</p>
                        <a href=\"";
        // line 411
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 411, $this->source), "html", null, true);
        echo "mechanism-of-action\" class=\"btn btn-secondary\">VIEW THE MOA</a>
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
<div id=\"isi\">
    <aside class=\"section\">
        <article>
            <button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
                <span></span>
            </button>
            <div class=\"isi-header\">
                <h2>Important Safety Information</h2>
            </div>
            <ul>
                <li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

                <li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

                <li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

                <li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

                <li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

                <li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

                <li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
            </ul>

            <h2>Indications</h2>
            <h3>Adult Ulcerative Colitis (UC)</h3>
            <p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

            <h3>Adult Crohn's Disease (CD)</h3>
            <p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

            <p>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including <a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
        </article>
    </aside>

</div>
<div id=\"references\">
    <div class=\"section\">
        <article>
            <h3>References:</h3>

            <ol>
              <li>Entyvio (vedolizumab) prescribing information. Takeda Pharmaceuticals.</li>
              <li>Sandborn WJ, Feagan BG, Rugeerts P, et al for the GEMINI 2 Study Group. <em>N Engl J Med</em>. 2013;369(8):711-721.</li>
              <li>Data on file. Takeda Pharmaceuticals.</li>
          </ol>

        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--crohn-s-disease-clinical-trial--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 411,  544 => 407,  517 => 383,  477 => 346,  459 => 331,  455 => 330,  451 => 329,  416 => 297,  412 => 296,  408 => 295,  372 => 262,  368 => 261,  364 => 260,  326 => 225,  322 => 224,  318 => 223,  283 => 191,  279 => 190,  275 => 189,  182 => 99,  178 => 98,  174 => 97,  148 => 74,  144 => 73,  140 => 72,  124 => 59,  120 => 58,  116 => 57,  85 => 29,  81 => 28,  77 => 27,  56 => 9,  52 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/gemini2-styling') }}
<div data-page-id=\"CrohnsDisease\" data-page-category=\"ClinicalEfficacy\" class=\"page-content gemini2-content\">
<div id=\"skip-to-content\"></div>
<div id=\"hero\">
    <div>
    <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-cdtrial-eva.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-cdtrial-eva.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-cdtrial-eva.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        Made <br class=\"breakpoint\" data-only=\"desktop\">For
                    </h1>
                </div>

                <div>
                    <h2>Long-term <br>Remission <br class=\"breakpoint\" data-only=\"desktop\">in CD</h2>
                </div>

                <div class=\"extra-list\">
                    <p>Remission was evaluated at Week&nbsp;52.<sup>1</sup> <br>Individual results may vary.</p>
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
\t<div>
\t\t<div class=\"section\">
\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t</div>
\t</div>
</div>
    <div>
        <article>
            <div id=\"overview-trial-data\" class=\"overview-trial-data\">
                <h2 class=\"border\">OVERVIEW OF GEMINI II AND III DATA</h2>
                <p class=\"subheading\">CD Trials I, II, and III</p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"half graph-1\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading cd-trials\">CD Trial I: Primary End&nbsp;Points</p>
                            <div class=\"tile\">
                                <h3 class=\"clinical-remission-chart\"><span>CLINICAL REMISSION <br class=\"special-breakpoint-4\" data-only=\"desktop\">AND <br data-only=\"desktop\">RESPONSE RATES AT WEEK&nbsp;6<sup>1,2</sup></span></h3>
                                <div class=\"image-container side-by-side cd-trials\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t1-end-points.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-end-points.png\" class=\"cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial I primary end points at Week 6.\" title=\"Crohn's disease trial I Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class=\"half  graph-2\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading cd-trials\">CD Trial III: Primary and Secondary End&nbsp;Points</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION, CLINICAL RESPONSE AND STEROID-FREE REMISSION AT WEEK&nbsp;52<sup>1,2</sup></h3>
                                <div class=\"image-container side-by-side cd-trials\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t3-end-points.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-end-points.png\" class=\"cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial III primary and secondary end points at Week 52.\" title=\"Crohn's disease trial III Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class=\"full text-description\">
                            <p class=\"end-point-description\">
                                <strong>Study Design:</strong> Three randomized, double-blind, placebo-controlled studies enrolled adult patients with moderately to severely active CD who had failed at least 1 conventional therapy, including corticosteroids, immunomodulators, and/or ≥1 anti-TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were permitted in all three trials.<br>
                                In CD Trial I, patients were randomized (3:2) to receive Entyvio 300&nbsp;mg or placebo by intravenous infusion at Weeks 0 and 2.<br>
                                In CD Trial II, patients were randomized (1:1) to receive either Entyvio 300&nbsp;mg or placebo at Weeks 0, 2, and 6.<br>
                                In CD Trial III, patients receiving Entyvio who demonstrated clinical response (≥70-point decrease in CDAI score from baseline) at Week&nbsp;6 (from CD Trial I or an open-label cohort) were randomized (1:1:1) to receive either Entyvio 300&nbsp;mg every 8 weeks, Entyvio 300&nbsp;mg every 4&nbsp;weeks,<sup>§</sup> or placebo every 4 weeks.
                            </p>
                        </div>

                        <div class=\"half graph-3\" data-col=\"mobile-12 desktop-6\">
                            <p class=\"end-point-heading\">CD Trial II: Primary End&nbsp;Point</p>
                            <div class=\"tile\">
                                <h3>CLINICAL REMISSION RATE AT WEEK&nbsp;6<sup>1</sup>*</h3>
                                <div class=\"image-container\">
                                    <figure>
                                        <picture>
                                            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t2-end-points.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t2-end-points.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t2-end-points.png\" class=\"solo cd-trials\" alt=\"Entyvio® (vedolizumab) Crohn's disease clinical trial II primary end point at Week 6.\" title=\"Crohn's disease trial II Data\">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class=\"half button-and-footnotes\" data-col=\"mobile-12 desktop-6\">
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score&nbsp;≤150.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response (defined as ≥70 decrease in CDAI from baseline) at Week 6 (n=82 for placebo and n=82 for Entyvio every 8 weeks). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup that discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                            </p>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>§</sup></span>
                                <span class=\"text\">The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing&nbsp;regimen.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; NS = not significant; Q8W = every 8 weeks; TNFα = tumor necrosis factor alpha.</span>
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
                        <a href=\"#clinical-remission-response-data\">Clinical Remission and Response&nbsp;Data</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#long-term-data\">Long-Term Data</a>
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
            <div id=\"clinical-remission-response-data\" class=\"clinical-response-rates cd-trials\">
                <h2 class=\"banner below-nav\"><span>CLINICAL REMISSION AND RESPONSE&nbsp;DATA</span></h2>
                <p class=\"subheading\">CD Trial I: Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical remission* rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 6, in the anti‑TNFα naïve subpopulation, clinical remission rates were 17% for those who received Entyvio vs. 9% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical remission rates were 12% for those who received Entyvio vs. 4% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"primary body-copy jump-to\"><strong>Go back to top of page for GEMINI II and III Primary End Point&nbsp;Data</strong></p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"jump-to primary body-copy\"><strong>Go back to top of page for GEMINI II and III Primary End Point&nbsp;Data</strong></p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score ≤150.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn’s Disease Activity Index; CI = confidence interval; TNFα = tumor necrosis factor alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL REMISSION RATES AT WEEK&nbsp;6<sup>3</sup>*</figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-remission-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t1-remission-rates.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-remission-rates.png\" class=\"\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial I remission rates at Week 6.\" title=\"Remission Rates at Week 6\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial I: Response Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t1-response-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical response<sup>†</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 6, in the anti‑TNFα naïve subpopulation, clinical response rates were 42% for those who received Entyvio vs. 30% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical response rates were 21% in both groups.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; NS = not significant; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL RESPONSE RATES AT WEEK&nbsp;6<sup>3†</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-response-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t1-response-rates.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t1-response-rates.png\" class=\"\" alt=\"Response rates at Week 6 in Entyvio® (vedolizumab) Crohn's disease trial I.\" title=\"Response Rates at Week 6\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"long-term-data\" class=\"long-term-data cd-trials\">
                <h2 class=\"banner\"><span>LONG-TERM DATA</span></h2>
                <p class=\"subheading\">CD Trial III: Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-remission-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical remission* rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, clinical remission rates were 52% for those who received Entyvio vs. 27% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical remission rates were 28% for those who received Entyvio vs. 13% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"jump-to see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\">*</span>
                                <span class=\"text\">Clinical remission = CDAI score ≤150.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3</sup>*</figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-remission-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t3-remission-rates.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-remission-rates.png\" class=\"\" alt=\"Crohn's disease trial III remission rates at Week 52.\" title=\"Remission Rates at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial III: Response Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-response-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Clinical response<sup>†</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, clinical response rates were 61% for those who received Entyvio vs. 38% for those who received placebo. In the anti‑TNFα failure subpopulation, clinical response rates were 29% for those who received Entyvio vs. 21% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>

                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>†</sup></span>
                                <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from baseline.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>CLINICAL RESPONSE RATES AT WEEK&nbsp;52<sup>3†</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-response-rates.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t3-response-rates.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-response-rates.png\" alt=\"Response rates at Week 52 in Entyvio® (vedolizumab) Crohn's disease trial III.\" title=\"Response Rates at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
                <p class=\"subheading\">CD Trial III: Steroid-Free Remission Rates</p>
                <div class=\"container\">
                    <div class=\"flex-container t3-steroid-free-remission-rates\" data-row=\"\">
                        <div class=\"copy-container\" data-col=\"mobile-12 desktop-6\">
                            <h3>ANTI‑TNFα NAÏVE <em class=\"and\">AND</em> ANTI‑TNFα FAILURE SUBPOPULATIONS</h3>
                            <p class=\"gotham-medium\">Steroid-free clinical remission<sup>‡</sup> rates—exploratory end&nbsp;points.</p>
                            <p class=\"body-copy\">At Week 52, in the anti‑TNFα naïve subpopulation, steroid-free clinical remission rates were 40% for those who received Entyvio vs. 28% for those who received placebo. In the anti‑TNFα failure subpopulation, steroid-free clinical remission rates were 24% for those who received Entyvio vs. 0% for those who received placebo.<sup>3</sup></p>
                            <p data-only=\"desktop\" class=\"see-text\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                        </div>
                        <div class=\"button-footnote-container\" data-col=\"mobile-12 desktop-6\">
                            <p data-only=\"mobile\" class=\"see-text jump-to\">Go back to top of page for GEMINI II and III Primary End Point Data</p>
                            <div class=\"btn-container\">
                                <a href=\"#study-design\" class=\"btn btn-secondary\">VIEW FULL STUDY DESIGN</a>
                            </div>
                            <p class=\"footnote\">
                                <span class=\"ref\"><sup>‡</sup></span>
                                <span class=\"text\">Corticosteroid-free clinical remission: Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response (defined as ≥70 decrease in CDAI from baseline) at Week 6 (n=82 for placebo and n=82 for Entyvio every 8 weeks). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup that discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                            </p>
                            <p class=\"footnote acronyms\">
                                <span class=\"text\">CDAI = Crohn's Disease Activity Index; CI = confidence interval; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                            </p>
                        </div>
                        <div class=\"figure-container\" data-col=\"mobile-12 desktop-6\">
                            <figure>
                                <figcaption>STEROID-FREE CLINICAL REMISSION RATES AT WEEK&nbsp;52<sup>3‡</sup></figcaption>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-steroid-free.png\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-cd-trials-t3-steroid-free.png\">
                                    <img src=\"{{ base_path ~ directory }}/images/charts/mobile-cd-trials-t3-steroid-free.png\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial III steroid-free data at Week 52.\" title=\"Steroid-Free Data at Week 52\">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"study-design\" class=\"study-design\">
                <h2 class=\"banner\"><span>STUDY DESIGNS FOR <br data-only=\"mobile\">CD TRIALS I, II, AND III</span></h2>
                <p class=\"subheading description-below\">CD Trials I and III<sup>1-3</sup></p>
                <p class=\"trial-description\">CD Trials I and III were randomized, double-blind, placebo-controlled studies that enrolled adult patients with moderately to severely active CD who had failed at least one conventional therapy, including corticosteroids or immunomodulators and/or ≥1 TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were permitted. Corticosteroids were tapered after Week 6, and in the United States, immunosuppressants were discontinued after Week&nbsp;6.</p>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"{{ base_path ~ directory }}/images/charts/cd-trials-t1-t3-study-design.png\" class=\"t1-t3\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial I and III design.\" title=\"Crohn's Disease Trials I and III Study Designs\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container\">
                        <ul class=\"cd-trials\" data-bullet=\"primary\">
                            <li><span class=\"gotham-medium\">CD Trial I:</span> 2 cohorts with primary end point evaluation at Week&nbsp;6</li>
                            <li><span class=\"gotham-medium\">CD Trial III:</span> Patients receiving Entyvio 300 mg in cohorts 1 and 2 of CD Trial I who had a clinical response<sup>‡</sup> at Week 6 were randomly assigned to continue receiving Entyvio 300 mg every 8 weeks, Entyvio 300 mg every 4 weeks, or placebo for up to 52&nbsp;weeks</li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\">*</span>
                            <span class=\"text\">The Entyvio Q4W dosing regimen did not demonstrate additional clinical benefit over the Q8W dosing regimen. The Q4W dosing regimen is not the recommended dosing&nbsp;regimen.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>†</sup></span>
                            <span class=\"text\">Clinical remission = CDAI ≤150.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>‡</sup></span>
                            <span class=\"text\">Clinical response = ≥100-point decrease in CDAI from&nbsp;baseline.</span>
                        </p>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>§</sup></span>
                            <span class=\"text\">Assessed in the subgroup of patients who were receiving corticosteroids at baseline and who were in clinical response at Week 6 (n=82 for placebo, and n=82 for Entyvio Q8W). Corticosteroid-free clinical remission was defined as the proportion of patients in this subgroup who discontinued corticosteroids by Week 52 and were in clinical remission at Week&nbsp;52.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            <span class=\"text\">CDAI = Crohn's Disease Activity Index; IV = intravenous; Q4W = every 4 weeks; Q8W = every 8 weeks; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                        </p>
                    </div>
                </div>
                <p class=\"subheading description-below\">CD Trial II<sup>1</sup></p>
                <p class=\"trial-description\">CD Trial II was a randomized, double-blind, placebo-controlled study that enrolled adult patients with moderately to severely active CD who had failed at least one conventional therapy, including corticosteroids or immunomodulators and/or ≥1 anti‑TNFα therapy. Concomitant aminosalicylates, corticosteroids, and immunomodulators were&nbsp;permitted.</p>
                <div class=\"container\">
                    <div class=\"figure-container\">
                        <div class=\"mobile-scroll-container\">
                            <figure>
                                <img src=\"{{ base_path ~ directory }}/images/charts/cd-trials-t2-study-design.png\" class=\"t2\" alt=\"Entyvio® (vedolizumab) Crohn's disease trial II design.\" title=\"Crohn's disease trial II Study Design\">
                            </figure>
                        </div>
                        <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                    </div>
                    <div class=\"copy-container\">
                        <ul class=\"cd-trials\" data-bullet=\"primary\">
                            <li><span class=\"gotham-medium\">CD Trial II:</span> Patients were randomized in a double-blinded fashion (1:1) to receive either placebo or&nbsp;Entyvio</li>
                            <li>76% of patients in CD Trial II had an inadequate response, loss of response, or intolerance to one or more TNF blockers</li>
                        </ul>
                        <p class=\"footnote\">
                            <span class=\"ref\"><sup>†</sup></span>
                            <span class=\"text\">Clinical remission = CDAI ≤150.</span>
                        </p>
                        <p class=\"footnote acronyms\">
                            <span class=\"text\">CDAI = Crohn's Disease Activity Index; IV = intravenous; TNFα = tumor necrosis factor&nbsp;alpha.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>GEMINI I Data: UC Trials I and II</p>
                        <a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-secondary\">SEE THE DATA</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>See How Entyvio Works</p>
                        <a href=\"{{ base_path }}mechanism-of-action\" class=\"btn btn-secondary\">VIEW THE MOA</a>
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
<div id=\"isi\">
    <aside class=\"section\">
        <article>
            <button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
                <span></span>
            </button>
            <div class=\"isi-header\">
                <h2>Important Safety Information</h2>
            </div>
            <ul>
                <li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

                <li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

                <li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

                <li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

                <li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

                <li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

                <li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
            </ul>

            <h2>Indications</h2>
            <h3>Adult Ulcerative Colitis (UC)</h3>
            <p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

            <h3>Adult Crohn's Disease (CD)</h3>
            <p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

            <p>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including <a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
        </article>
    </aside>

</div>
<div id=\"references\">
    <div class=\"section\">
        <article>
            <h3>References:</h3>

            <ol>
              <li>Entyvio (vedolizumab) prescribing information. Takeda Pharmaceuticals.</li>
              <li>Sandborn WJ, Feagan BG, Rugeerts P, et al for the GEMINI 2 Study Group. <em>N Engl J Med</em>. 2013;369(8):711-721.</li>
              <li>Data on file. Takeda Pharmaceuticals.</li>
          </ol>

        </article>
    </div>
</div>
", "themes/custom/entyviohcp/templates/content/node--crohn-s-disease-clinical-trial--full.html.twig", "C:\\xampp\\htdocs\\EntyvioHCP_Drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--crohn-s-disease-clinical-trial--full.html.twig");
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
