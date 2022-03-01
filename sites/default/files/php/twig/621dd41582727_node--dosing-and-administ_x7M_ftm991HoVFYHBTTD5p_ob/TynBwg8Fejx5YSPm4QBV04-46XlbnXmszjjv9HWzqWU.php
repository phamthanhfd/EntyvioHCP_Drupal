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

/* themes/custom/entyviohcp/templates/content/node--dosing-and-administration--full.html.twig */
class __TwigTemplate_a3fdbc56059661fe12f8fd9a953389811883ec9ad0545285d804e66ba763ece8 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/dosing-styling"), "html", null, true);
        echo "
<div class=\"page-content dosing-content\" data-page-id=\"DosingAdministration\" data-page-category=\"DosingAdministration\">
<div id=\"hero\">
    <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/images/hero/mobile-dosing-daniel.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/desktop-dosing-daniel.png\">
                <img src=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-dosing-daniel.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        Dosing<br>
                        <strong>&amp; Administration</strong>
                    </h1>
                </div>

                <div>
                    <h2>Consistent &amp; <br><strong>Predictable <br>Dosing<sup>1</sup></strong></h2>
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
            <div class=\"simple-dosing\">
                <h2 class=\"border\"><span>SIMPLE DOSING FOR YOUR PATIENTS WITH UC OR CD<sup>1</sup></span></h2>
                <p>Entyvio offers your patients consistent, predictable dosing<sup>1</sup></p>
            </div>
        </article>
    </div>
</div>

