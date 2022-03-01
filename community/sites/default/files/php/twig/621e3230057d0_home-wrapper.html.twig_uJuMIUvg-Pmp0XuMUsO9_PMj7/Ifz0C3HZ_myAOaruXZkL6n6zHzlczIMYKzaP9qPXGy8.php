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

/* profiles/openlucius/modules/core/ol_main/templates/home-wrapper.html.twig */
class __TwigTemplate_6a668a82aef7254f313addb62b5d32b573e0eb5a3218620841f65831efb594ef extends \Twig\Template
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
        echo "<div class=\"container\">
  <div class=\"row\">
    ";
        // line 4
        echo "    <div class=\"col-lg-2 mb-1 p-0 m-2 m-md-0\">
      <div class=\"nav flex-column nav-pills mb-md-3 mb-1\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "tabs", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "query_link", [], "any", false, false, true, 7) == twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "active_tab", [], "any", false, false, true, 7))) {
                // line 8
                echo "            ";
                $context["active"] = "active";
                // line 9
                echo "          ";
            }
            // line 10
            echo "          <a href=\"?tab=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "query_link", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" class=\"nav-item nav-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 10, $this->source), "html", null, true);
            echo "\">
            <i class=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo " mr-2\"></i>
            ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
          </a>
          ";
            // line 14
            $context["active"] = "";
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </div>
    </div>
    ";
        // line 19
        echo "    <div class=\"col-lg-7 pl-md-3 bd-content mb-5\">
        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "tab_content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 23
        echo "    <div class=\"col-lg-3 bd-content mb-5\">
      <div class=\"card shadow-sm\">
        <div class=\"py-2 border-bottom\">
          <span class=\"pl-3 pt-2 text-muted font-weight-lighter\"> ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Groups"));
        echo "</span>
        </div>
        <div class=\"list-group list-group-flush\">
          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "groups", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 30
            echo "            ";
            // line 31
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "non_chat_count", [], "any", false, false, true, 31) || twig_get_attribute($this->env, $this->source, $context["group"], "chat_count", [], "any", false, false, true, 31))) {
                // line 32
                echo "              ";
                $context["active_class"] = "font-weight-bold";
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "              ";
                $context["active_class"] = "text-muted";
                // line 35
                echo "            ";
            }
            // line 36
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source), "html", null, true);
            echo "group/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "landing", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\"
               class=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null), 37, $this->source), "html", null, true);
            echo " small py-2 list-group-item d-flex justify-content-between align-items-center list-group-item-action\">
              ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, true, 38), 38, $this->source));
            echo "
              ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["group"], "non_chat_count", [], "any", false, false, true, 39)) {
                // line 40
                echo "                <span class=\"badge badge-danger badge-pill\"> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "non_chat_count", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</span>
              ";
            }
            // line 42
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["group"], "chat_count", [], "any", false, false, true, 42)) {
                // line 43
                echo "                <span class=\"badge badge-primary badge-pill\"><i class=\"lni lni-comments\"></i> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "chat_count", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</span>
              ";
            }
            // line 45
            echo "              <span class=\"badge badge-light text-muted badge-pill\"><i class=\"lni lni-user\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "user_count", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
            </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_main.group_archived"));
        echo "\" class=\"text-muted small py-2 list-group-item d-flex justify-content-between align-items-center list-group-item-action\">
           <span> <i class=\"lni lni-archive\"></i> ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Archived Groups"));
        echo "</span>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/core/ol_main/templates/home-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  172 => 48,  162 => 45,  156 => 43,  153 => 42,  147 => 40,  145 => 39,  141 => 38,  137 => 37,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  111 => 30,  107 => 29,  101 => 26,  96 => 23,  91 => 20,  88 => 19,  84 => 16,  78 => 15,  76 => 14,  71 => 12,  67 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  47 => 6,  43 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/core/ol_main/templates/home-wrapper.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/core/ol_main/templates/home-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 7, "set" => 8);
        static $filters = array("escape" => 10, "t" => 26, "raw" => 38);
        static $functions = array("url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 't', 'raw'],
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
