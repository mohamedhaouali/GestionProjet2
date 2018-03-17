<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fb56e8eaf860705df41a7eb2b4cf20faa31f5f50111b0e82a7362847b21a4423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_42f9fd1bb6a5bffdfee2d9f1b7f597f83aadf62ad437e63e3e4fbcce8487e967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f9fd1bb6a5bffdfee2d9f1b7f597f83aadf62ad437e63e3e4fbcce8487e967->enter($__internal_42f9fd1bb6a5bffdfee2d9f1b7f597f83aadf62ad437e63e3e4fbcce8487e967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f9fd1bb6a5bffdfee2d9f1b7f597f83aadf62ad437e63e3e4fbcce8487e967->leave($__internal_42f9fd1bb6a5bffdfee2d9f1b7f597f83aadf62ad437e63e3e4fbcce8487e967_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa872296d7bf6e72f16b09f6e478d9a31362ce53b72455ffabe614a1107990c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa872296d7bf6e72f16b09f6e478d9a31362ce53b72455ffabe614a1107990c4->enter($__internal_aa872296d7bf6e72f16b09f6e478d9a31362ce53b72455ffabe614a1107990c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_aa872296d7bf6e72f16b09f6e478d9a31362ce53b72455ffabe614a1107990c4->leave($__internal_aa872296d7bf6e72f16b09f6e478d9a31362ce53b72455ffabe614a1107990c4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
