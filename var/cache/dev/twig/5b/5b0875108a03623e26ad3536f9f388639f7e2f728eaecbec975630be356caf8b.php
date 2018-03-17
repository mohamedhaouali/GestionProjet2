<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_98990333f16bf364a94d136f6e1ffee97d9cad6f5865b149f45f022bcae2b4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_92961ed14a2e74a5a157c6554f7ac4cb8de349c64fe365632e4d8200f385f6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92961ed14a2e74a5a157c6554f7ac4cb8de349c64fe365632e4d8200f385f6a8->enter($__internal_92961ed14a2e74a5a157c6554f7ac4cb8de349c64fe365632e4d8200f385f6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92961ed14a2e74a5a157c6554f7ac4cb8de349c64fe365632e4d8200f385f6a8->leave($__internal_92961ed14a2e74a5a157c6554f7ac4cb8de349c64fe365632e4d8200f385f6a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9316ffc81791322f6ca82713b74e8c3ad810c11d185c89df70a320d0e98cae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9316ffc81791322f6ca82713b74e8c3ad810c11d185c89df70a320d0e98cae7->enter($__internal_e9316ffc81791322f6ca82713b74e8c3ad810c11d185c89df70a320d0e98cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e9316ffc81791322f6ca82713b74e8c3ad810c11d185c89df70a320d0e98cae7->leave($__internal_e9316ffc81791322f6ca82713b74e8c3ad810c11d185c89df70a320d0e98cae7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
