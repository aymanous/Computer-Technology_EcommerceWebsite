<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_4fc82ecb2350d13a06531c1940384bdc0cb4772992e8ba9126505cfb6d8e5040 extends Twig_Template
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
        $__internal_15e02181d01c1e63b2f1f1125e8ea2602e15f9201fa45d656994cf169763358f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e02181d01c1e63b2f1f1125e8ea2602e15f9201fa45d656994cf169763358f->enter($__internal_15e02181d01c1e63b2f1f1125e8ea2602e15f9201fa45d656994cf169763358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

        <!-- Page Title -->
        <div class=\"section section-breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"basic-login\">
                            <form role=\"form\" role=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            ";
        // line 25
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 26
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                            ";
        }
        // line 28
        echo "                                <div class=\"form-group\">
                                    <label for=\"username\"><i class=\"icon-user\"></i> <b>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</b></label>
                                    <input class=\"form-control\" id=\"username\" name=\"_username\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\"><i class=\"icon-lock\"></i> <b>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</b></label>
                                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"_password\" required=\"required\" >
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"remember_me\" class=\"checkbox\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                    </label>
                                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Forgot password?</a>
                                    <button type=\"submit\" class=\"btn pull-right\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Login</button>
                                    <div class=\"clearfix\"></div>
                                </div>       

                          </form>
                        </div>
                    </div>
                    <div class=\"col-sm-7 social-login\">
                        <p>Or login with your Facebook or Twitter</p>
                        <div class=\"social-login-buttons\">
                            <a href=\"#\" class=\"btn-facebook-login\">Login with Facebook</a>
                            <a href=\"#\" class=\"btn-twitter-login\">Login with Twitter</a>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"not-member\">
                            <p>Not a member? <a href=\"page-register.html\">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        
        $__internal_15e02181d01c1e63b2f1f1125e8ea2602e15f9201fa45d656994cf169763358f->leave($__internal_15e02181d01c1e63b2f1f1125e8ea2602e15f9201fa45d656994cf169763358f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  91 => 40,  85 => 37,  78 => 33,  72 => 30,  68 => 29,  65 => 28,  59 => 26,  57 => 25,  53 => 24,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


        <!-- Page Title -->
        <div class=\"section section-breadcrumbs\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <div class=\"basic-login\">
                            <form role=\"form\" role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            {% endif %}
                                <div class=\"form-group\">
                                    <label for=\"username\"><i class=\"icon-user\"></i> <b>{{ 'security.login.username'|trans }}</b></label>
                                    <input class=\"form-control\" id=\"username\" name=\"_username\" type=\"text\" value=\"{{ last_username }}\" required=\"required\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\"><i class=\"icon-lock\"></i> <b>{{ 'security.login.password'|trans }}</b></label>
                                    <input class=\"form-control\" id=\"password\" type=\"password\" name=\"_password\" required=\"required\" >
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"remember_me\" class=\"checkbox\">{{ 'security.login.remember_me'|trans }}
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                    </label>
                                    <a href=\"{{ path('fos_user_resetting_request') }}\">Forgot password?</a>
                                    <button type=\"submit\" class=\"btn pull-right\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">Login</button>
                                    <div class=\"clearfix\"></div>
                                </div>       

                          </form>
                        </div>
                    </div>
                    <div class=\"col-sm-7 social-login\">
                        <p>Or login with your Facebook or Twitter</p>
                        <div class=\"social-login-buttons\">
                            <a href=\"#\" class=\"btn-facebook-login\">Login with Facebook</a>
                            <a href=\"#\" class=\"btn-twitter-login\">Login with Twitter</a>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"not-member\">
                            <p>Not a member? <a href=\"page-register.html\">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ", "@FOSUser/Security/login_content.html.twig", "/vagrant/conquerors/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
