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
        $__internal_261b8354077ee127694a40061f09c52129bf94113d745a89bcbb6ab293afbb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261b8354077ee127694a40061f09c52129bf94113d745a89bcbb6ab293afbb22->enter($__internal_261b8354077ee127694a40061f09c52129bf94113d745a89bcbb6ab293afbb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261b8354077ee127694a40061f09c52129bf94113d745a89bcbb6ab293afbb22->leave($__internal_261b8354077ee127694a40061f09c52129bf94113d745a89bcbb6ab293afbb22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb51297ce960be68373745efcde356eb552e138f9037e942ab661a426571cbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb51297ce960be68373745efcde356eb552e138f9037e942ab661a426571cbf1->enter($__internal_bb51297ce960be68373745efcde356eb552e138f9037e942ab661a426571cbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bb51297ce960be68373745efcde356eb552e138f9037e942ab661a426571cbf1->leave($__internal_bb51297ce960be68373745efcde356eb552e138f9037e942ab661a426571cbf1_prof);

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
