<?php

/* AcmeInfoBundle:Default:ourservice.html.twig */
class __TwigTemplate_4824db5be4b80de88dae56a57ee66e1ae8dccee33c20fe1fe25ceb35351996b7 extends Twig_Template
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
                <h1 class=\"page-header\">Features</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <center>
                <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
        echo "\" method=\"POST\" class=\"form-group\">
                    <div style=\"width:70%\">
                        <input type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "front"), "id"), "html", null, true);
        echo "\" name=\"id\">
                        <textarea rows=\"15\" cols=\"60\" name=\"description\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "front"), "description"), "html", null, true);
        echo "</textarea>
                    </div>            
                    <div>
                        <input type=\"submit\" name=\"submit\" value=\"save\" class=\"btn bg-primary\">
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn bg-danger\" onclick=\"javascript:window.location.href = '";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
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
            ],
            valid_elements : '*[*]'
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "AcmeInfoBundle:Default:ourservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  68 => 20,  61 => 16,  57 => 15,  52 => 13,  41 => 4,  35 => 3,  29 => 2,);
    }
}
