<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_e3a5e1c239a81c750e02fc40cd7cd952b410f72c036a28c1a1cec057113f17dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_cdfd75fb31160ca55374e0f527b684d7471fcd5567ce29ef23000e8717547b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfd75fb31160ca55374e0f527b684d7471fcd5567ce29ef23000e8717547b31->enter($__internal_cdfd75fb31160ca55374e0f527b684d7471fcd5567ce29ef23000e8717547b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfd75fb31160ca55374e0f527b684d7471fcd5567ce29ef23000e8717547b31->leave($__internal_cdfd75fb31160ca55374e0f527b684d7471fcd5567ce29ef23000e8717547b31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10adbec9c489fa2dfe49650b4c770d092edf6c62a9de4f75ff6d2f0b81caa696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10adbec9c489fa2dfe49650b4c770d092edf6c62a9de4f75ff6d2f0b81caa696->enter($__internal_10adbec9c489fa2dfe49650b4c770d092edf6c62a9de4f75ff6d2f0b81caa696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_10adbec9c489fa2dfe49650b4c770d092edf6c62a9de4f75ff6d2f0b81caa696->leave($__internal_10adbec9c489fa2dfe49650b4c770d092edf6c62a9de4f75ff6d2f0b81caa696_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
