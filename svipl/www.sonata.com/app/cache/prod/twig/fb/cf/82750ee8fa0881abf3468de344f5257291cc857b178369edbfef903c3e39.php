<?php

/* AcmeHomeBundle:Default:shortcodes.html.twig */
class __TwigTemplate_fbcf82750ee8fa0881abf3468de344f5257291cc857b178369edbfef903c3e39 extends Twig_Template
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
        echo "    <section id=\"content\" class=\"shortcode-item\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7\">
                    <h2>Tab</h2> 
                    <div class=\"tab-wrap\">
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Responsive Web Design</a></li>
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Premium Plugin Included</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Predefine Layout</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                                    <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane\" id=\"tab1\">
                                        <div class=\"media\">
                                            <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/tab1.png"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                <h4>Adipisicing elit</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"tab-pane active in\" id=\"tab2\">
                                        <div class=\"media\">
                                            <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/tab1.png"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                <h4>Adipisicing elit</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"tab-pane\" id=\"tab3\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                    </div>

                                    <div class=\"tab-pane\" id=\"tab4\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class=\"tab-pane\" id=\"tab5\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                    </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class=\"col-xs-12 col-sm-5\">
                    <h2>Accordion</h2>
                    <div class=\"accordion\">
                        <div class=\"panel-group\" id=\"accordion1\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading active\">
                                    <h3 class=\"panel-title\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\">
                                            Lorem ipsum dolor sit amet
                                            <i class=\"fa fa-angle-right pull-right\"></i>
                                        </a>
                                    </h3>
                                </div>

                                <div id=\"collapseOne1\" class=\"panel-collapse collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"media accordion-inner\">
                                            <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/accordion1.png"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                <h4>Adipisicing elit</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\">
                                            Lorem ipsum dolor sit amet
                                            <i class=\"fa fa-angle-right pull-right\"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id=\"collapseTwo1\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">
                                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\">
                                            Lorem ipsum dolor sit amet
                                            <i class=\"fa fa-angle-right pull-right\"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id=\"collapseThree1\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-body\">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                    </div>
                                </div>
                            </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->


    <section class=\"pricing-area shortcode-item\">
        <div class=\"container\">
            <h2>Pricing Table</h2>
            <div class=\"row text-center\">
                <div class=\"col-sm-4 plan price-one wow fadeInDown\">
                    <ul>
                        <li class=\"heading-one\">
                            <h3>Start Up</h3>
                            <span>\$6/Month</span>
                        </li>
                        <li>5 Gb Disk Space</li>
                        <li>1GB Dadicated Ram</li>
                        <li>10 Addon Domain</li>
                        <li>10 Email Account</li>
                        <li>24/7 Support</li>
                        <li class=\"plan-action\">
                            <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                    <ul>
                        <li class=\"heading-two\">
                            <h3>Standerd</h3>
                            <span>\$12/Month</span>
                        </li>
                        <li>10 Gb Disk Space</li>
                        <li>2GB Dadicated Ram</li>
                        <li>20 Addon Domain</li>
                        <li>20 Email Account</li>
                        <li>24/7 Support</li>
                        <li class=\"plan-action\">
                            <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                    <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/ribon_one.png"), "html", null, true);
        echo "\">
                    <ul>
                        <li class=\"heading-three\">
                            <h3>Premium</h3>
                            <span>\$24/Month</span>
                        </li>
                        <li>50 Gb Disk Space</li>
                        <li>8GB Dadicated Ram</li>
                        <li>Unlimited Addon Domain</li>
                        <li>Unlimited Email Account</li>
                        <li>24/7 Support</li>
                        <li class=\"plan-action\">
                            <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/pricing_area-->

    <section id=\"recent-works\" class=\"shortcode-item\">
        <div class=\"container\">
            <h2>Gallery</h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item1.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item1.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item2.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item2.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item3.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item3.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item4.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item4.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item5.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item5.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item6.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item6.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item7.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item7.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class=\"col-xs-12 col-sm-4 col-md-3\">
                    <div class=\"recent-work-wrap\">
                        <img class=\"img-responsive\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item8.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overlay\">
                            <div class=\"recent-work-inner\">
                                <h3><a href=\"#\">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class=\"preview\" href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item8.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section><!--/#portfolio-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:shortcodes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 171,  145 => 54,  52 => 13,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 38,  152 => 51,  120 => 41,  97 => 37,  126 => 43,  83 => 28,  77 => 17,  65 => 17,  58 => 14,  418 => 108,  358 => 191,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 92,  185 => 90,  181 => 89,  161 => 84,  127 => 67,  118 => 82,  100 => 29,  165 => 85,  114 => 42,  110 => 41,  84 => 23,  23 => 3,  34 => 5,  129 => 43,  113 => 37,  74 => 18,  70 => 37,  53 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 115,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 46,  111 => 37,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  131 => 52,  119 => 57,  108 => 35,  102 => 32,  71 => 17,  67 => 16,  63 => 15,  59 => 17,  47 => 11,  87 => 25,  55 => 25,  38 => 4,  29 => 2,  26 => 2,  94 => 29,  89 => 25,  85 => 22,  79 => 22,  75 => 18,  72 => 30,  68 => 14,  56 => 16,  50 => 8,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 53,  138 => 72,  136 => 47,  123 => 43,  121 => 20,  117 => 37,  115 => 43,  105 => 39,  101 => 31,  91 => 34,  69 => 18,  66 => 16,  62 => 15,  49 => 13,  35 => 5,  31 => 3,  43 => 8,  41 => 5,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 36,  88 => 23,  78 => 30,  46 => 7,  44 => 12,  40 => 16,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 67,  164 => 59,  162 => 59,  154 => 59,  149 => 54,  147 => 55,  144 => 55,  141 => 49,  133 => 62,  130 => 47,  125 => 43,  122 => 65,  116 => 41,  112 => 35,  109 => 40,  106 => 35,  103 => 17,  99 => 31,  95 => 35,  92 => 50,  86 => 34,  82 => 23,  80 => 21,  73 => 19,  64 => 19,  60 => 14,  57 => 15,  54 => 14,  51 => 21,  48 => 12,  45 => 18,  42 => 8,  39 => 4,  36 => 4,  33 => 3,  30 => 1,);
    }
}
