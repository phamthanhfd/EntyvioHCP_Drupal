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

/* themes/custom/entyviohcp/templates/page.html.twig */
class __TwigTemplate_86728392a9fc1737bd97d8c5b168d6de extends \Twig\Template
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
        echo "<header data-device=\"desktop\"  class=\"header\" ";
        if (($context["logged_in"] ?? null)) {
            echo " style=\"position: unset !important;\" ";
        }
        echo "  >
  <div class=\"header-container\">
    <div class=\"pushdown\" ";
        // line 3
        if (($context["is_front"] ?? null)) {
            echo " ";
        } else {
            echo " style=\"display: none\" ";
        }
        echo ">
      <div class=\"container\">
        <div class=\"flex-container\">
          <p class=\"description\">See how we are providing support for your patients during CORONAVIRUS (COVID‑19)</p>
          <a href=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
        echo "covid19\" class=\"btn btn-primary\">LEARN MORE</a>
        </div>
      </div>
    </div>
    <div class=\"eyebrow\">
      <div class=\"container\">
        <nav data-row=\"\">
          <ul data-col=\"mobile-12 desktop-6\">
            <li><a href=\"#isi\" target=\"_self\">Important Safety Information</a></li>
            <li><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">Prescribing Information</a></li>
            <li><a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a></li>
          </ul>
          <ul data-col=\"mobile-12 desktop-6\">
            <li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Patient Site</a></li>
            <li class=\"hcp-site\">For U.S. Healthcare Professionals</li>
          </ul>
        </nav>
      </div>
    </div>
    <div class=\"main-nav\">
      <div class=\"container\">
       <div class=\"hcp-text\"><p>For U.S. Healthcare Professionals</p></div>
        <div class=\"logo-container\">
          <a class=\"logo\" href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\" target=\"_self\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 30, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 30, $this->source)), "html", null, true);
        echo "/images/logo-entyvio.svg\" alt=\"Entyvio® (vedolizumab) logo.\"></a>
          <button data-mobile-menu=\"\" aria-expanded=\"false\" class=\"close-menu\"  aria-label=\"Close Navigation Menu\"><span></span></button>
        </div>
        <nav class=\"";
        // line 33
        if (($context["is_front"] ?? null)) {
            echo " front-page ";
        }
        echo "\">
          <!-- NAVIGATION STARTS -->
          <ul>
          <li ";
        // line 36
        if (($context["is_front"] ?? null)) {
            echo "class=\"active\" homepage=\"true\" ";
        }
        echo "><a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\" title=\"Home\" target=\"_self\">Home</a></li>
          <li class=\"has-submenu clinicalefficacy\">
            <a href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 38, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/gemini-trial\" aria-haspopup=\"true\" aria-expanded=\"false\" target=\"_self\"><span>Clinical <br data-only=\"desktop\">Efficacy</span></a>
            <button id=\"mobile_nav_trigger_clinicalefficacy\" aria-expanded=\"true\"><span class=\"visuallyhidden\">show submenu for Clinical Efficacy</span></button>
            <div class=\"subnav clinicalefficacy\">
              <div class=\"uc\">
                <h3>UC</h3>
                <ul>
                  <li class=\"\"><a href=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/gemini-trial\" target=\"_self\"> GEMINI I: ENTYVIO <em class=\"vs\">vs.</em> PLACEBO</a></li>
                  <li class=\"\"><a href=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">VARSITY: HEAD-TO-HEAD STUDY</a></li>
                </ul>
              </div>

              <div class=\"cd\">
                <h3>CD</h3>
                <ul>
                  <li class=\"\"><a href=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source), "html", null, true);
        echo "clinical-efficacy/crohns-disease/entyvio-placebo-trial\" target=\"_self\">GEMINI II AND III: ENTYVIO <em class=\"vs\">vs.</em> PLACEBO</a></li>
                </ul>
              </div>
            </div>
          </li>

          <li class=\"\"><a href=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source), "html", null, true);
        echo "mechanism-of-action\" target=\"_self\"><span>Mechanism <br data-only=\"desktop\">of Action</span></a></li>
          <li class=\"\"><a href=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 59, $this->source), "html", null, true);
        echo "safety-profile\" target=\"_self\"><span>Safety <br data-only=\"desktop\">Profile</span></a></li>
          <li class=\"\"><a href=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 60, $this->source), "html", null, true);
        echo "dosing-administration\" target=\"_self\"><span>Dosing &amp; <br data-only=\"desktop\">Administration</span></a></li>
          <li class=\"\"><a href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 61, $this->source), "html", null, true);
        echo "access-support/insurance-support\" target=\"_self\"><span><em data-ec=\"\">EntyvioConnect</em></span></a></li>

          <li class=\"has-submenu resources\">
            <a href=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 64, $this->source), "html", null, true);
        echo "resources/professional-resources\" aria-haspopup=\"true\" aria-expanded=\"false\" target=\"_self\"><span>Resources</span></a>
            <button id=\"mobile_nav_trigger_resources\" aria-expanded=\"false\"><span class=\"visuallyhidden\">show submenu for Resources</span></button>
            <div class=\"subnav resources\">
              <div class=\"\">
                <h3 class=\"\"><a href=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 68, $this->source), "html", null, true);
        echo "resources/professional-resources\" target=\"_self\">FOR YOU</a></h3>
                <ul>
                  <li class=\"\"><a href=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 70, $this->source), "html", null, true);
        echo "resources/virtual-congress\" target=\"_self\">ANNUAL CONGRESSES</a></li>
                  <li><a href=\"https://www.entyviovirtualbooth.com/\" data-modal=\"external\" target=\"_blank\">VIRTUAL CONGRESS BOOTH</a></li>
                  <li class=\"\"><a href=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 72, $this->source), "html", null, true);
        echo "resources/peer-perspective\" target=\"_self\">PEER PERSPECTIVES</a></li>
                  <li class=\"\"><a href=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 73, $this->source), "html", null, true);
        echo "resources/request-a-representative\" target=\"_self\">REQUEST A REPRESENTATIVE</a></li>
                  <li class=\"\"><a href=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 74, $this->source), "html", null, true);
        echo "resources/clinical-reprints\" target=\"_self\">CLINICAL REPRINTS</a></li>
                </ul>
              </div>

              <div class=\"\">
                <h3 class=\"\"><a href=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 79, $this->source), "html", null, true);
        echo "resources/patient-resources\" target=\"_self\">FOR YOUR PATIENTS</a></h3>
                <ul>
                  <li class=\"\"><a href=\"https://locator.infusioncenter.org/\" data-modal=\"external_third_party\" target=\"_blank\">INFUSION CENTER LOCATOR</a></li>
                  <li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" target=\"_blank\" rel=\"noreferrer\">ENTYVIO PATIENT SITE</a></li>
                  <li><a href=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 83, $this->source), "html", null, true);
        echo "local-coverage\" target=\"_self\">ENTYVIO COVERAGE FINDER</a></li>
                </ul>
              </div>
            </div>
          </li>

          </ul>
          <!-- NAVIGATION ENDS -->
        </nav>
      </div>
    </div>
  </div>
