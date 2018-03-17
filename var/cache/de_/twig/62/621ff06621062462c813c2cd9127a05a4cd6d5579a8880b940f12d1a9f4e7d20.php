<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_8f4248ce3a72b641d489b5677403152f92d59ef3751a043327f39b2991c355e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_5695bc235f746b54ef8542577936615a94dc35ae181a2878c7cbf5161e54276e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5695bc235f746b54ef8542577936615a94dc35ae181a2878c7cbf5161e54276e->enter($__internal_5695bc235f746b54ef8542577936615a94dc35ae181a2878c7cbf5161e54276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5695bc235f746b54ef8542577936615a94dc35ae181a2878c7cbf5161e54276e->leave($__internal_5695bc235f746b54ef8542577936615a94dc35ae181a2878c7cbf5161e54276e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6db255e4a83c757e472692082a8dcd14254f880492305498c4e7d747c77b7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6db255e4a83c757e472692082a8dcd14254f880492305498c4e7d747c77b7de->enter($__internal_c6db255e4a83c757e472692082a8dcd14254f880492305498c4e7d747c77b7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c6db255e4a83c757e472692082a8dcd14254f880492305498c4e7d747c77b7de->leave($__internal_c6db255e4a83c757e472692082a8dcd14254f880492305498c4e7d747c77b7de_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