<div id=\"second_section\" class=\"move-ahead-header\">
    <div>
        <article>
            <div class=\"move-ahead\">
                <h2 class=\"border-center\"><span>MOVE AHEAD TO</span></h2>
                <div class=\"container\" data-row=\"\">
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#starting-maintaining\">Starting &amp; Maintaining <br data-only=\"mobile\">Treatment</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#dosing-administration\">Dosing &amp; Administration <br data-only=\"mobile\">Information</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#dosing-video\">Dosing &amp; Administration <br data-only=\"mobile\">Video</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"third_section\">
    <div>
        <article>
            <div id=\"starting-maintaining\" class=\"starting-maintaining\">
                <h2 class=\"border\"><span>STARTING &amp; MAINTAINING TREATMENT</span></h2>
                <div class=\"flex-container\">
                    <div class=\"tile tile-1\">
                        <h3>HOW TO START</h3>
                        <p>Start with infusions at Weeks&nbsp;0,&nbsp;2,&nbsp;and&nbsp;6</p>
                        <div class=\"image-container\" data-row=\"\">
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 80, $this->source)), "html", null, true);
        echo "/images/icons/iv-week-0.svg\" alt=\"Infusion Week 0.\"></div>
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 81, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 81, $this->source)), "html", null, true);
        echo "/images/icons/iv-week-2.svg\" alt=\"Infusion Week 2.\"></div>
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/images/icons/iv-week-6.svg\" alt=\"Infusion Week 6.\"></div>
                        </div>
                    </div>
                    <div class=\"tile tile-2\">
                        <h3>HOW TO MAINTAIN</h3>
                        <p>Continue every 8 weeks thereafter</p>
                        <img src=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 88, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 88, $this->source)), "html", null, true);
        echo "/images/icons/iv-q8w.svg\" alt=\"Infusion Q8W.\">
                        <p class=\"footnote\">Discontinue therapy in patients who show no<br data-only=\"desktop\"> evidence of therapeutic benefit by Week 14</p>
                    </div>
                </div>
                <p class=\"summary\">After 1 year, a patient will receive 6 maintenance doses per year, with a total annual infusion time of approximately 3 hours.<sup>1</sup></p>
            </div>
            <div id=\"dosing-administration\" class=\"dosing-administration\">
                <h2 class=\"border\"><span>DOSING &amp; ADMINISTRATION INFORMATION</span></h2>
                <div class=\"container\">
                    <div class=\"flex-container flex-1\">
                        <div class=\"item item-1\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"administration\" src=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 101, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 101, $this->source)), "html", null, true);
        echo "/images/icons/iv-bag.svg\" alt=\"Infusion bag icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>ADMINISTRATION</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Administered as a 300 mg flat dose over an approximately <strong>30‑minute IV infusion</strong><sup>1</sup></li>
                                        <li>A total of 6 maintenance doses annually after the first year<sup>1</sup></li>
                                        <li>Do not administer as an IV push or bolus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"item item-2\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"monitoring\" src=\"";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 116, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 116, $this->source)), "html", null, true);
        echo "/images/icons/monitoring.svg\" alt=\"Monitoring icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>MONITORING</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Entyvio IV should be administered by a healthcare professional prepared to manage hypersensitivity reactions, including anaphylaxis, if they occur. Appropriate monitoring and medical support measures should be available for immediate use. Observe patients during infusion and until the infusion is complete<sup>1</sup></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"flex-container\">
                        <div class=\"item item-1\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"therapies\" src=\"";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 131, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 131, $this->source)), "html", null, true);
        echo "/images/icons/rx.svg\" alt=\"Rx icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>CONCOMITANT THERAPIES</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Entyvio can be administered concomitantly with aminosalicylates, steroids, or immunomodulators<sup>1</sup></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"item item-2\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"prior\" src=\"";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 145, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 145, $this->source)), "html", null, true);
        echo "/images/icons/clipboard.svg\" alt=\"Clipboard icon.\">
                                </div>
                                <div class=\"copy-container no-border\">
                                    <h3>PRIOR TO ADMINISTRATION</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Patients should be brought up to date with all immunizations prior to starting Entyvio<sup>1</sup></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p data-text-align=\"center\">For complete dosage and administration information, please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" class=\"pi-link\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>.</p>
                    <p data-text-align=\"right\"><a href=\"#starting-maintaining\" class=\"btn-text btn-primary\">Starting and Maintaining Treatment</a></p>
                </div>
            </div>
            <div id=\"dosing-video\" class=\"dosing-video\">
                <h2 class=\"border\"><span>DOSING &amp; ADMINISTRATION VIDEO</span></h2>
                <div class=\"container\">
                    <div class=\"video-container\" role=\"img\" aria-label=\"Entyvio® dosing and administration video.\">
                        <video class=\"video-js\" data-account=\"2574028764001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6278010751001\" data-video-title=\"Dosing and Administration\" data-playlist-id=\"\" data-application-id=\"\" width=\"960\" height=\"540\"></video>
                        <script src=\"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.min.js\"></script>
                    </div>
                    <p class=\"disclaimer\">For demonstrative purposes only. <br>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" class=\"pi-link\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a> for complete reconstitution and dilution instructions.</p>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p><span>Get your patients started&nbsp;with</span> <br><em data-ec=\"\">EntyvioConnect</em></p>
                        <a href=\"";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 174, $this->source), "html", null, true);
        echo "access-support/insurance-support\" class=\"btn btn-secondary\">LEARN MORE</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>Find helpful resources <br><span>for your practice &amp;&nbsp;your&nbsp;patients</span></p>
                        <a href=\"";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 178, $this->source), "html", null, true);
        echo "resources/professional-resources\" class=\"btn btn-secondary\">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
            </div>
            <div id=\"isi\">
                <aside class=\"section\">
\t<article>
\t\t<button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
            <span></span>
        </button>
        <div class=\"isi-header\">
            <h2>Important Safety Information</h2>
        </div>
\t\t<ul>
\t\t\t<li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

\t\t\t<li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

\t\t\t<li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

\t\t\t<li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

\t\t\t<li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

\t\t\t<li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

\t\t\t<li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
\t\t</ul>

\t\t<h2>Indications</h2>
\t\t<h3>Adult Ulcerative Colitis (UC)</h3>
\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t<h3>Adult Crohn's Disease (CD)</h3>
\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t<p>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including <a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
\t</article>
</aside>

            </div>
            <div id=\"references\">
                    <div class=\"section\">
                        <article>
                            <h3>Reference:</h3>

    <ol>
        <li>Entyvio (vedolizumab) prescribing information. Takeda Pharmaceuticals.</li>
    </ol>

                        </article>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--dosing-and-administration--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 178,  257 => 174,  225 => 145,  208 => 131,  190 => 116,  172 => 101,  156 => 88,  147 => 82,  143 => 81,  139 => 80,  81 => 25,  77 => 24,  73 => 23,  55 => 8,  51 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/dosing-styling') }}
