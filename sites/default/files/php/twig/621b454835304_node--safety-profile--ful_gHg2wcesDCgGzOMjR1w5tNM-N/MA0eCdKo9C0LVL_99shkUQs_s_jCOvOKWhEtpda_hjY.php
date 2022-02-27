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

/* themes/custom/entyviohcp/templates/content/node--safety-profile--full.html.twig */
class __TwigTemplate_1449d2e0a062abbc5e36661917795a6371aa56c15393168d2350f57b5c5c4432 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/safety-styling"), "html", null, true);
        echo "
<div data-page-id=\"SafetyProfile\" data-page-category=\"SafetyProfile\" class=\"page-content safety-content\" >
    <div id=\"hero\">
        <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/images/hero/mobile-safety-gladys.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/desktop-safety-gladys.png\">
                        <img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-safety-gladys.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                            Safety<br>
                            <strong>Data</strong>
                        </h1>
                </div>

                <div>
                    <h2>For the <br><strong>long term</strong></h2>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source)), "html", null, true);
        echo "/images/hero/mobile-safety-chris.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/images/hero/desktop-safety-chris.png\">
                        <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/images/hero/desktop-safety-chris.png\" alt=\"Healthcare professional.\">
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
                <div class=\"long-safety-profile\">
                    <h2 class=\"border\"><span>LONG‑TERM SAFETY PROFILE</span></h2>
                    <div class=\"container\">

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
        echo "/images/icons/vs.svg\" alt=\"&quot;VS&quot; icon.\">
                                <p class=\"year\">2014</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#uc-cd-trials\" class=\"anchor-link\">Entyvio vs. <span class=\"relative\">Placebo</span></a>
                                <p>Clinical trials evaluated safety in more than 3300 adults (UC, CD, and healthy volunteers)<sup>1</sup>
                                </p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
        echo "/images/icons/five.svg\" alt=\"5-year open-label study icon.\">
                                <p class=\"year\">2017</p>
                            </div>
                            <div class=\"copy-container\">
                                <p class=\"anchor-link\">5-Year Open <span class=\"relative\">Label</span>
                                </p>
                                <p>5-year analysis, which included an open-label continuation study (UC and CD), has demonstrated consistent results across safety parameters<sup>2</sup>
                                </p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 70, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 70, $this->source)), "html", null, true);
        echo "/images/icons/arrows.svg\" alt=\"Head-to-head arrow icon.\">
                                <p class=\"year\">2019</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#varsity-adverse-events\" class=\"anchor-link\">Safety Data from the <span data-nobr=\"mobile\">Head-to-Head</span> VARSITY <span class=\"relative\">Trial</span></a>
                                <p>Study was not designed to assess safety differences</p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 81, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 81, $this->source)), "html", null, true);
        echo "/images/icons/seven.svg\" alt=\"7 years of consistent safety data icon.\">
                                <p class=\"year\">2020</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#seven-year-data\" class=\"anchor-link\">Now Up to 7 Years of Consistent Safety <span class=\"relative\">Data</span></a>
                                <p>A single arm, open-label, multinational study evaluated the long-term safety profile of Entyvio in moderately to severely active UC or CD patients.<sup>3</sup>
                                </p>
                                <ul class=\"dashed\">
                                    <li>The study evaluated 2243 patients who received Entyvio with a median exposure of 1072 days (range 1 to 3412 days)<sup>3-5</sup>
                                    </li>
                                </ul>
                                <p>Entyvio demonstrated up to 7 years of consistent results across safety parameters<sup>3-5</sup>
                                </p>
                            </div>
                        </div>

                        <!--
                        <div class=\"signals-list\">
                            <p class=\"sublist\">NO NEW SIGNALS OF:</p>
                            <ul>
                                <li>Infections</li>
                                <li>Malignancies</li>
                                <li>Infusion-related reactions</li>
                                <li>Hepatic injury</li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div id=\"third_section\">
        <div>
            <article>
                <div id=\"uc-cd-trials\" class=\"uc-cd-trials\">
                    <h2 class=\"border\"><span>UC TRIALS I &amp; II AND <nobr>CD TRIALS I &amp; III</nobr> <br data-only=\"mobile\">SELECT ADVERSE EVENTS<sup>1</sup></span></h2>
                    <div class=\"container\">
                        <figure>
                            <picture>
                                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 121, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 121, $this->source)), "html", null, true);
        echo "/images/tables/mobile-uc-cd-trials-adverse-events.jpg\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 122, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 122, $this->source)), "html", null, true);
        echo "/images/tables/desktop-uc-cd-trials-adverse-events.jpg\">
                                        <img src=\"";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 123, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 123, $this->source)), "html", null, true);
        echo "/images/tables/mobile-uc-cd-trials-adverse-events.jpg\" alt=\"Entyvio® vs placebo select adverse events for UC Trials I and II and CD Trials I and III.\" title=\"Entyvio® vs Placebo Select Adverse Events\">
                            </picture>
                        </figure>
                    </div>
                </div>
                <div id=\"full-adverse-events\" class=\"full-adverse-events\">
                    <h2 class=\"border\"><span>ADVERSE EVENTS BASED ON UC TRIALS I AND II, CD TRIALS I AND III<sup>1</sup></span></h2>
                    <div class=\"container\">
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
        echo "/images/icons/infections.svg\" alt=\"Infection icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>INFECTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Infection rates with Entyvio were 0.85 per patient-year vs. 0.7 for placebo</li>
                                    <ul>
                                        <li>Infections consisted primarily of nasopharyngitis, upper respiratory tract infection, sinusitis, and urinary tract infection</li>
                                        <li>2% of patients discontinued Entyvio due to infections</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 148, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 148, $this->source)), "html", null, true);
        echo "/images/icons/safety-serious-infections.svg\" alt=\"Serious infection icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>SERIOUS INFECTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Serious infection rates with Entyvio were 0.07 per patient-year vs. 0.06 for placebo</li>
                                    <ul>
                                        <li>Serious infections included anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 162, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 162, $this->source)), "html", null, true);
        echo "/images/icons/immunogenicity.svg\" alt=\"Immunogenicity icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>IMMUNOGENICITY</h3>
                                <ul data-bullet=\"primary\">
                                    <li>The rate of detectable anti-vedolizumab antibodies at any time during the 52 weeks of continuous treatment with Entyvio was 6% (86 of 1427 patients)</li>
                                    <ul>
                                        <li>20 of 86 patients were persistently positive (at 2 or more study visits) for anti-vedolizumab antibody, and 56 of 86 patients developed neutralizing antibodies to vedolizumab</li>
                                        <li>Among these 20 patients, 14 had undetectable or reduced vedolizumab serum concentrations. Five of the 20 patients with persistently positive anti-vedolizumab antibody achieved clinical remission at Week 52 in the controlled
                                            trials</li>
                                        <li>Overall, there was no apparent correlation of anti-vedolizumab antibody development to adverse reactions following intravenous administration of Entyvio</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 179, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 179, $this->source)), "html", null, true);
        echo "/images/icons/brain.svg\" alt=\"Brain icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>PROGRESSIVE MULTIFOCAL LEUKOENCEPHALOPATHY (PML)</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Although unlikely, a risk of PML cannot be ruled out:</li>
                                    <ul>
                                        <li>PML, a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John
                                            Cunningham (JC) virus and typically only occurs in patients who are&nbsp;immunocompromised </li>
                                        <li>1 case of PML in an Entyvio-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup>                                        and prior and concomitant immunosuppression)</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 195, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 195, $this->source)), "html", null, true);
        echo "/images/icons/liver.svg\" alt=\"Liver icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>LIVER INJURY</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Entyvio should be discontinued in patients with jaundice or other evidence of significant liver injury</li>
                                    <li>3 patients reported serious adverse reactions of hepatitis with Entyvio; 1&nbsp;additional case of serious hepatitis was seen in the open-label trial</li>
                                    <ul>
                                        <li>These adverse reactions occurred following 2 to 5 Entyvio doses; however, it is unclear if the reactions indicated drug-induced or autoimmune etiology</li>
                                        <li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving Entyvio</li>
                                        <li>All patients recovered following discontinuation of therapy with or without treatment with corticosteroids</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 212
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 212, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 212, $this->source)), "html", null, true);
        echo "/images/icons/malignancies.svg\" alt=\"Malignancies icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>MALIGNANCIES</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Malignancies (excluding dysplasia and basal cell carcinoma) were in 0.4% (6&nbsp;of 1434) of patients treated with Entyvio and in 0.3% (1 of 297) of patients treated with placebo</li>
                                    <ul>
                                        <li>The number of malignancies in clinical trials was small; however, long-term exposure was limited</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 226
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 226, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 226, $this->source)), "html", null, true);
        echo "/images/icons/safety-adverse-reactions.svg\" alt=\"Science icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>ADVERSE REACTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Adverse reactions were reported in 52% of patients treated with Entyvio (N=1434) and 45% of patients treated with placebo (N=297)</li>
                                    <ul>
                                        <li>Over 52 weeks, 7% of patients treated with Entyvio experienced serious adverse reactions compared to 4% treated with placebo</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"";
        // line 240
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 240, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 240, $this->source)), "html", null, true);
        echo "/images/icons/safety-irrs.svg\" alt=\"Infusion bag icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>INFUSION‑RELATED REACTIONS (IRR<span class=\"lowercase\">S</span>) AND HYPERSENSITIVITY REACTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>4% of patients treated with Entyvio (N=1434) experienced an IRR vs 3% of patients on placebo (N=297)</li>
                                    <li><span>1 case of anaphylaxis (1 of 1434 patients treated with Entyvio) was reported by a CD patient during the second infusion (symptoms reported were dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate) and was managed with discontinuation of infusion and treatment with antihistamine and IV hydrocortisone</span>
                                    </li>
                                    <li>Most frequently observed IRRs <span>in patients treated with Entyvio were nausea, headache, pruritus, dizziness, fatigue, infusion-related reaction, pyrexia, urticaria, and vomiting. These reactions generally occurred within the first two hours after the infusion and resolved with no treatment or following antihistamine and/or IV hydrocortisone treatment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"seven-year-data\" class=\"seven-year-data\">
                    <h2 class=\"border\"><span>NOW UP TO 7 YEARS OF CONSISTENT SAFETY DATA IN UC AND CD<sup>3-5</sup></span></h2>
                    <div class=\"container\">
                        <h3>STUDY DESIGN/METHODOLOGY</h3>
                        <ul data-bullet=\"primary\">
                            <li>GEMINI LTS was a phase 3, single-arm, open-label, multinational study evaluating the long-term safety profile of Entyvio in patients with moderately to severely active UC or&nbsp;CD</li>
                            <ul class=\"sublist\">
                                <li><span>Patients were enrolled from the phase 3 studies GEMINI 1, GEMINI 2, GEMINI 3, a long-term phase 2 study, and included a cohort of Entyvio-naive patients with UC and CD. Data were collected from May 2009 to October 2017</span>
                                </li>
                                <li><span>The study evaluated 2243 UC and CD patients who received Entyvio with a median exposure of 42.4 months for UC (range 0.03 to 112.2 months) and 31.5 months for CD (range 0.03 to 100.3 months)</span>
                                </li>
                                <li><span>The safety population included all patients who received any dose of Entyvio</span>
                                </li>
                            </ul>
                        </ul>
                        <div class=\"baseline-container\">
                            <h3>BASELINE CHARACTERISTICS</h3>
                            <div class=\"mobile-scroll-container\">
                                <figure>
                                    <img src=\"";
        // line 274
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 274, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 274, $this->source)), "html", null, true);
        echo "/images/graphics/baseline-characteristics-arrow-graphic.png\" alt=\"Entyvio® clinical trial baseline characteristics.\" title=\"Baseline Characteristics\">
                                </figure>
                            </div>
                            <figcaption>
                                MEDIAN ENTYVIO EXPOSURE IN&nbsp;UC: 42.4&nbsp;MONTHS, <span data-nobr=\"mobile\">RANGE 0.03–112.2 MONTHS</span>
                                <br>
                                <br data-only=\"mobile\"> MEDIAN ENTYVIO EXPOSURE IN&nbsp;CD: 31.5&nbsp;MONTHS, <span data-nobr=\"mobile\">RANGE 0.03–100.3 MONTHS</span>
                            </figcaption>
                            <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                        </div>
                        <p class=\"footnote acronyms\">
                            LTS = long-term safety.
                        </p>
                        <div class=\"chart-area\" data-row=\"\">
                            <div class=\"chart\" data-col=\"mobile-12 desktop-7\">
                                <div class=\"chart-heading\">
                                    <p>Exposure-adjusted incidence rates
                                        <br data-only=\"desktop\">of any AE or&nbsp;SAE</p>
                                </div>
                                <figure>
                                    <figcaption>Number of patients with
                                        <br data-only=\"mobile\">event/1000&nbsp;PYs of exposure*</figcaption>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 297
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 297, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 297, $this->source)), "html", null, true);
        echo "/images/charts/mobile-adverse-event.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 298
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 298, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 298, $this->source)), "html", null, true);
        echo "/images/charts/desktop-adverse-event.png\">
                                                <img src=\"";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 299, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 299, $this->source)), "html", null, true);
        echo "/images/charts/mobile-adverse-event.png\" alt=\"Entyvio® adverse event rates.\" title=\"Adverse Event Rates\">
                                    </picture>
                                </figure>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\">*</span>
                                    <span class=\"text\">Time-adjusted incidence rate per 1000 PYs = (number of patients experiencing an AE of interest/total person time in years)&nbsp;x&nbsp;1000.</span>
                                </p>
                            </div>
                            <div class=\"associated-copy\" data-col=\"mobile-12 desktop-5\">
                                <p class=\"subheading\">Open-label study up to 7 years demonstrated a consistent safety profile in UC and CD patients</p>
                                <ul data-bullet=\"\">
                                    <li>The most frequent AEs were disease exacerbations (35.9% UC, 35.3% CD), nasopharyngitis (28.2% UC, 25.4% CD) and arthralgia (17.3% UC, 24.4% CD)</li>
                                    <li>39.7% of AEs in UC and 46.2% of AEs in CD were considered by the treating physician to be related to exposure to Entyvio</li>
                                </ul>
                            </div>

                            <div class=\"no-signals\">
                                <p>NO NEW SIGNALS OF:</p>
                                <ul>
                                    <li>Infections</li>
                                    <li>Malignancies</li>
                                    <li>Infusion-related reactions</li>
                                    <li>Hepatic injury</li>
                                </ul>
                            </div>

                            <div class=\"chart chart-wide\">
                                <div class=\"chart-heading\">
                                    <p>Exposure-adjusted incidence rates of selected&nbsp;AEs</p>
                                </div>
                                <figcaption>Number of patients with <span data-nobr=\"mobile\">event/1000 PYs of exposure</span>*</figcaption>
                                <div class=\"mobile-bordered-area\">
                                    <div class=\"mobile-scroll-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 334
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 334, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 334, $this->source)), "html", null, true);
        echo "/images/charts/mobile-selected-adverse-event.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 335
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 335, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 335, $this->source)), "html", null, true);
        echo "/images/charts/desktop-selected-adverse-event.png\">
                                                        <img src=\"";
        // line 336
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 336, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 336, $this->source)), "html", null, true);
        echo "/images/charts/mobile-selected-adverse-event.png\" alt=\"Incidence rates of selected adverse events with Entyvio®.\" title=\"Selected Adverse Events\">
                                            </picture>
                                        </figure>
                                    </div>
                                    <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                                </div>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\">*</span>
                                    <span class=\"text\">Time-adjusted incidence rate per 1000 PYs = (number of patients experiencing an AE of interest/total person time in years)&nbsp;x&nbsp;1000.</span>
                                </p>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\"><sup>†</sup></span>
                                    <span class=\"text\">Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms.<sup>1</sup></span>
                                </p>
                            </div>
                            <div class=\"associated-copy\">
                                <p class=\"subheading\">No new safety signals up to 7 years in UC and CD&nbsp;patients</p>
                                <ul data-bullet=\"\">
                                    <li>GEMINI LTS identified no cases of PML with 7999 PYs of Entyvio&nbsp;exposure<sup>†</sup>
                                    </li>
                                </ul>
                                <p class=\"footnote acronyms\">
                                    AE = adverse event; LTS = long-term safety; PML = progressive multifocal leukoencephalopathy; PY = patient year; SAE = serious adverse event.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"varsity-adverse-events\" class=\"varsity-adverse-events\">
                    <h2 class=\"border\"><span>ADVERSE EVENTS OBSERVED IN THE VARSITY STUDY</span></h2>
                    <p class=\"subheading\">Safety Was Evaluated in 383 Patients: No New Safety Signals Were Observed for Entyvio<sup>6-8</sup>
                    </p>
                    <div class=\"container\">
                        <h3>STUDY WAS NOT DESIGNED TO ASSESS SAFETY DIFFERENCES</h3>
                        <div class=\"image-container\">
                            <figure>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 374
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 374, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 374, $this->source)), "html", null, true);
        echo "/images/tables/mobile-safety-differences.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 375
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 375, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 375, $this->source)), "html", null, true);
        echo "/images/tables/desktop-safety-differences.png\">
                                            <img src=\"";
        // line 376
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 376, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 376, $this->source)), "html", null, true);
        echo "/images/tables/mobile-safety-differences.png\" alt=\"Entyvio® VARSITY Trial adverse events.\" title=\"VARSITY Trial Adverse Events\">
                                </picture>
                            </figure>
                        </div>
                        <h3>ADVERSE EVENTS IN SAFETY POPULATION</h3>
                        <ul data-bullet=\"primary\">
                            <li>The most frequent AEs* for adalimumab and Entyvio were as follows: ≥1 TEAE, 35.8% and 32.9%; ulcerative colitis, 16.3% and 11.5%; nasopharyngitis, 7.8% and 7.0%; headache, 5.4% and 7.0%; anemia, 6.7% and 5.2%; abdominal pain, 5.2%
                                and 4.7%; upper respiratory tract infection, 4.4% and 5.2%</li>
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
                        <p data-only=\"mobile\">&nbsp;</p>
                        <p data-text-align=\"right\"><a href=\"";
        // line 409
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 409, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/varsity-trial\" class=\"btn-text btn-primary\" target=\"_self\">See the VARSITY study results</a>
                        </p>
                    </div>
                </div>


                <div class=\"interior-bottom-cta\">
                    <div class=\"cta-container\" data-row=\"\">
                        <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Crohn's Disease Data</p>
                            <a href=\"";
        // line 419
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 419, $this->source), "html", null, true);
        echo "clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-secondary\">SEE RESULTS IN CD</a>
                        </div>
                        <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Dosing &amp; Administration</p>
                            <a href=\"";
        // line 423
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 423, $this->source), "html", null, true);
        echo "dosing-administration\" class=\"btn btn-secondary\">REVIEW THE GUIDANCE</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--safety-profile--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 423,  556 => 419,  543 => 409,  507 => 376,  503 => 375,  499 => 374,  458 => 336,  454 => 335,  450 => 334,  412 => 299,  408 => 298,  404 => 297,  378 => 274,  341 => 240,  324 => 226,  307 => 212,  287 => 195,  268 => 179,  248 => 162,  231 => 148,  213 => 133,  200 => 123,  196 => 122,  192 => 121,  149 => 81,  135 => 70,  119 => 57,  104 => 45,  81 => 25,  77 => 24,  73 => 23,  55 => 8,  51 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/safety-styling') }}
