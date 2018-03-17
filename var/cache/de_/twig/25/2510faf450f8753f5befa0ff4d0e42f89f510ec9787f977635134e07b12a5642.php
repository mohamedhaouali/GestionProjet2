<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_f5c3a6efbc005679b88bdbb5e77fc81e417fb1600a2d3b157b8def30b511c2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dc24813df89fa261d71418c4d678f2fb68bd509d73cd6ea5c5f1edf55ed1c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc24813df89fa261d71418c4d678f2fb68bd509d73cd6ea5c5f1edf55ed1c46c->enter($__internal_dc24813df89fa261d71418c4d678f2fb68bd509d73cd6ea5c5f1edf55ed1c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc24813df89fa261d71418c4d678f2fb68bd509d73cd6ea5c5f1edf55ed1c46c->leave($__internal_dc24813df89fa261d71418c4d678f2fb68bd509d73cd6ea5c5f1edf55ed1c46c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7dad1b9038eab62949d24151d1085244bda087e3df690a0b112998b7e6e7365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dad1b9038eab62949d24151d1085244bda087e3df690a0b112998b7e6e7365->enter($__internal_f7dad1b9038eab62949d24151d1085244bda087e3df690a0b112998b7e6e7365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f7dad1b9038eab62949d24151d1085244bda087e3df690a0b112998b7e6e7365->leave($__internal_f7dad1b9038eab62949d24151d1085244bda087e3df690a0b112998b7e6e7365_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
