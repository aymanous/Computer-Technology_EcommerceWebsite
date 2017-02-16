<?php

/* home.html.twig */
class __TwigTemplate_c406fd0fb27924a485a0d89c39a8a78ff791798df79badc9ef0279afa1f26d57 extends Twig_Template
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
        $__internal_98e5073930cd595038de45ad49ebfb632cf847e63fcb8b4a61f77b21b73395e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e5073930cd595038de45ad49ebfb632cf847e63fcb8b4a61f77b21b73395e4->enter($__internal_98e5073930cd595038de45ad49ebfb632cf847e63fcb8b4a61f77b21b73395e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"myApp\" ng-controller=\"myCtrl\" id=\"myCtrl\">

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
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
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card");
        echo "\"><b>3 items</b></a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"dropdown choose-country\">
\t\t\t\t\t\t\t\t\t<a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"Great Britain\"> UK</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/us.png"), "html", null, true);
        echo "\" alt=\"United States\"> US</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/de.png"), "html", null, true);
        echo "\" alt=\"Germany\"> DE</a></li>
\t\t\t\t\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/flags/es.png"), "html", null, true);
        echo "\" alt=\"Spain\"> ES</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t        \t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
        echo "\">Login</a></li>
\t\t\t        \t\t<li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register");
        echo "\">Register</a></li>
\t\t\t        \t</ul>
\t\t\t\t\t</div>
\t\t        </div>
\t\t        <nav id=\"mainmenu\" class=\"mainmenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"logo-wrapper\"><a href=\"home.html\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mPurpose-logo.png"), "html", null, true);
        echo "\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active has-submenu\">
\t\t\t\t\t\t\t<a href=\"#\">Categories</a>
\t\t\t\t\t\t\t<div class=\"mainmenu-submenu\">
\t\t\t\t\t\t\t\t<div class=\"mainmenu-submenu-inner\"> 
\t\t\t\t\t\t\t\t\t<div ng-repeat=\"category in categories\">
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#c\" ng-click=\"getCategory(category)\">[[ category ]]</a></h4>
\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu-inner -->
\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t\t<!-- < -->
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t        <!-- Homepage Slider -->
        <div class=\"homepage-slider\">
        \t<div id=\"sequence\">
\t\t\t\t<ul class=\"sequence-canvas\">
\t\t\t\t\t<!-- Slide 1 -->
\t\t\t\t\t<li class=\"bg4\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Responsive</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">It looks great on desktops, laptops, tablets and smartphones</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/homepage-slider/slide1.png"), "html", null, true);
        echo "\" alt=\"Slide 1\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 1 -->
\t\t\t\t\t<!-- Slide 2 -->
\t\t\t\t\t<li class=\"bg3\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Color Schemes</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">Comes with 5 color schemes and it's easy to make your own!</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/homepage-slider/slide2.png"), "html", null, true);
        echo "\" alt=\"Slide 2\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 2 -->
\t\t\t\t\t<!-- Slide 3 -->
\t\t\t\t\t<li class=\"bg1\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Feature Rich</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">Huge amount of components and over 30 sample pages!</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/homepage-slider/slide3.png"), "html", null, true);
        echo "\" alt=\"Slide 3\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 3 -->
\t\t\t\t</ul>
\t\t\t\t<div class=\"sequence-pagination-wrapper\">
\t\t\t\t\t<ul class=\"sequence-pagination\">
\t\t\t\t\t\t<li>1</li>
\t\t\t\t\t\t<li>2</li>
\t\t\t\t\t\t<li>3</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <!-- End Homepage Slider -->
        <!-- Press Coverage -->
        <div class=\"section\">
\t    \t<div class=\"container\">
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

\t\t<!-- Services -->
        <div class=\"section\">
\t        <div class=\"container\">
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/diamond.png"), "html", null, true);
        echo "\" alt=\"Service 1\">
\t\t        \t\t\t<h3>Aliquam in adipiscing</h3>
\t\t        \t\t\t<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/ruler.png"), "html", null, true);
        echo "\" alt=\"Service 2\">
\t\t        \t\t\t<h3>Curabitur mollis</h3>
\t\t        \t\t\t<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/service-icon/box.png"), "html", null, true);
        echo "\" alt=\"Service 3\">
\t\t        \t\t\t<h3>Vivamus mattis</h3>
\t\t        \t\t\t<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>
\t    </div>
\t    <!-- End Services -->

