<?php

/* journal3/template/account/wishlist.twig */
class __TwigTemplate_880168528ead29fb4c658d1f8c7c4084dbfd5ecc2efad7a57c503a08330b0eff extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</span></h1>
";
        }
        // line 10
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 12
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 18
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 20
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 27
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 29
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 30
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 31
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center td-image\">";
            // line 35
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
              <td class=\"text-left td-name\">";
            // line 36
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
              <td class=\"text-center td-model\">";
            // line 37
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
              <td class=\"text-center td-stock\">";
            // line 38
            echo (isset($context["column_stock"]) ? $context["column_stock"] : null);
            echo "</td>
              <td class=\"text-center td-price\">";
            // line 39
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
              <td class=\"text-center td-action\">";
            // line 40
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "          <tr class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["product"], "classes", array())), "method");
                echo "\">
            <td class=\"text-center td-image\">";
                // line 47
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left td-name\"><a href=\"";
                // line 48
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
            <td class=\"text-center td-model\">";
                // line 49
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            <td class=\"text-center td-stock ";
                // line 50
                if ($this->getAttribute($context["product"], "quantity", array())) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\">";
                echo $this->getAttribute($context["product"], "stock", array());
                echo "</td>
            <td class=\"text-center td-price\">";
                // line 51
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 52
                    echo "              <div class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 53
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 54
                        echo " <b>";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</b> <s>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 55
                echo "</td>
            <td class=\"text-center td-action\">
              ";
                // line 57
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                    // line 58
                    echo "              <button type=\"button\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" class=\"btn btn-primary\" data-loading-text=\"<i class='fa fa-shopping-cart'></i>\"><i class=\"fa fa-shopping-cart\"></i></button>
              ";
                }
                // line 60
                echo "              <a href=\"";
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-remove\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 68
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 70
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 71
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 73
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 74
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 76
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 76,  261 => 74,  257 => 73,  250 => 71,  247 => 70,  241 => 68,  234 => 63,  222 => 60,  214 => 58,  212 => 57,  208 => 55,  198 => 54,  192 => 53,  189 => 52,  187 => 51,  177 => 50,  173 => 49,  167 => 48,  153 => 47,  148 => 46,  144 => 45,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  110 => 31,  108 => 30,  103 => 29,  97 => 27,  95 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  70 => 18,  65 => 17,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="account-wishlist" class="container">*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if products %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-center td-image">{{ column_image }}</td>*/
/*               <td class="text-left td-name">{{ column_name }}</td>*/
/*               <td class="text-center td-model">{{ column_model }}</td>*/
/*               <td class="text-center td-stock">{{ column_stock }}</td>*/
/*               <td class="text-center td-price">{{ column_price }}</td>*/
/*               <td class="text-center td-action">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr class="{{ j3.classes(product.classes) }}">*/
/*             <td class="text-center td-image">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a>{% endif %}</td>*/
/*             <td class="text-left td-name"><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*             <td class="text-center td-model">{{ product.model }}</td>*/
/*             <td class="text-center td-stock {% if product.quantity %}in-stock{% else %}out-of-stock{% endif %}">{{ product.stock }}</td>*/
/*             <td class="text-center td-price">{% if product.price %}*/
/*               <div class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>*/
/*               {% endif %}</td>*/
/*             <td class="text-center td-action">*/
/*               {% if j3.settings.get('catalogCartStatus') %}*/
/*               <button type="button" onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" title="{{ button_cart }}" class="btn btn-primary" data-loading-text="<i class='fa fa-shopping-cart'></i>"><i class="fa fa-shopping-cart"></i></button>*/
/*               {% endif %}*/
/*               <a href="{{ product.remove }}" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-remove"><i class="fa fa-times"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
