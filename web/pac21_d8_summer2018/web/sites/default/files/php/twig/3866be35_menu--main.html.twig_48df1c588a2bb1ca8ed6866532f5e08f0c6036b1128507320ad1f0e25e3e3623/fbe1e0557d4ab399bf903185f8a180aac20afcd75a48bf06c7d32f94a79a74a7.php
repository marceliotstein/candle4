<?php

/* themes/contrib/jethro/templates/menu--main.html.twig */
class __TwigTemplate_904174d9ee49d6cf39550ea6c9ef530a671f6e46db1f97381f315f27f55d534e extends Twig_Template
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
        $tags = array("import" => 13, "macro" => 20, "if" => 22, "for" => 28);
        $filters = array();
        $functions = array("link" => 42);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 10
        echo "
";
        // line 12
        echo "<div class=\"collapse navbar-collapse\">
  ";
        // line 13
        $context["menus"] = $this;
        // line 14
        echo "  ";
        // line 18
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

  ";
        // line 48
        echo "</div>
<div class=\"logo-box\">
  <div class=\"col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl\" id=\"site-logo\">
    <a href=\"http://pacifism21.org/\" title=\"Home\" rel=\"home\" class=\"site-logo\"><img class=\"img-responsive\" src=\"/themes/contrib/jethro/images/peacebrain992.png\" alt=\"Pacifism21.org\" /></a>
  </div>
</div>
  <div class=\"hidden-xs hidden-sm col-md-12\" id=\"site-logo\">
    <a href=\"http://pacifism21.org/\" title=\"Home\" rel=\"home\" class=\"site-logo\"><img class=\"img-responsive\" src=\"/themes/contrib/jethro/images/peacebrain1200.png\" alt=\"Pacifism21.org\" /></a>
  </div>
</div>
";
    }

    // line 20
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "    ";
            $context["menus"] = $this;
            // line 22
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 23
                echo "      ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 24
                    echo "        <ul class=\"nav navbar-nav\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
      ";
                } else {
                    // line 26
                    echo "        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
      ";
                }
                // line 28
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 30
                        echo "          ";
                        if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                            // line 31
                            echo "            <li class=\"dropdown\">
              <a href=\"";
                            // line 32
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo " <span class=\"caret\"></span></a>
              ";
                            // line 33
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
            </li>
          ";
                        } else {
                            // line 36
                            echo "            <li class=\"dropdown-submenu\">
              <a href=\"";
                            // line 37
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
              ";
                            // line 38
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
            </li>
          ";
                        }
                        // line 41
                        echo "        ";
                    } else {
                        // line 42
                        echo "          <li ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "</li>
        ";
                    }
                    // line 44
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "      </ul>
    ";
            }
            // line 47
            echo "  ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/jethro/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  162 => 45,  156 => 44,  148 => 42,  145 => 41,  139 => 38,  133 => 37,  130 => 36,  124 => 33,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  104 => 28,  100 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  73 => 20,  59 => 48,  53 => 18,  51 => 14,  49 => 13,  46 => 12,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/jethro/templates/menu--main.html.twig", "/Applications/MAMP/htdocs/pac21_d8_summer2018/web/themes/contrib/jethro/templates/menu--main.html.twig");
    }
}
