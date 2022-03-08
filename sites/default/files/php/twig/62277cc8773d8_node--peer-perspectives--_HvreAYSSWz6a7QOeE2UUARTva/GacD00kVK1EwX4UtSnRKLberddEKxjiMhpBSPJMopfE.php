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

/* themes/custom/entyviohcp/templates/content/node--peer-perspectives--full.html.twig */
class __TwigTemplate_54527f278fbcea1172635300e801ce7f317a1a55fd3d5373a08bef47a25f6137 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("entyviohcp/peer-perspectives-styling"), "html", null, true);
        echo "
<script type=\"application/ld+json\">
\t\t{\"@context\": \"https://schema.org\",
\t\t  \"@type\": \"MedicalWebPage\",
\t\t  \"specialty\": \"https://schema.org/Gastroenterologic\",
\t\t  \"audience\": \"https://schema.org/Clinician\",
\t\t  \"url\": \"https://www.entyviohcp.com/resources/peer-perspective\",
\t\t  \"headline\": \"Peer Perspectives on Entyvio® (vedolizumab)\",
\t\t  \"description\": \"Watch videos from leading experts reviewing the clinical profile of Entyvio®. See Important Safety Information and Prescribing Information.\",

\t\t \"breadcrumb\":[
\t\t\t{\"@type\":\"BreadcrumbList\",
\t\t\t  \"itemListElement\": [{
\t\t\t  \"@type\": \"ListItem\",
\t\t\t  \"position\": \"1\",
\t\t\t  \"name\": \"Home\",
\t\t\t  \"item\": \"https://www.entyviohcp.com\"},
\t\t\t{\"@type\": \"ListItem\",
\t\t\t  \"position\": \"2\",
\t\t\t  \"name\": \"Peer Perspectives\",
\t\t\t  \"item\": \"https://www.entyviohcp.com/resources/peer-perspective\"}]}],

\t\t \"image\": [
\t\t\t{\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_01_poster.jpg\"},
            {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_02_poster.jpg\"},
            {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_03_poster.jpg\"},
             {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_04_poster.jpg\"}],

           \"video\": [
            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio in practice: UC\",
            \"description\": \"Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.\",
            \"duration\": \"PT11M12S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221183646001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_01_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio in practice: CD\",
            \"description\": \"Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.\",
            \"duration\": \"PT10M12S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221185281001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_02_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio study design and efficacy: UC\",
            \"description\": \"Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.\",
            \"duration\": \"PT11M28S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221186163001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_03_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio study design and efficacy: CD\",
            \"description\": \"Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.\",
            \"duration\": \"PT11M20S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221186943001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_04_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"}],

\t\t  \"about\":
\t\t\t\t[{\"@type\":\"Drug\",
\t\t\t\t\t\"name\":\"ENTYVIO\",
\t\t\t\t\t\"nonProprietaryName\":\"vedolizumab\",
\t\t\t\t\t\"description\":\"Indications: Adult Ulcerative Colitis (UC) - ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC. Adult Crohn's Disease (CD) - ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD. Please see full Prescribing Information, including Medication Guide.\",
                    \"warning\": [\"Important Safety Information.\", \"ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.\", \"Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.\", \"Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.\", \"Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.\", \"There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.\", \"Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.\", \"Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.\"],
\t\t\t\t    \"prescribingInfo\": \"https://general.takedapharm.com/ENTYVIOPI\",
\t\t\t\t    \"dosageForm\": \"infusion\",
\t\t\t\t    \"administrationRoute\": [\"intravenous infusion\",\"IV infusion\"],
                    \"doseSchedule\":
\t\t\t\t\t{\"@type\": \"DoseSchedule\",
\t\t\t\t\t\t\"frequency\": \": 300 mg infused intravenously over approximately 30 minutes at zero, two and six weeks, then every eight weeks thereafter. \"},

\t\t\t\"manufacturer\":
\t\t\t\t\t[{\"@type\": \"Corporation\",
\t\t\t\t\t\t\"name\": \"Takeda\",
\t\t\t\t\t\t\"logo\": \"https://www.entyviohcp.com/Content/images/logos/logo-takeda.svg\"}]}]}
    </script>
<div class=\"page-content resources-content\" data-page-id=\"PeerPerspective\" data-page-category=\"Resources\">
\t<div id=\"skip-to-content\"></div>

\t\t<div id=\"hero\"> <div>

\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 94, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 94, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-patient.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 95, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 95, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\">
\t\t\t\t<img src=\"";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 96, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 96, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
\t\t\t</picture>
\t\t\t<article>
\t\t\t\t<div>
\t\t\t\t\t<h1>
\t\t\t\t\t\tResources
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<h2>Information<br/>
\t\t\t\t\t\tto Help You<br/>
\t\t\t\t\t\tand Your Patients</h2>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 112, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 112, $this->source)), "html", null, true);
        echo "/images/hero/mobile-resources-stu.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 113, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 113, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\">
\t\t\t\t<img src=\"";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 114, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 114, $this->source)), "html", null, true);
        echo "/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
\t\t\t</picture>


\t\t</div>
\t</div>

\t<div id=\"first_section\">
\t\t<div id=\"indication_bar\" class=\"close\">
\t\t\t<div>
\t\t\t\t<div class=\"section\">
\t\t\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"body-content\">
\t\t\t<article>
\t\t\t\t<div class=\"title-area\">
\t\t\t\t\t<p class=\"go-back\">
\t\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 134, $this->source), "html", null, true);
        echo "resources/professional-resources\" target=\"_self\">Back to Resources list</a>
\t\t\t\t\t</p>
\t\t\t\t\t<h2 class=\"border\">Peer Perspectives</h2>
\t\t\t\t\t<h3>Leading gastroenterologists review the clinical profile of Entyvio and discuss how they use it to treat appropriate patients in their practices.</h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"main-container\">

\t\t\t\t\t<div class=\"video-gallery-container\" id=\"video-gallery\">

\t\t\t\t\t\t<div class=\"gallery-items\" id=\"video-gallery-mobile\">

\t\t\t\t\t\t\t<div class=\"gallery-item active\" data-video-id=\"6221183646001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 149, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 149, $this->source)), "html", null, true);
        echo "/images/video-posters/video_01_poster.jpg\" alt=\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\" title=\"Click to Watch Entyvio® in Practice: Ulcerative Colitis\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_01\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221183646001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: UC</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Stephen B. Hanauer, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Northwestern University Medicine</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Brian G. Feagan, MD, MS</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Western University</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adult patients with moderately to severely active UC.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe all have some patients with ulcerative colitis whose disease is not adequately managed on their current therapy. We need to begin looking at alternative therapeutic options for these patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, we look at all available therapeutic options, considering their data, and trying to understand how to best help our patients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>In our practice, we see patients who have failed conventional therapies or anti-TNF agents.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith the addition of Entyvio, which is not an anti-TNF therapy, we now have another biologic option for our patients with moderately to severely active ulcerative colitis.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio's approval for use in patients with moderately to severely active ulcerative colitis who have failed conventional or anti-TNF therapies, provides us guidance for potential candidates who might be appropriate for this therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tClinical trials evaluated the safety of Entyvio in more than 3300 adults, including more than 800 patients who received Entyvio for more than 2 years.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn these patients, Entyvio has been shown to induce and maintain both clinical response and remission, improve endoscopic appearance of the mucosa, and to help patients achieve remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor now, let's focus on those biologic-na&iuml;ve patients who have failed to respond to conventional therapies.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I talk to my patients with moderate to severe ulcerative colitis, I concentrate on understanding their concerns and explaining the disease to them, and the options we have for managing their condition.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI also talk about relevant treatment goals—such as attaining and maintaining clinical remission and achieving clinical remission over time without steroids. I'll also explain that we want to see improvement in the appearance of their mucosa. As supported by the literature, endoscopic improvement of the mucosa is an important goal for us.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe have an open dialogue to talk about many aspects of their disease and the benefits and risks of biologic therapy, which we describe as shared decision-making.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI can think of a patient example who might seem familiar to most of us. Let's say our patient was recently diagnosed with moderate to severe ulcerative colitis. Initially, we might choose to start a patient like this on 40 milligrams of prednisone per day.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tLet's say this patient did not respond to steroids.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAfter confirming the presence of active inflammation, we would consider a biologic therapy for a patient who failed to respond to steroids, which aligns with the recommendations from the American Gastroenterological Association (or AGA) Ulcerative Colitis Care Pathway.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tTogether, the patient and I would review her history, the results of her recent exam, and thoughts on biologic options. In a case like this, based on my assessment and after consulting with this patient and her family, I might decide to recommend Entyvio.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tUsing Entyvio as one of the first biologic options in this type of patient is supported by recent guidance from the American Gastroenterological Association.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe AGA Ulcerative Colitis Care Pathway recommends either Entyvio or an anti-TNF for appropriate ulcerative colitis patients who have failed conventional therapy.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAnother patient I would consider for Entyvio is someone who has not responded to their initial anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tMaybe you have a patient with moderate disease who was quite well-controlled on mesalamine for several years. Let's say he had a relapse, and it became clear that his disease had progressed to moderate to severe.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>For a patient like this, we might choose to start him on 40 milligrams of prednisone daily<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tto induce remission. In the case that the patient responded, but had difficulty tapering off steroids completely, our goal would be to get him into remission without the use of steroids.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt that point, we would talk about what to do next. In a patient like this, we might make the decision to start him on an anti-TNF biologic, such as infliximab, along with azathioprine, to try and combat worsening symptoms and avoid steroids.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tHowever, let's say the patient did not respond to an induction course of infliximab.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe would then talk about other biologic options. For a patient like this, based on his primary non-response to therapy, I might recommend Entyvio.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tUsing Entyvio in patients who have not responded or who have lost response to an anti-TNF biologic is supported by the AGA Care Pathway.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIf Entyvio is an appropriate option for a patient, I explain what Entyvio is, and that it's not an anti-TNF therapy.1 I also describe the benefit and risk profile of Entyvio based on findings from the clinical trials.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio has given us another option for our moderate to severely active ulcerative colitis patients, both those who have failed conventional therapy, and those who have failed anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe have evidence from clinical trials and recommendations from the AGA Care Pathway that Entyvio should be considered for these types of patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, Entyvio, which is not an anti-TNF agent, gives us another biologic option for helping our patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221185281001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 381
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 381, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 381, $this->source)), "html", null, true);
        echo "/images/video-posters/video_02_poster.jpg\" alt=\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\" title=\"Click to Watch Entyvio® in Practice: Crohn's Disease\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_02\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221185281001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: CD</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Stephen B. Hanauer, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Northwestern University Medicine</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe all have some patients with moderate to severe Crohn’s disease whose illness is not being managed by their current therapy.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, we look at all available therapeutic options, trying to understand how to best help our patients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>In our practice, we see patients who have failed conventional therapies, or anti-TNF agents.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith the addition of Entyvio, which is not an anti-TNF therapy, we now have another biologic option for our patients with moderately to severely active Crohn's disease.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio's approval for use in patients with moderate to severely active Crohn’s disease who have failed conventional therapies or anti-TNF agents is a good starting point for thinking about appropriate candidates for this treatment.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tClinical trials have evaluated the safety of Entyvio in more than 3300 adults, including more than 800 patients who received Entyvio for more than 2 years.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn these patients, Entyvio has been shown to help achieve clinical response, clinical remission, and remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tSome of our Crohn's disease patients may have reached the point where biologic therapy is an appropriate consideration.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Determining the appropriate time to start treatment with a biologic agent involves assessing a patient's current clinical status, and response to conventional agents.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI also find it helpful to have a conversation with my patients so that they understand our shared treatment goals. We have an open dialogue to talk about many aspects of their disease.
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>This leads us into a process of shared decision-making regarding the potential benefits and risks of biologic therapy.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tHere's an example of a patient who might seem familiar to most of us. Let's say that he was diagnosed with moderate to severe Crohn's disease 6 months ago. Initially, we might have chosen to start a patient like this on 40 milligrams per day of prednisone and an immunomodulator such as 6-MP.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tLet's assume that, despite an initial response, he was unable to taper off steroids without a recurrence of symptoms.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tTogether, this patient and I would review his history, the results of his recent exam, and his thoughts on biologic options. In this case, based on my assessment and after consulting with this patient and his family, I might decide to recommend Entyvio.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAnother patient who might be appropriate for Entyvio is someone who did not respond to their initial anti-TNF therapy, such as a patient who began treatment with corticosteroids, but was unable to taper despite the addition of azathioprine.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt this point, we might make the decision to start therapy with an anti-TNF biologic, such as adalimumab.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tLet's say our patient had an inadequate response to adalimumab therapy, so we would need to look at other options.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tBased on the patient's history, inadequate response to an anti-TNF therapy, and my clinical judgment, I might consider Entyvio as an option for this patient.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tPatient identification and shared decision-making play an important role in the care we provide as physicians. It’s all about finding the appropriate treatment for each patient at the appropriate time.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>And the details matter.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio has given us another option for our patients with moderately to severely active Crohn's disease, both those who have failed conventional therapy, and those who have had an inadequate response or loss of response to at least one anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor both patients and clinicians, it's important to consider all aspects of the disease as well as therapy as we work together towards the long-term management of patients with Crohn's disease.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Entyvio is not an anti-TNF therapy. It provides another option for disease management in patients who have not responded to either conventional therapies or anti-TNF biologics.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221186163001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 584
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 584, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 584, $this->source)), "html", null, true);
        echo "/images/video-posters/video_03_poster.jpg\" alt=\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\" title=\"Click to Watch Ulcerative Colitis Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_03\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186163001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: UC</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Remo Panaccione, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>University of Calgary</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I’m treating patients who have moderate to severely active ulcerative colitis, there are several important treatment goals to keep in mind.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFirst and foremost for my patients, I want to induce clinical response and remission.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tOnce we achieve this first goal, we want to help them manage their condition and maintain remission. Ideally this is done without a prolonged course of steroids.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAlthough these are both important goals, we also want to ensure that we are managing the disease by using objective measures such as observing improvement in the appearance of the mucosa.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese are some of my considerations when I’m thinking about what therapies might be appropriate. Recent literature suggests that an endoscopic improvement of the mucosa, defined as a Mayo endoscopic subscore of 0 to 1, is one of the appropriate therapeutic targets for ulcerative colitis.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of moderately to severely active ulcerative colitis sheds some light on how Entyvio may be relevant to your clinical practice and treatment goals for your patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe safety and efficacy of Entyvio for the treatment of ulcerative colitis was investigated in the GEMINI I study program, which consisted of 2 clinical trials, a 6-week induction study known as UC Trial I and a 46-week maintenance study known as UC Trial II.<sup>1,2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn the overall population of these trials, approximately 50% of the patients were naïve to anti-TNF therapy, while the remaining 50% had either been exposed to or failed anti-TNF therapy.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor UC Trial I, patients who had failed at least 1 conventional or an anti-TNF therapy were randomized in a double-blind fashion (3:2) to either IV Entyvio 300 milligrams or placebo at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients were evaluated for response after 2 doses of Entyvio.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 6, if they achieved the primary outcome of clinical response, then they were eligible to enter UC Trial II.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\tPatients also could have come from an open-label cohort that received 300 milligrams of Entyvio at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial II, patients were randomized in a double-blind fashion (1:1:1) to placebo every 4 weeks, Entyvio 300 milligrams every 4 weeks, or Entyvio 300 milligrams every 8 weeks, for an additional 46 weeks.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Efficacy was evaluated at Week 52.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>The primary end point was clinical remission.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith these demographics in mind, as previously mentioned, let’s look at how patients did in terms of achieving response at Week 6 and remission at Week 52 in the induction and maintenance studies, respectively.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe results of these studies showed that Entyvio may offer rapid and lasting efficacy in patients with moderate to severe ulcerative colitis.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial I, 47% of patients randomized to Entyvio achieved the primary end point of clinical response at Week 6, compared to 26% of patients on placebo. Recall that patients had received 2 doses of Entyvio at this point.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial II, 42% of patients randomized to Entyvio achieved the primary end point of clinical remission at Week 52, compared to 16% of patients on placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs I mentioned, in addition to evaluating whether my patients have achieved response or remission, I think it’s important to assess their disease activity using endoscopy.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tImprovement in endoscopic appearance of the mucosa, defined as a Mayo endoscopy subscore of 0 or 1, was a secondary end point in the UC trials.1,2 At Week 6, 41% of patients receiving Entyvio demonstrated improvement in endoscopic appearance of the mucosa, while only 25% of patients receiving placebo saw this improvement.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 52, 52% of Entyvio patients demonstrated improvement in the endoscopic appearance of the mucosa, while only 20% of placebo patients saw this improvement.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs I discussed earlier, patients achieving remission without long-term steroids is an important consideration for me.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith Entyvio, we have data on this: in a secondary end point from UC Trial II, 31% of patients on Entyvio achieved corticosteroid-free remission versus 14% of those on placebo at Week 52.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tMy goal is to get my patients to respond to therapy and to keep them in remission over time. I also want to see evidence of mucosal improvement. In addition, it’s really important to achieve remission without the use of long-term steroids.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tSo the GEMINI I trial using Entyvio for the treatment of moderately to severely active ulcerative colitis demonstrated that Entyvio: 1) helps induce and maintain remission, 2) helps patients achieve remission without steroids, and 3) can improve the appearance of the mucosa.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI want to consider every appropriate therapeutic option when I treat patients whose current therapy is not working.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese results suggest that Entyvio may be appropriate for patients with moderately to severely active ulcerative colitis who have failed conventional therapies or a biologic.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>As physicians, Entyvio gives us another therapeutic option for helping our patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221186943001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 813
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 813, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 813, $this->source)), "html", null, true);
        echo "/images/video-posters/video_04_poster.jpg\" alt=\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\" title=\"Click to Watch Crohn's Disease Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_04\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186943001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: CD</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Brian G. Feagan, MD, MS</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Western University</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I have patients with moderate to severe Crohn's disease, I want to help them achieve clinical response, clinical remission, and long-term remission without steroids.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese are some of my considerations when I’m thinking about which therapies might be appropriate.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of moderately to severely active Crohn’s disease sheds some light on how Entyvio may be relevant to your clinical practice and treatment goals for your patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe GEMINI II and III clinical programs evaluated the use of Entyvio in patients with moderately to severely active Crohn’s disease.1 GEMINI II included an initiation of therapy study followed by a long-term study of 46 weeks, while GEMINI III was only an initiation of therapy study.<sup>1,2,4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tCD Trial I, part of the GEMINI II study, was an initiation of therapy study in which patients had failed at least 1 conventional or an anti-TNF therapy. In this study, 368 patients were randomized in a double-blind fashion (3:2 randomization) to receive intravenous Entyvio 300 milligrams or placebo at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 6, patients were evaluated after 2 doses for efficacy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>The 2 primary end points were clinical remission and clinical response.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThere was a second initiation of therapy program, Crohn’s Disease Trial II, also known as GEMINI III.1,4 In this study, patients were randomized to receive placebo or Entyvio 300 milligrams in a double-blind fashion (randomized 1:1) at Weeks 0, 2, and 6.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe primary end point for Crohn’s Disease Trial II at Week 6 was clinical remission, evaluated only in the subpopulation of patients who failed at least 1 TNF blocker.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>TNF failure was defined as inadequate response, loss of response, or intolerance to 1 or more TNF blockers.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Secondary end points, including assessment at Week 10, were not statistically tested because the primary end point was not statistically significant.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tGoing back to Crohn's Disease Trial I, let's look at how patients could enter into the 46-week study, Crohn's Disease Trial III.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>If patients achieved at least a 70-point decrease in CDAI score from baseline at Week 6, they then were eligible to be randomized into Crohn's Disease Trial III.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients could have come from either Crohn's Disease Trial I or from a group who received Entyvio open label.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t48% of Entyvio-treated patients from Crohn's Disease Trial I and the open-label cohort qualified for inclusion into the randomized double-blind portion of the maintenance study, where they were assigned (1:1:1) to placebo every 4 weeks, Entyvio 300 milligrams every 4 weeks, or Entyvio 300 milligrams every 8 weeks.<sup>1,2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 52, patients were evaluated for efficacy, with a primary end point of clinical remission.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tHere we see the demographics for Crohn's Disease Trial I. These were patients whose disease was on the moderate to severe end of the spectrum.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t48% of patients had previously failed TNF blockers,<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\twhile the remainder were bio-na&iuml;ve or had failed immunomodulators or corticosteroids.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial II, or GEMINI III, patients were more likely to have failed anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t76% of these patients had previously failed TNF blockers.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\tHighlighted here, you can see the percentage of patients who failed more than 1 anti-TNF therapy.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tNow that we have discussed some of the demographics, let's look at how patients did in terms of achieving remission at Week 6 in the 2 initiation of therapy studies.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt Week 6 in Crohn's Disease Trial I, patients taking Entyvio were more than twice as likely to achieve the primary end point of clinical remission compared to patients taking placebo, with 15% of patients taking Entyvio achieving clinical remission, compared to 7% of patients taking placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial II, clinical remission at Week 6 was the primary end point (15% for Entyvio versus 12% for placebo, which was not statistically significant).<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tNow let's look at what happened to the 48% of patients from Crohn's Disease Trial I and the open-label cohort who qualified for Crohn's Disease Trial III.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt Week 52 in Crohn's Disease Trial III, 39% of patients taking Entyvio achieved the primary end point of clinical remission compared to 22% of placebo patients.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn addition, 44% of Entyvio patients achieved the secondary end point of clinical response at Week 52 compared to 30% of patients on placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tPatients achieving remission while avoiding long-term steroid use is an important clinical goal for us as physicians.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial III, patients taking Entyvio were twice as likely to achieve the secondary end point of corticosteroid-free remission at Week 52 compared to patients taking placebo (32% for Entyvio versus 16% for placebo).<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe've shown here that Entyvio can help patients achieve clinical remission and response, as well as remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I treat patients with moderately to severely active Crohn's disease whose current therapy is not working, I want to consider every therapeutic option in my toolbox.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese results indicate that Entyvio may be an option for appropriate patients with moderately to severely active Crohn's disease who have failed conventional therapies or a biologic.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"\" id=\"video-gallery-desktop\">

