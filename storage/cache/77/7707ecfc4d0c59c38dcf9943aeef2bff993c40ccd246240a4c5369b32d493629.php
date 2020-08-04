<?php

/* journal3/template/account/register.twig */
class __TwigTemplate_627610eb1d107aa7ffea52356193e7e1f0f87418af6ae746b0ceb90ddf9f7a96 extends Twig_Template
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
        // line 2
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 3
            echo "<ul class=\"breadcrumb\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 5
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</ul>";
            // line 8
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
                // line 9
                echo "  <h1 class=\"title page-title\"><span>";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</span></h1>";
            }
            // line 11
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
            echo "
<div id=\"account-register\" class=\"container\">";
            // line 13
            if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
                // line 14
                echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
                echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
                echo "</div>";
            }
            // line 16
            echo "  <div class=\"row\">";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            // line 17
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 18
                $context["class"] = "col-sm-6";
            } elseif ((            // line 19
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 20
                $context["class"] = "col-sm-9";
            } else {
                // line 22
                $context["class"] = "col-sm-12";
            }
            // line 24
            echo "    <div id=\"content\" class=\"";
            echo (isset($context["class"]) ? $context["class"] : null);
            echo " register-page\">";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
                // line 26
                echo "        <h1 class=\"title page-title\">";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h1>";
            }
            // line 28
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo "
      <p>";
            // line 29
            echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
            echo "</p>";
        }
        // line 31
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"register-form form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 33
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
          <div class=\"form-group required account-customer-group\" style=\"display:";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block";
        } else {
            echo " none";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 35
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 37
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 38
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 40
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />";
                // line 41
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
              </div>";
            } else {
                // line 44
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 46
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />";
                // line 47
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
              </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
          </div>
          <div class=\"form-group required account-firstname\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 53
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 55
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />";
        // line 56
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>";
        }
        // line 58
        echo " </div>
          </div>
          <div class=\"form-group required account-lastname\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 61
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 63
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />";
        // line 64
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>";
        }
        // line 66
        echo " </div>
          </div>
          <div class=\"form-group required account-email\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 69
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 71
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 72
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 74
        echo " </div>
          </div>
          <div class=\"form-group required account-telephone\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 77
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 79
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />";
        // line 80
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 81
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>";
        }
        // line 82
        echo " </div>
          </div>";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 85
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 86
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 87
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 89
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 90
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 97
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 98
                        echo "                
                
                
                
                <option value=\"";
                        // line 102
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>";
                    } else {
                        // line 109
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 114
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "              
              
              
              
              
              </select>";
                // line 128
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 129
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 130
                echo "</div>
          </div>";
            }
            // line 133
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 134
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 135
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div>";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 138
                    echo "                <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 139
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 140
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />";
                        // line 141
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>";
                    } else {
                        // line 143
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 144
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />";
                        // line 145
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>";
                    }
                    // line 146
                    echo " </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "</div>";
                // line 148
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 149
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 150
                echo "</div>
          </div>";
            }
            // line 153
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 154
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 155
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div>";
                // line 157
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 158
                    echo "                <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 159
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 160
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\" />";
                        // line 161
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>";
                    } else {
                        // line 163
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 164
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />";
                        // line 165
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>";
                    }
                    // line 166
                    echo " </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo " </div>";
                // line 168
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 169
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 170
                echo " </div>
          </div>";
            }
            // line 173
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 174
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 175
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 177
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />";
                // line 178
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 179
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 180
                echo " </div>
          </div>";
            }
            // line 183
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 184
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 185
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 187
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>";
                // line 188
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 189
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 190
                echo " </div>
          </div>";
            }
            // line 193
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 194
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 195
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 197
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 198
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                }
                echo "\" />";
                // line 199
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 200
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 201
                echo "</div>
          </div>";
            }
            // line 204
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 205
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 206
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 209
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>";
                // line 213
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 214
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 215
                echo " </div>
          </div>";
            }
            // line 218
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 219
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 220
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 223
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>";
                // line 227
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 228
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 229
                echo " </div>
          </div>";
            }
            // line 232
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 233
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 234
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 237
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>";
                // line 241
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 242
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>";
                }
                // line 243
                echo " </div>
          </div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 249
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label account-pass\" for=\"input-password\">";
        // line 251
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 253
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />";
        // line 254
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 255
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>";
        }
        // line 256
        echo " </div>
          </div>
          <div class=\"form-group required account-pass2\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 259
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 261
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />";
        // line 262
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 263
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>";
        }
        // line 264
        echo " </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 268
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 270
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 271
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 272
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />";
            // line 274
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />";
            // line 277
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>";
        } else {
            // line 279
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />";
            // line 281
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />";
            // line 284
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>";
        }
        // line 285
        echo " </div>
          </div>
        </fieldset>";
        // line 288
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        // line 289
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 290
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\">";
            // line 291
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            // line 292
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 293
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />";
            } else {
                // line 295
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />";
            }
            // line 297
            echo "            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span>\"><span>";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></button>
          </div>
        </div>";
        } else {
            // line 301
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            // line 303
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span>\"><span>";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></button>
          </div>
        </div>";
        }
        // line 307
        echo "      </form>";
        // line 308
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 309
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>";
            // line 310
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>";
        }
        // line 313
        echo "<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 414
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 419
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 424
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>";
        // line 429
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  997 => 429,  990 => 424,  982 => 419,  974 => 414,  871 => 313,  866 => 310,  863 => 309,  861 => 308,  859 => 307,  851 => 303,  847 => 301,  838 => 297,  835 => 295,  832 => 293,  830 => 292,  828 => 291,  825 => 290,  823 => 289,  821 => 288,  817 => 285,  813 => 284,  808 => 281,  805 => 279,  801 => 277,  796 => 274,  793 => 272,  791 => 271,  787 => 270,  782 => 268,  776 => 264,  771 => 263,  769 => 262,  764 => 261,  759 => 259,  754 => 256,  749 => 255,  747 => 254,  742 => 253,  737 => 251,  732 => 249,  728 => 247,  720 => 243,  715 => 242,  713 => 241,  695 => 237,  687 => 234,  680 => 233,  678 => 232,  674 => 229,  669 => 228,  667 => 227,  649 => 223,  641 => 220,  634 => 219,  632 => 218,  628 => 215,  623 => 214,  621 => 213,  603 => 209,  595 => 206,  588 => 205,  586 => 204,  582 => 201,  577 => 200,  575 => 199,  566 => 198,  558 => 197,  553 => 195,  546 => 194,  544 => 193,  540 => 190,  535 => 189,  533 => 188,  518 => 187,  511 => 185,  504 => 184,  502 => 183,  498 => 180,  493 => 179,  491 => 178,  476 => 177,  469 => 175,  462 => 174,  460 => 173,  456 => 170,  451 => 169,  449 => 168,  447 => 167,  441 => 166,  437 => 165,  430 => 164,  427 => 163,  423 => 161,  416 => 160,  413 => 159,  410 => 158,  406 => 157,  401 => 155,  394 => 154,  392 => 153,  388 => 150,  383 => 149,  381 => 148,  379 => 147,  373 => 146,  369 => 145,  362 => 144,  359 => 143,  355 => 141,  348 => 140,  345 => 139,  342 => 138,  338 => 137,  333 => 135,  326 => 134,  324 => 133,  320 => 130,  315 => 129,  313 => 128,  306 => 122,  296 => 114,  289 => 109,  283 => 102,  277 => 98,  275 => 97,  271 => 96,  268 => 90,  260 => 89,  253 => 87,  246 => 86,  244 => 85,  240 => 84,  237 => 82,  232 => 81,  230 => 80,  225 => 79,  220 => 77,  215 => 74,  210 => 73,  208 => 72,  203 => 71,  198 => 69,  193 => 66,  188 => 65,  186 => 64,  181 => 63,  176 => 61,  171 => 58,  166 => 57,  164 => 56,  159 => 55,  154 => 53,  149 => 50,  140 => 47,  137 => 46,  133 => 44,  128 => 41,  125 => 40,  121 => 38,  119 => 37,  115 => 36,  111 => 35,  103 => 34,  99 => 33,  93 => 31,  89 => 29,  85 => 28,  80 => 26,  78 => 25,  74 => 24,  71 => 22,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  59 => 16,  54 => 14,  52 => 13,  48 => 11,  43 => 9,  41 => 8,  39 => 7,  29 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% if not j3.document.isPopup() %}*/
/* <ul class="breadcrumb">*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*   <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if j3.settings.get('pageTitlePosition') == 'top' %}*/
/*   <h1 class="title page-title"><span>{{ heading_title }}</span></h1>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* <div id="account-register" class="container">*/
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
/*     <div id="content" class="{{ class }} register-page">*/
/*       {% if j3.settings.get('pageTitlePosition') == 'default' %}*/
/*         <h1 class="title page-title">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <p>{{ text_account_already }}</p>*/
/* {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="register-form form-horizontal">*/
/*         <fieldset id="account">*/
/*           <legend>{{ text_your_details }}</legend>*/
/*           <div class="form-group required account-customer-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*             <label class="col-sm-2 control-label">{{ entry_customer_group }}</label>*/
/*             <div class="col-sm-10">{% for customer_group in customer_groups %}*/
/*               {% if customer_group.customer_group_id == customer_group_id %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                   {{ customer_group.name }}</label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*                   {{ customer_group.name }}</label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="form-group required account-firstname">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required account-lastname">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required account-email">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required account-telephone">*/
/*             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% for custom_field in custom_fields %}*/
/*           {% if custom_field.type == 'select' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               */
/*               */
/*               */
/*               */
/*               </select>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'radio' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="radio">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %}</div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'checkbox' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <label>*/
/*                     <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                     {{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'text' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'textarea' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'file' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'date' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_your_password }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label account-pass" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required account-pass2">*/
/*             <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*               {% if error_confirm %}*/
/*               <div class="text-danger">{{ error_confirm }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_newsletter }}</legend>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_newsletter }}</label>*/
/*             <div class="col-sm-10"> {% if newsletter %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="1" checked="checked" />*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="0" />*/
/*                 {{ text_no }}</label>*/
/*               {% else %}*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="1" />*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline">*/
/*                 <input type="radio" name="newsletter" value="0" checked="checked" />*/
/*                 {{ text_no }}</label>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         {{ captcha }}*/
/*         {% if text_agree %}*/
/*         <div class="buttons">*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             <button type="submit" class="btn btn-primary" data-loading-text="<span>{{ button_continue }}</span>"><span>{{ button_continue }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <button type="submit" class="btn btn-primary" data-loading-text="<span>{{ button_continue }}</span>"><span>{{ button_continue }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/* {% if not j3.document.isPopup() %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/* 		$('#account .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('button[id^=\'button-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
