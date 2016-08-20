<?php

/* AcmeFooterBundle:Default:index.html.twig */
class __TwigTemplate_9f14220ea7582fc967b78fe70bb04c89d1641472fcff21f840e66b8f139bff49 extends Twig_Template
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
        echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Footer</h1>
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
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Our Partners</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "AcmeFooterBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  56 => 16,  52 => 15,  39 => 4,  32 => 3,  29 => 2,);
    }
}
