<?php

/* contact-us.html.twig */
class __TwigTemplate_ea3c4afa6e5787b0bac278e8d01802a59c89aad84df8c617c63ebd15bf24ff0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15054873efa78c41b4f8c3ac34b9b404d0a2b0f344fe78fe30fa0b6a0fce05a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15054873efa78c41b4f8c3ac34b9b404d0a2b0f344fe78fe30fa0b6a0fce05a8->enter($__internal_15054873efa78c41b4f8c3ac34b9b404d0a2b0f344fe78fe30fa0b6a0fce05a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact-us.html.twig"));

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
\t        <div class=\"container\">
\t        \t<div class=\"menuextras\">
\t\t\t\t\t<div class=\"extras\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"page-shopping-cart.html\"><b>3 items</b></a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown choose-country\">
\t\t\t\t\t\t\t\t\t<a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"Great Britain\"> UK</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/us.png"), "html", null, true);
        echo "\" alt=\"United States\"> US</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/de.png"), "html", null, true);
        echo "\" alt=\"Germany\"> DE</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/es.png"), "html", null, true);
        echo "\" alt=\"Spain\"> ES</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t        \t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
        echo "\">Login</a></li>
\t\t\t        \t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register");
        echo "\">Register</a></li>
\t\t\t        \t</ul>
\t\t\t\t\t</div>
\t\t        </div>
\t\t        <nav id=\"mainmenu\" class=\"mainmenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"logo-wrapper\"><a href=\"home.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mPurpose-logo.png"), "html", null, true);
        echo "\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t\t<!-- < -->
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
        <!-- Page Title -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h1>Contact Us</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-sm-7\">
\t        \t\t\t<!-- Map -->
\t        \t\t\t<div id=\"contact-us-map\">

\t        \t\t\t</div>
\t        \t\t\t<!-- End Map -->
\t        \t\t\t<!-- Contact Info -->
\t        \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
\t        \t\t\t\t<b>Phone:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Fax:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
\t        \t\t\t</p>
\t        \t\t\t<!-- End Contact Info -->
\t        \t\t</div>
\t        \t\t<div class=\"col-sm-5\">
\t        \t\t\t<!-- Contact Form -->
\t        \t\t\t<h3>Send Us a Message</h3>
\t        \t\t\t<div class=\"contact-form-wrapper\">
\t\t        \t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t        \t\t\t\t <div class=\"form-group\">
\t\t        \t\t\t\t \t<label for=\"Name\" class=\"col-sm-3 control-label\"><b>Your name</b></label>
\t\t        \t\t\t\t \t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"Name\" type=\"text\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-email\" class=\"col-sm-3 control-label\"><b>Your Email</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"contact-email\" type=\"text\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-message\" class=\"col-sm-3 control-label\"><b>Select Topic</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"prependedInput\">
\t\t\t\t\t\t\t\t\t\t\t<option>Please select topic...</option>
\t\t\t\t\t\t\t\t\t\t\t<option>General</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Services</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Orders</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-message\" class=\"col-sm-3 control-label\"><b>Message</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"contact-message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn pull-right\">Send</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t        \t\t\t</form>
\t\t        \t\t</div>
\t\t        \t\t<!-- End Contact Info -->
\t        \t\t</div>
\t        \t</div>
\t    \t</div>
\t    </div>

  <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Our Latest Work</h3>
\t\t    \t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<a href=\"page-portfolio-item.html\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/portfolio6.jpg"), "html", null, true);
        echo "\" alt=\"Project Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Navigate</h3>
