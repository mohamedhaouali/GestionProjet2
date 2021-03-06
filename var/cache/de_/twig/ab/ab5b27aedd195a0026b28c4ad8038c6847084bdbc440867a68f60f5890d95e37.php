<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_9d4f8739c7805bf5fa04569c1e0930a63a05197c32966770372109525dcb1f06 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8998547b3270b8a33af4ffa2f003fe3155ea99134a9b4fbb8d109d29690206dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8998547b3270b8a33af4ffa2f003fe3155ea99134a9b4fbb8d109d29690206dd->enter($__internal_8998547b3270b8a33af4ffa2f003fe3155ea99134a9b4fbb8d109d29690206dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8998547b3270b8a33af4ffa2f003fe3155ea99134a9b4fbb8d109d29690206dd->leave($__internal_8998547b3270b8a33af4ffa2f003fe3155ea99134a9b4fbb8d109d29690206dd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6d56815999b68e13020c90addba83493a552d369ecf627d71f9aae6b340fd095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d56815999b68e13020c90addba83493a552d369ecf627d71f9aae6b340fd095->enter($__internal_6d56815999b68e13020c90addba83493a552d369ecf627d71f9aae6b340fd095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_6d56815999b68e13020c90addba83493a552d369ecf627d71f9aae6b340fd095->leave($__internal_6d56815999b68e13020c90addba83493a552d369ecf627d71f9aae6b340fd095_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
