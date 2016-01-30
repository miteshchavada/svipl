<?php

/* AcmeImageBundle:Default:index.html.twig */
class __TwigTemplate_611c1966102dbe831babf1f42e6a0e90f1d3d6629e2af8b2f1030f03bf3f4d06 extends Twig_Template
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
        echo "
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Slider Image List
\t\t\t\t<div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"add\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Slider</button></a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["image"]) ? $context["image"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 34
            echo "\t\t\t\t\t<tr class=\"gradeA\">
\t\t\t\t\t    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute((isset($context["im"]) ? $context["im"] : null), "image")))), "html", null, true);
            echo "\" style=\"width:80px; height: 50px;\" /></td>
\t\t\t\t\t    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["im"]) ? $context["im"] : null), "title"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["im"]) ? $context["im"] : null), "description"), "html", null, true);
            echo "</td>    
\t\t\t\t\t    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_image_edit", array("id" => $this->getAttribute((isset($context["im"]) ? $context["im"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
\t\t\t\t\t    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_image_delete", array("id" => $this->getAttribute((isset($context["im"]) ? $context["im"] : null), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('are sure delete?')\" class=\"btn btn-danger\">delete</a></td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t   </tbody>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "AcmeImageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  137 => 51,  96 => 31,  81 => 24,  104 => 38,  152 => 51,  120 => 43,  97 => 37,  126 => 43,  83 => 28,  77 => 17,  65 => 26,  58 => 13,  418 => 108,  358 => 191,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  263 => 120,  257 => 117,  239 => 108,  233 => 104,  226 => 100,  213 => 97,  205 => 95,  197 => 93,  194 => 92,  185 => 90,  181 => 89,  161 => 84,  127 => 67,  118 => 58,  100 => 29,  165 => 85,  114 => 42,  110 => 41,  84 => 25,  23 => 3,  34 => 5,  129 => 43,  113 => 39,  74 => 16,  70 => 26,  53 => 15,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 217,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 81,  252 => 115,  247 => 113,  241 => 109,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 49,  128 => 46,  111 => 22,  107 => 50,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 99,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 64,  143 => 56,  135 => 52,  131 => 52,  119 => 57,  108 => 37,  102 => 32,  71 => 17,  67 => 16,  63 => 15,  59 => 17,  47 => 8,  87 => 33,  55 => 21,  38 => 4,  29 => 2,  26 => 2,  94 => 28,  89 => 35,  85 => 22,  79 => 19,  75 => 18,  72 => 30,  68 => 14,  56 => 16,  50 => 8,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 72,  136 => 47,  123 => 58,  121 => 20,  117 => 37,  115 => 43,  105 => 39,  101 => 38,  91 => 34,  69 => 33,  66 => 15,  62 => 12,  49 => 13,  35 => 5,  31 => 4,  43 => 8,  41 => 5,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 36,  88 => 23,  78 => 30,  46 => 7,  44 => 12,  40 => 16,  32 => 3,  27 => 4,  22 => 2,  209 => 96,  203 => 78,  199 => 67,  193 => 73,  189 => 91,  187 => 84,  182 => 66,  176 => 64,  173 => 87,  168 => 72,  164 => 59,  162 => 59,  154 => 82,  149 => 54,  147 => 78,  144 => 55,  141 => 49,  133 => 62,  130 => 41,  125 => 45,  122 => 65,  116 => 41,  112 => 35,  109 => 40,  106 => 18,  103 => 17,  99 => 36,  95 => 35,  92 => 50,  86 => 34,  82 => 31,  80 => 19,  73 => 19,  64 => 19,  60 => 14,  57 => 24,  54 => 12,  51 => 21,  48 => 11,  45 => 18,  42 => 8,  39 => 4,  36 => 4,  33 => 3,  30 => 1,);
    }
}
