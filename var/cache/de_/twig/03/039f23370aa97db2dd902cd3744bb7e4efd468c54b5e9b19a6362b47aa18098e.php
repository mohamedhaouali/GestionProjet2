<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_a3f48f38c320a5f298cde8a6f038495962fba28dce5854a5d1518ceaec788e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20916571464183855cc7d0adc7080bd5577781b92e14aa72764b43de8b9fb99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20916571464183855cc7d0adc7080bd5577781b92e14aa72764b43de8b9fb99e->enter($__internal_20916571464183855cc7d0adc7080bd5577781b92e14aa72764b43de8b9fb99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20916571464183855cc7d0adc7080bd5577781b92e14aa72764b43de8b9fb99e->leave($__internal_20916571464183855cc7d0adc7080bd5577781b92e14aa72764b43de8b9fb99e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd713d1009cee834061c27854f0aaf270d01fefb127e2a45d310f7cd9fffbb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd713d1009cee834061c27854f0aaf270d01fefb127e2a45d310f7cd9fffbb04->enter($__internal_cd713d1009cee834061c27854f0aaf270d01fefb127e2a45d310f7cd9fffbb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_cd713d1009cee834061c27854f0aaf270d01fefb127e2a45d310f7cd9fffbb04->leave($__internal_cd713d1009cee834061c27854f0aaf270d01fefb127e2a45d310f7cd9fffbb04_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
