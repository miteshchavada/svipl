<?php

/* AcmeHomeBundle:Default:index.html.twig */
class __TwigTemplate_5de18d1ea9d1703ae77393cd480159a07427d987100f834d79290f10d357eb2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::front.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["front"]) ? $context["front"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fronts"]) {
            // line 4
            echo "        ";
            echo $this->getAttribute((isset($context["fronts"]) ? $context["fronts"] : null), "description");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fronts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
    <section id=\"recent-works\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Recent Works</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recentWorks"]) ? $context["recentWorks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recentWork"]) {
            // line 14
            echo "                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "image")))), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "title"), "html", null, true);
            echo "</a> </h3>
                                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "description"), "html", null, true);
            echo "</p>
                                <a class=\"preview\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["recentWork"]) ? $context["recentWork"] : null), "image")))), "html", null, true);
            echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentWork'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id=\"middle\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"skill\">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skills"]) {
            // line 39
            echo "                            <div class=\"progress-wrap\">
                                <h3>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : null), "title"), "html", null, true);
            echo "</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar color";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : null), "percentage"), "html", null, true);
            echo "%\">
                                        <span class=\"bar-width\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skills"]) ? $context["skills"] : null), "percentage"), "html", null, true);
            echo "%</span>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skills'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
                    </div>

                </div><!--/.col-sm-6-->

                <div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Why People like us?</h2>
                        <div class=\"panel-group\" id=\"accordion1\">
                            
                            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peoples"]) ? $context["peoples"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["people"]) {
            // line 58
            echo "                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading active\">
                                        <h3 class=\"panel-title\">
                                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapse_";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "id"), "html", null, true);
            echo "\">
                                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "title"), "html", null, true);
            echo "
                                                <i class=\"fa fa-angle-right pull-right\"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    ";
            // line 67
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                echo "            
                                        <div id=\"collapse_";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "id"), "html", null, true);
                echo "\" class=\"panel-collapse collapse in\">
                                    ";
            } else {
                // line 69
                echo "     
                                        <div id=\"collapse_";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "id"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
                                    ";
            }
            // line 71
            echo "    
                                        <div class=\"panel-body\">
                                            <div class=\"media accordion-inner\">
                                                <div class=\"pull-left\">
                                                    <img class=\"img-responsive\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/peoples/", 1 => $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "image")))), "html", null, true);
            echo "\">
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "title"), "html", null, true);
            echo "</h4>
                                                    <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["people"]) ? $context["people"] : null), "description"), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                    <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["works"]) ? $context["works"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 103
            echo "                                    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                // line 104
                echo "                                    <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" data-toggle=\"tab\" class=\"analistic-01\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "title"), "html", null, true);
                echo "</a></li>
                                    ";
            } else {
                // line 106
                echo "                                    <li class=\"\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\" data-toggle=\"tab\" class=\"analistic-01\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "title"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 108
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                    ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["works"]) ? $context["works"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 115
            echo "                                    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                echo "    
                                    <div class=\"tab-pane fade active in\" id=\"tab";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 117
                echo "    
                                    <div class=\"tab-pane fade\" id=\"tab";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                    ";
            }
            // line 119
            echo "    
                                        <div class=\"media\">
                                            <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/works/", 1 => $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "image")))), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                <h2>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "title"), "html", null, true);
            echo "</h2>
                                                <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "description"), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 141
            echo "                            <div class=\"media testimonial-inner\">
                                <div class=\"pull-left\">
                                    <img class=\"img-responsive img-circle\" src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/testimonials/", 1 => $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "image")))), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"media-body\">
                                    <p>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "description"), "html", null, true);
            echo "</p>
                                    <span><strong>-";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "name"), "html", null, true);
            echo " /</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "post"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "    
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
    ";
        // line 157
        echo (isset($context["contents"]) ? $context["contents"] : null);
        echo "
    <section id=\"conatcat-info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-phone\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 71,  207 => 69,  202 => 68,  198 => 67,  190 => 62,  186 => 61,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 70,  145 => 54,  52 => 13,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 38,  152 => 47,  120 => 41,  97 => 37,  126 => 43,  83 => 28,  77 => 17,  65 => 17,  58 => 14,  418 => 108,  358 => 118,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 92,  185 => 90,  181 => 58,  161 => 84,  127 => 42,  118 => 82,  100 => 29,  165 => 85,  114 => 42,  110 => 41,  84 => 23,  23 => 3,  34 => 5,  129 => 43,  113 => 37,  74 => 18,  70 => 37,  53 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 46,  111 => 37,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  131 => 52,  119 => 39,  108 => 35,  102 => 38,  71 => 17,  67 => 16,  63 => 15,  59 => 17,  47 => 12,  87 => 25,  55 => 25,  38 => 4,  29 => 2,  26 => 2,  94 => 29,  89 => 25,  85 => 22,  79 => 22,  75 => 18,  72 => 20,  68 => 19,  56 => 16,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 53,  138 => 72,  136 => 47,  123 => 43,  121 => 20,  117 => 37,  115 => 43,  105 => 39,  101 => 31,  91 => 34,  69 => 18,  66 => 16,  62 => 16,  49 => 13,  35 => 7,  31 => 3,  43 => 8,  41 => 9,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 36,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  40 => 16,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 67,  164 => 57,  162 => 59,  154 => 59,  149 => 54,  147 => 55,  144 => 55,  141 => 49,  133 => 43,  130 => 47,  125 => 43,  122 => 40,  116 => 41,  112 => 35,  109 => 40,  106 => 35,  103 => 17,  99 => 31,  95 => 35,  92 => 50,  86 => 34,  82 => 23,  80 => 21,  73 => 19,  64 => 19,  60 => 14,  57 => 15,  54 => 13,  51 => 21,  48 => 12,  45 => 6,  42 => 8,  39 => 4,  36 => 4,  33 => 3,  30 => 5,);
    }
}
