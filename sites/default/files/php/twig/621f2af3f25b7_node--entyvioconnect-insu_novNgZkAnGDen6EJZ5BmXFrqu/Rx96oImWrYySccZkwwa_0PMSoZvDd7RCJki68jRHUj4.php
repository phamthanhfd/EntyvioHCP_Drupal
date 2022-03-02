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

/* themes/custom/entyviohcp/templates/content/node--entyvioconnect-insurance-support--full.html.twig */
class __TwigTemplate_f5d8b9a6788a196ec77cb7754b3a55db extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/entyvioconnect-insurance-support-styling"), "html", null, true);
        echo "
<div class=\"page-content connect-content\" data-page-id=\"InsuranceSupport\" data-page-category=\"AccessSupport\">
                <div id=\"skip-to-content\"></div>

<div id=\"hero\">
    <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-bg.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-hero_desktop.png\">
                <img src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-bg.png\" alt=\"Patient.\">
            </picture>
            <article data-only=\"desktop\">
                <div class=\"logo-ec\"></div>
                <div>
                    <img class=\"entyvioconnect-logo\" src=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source)), "html", null, true);
        echo "/images/logos/logo-entyvioconnect.svg\" alt=\"EntyvioConnect Logo.\">
                    <h1>Because each patient's<br> circumstances vary,</h1>
                    <p>we offer a range of programs tailored to help patients in the way they need it most after the prescribing decision has been made.</p>
                    <h2><a class=\"btn btn-secondary\" href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source)), "html", null, true);
        echo "/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\">Enroll your patients</a></h2>
                </div>
            </article>

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

    <div class=\"mobile-hero-txt\">
        <p class=\"heading-1\">Because each patient's circumstances vary,</p>
        <p>we offer a range of programs tailored to help patients in the way they need it most after the prescribing decision has been made.</p>
        <a class=\"btn btn-secondary\" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 37, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 37, $this->source)), "html", null, true);
        echo "/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\">Enroll your patients</a>
    </div>

        <div class=\"navigation-wrapper\">
        <section>
            <h2><em data-ec=\"\">EntyvioConnect</em> can help patients access their prescribed Entyvio therapy<br> <strong id=\"entyvioconnect_nav\">How can we help your patient today?</strong></h2>
            <div class=\"navigation-temp\">
                <a class=\"btn btn-secondary selected\" href=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source), "html", null, true);
        echo "access-support/insurance-support#entyvioconnect_nav\" target=\"_self\">Insurance Support</a>
                <a class=\"btn btn-secondary \" href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source), "html", null, true);
        echo "access-support/affordability#entyvioconnect_nav\" target=\"_self\">Affordability</a>
                <a class=\"btn btn-secondary \" href=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source), "html", null, true);
        echo "access-support/patient-education#entyvioconnect_nav\" target=\"_self\">Patient Education</a>
                <a class=\"btn btn-secondary \" href=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 47, $this->source), "html", null, true);
        echo "access-support/forms-resources#entyvioconnect_nav\" target=\"_self\">Forms &amp; Resources</a>
            </div>
            <div class=\"subheading\">
                <p><a href=\"#at-a-glance\" class=\"offer-support-link\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</a></p>
            </div>
        </section>
    </div>

    <div id=\"insurance-support\" class=\"section\">
        <section>
            <div class=\"content\">
                <h2 class=\"teritary\">Insurance Support</h2>
                <p>Once your patients have been prescribed Entyvio, <em data-ec=\"\">EntyvioConnect</em> can partner with them at every step of the insurance approval process. The following support services are available to help patients gain access to Entyvio:</p>
                <ul id=\"first-paragraph\" data-bullet=\"primary\">
                    <li><strong>Benefits investigation</strong></li>
                    <li><strong>Prior authorization information and support</strong></li>
                    <li><strong>Denials and appeals support</strong></li>
                </ul>
                <div id=\"local-coverage\">
                    <p><strong>Check if your patient is covered for Entyvio.</strong></p>
                    <div class=\"btn-wrapper\">
                        <p><a href=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 68, $this->source), "html", null, true);
        echo "local-coverage\" class=\"btn btn-primary\" target=\"_self\">Find Local Coverage</a></p>
                    </div>
                </div>

            </div>

            <div class=\"image insurance-support\" data-only=\"desktop\">
                <img src=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/images/graphics/entyvioconnect_insurance_support.png\" alt=\"Patient on phone.\" class=\"insurance-support\">
            </div>
        </section>
    </div>



    <div id=\"insurance-denied\" class=\"section\">
        <section>
            <h2 class=\"primary\">What if my patient doesn't have insurance or is denied coverage?</h2>

            <div class=\"insurance-denied-content\">
                <div class=\"content\">
                    <p><em data-ec=\"\">EntyvioConnect</em> offers 2 programs that may help with continued access in case more time is needed for coverage approval.</p>

                    <p><strong>Start Program*:</strong> New-to-Entyvio patients who have received a denied prior authorization from a commercial health plan are eligible</p>
                    <ul data-bullet=\"primary\">
                        <li>Entyvio may be provided at no cost for up to 1 year while the appeals process is conducted</li>
                        <li>Evidence of appeal activity must be sent to <em data-ec=\"\">EntyvioConnect</em> throughout the year</li>
                    </ul>

                    <p><strong>Bridge Program*:</strong> Entyvio patients with a temporary loss or gap in commercial coverage are eligible</p>
                    <ul data-bullet=\"primary\">
                        <li>Provides Entyvio at no cost for up to 6 months</li>
                        <li>After 6 months, <em data-ec=\"\">EntyvioConnect</em> will look for available coverage assistance programs if needed</li>
                    </ul>

                    <p class=\"footnote\">*Additional terms and conditions may apply</p>
                </div>

                <div id=\"entyvioconnect_contact\">
                    <img src=\"";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 106, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 106, $this->source)), "html", null, true);
        echo "/images/icons/ec-phone.svg\" alt=\"Phone icon.\">
                    <p>You can speak directly to<br data-only=\"desktop\"> a Patient Support Manager for<br data-only=\"desktop\"> more information at <a href=\"tel:1-855-368-9846\">1‑855‑ENTYVIO <br data-only=\"desktop\">(1‑855‑368‑9846)</a>,<br><span>Monday to Friday, from 8&nbsp;am to 8&nbsp;pm ET (except holidays).</span></p>
                </div>
            </div>
        </section>
    </div>



    <div id=\"downloads\" class=\"section\">
        <section>
            <h2 class=\"primary\">Download resources for insurance support</h2>

            <div class=\"download-section\">
                <div class=\"left\">
                    <ul>
                        <li data-icon=\"download\"><a href=\"";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 122, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 122, $this->source)), "html", null, true);
        echo "/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\"><em>EntyvioConnect</em> Enrollment Form</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 123, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 123, $this->source)), "html", null, true);
        echo "/pdf/Sample-Letter-of-Medical-Necessity.docx\" target=\"_blank\">Letter of Medical Necessity</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 124, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 124, $this->source)), "html", null, true);
        echo "/pdf/Sample-Letter-of-Appeal.docx\" target=\"_blank\">Letter of Appeal</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 125, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 125, $this->source)), "html", null, true);
        echo "/pdf/Appeal-Letter-for-Rejected-Claim.docx\" target=\"_blank\">Appeal Letter for Rejected Claim</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 126, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 126, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Reimbursement-Toolkit.pdf\" target=\"_blank\">Reimbursement Toolkit</a></li>
                    </ul>
                </div>

                <div class=\"right\">
                    <ul>
                        <li data-icon=\"download\"><a href=\"";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 132, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 132, $this->source)), "html", null, true);
        echo "/pdf/Hospital-Outpatient-Sample-UB-04-Claim-Form.pdf\" target=\"_blank\">Hospital Outpatient Sample UB-04 Claim</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
        echo "/pdf/Hospital-Outpatient-Sample-UB-04-Claim-Form-Instructions.pdf\" target=\"_blank\">Hospital Outpatient Sample UB-04 Claim Instructions</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 134, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 134, $this->source)), "html", null, true);
        echo "/pdf/Physician-Office-Sample-CMS-1500-Claim-Form.pdf\" target=\"_blank\">Physician Office CMS‑1500 Sample Claim</a></li>
                        <li data-icon=\"download\"><a href=\"";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 135, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 135, $this->source)), "html", null, true);
        echo "/pdf/Physician-Office-Sample-CMS-1500-Claim-Form-Instructions.pdf\" target=\"_blank\">Physician Office CMS‑1500 Sample Claim Instructions</a></li>
                        <li data-icon=\"download\"><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\">Prescribing Information</a></li>
                    </ul>
                </div>
            </div>

            <p><strong>These resources are provided for informational purposes only and are not intended to provide reimbursement or legal advice. Contact third-party payers for specific information on their current coverage, reimbursement, and coding policies.</strong></p>
        </section>
    </div>

    <div id=\"at-a-glance\" class=\"section\">
    <section>
        <h2 class=\"teritary\"><em data-ec=\"\">EntyvioConnect</em> At a Glance</h2>
        <p><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</p>
        <div class=\"image-container\">
            <figure>
                <picture>
                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 152, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 152, $this->source)), "html", null, true);
        echo "/images/charts/entyvioconnect-mobile-chart.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 153, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 153, $this->source)), "html", null, true);
        echo "/images/charts/entyvioconnect-desktop-chart.png\">
                    <img src=\"";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 154, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 154, $this->source)), "html", null, true);
        echo "/images/charts/entyvioconnect-desktop-chart.png\" alt=\"EntyvioConnect insurance process flow chart.\" title=\"EntyvioConnect Flow Chart\">
                </picture>
            </figure>
        </div>
    </section>
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
        return "themes/custom/entyviohcp/templates/content/node--entyvioconnect-insurance-support--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 154,  263 => 153,  259 => 152,  239 => 135,  235 => 134,  231 => 133,  227 => 132,  218 => 126,  214 => 125,  210 => 124,  206 => 123,  202 => 122,  183 => 106,  149 => 75,  139 => 68,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  93 => 37,  71 => 18,  65 => 15,  57 => 10,  53 => 9,  49 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/entyvioconnect-insurance-support-styling') }}
