<?php

/* shopping-cart.html.twig */
class __TwigTemplate_4efb686b6a697f89dec88e0129eb68e3ffdc97435f9ea95e575c3f22f7a0beff extends Twig_Template
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
        $__internal_496d983e05f73fdad4a715ef999b9ed92a7d14a4f5b6029fd063418b03cdfe2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496d983e05f73fdad4a715ef999b9ed92a7d14a4f5b6029fd063418b03cdfe2e->enter($__internal_496d983e05f73fdad4a715ef999b9ed92a7d14a4f5b6029fd063418b03cdfe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shopping-cart.html.twig"));

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
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About Us</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    <li class=\"active\">
\t\t\t\t\t    <a href=\"";
        // line 75
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
\t\t\t\t\t\t<h1>Shopping Cart</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<!-- Action Buttons -->
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<!-- Shopping Cart Items -->
\t\t\t\t\t\t<table class=\"shopping-cart\">
\t\t\t\t\t\t\t<!-- Shopping Cart Item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Image -->
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Description & Features -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t\tColor: <span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Quantity -->
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Price -->
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Actions -->
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<!-- End Shopping Cart Item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product2.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t\tColor: <span class=\"color-orange\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/product3.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- End Shopping Cart Items -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Promotion Code -->
\t\t\t\t\t<div class=\"col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<div class=\"cart-promo-code\">
\t\t\t\t\t\t\t<h6><i class=\"glyphicon glyphicon-gift\"></i> Have a promotion code?</h6>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control input-sm\" id=\"appendedInputButton\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-grey\" type=\"button\">Apply</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Shipment Options -->
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<div class=\"cart-shippment-options\">
\t\t\t\t\t\t\t<h6><i class=\"glyphicon glyphicon-plane\"></i> Shippment options</h6>
\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t<option value=\"1\">Standard - FREE</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Next day delivery - \$10.00</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Shopping Cart Totals -->
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<table class=\"cart-totals\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>Shipping</b></td>
\t\t\t\t\t\t\t\t<td>Free</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>Discount</b></td>
\t\t\t\t\t\t\t\t<td>- \$18.00</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"cart-grand-total\">
\t\t\t\t\t\t\t\t<td><b>Total</b></td>
\t\t\t\t\t\t\t\t<td><b>\$163.55</b></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- Action Buttons -->
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-footer col-md-3 col-xs-6\">
\t\t    \t\t\t<h3>Our Latest Work</h3>
\t\t    \t\t\t<div class=\"portfolio-item\">
\t\t\t\t\t\t\t<div class=\"portfolio-image\">
\t\t\t\t\t\t\t\t<a href=\"page-portfolio-item.html\"><img src=\"";
        // line 232
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
        // line 274
        $this->displayBlock('javascripts', $context, $blocks);
        // line 288
        echo "
    </body>
</html>";
        
        $__internal_496d983e05f73fdad4a715ef999b9ed92a7d14a4f5b6029fd063418b03cdfe2e->leave($__internal_496d983e05f73fdad4a715ef999b9ed92a7d14a4f5b6029fd063418b03cdfe2e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f3f28f16eb16c2c792d6050b8f1db6d856f2c1b0653b9af36602be5f3b10d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3f28f16eb16c2c792d6050b8f1db6d856f2c1b0653b9af36602be5f3b10d6e->enter($__internal_4f3f28f16eb16c2c792d6050b8f1db6d856f2c1b0653b9af36602be5f3b10d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4f3f28f16eb16c2c792d6050b8f1db6d856f2c1b0653b9af36602be5f3b10d6e->leave($__internal_4f3f28f16eb16c2c792d6050b8f1db6d856f2c1b0653b9af36602be5f3b10d6e_prof);

    }

    // line 274
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48a38334d9c5d0b65b1689e79157ef035a2f0572063bd7d8ad6bd5864fdfcf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a38334d9c5d0b65b1689e79157ef035a2f0572063bd7d8ad6bd5864fdfcf3c->enter($__internal_48a38334d9c5d0b65b1689e79157ef035a2f0572063bd7d8ad6bd5864fdfcf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 275
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_48a38334d9c5d0b65b1689e79157ef035a2f0572063bd7d8ad6bd5864fdfcf3c->leave($__internal_48a38334d9c5d0b65b1689e79157ef035a2f0572063bd7d8ad6bd5864fdfcf3c_prof);

    }

    public function getTemplateName()
    {
        return "shopping-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 286,  419 => 284,  415 => 283,  411 => 282,  407 => 281,  403 => 280,  398 => 278,  394 => 277,  388 => 275,  382 => 274,  373 => 22,  366 => 18,  360 => 15,  356 => 14,  348 => 13,  339 => 288,  337 => 274,  292 => 232,  209 => 152,  188 => 134,  162 => 111,  123 => 75,  117 => 72,  101 => 59,  96 => 57,  87 => 51,  83 => 50,  76 => 46,  72 => 45,  68 => 44,  63 => 42,  57 => 39,  40 => 24,  38 => 13,  24 => 1,);
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
        <!-- Page Title -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Shopping Cart</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<!-- Action Buttons -->
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<!-- Shopping Cart Items -->
\t\t\t\t\t\t<table class=\"shopping-cart\">
\t\t\t\t\t\t\t<!-- Shopping Cart Item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Image -->
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product1.jpg') }}\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Description & Features -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t\tColor: <span class=\"color-white\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Quantity -->
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Price -->
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<!-- Shopping Cart Item Actions -->
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<!-- End Shopping Cart Item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product2.jpg') }}\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t\tColor: <span class=\"color-orange\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{ asset('assets/img/product3.jpg') }}\" alt=\"Item Name\"></a></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"feature color\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature\">Size: <b>XXL</b></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"quantity\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"price\">\$999.99</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- End Shopping Cart Items -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<!-- Promotion Code -->
\t\t\t\t\t<div class=\"col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<div class=\"cart-promo-code\">
\t\t\t\t\t\t\t<h6><i class=\"glyphicon glyphicon-gift\"></i> Have a promotion code?</h6>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control input-sm\" id=\"appendedInputButton\" type=\"text\" value=\"\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-grey\" type=\"button\">Apply</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Shipment Options -->
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<div class=\"cart-shippment-options\">
\t\t\t\t\t\t\t<h6><i class=\"glyphicon glyphicon-plane\"></i> Shippment options</h6>
\t\t\t\t\t\t\t<div class=\"input-append\">
\t\t\t\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t<option value=\"1\">Standard - FREE</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Next day delivery - \$10.00</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Shopping Cart Totals -->
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
\t\t\t\t\t\t<table class=\"cart-totals\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>Shipping</b></td>
\t\t\t\t\t\t\t\t<td>Free</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><b>Discount</b></td>
\t\t\t\t\t\t\t\t<td>- \$18.00</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"cart-grand-total\">
\t\t\t\t\t\t\t\t<td><b>Total</b></td>
\t\t\t\t\t\t\t\t<td><b>\$163.55</b></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<!-- Action Buttons -->
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t <!-- Footer -->
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
</html>", "shopping-cart.html.twig", "/vagrant/conquerors/app/Resources/views/shopping-cart.html.twig");
    }
}
