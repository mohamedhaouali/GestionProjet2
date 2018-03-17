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
        $__internal_6861614a096b232ceb43f7e1642bc4046482b9d1f1c75f2753fdd58c983b054e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6861614a096b232ceb43f7e1642bc4046482b9d1f1c75f2753fdd58c983b054e->enter($__internal_6861614a096b232ceb43f7e1642bc4046482b9d1f1c75f2753fdd58c983b054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6861614a096b232ceb43f7e1642bc4046482b9d1f1c75f2753fdd58c983b054e->leave($__internal_6861614a096b232ceb43f7e1642bc4046482b9d1f1c75f2753fdd58c983b054e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dbd9782ff818beeffca17f72949e6483e08cb6856cd4b3e40557ed37bba3a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbd9782ff818beeffca17f72949e6483e08cb6856cd4b3e40557ed37bba3a1d->enter($__internal_6dbd9782ff818beeffca17f72949e6483e08cb6856cd4b3e40557ed37bba3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_6dbd9782ff818beeffca17f72949e6483e08cb6856cd4b3e40557ed37bba3a1d->leave($__internal_6dbd9782ff818beeffca17f72949e6483e08cb6856cd4b3e40557ed37bba3a1d_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_8c2c0f02dd454a127159e16c9abbaf7cfa8a34cd0372099cbc0d287186286f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c0f02dd454a127159e16c9abbaf7cfa8a34cd0372099cbc0d287186286f07->enter($__internal_8c2c0f02dd454a127159e16c9abbaf7cfa8a34cd0372099cbc0d287186286f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c2c0f02dd454a127159e16c9abbaf7cfa8a34cd0372099cbc0d287186286f07->leave($__internal_8c2c0f02dd454a127159e16c9abbaf7cfa8a34cd0372099cbc0d287186286f07_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9c7bd7ace00831cce5760f7b6913fda66e31e81fb1a685f2de4a03019550bb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7bd7ace00831cce5760f7b6913fda66e31e81fb1a685f2de4a03019550bb97->enter($__internal_9c7bd7ace00831cce5760f7b6913fda66e31e81fb1a685f2de4a03019550bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_9c7bd7ace00831cce5760f7b6913fda66e31e81fb1a685f2de4a03019550bb97->leave($__internal_9c7bd7ace00831cce5760f7b6913fda66e31e81fb1a685f2de4a03019550bb97_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9399c653a24c193b651de7c90d64837c0c0b67ae8682c3c06c64b416ea0b9465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9399c653a24c193b651de7c90d64837c0c0b67ae8682c3c06c64b416ea0b9465->enter($__internal_9399c653a24c193b651de7c90d64837c0c0b67ae8682c3c06c64b416ea0b9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9399c653a24c193b651de7c90d64837c0c0b67ae8682c3c06c64b416ea0b9465->leave($__internal_9399c653a24c193b651de7c90d64837c0c0b67ae8682c3c06c64b416ea0b9465_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_29d81e11329e5d1fbfb64e2a212fee1d73321c4670624f55c484d3ccfaaff2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d81e11329e5d1fbfb64e2a212fee1d73321c4670624f55c484d3ccfaaff2e6->enter($__internal_29d81e11329e5d1fbfb64e2a212fee1d73321c4670624f55c484d3ccfaaff2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_29d81e11329e5d1fbfb64e2a212fee1d73321c4670624f55c484d3ccfaaff2e6->leave($__internal_29d81e11329e5d1fbfb64e2a212fee1d73321c4670624f55c484d3ccfaaff2e6_prof);

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