\t\t<!-- Testimonials -->
\t    <div class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>Testimonials</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Testimonial -->
\t\t\t\t\t<div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<!-- Author Photo -->
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user1.jpg"), "html", null, true);
        echo "\" alt=\"Author 1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<!-- Quote -->
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.\"
                        \t\t</p>
                        \t\t<!-- Author Info -->
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                    <div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user5.jpg"), "html", null, true);
        echo "\" alt=\"Author 2\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.\"
                        \t\t</p>
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user2.jpg"), "html", null, true);
        echo "\" alt=\"Author 3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"
                        \t\t</p>
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
\t    <!-- End Testimonials -->

        <!-- Page Title -->
        <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2><a name=\"c\">Our Products</a></h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\" ng-repeat=\"product in products\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"[[ product.imageUrl ]]\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">[[product.category]]</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">[[ products.minPrice ]]</span> [[ product.minNewPrice ]]
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card");
        echo "\" class=\"btn btn-small\"><i class=\"icon-shopping-cart icon-white\"></i> Add</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
     <!-- Our Clients -->
\t    <div class=\"section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Our Clients</h2>
\t\t\t\t<div class=\"clients-logo-wrapper text-center row\">
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/canon.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/cisco.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/dell.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/ea.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/ebay.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/facebook.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/google.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/hp.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/microsoft.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/mysql.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/sony.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logos/yahoo.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
\t    <!-- End Our Clients -->

\t    <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Our Latest Work</h3>
\t\t    \t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<a href=\"page-portfolio-item.html\"><img src=\"";
        // line 297
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
        // line 340
        $this->displayBlock('javascripts', $context, $blocks);
        // line 354
        echo "
    </body>
