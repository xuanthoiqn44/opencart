<?php

/* default/template/extension/payment/virtualmerchantpro.twig */
class __TwigTemplate_8fb9b4eb1a401f81fd34ec7c3d28e8af47c04b2597a3b6c6709fbc0a6ecb1e14 extends Twig_Template
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
        if ((isset($context["testmode"]) ? $context["testmode"] : null)) {
            echo " 
<div class=\"alert alert-warning\" style=\"margin-bottom:10px;\"><i class=\"fa fa-warning\"></i>";
            // line 2
            echo (isset($context["text_testmode"]) ? $context["text_testmode"] : null);
            echo "</div>
";
        }
        // line 3
        echo " 
<div id=\"virtualmerchantpro\" class=\"col-md-6 col-md-offset-3 col-sm-12\">
    <form action=\"";
        // line 5
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" id=\"checkout-virtualmerchantpro\" class=\"form-horizontal\">
        ";
        // line 6
        if ((isset($context["virtualmerchantpro_merchant_hosted"]) ? $context["virtualmerchantpro_merchant_hosted"] : null)) {
            echo " 
        <div class=\"panel panel-success\"> 
            <div class=\"panel-heading\"><i class=\"fa fa-expeditedssl\"></i>";
            // line 8
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</div>
            <div class=\"panel-body\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group required\">
                        <label for=\"ssl_ccname\" class=\"col-sm-12\">";
            // line 12
            echo (isset($context["entry_name_on_cart"]) ? $context["entry_name_on_cart"] : null);
            echo "</label>
                        <input type=\"text\" id=\"ssl_ccname\" name=\"ssl_ccname\" value=\"";
            // line 13
            echo (isset($context["ccname"]) ? $context["ccname"] : null);
            echo "\" class=\"form-control\" />
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"ssl_card_number\" class=\"col-sm-12\" >";
            // line 16
            echo (isset($context["entry_cc_number"]) ? $context["entry_cc_number"] : null);
            echo "</label>
                        <input type=\"text\" id=\"ssl_card_number\" name=\"ssl_card_number\" value=\"\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"col-sm-7 col-xs-7\">
                    <div class=\"form-group required\">
                        <label>";
            // line 22
            echo (isset($context["entry_cc_expire"]) ? $context["entry_cc_expire"] : null);
            echo "</label>
                        <div class=\"form-inline\">
                            <select id=\"exp_month\" name=\"exp_month\" class=\"form-control\">
                                <option value=\"01\">01</option>
                                <option value=\"02\">02</option>
                                <option value=\"03\">03</option>
                                <option value=\"04\">04</option>
                                <option value=\"05\">05</option>
                                <option value=\"06\">06</option>
                                <option value=\"07\">07</option>
                                <option value=\"08\">08</option>
                                <option value=\"09\">09</option>
                                <option value=\"10\">10</option>
                                <option value=\"11\">11</option>
                                <option value=\"12\">12</option>
                            </select>
                            <select id=\"exp_year\" name=\"exp_year\" class=\"form-control\" >
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 40
                echo "                                <option value=\"";
                echo ((isset($context["yy"]) ? $context["yy"] : null) + $context["i"]);
                echo "\">";
                echo ((isset($context["yyyy"]) ? $context["yyyy"] : null) + $context["i"]);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo " 
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-5 col-xs-5\">
                    <div class=\"form-group required pull-right\">
                        <label>";
            // line 48
            echo (isset($context["entry_cc_cvv2"]) ? $context["entry_cc_cvv2"] : null);
            echo "</label>
                        <input type=\"password\" id=\"ssl_cvv2cvc2\" name=\"ssl_cvv2cvc2\" value=\"\" size=\"5\" maxlength=\"4\" class=\"form-control\" />
                    </div>
                </div>
            </div>
            <div class=\"panel-footer buttons\">
                <button id=\"button-confirm\" type=\"button\" data-loading-text=\"";
            // line 54
            echo (isset($context["text_processing"]) ? $context["text_processing"] : null);
            echo "\" class=\"btn btn-success btn-lg btn-block\">";
            echo (isset($context["button_paynow"]) ? $context["button_paynow"] : null);
            echo "</button>
            </div>

        </div>
        ";
        }
        // line 58
        echo " 
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo "  
        <input type=\"hidden\" name=\"";
            // line 60
            echo $context["key"];
            echo "\" value=\"";
            echo $context["value"];
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo " 
    </form>
