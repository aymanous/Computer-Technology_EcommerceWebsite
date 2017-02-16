<?php

/* about-us.html.twig */
class __TwigTemplate_70913061e56bdfd46aa70095a58e65db89038194acdf6c1b7df8021605124e81 extends Twig_Template
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
        $__internal_5a24af1543f97d7f6d4effd2f13b45058f32d75c8d2c38bc0388a0103d01698e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a24af1543f97d7f6d4effd2f13b45058f32d75c8d2c38bc0388a0103d01698e->enter($__internal_5a24af1543f97d7f6d4effd2f13b45058f32d75c8d2c38bc0388a0103d01698e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about-us.html.twig"));

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
\t\t\t\t\t\t\t<li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card");
        echo "\"><b>3 items</b></a></li>
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
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>About Us</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3>We are leading company</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tDonec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3>Wide range of services</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tInterdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"video-wrapper\">
\t\t\t\t\t\t\t<iframe src=\"http://player.vimeo.com/video/47000322?title=0&amp;byline=0&amp;portrait=0\" width=\"500\" height=\"281\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Press Coverage -->
        <div class=\"section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Featured on</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-wired\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-mashable\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-techcrunch\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Press Coverage -->

\t\t<div class=\"section\">
\t        <div class=\"container\">
\t        \t<h2>Our Services</h2>
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/diamond.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/ruler.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Themeable</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/box.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Features Rich</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/diamond.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/diamond.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/ruler.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Themeable</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/box.png"), "html", null, true);
        echo "\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Features Rich</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>
\t    </div>

\t    <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Our Latest Work</h3>
\t\t    \t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<a href=\"page-portfolio-item.html\"><img src=\"";
        // line 202
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
        // line 245
        $this->displayBlock('javascripts', $context, $blocks);
        // line 259
        echo "
    </body>
</html>";
        
        $__internal_5a24af1543f97d7f6d4effd2f13b45058f32d75c8d2c38bc0388a0103d01698e->leave($__internal_5a24af1543f97d7f6d4effd2f13b45058f32d75c8d2c38bc0388a0103d01698e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4024ae769f3973233cf3b06fc347099333991bc7296b42fdc7ddef544524d0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4024ae769f3973233cf3b06fc347099333991bc7296b42fdc7ddef544524d0e1->enter($__internal_4024ae769f3973233cf3b06fc347099333991bc7296b42fdc7ddef544524d0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4024ae769f3973233cf3b06fc347099333991bc7296b42fdc7ddef544524d0e1->leave($__internal_4024ae769f3973233cf3b06fc347099333991bc7296b42fdc7ddef544524d0e1_prof);

    }

    // line 245
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a259cb8e961a1b4f7dd97a78e14f443ce426a344a11357347db32d9068115b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a259cb8e961a1b4f7dd97a78e14f443ce426a344a11357347db32d9068115b8->enter($__internal_3a259cb8e961a1b4f7dd97a78e14f443ce426a344a11357347db32d9068115b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 246
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3a259cb8e961a1b4f7dd97a78e14f443ce426a344a11357347db32d9068115b8->leave($__internal_3a259cb8e961a1b4f7dd97a78e14f443ce426a344a11357347db32d9068115b8_prof);

    }

    public function getTemplateName()
    {
        return "about-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 257,  402 => 255,  398 => 254,  394 => 253,  390 => 252,  386 => 251,  381 => 249,  377 => 248,  371 => 246,  365 => 245,  356 => 22,  349 => 18,  343 => 15,  339 => 14,  331 => 13,  322 => 259,  320 => 245,  274 => 202,  247 => 178,  237 => 171,  227 => 164,  217 => 157,  207 => 150,  197 => 143,  187 => 136,  113 => 65,  107 => 62,  101 => 59,  96 => 57,  87 => 51,  83 => 50,  76 => 46,  72 => 45,  68 => 44,  63 => 42,  57 => 39,  40 => 24,  38 => 13,  24 => 1,);
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
\t\t\t\t\t\t\t<li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"{{ path('card') }}\"><b>3 items</b></a></li>
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
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>About Us</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h3>We are leading company</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tDonec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h3>Wide range of services</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tInterdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"video-wrapper\">
\t\t\t\t\t\t\t<iframe src=\"http://player.vimeo.com/video/47000322?title=0&amp;byline=0&amp;portrait=0\" width=\"500\" height=\"281\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Press Coverage -->
        <div class=\"section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Featured on</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-wired\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-mashable\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"in-press press-techcrunch\">
\t\t\t\t\t\t\t<a href=\"#\">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Press Coverage -->

\t\t<div class=\"section\">
\t        <div class=\"container\">
\t        \t<h2>Our Services</h2>
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/ruler.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Themeable</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/box.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Features Rich</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{asset('assets/img/service-icon/ruler.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Themeable</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/box.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Features Rich</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-3 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service Name\">
\t\t        \t\t\t<h3>Brilliant Look</h3>
\t\t        \t\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href=\"#\">Read more...</a></p>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>
\t    </div>

\t    <!-- Footer -->
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
</html>", "about-us.html.twig", "/vagrant/conquerors/app/Resources/views/about-us.html.twig");
    }
}
