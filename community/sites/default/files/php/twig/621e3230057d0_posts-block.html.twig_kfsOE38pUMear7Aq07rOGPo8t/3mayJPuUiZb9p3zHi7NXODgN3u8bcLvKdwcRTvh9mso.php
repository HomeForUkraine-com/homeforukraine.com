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

/* profiles/openlucius/modules/apps/ol_posts/templates/posts-block.html.twig */
class __TwigTemplate_c177a9b0110c373a72251a37553f188df9a5e25e369fbd37ca0de724a5bb9548 extends \Twig\Template
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
        echo "<div>
  <!-- Posts-->
  <div class=\"posts-list-wrapper\">
    <div class=\"card mb-2 py-2 px-3\">
      <div class=\"row\">
        <div class=\"col-sm-9 pl-md-4 text-center text-md-left pb-2 pb-md-0\">
          <span class=\"text-muted font-weight-light small\"><i class=\"lni lni-invention\"></i> <i>
            ";
        // line 8
        $context["username"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "displayname", [], "any", false, false, true, 8), 8, $this->source)) > 30)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "displayname", [], "any", false, false, true, 8), 8, $this->source), 0, 30) . "...")) : (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "displayname", [], "any", false, false, true, 8)));
        // line 9
        echo "              ";
        echo t("Hi @username, what's happening?", array("@username" =>         // line 10
($context["username"] ?? null), ));
        // line 12
        echo "            </i></span>
        </div>
        <div class=\"col-sm-3 pb-1 pb-md-0 text-center text-md-right\">
          <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addPostModal\">
            <i class=\"lni lni-plus\"></i> ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add Post"));
        echo "
          </button>
        </div>
      </div>
    </div>
    ";
        // line 21
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "posts", [], "any", false, false, true, 21))) {
            // line 22
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "posts", [], "any", false, false, true, 22), 22, $this->source));
            echo "
    ";
        } else {
            // line 24
            echo "      <div class=\"card ol-card\">
        <div class=\"card-header\">
          <p class=\"text-muted small m-3\">
            <i class=\"lni lni-invention\"></i> <i> ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Be the first to add a post."));
            echo "</i><br />
          </p>
        </div>
      </div>
    ";
        }
        // line 32
        echo "  </div>
</div>

<!-- Modal add post -->
<div class=\"modal fade bd-example-modal-lg\" id=\"addPostModal\" role=\"dialog\" aria-labelledby=\"addPostModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\"><i class=\"lni lni-plus\"></i> ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Post"));
        echo " </h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "post_form", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>
<!-- / Modal add post  -->
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/apps/ol_posts/templates/posts-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  99 => 40,  89 => 32,  81 => 27,  76 => 24,  70 => 22,  68 => 21,  60 => 16,  54 => 12,  52 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/apps/ol_posts/templates/posts-block.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/apps/ol_posts/templates/posts-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 9, "if" => 21);
        static $filters = array("length" => 8, "slice" => 8, "escape" => 10, "t" => 16, "raw" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['length', 'slice', 'escape', 't', 'raw'],
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
