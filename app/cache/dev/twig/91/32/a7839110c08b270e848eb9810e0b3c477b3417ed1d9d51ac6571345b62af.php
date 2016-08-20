<?php

/* AcmeCategoryBundle:Default:index.html.twig */
class __TwigTemplate_9132a7839110c08b270e848eb9810e0b3c477b3417ed1d9d51ac6571345b62af extends Twig_Template
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
                    <h1 class=\"page-header\">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Category List
\t\t\t\t<div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("category_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Category</button></a></div>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "\t\t\t\t    <div class=\"alert alert-success\" id=\"success\">\t
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                                    <div class=\"alert alert-danger\"> 
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Name</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "category"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 42
            echo "                                         <tr class=\"gradeA\">
                                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "name"), "html", null, true);
            echo "</td>
                                            <td>
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
        \t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_delete", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('are sure delete?')\" class=\"btn btn-danger\">delete</a>
                                                ";
            // line 48
            if (($this->getAttribute($this->getContext($context, "cat"), "status") == 1)) {
                // line 49
                echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-success btn-category-status\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "id"), "html", null, true);
                echo "\">Enable</a>
                                                    ";
                // line 51
                echo "                                                ";
            } else {
                // line 52
                echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-danger btn-category-status\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "id"), "html", null, true);
                echo "\">Disabled</a>
                                                    ";
                // line 54
                echo "                                                ";
            }
            // line 55
            echo "                                                ";
            // line 60
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                    </tbody>
                                </table>
                            </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                </div>
            </div>            
";
    }

    public function getTemplateName()
    {
        return "AcmeCategoryBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 63,  162 => 60,  160 => 55,  157 => 54,  152 => 52,  149 => 51,  144 => 49,  142 => 48,  138 => 47,  134 => 46,  129 => 44,  125 => 43,  122 => 42,  105 => 41,  94 => 32,  85 => 29,  81 => 27,  76 => 26,  67 => 23,  63 => 21,  59 => 20,  52 => 16,  38 => 4,  32 => 3,  29 => 2,);
    }
}
