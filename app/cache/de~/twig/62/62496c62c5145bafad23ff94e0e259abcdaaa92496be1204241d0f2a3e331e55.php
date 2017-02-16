<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ea068d252c107e5e55b0442dcd3dda3b879166659c38af9752961b8dfcd2523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_7e412fa5e6bb6e5cb3d83cc4ead742c9d1e4fae3c0fd869c5aaf9b0c8fc250e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e412fa5e6bb6e5cb3d83cc4ead742c9d1e4fae3c0fd869c5aaf9b0c8fc250e6->enter($__internal_7e412fa5e6bb6e5cb3d83cc4ead742c9d1e4fae3c0fd869c5aaf9b0c8fc250e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e412fa5e6bb6e5cb3d83cc4ead742c9d1e4fae3c0fd869c5aaf9b0c8fc250e6->leave($__internal_7e412fa5e6bb6e5cb3d83cc4ead742c9d1e4fae3c0fd869c5aaf9b0c8fc250e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4982a5bb55e9eeb548741beeed5d699adf95230d6b19308611e86ffabcb4586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4982a5bb55e9eeb548741beeed5d699adf95230d6b19308611e86ffabcb4586a->enter($__internal_4982a5bb55e9eeb548741beeed5d699adf95230d6b19308611e86ffabcb4586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4982a5bb55e9eeb548741beeed5d699adf95230d6b19308611e86ffabcb4586a->leave($__internal_4982a5bb55e9eeb548741beeed5d699adf95230d6b19308611e86ffabcb4586a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
