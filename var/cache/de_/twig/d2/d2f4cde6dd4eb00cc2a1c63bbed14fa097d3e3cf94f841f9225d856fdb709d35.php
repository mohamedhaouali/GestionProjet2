<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_9bb0339640a1f6dacdf2c3d4f844f2b2f956dce05e63b38e82145844c0609c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c06c472dc795dc11977fa3036544d50d6ed25fe21750cfa0e325ef476a28ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c06c472dc795dc11977fa3036544d50d6ed25fe21750cfa0e325ef476a28ba->enter($__internal_29c06c472dc795dc11977fa3036544d50d6ed25fe21750cfa0e325ef476a28ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c06c472dc795dc11977fa3036544d50d6ed25fe21750cfa0e325ef476a28ba->leave($__internal_29c06c472dc795dc11977fa3036544d50d6ed25fe21750cfa0e325ef476a28ba_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_5f0724bdfd85536e5e8049803ddc973599f88bfbf86825a2a0b18cd2fbe1d775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0724bdfd85536e5e8049803ddc973599f88bfbf86825a2a0b18cd2fbe1d775->enter($__internal_5f0724bdfd85536e5e8049803ddc973599f88bfbf86825a2a0b18cd2fbe1d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_5f0724bdfd85536e5e8049803ddc973599f88bfbf86825a2a0b18cd2fbe1d775->leave($__internal_5f0724bdfd85536e5e8049803ddc973599f88bfbf86825a2a0b18cd2fbe1d775_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_93092360ea8825e03bf2b9a566003aaa303b03df577b3075b5900a09ca0113e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93092360ea8825e03bf2b9a566003aaa303b03df577b3075b5900a09ca0113e0->enter($__internal_93092360ea8825e03bf2b9a566003aaa303b03df577b3075b5900a09ca0113e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_93092360ea8825e03bf2b9a566003aaa303b03df577b3075b5900a09ca0113e0->leave($__internal_93092360ea8825e03bf2b9a566003aaa303b03df577b3075b5900a09ca0113e0_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_06ef17e91689b42c67a96b55fe649b6a7e675285f9f38055d02b910b1a218908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ef17e91689b42c67a96b55fe649b6a7e675285f9f38055d02b910b1a218908->enter($__internal_06ef17e91689b42c67a96b55fe649b6a7e675285f9f38055d02b910b1a218908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_06ef17e91689b42c67a96b55fe649b6a7e675285f9f38055d02b910b1a218908->leave($__internal_06ef17e91689b42c67a96b55fe649b6a7e675285f9f38055d02b910b1a218908_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_2009df49624213f5d82456533a1a3b46a2ff8b4d2be9885920f292e687da0835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2009df49624213f5d82456533a1a3b46a2ff8b4d2be9885920f292e687da0835->enter($__internal_2009df49624213f5d82456533a1a3b46a2ff8b4d2be9885920f292e687da0835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_2009df49624213f5d82456533a1a3b46a2ff8b4d2be9885920f292e687da0835->leave($__internal_2009df49624213f5d82456533a1a3b46a2ff8b4d2be9885920f292e687da0835_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
";
    }
}
