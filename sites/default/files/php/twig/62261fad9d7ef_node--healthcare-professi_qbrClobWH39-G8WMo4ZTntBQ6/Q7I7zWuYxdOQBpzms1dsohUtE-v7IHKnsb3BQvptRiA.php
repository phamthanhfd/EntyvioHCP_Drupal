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

/* themes/custom/entyviohcp/templates/content/node--healthcare-professional-resource--full.html.twig */
class __TwigTemplate_76dfa2825d3932572732131e967f8f89a0f2d0d22691325309f9afa9f3dd3a3d extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/healthcare-professional-resource-styling"), "html", null, true);
        echo "
<div class=\"page-content resources-content\" data-page-id=\"ProfessionalResources\" data-page-category=\"Resources\">
  <div id=\"skip-to-content\"></div>
    <div id=\"hero\">
      <div>
        <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-patient.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\">
                <img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
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
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 23, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 23, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-stu.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\">
                <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
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
                        <p class=\"heading\">For You</p>
                        <a href=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source), "html", null, true);
        echo "resources/patient-resources#table\" class=\"link\">For Your Patients</a>
                    </div>

                    <div class=\"content-container\">
                        <div class=\"for-you-content\">
                            <h2>Site Resources</h2>
                            <div class=\"site-resources\">
                                <div>
                                    <p><a href=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source), "html", null, true);
        echo "resources/virtual-congress\" data-icon=\"annual-congresses\" target=\"_self\">Annual Congresses</a></p>
                                    <p><a href=\"https://www.entyviovirtualbooth.com/\" data-modal=\"external\" data-icon=\"virtual-congress\" target=\"_blank\">Virtual Congress Booth</a></p>
                                </div>
                                <div>
                                    <p><a href=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source), "html", null, true);
        echo "resources/request-a-representative\" data-icon=\"request-a-rep\" target=\"_self\">Request a Representative</a></p>
                                    <p><a href=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source), "html", null, true);
        echo "resources/peer-perspective\" data-icon=\"peer-perspective\" target=\"_self\">Peer Perspectives</a></p>
                                </div>

                                <div>
                                    <p><a href=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 67, $this->source), "html", null, true);
        echo "resources/clinical-reprints\" data-icon=\"clinical-reprints\" target=\"_self\">Clinical Reprints</a></p>
                                </div>
                            </div>
                            <h2>For Your Practice</h2>
                            <div class=\"download-resources\">

                                <div>
                                    <p>
                                        <a href=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/pdf/ACG-UC-Guidelines.pdf\" target=\"_blank\">
                                            Recommended Guidelines
                                            <img class=\"\" src=\"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 77, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 77, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 81, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 81, $this->source)), "html", null, true);
        echo "/pdf/GI-Perspective-Issue-1.pdf\" target=\"_blank\">
                                            GI Perspective #1
                                            <img class=\"\" src=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 83, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 83, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 87, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 87, $this->source)), "html", null, true);
        echo "/pdf/GI-Perspective-Issue-2.pdf\" target=\"_blank\">
                                            GI Perspective #2
                                            <img class=\"\" src=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 89, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 89, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\">
                                            Full Prescribing Information
                                            <img class=\"\" src=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 98, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 98, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p>
                                        <a href=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 103, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 103, $this->source)), "html", null, true);
        echo "/pdf/CD-Leave-Behind.pdf\" target=\"_blank\">
                                            Crohn's Disease Leave Behind
                                            <img class=\"\" src=\"";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 105, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 105, $this->source)), "html", null, true);
        echo "/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                </div>

                                <div>

                                    <p>
                                        <a href=\"";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 113, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 113, $this->source)), "html", null, true);
        echo "/pdf/Patient-reported-Outcomes-Brochure.pdf\" target=\"_blank\">
                                            Patient-reported Outcomes Brochure
                                            <img class=\"\" src=\"";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 115, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 115, $this->source)), "html", null, true);
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
        return "themes/custom/entyviohcp/templates/content/node--healthcare-professional-resource--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 115,  214 => 113,  203 => 105,  198 => 103,  190 => 98,  178 => 89,  173 => 87,  166 => 83,  161 => 81,  154 => 77,  149 => 75,  138 => 67,  131 => 63,  127 => 62,  120 => 58,  109 => 50,  81 => 25,  77 => 24,  73 => 23,  56 => 9,  52 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/healthcare-professional-resource-styling') }}
<div class=\"page-content resources-content\" data-page-id=\"ProfessionalResources\" data-page-category=\"Resources\">
  <div id=\"skip-to-content\"></div>
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
                        <p class=\"heading\">For You</p>
                        <a href=\"{{ base_path }}resources/patient-resources#table\" class=\"link\">For Your Patients</a>
                    </div>

                    <div class=\"content-container\">
                        <div class=\"for-you-content\">
                            <h2>Site Resources</h2>
                            <div class=\"site-resources\">
                                <div>
                                    <p><a href=\"{{ base_path }}resources/virtual-congress\" data-icon=\"annual-congresses\" target=\"_self\">Annual Congresses</a></p>
                                    <p><a href=\"https://www.entyviovirtualbooth.com/\" data-modal=\"external\" data-icon=\"virtual-congress\" target=\"_blank\">Virtual Congress Booth</a></p>
                                </div>
                                <div>
                                    <p><a href=\"{{ base_path }}resources/request-a-representative\" data-icon=\"request-a-rep\" target=\"_self\">Request a Representative</a></p>
                                    <p><a href=\"{{ base_path }}resources/peer-perspective\" data-icon=\"peer-perspective\" target=\"_self\">Peer Perspectives</a></p>
                                </div>

                                <div>
                                    <p><a href=\"{{ base_path }}resources/clinical-reprints\" data-icon=\"clinical-reprints\" target=\"_self\">Clinical Reprints</a></p>
                                </div>
                            </div>
                            <h2>For Your Practice</h2>
                            <div class=\"download-resources\">

                                <div>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/ACG-UC-Guidelines.pdf\" target=\"_blank\">
                                            Recommended Guidelines
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/GI-Perspective-Issue-1.pdf\" target=\"_blank\">
                                            GI Perspective #1
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/GI-Perspective-Issue-2.pdf\" target=\"_blank\">
                                            GI Perspective #2
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\">
                                            Full Prescribing Information
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>

                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/CD-Leave-Behind.pdf\" target=\"_blank\">
                                            Crohn's Disease Leave Behind
                                            <img class=\"\" src=\"{{ base_path ~ directory }}/images/icons/download-small.svg\" alt=\"download\">
                                        </a>
                                    </p>
                                </div>

                                <div>

                                    <p>
                                        <a href=\"{{ base_path ~ directory }}/pdf/Patient-reported-Outcomes-Brochure.pdf\" target=\"_blank\">
                                            Patient-reported Outcomes Brochure
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
", "themes/custom/entyviohcp/templates/content/node--healthcare-professional-resource--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--healthcare-professional-resource--full.html.twig");
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
