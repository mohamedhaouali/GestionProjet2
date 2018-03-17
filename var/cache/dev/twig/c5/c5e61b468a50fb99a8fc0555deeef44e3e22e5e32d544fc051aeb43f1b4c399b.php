<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_08b2590826014f75ef66ffa074442a05bbf7469015bc8d8515c77b4451d89a4b extends Twig_Template
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
        $__internal_ec337fab08b352488dee42f89dd9d75943479a49e966b6c663b37a4e477a8a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec337fab08b352488dee42f89dd9d75943479a49e966b6c663b37a4e477a8a02->enter($__internal_ec337fab08b352488dee42f89dd9d75943479a49e966b6c663b37a4e477a8a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec337fab08b352488dee42f89dd9d75943479a49e966b6c663b37a4e477a8a02->leave($__internal_ec337fab08b352488dee42f89dd9d75943479a49e966b6c663b37a4e477a8a02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac0714b61e1e50bf949daa8d732aebcc208f88804d23694f472e9dfa6f21d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac0714b61e1e50bf949daa8d732aebcc208f88804d23694f472e9dfa6f21d10->enter($__internal_6ac0714b61e1e50bf949daa8d732aebcc208f88804d23694f472e9dfa6f21d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_6ac0714b61e1e50bf949daa8d732aebcc208f88804d23694f472e9dfa6f21d10->leave($__internal_6ac0714b61e1e50bf949daa8d732aebcc208f88804d23694f472e9dfa6f21d10_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_ab741cb94a998ab218a657b007e5d2512ca563ad2d71e9546d3e9d68e730888a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab741cb94a998ab218a657b007e5d2512ca563ad2d71e9546d3e9d68e730888a->enter($__internal_ab741cb94a998ab218a657b007e5d2512ca563ad2d71e9546d3e9d68e730888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab741cb94a998ab218a657b007e5d2512ca563ad2d71e9546d3e9d68e730888a->leave($__internal_ab741cb94a998ab218a657b007e5d2512ca563ad2d71e9546d3e9d68e730888a_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_320582b4e1ac4dc09aa21c57593b43b43e77cd8ddb50232161f185bc89066db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320582b4e1ac4dc09aa21c57593b43b43e77cd8ddb50232161f185bc89066db4->enter($__internal_320582b4e1ac4dc09aa21c57593b43b43e77cd8ddb50232161f185bc89066db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_320582b4e1ac4dc09aa21c57593b43b43e77cd8ddb50232161f185bc89066db4->leave($__internal_320582b4e1ac4dc09aa21c57593b43b43e77cd8ddb50232161f185bc89066db4_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2590b71e5a9ecec08037a61d9436a33c1bab264fb30052fe69c8978ad9474773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2590b71e5a9ecec08037a61d9436a33c1bab264fb30052fe69c8978ad9474773->enter($__internal_2590b71e5a9ecec08037a61d9436a33c1bab264fb30052fe69c8978ad9474773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_2590b71e5a9ecec08037a61d9436a33c1bab264fb30052fe69c8978ad9474773->leave($__internal_2590b71e5a9ecec08037a61d9436a33c1bab264fb30052fe69c8978ad9474773_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_9a6109b3cfdcda17ba41511a28cba466a0fceb68c25881a9316c2454d87743d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6109b3cfdcda17ba41511a28cba466a0fceb68c25881a9316c2454d87743d0->enter($__internal_9a6109b3cfdcda17ba41511a28cba466a0fceb68c25881a9316c2454d87743d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_9a6109b3cfdcda17ba41511a28cba466a0fceb68c25881a9316c2454d87743d0->leave($__internal_9a6109b3cfdcda17ba41511a28cba466a0fceb68c25881a9316c2454d87743d0_prof);

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
