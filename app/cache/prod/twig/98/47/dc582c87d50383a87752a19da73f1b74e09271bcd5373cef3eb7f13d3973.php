<?php

/* AcmeInfoBundle:Newslist:edit.html.twig */
class __TwigTemplate_9847dc582c87d50383a87752a19da73f1b74e09271bcd5373cef3eb7f13d3973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">News Edit Form</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_news_edit", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" method=\"post\" id=\"form\" enctype=\"multipart/form-data\" name=\"form\">
                    ";
        // line 14
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">    
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'errors');
            echo "
                        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'errors');
            echo "
                        ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 21
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Title: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-2\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-1\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/news/", 1 => (isset($context["id"]) ? $context["id"] : null), 2 => "/", 3 => (isset($context["image"]) ? $context["image"] : null)))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                        </div>
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <div class=\"col-sm-12\">
                            <input type=\"submit\" formnovalidate value=\"Save\" name=\"edit\" class=\"btn btn-primary\" />
                            <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 48
        echo $this->env->getExtension('routing')->getPath("acme_info_newslist");
        echo "'\"/>
                        </div>
                    </div>
                </form>
            </center>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Newslist:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 143,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 45,  90 => 32,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 22,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 12,  124 => 46,  137 => 51,  96 => 36,  81 => 24,  104 => 37,  152 => 47,  120 => 41,  97 => 30,  126 => 48,  83 => 24,  77 => 22,  65 => 16,  58 => 15,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 44,  118 => 99,  100 => 34,  165 => 85,  114 => 40,  110 => 38,  84 => 24,  23 => 2,  34 => 10,  129 => 42,  113 => 40,  74 => 20,  70 => 30,  53 => 16,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 43,  128 => 74,  111 => 38,  107 => 37,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  131 => 44,  119 => 40,  108 => 39,  102 => 35,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  47 => 12,  87 => 31,  55 => 9,  38 => 4,  29 => 2,  26 => 2,  94 => 33,  89 => 33,  85 => 33,  79 => 22,  75 => 21,  72 => 20,  68 => 32,  56 => 15,  50 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 51,  142 => 79,  138 => 57,  136 => 40,  123 => 43,  121 => 43,  117 => 42,  115 => 40,  105 => 36,  101 => 61,  91 => 28,  69 => 18,  66 => 19,  62 => 15,  49 => 43,  35 => 50,  31 => 3,  43 => 16,  41 => 4,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 32,  93 => 30,  88 => 28,  78 => 22,  46 => 16,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 45,  125 => 42,  122 => 35,  116 => 41,  112 => 40,  109 => 40,  106 => 35,  103 => 34,  99 => 34,  95 => 30,  92 => 35,  86 => 26,  82 => 23,  80 => 21,  73 => 21,  64 => 16,  60 => 15,  57 => 14,  54 => 14,  51 => 12,  48 => 11,  45 => 17,  42 => 4,  39 => 4,  36 => 15,  33 => 3,  30 => 9,);
    }
}
