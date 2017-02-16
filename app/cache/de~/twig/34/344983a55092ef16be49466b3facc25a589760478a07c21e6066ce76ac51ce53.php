<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_27287cc8991f44bf150a6b77c3c731d9d96cc5c0701fcd8f52c935c3afb9a9b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ef92f9b9f04ec3bfbe920b25f558ff3daeb065bf078aacebeacd21f18344ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef92f9b9f04ec3bfbe920b25f558ff3daeb065bf078aacebeacd21f18344ba3->enter($__internal_9ef92f9b9f04ec3bfbe920b25f558ff3daeb065bf078aacebeacd21f18344ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9ef92f9b9f04ec3bfbe920b25f558ff3daeb065bf078aacebeacd21f18344ba3->leave($__internal_9ef92f9b9f04ec3bfbe920b25f558ff3daeb065bf078aacebeacd21f18344ba3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_796c04ed3f63fd7dffd26c3036b923d2690be083d75d08f8003fdb232e7c648d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796c04ed3f63fd7dffd26c3036b923d2690be083d75d08f8003fdb232e7c648d->enter($__internal_796c04ed3f63fd7dffd26c3036b923d2690be083d75d08f8003fdb232e7c648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_796c04ed3f63fd7dffd26c3036b923d2690be083d75d08f8003fdb232e7c648d->leave($__internal_796c04ed3f63fd7dffd26c3036b923d2690be083d75d08f8003fdb232e7c648d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ff1a5beb094be70d3ee8f4ef94f7b3ead74adc05c3873cb8244c6cdfc548057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1a5beb094be70d3ee8f4ef94f7b3ead74adc05c3873cb8244c6cdfc548057b->enter($__internal_ff1a5beb094be70d3ee8f4ef94f7b3ead74adc05c3873cb8244c6cdfc548057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ff1a5beb094be70d3ee8f4ef94f7b3ead74adc05c3873cb8244c6cdfc548057b->leave($__internal_ff1a5beb094be70d3ee8f4ef94f7b3ead74adc05c3873cb8244c6cdfc548057b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9bc328971385ccfdd587e36dd2a1d36453e399ea1ef4a6fe26fd45d3e134fc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc328971385ccfdd587e36dd2a1d36453e399ea1ef4a6fe26fd45d3e134fc38->enter($__internal_9bc328971385ccfdd587e36dd2a1d36453e399ea1ef4a6fe26fd45d3e134fc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9bc328971385ccfdd587e36dd2a1d36453e399ea1ef4a6fe26fd45d3e134fc38->leave($__internal_9bc328971385ccfdd587e36dd2a1d36453e399ea1ef4a6fe26fd45d3e134fc38_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
