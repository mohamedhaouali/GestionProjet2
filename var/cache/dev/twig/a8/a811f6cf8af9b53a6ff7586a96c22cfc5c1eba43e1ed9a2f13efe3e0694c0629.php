<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_93a1a28bd334b40ad32b5ad2fac459d1ee77fdb35bd75065e37d0cd89c2006dc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36d11c9bc33f9261076bdd2a4077c245676148db6e9fff95646297fc2ef6683c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d11c9bc33f9261076bdd2a4077c245676148db6e9fff95646297fc2ef6683c->enter($__internal_36d11c9bc33f9261076bdd2a4077c245676148db6e9fff95646297fc2ef6683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d11c9bc33f9261076bdd2a4077c245676148db6e9fff95646297fc2ef6683c->leave($__internal_36d11c9bc33f9261076bdd2a4077c245676148db6e9fff95646297fc2ef6683c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8671781dbed3c84836d5006a3cf7631efbc69f4a32fdc2499960d6c13132a1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8671781dbed3c84836d5006a3cf7631efbc69f4a32fdc2499960d6c13132a1df->enter($__internal_8671781dbed3c84836d5006a3cf7631efbc69f4a32fdc2499960d6c13132a1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_8671781dbed3c84836d5006a3cf7631efbc69f4a32fdc2499960d6c13132a1df->leave($__internal_8671781dbed3c84836d5006a3cf7631efbc69f4a32fdc2499960d6c13132a1df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
