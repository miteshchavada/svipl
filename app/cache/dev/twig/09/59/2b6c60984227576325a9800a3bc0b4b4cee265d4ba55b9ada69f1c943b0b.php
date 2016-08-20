<?php

/* AcmeStoreBundle:Default:orderdetail.html.twig */
class __TwigTemplate_09592b6c60984227576325a9800a3bc0b4b4cee265d4ba55b9ada69f1c943b0b extends Twig_Template
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
        echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Order Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Order
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <tr>
                                        <td class=\"col-lg-6\">Customer Name:-</td>
                                        <td class=\"col-lg-6\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Custname"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Customer Address:-</td>
                                        <td class=\"col-lg-6\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Custaddress"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Customer Phone:-</td>
                                        <td class=\"col-lg-6\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Custphone"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Customer Email:-</td>
                                        <td class=\"col-lg-6\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Custemail"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Customer Description:-</td>
                                        <td class=\"col-lg-6\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Custdescription"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Product Name:-</td>
                                        <td class=\"col-lg-6\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["productName"]) ? $context["productName"] : $this->getContext($context, "productName")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Category Name:-</td>
                                        <td class=\"col-lg-6\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Quantity:-</td>
                                        <td class=\"col-lg-6\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Quantity"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\"></td>
                                        <td class=\"col-lg-6\">X</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Price:-</td>
                                        <td class=\"col-lg-6\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Productprice"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"col-lg-6\">Total:-</td>
                                        <td class=\"col-lg-6\"> ";
        // line 62
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Productprice") * $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "Quantity")), "html", null, true);
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:orderdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  152 => 51,  97 => 37,  126 => 43,  77 => 17,  65 => 26,  58 => 22,  422 => 109,  391 => 218,  333 => 166,  288 => 127,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 97,  205 => 95,  198 => 93,  185 => 90,  181 => 89,  161 => 84,  127 => 67,  118 => 58,  100 => 46,  165 => 85,  114 => 42,  110 => 41,  84 => 32,  23 => 3,  34 => 5,  129 => 49,  113 => 41,  70 => 26,  53 => 10,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 192,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 141,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 69,  128 => 46,  107 => 50,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 101,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 52,  119 => 57,  102 => 32,  71 => 23,  67 => 31,  63 => 36,  59 => 14,  87 => 33,  38 => 4,  26 => 2,  94 => 28,  89 => 35,  85 => 29,  75 => 17,  68 => 14,  56 => 34,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 72,  136 => 48,  121 => 20,  117 => 43,  105 => 39,  91 => 34,  62 => 12,  49 => 19,  31 => 4,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 42,  88 => 6,  78 => 30,  46 => 7,  44 => 12,  27 => 4,  79 => 34,  72 => 30,  69 => 33,  47 => 8,  40 => 16,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 58,  120 => 44,  115 => 43,  111 => 22,  108 => 39,  101 => 38,  98 => 31,  96 => 31,  83 => 28,  74 => 16,  66 => 15,  55 => 21,  52 => 21,  50 => 8,  43 => 8,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 92,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 72,  164 => 59,  162 => 57,  154 => 82,  149 => 79,  147 => 78,  144 => 66,  141 => 65,  133 => 62,  130 => 41,  125 => 62,  122 => 65,  116 => 41,  112 => 61,  109 => 19,  106 => 18,  103 => 17,  99 => 36,  95 => 35,  92 => 50,  86 => 38,  82 => 31,  80 => 19,  73 => 19,  64 => 19,  60 => 35,  57 => 24,  54 => 10,  51 => 21,  48 => 11,  45 => 18,  42 => 8,  39 => 6,  36 => 4,  33 => 3,  30 => 1,);
    }
}
