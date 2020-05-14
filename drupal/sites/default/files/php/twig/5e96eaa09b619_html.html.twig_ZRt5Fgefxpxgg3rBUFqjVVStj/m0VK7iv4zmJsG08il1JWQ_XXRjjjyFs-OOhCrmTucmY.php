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

/* themes/corporation/templates/html.html.twig */
class __TwigTemplate_68828c05300784ddf5352ea5cc0a026c2f14b777a97288e9b7a2b8b6932dbe86 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2, "raw" => 4, "safe_join" => 5, "t" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'safe_join', 't'],
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
        // line 1
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower|Rock+Salt|Shadows+Into+Light+Two|Source+Sans+Pro:
    200,300,400,600,700,900,200italic,300italic,400italic,600italic,
    700italic,900italic|Dosis:200,300,400,500,600,700,800|Abel|
    Droid+Sans:400,700|Lato:100,300,400,700,900,100italic,300italic,
    400italic,700italic,900italic|Lora:400,700,400italic,
    700italic|PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700
    |Quicksand:300,400,700|Ubuntu:300,400,500,700,300italic,400italic,500italic,
    700italic|Lobster|Ubuntu+Condensed|Oxygen:400,300,700|Oswald:700,400,300
    |Open+Sans+Condensed:300,700,300italic|Roboto+Condensed:300italic,400italic,
    700italic,400,700,300|Open+Sans:300italic,400italic,600italic,700italic,
    800italic,800,700,400,600,300|Prosto+One|Francois+One|Comfortaa:700,300,400
    |Raleway:300,600,900,500,400,100,800,200,700|Roboto:300,700,500italic,900,
    300italic,400italic,900italic,100italic,100,500,400,700italic|Roboto+Slab:300,
    700,100,400|Share:700,700italic,400italic,400' rel='stylesheet' type='text/css'
  >
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500' rel='stylesheet' type='text/css'>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
  <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\"
  rel=\"stylesheet\">
  </head>
  <body";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/corporation/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  122 => 39,  118 => 38,  114 => 37,  109 => 35,  104 => 33,  75 => 7,  71 => 6,  67 => 5,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/corporation/templates/html.html.twig", "/var/www/html/drupal/themes/corporation/templates/html.html.twig");
    }
}