<div data-page-id=\"SafetyProfile\" data-page-category=\"SafetyProfile\" class=\"page-content safety-content\" >
    <div id=\"hero\">
        <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-safety-gladys.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-safety-gladys.png\">
                        <img src=\"{{ base_path ~ directory }}/images/hero/desktop-safety-gladys.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                            Safety<br>
                            <strong>Data</strong>
                        </h1>
                </div>

                <div>
                    <h2>For the <br><strong>long term</strong></h2>
                </div>
            </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-safety-chris.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-safety-chris.png\">
                        <img src=\"{{ base_path ~ directory }}/images/hero/desktop-safety-chris.png\" alt=\"Healthcare professional.\">
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
                <div class=\"long-safety-profile\">
                    <h2 class=\"border\"><span>LONG‑TERM SAFETY PROFILE</span></h2>
                    <div class=\"container\">

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/vs.svg\" alt=\"&quot;VS&quot; icon.\">
                                <p class=\"year\">2014</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#uc-cd-trials\" class=\"anchor-link\">Entyvio vs. <span class=\"relative\">Placebo</span></a>
                                <p>Clinical trials evaluated safety in more than 3300 adults (UC, CD, and healthy volunteers)<sup>1</sup>
                                </p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/five.svg\" alt=\"5-year open-label study icon.\">
                                <p class=\"year\">2017</p>
                            </div>
                            <div class=\"copy-container\">
                                <p class=\"anchor-link\">5-Year Open <span class=\"relative\">Label</span>
                                </p>
                                <p>5-year analysis, which included an open-label continuation study (UC and CD), has demonstrated consistent results across safety parameters<sup>2</sup>
                                </p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/arrows.svg\" alt=\"Head-to-head arrow icon.\">
                                <p class=\"year\">2019</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#varsity-adverse-events\" class=\"anchor-link\">Safety Data from the <span data-nobr=\"mobile\">Head-to-Head</span> VARSITY <span class=\"relative\">Trial</span></a>
                                <p>Study was not designed to assess safety differences</p>
                            </div>
                        </div>

                        <div class=\"flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/seven.svg\" alt=\"7 years of consistent safety data icon.\">
                                <p class=\"year\">2020</p>
                            </div>
                            <div class=\"copy-container\">
                                <a href=\"#seven-year-data\" class=\"anchor-link\">Now Up to 7 Years of Consistent Safety <span class=\"relative\">Data</span></a>
                                <p>A single arm, open-label, multinational study evaluated the long-term safety profile of Entyvio in moderately to severely active UC or CD patients.<sup>3</sup>
                                </p>
                                <ul class=\"dashed\">
                                    <li>The study evaluated 2243 patients who received Entyvio with a median exposure of 1072 days (range 1 to 3412 days)<sup>3-5</sup>
                                    </li>
                                </ul>
                                <p>Entyvio demonstrated up to 7 years of consistent results across safety parameters<sup>3-5</sup>
                                </p>
                            </div>
                        </div>

                        <!--
                        <div class=\"signals-list\">
                            <p class=\"sublist\">NO NEW SIGNALS OF:</p>
                            <ul>
                                <li>Infections</li>
                                <li>Malignancies</li>
                                <li>Infusion-related reactions</li>
                                <li>Hepatic injury</li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div id=\"third_section\">
        <div>
            <article>
                <div id=\"uc-cd-trials\" class=\"uc-cd-trials\">
                    <h2 class=\"border\"><span>UC TRIALS I &amp; II AND <nobr>CD TRIALS I &amp; III</nobr> <br data-only=\"mobile\">SELECT ADVERSE EVENTS<sup>1</sup></span></h2>
                    <div class=\"container\">
                        <figure>
                            <picture>
                                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/tables/mobile-uc-cd-trials-adverse-events.jpg\">
                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/tables/desktop-uc-cd-trials-adverse-events.jpg\">
                                        <img src=\"{{ base_path ~ directory }}/images/tables/mobile-uc-cd-trials-adverse-events.jpg\" alt=\"Entyvio® vs placebo select adverse events for UC Trials I and II and CD Trials I and III.\" title=\"Entyvio® vs Placebo Select Adverse Events\">
                            </picture>
                        </figure>
                    </div>
                </div>
                <div id=\"full-adverse-events\" class=\"full-adverse-events\">
                    <h2 class=\"border\"><span>ADVERSE EVENTS BASED ON UC TRIALS I AND II, CD TRIALS I AND III<sup>1</sup></span></h2>
                    <div class=\"container\">
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/infections.svg\" alt=\"Infection icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>INFECTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Infection rates with Entyvio were 0.85 per patient-year vs. 0.7 for placebo</li>
                                    <ul>
                                        <li>Infections consisted primarily of nasopharyngitis, upper respiratory tract infection, sinusitis, and urinary tract infection</li>
                                        <li>2% of patients discontinued Entyvio due to infections</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/safety-serious-infections.svg\" alt=\"Serious infection icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>SERIOUS INFECTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Serious infection rates with Entyvio were 0.07 per patient-year vs. 0.06 for placebo</li>
                                    <ul>
                                        <li>Serious infections included anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/immunogenicity.svg\" alt=\"Immunogenicity icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>IMMUNOGENICITY</h3>
                                <ul data-bullet=\"primary\">
                                    <li>The rate of detectable anti-vedolizumab antibodies at any time during the 52 weeks of continuous treatment with Entyvio was 6% (86 of 1427 patients)</li>
                                    <ul>
                                        <li>20 of 86 patients were persistently positive (at 2 or more study visits) for anti-vedolizumab antibody, and 56 of 86 patients developed neutralizing antibodies to vedolizumab</li>
                                        <li>Among these 20 patients, 14 had undetectable or reduced vedolizumab serum concentrations. Five of the 20 patients with persistently positive anti-vedolizumab antibody achieved clinical remission at Week 52 in the controlled
                                            trials</li>
                                        <li>Overall, there was no apparent correlation of anti-vedolizumab antibody development to adverse reactions following intravenous administration of Entyvio</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/brain.svg\" alt=\"Brain icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>PROGRESSIVE MULTIFOCAL LEUKOENCEPHALOPATHY (PML)</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Although unlikely, a risk of PML cannot be ruled out:</li>
                                    <ul>
                                        <li>PML, a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John
                                            Cunningham (JC) virus and typically only occurs in patients who are&nbsp;immunocompromised </li>
                                        <li>1 case of PML in an Entyvio-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup>                                        and prior and concomitant immunosuppression)</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/liver.svg\" alt=\"Liver icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>LIVER INJURY</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Entyvio should be discontinued in patients with jaundice or other evidence of significant liver injury</li>
                                    <li>3 patients reported serious adverse reactions of hepatitis with Entyvio; 1&nbsp;additional case of serious hepatitis was seen in the open-label trial</li>
                                    <ul>
                                        <li>These adverse reactions occurred following 2 to 5 Entyvio doses; however, it is unclear if the reactions indicated drug-induced or autoimmune etiology</li>
                                        <li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving Entyvio</li>
                                        <li>All patients recovered following discontinuation of therapy with or without treatment with corticosteroids</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/malignancies.svg\" alt=\"Malignancies icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>MALIGNANCIES</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Malignancies (excluding dysplasia and basal cell carcinoma) were in 0.4% (6&nbsp;of 1434) of patients treated with Entyvio and in 0.3% (1 of 297) of patients treated with placebo</li>
                                    <ul>
                                        <li>The number of malignancies in clinical trials was small; however, long-term exposure was limited</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/safety-adverse-reactions.svg\" alt=\"Science icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>ADVERSE REACTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>Adverse reactions were reported in 52% of patients treated with Entyvio (N=1434) and 45% of patients treated with placebo (N=297)</li>
                                    <ul>
                                        <li>Over 52 weeks, 7% of patients treated with Entyvio experienced serious adverse reactions compared to 4% treated with placebo</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class=\"adverse-event flex-container\">
                            <div class=\"image-container\">
                                <img src=\"{{ base_path ~ directory }}/images/icons/safety-irrs.svg\" alt=\"Infusion bag icon.\">
                            </div>
                            <div class=\"copy-container\">
                                <h3>INFUSION‑RELATED REACTIONS (IRR<span class=\"lowercase\">S</span>) AND HYPERSENSITIVITY REACTIONS</h3>
                                <ul data-bullet=\"primary\">
                                    <li>4% of patients treated with Entyvio (N=1434) experienced an IRR vs 3% of patients on placebo (N=297)</li>
                                    <li><span>1 case of anaphylaxis (1 of 1434 patients treated with Entyvio) was reported by a CD patient during the second infusion (symptoms reported were dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate) and was managed with discontinuation of infusion and treatment with antihistamine and IV hydrocortisone</span>
                                    </li>
                                    <li>Most frequently observed IRRs <span>in patients treated with Entyvio were nausea, headache, pruritus, dizziness, fatigue, infusion-related reaction, pyrexia, urticaria, and vomiting. These reactions generally occurred within the first two hours after the infusion and resolved with no treatment or following antihistamine and/or IV hydrocortisone treatment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"seven-year-data\" class=\"seven-year-data\">
                    <h2 class=\"border\"><span>NOW UP TO 7 YEARS OF CONSISTENT SAFETY DATA IN UC AND CD<sup>3-5</sup></span></h2>
                    <div class=\"container\">
                        <h3>STUDY DESIGN/METHODOLOGY</h3>
                        <ul data-bullet=\"primary\">
                            <li>GEMINI LTS was a phase 3, single-arm, open-label, multinational study evaluating the long-term safety profile of Entyvio in patients with moderately to severely active UC or&nbsp;CD</li>
                            <ul class=\"sublist\">
                                <li><span>Patients were enrolled from the phase 3 studies GEMINI 1, GEMINI 2, GEMINI 3, a long-term phase 2 study, and included a cohort of Entyvio-naive patients with UC and CD. Data were collected from May 2009 to October 2017</span>
                                </li>
                                <li><span>The study evaluated 2243 UC and CD patients who received Entyvio with a median exposure of 42.4 months for UC (range 0.03 to 112.2 months) and 31.5 months for CD (range 0.03 to 100.3 months)</span>
                                </li>
                                <li><span>The safety population included all patients who received any dose of Entyvio</span>
                                </li>
                            </ul>
                        </ul>
                        <div class=\"baseline-container\">
                            <h3>BASELINE CHARACTERISTICS</h3>
                            <div class=\"mobile-scroll-container\">
                                <figure>
                                    <img src=\"{{ base_path ~ directory }}/images/graphics/baseline-characteristics-arrow-graphic.png\" alt=\"Entyvio® clinical trial baseline characteristics.\" title=\"Baseline Characteristics\">
                                </figure>
                            </div>
                            <figcaption>
                                MEDIAN ENTYVIO EXPOSURE IN&nbsp;UC: 42.4&nbsp;MONTHS, <span data-nobr=\"mobile\">RANGE 0.03–112.2 MONTHS</span>
                                <br>
                                <br data-only=\"mobile\"> MEDIAN ENTYVIO EXPOSURE IN&nbsp;CD: 31.5&nbsp;MONTHS, <span data-nobr=\"mobile\">RANGE 0.03–100.3 MONTHS</span>
                            </figcaption>
                            <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                        </div>
                        <p class=\"footnote acronyms\">
                            LTS = long-term safety.
                        </p>
                        <div class=\"chart-area\" data-row=\"\">
                            <div class=\"chart\" data-col=\"mobile-12 desktop-7\">
                                <div class=\"chart-heading\">
                                    <p>Exposure-adjusted incidence rates
                                        <br data-only=\"desktop\">of any AE or&nbsp;SAE</p>
                                </div>
                                <figure>
                                    <figcaption>Number of patients with
                                        <br data-only=\"mobile\">event/1000&nbsp;PYs of exposure*</figcaption>
                                    <picture>
                                        <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-adverse-event.png\">
                                            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-adverse-event.png\">
                                                <img src=\"{{ base_path ~ directory }}/images/charts/mobile-adverse-event.png\" alt=\"Entyvio® adverse event rates.\" title=\"Adverse Event Rates\">
                                    </picture>
                                </figure>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\">*</span>
                                    <span class=\"text\">Time-adjusted incidence rate per 1000 PYs = (number of patients experiencing an AE of interest/total person time in years)&nbsp;x&nbsp;1000.</span>
                                </p>
                            </div>
                            <div class=\"associated-copy\" data-col=\"mobile-12 desktop-5\">
                                <p class=\"subheading\">Open-label study up to 7 years demonstrated a consistent safety profile in UC and CD patients</p>
                                <ul data-bullet=\"\">
                                    <li>The most frequent AEs were disease exacerbations (35.9% UC, 35.3% CD), nasopharyngitis (28.2% UC, 25.4% CD) and arthralgia (17.3% UC, 24.4% CD)</li>
                                    <li>39.7% of AEs in UC and 46.2% of AEs in CD were considered by the treating physician to be related to exposure to Entyvio</li>
                                </ul>
                            </div>

                            <div class=\"no-signals\">
                                <p>NO NEW SIGNALS OF:</p>
                                <ul>
                                    <li>Infections</li>
                                    <li>Malignancies</li>
                                    <li>Infusion-related reactions</li>
                                    <li>Hepatic injury</li>
                                </ul>
                            </div>

                            <div class=\"chart chart-wide\">
                                <div class=\"chart-heading\">
                                    <p>Exposure-adjusted incidence rates of selected&nbsp;AEs</p>
                                </div>
                                <figcaption>Number of patients with <span data-nobr=\"mobile\">event/1000 PYs of exposure</span>*</figcaption>
                                <div class=\"mobile-bordered-area\">
                                    <div class=\"mobile-scroll-container\">
                                        <figure>
                                            <picture>
                                                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/mobile-selected-adverse-event.png\">
                                                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/desktop-selected-adverse-event.png\">
                                                        <img src=\"{{ base_path ~ directory }}/images/charts/mobile-selected-adverse-event.png\" alt=\"Incidence rates of selected adverse events with Entyvio®.\" title=\"Selected Adverse Events\">
                                            </picture>
                                        </figure>
                                    </div>
                                    <p class=\"scroll-instruction\" data-only=\"mobile\">Scroll left and right to see more</p>
                                </div>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\">*</span>
                                    <span class=\"text\">Time-adjusted incidence rate per 1000 PYs = (number of patients experiencing an AE of interest/total person time in years)&nbsp;x&nbsp;1000.</span>
                                </p>
                                <p class=\"footnote exposure\">
                                    <span class=\"ref\"><sup>†</sup></span>
                                    <span class=\"text\">Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms.<sup>1</sup></span>
                                </p>
                            </div>
                            <div class=\"associated-copy\">
                                <p class=\"subheading\">No new safety signals up to 7 years in UC and CD&nbsp;patients</p>
                                <ul data-bullet=\"\">
                                    <li>GEMINI LTS identified no cases of PML with 7999 PYs of Entyvio&nbsp;exposure<sup>†</sup>
                                    </li>
                                </ul>
                                <p class=\"footnote acronyms\">
                                    AE = adverse event; LTS = long-term safety; PML = progressive multifocal leukoencephalopathy; PY = patient year; SAE = serious adverse event.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"varsity-adverse-events\" class=\"varsity-adverse-events\">
                    <h2 class=\"border\"><span>ADVERSE EVENTS OBSERVED IN THE VARSITY STUDY</span></h2>
                    <p class=\"subheading\">Safety Was Evaluated in 383 Patients: No New Safety Signals Were Observed for Entyvio<sup>6-8</sup>
                    </p>
                    <div class=\"container\">
                        <h3>STUDY WAS NOT DESIGNED TO ASSESS SAFETY DIFFERENCES</h3>
                        <div class=\"image-container\">
                            <figure>
                                <picture>
                                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/tables/mobile-safety-differences.png\">
                                        <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/tables/desktop-safety-differences.png\">
                                            <img src=\"{{ base_path ~ directory }}/images/tables/mobile-safety-differences.png\" alt=\"Entyvio® VARSITY Trial adverse events.\" title=\"VARSITY Trial Adverse Events\">
                                </picture>
                            </figure>
                        </div>
                        <h3>ADVERSE EVENTS IN SAFETY POPULATION</h3>
                        <ul data-bullet=\"primary\">
                            <li>The most frequent AEs* for adalimumab and Entyvio were as follows: ≥1 TEAE, 35.8% and 32.9%; ulcerative colitis, 16.3% and 11.5%; nasopharyngitis, 7.8% and 7.0%; headache, 5.4% and 7.0%; anemia, 6.7% and 5.2%; abdominal pain, 5.2%
                                and 4.7%; upper respiratory tract infection, 4.4% and 5.2%</li>
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
                        <p data-only=\"mobile\">&nbsp;</p>
                        <p data-text-align=\"right\"><a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/varsity-trial\" class=\"btn-text btn-primary\" target=\"_self\">See the VARSITY study results</a>
                        </p>
                    </div>
                </div>


                <div class=\"interior-bottom-cta\">
                    <div class=\"cta-container\" data-row=\"\">
                        <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Crohn's Disease Data</p>
                            <a href=\"{{ base_path }}clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-secondary\">SEE RESULTS IN CD</a>
                        </div>
                        <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                            <p>Dosing &amp; Administration</p>
                            <a href=\"{{ base_path }}dosing-administration\" class=\"btn btn-secondary\">REVIEW THE GUIDANCE</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
", "themes/custom/entyviohcp/templates/content/node--safety-profile--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--safety-profile--full.html.twig");
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