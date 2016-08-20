<?php

/* AcmeInfoBundle:Default:logoadd.html.twig */
class __TwigTemplate_6b47af07ccac27bba5f977d06a72532d67f1f8fb4edfd6fb6f2e3dd797d964d0 extends Twig_Template
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
            <h1 class=\"page-header\">Logo Add</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
    <center>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("acme_logoadd");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-group\" id=\"logo_add_form\" name=\"logo_add_form\">
        ";
        // line 13
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 14
            echo "        <div class=\"alert alert-danger\">    
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'errors');
            echo "
            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
            echo "
        </div>
        ";
        }
        // line 19
        echo "        <div class=\"form-group col-lg-12\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Logo: "));
        echo "
            <div class=\"col-sm-2\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logo"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-lg-6\">
            <input type=\"submit\" value=\"Save\" name=\"insert\" class=\"btn btn-primary\" />
            <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("acme_info_logo");
        echo "'\"/>
        </div>
    </form>
    </center>\t\t\t
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:logoadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  301 => 160,  297 => 159,  195 => 137,  178 => 55,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  194 => 18,  172 => 12,  150 => 6,  134 => 45,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 141,  202 => 20,  190 => 17,  186 => 57,  76 => 25,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 44,  137 => 51,  81 => 22,  104 => 37,  152 => 47,  97 => 30,  126 => 54,  77 => 22,  65 => 21,  58 => 18,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 143,  205 => 95,  198 => 62,  185 => 113,  181 => 58,  161 => 123,  127 => 42,  118 => 99,  100 => 36,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 10,  129 => 46,  113 => 40,  70 => 17,  53 => 16,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 125,  140 => 55,  132 => 47,  128 => 74,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 167,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 140,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  119 => 40,  102 => 38,  71 => 32,  67 => 16,  63 => 16,  59 => 15,  87 => 25,  38 => 4,  26 => 2,  94 => 29,  89 => 33,  85 => 27,  75 => 21,  68 => 20,  56 => 14,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 124,  163 => 62,  158 => 43,  156 => 121,  151 => 51,  142 => 79,  138 => 57,  136 => 40,  121 => 43,  117 => 40,  105 => 34,  91 => 34,  62 => 15,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 34,  78 => 30,  46 => 16,  44 => 12,  27 => 4,  79 => 40,  72 => 20,  69 => 19,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 294,  157 => 56,  145 => 54,  139 => 45,  131 => 44,  123 => 43,  120 => 41,  115 => 61,  111 => 39,  108 => 39,  101 => 61,  98 => 53,  96 => 35,  83 => 22,  74 => 18,  66 => 16,  55 => 9,  52 => 13,  50 => 11,  43 => 16,  41 => 4,  35 => 56,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 135,  187 => 134,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 118,  144 => 80,  141 => 115,  133 => 43,  130 => 109,  125 => 42,  122 => 35,  116 => 41,  112 => 38,  109 => 39,  106 => 35,  103 => 37,  99 => 36,  95 => 35,  92 => 34,  86 => 56,  82 => 23,  80 => 21,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 12,  45 => 17,  42 => 4,  39 => 3,  36 => 15,  33 => 3,  30 => 9,);
    }
}
