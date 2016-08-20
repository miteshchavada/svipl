<?php

/* AcmeInfoBundle:Default:testiedit.html.twig */
class __TwigTemplate_abf5f76f4a6806e48f3a89f52f1b12f08094209da2c94cc4404c20694623ee78 extends Twig_Template
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
        echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Testimonial Edit Form</h1>
            </div>
        </div>
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_testiedit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" id=\"form\" enctype=\"multipart/form-data\" name=\"form\">
                    ";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">    
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
            echo "
                        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 19
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Name: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Post: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "post"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Post")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-2\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-1\">
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/testimonials/", 1 => $this->getContext($context, "id"), 2 => "/", 3 => $this->getContext($context, "image")))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Save\" name=\"insert\" class=\"btn btn-primary\" />
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 51
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
        return "AcmeInfoBundle:Default:testiedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  129 => 46,  124 => 44,  117 => 40,  112 => 38,  105 => 34,  100 => 32,  93 => 28,  88 => 26,  81 => 22,  76 => 20,  73 => 19,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  50 => 11,  41 => 4,  35 => 3,  29 => 2,);
    }
}