</header>
<header data-device=\"mobile\" class=\"header\"  data-only=\"mobile\" ";
        // line 96
        if (($context["logged_in"] ?? null)) {
            echo " style=\"position: unset !important;\" ";
        }
        echo "> <!-- Mobile only header; on desktop, this will hide -->
    <div class=\"pushdown\" ";
        // line 97
        if (($context["is_front"] ?? null)) {
            echo " ";
        } else {
            echo " style=\"display: none\" ";
        }
        echo ">
        <div class=\"container\">
          <div class=\"flex-container\">
          <p class=\"description\">See how we are providing support for your patients during CORONAVIRUS (COVID‑19)</p>
          <a href=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 101, $this->source), "html", null, true);
        echo "covid19\" class=\"btn btn-primary\">LEARN MORE</a>
        </div>
      </div>
    </div>
\t<div class=\"for-us-hcp\">
\t\t<p>For U.S. Healthcare Professionals</p>
\t</div>
\t<div>
\t\t<a class=\"logo\" href=\"";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\" target=\"_self\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 109, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 109, $this->source)), "html", null, true);
        echo "/images/logo-entyvio.svg\" alt=\"Entyvio® (vedolizumab) logo.\"></a>
\t\t<button data-mobile-menu=\"\" aria-expanded=\"false\" class=\"open-menu\" aria-label=\"Close Navigation Menu\"><span></span></button>
\t</div>
\t<div class=\"eyebrow\">
\t\t<ul>
\t\t\t<li><a href=\"#isi\" target=\"_self\">Important Safety Information</a></li>
\t\t\t<li><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">Prescribing Information</a></li>
\t\t\t<li><a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a></li>
\t\t\t<li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Patient Site</a></li>
\t\t</ul>
\t</div>
</header>
<main class=\"content main-content_container\" id=\"page-content\" role=\"main\">
  ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "
