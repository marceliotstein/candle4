<?php

/* themes/contrib/jethro/templates/page.html.twig */
class __TwigTemplate_a699bd07ed860d32777986157afb7690afc844f135050cf2713ae85d996b2085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 62, "for" => 87, "set" => 89);
        $filters = array("raw" => 97);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 61
        echo "
";
        // line 62
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 63
            echo "  <div class=\"navbar navbar-default\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
            ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 78
        echo "

";
        // line 81
        if ((isset($context["slider"]) ? $context["slider"] : null)) {
            // line 82
            echo "<div id=\"slideshow\">
  <div class=\"container\">
    <div class=\"row\">
      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["slide"]) {
                // line 88
                echo "            ";
                if (($context["key"] == 0)) {
                    // line 89
                    echo "              ";
                    $context["active"] = "active";
                    // line 90
                    echo "            ";
                } else {
                    // line 91
                    echo "              ";
                    $context["active"] = "";
                    // line 92
                    echo "            ";
                }
                // line 93
                echo "            <div class=\"item ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["active"]) ? $context["active"] : null), "html", null, true));
                echo "\">
              <a href=\"";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "src", array()), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["slide"], "name", array()), "html", null, true));
                echo "\"></a>
              ";
                // line 95
                if ($this->getAttribute($context["slide"], "description", array())) {
                    // line 96
                    echo "                <div class=\"carousel-caption\">
                  <p>";
                    // line 97
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["slide"], "description", array())));
                    echo "</p>
                </div>
              ";
                }
                // line 100
                echo "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 116
        echo "
<!-- Yellow Wrap -->
";
        // line 118
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()))) {
            // line 119
            echo "  <div id=\"db\">
    <div class=\"container\">
      <div class=\"row centered\">
        ";
            // line 122
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array())) {
                // line 123
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 124
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_first", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 127
            echo "
        ";
            // line 128
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array())) {
                // line 129
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 130
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_second", array()), "html", null, true));
                echo "

          </div><!-- /col-lg-4 -->
        ";
            }
            // line 134
            echo "
        ";
            // line 135
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array())) {
                // line 136
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["banner_bottom_class"]) ? $context["banner_bottom_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 137
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom_third", array()), "html", null, true));
                echo "
          </div><!-- /col-lg-4 -->
        ";
            }
            // line 140
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /yellow wrap -->
";
        }
        // line 144
        echo "
<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 148
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 149
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
          <div class=\"sidebar\">
            ";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 155
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 156
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
          ";
            // line 157
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
          ";
            // line 158
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 161
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 162
            echo "        <div class=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
          <div class=\"sidebar\">
            ";
            // line 164
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 168
        echo "    </div>
  </div>
</div>

<div class=\"clearfix\"></div>

";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array())) {
            // line 175
            echo "  <div id=\"db\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 178
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_highlighted", array()), "html", null, true));
            echo "
      </div>
    </div><!-- /container -->
  </div><!-- /Dark Blue wrap -->

";
        }
        // line 184
        echo "

<!-- White Wrap Version 2 - footer top region-->
";
        // line 187
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array())) {
            // line 188
            echo "  <div id=\"y\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 191
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
            echo "
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /White Wrap Ver.2 - Social Icons -->

";
        }
        // line 197
        echo "
<!-- Footer Wrap -->
";
        // line 199
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()))) {
            // line 200
            echo "  <div id=\"db\">
    <div class=\"container\">
      <div class=\"row\">
        ";
            // line 203
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 204
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 205
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 208
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 209
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 210
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 213
            echo "        ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 214
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo "\">
            ";
                // line 215
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 218
            echo "      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /Footer wrap -->
";
        }
        // line 222
        echo "

<div id=\"c\" class=\"footer-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 227
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 228
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
      ";
        }
        // line 230
        echo "      <div class=\"clearfix\"></div>
      <div class=\"col-md-8 footer-main\">
        Pacifism21.org: Pacifism for the 21st Century
      </div>
      <div class=\"col-md-4 social-link-block\">
        ";
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["socialicons"]) ? $context["socialicons"] : null)));
        echo "
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/jethro/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 235,  383 => 230,  377 => 228,  375 => 227,  368 => 222,  362 => 218,  356 => 215,  351 => 214,  348 => 213,  342 => 210,  337 => 209,  334 => 208,  328 => 205,  323 => 204,  321 => 203,  316 => 200,  314 => 199,  310 => 197,  301 => 191,  296 => 188,  294 => 187,  289 => 184,  280 => 178,  275 => 175,  273 => 174,  265 => 168,  258 => 164,  252 => 162,  249 => 161,  243 => 158,  239 => 157,  234 => 156,  231 => 155,  224 => 151,  218 => 149,  216 => 148,  210 => 144,  204 => 140,  198 => 137,  193 => 136,  191 => 135,  188 => 134,  181 => 130,  176 => 129,  174 => 128,  171 => 127,  165 => 124,  160 => 123,  158 => 122,  153 => 119,  151 => 118,  147 => 116,  131 => 102,  124 => 100,  118 => 97,  115 => 96,  113 => 95,  105 => 94,  100 => 93,  97 => 92,  94 => 91,  91 => 90,  88 => 89,  85 => 88,  81 => 87,  74 => 82,  72 => 81,  68 => 78,  59 => 72,  48 => 63,  46 => 62,  43 => 61,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/jethro/templates/page.html.twig", "/Applications/MAMP/htdocs/pac21_d8_summer2018/web/themes/contrib/jethro/templates/page.html.twig");
    }
}
