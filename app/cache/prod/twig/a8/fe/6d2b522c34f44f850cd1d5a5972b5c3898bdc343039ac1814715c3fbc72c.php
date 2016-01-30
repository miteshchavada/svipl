<?php

/* AcmeHomeBundle:Default:pricing.html.twig */
class __TwigTemplate_a8fe6d2b522c34f44f850cd1d5a5972b5c3898bdc343039ac1814715c3fbc72c extends Twig_Template
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
        echo "    <section class=\"pricing-page\">
        <div class=\"container\">
            <div class=\"center\">  
                <h2>Pricing Table</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>  
            <div class=\"pricing-area text-center\">
                <div class=\"row\">
                    <div class=\"col-sm-4 plan price-one wow fadeInDown\">
                        <ul>
                            <li class=\"heading-one\">
                                <h1>Start Up</h1>
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
                                <h1>Standerd</h1>
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
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/ribon_one.png"), "html", null, true);
        echo "\">
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Premium</h1>
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

                    <div class=\"col-sm-6 col-md-3 plan price-four wow fadeInDown\">
                        <ul>
                            <li class=\"heading-four\">
                                <h1>Basic</h1>
                                <span>\$3/Month</span>
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

                    <div class=\"col-sm-6 col-md-3 plan price-five wow fadeInDown\">
                        <ul>
                            <li class=\"heading-five\">
                                <h1>Standerd</h1>
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

                    <div class=\"col-sm-6 col-md-3 plan price-six wow fadeInDown\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/ribon_two.png"), "html", null, true);
        echo "\">
                        <ul>
                            <li class=\"heading-six\">
                                <h1>Premium</h1>
                                <span>\$12/Month</span>
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

                    <div class=\"col-sm-6 col-md-3 plan price-seven wow fadeInDown\">
                        <ul>
                            <li class=\"heading-seven\">
                                <h1>Developer</h1>
                                <span>\$19/Month</span>
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
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 143,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 46,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 22,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 57,  152 => 47,  120 => 41,  97 => 30,  126 => 54,  83 => 28,  77 => 25,  65 => 21,  58 => 18,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 56,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 93,  113 => 37,  74 => 24,  70 => 14,  53 => 16,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  111 => 37,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  131 => 98,  119 => 39,  108 => 35,  102 => 38,  71 => 35,  67 => 22,  63 => 15,  59 => 47,  47 => 12,  87 => 25,  55 => 9,  38 => 8,  29 => 6,  26 => 2,  94 => 29,  89 => 57,  85 => 28,  79 => 40,  75 => 21,  72 => 23,  68 => 19,  56 => 17,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 40,  123 => 43,  121 => 20,  117 => 66,  115 => 61,  105 => 33,  101 => 61,  91 => 29,  69 => 19,  66 => 13,  62 => 20,  49 => 43,  35 => 7,  31 => 3,  43 => 13,  41 => 9,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 29,  88 => 26,  78 => 30,  46 => 16,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 53,  92 => 50,  86 => 56,  82 => 23,  80 => 26,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 15,  45 => 14,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
