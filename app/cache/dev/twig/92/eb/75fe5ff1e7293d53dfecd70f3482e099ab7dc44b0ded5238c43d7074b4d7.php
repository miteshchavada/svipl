<?php

/* AcmeInfoBundle:Serviceslist:index.html.twig */
class __TwigTemplate_92eb75fe5ff1e7293d53dfecd70f3482e099ab7dc44b0ded5238c43d7074b4d7 extends Twig_Template
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
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Recent Works</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Services List
                        <div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"services/add\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Recent Works</button></a></div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "services"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 31
            echo "                                        <tr class=\"gradeA\">
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "service"), "title"), "html", null, true);
            echo "</td>
                                            <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getAttribute($this->getContext($context, "service"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "service"), "image")))), "html", null, true);
            echo "\" style=\"width:80px; height: 50px;\" /></td>
                                            <td width=\"350px;\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "service"), "description"), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_services_edit", array("id" => $this->getAttribute($this->getContext($context, "service"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
                                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_services_delete", array("id" => $this->getAttribute($this->getContext($context, "service"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('are sure delete?')\">delete</a></li>
                                            </td>
                                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                </tbody>
                                <!-- div>";
        // line 43
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
        return "AcmeInfoBundle:Serviceslist:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  129 => 42,  111 => 38,  107 => 37,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  87 => 31,  70 => 30,  42 => 4,  39 => 3,  35 => 50,  32 => 3,  29 => 2,);
    }
}
