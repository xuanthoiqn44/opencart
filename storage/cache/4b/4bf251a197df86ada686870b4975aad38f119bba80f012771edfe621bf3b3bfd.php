<?php

/* default/template/extension/payment/paypal.twig */
class __TwigTemplate_070dcc211631596af6a7963b8a9069073ce9ef6cda17a94ba32c846d901df44c extends Twig_Template
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
        echo "<style type=\"text/css\">

#paypal_form {
\tposition: relative;
}

";
        // line 7
        if ((isset($context["express_status"]) ? $context["express_status"] : null)) {
            // line 8
            echo "#paypal_express_button {
\ttext-align: ";
            // line 9
            echo (isset($context["button_align"]) ? $context["button_align"] : null);
            echo ";
}

#paypal_express_button_container {
\t";
            // line 13
            if ((isset($context["button_width"]) ? $context["button_width"] : null)) {
                // line 14
                echo "\tdisplay: inline-block;
\twidth: ";
                // line 15
                echo (isset($context["button_width"]) ? $context["button_width"] : null);
                echo ";
\t";
            }
            // line 17
            echo "}

@media (max-width: 476px) {
\t#paypal_express_button_container {
\t\twidth: 100%;
\t}
}
";
        }
        // line 25
        if ((isset($context["card_status"]) ? $context["card_status"] : null)) {
            // line 26
            echo "#paypal_card {
\ttext-align: ";
            // line 27
            echo (isset($context["form_align"]) ? $context["form_align"] : null);
            echo ";
}

#paypal_card_form {
\t";
            // line 31
            if ((isset($context["form_width"]) ? $context["form_width"] : null)) {
                // line 32
                echo "\tdisplay: inline-block;
\twidth: ";
                // line 33
                echo (isset($context["form_width"]) ? $context["form_width"] : null);
                echo ";
\t";
            }
            // line 35
            echo "\ttext-align: center;
\ttransition: all 600ms cubic-bezier(0.2, 1.3, 0.7, 1);
\t-webkit-animation: cardIntro 500ms cubic-bezier(0.2, 1.3, 0.7, 1);
    animation: cardIntro 500ms cubic-bezier(0.2, 1.3, 0.7, 1);
\tz-index: 1;
}

@media (max-width: 476px) {
\t#paypal_card_form {
\t\twidth: 100%;
\t}
}

#paypal_card_form.visa {
\tcolor: #fff;
\tbackground-color: #0D4AA2;
}

#paypal_card_form.master-card {
\tcolor: #fff;
\tbackground-color: #363636;
\tbackground: linear-gradient(115deg, #d82332, #d82332 50%, #f1ad3d 50%, #f1ad3d);
}

#paypal_card_form.maestro {
\tcolor: #fff;
\tbackground-color: #363636;
\tbackground: linear-gradient(115deg, #009ddd, #009ddd 50%, #ed1c2e 50%, #ed1c2e);
}

#paypal_card_form.american-express {
\tcolor: #fff;
\tbackground-color: #007CC3;
}

#paypal_card_form.discover {
\tcolor: #fff;
\tbackground-color: #ff6000;
\tbackground: linear-gradient(#d14310, #f7961e);
}

#paypal_card_form.unionpay, #paypal_card_form.jcb, #paypal_card_form.diners-club {
\tcolor: #fff;
\tbackground-color: #363636;
}

#paypal_card_form .card-info-number,
#paypal_card_form .card-info-date-cvv {
\tposition: relative;
\ttext-align: left;
}

#paypal_card_form .card-info-date {
\twidth: 48%;
\tfloat: left;
\tmargin-bottom: 0.5em;
}

#paypal_card_form .card-info-cvv {
\twidth: 48%;
\tfloat: right;
\tmargin-bottom: 0.5em;
}

#paypal_card_form .card-info-number,
#paypal_card_form .card-info-date,
#paypal_card_form .card-info-cvv {
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
}

#paypal_card_form .card-label {
\tdisplay: block;
\tmargin-bottom: 0.5em;
\ttext-transform: uppercase;
}

#paypal_card_form .card-input-container {
\tposition: relative;
\theight: 2.75em;
\tpadding: 5px 10px;
\tmargin-bottom: 1em;
\tbackground: rgba(255, 255, 255, 0.86);
\tborder: 1px solid #eee;
\tborder-radius: 2px;
}

#card_image {
\tposition: absolute;
\ttop: 0px;
\tright: 2px;
\twidth: 44px;
\theight: 28px;
\tbackground-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);
\tbackground-size: 86px 458px;
\tborder-radius: 4px;
\tbackground-position: -100px 0;
\tbackground-repeat: no-repeat;
}

#card_image.visa {
\tbackground-position: 0 -398px;
}

#card_image.master-card {
\tbackground-position: 0 -281px;
}

#card_image.american-express {
\tbackground-position: 0 -370px;
}

#card_image.discover {
\tbackground-position: 0 -163px;
}

#card_image.maestro {
\tbackground-position: 0 -251px;
}

#card_image.jcb {
\tbackground-position: 0 -221px;
}

#card_image.diners-club {
\tbackground-position: 0 -133px;
}

#paypal_button_submit {
\twidth: 100%;\t
\tpadding: 1em 1em;
\tcolor: #fff;
\tbackground: #282c37;
\tfont-size: 15px;
\tbox-shadow: none;
\t-moz-box-shadow: none;
\t-webkit-box-shadow: none;
\tborder: 0;
\tz-index: 0;
\topacity: 0.1;
\toutline: 0;
\t-webkit-appearance: none;
}

#paypal_button_submit:hover {
\tbackground: #535b72;
}

