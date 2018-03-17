<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_1c86e362be8d82f600fa26c3fdb10aae5d81d9ffa51b183b91f3ab157a5ad05a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@SonataAdmin/CRUD/preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1616b7950ea3d14a276d600f6132a36e4da0a291c25e0ea63addcbb2fa44b12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1616b7950ea3d14a276d600f6132a36e4da0a291c25e0ea63addcbb2fa44b12b->enter($__internal_1616b7950ea3d14a276d600f6132a36e4da0a291c25e0ea63addcbb2fa44b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1616b7950ea3d14a276d600f6132a36e4da0a291c25e0ea63addcbb2fa44b12b->leave($__internal_1616b7950ea3d14a276d600f6132a36e4da0a291c25e0ea63addcbb2fa44b12b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0ccdb786b96ad993a0d0e0c3a01f280be2b0a1368db9f9047e561f4f9ad7df61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccdb786b96ad993a0d0e0c3a01f280be2b0a1368db9f9047e561f4f9ad7df61->enter($__internal_0ccdb786b96ad993a0d0e0c3a01f280be2b0a1368db9f9047e561f4f9ad7df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_0ccdb786b96ad993a0d0e0c3a01f280be2b0a1368db9f9047e561f4f9ad7df61->leave($__internal_0ccdb786b96ad993a0d0e0c3a01f280be2b0a1368db9f9047e561f4f9ad7df61_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_8fbbb05e0d3a7a2eacaa8940525f3c04cee0e587e7e52f7b23aa0fff03001564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbbb05e0d3a7a2eacaa8940525f3c04cee0e587e7e52f7b23aa0fff03001564->enter($__internal_8fbbb05e0d3a7a2eacaa8940525f3c04cee0e587e7e52f7b23aa0fff03001564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_8fbbb05e0d3a7a2eacaa8940525f3c04cee0e587e7e52f7b23aa0fff03001564->leave($__internal_8fbbb05e0d3a7a2eacaa8940525f3c04cee0e587e7e52f7b23aa0fff03001564_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_f12a57bbc72177ff3f454489efa107f9523915f32e520ae99df37a4d3ceabd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12a57bbc72177ff3f454489efa107f9523915f32e520ae99df37a4d3ceabd33->enter($__internal_f12a57bbc72177ff3f454489efa107f9523915f32e520ae99df37a4d3ceabd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_f12a57bbc72177ff3f454489efa107f9523915f32e520ae99df37a4d3ceabd33->leave($__internal_f12a57bbc72177ff3f454489efa107f9523915f32e520ae99df37a4d3ceabd33_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_a05a9c238285f058fc283500a0ed9d813a43fdc58b7e4565ac76be12ff45cfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05a9c238285f058fc283500a0ed9d813a43fdc58b7e4565ac76be12ff45cfa0->enter($__internal_a05a9c238285f058fc283500a0ed9d813a43fdc58b7e4565ac76be12ff45cfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_a05a9c238285f058fc283500a0ed9d813a43fdc58b7e4565ac76be12ff45cfa0->leave($__internal_a05a9c238285f058fc283500a0ed9d813a43fdc58b7e4565ac76be12ff45cfa0_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_361eee43300dbae480deae5932e6077fc56b1406f52881f6a8481200f36607bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361eee43300dbae480deae5932e6077fc56b1406f52881f6a8481200f36607bf->enter($__internal_361eee43300dbae480deae5932e6077fc56b1406f52881f6a8481200f36607bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_361eee43300dbae480deae5932e6077fc56b1406f52881f6a8481200f36607bf->leave($__internal_361eee43300dbae480deae5932e6077fc56b1406f52881f6a8481200f36607bf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
";
    }
}
