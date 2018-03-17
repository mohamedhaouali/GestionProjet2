<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b02e27bbaae854b9dcf9f230d950982ce1040cf5f92fe6125b5554bcdf673ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dacc1bdead6eb5fe85c25ebf18c006c8c8dad02fbd2542f530d2c8c8fa24cb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacc1bdead6eb5fe85c25ebf18c006c8c8dad02fbd2542f530d2c8c8fa24cb06->enter($__internal_dacc1bdead6eb5fe85c25ebf18c006c8c8dad02fbd2542f530d2c8c8fa24cb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dacc1bdead6eb5fe85c25ebf18c006c8c8dad02fbd2542f530d2c8c8fa24cb06->leave($__internal_dacc1bdead6eb5fe85c25ebf18c006c8c8dad02fbd2542f530d2c8c8fa24cb06_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e2cf560fd3e125626c3641eb5760e8093de0c4296bdd908d902a1628e5be6c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cf560fd3e125626c3641eb5760e8093de0c4296bdd908d902a1628e5be6c4e->enter($__internal_e2cf560fd3e125626c3641eb5760e8093de0c4296bdd908d902a1628e5be6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e2cf560fd3e125626c3641eb5760e8093de0c4296bdd908d902a1628e5be6c4e->leave($__internal_e2cf560fd3e125626c3641eb5760e8093de0c4296bdd908d902a1628e5be6c4e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eaf2b64aeee673e9c705caa81cee4bce4259bf06b026cdd6eb010e1d42205032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf2b64aeee673e9c705caa81cee4bce4259bf06b026cdd6eb010e1d42205032->enter($__internal_eaf2b64aeee673e9c705caa81cee4bce4259bf06b026cdd6eb010e1d42205032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eaf2b64aeee673e9c705caa81cee4bce4259bf06b026cdd6eb010e1d42205032->leave($__internal_eaf2b64aeee673e9c705caa81cee4bce4259bf06b026cdd6eb010e1d42205032_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e6b6338ef223ab27f13457aa1f7dd2cfd5119ccff4c4f51f12a0c6b7a0f9c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6b6338ef223ab27f13457aa1f7dd2cfd5119ccff4c4f51f12a0c6b7a0f9c01->enter($__internal_1e6b6338ef223ab27f13457aa1f7dd2cfd5119ccff4c4f51f12a0c6b7a0f9c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e6b6338ef223ab27f13457aa1f7dd2cfd5119ccff4c4f51f12a0c6b7a0f9c01->leave($__internal_1e6b6338ef223ab27f13457aa1f7dd2cfd5119ccff4c4f51f12a0c6b7a0f9c01_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
