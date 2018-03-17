<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_0dcd6b7b15672302e237bcceaabf47f0113437ce74d3aa99f7155e70a9603631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1a37b6706efb69d0e20986fd5a079a2400fe933296810f36b83f56659d9c3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a37b6706efb69d0e20986fd5a079a2400fe933296810f36b83f56659d9c3c6->enter($__internal_d1a37b6706efb69d0e20986fd5a079a2400fe933296810f36b83f56659d9c3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_d1a37b6706efb69d0e20986fd5a079a2400fe933296810f36b83f56659d9c3c6->leave($__internal_d1a37b6706efb69d0e20986fd5a079a2400fe933296810f36b83f56659d9c3c6_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_1fd30302098b1c7918889faac4912720b18e04034a78d654cfe6ca02bb38f73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd30302098b1c7918889faac4912720b18e04034a78d654cfe6ca02bb38f73a->enter($__internal_1fd30302098b1c7918889faac4912720b18e04034a78d654cfe6ca02bb38f73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_1fd30302098b1c7918889faac4912720b18e04034a78d654cfe6ca02bb38f73a->leave($__internal_1fd30302098b1c7918889faac4912720b18e04034a78d654cfe6ca02bb38f73a_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_996f6e002252c730f2d8db3691a2c1335273db0796c0aeaf163057944492d633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996f6e002252c730f2d8db3691a2c1335273db0796c0aeaf163057944492d633->enter($__internal_996f6e002252c730f2d8db3691a2c1335273db0796c0aeaf163057944492d633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_996f6e002252c730f2d8db3691a2c1335273db0796c0aeaf163057944492d633->leave($__internal_996f6e002252c730f2d8db3691a2c1335273db0796c0aeaf163057944492d633_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_e9cf7df9cc2907591461647470554b2c613cb0a1b54b613690e9eb0f6b9b43ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cf7df9cc2907591461647470554b2c613cb0a1b54b613690e9eb0f6b9b43ac->enter($__internal_e9cf7df9cc2907591461647470554b2c613cb0a1b54b613690e9eb0f6b9b43ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_e9cf7df9cc2907591461647470554b2c613cb0a1b54b613690e9eb0f6b9b43ac->leave($__internal_e9cf7df9cc2907591461647470554b2c613cb0a1b54b613690e9eb0f6b9b43ac_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}
