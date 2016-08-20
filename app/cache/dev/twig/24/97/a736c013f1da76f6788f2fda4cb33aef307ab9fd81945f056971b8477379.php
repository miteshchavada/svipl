<?php

/* AcmeFooterBundle:Default:address.html.twig */
class __TwigTemplate_2497a736c013f1da76f6788f2fda4cb33aef307ab9fd81945f056971b8477379 extends Twig_Template
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
                <h1 class=\"page-header\">Address</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                &nbsp;
                <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("acme_footer_followus");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Follow Us</button></a></div>
                <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("acme_footer_address");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Address</button></a></div>
                <div style=\"float:left; margin-top:-15px;\" class=\"panel-heading\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("acme_footer_whyus");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm\">Add Why Us?</button></a></div>
            </div>
            <center>
                <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_footer_address");
        echo "\" method=\"POST\" class=\"form-group\">
                    <div style=\"width:70%\">
                        <textarea rows=\"15\" cols=\"60\" name=\"description\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "contents"), "html", null, true);
        echo "</textarea>
                    </div>            
                    <div>
                        <input type=\"submit\" name=\"submit\" value=\"save\" class=\"btn bg-primary\">
                        <input type=\"reset\" name=\"Reset\" value=\"Reset\" class=\"btn bg-danger\" onclick=\"javascript:window.location.href = '";
        // line 26
        echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
        echo "'\"/>
                    </div>
                </form>
            </center>\t\t\t
        </div>
        </div>            
    <script type=\"text/javascript\" src=\"";
        // line 32
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
        return "AcmeFooterBundle:Default:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  80 => 26,  73 => 22,  68 => 20,  62 => 17,  58 => 16,  54 => 15,  41 => 4,  35 => 3,  29 => 2,);
    }
}
