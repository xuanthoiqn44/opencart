<?php

/* journal3/template/information/contact.twig */
class __TwigTemplate_d8d98f2ad704ae431585921dacbeb701d7284d0e0fe5921732f2174374ceb6c3 extends Twig_Template
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
<ul class=\"breadcrumb\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "  <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</span></h1>";
        }
        // line 10
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        echo "
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            $context["class"] = "col-sm-6";
        } elseif ((        // line 15
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            $context["class"] = "col-sm-9";
        } else {
            // line 18
            $context["class"] = "col-sm-12";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default")) {
            // line 22
            echo "        <h1 class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>";
        }
        // line 24
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"title location-title\">";
        // line 25
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h2>
      <div class=\"panel panel-default our-location\">
        <div class=\"panel-body\">
          <div class=\"row store-data\">";
        // line 29
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 30
            echo "            <div class=\"col-sm-3 store-image\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>";
        }
        // line 32
        echo "            <div class=\"col-sm-3 store-address\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
              <address>";
        // line 34
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
              </address>";
        // line 36
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 37
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i>";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>";
        }
        // line 39
        echo "            </div>
            <div class=\"col-sm-3 store-tel\"><strong>";
        // line 40
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>";
        // line 41
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              <br />";
        // line 43
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 44
            echo "                <div class=\"store-fax\">
                  <strong>";
            // line 45
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>";
            // line 46
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
                </div>";
        }
        // line 49
        echo "            </div>
            <div class=\"col-sm-3 store-info\">";
        // line 51
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 52
            echo "                <div class=\"store-hours\">
                  <strong>";
            // line 53
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />";
            // line 54
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
                </div>
              <br />";
        }
        // line 58
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 59
            echo "                <div class=\"store-comment\">
                  <strong>";
            // line 60
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />";
            // line 61
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
                </div>";
        }
        // line 64
        echo "            </div>
          </div>
        </div>
      </div>";
        // line 68
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 69
            echo "      <h2 class=\"title stores-title\">";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h2>
      <div class=\"panel-group other-stores\" id=\"accordion\">";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 72
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 74
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 76
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row store-data\">";
                // line 79
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 80
                    echo "                <div class=\"col-sm-3 store-image\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>";
                }
                // line 82
                echo "                <div class=\"col-sm-3 store-address\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>";
                // line 84
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>";
                // line 86
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 87
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i>";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>";
                }
                // line 89
                echo "                </div>
                <div class=\"col-sm-3 store-tel\"> <strong>";
                // line 90
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>";
                // line 91
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />
                  <div class=\"store-fax\">";
                // line 94
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 95
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>";
                    // line 96
                    echo $this->getAttribute($context["location"], "fax", array());
                }
                // line 98
                echo "                  </div>
                </div>
                <div class=\"col-sm-3 store-info\">";
                // line 101
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 102
                    echo "                  <div class=\"store-hours\">
                  <strong>";
                    // line 103
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />";
                    // line 104
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  </div>
                  <br />";
                }
                // line 108
                echo "                  <div class=\"store-comment\">";
                // line 109
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 110
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />";
                    // line 111
                    echo $this->getAttribute($context["location"], "comment", array());
                }
                // line 113
                echo "                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "      </div>";
        }
        // line 122
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "contactFormStatus"), "method")) {
            // line 123
            echo "      <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
            // line 125
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 127
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
            // line 129
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"input-name\" class=\"form-control\" />";
            // line 130
            if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
                // line 131
                echo "              <div class=\"text-danger\">";
                echo (isset($context["error_name"]) ? $context["error_name"] : null);
                echo "</div>";
            }
            // line 133
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 136
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
            // line 138
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" id=\"input-email\" class=\"form-control\" />";
            // line 139
            if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
                // line 140
                echo "              <div class=\"text-danger\">";
                echo (isset($context["error_email"]) ? $context["error_email"] : null);
                echo "</div>";
            }
            // line 142
            echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
            // line 145
            echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
            echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
            // line 147
            echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
            echo "</textarea>";
            // line 148
            if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
                // line 149
                echo "              <div class=\"text-danger\">";
                echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
                echo "</div>";
            }
            // line 151
            echo "            </div>
          </div>";
            // line 153
            echo (isset($context["captcha"]) ? $context["captcha"] : null);
            echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button class=\"btn btn-primary\" type=\"submit\"><span>";
            // line 157
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "</span></button>
          </div>
        </div>
      </form>";
        }
        // line 162
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>";
        // line 163
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>";
        // line 165
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 165,  384 => 163,  381 => 162,  374 => 157,  367 => 153,  364 => 151,  359 => 149,  357 => 148,  354 => 147,  349 => 145,  344 => 142,  339 => 140,  337 => 139,  334 => 138,  329 => 136,  324 => 133,  319 => 131,  317 => 130,  314 => 129,  309 => 127,  304 => 125,  298 => 123,  296 => 122,  293 => 120,  282 => 113,  279 => 111,  275 => 110,  273 => 109,  271 => 108,  265 => 104,  262 => 103,  259 => 102,  257 => 101,  253 => 98,  250 => 96,  246 => 95,  244 => 94,  239 => 91,  236 => 90,  233 => 89,  224 => 87,  222 => 86,  218 => 84,  213 => 82,  204 => 80,  202 => 79,  197 => 76,  190 => 74,  186 => 72,  182 => 71,  177 => 69,  175 => 68,  170 => 64,  165 => 61,  162 => 60,  159 => 59,  157 => 58,  151 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 49,  135 => 46,  132 => 45,  129 => 44,  127 => 43,  123 => 41,  120 => 40,  117 => 39,  108 => 37,  106 => 36,  102 => 34,  97 => 32,  88 => 30,  86 => 29,  80 => 25,  76 => 24,  71 => 22,  69 => 21,  65 => 20,  62 => 18,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  46 => 10,  41 => 8,  39 => 7,  37 => 6,  27 => 4,  23 => 3,  19 => 1,);
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
/* <div id="information-contact" class="container">*/
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
/*       <h2 class="title location-title">{{ text_location }}</h2>*/
/*       <div class="panel panel-default our-location">*/
/*         <div class="panel-body">*/
/*           <div class="row store-data">*/
/*             {% if image %}*/
/*             <div class="col-sm-3 store-image"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3 store-address"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3 store-tel"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*                 <div class="store-fax">*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ fax }}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3 store-info">*/
/*               {% if open %}*/
/*                 <div class="store-hours">*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ open }}<br />*/
/*                 </div>*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*                 <div class="store-comment">*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ comment }}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h2 class="title stores-title">{{ text_store }}</h2>*/
/*       <div class="panel-group other-stores" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row store-data">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3 store-image"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3 store-address"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3 store-tel"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   <div class="store-fax">*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-sm-3 store-info">*/
/*                   {% if location.open %}*/
/*                   <div class="store-hours">*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   </div>*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   <div class="store-comment">*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if j3.settings.get('contactFormStatus') %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <button class="btn btn-primary" type="submit"><span>{{ button_submit }}</span></button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