\t\t\t\t\t\t\t<div class=\"desktop-video-selector\">
\t\t\t\t\t\t\t\t<div class=\"video-selector active\" data-video-id=\"6221183646001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1062
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1062, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1062, $this->source)), "html", null, true);
        echo "/images/video-posters/video_01_poster.jpg\" alt=\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\" title=\"Click to Watch Entyvio® in Practice: Ulcerative Colitis\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: UC</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221185281001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1071
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1071, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1071, $this->source)), "html", null, true);
        echo "/images/video-posters/video_02_poster.jpg\" alt=\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\" title=\"Click to Watch Entyvio® in Practice: Crohn's Disease\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: CD</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221186163001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1080
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1080, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1080, $this->source)), "html", null, true);
        echo "/images/video-posters/video_03_poster.jpg\" alt=\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\" title=\"Click to Watch Ulcerative Colitis Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: UC</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221186943001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 1089
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1089, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1089, $this->source)), "html", null, true);
        echo "/images/video-posters/video_04_poster.jpg\" alt=\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\" title=\"Click to Watch Crohn's Disease Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: CD</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>


</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/entyviohcp/templates/content/node--peer-perspectives--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1172 => 1089,  1160 => 1080,  1148 => 1071,  1136 => 1062,  884 => 813,  652 => 584,  446 => 381,  211 => 149,  193 => 134,  170 => 114,  166 => 113,  162 => 112,  143 => 96,  139 => 95,  135 => 94,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('entyviohcp/peer-perspectives-styling') }}
<script type=\"application/ld+json\">
\t\t{\"@context\": \"https://schema.org\",
\t\t  \"@type\": \"MedicalWebPage\",
\t\t  \"specialty\": \"https://schema.org/Gastroenterologic\",
\t\t  \"audience\": \"https://schema.org/Clinician\",
\t\t  \"url\": \"https://www.entyviohcp.com/resources/peer-perspective\",
\t\t  \"headline\": \"Peer Perspectives on Entyvio® (vedolizumab)\",
\t\t  \"description\": \"Watch videos from leading experts reviewing the clinical profile of Entyvio®. See Important Safety Information and Prescribing Information.\",

\t\t \"breadcrumb\":[
\t\t\t{\"@type\":\"BreadcrumbList\",
\t\t\t  \"itemListElement\": [{
\t\t\t  \"@type\": \"ListItem\",
\t\t\t  \"position\": \"1\",
\t\t\t  \"name\": \"Home\",
\t\t\t  \"item\": \"https://www.entyviohcp.com\"},
\t\t\t{\"@type\": \"ListItem\",
\t\t\t  \"position\": \"2\",
\t\t\t  \"name\": \"Peer Perspectives\",
\t\t\t  \"item\": \"https://www.entyviohcp.com/resources/peer-perspective\"}]}],

\t\t \"image\": [
\t\t\t{\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_01_poster.jpg\"},
            {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_02_poster.jpg\"},
            {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_03_poster.jpg\"},
             {\"@type\": \"ImageObject\",
\t\t\t\t\"name\":\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\",
\t\t\t\t\"contentUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_04_poster.jpg\"}],

           \"video\": [
            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio in practice: UC\",
            \"description\": \"Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.\",
            \"duration\": \"PT11M12S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221183646001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_01_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio in practice: CD\",
            \"description\": \"Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.\",
            \"duration\": \"PT10M12S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221185281001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_02_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio study design and efficacy: UC\",
            \"description\": \"Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.\",
            \"duration\": \"PT11M28S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221186163001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_03_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"},

            {\"@type\": \"VideoObject\",
            \"name\": \"Entyvio study design and efficacy: CD\",
            \"description\": \"Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.\",
            \"duration\": \"PT11M20S\",
            \"embedUrl\": \"https://players.brightcove.net/2574028764001/SykGTiz2b_default/index.html?videoId=6221186943001\",
            \"thumbnailUrl\": \"https://www.entyviohcp.com/Content/images/video-posters/video_04_poster.jpg\",
            \"uploadDate\": \"2021-10-26\"}],

\t\t  \"about\":
\t\t\t\t[{\"@type\":\"Drug\",
\t\t\t\t\t\"name\":\"ENTYVIO\",
\t\t\t\t\t\"nonProprietaryName\":\"vedolizumab\",
\t\t\t\t\t\"description\":\"Indications: Adult Ulcerative Colitis (UC) - ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC. Adult Crohn's Disease (CD) - ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD. Please see full Prescribing Information, including Medication Guide.\",
                    \"warning\": [\"Important Safety Information.\", \"ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.\", \"Infusion-related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.\", \"Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.\", \"Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.\", \"There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.\", \"Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.\", \"Most common adverse reactions (incidence ≥3% and ≥1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.\"],
\t\t\t\t    \"prescribingInfo\": \"https://general.takedapharm.com/ENTYVIOPI\",
\t\t\t\t    \"dosageForm\": \"infusion\",
\t\t\t\t    \"administrationRoute\": [\"intravenous infusion\",\"IV infusion\"],
                    \"doseSchedule\":
\t\t\t\t\t{\"@type\": \"DoseSchedule\",
\t\t\t\t\t\t\"frequency\": \": 300 mg infused intravenously over approximately 30 minutes at zero, two and six weeks, then every eight weeks thereafter. \"},

\t\t\t\"manufacturer\":
\t\t\t\t\t[{\"@type\": \"Corporation\",
\t\t\t\t\t\t\"name\": \"Takeda\",
\t\t\t\t\t\t\"logo\": \"https://www.entyviohcp.com/Content/images/logos/logo-takeda.svg\"}]}]}
    </script>
<div class=\"page-content resources-content\" data-page-id=\"PeerPerspective\" data-page-category=\"Resources\">
\t<div id=\"skip-to-content\"></div>

\t\t<div id=\"hero\"> <div>

\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-patient.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\">
\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-patient.png\" alt=\"Patient.\">
\t\t\t</picture>
\t\t\t<article>
\t\t\t\t<div>
\t\t\t\t\t<h1>
\t\t\t\t\t\tResources
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<h2>Information<br/>
\t\t\t\t\t\tto Help You<br/>
\t\t\t\t\t\tand Your Patients</h2>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<picture>
\t\t\t\t<source media=\"screen and (max-width: 959px)\" srcset=\"{{ base_path ~ directory }}/images/hero/mobile-resources-stu.png\">
\t\t\t\t<source media=\"screen and (max-width: 9999px) and (min-width: 960px)\" srcset=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\">
\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/hero/desktop-resources-stu.png\" alt=\"Healthcare professional.\">
\t\t\t</picture>


\t\t</div>
\t</div>

\t<div id=\"first_section\">
\t\t<div id=\"indication_bar\" class=\"close\">
\t\t\t<div>
\t\t\t\t<div class=\"section\">
\t\t\t\t\t<h3>For adult patients with moderately to severely active UC or CD when other therapies have not worked well enough or cannot be&nbsp;tolerated.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"body-content\">
\t\t\t<article>
\t\t\t\t<div class=\"title-area\">
\t\t\t\t\t<p class=\"go-back\">
\t\t\t\t\t\t<a href=\"{{ base_path }}resources/professional-resources\" target=\"_self\">Back to Resources list</a>
\t\t\t\t\t</p>
\t\t\t\t\t<h2 class=\"border\">Peer Perspectives</h2>
\t\t\t\t\t<h3>Leading gastroenterologists review the clinical profile of Entyvio and discuss how they use it to treat appropriate patients in their practices.</h3>
\t\t\t\t</div>

\t\t\t\t<div class=\"main-container\">

\t\t\t\t\t<div class=\"video-gallery-container\" id=\"video-gallery\">

\t\t\t\t\t\t<div class=\"gallery-items\" id=\"video-gallery-mobile\">

\t\t\t\t\t\t\t<div class=\"gallery-item active\" data-video-id=\"6221183646001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_01_poster.jpg\" alt=\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\" title=\"Click to Watch Entyvio® in Practice: Ulcerative Colitis\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_01\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221183646001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: UC</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Stephen B. Hanauer, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Northwestern University Medicine</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Brian G. Feagan, MD, MS</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Western University</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adult patients with moderately to severely active UC.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe all have some patients with ulcerative colitis whose disease is not adequately managed on their current therapy. We need to begin looking at alternative therapeutic options for these patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, we look at all available therapeutic options, considering their data, and trying to understand how to best help our patients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>In our practice, we see patients who have failed conventional therapies or anti-TNF agents.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith the addition of Entyvio, which is not an anti-TNF therapy, we now have another biologic option for our patients with moderately to severely active ulcerative colitis.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio's approval for use in patients with moderately to severely active ulcerative colitis who have failed conventional or anti-TNF therapies, provides us guidance for potential candidates who might be appropriate for this therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tClinical trials evaluated the safety of Entyvio in more than 3300 adults, including more than 800 patients who received Entyvio for more than 2 years.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn these patients, Entyvio has been shown to induce and maintain both clinical response and remission, improve endoscopic appearance of the mucosa, and to help patients achieve remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor now, let's focus on those biologic-na&iuml;ve patients who have failed to respond to conventional therapies.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I talk to my patients with moderate to severe ulcerative colitis, I concentrate on understanding their concerns and explaining the disease to them, and the options we have for managing their condition.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI also talk about relevant treatment goals—such as attaining and maintaining clinical remission and achieving clinical remission over time without steroids. I'll also explain that we want to see improvement in the appearance of their mucosa. As supported by the literature, endoscopic improvement of the mucosa is an important goal for us.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe have an open dialogue to talk about many aspects of their disease and the benefits and risks of biologic therapy, which we describe as shared decision-making.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI can think of a patient example who might seem familiar to most of us. Let's say our patient was recently diagnosed with moderate to severe ulcerative colitis. Initially, we might choose to start a patient like this on 40 milligrams of prednisone per day.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tLet's say this patient did not respond to steroids.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAfter confirming the presence of active inflammation, we would consider a biologic therapy for a patient who failed to respond to steroids, which aligns with the recommendations from the American Gastroenterological Association (or AGA) Ulcerative Colitis Care Pathway.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tTogether, the patient and I would review her history, the results of her recent exam, and thoughts on biologic options. In a case like this, based on my assessment and after consulting with this patient and her family, I might decide to recommend Entyvio.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tUsing Entyvio as one of the first biologic options in this type of patient is supported by recent guidance from the American Gastroenterological Association.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe AGA Ulcerative Colitis Care Pathway recommends either Entyvio or an anti-TNF for appropriate ulcerative colitis patients who have failed conventional therapy.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAnother patient I would consider for Entyvio is someone who has not responded to their initial anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tMaybe you have a patient with moderate disease who was quite well-controlled on mesalamine for several years. Let's say he had a relapse, and it became clear that his disease had progressed to moderate to severe.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>For a patient like this, we might choose to start him on 40 milligrams of prednisone daily<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tto induce remission. In the case that the patient responded, but had difficulty tapering off steroids completely, our goal would be to get him into remission without the use of steroids.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt that point, we would talk about what to do next. In a patient like this, we might make the decision to start him on an anti-TNF biologic, such as infliximab, along with azathioprine, to try and combat worsening symptoms and avoid steroids.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tHowever, let's say the patient did not respond to an induction course of infliximab.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe would then talk about other biologic options. For a patient like this, based on his primary non-response to therapy, I might recommend Entyvio.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tUsing Entyvio in patients who have not responded or who have lost response to an anti-TNF biologic is supported by the AGA Care Pathway.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIf Entyvio is an appropriate option for a patient, I explain what Entyvio is, and that it's not an anti-TNF therapy.1 I also describe the benefit and risk profile of Entyvio based on findings from the clinical trials.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio has given us another option for our moderate to severely active ulcerative colitis patients, both those who have failed conventional therapy, and those who have failed anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe have evidence from clinical trials and recommendations from the AGA Care Pathway that Entyvio should be considered for these types of patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, Entyvio, which is not an anti-TNF agent, gives us another biologic option for helping our patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221185281001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_02_poster.jpg\" alt=\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\" title=\"Click to Watch Entyvio® in Practice: Crohn's Disease\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_02\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221185281001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: CD</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Stephen B. Hanauer, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Northwestern University Medicine</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe all have some patients with moderate to severe Crohn’s disease whose illness is not being managed by their current therapy.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs physicians, we look at all available therapeutic options, trying to understand how to best help our patients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>In our practice, we see patients who have failed conventional therapies, or anti-TNF agents.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith the addition of Entyvio, which is not an anti-TNF therapy, we now have another biologic option for our patients with moderately to severely active Crohn's disease.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio's approval for use in patients with moderate to severely active Crohn’s disease who have failed conventional therapies or anti-TNF agents is a good starting point for thinking about appropriate candidates for this treatment.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tClinical trials have evaluated the safety of Entyvio in more than 3300 adults, including more than 800 patients who received Entyvio for more than 2 years.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn these patients, Entyvio has been shown to help achieve clinical response, clinical remission, and remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tSome of our Crohn's disease patients may have reached the point where biologic therapy is an appropriate consideration.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Determining the appropriate time to start treatment with a biologic agent involves assessing a patient's current clinical status, and response to conventional agents.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI also find it helpful to have a conversation with my patients so that they understand our shared treatment goals. We have an open dialogue to talk about many aspects of their disease.
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>This leads us into a process of shared decision-making regarding the potential benefits and risks of biologic therapy.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tHere's an example of a patient who might seem familiar to most of us. Let's say that he was diagnosed with moderate to severe Crohn's disease 6 months ago. Initially, we might have chosen to start a patient like this on 40 milligrams per day of prednisone and an immunomodulator such as 6-MP.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t\tLet's assume that, despite an initial response, he was unable to taper off steroids without a recurrence of symptoms.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tTogether, this patient and I would review his history, the results of his recent exam, and his thoughts on biologic options. In this case, based on my assessment and after consulting with this patient and his family, I might decide to recommend Entyvio.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAnother patient who might be appropriate for Entyvio is someone who did not respond to their initial anti-TNF therapy, such as a patient who began treatment with corticosteroids, but was unable to taper despite the addition of azathioprine.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt this point, we might make the decision to start therapy with an anti-TNF biologic, such as adalimumab.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tLet's say our patient had an inadequate response to adalimumab therapy, so we would need to look at other options.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tBased on the patient's history, inadequate response to an anti-TNF therapy, and my clinical judgment, I might consider Entyvio as an option for this patient.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tPatient identification and shared decision-making play an important role in the care we provide as physicians. It’s all about finding the appropriate treatment for each patient at the appropriate time.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>And the details matter.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tEntyvio has given us another option for our patients with moderately to severely active Crohn's disease, both those who have failed conventional therapy, and those who have had an inadequate response or loss of response to at least one anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Hanauer]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor both patients and clinicians, it's important to consider all aspects of the disease as well as therapy as we work together towards the long-term management of patients with Crohn's disease.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Entyvio is not an anti-TNF therapy. It provides another option for disease management in patients who have not responded to either conventional therapies or anti-TNF biologics.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221186163001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_03_poster.jpg\" alt=\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\" title=\"Click to Watch Ulcerative Colitis Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_03\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186163001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: UC</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Remo Panaccione, MD</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>University of Calgary</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I’m treating patients who have moderate to severely active ulcerative colitis, there are several important treatment goals to keep in mind.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFirst and foremost for my patients, I want to induce clinical response and remission.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tOnce we achieve this first goal, we want to help them manage their condition and maintain remission. Ideally this is done without a prolonged course of steroids.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAlthough these are both important goals, we also want to ensure that we are managing the disease by using objective measures such as observing improvement in the appearance of the mucosa.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese are some of my considerations when I’m thinking about what therapies might be appropriate. Recent literature suggests that an endoscopic improvement of the mucosa, defined as a Mayo endoscopic subscore of 0 to 1, is one of the appropriate therapeutic targets for ulcerative colitis.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of moderately to severely active ulcerative colitis sheds some light on how Entyvio may be relevant to your clinical practice and treatment goals for your patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe safety and efficacy of Entyvio for the treatment of ulcerative colitis was investigated in the GEMINI I study program, which consisted of 2 clinical trials, a 6-week induction study known as UC Trial I and a 46-week maintenance study known as UC Trial II.<sup>1,2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn the overall population of these trials, approximately 50% of the patients were naïve to anti-TNF therapy, while the remaining 50% had either been exposed to or failed anti-TNF therapy.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tFor UC Trial I, patients who had failed at least 1 conventional or an anti-TNF therapy were randomized in a double-blind fashion (3:2) to either IV Entyvio 300 milligrams or placebo at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients were evaluated for response after 2 doses of Entyvio.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 6, if they achieved the primary outcome of clinical response, then they were eligible to enter UC Trial II.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\tPatients also could have come from an open-label cohort that received 300 milligrams of Entyvio at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial II, patients were randomized in a double-blind fashion (1:1:1) to placebo every 4 weeks, Entyvio 300 milligrams every 4 weeks, or Entyvio 300 milligrams every 8 weeks, for an additional 46 weeks.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Efficacy was evaluated at Week 52.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>The primary end point was clinical remission.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith these demographics in mind, as previously mentioned, let’s look at how patients did in terms of achieving response at Week 6 and remission at Week 52 in the induction and maintenance studies, respectively.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe results of these studies showed that Entyvio may offer rapid and lasting efficacy in patients with moderate to severe ulcerative colitis.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial I, 47% of patients randomized to Entyvio achieved the primary end point of clinical response at Week 6, compared to 26% of patients on placebo. Recall that patients had received 2 doses of Entyvio at this point.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn UC Trial II, 42% of patients randomized to Entyvio achieved the primary end point of clinical remission at Week 52, compared to 16% of patients on placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs I mentioned, in addition to evaluating whether my patients have achieved response or remission, I think it’s important to assess their disease activity using endoscopy.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tImprovement in endoscopic appearance of the mucosa, defined as a Mayo endoscopy subscore of 0 or 1, was a secondary end point in the UC trials.1,2 At Week 6, 41% of patients receiving Entyvio demonstrated improvement in endoscopic appearance of the mucosa, while only 25% of patients receiving placebo saw this improvement.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 52, 52% of Entyvio patients demonstrated improvement in the endoscopic appearance of the mucosa, while only 20% of placebo patients saw this improvement.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAs I discussed earlier, patients achieving remission without long-term steroids is an important consideration for me.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWith Entyvio, we have data on this: in a secondary end point from UC Trial II, 31% of patients on Entyvio achieved corticosteroid-free remission versus 14% of those on placebo at Week 52.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tMy goal is to get my patients to respond to therapy and to keep them in remission over time. I also want to see evidence of mucosal improvement. In addition, it’s really important to achieve remission without the use of long-term steroids.<sup>3</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tSo the GEMINI I trial using Entyvio for the treatment of moderately to severely active ulcerative colitis demonstrated that Entyvio: 1) helps induce and maintain remission, 2) helps patients achieve remission without steroids, and 3) can improve the appearance of the mucosa.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tI want to consider every appropriate therapeutic option when I treat patients whose current therapy is not working.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Panaccione]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese results suggest that Entyvio may be appropriate for patients with moderately to severely active ulcerative colitis who have failed conventional therapies or a biologic.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>As physicians, Entyvio gives us another therapeutic option for helping our patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"gallery-item\" data-video-id=\"6221186943001\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"poster-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_04_poster.jpg\" alt=\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\" title=\"Click to Watch Crohn's Disease Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<video id=\"video_04\" class=\"video-js\" data-account=\"6221183646001\" data-player=\"SykGTiz2b\" data-embed=\"default\" controls=\"\" data-video-id=\"6221186943001\" data-video-title=\"Patient MOA\" data-playlist-id=\"\" data-application-id=\"\"></video>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: CD</p>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-synopsis\">
\t\t\t\t\t\t\t\t\t\t<span></span>More Info</p>
\t\t\t\t\t\t\t\t\t<div class=\"synopsis\">
\t\t\t\t\t\t\t\t\t\t<p>Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"doctors\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Brian G. Feagan, MD, MS</strong><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<em>Western University</em>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"toggle-transcript\">
\t\t\t\t\t\t\t\t\t\t<span></span>Transcript</p>
\t\t\t\t\t\t\t\t\t<div class=\"transcript\">
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indication</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please listen for additional Important Safety Information during the video.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I have patients with moderate to severe Crohn's disease, I want to help them achieve clinical response, clinical remission, and long-term remission without steroids.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese are some of my considerations when I’m thinking about which therapies might be appropriate.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of moderately to severely active Crohn’s disease sheds some light on how Entyvio may be relevant to your clinical practice and treatment goals for your patients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe GEMINI II and III clinical programs evaluated the use of Entyvio in patients with moderately to severely active Crohn’s disease.1 GEMINI II included an initiation of therapy study followed by a long-term study of 46 weeks, while GEMINI III was only an initiation of therapy study.<sup>1,2,4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tCD Trial I, part of the GEMINI II study, was an initiation of therapy study in which patients had failed at least 1 conventional or an anti-TNF therapy. In this study, 368 patients were randomized in a double-blind fashion (3:2 randomization) to receive intravenous Entyvio 300 milligrams or placebo at Weeks 0 and 2.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 6, patients were evaluated after 2 doses for efficacy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>The 2 primary end points were clinical remission and clinical response.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThere was a second initiation of therapy program, Crohn’s Disease Trial II, also known as GEMINI III.1,4 In this study, patients were randomized to receive placebo or Entyvio 300 milligrams in a double-blind fashion (randomized 1:1) at Weeks 0, 2, and 6.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThe primary end point for Crohn’s Disease Trial II at Week 6 was clinical remission, evaluated only in the subpopulation of patients who failed at least 1 TNF blocker.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>TNF failure was defined as inadequate response, loss of response, or intolerance to 1 or more TNF blockers.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Secondary end points, including assessment at Week 10, were not statistically tested because the primary end point was not statistically significant.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tGoing back to Crohn's Disease Trial I, let's look at how patients could enter into the 46-week study, Crohn's Disease Trial III.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>If patients achieved at least a 70-point decrease in CDAI score from baseline at Week 6, they then were eligible to be randomized into Crohn's Disease Trial III.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients could have come from either Crohn's Disease Trial I or from a group who received Entyvio open label.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t48% of Entyvio-treated patients from Crohn's Disease Trial I and the open-label cohort qualified for inclusion into the randomized double-blind portion of the maintenance study, where they were assigned (1:1:1) to placebo every 4 weeks, Entyvio 300 milligrams every 4 weeks, or Entyvio 300 milligrams every 8 weeks.<sup>1,2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>At Week 52, patients were evaluated for efficacy, with a primary end point of clinical remission.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tHere we see the demographics for Crohn's Disease Trial I. These were patients whose disease was on the moderate to severe end of the spectrum.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t48% of patients had previously failed TNF blockers,<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\twhile the remainder were bio-na&iuml;ve or had failed immunomodulators or corticosteroids.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial II, or GEMINI III, patients were more likely to have failed anti-TNF therapy.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\t76% of these patients had previously failed TNF blockers.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t\tHighlighted here, you can see the percentage of patients who failed more than 1 anti-TNF therapy.<sup>4</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tNow that we have discussed some of the demographics, let's look at how patients did in terms of achieving remission at Week 6 in the 2 initiation of therapy studies.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt Week 6 in Crohn's Disease Trial I, patients taking Entyvio were more than twice as likely to achieve the primary end point of clinical remission compared to patients taking placebo, with 15% of patients taking Entyvio achieving clinical remission, compared to 7% of patients taking placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial II, clinical remission at Week 6 was the primary end point (15% for Entyvio versus 12% for placebo, which was not statistically significant).<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tNow let's look at what happened to the 48% of patients from Crohn's Disease Trial I and the open-label cohort who qualified for Crohn's Disease Trial III.<sup>2</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tAt Week 52 in Crohn's Disease Trial III, 39% of patients taking Entyvio achieved the primary end point of clinical remission compared to 22% of placebo patients.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn addition, 44% of Entyvio patients achieved the secondary end point of clinical response at Week 52 compared to 30% of patients on placebo.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tPatients achieving remission while avoiding long-term steroid use is an important clinical goal for us as physicians.<sup>5</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tIn Crohn's Disease Trial III, patients taking Entyvio were twice as likely to achieve the secondary end point of corticosteroid-free remission at Week 52 compared to patients taking placebo (32% for Entyvio versus 16% for placebo).<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWe've shown here that Entyvio can help patients achieve clinical remission and response, as well as remission without steroids.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tWhen I treat patients with moderately to severely active Crohn's disease whose current therapy is not working, I want to consider every therapeutic option in my toolbox.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Dr. Feagan]</strong>
\t\t\t\t\t\t\t\t\t\t\t\tThese results indicate that Entyvio may be an option for appropriate patients with moderately to severely active Crohn's disease who have failed conventional therapies or a biologic.<sup>1</sup>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Indications</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Ulcerative Colitis (UC)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active UC.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Adult Crohn's Disease (CD)</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) is indicated in adults for the treatment of moderately to severely active CD.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Important Safety Information</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<p>ENTYVIO (vedolizumab) for injection is contraindicated in patients who have had a known serious or severe hypersensitivity reaction to ENTYVIO or any of its excipients.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Infusion‐related reactions and hypersensitivity reactions including anaphylaxis, dyspnea, bronchospasm, urticaria, flushing, rash, and increased blood pressure and heart rate have been reported. have occurred. These reactions may occur with the first or subsequent infusions and may vary in their time of onset from during infusion or up to several hours post-infusion. If anaphylaxis or other serious infusion-related or hypersensitivity reactions occur, discontinue administration of ENTYVIO immediately and initiate appropriate treatment.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Patients treated with ENTYVIO are at increased risk for developing infections. Serious infections have been reported in patients treated with ENTYVIO, including anal abscess, sepsis (some fatal), tuberculosis, salmonella sepsis, Listeria meningitis, giardiasis, and cytomegaloviral colitis. ENTYVIO is not recommended in patients with active, severe infections until the infections are controlled. Consider withholding ENTYVIO in patients who develop a severe infection while on treatment with ENTYVIO. Exercise caution in patients with a history of recurring severe infections. Consider screening for tuberculosis (TB) according to the local practice.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Progressive multifocal leukoencephalopathy (PML), a rare and often fatal opportunistic infection of the central nervous system (CNS), has been reported with systemic immunosuppressants, including another integrin receptor antagonist. PML is caused by the John Cunningham (JC) virus and typically only occurs in patients who are immunocompromised. One case of PML in an ENTYVIO-treated patient with multiple contributory factors has been reported in the post marketing setting (e.g., human immunodeficiency virus [HIV] infection with a CD4 count of 300 cells/mm3 and prior and concomitant immunosuppression). Although unlikely, a risk of PML cannot be ruled out. Monitor patients for any new or worsening neurological signs or symptoms. Typical signs and symptoms associated with PML are diverse, progress over days to weeks, and include progressive weakness on one side of the body or clumsiness of limbs, disturbance of vision, and changes in thinking, memory, and orientation leading to confusion and personality changes. If PML is suspected, withhold dosing with ENTYVIO and refer to a neurologist; if confirmed, discontinue ENTYVIO dosing permanently.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>There have been reports of elevations of transaminase and/or bilirubin in patients receiving ENTYVIO. ENTYVIO should be discontinued in patients with jaundice or other evidence of significant liver injury.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Prior to initiating treatment with ENTYVIO, all patients should be brought up to date with all immunizations according to current immunization guidelines. Patients receiving ENTYVIO may receive non-live vaccines and may receive live vaccines if the benefits outweigh the risks.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>Most common adverse reactions (incidence greater than or equal to 3% and greater than or equal to 1% higher than placebo): nasopharyngitis, headache, arthralgia, nausea, pyrexia, upper respiratory tract infection, fatigue, cough, bronchitis, influenza, back pain, rash, pruritus, sinusitis, oropharyngeal pain, and pain in extremities.</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Please see accompanying full Prescribing Information, including Medication Guide.</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>[Music]</strong>
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"\" id=\"video-gallery-desktop\">

\t\t\t\t\t\t\t<div class=\"desktop-video-selector\">
\t\t\t\t\t\t\t\t<div class=\"video-selector active\" data-video-id=\"6221183646001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_01_poster.jpg\" alt=\"Video of Doctors Hanauer and Feagan talking about integrating Entyvio® into clinical practice for ulcerative colitis.\" title=\"Click to Watch Entyvio® in Practice: Ulcerative Colitis\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: UC</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Hanauer and Dr. Feagan discuss Entyvio as an option for their patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221185281001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_02_poster.jpg\" alt=\"Video of Dr. Hanauer discussing integrating Entyvio® into clinical practice for Crohn's disease.\" title=\"Click to Watch Entyvio® in Practice: Crohn's Disease\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio in practice: CD</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Hanauer discusses Entyvio as an option for his patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221186163001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_03_poster.jpg\" alt=\"Video of Dr. Panaccione discussing ulcerative colitis study design and efficacy data.\" title=\"Click to Watch Ulcerative Colitis Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: UC</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Panaccione discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active ulcerative colitis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"video-selector\" data-video-id=\"6221186943001\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ base_path ~ directory }}/images/video-posters/video_04_poster.jpg\" alt=\"Dr. Feagan discusses Crohn's disease study design and efficacy data.\" title=\"Click to Watch Crohn's Disease Study Video\" class=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item-title\">Entyvio study design and efficacy: CD</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item-synopsis\">Dr. Feagan discusses the clinical trial program that evaluated the safety and efficacy of Entyvio for the treatment of patients with moderately to severely active Crohn's disease.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</div>


</div>

", "themes/custom/entyviohcp/templates/content/node--peer-perspectives--full.html.twig", "C:\\xampp\\htdocs\\entyviohcp-drupal\\themes\\custom\\entyviohcp\\templates\\content\\node--peer-perspectives--full.html.twig");
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
