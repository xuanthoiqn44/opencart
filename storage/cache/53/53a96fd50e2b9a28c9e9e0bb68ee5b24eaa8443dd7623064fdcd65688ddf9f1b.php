<?php

/* journal3/template/account/voucher.twig */
class __TwigTemplate_659455cf6629352c95bc41b38c2988d2bdec97d2c2979707deb4d81a82f90372 extends Twig_Template
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
<div id=\"account-voucher\" class=\"container\">
  ";
        // line 12
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 13
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
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
        echo "    <div id=\"content\" class=\"";
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
      <p>";
        // line 28
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
      <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 31
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 33
        echo (isset($context["to_name"]) ? $context["to_name"] : null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 34
        if ((isset($context["error_to_name"]) ? $context["error_to_name"] : null)) {
            // line 35
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_name"]) ? $context["error_to_name"] : null);
            echo "</div>
            ";
        }
        // line 37
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 40
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 42
        echo (isset($context["to_email"]) ? $context["to_email"] : null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 43
        if ((isset($context["error_to_email"]) ? $context["error_to_email"] : null)) {
            // line 44
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_email"]) ? $context["error_to_email"] : null);
            echo "</div>
            ";
        }
        // line 46
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 49
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 51
        echo (isset($context["from_name"]) ? $context["from_name"] : null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 52
        if ((isset($context["error_from_name"]) ? $context["error_from_name"] : null)) {
            // line 53
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_name"]) ? $context["error_from_name"] : null);
            echo "</div>
            ";
        }
        // line 55
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 58
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 60
        echo (isset($context["from_email"]) ? $context["from_email"] : null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 61
        if ((isset($context["error_from_email"]) ? $context["error_from_email"] : null)) {
            // line 62
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_email"]) ? $context["error_from_email"] : null);
            echo "</div>
            ";
        }
        // line 64
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 67
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 70
            echo "            ";
            if (($this->getAttribute($context["voucher_theme"], "voucher_theme_id", array()) == (isset($context["voucher_theme_id"]) ? $context["voucher_theme_id"] : null))) {
                // line 71
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 73
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" checked=\"checked\" />
                ";
                // line 74
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            } else {
                // line 77
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 79
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" />
                ";
                // line 80
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            }
            // line 83
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            ";
        if ((isset($context["error_theme"]) ? $context["error_theme"] : null)) {
            // line 85
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_theme"]) ? $context["error_theme"] : null);
            echo "</div>
            ";
        }
        // line 87
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 90
        echo (isset($context["help_message"]) ? $context["help_message"] : null);
        echo "\">";
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 92
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 96
        echo (isset($context["help_amount"]) ? $context["help_amount"] : null);
        echo "\">";
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 98
        echo (isset($context["amount"]) ? $context["amount"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 99
        if ((isset($context["error_amount"]) ? $context["error_amount"] : null)) {
            // line 100
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_amount"]) ? $context["error_amount"] : null);
            echo "</div>
            ";
        }
        // line 102
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 105
        echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
        echo "
            ";
        // line 106
        if ((isset($context["agree"]) ? $context["agree"] : null)) {
            // line 107
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 109
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 111
        echo "            &nbsp;
            <button type=\"submit\" value=\"";
        // line 112
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" ><span>";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</span></button>
          </div>
        </div>
      </form>
      ";
        // line 116
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 117
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 119
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 119,  331 => 117,  327 => 116,  318 => 112,  315 => 111,  311 => 109,  307 => 107,  305 => 106,  301 => 105,  296 => 102,  290 => 100,  288 => 99,  284 => 98,  277 => 96,  270 => 92,  263 => 90,  258 => 87,  252 => 85,  249 => 84,  243 => 83,  237 => 80,  233 => 79,  229 => 77,  223 => 74,  219 => 73,  215 => 71,  212 => 70,  208 => 69,  203 => 67,  198 => 64,  192 => 62,  190 => 61,  186 => 60,  181 => 58,  176 => 55,  170 => 53,  168 => 52,  164 => 51,  159 => 49,  154 => 46,  148 => 44,  146 => 43,  142 => 42,  137 => 40,  132 => 37,  126 => 35,  124 => 34,  120 => 33,  115 => 31,  110 => 29,  106 => 28,  101 => 27,  95 => 25,  93 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  63 => 15,  57 => 13,  55 => 12,  50 => 10,  44 => 8,  42 => 7,  39 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
/* <div id="account-voucher" class="container">*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
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
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_name" value="{{ to_name }}" id="input-to-name" class="form-control" />*/
/*             {% if error_to_name %}*/
/*             <div class="text-danger">{{ error_to_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_email" value="{{ to_email }}" id="input-to-email" class="form-control" />*/
/*             {% if error_to_email %}*/
/*             <div class="text-danger">{{ error_to_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_name" value="{{ from_name }}" id="input-from-name" class="form-control" />*/
/*             {% if error_from_name %}*/
/*             <div class="text-danger">{{ error_from_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_email" value="{{ from_email }}" id="input-from-email" class="form-control" />*/
/*             {% if error_from_email %}*/
/*             <div class="text-danger">{{ error_from_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label">{{ entry_theme }}</label>*/
/*           <div class="col-sm-10">*/
/*            {% for voucher_theme in voucher_themes %}*/
/*             {% if voucher_theme.voucher_theme_id == voucher_theme_id %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" checked="checked" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% if error_theme %}*/
/*             <div class="text-danger">{{ error_theme }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-message"><span data-toggle="tooltip" title="{{ help_message }}">{{ entry_message }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <textarea name="message" cols="40" rows="5" id="input-message" class="form-control">{{ message }}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-amount"><span data-toggle="tooltip" title="{{ help_amount }}">{{ entry_amount }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="amount" value="{{ amount }}" id="input-amount" class="form-control" size="5" />*/
/*             {% if error_amount %}*/
/*             <div class="text-danger">{{ error_amount }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right"> {{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <button type="submit" value="{{ button_continue }}" class="btn btn-primary" ><span>{{ button_continue }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
