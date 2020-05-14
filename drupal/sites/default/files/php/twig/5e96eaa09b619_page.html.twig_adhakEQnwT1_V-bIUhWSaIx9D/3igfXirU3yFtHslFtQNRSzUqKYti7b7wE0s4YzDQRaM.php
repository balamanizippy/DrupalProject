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

/* themes/corporation/templates/page.html.twig */
class __TwigTemplate_87ccc077a75da27a8fc9d9e1a9b798fd4effff1b5ee2982f823a5211a53580aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "trans" => 1098, "set" => 1119, "for" => 1132];
        $filters = ["escape" => 9, "t" => 56];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'set', 'for'],
                ['escape', 't'],
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
        echo "<a name=\"Top\" id=\"Top\"></a>

<div id=\"color\" class=\"default\">
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"staticPanel\">
        <div class=\"top_header col-lg-4 col-md-4 col-sm-4 col-xs-12\">
          ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        </div>

        ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 13
            echo "          
          ";
            // line 26
            echo "          <nav id=\"site-navigation\" class=\"navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12\" role=\"navigation\">
              <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
                     <i class=\"fa fa-bars\"></i>
                   </button>
                  <div id=\"main-navbar-collapse\" class=\"navbar-collapse collapse\">
                      ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                  </div>
              </div>
          </nav><!-- #site-navigation -->
        ";
        }
        // line 37
        echo "      </div>

    ";
        // line 39
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 40
            echo "      <div class=\"col-lg-8\">
        <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
          <div class=\"container\">
            ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null)), "html", null, true);
            echo "
            ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
          </div>
        </nav>
      </div>  
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 51
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 54
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 55
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 59
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 60
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 63
            echo "
        ";
            // line 64
            if (($context["site_slogan"] ?? null)) {
                // line 65
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
        ";
            }
            // line 67
            echo "      </div>

   ";
        }
        // line 70
        echo "
   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

  </div>
  </div>
</header>

<div class=\"page\">
  ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 84
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"\">
        ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 90
        echo "
