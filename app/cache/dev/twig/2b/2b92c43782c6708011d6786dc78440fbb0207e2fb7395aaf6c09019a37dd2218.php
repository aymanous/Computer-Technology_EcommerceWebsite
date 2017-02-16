<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5004e59663fe14f9f6d4e2e5d5993e882d2701f18d1758cf7a7bd47aeb83f7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4167d41cb8f810e5d360813a3e385fa2b8023a5345c8e1d3e4524ccf577e7bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4167d41cb8f810e5d360813a3e385fa2b8023a5345c8e1d3e4524ccf577e7bee->enter($__internal_4167d41cb8f810e5d360813a3e385fa2b8023a5345c8e1d3e4524ccf577e7bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4167d41cb8f810e5d360813a3e385fa2b8023a5345c8e1d3e4524ccf577e7bee->leave($__internal_4167d41cb8f810e5d360813a3e385fa2b8023a5345c8e1d3e4524ccf577e7bee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfddecee30ae95fe80313a0b3eaec64beb900fe22c0b09f06abf68ae8b0f8d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfddecee30ae95fe80313a0b3eaec64beb900fe22c0b09f06abf68ae8b0f8d73->enter($__internal_bfddecee30ae95fe80313a0b3eaec64beb900fe22c0b09f06abf68ae8b0f8d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bfddecee30ae95fe80313a0b3eaec64beb900fe22c0b09f06abf68ae8b0f8d73->leave($__internal_bfddecee30ae95fe80313a0b3eaec64beb900fe22c0b09f06abf68ae8b0f8d73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
