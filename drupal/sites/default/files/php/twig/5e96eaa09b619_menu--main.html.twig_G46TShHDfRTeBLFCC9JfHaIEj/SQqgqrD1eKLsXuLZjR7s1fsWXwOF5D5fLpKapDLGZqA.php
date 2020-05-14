<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/smallbusiness/templates/menu--main.html.twig */
class __TwigTemplate_0d124c8017c59275877dc1818bcbf1a570649eedef986d8666a0343de157d402 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 20, "macro" => 27, "if" => 29, "for" => 35];
        $filters = ["escape" => 39];
        $functions = ["link" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "
";
        // line 12
        echo "<div class=\"navbar\">
  <div class=\"navbar-header pull-right\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <div class=\"collapse navbar-collapse\">
      ";
        // line 20
        $context["menus"] = $this;
        // line 21
        echo "      ";
        // line 25
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

      ";
        // line 55
        echo "
    </div>
  </div>
</div>
";
    }

    // line 27
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "        ";
            $context["menus"] = $this;
            // line 29
            echo "        ";
            if (($context["items"] ?? null)) {
                // line 30
                echo "          ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 31
                    echo "            <ul class=\"nav navbar-nav\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
          ";
                } else {
                    // line 33
                    echo "            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
          ";
                }
                // line 35
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 36
                    echo "            ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 37
                        echo "              ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 38
                            echo "                <li class=\"dropdown\">
                  <a href=\"";
                            // line 39
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\" class=\"dropdown-toggle\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo " <span class=\"caret\"></span></a>
                  ";
                            // line 40
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
                </li>
              ";
                        } else {
                            // line 43
                            echo "                <li class=\"dropdown-submenu\">
                  <a href=\"";
                            // line 44
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                            echo "</a>
                  ";
                            // line 45
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
                </li>
              ";
                        }
                        // line 48
                        echo "            ";
                    } else {
                        // line 49
                        echo "              <li ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "</li>
            ";
                    }
                    // line 51
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "          </ul>
        ";
            }
            // line 54
            echo "      ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/smallbusiness/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  175 => 52,  169 => 51,  161 => 49,  158 => 48,  152 => 45,  146 => 44,  143 => 43,  137 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  117 => 35,  113 => 33,  109 => 31,  106 => 30,  103 => 29,  100 => 28,  86 => 27,  78 => 55,  72 => 25,  70 => 21,  68 => 20,  58 => 12,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/smallbusiness/templates/menu--main.html.twig", "/var/www/html/drupal/themes/smallbusiness/templates/menu--main.html.twig");
    }
}
