<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_300233804576d50b8e2bf15f1fb95ea05daad635027d32bcd8f76c82127e0b25 extends Twig_Template
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
        $__internal_5b3c9f2756fb7b5a7b08f7778f049bafc57a05c2f6543a71e1d0ca8cdef27349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3c9f2756fb7b5a7b08f7778f049bafc57a05c2f6543a71e1d0ca8cdef27349->enter($__internal_5b3c9f2756fb7b5a7b08f7778f049bafc57a05c2f6543a71e1d0ca8cdef27349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3c9f2756fb7b5a7b08f7778f049bafc57a05c2f6543a71e1d0ca8cdef27349->leave($__internal_5b3c9f2756fb7b5a7b08f7778f049bafc57a05c2f6543a71e1d0ca8cdef27349_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdd687d170567c2b4a1ee1da442b9efef76723ef3dada58a4e1769ca2f3d340d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd687d170567c2b4a1ee1da442b9efef76723ef3dada58a4e1769ca2f3d340d->enter($__internal_bdd687d170567c2b4a1ee1da442b9efef76723ef3dada58a4e1769ca2f3d340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container\" style=\"margin-top: 100px\">     
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    
";
        
        $__internal_bdd687d170567c2b4a1ee1da442b9efef76723ef3dada58a4e1769ca2f3d340d->leave($__internal_bdd687d170567c2b4a1ee1da442b9efef76723ef3dada58a4e1769ca2f3d340d_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dfcdc74cee0f805e19f902727f1c22a176aac8527efb5e60b817c01b8aacc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfcdc74cee0f805e19f902727f1c22a176aac8527efb5e60b817c01b8aacc50->enter($__internal_1dfcdc74cee0f805e19f902727f1c22a176aac8527efb5e60b817c01b8aacc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_1dfcdc74cee0f805e19f902727f1c22a176aac8527efb5e60b817c01b8aacc50->leave($__internal_1dfcdc74cee0f805e19f902727f1c22a176aac8527efb5e60b817c01b8aacc50_prof);

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
