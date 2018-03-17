<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_0fec9771224a2429f563483e8442018e04e407101e8eac95dd0e2facbdc00734 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e52140d0ab2b55ab6a975f34d15a8f83fdae737404e78970e8abc6a6f37151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e52140d0ab2b55ab6a975f34d15a8f83fdae737404e78970e8abc6a6f37151d->enter($__internal_1e52140d0ab2b55ab6a975f34d15a8f83fdae737404e78970e8abc6a6f37151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e52140d0ab2b55ab6a975f34d15a8f83fdae737404e78970e8abc6a6f37151d->leave($__internal_1e52140d0ab2b55ab6a975f34d15a8f83fdae737404e78970e8abc6a6f37151d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b9f49838baed7bf76d1796c44a5ec56f0b618317de4bd5d387b745e4ac8169a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f49838baed7bf76d1796c44a5ec56f0b618317de4bd5d387b745e4ac8169a9->enter($__internal_b9f49838baed7bf76d1796c44a5ec56f0b618317de4bd5d387b745e4ac8169a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b9f49838baed7bf76d1796c44a5ec56f0b618317de4bd5d387b745e4ac8169a9->leave($__internal_b9f49838baed7bf76d1796c44a5ec56f0b618317de4bd5d387b745e4ac8169a9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
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
