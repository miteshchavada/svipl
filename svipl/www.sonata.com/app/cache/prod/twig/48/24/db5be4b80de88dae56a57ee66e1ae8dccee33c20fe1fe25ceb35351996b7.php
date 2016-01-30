<?php

/* AcmeInfoBundle:Default:ourservice.html.twig */
class __TwigTemplate_4824db5be4b80de88dae56a57ee66e1ae8dccee33c20fe1fe25ceb35351996b7 extends Twig_Template
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
                <h1 class=\"page-header\">Features</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
        echo "\" method=\"POST\" class=\"form-group\">
                    <div style=\"width:70%\">
                        <input type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["front"]) ? $context["front"] : null), "id"), "html", null, true);
        echo "\" name=\"id\">
                        <textarea rows=\"15\" cols=\"60\" name=\"description\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["front"]) ? $context["front"] : null), "description"), "html", null, true);
        echo "</textarea>
                    </div>            
                    <div>
                        <input type=\"submit\" name=\"submit\" value=\"save\" class=\"btn bg-primary\">
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn bg-danger\" onclick=\"javascript:window.location.href = '";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        tinymce.init({
            selector: \"textarea\",
            theme: \"modern\",
            plugins: [
                \"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
                \"searchreplace wordcount visualblocks visualchars code fullscreen\",
                \"insertdatetime media nonbreaking save table contextmenu directionality\",
                \"emoticons template paste textcolor colorpicker textpattern\"
            ],
            toolbar1: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\",
            toolbar2: \"print preview media | forecolor backcolor emoticons\",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ],
            valid_elements : '*[*]'
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:ourservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  297 => 159,  178 => 55,  244 => 214,  167 => 143,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  172 => 12,  150 => 6,  134 => 56,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  231 => 79,  215 => 188,  207 => 69,  202 => 20,  198 => 62,  190 => 17,  186 => 57,  76 => 25,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  210 => 22,  145 => 54,  52 => 13,  124 => 44,  137 => 51,  96 => 36,  81 => 22,  104 => 38,  152 => 47,  120 => 41,  97 => 30,  126 => 54,  83 => 22,  77 => 25,  65 => 21,  58 => 18,  418 => 108,  358 => 118,  329 => 165,  301 => 160,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 197,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 18,  185 => 113,  181 => 58,  161 => 84,  127 => 42,  118 => 99,  100 => 37,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 10,  129 => 46,  113 => 40,  74 => 18,  70 => 17,  53 => 16,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 110,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 74,  111 => 39,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 48,  131 => 98,  119 => 40,  108 => 39,  102 => 38,  71 => 32,  67 => 16,  63 => 15,  59 => 14,  47 => 12,  87 => 25,  55 => 9,  38 => 4,  29 => 2,  26 => 2,  94 => 29,  89 => 57,  85 => 33,  79 => 40,  75 => 21,  72 => 23,  68 => 20,  56 => 13,  50 => 11,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 100,  163 => 62,  158 => 43,  156 => 8,  151 => 51,  142 => 79,  138 => 57,  136 => 40,  123 => 43,  121 => 43,  117 => 40,  115 => 61,  105 => 34,  101 => 61,  91 => 34,  69 => 19,  66 => 16,  62 => 15,  49 => 43,  35 => 3,  31 => 3,  43 => 16,  41 => 4,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 53,  93 => 28,  88 => 34,  78 => 30,  46 => 16,  44 => 12,  40 => 9,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 91,  187 => 84,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 87,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 42,  122 => 35,  116 => 41,  112 => 38,  109 => 61,  106 => 35,  103 => 37,  99 => 36,  95 => 35,  92 => 35,  86 => 56,  82 => 23,  80 => 21,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 12,  51 => 12,  48 => 15,  45 => 17,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 9,);
    }
}
