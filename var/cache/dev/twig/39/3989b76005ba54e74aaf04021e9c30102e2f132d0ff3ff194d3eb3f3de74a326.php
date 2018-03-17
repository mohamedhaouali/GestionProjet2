<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8b4d4facd9747e5d1ad9cb897443c7dd1247394837432b5400c663884bd6d94c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_099022c3a37041b3cf0d9401a8293183730679d6792e52bdac95a1feea2e4d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099022c3a37041b3cf0d9401a8293183730679d6792e52bdac95a1feea2e4d45->enter($__internal_099022c3a37041b3cf0d9401a8293183730679d6792e52bdac95a1feea2e4d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099022c3a37041b3cf0d9401a8293183730679d6792e52bdac95a1feea2e4d45->leave($__internal_099022c3a37041b3cf0d9401a8293183730679d6792e52bdac95a1feea2e4d45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2a697dc77a076900f34582c515e529b972739f83a21e948535ab56b3f7542fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a697dc77a076900f34582c515e529b972739f83a21e948535ab56b3f7542fa->enter($__internal_c2a697dc77a076900f34582c515e529b972739f83a21e948535ab56b3f7542fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c2a697dc77a076900f34582c515e529b972739f83a21e948535ab56b3f7542fa->leave($__internal_c2a697dc77a076900f34582c515e529b972739f83a21e948535ab56b3f7542fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
