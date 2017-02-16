<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ab98df496440a96b6528eaa31c2671993117bab2ea420d20092b74cd338eb027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52313fc809ecbf9a1e0f4bb68328f305d4b9f6a1ffec5389048d8c71456e0ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52313fc809ecbf9a1e0f4bb68328f305d4b9f6a1ffec5389048d8c71456e0ee8->enter($__internal_52313fc809ecbf9a1e0f4bb68328f305d4b9f6a1ffec5389048d8c71456e0ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class=\"mainmenu-wrapper\">
            <div class=\"container\">
                <div class=\"menuextras\">
                    <div class=\"extras\">
                        <ul>
                            <li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"page-shopping-cart.html\"><b>3 items</b></a></li>
                            <li>
                                <div class=\"dropdown choose-country\">
                                    <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"Great Britain\"> UK</a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/us.png"), "html", null, true);
        echo "\" alt=\"United States\"> US</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/de.png"), "html", null, true);
        echo "\" alt=\"Germany\"> DE</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/es.png"), "html", null, true);
        echo "\" alt=\"Spain\"> ES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
        echo "\">Login</a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register");
        echo "\">Register</a></li>
                        </ul>
                    </div>
                </div>
                <nav id=\"mainmenu\" class=\"mainmenu\">
                    <ul>
                        <li class=\"logo-wrapper\"><a href=\"home.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mPurpose-logo.png"), "html", null, true);
        echo "\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
                        <li class=\"active\">
                            <a href=\"home.html\">Home</a>
                        </li>
                        <li class=\"active\">
                        <a href=\"page-about-us.html\">About Us</a>
                        </li>
                        <li class=\"active\">
                        <a href=\"page-contact-us.html\">Contact Us</a>
                        </li>
                        <!-- < -->
                    </ul>
                </nav>
            </div>
        </div>

";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "

 <!-- Footer -->
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Our Latest Work</h3>
                        <div class=\"portfolio-item\">
                            <div class=\"portfolio-image\">
                                <a href=\"page-portfolio-item.html\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio6.jpg"), "html", null, true);
        echo "\" alt=\"Project Name\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Navigate</h3>
                        <ul class=\"no-list-style footer-navigate-section\">
                            <li><a href=\"page-blog-posts.html\">Blog</a></li>
                            <li><a href=\"page-portfolio-3-columns-2.html\">Portfolio</a></li>
                            <li><a href=\"page-products-3-columns.html\">eShop</a></li>
                            <li><a href=\"page-services-3-columns.html\">Services</a></li>
                            <li><a href=\"page-pricing.html\">Pricing</a></li>
                            <li><a href=\"page-faq.html\">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div class=\"col-footer col-md-4 col-xs-6\">
                        <h3>Contacts</h3>
                        <p class=\"contact-us-details\">
                            <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                            <b>Phone:</b> +44 123 654321<br/>
                            <b>Fax:</b> +44 123 654321<br/>
                            <b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
                        </p>
                    </div>
                    <div class=\"col-footer col-md-2 col-xs-6\">
                        <h3>Stay Connected</h3>
                        <ul class=\"footer-stay-connected no-list-style\">
                            <li><a href=\"#\" class=\"facebook\"></a></li>
                            <li><a href=\"#\" class=\"twitter\"></a></li>
                            <li><a href=\"#\" class=\"googleplus\"></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"footer-copyright\">&copy; 2013 mPurpose. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "
    </body>
