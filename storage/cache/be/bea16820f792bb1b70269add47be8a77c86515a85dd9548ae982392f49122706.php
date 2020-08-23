<?php

/* extension/module/paypal_smart_button.twig */
class __TwigTemplate_f5c8ed33fa2dfde5d03e3d4521000f303bd796908ccd49dc1e125aa5c0a44052 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form_module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">   
\t\t\t\t<form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_module\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab_general\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 32
            echo "\t\t\t\t\t\t<li><a href=\"#tab_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context, $this->getAttribute($context["page"], "name", array(), "array"));
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab_general\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_status\">";
        // line 39
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_status\" id=\"input_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 44
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 47
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 54
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_status\">";
            echo $this->getAttribute($context, (("entry_" . $this->getAttribute($context["page"], "code", array(), "array")) . "_page_status"));
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 56
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][status]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 57
            if ($this->getAttribute($context["page"], "status", array(), "array")) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 59
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 62
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "page", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 70
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 72
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_insert_tag\">";
            echo (isset($context["entry_insert_tag"]) ? $context["entry_insert_tag"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_paypal_smart_button_setting[page][";
            // line 74
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][insert_tag]\" value=\"";
            echo $this->getAttribute($context["page"], "insert_tag", array(), "array");
            echo "\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_insert_tag\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 78
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_insert_type\">";
            echo (isset($context["entry_insert_type"]) ? $context["entry_insert_type"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 80
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][insert_type]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_insert_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "insert_type", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["insert_type"]) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["insert_type"], "code", array(), "array") == $this->getAttribute($context["page"], "insert_type", array(), "array"))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["insert_type"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["insert_type"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["insert_type"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["insert_type"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insert_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 92
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_align\">";
            echo (isset($context["entry_button_align"]) ? $context["entry_button_align"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 94
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][button_align]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_align", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_align"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_align"], "code", array(), "array") == $this->getAttribute($context["page"], "button_align", array(), "array"))) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_align"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_align"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_align"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_align"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_align'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 106
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_size\">";
            echo (isset($context["entry_button_size"]) ? $context["entry_button_size"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 108
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][button_size]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_size", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_size"]) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_size"], "code", array(), "array") == $this->getAttribute($context["page"], "button_size", array(), "array"))) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_size"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_size"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_size"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_size"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 120
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_color\">";
            echo (isset($context["entry_button_color"]) ? $context["entry_button_color"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 122
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][button_color]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_color\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_color", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_color"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_color"], "code", array(), "array") == $this->getAttribute($context["page"], "button_color", array(), "array"))) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_color"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_color"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_color"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_color"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 134
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_shape\">";
            echo (isset($context["entry_button_shape"]) ? $context["entry_button_shape"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 136
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][button_shape]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_shape\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_shape", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_shape"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_shape"], "code", array(), "array") == $this->getAttribute($context["page"], "button_shape", array(), "array"))) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_shape"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_shape"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_shape"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_shape"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_shape'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 148
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_label\">";
            echo (isset($context["entry_button_label"]) ? $context["entry_button_label"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 150
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "][button_label]\" id=\"input_page_";
            echo $this->getAttribute($context["page"], "code", array(), "array");
            echo "_button_label\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_label", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_label"]) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_label"], "code", array(), "array") == $this->getAttribute($context["page"], "button_label", array(), "array"))) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_label"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_label"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_label"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_label"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_button_tagline\">";
            // line 162
            echo (isset($context["entry_button_tagline"]) ? $context["entry_button_tagline"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_tagline\" id=\"input_button_tagline\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_tagline", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["button_tagline"]) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["button_tagline"], "code", array(), "array") == $this->getAttribute($context["page"], "button_tagline", array(), "array"))) {
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_tagline"], "code", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_tagline"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["button_tagline"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context, $this->getAttribute($context["button_tagline"], "name", array(), "array"));
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_tagline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 183
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/paypal_smart_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 183,  564 => 177,  554 => 172,  548 => 171,  540 => 169,  532 => 167,  529 => 166,  525 => 165,  519 => 162,  513 => 158,  507 => 157,  499 => 155,  491 => 153,  488 => 152,  484 => 151,  478 => 150,  471 => 148,  465 => 144,  459 => 143,  451 => 141,  443 => 139,  440 => 138,  436 => 137,  430 => 136,  423 => 134,  417 => 130,  411 => 129,  403 => 127,  395 => 125,  392 => 124,  388 => 123,  382 => 122,  375 => 120,  369 => 116,  363 => 115,  355 => 113,  347 => 111,  344 => 110,  340 => 109,  334 => 108,  327 => 106,  321 => 102,  315 => 101,  307 => 99,  299 => 97,  296 => 96,  292 => 95,  286 => 94,  279 => 92,  273 => 88,  267 => 87,  259 => 85,  251 => 83,  248 => 82,  244 => 81,  238 => 80,  231 => 78,  220 => 74,  213 => 72,  207 => 70,  203 => 69,  200 => 68,  191 => 64,  186 => 62,  181 => 61,  176 => 59,  171 => 58,  169 => 57,  163 => 56,  156 => 54,  153 => 53,  149 => 52,  144 => 49,  139 => 47,  134 => 46,  129 => 44,  124 => 43,  122 => 42,  116 => 39,  109 => 34,  98 => 32,  94 => 31,  90 => 30,  85 => 28,  79 => 25,  75 => 23,  67 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form_module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">   */
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form_module" class="form-horizontal">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab_general" data-toggle="tab">{{ text_general }}</a></li>*/
/* 						{% for page in setting['page'] %}*/
/* 						<li><a href="#tab_{{ page['code'] }}" data-toggle="tab">{{ attribute(_context, page['name']) }}</a></li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 					*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane active" id="tab_general">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_status">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_status" id="input_status" class="form-control">*/
/* 										{% if status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% for page in setting['page'] %}*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_status">{{ attribute(_context, 'entry_' ~ page['code'] ~ '_page_status') }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][status]" id="input_page_{{ page['code'] }}_status" class="form-control">*/
/* 										{% if page['status'] %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						{% for page in setting['page'] %}*/
/* 						<div class="tab-pane" id="tab_{{ page['code'] }}">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_insert_tag">{{ entry_insert_tag }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="module_paypal_smart_button_setting[page][{{ page['code'] }}][insert_tag]" value="{{ page['insert_tag'] }}" id="input_page_{{ page['code'] }}_insert_tag" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_insert_type">{{ entry_insert_type }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][insert_type]" id="input_page_{{ page['code'] }}_insert_type" class="form-control">*/
/* 										{% for insert_type in setting['insert_type'] %}*/
/* 										{% if (insert_type['code'] == page['insert_type']) %}*/
/* 										<option value="{{ insert_type['code'] }}" selected="selected">{{ attribute(_context, insert_type['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ insert_type['code'] }}">{{ attribute(_context, insert_type['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_button_align">{{ entry_button_align }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][button_align]" id="input_page_{{ page['code'] }}_button_align" class="form-control">*/
/* 										{% for button_align in setting['button_align'] %}*/
/* 										{% if (button_align['code'] == page['button_align']) %}*/
/* 										<option value="{{ button_align['code'] }}" selected="selected">{{ attribute(_context, button_align['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_align['code'] }}">{{ attribute(_context, button_align['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_button_size">{{ entry_button_size }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][button_size]" id="input_page_{{ page['code'] }}_button_size" class="form-control">*/
/* 										{% for button_size in setting['button_size'] %}*/
/* 										{% if (button_size['code'] == page['button_size']) %}*/
/* 										<option value="{{ button_size['code'] }}" selected="selected">{{ attribute(_context, button_size['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_size['code'] }}">{{ attribute(_context, button_size['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_button_color">{{ entry_button_color }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][button_color]" id="input_page_{{ page['code'] }}_button_color" class="form-control">*/
/* 										{% for button_color in setting['button_color'] %}*/
/* 										{% if (button_color['code'] == page['button_color']) %}*/
/* 										<option value="{{ button_color['code'] }}" selected="selected">{{ attribute(_context, button_color['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_color['code'] }}">{{ attribute(_context, button_color['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_shape">{{ entry_button_shape }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][button_shape]" id="input_page_{{ page['code'] }}_shape" class="form-control">*/
/* 										{% for button_shape in setting['button_shape'] %}*/
/* 										{% if (button_shape['code'] == page['button_shape']) %}*/
/* 										<option value="{{ button_shape['code'] }}" selected="selected">{{ attribute(_context, button_shape['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_shape['code'] }}">{{ attribute(_context, button_shape['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_page_{{ page['code'] }}_button_label">{{ entry_button_label }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_setting[page][{{ page['code'] }}][button_label]" id="input_page_{{ page['code'] }}_button_label" class="form-control">*/
/* 										{% for button_label in setting['button_label'] %}*/
/* 										{% if (button_label['code'] == page['button_label']) %}*/
/* 										<option value="{{ button_label['code'] }}" selected="selected">{{ attribute(_context, button_label['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_label['code'] }}">{{ attribute(_context, button_label['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_button_tagline">{{ entry_button_tagline }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="module_paypal_smart_button_tagline" id="input_button_tagline" class="form-control">*/
/* 										{% for button_tagline in setting['button_tagline'] %}*/
/* 										{% if (button_tagline['code'] == page['button_tagline']) %}*/
/* 										<option value="{{ button_tagline['code'] }}" selected="selected">{{ attribute(_context, button_tagline['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_tagline['code'] }}">{{ attribute(_context, button_tagline['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
