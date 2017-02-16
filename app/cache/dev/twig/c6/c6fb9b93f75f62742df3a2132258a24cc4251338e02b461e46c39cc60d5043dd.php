<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_daa706a4ad488f9de2a80504dc05b0d19988734707212faa1b4142792bf04f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bff24a989b1a5d6f2a1a11bccd91b1b539ee3775f1db733d38b64d4aee15d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bff24a989b1a5d6f2a1a11bccd91b1b539ee3775f1db733d38b64d4aee15d4e->enter($__internal_5bff24a989b1a5d6f2a1a11bccd91b1b539ee3775f1db733d38b64d4aee15d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo " <!-- Page Title -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Register</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"basic-login\">


";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register"), "role" => "form"));
        echo "
    <div class=\"form-group\">
         <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Username</b></label>
         ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-username")));
        echo "
         ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Email</b></label>
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-username")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>Password</b></label>
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-password")));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"register-password2\"><i class=\"icon-lock\"></i> <b>Re-enter Password</b></label>
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "register-password2")));
        echo "
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn pull-right\">Register </button>
        <div class=\"clearfix\"></div>\t
    </div>
";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                   </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-1 social-login\">
\t\t\t\t\t\t<p>You can use your Facebook or Twitter for registration</p>
\t\t\t\t\t\t<div class=\"social-login-buttons\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-facebook-login\">Use Facebook</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-twitter-login\">Use Twitter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

";
        
        $__internal_5bff24a989b1a5d6f2a1a11bccd91b1b539ee3775f1db733d38b64d4aee15d4e->leave($__internal_5bff24a989b1a5d6f2a1a11bccd91b1b539ee3775f1db733d38b64d4aee15d4e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 45,  93 => 44,  87 => 41,  81 => 38,  74 => 34,  70 => 33,  63 => 29,  59 => 28,  52 => 24,  48 => 23,  42 => 20,  22 => 2,);
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
 <!-- Page Title -->
\t\t<div class=\"section section-breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h1>Register</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        
        <div class=\"section\">
\t    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"basic-login\">


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}, 'role': 'form'}) }}
    <div class=\"form-group\">
         <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Username</b></label>
         {{ form_widget(form.username, {'attr': {'class': 'form-control', 'id': 'register-username' }}) }}
         {{ form_errors(form.username) }}
    </div>
    <div class=\"form-group\">
        <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Email</b></label>
        {{ form_widget(form.email,{'attr': {'class': 'form-control', 'id': 'register-username' }}) }}
        {{ form_errors(form.email) }}
    </div>
    <div class=\"form-group\">
        <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>Password</b></label>
        {{ form_widget(form.plainPassword.first,{'attr': {'class': 'form-control', 'id': 'register-password' }}) }}
        {{ form_errors(form.plainPassword.first) }}
    </div>
    <div class=\"form-group\">
        <label for=\"register-password2\"><i class=\"icon-lock\"></i> <b>Re-enter Password</b></label>
        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'id': 'register-password2' }}) }}
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" class=\"btn pull-right\">Register </button>
        <div class=\"clearfix\"></div>\t
    </div>
{{ form_rest(form) }}
{{ form_end(form) }}

                   </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-1 social-login\">
\t\t\t\t\t\t<p>You can use your Facebook or Twitter for registration</p>
\t\t\t\t\t\t<div class=\"social-login-buttons\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-facebook-login\">Use Facebook</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-twitter-login\">Use Twitter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

", "@FOSUser/Registration/register_content.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
