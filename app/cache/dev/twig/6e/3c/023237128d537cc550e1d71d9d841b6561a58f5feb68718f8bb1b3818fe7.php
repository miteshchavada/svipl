<?php

/* AcmeInfoBundle:Default:contactus.html.twig */
class __TwigTemplate_6e3c023237128d537cc550e1d71d9d841b6561a58f5feb68718f8bb1b3818fe7 extends Twig_Template
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
                <h1 class=\"page-header\">ContactUs Details</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("acme_info_contactus");
        echo "\" method=\"POST\">
                    <div style=\"width:70%\">
                        <input type=\"hidden\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contactus"), "id"), "html", null, true);
        echo "\" name=\"id\">
                        <textarea rows=\"15\" cols=\"60\" name=\"description\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contactus"), "description"), "html", null, true);
        echo "</textarea>
                        <!--textarea class=\"tinymce\"><p name=\"description\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contactus"), "description"), "html", null, true);
        echo "</p></textarea-->
                    </div>            
                    <div>
                        <input type=\"submit\" name=\"submit\" value=\"save\" class=\"btn btn-primary\">
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn btn-danger\" onclick=\"javascript:window.location.href = '";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_info_contactus");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            tinymce.init({
                selector: \"textarea\",
                theme: \"modern\",
                plugins: [
                    \"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
                    \"searchreplace wordcount visualblocks visualchars code fullscreen\",
                    \"insertdatetime media nonbreaking save table contextmenu directionality\",
                    \"emoticons template paste textcolor colorpicker textpattern\"
                ],
                toolbar1: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\",
                toolbar2: \"print preview media | forecolor backcolor emoticons\",
                image_advtab: true,
                templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
                ]
            });
        </script>

    ";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  71 => 20,  64 => 16,  60 => 15,  56 => 14,  51 => 12,  41 => 4,  35 => 3,  29 => 2,);
    }
}
