<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_0aa1bbf94be117c8de6f9c67cedc534de07413fc4e4803ac5d7cb5a3d4589a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_9d06a6aa8eef05491d804578ae4decb566e9a174f4b425e5c8fe2643df84ebc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d06a6aa8eef05491d804578ae4decb566e9a174f4b425e5c8fe2643df84ebc5->enter($__internal_9d06a6aa8eef05491d804578ae4decb566e9a174f4b425e5c8fe2643df84ebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d06a6aa8eef05491d804578ae4decb566e9a174f4b425e5c8fe2643df84ebc5->leave($__internal_9d06a6aa8eef05491d804578ae4decb566e9a174f4b425e5c8fe2643df84ebc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_342f5bce050f2215bd5c98afb81b37c214864b75a483cf6fda1028576ea23632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342f5bce050f2215bd5c98afb81b37c214864b75a483cf6fda1028576ea23632->enter($__internal_342f5bce050f2215bd5c98afb81b37c214864b75a483cf6fda1028576ea23632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_342f5bce050f2215bd5c98afb81b37c214864b75a483cf6fda1028576ea23632->leave($__internal_342f5bce050f2215bd5c98afb81b37c214864b75a483cf6fda1028576ea23632_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
