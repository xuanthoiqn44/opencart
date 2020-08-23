<?php

/* extension/payment/paypal.twig */
class __TwigTemplate_0cbe310619ab9dbd2671fe630bdf7e01f3de4c008e16717f6b9f7ad4ccff8931 extends Twig_Template
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
\t\t\t\t<button type=\"submit\" form=\"form_payment\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_payment\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-tab active\"><a href=\"#tab_general\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab\"><a href=\"#tab_order_status\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["text_order_status"]) ? $context["text_order_status"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab\"><a href=\"#tab_checkout_express\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["text_checkout_express"]) ? $context["text_checkout_express"] : null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab hidden\"><a href=\"#tab_checkout_card\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["text_checkout_card"]) ? $context["text_checkout_card"] : null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t  
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab_general\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_environment\">";
        // line 39
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_environment\" id=\"input_environment\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if (((isset($context["environment"]) ? $context["environment"] : null) == "production")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\" selected=\"selected\">";
            echo (isset($context["text_production"]) ? $context["text_production"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\">";
            // line 44
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\">";
            echo (isset($context["text_production"]) ? $context["text_production"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            // line 47
            echo (isset($context["text_sandbox"]) ? $context["text_sandbox"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_connect\">";
        // line 53
        echo (isset($context["entry_connect"]) ? $context["entry_connect"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div id=\"section_connect\" ";
        // line 55
        if ((((isset($context["client_id"]) ? $context["client_id"] : null) && (isset($context["secret"]) ? $context["secret"] : null)) && (isset($context["merchant_id"]) ? $context["merchant_id"] : null))) {
            echo "class=\"hidden\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t\t\t\t\ta[data-paypal-button=\"PPLtBlue\"]::before {
\t\t\t\t\t\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\t\t\t\t\t\tbackground: url(https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png) 11px no-repeat #fff;
\t\t\t\t\t\t\t\t\t\t\t\tbackground-size: 80px;
\t\t\t\t\t\t\t\t\t\t\t\tdisplay: table-cell;
\t\t\t\t\t\t\t\t\t\t\t\twidth: 100px;
\t\t\t\t\t\t\t\t\t\t\t\theight: 42px;
\t\t\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-right: 16px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-bottom-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-top-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-top: -12px;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_connect_ppcp\" href=\"";
        // line 71
        echo $this->getAttribute($this->getAttribute((isset($context["configure_url"]) ? $context["configure_url"] : null), (isset($context["environment"]) ? $context["environment"] : null), array(), "array"), "ppcp", array(), "array");
        echo "\" target=\"_blank\" data-paypal-button=\"PPLtBlue\" data-paypal-onboard-complete=\"onBoardedCallback\">";
        echo (isset($context["button_connect"]) ? $context["button_connect"] : null);
        echo "</a><br />
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 72
        echo (isset($context["help_checkout_express"]) ? $context["help_checkout_express"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 74
        if ((((isset($context["client_id"]) ? $context["client_id"] : null) && (isset($context["secret"]) ? $context["secret"] : null)) && (isset($context["merchant_id"]) ? $context["merchant_id"] : null))) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<div id=\"section_disconnect\">
\t\t\t\t\t\t\t\t\t\t<p class=\"alert alert-info\">";
            // line 76
            echo (isset($context["text_connect"]) ? $context["text_connect"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_disconnect\" class=\"btn btn-danger\">";
            // line 77
            echo (isset($context["button_disconnect"]) ? $context["button_disconnect"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_client_id\" value=\"";
        echo (isset($context["client_id"]) ? $context["client_id"] : null);
        echo "\" id=\"input_client_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_secret\" value=\"";
        // line 81
        echo (isset($context["secret"]) ? $context["secret"] : null);
        echo "\" id=\"input_secret\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_merchant_id\" value=\"";
        // line 82
        echo (isset($context["merchant_id"]) ? $context["merchant_id"] : null);
        echo "\" id=\"input_merchant_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_webhook_id\" value=\"";
        // line 83
        echo (isset($context["webhook_id"]) ? $context["webhook_id"] : null);
        echo "\" id=\"input_webhook_id\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 86
        if ((((isset($context["client_id"]) ? $context["client_id"] : null) && (isset($context["secret"]) ? $context["secret"] : null)) && (isset($context["merchant_id"]) ? $context["merchant_id"] : null))) {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_status\"><span data-toggle=\"tooltip\" title=\"";
            // line 88
            echo (isset($context["help_checkout_express_status"]) ? $context["help_checkout_express_status"] : null);
            echo "\">";
            echo (isset($context["entry_checkout_express_status"]) ? $context["entry_checkout_express_status"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][status]\" id=\"input_checkout_express_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 91
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "status", array(), "array")) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 93
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 96
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_status\">";
            // line 102
            echo (isset($context["entry_checkout_card_status"]) ? $context["entry_checkout_card_status"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][status]\" id=\"input_checkout_card_status\" class=\"form-control hidden\">
\t\t\t\t\t\t\t\t\t\t";
            // line 105
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "status", array(), "array")) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 107
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 110
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible hidden\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 113
            echo (isset($context["help_checkout_card_status"]) ? $context["help_checkout_card_status"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_debug\">";
        // line 120
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_debug\" id=\"input_debug\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 125
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 128
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_transaction_method\">";
        // line 134
        echo (isset($context["entry_transaction_method"]) ? $context["entry_transaction_method"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_transaction_method\" id=\"input_transaction_method\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 137
        if (((isset($context["transaction_method"]) ? $context["transaction_method"] : null) == "authorize")) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\" selected=\"selected\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"capture\">";
            // line 139
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\">";
            echo (isset($context["text_authorization"]) ? $context["text_authorization"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"capture\" selected=\"selected\">";
            // line 142
            echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_total\"><span data-toggle=\"tooltip\" title=\"";
        // line 148
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_total\" value=\"";
        // line 150
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input_total\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_geo_zone\">";
        // line 154
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_geo_zone_id\" id=\"input_geo_zone\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 157
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array") == (isset($context["geo_zone_id"]) ? $context["geo_zone_id"] : null))) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array(), "array");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array(), "array");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_status\">";
        // line 169
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_status\" id=\"input_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 172
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 174
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 177
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_sort_order\">";
        // line 183
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_sort_order\" value=\"";
        // line 185
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input_sort_order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_currency_code\"><span data-toggle=\"tooltip\" title=\"";
        // line 189
        echo (isset($context["help_currency_code"]) ? $context["help_currency_code"] : null);
        echo "\">";
        echo (isset($context["entry_currency_code"]) ? $context["entry_currency_code"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_currency_code\" id=\"input_currency_code\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "currency", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["currency_code"]) ? $context["currency_code"] : null))) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["currency"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["currency"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["currency"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["currency"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_currency_code\"><span data-toggle=\"tooltip\" title=\"";
        // line 203
        echo (isset($context["help_currency_value"]) ? $context["help_currency_value"] : null);
        echo "\">";
        echo (isset($context["entry_currency_value"]) ? $context["entry_currency_value"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_currency_value\" value=\"";
        // line 205
        echo (isset($context["currency_value"]) ? $context["currency_value"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_currency_value"]) ? $context["entry_currency_value"] : null);
        echo "\" id=\"input_currency_value\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_smart_button\">";
        // line 209
        echo (isset($context["entry_smart_button"]) ? $context["entry_smart_button"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 211
        echo (isset($context["configure_smart_button_url"]) ? $context["configure_smart_button_url"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-primary\">";
        echo (isset($context["button_smart_button"]) ? $context["button_smart_button"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_order_status\">
\t\t\t\t\t\t\t";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "order_status", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["paypal_order_status"]) {
            // line 217
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_order_status_";
            // line 218
            echo $this->getAttribute($context["paypal_order_status"], "code", array(), "array");
            echo "\">";
            echo $this->getAttribute($context, $this->getAttribute($context["paypal_order_status"], "name", array(), "array"));
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[order_status][";
            // line 220
            echo $this->getAttribute($context["paypal_order_status"], "code", array(), "array");
            echo "][id]\" id=\"input_";
            echo $this->getAttribute($context["paypal_order_status"], "code", array(), "array");
            echo "_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["order_status"], "order_status_id", array(), "array") == $this->getAttribute($context["paypal_order_status"], "id", array(), "array"))) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["order_status"], "name", array(), "array");
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["order_status"], "order_status_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["order_status"], "name", array(), "array");
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paypal_order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_checkout_express\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_align\">";
        // line 235
        echo (isset($context["entry_button_align"]) ? $context["entry_button_align"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_align]\" id=\"input_checkout_express_button_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_align", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["button_align"]) {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["button_align"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "button_align", array(), "array"))) {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_align"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_align"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_align"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_align"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 244
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_size\">";
        // line 249
        echo (isset($context["entry_button_size"]) ? $context["entry_button_size"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_size]\" id=\"input_checkout_express_button_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_size", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["button_size"]) {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["button_size"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "button_size", array(), "array"))) {
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_size"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_size"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 256
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_size"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_size"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 258
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_color\">";
        // line 263
        echo (isset($context["entry_button_color"]) ? $context["entry_button_color"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_color]\" id=\"input_checkout_express_button_color\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_color", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["button_color"]) {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["button_color"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "button_color", array(), "array"))) {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_color"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_color"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_color"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_color"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_shape\">";
        // line 277
        echo (isset($context["entry_button_shape"]) ? $context["entry_button_shape"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_shape]\" id=\"input_checkout_express_button_shape\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_shape", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["button_shape"]) {
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["button_shape"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "button_shape", array(), "array"))) {
                // line 282
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_shape"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_shape"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_shape"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_shape"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_shape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_label\">";
        // line 291
        echo (isset($context["entry_button_label"]) ? $context["entry_button_label"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_label]\" id=\"input_checkout_express_button_label\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "button_label", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["button_label"]) {
            // line 295
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["button_label"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "express", array(), "array"), "button_label", array(), "array"))) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_label"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_label"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["button_label"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["button_label"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane hidden\" id=\"tab_checkout_card\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_form_align\">";
        // line 307
        echo (isset($context["entry_form_align"]) ? $context["entry_form_align"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_align]\" id=\"input_checkout_card_form_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "form_align", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["form_align"]) {
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["form_align"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "form_align", array(), "array"))) {
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["form_align"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["form_align"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["form_align"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["form_align"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_form_size\">";
        // line 321
        echo (isset($context["entry_form_size"]) ? $context["entry_form_size"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_size]\" id=\"input_checkout_card_form_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "form_size", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["form_size"]) {
            // line 325
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["form_size"], "code", array(), "array") == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "form_size", array(), "array"))) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["form_size"], "code", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context, $this->getAttribute($context["form_size"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 328
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["form_size"], "code", array(), "array");
                echo "\">";
                echo $this->getAttribute($context, $this->getAttribute($context["form_size"], "name", array(), "array"));
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_secure_status\"><span data-toggle=\"tooltip\" title=\"";
        // line 335
        echo (isset($context["help_secure_status"]) ? $context["help_secure_status"] : null);
        echo "\">";
        echo (isset($context["entry_secure_status"]) ? $context["entry_secure_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_status]\" id=\"input_checkout_card_secure_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 338
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "secure_status", array(), "array")) {
            // line 339
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 340
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 343
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 345
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_secure_scenario\"><span data-toggle=\"tooltip\" title=\"";
        // line 349
        echo (isset($context["help_secure_scenario"]) ? $context["help_secure_scenario"] : null);
        echo "\">";
        echo (isset($context["entry_secure_scenario"]) ? $context["entry_secure_scenario"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "secure_scenario", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["secure_scenario"]) {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_checkout_card_secure_scenario\">";
            // line 354
            echo $this->getAttribute($context, $this->getAttribute($context["secure_scenario"], "name", array(), "array"));
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_scenario][";
            // line 357
            echo $this->getAttribute($context["secure_scenario"], "code", array(), "array");
            echo "]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 358
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "secure_scenario", array(), "array"), $this->getAttribute($context["secure_scenario"], "code", array(), "array"), array(), "array")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_accept"]) ? $context["text_accept"] : null);
            if ($this->getAttribute($context["secure_scenario"], "recommended", array(), "array")) {
                echo " ";
                echo (isset($context["text_recommended"]) ? $context["text_recommended"] : null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 359
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "checkout", array(), "array"), "card", array(), "array"), "secure_scenario", array(), "array"), $this->getAttribute($context["secure_scenario"], "code", array(), "array"), array(), "array")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_decline"]) ? $context["text_decline"] : null);
            if ( !$this->getAttribute($context["secure_scenario"], "recommended", array(), "array")) {
                echo " ";
                echo (isset($context["text_recommended"]) ? $context["text_recommended"] : null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secure_scenario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 374
        if ((((isset($context["client_id"]) ? $context["client_id"] : null) && (isset($context["secret"]) ? $context["secret"] : null)) && (isset($context["merchant_id"]) ? $context["merchant_id"] : null))) {
            // line 375
            echo "<script type=\"text/javascript\" src = \"https://www.paypal.com/sdk/js?components=hosted-fields&client-id=";
            echo (isset($context["client_id"]) ? $context["client_id"] : null);
            echo "&merchant-id=";
            echo (isset($context["merchant_id"]) ? $context["merchant_id"] : null);
            echo "\" data-partner-attribution-id=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "partner", array(), "array"), (isset($context["environment"]) ? $context["environment"] : null), array(), "array"), "partner_id", array(), "array");
            echo "\" data-client-token=\"";
            echo (isset($context["client_token"]) ? $context["client_token"] : null);
            echo "\"></script>
<script type=\"text/javascript\">

try {
\tif (paypal.HostedFields.isEligible() === true) {
\t\t\$('[href=\"#tab_checkout_card\"]').parents('.nav-tab').removeClass('hidden');
\t\t\$('#tab_checkout_card').removeClass('hidden');
\t\t\$('#input_checkout_card_status').removeClass('hidden');
\t} else {
\t\t\$('#input_checkout_card_status').parents('.form-group').find('.alert').removeClass('hidden');
\t}
} catch (error) {
\tconsole.error('PayPal Card failed during startup', error);
}

</script>
";
        }
        // line 392
        echo "<script type=\"text/javascript\">

function onBoardedCallback(authorization_code, shared_id) {
\tvar environment = \$('#input_environment').val();
\t
\t\$.ajax({
\t\turl: '";
        // line 398
        echo (isset($context["callback_url"]) ? $context["callback_url"] : null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce=";
        // line 400
        echo (isset($context["seller_nonce"]) ? $context["seller_nonce"] : null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

</script>
<script type=\"text/javascript\">

\$('#button_disconnect').on('click', function() {
\tif (confirm('";
        // line 415
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$('#input_client_id').val('');
\t\t\$('#input_secret').val('');
\t\t\$('#input_merchant_id').val('');
\t\t\$('#section_connect').removeClass('hidden');
\t\t\$('#section_disconnect').addClass('hidden');
\t}
});

\$('#input_environment').on('change', function() {
\tvar environment = \$(this).val();
\t
\tif (environment == 'production') {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 428
        echo $this->getAttribute($this->getAttribute((isset($context["configure_url"]) ? $context["configure_url"] : null), "production", array(), "array"), "ppcp", array(), "array");
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 429
        echo $this->getAttribute($this->getAttribute((isset($context["configure_url"]) ? $context["configure_url"] : null), "production", array(), "array"), "express_checkout", array(), "array");
        echo "');
\t} else {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 431
        echo $this->getAttribute($this->getAttribute((isset($context["configure_url"]) ? $context["configure_url"] : null), "sandbox", array(), "array"), "ppcp", array(), "array");
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 432
        echo $this->getAttribute($this->getAttribute((isset($context["configure_url"]) ? $context["configure_url"] : null), "sandbox", array(), "array"), "express_checkout", array(), "array");
        echo "');
\t}
\t
\t\$('#input_client_id').val('');
\t\$('#input_secret').val('');
\t\$('#input_merchant_id').val('');
\t\$('#section_connect').removeClass('hidden');
\t\$('#section_disconnect').addClass('hidden');
});

</script>
<script id=\"paypal-js\" src=\"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\"></script>   
";
        // line 444
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1111 => 444,  1096 => 432,  1092 => 431,  1087 => 429,  1083 => 428,  1067 => 415,  1049 => 400,  1044 => 398,  1036 => 392,  1009 => 375,  1007 => 374,  996 => 365,  976 => 359,  964 => 358,  960 => 357,  954 => 354,  950 => 352,  946 => 351,  939 => 349,  933 => 345,  928 => 343,  923 => 342,  918 => 340,  913 => 339,  911 => 338,  903 => 335,  897 => 331,  891 => 330,  883 => 328,  875 => 326,  872 => 325,  868 => 324,  862 => 321,  856 => 317,  850 => 316,  842 => 314,  834 => 312,  831 => 311,  827 => 310,  821 => 307,  813 => 301,  807 => 300,  799 => 298,  791 => 296,  788 => 295,  784 => 294,  778 => 291,  772 => 287,  766 => 286,  758 => 284,  750 => 282,  747 => 281,  743 => 280,  737 => 277,  731 => 273,  725 => 272,  717 => 270,  709 => 268,  706 => 267,  702 => 266,  696 => 263,  690 => 259,  684 => 258,  676 => 256,  668 => 254,  665 => 253,  661 => 252,  655 => 249,  649 => 245,  643 => 244,  635 => 242,  627 => 240,  624 => 239,  620 => 238,  614 => 235,  609 => 232,  600 => 228,  594 => 227,  586 => 225,  578 => 223,  575 => 222,  571 => 221,  565 => 220,  558 => 218,  555 => 217,  551 => 216,  541 => 211,  536 => 209,  527 => 205,  520 => 203,  514 => 199,  508 => 198,  500 => 196,  492 => 194,  489 => 193,  485 => 192,  477 => 189,  468 => 185,  463 => 183,  457 => 179,  452 => 177,  447 => 176,  442 => 174,  437 => 173,  435 => 172,  429 => 169,  423 => 165,  417 => 164,  409 => 162,  401 => 160,  398 => 159,  394 => 158,  390 => 157,  384 => 154,  375 => 150,  368 => 148,  362 => 144,  357 => 142,  352 => 141,  347 => 139,  342 => 138,  340 => 137,  334 => 134,  328 => 130,  323 => 128,  318 => 127,  313 => 125,  308 => 124,  306 => 123,  300 => 120,  297 => 119,  288 => 113,  285 => 112,  280 => 110,  275 => 109,  270 => 107,  265 => 106,  263 => 105,  257 => 102,  251 => 98,  246 => 96,  241 => 95,  236 => 93,  231 => 92,  229 => 91,  221 => 88,  218 => 87,  216 => 86,  210 => 83,  206 => 82,  202 => 81,  197 => 80,  191 => 77,  187 => 76,  184 => 75,  182 => 74,  177 => 72,  171 => 71,  150 => 55,  145 => 53,  139 => 49,  134 => 47,  129 => 46,  124 => 44,  119 => 43,  117 => 42,  111 => 39,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  85 => 28,  79 => 25,  75 => 23,  67 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form_payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form_payment" class="form-horizontal">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="nav-tab active"><a href="#tab_general" data-toggle="tab">{{ text_general }}</a></li>*/
/* 						<li class="nav-tab"><a href="#tab_order_status" data-toggle="tab">{{ text_order_status }}</a></li>*/
/* 						<li class="nav-tab"><a href="#tab_checkout_express" data-toggle="tab">{{ text_checkout_express }}</a></li>*/
/* 						<li class="nav-tab hidden"><a href="#tab_checkout_card" data-toggle="tab">{{ text_checkout_card }}</a></li>*/
/* 					</ul>*/
/* 		  */
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane active" id="tab_general">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_environment">{{ entry_environment }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_environment" id="input_environment" class="form-control">*/
/* 										{% if (environment == 'production') %}*/
/* 										<option value="production" selected="selected">{{ text_production }}</option>*/
/* 										<option value="sandbox">{{ text_sandbox }}</option>*/
/* 										{% else %}*/
/* 										<option value="production">{{ text_production }}</option>*/
/* 										<option value="sandbox" selected="selected">{{ text_sandbox }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_connect">{{ entry_connect }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<div id="section_connect" {% if client_id and secret and merchant_id %}class="hidden"{% endif %}>*/
/* 										<style type="text/css">*/
/* 											a[data-paypal-button="PPLtBlue"]::before {*/
/* 												content: "";*/
/* 												background: url(https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png) 11px no-repeat #fff;*/
/* 												background-size: 80px;*/
/* 												display: table-cell;*/
/* 												width: 100px;*/
/* 												height: 42px;*/
/* 												float: left;*/
/* 												margin-right: 16px;*/
/* 												border-bottom-left-radius: 5px;*/
/* 												border-top-left-radius: 5px;*/
/* 												margin-top: -12px;*/
/* 											}*/
/* 										</style>*/
/* 										<a id="button_connect_ppcp" href="{{ configure_url[environment]['ppcp'] }}" target="_blank" data-paypal-button="PPLtBlue" data-paypal-onboard-complete="onBoardedCallback">{{ button_connect }}</a><br />*/
/* 										<p>{{ help_checkout_express }}</p>*/
/* 									</div>*/
/* 									{% if client_id and secret and merchant_id %}*/
/* 									<div id="section_disconnect">*/
/* 										<p class="alert alert-info">{{ text_connect }}</p>*/
/* 										<a id="button_disconnect" class="btn btn-danger">{{ button_disconnect }}</a>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									<input type="hidden" name="payment_paypal_client_id" value="{{ client_id }}" id="input_client_id" />*/
/* 									<input type="hidden" name="payment_paypal_secret" value="{{ secret }}" id="input_secret" />*/
/* 									<input type="hidden" name="payment_paypal_merchant_id" value="{{ merchant_id }}" id="input_merchant_id" />*/
/* 									<input type="hidden" name="payment_paypal_webhook_id" value="{{ webhook_id }}" id="input_webhook_id" />*/
/* 								</div>*/
/* 							</div>*/
/* 							{% if client_id and secret and merchant_id %}*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_status"><span data-toggle="tooltip" title="{{ help_checkout_express_status }}">{{ entry_checkout_express_status }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][status]" id="input_checkout_express_status" class="form-control">*/
/* 										{% if setting['checkout']['express']['status'] %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_card_status">{{ entry_checkout_card_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][card][status]" id="input_checkout_card_status" class="form-control hidden">*/
/* 										{% if setting['checkout']['card']['status'] %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 									<div class="alert alert-warning alert-dismissible hidden"><i class="fa fa-exclamation-circle"></i> {{ help_checkout_card_status }}*/
/* 										<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %}*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_debug">{{ entry_debug }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_debug" id="input_debug" class="form-control">*/
/* 										{% if debug %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_transaction_method">{{ entry_transaction_method }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_transaction_method" id="input_transaction_method" class="form-control">*/
/* 										{% if (transaction_method == 'authorize') %}*/
/* 										<option value="authorize" selected="selected">{{ text_authorization }}</option>*/
/* 										<option value="capture">{{ text_sale }}</option>*/
/* 										{% else %}*/
/* 										<option value="authorize">{{ text_authorization }}</option>*/
/* 										<option value="capture" selected="selected">{{ text_sale }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="payment_paypal_total" value="{{ total }}" placeholder="{{ entry_total }}" id="input_total" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_geo_zone">{{ entry_geo_zone }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_geo_zone_id" id="input_geo_zone" class="form-control">*/
/* 										<option value="0">{{ text_all_zones }}</option>*/
/* 										{% for geo_zone in geo_zones %}*/
/* 										{% if geo_zone['geo_zone_id'] == geo_zone_id %}*/
/* 										<option value="{{ geo_zone['geo_zone_id'] }}" selected="selected">{{ geo_zone['name'] }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ geo_zone['geo_zone_id'] }}">{{ geo_zone['name'] }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_status">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_status" id="input_status" class="form-control">*/
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
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_sort_order">{{ entry_sort_order }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="payment_paypal_sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input_sort_order" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_currency_code"><span data-toggle="tooltip" title="{{ help_currency_code }}">{{ entry_currency_code }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_currency_code" id="input_currency_code" class="form-control">*/
/* 										{% for currency in setting['currency'] %}*/
/* 										{% if currency['code'] == currency_code %}*/
/* 										<option value="{{ currency['code'] }}" selected="selected">{{ attribute(_context, currency['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ currency['code'] }}">{{ attribute(_context, currency['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_currency_code"><span data-toggle="tooltip" title="{{ help_currency_value }}">{{ entry_currency_value }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="payment_paypal_currency_value" value="{{ currency_value }}" placeholder="{{ entry_currency_value }}" id="input_currency_value" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_smart_button">{{ entry_smart_button }}</label>*/
/* 								<div class="col-sm-2">*/
/* 									<a href="{{ configure_smart_button_url }}" target="_blank" class="btn btn-primary">{{ button_smart_button }}</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab_order_status">*/
/* 							{% for paypal_order_status in setting['order_status'] %}*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_order_status_{{ paypal_order_status['code'] }}">{{ attribute(_context, paypal_order_status['name']) }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[order_status][{{ paypal_order_status['code'] }}][id]" id="input_{{ paypal_order_status['code'] }}_status" class="form-control">*/
/* 										{% for order_status in order_statuses %}*/
/* 										{% if order_status['order_status_id'] == paypal_order_status['id'] %}*/
/* 										<option value="{{ order_status['order_status_id'] }}" selected="selected">{{ order_status['name'] }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ order_status['order_status_id'] }}">{{ order_status['name'] }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab_checkout_express">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_button_align">{{ entry_button_align }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][button_align]" id="input_checkout_express_button_align" class="form-control">*/
/* 										{% for button_align in setting['button_align'] %}*/
/* 										{% if (button_align['code'] == setting['checkout']['express']['button_align']) %}*/
/* 										<option value="{{ button_align['code'] }}" selected="selected">{{ attribute(_context, button_align['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_align['code'] }}">{{ attribute(_context, button_align['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_button_size">{{ entry_button_size }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][button_size]" id="input_checkout_express_button_size" class="form-control">*/
/* 										{% for button_size in setting['button_size'] %}*/
/* 										{% if (button_size['code'] == setting['checkout']['express']['button_size']) %}*/
/* 										<option value="{{ button_size['code'] }}" selected="selected">{{ attribute(_context, button_size['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_size['code'] }}">{{ attribute(_context, button_size['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_button_color">{{ entry_button_color }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][button_color]" id="input_checkout_express_button_color" class="form-control">*/
/* 										{% for button_color in setting['button_color'] %}*/
/* 										{% if (button_color['code'] == setting['checkout']['express']['button_color']) %}*/
/* 										<option value="{{ button_color['code'] }}" selected="selected">{{ attribute(_context, button_color['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_color['code'] }}">{{ attribute(_context, button_color['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_button_shape">{{ entry_button_shape }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][button_shape]" id="input_checkout_express_button_shape" class="form-control">*/
/* 										{% for button_shape in setting['button_shape'] %}*/
/* 										{% if (button_shape['code'] == setting['checkout']['express']['button_shape']) %}*/
/* 										<option value="{{ button_shape['code'] }}" selected="selected">{{ attribute(_context, button_shape['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_shape['code'] }}">{{ attribute(_context, button_shape['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_express_button_label">{{ entry_button_label }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][express][button_label]" id="input_checkout_express_button_label" class="form-control">*/
/* 										{% for button_label in setting['button_label'] %}*/
/* 										{% if (button_label['code'] == setting['checkout']['express']['button_label']) %}*/
/* 										<option value="{{ button_label['code'] }}" selected="selected">{{ attribute(_context, button_label['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ button_label['code'] }}">{{ attribute(_context, button_label['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane hidden" id="tab_checkout_card">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_card_form_align">{{ entry_form_align }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][card][form_align]" id="input_checkout_card_form_align" class="form-control">*/
/* 										{% for form_align in setting['form_align'] %}*/
/* 										{% if (form_align['code'] == setting['checkout']['card']['form_align']) %}*/
/* 										<option value="{{ form_align['code'] }}" selected="selected">{{ attribute(_context, form_align['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ form_align['code'] }}">{{ attribute(_context, form_align['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_card_form_size">{{ entry_form_size }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][card][form_size]" id="input_checkout_card_form_size" class="form-control">*/
/* 										{% for form_size in setting['form_size'] %}*/
/* 										{% if (form_size['code'] == setting['checkout']['card']['form_size']) %}*/
/* 										<option value="{{ form_size['code'] }}" selected="selected">{{ attribute(_context, form_size['name']) }}</option>*/
/* 										{% else %}*/
/* 										<option value="{{ form_size['code'] }}">{{ attribute(_context, form_size['name']) }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_card_secure_status"><span data-toggle="tooltip" title="{{ help_secure_status }}">{{ entry_secure_status }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<select name="payment_paypal_setting[checkout][card][secure_status]" id="input_checkout_card_secure_status" class="form-control">*/
/* 										{% if setting['checkout']['card']['secure_status'] %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input_checkout_card_secure_scenario"><span data-toggle="tooltip" title="{{ help_secure_scenario }}">{{ entry_secure_scenario }}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									{% for secure_scenario in setting['secure_scenario'] %}*/
/* 									<div class="row">*/
/* 										<div class="col-sm-8">*/
/* 											<label class="control-label" for="input_checkout_card_secure_scenario">{{ attribute(_context, secure_scenario['name']) }}</label>*/
/* 										</div>*/
/* 										<div class="col-sm-4">										*/
/* 											<select name="payment_paypal_setting[checkout][card][secure_scenario][{{ secure_scenario['code'] }}]" class="form-control">*/
/* 												<option value="1" {% if setting['checkout']['card']['secure_scenario'][secure_scenario['code']] %}selected="selected"{% endif %}>{{ text_accept }}{% if secure_scenario['recommended'] %} {{ text_recommended }}{% endif %}</option>*/
/* 												<option value="0" {% if not setting['checkout']['card']['secure_scenario'][secure_scenario['code']] %}selected="selected"{% endif %}>{{ text_decline }}{% if not secure_scenario['recommended'] %} {{ text_recommended }}{% endif %}</option>*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<br />*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% if client_id and secret and merchant_id %}*/
/* <script type="text/javascript" src = "https://www.paypal.com/sdk/js?components=hosted-fields&client-id={{ client_id }}&merchant-id={{ merchant_id }}" data-partner-attribution-id="{{ setting['partner'][environment]['partner_id'] }}" data-client-token="{{ client_token }}"></script>*/
/* <script type="text/javascript">*/
/* */
/* try {*/
/* 	if (paypal.HostedFields.isEligible() === true) {*/
/* 		$('[href="#tab_checkout_card"]').parents('.nav-tab').removeClass('hidden');*/
/* 		$('#tab_checkout_card').removeClass('hidden');*/
/* 		$('#input_checkout_card_status').removeClass('hidden');*/
/* 	} else {*/
/* 		$('#input_checkout_card_status').parents('.form-group').find('.alert').removeClass('hidden');*/
/* 	}*/
/* } catch (error) {*/
/* 	console.error('PayPal Card failed during startup', error);*/
/* }*/
/* */
/* </script>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/* */
/* function onBoardedCallback(authorization_code, shared_id) {*/
/* 	var environment = $('#input_environment').val();*/
/* 	*/
/* 	$.ajax({*/
/* 		url: '{{ callback_url }}',*/
/* 		type: 'post',*/
/* 		data: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce={{ seller_nonce }}',*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* </script>*/
/* <script type="text/javascript">*/
/* */
/* $('#button_disconnect').on('click', function() {*/
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$('#input_client_id').val('');*/
/* 		$('#input_secret').val('');*/
/* 		$('#input_merchant_id').val('');*/
/* 		$('#section_connect').removeClass('hidden');*/
/* 		$('#section_disconnect').addClass('hidden');*/
/* 	}*/
/* });*/
/* */
/* $('#input_environment').on('change', function() {*/
/* 	var environment = $(this).val();*/
/* 	*/
/* 	if (environment == 'production') {*/
/* 		$('#button_connect_ppcp').attr('href', '{{ configure_url['production']['ppcp'] }}');*/
/* 		$('#button_connect_express_checkout').attr('href', '{{ configure_url['production']['express_checkout'] }}');*/
/* 	} else {*/
/* 		$('#button_connect_ppcp').attr('href', '{{ configure_url['sandbox']['ppcp'] }}');*/
/* 		$('#button_connect_express_checkout').attr('href', '{{ configure_url['sandbox']['express_checkout'] }}');*/
/* 	}*/
/* 	*/
/* 	$('#input_client_id').val('');*/
/* 	$('#input_secret').val('');*/
/* 	$('#input_merchant_id').val('');*/
/* 	$('#section_connect').removeClass('hidden');*/
/* 	$('#section_disconnect').addClass('hidden');*/
/* });*/
/* */
/* </script>*/
/* <script id="paypal-js" src="https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js"></script>   */
/* {{ footer }}*/
