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

/* themes/custom/entyviohcp/templates/content/node--patient-resources--full.html.twig */
class __TwigTemplate_9ee1a85902b03b5cf0ff9676bd28ae4685bd273173e6b33287d7673d67cd5a3b extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/patient-resources-styling"), "html", null, true);
        echo "
<div  class=\"page-content resources-content\" data-page-id=\"PatientResources\" data-page-category=\"Resources\">
                <div id=\"skip-to-content\"></div>
                <!-- ************************* -->
                <!-- **** CODE STARTS **** *** -->
                <!-- ************************* -->





<div id=\"hero\">
    <div>

            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 16, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 16, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-patient.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\">
                <img src=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
            </picture>
                <article>
                    <div>
                        <h1>
                            Resources
                        </h1>
                    </div>

                    <div>
                        <h2>Information<br> to Help You<br> and Your Patients</h2>
                    </div>
                </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 32, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 32, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-stu.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\">
                <img src=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 34, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 34, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
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

    <div class=\"body-content\">
        <article>
            <div class=\"title-area\">
                <h3>Below you will find a wide array of resources related to UC, CD, and Entyvio for you and your patients.</h3>
            </div>

            <div class=\"main-container\">

                <!-- Tab starts -->
                <div class=\"table\" id=\"table\">
                    <div class=\"heading-container\">
                        <a href=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source), "html", null, true);
        echo "resources/professional-resources#table\" class=\"link\">For You</a>
                        <p class=\"heading\">For Your Patients</p>
                    </div>

                    <div class=\"content-container\">
                        <div class=\"for-your-patient-content\">
                            <h2>Site Resources</h2>
                            <div class=\"site-resources\">

                                <div>
                                    <p><a href=\"https://locator.infusioncenter.org/\" data-modal=\"external_third_party\" data-icon=\"infusion-center\" target=\"_self\">Infusion Center Locator</a></p>
                                    <p><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" data-icon=\"patient-site\" target=\"_blank\" rel=\"noreferrer\">Entyvio Patient Site</a></p>
                                </div>

                                <div>
                                    <p><a href=\"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 77, $this->source), "html", null, true);
        echo "access-support/insurance-support\" data-icon=\"entyvioconnect\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em></a></p>
                                </div>
                                <div>
                                    <p><a href=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source), "html", null, true);
        echo "local-coverage\" data-icon=\"coverage-finder\" target=\"_self\">Entyvio Coverage Finder</a></p>
                                </div>

                            </div>
                            <h2>Downloadable Resources</h2>
                            <div class=\"download-resources\">

                                <div>
                                    <p>
                                        <a href=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 89, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 89, $this->source)), "html", null, true);
        echo "/pdf/UC-Treatment-Options-Brochure.pdf\" target=\"_blank\">
                                            Ulcerative Colitis Treatment<br> Options&nbsp;Brochure
                                            <img class=\"\" src=\"";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 91, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 91, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p><a href=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/pdf/CD-Treatment-Options-Brochure.pdf\" target=\"_blank\">Crohn's Disease Treatment<br> Options&nbsp;Brochure
                                        <img class=\"\" src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                </div>

                                <div>
                                    <p>
                                        <a href=\"";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 104, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 104, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Patient-Brochure.pdf\" target=\"_blank\">
                                            Entyvio Patient Brochure
                                            <img class=\"\" src=\"";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 106, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 106, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 110, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 110, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Patient-Brochure-Spanish.pdf\" target=\"_blank\">
                                            Entyvio Patient Brochure - Spanish
                                            <img class=\"\" src=\"";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 112, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 112, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>


                                </div>

                                <div>
                                    <p>
                                        <a href=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 121, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 121, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Patient-Infusion-Guide.pdf\" target=\"_blank\">
                                            Entyvio Patient Infusion Guide
                                            <img class=\"\" src=\"";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 123, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 123, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p><a href=\"";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 127, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 127, $this->source)), "html", null, true);
        echo "/pdf/EntyvioConnect-Patient-Brochure.pdf\" target=\"_blank\"><em data-ec=\"\">EntyvioConnect</em> Patient Brochure
                                          <img class=\"\" src=\"";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 128, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 128, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tab ends -->


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
";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--patient-resources--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 128,  225 => 127,  218 => 123,  213 => 121,  201 => 112,  196 => 110,  189 => 106,  184 => 104,  173 => 96,  169 => 95,  162 => 91,  157 => 89,  145 => 80,  139 => 77,  121 => 62,  90 => 34,  86 => 33,  82 => 32,  65 => 18,  61 => 17,  57 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/patient-resources-styling') }}
<div  class=\"page-content resources-content\" data-page-id=\"PatientResources\" data-page-category=\"Resources\">
                <div id=\"skip-to-content\"></div>
                <!-- ************************* -->
                <!-- **** CODE STARTS **** *** -->
                <!-- ************************* -->





