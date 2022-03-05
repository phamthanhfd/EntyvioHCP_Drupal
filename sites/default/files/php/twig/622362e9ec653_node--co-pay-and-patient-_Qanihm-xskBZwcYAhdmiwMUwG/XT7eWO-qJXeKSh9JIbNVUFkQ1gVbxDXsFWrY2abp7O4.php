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

/* themes/custom/entyviohcp/templates/content/node--co-pay-and-patient-assistance-pr--full.html.twig */
class __TwigTemplate_602bab32798b9bede17f2d3d10f1c6be598565533c7f2444c88b7678457d973a extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/entyvioconnect-affordability-styling"), "html", null, true);
        echo "
<div class=\"page-content connect-content\" data-page-id=\"Affordability\" data-page-category=\"AccessSupport\">

<div id=\"hero\">
    <div>
            <picture>
                <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-bg.png\">
                <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 8, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 8, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-hero_desktop.png\">
                <img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/images/hero/entyvioconnect-bg.png\" alt=\"Patient.\">
            </picture>
            <article data-only=\"desktop\">
                <div class=\"logo-ec\"></div>
                <div>
                    <img class=\"entyvioconnect-logo\" src=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 14, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 14, $this->source)), "html", null, true);
        echo "/images/logos/logo-entyvioconnect.svg\" alt=\"EntyvioConnect Logo.\">
                    <h1>Because each patient's<br> circumstances vary,</h1>
                    <p>we offer a range of programs tailored to help patients in the way they need it most after the prescribing decision has been made.</p>
                    <h2><a class=\"btn btn-secondary\" href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
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
        <div class=\"navigation-wrapper\">
        <section>
            <h2><em data-ec=\"\">EntyvioConnect</em> can help patients access their prescribed Entyvio therapy<br> <strong id=\"entyvioconnect_nav\">How can we help your patient today?</strong></h2>
            <div class=\"navigation-temp\">
                <a class=\"btn btn-secondary \" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source), "html", null, true);
        echo "access-support/insurance-support#entyvioconnect_nav\" target=\"_self\">Insurance Support</a>
                <a class=\"btn btn-secondary selected\" href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source), "html", null, true);
        echo "access-support/affordability#entyvioconnect_nav\" target=\"_self\">Affordability</a>
                <a class=\"btn btn-secondary \" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 37, $this->source), "html", null, true);
        echo "access-support/patient-education#entyvioconnect_nav\" target=\"_self\">Patient Education</a>
                <a class=\"btn btn-secondary \" href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source), "html", null, true);
        echo "access-support/forms-resources#entyvioconnect_nav\" target=\"_self\">Forms &amp; Resources</a>
            </div>
            <div class=\"subheading\">
                <p><a href=\"#at-a-glance\" class=\"offer-support-link\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</a></p>
            </div>
        </section>
    </div>

    <div id=\"affordability\" class=\"section\">
        <section>
            <div class=\"content\">
                <h2 class=\"teritary\">Affordability</h2>
                <p id=\"first-paragraph\"><em data-ec=\"\">EntyvioConnect</em> understands that each patient’s financial circumstances are unique, which is why <em data-ec=\"\">EntyvioConnect</em> works closely with eligible patients to help them afford their treatment.</p>

                <div>
                    <h3>Does your patient need support with co‑pay costs?</h3>
                    <ul data-bullet=\"primary\">
                        <li><strong class=\"primary\">Co‑Pay Program:</strong> Eligible commercially insured patients pay as little as \$5 per dose,* up to a total benefit of \$20,000 per year</li>
                        <li><strong class=\"primary\">For patients who are government‑insured, underinsured, or rendered uninsured:</strong> Patient Support Managers can provide information about financial assistance options</li>
                        <li><strong class=\"primary\">Patient Assistance Program (PAP):</strong> Download and complete the PAP form for patients who may need additional financial assistance</li>
                    </ul>
                </div>
            </div>

            <div class=\"image\" data-only=\"desktop\">
                <img src=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 63, $this->source)), "html", null, true);
        echo "/images/graphics/entyvioconnect_affordability.png\" alt=\"Patient and healthcare provider.\" title=\"Patient and Healthcare Provider\" class=\"affordability\">
            </div>
        </section>
    </div>


    <div id=\"affordability_download\" class=\"section\">
        <div>
            <section class=\"download-section\">
                <h3>Download resources for treatment affordability</h3>
                <ul>
                    <li data-icon=\"download\"><a href=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 74, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 74, $this->source)), "html", null, true);
        echo "/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\"><em>EntyvioConnect</em> Enrollment Form</a></li>
                    <li data-icon=\"download\"><a href=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Co-Pay-Claim-Form.pdf\" target=\"_blank\">Entyvio Co‑Pay Claim Form</a></li>
                    <li data-icon=\"download\"><a href=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 76, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 76, $this->source)), "html", null, true);
        echo "/pdf/Entyvio-Patient-Assistance-Program-Form.pdf\" target=\"_blank\">Patient Assistance Form</a></li>
                </ul>
            </section>

            <section id=\"entyvioconnect_contact\">
                <div>
                    <img src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/images/icons/ec-phone.svg\" alt=\"Phone icon.\">
                    <p>You can speak directly to<br data-only=\"desktop\"> a Patient Support Manager for<br data-only=\"desktop\"> more information at <a href=\"tel:1-855-368-9846\">1‑855‑ENTYVIO <br data-only=\"desktop\">(1‑855‑368‑9846)</a>,<br><span>Monday to Friday, from 8&nbsp;am to 8&nbsp;pm ET (except holidays).</span></p>
                </div>
            </section>

            <section class=\"legal\">
                <p><span class=\"sup\">*</span>The <em data-ec=\"\">EntyvioConnect</em> Co-Pay Program (\"Co-Pay Program\") provides financial support for commercially insured patients who qualify for the Co-Pay Program. The Co-Pay Program cannot be used if patient is a beneficiary of, or any part of the prescription is covered by: 1) any federal-, state-, or government-funded healthcare program (Medicare, Medicare Advantage, Medicaid, TRICARE, etc.), including a state pharmaceutical assistance program (the Federal Employees Health Benefit [FEHB] Program is not a government-funded healthcare program for the purpose of this offer), 2) the Medicare Prescription Drug Program (Part D), or if patient is currently in the coverage gap, or 3) insurance that is paying the entire cost of the prescription. Patient may not seek reimbursement from any other plan or program (Flexible Spending Account [FSA], Health Savings Account [HSA], Health Reimbursement Account [HRA], etc.) for any out-of-pocket costs covered by the Co-Pay Program. Patient or healthcare provider may be required to submit an Explanation of Benefits (EOB) following each infusion to the Co-Pay Program. Takeda reserves the right to change or end the Co-Pay Program at any time without notice, and other terms and conditions may apply. Offer not valid for patients under 18 years of age. Assistance under the Co-Pay Program is not transferable. The Co-Pay Program only applies in the United States, including Puerto Rico and other U.S. territories, and does not apply where prohibited by law, taxed, or restricted. This does not constitute health insurance. Void where use is prohibited by your insurance provider. If your insurance situation changes you must notify <em data-ec=\"\">EntyvioConnect</em> at 1-844-368-9846. This offer is not transferable and is limited to one offer per person and may not be combined with any other coupon, discount, prescription savings card, rebate, free trial, patient assistance, or other offer. Not valid if reproduced.</p>
            </section>
        </div>
    </div>

    <div id=\"at-a-glance\" class=\"section\">
    <section>
        <h2 class=\"teritary\"><em data-ec=\"\">EntyvioConnect</em> At a Glance</h2>
        <p><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</p>
        <div class=\"image-container\">
            <figure>
                <picture>
                    <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 100, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 100, $this->source)), "html", null, true);
        echo "/images/charts/entyvioconnect-mobile-chart.png\">
                    <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 101, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 101, $this->source)), "html", null, true);
        echo "/images/charts/entyvioconnect-desktop-chart.png\">
                    <img src=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 102, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 102, $this->source)), "html", null, true);
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
        return "themes/custom/entyviohcp/templates/content/node--co-pay-and-patient-assistance-pr--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 102,  187 => 101,  183 => 100,  162 => 82,  153 => 76,  149 => 75,  145 => 74,  131 => 63,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  70 => 17,  64 => 14,  56 => 9,  52 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/entyvioconnect-affordability-styling') }}
