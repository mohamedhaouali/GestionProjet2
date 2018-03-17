<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_6c4a90e6e8c909938f5a8da6e0a9f4e73b1f28b10dec256fa0d78abbfaca87b6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd6323927fc6f0ca3f4fc9d637e8c92a7505785e91397c7e0f308ceb5aac9c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6323927fc6f0ca3f4fc9d637e8c92a7505785e91397c7e0f308ceb5aac9c1a->enter($__internal_bd6323927fc6f0ca3f4fc9d637e8c92a7505785e91397c7e0f308ceb5aac9c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6323927fc6f0ca3f4fc9d637e8c92a7505785e91397c7e0f308ceb5aac9c1a->leave($__internal_bd6323927fc6f0ca3f4fc9d637e8c92a7505785e91397c7e0f308ceb5aac9c1a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6fb65be8caddf58340355799c7c8082c6211d6f266136d3d2d471b5822736f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb65be8caddf58340355799c7c8082c6211d6f266136d3d2d471b5822736f53->enter($__internal_6fb65be8caddf58340355799c7c8082c6211d6f266136d3d2d471b5822736f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_6fb65be8caddf58340355799c7c8082c6211d6f266136d3d2d471b5822736f53->leave($__internal_6fb65be8caddf58340355799c7c8082c6211d6f266136d3d2d471b5822736f53_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
