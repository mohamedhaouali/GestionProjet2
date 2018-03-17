<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_e320e94d7938436b52eff20821beeea53a4adba74ed4818eb3e271930246e3cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_403758262e11175a232dca896570bb6a0423eb7ba0a1b1c6ed073306dc2ccd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403758262e11175a232dca896570bb6a0423eb7ba0a1b1c6ed073306dc2ccd2c->enter($__internal_403758262e11175a232dca896570bb6a0423eb7ba0a1b1c6ed073306dc2ccd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403758262e11175a232dca896570bb6a0423eb7ba0a1b1c6ed073306dc2ccd2c->leave($__internal_403758262e11175a232dca896570bb6a0423eb7ba0a1b1c6ed073306dc2ccd2c_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_f1d46869c3921f03b6ab2bd2e909fc2d813b186a0402d021ab939a0cb0d8a266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d46869c3921f03b6ab2bd2e909fc2d813b186a0402d021ab939a0cb0d8a266->enter($__internal_f1d46869c3921f03b6ab2bd2e909fc2d813b186a0402d021ab939a0cb0d8a266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_f1d46869c3921f03b6ab2bd2e909fc2d813b186a0402d021ab939a0cb0d8a266->leave($__internal_f1d46869c3921f03b6ab2bd2e909fc2d813b186a0402d021ab939a0cb0d8a266_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2d663e7f849d24cea80b696dc20f99663020167ceb1bc118803a575b0edb62ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d663e7f849d24cea80b696dc20f99663020167ceb1bc118803a575b0edb62ce->enter($__internal_2d663e7f849d24cea80b696dc20f99663020167ceb1bc118803a575b0edb62ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_2d663e7f849d24cea80b696dc20f99663020167ceb1bc118803a575b0edb62ce->leave($__internal_2d663e7f849d24cea80b696dc20f99663020167ceb1bc118803a575b0edb62ce_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ name|trans({}, admin.translationdomain) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}