</html>";
        
        $__internal_98e5073930cd595038de45ad49ebfb632cf847e63fcb8b4a61f77b21b73395e4->leave($__internal_98e5073930cd595038de45ad49ebfb632cf847e63fcb8b4a61f77b21b73395e4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b35fc851b59375aa1710ef670672914b2ad6de8113b0b2d790ed1b95c09c89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b35fc851b59375aa1710ef670672914b2ad6de8113b0b2d790ed1b95c09c89f->enter($__internal_2b35fc851b59375aa1710ef670672914b2ad6de8113b0b2d790ed1b95c09c89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icomoon-social.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/leaflet.css"), "html", null, true);
        echo "\" />
\t\t<!--[if lte IE 8]>
\t\t    <link rel=\"stylesheet\" href=\"css/leaflet.ie.css\" />
\t\t<![endif]-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_2b35fc851b59375aa1710ef670672914b2ad6de8113b0b2d790ed1b95c09c89f->leave($__internal_2b35fc851b59375aa1710ef670672914b2ad6de8113b0b2d790ed1b95c09c89f_prof);

    }

    // line 340
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a123b83eb9647b240cadf10434f58db42a6130036b7ed400025c1ca9ebab2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a123b83eb9647b240cadf10434f58db42a6130036b7ed400025c1ca9ebab2cb->enter($__internal_0a123b83eb9647b240cadf10434f58db42a6130036b7ed400025c1ca9ebab2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 341
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0a123b83eb9647b240cadf10434f58db42a6130036b7ed400025c1ca9ebab2cb->leave($__internal_0a123b83eb9647b240cadf10434f58db42a6130036b7ed400025c1ca9ebab2cb_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 352,  542 => 350,  538 => 349,  534 => 348,  530 => 347,  526 => 346,  521 => 344,  517 => 343,  511 => 341,  505 => 340,  496 => 20,  489 => 16,  483 => 13,  479 => 12,  471 => 11,  462 => 354,  460 => 340,  414 => 297,  397 => 283,  393 => 282,  389 => 281,  385 => 280,  381 => 279,  377 => 278,  373 => 277,  369 => 276,  365 => 275,  361 => 274,  357 => 273,  353 => 272,  338 => 260,  302 => 227,  283 => 211,  261 => 192,  238 => 172,  227 => 164,  216 => 156,  169 => 112,  156 => 102,  143 => 92,  121 => 73,  115 => 70,  99 => 57,  94 => 55,  85 => 49,  81 => 48,  74 => 44,  70 => 43,  66 => 42,  61 => 40,  55 => 37,  38 => 22,  36 => 11,  24 => 1,);
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
<html lang=\"en\" ng-app=\"myApp\" ng-controller=\"myCtrl\" id=\"myCtrl\">

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
\t\t\t\t\t\t<li class=\"active has-submenu\">
\t\t\t\t\t\t\t<a href=\"#\">Categories</a>
\t\t\t\t\t\t\t<div class=\"mainmenu-submenu\">
\t\t\t\t\t\t\t\t<div class=\"mainmenu-submenu-inner\"> 
\t\t\t\t\t\t\t\t\t<div ng-repeat=\"category in categories\">
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#c\" ng-click=\"getCategory(category)\">[[ category ]]</a></h4>
\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu-inner -->
\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu -->
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

\t\t        <!-- Homepage Slider -->
        <div class=\"homepage-slider\">
        \t<div id=\"sequence\">
\t\t\t\t<ul class=\"sequence-canvas\">
\t\t\t\t\t<!-- Slide 1 -->
\t\t\t\t\t<li class=\"bg4\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Responsive</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">It looks great on desktops, laptops, tablets and smartphones</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"{{ asset('assets/img/homepage-slider/slide1.png') }}\" alt=\"Slide 1\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 1 -->
\t\t\t\t\t<!-- Slide 2 -->
\t\t\t\t\t<li class=\"bg3\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Color Schemes</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">Comes with 5 color schemes and it's easy to make your own!</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"{{ asset('assets/img/homepage-slider/slide2.png') }}\" alt=\"Slide 2\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 2 -->
\t\t\t\t\t<!-- Slide 3 -->
\t\t\t\t\t<li class=\"bg1\">
\t\t\t\t\t\t<!-- Slide Title -->
\t\t\t\t\t\t<h2 class=\"title\">Feature Rich</h2>
\t\t\t\t\t\t<!-- Slide Text -->
\t\t\t\t\t\t<h3 class=\"subtitle\">Huge amount of components and over 30 sample pages!</h3>
\t\t\t\t\t\t<!-- Slide Image -->
\t\t\t\t\t\t<img class=\"slide-img\" src=\"{{ asset('assets/img/homepage-slider/slide3.png') }}\" alt=\"Slide 3\" />
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Slide 3 -->
\t\t\t\t</ul>
\t\t\t\t<div class=\"sequence-pagination-wrapper\">
\t\t\t\t\t<ul class=\"sequence-pagination\">
\t\t\t\t\t\t<li>1</li>
\t\t\t\t\t\t<li>2</li>
\t\t\t\t\t\t<li>3</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <!-- End Homepage Slider -->
        <!-- Press Coverage -->
        <div class=\"section\">
\t    \t<div class=\"container\">
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

\t\t<!-- Services -->
        <div class=\"section\">
\t        <div class=\"container\">
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/diamond.png') }}\" alt=\"Service 1\">
\t\t        \t\t\t<h3>Aliquam in adipiscing</h3>
\t\t        \t\t\t<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/ruler.png') }}\" alt=\"Service 2\">
\t\t        \t\t\t<h3>Curabitur mollis</h3>
\t\t        \t\t\t<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t\t<div class=\"col-md-4 col-sm-6\">
\t        \t\t\t<div class=\"service-wrapper\">
\t\t        \t\t\t<img src=\"{{ asset('assets/img/service-icon/box.png') }}\" alt=\"Service 3\">
\t\t        \t\t\t<h3>Vivamus mattis</h3>
\t\t        \t\t\t<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
\t\t        \t\t\t<a href=\"#\" class=\"btn\">Read more</a>
\t\t        \t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>
\t    </div>
\t    <!-- End Services -->

\t\t<!-- Testimonials -->
\t    <div class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>Testimonials</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Testimonial -->
\t\t\t\t\t<div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<!-- Author Photo -->
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/user1.jpg') }}\" alt=\"Author 1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<!-- Quote -->
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.\"
                        \t\t</p>
                        \t\t<!-- Author Info -->
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                    <div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/user5.jpg') }}\" alt=\"Author 2\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.\"
                        \t\t</p>
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"testimonial col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"author-photo\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/user2.jpg') }}\" alt=\"Author 3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-bubble\">
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t<p class=\"quote\">
\t\t                            \"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\"
                        \t\t</p>
                        \t\t<cite class=\"author-info\">
                        \t\t\t- Name Surname,<br>Managing Director at <a href=\"#\">Some Company</a>
                        \t\t</cite>
                        \t</blockquote>
                        \t<div class=\"sprite arrow-speech-bubble\"></div>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
\t    <!-- End Testimonials -->

        <!-- Page Title -->
        <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2><a name=\"c\">Our Products</a></h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\" ng-repeat=\"product in products\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"[[ product.imageUrl ]]\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">[[product.category]]</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">[[ products.minPrice ]]</span> [[ product.minNewPrice ]]
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('card') }}\" class=\"btn btn-small\"><i class=\"icon-shopping-cart icon-white\"></i> Add</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
     <!-- Our Clients -->
\t    <div class=\"section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Our Clients</h2>
\t\t\t\t<div class=\"clients-logo-wrapper text-center row\">
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/canon.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/cisco.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/dell.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/ea.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/ebay.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/facebook.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/google.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/hp.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/microsoft.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/mysql.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/sony.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t\t<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{ asset('assets/img/logos/yahoo.png') }}\" alt=\"Client Name\"></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>
\t    <!-- End Our Clients -->

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
</html>", "home.html.twig", "/vagrant/conquerors/app/Resources/views/home.html.twig");
    }
}
