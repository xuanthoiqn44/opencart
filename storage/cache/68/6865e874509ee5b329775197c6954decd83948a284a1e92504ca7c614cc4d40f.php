<?php

/* journal3/template/account/reward.twig */
class __TwigTemplate_2c0804040b519c4b93a5a1a632fd45ef5a3b1535cc114f0909c3c5320c369ad1 extends Twig_Template
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
<div id=\"account-reward\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 24
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <p>";
        // line 25
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo " <b>";
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 30
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 31
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 32
        echo (isset($context["column_points"]) ? $context["column_points"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 37
        if ((isset($context["rewards"]) ? $context["rewards"] : null)) {
            // line 38
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rewards"]) ? $context["rewards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 39
                echo "          <tr>
            <td class=\"text-left\">";
                // line 40
                echo $this->getAttribute($context["reward"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 41
                if ($this->getAttribute($context["reward"], "order_id", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["reward"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["reward"], "description", array());
                    echo "</a> ";
                } else {
                    // line 42
                    echo "              ";
                    echo $this->getAttribute($context["reward"], "description", array());
                    echo "
              ";
                }
                // line 43
                echo "</td>
            <td class=\"text-right\">";
                // line 44
                echo $this->getAttribute($context["reward"], "points", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          ";
        } else {
            // line 48
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 49
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 52
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
        // line 57
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 58
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 61
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 63
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 64
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 66,  203 => 64,  199 => 63,  192 => 61,  186 => 58,  182 => 57,  175 => 52,  169 => 49,  166 => 48,  163 => 47,  154 => 44,  151 => 43,  145 => 42,  137 => 41,  133 => 40,  130 => 39,  125 => 38,  123 => 37,  115 => 32,  111 => 31,  107 => 30,  97 => 25,  92 => 24,  86 => 22,  84 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="account-reward" class="container">*/
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
/*       <p>{{ text_total }} <b>{{ total }}</b>.</p>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_date_added }}</td>*/
/*               <td class="text-left">{{ column_description }}</td>*/
/*               <td class="text-right">{{ column_points }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% if rewards %}*/
/*           {% for reward in rewards %}*/
/*           <tr>*/
/*             <td class="text-left">{{ reward.date_added }}</td>*/
/*             <td class="text-left">{% if reward.order_id %} <a href="{{ reward.href }}">{{ reward.description }}</a> {% else %}*/
/*               {{ reward.description }}*/
/*               {% endif %}</td>*/
/*             <td class="text-right">{{ reward.points }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="3">{{ text_empty }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       <div class="row pagination-results">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
