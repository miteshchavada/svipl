<?php

/* AcmeHomeBundle:Default:portfolio.html.twig */
class __TwigTemplate_85f8f91f4e3dd87df4bd0daca5067c3e790a6ee51643d29a2c935c8d2c6fc0d3 extends Twig_Template
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
        echo "    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
                <h2>Portfolio</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class=\"portfolio-filter text-center\">
                <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
                <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class=\"row\">
                <div class=\"portfolio-items\">
                    <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item1.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item2.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item3.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item4.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item4.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item5.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item5.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item6.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item6.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item7.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item7.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
                        <div class=\"recent-work-wrap\">
                            <img class=\"img-responsive\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/recent/item8.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"overlay\">
                                <div class=\"recent-work-inner\">
                                    <h3><a href=\"#\">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class=\"preview\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmehome/images/portfolio/full/item8.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 118,  185 => 113,  174 => 105,  166 => 100,  155 => 92,  147 => 87,  136 => 79,  128 => 74,  117 => 66,  109 => 61,  98 => 53,  90 => 48,  79 => 40,  71 => 35,  60 => 27,  52 => 22,  31 => 3,  28 => 2,);
    }
}
