<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_26c8a89978bc0364710d93ee78901570a3e3968488f2d5c6a87d497b56f4380b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15d21835ece6fadf570ce42f7e1f3c3caafb7d16fd22b4cdd5389cad9196a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15d21835ece6fadf570ce42f7e1f3c3caafb7d16fd22b4cdd5389cad9196a9d->enter($__internal_c15d21835ece6fadf570ce42f7e1f3c3caafb7d16fd22b4cdd5389cad9196a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15d21835ece6fadf570ce42f7e1f3c3caafb7d16fd22b4cdd5389cad9196a9d->leave($__internal_c15d21835ece6fadf570ce42f7e1f3c3caafb7d16fd22b4cdd5389cad9196a9d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bf43336560f40e98860cfbd935586299c655c5123403fd527541eaceca9ec796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf43336560f40e98860cfbd935586299c655c5123403fd527541eaceca9ec796->enter($__internal_bf43336560f40e98860cfbd935586299c655c5123403fd527541eaceca9ec796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bf43336560f40e98860cfbd935586299c655c5123403fd527541eaceca9ec796->leave($__internal_bf43336560f40e98860cfbd935586299c655c5123403fd527541eaceca9ec796_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
";
    }
}
