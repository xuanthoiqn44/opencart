<?php

/* journal3/template/journal3/headers/desktop/classic.twig */
class __TwigTemplate_84379d711d183df18eca8bfade3aef52c573e77f4c3f7a43ef6b3d38f3aca227 extends Twig_Template
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
        // line 1
        echo "<div class=\"header header-classic header-lg\">
  <div class=\"top-bar navbar-nav\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu"), "method");
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "langPosition"), "method") == "top")) {
            // line 5
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">";
            // line 7
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">";
            // line 10
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
        </div>
      </div>";
        }
        // line 14
        echo "    <div class=\"third-menu\">";
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_3"), "method");
        echo "</div>";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "secondaryMenuPosition"), "method") == "top")) {
            // line 16
            echo "      <div class=\"top-menu secondary-menu\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_2"), "method");
            echo "</div>";
        }
        // line 18
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method")) {
            // line 23
            echo "          <a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
            <img src=\"";
            // line 24
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
            echo "\"";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method")) {
                echo "srcset=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
                echo " 1x,";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method");
                echo " 2x\"";
            }
            echo " width=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_width"), "method");
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_height"), "method");
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"/>
          </a>";
        } else {
            // line 27
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>";
        }
        // line 29
        echo "      </div>
    </div>";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMainMenu2Position"), "method") == "top")) {
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_main_menu_2"), "method");
        }
        // line 34
        echo "    <div class=\"desktop-search-wrapper full-search default-search-wrapper\">";
        // line 35
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
    </div>";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "langPosition"), "method") == "search")) {
            // line 38
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">";
            // line 40
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">";
            // line 43
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
        </div>
      </div>";
        }
        // line 47
        echo "    <div class=\"classic-cart-wrapper\">";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "secondaryMenuPosition"), "method") == "cart")) {
            // line 49
            echo "          <div class=\"top-menu secondary-menu\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_2"), "method");
            echo "</div>";
        }
        // line 51
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartPosition"), "method") == "top")) {
            // line 52
            echo "          <div class=\"desktop-cart-wrapper default-cart-wrapper\">";
            // line 53
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "
          </div>";
        }
        // line 56
        echo "    </div>
  </div>
  <div class=\"desktop-main-menu-wrapper menu-";
        // line 58
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMenuLayout"), "method");
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_main_menu_2"), "method")) {
            echo "has-menu-2";
        }
        echo " navbar-nav\">";
        // line 59
        echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_main_menu"), "method")));
        // line 60
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "headerMainMenu2Position"), "method") == "menu")) {
            // line 61
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_main_menu_2"), "method");
        }
        // line 63
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartPosition"), "method") == "menu")) {
            // line 64
            echo "      <div class=\"desktop-cart-wrapper default-cart-wrapper\">";
            // line 65
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "
      </div>";
        }
        // line 68
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/classic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  160 => 65,  158 => 64,  156 => 63,  153 => 61,  151 => 60,  149 => 59,  143 => 58,  139 => 56,  134 => 53,  132 => 52,  130 => 51,  125 => 49,  123 => 48,  121 => 47,  115 => 43,  110 => 40,  107 => 38,  105 => 37,  101 => 35,  99 => 34,  96 => 32,  94 => 31,  91 => 29,  84 => 27,  63 => 24,  58 => 23,  56 => 22,  51 => 18,  46 => 16,  44 => 15,  40 => 14,  34 => 10,  29 => 7,  26 => 5,  24 => 4,  22 => 3,  19 => 1,);
    }
}
/* <div class="header header-classic header-lg">*/
/*   <div class="top-bar navbar-nav">*/
/*     {{ j3.settings.get('desktop_top_menu') }}*/
/*     {% if j3.settings.get('langPosition') == 'top' %}*/
/*       <div class="language-currency top-menu">*/
/*         <div class="desktop-language-wrapper">*/
/*           {{ language }}*/
/*         </div>*/
/*         <div class="desktop-currency-wrapper">*/
/*           {{ currency }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="third-menu">{{ j3.settings.get('desktop_top_menu_3') }}</div>*/
/*     {% if j3.settings.get('secondaryMenuPosition') == 'top' %}*/
/*       <div class="top-menu secondary-menu">{{ j3.settings.get('desktop_top_menu_2') }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="mid-bar navbar-nav">*/
/*     <div class="desktop-logo-wrapper">*/
/*       <div id="logo">*/
/*         {% if j3.settings.get('logo_src') %}*/
/*           <a href="{{ home }}">*/
/*             <img src="{{ j3.settings.get('logo_src') }}" {% if j3.settings.get('logo2x_src') %}srcset="{{ j3.settings.get('logo_src') }} 1x, {{ j3.settings.get('logo2x_src') }} 2x"{% endif %} width="{{ j3.settings.get('logo_width') }}" height="{{ j3.settings.get('logo_height') }}" alt="{{ name }}" title="{{ name }}"/>*/
/*           </a>*/
/*         {% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     {% if j3.settings.get('headerMainMenu2Position') == 'top' %}*/
/*       {{ j3.settings.get('desktop_main_menu_2') }}*/
/*     {% endif %}*/
/*     <div class="desktop-search-wrapper full-search default-search-wrapper">*/
/*       {{ search }}*/
/*     </div>*/
/*     {% if j3.settings.get('langPosition') == 'search' %}*/
/*       <div class="language-currency top-menu">*/
/*         <div class="desktop-language-wrapper">*/
/*           {{ language }}*/
/*         </div>*/
/*         <div class="desktop-currency-wrapper">*/
/*           {{ currency }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="classic-cart-wrapper">*/
/*         {% if j3.settings.get('secondaryMenuPosition') == 'cart' %}*/
/*           <div class="top-menu secondary-menu">{{ j3.settings.get('desktop_top_menu_2') }}</div>*/
/*         {% endif %}*/
/*         {% if j3.settings.get('cartPosition') == 'top' %}*/
/*           <div class="desktop-cart-wrapper default-cart-wrapper">*/
/*               {{ cart }}*/
/*           </div>*/
/*         {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="desktop-main-menu-wrapper menu-{{ j3.settings.get('headerMenuLayout') }} {% if j3.settings.get('desktop_main_menu_2') %}has-menu-2{% endif %} navbar-nav">*/
/*     {{ j3.document.hasClass('mobile-header-active') ? '' : j3.settings.get('desktop_main_menu') }}*/
/*     {% if j3.settings.get('headerMainMenu2Position') == 'menu' %}*/
/*     {{ j3.settings.get('desktop_main_menu_2') }}*/
/*     {% endif %}*/
/*     {% if j3.settings.get('cartPosition') == 'menu' %}*/
/*       <div class="desktop-cart-wrapper default-cart-wrapper">*/
/*         {{ cart }}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
