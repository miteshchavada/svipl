<?php

/* AcmeInfoBundle:Default:logoedit.html.twig */
class __TwigTemplate_34a1a2f0a4f6f8c211726538cf35d1457ede93bcb03e5d20b03429cc33b8ad7b extends Twig_Template
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
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Logo Edit</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
                <center>
                <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_logoedit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"POST\" id=\"form\" enctype=\"multipart/form-data\" name=\"form\" class=\"form-group\" novalidate=\"novalidate\">
                ";
        // line 13
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 14
            echo "                <div class=\"alert alert-danger\">    
                    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'errors');
            echo "
                </div>
                ";
        }
        // line 18
        echo "                <div class=\"form-group col-lg-12\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Logo: "));
        echo "
                    <div class=\"col-sm-2\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "logo"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                    <div class=\"col-sm-1\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/logo/", 1 => $this->getContext($context, "logo")))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                    </div>
                </div>
                <div class=\"form-group col-lg-12\">
                    <div class=\"col-sm-6\">
                    <input type=\"submit\" formnovalidate value=\"Edit\" name=\"edit\" class=\"btn btn-primary\" />
                    <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href='";
        // line 33
        echo $this->env->getExtension('routing')->getPath("acme_info_logo");
        echo "'\"/>
                    </div>
                </div>
                </form>
                </center>
            </div>        
";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:logoedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  83 => 27,  78 => 25,  71 => 21,  66 => 19,  63 => 18,  57 => 15,  54 => 14,  52 => 13,  48 => 12,  38 => 4,  32 => 3,  29 => 2,);
    }
}
