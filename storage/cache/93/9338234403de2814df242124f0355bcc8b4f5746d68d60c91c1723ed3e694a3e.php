<?php

/* journal3/template/product/product.twig */
class __TwigTemplate_dcb105b09e54846c6d3afd1f6ef5f26a2ce674d88201b66bbe5e36256b3e24a1 extends Twig_Template
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
        $context["stylePrefix"] = (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) ? ("quickviewPageStyle") : ("productPageStyle"));
        // line 2
        $context["direction"] = (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "left") || ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method") == "right"))) ? ("vertical") : ("horizontal"));
        // line 3
        $context["carousel"] = (((isset($context["direction"]) ? $context["direction"] : null) == "vertical") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesCarousel")), "method"));
        // line 4
        $context["carouselOptions"] = array("slidesPerView" => "auto", "spaceBetween" => (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array(), "any", false, true), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesSpacing")), "method"), 0)) : (0)), "direction" =>         // line 7
(isset($context["direction"]) ? $context["direction"] : null));
        // line 9
        $context["galleryOptions"] = array("thumbWidth" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.width"), "method"), "thumbConHeight" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_popup_thumb.height"), "method"), "addClass" => "lg-product-images", "mode" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryMode")), "method"), "download" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryDownload")), "method"), "fullScreen" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryFullScreen")), "method"));
        // line 17
        $context["quickviewExpand"] = ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method") || ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method") > 0) && (isset($context["description"]) ? $context["description"] : null)) && (twig_length_filter($this->env, (isset($context["description"]) ? $context["description"] : null)) <= $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "globalExpandCharactersLimit"), "method"))))) ? ("no-expand") : (""));
        // line 18
        echo (isset($context["header"]) ? $context["header"] : null);
        // line 19
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 20
            echo "<ul class=\"breadcrumb\">";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 22
                echo "  <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ul>";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "top")) {
                // line 26
                echo "  <h1 class=\"title page-title\"><span>";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</span></h1>";
            }
            // line 28
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
            echo "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
            // line 30
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
    <div id=\"content\" class=\"";
            // line 31
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">";
        }
        // line 33
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        // line 34
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 35
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "pageTitlePosition"), "method") == "default") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method"))) {
                // line 36
                echo "          <h1 class=\"title page-title\">";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h1>";
            }
        }
        // line 39
        $context["classes"] = (($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" => (        // line 40
(isset($context["product_quantity"]) ? $context["product_quantity"] : null) <= 0), "has-countdown" =>         // line 41
(isset($context["date_end"]) ? $context["date_end"] : null), "has-zero-price" =>  !        // line 42
(isset($context["product_price_value"]) ? $context["product_price_value"] : null), "has-extra-button" =>         // line 43
(isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null))), "method") . " ") .         // line 44
(isset($context["product_exclude_classes"]) ? $context["product_exclude_classes"] : null));
        // line 45
        echo "      <div class=\"product-info";
        echo (isset($context["classes"]) ? $context["classes"] : null);
        echo "\">";
        // line 46
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 47
            echo "        <div class=\"product-left\">
          <div class=\"product-image direction-";
            // line 48
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo " position-";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesPosition")), "method");
            echo "\">
            <div class=\"swiper main-image\" data-options='";
            // line 49
            echo twig_jsonencode_filter($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "carousel", array(0 => $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getJs", array(), "method"), 1 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ImageCarouselStyle")), "method"), twig_constant("JSON_FORCE_OBJECT"));
            echo "'";
            if (((((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method")) && (isset($context["carousel"]) ? $context["carousel"] : null)) && ((isset($context["direction"]) ? $context["direction"] : null) == "vertical"))) {
                echo "style=\"width: calc(100% -";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                echo "px)\"";
            }
            echo ">
              <div class=\"swiper-container\"";
            // line 50
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
                <div class=\"swiper-wrapper\">";
            // line 52
            $context["gallery"] = array();
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                $context["gallery"] = twig_array_merge((isset($context["gallery"]) ? $context["gallery"] : null), array(0 => array("src" => $this->getAttribute($context["image"], "popup", array()), "thumb" => $this->getAttribute($context["image"], "galleryThumb", array()), "subHtml" => (isset($context["heading_title"]) ? $context["heading_title"] : null))));
                // line 55
                echo "                    <div class=\"swiper-slide\"";
                if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                    echo " data-gallery=\".lightgallery-product-images\" data-index=\"";
                    echo $this->getAttribute($context["loop"], "index0", array());
                    echo "\"";
                }
                echo ">
                      <img src=\"";
                // line 56
                echo $this->getAttribute($context["image"], "image", array());
                echo "\"";
                if ($this->getAttribute($context["image"], "image2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["image"], "image", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["image"], "image2x", array());
                    echo " 2x\"";
                }
                echo " data-largeimg=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_thumb.height"), "method");
                echo "\"/>
                    </div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
              </div>
              <div class=\"swiper-controls\">
                <div class=\"swiper-buttons\">
                  <div class=\"swiper-button-prev\"></div>
                  <div class=\"swiper-button-next\"></div>
                </div>
                <div class=\"swiper-pagination\"></div>
              </div>";
            // line 68
            if ((isset($context["product_labels"]) ? $context["product_labels"] : null)) {
                // line 69
                echo "                <div class=\"product-labels\">";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_labels"]) ? $context["product_labels"] : null));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 71
                    echo "                    <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo $this->getAttribute($context["label"], "display", array());
                    echo "\"><b>";
                    echo $this->getAttribute($context["label"], "label", array());
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                </div>";
            }
            // line 75
            echo "            </div>";
            // line 76
            if (((twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null)) > 1) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "AdditionalImagesStatus")), "method"))) {
                // line 77
                if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
                    // line 78
                    echo "                <div class=\"swiper additional-images\" data-options='";
                    echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'";
                    if (((isset($context["direction"]) ? $context["direction"] : null) == "vertical")) {
                        echo "style=\"width:";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "image_dimensions_additional.width"), "method");
                        echo "px\"";
                    }
                    echo ">
                  <div class=\"swiper-container\"";
                    // line 79
                    if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                    <div class=\"swiper-wrapper\">";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 82
                        echo "                        <div class=\"swiper-slide additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                          <img src=\"";
                        // line 83
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\"";
                        if ($this->getAttribute($context["image"], "thumb2x", array())) {
                            echo "srcset=\"";
                            echo $this->getAttribute($context["image"], "thumb", array());
                            echo " 1x,";
                            echo $this->getAttribute($context["image"], "thumb2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                        </div>";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                    </div>
                  </div>
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>";
                } else {
                    // line 95
                    echo "                <div class=\"additional-images\">";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 97
                        echo "                    <div class=\"additional-image\" data-index=\"";
                        echo $this->getAttribute($context["loop"], "index0", array());
                        echo "\">
                      <img src=\"";
                        // line 98
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\"/>
                    </div>";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                </div>";
                }
            }
            // line 104
            echo "          </div>";
            // line 105
            if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "GalleryStatus")), "method"))) {
                // line 106
                echo "          <div class=\"lightgallery lightgallery-product-images\" data-images='";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["gallery"]) ? $context["gallery"] : null)));
                echo "' data-options='";
                echo twig_jsonencode_filter((isset($context["galleryOptions"]) ? $context["galleryOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
                echo "'></div>";
            }
            // line 108
            if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                // line 109
                if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array())) {
                    // line 110
                    echo "            <div class=\"product-blocks blocks-image\">";
                    // line 111
                    echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "image", array()));
                    echo "
            </div>";
                }
            }
            // line 115
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "image")))) {
                // line 116
                echo "            <div class=\"description";
                echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
                echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">";
                // line 119
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
                </div>";
                // line 121
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                    // line 122
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
                }
                // line 124
                echo "              </div>
            </div>";
            }
            // line 127
            if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "image"))) {
                // line 128
                echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
                // line 129
                echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
                echo "</span>";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 131
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["tag"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["tag"], "tag", array());
                    echo "</a>";
                    // line 132
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "<b>,</b>";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "            </div>";
            }
            // line 136
            echo "        </div>";
        }
        // line 138
        echo "        <div class=\"product-right\">
          <div id=\"product\" class=\"product-details\">";
        // line 140
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 141
            echo "          <div class=\"title page-title\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>";
            // line 142
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array())) {
                // line 143
                echo "          <div class=\"product-blocks blocks-top\">";
                // line 144
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "top", array()));
                echo "
          </div>";
            }
        }
        // line 149
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method") && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "top")))) {
            // line 150
            echo "            <div class=\"description";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
              <div class=\"expand-block\">
                <div class=\"expand-content\">";
            // line 153
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
                </div>";
            // line 155
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 156
                echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
            }
            // line 158
            echo "              </div>
            </div>";
        }
        // line 162
        if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "default"))) {
            // line 163
            echo "            <div class=\"product-stats\">
              <ul class=\"list-unstyled\">";
            // line 165
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                // line 166
                echo "                  <li class=\"product-stock";
                if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                    echo "in-stock";
                } else {
                    echo "out-of-stock";
                }
                echo "\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                echo ":</b> <span>";
                echo (isset($context["stock"]) ? $context["stock"] : null);
                echo "</span></li>";
            }
            // line 168
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                // line 169
                echo "                  <li class=\"product-manufacturer\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                echo ":</b> <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>";
            }
            // line 171
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                // line 172
                echo "                  <li class=\"product-reward\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                echo ":</b> <span>";
                echo (isset($context["reward"]) ? $context["reward"] : null);
                echo "</span></li>";
            }
            // line 174
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                // line 175
                echo "                  <li class=\"product-model\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                echo ":</b> <span>";
                echo (isset($context["model"]) ? $context["model"] : null);
                echo "</span></li>";
            }
            // line 177
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                // line 178
                echo "                  <li class=\"product-weight\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                echo "</span></li>";
            }
            // line 180
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                // line 181
                echo "                  <li class=\"product-dimension\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_length"]) ? $context["product_length"] : null);
                echo " x";
                echo (isset($context["product_width"]) ? $context["product_width"] : null);
                echo " x";
                echo (isset($context["product_height"]) ? $context["product_height"] : null);
                echo "</span></li>";
            }
            // line 183
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                // line 184
                echo "                  <li class=\"product-sku\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                echo "</span></li>";
            }
            // line 186
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                // line 187
                echo "                  <li class=\"product-upc\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                echo "</span></li>";
            }
            // line 189
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                // line 190
                echo "                  <li class=\"product-ean\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                echo "</span></li>";
            }
            // line 192
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                // line 193
                echo "                  <li class=\"product-jan\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                echo "</span></li>";
            }
            // line 195
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                // line 196
                echo "                  <li class=\"product-isbn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                echo "</span></li>";
            }
            // line 198
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                // line 199
                echo "                  <li class=\"product-mpn\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                echo "</span></li>";
            }
            // line 201
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                // line 202
                echo "                  <li class=\"product-location\"><b>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                echo ":</b> <span>";
                echo (isset($context["product_location"]) ? $context["product_location"] : null);
                echo "</span></li>";
            }
            // line 204
            echo "              </ul>";
            // line 205
            if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                // line 206
                echo "                <div class=\"brand-image product-manufacturer\">
                  <a href=\"";
                // line 207
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                // line 208
                if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                    // line 209
                    echo "                      <img src=\"";
                    echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                    echo "\"";
                    if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                        echo "srcset=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo " 1x,";
                        echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                        echo " 2x\"";
                    }
                    echo " alt=\"";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "\"/>";
                }
                // line 211
                echo "                    <span>";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</span>
                  </a>
                </div>";
            }
            // line 215
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                // line 216
                echo "                <div class=\"custom-stats\">";
                // line 217
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                    // line 218
                    echo "                    <div class=\"product-sold\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                    echo "</b></div>";
                }
                // line 220
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                    // line 221
                    echo "                    <div class=\"product-views\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                    echo "</b></div>";
                }
                // line 223
                echo "                </div>";
            }
            // line 225
            echo "            </div>";
        }
        // line 228
        if (((isset($context["review_status"]) ? $context["review_status"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
            // line 229
            echo "            <div class=\"rating rating-page\">
              <div class=\"rating-stars\">";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 232
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    // line 233
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                } else {
                    // line 236
                    echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-1x\"></i>
                      <i class=\"fa fa-star-o fa-stack-1x\"></i>
                    </span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "              </div>
              <div class=\"review-links\">
                <a>";
            // line 244
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                <b>";
            // line 245
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "RatingSeparator")), "method");
            echo "</b>
                <a>";
            // line 246
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
              </div>
            </div>";
        }
        // line 251
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) ? ("quickviewCountdown") : ("countdownStatus"))), "method"))) {
            // line 252
            echo "            <div class=\"countdown-wrapper\">";
            // line 253
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method")) {
                // line 254
                echo "              <h5 class=\"countdown-title title\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CountdownText")), "method");
                echo "</h5>";
            }
            // line 256
            echo "              <div class=\"countdown\" data-date=\"";
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "\">
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 257
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownDay"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 258
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownHour"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 259
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownMin"), "method");
            echo "</span></div>
                <div><i class=\"fa fa-spinner fa-spin\"></i><span>";
            // line 260
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownSec"), "method");
            echo "</span></div>
              </div>
            </div>";
        }
        // line 265
        if (((isset($context["price"]) ? $context["price"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method"))) {
            // line 266
            echo "          <div class=\"product-price-group\">
           <div class=\"price-wrapper\">
             <div class=\"price-group\">";
            // line 269
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 270
                echo "                 <div class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>";
            } else {
                // line 272
                echo "                 <div class=\"product-price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</div>
                 <div class=\"product-price-old\">";
                // line 273
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</div>";
            }
            // line 275
            echo "             </div>";
            // line 276
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 277
                echo "               <div class=\"product-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>";
            }
            // line 279
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 280
                echo "               <div class=\"product-points\">";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</div>";
            }
            // line 283
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 284
                echo "               <div class=\"discounts\">";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 286
                    echo "                   <div class=\"product-discount\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 288
                echo "               </div>";
            }
            // line 290
            echo "           </div>";
            // line 291
            if ((( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Stats")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "StatsPosition")), "method") == "price"))) {
                // line 292
                echo "              <div class=\"product-stats\">
                <ul class=\"list-unstyled\">";
                // line 294
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStock")), "method")) {
                    // line 295
                    echo "                    <li class=\"product-stock";
                    if (((isset($context["product_quantity"]) ? $context["product_quantity"] : null) > 0)) {
                        echo "in-stock";
                    } else {
                        echo "out-of-stock";
                    }
                    echo "\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductStockText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["stock"]) ? $context["stock"] : null);
                    echo "</span></li>";
                }
                // line 297
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "list"))) {
                    // line 298
                    echo "                    <li class=\"product-manufacturer\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerText")), "method");
                    echo ":</b> <a href=\"";
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</a></li>";
                }
                // line 300
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductReward")), "method") && (isset($context["reward"]) ? $context["reward"] : null))) {
                    // line 301
                    echo "                    <li class=\"product-reward\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductRewardText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["reward"]) ? $context["reward"] : null);
                    echo "</span></li>";
                }
                // line 303
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModel")), "method") && (isset($context["model"]) ? $context["model"] : null))) {
                    // line 304
                    echo "                    <li class=\"product-model\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductModelText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["model"]) ? $context["model"] : null);
                    echo "</span></li>";
                }
                // line 306
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeight")), "method") && (isset($context["product_weight"]) ? $context["product_weight"] : null))) {
                    // line 307
                    echo "                    <li class=\"product-weight\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductWeightText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_weight"]) ? $context["product_weight"] : null);
                    echo "</span></li>";
                }
                // line 309
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimension")), "method") && (isset($context["product_dimension"]) ? $context["product_dimension"] : null))) {
                    // line 310
                    echo "                    <li class=\"product-dimension\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductDimensionText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_length"]) ? $context["product_length"] : null);
                    echo " x";
                    echo (isset($context["product_width"]) ? $context["product_width"] : null);
                    echo " x";
                    echo (isset($context["product_height"]) ? $context["product_height"] : null);
                    echo "</span></li>";
                }
                // line 312
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKU")), "method") && (isset($context["product_sku"]) ? $context["product_sku"] : null))) {
                    // line 313
                    echo "                    <li class=\"product-sku\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSKUText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_sku"]) ? $context["product_sku"] : null);
                    echo "</span></li>";
                }
                // line 315
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPC")), "method") && (isset($context["product_upc"]) ? $context["product_upc"] : null))) {
                    // line 316
                    echo "                    <li class=\"product-upc\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductUPCText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_upc"]) ? $context["product_upc"] : null);
                    echo "</span></li>";
                }
                // line 318
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEAN")), "method") && (isset($context["product_ean"]) ? $context["product_ean"] : null))) {
                    // line 319
                    echo "                    <li class=\"product-ean\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductEANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_ean"]) ? $context["product_ean"] : null);
                    echo "</span></li>";
                }
                // line 321
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJAN")), "method") && (isset($context["product_jan"]) ? $context["product_jan"] : null))) {
                    // line 322
                    echo "                    <li class=\"product-jan\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductJANText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_jan"]) ? $context["product_jan"] : null);
                    echo "</span></li>";
                }
                // line 324
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBN")), "method") && (isset($context["product_isbn"]) ? $context["product_isbn"] : null))) {
                    // line 325
                    echo "                    <li class=\"product-isbn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductISBNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_isbn"]) ? $context["product_isbn"] : null);
                    echo "</span></li>";
                }
                // line 327
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPN")), "method") && (isset($context["product_mpn"]) ? $context["product_mpn"] : null))) {
                    // line 328
                    echo "                    <li class=\"product-mpn\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductMPNText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_mpn"]) ? $context["product_mpn"] : null);
                    echo "</span></li>";
                }
                // line 330
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocation")), "method") && (isset($context["product_location"]) ? $context["product_location"] : null))) {
                    // line 331
                    echo "                    <li class=\"product-location\"><b>";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductLocationText")), "method");
                    echo ":</b> <span>";
                    echo (isset($context["product_location"]) ? $context["product_location"] : null);
                    echo "</span></li>";
                }
                // line 333
                echo "                </ul>";
                // line 334
                if ((((isset($context["manufacturer"]) ? $context["manufacturer"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturer")), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductManufacturerDisplay")), "method") == "image"))) {
                    // line 335
                    echo "                  <div class=\"brand-image product-manufacturer\">
                    <a href=\"";
                    // line 336
                    echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                    echo "\">";
                    // line 337
                    if ((isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null)) {
                        // line 338
                        echo "                        <img src=\"";
                        echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                        echo "\"";
                        if ((isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null)) {
                            echo "srcset=\"";
                            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
                            echo " 1x,";
                            echo (isset($context["manufacturer_image2x"]) ? $context["manufacturer_image2x"] : null);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                        echo "\"/>";
                    }
                    // line 340
                    echo "                      <span>";
                    echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                    echo "</span>
                    </a>
                  </div>";
                }
                // line 344
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CustomStats")), "method")) {
                    // line 345
                    echo "                  <div class=\"custom-stats\">";
                    // line 346
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductSold")), "method")) {
                        // line 347
                        echo "                      <div class=\"product-sold\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "SoldText"), 1 => (isset($context["products_sold"]) ? $context["products_sold"] : null)), "method");
                        echo "</b></div>";
                    }
                    // line 349
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ProductViews")), "method")) {
                        // line 350
                        echo "                      <div class=\"product-views\"><b>";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getWithValue", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ViewsText"), 1 => (isset($context["product_views"]) ? $context["product_views"] : null)), "method");
                        echo "</b></div>";
                    }
                    // line 352
                    echo "                  </div>";
                }
                // line 354
                echo "              </div>";
            }
            // line 356
            echo "          </div>";
        }
        // line 359
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 360
            echo "          <div class=\"product-options\">
            <h3 class=\"options-title title\">";
            // line 361
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>";
            // line 362
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 363
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 364
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushSelect")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 365
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 366
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 367
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 369
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 370
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 371
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")";
                        }
                        // line 372
                        echo " </option>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "              </select>
            </div>";
                }
                // line 377
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 378
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushRadio")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 379
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 380
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 381
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 383
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />";
                        // line 384
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")";
                            }
                            echo "\"/>";
                        }
                        // line 385
                        echo "                    <span class=\"option-value\">";
                        // line 386
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 387
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 388
                            echo "                        <span class=\"option-price\">
                          (";
                            // line 389
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                        </span>";
                        }
                        // line 392
                        echo "                    </span>
                  </label>
                </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    echo " </div>
            </div>";
                }
                // line 398
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 399
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "OptionsPushCheckbox")), "method")) {
                        echo "push-option";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 400
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 401
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 402
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 404
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />";
                        // line 405
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                            }
                            echo "\" data-toggle=\"tooltip\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "PushTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo ")";
                            }
                            echo "\"/>";
                        }
                        // line 406
                        echo "                    <span class=\"option-value\">";
                        // line 407
                        echo $this->getAttribute($context["option_value"], "name", array());
                        // line 408
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 409
                            echo "                        <span class=\"option-price\">(";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")</span>";
                        }
                        // line 411
                        echo "                    </span>
                  </label>
                </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 414
                    echo " </div>
            </div>";
                }
                // line 417
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 418
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 419
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 420
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>";
                }
                // line 423
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 424
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 425
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 426
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>";
                }
                // line 429
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 430
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\">";
                    // line 431
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 432
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i>";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 433
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>";
                }
                // line 436
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 437
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 438
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 440
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>";
                }
                // line 446
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 447
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 448
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 450
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>";
                }
                // line 456
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 457
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required";
                    }
                    echo " product-option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 458
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\" data-picker-class=\"product-options pp-date-time-picker\">
                <input type=\"text\" name=\"option[";
                    // line 460
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "          </div>";
        }
        // line 470
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 471
            echo "            <h3 class=\"title recurring-title\">";
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 474
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>";
            // line 475
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 476
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>";
        }
        // line 483
        if (((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) || ((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")))) {
            // line 484
            echo "          <div class=\"button-group-page\">
            <div class=\"buttons-wrapper\">
              <div class=\"stepper-group cart-group\">";
            // line 487
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                // line 488
                echo "                <div class=\"stepper\">
                  <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 489
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" data-minimum=\"";
                echo (isset($context["minimum"]) ? $context["minimum"] : null);
                echo "\" class=\"form-control\"/>
                  <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 490
                echo (isset($context["product_id"]) ? $context["product_id"] : null);
                echo "\" />
                  <span>
                  <i class=\"fa fa-angle-up\"></i>
                  <i class=\"fa fa-angle-down\"></i>
                </span>
                </div>
                <a id=\"button-cart\" data-loading-text=\"<span class='btn-text'>";
                // line 496
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span>\" class=\"btn btn-cart\"";
                if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipStatus")), "method"))) {
                    echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CartTooltipPosition")), "method");
                    echo "\" title=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"";
                }
                echo "><span class=\"btn-text\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>";
            }
            // line 498
            if (((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method"))) {
                // line 499
                echo "                  <div class=\"extra-group\">";
                // line 500
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product_extra_buttons"]) ? $context["product_extra_buttons"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 501
                    echo "                      <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo " btn-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "-extra\"";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "Extra") . $this->getAttribute($context["loop"], "index", array())) . "ButtonDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "ExtraTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["extra_button"], "label", array());
                        echo "\"";
                    }
                    if (($this->getAttribute($context["extra_button"], "action", array()) == "quickbuy")) {
                        echo "data-quick-buy";
                    }
                    if ((($this->getAttribute($context["extra_button"], "action", array()) == "link") && $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array()))) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array());
                        echo "\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["extra_button"], "link", array())), "method");
                        echo " data-product_id=\"";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo "\"";
                    }
                    echo " data-loading-text=\"<span class='btn-text'>";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>\"><span class=\"btn-text\">";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span></a>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 503
                echo "                  </div>";
            }
            // line 505
            echo "              </div>";
            // line 507
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 508
                echo "              <div class=\"wishlist-compare\">";
                // line 509
                if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
                    // line 510
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                        // line 511
                        echo "                  <a class=\"btn btn-wishlist\"";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "WishlistTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\"";
                        }
                        echo " onclick=\"parent.wishlist.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "</span></a>";
                    }
                    // line 514
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                        // line 515
                        echo "                  <a class=\"btn btn-compare\"";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipStatus")), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "CompareTooltipPosition")), "method");
                            echo "\" title=\"";
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\"";
                        }
                        echo " onclick=\"parent.compare.add(";
                        echo (isset($context["product_id"]) ? $context["product_id"] : null);
                        echo ");\"><span class=\"btn-text\">";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "</span></a>";
                    }
                }
                // line 518
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) {
                    // line 519
                    echo "                  <a class=\"btn btn-more-details\" href=\"";
                    echo (isset($context["view_more_url"]) ? $context["view_more_url"] : null);
                    echo "\" target=\"_top\"";
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsDisplay")), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipStatus")), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "MoreDetailsTooltipPosition")), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                        echo "\"";
                    }
                    echo "><span class=\"btn-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExtraText"), "method");
                    echo "</span></a>";
                }
                // line 521
                echo "              </div>";
            }
            // line 523
            echo "            </div>
          </div>";
        }
        // line 527
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 528
            echo "            <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i>";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>";
        }
        // line 531
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 532
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array())) {
                // line 533
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "details", array()));
            }
        }
        // line 536
        echo "          </div>";
        // line 537
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 538
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array())) {
                // line 539
                echo "          <div class=\"product-blocks blocks-bottom\">";
                // line 540
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "bottom", array()));
                echo "
          </div>";
            }
        }
        // line 544
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "details"))) {
            // line 545
            echo "            <div class=\"tags\">
              <span class=\"tags-title\">";
            // line 546
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>";
            // line 547
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 548
                echo "                <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>";
                // line 549
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "            </div>";
        }
        // line 553
        echo "        </div>
      </div>";
        // line 555
        if (((((isset($context["description"]) ? $context["description"] : null) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "quickview"), "method")) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescription"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewDescriptionPosition"), "method") == "default"))) {
            // line 556
            echo "        <div class=\"description";
            echo (isset($context["quickviewExpand"]) ? $context["quickviewExpand"] : null);
            echo "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">";
            // line 559
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
            </div>";
            // line 561
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewExpandButton"), "method")) {
                // line 562
                echo "              <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
            }
            // line 564
            echo "          </div>
        </div>";
        }
        // line 567
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(0 => "options"), "method")) {
            // line 568
            if ($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array())) {
                // line 569
                echo "        <div class=\"product-blocks blocks-default\">";
                // line 570
                echo twig_join_filter($this->getAttribute((isset($context["product_blocks"]) ? $context["product_blocks"] : null), "default", array()));
                echo "
        </div>";
            }
        }
        // line 574
        if ((((isset($context["tags"]) ? $context["tags"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) && ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => ((isset($context["stylePrefix"]) ? $context["stylePrefix"] : null) . "TagsPosition")), "method") == "default"))) {
            // line 575
            echo "        <div class=\"tags\">
          <span class=\"tags-title\">";
            // line 576
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>";
            // line 577
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 578
                echo "            <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>";
                // line 579
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<b>,</b>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 581
            echo "        </div>";
        }
        // line 583
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 584
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "</div>";
            // line 585
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>";
        }
        // line 588
        echo "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product select[name=\"recurring_id\"]'
    ),
    dataType: 'json',
    beforeSend: function () {
      \$('#button-cart').button('loading');
    },
    complete: function () {
      \$('#button-cart').button('reset');
    },
    success: function (json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');

        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - 50 }, 'slow');
        } catch (e) {
        }
      }

      if (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items').removeClass('count-zero');
        } else {
          parent.\$('#cart-items').addClass('count-zero');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart/info ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }
      }
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(thrownError + '\\r\\n' + xhr.statusText + '\\r\\n' + xhr.responseText);
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 703
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 708
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 714
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

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
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
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
\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 782
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 786
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - 100
      }, 200);
    }
  });
});
//--></script>";
        // line 840
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 841
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets", 1 => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)), "method");
        }
        // line 843
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2087 => 843,  2084 => 841,  2082 => 840,  2026 => 786,  2019 => 782,  1948 => 714,  1939 => 708,  1931 => 703,  1814 => 588,  1809 => 585,  1806 => 584,  1804 => 583,  1801 => 581,  1785 => 579,  1779 => 578,  1762 => 577,  1759 => 576,  1756 => 575,  1754 => 574,  1748 => 570,  1746 => 569,  1744 => 568,  1742 => 567,  1738 => 564,  1735 => 562,  1733 => 561,  1729 => 559,  1723 => 556,  1721 => 555,  1718 => 553,  1715 => 551,  1699 => 549,  1693 => 548,  1676 => 547,  1673 => 546,  1670 => 545,  1668 => 544,  1662 => 540,  1660 => 539,  1658 => 538,  1656 => 537,  1654 => 536,  1650 => 533,  1648 => 532,  1646 => 531,  1641 => 528,  1639 => 527,  1635 => 523,  1632 => 521,  1617 => 519,  1615 => 518,  1599 => 515,  1597 => 514,  1582 => 511,  1580 => 510,  1578 => 509,  1576 => 508,  1574 => 507,  1572 => 505,  1569 => 503,  1527 => 501,  1510 => 500,  1508 => 499,  1506 => 498,  1492 => 496,  1483 => 490,  1477 => 489,  1474 => 488,  1472 => 487,  1468 => 484,  1466 => 483,  1461 => 478,  1451 => 476,  1447 => 475,  1444 => 474,  1437 => 471,  1435 => 470,  1432 => 467,  1416 => 460,  1409 => 458,  1400 => 457,  1398 => 456,  1386 => 450,  1379 => 448,  1370 => 447,  1368 => 446,  1356 => 440,  1349 => 438,  1340 => 437,  1338 => 436,  1331 => 433,  1323 => 432,  1319 => 431,  1310 => 430,  1308 => 429,  1297 => 426,  1291 => 425,  1282 => 424,  1280 => 423,  1269 => 420,  1263 => 419,  1254 => 418,  1252 => 417,  1248 => 414,  1240 => 411,  1234 => 409,  1232 => 408,  1230 => 407,  1228 => 406,  1206 => 405,  1201 => 404,  1197 => 402,  1191 => 401,  1187 => 400,  1175 => 399,  1173 => 398,  1169 => 395,  1161 => 392,  1155 => 389,  1152 => 388,  1150 => 387,  1148 => 386,  1146 => 385,  1124 => 384,  1119 => 383,  1115 => 381,  1109 => 380,  1105 => 379,  1093 => 378,  1091 => 377,  1087 => 374,  1081 => 372,  1075 => 371,  1073 => 370,  1068 => 369,  1064 => 368,  1061 => 367,  1055 => 366,  1049 => 365,  1037 => 364,  1035 => 363,  1031 => 362,  1028 => 361,  1025 => 360,  1023 => 359,  1020 => 356,  1017 => 354,  1014 => 352,  1009 => 350,  1007 => 349,  1002 => 347,  1000 => 346,  998 => 345,  996 => 344,  989 => 340,  974 => 338,  972 => 337,  969 => 336,  966 => 335,  964 => 334,  962 => 333,  955 => 331,  953 => 330,  946 => 328,  944 => 327,  937 => 325,  935 => 324,  928 => 322,  926 => 321,  919 => 319,  917 => 318,  910 => 316,  908 => 315,  901 => 313,  899 => 312,  888 => 310,  886 => 309,  879 => 307,  877 => 306,  870 => 304,  868 => 303,  861 => 301,  859 => 300,  850 => 298,  848 => 297,  835 => 295,  833 => 294,  830 => 292,  828 => 291,  826 => 290,  823 => 288,  813 => 286,  809 => 285,  807 => 284,  805 => 283,  799 => 280,  797 => 279,  791 => 277,  789 => 276,  787 => 275,  783 => 273,  778 => 272,  773 => 270,  771 => 269,  767 => 266,  765 => 265,  759 => 260,  755 => 259,  751 => 258,  747 => 257,  742 => 256,  737 => 254,  735 => 253,  733 => 252,  731 => 251,  725 => 246,  721 => 245,  717 => 244,  713 => 242,  703 => 236,  698 => 233,  696 => 232,  692 => 231,  689 => 229,  687 => 228,  684 => 225,  681 => 223,  676 => 221,  674 => 220,  669 => 218,  667 => 217,  665 => 216,  663 => 215,  656 => 211,  641 => 209,  639 => 208,  636 => 207,  633 => 206,  631 => 205,  629 => 204,  622 => 202,  620 => 201,  613 => 199,  611 => 198,  604 => 196,  602 => 195,  595 => 193,  593 => 192,  586 => 190,  584 => 189,  577 => 187,  575 => 186,  568 => 184,  566 => 183,  555 => 181,  553 => 180,  546 => 178,  544 => 177,  537 => 175,  535 => 174,  528 => 172,  526 => 171,  517 => 169,  515 => 168,  502 => 166,  500 => 165,  497 => 163,  495 => 162,  491 => 158,  488 => 156,  486 => 155,  482 => 153,  476 => 150,  474 => 149,  468 => 144,  466 => 143,  464 => 142,  460 => 141,  458 => 140,  455 => 138,  452 => 136,  449 => 134,  433 => 132,  427 => 131,  410 => 130,  407 => 129,  404 => 128,  402 => 127,  398 => 124,  395 => 122,  393 => 121,  389 => 119,  383 => 116,  381 => 115,  375 => 111,  373 => 110,  371 => 109,  369 => 108,  362 => 106,  360 => 105,  358 => 104,  354 => 101,  334 => 98,  329 => 97,  312 => 96,  310 => 95,  300 => 86,  272 => 83,  267 => 82,  250 => 81,  244 => 79,  233 => 78,  231 => 77,  229 => 76,  227 => 75,  224 => 73,  212 => 71,  208 => 70,  206 => 69,  204 => 68,  194 => 59,  160 => 56,  151 => 55,  149 => 54,  132 => 53,  130 => 52,  124 => 50,  114 => 49,  108 => 48,  105 => 47,  103 => 46,  99 => 45,  97 => 44,  96 => 43,  95 => 42,  94 => 41,  93 => 40,  92 => 39,  86 => 36,  84 => 35,  82 => 34,  80 => 33,  76 => 31,  72 => 30,  67 => 28,  62 => 26,  60 => 25,  58 => 24,  48 => 22,  44 => 21,  42 => 20,  40 => 19,  38 => 18,  36 => 17,  34 => 15,  33 => 14,  32 => 13,  31 => 11,  30 => 10,  29 => 9,  27 => 7,  26 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set stylePrefix = j3.document.isPopup('quickview') ? 'quickviewPageStyle' : 'productPageStyle' %}*/
/* {% set direction = j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'left' or j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') == 'right' ? 'vertical' : 'horizontal' %}*/
/* {% set carousel = direction == 'vertical' or j3.settings.get(stylePrefix ~ 'AdditionalImagesCarousel') %}*/
/* {% set carouselOptions = {*/
/*   slidesPerView: 'auto',*/
/*   spaceBetween: j3.settings.get(stylePrefix ~ 'AdditionalImagesSpacing')|default(0),*/
/*   direction: direction*/
/* } %}*/
/* {% set galleryOptions = {*/
/*   thumbWidth: j3.settings.get('image_dimensions_popup_thumb.width'),*/
/*   thumbConHeight: j3.settings.get('image_dimensions_popup_thumb.height'),*/
/*   addClass: 'lg-product-images',*/
/*   mode: j3.settings.get(stylePrefix ~ 'GalleryMode'),*/
/*   download: j3.settings.get(stylePrefix ~ 'GalleryDownload'),*/
/*   fullScreen: j3.settings.get(stylePrefix ~ 'GalleryFullScreen')*/
/* } %}*/
/* {% set quickviewExpand = not j3.settings.get('quickviewExpandButton') or (j3.settings.get('globalExpandCharactersLimit') > 0 and description and description|length <= j3.settings.get('globalExpandCharactersLimit')) ? 'no-expand': '' %}*/
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
/* <div id="product-product" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     <div id="content" class="{{ class }}">*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if j3.settings.get('pageTitlePosition') == 'default' or j3.document.isPopup('quickview') %}*/
/*           <h1 class="title page-title">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% set classes = j3.classes({*/
/*         'out-of-stock': product_quantity <= 0,*/
/*         'has-countdown': date_end,*/
/*         'has-zero-price': not product_price_value,*/
/*         'has-extra-button': product_extra_buttons,*/
/*       }) ~ ' ' ~ product_exclude_classes %}*/
/*       <div class="product-info {{ classes }}">*/
/*         {% if not j3.document.isPopup('options') %}*/
/*         <div class="product-left">*/
/*           <div class="product-image direction-{{ direction }} position-{{ j3.settings.get(stylePrefix ~ 'AdditionalImagesPosition') }}">*/
/*             <div class="swiper main-image" data-options='{{ j3.carousel(j3.document.getJs(), stylePrefix ~ 'ImageCarouselStyle')|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') and carousel and direction == 'vertical' %}style="width: calc(100% - {{ j3.settings.get('image_dimensions_additional.width') }}px)"{% endif %}>*/
/*               <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% set gallery = [] %}*/
/*                   {% for image in images %}*/
/*                     {% set gallery = gallery|merge([{src: image.popup, thumb: image.galleryThumb, subHtml: heading_title}]) %}*/
/*                     <div class="swiper-slide" {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %} data-gallery=".lightgallery-product-images" data-index="{{ loop.index0 }}" {% endif %}>*/
/*                       <img src="{{ image.image }}" {% if image.image2x %}srcset="{{ image.image }} 1x, {{ image.image2x }} 2x"{% endif %} data-largeimg="{{ image.popup }}" alt="{{ heading_title }}" title="{{ heading_title }}" width="{{ j3.settings.get('image_dimensions_thumb.width') }}" height="{{ j3.settings.get('image_dimensions_thumb.height') }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-controls">*/
/*                 <div class="swiper-buttons">*/
/*                   <div class="swiper-button-prev"></div>*/
/*                   <div class="swiper-button-next"></div>*/
/*                 </div>*/
/*                 <div class="swiper-pagination"></div>*/
/*               </div>*/
/*               {% if product_labels %}*/
/*                 <div class="product-labels">*/
/*                   {% for id, label in product_labels %}*/
/*                     <span class="product-label product-label-{{ id }} product-label-{{ label.display }}"><b>{{ label.label }}</b></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if images|length > 1 and j3.settings.get(stylePrefix ~ 'AdditionalImagesStatus') %}*/
/*               {% if carousel %}*/
/*                 <div class="swiper additional-images" data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if direction == 'vertical' %}style="width: {{ j3.settings.get('image_dimensions_additional.width') }}px"{% endif %}>*/
/*                   <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*                     <div class="swiper-wrapper">*/
/*                       {% for image in images %}*/
/*                         <div class="swiper-slide additional-image" data-index="{{ loop.index0 }}">*/
/*                           <img src="{{ image.thumb }}" {% if image.thumb2x %}srcset="{{ image.thumb }} 1x, {{ image.thumb2x }} 2x"{% endif %} alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="swiper-buttons">*/
/*                     <div class="swiper-button-prev"></div>*/
/*                     <div class="swiper-button-next"></div>*/
/*                   </div>*/
/*                   <div class="swiper-pagination"></div>*/
/*                 </div>*/
/*               {% else %}*/
/*                 <div class="additional-images">*/
/*                   {% for image in images %}*/
/*                     <div class="additional-image" data-index="{{ loop.index0 }}">*/
/*                       <img src="{{ image.thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}"/>*/
/*                     </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup() and j3.settings.get(stylePrefix ~ 'GalleryStatus') %}*/
/*           <div class="lightgallery lightgallery-product-images" data-images='{{ gallery|json_encode|e }}' data-options='{{ galleryOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'></div>*/
/*           {% endif %}*/
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.image %}*/
/*             <div class="product-blocks blocks-image">*/
/*               {{ product_blocks.image|join }}*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'image') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'image') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="product-right">*/
/*           <div id="product" class="product-details">*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           <div class="title page-title">{{ heading_title }}</div>*/
/*           {% if product_blocks.top %}*/
/*           <div class="product-blocks blocks-top">*/
/*           {{ product_blocks.top|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/* */
/*           {% if j3.document.isPopup('quickview') and (j3.settings.get('quickviewDescription')and j3.settings.get('quickviewDescriptionPosition') == 'top') %}*/
/*             <div class="description {{ quickviewExpand }}">*/
/*               <div class="expand-block">*/
/*                 <div class="expand-content">*/
/*                   {{ description }}*/
/*                 </div>*/
/*                 {% if j3.settings.get('quickviewExpandButton') %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'default') %}*/
/*             <div class="product-stats">*/
/*               <ul class="list-unstyled">*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                   <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                   <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                   <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                   <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                   <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                   <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                   <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                   <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                   <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                   <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                   <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                   <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                   <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*               {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                 <div class="brand-image product-manufacturer">*/
/*                   <a href="{{ manufacturers }}">*/
/*                     {% if manufacturer_image %}*/
/*                       <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                     {% endif %}*/
/*                     <span>{{ manufacturer }}</span>*/
/*                   </a>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                 <div class="custom-stats">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                     <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                     <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if review_status and not j3.document.isPopup() %}*/
/*             <div class="rating rating-page">*/
/*               <div class="rating-stars">*/
/*                 {% for i in 1..5 %}*/
/*                   {% if rating < i %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>{% else %}*/
/*                     <span class="fa fa-stack">*/
/*                       <i class="fa fa-star fa-stack-1x"></i>*/
/*                       <i class="fa fa-star-o fa-stack-1x"></i>*/
/*                     </span>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <div class="review-links">*/
/*                 <a>{{ reviews }}</a>*/
/*                 <b>{{ j3.settings.get(stylePrefix ~ 'RatingSeparator') }}</b>*/
/*                 <a>{{ text_write }}</a>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if date_end and j3.settings.get(j3.document.isPopup() ? 'quickviewCountdown' : 'countdownStatus') %}*/
/*             <div class="countdown-wrapper">*/
/*               {% if j3.settings.get(stylePrefix ~ 'CountdownText') %}*/
/*               <h5 class="countdown-title title">{{ j3.settings.get(stylePrefix ~ 'CountdownText') }}</h5>*/
/*               {% endif %}*/
/*               <div class="countdown" data-date="{{ date_end }}">*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownDay') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownHour') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownMin') }}</span></div>*/
/*                 <div><i class="fa fa-spinner fa-spin"></i><span>{{ j3.settings.get('countdownSec') }}</span></div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if price and not j3.document.isPopup('options') %}*/
/*           <div class="product-price-group">*/
/*            <div class="price-wrapper">*/
/*              <div class="price-group">*/
/*                {% if not special %}*/
/*                  <div class="product-price">{{ price }}</div>*/
/*                {% else %}*/
/*                  <div class="product-price-new">{{ special }}</div>*/
/*                  <div class="product-price-old">{{ price }}</div>*/
/*                {% endif %}*/
/*              </div>*/
/*              {% if tax %}*/
/*                <div class="product-tax">{{ text_tax }} {{ tax }}</div>*/
/*              {% endif %}*/
/*              {% if points %}*/
/*                <div class="product-points">{{ text_points }} {{ points }}</div>*/
/*              {% endif %}*/
/* */
/*              {% if discounts %}*/
/*                <div class="discounts">*/
/*                  {% for discount in discounts %}*/
/*                    <div class="product-discount">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</div>*/
/*                  {% endfor %}*/
/*                </div>*/
/*              {% endif %}*/
/*            </div>*/
/*             {% if not j3.document.isPopup('options') and j3.settings.get(stylePrefix ~ 'Stats') and (j3.settings.get(stylePrefix ~ 'StatsPosition') == 'price') %}*/
/*               <div class="product-stats">*/
/*                 <ul class="list-unstyled">*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductStock')%}*/
/*                     <li class="product-stock {% if product_quantity > 0 %}in-stock{% else %}out-of-stock{% endif %}"><b>{{ j3.settings.get(stylePrefix ~ 'ProductStockText') }}:</b> <span>{{ stock }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'list') %}*/
/*                     <li class="product-manufacturer"><b>{{ j3.settings.get(stylePrefix ~ 'ProductManufacturerText') }}:</b> <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductReward') and reward %}*/
/*                     <li class="product-reward"><b>{{ j3.settings.get(stylePrefix ~ 'ProductRewardText') }}:</b> <span>{{ reward }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductModel') and model %}*/
/*                     <li class="product-model"><b>{{ j3.settings.get(stylePrefix ~ 'ProductModelText') }}:</b> <span>{{ model }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductWeight') and product_weight %}*/
/*                     <li class="product-weight"><b>{{ j3.settings.get(stylePrefix ~ 'ProductWeightText') }}:</b> <span>{{ product_weight }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductDimension') and product_dimension %}*/
/*                     <li class="product-dimension"><b>{{ j3.settings.get(stylePrefix ~ 'ProductDimensionText') }}:</b> <span>{{ product_length }} x {{ product_width }} x {{ product_height }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductSKU') and product_sku %}*/
/*                     <li class="product-sku"><b>{{ j3.settings.get(stylePrefix ~ 'ProductSKUText') }}:</b> <span> {{ product_sku }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductUPC') and product_upc %}*/
/*                     <li class="product-upc"><b>{{ j3.settings.get(stylePrefix ~ 'ProductUPCText') }}:</b> <span>{{ product_upc }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductEAN') and product_ean %}*/
/*                     <li class="product-ean"><b>{{ j3.settings.get(stylePrefix ~ 'ProductEANText') }}:</b> <span>{{ product_ean }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductJAN') and product_jan %}*/
/*                     <li class="product-jan"><b>{{ j3.settings.get(stylePrefix ~ 'ProductJANText') }}:</b> <span>{{ product_jan }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductISBN') and product_isbn %}*/
/*                     <li class="product-isbn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductISBNText') }}:</b> <span>{{ product_isbn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductMPN') and product_mpn %}*/
/*                     <li class="product-mpn"><b>{{ j3.settings.get(stylePrefix ~ 'ProductMPNText') }}:</b> <span>{{ product_mpn }}</span></li>*/
/*                   {% endif %}*/
/*                   {% if j3.settings.get(stylePrefix ~ 'ProductLocation') and product_location %}*/
/*                     <li class="product-location"><b>{{ j3.settings.get(stylePrefix ~ 'ProductLocationText') }}:</b> <span>{{ product_location }}</span></li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*                 {% if manufacturer and j3.settings.get(stylePrefix ~ 'ProductManufacturer') and (j3.settings.get(stylePrefix ~ 'ProductManufacturerDisplay') == 'image') %}*/
/*                   <div class="brand-image product-manufacturer">*/
/*                     <a href="{{ manufacturers }}">*/
/*                       {% if manufacturer_image %}*/
/*                         <img src="{{ manufacturer_image }}" {% if manufacturer_image2x %}srcset="{{ manufacturer_image }} 1x, {{ manufacturer_image2x }} 2x"{% endif %} alt="{{ manufacturer }}"/>*/
/*                       {% endif %}*/
/*                       <span>{{ manufacturer }}</span>*/
/*                     </a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if j3.settings.get(stylePrefix ~ 'CustomStats')%}*/
/*                   <div class="custom-stats">*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductSold')%}*/
/*                       <div class="product-sold"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'SoldText', products_sold) }}</b></div>*/
/*                     {% endif %}*/
/*                     {% if j3.settings.get(stylePrefix ~ 'ProductViews')%}*/
/*                       <div class="product-views"><b>{{ j3.settings.getWithValue(stylePrefix ~ 'ViewsText', product_views) }}</b></div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if options %}*/
/*           <div class="product-options">*/
/*             <h3 class="options-title title">{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushSelect') %}push-option{% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushRadio') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">*/
/*                           ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                         </span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }} {% if j3.settings.get(stylePrefix ~ 'OptionsPushCheckbox') %}push-option{% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'PushTooltipPosition') }}" title="{{ option_value.name }} {% if option_value.price %} ({{ option_value.price_prefix }}{{ option_value.price }}) {% endif %}"/> {% endif %}*/
/*                     <span class="option-value">*/
/*                       {{ option_value.name }}*/
/*                       {% if option_value.price %}*/
/*                         <span class="option-price">({{ option_value.price_prefix }}{{ option_value.price }})</span>*/
/*                       {% endif %}*/
/*                     </span>*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %} product-option-{{ option.type }}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time" data-picker-class="product-options pp-date-time-picker">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if recurrings %}*/
/*             <h3 class="title recurring-title">{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') or (product_extra_buttons and not j3.document.isPopup()) %}*/
/*           <div class="button-group-page">*/
/*             <div class="buttons-wrapper">*/
/*               <div class="stepper-group cart-group">*/
/*                 {% if j3.settings.get('catalogCartStatus') %}*/
/*                 <div class="stepper">*/
/*                   <input id="product-quantity" type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" class="form-control"/>*/
/*                   <input id="product-id" type="hidden" name="product_id" value="{{ product_id }}" />*/
/*                   <span>*/
/*                   <i class="fa fa-angle-up"></i>*/
/*                   <i class="fa fa-angle-down"></i>*/
/*                 </span>*/
/*                 </div>*/
/*                 <a id="button-cart" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>" class="btn btn-cart" {% if (j3.settings.get(stylePrefix ~ 'CartDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CartTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-cart-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CartTooltipPosition') }}" title="{{ button_cart }}" {% endif %}><span class="btn-text">{{ button_cart }}</span></a>*/
/*                 {% endif %}*/
/*                 {% if product_extra_buttons and not j3.document.isPopup() %}*/
/*                   <div class="extra-group">*/
/*                     {% for id, extra_button in product_extra_buttons %}*/
/*                       <a class="btn btn-extra btn-extra-{{ id }} btn-{{ loop.index }}-extra" {% if (j3.settings.get(stylePrefix ~ 'Extra' ~ loop.index ~ 'ButtonDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'ExtraTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="extra-tooltip pp-extra-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'ExtraTooltipPosition') }}" title="{{ extra_button.label }}" {% endif %} {% if extra_button.action == 'quickbuy' %}data-quick-buy{% endif %} {% if extra_button.action == 'link' and extra_button.link.href %}href="{{ extra_button.link.href }}" {{ j3.linkAttrs(extra_button.link) }} data-product_id="{{ product_id }}"{% endif %} data-loading-text="<span class='btn-text'>{{ extra_button.label }}</span>"><span class="btn-text">{{ extra_button.label }}</span></a>*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*               <div class="wishlist-compare">*/
/*                 {% if not j3.document.isPopup('options') %}*/
/*                   {% if j3.settings.get('catalogWishlistStatus') %}*/
/*                   <a class="btn btn-wishlist" {% if (j3.settings.get(stylePrefix ~ 'WishlistDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'WishlistTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-wishlist-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'WishlistTooltipPosition') }}" title="{{ button_wishlist }}" {% endif %} onclick="parent.wishlist.add({{ product_id }});"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*                   {% endif %}*/
/* */
/*                   {% if j3.settings.get('catalogCompareStatus') %}*/
/*                   <a class="btn btn-compare" {% if (j3.settings.get(stylePrefix ~ 'CompareDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'CompareTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="pp-compare-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'CompareTooltipPosition') }}" title="{{ button_compare }}" {% endif %} onclick="parent.compare.add({{ product_id }});"><span class="btn-text">{{ button_compare }}</span></a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*                 {% if j3.document.isPopup('quickview') %}*/
/*                   <a class="btn btn-more-details" href="{{ view_more_url }}" target="_top" {% if (j3.settings.get(stylePrefix ~ 'MoreDetailsDisplay') == "icon") and (j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipStatus')) %} data-toggle="tooltip" data-tooltip-class="more-details-tooltip" data-placement="{{ j3.settings.get(stylePrefix ~ 'MoreDetailsTooltipPosition') }}" title="{{ j3.settings.get('quickviewExtraText') }}" {% endif %}><span class="btn-text">{{ j3.settings.get('quickviewExtraText') }}</span></a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if minimum > 1 %}*/
/*             <div class="minimum alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/* */
/*           {% if not j3.document.isPopup('options') %}*/
/*             {% if product_blocks.details %}*/
/*                 {{ product_blocks.details|join }}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           </div>*/
/*           {% if not j3.document.isPopup('options') %}*/
/*           {% if product_blocks.bottom %}*/
/*           <div class="product-blocks blocks-bottom">*/
/*             {{ product_blocks.bottom|join }}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'details') %}*/
/*             <div class="tags">*/
/*               <span class="tags-title">{{ text_tags }}</span>*/
/*               {% for tag in tags %}*/
/*                 <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*                 {% if not loop.last %}<b>,</b>{% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% if description and j3.document.isPopup('quickview') and j3.settings.get('quickviewDescription') and (j3.settings.get('quickviewDescriptionPosition') == 'default') %}*/
/*         <div class="description {{ quickviewExpand }}">*/
/*           <div class="expand-block">*/
/*             <div class="expand-content">*/
/*               {{ description }}*/
/*             </div>*/
/*             {% if j3.settings.get('quickviewExpandButton') %}*/
/*               <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup('options') %}*/
/*         {% if product_blocks.default %}*/
/*         <div class="product-blocks blocks-default">*/
/*           {{ product_blocks.default|join }}*/
/*         </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% if tags and not j3.document.isPopup() and (j3.settings.get(stylePrefix ~ 'TagsPosition') == 'default') %}*/
/*         <div class="tags">*/
/*           <span class="tags-title">{{ text_tags }}</span>*/
/*           {% for tag in tags %}*/
/*             <a href="{{ tag.href }}">{{ tag.tag }}</a>*/
/*             {% if not loop.last %}<b>,</b>{% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not j3.document.isPopup() %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart, [data-quick-buy]').on('click', function () {*/
/*   var $btn = $(this);*/
/*   $.ajax({*/
/*     url: 'index.php?route=checkout/cart/add',*/
/*     type: 'post',*/
/*     data: $(*/
/*       '#product .button-group-page input[type=\'text\'], #product .button-group-page input[type=\'hidden\'], #product .button-group-page input[type=\'radio\']:checked, #product .button-group-page input[type=\'checkbox\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +*/
/*       '#product .product-options input[type=\'text\'], #product .product-options input[type=\'hidden\'], #product .product-options input[type=\'radio\']:checked, #product .product-options input[type=\'checkbox\']:checked, #product .product-options select, #product .product-options textarea, ' +*/
/*       '#product select[name="recurring_id"]'*/
/*     ),*/
/*     dataType: 'json',*/
/*     beforeSend: function () {*/
/*       $('#button-cart').button('loading');*/
/*     },*/
/*     complete: function () {*/
/*       $('#button-cart').button('reset');*/
/*     },*/
/*     success: function (json) {*/
/*       $('.alert-dismissible, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if (json['error']) {*/
/*         if (json['error']['option']) {*/
/*           for (i in json['error']['option']) {*/
/*             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*               element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             } else {*/
/*               element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*             }*/
/*           }*/
/*         }*/
/* */
/*         if (json['error']['recurring']) {*/
/*           $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*         }*/
/* */
/*         // Highlight any found errors*/
/*         $('.text-danger').parent().addClass('has-error');*/
/* */
/*         try {*/
/*           $('html, body').animate({ scrollTop: $('.form-group.has-error').offset().top - 50 }, 'slow');*/
/*         } catch (e) {*/
/*         }*/
/*       }*/
/* */
/*       if (json['success']) {*/
/*         if ($('html').hasClass('popup-options')) {*/
/*           parent.$(".popup-options .popup-close").trigger('click');*/
/*         }*/
/* */
/*         if (json['notification']) {*/
/*           parent.show_notification(json['notification']);*/
/*         } else {*/
/*           parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         parent.$('#cart-total').html(json['total']);*/
/*         parent.$('#cart-items').html(json['items_count']);*/
/* */
/*         if (json['items_count']) {*/
/*           parent.$('#cart-items').removeClass('count-zero');*/
/*         } else {*/
/*           parent.$('#cart-items').addClass('count-zero');*/
/*         }*/
/* */
/*         if (Journal['scrollToTop']) {*/
/*           parent.$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*         }*/
/* */
/*         parent.$('.cart-content ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*         if (window.location.href.indexOf('quick_buy=true') !== -1) {*/
/*           parent.location.href = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if ($btn.data('quick-buy') !== undefined) {*/
/*           location = Journal['checkoutUrl'];*/
/*         }*/
/* */
/*         if (parent.window['_QuickCheckout']) {*/
/*           parent.window['_QuickCheckout'].save();*/
/*         }*/
/*       }*/
/*     },*/
/*     error: function (xhr, ajaxOptions, thrownError) {*/
/*       alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
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
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $(function () {*/
/*   $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function() {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function () {*/
/*   $('.review-links a').on('click', function () {*/
/*     var $review = $('#review');*/
/*     if ($review.length) {*/
/*       $('a[href="#' + $review.closest('.module-item').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.tab-pane').attr('id') + '"]').trigger('click');*/
/*       $('a[href="#' + $review.closest('.panel-collapse').attr('id') + '"]').trigger('click');*/
/* */
/*       $([document.documentElement, document.body]).animate({*/
/*         scrollTop: $review.offset().top - 100*/
/*       }, 200);*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* {% if not j3.document.isPopup() %}*/
/* {{ j3.loadController('journal3/seo/rich_snippets', breadcrumbs) }}*/
/* {% endif %}*/
/* {{ footer }}*/
/* */
