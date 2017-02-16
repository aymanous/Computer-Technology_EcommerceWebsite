<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4a66f5cec50eebf04c2458a9b2cac858d3e2c53305cbcc0baadbcb42c97755cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5051ab25834ffef5bf19e44fa5b7c0ea9d4fdf683906e2824cf06992f3f838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5051ab25834ffef5bf19e44fa5b7c0ea9d4fdf683906e2824cf06992f3f838->enter($__internal_7b5051ab25834ffef5bf19e44fa5b7c0ea9d4fdf683906e2824cf06992f3f838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5051ab25834ffef5bf19e44fa5b7c0ea9d4fdf683906e2824cf06992f3f838->leave($__internal_7b5051ab25834ffef5bf19e44fa5b7c0ea9d4fdf683906e2824cf06992f3f838_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6c662d735a63623efebd9a4ee8de2e0d9c6a3ef7afe85ac19839e1c38413261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c662d735a63623efebd9a4ee8de2e0d9c6a3ef7afe85ac19839e1c38413261->enter($__internal_d6c662d735a63623efebd9a4ee8de2e0d9c6a3ef7afe85ac19839e1c38413261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6c662d735a63623efebd9a4ee8de2e0d9c6a3ef7afe85ac19839e1c38413261->leave($__internal_d6c662d735a63623efebd9a4ee8de2e0d9c6a3ef7afe85ac19839e1c38413261_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_206d510ac888c3bf4552a758259f14d05d2d5daded14b74a3c3445bbb6150149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206d510ac888c3bf4552a758259f14d05d2d5daded14b74a3c3445bbb6150149->enter($__internal_206d510ac888c3bf4552a758259f14d05d2d5daded14b74a3c3445bbb6150149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_206d510ac888c3bf4552a758259f14d05d2d5daded14b74a3c3445bbb6150149->leave($__internal_206d510ac888c3bf4552a758259f14d05d2d5daded14b74a3c3445bbb6150149_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4a007044bd9ca75d230a1ca28006e9bd4b34272d96feb946c8190d597a14c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a007044bd9ca75d230a1ca28006e9bd4b34272d96feb946c8190d597a14c89->enter($__internal_f4a007044bd9ca75d230a1ca28006e9bd4b34272d96feb946c8190d597a14c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4a007044bd9ca75d230a1ca28006e9bd4b34272d96feb946c8190d597a14c89->leave($__internal_f4a007044bd9ca75d230a1ca28006e9bd4b34272d96feb946c8190d597a14c89_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/vagrant/conquerors/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
