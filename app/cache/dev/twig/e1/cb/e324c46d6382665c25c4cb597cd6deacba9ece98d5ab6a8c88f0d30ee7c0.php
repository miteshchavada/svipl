<?php

/* AcmeHomeBundle:Default:contactus.html.twig */
class __TwigTemplate_e1cbe324c46d6382665c25c4cb597cd6deacba9ece98d5ab6a8c88f0d30ee7c0 extends Twig_Template
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
        echo "    <section id=\"contact-info\">
        <div class=\"center\">                
            <h2>How to Reach Us?</h2>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.4097071287015!2d70.76953231406534!3d22.30033974853089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca27f44eb8bd%3A0x3c58c28d4bbdd5b4!2sSiddhivinayak+Infocom+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1447938879695\"></iframe>
                        </div>
                    </div>
                    ";
        // line 16
        echo (isset($context["contactus"]) ? $context["contactus"] : $this->getContext($context, "contactus"));
        echo "
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Drop Your Message</h2>
                <p class=\"lead\">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
                <div class=\"status alert alert-success\" style=\"display: none\"></div>
                <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"\">
                    <div class=\"col-sm-5 col-sm-offset-1\">
                        <div class=\"form-group\">
                            <label>Name *</label>
                            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Email *</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <label>Phone *</label>
                            <input type=\"text\" class=\"form-control\" name=\"phone\">
                        </div>
                        <div class=\"form-group\">
                            <label>Company Name *</label>
                            <input type=\"text\" class=\"form-control\" name=\"company\">
                        </div>                        
                    </div>
                    <div class=\"col-sm-5\">
                        <div class=\"form-group\">
                            <label>Subject *</label>
                            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\" name=\"subject\">
                        </div>
                        <div class=\"form-group\">
                            <label>Message *</label>
                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                        </div>                        
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <script type=\"text/javascript\"> Cufon.now();</script>
    <script>
        \$(document).ready(function () {
            tabs.init();
        })
        function a() {
            var name = document.forms[\"myForm\"][\"name\"].value;
            var city = document.forms[\"myForm\"][\"city\"].value;
            var email = document.forms[\"myForm\"][\"email\"].value;
            var filter = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
            var description = document.forms[\"myForm\"][\"description\"].value;
            if (name == null || name == \"\") {
                alert(\"First name must be filled out\");
                return false;
            }
            if (city == null || city == \"\") {
                alert(\"City must be filled out\");
                return false;
            }
            if (email == null || email == \"\") {
                alert(\"Email must be filled out\");
                return false;

            }
            if (description == null || description == \"\") {
                alert(\"Description must be filled out\");
                return false;
            }
            if (!filter.test(email)) {
                alert('Please provide a valid email address');
                document.forms[\"myForm\"][\"email\"].focus;
                return false;
            }
            document.getElementById('ContactForm').submit();
        }

        function r() {

        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 164,  313 => 163,  301 => 160,  297 => 159,  195 => 137,  178 => 55,  174 => 105,  155 => 42,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  206 => 21,  194 => 18,  172 => 12,  150 => 6,  134 => 110,  90 => 48,  448 => 157,  439 => 150,  417 => 143,  397 => 130,  378 => 126,  363 => 119,  358 => 118,  350 => 116,  345 => 115,  328 => 114,  321 => 109,  307 => 108,  299 => 106,  291 => 104,  271 => 102,  231 => 79,  215 => 24,  207 => 141,  202 => 20,  190 => 17,  186 => 57,  76 => 21,  380 => 293,  372 => 288,  361 => 280,  353 => 275,  342 => 267,  334 => 262,  323 => 254,  315 => 249,  304 => 241,  296 => 236,  277 => 223,  266 => 215,  239 => 197,  210 => 22,  124 => 41,  137 => 49,  81 => 24,  104 => 57,  152 => 47,  97 => 30,  126 => 54,  77 => 25,  65 => 21,  58 => 18,  422 => 109,  391 => 218,  333 => 166,  288 => 103,  284 => 126,  280 => 125,  276 => 124,  272 => 123,  267 => 121,  261 => 118,  256 => 116,  251 => 114,  245 => 110,  237 => 105,  225 => 100,  213 => 143,  205 => 95,  198 => 62,  185 => 113,  181 => 58,  161 => 123,  127 => 42,  118 => 99,  100 => 56,  165 => 85,  114 => 36,  110 => 64,  84 => 24,  23 => 2,  34 => 8,  129 => 93,  113 => 37,  70 => 14,  53 => 16,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 147,  423 => 146,  413 => 141,  409 => 140,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 125,  368 => 122,  365 => 111,  362 => 192,  360 => 109,  355 => 117,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 162,  305 => 161,  298 => 91,  294 => 90,  285 => 228,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 85,  247 => 202,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 125,  140 => 55,  132 => 47,  128 => 74,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 167,  240 => 86,  238 => 85,  235 => 74,  230 => 79,  227 => 78,  224 => 71,  221 => 75,  219 => 76,  217 => 98,  208 => 68,  204 => 140,  179 => 69,  159 => 9,  143 => 56,  135 => 49,  119 => 39,  102 => 38,  71 => 35,  67 => 22,  63 => 15,  59 => 47,  87 => 25,  38 => 8,  26 => 2,  94 => 29,  89 => 57,  85 => 28,  75 => 21,  68 => 19,  56 => 17,  201 => 94,  196 => 90,  183 => 82,  171 => 61,  166 => 124,  163 => 62,  158 => 43,  156 => 121,  151 => 119,  142 => 79,  138 => 57,  136 => 40,  121 => 20,  117 => 66,  105 => 33,  91 => 29,  62 => 20,  49 => 43,  31 => 3,  28 => 2,  24 => 6,  25 => 3,  21 => 2,  19 => 1,  93 => 29,  88 => 26,  78 => 30,  46 => 16,  44 => 12,  27 => 4,  79 => 40,  72 => 23,  69 => 19,  47 => 12,  40 => 9,  37 => 10,  22 => 2,  246 => 294,  157 => 56,  145 => 54,  139 => 45,  131 => 70,  123 => 43,  120 => 41,  115 => 61,  111 => 37,  108 => 35,  101 => 61,  98 => 53,  96 => 29,  83 => 28,  74 => 24,  66 => 13,  55 => 9,  52 => 22,  50 => 13,  43 => 13,  41 => 9,  35 => 7,  32 => 3,  29 => 6,  209 => 96,  203 => 78,  199 => 67,  193 => 118,  189 => 135,  187 => 134,  182 => 56,  176 => 13,  173 => 87,  168 => 48,  164 => 10,  162 => 44,  154 => 59,  149 => 54,  147 => 118,  144 => 80,  141 => 115,  133 => 43,  130 => 109,  125 => 69,  122 => 35,  116 => 66,  112 => 35,  109 => 61,  106 => 35,  103 => 17,  99 => 31,  95 => 53,  92 => 50,  86 => 56,  82 => 23,  80 => 26,  73 => 19,  64 => 28,  60 => 27,  57 => 15,  54 => 13,  51 => 12,  48 => 15,  45 => 14,  42 => 8,  39 => 35,  36 => 15,  33 => 3,  30 => 5,);
    }
}
