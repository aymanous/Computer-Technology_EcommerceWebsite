<?php

/* ::base.html.twig */
class __TwigTemplate_39840bd6f23d40c2c64c5049213d59cb89fe5f6f4038c3100b339e3db4f335e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51f8e69de4f555a1787f2561795e218d3ff7b324393904d966435056635b7c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f8e69de4f555a1787f2561795e218d3ff7b324393904d966435056635b7c83->enter($__internal_51f8e69de4f555a1787f2561795e218d3ff7b324393904d966435056635b7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_51f8e69de4f555a1787f2561795e218d3ff7b324393904d966435056635b7c83->leave($__internal_51f8e69de4f555a1787f2561795e218d3ff7b324393904d966435056635b7c83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64c8b1c077b09d73f2bfcfa42e377227d08937d500fa567420f0d255bfb6d3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c8b1c077b09d73f2bfcfa42e377227d08937d500fa567420f0d255bfb6d3ff->enter($__internal_64c8b1c077b09d73f2bfcfa42e377227d08937d500fa567420f0d255bfb6d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64c8b1c077b09d73f2bfcfa42e377227d08937d500fa567420f0d255bfb6d3ff->leave($__internal_64c8b1c077b09d73f2bfcfa42e377227d08937d500fa567420f0d255bfb6d3ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b1cbd41264def3697682818513bd65ef80f1d85f4997fde0d580263558e0584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1cbd41264def3697682818513bd65ef80f1d85f4997fde0d580263558e0584->enter($__internal_2b1cbd41264def3697682818513bd65ef80f1d85f4997fde0d580263558e0584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b1cbd41264def3697682818513bd65ef80f1d85f4997fde0d580263558e0584->leave($__internal_2b1cbd41264def3697682818513bd65ef80f1d85f4997fde0d580263558e0584_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c0376ec3f8ef083130de71d2e9c0c91c0034e3fbaadac705b233f1981d1f104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0376ec3f8ef083130de71d2e9c0c91c0034e3fbaadac705b233f1981d1f104->enter($__internal_2c0376ec3f8ef083130de71d2e9c0c91c0034e3fbaadac705b233f1981d1f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c0376ec3f8ef083130de71d2e9c0c91c0034e3fbaadac705b233f1981d1f104->leave($__internal_2c0376ec3f8ef083130de71d2e9c0c91c0034e3fbaadac705b233f1981d1f104_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25bb9960364001c4bed2c7f5ffdcd4d9b446c61f48e7d684b700f24259298653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bb9960364001c4bed2c7f5ffdcd4d9b446c61f48e7d684b700f24259298653->enter($__internal_25bb9960364001c4bed2c7f5ffdcd4d9b446c61f48e7d684b700f24259298653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25bb9960364001c4bed2c7f5ffdcd4d9b446c61f48e7d684b700f24259298653->leave($__internal_25bb9960364001c4bed2c7f5ffdcd4d9b446c61f48e7d684b700f24259298653_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/vagrant/conquerors/app/Resources/views/base.html.twig");
    }
}
