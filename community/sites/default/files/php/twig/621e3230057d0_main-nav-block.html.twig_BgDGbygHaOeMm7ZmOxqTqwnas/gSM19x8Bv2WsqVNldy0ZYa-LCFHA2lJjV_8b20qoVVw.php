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

/* profiles/openlucius/modules/core/ol_main/templates/main-nav-block.html.twig */
class __TwigTemplate_dff185657f069e7b9447a153deb8f98b7e62e3d2247b23f264b8e9d9245f4090 extends \Twig\Template
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
        echo "
<nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-light-grey\" id=\"main-nav\">
  <a class=\"navbar-brand mr-3\" href=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\"><i class=\"lni lni-spiner-solid \"></i> Lucius</a>
  <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-toggle=\"offcanvas\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

";
        // line 8
        if (($context["logged_in"] ?? null)) {
            // line 9
            echo "  <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbar-logged-in\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "\"><i class=\"lni lni-home\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_members.all_members"));
            echo "\"><i class=\"lni lni-user\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("People"));
            echo "</a>
      </li>
      <!-- Groups drop down-->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"lni lni-users\"></i> ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Groups"));
            echo "</a>
        <ul class=\"dropdown-menu px-2 pr-3\" aria-labelledby=\"dropdown01\">
          <input class=\"form-control mb-2 project-filter\" id=\"groupFilter\" type=\"text\" placeholder=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search.."));
            echo "\">
          ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "groups", [], "any", false, false, true, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            <li>
            ";
                // line 26
                echo "              <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source), "html", null, true);
                echo "group/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "landing", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, true, 26), 26, $this->source));
                echo "
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["group"], "non_chat_count", [], "any", false, false, true, 27)) {
                    // line 28
                    echo "                  <span class=\"badge badge-danger\"> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "non_chat_count", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "</span>
                ";
                }
                // line 30
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["group"], "chat_count", [], "any", false, false, true, 30)) {
                    // line 31
                    echo "                  <span class=\"badge badge-primary\"><i class=\"lni lni-comments\"></i> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "chat_count", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "</span>
                ";
                }
                // line 33
                echo "              </a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "          <li class=\"nav-item\"><hr class=\"border-top\"></li>
          <li><a class=\"dropdown-item\" href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_main.group_archived"));
            echo "\"><i class=\"lni lni-archive\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Archived"));
            echo "</a></li>
        </ul>
      </li>

      ";
            // line 45
            echo "    </ul>

    <!-- main nav right-->
    <ul class=\"navbar-nav mr-3\">
      ";
            // line 50
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "menu_right_items", [], "any", false, false, true, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 51
                echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\"
           data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "\"
        >
          ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "show", [], "any", false, false, true, 55) == "icon")) {
                    // line 56
                    echo "            <i class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "icon_class", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "\"></i>
          ";
                } else {
                    // line 58
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 60
                echo "        </a>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
            // line 64
            echo "        <li class=\"nav-item dropdown plus-dropdown mr-3\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuPlus\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"lni lni-plus\"></i>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuPlus\">
            <a class=\"dropdown-item\" href=\"";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_main.add_group"));
            echo "\"><i class=\"lni lni-users\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add Group"));
            echo "</a>
          </div>
        </li>
      ";
            // line 73
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "search_form", [], "any", false, false, true, 73)) {
                // line 74
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "search_form", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 76
            echo "      ";
            // line 77
            echo "      <li class=\"nav-item dropdown mr-4\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <img src=\"";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "user_picture", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\" width=\"24\" height=\"24\" class=\"rounded-circle mr-1\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "username", [], "any", false, false, true, 80), 80, $this->source)) > 13)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "username", [], "any", false, false, true, 80), 80, $this->source), 0, 13) . "..")) : (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "username", [], "any", false, false, true, 80))), "html", null, true);
            echo "
        </a>
        <div class=\"dropdown-menu  dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
          ";
            // line 84
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "user_menu_items", [], "any", false, false, true, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "            <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\"><i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "icon_class", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\"></i> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "          ";
            // line 88
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "user_menu_items", [], "any", false, false, true, 88)) {
                // line 89
                echo "            <div class=\"dropdown-divider\"></div>
          ";
            }
            // line 91
            echo "          <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.user.edit_form", ["user" => twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "uid", [], "any", false, false, true, 91)]), "html", null, true);
            echo "\"><i class=\"lni lni-user\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Manage My Profile"));
            echo "</a>
          <a class=\"dropdown-item\" href=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("ol_stream.user", ["uid" => twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "uid", [], "any", false, false, true, 92)]), "html", null, true);
            echo "\"><i class=\"lni lni-timer\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("My Activity"));
            echo "</a>
          <div class=\"dropdown-divider\"></div>
          ";
            // line 95
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "user_menu_items_bottom", [], "any", false, false, true, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 96
                echo "            <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\"><i class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "icon_class", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\"></i> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "          ";
            // line 99
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "user_menu_items_bottom", [], "any", false, false, true, 99)) {
                // line 100
                echo "            <div class=\"dropdown-divider\"></div>
          ";
            }
            // line 102
            echo "          <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("user.logout"));
            echo "\"><i class=\"lni lni-exit\"></i> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log Out"));
            echo "</a>
        </div>
      </li>
    </ul>
  </div>
";
        }
        // line 108
        echo "</nav>

";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "home_header_image", [], "any", false, false, true, 111) && ($context["is_front"] ?? null))) {
            // line 112
            echo "<div class=\"container-fluid w-100 h-auto m-0 p-0 home-header-image\">
  <img class='img-fluid w-100 h-auto p-0 m-0' src=\"";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "home_header_image", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "\" alt=\"\" />
</div>
";
        }
        // line 116
        echo "
";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "global_message", [], "any", false, false, true, 117)) {
            // line 118
            echo "  <div class=\"container-fluid\">
    <div class=\"d-flex align-items-center p-3 m-3 text-white-50 bg-secondary rounded shadow-sm\">
      <span class=\"global-message-icon h1 mr-3\"><i class=\"lni lni-warning\"></i></span>
      <div class=\"lh-100\">
        <h6 class=\"mb-0 text-white lh-100\">
          ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "global_message", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
        </h6>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/openlucius/modules/core/ol_main/templates/main-nav-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 123,  327 => 118,  325 => 117,  322 => 116,  316 => 113,  313 => 112,  311 => 111,  307 => 108,  295 => 102,  291 => 100,  288 => 99,  286 => 98,  273 => 96,  268 => 95,  261 => 92,  254 => 91,  250 => 89,  247 => 88,  245 => 87,  232 => 85,  227 => 84,  221 => 80,  217 => 79,  213 => 77,  211 => 76,  205 => 74,  202 => 73,  194 => 69,  187 => 64,  185 => 63,  177 => 60,  171 => 58,  165 => 56,  163 => 55,  158 => 53,  154 => 52,  151 => 51,  146 => 50,  140 => 45,  131 => 37,  128 => 36,  120 => 33,  114 => 31,  111 => 30,  105 => 28,  103 => 27,  92 => 26,  89 => 24,  85 => 23,  81 => 22,  76 => 20,  66 => 15,  58 => 12,  53 => 9,  51 => 8,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/openlucius/modules/core/ol_main/templates/main-nav-block.html.twig", "/home/u820627383/domains/homeforukraine.com/public_html/community/profiles/openlucius/modules/core/ol_main/templates/main-nav-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "for" => 23);
        static $filters = array("t" => 12, "escape" => 26, "raw" => 26, "length" => 80, "slice" => 80);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape', 'raw', 'length', 'slice'],
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