</main>
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
                <li>Fedyk E, Wyant T, Yang LL, et al. <em>Inflamm Bowel Dis</em>. 2012;18(11):2107<span>-</span>2119.</li>
                <li>Soler D, Chapman T, Yang LL, et al. <em>J Pharmacol Exp Ther</em>. 2009;330(3):864-875.</li>
                <li>Wyant T, Leach T, Sankoh S, et al. <em>Gut</em>. 2015;64(1):77-83.</li>
                <li>Wyant T, Fedyk E, Abhyankar B. <em>J Crohns Colitis</em>. 2016;10(12):1437-1444.</li>
                <li>Milch C, Wyant T, Xu J, et al. <em>J Neuroimmunol</em>. 2013;264:123-126.</li>
                <li>Briskin M, Winsor-Hines D, Shyjan A, et al. <em>Am J Pathol</em>. 1997;151(1):97-110.</li>
                <li>Xavier RJ, Podolsky DK. <em>Nature</em>. 2007;448(7152):427-434.</li>
            </ol>

        </article>
    </div>
</div>
<footer  class=\"footer\" id=\"footer\" data-device=\"global\" role=\"contentinfo\">
  <div>
    <div class=\"section\">
      <div class=\"footer-content\">
        <a class=\"takeda-logo\" data-modal=\"external\" data-animation=\"slide\" href=\"http://www.takeda.com/\" target=\"_blank\" rel=\"noreferrer\"><img src=\"";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 184, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 184, $this->source)), "html", null, true);
        echo "/images/logo-takeda.png\" alt=\"Takeda Pharmaceuticals U.S.A., Inc. logo.\"></a>
        <div class=\"nav-wrapper\">
          <nav>
            <ul>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/en-us/terms-of-use\" target=\"_blank\" rel=\"noreferrer\">Terms of Use</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/privacy-notice/\" target=\"_blank\" rel=\"noreferrer\">Privacy Notice</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/en-us/who-we-are/contact-us\" target=\"_blank\" rel=\"noreferrer\">Contact Us</a></li>
              <li class=\"\"><a href=\"";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 191, $this->source), "html", null, true);
        echo "sitemap\" target=\"_self\">Site Map</a></li>
            </ul>
            <ul>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takedahcp.com/unsubscribe/enrx\" target=\"_blank\" rel=\"noreferrer\">Unsubscribe</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takedahcp.com/\" target=\"_blank\" rel=\"noreferrer\">Professional Support</a></li>
              <li><a data-modal=\"external_medconnect\" data-animation=\"slide\" href=\"https://www.takedamedconnect.com/\" target=\"_blank\" rel=\"noreferrer\">Medical Information</a></li>
            </ul>
          </nav>
          <p>ENTYVIO is a trademark of Millennium Pharmaceuticals, Inc., registered with the U.S. Patent and Trademark Office and is used under license by Takeda Pharmaceuticals America, Inc. All other trademarks are the property of their respective owners.</p>

          <p>If you are a Colorado prescriber, please see the Colorado WAC <a data-modal=\"external\" href=\"https://www.takeda.com/siteassets/en-us/home/corporate-responsibility/culture-of-compliance/state/co_entyvio-product-form.pdf\" target=\"_blank\" rel=\"noreferrer\">disclosure form</a>.</p>

          <p>
            ©2021 Takeda&nbsp;Pharmaceuticals U.S.A., Inc.<br>
            This site is intended for use by U.S. residents only.
          <span data-float=\"right\">US-VED-1124v1.0 10/21</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id=\"fixed_isi\" class=\"\"></div>

