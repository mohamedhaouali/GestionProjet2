<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_8b4d4facd9747e5d1ad9cb897443c7dd1247394837432b5400c663884bd6d94c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_74353c3a7b21a5607595439821a3f44e67e9dfc9b7eebb3bb657ac01de0047be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74353c3a7b21a5607595439821a3f44e67e9dfc9b7eebb3bb657ac01de0047be->enter($__internal_74353c3a7b21a5607595439821a3f44e67e9dfc9b7eebb3bb657ac01de0047be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74353c3a7b21a5607595439821a3f44e67e9dfc9b7eebb3bb657ac01de0047be->leave($__internal_74353c3a7b21a5607595439821a3f44e67e9dfc9b7eebb3bb657ac01de0047be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff039bc7d58500d82c08aaff46c3fadb991a54a1b4f7e5089d3bc53a3f7fd77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff039bc7d58500d82c08aaff46c3fadb991a54a1b4f7e5089d3bc53a3f7fd77c->enter($__internal_ff039bc7d58500d82c08aaff46c3fadb991a54a1b4f7e5089d3bc53a3f7fd77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ff039bc7d58500d82c08aaff46c3fadb991a54a1b4f7e5089d3bc53a3f7fd77c->leave($__internal_ff039bc7d58500d82c08aaff46c3fadb991a54a1b4f7e5089d3bc53a3f7fd77c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