<div class=\"page-content connect-content\" data-page-id=\"InsuranceSupport\" data-page-category=\"AccessSupport\">
                <div id=\"skip-to-content\"></div>

<div id=\"hero\">
    <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/entyvioconnect-bg.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/entyvioconnect-hero_desktop.png\">
                <img src=\"{{ base_path ~ directory }}/images/hero/entyvioconnect-bg.png\" alt=\"Patient.\">
            </picture>
            <article data-only=\"desktop\">
                <div class=\"logo-ec\"></div>
                <div>
                    <img class=\"entyvioconnect-logo\" src=\"{{ base_path ~ directory }}/images/logos/logo-entyvioconnect.svg\" alt=\"EntyvioConnect Logo.\">
                    <h1>Because each patient's<br> circumstances vary,</h1>
                    <p>we offer a range of programs tailored to help patients in the way they need it most after the prescribing decision has been made.</p>
                    <h2><a class=\"btn btn-secondary\" href=\"{{ base_path ~ directory }}/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\">Enroll your patients</a></h2>
                </div>
            </article>

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

    <div class=\"mobile-hero-txt\">
        <p class=\"heading-1\">Because each patient's circumstances vary,</p>
        <p>we offer a range of programs tailored to help patients in the way they need it most after the prescribing decision has been made.</p>
        <a class=\"btn btn-secondary\" href=\"{{ base_path ~ directory }}/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\">Enroll your patients</a>
    </div>

        <div class=\"navigation-wrapper\">
        <section>
            <h2><em data-ec=\"\">EntyvioConnect</em> can help patients access their prescribed Entyvio therapy<br> <strong id=\"entyvioconnect_nav\">How can we help your patient today?</strong></h2>
            <div class=\"navigation-temp\">
                <a class=\"btn btn-secondary selected\" href=\"{{ base_path }}access-support/insurance-support#entyvioconnect_nav\" target=\"_self\">Insurance Support</a>
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/affordability#entyvioconnect_nav\" target=\"_self\">Affordability</a>
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/patient-education#entyvioconnect_nav\" target=\"_self\">Patient Education</a>
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/forms-resources#entyvioconnect_nav\" target=\"_self\">Forms &amp; Resources</a>
            </div>
            <div class=\"subheading\">
                <p><a href=\"#at-a-glance\" class=\"offer-support-link\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</a></p>
            </div>
        </section>
    </div>

    <div id=\"insurance-support\" class=\"section\">
        <section>
            <div class=\"content\">
                <h2 class=\"teritary\">Insurance Support</h2>
                <p>Once your patients have been prescribed Entyvio, <em data-ec=\"\">EntyvioConnect</em> can partner with them at every step of the insurance approval process. The following support services are available to help patients gain access to Entyvio:</p>
                <ul id=\"first-paragraph\" data-bullet=\"primary\">
                    <li><strong>Benefits investigation</strong></li>
                    <li><strong>Prior authorization information and support</strong></li>
                    <li><strong>Denials and appeals support</strong></li>
                </ul>
                <div id=\"local-coverage\">
                    <p><strong>Check if your patient is covered for Entyvio.</strong></p>
                    <div class=\"btn-wrapper\">
                        <p><a href=\"{{ base_path }}local-coverage\" class=\"btn btn-primary\" target=\"_self\">Find Local Coverage</a></p>
                    </div>
                </div>

            </div>

            <div class=\"image insurance-support\" data-only=\"desktop\">
                <img src=\"{{ base_path ~ directory }}/images/graphics/entyvioconnect_insurance_support.png\" alt=\"Patient on phone.\" class=\"insurance-support\">
            </div>
        </section>
    </div>



    <div id=\"insurance-denied\" class=\"section\">
        <section>
            <h2 class=\"primary\">What if my patient doesn't have insurance or is denied coverage?</h2>

            <div class=\"insurance-denied-content\">
                <div class=\"content\">
                    <p><em data-ec=\"\">EntyvioConnect</em> offers 2 programs that may help with continued access in case more time is needed for coverage approval.</p>

                    <p><strong>Start Program*:</strong> New-to-Entyvio patients who have received a denied prior authorization from a commercial health plan are eligible</p>
                    <ul data-bullet=\"primary\">
                        <li>Entyvio may be provided at no cost for up to 1 year while the appeals process is conducted</li>
                        <li>Evidence of appeal activity must be sent to <em data-ec=\"\">EntyvioConnect</em> throughout the year</li>
                    </ul>

                    <p><strong>Bridge Program*:</strong> Entyvio patients with a temporary loss or gap in commercial coverage are eligible</p>
                    <ul data-bullet=\"primary\">
                        <li>Provides Entyvio at no cost for up to 6 months</li>
                        <li>After 6 months, <em data-ec=\"\">EntyvioConnect</em> will look for available coverage assistance programs if needed</li>
                    </ul>

                    <p class=\"footnote\">*Additional terms and conditions may apply</p>
                </div>

                <div id=\"entyvioconnect_contact\">
                    <img src=\"{{ base_path ~ directory }}/images/icons/ec-phone.svg\" alt=\"Phone icon.\">
                    <p>You can speak directly to<br data-only=\"desktop\"> a Patient Support Manager for<br data-only=\"desktop\"> more information at <a href=\"tel:1-855-368-9846\">1‑855‑ENTYVIO <br data-only=\"desktop\">(1‑855‑368‑9846)</a>,<br><span>Monday to Friday, from 8&nbsp;am to 8&nbsp;pm ET (except holidays).</span></p>
                </div>
            </div>
        </section>
    </div>



    <div id=\"downloads\" class=\"section\">
        <section>
            <h2 class=\"primary\">Download resources for insurance support</h2>

            <div class=\"download-section\">
                <div class=\"left\">
                    <ul>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\"><em>EntyvioConnect</em> Enrollment Form</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Sample-Letter-of-Medical-Necessity.docx\" target=\"_blank\">Letter of Medical Necessity</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Sample-Letter-of-Appeal.docx\" target=\"_blank\">Letter of Appeal</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Appeal-Letter-for-Rejected-Claim.docx\" target=\"_blank\">Appeal Letter for Rejected Claim</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Reimbursement-Toolkit.pdf\" target=\"_blank\">Reimbursement Toolkit</a></li>
                    </ul>
                </div>

                <div class=\"right\">
                    <ul>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Hospital-Outpatient-Sample-UB-04-Claim-Form.pdf\" target=\"_blank\">Hospital Outpatient Sample UB-04 Claim</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Hospital-Outpatient-Sample-UB-04-Claim-Form-Instructions.pdf\" target=\"_blank\">Hospital Outpatient Sample UB-04 Claim Instructions</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Physician-Office-Sample-CMS-1500-Claim-Form.pdf\" target=\"_blank\">Physician Office CMS‑1500 Sample Claim</a></li>
                        <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Physician-Office-Sample-CMS-1500-Claim-Form-Instructions.pdf\" target=\"_blank\">Physician Office CMS‑1500 Sample Claim Instructions</a></li>
                        <li data-icon=\"download\"><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\">Prescribing Information</a></li>
                    </ul>
                </div>
            </div>

            <p><strong>These resources are provided for informational purposes only and are not intended to provide reimbursement or legal advice. Contact third-party payers for specific information on their current coverage, reimbursement, and coding policies.</strong></p>
        </section>
    </div>

    <div id=\"at-a-glance\" class=\"section\">
    <section>
        <h2 class=\"teritary\"><em data-ec=\"\">EntyvioConnect</em> At a Glance</h2>
        <p><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</p>
        <div class=\"image-container\">
            <figure>
                <picture>
                    <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/charts/entyvioconnect-mobile-chart.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/charts/entyvioconnect-desktop-chart.png\">
                    <img src=\"{{ base_path ~ directory }}/images/charts/entyvioconnect-desktop-chart.png\" alt=\"EntyvioConnect insurance process flow chart.\" title=\"EntyvioConnect Flow Chart\">
                </picture>
            </figure>
        </div>
    </section>
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
", "themes/custom/entyviohcp/templates/content/node--entyvioconnect-insurance-support--full.html.twig", "C:\\xampp\\htdocs\\EntyvioHCP_Drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--entyvioconnect-insurance-support--full.html.twig");
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
