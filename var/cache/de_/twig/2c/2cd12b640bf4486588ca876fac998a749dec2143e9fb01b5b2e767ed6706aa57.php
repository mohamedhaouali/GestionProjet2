<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_2e78125662238b406b073b45b1b244f67f511f5e541408b947f43848756b4adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b699c5a962eb2e5fc0f9d9312e0d6257d0a30b4a2ff756d08eaab11f4d9b0974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b699c5a962eb2e5fc0f9d9312e0d6257d0a30b4a2ff756d08eaab11f4d9b0974->enter($__internal_b699c5a962eb2e5fc0f9d9312e0d6257d0a30b4a2ff756d08eaab11f4d9b0974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b699c5a962eb2e5fc0f9d9312e0d6257d0a30b4a2ff756d08eaab11f4d9b0974->leave($__internal_b699c5a962eb2e5fc0f9d9312e0d6257d0a30b4a2ff756d08eaab11f4d9b0974_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6125627b1e6b5c9e7c3e93c9906395dfbe1c643f0aa589f35b85bacf72ce42ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6125627b1e6b5c9e7c3e93c9906395dfbe1c643f0aa589f35b85bacf72ce42ab->enter($__internal_6125627b1e6b5c9e7c3e93c9906395dfbe1c643f0aa589f35b85bacf72ce42ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6125627b1e6b5c9e7c3e93c9906395dfbe1c643f0aa589f35b85bacf72ce42ab->leave($__internal_6125627b1e6b5c9e7c3e93c9906395dfbe1c643f0aa589f35b85bacf72ce42ab_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_ca82a9a39d5d0858dfbc605994518469663d7fa50fe9babf0c6609c0024f78fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca82a9a39d5d0858dfbc605994518469663d7fa50fe9babf0c6609c0024f78fc->enter($__internal_ca82a9a39d5d0858dfbc605994518469663d7fa50fe9babf0c6609c0024f78fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca82a9a39d5d0858dfbc605994518469663d7fa50fe9babf0c6609c0024f78fc->leave($__internal_ca82a9a39d5d0858dfbc605994518469663d7fa50fe9babf0c6609c0024f78fc_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4e9def88737d733b4fdbb5f9cc71e921fb673b66ac1161042469eeea2bed80e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9def88737d733b4fdbb5f9cc71e921fb673b66ac1161042469eeea2bed80e0->enter($__internal_4e9def88737d733b4fdbb5f9cc71e921fb673b66ac1161042469eeea2bed80e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_4e9def88737d733b4fdbb5f9cc71e921fb673b66ac1161042469eeea2bed80e0->leave($__internal_4e9def88737d733b4fdbb5f9cc71e921fb673b66ac1161042469eeea2bed80e0_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_141c1a9694989a76792f7f240a52eaabb205bc6c583b0723d11afb5cd6394535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141c1a9694989a76792f7f240a52eaabb205bc6c583b0723d11afb5cd6394535->enter($__internal_141c1a9694989a76792f7f240a52eaabb205bc6c583b0723d11afb5cd6394535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_141c1a9694989a76792f7f240a52eaabb205bc6c583b0723d11afb5cd6394535->leave($__internal_141c1a9694989a76792f7f240a52eaabb205bc6c583b0723d11afb5cd6394535_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_d03727b8c662931ce2ab1b6902a90870e369018d8c32d1f57c86b7c234fef176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03727b8c662931ce2ab1b6902a90870e369018d8c32d1f57c86b7c234fef176->enter($__internal_d03727b8c662931ce2ab1b6902a90870e369018d8c32d1f57c86b7c234fef176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_d03727b8c662931ce2ab1b6902a90870e369018d8c32d1f57c86b7c234fef176->leave($__internal_d03727b8c662931ce2ab1b6902a90870e369018d8c32d1f57c86b7c234fef176_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
";
    }
}
