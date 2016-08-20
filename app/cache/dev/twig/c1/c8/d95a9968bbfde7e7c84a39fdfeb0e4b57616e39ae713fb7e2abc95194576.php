<?php

/* AcmeFooterBundle:Default:followus.html.twig */
class __TwigTemplate_c1c8d95a9968bbfde7e7c84a39fdfeb0e4b57616e39ae713fb7e2abc95194576 extends Twig_Template
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
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Follow Us</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        &nbsp;
                        <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("acme_footer_followus");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Follow Us</button></a></div>
                        <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_footer_address");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Address</button></a></div>
                        <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("acme_footer_whyus");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Why Us?</button></a></div>
                        <div style=\"float:right; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("acme_footer_followusadd");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add</button></a></div>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example1\">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Title</th>
                                        <th>Logo</th>
                                        <th>Link</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "followus"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["follow"]) {
            // line 34
            echo "                                         <tr class=\"gradeA\">
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follow"), "title"), "html", null, true);
            echo "</td>
                                            <td><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/follow/", 1 => $this->getAttribute($this->getContext($context, "follow"), "id"), 2 => "/", 3 => $this->getAttribute($this->getContext($context, "follow"), "logo")))), "html", null, true);
            echo "\"/></td>
                                            <td width=\"250px;\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follow"), "link"), "html", null, true);
            echo "</td>
                                            <td>
\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_followedit", array("id" => $this->getAttribute($this->getContext($context, "follow"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
        \t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_followdelete", array("id" => $this->getAttribute($this->getContext($context, "follow"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('are sure delete?')\">delete</a>
                                                ";
            // line 42
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 43
                echo "                                                ";
                if (($this->getAttribute($this->getContext($context, "follow"), "status") == "1")) {
                    // line 44
                    echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-success btn-follow-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follow"), "id"), "html", null, true);
                    echo "\">Enable</a>
                                                    ";
                    // line 46
                    echo "                                                ";
                } else {
                    // line 47
                    echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-danger btn-follow-status\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "follow"), "id"), "html", null, true);
                    echo "\">Disabled</a>
                                                    ";
                    // line 49
                    echo "                                                ";
                }
                // line 50
                echo "                                            ";
            }
            // line 51
            echo "\t\t\t\t\t    </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </tbody>
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
        return "AcmeFooterBundle:Default:followus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  151 => 51,  148 => 50,  145 => 49,  140 => 47,  137 => 46,  132 => 44,  129 => 43,  127 => 42,  123 => 41,  119 => 40,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  99 => 34,  82 => 33,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  39 => 4,  32 => 3,  29 => 2,);
    }
}
