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
        $__internal_93ae681ac998e677f82717d140dc6c278bc3474545616843e25dc8db0ca92328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ae681ac998e677f82717d140dc6c278bc3474545616843e25dc8db0ca92328->enter($__internal_93ae681ac998e677f82717d140dc6c278bc3474545616843e25dc8db0ca92328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

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
\t\t\t\t\t\t\t<li class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> <a href=\"page-shopping-cart.html\"><b>3 items</b></a></li>
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
\t\t\t\t\t\t\t<a href=\"home.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active has-submenu\">
\t\t\t\t\t\t\t<a href=\"#\">Categories</a>
\t\t\t\t\t\t\t<div class=\"mainmenu-submenu\">
\t\t\t\t\t\t\t\t<div class=\"mainmenu-submenu-inner\"> 
\t\t\t\t\t\t\t\t\t<div ng-repeat=\"category in categories\">
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">[[ category ]]</a></h4>
\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu-inner -->
\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"page-about-us.html\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"page-contact-us.html\">Contact Us</a>
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

        <!-- Page Title -->
        <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Best Sellers</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<!-- Product -->
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<!-- Product Image -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Title -->
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Available Colors-->
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-orange\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-green\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Price-->
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">\$959.99</span> \$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Description-->
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Add to Cart Button -->
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Product -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product2.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product3.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product4.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product5.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product6.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pagination-wrapper \">
\t\t\t\t\t<ul class=\"pagination pagination-lg\">
\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">Previous</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li><a href=\"#\">6</a></li>
\t\t\t\t\t\t<li><a href=\"#\">7</a></li>
\t\t\t\t\t\t<li><a href=\"#\">8</a></li>
\t\t\t\t\t\t<li><a href=\"#\">9</a></li>
\t\t\t\t\t\t<li><a href=\"#\">10</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>

\t    <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>New Sellers</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">\$959.99</span> \$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product2.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a  href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product3.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product4.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product5.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product6.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pagination-wrapper \">
\t\t\t\t\t<ul class=\"pagination pagination-lg\">
\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">Previous</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li><a href=\"#\">6</a></li>
\t\t\t\t\t\t<li><a href=\"#\">7</a></li>
\t\t\t\t\t\t<li><a href=\"#\">8</a></li>
\t\t\t\t\t\t<li><a href=\"#\">9</a></li>
\t\t\t\t\t\t<li><a href=\"#\">10</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
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
        // line 454
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
        // line 497
        $this->displayBlock('javascripts', $context, $blocks);
        // line 511
        echo "
    </body>
</html>";
        
        $__internal_93ae681ac998e677f82717d140dc6c278bc3474545616843e25dc8db0ca92328->leave($__internal_93ae681ac998e677f82717d140dc6c278bc3474545616843e25dc8db0ca92328_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9200ea2b4de5d55e95388157e826cdfc65578655913050db33162cf768185e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9200ea2b4de5d55e95388157e826cdfc65578655913050db33162cf768185e93->enter($__internal_9200ea2b4de5d55e95388157e826cdfc65578655913050db33162cf768185e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9200ea2b4de5d55e95388157e826cdfc65578655913050db33162cf768185e93->leave($__internal_9200ea2b4de5d55e95388157e826cdfc65578655913050db33162cf768185e93_prof);

    }

    // line 497
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf10c3b605ac0457c6d4a2c0d43068f30fd3f1d40a0d39f5e51cdf13111664fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf10c3b605ac0457c6d4a2c0d43068f30fd3f1d40a0d39f5e51cdf13111664fe->enter($__internal_bf10c3b605ac0457c6d4a2c0d43068f30fd3f1d40a0d39f5e51cdf13111664fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 498
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bf10c3b605ac0457c6d4a2c0d43068f30fd3f1d40a0d39f5e51cdf13111664fe->leave($__internal_bf10c3b605ac0457c6d4a2c0d43068f30fd3f1d40a0d39f5e51cdf13111664fe_prof);

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
        return array (  671 => 509,  666 => 507,  662 => 506,  658 => 505,  654 => 504,  650 => 503,  645 => 501,  641 => 500,  635 => 498,  629 => 497,  620 => 20,  613 => 16,  607 => 13,  603 => 12,  595 => 11,  586 => 511,  584 => 497,  538 => 454,  491 => 410,  469 => 391,  447 => 372,  423 => 351,  401 => 332,  379 => 313,  329 => 266,  302 => 242,  275 => 218,  246 => 192,  220 => 169,  185 => 137,  157 => 112,  144 => 102,  131 => 92,  91 => 55,  82 => 49,  78 => 48,  71 => 44,  67 => 43,  63 => 42,  58 => 40,  38 => 22,  36 => 11,  24 => 1,);
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
<html lang=\"en\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

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
\t\t\t\t\t\t\t<a href=\"home.html\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active has-submenu\">
\t\t\t\t\t\t\t<a href=\"#\">Categories</a>
\t\t\t\t\t\t\t<div class=\"mainmenu-submenu\">
\t\t\t\t\t\t\t\t<div class=\"mainmenu-submenu-inner\"> 
\t\t\t\t\t\t\t\t\t<div ng-repeat=\"category in categories\">
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">[[ category ]]</a></h4>
\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu-inner -->
\t\t\t\t\t\t\t</div><!-- /mainmenu-submenu -->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"page-about-us.html\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"page-contact-us.html\">Contact Us</a>
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

        <!-- Page Title -->
        <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>Best Sellers</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<!-- Product -->
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<!-- Product Image -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product1.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Title -->
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Available Colors-->
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-orange\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-green\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Price-->
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">\$959.99</span> \$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Product Description-->
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Add to Cart Button -->
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Product -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product2.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product3.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product4.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product5.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-blue\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product6.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"colors\">
\t\t\t\t\t\t\t\t<span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t<span class=\"color-black\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pagination-wrapper \">
\t\t\t\t\t<ul class=\"pagination pagination-lg\">
\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">Previous</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li><a href=\"#\">6</a></li>
\t\t\t\t\t\t<li><a href=\"#\">7</a></li>
\t\t\t\t\t\t<li><a href=\"#\">8</a></li>
\t\t\t\t\t\t<li><a href=\"#\">9</a></li>
\t\t\t\t\t\t<li><a href=\"#\">10</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t    </div>

\t    <div class=\"eshop-section section\">
\t    \t<div class=\"container\">
\t    \t\t<h2>New Sellers</h2>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product1.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t<span class=\"price-was\">\$959.99</span> \$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product2.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a  href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product3.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product4.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product5.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"shop-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product6.jpg') }}\" alt=\"Item Name\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t<h3><a href=\"page-product-details.html\">Lorem ipsum dolor</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\$999.99
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"page-product-details.html\" class=\"btn\"><i class=\"icon-shopping-cart icon-white\"></i> Add to Cart</a> <span>or <a href=\"page-product-details.html\">Read more</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pagination-wrapper \">
\t\t\t\t\t<ul class=\"pagination pagination-lg\">
\t\t\t\t\t\t<li class=\"disabled\"><a href=\"#\">Previous</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li><a href=\"#\">6</a></li>
\t\t\t\t\t\t<li><a href=\"#\">7</a></li>
\t\t\t\t\t\t<li><a href=\"#\">8</a></li>
\t\t\t\t\t\t<li><a href=\"#\">9</a></li>
\t\t\t\t\t\t<li><a href=\"#\">10</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
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
</html>", "home.html.twig", "/vagrant/conquerors/app/Resources/views/home.html.twig");
    }
}
