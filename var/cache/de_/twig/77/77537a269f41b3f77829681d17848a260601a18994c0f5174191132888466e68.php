<?php

/* UserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6bb9ef66ecb88f99ec722720766321e36fb946d73876405ec4fdf8ea5bc919a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f339d8343981edaa753bf0916fdf5acf6c6ca3dea79a3b0c48309bb87f87a5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f339d8343981edaa753bf0916fdf5acf6c6ca3dea79a3b0c48309bb87f87a5ed->enter($__internal_f339d8343981edaa753bf0916fdf5acf6c6ca3dea79a3b0c48309bb87f87a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f339d8343981edaa753bf0916fdf5acf6c6ca3dea79a3b0c48309bb87f87a5ed->leave($__internal_f339d8343981edaa753bf0916fdf5acf6c6ca3dea79a3b0c48309bb87f87a5ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d3084e4d5a02bef2c74a352843784c716a16c7ddfc86ed53f9e2eeab2e38e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3084e4d5a02bef2c74a352843784c716a16c7ddfc86ed53f9e2eeab2e38e12->enter($__internal_1d3084e4d5a02bef2c74a352843784c716a16c7ddfc86ed53f9e2eeab2e38e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1d3084e4d5a02bef2c74a352843784c716a16c7ddfc86ed53f9e2eeab2e38e12->leave($__internal_1d3084e4d5a02bef2c74a352843784c716a16c7ddfc86ed53f9e2eeab2e38e12_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
