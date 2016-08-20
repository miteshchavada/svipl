<?php

/* AcmeInfoBundle:Default:testiadd.html.twig */
class __TwigTemplate_f4736b1de211b734fcb0a70dc2b2c51e3f087eaaab61f7e77cb5b9341e4e5547 extends Twig_Template
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
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Testimonial Add Form</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
    <center>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("acme_testiadd");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-group\">
        ";
        // line 13
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 14
            echo "        <div class=\"alert alert-danger\">    
            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
            echo "
            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'errors');
            echo "
            ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
            echo "
            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
            echo "
        </div>
        ";
        }
        // line 21
        echo "        <div class=\"form-group col-lg-12\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Name: "));
        echo "
            <div class=\"col-sm-10\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-lg-12\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Post: "));
        echo "
            <div class=\"col-sm-10\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Post")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-lg-12\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
            <div class=\"col-sm-10\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
            </div>
        </div>
        <div class=\"form-group col-lg-12\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
            <div class=\"col-sm-2\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
            </div>
        </div>    
        <div class=\"form-group col-lg-6\">
            <input type=\"submit\" formnovalidate value=\"Save\" name=\"insert\" class=\"btn btn-primary\" />
            <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href='";
        // line 47
        echo $this->env->getExtension('routing')->getPath("acme_info_testimonials");
        echo "'\"/>
        </div>
    </form>
    </center>\t\t\t
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:testiadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  124 => 42,  119 => 40,  112 => 36,  107 => 34,  100 => 30,  95 => 28,  88 => 24,  83 => 22,  80 => 21,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  57 => 13,  51 => 12,  41 => 4,  35 => 3,  29 => 2,);
    }
}
