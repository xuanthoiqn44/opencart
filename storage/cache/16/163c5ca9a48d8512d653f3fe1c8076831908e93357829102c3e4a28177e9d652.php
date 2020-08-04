<?php

/* journal3/template/journal3/module/product_blocks_attributes.twig */
class __TwigTemplate_c24b7fd7704a182f7126f9ca456a11db6a46a4a46fb9a04153130cfc502a36b9 extends Twig_Template
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
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 2
            echo "  <div id=\"tab-specification\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 6
                echo "                <thead>
                <tr>
                    <td colspan=\"2\"><strong>";
                // line 8
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                </tr>
                </thead>
                <tbody>";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 13
                    echo "                    <tr>
                        <td>";
                    // line 14
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                        <td>";
                    // line 15
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                    </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                </tbody>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </table>
    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_blocks_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  58 => 18,  50 => 15,  46 => 14,  43 => 13,  39 => 12,  33 => 8,  29 => 6,  25 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if attribute_groups %}*/
/*   <div id="tab-specification">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered">*/
/*             {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                     <tr>*/
/*                         <td>{{ attribute.name }}</td>*/
/*                         <td>{{ attribute.text }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