</html>";
        
        $__internal_52313fc809ecbf9a1e0f4bb68328f305d4b9f6a1ffec5389048d8c71456e0ee8->leave($__internal_52313fc809ecbf9a1e0f4bb68328f305d4b9f6a1ffec5389048d8c71456e0ee8_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9aa91799cd11ad40806bba702557f9a62b02ca11f2e91b47b64e89e49fc834e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa91799cd11ad40806bba702557f9a62b02ca11f2e91b47b64e89e49fc834e6->enter($__internal_9aa91799cd11ad40806bba702557f9a62b02ca11f2e91b47b64e89e49fc834e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icomoon-social.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/leaflet.css"), "html", null, true);
        echo "\" />
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"css/leaflet.ie.css\" />
        <![endif]-->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_9aa91799cd11ad40806bba702557f9a62b02ca11f2e91b47b64e89e49fc834e6->leave($__internal_9aa91799cd11ad40806bba702557f9a62b02ca11f2e91b47b64e89e49fc834e6_prof);

    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c95a55deb52fef23badf8ab138f703365ddf453ccf7d21a1fb7b928b73e3a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c95a55deb52fef23badf8ab138f703365ddf453ccf7d21a1fb7b928b73e3a31->enter($__internal_9c95a55deb52fef23badf8ab138f703365ddf453ccf7d21a1fb7b928b73e3a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 74
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9c95a55deb52fef23badf8ab138f703365ddf453ccf7d21a1fb7b928b73e3a31->leave($__internal_9c95a55deb52fef23badf8ab138f703365ddf453ccf7d21a1fb7b928b73e3a31_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_397bcb9cb350ad1c3df16b77eebff176d2c70489c91f8771115e30ceedb20add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397bcb9cb350ad1c3df16b77eebff176d2c70489c91f8771115e30ceedb20add->enter($__internal_397bcb9cb350ad1c3df16b77eebff176d2c70489c91f8771115e30ceedb20add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_397bcb9cb350ad1c3df16b77eebff176d2c70489c91f8771115e30ceedb20add->leave($__internal_397bcb9cb350ad1c3df16b77eebff176d2c70489c91f8771115e30ceedb20add_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cdaa50f50257e982c517bfd5e59da598b95e8346a499eaab198666abf8c8347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdaa50f50257e982c517bfd5e59da598b95e8346a499eaab198666abf8c8347->enter($__internal_6cdaa50f50257e982c517bfd5e59da598b95e8346a499eaab198666abf8c8347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6cdaa50f50257e982c517bfd5e59da598b95e8346a499eaab198666abf8c8347->leave($__internal_6cdaa50f50257e982c517bfd5e59da598b95e8346a499eaab198666abf8c8347_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 139,  276 => 138,  272 => 137,  268 => 136,  264 => 135,  259 => 133,  255 => 132,  249 => 130,  243 => 129,  225 => 74,  219 => 73,  210 => 22,  203 => 18,  197 => 15,  193 => 14,  185 => 13,  176 => 141,  174 => 129,  128 => 86,  116 => 76,  114 => 73,  95 => 57,  86 => 51,  82 => 50,  75 => 46,  71 => 45,  67 => 44,  62 => 42,  42 => 24,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        {% block stylesheets %}    
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/icomoon-social.css') }}\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/leaflet.css') }}\" />
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"css/leaflet.ie.css\" />
        <![endif]-->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
        {% endblock %}

        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class=\"mainmenu-wrapper\">
            <div class=\"container\">
                <div class=\"menuextras\">
                    <div class=\"extras\">
                        <ul>
                            <li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"page-shopping-cart.html\"><b>3 items</b></a></li>
                            <li>
                                <div class=\"dropdown choose-country\">
                                    <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"{{ asset('assets/img/flags/gb.png') }}\" alt=\"Great Britain\"> UK</a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/us.png') }}\" alt=\"United States\"> US</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/de.png') }}\" alt=\"Germany\"> DE</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/es.png') }}\" alt=\"Spain\"> ES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"{{ url('fos_user_security_login')}}\">Login</a></li>
                            <li><a href=\"{{ url('fos_user_registration_register') }}\">Register</a></li>
                        </ul>
                    </div>
                </div>
                <nav id=\"mainmenu\" class=\"mainmenu\">
                    <ul>
                        <li class=\"logo-wrapper\"><a href=\"home.html\"><img src=\"{{ asset('assets/img/mPurpose-logo.png') }}\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
                        <li class=\"active\">
                            <a href=\"home.html\">Home</a>
                        </li>
                        <li class=\"active\">
                        <a href=\"page-about-us.html\">About Us</a>
                        </li>
                        <li class=\"active\">
                        <a href=\"page-contact-us.html\">Contact Us</a>
                        </li>
                        <!-- < -->
                    </ul>
                </nav>
            </div>
        </div>

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}


 <!-- Footer -->
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Our Latest Work</h3>
                        <div class=\"portfolio-item\">
                            <div class=\"portfolio-image\">
                                <a href=\"page-portfolio-item.html\"><img src=\"{{ asset('assets/img/portfolio6.jpg') }}\" alt=\"Project Name\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Navigate</h3>
                        <ul class=\"no-list-style footer-navigate-section\">
                            <li><a href=\"page-blog-posts.html\">Blog</a></li>
                            <li><a href=\"page-portfolio-3-columns-2.html\">Portfolio</a></li>
                            <li><a href=\"page-products-3-columns.html\">eShop</a></li>
                            <li><a href=\"page-services-3-columns.html\">Services</a></li>
                            <li><a href=\"page-pricing.html\">Pricing</a></li>
                            <li><a href=\"page-faq.html\">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div class=\"col-footer col-md-4 col-xs-6\">
                        <h3>Contacts</h3>
                        <p class=\"contact-us-details\">
                            <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                            <b>Phone:</b> +44 123 654321<br/>
                            <b>Fax:</b> +44 123 654321<br/>
                            <b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
                        </p>
                    </div>
                    <div class=\"col-footer col-md-2 col-xs-6\">
                        <h3>Stay Connected</h3>
                        <ul class=\"footer-stay-connected no-list-style\">
                            <li><a href=\"#\" class=\"facebook\"></a></li>
                            <li><a href=\"#\" class=\"twitter\"></a></li>
                            <li><a href=\"#\" class=\"googleplus\"></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"footer-copyright\">&copy; 2013 mPurpose. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascripts -->
        {% block javascripts %}
        <script src=\"{{ asset('assets/js/modernizr-2.6.2-respond-1.1.0.min.js') }}\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"{{ asset('assets/js/jquery-1.9.1.min.js') }}\"><\\/script>')</script>
        <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"{{ asset('assets/js/jquery.fitvids.js') }}\"></script>
        <script src=\"{{ asset('assets/js/jquery.sequence-min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/jquery.bxslider.js') }}\"></script>
        <script src=\"{{ asset('assets/js/main-menu.js') }}\"></script>
        <script src=\"{{ asset('assets/js/template.js') }}\"></script>
        {% endblock %}

    </body>
</html>", "@FOSUser/layout.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
