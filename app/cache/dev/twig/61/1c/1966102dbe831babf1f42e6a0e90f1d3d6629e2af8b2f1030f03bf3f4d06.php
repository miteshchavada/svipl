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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "image"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => $this->getAttribute($this->getContext($context, "im"), "image")))), "html", null, true);
            echo "\" style=\"width:80px; height: 50px;\" /></td>
\t\t\t\t\t    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "im"), "title"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "im"), "description"), "html", null, true);
            echo "</td>    
\t\t\t\t\t    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_image_edit", array("id" => $this->getAttribute($this->getContext($context, "im"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
\t\t\t\t\t    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_image_delete", array("id" => $this->getAttribute($this->getContext($context, "im"), "id"))), "html", null, true);
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
        return array (  126 => 43,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  86 => 34,  69 => 33,  38 => 4,  32 => 3,  29 => 2,);
    }
}
