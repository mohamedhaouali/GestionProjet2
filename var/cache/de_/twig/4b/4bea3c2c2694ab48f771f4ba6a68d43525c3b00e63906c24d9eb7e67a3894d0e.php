<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_adaaa9ede731b612914c17bf100cfd489df6b068731e0c34b8a7397fc301c031 extends Twig_Template
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
        $__internal_31cc355822be8ff894c6caf1a7f8a59d6d572d22374f054bb0e41a4b46415a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cc355822be8ff894c6caf1a7f8a59d6d572d22374f054bb0e41a4b46415a60->enter($__internal_31cc355822be8ff894c6caf1a7f8a59d6d572d22374f054bb0e41a4b46415a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31cc355822be8ff894c6caf1a7f8a59d6d572d22374f054bb0e41a4b46415a60->leave($__internal_31cc355822be8ff894c6caf1a7f8a59d6d572d22374f054bb0e41a4b46415a60_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8d6a5247098337d61a3ecb494efb23dc2a8b12a98e3d70792aedae5435f18cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d6a5247098337d61a3ecb494efb23dc2a8b12a98e3d70792aedae5435f18cb->enter($__internal_f8d6a5247098337d61a3ecb494efb23dc2a8b12a98e3d70792aedae5435f18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f8d6a5247098337d61a3ecb494efb23dc2a8b12a98e3d70792aedae5435f18cb->leave($__internal_f8d6a5247098337d61a3ecb494efb23dc2a8b12a98e3d70792aedae5435f18cb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3655d56b59347864d38e80e13f8d100d2fa5073056a910ed4616d86832bcabca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655d56b59347864d38e80e13f8d100d2fa5073056a910ed4616d86832bcabca->enter($__internal_3655d56b59347864d38e80e13f8d100d2fa5073056a910ed4616d86832bcabca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3655d56b59347864d38e80e13f8d100d2fa5073056a910ed4616d86832bcabca->leave($__internal_3655d56b59347864d38e80e13f8d100d2fa5073056a910ed4616d86832bcabca_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2efba074c73845bccf54a3be74edd61081b901f0bdf7e531f82261481845619d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efba074c73845bccf54a3be74edd61081b901f0bdf7e531f82261481845619d->enter($__internal_2efba074c73845bccf54a3be74edd61081b901f0bdf7e531f82261481845619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2efba074c73845bccf54a3be74edd61081b901f0bdf7e531f82261481845619d->leave($__internal_2efba074c73845bccf54a3be74edd61081b901f0bdf7e531f82261481845619d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
