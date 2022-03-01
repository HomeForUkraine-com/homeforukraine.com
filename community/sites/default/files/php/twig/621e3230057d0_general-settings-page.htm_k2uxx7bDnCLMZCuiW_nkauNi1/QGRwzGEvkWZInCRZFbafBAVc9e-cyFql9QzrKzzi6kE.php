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

/* profiles/openlucius/modules/core/ol_main/templates/general-settings-page.html.twig */
class __TwigTemplate_0cd9c5e927f9151a044cb8389fea3fdfd50e11633f5564da853a91a7bb330968 extends \Twig\Template
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
        echo "<div class=\"col-md-12 col-xl-11 pl-md-5 bd-content mb-5\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 5
        echo "      <div class=\"col-lg-3 mb-3\">
        <div class=\"nav flex-column nav-pills mb-3\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "config_tabs", [], "any", false, false, true, 7), "tabs", [], "any", false, false, true, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 8
            echo "            ";
            // line 9
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "url", [], "any", false, false, true, 9) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "config_tabs", [], "any", false, false, true, 9), "current_url", [], "any", false, false, true, 9))) {
                // line 10
                echo "              ";
                $context["active"] = "active";
                // line 11
                echo "            ";
            }
            // line 12
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" class=\"nav-item nav-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 12, $this->source), "html", null, true);
            echo "\">
              <i class=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo " mr-2\"></i>
              ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "label", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
            </a>
            ";
            // line 16
            $context["active"] = "";
            // line 17
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
      </div>
      <div class=\"col-lg-9 p-3 card shadow-sm mb-4 p-5\">
          ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "tab_content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/core/ol_main/templates/general-settings-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  87 => 18,  81 => 17,  79 => 16,  74 => 14,  70 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  52 => 8,  48 => 7,  44 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/core/ol_main/templates/general-settings-page.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/core/ol_main/templates/general-settings-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 9, "set" => 10);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
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
