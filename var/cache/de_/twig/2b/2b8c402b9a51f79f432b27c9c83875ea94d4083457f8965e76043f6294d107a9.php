<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ae56b5e8e2c52d9cd013716b00c172dccebe6c8fea8b2de2994e8b3607db43e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_41ea8c1d9bb00aca10259df60f39d3b16283723e6cc67ee10eb52319678ded39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ea8c1d9bb00aca10259df60f39d3b16283723e6cc67ee10eb52319678ded39->enter($__internal_41ea8c1d9bb00aca10259df60f39d3b16283723e6cc67ee10eb52319678ded39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ea8c1d9bb00aca10259df60f39d3b16283723e6cc67ee10eb52319678ded39->leave($__internal_41ea8c1d9bb00aca10259df60f39d3b16283723e6cc67ee10eb52319678ded39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_489fd662a352930b067f2cf9f73be0999328f7b5ed25276e5f394540abfd28ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489fd662a352930b067f2cf9f73be0999328f7b5ed25276e5f394540abfd28ab->enter($__internal_489fd662a352930b067f2cf9f73be0999328f7b5ed25276e5f394540abfd28ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_489fd662a352930b067f2cf9f73be0999328f7b5ed25276e5f394540abfd28ab->leave($__internal_489fd662a352930b067f2cf9f73be0999328f7b5ed25276e5f394540abfd28ab_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
