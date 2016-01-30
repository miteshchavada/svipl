<?php

/* AcmeUserBundle:Default:index.html.twig */
class __TwigTemplate_2d53698f3d84e536810d53588d42fa9bb466bd2a3c4f945042e7f319fe41c287 extends Twig_Template
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
        echo "    ";
        // line 20
        echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Users List
                        </div>
                    </div>
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "                        <div class=\"alert alert-danger\"> 
                            ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "                                         <tr class=\"gradeA\">
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
            echo "</td>
                                            <td>
        \t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('are sure delete?')\" class=\"btn btn-danger\">Delete</a>
                                                ";
            // line 58
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 59
                echo "                                                    ";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled") == "1")) {
                    // line 60
                    echo "                                                        <a href=\"javascript:void(0)\" class=\"btn btn-success btn-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
                    echo "\">Enable</a>
                                                        ";
                    // line 62
                    echo "                                                    ";
                } else {
                    // line 63
                    echo "                                                        <a href=\"javascript:void(0)\" class=\"btn btn-danger btn-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
                    echo "\">Disabled</a>
                                                        ";
                    // line 65
                    echo "                                                    ";
                }
                // line 66
                echo "                                                ";
            }
            // line 67
            echo "                                                ";
            // line 74
            echo "\t\t\t\t\t    </td>
                                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </tbody>
                                </table>
                            </div>
                        <!-- /.panel-body -->
                    </div>
                </div>    
            </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 77,  114 => 55,  110 => 54,  84 => 33,  23 => 3,  34 => 5,  129 => 49,  113 => 41,  74 => 28,  70 => 26,  53 => 15,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 60,  111 => 39,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 52,  131 => 52,  119 => 57,  108 => 36,  102 => 32,  71 => 23,  67 => 15,  63 => 36,  59 => 14,  47 => 13,  87 => 32,  55 => 21,  38 => 4,  29 => 2,  26 => 2,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  72 => 39,  68 => 14,  56 => 34,  50 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 63,  123 => 58,  121 => 46,  117 => 43,  115 => 43,  105 => 40,  101 => 36,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  35 => 5,  31 => 4,  43 => 8,  41 => 11,  28 => 3,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 30,  46 => 7,  44 => 12,  40 => 20,  32 => 3,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 74,  147 => 67,  144 => 66,  141 => 65,  133 => 62,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 53,  103 => 52,  99 => 31,  95 => 28,  92 => 33,  86 => 51,  82 => 31,  80 => 19,  73 => 19,  64 => 19,  60 => 35,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 12,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
