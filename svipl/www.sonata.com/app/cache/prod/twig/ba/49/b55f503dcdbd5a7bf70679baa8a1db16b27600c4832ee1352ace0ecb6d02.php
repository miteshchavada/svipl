<?php

/* ::common.html.twig */
class __TwigTemplate_ba49b55f503dcdbd5a7bf70679baa8a1db16b27600c4832ee1352ace0ecb6d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </head>
    <body id=\"page2\">
        <div class=\"body1\">
            <div class=\"body2\">
                <div class=\"body5\">
                    <div class=\"main zerogrid\">
                        <header>
                            <div class=\"wrapper rơw\">
                            <h1><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("acme_home");
        echo "\" id=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/logo.png"), "html", null, true);
        echo "\" /></a></h1>
                            <nav>
\t\t\t\t<ul id=\"menu\">
                                    ";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method") == "acme_home")) {
            // line 47
            echo "                                        <li id=\"nav1\" class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("acme_home");
            echo "\">Home<span>Welcome!</span></a></li>
                                    ";
        } else {
            // line 49
            echo "                                        <li id=\"nav1\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("acme_home");
            echo "\">Home<span>Welcome!</span></a></li>
                                    ";
        }
        // line 51
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method") == "news")) {
            // line 52
            echo "                                        <li id=\"nav2\" class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("news");
            echo "\">News<span>Fresh</span></a></li>
                                    ";
        } else {
            // line 54
            echo "                                        <li id=\"nav2\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("news");
            echo "\">News<span>Fresh</span></a></li>
                                    ";
        }
        // line 56
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method") == "services")) {
            // line 57
            echo "                                        <li id=\"nav3\" class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("services");
            echo "\">Services<span>for you</span></a></li>
                                    ";
        } else {
            // line 59
            echo "                                        <li id=\"nav3\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("services");
            echo "\">Services<span>for you</span></a></li>
                                    ";
        }
        // line 61
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method") == "products")) {
            // line 62
            echo "                                        <li id=\"nav4\" class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("products");
            echo "\">Products<span>The best</span></a></li>
                                    ";
        } else {
            // line 64
            echo "                                        <li id=\"nav4\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("products");
            echo "\">Products<span>The best</span></a></li>
                                    ";
        }
        // line 66
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_route"), "method") == "contact")) {
            // line 67
            echo "                                        <li id=\"nav5\" class=\"active\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("contact");
            echo "\">Contacts<span>Our Address</span></a></li>
                                    ";
        } else {
            // line 69
            echo "                                        <li id=\"nav5\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("contact");
            echo "\">Contacts<span>Our Address</span></a></li>
                                    ";
        }
        // line 70
        echo "    
                                </ul>
                            </nav>
                            </div>
\t\t\t</header>
                    </div>
                </div>
            </div>
\t</div>
        ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "             \t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    \t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    \t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    \t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/zerogrid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "\t    \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/jquery-1.6.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/cufon-yui.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/cufon-replace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/Swis721_Cn_BT_400.font.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/Swis721_Cn_BT_700.font.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/tabs.js"), "html", null, true);
        echo "\"></script> 
                <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script> 
\t\t  <!--[if lt IE 9]>
\t\t  \t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/js/html5.js"), "html", null, true);
        echo "\"></script>
\t\t\t<style type=\"text/css\">
\t\t\t\t.bg{ behavior: url(js/PIE.htc); }
\t\t\t</style>
\t\t  <![endif]-->
\t\t\t<!--[if lt IE 7]>
\t\t\t\t<div style=' clear: both; text-align:center; position: relative;'>
\t\t\t\t\t<a href=\"http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode\"><img src=\"http://www.theie6countdown.com/images/upgrade.jpg\" border=\"0\"  alt=\"\" /></a>
\t\t\t\t</div>
\t\t\t<![endif]-->
\t";
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::common.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 20,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 24,  207 => 69,  202 => 20,  198 => 19,  190 => 17,  186 => 61,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 13,  124 => 41,  137 => 49,  96 => 29,  81 => 24,  104 => 62,  152 => 47,  120 => 41,  97 => 37,  126 => 54,  83 => 28,  77 => 17,  65 => 49,  58 => 14,  418 => 108,  358 => 118,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 16,  181 => 58,  161 => 84,  127 => 42,  118 => 82,  100 => 29,  165 => 85,  114 => 42,  110 => 64,  84 => 23,  23 => 2,  34 => 8,  129 => 43,  113 => 37,  74 => 52,  70 => 14,  53 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 46,  111 => 37,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  131 => 70,  119 => 67,  108 => 35,  102 => 38,  71 => 51,  67 => 16,  63 => 15,  59 => 47,  47 => 12,  87 => 25,  55 => 9,  38 => 8,  29 => 6,  26 => 2,  94 => 29,  89 => 57,  85 => 22,  79 => 22,  75 => 18,  72 => 20,  68 => 19,  56 => 16,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 47,  123 => 43,  121 => 20,  117 => 37,  115 => 43,  105 => 39,  101 => 61,  91 => 34,  69 => 18,  66 => 13,  62 => 16,  49 => 43,  35 => 7,  31 => 3,  43 => 8,  41 => 9,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 36,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  40 => 16,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 73,  189 => 91,  187 => 84,  182 => 15,  176 => 13,  173 => 87,  168 => 11,  164 => 10,  162 => 59,  154 => 59,  149 => 54,  147 => 55,  144 => 80,  141 => 49,  133 => 43,  130 => 55,  125 => 69,  122 => 40,  116 => 66,  112 => 35,  109 => 40,  106 => 35,  103 => 17,  99 => 31,  95 => 59,  92 => 50,  86 => 56,  82 => 23,  80 => 54,  73 => 19,  64 => 19,  60 => 12,  57 => 46,  54 => 13,  51 => 21,  48 => 12,  45 => 6,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
