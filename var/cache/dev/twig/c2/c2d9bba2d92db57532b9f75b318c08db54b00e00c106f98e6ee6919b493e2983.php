<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fbd175a8c1c65a3dfbbb0d31b8175b644a8dad6b489a63d11be742f30f343e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8860b4df11500d6b8a6fad86ccf7aa3a3be3392ec243114251315416073dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8860b4df11500d6b8a6fad86ccf7aa3a3be3392ec243114251315416073dee0->enter($__internal_b8860b4df11500d6b8a6fad86ccf7aa3a3be3392ec243114251315416073dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8860b4df11500d6b8a6fad86ccf7aa3a3be3392ec243114251315416073dee0->leave($__internal_b8860b4df11500d6b8a6fad86ccf7aa3a3be3392ec243114251315416073dee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80784c55685aa01ab3be69b184883090eb9d97de966093cf6dfb60d0c3b7fe73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80784c55685aa01ab3be69b184883090eb9d97de966093cf6dfb60d0c3b7fe73->enter($__internal_80784c55685aa01ab3be69b184883090eb9d97de966093cf6dfb60d0c3b7fe73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_80784c55685aa01ab3be69b184883090eb9d97de966093cf6dfb60d0c3b7fe73->leave($__internal_80784c55685aa01ab3be69b184883090eb9d97de966093cf6dfb60d0c3b7fe73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