<button class=\"back-to-top btn btn-secondary\" tabindex=\"0\">Back to top</button>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 191,  326 => 184,  261 => 122,  243 => 109,  232 => 101,  221 => 97,  215 => 96,  199 => 83,  192 => 79,  184 => 74,  180 => 73,  176 => 72,  171 => 70,  166 => 68,  159 => 64,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  132 => 52,  122 => 45,  118 => 44,  109 => 38,  100 => 36,  92 => 33,  84 => 30,  58 => 7,  47 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header data-device=\"desktop\"  class=\"header\" {% if logged_in %} style=\"position: unset !important;\" {% endif %}  >
  <div class=\"header-container\">
    <div class=\"pushdown\" {% if is_front %} {% else %} style=\"display: none\" {% endif %}>
      <div class=\"container\">
        <div class=\"flex-container\">
          <p class=\"description\">See how we are providing support for your patients during CORONAVIRUS (COVID‑19)</p>
          <a href=\"{{ base_path }}covid19\" class=\"btn btn-primary\">LEARN MORE</a>
        </div>
      </div>
    </div>
    <div class=\"eyebrow\">
      <div class=\"container\">
        <nav data-row=\"\">
          <ul data-col=\"mobile-12 desktop-6\">
            <li><a href=\"#isi\" target=\"_self\">Important Safety Information</a></li>
            <li><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">Prescribing Information</a></li>
            <li><a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a></li>
          </ul>
          <ul data-col=\"mobile-12 desktop-6\">
            <li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Patient Site</a></li>
            <li class=\"hcp-site\">For U.S. Healthcare Professionals</li>
          </ul>
        </nav>
      </div>
    </div>
    <div class=\"main-nav\">
      <div class=\"container\">
       <div class=\"hcp-text\"><p>For U.S. Healthcare Professionals</p></div>
        <div class=\"logo-container\">
          <a class=\"logo\" href=\"{{ url('<front>') }}\" target=\"_self\"><img src=\"{{ base_path ~ directory }}/images/logo-entyvio.svg\" alt=\"Entyvio® (vedolizumab) logo.\"></a>
          <button data-mobile-menu=\"\" aria-expanded=\"false\" class=\"close-menu\"  aria-label=\"Close Navigation Menu\"><span></span></button>
        </div>
        <nav class=\"{% if is_front %} front-page {% endif %}\">
          <!-- NAVIGATION STARTS -->
          <ul>
          <li {% if is_front %}class=\"active\" homepage=\"true\" {% endif %}><a href=\"{{ url('<front>') }}\" title=\"Home\" target=\"_self\">Home</a></li>
          <li class=\"has-submenu clinicalefficacy\">
            <a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/gemini-trial\" aria-haspopup=\"true\" aria-expanded=\"false\" target=\"_self\"><span>Clinical <br data-only=\"desktop\">Efficacy</span></a>
            <button id=\"mobile_nav_trigger_clinicalefficacy\" aria-expanded=\"true\"><span class=\"visuallyhidden\">show submenu for Clinical Efficacy</span></button>
            <div class=\"subnav clinicalefficacy\">
              <div class=\"uc\">
                <h3>UC</h3>
                <ul>
                  <li class=\"\"><a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/gemini-trial\" target=\"_self\"> GEMINI I: ENTYVIO <em class=\"vs\">vs.</em> PLACEBO</a></li>
                  <li class=\"\"><a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">VARSITY: HEAD-TO-HEAD STUDY</a></li>
                </ul>
              </div>

              <div class=\"cd\">
                <h3>CD</h3>
                <ul>
                  <li class=\"\"><a href=\"{{ base_path }}clinical-efficacy/crohns-disease/entyvio-placebo-trial\" target=\"_self\">GEMINI II AND III: ENTYVIO <em class=\"vs\">vs.</em> PLACEBO</a></li>
                </ul>
              </div>
            </div>
          </li>

          <li class=\"\"><a href=\"{{ base_path }}mechanism-of-action\" target=\"_self\"><span>Mechanism <br data-only=\"desktop\">of Action</span></a></li>
          <li class=\"\"><a href=\"{{ base_path }}safety-profile\" target=\"_self\"><span>Safety <br data-only=\"desktop\">Profile</span></a></li>
          <li class=\"\"><a href=\"{{ base_path }}dosing-administration\" target=\"_self\"><span>Dosing &amp; <br data-only=\"desktop\">Administration</span></a></li>
          <li class=\"\"><a href=\"{{ base_path }}access-support/insurance-support\" target=\"_self\"><span><em data-ec=\"\">EntyvioConnect</em></span></a></li>

          <li class=\"has-submenu resources\">
            <a href=\"{{ base_path }}resources/professional-resources\" aria-haspopup=\"true\" aria-expanded=\"false\" target=\"_self\"><span>Resources</span></a>
            <button id=\"mobile_nav_trigger_resources\" aria-expanded=\"false\"><span class=\"visuallyhidden\">show submenu for Resources</span></button>
            <div class=\"subnav resources\">
              <div class=\"\">
                <h3 class=\"\"><a href=\"{{ base_path }}resources/professional-resources\" target=\"_self\">FOR YOU</a></h3>
                <ul>
                  <li class=\"\"><a href=\"{{ base_path }}resources/virtual-congress\" target=\"_self\">ANNUAL CONGRESSES</a></li>
                  <li><a href=\"https://www.entyviovirtualbooth.com/\" data-modal=\"external\" target=\"_blank\">VIRTUAL CONGRESS BOOTH</a></li>
                  <li class=\"\"><a href=\"{{ base_path }}resources/peer-perspective\" target=\"_self\">PEER PERSPECTIVES</a></li>
                  <li class=\"\"><a href=\"{{ base_path }}resources/request-a-representative\" target=\"_self\">REQUEST A REPRESENTATIVE</a></li>
                  <li class=\"\"><a href=\"{{ base_path }}resources/clinical-reprints\" target=\"_self\">CLINICAL REPRINTS</a></li>
                </ul>
              </div>

              <div class=\"\">
                <h3 class=\"\"><a href=\"{{ base_path }}resources/patient-resources\" target=\"_self\">FOR YOUR PATIENTS</a></h3>
                <ul>
                  <li class=\"\"><a href=\"https://locator.infusioncenter.org/\" data-modal=\"external_third_party\" target=\"_blank\">INFUSION CENTER LOCATOR</a></li>
                  <li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" target=\"_blank\" rel=\"noreferrer\">ENTYVIO PATIENT SITE</a></li>
                  <li><a href=\"{{ base_path }}local-coverage\" target=\"_self\">ENTYVIO COVERAGE FINDER</a></li>
                </ul>
              </div>
            </div>
          </li>

          </ul>
          <!-- NAVIGATION ENDS -->
        </nav>
      </div>
    </div>
  </div>
