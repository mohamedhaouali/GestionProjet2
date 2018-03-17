<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_00813dedf9e067c7a3bf32283e7a4d653245f5e64063a713b64ea5f63f94a57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f3997dd245e207affd10c16435a7c19e605bf26df77174cdd290da781571e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f3997dd245e207affd10c16435a7c19e605bf26df77174cdd290da781571e4->enter($__internal_55f3997dd245e207affd10c16435a7c19e605bf26df77174cdd290da781571e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f3997dd245e207affd10c16435a7c19e605bf26df77174cdd290da781571e4->leave($__internal_55f3997dd245e207affd10c16435a7c19e605bf26df77174cdd290da781571e4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5c0543e97975ee8282d167f5b8590a115450ebb87f2e00ca676c04854ce5369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0543e97975ee8282d167f5b8590a115450ebb87f2e00ca676c04854ce5369f->enter($__internal_5c0543e97975ee8282d167f5b8590a115450ebb87f2e00ca676c04854ce5369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_5c0543e97975ee8282d167f5b8590a115450ebb87f2e00ca676c04854ce5369f->leave($__internal_5c0543e97975ee8282d167f5b8590a115450ebb87f2e00ca676c04854ce5369f_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_68322757d48f82b076a5e8d05df9ad51c5450d3541a9a1a3ccc3822969448c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68322757d48f82b076a5e8d05df9ad51c5450d3541a9a1a3ccc3822969448c8d->enter($__internal_68322757d48f82b076a5e8d05df9ad51c5450d3541a9a1a3ccc3822969448c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_68322757d48f82b076a5e8d05df9ad51c5450d3541a9a1a3ccc3822969448c8d->leave($__internal_68322757d48f82b076a5e8d05df9ad51c5450d3541a9a1a3ccc3822969448c8d_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a0dddf896c0bbd35e6ad5da4884c1b4e852b476288ff857bd45d3d4bffa290d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0dddf896c0bbd35e6ad5da4884c1b4e852b476288ff857bd45d3d4bffa290d->enter($__internal_4a0dddf896c0bbd35e6ad5da4884c1b4e852b476288ff857bd45d3d4bffa290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_4a0dddf896c0bbd35e6ad5da4884c1b4e852b476288ff857bd45d3d4bffa290d->leave($__internal_4a0dddf896c0bbd35e6ad5da4884c1b4e852b476288ff857bd45d3d4bffa290d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
