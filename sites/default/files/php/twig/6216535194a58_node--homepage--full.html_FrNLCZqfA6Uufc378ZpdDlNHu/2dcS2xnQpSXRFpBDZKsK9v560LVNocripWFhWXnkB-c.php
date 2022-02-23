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

/* themes/custom/entyviohcp/templates/content/node--homepage--full.html.twig */
class __TwigTemplate_0480b385c8545c1129aad320090ee565691f5b8bcf91faa599b246163d64770c extends \Twig\Template
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
        // line 70
        echo "  <div data-page-id=\"Home\" class=\"page-content homepage-content\" style=\"margin-top: 2000px\">
    <div class=\"article homepage-article\">
      <div id=\"indication_bar\" class=\"close\">
        <div>
          <div class=\"section\">
            <h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
          </div>
        </div>
      </div>

      <div>
        <article class=\"first-line-biologic\">
          <div>
            <h2><strong>More UC and CD patients start on Entyvio than any other biologic<sup>8</sup>*</strong></h2>
            <div class=\"legal\">
              <p class=\"legal\">*Based on an analysis of data in SHA database comparing quarterly UC and CD combined patient counts from January 2019 to May 2021 with “new start” defined as “bio-naïve” plus “switch” patients. “Bio-naïve” is defined as any patient with UC or CD who had no UC or CD biologic drug claims for the past 3 years. “Switch” is defined as any patient who previously used a different UC or CD biologic drug and switched to the current therapy in the past 3&nbsp;years. </p>
            </div>
          </div>
        </article>
      </div>
      <div id=\"home_title\">
        <article>
          <div>
            <h2><span>Only <span>Entyvio <em>(vedolizumab)</em></span> Combines</span></h2>
          </div>
        </article>
      </div>
      <div id=\"cta\">
        <article>
          <div>
            <section class=\"head-to-head\">
              <div class=\"varsity-trial\">
                  <img class=\"\" src=\"";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 102, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 102, $this->source)), "html", null, true);
        echo "/images/logo-varsity-trial.png\" alt=\"Varsity Trial\">
              </div>
              <h2>
                <span class=\"knockout-29\">
                  ONLY ENTYVIO OFFERS RESULTS FROM THE
                </span>
                <span class=\"knockout-49\">
                  first head-to-<br>head study
                </span>
                <span class=\"knockout-29 subhead\">
                  of biologics in moderate to <span data-nobr=\"all\">severe UC<sup>14-16</sup></span>
                </span>
              </h2>
              <article class=\"entyvio-vs-humira\">
                <h3>Entyvio <em>(vedolizumab)</em></h3>
                <div><p data-yellow-dot-word=\"\">Vs</p></div>
                <h3>Humira<span class=\"superscript-set\"><sup>®‡</sup></span> <em>(adalimumab)</em></h3>
              </article>
              <p class=\"legal\"><span><sup>‡</sup></span>Humira<sup>®</sup> (AbbVie Inc., North Chicago, IL). For information related to Humira, please see AbbVie.com.</p>
              <p class=\"btn-wrapper\"><a class=\"btn btn-secondary\" href=\"/clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">See the study results</a></p>
            </section>
          </div>
          <div>
            <section class=\"milestones\">
              <h2>Reaching new milestones</h2>
              <div class=\"milestones-banner\">
                <img class=\"\" src=\"";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 128, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 128, $this->source)), "html", null, true);
        echo "/images/new-milestones-banner.png\" alt=\"Over 215,000 UC and CD patients in the US since the approval of Entyvio®.\">
              </div>
              <div class=\"icon-list\">
                <div class=\"icon-item\">
                  <img src=\"";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 132, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 132, $this->source)), "html", null, true);
        echo "/images/29k_icon.png\" alt=\"29,000 physicians.\">
                  <p>
                    <span>over 29k physicians have prescribed entyvio</span><br>
                    in the US since approval<sup>18§</sup>
                  </p>
                </div>
                <div class=\"icon-item\">
                  <img src=\"";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 139, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 139, $this->source)), "html", null, true);
        echo "/images/89_icon.png\" alt=\"89% of commercially insured patients have first-line biologic unrestricted commercial coverage.\">
                  <p>
                    <span>89% of commercially insured patients</span><br>
                    have first-line biologic unrestricted commercial coverage for Entyvio<sup>19‖</sup>
                  </p>
                </div>
              </div>
              <a class=\"btn btn-primary\" href=\"/local-coverage\" target=\"_self\">Check Coverage</a>
              <div class=\"legal\">
                  <p class=\"legal\"><sup>§</sup>This information is derived from a Symphony database of Entyvio medical and pharmacy claims from June 2014 to preliminary April 2021.</p>
                  <p class=\"legal\"><sup>||</sup>First-line/unrestricted coverage refers to patients with no prior biologic use. Data regarding current first-line/unrestricted commercial coverage for Entyvio are derived from Managed Markets Insights &amp; Technology (MMIT) as of July 2021.</p>
              </div>
            </section>
          </div>
        </article>
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
              <li>Briskin M, Winsor-Hines D, Shyjan A, et al. <em>Am J Pathol</em>. 1997;151(1):97-110.</li>
              <li>Fedyk E, Wyant T, Yang LL, et al. <em>Inflamm Bowel Dis</em>. 2012;18(11):2107<span>-</span>2119.</li>
              <li>Soler D, Chapman T, Yang LL, et al. <em>J Pharmacol Exp Ther</em>. 2009;330(3):864-875.</li>
              <li>Wyant T, Fedyk E, Abhyankar B. <em>J Crohns Colitis</em>. 2016;10(12):1437-1444.</li>
              <li>Wyant T, Leach T, Sankoh S, et al. <em>Gut</em>. 2015;64(1):77-83.</li>
              <li>Milch C, Wyant T, Xu J, et al. <em>J Neuroimmunol</em>. 2013;264:123-126.</li>
              <li>Data on file. Entyvio is the most prescribed biologic in IBD new patient starts - Supporting Data &amp; Methodology Overview, August 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. MLN0002, Final CSR C13006, September 2012. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. MLN0002, Final CSR C13007, October 2012. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Loftus EV, Feagan BG, Panaccione R, et al; for the GEMINI LTS study team. <em>Aliment Pharmacol Ther</em>. 2020;00:1-13.</li>
              <li>Data on file. MLN0002, Final CSR C13008, July 2018. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Internal communication, October 2020. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Sands BE, Peyrin-Biroulet L, Loftus EV Jr, et al. <em>N Engl J Med</em>. 2019;381(13):1215-1226.</li>
              <li>Data on file. DDW Abstract 416a, May 2019. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. DDW Oral Presentation 416a, May 2019. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Patient Counts - Supporting Data &amp; Methodology Overview, June 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Prescriber Counts - Supporting Data &amp; Methodology Overview, June 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Access Report, September 2021. Takeda Pharmaceuticals USA, Inc.</li>
            </ol>
          </article>
        </div>
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--homepage--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 139,  109 => 132,  102 => 128,  73 => 102,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
  <div data-page-id=\"Home\" class=\"page-content homepage-content\" style=\"margin-top: 2000px\">
    <div class=\"article homepage-article\">
      <div id=\"indication_bar\" class=\"close\">
        <div>
          <div class=\"section\">
            <h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
          </div>
        </div>
      </div>

      <div>
        <article class=\"first-line-biologic\">
          <div>
            <h2><strong>More UC and CD patients start on Entyvio than any other biologic<sup>8</sup>*</strong></h2>
            <div class=\"legal\">
              <p class=\"legal\">*Based on an analysis of data in SHA database comparing quarterly UC and CD combined patient counts from January 2019 to May 2021 with “new start” defined as “bio-naïve” plus “switch” patients. “Bio-naïve” is defined as any patient with UC or CD who had no UC or CD biologic drug claims for the past 3 years. “Switch” is defined as any patient who previously used a different UC or CD biologic drug and switched to the current therapy in the past 3&nbsp;years. </p>
            </div>
          </div>
        </article>
      </div>
      <div id=\"home_title\">
        <article>
          <div>
            <h2><span>Only <span>Entyvio <em>(vedolizumab)</em></span> Combines</span></h2>
          </div>
        </article>
      </div>
      <div id=\"cta\">
        <article>
          <div>
            <section class=\"head-to-head\">
              <div class=\"varsity-trial\">
                  <img class=\"\" src=\"{{ base_path ~ directory }}/images/logo-varsity-trial.png\" alt=\"Varsity Trial\">
              </div>
              <h2>
                <span class=\"knockout-29\">
                  ONLY ENTYVIO OFFERS RESULTS FROM THE
                </span>
                <span class=\"knockout-49\">
                  first head-to-<br>head study
                </span>
                <span class=\"knockout-29 subhead\">
                  of biologics in moderate to <span data-nobr=\"all\">severe UC<sup>14-16</sup></span>
                </span>
              </h2>
              <article class=\"entyvio-vs-humira\">
                <h3>Entyvio <em>(vedolizumab)</em></h3>
                <div><p data-yellow-dot-word=\"\">Vs</p></div>
                <h3>Humira<span class=\"superscript-set\"><sup>®‡</sup></span> <em>(adalimumab)</em></h3>
              </article>
              <p class=\"legal\"><span><sup>‡</sup></span>Humira<sup>®</sup> (AbbVie Inc., North Chicago, IL). For information related to Humira, please see AbbVie.com.</p>
              <p class=\"btn-wrapper\"><a class=\"btn btn-secondary\" href=\"/clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">See the study results</a></p>
            </section>
          </div>
          <div>
            <section class=\"milestones\">
              <h2>Reaching new milestones</h2>
              <div class=\"milestones-banner\">
                <img class=\"\" src=\"{{ base_path ~ directory }}/images/new-milestones-banner.png\" alt=\"Over 215,000 UC and CD patients in the US since the approval of Entyvio®.\">
              </div>
              <div class=\"icon-list\">
                <div class=\"icon-item\">
                  <img src=\"{{ base_path ~ directory }}/images/29k_icon.png\" alt=\"29,000 physicians.\">
                  <p>
                    <span>over 29k physicians have prescribed entyvio</span><br>
                    in the US since approval<sup>18§</sup>
                  </p>
                </div>
                <div class=\"icon-item\">
                  <img src=\"{{ base_path ~ directory }}/images/89_icon.png\" alt=\"89% of commercially insured patients have first-line biologic unrestricted commercial coverage.\">
                  <p>
                    <span>89% of commercially insured patients</span><br>
                    have first-line biologic unrestricted commercial coverage for Entyvio<sup>19‖</sup>
                  </p>
                </div>
              </div>
              <a class=\"btn btn-primary\" href=\"/local-coverage\" target=\"_self\">Check Coverage</a>
              <div class=\"legal\">
                  <p class=\"legal\"><sup>§</sup>This information is derived from a Symphony database of Entyvio medical and pharmacy claims from June 2014 to preliminary April 2021.</p>
                  <p class=\"legal\"><sup>||</sup>First-line/unrestricted coverage refers to patients with no prior biologic use. Data regarding current first-line/unrestricted commercial coverage for Entyvio are derived from Managed Markets Insights &amp; Technology (MMIT) as of July 2021.</p>
              </div>
            </section>
          </div>
        </article>
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
              <li>Briskin M, Winsor-Hines D, Shyjan A, et al. <em>Am J Pathol</em>. 1997;151(1):97-110.</li>
              <li>Fedyk E, Wyant T, Yang LL, et al. <em>Inflamm Bowel Dis</em>. 2012;18(11):2107<span>-</span>2119.</li>
              <li>Soler D, Chapman T, Yang LL, et al. <em>J Pharmacol Exp Ther</em>. 2009;330(3):864-875.</li>
              <li>Wyant T, Fedyk E, Abhyankar B. <em>J Crohns Colitis</em>. 2016;10(12):1437-1444.</li>
              <li>Wyant T, Leach T, Sankoh S, et al. <em>Gut</em>. 2015;64(1):77-83.</li>
              <li>Milch C, Wyant T, Xu J, et al. <em>J Neuroimmunol</em>. 2013;264:123-126.</li>
              <li>Data on file. Entyvio is the most prescribed biologic in IBD new patient starts - Supporting Data &amp; Methodology Overview, August 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. MLN0002, Final CSR C13006, September 2012. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. MLN0002, Final CSR C13007, October 2012. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Loftus EV, Feagan BG, Panaccione R, et al; for the GEMINI LTS study team. <em>Aliment Pharmacol Ther</em>. 2020;00:1-13.</li>
              <li>Data on file. MLN0002, Final CSR C13008, July 2018. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Internal communication, October 2020. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Sands BE, Peyrin-Biroulet L, Loftus EV Jr, et al. <em>N Engl J Med</em>. 2019;381(13):1215-1226.</li>
              <li>Data on file. DDW Abstract 416a, May 2019. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. DDW Oral Presentation 416a, May 2019. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Patient Counts - Supporting Data &amp; Methodology Overview, June 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Prescriber Counts - Supporting Data &amp; Methodology Overview, June 2021. Takeda Pharmaceuticals USA, Inc.</li>
              <li>Data on file. Entyvio Access Report, September 2021. Takeda Pharmaceuticals USA, Inc.</li>
            </ol>
          </article>
        </div>
      </div>
    </div>
  </div>

", "themes/custom/entyviohcp/templates/content/node--homepage--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--homepage--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 102);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
