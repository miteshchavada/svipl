<?php

/* menu.html.twig */
class __TwigTemplate_b6a603d5a541e9b792fb9a17cd75bc0981f6a883284f14b8840bc05b33148df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"header\">
        <div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i>  +91 281 2577450</p></div>
                    </div>
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li> 
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
                            </ul>
                            <div class=\"search\">
                                <form role=\"form\">
                                    <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                                    <i class=\"fa fa-search\"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class=\"navbar navbar-inverse\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/logo/", 1 => $this->getAttribute($this->getContext($context, "logo"), "logo")))), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"";
        // line 42
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "acme_home")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("acme_home");
        echo "\">Home</a></li>
                        <li class=\"";
        // line 43
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "aboutus")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("aboutus");
        echo "\">About Us</a></li>
                        <li class=\"";
        // line 44
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "services")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\">Services</a></li>
                        <li class=\"";
        // line 45
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "portfolio")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("portfolio");
        echo "\">Portfolio</a></li>
                        <li class=\"dropdown ";
        // line 46
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "pricing")) ? ("active") : (""));
        echo " \">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("pricing");
        echo "\">Pricing</a></li>
                            </ul>
                        </li>
                        <li class=\"";
        // line 52
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "blog")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\">Blog</a></li> 
                        <li class=\"";
        // line 53
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "contactus")) ? ("active") : (""));
        echo " \"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contactus");
        echo "\">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
\t\t
    </header><!--/header-->";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 52,  89 => 46,  71 => 43,  19 => 1,  115 => 27,  111 => 26,  107 => 53,  103 => 24,  99 => 23,  95 => 49,  91 => 21,  86 => 20,  83 => 45,  77 => 44,  73 => 16,  69 => 15,  65 => 42,  61 => 13,  56 => 12,  53 => 11,  42 => 29,  39 => 19,  37 => 11,  33 => 10,  22 => 1,  50 => 13,  47 => 10,  41 => 9,  35 => 7,  30 => 5,  25 => 3,  20 => 1,  448 => 157,  439 => 150,  427 => 147,  423 => 146,  417 => 143,  413 => 141,  409 => 140,  397 => 130,  378 => 126,  374 => 125,  368 => 122,  363 => 119,  358 => 118,  355 => 117,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  252 => 85,  231 => 79,  227 => 78,  221 => 75,  215 => 71,  210 => 70,  207 => 69,  202 => 68,  198 => 67,  190 => 62,  186 => 61,  181 => 58,  164 => 57,  152 => 47,  133 => 43,  127 => 42,  122 => 40,  119 => 39,  102 => 38,  88 => 26,  76 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 38,  54 => 13,  45 => 11,  36 => 4,  31 => 3,  28 => 2,);
    }
}
