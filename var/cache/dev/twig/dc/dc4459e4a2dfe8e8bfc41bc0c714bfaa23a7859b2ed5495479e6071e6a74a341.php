<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_0348853a311ad28f8cbf85fe061de797b29a50ff997ff0c544e9077af3cbe266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07a26533c569932f73fd7c755026561d73e70932ae14fcc592df5ae216bbef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a26533c569932f73fd7c755026561d73e70932ae14fcc592df5ae216bbef22->enter($__internal_07a26533c569932f73fd7c755026561d73e70932ae14fcc592df5ae216bbef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a26533c569932f73fd7c755026561d73e70932ae14fcc592df5ae216bbef22->leave($__internal_07a26533c569932f73fd7c755026561d73e70932ae14fcc592df5ae216bbef22_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb710cc0ce55ff6a84ad786fae9c6e166214da2fce474a7c4b71186b836b707a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb710cc0ce55ff6a84ad786fae9c6e166214da2fce474a7c4b71186b836b707a->enter($__internal_fb710cc0ce55ff6a84ad786fae9c6e166214da2fce474a7c4b71186b836b707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_fb710cc0ce55ff6a84ad786fae9c6e166214da2fce474a7c4b71186b836b707a->leave($__internal_fb710cc0ce55ff6a84ad786fae9c6e166214da2fce474a7c4b71186b836b707a_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_8c9dfbd5f9f2cbd1813b8b19dacd259009a41174c11b4d98eac64fe59c03ebbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9dfbd5f9f2cbd1813b8b19dacd259009a41174c11b4d98eac64fe59c03ebbb->enter($__internal_8c9dfbd5f9f2cbd1813b8b19dacd259009a41174c11b4d98eac64fe59c03ebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c9dfbd5f9f2cbd1813b8b19dacd259009a41174c11b4d98eac64fe59c03ebbb->leave($__internal_8c9dfbd5f9f2cbd1813b8b19dacd259009a41174c11b4d98eac64fe59c03ebbb_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_69b7338012098052776689c19cf47262d14412a48c309036c356ac56d94cb7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b7338012098052776689c19cf47262d14412a48c309036c356ac56d94cb7c2->enter($__internal_69b7338012098052776689c19cf47262d14412a48c309036c356ac56d94cb7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_69b7338012098052776689c19cf47262d14412a48c309036c356ac56d94cb7c2->leave($__internal_69b7338012098052776689c19cf47262d14412a48c309036c356ac56d94cb7c2_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_4e6e1c2ce2ce0c99a4c75e2cba32ae0ec00bc91a70b47ef9a296461e707a1678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6e1c2ce2ce0c99a4c75e2cba32ae0ec00bc91a70b47ef9a296461e707a1678->enter($__internal_4e6e1c2ce2ce0c99a4c75e2cba32ae0ec00bc91a70b47ef9a296461e707a1678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_4e6e1c2ce2ce0c99a4c75e2cba32ae0ec00bc91a70b47ef9a296461e707a1678->leave($__internal_4e6e1c2ce2ce0c99a4c75e2cba32ae0ec00bc91a70b47ef9a296461e707a1678_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_b9a02e45fe503d633f186ca0b759752551b185ba728b6486ca8cb9cc58425dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a02e45fe503d633f186ca0b759752551b185ba728b6486ca8cb9cc58425dec->enter($__internal_b9a02e45fe503d633f186ca0b759752551b185ba728b6486ca8cb9cc58425dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_b9a02e45fe503d633f186ca0b759752551b185ba728b6486ca8cb9cc58425dec->leave($__internal_b9a02e45fe503d633f186ca0b759752551b185ba728b6486ca8cb9cc58425dec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
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
