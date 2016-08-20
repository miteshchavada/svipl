<?php

/* AcmeHomeBundle:Default:services.html.twig */
class __TwigTemplate_643efa1f44589fc507bd7427da2d5e241c95a0b014ac9c9bdb21322509b57d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::front.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <section id=\"feature\" class=\"transparent-bg\">
        <div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Our Services</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-bullhorn\"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-comments\"></i>
                            <h2>Retina ready</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-cloud-download\"></i>
                            <h2>Easy to customize</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-leaf\"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-cogs\"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-heart\"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row--> 


            <div class=\"get-started center wow fadeInDown\">
                <h2>Ready to get started</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                <div class=\"request\">
                    <h4><a href=\"#\">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->

            <div class=\"clients-area center wow fadeInDown\">
                <h2>What our client says</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/client1.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/client2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
                <div class=\"col-md-4 wow fadeInDown\">
                    <div class=\"clients-comments text-center\">
                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/client3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"\">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                    </div>
                </div>
            </div>

        </div><!--/.container-->
    </section><!--/#feature-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 93,  119 => 86,  109 => 79,  31 => 3,  28 => 2,);
    }
}