<div class=\"page-content connect-content\" data-page-id=\"Affordability\" data-page-category=\"AccessSupport\">

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
        <div class=\"navigation-wrapper\">
        <section>
            <h2><em data-ec=\"\">EntyvioConnect</em> can help patients access their prescribed Entyvio therapy<br> <strong id=\"entyvioconnect_nav\">How can we help your patient today?</strong></h2>
            <div class=\"navigation-temp\">
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/insurance-support#entyvioconnect_nav\" target=\"_self\">Insurance Support</a>
                <a class=\"btn btn-secondary selected\" href=\"{{ base_path }}access-support/affordability#entyvioconnect_nav\" target=\"_self\">Affordability</a>
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/patient-education#entyvioconnect_nav\" target=\"_self\">Patient Education</a>
                <a class=\"btn btn-secondary \" href=\"{{ base_path }}access-support/forms-resources#entyvioconnect_nav\" target=\"_self\">Forms &amp; Resources</a>
            </div>
            <div class=\"subheading\">
                <p><a href=\"#at-a-glance\" class=\"offer-support-link\" target=\"_self\"><em data-ec=\"\">EntyvioConnect</em> offers your patients support throughout the entire insurance approval process.</a></p>
            </div>
        </section>
    </div>

    <div id=\"affordability\" class=\"section\">
        <section>
            <div class=\"content\">
                <h2 class=\"teritary\">Affordability</h2>
                <p id=\"first-paragraph\"><em data-ec=\"\">EntyvioConnect</em> understands that each patient’s financial circumstances are unique, which is why <em data-ec=\"\">EntyvioConnect</em> works closely with eligible patients to help them afford their treatment.</p>

                <div>
                    <h3>Does your patient need support with co‑pay costs?</h3>
                    <ul data-bullet=\"primary\">
                        <li><strong class=\"primary\">Co‑Pay Program:</strong> Eligible commercially insured patients pay as little as \$5 per dose,* up to a total benefit of \$20,000 per year</li>
                        <li><strong class=\"primary\">For patients who are government‑insured, underinsured, or rendered uninsured:</strong> Patient Support Managers can provide information about financial assistance options</li>
                        <li><strong class=\"primary\">Patient Assistance Program (PAP):</strong> Download and complete the PAP form for patients who may need additional financial assistance</li>
                    </ul>
                </div>
            </div>

            <div class=\"image\" data-only=\"desktop\">
                <img src=\"{{ base_path ~ directory }}/images/graphics/entyvioconnect_affordability.png\" alt=\"Patient and healthcare provider.\" title=\"Patient and Healthcare Provider\" class=\"affordability\">
            </div>
        </section>
    </div>


    <div id=\"affordability_download\" class=\"section\">
        <div>
            <section class=\"download-section\">
                <h3>Download resources for treatment affordability</h3>
                <ul>
                    <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/EntyvioConnect-Enrollment-Form.pdf\" target=\"_blank\"><em>EntyvioConnect</em> Enrollment Form</a></li>
                    <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Co-Pay-Claim-Form.pdf\" target=\"_blank\">Entyvio Co‑Pay Claim Form</a></li>
                    <li data-icon=\"download\"><a href=\"{{ base_path ~ directory }}/pdf/Entyvio-Patient-Assistance-Program-Form.pdf\" target=\"_blank\">Patient Assistance Form</a></li>
                </ul>
            </section>

            <section id=\"entyvioconnect_contact\">
                <div>
                    <img src=\"{{ base_path ~ directory }}/images/icons/ec-phone.svg\" alt=\"Phone icon.\">
                    <p>You can speak directly to<br data-only=\"desktop\"> a Patient Support Manager for<br data-only=\"desktop\"> more information at <a href=\"tel:1-855-368-9846\">1‑855‑ENTYVIO <br data-only=\"desktop\">(1‑855‑368‑9846)</a>,<br><span>Monday to Friday, from 8&nbsp;am to 8&nbsp;pm ET (except holidays).</span></p>
                </div>
            </section>

            <section class=\"legal\">
                <p><span class=\"sup\">*</span>The <em data-ec=\"\">EntyvioConnect</em> Co-Pay Program (\"Co-Pay Program\") provides financial support for commercially insured patients who qualify for the Co-Pay Program. The Co-Pay Program cannot be used if patient is a beneficiary of, or any part of the prescription is covered by: 1) any federal-, state-, or government-funded healthcare program (Medicare, Medicare Advantage, Medicaid, TRICARE, etc.), including a state pharmaceutical assistance program (the Federal Employees Health Benefit [FEHB] Program is not a government-funded healthcare program for the purpose of this offer), 2) the Medicare Prescription Drug Program (Part D), or if patient is currently in the coverage gap, or 3) insurance that is paying the entire cost of the prescription. Patient may not seek reimbursement from any other plan or program (Flexible Spending Account [FSA], Health Savings Account [HSA], Health Reimbursement Account [HRA], etc.) for any out-of-pocket costs covered by the Co-Pay Program. Patient or healthcare provider may be required to submit an Explanation of Benefits (EOB) following each infusion to the Co-Pay Program. Takeda reserves the right to change or end the Co-Pay Program at any time without notice, and other terms and conditions may apply. Offer not valid for patients under 18 years of age. Assistance under the Co-Pay Program is not transferable. The Co-Pay Program only applies in the United States, including Puerto Rico and other U.S. territories, and does not apply where prohibited by law, taxed, or restricted. This does not constitute health insurance. Void where use is prohibited by your insurance provider. If your insurance situation changes you must notify <em data-ec=\"\">EntyvioConnect</em> at 1-844-368-9846. This offer is not transferable and is limited to one offer per person and may not be combined with any other coupon, discount, prescription savings card, rebate, free trial, patient assistance, or other offer. Not valid if reproduced.</p>
            </section>
        </div>
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
", "themes/custom/entyviohcp/templates/content/node--co-pay-and-patient-assistance-pr--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--co-pay-and-patient-assistance-pr--full.html.twig");
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
