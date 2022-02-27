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
class __TwigTemplate_a7f33372404dd3ead91fa39daee515a5 extends \Twig\Template
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
        echo "  <div data-page-id=\"Home\" class=\"page-content homepage-content\" >
    <div class=\"article homepage-article\">
      <div id=\"hero\">
        <div>
          <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/images/mobile-home-ivette.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 76, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 76, $this->source)), "html", null, true);
        echo "/images/desktop-home-ivette.png\">
            <img src=\"";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 77, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 77, $this->source)), "html", null, true);
        echo "/images/desktop-home-ivette.png\" alt=\"Patient.\">
          </picture>
          <article>
            <div>
              <h1>
                Made for <strong>Selectivity</strong><br>
                Made for <strong>Remission</strong><br>
                Made for <strong class=\"super\">Now</strong>
              </h1>
            </div>
            <div class=\"extra-list\">
              <ul data-bullet=\"primary\">
                <li>Entyvio works through a gut-selective MOA by specifically binding to the α4β7 integrin and blocking its interaction with MAdCAM-1, which is mainly expressed on gut endothelial cells.<sup>1-7</sup></li>
                <li>Remission was evaluated at Week 52.<sup>1</sup> Individual results may vary.</li>
              </ul>
            </div>
          </article>
          <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/images/mobile-home-doctor.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/images/desktop-home-doctor.png\">
            <img src=\"";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 97, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 97, $this->source)), "html", null, true);
        echo "/images/desktop-home-doctor.png\" alt=\"Healthcare professional.\">
          </picture>
        </div>
      </div>

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
      <div id=\"pillars\">
        <article>
          <div class=\"selectivity\">
            <section class=\"content-area\">
              <h2><span class=\"knockout-29\">Gut</span> Selectivity<sup>2-7</sup></h2>
              <h3>Entyvio helps address inflammation where it occurs—the gut.<sup>1</sup></h3>
              <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on the GI tract endothelial cells.</p>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 136, $this->source), "html", null, true);
        echo "mechanism-of-action\" class=\"btn btn-primary\" target=\"_self\">Discover the MOA</a></p>
            </div>
            <picture>
              <source srcset=\"";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 139, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 139, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-selectivity.webp\" type=\"image/webp\">
              <source srcset=\"";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 140, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 140, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-selectivity.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 141, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 141, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-selectivity.png\" alt=\"Healthcare professional.\">
            </picture>
          </div>
          <p data-yellow-dot-word=\"\">and</p>
          <div class=\"remission\">
            <section class=\"content-area\">
              <h2><span class=\"knockout-29\">Long-Term</span> Remission<sup>1,9,10</sup></h2>
              <p>UC and CD patients achieved remission at Week 52 vs placebo in study populations that included bio‑naïve and anti‑TNFα‑<br data-only=\"mobile\">experienced patients.<sup>1,9,10</sup></p>
              <p>Individual results may vary.</p>
              <h3>Week 6 and Week 52:</h3>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 153, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-primary\" target=\"_self\">View UC Data</a></p>
              <p><a href=\"";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 154, $this->source), "html", null, true);
        echo "clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-primary\" target=\"_self\">View CD Data</a></p>
            </div>
            <picture>
              <source srcset=\"";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 157, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 157, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-remission.webp\" type=\"image/webp\">
              <source srcset=\"";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 158, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 158, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-remission.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 159, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 159, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-remission.png\" alt=\"Healthcare professional.\">
            </picture>
          </div>
          <p data-yellow-dot-word=\"\">and</p>
          <div class=\"safety\">
            <section class=\"content-area\">
              <h2>Safety Data<span class=\"knockout-29\">For the Long Term<sup>1,11-13</sup></span></h2>
              <p>Clinical trials evaluated safety in more than 3300 adults (UC, CD, and healthy volunteers).<sup>1</sup> A separate open-label study of up to 7 years demonstrated consistent results across safety parameters.<sup>11-13†</sup></p>
              <p class=\"footnote\"><sup>†</sup>In a single-arm, open-label extension study of 2243 patients who received Entyvio with a median exposure of 1072&nbsp;days (range 1 to 3412 days).<sup>11-13</sup></p>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 170, $this->source), "html", null, true);
        echo "safety-profile\" class=\"btn btn-primary\" target=\"_self\">View Safety Profile</a></p>
            </div>
            <picture>
              <source srcset=\"";
        // line 173
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 173, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 173, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-safety.webp\" type=\"image/webp\">
              <source srcset=\"";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 174, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 174, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-safety.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 175, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 175, $this->source)), "html", null, true);
        echo "/images/homepage-doctor-safety.png\" alt=\"Healthcare professional.\">
            </picture>
          </div>
        </article>
      </div>
      <div id=\"cta\">
        <article>
          <div>
            <section class=\"head-to-head\">
              <div class=\"varsity-trial\">
                  <img class=\"\" src=\"";
        // line 185
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 185, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 185, $this->source)), "html", null, true);
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
              <p class=\"btn-wrapper\"><a class=\"btn btn-secondary\" href=\"";
        // line 204
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 204, $this->source), "html", null, true);
        echo "clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">See the study results</a></p>
            </section>
          </div>
          <div>
            <section class=\"milestones\">
              <h2>Reaching new milestones</h2>
              <div class=\"milestones-banner\">
                <img class=\"\" src=\"";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 211, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 211, $this->source)), "html", null, true);
        echo "/images/new-milestones-banner.png\" alt=\"Over 215,000 UC and CD patients in the US since the approval of Entyvio®.\">
              </div>
              <div class=\"icon-list\">
                <div class=\"icon-item\">
                  <img src=\"";
        // line 215
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 215, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 215, $this->source)), "html", null, true);
        echo "/images/29k_icon.png\" alt=\"29,000 physicians.\">
                  <p>
                    <span>over 29k physicians have prescribed entyvio</span><br>
                    in the US since approval<sup>18§</sup>
                  </p>
                </div>
                <div class=\"icon-item\">
                  <img src=\"";
        // line 222
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 222, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 222, $this->source)), "html", null, true);
        echo "/images/89_icon.png\" alt=\"89% of commercially insured patients have first-line biologic unrestricted commercial coverage.\">
                  <p>
                    <span>89% of commercially insured patients</span><br>
                    have first-line biologic unrestricted commercial coverage for Entyvio<sup>19‖</sup>
                  </p>
                </div>
              </div>
              <a class=\"btn btn-primary\" href=\"";
        // line 229
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 229, $this->source), "html", null, true);
        echo "local-coverage\" target=\"_self\">Check Coverage</a>
              <div class=\"legal\">
                  <p class=\"legal\"><sup>§</sup>This information is derived from a Symphony database of Entyvio medical and pharmacy claims from June 2014 to preliminary April 2021.</p>
                  <p class=\"legal\"><sup>||</sup>First-line/unrestricted coverage refers to patients with no prior biologic use. Data regarding current first-line/unrestricted commercial coverage for Entyvio are derived from Managed Markets Insights &amp; Technology (MMIT) as of July 2021.</p>
              </div>
            </section>
          </div>
        </article>
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
        return array (  272 => 229,  262 => 222,  252 => 215,  245 => 211,  235 => 204,  213 => 185,  200 => 175,  196 => 174,  192 => 173,  186 => 170,  172 => 159,  168 => 158,  164 => 157,  158 => 154,  154 => 153,  139 => 141,  135 => 140,  131 => 139,  125 => 136,  83 => 97,  79 => 96,  75 => 95,  54 => 77,  50 => 76,  46 => 75,  39 => 70,);
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
  <div data-page-id=\"Home\" class=\"page-content homepage-content\" >
    <div class=\"article homepage-article\">
      <div id=\"hero\">
        <div>
          <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/mobile-home-ivette.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/desktop-home-ivette.png\">
            <img src=\"{{ base_path ~ directory }}/images/desktop-home-ivette.png\" alt=\"Patient.\">
          </picture>
          <article>
            <div>
              <h1>
                Made for <strong>Selectivity</strong><br>
                Made for <strong>Remission</strong><br>
                Made for <strong class=\"super\">Now</strong>
              </h1>
            </div>
            <div class=\"extra-list\">
              <ul data-bullet=\"primary\">
                <li>Entyvio works through a gut-selective MOA by specifically binding to the α4β7 integrin and blocking its interaction with MAdCAM-1, which is mainly expressed on gut endothelial cells.<sup>1-7</sup></li>
                <li>Remission was evaluated at Week 52.<sup>1</sup> Individual results may vary.</li>
              </ul>
            </div>
          </article>
          <picture>
            <source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/mobile-home-doctor.png\">
            <source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/desktop-home-doctor.png\">
            <img src=\"{{ base_path ~ directory }}/images/desktop-home-doctor.png\" alt=\"Healthcare professional.\">
          </picture>
        </div>
      </div>

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
      <div id=\"pillars\">
        <article>
          <div class=\"selectivity\">
            <section class=\"content-area\">
              <h2><span class=\"knockout-29\">Gut</span> Selectivity<sup>2-7</sup></h2>
              <h3>Entyvio helps address inflammation where it occurs—the gut.<sup>1</sup></h3>
              <p>Entyvio specifically binds to the α4β7 integrin and blocks the interaction between the α4β7 integrin and MAdCAM-1, which is mainly expressed on the GI tract endothelial cells.</p>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"{{ base_path }}mechanism-of-action\" class=\"btn btn-primary\" target=\"_self\">Discover the MOA</a></p>
            </div>
            <picture>
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-selectivity.webp\" type=\"image/webp\">
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-selectivity.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"{{ base_path ~ directory }}/images/homepage-doctor-selectivity.png\" alt=\"Healthcare professional.\">
            </picture>
          </div>
          <p data-yellow-dot-word=\"\">and</p>
          <div class=\"remission\">
            <section class=\"content-area\">
              <h2><span class=\"knockout-29\">Long-Term</span> Remission<sup>1,9,10</sup></h2>
              <p>UC and CD patients achieved remission at Week 52 vs placebo in study populations that included bio‑naïve and anti‑TNFα‑<br data-only=\"mobile\">experienced patients.<sup>1,9,10</sup></p>
              <p>Individual results may vary.</p>
              <h3>Week 6 and Week 52:</h3>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/gemini-trial\" class=\"btn btn-primary\" target=\"_self\">View UC Data</a></p>
              <p><a href=\"{{ base_path }}clinical-efficacy/crohns-disease/entyvio-placebo-trial\" class=\"btn btn-primary\" target=\"_self\">View CD Data</a></p>
            </div>
            <picture>
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-remission.webp\" type=\"image/webp\">
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-remission.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"{{ base_path ~ directory }}/images/homepage-doctor-remission.png\" alt=\"Healthcare professional.\">
            </picture>
          </div>
          <p data-yellow-dot-word=\"\">and</p>
          <div class=\"safety\">
            <section class=\"content-area\">
              <h2>Safety Data<span class=\"knockout-29\">For the Long Term<sup>1,11-13</sup></span></h2>
              <p>Clinical trials evaluated safety in more than 3300 adults (UC, CD, and healthy volunteers).<sup>1</sup> A separate open-label study of up to 7 years demonstrated consistent results across safety parameters.<sup>11-13†</sup></p>
              <p class=\"footnote\"><sup>†</sup>In a single-arm, open-label extension study of 2243 patients who received Entyvio with a median exposure of 1072&nbsp;days (range 1 to 3412 days).<sup>11-13</sup></p>
            </section>
            <div class=\"btn-wrapper\">
              <p><a href=\"{{ base_path }}safety-profile\" class=\"btn btn-primary\" target=\"_self\">View Safety Profile</a></p>
            </div>
            <picture>
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-safety.webp\" type=\"image/webp\">
              <source srcset=\"{{ base_path ~ directory }}/images/homepage-doctor-safety.png\" type=\"image/jpeg\">
              <img class=\"bg\" src=\"{{ base_path ~ directory }}/images/homepage-doctor-safety.png\" alt=\"Healthcare professional.\">
            </picture>
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
              <p class=\"btn-wrapper\"><a class=\"btn btn-secondary\" href=\"{{ base_path }}clinical-efficacy/ulcerative-colitis/varsity-trial\" target=\"_self\">See the study results</a></p>
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
              <a class=\"btn btn-primary\" href=\"{{ base_path }}local-coverage\" target=\"_self\">Check Coverage</a>
              <div class=\"legal\">
                  <p class=\"legal\"><sup>§</sup>This information is derived from a Symphony database of Entyvio medical and pharmacy claims from June 2014 to preliminary April 2021.</p>
                  <p class=\"legal\"><sup>||</sup>First-line/unrestricted coverage refers to patients with no prior biologic use. Data regarding current first-line/unrestricted commercial coverage for Entyvio are derived from Managed Markets Insights &amp; Technology (MMIT) as of July 2021.</p>
              </div>
            </section>
          </div>
        </article>
      </div>
    </div>
  </div>

", "themes/custom/entyviohcp/templates/content/node--homepage--full.html.twig", "C:\\xampp\\htdocs\\EntyvioHCP_Drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--homepage--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 75);
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
