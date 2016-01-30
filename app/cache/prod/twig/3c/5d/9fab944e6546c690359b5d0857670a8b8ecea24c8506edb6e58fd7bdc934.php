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
                <h2>About Corlate</h2>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 53
            echo "                    <div class=\"col-sm-3\">
                        <div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"html-skill\">                                   
                                <p><em>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : null), "percentage"), "html", null, true);
            echo "%</em></p>
                                <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : null), "title"), "html", null, true);
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
                    <h2>Team of Corlate</h2>
                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class=\"row clearfix\">
                    <div class=\"col-md-4 col-sm-6\">\t
                        <div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"media\">
                                <div class=\"pull-left\">
                                    <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/man1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class=\"tag clearfix\">
                                        <li class=\"btn\"><a href=\"#\">Web</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ui</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ux</a></li>
                                        <li class=\"btn\"><a href=\"#\">Photoshop</a></li>
                                    </ul>

                                    <ul class=\"social_icons\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->


                    <div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
                        <div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
                            <div class=\"media\">
                                <div class=\"pull-left\">
                                    <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/man2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class=\"tag clearfix\">
                                        <li class=\"btn\"><a href=\"#\">Web</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ui</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ux</a></li>
                                        <li class=\"btn\"><a href=\"#\">Photoshop</a></li>
                                    </ul>
                                    <ul class=\"social_icons\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->\t\t\t\t\t
                </div> <!--/.row -->
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

                <div class=\"row clearfix\">   
                    <div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
                        <div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                            <div class=\"media\">
                                <div class=\"pull-left\">
                                    <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/man3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>

                                <div class=\"media-body\">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class=\"tag clearfix\">
                                        <li class=\"btn\"><a href=\"#\">Web</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ui</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ux</a></li>
                                        <li class=\"btn\"><a href=\"#\">Photoshop</a></li>
                                    </ul>
                                    <ul class=\"social_icons\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-md-offset-2\">
                        <div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                            <div class=\"media\">
                                <div class=\"pull-left\">
                                    <a href=\"#\"><img class=\"media-object\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/man4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class=\"tag clearfix\">
                                        <li class=\"btn\"><a href=\"#\">Web</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ui</a></li>
                                        <li class=\"btn\"><a href=\"#\">Ux</a></li>
                                        <li class=\"btn\"><a href=\"#\">Photoshop</a></li>
                                    </ul>
                                    <ul class=\"social_icons\">
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>\t<!--/.row-->
            </div><!--section-->
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
        return array (  244 => 214,  167 => 143,  174 => 105,  155 => 92,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 19,  190 => 17,  186 => 61,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 22,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 57,  152 => 47,  120 => 41,  97 => 37,  126 => 54,  83 => 28,  77 => 17,  65 => 49,  58 => 25,  418 => 108,  358 => 118,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 56,  165 => 85,  114 => 42,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 93,  113 => 37,  74 => 52,  70 => 14,  53 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  111 => 37,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  131 => 70,  119 => 86,  108 => 35,  102 => 38,  71 => 35,  67 => 18,  63 => 15,  59 => 47,  47 => 12,  87 => 25,  55 => 9,  38 => 8,  29 => 6,  26 => 2,  94 => 29,  89 => 57,  85 => 22,  79 => 40,  75 => 21,  72 => 20,  68 => 19,  56 => 16,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 67,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 115,  123 => 43,  121 => 20,  117 => 66,  115 => 61,  105 => 34,  101 => 61,  91 => 52,  69 => 19,  66 => 13,  62 => 17,  49 => 43,  35 => 7,  31 => 3,  43 => 10,  41 => 9,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 29,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 15,  176 => 13,  173 => 87,  168 => 11,  164 => 10,  162 => 59,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 53,  92 => 50,  86 => 56,  82 => 23,  80 => 23,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 11,  45 => 6,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
