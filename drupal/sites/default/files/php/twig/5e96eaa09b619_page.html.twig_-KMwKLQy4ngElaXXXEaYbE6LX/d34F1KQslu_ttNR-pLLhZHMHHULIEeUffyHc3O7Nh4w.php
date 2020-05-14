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

/* themes/smallbusiness/templates/page.html.twig */
class __TwigTemplate_cdd7a65fa255d091e06a78ebbfa4ca37140d518414b89f262d4d7ad7ac66afa0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 82, "for" => 85];
        $filters = ["escape" => 78];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
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
        // line 75
        echo " <div id=\"page-wrapper\">
  <header role=\"banner\" id=\"header\" class=\"clearfix\">
     <div class=\"container\">
      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo " </div>
   </header>

  ";
        // line 82
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 83
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 86
                echo "          <li>
            <a href=\"";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "url", [])), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "src", [])), "html", null, true);
                echo "\"></a>
            <p class=\"flex-caption\">";
                // line 88
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "title", [])), "html", null, true);
                echo "</p>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "      </ul>
    </div>
  ";
        }
        // line 94
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 95
            echo "  <div id=\"highlighted\">
     <div class=\"container\">
      <div class=\"row\">";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
    </div>
   </div>
  ";
        }
        // line 101
        echo "    <div class=\"container\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "</div>
  ";
        // line 103
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "feature_box1", []) || $this->getAttribute(($context["page"] ?? null), "feature_box2", [])) || $this->getAttribute(($context["page"] ?? null), "feature_box3", []))) {
            // line 104
            echo "  <div id=\"featuredBox\">
     <div class=\"container\">
\t <div class=\"row\">
\t ";
            // line 107
            if ($this->getAttribute(($context["page"] ?? null), "feature_box1", [])) {
                // line 108
                echo "      <div class=\"feature_box col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature_box1", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 110
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "feature_box2", [])) {
                // line 111
                echo "      <div class=\"feature_box col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature_box2", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 113
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "feature_box3", [])) {
                // line 114
                echo "      <div class=\"feature_box col-md-4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature_box3", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 116
            echo "\t  </div>
\t  </div>
   </div>
  ";
        }
        // line 120
        echo "  <main id=\"main\" class=\"clearfix\">
     <div>
      <div>
\t  ";
        // line 123
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 124
            echo "\t  <!-- sidebarFirst -->
         <div id=\"sidebarFirst\" class=\"sidebar ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "</div>
         <!-- /sidebarFirst -->
         ";
        }
        // line 128
        echo "\t\t <!-- MainContent -->
         <div class=\"";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["conditionalStr"] ?? null)), "html", null, true);
        echo "\" role=\"main\"> ";
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 130
            echo "          <div id=\"content_top\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 132
        echo "
          ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo " </div>
\t\t  <!-- /MainContent -->
         ";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 136
            echo "\t\t <!-- sidebarSecond -->
         <div id=\"sidebar-second\" class=\"sidebar ";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo " </div>
         <!-- /sidebarSecond -->
         ";
        }
        // line 139
        echo "</div>
    </div>
   </main>
   <footer class=\"site-footer\">
     <div class=\"\"> ";
        // line 143
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 144
            echo "      <div class=\"site-footer__top clearfix\">
\t      <div class=\"fooer-nav col-md-3\"> ";
            // line 145
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo " </div>
        <div class=\"fooer-nav col-md-3\"> ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo " </div>
        <div class=\"fooer-nav col-md-3\"> ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo " </div>
        <div class=\"fooer-nav col-md-3\"> ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo " </div>
\t</div>
      ";
        }
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 152
            echo "      <div class=\"site-footer__bottom\"> <div class=\"container\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "</div> </div>
      ";
        }
        // line 153
        echo " </div>
   </footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/smallbusiness/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 153,  244 => 152,  241 => 151,  235 => 148,  231 => 147,  227 => 146,  223 => 145,  220 => 144,  218 => 143,  212 => 139,  204 => 137,  201 => 136,  199 => 135,  194 => 133,  191 => 132,  185 => 130,  181 => 129,  178 => 128,  169 => 125,  166 => 124,  164 => 123,  159 => 120,  153 => 116,  147 => 114,  144 => 113,  138 => 111,  135 => 110,  129 => 108,  127 => 107,  122 => 104,  119 => 103,  114 => 101,  107 => 97,  103 => 95,  100 => 94,  95 => 91,  86 => 88,  80 => 87,  77 => 86,  73 => 85,  69 => 83,  66 => 82,  60 => 78,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/smallbusiness/templates/page.html.twig", "/var/www/html/drupal/themes/smallbusiness/templates/page.html.twig");
    }
}