#paypal_button_submit:active {
\t-webkit-animation: cardIntro 200ms cubic-bezier(0.2, 1.3, 0.7, 1);
    animation: cardIntro 200ms cubic-bezier(0.2, 1.3, 0.7, 1);
}

#paypal_button_submit.show-button {
\topacity: 1;
\tcursor: pointer;
}
";
        }
        // line 194
        echo "
#paypal_form .lds-spinner {
\tdisplay: inline-block;
\tposition: absolute;
\twidth: 64px;
\theight: 64px;
\tleft: 50%;
\ttop: 50%;
\tmargin-left: -32px;
\tmargin-top: -32px;
}

#paypal_form .lds-spinner div {
\ttransform-origin: 32px 32px;
\tanimation: lds-spinner 1.2s linear infinite;
}

#paypal_form .lds-spinner div:after {
\tcontent: \" \";
\tdisplay: block;
\tposition: absolute;
\ttop: 3px;
\tleft: 29px;
\twidth: 5px;
\theight: 14px;
\tborder-radius: 20%;
\tbackground: #000;
}

#paypal_form .lds-spinner div:nth-child(1) {
\ttransform: rotate(0deg);
\tanimation-delay: -1.1s;
}

#paypal_form .lds-spinner div:nth-child(2) {
\ttransform: rotate(30deg);
\tanimation-delay: -1s;
}

#paypal_form .lds-spinner div:nth-child(3) {
\ttransform: rotate(60deg);
\tanimation-delay: -0.9s;
}

#paypal_form .lds-spinner div:nth-child(4) {
\ttransform: rotate(90deg);
\tanimation-delay: -0.8s;
}

#paypal_form .lds-spinner div:nth-child(5) {
\ttransform: rotate(120deg);
\tanimation-delay: -0.7s;
}

#paypal_form .lds-spinner div:nth-child(6) {
\ttransform: rotate(150deg);
\tanimation-delay: -0.6s;
}

#paypal_form .lds-spinner div:nth-child(7) {
\ttransform: rotate(180deg);
\tanimation-delay: -0.5s;
}

#paypal_form .lds-spinner div:nth-child(8) {
\ttransform: rotate(210deg);
\tanimation-delay: -0.4s;
}

#paypal_form .lds-spinner div:nth-child(9) {
\ttransform: rotate(240deg);
\tanimation-delay: -0.3s;
}

#paypal_form .lds-spinner div:nth-child(10) {
\ttransform: rotate(270deg);
\tanimation-delay: -0.2s;
}

#paypal_form .lds-spinner div:nth-child(11) {
\ttransform: rotate(300deg);
\tanimation-delay: -0.1s;
}

#paypal_form .lds-spinner div:nth-child(12) {
\ttransform: rotate(330deg);
\tanimation-delay: 0s;
}

#paypal_form .hidden {
\tdisplay: none;
}

@keyframes lds-spinner {
\t0% {
\t\topacity: 1;
\t}
\t100% {
\t\topacity: 0;
\t}
}

</style>
<div id=\"paypal_form\">
\t";
        // line 298
        if ((isset($context["express_status"]) ? $context["express_status"] : null)) {
            // line 299
            echo "\t<div id=\"paypal_express_button\" class=\"buttons clearfix\"><div id=\"paypal_express_button_container\"></div></div>
\t";
        }
        // line 301
        echo "\t";
        if ((isset($context["card_status"]) ? $context["card_status"] : null)) {
            // line 302
            echo "\t<div id=\"paypal_card\" class=\"hidden\">
\t\t<form id=\"paypal_card_form\" class=\"well\">
\t\t\t<div class=\"card-info-number clearfix\">
\t\t\t\t<label for=\"card_number\" class=\"card-label\">";
            // line 305
            echo (isset($context["entry_card_number"]) ? $context["entry_card_number"] : null);
            echo "</label>
\t\t\t\t<div id=\"card_number\" class=\"card-input-container\"><div id=\"card_image\"></div></div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"card-info-date-cvv clearfix\">
\t\t\t\t<div class=\"card-info-date\">
\t\t\t\t\t<label for=\"expiration_date\" class=\"card-label\">";
            // line 311
            echo (isset($context["entry_expiration_date"]) ? $context["entry_expiration_date"] : null);
            echo "</label>
\t\t\t\t\t<div id=\"expiration_date\" class=\"card-input-container\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-info-cvv\">
\t\t\t\t\t<label for=\"cvv\" class=\"card-label\">";
            // line 315
            echo (isset($context["entry_cvv"]) ? $context["entry_cvv"] : null);
            echo "</label>
\t\t\t\t\t<div id=\"cvv\" class=\"card-input-container\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button id=\"paypal_button_submit\" class=\"btn\" value=\"submit\">";
            // line 319
            echo (isset($context["button_pay"]) ? $context["button_pay"] : null);
            echo "</button>
\t\t</form>
\t</div>
\t";
        }
        // line 323
        echo "\t<div class=\"lds-spinner hidden\"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>
<script type=\"text/javascript\">

