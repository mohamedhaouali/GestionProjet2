<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_0ee64a9baa7b7fcf6d1b9c44fc9da1fb786490bdaab1afa6b61c531444022fcc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7224baaef182c985912d99c0adf1b16dce9ee2a0cc0325375f927fe124088a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7224baaef182c985912d99c0adf1b16dce9ee2a0cc0325375f927fe124088a->enter($__internal_9a7224baaef182c985912d99c0adf1b16dce9ee2a0cc0325375f927fe124088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7224baaef182c985912d99c0adf1b16dce9ee2a0cc0325375f927fe124088a->leave($__internal_9a7224baaef182c985912d99c0adf1b16dce9ee2a0cc0325375f927fe124088a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6e75562fc6b1dd05d1e8ab2da71f057e8c10d9be47700ea280b674abdb0f5e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e75562fc6b1dd05d1e8ab2da71f057e8c10d9be47700ea280b674abdb0f5e03->enter($__internal_6e75562fc6b1dd05d1e8ab2da71f057e8c10d9be47700ea280b674abdb0f5e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_6e75562fc6b1dd05d1e8ab2da71f057e8c10d9be47700ea280b674abdb0f5e03->leave($__internal_6e75562fc6b1dd05d1e8ab2da71f057e8c10d9be47700ea280b674abdb0f5e03_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
