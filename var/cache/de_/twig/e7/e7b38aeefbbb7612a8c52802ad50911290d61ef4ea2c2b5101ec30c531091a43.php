<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_413c34c345275d5db2690c539b0b6197a028a9a774c9f7790bf1d5ec99b3d2e7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38ee886fc7c41e58a7e8ae1232bad081d35a4c71fc98f00a215142fa1d703238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ee886fc7c41e58a7e8ae1232bad081d35a4c71fc98f00a215142fa1d703238->enter($__internal_38ee886fc7c41e58a7e8ae1232bad081d35a4c71fc98f00a215142fa1d703238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ee886fc7c41e58a7e8ae1232bad081d35a4c71fc98f00a215142fa1d703238->leave($__internal_38ee886fc7c41e58a7e8ae1232bad081d35a4c71fc98f00a215142fa1d703238_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_634cea673986bd076bdd5ba1f69d2eed2dc8534b51cb4558f77717473874abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634cea673986bd076bdd5ba1f69d2eed2dc8534b51cb4558f77717473874abef->enter($__internal_634cea673986bd076bdd5ba1f69d2eed2dc8534b51cb4558f77717473874abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_634cea673986bd076bdd5ba1f69d2eed2dc8534b51cb4558f77717473874abef->leave($__internal_634cea673986bd076bdd5ba1f69d2eed2dc8534b51cb4558f77717473874abef_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
