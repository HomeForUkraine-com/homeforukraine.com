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

/* profiles/openlucius/modules/core/ol_main/templates/main-title-block.html.twig */
class __TwigTemplate_4475835a235147ebf1686e5267b4996d1341c9f90c8657ac9dac6c9f8aa87b16 extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-white py-1\" id=\"title-container\">
  <div class=\"row\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_id", [], "any", false, false, true, 3)) {
            // line 4
            echo "      <div class=\"col pl-md-0 pl-3\">
    ";
        } else {
            // line 6
            echo "      <div class=\"col pl-0 text-center pb-2\">
    ";
        }
        // line 8
        echo "      <h1 class=\"h4 pl-3 pt-3 main-heading\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_image_url", [], "any", false, false, true, 9)) {
            // line 10
            echo "        <img style=\"height: 40px;\" class=\"img-thumbnail small\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_image_url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" alt=\"group image\" />
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 11
($context["vars"] ?? null), "title_icon", [], "any", false, false, true, 11)) {
            // line 12
            echo "          <i class=\"lni lni-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "title_icon", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo " text-muted\"></i>
        ";
        }
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_id", [], "any", false, false, true, 15)) {
            // line 16
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 17
($context["vars"] ?? null), "title", [], "any", false, false, true, 17)) {
            // line 18
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "title", [], "any", false, false, true, 18), 18, $this->source)));
            echo "
        ";
        }
        // line 20
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_id", [], "any", false, false, true, 20) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "is_group_admin", [], "any", false, false, true, 20)))) {
            // line 21
            echo "          <span class=\"dropdown\">
            <button class=\"btn btn-link\" type=\"button\" id=\"ol-drop2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
              <i class=\"lni lni-line-dotted\"></i>
            </button>
            <span class=\"dropdown-menu\" aria-labelledby=\"ol-drop2\" >
              <a class=\"dropdown-item\" href=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_main.group_settings", ["gid" => twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "group_id", [], "any", false, false, true, 26)]), "html", null, true);
            echo "\"><i class=\"lni lni-cog\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Settings"));
            echo " </a>
            </span>
          </span>
        ";
        }
        // line 30
        echo "      </h1>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/core/ol_main/templates/main-title-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  99 => 26,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  76 => 16,  73 => 15,  71 => 14,  65 => 12,  63 => 11,  58 => 10,  56 => 9,  53 => 8,  49 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/core/ol_main/templates/main-title-block.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/core/ol_main/templates/main-title-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 10, "t" => 18);
        static $functions = array("url" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
