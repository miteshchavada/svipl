<?php

/* AcmeStoreBundle:Default:error.html.twig */
class __TwigTemplate_255126734845bf5441e538ff1a9793df4c35293e2fe97c4fac8e309ab348ca2e extends Twig_Template
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
                    <h1 class=\"page-header\">Sorry Page Can Not Found</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  32 => 3,  29 => 2,);
    }
}
