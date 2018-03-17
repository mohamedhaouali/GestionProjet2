<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_10f8c53b868a4577e65bf8eb246785b397d60e15b9d34bf5eec0680a1641cdd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_add99273ba327a7c38488a15b19a0a524e3576bf1151c171922c130e73cd03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add99273ba327a7c38488a15b19a0a524e3576bf1151c171922c130e73cd03ce->enter($__internal_add99273ba327a7c38488a15b19a0a524e3576bf1151c171922c130e73cd03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add99273ba327a7c38488a15b19a0a524e3576bf1151c171922c130e73cd03ce->leave($__internal_add99273ba327a7c38488a15b19a0a524e3576bf1151c171922c130e73cd03ce_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_d36d33e86fd44cc084bdedd865bcef8a99eb206cef2e8a30b956c302d0119e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36d33e86fd44cc084bdedd865bcef8a99eb206cef2e8a30b956c302d0119e81->enter($__internal_d36d33e86fd44cc084bdedd865bcef8a99eb206cef2e8a30b956c302d0119e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container\" style=\"margin-top: 100px\">     
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    
";
        
        $__internal_d36d33e86fd44cc084bdedd865bcef8a99eb206cef2e8a30b956c302d0119e81->leave($__internal_d36d33e86fd44cc084bdedd865bcef8a99eb206cef2e8a30b956c302d0119e81_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f196d530ae364a7fbb920210e34a62abb1d1450bb5ccce89245ce2e202525d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f196d530ae364a7fbb920210e34a62abb1d1450bb5ccce89245ce2e202525d6->enter($__internal_1f196d530ae364a7fbb920210e34a62abb1d1450bb5ccce89245ce2e202525d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_1f196d530ae364a7fbb920210e34a62abb1d1450bb5ccce89245ce2e202525d6->leave($__internal_1f196d530ae364a7fbb920210e34a62abb1d1450bb5ccce89245ce2e202525d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 31,  56 => 30,  47 => 32,  45 => 30,  41 => 28,  35 => 27,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}
        
      {#  <div>
            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
#}
        
   
{% block body %}
    <div class=\"container\" style=\"margin-top: 100px\">     
        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    
{% endblock %}";
    }
}
