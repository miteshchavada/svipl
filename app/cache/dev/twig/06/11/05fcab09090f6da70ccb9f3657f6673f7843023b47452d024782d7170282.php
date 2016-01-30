<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_061105fcab09090f6da70ccb9f3657f6673f7843023b47452d024782d7170282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t        ";
        // line 12
        if ($this->getContext($context, "error")) {
            // line 13
            echo "\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 15
        echo "\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />
                            <fieldset>
                                <div class=\"form-group\">
\t\t\t\t    <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
                                    <!--input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus-->
                                </div>
                                <div class=\"form-group\">
\t\t\t\t    <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
                                    <!--input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\"-->
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"on\" id=\"remember_me\">Remember Me
                                    </label>
                                </div>    
                                <!-- Change this to a button or input when using this as a form -->
\t\t\t\t<input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  71 => 23,  64 => 19,  60 => 18,  53 => 15,  47 => 13,  45 => 12,  41 => 11,  31 => 3,  28 => 2,);
    }
}
