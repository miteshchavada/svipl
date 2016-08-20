<?php

/* AcmeInfoBundle:Serviceslist:edit.html.twig */
class __TwigTemplate_0454a44d6581fd7aa212b4afc74cf5cf24eed2c180d3d012f595ca4e8ee0066b extends Twig_Template
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
                <h1 class=\"page-header\">Recent Works Edit</h1>
            </div>
        </div>
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_services_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"POST\" id=\"recent-works\" enctype=\"multipart/form-data\">
                    ";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">    
                        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
            echo "
                        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 19
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Title: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-2\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-1\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/recent_works/", 1 => $this->getContext($context, "id"), 2 => "/", 3 => $this->getContext($context, "image")))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        <div class=\"col-sm-6\">
                            <input type=\"submit\" value=\"Save\" name=\"edit\" class=\"btn btn-primary\" />
                            <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 46
        echo $this->env->getExtension('routing')->getPath("acme_info_serviceslist");
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
        return "AcmeInfoBundle:Serviceslist:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  115 => 40,  110 => 38,  103 => 34,  98 => 32,  91 => 28,  86 => 26,  79 => 22,  74 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  39 => 4,  32 => 3,  29 => 2,);
    }
}
