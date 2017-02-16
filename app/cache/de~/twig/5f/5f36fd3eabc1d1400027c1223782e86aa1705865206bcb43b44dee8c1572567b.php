<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_82352127c87fcb1752a469cefa463fbd2febf0788939e6441b975d52af349673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_163aad21e681940b8ba9cbabb3653d4291d6165ff39b8f9a6aeba040127eea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163aad21e681940b8ba9cbabb3653d4291d6165ff39b8f9a6aeba040127eea7d->enter($__internal_163aad21e681940b8ba9cbabb3653d4291d6165ff39b8f9a6aeba040127eea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163aad21e681940b8ba9cbabb3653d4291d6165ff39b8f9a6aeba040127eea7d->leave($__internal_163aad21e681940b8ba9cbabb3653d4291d6165ff39b8f9a6aeba040127eea7d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2343d61c87119e91d1e33f85336a2ec31136f74906a36d7f464f30ae081cceb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2343d61c87119e91d1e33f85336a2ec31136f74906a36d7f464f30ae081cceb7->enter($__internal_2343d61c87119e91d1e33f85336a2ec31136f74906a36d7f464f30ae081cceb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2343d61c87119e91d1e33f85336a2ec31136f74906a36d7f464f30ae081cceb7->leave($__internal_2343d61c87119e91d1e33f85336a2ec31136f74906a36d7f464f30ae081cceb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
