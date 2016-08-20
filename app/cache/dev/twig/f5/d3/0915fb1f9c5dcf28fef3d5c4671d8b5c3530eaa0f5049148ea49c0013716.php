<?php

/* AcmeInfoBundle:Default:edit.html.twig */
class __TwigTemplate_f5d30915fb1f9c5dcf28fef3d5c4671d8b5c3530eaa0f5049148ea49c0013716 extends Twig_Template
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
                <h1 class=\"page-header\">Info Edit Form</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acme_info_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-group\">
                    ";
        // line 14
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "valid"))) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">     
                        ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
            echo "
                        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "percentage"), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 20
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Title: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "percentage"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Percentage: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "percentage"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Save\" name=\"insert\" class=\"btn btn-primary\"/>
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 34
        echo $this->env->getExtension('routing')->getPath("acme_info");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  91 => 29,  86 => 27,  79 => 23,  74 => 21,  71 => 20,  65 => 17,  61 => 16,  58 => 15,  56 => 14,  50 => 13,  39 => 4,  32 => 3,  29 => 2,);
    }
}
