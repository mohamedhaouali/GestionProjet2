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
        $__internal_7864b43cc1c997d299a4cc27b98e54624879ce82f3ea0e4ff87ca261362d1a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7864b43cc1c997d299a4cc27b98e54624879ce82f3ea0e4ff87ca261362d1a42->enter($__internal_7864b43cc1c997d299a4cc27b98e54624879ce82f3ea0e4ff87ca261362d1a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_7864b43cc1c997d299a4cc27b98e54624879ce82f3ea0e4ff87ca261362d1a42->leave($__internal_7864b43cc1c997d299a4cc27b98e54624879ce82f3ea0e4ff87ca261362d1a42_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_b4f276588bf8ec1b8a0d4e36bc83a29f24efb7e86f6d688bed2401aa11b0bc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f276588bf8ec1b8a0d4e36bc83a29f24efb7e86f6d688bed2401aa11b0bc55->enter($__internal_b4f276588bf8ec1b8a0d4e36bc83a29f24efb7e86f6d688bed2401aa11b0bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_b4f276588bf8ec1b8a0d4e36bc83a29f24efb7e86f6d688bed2401aa11b0bc55->leave($__internal_b4f276588bf8ec1b8a0d4e36bc83a29f24efb7e86f6d688bed2401aa11b0bc55_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_33275b77f3d4ff04d0d6b863483c0d78616727621c523a78e128dd53e465090a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33275b77f3d4ff04d0d6b863483c0d78616727621c523a78e128dd53e465090a->enter($__internal_33275b77f3d4ff04d0d6b863483c0d78616727621c523a78e128dd53e465090a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_33275b77f3d4ff04d0d6b863483c0d78616727621c523a78e128dd53e465090a->leave($__internal_33275b77f3d4ff04d0d6b863483c0d78616727621c523a78e128dd53e465090a_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_6904ad227d3fc5c332c596286a5921dda812c6ccefb4def7b0ed0845ec8d98ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6904ad227d3fc5c332c596286a5921dda812c6ccefb4def7b0ed0845ec8d98ec->enter($__internal_6904ad227d3fc5c332c596286a5921dda812c6ccefb4def7b0ed0845ec8d98ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_6904ad227d3fc5c332c596286a5921dda812c6ccefb4def7b0ed0845ec8d98ec->leave($__internal_6904ad227d3fc5c332c596286a5921dda812c6ccefb4def7b0ed0845ec8d98ec_prof);

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
