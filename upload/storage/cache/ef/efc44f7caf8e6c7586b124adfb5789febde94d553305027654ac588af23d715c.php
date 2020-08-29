<?php

/* journal3/template/account/account.twig */
class __TwigTemplate_91a4e71b494ddcd15ce7b7e845d46776b22cf1dd253309810df06cca8b846f0e extends Twig_Template
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
<div id=\"account-account\" class=\"container\">
  ";
        // line 12
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 15
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 16
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"account-page ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 25
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 27
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">";
        // line 29
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\"><a href=\"";
        // line 31
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
          <li class=\"edit-pass\"><a href=\"";
        // line 32
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
          <li class=\"edit-address\"><a href=\"";
        // line 33
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
          <li class=\"edit-wishlist\"><a href=\"";
        // line 34
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 37
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 38
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">";
            // line 39
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 42
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </ul>
        </div>
      ";
        }
        // line 47
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">";
        // line 48
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\"><a href=\"";
        // line 50
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li class=\"edit-downloads\"><a href=\"";
        // line 51
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
          ";
        // line 52
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 53
            echo "            <li class=\"edit-rewards\"><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
          ";
        }
        // line 55
        echo "          <li class=\"edit-returns\"><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li class=\"edit-transactions\"><a href=\"";
        // line 56
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
          <li class=\"edit-recurring\"><a href=\"";
        // line 57
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">";
        // line 61
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 63
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 64
            echo "            <li class=\"affiliate-add\"><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
          ";
        } else {
            // line 66
            echo "            <li class=\"affiliate-edit\"><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
            <li class=\"affiliate-track\"><a href=\"";
            // line 67
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
          ";
        }
        // line 69
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">";
        // line 72
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
        <ul class=\"list-unstyled account-list\">
          <li><a href=\"";
        // line 74
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 77
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 78
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 80
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 80,  271 => 78,  267 => 77,  259 => 74,  254 => 72,  249 => 69,  242 => 67,  235 => 66,  227 => 64,  225 => 63,  220 => 61,  211 => 57,  205 => 56,  198 => 55,  190 => 53,  188 => 52,  182 => 51,  176 => 50,  171 => 48,  168 => 47,  163 => 44,  152 => 42,  148 => 41,  143 => 39,  140 => 38,  138 => 37,  130 => 34,  124 => 33,  118 => 32,  112 => 31,  107 => 29,  101 => 27,  95 => 25,  93 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  63 => 15,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="account-account" class="container">*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="account-page {{ class }}">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="my-account">*/
/*         <h2 class="title">{{ text_my_account }}</h2>*/
/*         <ul class="list-unstyled account-list">*/
/*           <li class="edit-info"><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*           <li class="edit-pass"><a href="{{ password }}">{{ text_password }}</a></li>*/
/*           <li class="edit-address"><a href="{{ address }}">{{ text_address }}</a></li>*/
/*           <li class="edit-wishlist"><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       {% if credit_cards %}*/
/*         <div class="my-cards">*/
/*           <h2 class="title">{{ text_credit_card }}</h2>*/
/*           <ul class="list-unstyled account-list">*/
/*             {% for credit_card in credit_cards %}*/
/*               <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="my-orders">*/
/*         <h2 class="title">{{ text_my_orders }}</h2>*/
/*         <ul class="list-unstyled account-list">*/
/*           <li class="edit-order"><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li class="edit-downloads"><a href="{{ download }}">{{ text_download }}</a></li>*/
/*           {% if reward %}*/
/*             <li class="edit-rewards"><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*           {% endif %}*/
/*           <li class="edit-returns"><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li class="edit-transactions"><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*           <li class="edit-recurring"><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="my-affiliates">*/
/*         <h2 class="title">{{ text_my_affiliate }}</h2>*/
/*         <ul class="list-unstyled account-list">*/
/*           {% if not tracking %}*/
/*             <li class="affiliate-add"><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*           {% else %}*/
/*             <li class="affiliate-edit"><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*             <li class="affiliate-track"><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*       <div class="my-newsletter">*/
/*         <h2 class="title">{{ text_my_newsletter }}</h2>*/
/*         <ul class="list-unstyled account-list">*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
