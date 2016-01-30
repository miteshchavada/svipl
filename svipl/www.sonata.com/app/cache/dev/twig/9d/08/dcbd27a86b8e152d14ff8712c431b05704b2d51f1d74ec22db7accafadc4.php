<?php

/* ::front.html.twig */
class __TwigTemplate_9d08dcbd27a86b8e152d14ff8712c431b05704b2d51f1d74ec22db7accafadc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "
<body class=\"homepage\">
    ";
        // line 3
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
    
    ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == "acme_home")) {
            echo "    
    
        ";
            // line 7
            echo twig_include($this->env, $context, "slider.html.twig");
            echo "
        
    ";
        }
        // line 9
        echo "    
    
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
</body>

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  47 => 12,  41 => 9,  35 => 7,  30 => 5,  25 => 3,  20 => 1,  448 => 157,  439 => 150,  427 => 147,  423 => 146,  417 => 143,  413 => 141,  409 => 140,  397 => 130,  378 => 126,  374 => 125,  368 => 122,  363 => 119,  358 => 118,  355 => 117,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  288 => 103,  271 => 102,  252 => 85,  231 => 79,  227 => 78,  221 => 75,  215 => 71,  210 => 70,  207 => 69,  202 => 68,  198 => 67,  190 => 62,  186 => 61,  181 => 58,  164 => 57,  152 => 47,  133 => 43,  127 => 42,  122 => 40,  119 => 39,  102 => 38,  88 => 26,  76 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 11,  54 => 13,  45 => 11,  36 => 4,  31 => 3,  28 => 2,);
    }
}