function setupPayPal() {
\t
\t";
        // line 329
        if ((isset($context["express_status"]) ? $context["express_status"] : null)) {
            // line 330
            echo "\ttry {\t\t\t\t
\t\t// Render the PayPal button into #paypal_express_button_container
\t\tpaypal.Buttons({
\t\t\tenv: '";
            // line 333
            echo (isset($context["environment"]) ? $context["environment"] : null);
            echo "',
\t\t\tlocale: '";
            // line 334
            echo (isset($context["locale"]) ? $context["locale"] : null);
            echo "',
\t\t\tstyle: {
\t\t\t\tlayout: 'vertical',
\t\t\t\tsize: '";
            // line 337
            echo (isset($context["button_size"]) ? $context["button_size"] : null);
            echo "',
\t\t\t\tcolor: '";
            // line 338
            echo (isset($context["button_color"]) ? $context["button_color"] : null);
            echo "',
\t\t\t\tshape: '";
            // line 339
            echo (isset($context["button_shape"]) ? $context["button_shape"] : null);
            echo "',
\t\t\t\tlabel: '";
            // line 340
            echo (isset($context["button_label"]) ? $context["button_label"] : null);
            echo "'
\t\t\t},
\t\t\t// Set up the transaction
\t\t\tcreateOrder: function(data, actions) {
\t\t\t\torder_id = false;
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\tmethod: 'post',
\t\t\t\t\turl: 'index.php?route=extension/payment/paypal/createOrder',
\t\t\t\t\tdata: '',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess: function(json) {\t\t\t\t\t\t
\t\t\t\t\t\tshowPayPalAlert(json);
\t\t\t\t\t\t\t
\t\t\t\t\t\torder_id = json['order_id'];
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\t
\t\t\t\treturn order_id;\t
\t\t\t},
\t\t\t// Finalize the transaction
\t\t\tonApprove: function(data, actions) {\t\t\t
\t\t\t\t// Call your server to save the transaction
\t\t\t\trestart = false;
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\tmethod: 'post',
\t\t\t\t\turl: 'index.php?route=extension/payment/paypal/approveOrder',
\t\t\t\t\tdata: {'order_id': data.orderID},
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tasync: false,
\t\t\t\t\tsuccess: function(json) {\t\t\t\t\t\t\t
\t\t\t\t\t\tshowPayPalAlert(json);
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['restart']) {
\t\t\t\t\t\t\trestart = json['restart'];
\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\tlocation = json['success'];
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t
\t\t\t\tif (restart) {
\t\t\t\t\treturn actions.restart();
\t\t\t\t}
\t\t\t}
\t\t}).render('#paypal_express_button_container');
\t} catch (error) {
\t\tconsole.error('PayPal Express failed during startup', error);
\t}
\t";
        }
        // line 400
        echo "\t
\t";
        // line 401
        if ((isset($context["card_status"]) ? $context["card_status"] : null)) {
            echo "\t
\ttry {
\t\t// Check if card fields are eligible to render for the buyer's country. The card fields are not eligible in all countries where buyers are located.
\t\tif (paypal.HostedFields.isEligible() === true) {
\t\t\t\$('#paypal_card').removeClass('hidden');
\t\t\t
\t\t\tvar paypal_card_form = document.querySelector('#paypal_card_form');
\t\t\tvar paypal_button_submit = document.querySelector('#paypal_button_submit');
\t\t\t
\t\t\tpaypal.HostedFields.render({
\t\t\t\tstyles: {
\t\t\t\t\t'input': {
\t\t\t\t\t\t'color': '#282c37',
\t\t\t\t\t\t'transition': 'color 0.1s',
\t\t\t\t\t\t'line-height': '3'
\t\t\t\t\t},
\t\t\t\t\t'input.invalid': {
\t\t\t\t\t\t'color': '#E53A40'
\t\t\t\t\t},
\t\t\t\t\t':-ms-input-placeholder': {
\t\t\t\t\t\t'color': 'rgba(0,0,0,0.6)'
\t\t\t\t\t},
\t\t\t\t\t':-moz-placeholder': {
\t\t\t\t\t\t'color': 'rgba(0,0,0,0.6)'
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfields: {
\t\t\t\t\tnumber: {
\t\t\t\t\t\tselector: '#card_number',
\t\t\t\t\t\tplaceholder: '#### #### #### ####'
\t\t\t\t\t},
\t\t\t\t\tcvv: {
\t\t\t\t\t\tselector: '#cvv',
\t\t\t\t\t\tplaceholder: '###'
\t\t\t\t\t},
\t\t\t\t\texpirationDate: {
\t\t\t\t\t\tselector: '#expiration_date',
\t\t\t\t\t\tplaceholder: 'MM / YYYY'
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcreateOrder: function(data, actions) {
\t\t\t\t\torder_id = false;
\t\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\turl: 'index.php?route=extension/payment/paypal/createOrder',
\t\t\t\t\t\tdata: '',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tasync: false,
\t\t\t\t\t\tsuccess: function(json) {\t\t\t\t\t\t\t
\t\t\t\t\t\t\tshowPayPalAlert(json);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\torder_id = json['order_id'];
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\treturn order_id;
\t\t\t\t}
\t\t\t}).then(function(hostedFieldsInstance) {
\t\t\t\thostedFieldsInstance.on('blur', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"blur\", state=' + hostedFieldsInstance.getState() + ', event=' + event);
\t\t\t\t});
\t\t\t\t
\t\t\t\thostedFieldsInstance.on('focus', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"focus\", state=' + hostedFieldsInstance.getState() + ', event=' + event);
\t\t\t\t});

\t\t\t\thostedFieldsInstance.on('validityChange', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"validityChange\", state=' + hostedFieldsInstance.getState() + ',event=' + event);
\t\t\t\t\t
\t\t\t\t\t// Check if all fields are valid, then show submit button
\t\t\t\t\tvar formValid = Object.keys(event.fields).every(function (key) {
\t\t\t\t\t\treturn event.fields[key].isValid;
\t\t\t\t\t});

\t\t\t\t\tif (formValid) {
\t\t\t\t\t\t\$('#paypal_button_submit').addClass('show-button');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#paypal_button_submit').removeClass('show-button');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\thostedFieldsInstance.on('notEmpty', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"notEmpty\", state=' + hostedFieldsInstance.getState() + ', event=' + event);
\t\t\t\t});
       
\t\t\t\thostedFieldsInstance.on('empty', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"empty\", state=' + hostedFieldsInstance.getState() + ',event=' + event);
            
\t\t\t\t\t\$(paypal_card_form).removeClass().addClass('well');
\t\t\t\t\t\$('#card_image').removeClass();
\t\t\t\t});

\t\t\t\thostedFieldsInstance.on('cardTypeChange', function (event) {
\t\t\t\t\tconsole.log('CCF Event \"cardTypeChange\", state=' + hostedFieldsInstance.getState() + ',event=' + event);
\t\t\t\t\t
\t\t\t\t\t\$(paypal_card_form).removeClass().addClass('well');
\t\t\t\t\t\$('#card_image').removeClass();
\t\t\t\t\t
\t\t\t\t\t// Change card bg depending on card type
\t\t\t\t\tif (event.cards.length === 1) {
\t\t\t\t\t\t\$(paypal_card_form).addClass(event.cards[0].type);
\t\t\t\t\t\t\$('#card_image').addClass(event.cards[0].type);
\t\t\t\t\t\t
\t\t\t\t\t\t// Change the CVV length for AmericanExpress cards
\t\t\t\t\t\tif (event.cards[0].code.size === 4) {
\t\t\t\t\t\t\thostedFieldsInstance.setAttribute({
\t\t\t\t\t\t\t\tfield: 'cvv',
\t\t\t\t\t\t\t\tattribute: 'placeholder',
\t\t\t\t\t\t\t\tvalue: '####'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thostedFieldsInstance.setAttribute({
\t\t\t\t\t\t\t\tfield: 'cvv',
\t\t\t\t\t\t\t\tattribute: 'placeholder',
\t\t\t\t\t\t\t\tvalue: '###'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t} else {\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\thostedFieldsInstance.setAttribute({
\t\t\t\t\t\t\tfield: 'cvv',
\t\t\t\t\t\t\tattribute: 'placeholder',
\t\t\t\t\t\t\tvalue: '###'
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t\tpaypal_button_submit.addEventListener('click', function (event) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t
\t\t\t\t\tif (\$('#paypal_button_submit').hasClass('show-button')) {
\t\t\t\t\t\tconsole.log('CCF Event \"click\", state=' + hostedFieldsInstance.getState() + ',event=' + event);

\t\t\t\t\t\tshowPayPalAlert({wait: true});
\t\t\t\t\t
\t\t\t\t\t\thostedFieldsInstance.submit({
\t\t\t\t\t\t\t// Need to specify when triggering 3D Secure authentication
\t\t\t\t\t\t\t";
            // line 541
            if ((isset($context["secure_status"]) ? $context["secure_status"] : null)) {
                // line 542
                echo "\t\t\t\t\t\t\tcontingencies: ['3D_SECURE']
\t\t\t\t\t\t\t";
            }
            // line 544
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t}).then(function (payload) {
\t\t\t\t\t\t\tconsole.log(payload);
\t\t\t\t\t\t\tconsole.log('PayPal CCF submitted:', payload);
\t\t\t\t\t\t
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\tmethod: 'post',
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/payment/paypal/approveOrder',
\t\t\t\t\t\t\t\tdata: {'payload': JSON.stringify(payload)},
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tasync: false,
\t\t\t\t\t\t\t\tsuccess: function(json) {\t\t\t\t\t
\t\t\t\t\t\t\t\t\tshowPayPalAlert(json);
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\tlocation = json['success'];
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}, false);
\t\t\t});
\t\t} else {
\t\t\tconsole.log('Not eligible for CCF');
\t\t}
\t} catch (error) {
\t\tconsole.error('PayPal Card failed during startup', error);
\t}
\t";
        }
        // line 577
        echo "}

function showPayPalAlert(json) {
\t\$('#paypal_form .alert').remove();
\t\$('#paypal_form .lds-spinner').addClass('hidden');
\t\t
\tif (json['wait']) {\t\t
\t\t\$('#paypal_form .lds-spinner').removeClass('hidden');
\t}
\t
\tif (json['error']) {
\t\tif (json['error']['warning']) {
\t\t\t\$('#paypal_form').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button> ' + json['error']['warning'] + '</div>');
\t\t}
\t}
}

function paypalReady() {
\tif (typeof paypal === 'undefined') {
\t\tsetTimeout(paypalReady, 100);
\t} else {
\t\tsetupPayPal();
\t}
}

if (typeof paypal === 'undefined') {
\tvar script = document.createElement('script');
\tscript.type = 'text/javascript';
\tscript.src = 'https://www.paypal.com/sdk/js?components=buttons,hosted-fields&client-id=";
        // line 605
        echo (isset($context["client_id"]) ? $context["client_id"] : null);
        echo "&merchant-id=";
        echo (isset($context["merchant_id"]) ? $context["merchant_id"] : null);
        echo "&currency=";
        echo (isset($context["currency_code"]) ? $context["currency_code"] : null);
        echo "&intent=";
        echo (isset($context["transaction_method"]) ? $context["transaction_method"] : null);
        if (((isset($context["environment"]) ? $context["environment"] : null) == "sandbox")) {
            echo "&buyer-country=NL";
        }
        echo "';
\tscript.setAttribute('data-partner-attribution-id', '";
        // line 606
        echo (isset($context["partner_id"]) ? $context["partner_id"] : null);
        echo "');
\tscript.setAttribute('data-client-token', '";
        // line 607
        echo (isset($context["client_token"]) ? $context["client_token"] : null);
        echo "');
\tscript.async = false;
\tscript.onload = paypalReady();
\t
\tvar paypal_form = document.querySelector('#paypal_form');
\tpaypal_form.appendChild(script);
} else {
\tsetupPayPal();
}

</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 607,  722 => 606,  709 => 605,  679 => 577,  644 => 544,  640 => 542,  638 => 541,  495 => 401,  492 => 400,  429 => 340,  425 => 339,  421 => 338,  417 => 337,  411 => 334,  407 => 333,  402 => 330,  400 => 329,  392 => 323,  385 => 319,  378 => 315,  371 => 311,  362 => 305,  357 => 302,  354 => 301,  350 => 299,  348 => 298,  242 => 194,  81 => 35,  76 => 33,  73 => 32,  71 => 31,  64 => 27,  61 => 26,  59 => 25,  49 => 17,  44 => 15,  41 => 14,  39 => 13,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <style type="text/css">*/
/* */
/* #paypal_form {*/
/* 	position: relative;*/
/* }*/
/* */
/* {% if express_status %}*/
/* #paypal_express_button {*/
/* 	text-align: {{ button_align }};*/
/* }*/
/* */
/* #paypal_express_button_container {*/
/* 	{% if button_width %}*/
/* 	display: inline-block;*/
/* 	width: {{ button_width }};*/
/* 	{% endif %}*/
/* }*/
/* */
/* @media (max-width: 476px) {*/
/* 	#paypal_express_button_container {*/
/* 		width: 100%;*/
/* 	}*/
/* }*/
/* {% endif %}*/
/* {% if card_status %}*/
/* #paypal_card {*/
/* 	text-align: {{ form_align }};*/
/* }*/
/* */
/* #paypal_card_form {*/
/* 	{% if form_width %}*/
/* 	display: inline-block;*/
/* 	width: {{ form_width }};*/
/* 	{% endif %}*/
/* 	text-align: center;*/
/* 	transition: all 600ms cubic-bezier(0.2, 1.3, 0.7, 1);*/
/* 	-webkit-animation: cardIntro 500ms cubic-bezier(0.2, 1.3, 0.7, 1);*/
/*     animation: cardIntro 500ms cubic-bezier(0.2, 1.3, 0.7, 1);*/
/* 	z-index: 1;*/
/* }*/
/* */
/* @media (max-width: 476px) {*/
/* 	#paypal_card_form {*/
/* 		width: 100%;*/
/* 	}*/
/* }*/
/* */
/* #paypal_card_form.visa {*/
/* 	color: #fff;*/
/* 	background-color: #0D4AA2;*/
/* }*/
/* */
/* #paypal_card_form.master-card {*/
/* 	color: #fff;*/
/* 	background-color: #363636;*/
/* 	background: linear-gradient(115deg, #d82332, #d82332 50%, #f1ad3d 50%, #f1ad3d);*/
/* }*/
/* */
/* #paypal_card_form.maestro {*/
/* 	color: #fff;*/
/* 	background-color: #363636;*/
/* 	background: linear-gradient(115deg, #009ddd, #009ddd 50%, #ed1c2e 50%, #ed1c2e);*/
/* }*/
/* */
/* #paypal_card_form.american-express {*/
/* 	color: #fff;*/
/* 	background-color: #007CC3;*/
/* }*/
/* */
/* #paypal_card_form.discover {*/
/* 	color: #fff;*/
/* 	background-color: #ff6000;*/
/* 	background: linear-gradient(#d14310, #f7961e);*/
/* }*/
/* */
/* #paypal_card_form.unionpay, #paypal_card_form.jcb, #paypal_card_form.diners-club {*/
/* 	color: #fff;*/
/* 	background-color: #363636;*/
/* }*/
/* */
/* #paypal_card_form .card-info-number,*/
/* #paypal_card_form .card-info-date-cvv {*/
/* 	position: relative;*/
/* 	text-align: left;*/
/* }*/
/* */
/* #paypal_card_form .card-info-date {*/
/* 	width: 48%;*/
/* 	float: left;*/
/* 	margin-bottom: 0.5em;*/
/* }*/
/* */
/* #paypal_card_form .card-info-cvv {*/
/* 	width: 48%;*/
/* 	float: right;*/
/* 	margin-bottom: 0.5em;*/
/* }*/
/* */
/* #paypal_card_form .card-info-number,*/
/* #paypal_card_form .card-info-date,*/
/* #paypal_card_form .card-info-cvv {*/
/*   transition: -webkit-transform 0.3s;*/
/*   transition: transform 0.3s;*/
/*   transition: transform 0.3s, -webkit-transform 0.3s;*/
/* }*/
/* */
/* #paypal_card_form .card-label {*/
/* 	display: block;*/
/* 	margin-bottom: 0.5em;*/
/* 	text-transform: uppercase;*/
/* }*/
/* */
/* #paypal_card_form .card-input-container {*/
/* 	position: relative;*/
/* 	height: 2.75em;*/
/* 	padding: 5px 10px;*/
/* 	margin-bottom: 1em;*/
/* 	background: rgba(255, 255, 255, 0.86);*/
/* 	border: 1px solid #eee;*/
/* 	border-radius: 2px;*/
/* }*/
/* */
/* #card_image {*/
/* 	position: absolute;*/
/* 	top: 0px;*/
/* 	right: 2px;*/
/* 	width: 44px;*/
/* 	height: 28px;*/
/* 	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);*/
/* 	background-size: 86px 458px;*/
/* 	border-radius: 4px;*/
/* 	background-position: -100px 0;*/
/* 	background-repeat: no-repeat;*/
/* }*/
/* */
/* #card_image.visa {*/
/* 	background-position: 0 -398px;*/
/* }*/
/* */
/* #card_image.master-card {*/
/* 	background-position: 0 -281px;*/
/* }*/
/* */
/* #card_image.american-express {*/
/* 	background-position: 0 -370px;*/
/* }*/
/* */
/* #card_image.discover {*/
/* 	background-position: 0 -163px;*/
/* }*/
/* */
/* #card_image.maestro {*/
/* 	background-position: 0 -251px;*/
/* }*/
/* */
/* #card_image.jcb {*/
/* 	background-position: 0 -221px;*/
/* }*/
/* */
/* #card_image.diners-club {*/
/* 	background-position: 0 -133px;*/
/* }*/
/* */
/* #paypal_button_submit {*/
/* 	width: 100%;	*/
/* 	padding: 1em 1em;*/
/* 	color: #fff;*/
/* 	background: #282c37;*/
/* 	font-size: 15px;*/
/* 	box-shadow: none;*/
/* 	-moz-box-shadow: none;*/
/* 	-webkit-box-shadow: none;*/
/* 	border: 0;*/
/* 	z-index: 0;*/
/* 	opacity: 0.1;*/
/* 	outline: 0;*/
/* 	-webkit-appearance: none;*/
/* }*/
/* */
/* #paypal_button_submit:hover {*/
/* 	background: #535b72;*/
/* }*/
/* */
/* #paypal_button_submit:active {*/
/* 	-webkit-animation: cardIntro 200ms cubic-bezier(0.2, 1.3, 0.7, 1);*/
/*     animation: cardIntro 200ms cubic-bezier(0.2, 1.3, 0.7, 1);*/
/* }*/
/* */
/* #paypal_button_submit.show-button {*/
/* 	opacity: 1;*/
/* 	cursor: pointer;*/
/* }*/
/* {% endif %}*/
/* */
/* #paypal_form .lds-spinner {*/
/* 	display: inline-block;*/
/* 	position: absolute;*/
/* 	width: 64px;*/
/* 	height: 64px;*/
/* 	left: 50%;*/
/* 	top: 50%;*/
/* 	margin-left: -32px;*/
/* 	margin-top: -32px;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div {*/
/* 	transform-origin: 32px 32px;*/
/* 	animation: lds-spinner 1.2s linear infinite;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:after {*/
/* 	content: " ";*/
/* 	display: block;*/
/* 	position: absolute;*/
/* 	top: 3px;*/
/* 	left: 29px;*/
/* 	width: 5px;*/
/* 	height: 14px;*/
/* 	border-radius: 20%;*/
/* 	background: #000;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(1) {*/
/* 	transform: rotate(0deg);*/
/* 	animation-delay: -1.1s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(2) {*/
/* 	transform: rotate(30deg);*/
/* 	animation-delay: -1s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(3) {*/
/* 	transform: rotate(60deg);*/
/* 	animation-delay: -0.9s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(4) {*/
/* 	transform: rotate(90deg);*/
/* 	animation-delay: -0.8s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(5) {*/
/* 	transform: rotate(120deg);*/
/* 	animation-delay: -0.7s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(6) {*/
/* 	transform: rotate(150deg);*/
/* 	animation-delay: -0.6s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(7) {*/
/* 	transform: rotate(180deg);*/
/* 	animation-delay: -0.5s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(8) {*/
/* 	transform: rotate(210deg);*/
/* 	animation-delay: -0.4s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(9) {*/
/* 	transform: rotate(240deg);*/
/* 	animation-delay: -0.3s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(10) {*/
/* 	transform: rotate(270deg);*/
/* 	animation-delay: -0.2s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(11) {*/
/* 	transform: rotate(300deg);*/
/* 	animation-delay: -0.1s;*/
/* }*/
/* */
/* #paypal_form .lds-spinner div:nth-child(12) {*/
/* 	transform: rotate(330deg);*/
/* 	animation-delay: 0s;*/
/* }*/
/* */
/* #paypal_form .hidden {*/
/* 	display: none;*/
/* }*/
/* */
/* @keyframes lds-spinner {*/
/* 	0% {*/
/* 		opacity: 1;*/
/* 	}*/
/* 	100% {*/
/* 		opacity: 0;*/
/* 	}*/
/* }*/
/* */
/* </style>*/
/* <div id="paypal_form">*/
/* 	{% if express_status %}*/
/* 	<div id="paypal_express_button" class="buttons clearfix"><div id="paypal_express_button_container"></div></div>*/
/* 	{% endif %}*/
/* 	{% if card_status %}*/
/* 	<div id="paypal_card" class="hidden">*/
/* 		<form id="paypal_card_form" class="well">*/
/* 			<div class="card-info-number clearfix">*/
/* 				<label for="card_number" class="card-label">{{ entry_card_number }}</label>*/
/* 				<div id="card_number" class="card-input-container"><div id="card_image"></div></div>*/
/* 				*/
/* 			</div>*/
/* 			<div class="card-info-date-cvv clearfix">*/
/* 				<div class="card-info-date">*/
/* 					<label for="expiration_date" class="card-label">{{ entry_expiration_date }}</label>*/
/* 					<div id="expiration_date" class="card-input-container"></div>*/
/* 				</div>*/
/* 				<div class="card-info-cvv">*/
/* 					<label for="cvv" class="card-label">{{ entry_cvv }}</label>*/
/* 					<div id="cvv" class="card-input-container"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<button id="paypal_button_submit" class="btn" value="submit">{{ button_pay }}</button>*/
/* 		</form>*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	<div class="lds-spinner hidden"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* */
/* function setupPayPal() {*/
/* 	*/
/* 	{% if express_status %}*/
/* 	try {				*/
/* 		// Render the PayPal button into #paypal_express_button_container*/
/* 		paypal.Buttons({*/
/* 			env: '{{ environment }}',*/
/* 			locale: '{{ locale }}',*/
/* 			style: {*/
/* 				layout: 'vertical',*/
/* 				size: '{{ button_size }}',*/
/* 				color: '{{ button_color }}',*/
/* 				shape: '{{ button_shape }}',*/
/* 				label: '{{ button_label }}'*/
/* 			},*/
/* 			// Set up the transaction*/
/* 			createOrder: function(data, actions) {*/
/* 				order_id = false;*/
/* 				*/
/* 				$.ajax({*/
/* 					method: 'post',*/
/* 					url: 'index.php?route=extension/payment/paypal/createOrder',*/
/* 					data: '',*/
/* 					dataType: 'json',*/
/* 					async: false,*/
/* 					success: function(json) {						*/
/* 						showPayPalAlert(json);*/
/* 							*/
/* 						order_id = json['order_id'];*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 					*/
/* 				return order_id;	*/
/* 			},*/
/* 			// Finalize the transaction*/
/* 			onApprove: function(data, actions) {			*/
/* 				// Call your server to save the transaction*/
/* 				restart = false;*/
/* 				*/
/* 				$.ajax({*/
/* 					method: 'post',*/
/* 					url: 'index.php?route=extension/payment/paypal/approveOrder',*/
/* 					data: {'order_id': data.orderID},*/
/* 					dataType: 'json',*/
/* 					async: false,*/
/* 					success: function(json) {							*/
/* 						showPayPalAlert(json);*/
/* 						*/
/* 						if (json['restart']) {*/
/* 							restart = json['restart'];*/
/* 						}*/
/* 							*/
/* 						if (json['success']) {*/
/* 							location = json['success'];*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 				*/
/* 				if (restart) {*/
/* 					return actions.restart();*/
/* 				}*/
/* 			}*/
/* 		}).render('#paypal_express_button_container');*/
/* 	} catch (error) {*/
/* 		console.error('PayPal Express failed during startup', error);*/
/* 	}*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if card_status %}	*/
/* 	try {*/
/* 		// Check if card fields are eligible to render for the buyer's country. The card fields are not eligible in all countries where buyers are located.*/
/* 		if (paypal.HostedFields.isEligible() === true) {*/
/* 			$('#paypal_card').removeClass('hidden');*/
/* 			*/
/* 			var paypal_card_form = document.querySelector('#paypal_card_form');*/
/* 			var paypal_button_submit = document.querySelector('#paypal_button_submit');*/
/* 			*/
/* 			paypal.HostedFields.render({*/
/* 				styles: {*/
/* 					'input': {*/
/* 						'color': '#282c37',*/
/* 						'transition': 'color 0.1s',*/
/* 						'line-height': '3'*/
/* 					},*/
/* 					'input.invalid': {*/
/* 						'color': '#E53A40'*/
/* 					},*/
/* 					':-ms-input-placeholder': {*/
/* 						'color': 'rgba(0,0,0,0.6)'*/
/* 					},*/
/* 					':-moz-placeholder': {*/
/* 						'color': 'rgba(0,0,0,0.6)'*/
/* 					}*/
/* 				},*/
/* 				fields: {*/
/* 					number: {*/
/* 						selector: '#card_number',*/
/* 						placeholder: '#### #### #### ####'*/
/* 					},*/
/* 					cvv: {*/
/* 						selector: '#cvv',*/
/* 						placeholder: '###'*/
/* 					},*/
/* 					expirationDate: {*/
/* 						selector: '#expiration_date',*/
/* 						placeholder: 'MM / YYYY'*/
/* 					}*/
/* 				},*/
/* 				createOrder: function(data, actions) {*/
/* 					order_id = false;*/
/* 					*/
/* 					$.ajax({*/
/* 						method: 'post',*/
/* 						url: 'index.php?route=extension/payment/paypal/createOrder',*/
/* 						data: '',*/
/* 						dataType: 'json',*/
/* 						async: false,*/
/* 						success: function(json) {							*/
/* 							showPayPalAlert(json);*/
/* 							*/
/* 							order_id = json['order_id'];*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 					*/
/* 					return order_id;*/
/* 				}*/
/* 			}).then(function(hostedFieldsInstance) {*/
/* 				hostedFieldsInstance.on('blur', function (event) {*/
/* 					console.log('CCF Event "blur", state=' + hostedFieldsInstance.getState() + ', event=' + event);*/
/* 				});*/
/* 				*/
/* 				hostedFieldsInstance.on('focus', function (event) {*/
/* 					console.log('CCF Event "focus", state=' + hostedFieldsInstance.getState() + ', event=' + event);*/
/* 				});*/
/* */
/* 				hostedFieldsInstance.on('validityChange', function (event) {*/
/* 					console.log('CCF Event "validityChange", state=' + hostedFieldsInstance.getState() + ',event=' + event);*/
/* 					*/
/* 					// Check if all fields are valid, then show submit button*/
/* 					var formValid = Object.keys(event.fields).every(function (key) {*/
/* 						return event.fields[key].isValid;*/
/* 					});*/
/* */
/* 					if (formValid) {*/
/* 						$('#paypal_button_submit').addClass('show-button');*/
/* 					} else {*/
/* 						$('#paypal_button_submit').removeClass('show-button');*/
/* 					}*/
/* 				});*/
/* */
/* 				hostedFieldsInstance.on('notEmpty', function (event) {*/
/* 					console.log('CCF Event "notEmpty", state=' + hostedFieldsInstance.getState() + ', event=' + event);*/
/* 				});*/
/*        */
/* 				hostedFieldsInstance.on('empty', function (event) {*/
/* 					console.log('CCF Event "empty", state=' + hostedFieldsInstance.getState() + ',event=' + event);*/
/*             */
/* 					$(paypal_card_form).removeClass().addClass('well');*/
/* 					$('#card_image').removeClass();*/
/* 				});*/
/* */
/* 				hostedFieldsInstance.on('cardTypeChange', function (event) {*/
/* 					console.log('CCF Event "cardTypeChange", state=' + hostedFieldsInstance.getState() + ',event=' + event);*/
/* 					*/
/* 					$(paypal_card_form).removeClass().addClass('well');*/
/* 					$('#card_image').removeClass();*/
/* 					*/
/* 					// Change card bg depending on card type*/
/* 					if (event.cards.length === 1) {*/
/* 						$(paypal_card_form).addClass(event.cards[0].type);*/
/* 						$('#card_image').addClass(event.cards[0].type);*/
/* 						*/
/* 						// Change the CVV length for AmericanExpress cards*/
/* 						if (event.cards[0].code.size === 4) {*/
/* 							hostedFieldsInstance.setAttribute({*/
/* 								field: 'cvv',*/
/* 								attribute: 'placeholder',*/
/* 								value: '####'*/
/* 							});*/
/* 						} else {*/
/* 							hostedFieldsInstance.setAttribute({*/
/* 								field: 'cvv',*/
/* 								attribute: 'placeholder',*/
/* 								value: '###'*/
/* 							});*/
/* 						}*/
/* 					} else {												*/
/* 						hostedFieldsInstance.setAttribute({*/
/* 							field: 'cvv',*/
/* 							attribute: 'placeholder',*/
/* 							value: '###'*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			*/
/* 				paypal_button_submit.addEventListener('click', function (event) {*/
/* 					event.preventDefault();*/
/* 					*/
/* 					if ($('#paypal_button_submit').hasClass('show-button')) {*/
/* 						console.log('CCF Event "click", state=' + hostedFieldsInstance.getState() + ',event=' + event);*/
/* */
/* 						showPayPalAlert({wait: true});*/
/* 					*/
/* 						hostedFieldsInstance.submit({*/
/* 							// Need to specify when triggering 3D Secure authentication*/
/* 							{% if secure_status %}*/
/* 							contingencies: ['3D_SECURE']*/
/* 							{% endif %}*/
/* 						*/
/* 						}).then(function (payload) {*/
/* 							console.log(payload);*/
/* 							console.log('PayPal CCF submitted:', payload);*/
/* 						*/
/* 							$.ajax({*/
/* 								method: 'post',*/
/* 								url: 'index.php?route=extension/payment/paypal/approveOrder',*/
/* 								data: {'payload': JSON.stringify(payload)},*/
/* 								dataType: 'json',*/
/* 								async: false,*/
/* 								success: function(json) {					*/
/* 									showPayPalAlert(json);*/
/* 								*/
/* 									if (json['success']) {*/
/* 										location = json['success'];*/
/* 									}*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* 						});*/
/* 					}*/
/* 				}, false);*/
/* 			});*/
/* 		} else {*/
/* 			console.log('Not eligible for CCF');*/
/* 		}*/
/* 	} catch (error) {*/
/* 		console.error('PayPal Card failed during startup', error);*/
/* 	}*/
/* 	{% endif %}*/
/* }*/
/* */
/* function showPayPalAlert(json) {*/
/* 	$('#paypal_form .alert').remove();*/
/* 	$('#paypal_form .lds-spinner').addClass('hidden');*/
/* 		*/
/* 	if (json['wait']) {		*/
/* 		$('#paypal_form .lds-spinner').removeClass('hidden');*/
/* 	}*/
/* 	*/
/* 	if (json['error']) {*/
/* 		if (json['error']['warning']) {*/
/* 			$('#paypal_form').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i><button type="button" class="close" data-dismiss="alert">&times;</button> ' + json['error']['warning'] + '</div>');*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* function paypalReady() {*/
/* 	if (typeof paypal === 'undefined') {*/
/* 		setTimeout(paypalReady, 100);*/
/* 	} else {*/
/* 		setupPayPal();*/
/* 	}*/
/* }*/
/* */
/* if (typeof paypal === 'undefined') {*/
/* 	var script = document.createElement('script');*/
/* 	script.type = 'text/javascript';*/
/* 	script.src = 'https://www.paypal.com/sdk/js?components=buttons,hosted-fields&client-id={{ client_id }}&merchant-id={{ merchant_id }}&currency={{ currency_code }}&intent={{ transaction_method }}{% if (environment == 'sandbox') %}&buyer-country=NL{% endif %}';*/
/* 	script.setAttribute('data-partner-attribution-id', '{{ partner_id }}');*/
/* 	script.setAttribute('data-client-token', '{{ client_token }}');*/
/* 	script.async = false;*/
/* 	script.onload = paypalReady();*/
/* 	*/
/* 	var paypal_form = document.querySelector('#paypal_form');*/
/* 	paypal_form.appendChild(script);*/
/* } else {*/
/* 	setupPayPal();*/
/* }*/
/* */
/* </script>*/
