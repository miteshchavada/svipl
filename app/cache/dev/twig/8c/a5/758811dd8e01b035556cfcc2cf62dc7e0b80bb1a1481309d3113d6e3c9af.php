<?php

/* AcmeCategoryBundle:Default:edit.html.twig */
class __TwigTemplate_8ca5758811dd8e01b035556cfcc2cf62dc7e0b80bb1a1481309d3113d6e3c9af extends Twig_Template
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
                <h1 class=\"page-header\">Add Category</h1>
            </div>
        </div>
        <div class=\"row\">  
            <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-group\">
                    ";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 13
            echo "                        <div class=\"alert alert-danger\"> 
                            ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 17
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Name: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category Name")));
        echo "  
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Status: "));
        echo "
                        <div class=\"col-sm-1\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "status"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category Name")));
        echo "  
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Insert\" name=\"insert\" class=\"btn btn-primary\"/>
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 31
        echo $this->env->getExtension('routing')->getPath("acme_category");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeCategoryBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  85 => 26,  80 => 24,  73 => 20,  68 => 18,  65 => 17,  59 => 14,  56 => 13,  54 => 12,  48 => 11,  39 => 4,  32 => 3,  29 => 2,);
    }
}
