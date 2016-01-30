<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_de2ff9f178c166eb3b1a6bc28343723f8332fd623474890ce0bb85d5a53087b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t<!-- Bootstrap Core CSS -->
\t    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- MetisMenu CSS -->
\t    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- Custom CSS -->
\t    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- Custom Fonts -->
\t    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    
    <body>
        <div>
            ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 26
            echo "                
            ";
        }
        // line 28
        echo "        </div>

        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashBag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div>
            ";
        // line 39
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "        </div>
\t\t <!-- jQuery Version 1.11.0 -->
\t    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Bootstrap Core JavaScript -->
\t    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Metis Menu Plugin JavaScript -->
\t    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Custom Theme JavaScript -->
\t    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmeuser/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    </body>

</html>
";
    }

    // line 39
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  144 => 39,  135 => 52,  129 => 49,  123 => 46,  117 => 43,  113 => 41,  111 => 39,  107 => 37,  101 => 36,  92 => 33,  87 => 32,  82 => 31,  78 => 30,  74 => 28,  70 => 26,  55 => 21,  39 => 12,  33 => 9,  27 => 6,  20 => 1,  84 => 33,  71 => 23,  64 => 23,  60 => 22,  53 => 20,  47 => 13,  45 => 15,  41 => 11,  31 => 3,  28 => 2,);
    }
}
