<?php

/* UserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f59a4b1f55ac2da9522534fb5ac79dee8546826b63dba9a18aba39a6c39ec37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_f5613ba922a225490b7bb10ab00a9eeb7121b555d93e9abe373526ac5dd9f31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5613ba922a225490b7bb10ab00a9eeb7121b555d93e9abe373526ac5dd9f31c->enter($__internal_f5613ba922a225490b7bb10ab00a9eeb7121b555d93e9abe373526ac5dd9f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5613ba922a225490b7bb10ab00a9eeb7121b555d93e9abe373526ac5dd9f31c->leave($__internal_f5613ba922a225490b7bb10ab00a9eeb7121b555d93e9abe373526ac5dd9f31c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e8ad85285c614744821ff9139e7d63d5065d0c1a61cc85d748b70ef2a6f71de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8ad85285c614744821ff9139e7d63d5065d0c1a61cc85d748b70ef2a6f71de->enter($__internal_4e8ad85285c614744821ff9139e7d63d5065d0c1a61cc85d748b70ef2a6f71de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4e8ad85285c614744821ff9139e7d63d5065d0c1a61cc85d748b70ef2a6f71de->leave($__internal_4e8ad85285c614744821ff9139e7d63d5065d0c1a61cc85d748b70ef2a6f71de_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
