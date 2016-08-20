<?php

/* AcmeFooterBundle:Default:followusedit.html.twig */
class __TwigTemplate_1c1958f51024537e5985c41552796e5e18e2141eacb7edbb31aeb66d0c8ff74e extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Followus Add Form</h1>
        </div>
    </div>
    <div class=\"row\">
                <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_followedit", array("id" => $this->getAttribute((isset($context["follow"]) ? $context["follow"] : $this->getContext($context, "follow")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-group\">
                    ";
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">    
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
            echo "
                        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 19
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Title: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Logo: "));
        echo "
                        <div class=\"col-sm-1\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/follow/", 1 => $this->getAttribute((isset($context["follow"]) ? $context["follow"] : $this->getContext($context, "follow")), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["follow"]) ? $context["follow"] : $this->getContext($context, "follow")), "logo")))), "html", null, true);
        echo "\"/>
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Logo: "));
        echo "
                        <div class=\"col-sm-2\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Link: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Link")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Edit\" name=\"edit\" class=\"btn btn-primary\"/>
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href='";
        // line 45
        echo $this->env->getExtension('routing')->getPath("acme_footer_followus");
        echo "'\"/>
                    </div>
                </form>
                </center>        
        </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeFooterBundle:Default:followusedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  148 => 50,  160 => 58,  317 => 164,  313 => 163,  301 => 160,  297 => 159,  195 => 137,  178 => 55,  174 => 105,  155 => 52,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  194 => 18,  172 => 12,  150 => 50,  134 => 45,  90 => 32,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 141,  202 => 20,  190 => 17,  186 => 57,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 45,  137 => 46,  81 => 22,  104 => 34,  152 => 47,  97 => 30,  126 => 48,  77 => 22,  65 => 17,  58 => 14,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 143,  205 => 95,  198 => 62,  185 => 113,  181 => 58,  161 => 123,  127 => 42,  118 => 99,  100 => 32,  165 => 85,  114 => 38,  110 => 37,  84 => 24,  23 => 2,  34 => 10,  129 => 43,  113 => 40,  70 => 30,  53 => 12,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 125,  140 => 47,  132 => 44,  128 => 74,  107 => 37,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 167,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 140,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 40,  102 => 35,  71 => 19,  67 => 16,  63 => 21,  59 => 14,  87 => 26,  38 => 4,  26 => 2,  94 => 33,  89 => 32,  85 => 26,  75 => 20,  68 => 20,  56 => 16,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 124,  163 => 62,  158 => 53,  156 => 121,  151 => 51,  142 => 47,  138 => 57,  136 => 45,  121 => 43,  117 => 42,  105 => 34,  91 => 28,  62 => 15,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 4,  21 => 2,  19 => 1,  93 => 31,  88 => 27,  78 => 22,  46 => 10,  44 => 12,  27 => 5,  79 => 22,  72 => 19,  69 => 18,  47 => 11,  40 => 9,  37 => 8,  22 => 2,  246 => 294,  157 => 56,  145 => 49,  139 => 45,  131 => 44,  123 => 41,  120 => 40,  115 => 40,  111 => 38,  108 => 39,  101 => 61,  98 => 32,  96 => 32,  83 => 25,  74 => 20,  66 => 16,  55 => 13,  52 => 15,  50 => 13,  43 => 16,  41 => 4,  35 => 3,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 135,  187 => 134,  182 => 56,  176 => 61,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 49,  144 => 80,  141 => 115,  133 => 43,  130 => 45,  125 => 42,  122 => 35,  116 => 40,  112 => 39,  109 => 40,  106 => 36,  103 => 39,  99 => 32,  95 => 30,  92 => 28,  86 => 26,  82 => 33,  80 => 22,  73 => 22,  64 => 18,  60 => 17,  57 => 14,  54 => 15,  51 => 12,  48 => 11,  45 => 17,  42 => 9,  39 => 4,  36 => 15,  33 => 3,  30 => 9,);
    }
}
