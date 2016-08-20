<?php

/* AcmeHomeBundle:Default:aboutus.html.twig */
class __TwigTemplate_3c5d9fab944e6546c690359b5d0857670a8b8ecea24c8506edb6e58fd7bdc934 extends Twig_Template
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
        echo "    <section id=\"about-us\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>About Svipl</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <!-- about us slider -->
            <div id=\"about-slider\">
                <div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators visible-xs\">
                        <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/slider_one.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"> 
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/slider_one.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"> 
                        </div> 
                        <div class=\"item\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/slider_one.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"> 
                        </div> 
                    </div>

                    <a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\"></i> 
                    </a>

                    <a class=\" right carousel-control hidden-xs\"href=\"#carousel-slider\" data-slide=\"next\">
                        <i class=\"fa fa-angle-right\"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->


            <!-- Our Skill -->
            <div class=\"skill-wrap clearfix\">

                <div class=\"center wow fadeInDown\">
                    <h2>Our Skill</h2>
                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class=\"row\">
                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "skills"));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 53
            echo "                    <div class=\"col-sm-3\">
                        <div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"html-skill\">                                   
                                <p><em>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skill"), "percentage"), "html", null, true);
            echo "%</em></p>
                                <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "skill"), "title"), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    
                    ";
        // line 99
        echo "
            </div><!--/.our-skill-->


            <!-- our-team -->
            <div class=\"team\">
                <div class=\"center wow fadeInDown\">
                    <h2>Team of Svipl</h2>
                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "teams"));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 110
            echo "                   <div class=\"row clearfix\">
                    <div class=\"col-md-12 col-sm-6\">\t
                        <div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"media\">
                                <div class=\"pull-left\">
                                    <a href=\"#\"><img class=\"media-object\" src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/team/", 1 => $this->getAttribute($this->getContext($context, "team"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "team"), "image")))), "html", null, true);
            echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "name"), "html", null, true);
            echo "</h4>
                                    <h5>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "designation"), "html", null, true);
            echo "</h5>
                                    <ul class=\"tag clearfix\">
                                        ";
            // line 121
            $context["skill"] = "";
            // line 122
            echo "                                        ";
            $context["skills"] = twig_split_filter($this->getAttribute($this->getContext($context, "team"), "skills"), ",");
            // line 123
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "skills"));
            foreach ($context['_seq'] as $context["keys"] => $context["skill"]) {
                // line 124
                echo "                                            ";
                $context["dayMap"] = array(0 => "WEB", 1 => "UI", 2 => "UX", 3 => "PHOTOSHOP", 4 => "SYMFONY1.0");
                // line 125
                echo "\t\t\t\t\t    <li class=\"btn\"><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dayMap"), $this->getContext($context, "skill"), array(), "array"), "html", null, true);
                echo "</a></li>\t
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keys'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                    </ul>

                                    <ul class=\"social_icons\">
                                        ";
            // line 130
            if ($this->getAttribute($this->getContext($context, "team"), "facebook")) {
                // line 131
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "facebook"), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                        ";
            }
            // line 133
            echo "                                        ";
            if ($this->getAttribute($this->getContext($context, "team"), "twitter")) {
                // line 134
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "twitter"), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li> 
                                        ";
            }
            // line 136
            echo "                                        ";
            if ($this->getAttribute($this->getContext($context, "team"), "gmail")) {
                // line 137
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "gmail"), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                        ";
            }
            // line 139
            echo "                                    </ul>
                                </div>
\t\t\t\t<p>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "team"), "description"), "html", null, true);
            echo "</p>
                            </div><!--/.media -->
                            
                        </div>
                    </div><!--/.col-lg-4 -->
                   </div>
                   <div class=\"row team-bar\">
                    <div class=\"first-one-arrow hidden-xs\">
                        <hr>
                    </div>
                    <div class=\"first-arrow hidden-xs\">
                        <hr> <i class=\"fa fa-angle-up\"></i>
                    </div>
                    <div class=\"second-arrow hidden-xs\">
                        <hr> <i class=\"fa fa-angle-down\"></i>
                    </div>
                    <div class=\"third-arrow hidden-xs\">
                        <hr> <i class=\"fa fa-angle-up\"></i>
                    </div>
                    <div class=\"fourth-arrow hidden-xs\">
                        <hr> <i class=\"fa fa-angle-down\"></i>
                    </div>
                    </div> <!--skill_border-->                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "    
                ";
        // line 291
        echo "            </div><!--section-->
        </div><!--/.container-->
    </section><!--/about-us-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 291,  243 => 164,  213 => 141,  209 => 139,  203 => 137,  200 => 136,  194 => 134,  191 => 133,  185 => 131,  183 => 130,  178 => 127,  169 => 125,  166 => 124,  161 => 123,  158 => 122,  156 => 121,  151 => 119,  147 => 118,  141 => 115,  134 => 110,  130 => 109,  118 => 99,  115 => 61,  104 => 57,  100 => 56,  95 => 53,  91 => 52,  64 => 28,  58 => 25,  52 => 22,  31 => 3,  28 => 2,);
    }
}
