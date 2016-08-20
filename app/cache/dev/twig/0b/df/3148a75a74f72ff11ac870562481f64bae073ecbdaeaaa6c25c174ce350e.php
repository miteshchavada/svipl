<?php

/* AcmeInfoBundle:Default:index.html.twig */
class __TwigTemplate_0bdf3148a75a74f72ff11ac870562481f64bae073ecbdaeaaa6c25c174ce350e extends Twig_Template
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
                    <h1 class=\"page-header\">Info List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Info List
\t\t\t\t<div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"add\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Product</button></a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "\t\t\t\t    <div class=\"alert alert-success\" id=\"success\">\t
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                                    <div class=\"alert alert-danger\"> 
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Title</th>
                                            <th>Percentage</th>
                                            <th>Created At</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "info"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
            // line 45
            echo "\t\t\t\t\t<tr class=\"gradeA\">
\t\t\t\t\t    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inf"), "title"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td width=\"400px;\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "inf"), "percentage"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "inf"), "createdAt")), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_info_edit", array("id" => $this->getAttribute($this->getContext($context, "inf"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
\t\t\t\t\t    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_info_delete", array("id" => $this->getAttribute($this->getContext($context, "inf"), "id"))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t   </tbody>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  122 => 45,  105 => 44,  92 => 33,  83 => 30,  79 => 28,  74 => 27,  65 => 24,  61 => 22,  57 => 21,  38 => 4,  32 => 3,  29 => 2,);
    }
}
