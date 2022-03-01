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

/* profiles/openlucius/modules/apps/ol_stories/templates/stories-list.html.twig */
class __TwigTemplate_37c2b4dd27508cfe53284be9bc6958c0cf26009f9391fb51f037691e70f772e5 extends \Twig\Template
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
        echo "<div class=\"container-fluid p-0 story-container\">
<div class=\"story-scroller\">
    <div class=\"story-nav mt-2 ml-md-3 ml-lg-5 mt-md-4 mt-0 mb-0\">
      <div class=\"ml-3 mr-3 pr-3 text-center border-right\">
        <a data-toggle=\"modal\" data-target=\"#addStoryModal\" href=\"#\" >
          <figure>
            <img src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "current_user_picture", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" height=\"50\" alt=\"story image\" class=\"rounded-circle border-light img-thumbnail\" />
            <figcaption><span class=\"small\"> <i class=\"lni lni-plus\"></i> ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add Story"));
        echo "</span></figcaption>
          </figure>
        </a>
      </div>
        ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "stories", [], "any", false, false, true, 12), 12, $this->source));
        echo "
  </div>
</div>

<!-- Modal add story -->
<div class=\"modal fade bd-example-modal-lg\" id=\"addStoryModal\" role=\"dialog\" aria-labelledby=\"addStoryModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\"><i class=\"lni lni-plus\"></i> ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Add Story");
        echo " </h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "story_form", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>
<!-- / Modal add story  -->

<!-- Modal show story-->
";
        // line 34
        echo "<div class=\"modal fade\" id=\"showStory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"showStory\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"story_body mb-2\"></div>
        <img id=\"story_image_url\" src=\"\" class=\"img-fluid\" alt=\"\" />
      </div>
    </div>
  </div>
</div>
<!-- / Modal remove file from folder  -->

<!-- Modal remove story -->
";
        // line 53
        echo "<div class=\"modal fade\" id=\"removeStory\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"removeFile\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\"><i class=\"fas fa-exclamation-triangle\"></i> ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Remove Story"));
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You are about to remove your story. Are you sure?"));
        echo "</p>
      </div>
      <div class=\"modal-footer\">
        ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "delete_story_form", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>
<!-- / Modal remove file from folder  -->
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/apps/ol_stories/templates/stories-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 66,  123 => 63,  114 => 57,  108 => 53,  88 => 34,  78 => 26,  70 => 21,  58 => 12,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/apps/ol_stories/templates/stories-list.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/apps/ol_stories/templates/stories-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7, "t" => 8, "raw" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't', 'raw'],
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