</header>
<header data-device=\"mobile\" class=\"header\"  data-only=\"mobile\" {% if logged_in %} style=\"position: unset !important;\" {% endif %}> <!-- Mobile only header; on desktop, this will hide -->
    <div class=\"pushdown\" {% if is_front %} {% else %} style=\"display: none\" {% endif %}>
        <div class=\"container\">
          <div class=\"flex-container\">
          <p class=\"description\">See how we are providing support for your patients during CORONAVIRUS (COVID‑19)</p>
          <a href=\"{{ base_path }}covid19\" class=\"btn btn-primary\">LEARN MORE</a>
        </div>
      </div>
    </div>
\t<div class=\"for-us-hcp\">
\t\t<p>For U.S. Healthcare Professionals</p>
\t</div>
\t<div>
\t\t<a class=\"logo\" href=\"{{ url('<front>') }}\" target=\"_self\"><img src=\"{{ base_path ~ directory }}/images/logo-entyvio.svg\" alt=\"Entyvio® (vedolizumab) logo.\"></a>
\t\t<button data-mobile-menu=\"\" aria-expanded=\"false\" class=\"open-menu\" aria-label=\"Close Navigation Menu\"><span></span></button>
\t</div>
\t<div class=\"eyebrow\">
\t\t<ul>
\t\t\t<li><a href=\"#isi\" target=\"_self\">Important Safety Information</a></li>
\t\t\t<li><a href=\"https://general.takedapharm.com/ENTYVIOPI\" target=\"_blank\" rel=\"noreferrer\">Prescribing Information</a></li>
\t\t\t<li><a href=\"https://general.takedapharm.com/ENTYVIOMG\" target=\"_blank\" rel=\"noreferrer\">Medication Guide</a></li>
\t\t\t<li><a href=\"https://www.entyvio.com/\" data-modal=\"external\" data-animation=\"slide\" target=\"_blank\" rel=\"noreferrer\">Patient Site</a></li>
\t\t</ul>
\t</div>
</header>
<main class=\"content main-content_container\" id=\"page-content\" role=\"main\">
  {{ page.content }}
