<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_308d4459b02bcab96c81a789f4d51eb6746a150b1ff13274341eb97c94048f7b extends Twig_Template
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
        $__internal_a9b2cf73761182eef1fa9dbf94a3b6e9d19eca47a6059529a5c2d35e3b8febb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b2cf73761182eef1fa9dbf94a3b6e9d19eca47a6059529a5c2d35e3b8febb8->enter($__internal_a9b2cf73761182eef1fa9dbf94a3b6e9d19eca47a6059529a5c2d35e3b8febb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_a9b2cf73761182eef1fa9dbf94a3b6e9d19eca47a6059529a5c2d35e3b8febb8->leave($__internal_a9b2cf73761182eef1fa9dbf94a3b6e9d19eca47a6059529a5c2d35e3b8febb8_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_c4fc0cad69acf2c8b2daa1d36d7c4ad45523556c6597933af0f8714fa5bd8336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fc0cad69acf2c8b2daa1d36d7c4ad45523556c6597933af0f8714fa5bd8336->enter($__internal_c4fc0cad69acf2c8b2daa1d36d7c4ad45523556c6597933af0f8714fa5bd8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_c4fc0cad69acf2c8b2daa1d36d7c4ad45523556c6597933af0f8714fa5bd8336->leave($__internal_c4fc0cad69acf2c8b2daa1d36d7c4ad45523556c6597933af0f8714fa5bd8336_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_5ddff70394cbddbaea8f7dc44e72a05e769c9c87858838f8defc2f59f75ea9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddff70394cbddbaea8f7dc44e72a05e769c9c87858838f8defc2f59f75ea9b9->enter($__internal_5ddff70394cbddbaea8f7dc44e72a05e769c9c87858838f8defc2f59f75ea9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_5ddff70394cbddbaea8f7dc44e72a05e769c9c87858838f8defc2f59f75ea9b9->leave($__internal_5ddff70394cbddbaea8f7dc44e72a05e769c9c87858838f8defc2f59f75ea9b9_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_842ff6367b89a0c4598d96accffd0d12dfb9d786ecc62c4fa5362f4c3bd3eb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842ff6367b89a0c4598d96accffd0d12dfb9d786ecc62c4fa5362f4c3bd3eb26->enter($__internal_842ff6367b89a0c4598d96accffd0d12dfb9d786ecc62c4fa5362f4c3bd3eb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_842ff6367b89a0c4598d96accffd0d12dfb9d786ecc62c4fa5362f4c3bd3eb26->leave($__internal_842ff6367b89a0c4598d96accffd0d12dfb9d786ecc62c4fa5362f4c3bd3eb26_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
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
