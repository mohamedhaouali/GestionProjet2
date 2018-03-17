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
        $__internal_5cc5c5d2280d94fd830f0637e2420fb1ab40c0b6cdf7aa410b0c6e5d5ee1d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc5c5d2280d94fd830f0637e2420fb1ab40c0b6cdf7aa410b0c6e5d5ee1d8af->enter($__internal_5cc5c5d2280d94fd830f0637e2420fb1ab40c0b6cdf7aa410b0c6e5d5ee1d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc5c5d2280d94fd830f0637e2420fb1ab40c0b6cdf7aa410b0c6e5d5ee1d8af->leave($__internal_5cc5c5d2280d94fd830f0637e2420fb1ab40c0b6cdf7aa410b0c6e5d5ee1d8af_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e28efe4df91261685b5513c7b2e9c87cdde260b514ad202c2fb294a2b320560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e28efe4df91261685b5513c7b2e9c87cdde260b514ad202c2fb294a2b320560->enter($__internal_4e28efe4df91261685b5513c7b2e9c87cdde260b514ad202c2fb294a2b320560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container\" style=\"margin-top: 100px\">     
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    
";
        
        $__internal_4e28efe4df91261685b5513c7b2e9c87cdde260b514ad202c2fb294a2b320560->leave($__internal_4e28efe4df91261685b5513c7b2e9c87cdde260b514ad202c2fb294a2b320560_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a4227968c669a03b04be6cc6a637b52b93ed500bd88a3571b3c564764eb966f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4227968c669a03b04be6cc6a637b52b93ed500bd88a3571b3c564764eb966f->enter($__internal_6a4227968c669a03b04be6cc6a637b52b93ed500bd88a3571b3c564764eb966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_6a4227968c669a03b04be6cc6a637b52b93ed500bd88a3571b3c564764eb966f->leave($__internal_6a4227968c669a03b04be6cc6a637b52b93ed500bd88a3571b3c564764eb966f_prof);

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
