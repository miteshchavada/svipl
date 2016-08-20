<?php

/* AcmeHomeBundle:Default:news.html.twig */
class __TwigTemplate_ca9149233013ba271fdecbe1458ea1c69f71c8a0b082e5cf37d106bd92a80dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::common.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"body3\">
\t\t<div class=\"main zerogrid\">
<!-- content -->
\t\t\t<article id=\"content\">
\t\t\t\t<div class=\"wrapper tabs\">
\t\t\t\t\t";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "\t\t\t\t\t";
        $context["divNo"] = 1;
        // line 10
        echo "                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 11
            echo "
\t\t\t\t\t\t";
            // line 12
            if (((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3) == 0) && ((isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")) != 1))) {
                // line 13
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 15
            echo "
\t\t\t\t\t\t";
            // line 16
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3) == 0)) {
                // line 17
                echo "                                                        <div class=\"tab-content\" id=\"tab";
                echo twig_escape_filter($this->env, (isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 18
                $context["divNo"] = ((isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")) + 1);
                // line 19
                echo "\t\t\t\t\t\t";
            }
            // line 20
            echo "
                                                <h5><span class=\"dropcap\"><strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id"), "html", null, true);
            echo "</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
\t\t\t\t\t\t<div class=\"wrapper pad_bot2\">
\t\t\t\t\t\t\t<figure class=\"left marg_right1\"><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/news/", 1 => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "image")))), "html", null, true);
            echo "\" alt=\"\"></figure>
\t\t\t\t\t\t\t<p class=\"pad_bot1\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"link1\">Read More</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 29
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t</div>

                \t\t\t<ul class=\"nav\">
\t\t\t\t\t    \t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_round(((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) / 3), 0, "ceil")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 35
            echo "\t\t\t\t            \t\t<li class=\"selected\"><a href=\"#tab";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</a></li>
\t\t    \t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t    </ul>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</article>
\t\t</div>
\t</div>
\t<div class=\"body4\">
\t\t<div class=\"main zerogrid\">
\t\t\t<article id=\"content2\">
\t\t\t\t<div class=\"wrapper row\">
\t\t\t\t\t<section class=\"col-1-4\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<h4>Why Us?</h4>
\t\t\t\t\t\t<ul class=\"list1\">
\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dmet, consectetur</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Adipisicing elit eiusmod </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Tempor incididunt ut</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"col-1-4\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<h4>Address</h4>
\t\t\t\t\t\t<ul class=\"address\">
\t\t\t\t\t\t\t<li><span>Country:</span>USA</li>
\t\t\t\t\t\t\t<li><span>City:</span>San Diego</li>
\t\t\t\t\t\t\t<li><span>Phone:</span>8 800 154-45-67</li>
\t\t\t\t\t\t\t<li><span>Email:</span><a href=\"mailto:\">progress@mail.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"col-1-4\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<h4>Follow Us</h4>
\t\t\t\t\t\t<ul id=\"icons\">
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/icon1.jpg"), "html", null, true);
        echo "\" alt=\"\">Facebook</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/icon2.jpg"), "html", null, true);
        echo "\" alt=\"\">Twitter</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/icon3.jpg"), "html", null, true);
        echo "\" alt=\"\">LinkedIn</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/icon4.jpg"), "html", null, true);
        echo "\" alt=\"\">Delicious</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"col-1-4\">
\t\t\t\t\t<div class=\"wrap-col\">
\t\t\t\t\t\t<h4>Newsletter</h4>
\t\t\t\t\t\t<form id=\"newsletter\" method=\"post\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t\t\t\t<input class=\"input\" type=\"text\" value=\"Type Your Email Here\"  onblur=\"if(this.value=='') this.value='Type Your Email Here'\" onfocus=\"if(this.value =='Type Your Email Here' ) this.value=''\" >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button\" onclick=\"document.getElementById('newsletter').submit()\">Subscribe</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</article>
<!-- content end -->
\t\t</div>
\t</div>
\t\t<div class=\"main zerogrid\">
<!-- footer -->
\t\t\t<footer>
\t\t\t\t<a href=\"http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html\" target=\"_blank\">Html5 Templates</a> by <a href=\"http://www.templatemonster.com/\" target=\"_blank\">Templatesmonster.com</a><br>
\t\t\t\t<a href=\"http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html\" target=\"_blank\">Responsive Themes</a> by <a href=\"http://www.zerotheme.com/\" target=\"_blank\">Zerotheme.com</a><br>
\t\t\t</footer>
<!-- footer end -->
\t\t</div>
<script type=\"text/javascript\"> Cufon.now(); </script>
<script>
\t\$(document).ready(function() {
\t\ttabs.init();
\t})
</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  194 => 18,  172 => 12,  150 => 6,  134 => 56,  90 => 20,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 69,  202 => 20,  190 => 17,  186 => 61,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 41,  137 => 49,  81 => 24,  104 => 62,  152 => 47,  97 => 37,  126 => 54,  77 => 17,  65 => 49,  58 => 14,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 97,  205 => 95,  198 => 19,  185 => 16,  181 => 58,  161 => 84,  127 => 42,  118 => 82,  100 => 31,  165 => 85,  114 => 42,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 43,  113 => 37,  70 => 14,  53 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 141,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 86,  140 => 55,  132 => 47,  128 => 46,  107 => 50,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 109,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 72,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  119 => 67,  102 => 38,  71 => 51,  67 => 18,  63 => 15,  59 => 47,  87 => 25,  38 => 8,  26 => 2,  94 => 29,  89 => 57,  85 => 22,  75 => 21,  68 => 19,  56 => 16,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 8,  151 => 63,  142 => 79,  138 => 57,  136 => 47,  121 => 20,  117 => 37,  105 => 34,  91 => 28,  62 => 17,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 29,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  27 => 4,  79 => 22,  72 => 20,  69 => 19,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 54,  139 => 45,  131 => 70,  123 => 43,  120 => 41,  115 => 43,  111 => 37,  108 => 35,  101 => 61,  98 => 31,  96 => 29,  83 => 28,  74 => 52,  66 => 13,  55 => 9,  52 => 13,  50 => 13,  43 => 10,  41 => 9,  35 => 7,  32 => 3,  29 => 6,  209 => 96,  203 => 78,  199 => 67,  193 => 92,  189 => 91,  187 => 84,  182 => 15,  176 => 13,  173 => 87,  168 => 11,  164 => 10,  162 => 57,  154 => 59,  149 => 54,  147 => 55,  144 => 80,  141 => 37,  133 => 43,  130 => 55,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 40,  106 => 35,  103 => 17,  99 => 31,  95 => 59,  92 => 50,  86 => 56,  82 => 23,  80 => 23,  73 => 19,  64 => 19,  60 => 16,  57 => 15,  54 => 13,  51 => 12,  48 => 11,  45 => 6,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
