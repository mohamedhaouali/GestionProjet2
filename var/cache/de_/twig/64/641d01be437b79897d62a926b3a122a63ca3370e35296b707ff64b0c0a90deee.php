<?php

/* UserBundle:Registration:check_email.html.twig */
class __TwigTemplate_dc0c36955bccd0205ed0db1ee7b3d41a4e2293c00f33d882d3c2f78fb449f70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_0a3ce6ae297c82cfaf0cb48c1bb535bb8e4e4cdbe3bbabe9320d4130237b74ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3ce6ae297c82cfaf0cb48c1bb535bb8e4e4cdbe3bbabe9320d4130237b74ff->enter($__internal_0a3ce6ae297c82cfaf0cb48c1bb535bb8e4e4cdbe3bbabe9320d4130237b74ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a3ce6ae297c82cfaf0cb48c1bb535bb8e4e4cdbe3bbabe9320d4130237b74ff->leave($__internal_0a3ce6ae297c82cfaf0cb48c1bb535bb8e4e4cdbe3bbabe9320d4130237b74ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1864f9be038a189ba5e5eb2a92fb9577a21f054e72d454c04f70af5e49378dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1864f9be038a189ba5e5eb2a92fb9577a21f054e72d454c04f70af5e49378dbd->enter($__internal_1864f9be038a189ba5e5eb2a92fb9577a21f054e72d454c04f70af5e49378dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1864f9be038a189ba5e5eb2a92fb9577a21f054e72d454c04f70af5e49378dbd->leave($__internal_1864f9be038a189ba5e5eb2a92fb9577a21f054e72d454c04f70af5e49378dbd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
