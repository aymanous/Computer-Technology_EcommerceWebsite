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
        $__internal_5c359e1658df6a1dbf89fe8516c0f902f5a1aa4fb9a7f40840ee33c06e875737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c359e1658df6a1dbf89fe8516c0f902f5a1aa4fb9a7f40840ee33c06e875737->enter($__internal_5c359e1658df6a1dbf89fe8516c0f902f5a1aa4fb9a7f40840ee33c06e875737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c359e1658df6a1dbf89fe8516c0f902f5a1aa4fb9a7f40840ee33c06e875737->leave($__internal_5c359e1658df6a1dbf89fe8516c0f902f5a1aa4fb9a7f40840ee33c06e875737_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81e32e635b3dec082222322928e1f999db648bb790fabadcee89396d8840253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e32e635b3dec082222322928e1f999db648bb790fabadcee89396d8840253d->enter($__internal_81e32e635b3dec082222322928e1f999db648bb790fabadcee89396d8840253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81e32e635b3dec082222322928e1f999db648bb790fabadcee89396d8840253d->leave($__internal_81e32e635b3dec082222322928e1f999db648bb790fabadcee89396d8840253d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74b21ea98cef3d30c5b45af298912247d130f8fcca4ac52c67529a4a5696745c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b21ea98cef3d30c5b45af298912247d130f8fcca4ac52c67529a4a5696745c->enter($__internal_74b21ea98cef3d30c5b45af298912247d130f8fcca4ac52c67529a4a5696745c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74b21ea98cef3d30c5b45af298912247d130f8fcca4ac52c67529a4a5696745c->leave($__internal_74b21ea98cef3d30c5b45af298912247d130f8fcca4ac52c67529a4a5696745c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad0cf64f1da2cb1cea3b693966c9e62ce9db5957483a75db587b399d0cbc712c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0cf64f1da2cb1cea3b693966c9e62ce9db5957483a75db587b399d0cbc712c->enter($__internal_ad0cf64f1da2cb1cea3b693966c9e62ce9db5957483a75db587b399d0cbc712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad0cf64f1da2cb1cea3b693966c9e62ce9db5957483a75db587b399d0cbc712c->leave($__internal_ad0cf64f1da2cb1cea3b693966c9e62ce9db5957483a75db587b399d0cbc712c_prof);

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