\t\t    \t\t\t<ul class=\"no-list-style footer-navigate-section\">
\t\t    \t\t\t\t<li><a href=\"page-blog-posts.html\">Blog</a></li>
\t\t    \t\t\t\t<li><a href=\"page-portfolio-3-columns-2.html\">Portfolio</a></li>
\t\t    \t\t\t\t<li><a href=\"page-products-3-columns.html\">eShop</a></li>
\t\t    \t\t\t\t<li><a href=\"page-services-3-columns.html\">Services</a></li>
\t\t    \t\t\t\t<li><a href=\"page-pricing.html\">Pricing</a></li>
\t\t    \t\t\t\t<li><a href=\"page-faq.html\">FAQ</a></li>
\t\t    \t\t\t</ul>
\t\t    \t\t</div>
\t\t    \t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Contacts</h3>
\t\t    \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
\t        \t\t\t\t<b>Phone:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Fax:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
\t        \t\t\t</p>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-2 col-xs-6\">
\t\t    \t\t\t<h3>Stay Connected</h3>
\t\t    \t\t\t<ul class=\"footer-stay-connected no-list-style\">
\t\t    \t\t\t\t<li><a href=\"#\" class=\"facebook\"></a></li>
\t\t    \t\t\t\t<li><a href=\"#\" class=\"twitter\"></a></li>
\t\t    \t\t\t\t<li><a href=\"#\" class=\"googleplus\"></a></li>
\t\t    \t\t\t</ul>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-md-12\">
\t\t    \t\t\t<div class=\"footer-copyright\">&copy; 2013 mPurpose. All rights reserved.</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t    </div>

        <!-- Javascripts -->
        ";
        // line 199
        $this->displayBlock('javascripts', $context, $blocks);
        // line 213
        echo "
    </body>
