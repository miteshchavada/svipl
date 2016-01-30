<?php

/* AcmeTeamBundle:Default:edit.html.twig */
class __TwigTemplate_ccfd0d1a07a370e1c4bae007f9377e4ec8612b383161c32bfd1c284e2ef33c7a extends Twig_Template
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
                <h1 class=\"page-header\">Edit Team</h1>
            </div>
        </div>
        <div class=\"row\">  
            <center>
                <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_team", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
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
                            ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "designation"), 'errors');
            echo "
                            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "skills"), 'errors');
            echo "
                            ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
            echo "
                            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "facebook"), 'errors');
            echo "
                            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "twitter"), 'errors');
            echo "
                            ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "gmail"), 'errors');
            echo "
                            ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 24
        echo "                    <div class=\"form-group col-lg-12\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Name: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "  
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "designation"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Designation: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "designation"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Designation")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-16\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "skills"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Skills: "));
        echo "
                        <div class=\"col-lg-5\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "skills"), 'widget', array("attr" => array("class" => "", "placeholder" => "Skills")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "facebook"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Facebook: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "facebook"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Facebook")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "twitter"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Twitter: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "twitter"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Twitter")));
        echo "
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "gmail"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Gmail: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "gmail"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Gmail")));
        echo "
                        </div>
                    </div>   
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-2\">
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget', array("attr" => array("class" => "btn btn-default btn-file")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Image: "));
        echo "
                        <div class=\"col-sm-1\">
                            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/team/", 1 => $this->getContext($context, "id"), 2 => "/", 3 => $this->getContext($context, "image")))), "html", null, true);
        echo "\" style=\"width:80px; height: 50px;\" />
                        </div>
                    </div>    
                    <div class=\"form-group col-lg-12\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Description: "));
        echo "
                        <div class=\"col-sm-10\">
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                        </div>
                    </div>       
                    <div class=\"form-group col-lg-6\">
                        <input type=\"submit\" formnovalidate value=\"Insert\" name=\"insert\" class=\"btn btn-primary\"/>
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 80
        echo $this->env->getExtension('routing')->getPath("acme_team");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "AcmeTeamBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 80,  197 => 75,  192 => 73,  185 => 69,  180 => 67,  173 => 63,  168 => 61,  161 => 57,  156 => 55,  149 => 51,  144 => 49,  137 => 45,  132 => 43,  125 => 39,  120 => 37,  113 => 33,  108 => 31,  101 => 27,  96 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  48 => 11,  39 => 4,  32 => 3,  29 => 2,);
    }
}