</div>
<style>
div.required label:before {
        content: '* ';
        color: #F00;
        font-weight: bold;
    }
    :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    }
    .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    display: table;
    content: \" \";
    }
    #virtualmerchantpro {
         width: 339px;
       margin: auto;
       float: none;
\t}

    }
    #virtualmerchantpro .panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    #virtualmerchantpro .panel-success {
    border-color: #d6e9c6;
    }
    #virtualmerchantpro .panel-group .panel {
    margin-bottom: 0;
    border-radius: 4px;
    }
    #virtualmerchantpro .panel-success>.panel-heading {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    }
    #virtualmerchantpro .panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
 }
    #virtualmerchantpro .col-sm-12,#virtualmerchantpro .col-sm-7, #virtualmerchantpro .col-sm-7, #virtualmerchantpro .col-md-4 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
    }
\t
\t#virtualmerchantpro .col-sm-5{
    position: relative;
    min-height: 1px;
    padding-right: 15px;

    float: right;
    }
  
      
    #virtualmerchantpro .panel-body {
    padding: 15px;
    }
    #virtualmerchantpro .panel-footer {
     padding: 5px;
     overflow: auto;
     width: 100%;
     text-align: center;
    }
  
    #virtualmerchantpro .form-group {
    margin-bottom: 15px;
}
    #virtualmerchantpro label {
    display: inline-block;
    width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
    #virtualmerchantpro  .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
\tmargin-bottom: 3px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
    
    #virtualmerchantpro .form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
    #virtualmerchantpro .btn {
    padding: 7.5px 12px;
    font-size: 12px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
}
    #virtualmerchantpro .btn-lg {
    padding: 10px 16px;
    font-size: 15px;
}
    #virtualmerchantpro .btn-success {
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #5bb75b;
    background-image: linear-gradient(to bottom, #62c462, #51a351);
    background-repeat: repeat-x;
    border-color: #51a351 #51a351 #387038;
}
#virtualmerchantpro .col-sm-12 {
    width: 100%;
}

