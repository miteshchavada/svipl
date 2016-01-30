<?php

/* ::base.html.twig */
class __TwigTemplate_4e14d69bb2515eaa82c9b841f043cac72613fa79dec73e4e4ba7e11934b3308c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SVIPL Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/plugins/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 49
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("acme_store");
            echo "\">SVIPL Admin</a>
                ";
        } else {
            // line 50
            echo "    
                    <a class=\"navbar-brand\" href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">SVIPL Admin</a>
                ";
        }
        // line 52
        echo "    
            </div>
            <!-- /.navbar-header -->
            
            <ul class=\"nav navbar-top-links navbar-right\">
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 61
            echo "                        <i class=\"fa fa-user fa-fw\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i>
                        ";
        }
        // line 63
        echo "                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><i class=\"fa fa-user fa-fw\"></i> New Registration</a>
                        </li>
                        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-user fa-fw\"></i> Change Password</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                            <i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 79
            echo "            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        ";
            // line 82
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 83
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("acme_user");
                echo "\"><i class=\"fa fa-user fa-fw\"></i>User</a></li>
                            <li><a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("acme_info_logo");
                echo "\"><i class=\"fa fa-dashboard fa-fw\"></i>Logo</a></li>
                            <li><a href=\"";
                // line 85
                echo $this->env->getExtension('routing')->getPath("acme_image");
                echo "\"><i class=\"fa fa-table fa-fw\"></i>Slider</a></li>
                            <li><a href=\"";
                // line 86
                echo $this->env->getExtension('routing')->getPath("acme_info_ourservice");
                echo "\"><i class=\"fa fa-edit fa-fw\"></i>Features</a></li>
                            <li><a href=\"";
                // line 87
                echo $this->env->getExtension('routing')->getPath("acme_info_serviceslist");
                echo "\"><i class=\"fa fa-envelope fa-fw\"></i>Recent Works</a></li>
                            <li><a href=\"";
                // line 88
                echo $this->env->getExtension('routing')->getPath("acme_info");
                echo "\"><i class=\"fa fa-sitemap fa-fw\"></i>Our Skills</a></li>
                            <li><a href=\"";
                // line 89
                echo $this->env->getExtension('routing')->getPath("acme_info_people");
                echo "\"><i class=\"fa fa-envelope fa-fw\"></i>Why people like us</a></li>
                            <li><a href=\"";
                // line 90
                echo $this->env->getExtension('routing')->getPath("acme_info_work");
                echo "\"><i class=\"fa fa-envelope fa-fw\"></i>Work</a></li>
                            <li><a href=\"";
                // line 91
                echo $this->env->getExtension('routing')->getPath("acme_info_testimonials");
                echo "\"><i class=\"fa fa-wrench fa-fw\"></i>Testimonials</a></li>
                        ";
            }
            // line 92
            echo "    
                        <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("acme_category");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i>Category</a></li>
                        <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("acme_store");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i>Store</a></li>
                        ";
            // line 95
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                echo " \t
                        <li><a href=\"";
                // line 96
                echo $this->env->getExtension('routing')->getPath("acme_info_newslist");
                echo "\"><i class=\"fa fa-files-o fa-fw\"></i>News</a></li>
                        <li><a href=\"";
                // line 97
                echo $this->env->getExtension('routing')->getPath("acme_info_contactus");
                echo "\"><i class=\"fa fa-bell fa-fw\"></i>ContactUs</a></li>
                        <li><a href=\"";
                // line 98
                echo $this->env->getExtension('routing')->getPath("acme_footer");
                echo "\"><i class=\"fa fa-bell fa-fw\"></i>Footer</a></li>
                        <li><a href=\"";
                // line 99
                echo $this->env->getExtension('routing')->getPath("acme_store_orders");
                echo "\"><i class=\"fa fa-wrench fa-fw\"></i>Orders</a></li>
                        ";
            }
            // line 100
            echo "    
                    </ul>
                </div>
            </div>
            ";
        }
        // line 104
        echo "        
        </nav>

        <div id=\"page-wrapper\">
            ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "        </div>

    </div>
    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/common.js"), "html", null, true);
        echo "\"></script>
    
    <script>
        var oTable;
        \$(document).ready(function () {
            \$('#dataTables-example').dataTable();
        });
        \$(document).ready(function () {
            oTable = \$('#dataTables-example1').dataTable();
        });
        \$(document).ready(function(){
           \$(\".btn-status\").click(function(){
                id = \$(this).attr('id');
                \$.ajax({
                    url: \"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("acme_user_status");
        echo "\",
                    type: \"POST\",
                    data: {id : id},
                    dataType: \"json\",
                    beforeSend: function(){
                        
                    },
                    success: function(result){
                        //oTable.fnDraw();
                        if(result.status == true){
                            \$(\"a#\"+result.id).removeClass(\"btn-danger\").addClass(\"btn-success\").html(\"Enable\");
                        }else{
                            \$(\"a#\"+result.id).removeClass(\"btn-success\").addClass(\"btn-danger\").html(\"Disabled\");;
                        }
                    },
                    error: function(e){
                        alert(e);
                    },
                });
           }); 
        });
        \$(document).ready(function(){
           \$(\".btn-category-status\").click(function(){
                id = \$(this).attr('id');
                \$.ajax({
                    url: \"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("category_status");
        echo "\",
                    type: \"POST\",
                    data: {id : id},
                    dataType: \"json\",
                    beforeSend: function(){
                        
                    },
                    success: function(result){
                        //oTable.fnDraw();
                        if(result.status == true){
                            \$(\"a#\"+result.id).removeClass(\"btn-danger\").addClass(\"btn-success\").html(\"Enable\");
                        }else{
                            \$(\"a#\"+result.id).removeClass(\"btn-success\").addClass(\"btn-danger\").html(\"Disabled\");;
                        }
                    },
                    error: function(e){
                        alert(e);
                    },
                });
           }); 
        });
        
        \$(document).ready(function(){
           \$(\".btn-logo-status\").click(function(){
                id = \$(this).attr('id');
                \$.ajax({
                    url: \"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("logo_status");
        echo "\",
                    type: \"POST\",
                    data: {id : id},
                    dataType: \"json\",
                    beforeSend: function(){
                        
                    },
                    success: function(result){
                        //oTable.fnDraw();
                        if(result == 1){
                            \$(\"#error\").show();
                        }
                        if(result.status == true){
                            \$(\"a#\"+result.id).removeClass(\"btn-danger\").addClass(\"btn-success\").html(\"Enable\");
                        }else{
                            \$(\"a#\"+result.id).removeClass(\"btn-success\").addClass(\"btn-danger\").html(\"Disabled\");;
                        }
                    },
                    error: function(e){
                        alert(e);
                    },
                });
           }); 
           \$(\".btn-follow-status\").click(function(){
                id = \$(this).attr('id');
                \$.ajax({
                    url: \"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("follow_status");
        echo "\",
                    type: \"POST\",
                    data: {id : id},
                    dataType: \"json\",
                    beforeSend: function(){
                        
                    },
                    success: function(result){
                        //oTable.fnDraw();
                        if(result.status == true){
                            \$(\"a#\"+result.id).removeClass(\"btn-danger\").addClass(\"btn-success\").html(\"Enable\");
                        }else{
                            \$(\"a#\"+result.id).removeClass(\"btn-success\").addClass(\"btn-danger\").html(\"Disabled\");;
                        }
                    },
                    error: function(e){
                        alert(e);
                    },
                });
           }); 
        });
        
    </script>
</body>

</html>
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 108,  387 => 217,  358 => 191,  329 => 165,  301 => 140,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  268 => 122,  263 => 120,  257 => 117,  252 => 115,  247 => 113,  241 => 109,  239 => 108,  233 => 104,  226 => 100,  221 => 99,  217 => 98,  213 => 97,  209 => 96,  205 => 95,  201 => 94,  197 => 93,  194 => 92,  189 => 91,  185 => 90,  181 => 89,  177 => 88,  173 => 87,  169 => 86,  165 => 85,  161 => 84,  156 => 83,  154 => 82,  149 => 79,  147 => 78,  138 => 72,  132 => 69,  127 => 67,  122 => 65,  118 => 63,  112 => 61,  110 => 60,  95 => 51,  86 => 49,  84 => 48,  57 => 24,  51 => 21,  45 => 18,  40 => 16,  36 => 15,  20 => 1,  125 => 42,  108 => 39,  104 => 38,  100 => 52,  96 => 36,  92 => 50,  88 => 34,  85 => 33,  68 => 32,  38 => 4,  32 => 3,  29 => 2,);
    }
}