";
        // line 91
        if (((($this->getAttribute(($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
            // line 92
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 94
            if ($this->getAttribute(($context["page"] ?? null), "top1", [])) {
                // line 95
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 96
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 97
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 98
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 99
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 100
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 101
($context["page"] ?? null), "top3", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 102
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 103
($context["page"] ?? null), "top2", []) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 104
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 106
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 108
                echo "          <div class=\"top1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 111
            echo "
      ";
            // line 112
            if ($this->getAttribute(($context["page"] ?? null), "top2", [])) {
                // line 113
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 114
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 115
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 116
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 117
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 118
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 119
($context["page"] ?? null), "top3", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 120
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 121
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 122
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 124
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 126
                echo "          <div class=\"top2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 129
            echo "
      ";
            // line 130
            if ($this->getAttribute(($context["page"] ?? null), "top3", [])) {
                // line 131
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 132
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 133
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", []))) {
                    // line 134
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 135
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 136
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 137
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 138
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 139
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 140
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 142
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 144
                echo "          <div class=\"top3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 147
            echo "
      ";
            // line 148
            if ($this->getAttribute(($context["page"] ?? null), "top4", [])) {
                // line 149
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", [])) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 150
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 151
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", []))) {
                    // line 152
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 153
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 154
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 155
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 156
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 157
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 158
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 160
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 162
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 165
            echo "
    </div>
  </div>
";
        }
        // line 169
        echo "
";
        // line 170
        if ($this->getAttribute(($context["page"] ?? null), "post_information", [])) {
            // line 171
            echo "  <div class=\"post_information\">
      <div class=\"container\">
        ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "post_information", [])), "html", null, true);
            echo "
      </div>
  </div>
";
        }
        // line 177
        echo "

";
        // line 179
        if ($this->getAttribute(($context["page"] ?? null), "top_info", [])) {
            // line 180
            echo "  <div class=\"post_info\">
    <div class=\"bg_efect_top\">
      <div class=\"section_one trnsform3d scale3d\"></div>
    </div>
    <div class=\"section_two\">
        <div class=\"top_info\">";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_info", [])), "html", null, true);
            echo "</div>
    </div>
  </div>
";
        }
        // line 189
        echo "

";
        // line 191
        if (((($this->getAttribute(($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
            // line 192
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 194
            if ($this->getAttribute(($context["page"] ?? null), "top_content1", [])) {
                // line 195
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 196
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 197
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 198
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 199
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 200
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 201
($context["page"] ?? null), "top_content3", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 202
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 203
($context["page"] ?? null), "top_content2", []) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 204
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 206
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 208
                echo "          <div class=\"top_content1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 211
            echo "
      ";
            // line 212
            if ($this->getAttribute(($context["page"] ?? null), "top_content2", [])) {
                // line 213
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 214
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 215
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 216
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 217
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 218
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 219
($context["page"] ?? null), "top_content3", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 220
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 221
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 222
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 224
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 226
                echo "          <div class=\"top_content2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 228
            echo "  

      ";
            // line 230
            if ($this->getAttribute(($context["page"] ?? null), "top_content3", [])) {
                // line 231
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 232
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 233
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", []))) {
                    // line 234
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 235
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 236
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 237
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 238
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 239
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 240
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 242
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 244
                echo "          <div class=\"top_content3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 247
            echo "
      ";
            // line 248
            if ($this->getAttribute(($context["page"] ?? null), "top_content4", [])) {
                // line 249
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", [])) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 250
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 251
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", []))) {
                    // line 252
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 253
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 254
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 255
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 256
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 257
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 258
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 260
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 262
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 265
            echo "
    </div>
  </div>
";
        }
        // line 269
        echo "
";
        // line 270
        if (((($this->getAttribute(($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
            // line 271
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 273
            if ($this->getAttribute(($context["page"] ?? null), "line1", [])) {
                // line 274
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 275
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 276
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 277
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 278
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 279
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 280
($context["page"] ?? null), "line3", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 281
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 282
($context["page"] ?? null), "line2", []) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 283
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 285
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 287
                echo "          <div class=\"line1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 290
            echo "
      ";
            // line 291
            if ($this->getAttribute(($context["page"] ?? null), "line2", [])) {
                // line 292
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 293
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 294
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 295
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 296
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 297
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 298
($context["page"] ?? null), "line3", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 299
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 300
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 301
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 303
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 305
                echo "          <div class=\"line2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 307
            echo "  

      ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "line3", [])) {
                // line 310
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 311
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 312
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", []))) {
                    // line 313
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 314
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 315
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 316
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 317
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 318
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 319
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 321
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 323
                echo "          <div class=\"line3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 326
            echo "
      ";
            // line 327
            if ($this->getAttribute(($context["page"] ?? null), "line4", [])) {
                // line 328
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", [])) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 329
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 330
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", []))) {
                    // line 331
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 332
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 333
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 334
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 335
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 336
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 337
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 339
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 341
                echo "          <div class=\"line4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 344
            echo "
    </div>
  </div>
";
        }
        // line 348
        echo "
";
        // line 349
        if ($this->getAttribute(($context["page"] ?? null), "top_content", [])) {
            // line 350
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 353
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 358
        echo "
";
        // line 359
        if (((($this->getAttribute(($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
            // line 360
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "feature1", [])) {
                // line 363
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 364
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 365
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 366
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 367
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 368
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 369
($context["page"] ?? null), "feature3", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 370
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 371
($context["page"] ?? null), "feature2", []) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 372
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 374
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 376
                echo "          <div class=\"feature1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 379
            echo "
      ";
            // line 380
            if ($this->getAttribute(($context["page"] ?? null), "feature2", [])) {
                // line 381
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 382
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 383
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 384
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 385
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 386
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 387
($context["page"] ?? null), "feature3", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 388
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 389
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 390
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 392
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 394
                echo "          <div class=\"feature2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 397
            echo "
      ";
            // line 398
            if ($this->getAttribute(($context["page"] ?? null), "feature3", [])) {
                // line 399
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 400
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 401
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", []))) {
                    // line 402
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 403
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 404
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 405
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 406
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 407
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 408
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 410
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 412
                echo "          <div class=\"feature3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 415
            echo "
      ";
            // line 416
            if ($this->getAttribute(($context["page"] ?? null), "feature4", [])) {
                // line 417
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", [])) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 418
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 419
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", []))) {
                    // line 420
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 421
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 422
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 423
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 424
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 425
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 426
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 428
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 430
                echo "          <div class=\"feature4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 433
            echo "
    </div>
  </div>
";
        }
        // line 437
        echo "
";
        // line 438
        if (((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
            // line 439
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "contenttop1", [])) {
                // line 442
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 443
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 444
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 445
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 446
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 447
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 448
($context["page"] ?? null), "contenttop3", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 449
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 450
($context["page"] ?? null), "contenttop2", []) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 451
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 453
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 455
                echo "          <div class=\"contenttop1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 458
            echo "
      ";
            // line 459
            if ($this->getAttribute(($context["page"] ?? null), "contenttop2", [])) {
                // line 460
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 461
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 462
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 463
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 464
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 465
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 466
($context["page"] ?? null), "contenttop3", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 467
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 468
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 469
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 471
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 473
                echo "          <div class=\"contenttop2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 476
            echo "
      ";
            // line 477
            if ($this->getAttribute(($context["page"] ?? null), "contenttop3", [])) {
                // line 478
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 479
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 480
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", []))) {
                    // line 481
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 482
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 483
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 484
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 485
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 486
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 487
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 489
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 491
                echo "          <div class=\"contenttop3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 494
            echo "
      ";
            // line 495
            if ($this->getAttribute(($context["page"] ?? null), "contenttop4", [])) {
                // line 496
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 497
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 498
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", []))) {
                    // line 499
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 500
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 501
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 502
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 503
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 504
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 505
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 507
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 509
                echo "          <div class=\"contenttop4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 512
            echo "
    </div>
  </div>
";
        }
        // line 516
        echo "
 


  
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 524
        if (($context["front_page"] ?? null)) {
            // line 525
            echo "
            ";
            // line 526
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 527
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 528
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 531
            echo "        
            <div class=\"content col-lg-";
            // line 532
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-sm-12 col-xs-12\">
              ";
            // line 533
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "

              ";
            // line 535
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
              ";
            // line 536
            if (($context["title"] ?? null)) {
                // line 537
                echo "                <h4>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h4>
              ";
            }
            // line 539
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "

              ";
            // line 541
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "

              ";
            // line 543
            if (($context["action_links"] ?? null)) {
                // line 544
                echo "                <nav class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</nav>
              ";
            }
            // line 546
            echo "
              ";
            // line 547
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
            // line 548
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
            </div>

            ";
            // line 551
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
                // line 552
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 553
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
              </aside>
            ";
            }
            // line 556
            echo "
        ";
        } else {
            // line 558
            echo "
          ";
            // line 559
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 560
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 561
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 564
            echo "    
          <div class=\"content col-lg-";
            // line 565
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-sm-12 col-xs-12\">
            ";
            // line 566
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "

            ";
            // line 568
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "

             ";
            // line 570
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
              ";
            // line 571
            if (($context["title"] ?? null)) {
                // line 572
                echo "                <h2>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h2>
              ";
            }
            // line 574
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "

            ";
            // line 576
            if (($context["action_links"] ?? null)) {
                // line 577
                echo "              <nav class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</nav>
            ";
            }
            // line 579
            echo "              <div class=\"test_class\">
            ";
            // line 580
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
            ";
            // line 582
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
          </div>

          ";
            // line 585
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
                // line 586
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 587
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 590
            echo "        ";
        }
        echo "     
      </div>
    </div>

  ";
        // line 594
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 595
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 597
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 601
        echo "
  ";
        // line 602
        if (($context["messages"] ?? null)) {
            // line 603
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 605
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 609
        echo "
  ";
        // line 610
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 611
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 613
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 617
        echo "
  ";
        // line 618
        if (((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
            // line 619
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 621
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom1", [])) {
                // line 622
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 623
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 624
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 625
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 626
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 627
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 628
($context["page"] ?? null), "contentbottom3", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 629
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 630
($context["page"] ?? null), "contentbottom2", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 631
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 633
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 635
                echo "          <div class=\"contentbottom1\">
            <div class=\"bottom_info_one\">
              ";
                // line 637
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom1", [])), "html", null, true);
                echo "
            </div>
            <div class=\"bg_efect\">
              <div class=\"bottom_info_two trnsform3d scale3d\"></div>
            </div>
          </div>
        </div>
      ";
            }
            // line 645
            echo "
      ";
            // line 646
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) {
                // line 647
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 648
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 649
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 650
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 651
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 652
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 653
($context["page"] ?? null), "contentbottom3", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 654
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 655
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 656
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 658
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 660
                echo "          <div class=\"contentbottom2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 663
            echo "
      ";
            // line 664
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) {
                // line 665
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 666
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 667
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", []))) {
                    // line 668
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 669
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 670
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 671
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 672
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 673
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 674
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 676
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 678
                echo "          <div class=\"contentbottom3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 681
            echo "
      ";
            // line 682
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom4", [])) {
                // line 683
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 684
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 685
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", []))) {
                    // line 686
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 687
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 688
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 689
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 690
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 691
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 692
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 694
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 696
                echo "          <div class=\"contentbottom4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 699
            echo "
    </div>
  </div>
";
        }
        // line 703
        echo "
";
        // line 704
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
            // line 705
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 707
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line1", [])) {
                // line 708
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 709
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 710
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 711
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 712
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 713
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 714
($context["page"] ?? null), "bottom_line3", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 715
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 716
($context["page"] ?? null), "bottom_line2", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 717
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 719
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 721
                echo "          <div class=\"bottom_line1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 724
            echo "
      ";
            // line 725
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) {
                // line 726
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 727
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 728
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 729
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 730
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 731
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 732
($context["page"] ?? null), "bottom_line3", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 733
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 734
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 735
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 737
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 739
                echo "          <div class=\"bottom_line2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 742
            echo "
      ";
            // line 743
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) {
                // line 744
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 745
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 746
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", []))) {
                    // line 747
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 748
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 749
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 750
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 751
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 752
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 753
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 755
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 757
                echo "          <div class=\"bottom_line3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 760
            echo "
      ";
            // line 761
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line4", [])) {
                // line 762
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 763
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 764
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", []))) {
                    // line 765
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 766
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 767
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 768
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 769
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 770
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 771
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 773
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 775
                echo "          <div class=\"bottom_line4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 778
            echo "
    </div>
  </div>
";
        }
        // line 782
        echo "
";
        // line 783
        if (((($this->getAttribute(($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
            // line 784
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 786
            if ($this->getAttribute(($context["page"] ?? null), "bottom1", [])) {
                // line 787
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 788
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 789
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 790
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 791
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 792
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 793
($context["page"] ?? null), "bottom3", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 794
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 795
($context["page"] ?? null), "bottom2", []) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 796
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 798
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 800
                echo "          <div class=\"bottom1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 803
            echo "
      ";
            // line 804
            if ($this->getAttribute(($context["page"] ?? null), "bottom2", [])) {
                // line 805
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 806
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 807
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 808
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 809
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 810
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 811
($context["page"] ?? null), "bottom3", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 812
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 813
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 814
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 816
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 818
                echo "          <div class=\"bottom2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 821
            echo "
      ";
            // line 822
            if ($this->getAttribute(($context["page"] ?? null), "bottom3", [])) {
                // line 823
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 824
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 825
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", []))) {
                    // line 826
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 827
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 828
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 829
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 830
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 831
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 832
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 834
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 836
                echo "          <div class=\"bottom3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 839
            echo "
      ";
            // line 840
            if ($this->getAttribute(($context["page"] ?? null), "bottom4", [])) {
                // line 841
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 842
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 843
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", []))) {
                    // line 844
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 845
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 846
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 847
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 848
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 849
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 850
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 852
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 854
                echo "          <div class=\"bottom4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 857
            echo "
    </div>
  </div>
";
        }
        // line 861
        echo "
";
        // line 862
        if (((($this->getAttribute(($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
            // line 863
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 865
            if ($this->getAttribute(($context["page"] ?? null), "last1", [])) {
                // line 866
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 867
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 868
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 869
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 870
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 871
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 872
($context["page"] ?? null), "last3", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 873
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 874
($context["page"] ?? null), "last2", []) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 875
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 877
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 879
                echo "          <div class=\"last1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 882
            echo "
      ";
            // line 883
            if ($this->getAttribute(($context["page"] ?? null), "last2", [])) {
                // line 884
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 885
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 886
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 887
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 888
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 889
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 890
($context["page"] ?? null), "last3", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 891
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 892
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 893
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 895
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 897
                echo "          <div class=\"last2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 900
            echo "
      ";
            // line 901
            if ($this->getAttribute(($context["page"] ?? null), "last3", [])) {
                // line 902
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 903
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 904
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", []))) {
                    // line 905
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 906
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 907
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 908
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 909
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 910
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 911
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 913
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 915
                echo "          <div class=\"last3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 918
            echo "
      ";
            // line 919
            if ($this->getAttribute(($context["page"] ?? null), "last4", [])) {
                // line 920
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", [])) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 921
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 922
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", []))) {
                    // line 923
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 924
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 925
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 926
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 927
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 928
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 929
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 931
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 933
                echo "          <div class=\"last4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 936
            echo "
    </div>
  </div>
";
        }
        // line 940
        echo "
  ";
        // line 941
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 942
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 946
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 952
        echo "
  ";
        // line 953
        if (((($this->getAttribute(($context["page"] ?? null), "panel_second_1", []) || $this->getAttribute(($context["page"] ?? null), "panel_second_2", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_3", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_4", []))) {
            // line 954
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 958
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_1", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 961
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_2", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 964
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_3", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 967
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_4", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 973
        echo "
  ";
        // line 974
        if (($context["breadcrumb"] ?? null)) {
            // line 975
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 977
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 981
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
    ";
        // line 984
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 985
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 987
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 991
        echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
        // line 995
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 996
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 997
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 998
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 999
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 1000
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1003
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 1004
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 1005
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1008
        echo "      </div>
      </div>
    </div>

    ";
        // line 1012
        if (((($this->getAttribute(($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
            // line 1013
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1015
            if ($this->getAttribute(($context["page"] ?? null), "footer1", [])) {
                // line 1016
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1017
                    echo "              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif (($this->getAttribute(                // line 1018
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1019
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1020
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1021
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1022
($context["page"] ?? null), "footer3", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1023
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1024
($context["page"] ?? null), "footer2", []) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1025
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1027
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1029
                echo "              <div class=\"footer1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer1", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1032
            echo "
          ";
            // line 1033
            if ($this->getAttribute(($context["page"] ?? null), "footer2", [])) {
                // line 1034
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1035
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif (($this->getAttribute(                // line 1036
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1037
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1038
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1039
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1040
($context["page"] ?? null), "footer3", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1041
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1042
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1043
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1045
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1047
                echo "              <div class=\"footer2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer2", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1050
            echo "
          ";
            // line 1051
            if ($this->getAttribute(($context["page"] ?? null), "footer3", [])) {
                // line 1052
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1053
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif (($this->getAttribute(                // line 1054
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", []))) {
                    // line 1055
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1056
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1057
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1058
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1059
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1060
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1061
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1063
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1065
                echo "              <div class=\"footer3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer3", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1068
            echo "
          ";
            // line 1069
            if ($this->getAttribute(($context["page"] ?? null), "footer4", [])) {
                // line 1070
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", [])) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1071
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif (($this->getAttribute(                // line 1072
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", []))) {
                    // line 1073
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1074
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1075
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1076
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1077
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1078
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1079
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1081
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1083
                echo "              <div class=\"footer4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer4", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1086
            echo "
          </div>

        ";
        }
        // line 1090
        echo "
        <div class=\"bottom_footer\">
        <div class=\"\">
          <div class=\"row\">
              ";
        // line 1094
        if (($context["show_hide_copyright"] ?? null)) {
            // line 1095
            echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <a href=\"";
            // line 1097
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
                          ";
            // line 1098
            echo t("Copyright @copyright_date @copyright_developedby", array("@copyright_date" =>             // line 1099
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
            // line 1101
            echo "                        </a>
                    </div>
                </div>
              ";
        }
        // line 1105
        echo "
              <!-- <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <div class=\"switchButton\">
                    <span class=\"bt-blue scrollup\"></span>
                    <span class=\"bt-lghtGre scrollup\"></span>
                    <span class=\"bt-orange scrollup\"></span>
                    <span class=\"bt-red scrollup\"></span>
                    <span class=\"bt-green scrollup\"></span>
                </div>
              </div> -->

              ";
        // line 1116
        if (($context["show_hide_icon"] ?? null)) {
            // line 1117
            echo "              <div class=\"socBox col-lg-6\">
                <ul class=\"socIcons\">
                    ";
            // line 1119
            $context["soc"] = ["fa-twitter" =>             // line 1120
($context["twitter"] ?? null), "fa-facebook" =>             // line 1121
($context["facebook"] ?? null), "fa-flickr" =>             // line 1122
($context["flickr"] ?? null), "fa-linkedin" =>             // line 1123
($context["linkedin"] ?? null), "fa-play" =>             // line 1124
($context["youtube"] ?? null), "fa-pinterest" =>             // line 1125
($context["pinterest"] ?? null), "fa-google-plus" =>             // line 1126
($context["google"] ?? null), "fa-dribbble" =>             // line 1127
($context["dribbble"] ?? null), "fa-vimeo-square" =>             // line 1128
($context["vimeo"] ?? null), "fa-instagram" =>             // line 1129
($context["instagram"] ?? null), "fa-vk" =>             // line 1130
($context["vk"] ?? null)];
            // line 1132
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 1133
                echo "                        ";
                if ($context["value"]) {
                    // line 1134
                    echo "                          <li>
                              <a href=\"";
                    // line 1135
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                    echo "\" target=\"_blank\">
                                  <i class=\"fa ";
                    // line 1136
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo "\"></i>
                              </a>
                          </li>
                        ";
                }
                // line 1140
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1141
            echo "                </ul>
            </div>
          ";
        }
        // line 1144
        echo "
          </div>
        </div>
        </div>
        </div>
  </footer>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/corporation/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2564 => 1144,  2559 => 1141,  2553 => 1140,  2546 => 1136,  2542 => 1135,  2539 => 1134,  2536 => 1133,  2531 => 1132,  2529 => 1130,  2528 => 1129,  2527 => 1128,  2526 => 1127,  2525 => 1126,  2524 => 1125,  2523 => 1124,  2522 => 1123,  2521 => 1122,  2520 => 1121,  2519 => 1120,  2518 => 1119,  2514 => 1117,  2512 => 1116,  2499 => 1105,  2493 => 1101,  2491 => 1099,  2490 => 1098,  2486 => 1097,  2482 => 1095,  2480 => 1094,  2474 => 1090,  2468 => 1086,  2461 => 1083,  2457 => 1081,  2453 => 1079,  2451 => 1078,  2448 => 1077,  2446 => 1076,  2443 => 1075,  2441 => 1074,  2438 => 1073,  2436 => 1072,  2433 => 1071,  2430 => 1070,  2428 => 1069,  2425 => 1068,  2418 => 1065,  2414 => 1063,  2410 => 1061,  2408 => 1060,  2405 => 1059,  2403 => 1058,  2400 => 1057,  2398 => 1056,  2395 => 1055,  2393 => 1054,  2390 => 1053,  2387 => 1052,  2385 => 1051,  2382 => 1050,  2375 => 1047,  2371 => 1045,  2367 => 1043,  2365 => 1042,  2362 => 1041,  2360 => 1040,  2357 => 1039,  2355 => 1038,  2352 => 1037,  2350 => 1036,  2347 => 1035,  2344 => 1034,  2342 => 1033,  2339 => 1032,  2332 => 1029,  2328 => 1027,  2324 => 1025,  2322 => 1024,  2319 => 1023,  2317 => 1022,  2314 => 1021,  2312 => 1020,  2309 => 1019,  2307 => 1018,  2304 => 1017,  2301 => 1016,  2299 => 1015,  2295 => 1013,  2293 => 1012,  2287 => 1008,  2281 => 1005,  2278 => 1004,  2275 => 1003,  2269 => 1000,  2265 => 999,  2261 => 998,  2257 => 997,  2254 => 996,  2252 => 995,  2246 => 991,  2239 => 987,  2235 => 985,  2233 => 984,  2228 => 981,  2221 => 977,  2217 => 975,  2215 => 974,  2212 => 973,  2203 => 967,  2197 => 964,  2191 => 961,  2185 => 958,  2179 => 954,  2177 => 953,  2174 => 952,  2165 => 946,  2159 => 942,  2157 => 941,  2154 => 940,  2148 => 936,  2141 => 933,  2137 => 931,  2133 => 929,  2131 => 928,  2128 => 927,  2126 => 926,  2123 => 925,  2121 => 924,  2118 => 923,  2116 => 922,  2113 => 921,  2110 => 920,  2108 => 919,  2105 => 918,  2098 => 915,  2094 => 913,  2090 => 911,  2088 => 910,  2085 => 909,  2083 => 908,  2080 => 907,  2078 => 906,  2075 => 905,  2073 => 904,  2070 => 903,  2067 => 902,  2065 => 901,  2062 => 900,  2055 => 897,  2051 => 895,  2047 => 893,  2045 => 892,  2042 => 891,  2040 => 890,  2037 => 889,  2035 => 888,  2032 => 887,  2030 => 886,  2027 => 885,  2024 => 884,  2022 => 883,  2019 => 882,  2012 => 879,  2008 => 877,  2004 => 875,  2002 => 874,  1999 => 873,  1997 => 872,  1994 => 871,  1992 => 870,  1989 => 869,  1987 => 868,  1984 => 867,  1981 => 866,  1979 => 865,  1975 => 863,  1973 => 862,  1970 => 861,  1964 => 857,  1957 => 854,  1953 => 852,  1949 => 850,  1947 => 849,  1944 => 848,  1942 => 847,  1939 => 846,  1937 => 845,  1934 => 844,  1932 => 843,  1929 => 842,  1926 => 841,  1924 => 840,  1921 => 839,  1914 => 836,  1910 => 834,  1906 => 832,  1904 => 831,  1901 => 830,  1899 => 829,  1896 => 828,  1894 => 827,  1891 => 826,  1889 => 825,  1886 => 824,  1883 => 823,  1881 => 822,  1878 => 821,  1871 => 818,  1867 => 816,  1863 => 814,  1861 => 813,  1858 => 812,  1856 => 811,  1853 => 810,  1851 => 809,  1848 => 808,  1846 => 807,  1843 => 806,  1840 => 805,  1838 => 804,  1835 => 803,  1828 => 800,  1824 => 798,  1820 => 796,  1818 => 795,  1815 => 794,  1813 => 793,  1810 => 792,  1808 => 791,  1805 => 790,  1803 => 789,  1800 => 788,  1797 => 787,  1795 => 786,  1791 => 784,  1789 => 783,  1786 => 782,  1780 => 778,  1773 => 775,  1769 => 773,  1765 => 771,  1763 => 770,  1760 => 769,  1758 => 768,  1755 => 767,  1753 => 766,  1750 => 765,  1748 => 764,  1745 => 763,  1742 => 762,  1740 => 761,  1737 => 760,  1730 => 757,  1726 => 755,  1722 => 753,  1720 => 752,  1717 => 751,  1715 => 750,  1712 => 749,  1710 => 748,  1707 => 747,  1705 => 746,  1702 => 745,  1699 => 744,  1697 => 743,  1694 => 742,  1687 => 739,  1683 => 737,  1679 => 735,  1677 => 734,  1674 => 733,  1672 => 732,  1669 => 731,  1667 => 730,  1664 => 729,  1662 => 728,  1659 => 727,  1656 => 726,  1654 => 725,  1651 => 724,  1644 => 721,  1640 => 719,  1636 => 717,  1634 => 716,  1631 => 715,  1629 => 714,  1626 => 713,  1624 => 712,  1621 => 711,  1619 => 710,  1616 => 709,  1613 => 708,  1611 => 707,  1607 => 705,  1605 => 704,  1602 => 703,  1596 => 699,  1589 => 696,  1585 => 694,  1581 => 692,  1579 => 691,  1576 => 690,  1574 => 689,  1571 => 688,  1569 => 687,  1566 => 686,  1564 => 685,  1561 => 684,  1558 => 683,  1556 => 682,  1553 => 681,  1546 => 678,  1542 => 676,  1538 => 674,  1536 => 673,  1533 => 672,  1531 => 671,  1528 => 670,  1526 => 669,  1523 => 668,  1521 => 667,  1518 => 666,  1515 => 665,  1513 => 664,  1510 => 663,  1503 => 660,  1499 => 658,  1495 => 656,  1493 => 655,  1490 => 654,  1488 => 653,  1485 => 652,  1483 => 651,  1480 => 650,  1478 => 649,  1475 => 648,  1472 => 647,  1470 => 646,  1467 => 645,  1456 => 637,  1452 => 635,  1448 => 633,  1444 => 631,  1442 => 630,  1439 => 629,  1437 => 628,  1434 => 627,  1432 => 626,  1429 => 625,  1427 => 624,  1424 => 623,  1421 => 622,  1419 => 621,  1415 => 619,  1413 => 618,  1410 => 617,  1403 => 613,  1399 => 611,  1397 => 610,  1394 => 609,  1387 => 605,  1383 => 603,  1381 => 602,  1378 => 601,  1371 => 597,  1367 => 595,  1365 => 594,  1357 => 590,  1351 => 587,  1348 => 586,  1346 => 585,  1340 => 582,  1335 => 580,  1332 => 579,  1326 => 577,  1324 => 576,  1318 => 574,  1312 => 572,  1310 => 571,  1306 => 570,  1301 => 568,  1296 => 566,  1290 => 565,  1287 => 564,  1281 => 561,  1278 => 560,  1276 => 559,  1273 => 558,  1269 => 556,  1263 => 553,  1260 => 552,  1258 => 551,  1252 => 548,  1248 => 547,  1245 => 546,  1239 => 544,  1237 => 543,  1232 => 541,  1226 => 539,  1220 => 537,  1218 => 536,  1214 => 535,  1209 => 533,  1203 => 532,  1200 => 531,  1194 => 528,  1191 => 527,  1189 => 526,  1186 => 525,  1184 => 524,  1174 => 516,  1168 => 512,  1161 => 509,  1157 => 507,  1153 => 505,  1151 => 504,  1148 => 503,  1146 => 502,  1143 => 501,  1141 => 500,  1138 => 499,  1136 => 498,  1133 => 497,  1130 => 496,  1128 => 495,  1125 => 494,  1118 => 491,  1114 => 489,  1110 => 487,  1108 => 486,  1105 => 485,  1103 => 484,  1100 => 483,  1098 => 482,  1095 => 481,  1093 => 480,  1090 => 479,  1087 => 478,  1085 => 477,  1082 => 476,  1075 => 473,  1071 => 471,  1067 => 469,  1065 => 468,  1062 => 467,  1060 => 466,  1057 => 465,  1055 => 464,  1052 => 463,  1050 => 462,  1047 => 461,  1044 => 460,  1042 => 459,  1039 => 458,  1032 => 455,  1028 => 453,  1024 => 451,  1022 => 450,  1019 => 449,  1017 => 448,  1014 => 447,  1012 => 446,  1009 => 445,  1007 => 444,  1004 => 443,  1001 => 442,  999 => 441,  995 => 439,  993 => 438,  990 => 437,  984 => 433,  977 => 430,  973 => 428,  969 => 426,  967 => 425,  964 => 424,  962 => 423,  959 => 422,  957 => 421,  954 => 420,  952 => 419,  949 => 418,  946 => 417,  944 => 416,  941 => 415,  934 => 412,  930 => 410,  926 => 408,  924 => 407,  921 => 406,  919 => 405,  916 => 404,  914 => 403,  911 => 402,  909 => 401,  906 => 400,  903 => 399,  901 => 398,  898 => 397,  891 => 394,  887 => 392,  883 => 390,  881 => 389,  878 => 388,  876 => 387,  873 => 386,  871 => 385,  868 => 384,  866 => 383,  863 => 382,  860 => 381,  858 => 380,  855 => 379,  848 => 376,  844 => 374,  840 => 372,  838 => 371,  835 => 370,  833 => 369,  830 => 368,  828 => 367,  825 => 366,  823 => 365,  820 => 364,  817 => 363,  815 => 362,  811 => 360,  809 => 359,  806 => 358,  798 => 353,  793 => 350,  791 => 349,  788 => 348,  782 => 344,  775 => 341,  771 => 339,  767 => 337,  765 => 336,  762 => 335,  760 => 334,  757 => 333,  755 => 332,  752 => 331,  750 => 330,  747 => 329,  744 => 328,  742 => 327,  739 => 326,  732 => 323,  728 => 321,  724 => 319,  722 => 318,  719 => 317,  717 => 316,  714 => 315,  712 => 314,  709 => 313,  707 => 312,  704 => 311,  701 => 310,  699 => 309,  695 => 307,  688 => 305,  684 => 303,  680 => 301,  678 => 300,  675 => 299,  673 => 298,  670 => 297,  668 => 296,  665 => 295,  663 => 294,  660 => 293,  657 => 292,  655 => 291,  652 => 290,  645 => 287,  641 => 285,  637 => 283,  635 => 282,  632 => 281,  630 => 280,  627 => 279,  625 => 278,  622 => 277,  620 => 276,  617 => 275,  614 => 274,  612 => 273,  608 => 271,  606 => 270,  603 => 269,  597 => 265,  590 => 262,  586 => 260,  582 => 258,  580 => 257,  577 => 256,  575 => 255,  572 => 254,  570 => 253,  567 => 252,  565 => 251,  562 => 250,  559 => 249,  557 => 248,  554 => 247,  547 => 244,  543 => 242,  539 => 240,  537 => 239,  534 => 238,  532 => 237,  529 => 236,  527 => 235,  524 => 234,  522 => 233,  519 => 232,  516 => 231,  514 => 230,  510 => 228,  503 => 226,  499 => 224,  495 => 222,  493 => 221,  490 => 220,  488 => 219,  485 => 218,  483 => 217,  480 => 216,  478 => 215,  475 => 214,  472 => 213,  470 => 212,  467 => 211,  460 => 208,  456 => 206,  452 => 204,  450 => 203,  447 => 202,  445 => 201,  442 => 200,  440 => 199,  437 => 198,  435 => 197,  432 => 196,  429 => 195,  427 => 194,  423 => 192,  421 => 191,  417 => 189,  410 => 185,  403 => 180,  401 => 179,  397 => 177,  390 => 173,  386 => 171,  384 => 170,  381 => 169,  375 => 165,  368 => 162,  364 => 160,  360 => 158,  358 => 157,  355 => 156,  353 => 155,  350 => 154,  348 => 153,  345 => 152,  343 => 151,  340 => 150,  337 => 149,  335 => 148,  332 => 147,  325 => 144,  321 => 142,  317 => 140,  315 => 139,  312 => 138,  310 => 137,  307 => 136,  305 => 135,  302 => 134,  300 => 133,  297 => 132,  294 => 131,  292 => 130,  289 => 129,  282 => 126,  278 => 124,  274 => 122,  272 => 121,  269 => 120,  267 => 119,  264 => 118,  262 => 117,  259 => 116,  257 => 115,  254 => 114,  251 => 113,  249 => 112,  246 => 111,  239 => 108,  235 => 106,  231 => 104,  229 => 103,  226 => 102,  224 => 101,  221 => 100,  219 => 99,  216 => 98,  214 => 97,  211 => 96,  208 => 95,  206 => 94,  202 => 92,  200 => 91,  197 => 90,  190 => 86,  186 => 84,  184 => 83,  169 => 70,  164 => 67,  158 => 65,  156 => 64,  153 => 63,  143 => 60,  140 => 59,  130 => 56,  127 => 55,  124 => 54,  120 => 51,  118 => 50,  115 => 49,  107 => 44,  103 => 43,  98 => 40,  96 => 39,  92 => 37,  84 => 32,  76 => 26,  73 => 13,  71 => 12,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/corporation/templates/page.html.twig", "/var/www/html/drupal/themes/corporation/templates/page.html.twig");
    }
}