@media only screen and (max-width: 412px){
\t#virtualmerchantpro {
\t\twidth: 100%;
\t}
}
@media only screen and (max-width: 767px){
\t#virtualmerchantpro {
\t\twidth: 100%;
\t}
}
</style>
<script type=\"text/javascript\">
   \$('#button-confirm').on('click', function() {
\t\tvar reseturl = \$('input[name=\\'account\\']:checked').val() === 'register' ? 'register' : '';
        \$.ajax({
            url: '";
        // line 210
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#checkout-virtualmerchantpro\").serialize(),
            beforeSend: function () {
                \$('#button-confirm').button('loading');
                \$('.text-danger, .alert').remove();
                \$('#virtualmerchantpro').removeClass('text-danger');
                \$('#virtualmerchantpro').removeClass('has-error');
            },
            complete: function () {
                \$('#button-confirm').button('reset');
                \$('#virtualmerchantpro').removeClass('text-danger');

            },
            success: function (json) {
                \$('.alert-success, .alert-danger').remove();
                
                if (json['error']) {
                   alert(json['error']);
\t\t\t\t   if (reseturl && typeof _do_login === \"function\") {
                       _do_login();
        \t\t\t}
\t\t\t\t   if (typeof triggerLoadingOff === \"function\") {
\t\t\t\t\t  triggerLoadingOff();
\t\t\t\t   }
                }

                if (json['success']) {
                    \$('#virtualmerchantpro').html('<div class=\"alert alert-success\"><h4><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</h4></div>');
                    window.setTimeout(function () {
                        window.location.href = json['redirect_auto'];
                    }, 5000);
                }
            }
        });
   });
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/virtualmerchantpro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 210,  149 => 61,  139 => 60,  133 => 59,  130 => 58,  120 => 54,  111 => 48,  102 => 41,  91 => 40,  87 => 39,  67 => 22,  58 => 16,  52 => 13,  48 => 12,  41 => 8,  36 => 6,  32 => 5,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% if  testmode %} */
/* <div class="alert alert-warning" style="margin-bottom:10px;"><i class="fa fa-warning"></i>{{ text_testmode }}</div>*/
/* {% endif %} */
/* <div id="virtualmerchantpro" class="col-md-6 col-md-offset-3 col-sm-12">*/
/*     <form action="{{ action }}" method="post" id="checkout-virtualmerchantpro" class="form-horizontal">*/
/*         {% if virtualmerchantpro_merchant_hosted %} */
/*         <div class="panel panel-success"> */
/*             <div class="panel-heading"><i class="fa fa-expeditedssl"></i>{{ text_credit_card }}</div>*/
/*             <div class="panel-body">*/
/*                 <div class="col-sm-12">*/
/*                     <div class="form-group required">*/
/*                         <label for="ssl_ccname" class="col-sm-12">{{ entry_name_on_cart }}</label>*/
/*                         <input type="text" id="ssl_ccname" name="ssl_ccname" value="{{ ccname }}" class="form-control" />*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label for="ssl_card_number" class="col-sm-12" >{{ entry_cc_number }}</label>*/
/*                         <input type="text" id="ssl_card_number" name="ssl_card_number" value="" class="form-control" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-7 col-xs-7">*/
/*                     <div class="form-group required">*/
/*                         <label>{{ entry_cc_expire }}</label>*/
/*                         <div class="form-inline">*/
/*                             <select id="exp_month" name="exp_month" class="form-control">*/
/*                                 <option value="01">01</option>*/
/*                                 <option value="02">02</option>*/
/*                                 <option value="03">03</option>*/
/*                                 <option value="04">04</option>*/
/*                                 <option value="05">05</option>*/
/*                                 <option value="06">06</option>*/
/*                                 <option value="07">07</option>*/
/*                                 <option value="08">08</option>*/
/*                                 <option value="09">09</option>*/
/*                                 <option value="10">10</option>*/
/*                                 <option value="11">11</option>*/
/*                                 <option value="12">12</option>*/
/*                             </select>*/
/*                             <select id="exp_year" name="exp_year" class="form-control" >*/
/*                                 {% for i in 0..24 %}*/
/*                                 <option value="{{ yy + i }}">{{ yyyy + i }}</option>*/
/*                                 {% endfor %} */
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-5 col-xs-5">*/
/*                     <div class="form-group required pull-right">*/
/*                         <label>{{ entry_cc_cvv2 }}</label>*/
/*                         <input type="password" id="ssl_cvv2cvc2" name="ssl_cvv2cvc2" value="" size="5" maxlength="4" class="form-control" />*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="panel-footer buttons">*/
/*                 <button id="button-confirm" type="button" data-loading-text="{{ text_processing }}" class="btn btn-success btn-lg btn-block">{{ button_paynow }}</button>*/
/*             </div>*/
/* */
/*         </div>*/
/*         {% endif %} */
/*         {% for key, value in fields %}  */
/*         <input type="hidden" name="{{ key }}" value="{{ value }}" />*/
/*         {% endfor %} */
/*     </form>*/
/* </div>*/
/* <style>*/
/* div.required label:before {*/
/*         content: '* ';*/
/*         color: #F00;*/
/*         font-weight: bold;*/
/*     }*/
/*     :after, :before {*/
/*     -webkit-box-sizing: border-box;*/
/*     -moz-box-sizing: border-box;*/
/*     box-sizing: border-box;*/
/*     }*/
/*     .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {*/
/*     display: table;*/
/*     content: " ";*/
/*     }*/
/*     #virtualmerchantpro {*/
/*          width: 339px;*/
/*        margin: auto;*/
/*        float: none;*/
/* 	}*/
/* */
/*     }*/
/*     #virtualmerchantpro .panel {*/
/*     margin-bottom: 20px;*/
/*     background-color: #fff;*/
/*     border: 1px solid transparent;*/
/*     border-radius: 4px;*/
/*     -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
/*     box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
/*     }*/
/*     #virtualmerchantpro .panel-success {*/
/*     border-color: #d6e9c6;*/
/*     }*/
/*     #virtualmerchantpro .panel-group .panel {*/
/*     margin-bottom: 0;*/
/*     border-radius: 4px;*/
/*     }*/
/*     #virtualmerchantpro .panel-success>.panel-heading {*/
/*     color: #3c763d;*/
/*     background-color: #dff0d8;*/
/*     border-color: #d6e9c6;*/
/*     }*/
/*     #virtualmerchantpro .panel-heading {*/
/*     padding: 10px 15px;*/
/*     border-bottom: 1px solid transparent;*/
/*     border-top-left-radius: 3px;*/
/*     border-top-right-radius: 3px;*/
/*  }*/
/*     #virtualmerchantpro .col-sm-12,#virtualmerchantpro .col-sm-7, #virtualmerchantpro .col-sm-7, #virtualmerchantpro .col-md-4 {*/
/*     position: relative;*/
/*     min-height: 1px;*/
/*     padding-right: 15px;*/
/*     padding-left: 15px;*/
/*     float: left;*/
/*     }*/
/* 	*/
/* 	#virtualmerchantpro .col-sm-5{*/
/*     position: relative;*/
/*     min-height: 1px;*/
/*     padding-right: 15px;*/
/* */
/*     float: right;*/
/*     }*/
/*   */
/*       */
/*     #virtualmerchantpro .panel-body {*/
/*     padding: 15px;*/
/*     }*/
/*     #virtualmerchantpro .panel-footer {*/
/*      padding: 5px;*/
/*      overflow: auto;*/
/*      width: 100%;*/
/*      text-align: center;*/
/*     }*/
/*   */
/*     #virtualmerchantpro .form-group {*/
/*     margin-bottom: 15px;*/
/* }*/
/*     #virtualmerchantpro label {*/
/*     display: inline-block;*/
/*     width: 100%;*/
/*     margin-bottom: 5px;*/
/*     font-weight: 700;*/
/* }*/
/*     #virtualmerchantpro  .form-control {*/
/*     display: block;*/
/*     width: 100%;*/
/*     height: 34px;*/
/*     padding: 6px 12px;*/
/* 	margin-bottom: 3px;*/
/*     font-size: 14px;*/
/*     line-height: 1.42857143;*/
/*     color: #555;*/
/*     background-color: #fff;*/
/*     background-image: none;*/
/*     border: 1px solid #ccc;*/
/*     border-radius: 4px;*/
/*     -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
/*     box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
/*     -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;*/
/*     -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;*/
/*     transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;*/
/* }*/
/*     */
/*     #virtualmerchantpro .form-horizontal .form-group {*/
/*     margin-right: -15px;*/
/*     margin-left: -15px;*/
/* }*/
/*     #virtualmerchantpro .btn {*/
/*     padding: 7.5px 12px;*/
/*     font-size: 12px;*/
/*     border: 1px solid #cccccc;*/
/*     border-radius: 4px;*/
/*     box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);*/
/* }*/
/*     #virtualmerchantpro .btn-lg {*/
/*     padding: 10px 16px;*/
/*     font-size: 15px;*/
/* }*/
/*     #virtualmerchantpro .btn-success {*/
/*     color: #ffffff;*/
/*     text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);*/
/*     background-color: #5bb75b;*/
/*     background-image: linear-gradient(to bottom, #62c462, #51a351);*/
/*     background-repeat: repeat-x;*/
/*     border-color: #51a351 #51a351 #387038;*/
/* }*/
/* #virtualmerchantpro .col-sm-12 {*/
/*     width: 100%;*/
/* }*/
/* */
/* @media only screen and (max-width: 412px){*/
/* 	#virtualmerchantpro {*/
/* 		width: 100%;*/
/* 	}*/
/* }*/
/* @media only screen and (max-width: 767px){*/
/* 	#virtualmerchantpro {*/
/* 		width: 100%;*/
/* 	}*/
/* }*/
/* </style>*/
/* <script type="text/javascript">*/
/*    $('#button-confirm').on('click', function() {*/
/* 		var reseturl = $('input[name=\'account\']:checked').val() === 'register' ? 'register' : '';*/
/*         $.ajax({*/
/*             url: '{{ action }}',*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: $("#checkout-virtualmerchantpro").serialize(),*/
/*             beforeSend: function () {*/
/*                 $('#button-confirm').button('loading');*/
/*                 $('.text-danger, .alert').remove();*/
/*                 $('#virtualmerchantpro').removeClass('text-danger');*/
/*                 $('#virtualmerchantpro').removeClass('has-error');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-confirm').button('reset');*/
/*                 $('#virtualmerchantpro').removeClass('text-danger');*/
/* */
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-success, .alert-danger').remove();*/
/*                 */
/*                 if (json['error']) {*/
/*                    alert(json['error']);*/
/* 				   if (reseturl && typeof _do_login === "function") {*/
/*                        _do_login();*/
/*         			}*/
/* 				   if (typeof triggerLoadingOff === "function") {*/
/* 					  triggerLoadingOff();*/
/* 				   }*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#virtualmerchantpro').html('<div class="alert alert-success"><h4><i class="fa fa-check-circle"></i> ' + json['success'] + '</h4></div>');*/
/*                     window.setTimeout(function () {*/
/*                         window.location.href = json['redirect_auto'];*/
/*                     }, 5000);*/
/*                 }*/
/*             }*/
/*         });*/
/*    });*/
/* </script>*/
