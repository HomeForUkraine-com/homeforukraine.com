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

/* profiles/openlucius/themes/ol_base/templates/misc/pager.html.twig */
class __TwigTemplate_80b71593845ef523bcdc16ae86d054824d81e9d5c6c6e06b69ac10113cfd08b1 extends \Twig\Template
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  <div class=\"container\" id=\"pager-container\">
    <div class=\"row\">
      <div class=\"col text-center\">
        <nav class=\"pager mb-5\" role=\"navigation\" aria-labelledby=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 37, $this->source), "html", null, true);
            echo "\">
          <ul class=\"pager__items js-pager__items\">
            ";
            // line 40
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 40)) {
                // line 41
                echo "              <li class=\"pager__item pager__item--first\">
                <a href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), 42, $this->source), "href", "title"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
                  <span aria-hidden=\"true\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", true, true, true, 44)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", false, false, true, 44), 44, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
                </a>
              </li>
            ";
            }
            // line 48
            echo "            ";
            // line 49
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 49)) {
                // line 50
                echo "              <li class=\"pager__item pager__item--previous\">
                <a href=\"";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51), "href", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51), "attributes", [], "any", false, false, true, 51), 51, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
                echo "</span>
                  <span aria-hidden=\"true\">";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 53), "text", [], "any", true, true, true, 53)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 53), "text", [], "any", false, false, true, 53), 53, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
                </a>
              </li>
            ";
            }
            // line 57
            echo "            ";
            // line 58
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 58)) {
                // line 59
                echo "              <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
            ";
            }
            // line 61
            echo "            ";
            // line 62
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 62));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 63
                echo "              <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
                ";
                // line 64
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 65
                    echo "                  ";
                    $context["title"] = t("Current");
                    // line 66
                    echo "                ";
                } else {
                    // line 67
                    echo "                  ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 68
                    echo "                ";
                }
                // line 69
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 69, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), 69, $this->source), "href", "title"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">
                    ";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
                  </span>";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 73, $this->source), "html", null, true);
                // line 74
                echo "</a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            ";
            // line 78
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 78)) {
                // line 79
                echo "              <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
            ";
            }
            // line 81
            echo "            ";
            // line 82
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 82)) {
                // line 83
                echo "              <li class=\"pager__item pager__item--next\">
                <a href=\"";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 84), "href", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 84), "attributes", [], "any", false, false, true, 84), 84, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
                  <span aria-hidden=\"true\">";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 86), "text", [], "any", true, true, true, 86)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 86), "text", [], "any", false, false, true, 86), 86, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
                </a>
              </li>
            ";
            }
            // line 90
            echo "            ";
            // line 91
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 91)) {
                // line 92
                echo "              <li class=\"pager__item pager__item--last\">
                <a href=\"";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 93), "href", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 93), "attributes", [], "any", false, false, true, 93), 93, $this->source), "href", "title"), "html", null, true);
                echo ">
                  <span class=\"visually-hidden\">";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
                  <span aria-hidden=\"true\">";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 95), "text", [], "any", true, true, true, 95)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 95), "text", [], "any", false, false, true, 95), 95, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
                </a>
              </li>
            ";
            }
            // line 99
            echo "          </ul>
        </nav>
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "search_form", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/themes/ol_base/templates/misc/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 101,  225 => 99,  218 => 95,  214 => 94,  206 => 93,  203 => 92,  200 => 91,  198 => 90,  191 => 86,  187 => 85,  179 => 84,  176 => 83,  173 => 82,  171 => 81,  167 => 79,  164 => 78,  162 => 77,  154 => 74,  152 => 73,  148 => 71,  138 => 69,  135 => 68,  132 => 67,  129 => 66,  126 => 65,  124 => 64,  119 => 63,  114 => 62,  112 => 61,  108 => 59,  105 => 58,  103 => 57,  96 => 53,  92 => 52,  84 => 51,  81 => 50,  78 => 49,  76 => 48,  69 => 44,  65 => 43,  57 => 42,  54 => 41,  51 => 40,  46 => 37,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/themes/ol_base/templates/misc/pager.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/themes/ol_base/templates/misc/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "for" => 62, "set" => 65);
        static $filters = array("escape" => 37, "t" => 42, "without" => 42, "default" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'default'],
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