<div class=\"page-content dosing-content\" data-page-id=\"DosingAdministration\" data-page-category=\"DosingAdministration\">
<div id=\"hero\">
    <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-dosing-daniel.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-dosing-daniel.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-dosing-daniel.png\" alt=\"Patient.\">
            </picture>
            <article>
                <div>
                    <h1>
                        Dosing<br>
                        <strong>&amp; Administration</strong>
                    </h1>
                </div>

                <div>
                    <h2>Consistent &amp; <br><strong>Predictable <br>Dosing<sup>1</sup></strong></h2>
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
            <div class=\"simple-dosing\">
                <h2 class=\"border\"><span>SIMPLE DOSING FOR YOUR PATIENTS WITH UC OR CD<sup>1</sup></span></h2>
                <p>Entyvio offers your patients consistent, predictable dosing<sup>1</sup></p>
            </div>
        </article>
    </div>
</div>

<div id=\"second_section\" class=\"move-ahead-header\">
    <div>
        <article>
            <div class=\"move-ahead\">
                <h2 class=\"border-center\"><span>MOVE AHEAD TO</span></h2>
                <div class=\"container\" data-row=\"\">
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#starting-maintaining\">Starting &amp; Maintaining <br data-only=\"mobile\">Treatment</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#dosing-administration\">Dosing &amp; Administration <br data-only=\"mobile\">Information</a>
                    </div>
                    <div data-col=\"mobile-12 desktop-4\" class=\"anchor-link-container\">
                        <a href=\"#dosing-video\">Dosing &amp; Administration <br data-only=\"mobile\">Video</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<div id=\"third_section\">
    <div>
        <article>
            <div id=\"starting-maintaining\" class=\"starting-maintaining\">
                <h2 class=\"border\"><span>STARTING &amp; MAINTAINING TREATMENT</span></h2>
                <div class=\"flex-container\">
                    <div class=\"tile tile-1\">
                        <h3>HOW TO START</h3>
                        <p>Start with infusions at Weeks&nbsp;0,&nbsp;2,&nbsp;and&nbsp;6</p>
                        <div class=\"image-container\" data-row=\"\">
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"{{ base_path ~ directory }}/images/icons/iv-week-0.svg\" alt=\"Infusion Week 0.\"></div>
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"{{ base_path ~ directory }}/images/icons/iv-week-2.svg\" alt=\"Infusion Week 2.\"></div>
                            <div data-col=\"mobile-12 desktop-4\"><img src=\"{{ base_path ~ directory }}/images/icons/iv-week-6.svg\" alt=\"Infusion Week 6.\"></div>
                        </div>
                    </div>
                    <div class=\"tile tile-2\">
                        <h3>HOW TO MAINTAIN</h3>
                        <p>Continue every 8 weeks thereafter</p>
                        <img src=\"{{ base_path ~ directory }}/images/icons/iv-q8w.svg\" alt=\"Infusion Q8W.\">
                        <p class=\"footnote\">Discontinue therapy in patients who show no<br data-only=\"desktop\"> evidence of therapeutic benefit by Week 14</p>
                    </div>
                </div>
                <p class=\"summary\">After 1 year, a patient will receive 6 maintenance doses per year, with a total annual infusion time of approximately 3 hours.<sup>1</sup></p>
            </div>
            <div id=\"dosing-administration\" class=\"dosing-administration\">
                <h2 class=\"border\"><span>DOSING &amp; ADMINISTRATION INFORMATION</span></h2>
                <div class=\"container\">
                    <div class=\"flex-container flex-1\">
                        <div class=\"item item-1\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"administration\" src=\"{{ base_path ~ directory }}/images/icons/iv-bag.svg\" alt=\"Infusion bag icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>ADMINISTRATION</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Administered as a 300 mg flat dose over an approximately <strong>30‑minute IV infusion</strong><sup>1</sup></li>
                                        <li>A total of 6 maintenance doses annually after the first year<sup>1</sup></li>
                                        <li>Do not administer as an IV push or bolus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"item item-2\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"monitoring\" src=\"{{ base_path ~ directory }}/images/icons/monitoring.svg\" alt=\"Monitoring icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>MONITORING</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Entyvio IV should be administered by a healthcare professional prepared to manage hypersensitivity reactions, including anaphylaxis, if they occur. Appropriate monitoring and medical support measures should be available for immediate use. Observe patients during infusion and until the infusion is complete<sup>1</sup></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"flex-container\">
                        <div class=\"item item-1\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"therapies\" src=\"{{ base_path ~ directory }}/images/icons/rx.svg\" alt=\"Rx icon.\">
                                </div>
                                <div class=\"copy-container\">
                                    <h3>CONCOMITANT THERAPIES</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Entyvio can be administered concomitantly with aminosalicylates, steroids, or immunomodulators<sup>1</sup></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"item item-2\">
                            <div class=\"flex-container\">
                                <div class=\"image-container\">
                                    <img class=\"prior\" src=\"{{ base_path ~ directory }}/images/icons/clipboard.svg\" alt=\"Clipboard icon.\">
                                </div>
                                <div class=\"copy-container no-border\">
                                    <h3>PRIOR TO ADMINISTRATION</h3>
                                    <ul data-bullet=\"primary\">
                                        <li>Patients should be brought up to date with all immunizations prior to starting Entyvio<sup>1</sup></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p data-text-align=\"center\">For complete dosage and administration information, please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" class=\"pi-link\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>.</p>
                    <p data-text-align=\"right\"><a href=\"#starting-maintaining\" class=\"btn-text btn-primary\">Starting and Maintaining Treatment</a></p>
                </div>
            </div>
            <div id=\"dosing-video\" class=\"dosing-video\">
                <h2 class=\"border\"><span>DOSING &amp; ADMINISTRATION VIDEO</span></h2>
                <div class=\"container\">
                    <div class=\"video-container\" role=\"img\" aria-label=\"Entyvio® dosing and administration video.\">
                        <video class=\"video-js\" data-account=\"2574028764001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6278010751001\" data-video-title=\"Dosing and Administration\" data-playlist-id=\"\" data-application-id=\"\" width=\"960\" height=\"540\"></video>
                        <script src=\"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.min.js\"></script>
                    </div>
                    <p class=\"disclaimer\">For demonstrative purposes only. <br>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" class=\"pi-link\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a> for complete reconstitution and dilution instructions.</p>
                </div>
            </div>
            <div class=\"interior-bottom-cta\">
                <div class=\"cta-container\" data-row=\"\">
                    <div class=\"cta-1 cta\" data-col=\"mobile-12 desktop-6\">
                        <p><span>Get your patients started&nbsp;with</span> <br><em data-ec=\"\">EntyvioConnect</em></p>
                        <a href=\"{{ base_path }}access-support/insurance-support\" class=\"btn btn-secondary\">LEARN MORE</a>
                    </div>
                    <div class=\"cta-2 cta\" data-col=\"mobile-12 desktop-6\">
                        <p>Find helpful resources <br><span>for your practice &amp;&nbsp;your&nbsp;patients</span></p>
                        <a href=\"{{ base_path }}resources/professional-resources\" class=\"btn btn-secondary\">FIND OUT MORE</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
            </div>
            <div id=\"isi\">
                <aside class=\"section\">