<div id=\"hero\">
    <div>

            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-patient.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
            </picture>
                <article>
                    <div>
                        <h1>
                            Resources
                        </h1>
                    </div>

                    <div>
                        <h2>Information<br> to Help You<br> and Your Patients</h2>
                    </div>
                </article>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-stu.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
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

    <div class=\"body-content\">
        <article>
            <div class=\"title-area\">
                <h3>Below you will find a wide array of resources related to UC, CD, and Entyvio for you and your patients.</h3>
            </div>

            <div class=\"main-container\">

                <!-- Tab starts -->
                <div class=\"table\" id=\"table\">
                    <div class=\"heading-container\">
                        <a href=\"{{ base_path }}resources/professional-resources#table\" class=\"link\">For You</a>
                        <p class=\"heading\">For Your Patients</p>
                    </div>

                    <div class=\"content-container\">
                        <div class=\"for-your-patient-content\">
                            <h2>Site Resources</h2>
                            <div class=\"site-resources\">

                                <div>
                                    <p><a href=\"https://locator.infusioncenter.org/\" data-modal=\"external_third_party\" data-icon=\"infusion-center\" target=\"_self\">Infusion Center Locator</a></p>
                                    <p><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" data-icon=\"patient-site\" target=\"_blank\" rel=\"noreferrer\">Entyvio Patient Site</a></p>
                                </div>

                                <div>
                                    <p><a href=\"{{ base_path }}access-support/insurance-support\" data-icon=\"entyvioconnect\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em></a></p>
                                </div>
                                <div>
                                    <p><a href=\"{{ base_path }}local-coverage\" data-icon=\"coverage-finder\" target=\"_self\">Entyvio Coverage Finder</a></p>
                                </div>

                            </div>
                            <h2>Downloadable Resources</h2>
                            <div class=\"download-resources\">

                                <div>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/UC-Treatment-Options-Brochure.pdf\" target=\"_blank\">
                                            Ulcerative Colitis Treatment<br> Options&nbsp;Brochure
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p><a href=\"{{ base_path ~ directory }}/pdf/CD-Treatment-Options-Brochure.pdf\" target=\"_blank\">Crohn's Disease Treatment<br> Options&nbsp;Brochure
                                        <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                </div>

                                <div>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Patient-Brochure.pdf\" target=\"_blank\">
                                            Entyvio Patient Brochure
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Patient-Brochure-Spanish.pdf\" target=\"_blank\">
                                            Entyvio Patient Brochure - Spanish
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>


                                </div>

                                <div>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Patient-Infusion-Guide.pdf\" target=\"_blank\">
                                            Entyvio Patient Infusion Guide
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p><a href=\"{{ base_path ~ directory }}/pdf/EntyvioConnect-Patient-Brochure.pdf\" target=\"_blank\"><em data-ec=\"\">EntyvioConnect</em> Patient Brochure
                                          <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Tab ends -->


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
", "themes/custom/entyviohcp/templates/content/node--patient-resources--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--patient-resources--full.html.twig");
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
