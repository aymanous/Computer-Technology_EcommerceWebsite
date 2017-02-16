<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1821da03a2654296ae8686aa11239faef8bdbfdc461401f1cbf6ad70f58ffb97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df54730d3ff23f4aebdd6bfb73e485ed45f17be4d52cc3704dfddb3072b287c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df54730d3ff23f4aebdd6bfb73e485ed45f17be4d52cc3704dfddb3072b287c0->enter($__internal_df54730d3ff23f4aebdd6bfb73e485ed45f17be4d52cc3704dfddb3072b287c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df54730d3ff23f4aebdd6bfb73e485ed45f17be4d52cc3704dfddb3072b287c0->leave($__internal_df54730d3ff23f4aebdd6bfb73e485ed45f17be4d52cc3704dfddb3072b287c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2fab61d8992d17cf512511289ec8251bc84e3b07dfb6948dcc15714fc94bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fab61d8992d17cf512511289ec8251bc84e3b07dfb6948dcc15714fc94bae0->enter($__internal_d2fab61d8992d17cf512511289ec8251bc84e3b07dfb6948dcc15714fc94bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2fab61d8992d17cf512511289ec8251bc84e3b07dfb6948dcc15714fc94bae0->leave($__internal_d2fab61d8992d17cf512511289ec8251bc84e3b07dfb6948dcc15714fc94bae0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4089af8f137071e774228f8358a429f80dd60580867108b21d386e96ec2abf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4089af8f137071e774228f8358a429f80dd60580867108b21d386e96ec2abf75->enter($__internal_4089af8f137071e774228f8358a429f80dd60580867108b21d386e96ec2abf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4089af8f137071e774228f8358a429f80dd60580867108b21d386e96ec2abf75->leave($__internal_4089af8f137071e774228f8358a429f80dd60580867108b21d386e96ec2abf75_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21b5c94368d80060c2ceaefae09e7ce90acc62e24df1a0d7b082af7c84823108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b5c94368d80060c2ceaefae09e7ce90acc62e24df1a0d7b082af7c84823108->enter($__internal_21b5c94368d80060c2ceaefae09e7ce90acc62e24df1a0d7b082af7c84823108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_21b5c94368d80060c2ceaefae09e7ce90acc62e24df1a0d7b082af7c84823108->leave($__internal_21b5c94368d80060c2ceaefae09e7ce90acc62e24df1a0d7b082af7c84823108_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/vagrant/conquerors/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