</html>";
        
        $__internal_15054873efa78c41b4f8c3ac34b9b404d0a2b0f344fe78fe30fa0b6a0fce05a8->leave($__internal_15054873efa78c41b4f8c3ac34b9b404d0a2b0f344fe78fe30fa0b6a0fce05a8_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ae94c9a5723eac442a5d8c5a04859970fe220a8b9f43870ad11f657c6f518fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae94c9a5723eac442a5d8c5a04859970fe220a8b9f43870ad11f657c6f518fa->enter($__internal_5ae94c9a5723eac442a5d8c5a04859970fe220a8b9f43870ad11f657c6f518fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
\t\t<!--[if lte IE 8]>
\t\t    <link rel=\"stylesheet\" href=\"css/leaflet.ie.css\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_5ae94c9a5723eac442a5d8c5a04859970fe220a8b9f43870ad11f657c6f518fa->leave($__internal_5ae94c9a5723eac442a5d8c5a04859970fe220a8b9f43870ad11f657c6f518fa_prof);

    }

    // line 199
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_435b63af9ad2de50a123f28239d0290f6a5bd441e49aae1eff5f28ab811f349c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435b63af9ad2de50a123f28239d0290f6a5bd441e49aae1eff5f28ab811f349c->enter($__internal_435b63af9ad2de50a123f28239d0290f6a5bd441e49aae1eff5f28ab811f349c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 200
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_435b63af9ad2de50a123f28239d0290f6a5bd441e49aae1eff5f28ab811f349c->leave($__internal_435b63af9ad2de50a123f28239d0290f6a5bd441e49aae1eff5f28ab811f349c_prof);

    }

    public function getTemplateName()
    {
        return "contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 211,  332 => 209,  328 => 208,  324 => 207,  320 => 206,  316 => 205,  311 => 203,  307 => 202,  301 => 200,  295 => 199,  286 => 22,  279 => 18,  273 => 15,  269 => 14,  261 => 13,  252 => 213,  250 => 199,  204 => 156,  110 => 65,  104 => 62,  98 => 59,  93 => 57,  84 => 51,  80 => 50,  73 => 46,  69 => 45,  65 => 44,  60 => 42,  40 => 24,  38 => 13,  24 => 1,);
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
\t\t<!--[if lte IE 8]>
\t\t    <link rel=\"stylesheet\" href=\"css/leaflet.ie.css\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
        {% endblock %}

        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

       <!-- Navigation & Logo-->
        <div class=\"mainmenu-wrapper\">
\t        <div class=\"container\">
\t        \t<div class=\"menuextras\">
\t\t\t\t\t<div class=\"extras\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"page-shopping-cart.html\"><b>3 items</b></a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown choose-country\">
\t\t\t\t\t\t\t\t\t<a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"{{ asset('assets/img/flags/gb.png') }}\" alt=\"Great Britain\"> UK</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/us.png') }}\" alt=\"United States\"> US</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/de.png') }}\" alt=\"Germany\"> DE</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"{{ asset('assets/img/flags/es.png') }}\" alt=\"Spain\"> ES</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t        \t\t<li><a href=\"{{ url('fos_user_security_login')}}\">Login</a></li>
\t\t\t        \t\t<li><a href=\"{{ url('fos_user_registration_register') }}\">Register</a></li>
\t\t\t        \t</ul>
\t\t\t\t\t</div>
\t\t        </div>
\t\t        <nav id=\"mainmenu\" class=\"mainmenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"logo-wrapper\"><a href=\"home.html\"><img src=\"{{ asset('assets/img/mPurpose-logo.png') }}\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"{{ path('about') }}\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"{{ path('contact') }}\">Contact Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t\t<!-- < -->
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
        <!-- Page Title -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h1>Contact Us</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-sm-7\">
\t        \t\t\t<!-- Map -->
\t        \t\t\t<div id=\"contact-us-map\">

\t        \t\t\t</div>
\t        \t\t\t<!-- End Map -->
\t        \t\t\t<!-- Contact Info -->
\t        \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
\t        \t\t\t\t<b>Phone:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Fax:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
\t        \t\t\t</p>
\t        \t\t\t<!-- End Contact Info -->
\t        \t\t</div>
\t        \t\t<div class=\"col-sm-5\">
\t        \t\t\t<!-- Contact Form -->
\t        \t\t\t<h3>Send Us a Message</h3>
\t        \t\t\t<div class=\"contact-form-wrapper\">
\t\t        \t\t\t<form class=\"form-horizontal\" role=\"form\">
\t\t        \t\t\t\t <div class=\"form-group\">
\t\t        \t\t\t\t \t<label for=\"Name\" class=\"col-sm-3 control-label\"><b>Your name</b></label>
\t\t        \t\t\t\t \t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"Name\" type=\"text\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-email\" class=\"col-sm-3 control-label\"><b>Your Email</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" id=\"contact-email\" type=\"text\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-message\" class=\"col-sm-3 control-label\"><b>Select Topic</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"prependedInput\">
\t\t\t\t\t\t\t\t\t\t\t<option>Please select topic...</option>
\t\t\t\t\t\t\t\t\t\t\t<option>General</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Services</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Orders</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"contact-message\" class=\"col-sm-3 control-label\"><b>Message</b></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"contact-message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn pull-right\">Send</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t        \t\t\t</form>
\t\t        \t\t</div>
\t\t        \t\t<!-- End Contact Info -->
\t        \t\t</div>
\t        \t</div>
\t    \t</div>
\t    </div>

  <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Our Latest Work</h3>
\t\t    \t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<a href=\"page-portfolio-item.html\"><img src=\"{{ asset('assets/img/portfolio6.jpg') }}\" alt=\"Project Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Navigate</h3>
\t\t    \t\t\t<ul class=\"no-list-style footer-navigate-section\">
\t\t    \t\t\t\t<li><a href=\"page-blog-posts.html\">Blog</a></li>
\t\t    \t\t\t\t<li><a href=\"page-portfolio-3-columns-2.html\">Portfolio</a></li>
\t\t    \t\t\t\t<li><a href=\"page-products-3-columns.html\">eShop</a></li>
\t\t    \t\t\t\t<li><a href=\"page-services-3-columns.html\">Services</a></li>
\t\t    \t\t\t\t<li><a href=\"page-pricing.html\">Pricing</a></li>
\t\t    \t\t\t\t<li><a href=\"page-faq.html\">FAQ</a></li>
\t\t    \t\t\t</ul>
\t\t    \t\t</div>
\t\t    \t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Contacts</h3>
\t\t    \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
\t        \t\t\t\t<b>Phone:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Fax:</b> +44 123 654321<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">getintoutch@yourcompanydomain.com</a>
\t        \t\t\t</p>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-2 col-xs-6\">
\t\t    \t\t\t<h3>Stay Connected</h3>
\t\t    \t\t\t<ul class=\"footer-stay-connected no-list-style\">
\t\t    \t\t\t\t<li><a href=\"#\" class=\"facebook\"></a></li>
\t\t    \t\t\t\t<li><a href=\"#\" class=\"twitter\"></a></li>
\t\t    \t\t\t\t<li><a href=\"#\" class=\"googleplus\"></a></li>
\t\t    \t\t\t</ul>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-md-12\">
\t\t    \t\t\t<div class=\"footer-copyright\">&copy; 2013 mPurpose. All rights reserved.</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t    </div>

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"{{ asset('assets/js/app.js') }}\"></script>
        {% endblock %}

    </body>
</html>", "contact-us.html.twig", "/vagrant/conquerors/app/Resources/views/contact-us.html.twig");
    }
}
