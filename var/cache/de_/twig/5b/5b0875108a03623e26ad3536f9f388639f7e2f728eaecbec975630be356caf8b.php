<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_98990333f16bf364a94d136f6e1ffee97d9cad6f5865b149f45f022bcae2b4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_8b8b9a5dd0db728c915b74f37368d5f6a9b0352251d1075fcf8fb73402db0f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8b9a5dd0db728c915b74f37368d5f6a9b0352251d1075fcf8fb73402db0f98->enter($__internal_8b8b9a5dd0db728c915b74f37368d5f6a9b0352251d1075fcf8fb73402db0f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8b9a5dd0db728c915b74f37368d5f6a9b0352251d1075fcf8fb73402db0f98->leave($__internal_8b8b9a5dd0db728c915b74f37368d5f6a9b0352251d1075fcf8fb73402db0f98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_926251863c8466a8aeb9a2688800f43711b8aca706c768f45fe7c9820e619494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926251863c8466a8aeb9a2688800f43711b8aca706c768f45fe7c9820e619494->enter($__internal_926251863c8466a8aeb9a2688800f43711b8aca706c768f45fe7c9820e619494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_926251863c8466a8aeb9a2688800f43711b8aca706c768f45fe7c9820e619494->leave($__internal_926251863c8466a8aeb9a2688800f43711b8aca706c768f45fe7c9820e619494_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
