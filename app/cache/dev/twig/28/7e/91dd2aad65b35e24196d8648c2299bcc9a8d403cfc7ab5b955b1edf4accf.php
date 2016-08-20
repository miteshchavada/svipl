<?php

/* AcmeInfoBundle:Newslist:index.html.twig */
class __TwigTemplate_287e91dd2aad65b35e24196d8648c2299bcc9a8d403cfc7ab5b955b1edf4accf extends Twig_Template
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
                    <h1 class=\"page-header\">News List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            News List
\t\t\t\t<div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"news/add\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add News</button></a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Title</th>
\t\t\t\t\t    <th>Image</th>
                                            <th>Description</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "news"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "                                         <tr class=\"gradeA\">
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "title"), "html", null, true);
            echo "</td>
                                            <td><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/news/", 1 => $this->getAttribute($this->getContext($context, "product"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "product"), "image")))), "html", null, true);
            echo "\" style=\"width:80px; height: 50px;\" /></td>
                                            <td width=\"250px;\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "description"), "html", null, true);
            echo "</td>
                                            <td>
\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_news_edit", array("id" => $this->getAttribute($this->getContext($context, "product"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
        \t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_news_delete", array("id" => $this->getAttribute($this->getContext($context, "product"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('are sure delete?')\">delete</a></li>
\t\t\t\t\t    </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                    </tbody>
\t\t\t\t    <!-- div>";
        // line 45
        echo $this->getContext($context, "paginator");
        echo "</div--> 
                                </table>
                            </div>
                    </div>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Newslist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  127 => 44,  109 => 40,  105 => 39,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  85 => 33,  68 => 32,  38 => 4,  32 => 3,  29 => 2,);
    }
}
