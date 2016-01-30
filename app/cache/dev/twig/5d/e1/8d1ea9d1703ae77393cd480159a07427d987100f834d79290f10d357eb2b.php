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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "front"));
        foreach ($context['_seq'] as $context["_key"] => $context["fronts"]) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this->getContext($context, "fronts"), "description");
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "recentWorks"));
        foreach ($context['_seq'] as $context["_key"] => $context["recentWork"]) {
            // line 14
            echo "                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getAttribute($this->getContext($context, "recentWork"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "recentWork"), "image")))), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recentWork"), "title"), "html", null, true);
            echo "</a> </h3>
                                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recentWork"), "description"), "html", null, true);
            echo "</p>
                                <a class=\"preview\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getAttribute($this->getContext($context, "recentWork"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "recentWork"), "image")))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "info"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skills"), "title"), "html", null, true);
            echo "</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar color";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skills"), "percentage"), "html", null, true);
            echo "%\">
                                        <span class=\"bar-width\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skills"), "percentage"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "peoples"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "id"), "html", null, true);
            echo "\">
                                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "title"), "html", null, true);
            echo "
                                                <i class=\"fa fa-angle-right pull-right\"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    ";
            // line 67
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                echo "            
                                        <div id=\"collapse_";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "id"), "html", null, true);
                echo "\" class=\"panel-collapse collapse in\">
                                    ";
            } else {
                // line 69
                echo "     
                                        <div id=\"collapse_";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "id"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/peoples/", 1 => $this->getAttribute($this->getContext($context, "people"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "people"), "image")))), "html", null, true);
            echo "\">
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "title"), "html", null, true);
            echo "</h4>
                                                    <p>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "description"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "works"));
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
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                // line 104
                echo "                                    <li class=\"active\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\" data-toggle=\"tab\" class=\"analistic-01\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "work"), "title"), "html", null, true);
                echo "</a></li>
                                    ";
            } else {
                // line 106
                echo "                                    <li class=\"\"><a href=\"#tab";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\" data-toggle=\"tab\" class=\"analistic-01\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "work"), "title"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "works"));
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
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                echo "    
                                    <div class=\"tab-pane fade active in\" id=\"tab";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                                    ";
            } else {
                // line 117
                echo "    
                                    <div class=\"tab-pane fade\" id=\"tab";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                                    ";
            }
            // line 119
            echo "    
                                        <div class=\"media\">
                                            <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/works/", 1 => $this->getAttribute($this->getContext($context, "work"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "work"), "image")))), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                <h2>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "work"), "title"), "html", null, true);
            echo "</h2>
                                                <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "work"), "description"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "testimonials"));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 141
            echo "                            <div class=\"media testimonial-inner\">
                                <div class=\"pull-left\">
                                    <img class=\"img-responsive img-circle\" src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/testimonials/", 1 => $this->getAttribute($this->getContext($context, "testimonial"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "testimonial"), "image")))), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"media-body\">
                                    <p>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "testimonial"), "description"), "html", null, true);
            echo "</p>
                                    <span><strong>-";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "testimonial"), "name"), "html", null, true);
            echo " /</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "testimonial"), "post"), "html", null, true);
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
        echo $this->getContext($context, "contents");
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
        return array (  448 => 157,  439 => 150,  427 => 147,  423 => 146,  417 => 143,  413 => 141,  409 => 140,  397 => 130,  378 => 126,  374 => 125,  368 => 122,  363 => 119,  358 => 118,  355 => 117,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  252 => 85,  231 => 79,  227 => 78,  221 => 75,  215 => 71,  210 => 70,  207 => 69,  202 => 68,  198 => 67,  190 => 62,  186 => 61,  181 => 58,  164 => 57,  152 => 47,  133 => 43,  127 => 42,  122 => 40,  119 => 39,  102 => 38,  88 => 26,  76 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 14,  54 => 13,  45 => 6,  36 => 4,  31 => 3,  28 => 2,);
    }
}
