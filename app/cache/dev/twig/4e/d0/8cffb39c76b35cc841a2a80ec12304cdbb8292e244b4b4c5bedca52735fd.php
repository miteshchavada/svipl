<?php

/* AcmeInfoBundle:Default:logo.html.twig */
class __TwigTemplate_4ed08cffb39c76b35cc841a2a80ec12304cdbb8292e244b4b4c5bedca52735fd extends Twig_Template
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
                    <h1 class=\"page-header\">Logo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Logo
\t\t\t\t<div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_logoadd");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Logo</button></a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div id=\"error\" style=\"display:none;\">Please Another Status Disable</div>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "\t\t\t\t    <div class=\"alert alert-success\" id=\"success\">\t
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t\t\t    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
\t\t                    </div>\t\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                                    <div class=\"alert alert-danger\"> 
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "                                    <div class=\"alert alert-danger\"> 
\t\t\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
\t\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logo"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 51
            echo "\t\t\t\t\t<tr class=\"gradeA\">
\t\t\t\t\t    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/logo/", 1 => $this->getAttribute($this->getContext($context, "log"), "logo")))), "html", null, true);
            echo "\" style=\"width:80px; height: 50px;\" /></td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "createdAt")), "html", null, true);
            echo "</td>
\t\t\t\t\t    <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_logoedit", array("id" => $this->getAttribute($this->getContext($context, "log"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
\t\t\t\t\t    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_logodelete", array("id" => $this->getAttribute($this->getContext($context, "log"), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('are sure delete?')\" class=\"btn btn-danger\">delete</a>
                                            ";
            // line 57
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                                                ";
                if (($this->getAttribute($this->getContext($context, "log"), "status") == "1")) {
                    // line 59
                    echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-success btn-logo-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "id"), "html", null, true);
                    echo "\">Enable</a>
                                                    ";
                    // line 61
                    echo "                                                ";
                } else {
                    // line 62
                    echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-danger btn-logo-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "id"), "html", null, true);
                    echo "\">Disabled</a>
                                                    ";
                    // line 64
                    echo "                                                ";
                }
                // line 65
                echo "                                            ";
            }
            // line 66
            echo "                                            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return "AcmeInfoBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 69,  190 => 66,  187 => 65,  184 => 64,  179 => 62,  176 => 61,  171 => 59,  168 => 58,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  143 => 51,  126 => 50,  114 => 40,  105 => 37,  101 => 35,  96 => 34,  87 => 31,  83 => 29,  78 => 28,  69 => 25,  65 => 23,  61 => 22,  52 => 16,  38 => 4,  32 => 3,  29 => 2,);
    }
}
