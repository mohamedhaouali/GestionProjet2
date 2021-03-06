<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_46ed7f65a83b06f944b5e7471fcf1a426e52283241433e4e4132d8910316e2de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26f8b076a044ec7050beb86726a434a5301123e23e44bbbb41804e9bad787dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f8b076a044ec7050beb86726a434a5301123e23e44bbbb41804e9bad787dce->enter($__internal_26f8b076a044ec7050beb86726a434a5301123e23e44bbbb41804e9bad787dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f8b076a044ec7050beb86726a434a5301123e23e44bbbb41804e9bad787dce->leave($__internal_26f8b076a044ec7050beb86726a434a5301123e23e44bbbb41804e9bad787dce_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e4bda2c075277424bf6fedac01318f3ad8a4d3d59997e4486a47488c93e06906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bda2c075277424bf6fedac01318f3ad8a4d3d59997e4486a47488c93e06906->enter($__internal_e4bda2c075277424bf6fedac01318f3ad8a4d3d59997e4486a47488c93e06906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_e4bda2c075277424bf6fedac01318f3ad8a4d3d59997e4486a47488c93e06906->leave($__internal_e4bda2c075277424bf6fedac01318f3ad8a4d3d59997e4486a47488c93e06906_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
";
    }
}
