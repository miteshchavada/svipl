<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_43c5def1e07d55e5886887ef0b2c2d70801acc000076e884d16d5945b5006355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 329,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  251 => 182,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  351 => 328,  348 => 140,  335 => 134,  325 => 129,  320 => 127,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  256 => 96,  200 => 72,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  359 => 123,  356 => 330,  347 => 119,  338 => 135,  333 => 115,  324 => 112,  308 => 109,  262 => 188,  249 => 181,  237 => 91,  234 => 90,  389 => 160,  386 => 159,  371 => 127,  367 => 155,  343 => 146,  340 => 145,  331 => 140,  326 => 138,  302 => 125,  293 => 198,  290 => 119,  281 => 98,  274 => 96,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 94,  232 => 89,  222 => 83,  216 => 79,  175 => 58,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  170 => 56,  191 => 69,  153 => 56,  148 => 50,  317 => 164,  313 => 110,  297 => 200,  178 => 64,  244 => 214,  167 => 71,  174 => 74,  155 => 55,  192 => 77,  188 => 90,  184 => 63,  180 => 70,  206 => 21,  172 => 62,  150 => 55,  134 => 47,  90 => 37,  448 => 157,  439 => 195,  417 => 143,  397 => 130,  378 => 157,  363 => 153,  350 => 120,  345 => 147,  328 => 113,  321 => 135,  307 => 287,  299 => 106,  291 => 104,  288 => 118,  271 => 190,  231 => 79,  215 => 188,  207 => 75,  202 => 94,  198 => 62,  190 => 17,  186 => 72,  76 => 27,  380 => 160,  372 => 288,  361 => 146,  353 => 121,  342 => 137,  334 => 141,  323 => 128,  315 => 125,  304 => 241,  296 => 121,  277 => 223,  266 => 215,  210 => 77,  124 => 45,  137 => 46,  81 => 30,  104 => 37,  152 => 54,  97 => 41,  126 => 48,  77 => 25,  65 => 11,  58 => 13,  418 => 108,  358 => 151,  329 => 131,  301 => 160,  284 => 126,  280 => 194,  276 => 193,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 87,  226 => 84,  213 => 78,  205 => 95,  197 => 71,  194 => 70,  185 => 66,  181 => 65,  161 => 58,  127 => 35,  118 => 49,  100 => 36,  165 => 60,  114 => 36,  110 => 22,  84 => 27,  23 => 2,  34 => 4,  129 => 43,  113 => 40,  70 => 19,  53 => 11,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 340,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 288,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 122,  264 => 84,  258 => 187,  252 => 85,  247 => 202,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 69,  169 => 86,  140 => 47,  132 => 44,  128 => 42,  107 => 37,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 79,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 98,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 53,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 17,  87 => 32,  38 => 6,  26 => 3,  94 => 21,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 51,  142 => 79,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 34,  91 => 29,  62 => 24,  49 => 11,  31 => 3,  28 => 3,  24 => 3,  25 => 35,  21 => 2,  19 => 1,  93 => 38,  88 => 28,  78 => 24,  46 => 14,  44 => 8,  27 => 3,  79 => 29,  72 => 21,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 93,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 42,  120 => 38,  115 => 39,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 27,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 118,  189 => 66,  187 => 84,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 59,  149 => 54,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 41,  122 => 35,  116 => 39,  112 => 39,  109 => 27,  106 => 51,  103 => 35,  99 => 31,  95 => 34,  92 => 28,  86 => 34,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 20,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}