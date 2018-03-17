<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_3b567d0934c344050022d578d25164f8546b68d28f8d43cc6ff9bce975682794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f045375a8ebb70ab8f44a9eeac979f843c06208d01ea6ed1a065f5ad215d98a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f045375a8ebb70ab8f44a9eeac979f843c06208d01ea6ed1a065f5ad215d98a0->enter($__internal_f045375a8ebb70ab8f44a9eeac979f843c06208d01ea6ed1a065f5ad215d98a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f045375a8ebb70ab8f44a9eeac979f843c06208d01ea6ed1a065f5ad215d98a0->leave($__internal_f045375a8ebb70ab8f44a9eeac979f843c06208d01ea6ed1a065f5ad215d98a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59e7e7996036fa5a12e42dad1752b229a22d057a41e93c02d564c8b65c67de1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e7e7996036fa5a12e42dad1752b229a22d057a41e93c02d564c8b65c67de1c->enter($__internal_59e7e7996036fa5a12e42dad1752b229a22d057a41e93c02d564c8b65c67de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_59e7e7996036fa5a12e42dad1752b229a22d057a41e93c02d564c8b65c67de1c->leave($__internal_59e7e7996036fa5a12e42dad1752b229a22d057a41e93c02d564c8b65c67de1c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
