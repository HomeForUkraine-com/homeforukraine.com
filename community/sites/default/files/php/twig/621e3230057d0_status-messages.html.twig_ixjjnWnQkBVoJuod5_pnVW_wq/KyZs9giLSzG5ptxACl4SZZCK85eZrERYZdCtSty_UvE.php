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

/* profiles/openlucius/themes/ol_base/templates/misc/status-messages.html.twig */
class __TwigTemplate_82a07b5f946bf22b8a3830024d924002cf1a6a4b93a85431ff1bdfe6b255f1cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "  <div aria-live=\"polite\" aria-atomic=\"true\" style=\"position: relative; z-index: 100;\">
      <div style=\"position: absolute; top: 0; right: 0;\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "          ";
            // line 28
            $context["classes"] = [0 => (((            // line 29
$context["type"] == "error")) ? ("bg-danger") : ("")), 1 => (((            // line 30
$context["type"] == "status")) ? ("bg-success") : ("")), 2 => (((            // line 31
$context["type"] == "warning")) ? ("bg-warning") : ("")), 3 => "toast-header text-white"];
            // line 35
            echo "          ";
            if (($context["type"] == "status")) {
                // line 36
                echo "            ";
                $context["type"] = t("success");
                // line 37
                echo "          ";
            }
            // line 38
            echo "          ";
            if (($context["type"] == "warning")) {
                // line 39
                echo "            ";
                $context["type"] = t("notice");
                // line 40
                echo "          ";
            }
            // line 41
            echo "          <div class=\"toast mr-4 mt-3\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"4000\" data-autohide=\"false\">
            <div ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
              <strong class=\"mr-auto\">
                ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"], 44, $this->source), "html", null, true);
            echo "
              </strong>
              <small>";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("just now"));
            echo "</small>
              <button type=\"button\" class=\"ml-2 mb-1 close text-white\" data-dismiss=\"toast\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"toast-body\">
              ";
            // line 52
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 53
                echo "                <ul class=\"messages__list\">
                  ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 55
                    echo "                    <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 55, $this->source), "html", null, true);
                    echo "</li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                </ul>
              ";
            } else {
                // line 59
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 59, $this->source)), "html", null, true);
                echo "
              ";
            }
            // line 61
            echo "            </div>
          </div>
          ";
            // line 63
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 63);
            // line 64
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/themes/ol_base/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  139 => 64,  137 => 63,  133 => 61,  127 => 59,  123 => 57,  114 => 55,  110 => 54,  107 => 53,  105 => 52,  96 => 46,  91 => 44,  86 => 42,  83 => 41,  80 => 40,  77 => 39,  74 => 38,  71 => 37,  68 => 36,  65 => 35,  63 => 31,  62 => 30,  61 => 29,  60 => 28,  58 => 27,  54 => 26,  50 => 24,  43 => 23,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/themes/ol_base/templates/misc/status-messages.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/themes/ol_base/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 26, "set" => 28, "if" => 35);
        static $filters = array("t" => 36, "escape" => 42, "without" => 42, "length" => 52, "first" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['t', 'escape', 'without', 'length', 'first'],
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
