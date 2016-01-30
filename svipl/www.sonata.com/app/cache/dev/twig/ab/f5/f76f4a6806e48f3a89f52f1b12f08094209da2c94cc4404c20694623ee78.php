<?php

/* AcmeInfoBundle:Default:testiedit.html.twig */
class __TwigTemplate_abf5f76f4a6806e48f3a89f52f1b12f08094209da2c94cc4404c20694623ee78 extends Twig_Template
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
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Testimonial Edit Form</h1>
            </div>
        </div>
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_testiedit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" id=\"form\" enctype=\"multipart/form-data\" name=\"form\">
                    ";
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">    
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
            echo "
                        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post"), 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 19
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Name: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Post: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Post")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-2\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-1\">
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/testimonials/", 1 => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 2 => "/", 3 => (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Save\" name=\"insert\" class=\"btn btn-primary\" />
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 51
        echo $this->env->getExtension('routing')->getPath("acme_info_testimonials");
        echo "'\"/>
                    </div>    
                </form>
            </center>\t\t\t
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:testiedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 143,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 20,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  124 => 44,  137 => 51,  81 => 22,  104 => 57,  152 => 47,  97 => 30,  126 => 54,  77 => 25,  65 => 21,  58 => 18,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 32,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 10,  129 => 46,  113 => 37,  70 => 17,  53 => 16,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  119 => 40,  102 => 38,  71 => 35,  67 => 16,  63 => 15,  59 => 14,  87 => 25,  38 => 8,  26 => 2,  94 => 29,  89 => 57,  85 => 28,  75 => 21,  68 => 19,  56 => 13,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 40,  121 => 20,  117 => 40,  105 => 34,  91 => 29,  62 => 15,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 26,  78 => 30,  46 => 16,  44 => 12,  27 => 4,  79 => 40,  72 => 23,  69 => 19,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 54,  139 => 45,  131 => 98,  123 => 43,  120 => 41,  115 => 61,  111 => 37,  108 => 35,  101 => 61,  98 => 53,  96 => 29,  83 => 22,  74 => 18,  66 => 16,  55 => 9,  52 => 22,  50 => 11,  43 => 16,  41 => 4,  35 => 3,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 69,  122 => 35,  116 => 66,  112 => 38,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 28,  92 => 50,  86 => 56,  82 => 23,  80 => 21,  73 => 19,  64 => 28,  60 => 27,  57 => 13,  54 => 12,  51 => 12,  48 => 15,  45 => 17,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 9,);
    }
}