</main>
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
                <li>Fedyk E, Wyant T, Yang LL, et al. <em>Inflamm Bowel Dis</em>. 2012;18(11):2107<span>-</span>2119.</li>
                <li>Soler D, Chapman T, Yang LL, et al. <em>J Pharmacol Exp Ther</em>. 2009;330(3):864-875.</li>
                <li>Wyant T, Leach T, Sankoh S, et al. <em>Gut</em>. 2015;64(1):77-83.</li>
                <li>Wyant T, Fedyk E, Abhyankar B. <em>J Crohns Colitis</em>. 2016;10(12):1437-1444.</li>
                <li>Milch C, Wyant T, Xu J, et al. <em>J Neuroimmunol</em>. 2013;264:123-126.</li>
                <li>Briskin M, Winsor-Hines D, Shyjan A, et al. <em>Am J Pathol</em>. 1997;151(1):97-110.</li>
                <li>Xavier RJ, Podolsky DK. <em>Nature</em>. 2007;448(7152):427-434.</li>
            </ol>

        </article>
    </div>
</div>
<footer  class=\"footer\" id=\"footer\" data-device=\"global\" role=\"contentinfo\">
  <div>
    <div class=\"section\">
      <div class=\"footer-content\">
        <a class=\"takeda-logo\" data-modal=\"external\" data-animation=\"slide\" href=\"http://www.takeda.com/\" target=\"_blank\" rel=\"noreferrer\"><img src=\"{{ base_path ~ directory }}/images/logo-takeda.png\" alt=\"Takeda Pharmaceuticals U.S.A., Inc. logo.\"></a>
        <div class=\"nav-wrapper\">
          <nav>
            <ul>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/en-us/terms-of-use\" target=\"_blank\" rel=\"noreferrer\">Terms of Use</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/privacy-notice/\" target=\"_blank\" rel=\"noreferrer\">Privacy Notice</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takeda.com/en-us/who-we-are/contact-us\" target=\"_blank\" rel=\"noreferrer\">Contact Us</a></li>
              <li class=\"\"><a href=\"{{ base_path }}sitemap\" target=\"_self\">Site Map</a></li>
            </ul>
            <ul>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takedahcp.com/unsubscribe/enrx\" target=\"_blank\" rel=\"noreferrer\">Unsubscribe</a></li>
              <li><a data-modal=\"external\" data-animation=\"slide\" href=\"https://www.takedahcp.com/\" target=\"_blank\" rel=\"noreferrer\">Professional Support</a></li>
              <li><a data-modal=\"external_medconnect\" data-animation=\"slide\" href=\"https://www.takedamedconnect.com/\" target=\"_blank\" rel=\"noreferrer\">Medical Information</a></li>
            </ul>
          </nav>
          <p>ENTYVIO is a trademark of Millennium Pharmaceuticals, Inc., registered with the U.S. Patent and Trademark Office and is used under license by Takeda Pharmaceuticals America, Inc. All other trademarks are the property of their respective owners.</p>

          <p>If you are a Colorado prescriber, please see the Colorado WAC <a data-modal=\"external\" href=\"https://www.takeda.com/siteassets/en-us/home/corporate-responsibility/culture-of-compliance/state/co_entyvio-product-form.pdf\" target=\"_blank\" rel=\"noreferrer\">disclosure form</a>.</p>

          <p>
            ©2021 Takeda&nbsp;Pharmaceuticals U.S.A., Inc.<br>
            This site is intended for use by U.S. residents only.
          <span data-float=\"right\">US-VED-1124v1.0 10/21</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id=\"fixed_isi\" class=\"\"></div>

<button class=\"back-to-top btn btn-secondary\" tabindex=\"0\">Back to top</button>

", "themes/custom/entyviohcp/templates/page.html.twig", "C:\\xampp\\htdocs\\EntyvioHCP_Drupal\\themes\\custom\\entyviohcp\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 7);
        static $functions = array("url" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['url']
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
