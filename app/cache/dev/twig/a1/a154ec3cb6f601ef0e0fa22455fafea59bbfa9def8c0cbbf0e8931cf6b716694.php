<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0623016d4a5f3ce298b7a0bbefcfc2ebbba80e0ac244c38cfba39cb9bdc67966 extends Twig_Template
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
        $__internal_afb0abd6baf538543aef776e42e3950a8c8e385bd013b50735412323bdb743d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb0abd6baf538543aef776e42e3950a8c8e385bd013b50735412323bdb743d4->enter($__internal_afb0abd6baf538543aef776e42e3950a8c8e385bd013b50735412323bdb743d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb0abd6baf538543aef776e42e3950a8c8e385bd013b50735412323bdb743d4->leave($__internal_afb0abd6baf538543aef776e42e3950a8c8e385bd013b50735412323bdb743d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2201c7bab93aa81189d54878f7cbbec3d6a4bb6172dfabd073ec174baf3c05cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2201c7bab93aa81189d54878f7cbbec3d6a4bb6172dfabd073ec174baf3c05cd->enter($__internal_2201c7bab93aa81189d54878f7cbbec3d6a4bb6172dfabd073ec174baf3c05cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2201c7bab93aa81189d54878f7cbbec3d6a4bb6172dfabd073ec174baf3c05cd->leave($__internal_2201c7bab93aa81189d54878f7cbbec3d6a4bb6172dfabd073ec174baf3c05cd_prof);

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
", "@FOSUser/Registration/register.html.twig", "/vagrant/conquerors/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
