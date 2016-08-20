<?php

/* AcmeHomeBundle:Default:blog.html.twig */
class __TwigTemplate_d651e906daab9f35b70bdbfdb786b8d33867cbc295870e18199fe5874f4580f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::front.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>Blogs</h2>
            <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"wrapper tabs\">
                    ";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "                    ";
        $context["divNo"] = 1;
        // line 15
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogs"]) {
            // line 16
            echo "
                        ";
            // line 17
            if (((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3) == 0) && ((isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")) != 1))) {
                // line 18
                echo "                        </div>
                    ";
            }
            // line 20
            echo "
                    ";
            // line 21
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 3) == 0)) {
                // line 22
                echo "                        <div class=\"tab-content\" id=\"tab";
                echo twig_escape_filter($this->env, (isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")), "html", null, true);
                echo "\">
                            ";
                // line 23
                $context["divNo"] = ((isset($context["divNo"]) ? $context["divNo"] : $this->getContext($context, "divNo")) + 1);
                // line 24
                echo "                        ";
            }
            // line 25
            echo "
                        <h5><span class=\"dropcap\"><strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
                        <div class=\"wrapper pad_bot2\">
                            <p class=\"pad_bot1\" id=\"desc_";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "description"), 0, 200), "html", null, true);
            echo "</p>
                            <p class=\"pad_bot1\" id=\"pname_";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "description"), "html", null, true);
            echo "</p>
                            <a href=\"Javascript:toggle('pname_";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "','desc_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "');\" class=\"link1\">Read More</a>
                        </div>

                        ";
            // line 33
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 34
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>

                <ul class=\"pagination pagination-lg\">
                    ";
        // line 39
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
            // line 40
            echo "                        <li class=\"active\"><a href=\"#tab";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</a></li>
                        ";
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
        // line 42
        echo "                </ul>
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogs"]) {
            // line 44
            echo "                    <div class=\"blog-item\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-2 text-center\">
                                <div class=\"entry-meta\">
                                    <span id=\"publish_date\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), "html", null, true);
            echo "</span>
                                    <span><i class=\"fa fa-user\"></i> <a href=\"#\">John Doe</a></span>
                                    <span><i class=\"fa fa-comment\"></i> <a href=\"blog-item.html#comments\">2 Comments</a></span>
                                    <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-10 blog-content\">
                                <a href=\"#\"><img class=\"img-responsive img-blog\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/news/", 1 => $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "id"), 2 => "/", 3 => $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "image")))), "html", null, true);
            echo "\" width=\"100%\" alt=\"\" /></a>
                                <h2><a href=\"blog-item.html\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "title"), "html", null, true);
            echo "</a></h2>
                                <h3>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")), "description"), "html", null, true);
            echo "</h3>
                                <a class=\"btn btn-primary readmore\" href=\"blog-item.html\">Read More <i class=\"fa fa-angle-right\"></i></a>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    
                    <ul class=\"pagination pagination-lg\">
                        <li><a href=\"#\"><i class=\"fa fa-long-arrow-left\"></i>Previous Page</a></li>
                        <li class=\"active\"><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Next Page<i class=\"fa fa-long-arrow-right\"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                            <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
                        </form>
                    </div><!--/.search-->

                    <div class=\"widget categories\">
                        <h3>Recent Comments</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
                                    <img src=\"images/blog/avatar3.png\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"images/blog/avatar3.png\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>
                                <div class=\"single_comments\">
                                    <img src=\"images/blog/avatar3.png\" alt=\"\"  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
                                </div>

                            </div>
                        </div>                     
                    </div><!--/.recent comments-->


                    <div class=\"widget categories\">
                        <h3>Categories</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <ul class=\"blog_category\">
                                    <li><a href=\"#\">Computers <span class=\"badge\">04</span></a></li>
                                    <li><a href=\"#\">Smartphone <span class=\"badge\">10</span></a></li>
                                    <li><a href=\"#\">Gedgets <span class=\"badge\">06</span></a></li>
                                    <li><a href=\"#\">Technology <span class=\"badge\">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->

                    <div class=\"widget archieve\">
                        <h3>Archieve</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> December 2013 <span class=\"pull-right\">(97)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> November 2013 <span class=\"pull-right\">(32)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> October 2013 <span class=\"pull-right\">(19)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> September 2013 <span class=\"pull-right\">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->

                    <div class=\"widget tags\">
                        <h3>Tag Cloud</h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Apple</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Barcelona</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Office</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Ipod</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Stock</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Race</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">London</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Football</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Porche</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->

                    <div class=\"widget blog_gallery\">
                        <h3>Our Gallery</h3>
                        <ul class=\"sidebar-gallery\">
                            <li><a href=\"#\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery1.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery2.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery3.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery4.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery5.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/blog/gallery6.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
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
        return "AcmeHomeBundle:Default:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  301 => 160,  297 => 159,  195 => 137,  178 => 55,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  194 => 18,  172 => 12,  150 => 6,  134 => 110,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 141,  202 => 20,  190 => 17,  186 => 57,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 41,  137 => 49,  81 => 24,  104 => 57,  152 => 47,  97 => 30,  126 => 54,  77 => 25,  65 => 21,  58 => 18,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 143,  205 => 95,  198 => 62,  185 => 113,  181 => 58,  161 => 123,  127 => 42,  118 => 99,  100 => 56,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 93,  113 => 37,  70 => 14,  53 => 16,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 125,  140 => 55,  132 => 47,  128 => 74,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 167,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 140,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  119 => 39,  102 => 38,  71 => 35,  67 => 22,  63 => 15,  59 => 47,  87 => 25,  38 => 8,  26 => 2,  94 => 29,  89 => 57,  85 => 28,  75 => 21,  68 => 19,  56 => 17,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 124,  163 => 62,  158 => 43,  156 => 121,  151 => 119,  142 => 79,  138 => 57,  136 => 40,  121 => 20,  117 => 66,  105 => 33,  91 => 29,  62 => 20,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 29,  88 => 26,  78 => 30,  46 => 7,  44 => 12,  27 => 4,  79 => 40,  72 => 23,  69 => 19,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 294,  157 => 56,  145 => 54,  139 => 45,  131 => 70,  123 => 43,  120 => 41,  115 => 61,  111 => 37,  108 => 35,  101 => 61,  98 => 53,  96 => 29,  83 => 28,  74 => 24,  66 => 13,  55 => 9,  52 => 22,  50 => 13,  43 => 13,  41 => 9,  35 => 7,  32 => 3,  29 => 6,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 135,  187 => 134,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 118,  144 => 80,  141 => 115,  133 => 43,  130 => 109,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 53,  92 => 50,  86 => 56,  82 => 23,  80 => 26,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 15,  45 => 14,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
