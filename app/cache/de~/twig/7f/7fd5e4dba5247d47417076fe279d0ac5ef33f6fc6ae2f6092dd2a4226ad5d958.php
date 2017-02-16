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
        $__internal_f93adfd180ee3889e92302a502a373e3e9b95372dd512a172ce2fdad9a94c3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93adfd180ee3889e92302a502a373e3e9b95372dd512a172ce2fdad9a94c3f5->enter($__internal_f93adfd180ee3889e92302a502a373e3e9b95372dd512a172ce2fdad9a94c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93adfd180ee3889e92302a502a373e3e9b95372dd512a172ce2fdad9a94c3f5->leave($__internal_f93adfd180ee3889e92302a502a373e3e9b95372dd512a172ce2fdad9a94c3f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59bbae910bc003c52438ea1fa0c6cad2ef0140b83b4a80ee0ce0363328d65732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bbae910bc003c52438ea1fa0c6cad2ef0140b83b4a80ee0ce0363328d65732->enter($__internal_59bbae910bc003c52438ea1fa0c6cad2ef0140b83b4a80ee0ce0363328d65732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_59bbae910bc003c52438ea1fa0c6cad2ef0140b83b4a80ee0ce0363328d65732->leave($__internal_59bbae910bc003c52438ea1fa0c6cad2ef0140b83b4a80ee0ce0363328d65732_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d769b566ce2df3fb07c84b964eed16faa09c070192dfe5c59ca4ee7fe738ba7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d769b566ce2df3fb07c84b964eed16faa09c070192dfe5c59ca4ee7fe738ba7f->enter($__internal_d769b566ce2df3fb07c84b964eed16faa09c070192dfe5c59ca4ee7fe738ba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d769b566ce2df3fb07c84b964eed16faa09c070192dfe5c59ca4ee7fe738ba7f->leave($__internal_d769b566ce2df3fb07c84b964eed16faa09c070192dfe5c59ca4ee7fe738ba7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22091bc560502da1723d8779f615924b360b19cdbbffb9d15569ae291cb45783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22091bc560502da1723d8779f615924b360b19cdbbffb9d15569ae291cb45783->enter($__internal_22091bc560502da1723d8779f615924b360b19cdbbffb9d15569ae291cb45783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22091bc560502da1723d8779f615924b360b19cdbbffb9d15569ae291cb45783->leave($__internal_22091bc560502da1723d8779f615924b360b19cdbbffb9d15569ae291cb45783_prof);

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
