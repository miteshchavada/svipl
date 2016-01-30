<?php

/* slider.html.twig */
class __TwigTemplate_63e31479fd21b01649c2cabcf34a3ab4d798b2981b8c9cbcab095d22048de7ae extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
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
            // line 10
            echo "                ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                // line 11
                echo "                    <div class=\"item active\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/slider_background_image/", 1 => $this->getAttribute($this->getContext($context, "image"), "backgroundimage")))), "html", null, true);
                echo "')\">
                ";
            } else {
                // line 13
                echo "                    <div class=\"item\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/slider_background_image/", 1 => $this->getAttribute($this->getContext($context, "image"), "backgroundimage")))), "html", null, true);
                echo "')\">
                ";
            }
            // line 14
            echo "    
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "title"), "html", null, true);
            echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
            echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($this->getContext($context, "image"), "image")))), "html", null, true);
            echo "\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            ";
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
        // line 34
        echo "    
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section><!--/#main-slider-->";
    }

    public function getTemplateName()
    {
        return "slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  82 => 27,  55 => 13,  49 => 11,  46 => 10,  29 => 9,  101 => 52,  89 => 46,  71 => 43,  19 => 1,  115 => 27,  111 => 26,  107 => 53,  103 => 24,  99 => 23,  95 => 49,  91 => 21,  86 => 20,  83 => 45,  77 => 44,  73 => 16,  69 => 15,  65 => 42,  61 => 14,  56 => 12,  53 => 11,  42 => 29,  39 => 19,  37 => 11,  33 => 10,  22 => 1,  50 => 13,  47 => 10,  41 => 9,  35 => 7,  30 => 5,  25 => 3,  20 => 1,  448 => 157,  439 => 150,  427 => 147,  423 => 146,  417 => 143,  413 => 141,  409 => 140,  397 => 130,  378 => 126,  374 => 125,  368 => 122,  363 => 119,  358 => 118,  355 => 117,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  252 => 85,  231 => 79,  227 => 78,  221 => 75,  215 => 71,  210 => 70,  207 => 69,  202 => 68,  198 => 67,  190 => 62,  186 => 61,  181 => 58,  164 => 57,  152 => 47,  133 => 43,  127 => 42,  122 => 40,  119 => 39,  102 => 38,  88 => 26,  76 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 38,  54 => 13,  45 => 11,  36 => 4,  31 => 3,  28 => 2,);
    }
}
