<?php

/* AcmeHomeBundle:Default:portfolio.html.twig */
class __TwigTemplate_85f8f91f4e3dd87df4bd0daca5067c3e790a6ee51643d29a2c935c8d2c6fc0d3 extends Twig_Template
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
        echo "    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
                <h2>Portfolio</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class=\"portfolio-filter text-center\">
                <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class=\"row\">
                <div class=\"portfolio-items\">
                    <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item1.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item2.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item3.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item4.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item4.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item5.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item5.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item6.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item6.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item7.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item7.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item8.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item8.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 105,  155 => 92,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 24,  207 => 69,  202 => 20,  198 => 19,  190 => 17,  186 => 61,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 22,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 62,  152 => 47,  120 => 41,  97 => 37,  126 => 54,  83 => 28,  77 => 17,  65 => 49,  58 => 14,  418 => 108,  358 => 118,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 82,  100 => 31,  165 => 85,  114 => 42,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 93,  113 => 37,  74 => 52,  70 => 14,  53 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  111 => 37,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  131 => 70,  119 => 86,  108 => 35,  102 => 38,  71 => 35,  67 => 18,  63 => 15,  59 => 47,  47 => 12,  87 => 25,  55 => 9,  38 => 8,  29 => 6,  26 => 2,  94 => 29,  89 => 57,  85 => 22,  79 => 40,  75 => 21,  72 => 20,  68 => 19,  56 => 16,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 67,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 79,  123 => 43,  121 => 20,  117 => 66,  115 => 43,  105 => 34,  101 => 61,  91 => 28,  69 => 19,  66 => 13,  62 => 17,  49 => 43,  35 => 7,  31 => 3,  43 => 10,  41 => 9,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 29,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 15,  176 => 13,  173 => 87,  168 => 11,  164 => 10,  162 => 59,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 59,  92 => 50,  86 => 56,  82 => 23,  80 => 23,  73 => 19,  64 => 19,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 11,  45 => 6,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