\t<article>
\t\t<button class=\"fixed_isi_trigger\" aria-expanded=\"false\" aria-controls=\"fixed_isi\" aria-label=\"ISI Expand Button\">
            <span></span>
        </button>
        <div class=\"isi-header\">
            <h2>Important Safety Information</h2>
        </div>
\t\t<ul>
\t\t\t<li>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</li>

\t\t\t<li>Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</li>

\t\t\t<li>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</li>

\t\t\t<li>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the postmarketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm<sup>3</sup> and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</li>

\t\t\t<li>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</li>

\t\t\t<li>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</li>

\t\t\t<li>Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</li>
\t\t</ul>

\t\t<h2>Indications</h2>
\t\t<h3>Adult Ulcerative Colitis (UC)</h3>
\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t<h3>Adult Crohn's Disease (CD)</h3>
\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t<p>Please see <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">full Prescribing Information</a>, including <a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a>.</p>
\t</article>
</aside>

            </div>
            <div id=\"references\">
                    <div class=\"section\">
                        <article>
                            <h3>Reference:</h3>

    <ol>
        <li>Entyvio (vedolizumab) prescribing information. Takeda Pharmaceuticals.</li>
    </ol>

                        </article>
                    </div>
                </div>
", "themes/custom/entyviohcp/templates/content/node--dosing-and-administration--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--dosing-and-administration--full.html.twig");
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
