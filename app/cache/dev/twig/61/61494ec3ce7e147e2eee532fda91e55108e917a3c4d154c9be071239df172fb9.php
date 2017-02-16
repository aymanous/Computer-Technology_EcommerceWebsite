<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_41badafd03602ef4e8a9254bb9badb5af290ee8fddf1974803e9d88c1fb588d5 extends Twig_Template
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
        $__internal_f241c34d8122b4f58662674fba13862094fba2dcc26457638da85ac2daa43d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f241c34d8122b4f58662674fba13862094fba2dcc26457638da85ac2daa43d70->enter($__internal_f241c34d8122b4f58662674fba13862094fba2dcc26457638da85ac2daa43d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f241c34d8122b4f58662674fba13862094fba2dcc26457638da85ac2daa43d70->leave($__internal_f241c34d8122b4f58662674fba13862094fba2dcc26457638da85ac2daa43d70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66d1ab98791f79619cdd23190732ffd41640fc5f5bd8f86210e93a7341dab397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d1ab98791f79619cdd23190732ffd41640fc5f5bd8f86210e93a7341dab397->enter($__internal_66d1ab98791f79619cdd23190732ffd41640fc5f5bd8f86210e93a7341dab397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_66d1ab98791f79619cdd23190732ffd41640fc5f5bd8f86210e93a7341dab397->leave($__internal_66d1ab98791f79619cdd23190732ffd41640fc5f5bd8f86210e93a7341dab397_prof);

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
", "@FOSUser/Security/login.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
