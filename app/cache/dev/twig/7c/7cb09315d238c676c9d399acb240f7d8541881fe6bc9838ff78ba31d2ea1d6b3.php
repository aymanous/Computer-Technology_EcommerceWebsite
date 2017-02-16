<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_214f06e1449bfe38ff542fae243c3f006d9bde6aae2629ec70556685554b9512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_1a621a475c27309d4a20aa68e4ac688f0501cb376f704d0b3c879f5ee5f6388e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a621a475c27309d4a20aa68e4ac688f0501cb376f704d0b3c879f5ee5f6388e->enter($__internal_1a621a475c27309d4a20aa68e4ac688f0501cb376f704d0b3c879f5ee5f6388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a621a475c27309d4a20aa68e4ac688f0501cb376f704d0b3c879f5ee5f6388e->leave($__internal_1a621a475c27309d4a20aa68e4ac688f0501cb376f704d0b3c879f5ee5f6388e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e352ae8ee4ea30d57c739427fecb0c6114ec2d236bf0a2976632be0fca25218e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e352ae8ee4ea30d57c739427fecb0c6114ec2d236bf0a2976632be0fca25218e->enter($__internal_e352ae8ee4ea30d57c739427fecb0c6114ec2d236bf0a2976632be0fca25218e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e352ae8ee4ea30d57c739427fecb0c6114ec2d236bf0a2976632be0fca25218e->leave($__internal_e352ae8ee4ea30d57c739427fecb0c6114ec2d236bf0a2976632be0fca25218e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/vagrant/conquerors/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
