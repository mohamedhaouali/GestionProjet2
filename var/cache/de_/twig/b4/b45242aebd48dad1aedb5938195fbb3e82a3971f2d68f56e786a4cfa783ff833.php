<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_0c452efc36e629a903cd6604663c6a3fb48557c5f4649c3003fcaa81bbcb332d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe99b9dc091580509fdb95de1d3ac3ff2175648371eebbad6849e61fbbf7f3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe99b9dc091580509fdb95de1d3ac3ff2175648371eebbad6849e61fbbf7f3c2->enter($__internal_fe99b9dc091580509fdb95de1d3ac3ff2175648371eebbad6849e61fbbf7f3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe99b9dc091580509fdb95de1d3ac3ff2175648371eebbad6849e61fbbf7f3c2->leave($__internal_fe99b9dc091580509fdb95de1d3ac3ff2175648371eebbad6849e61fbbf7f3c2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c19a40a57917cb94cbe68e1b8e58c5e49e62bba16a0c29c50980a9fab9df3cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19a40a57917cb94cbe68e1b8e58c5e49e62bba16a0c29c50980a9fab9df3cf4->enter($__internal_c19a40a57917cb94cbe68e1b8e58c5e49e62bba16a0c29c50980a9fab9df3cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_c19a40a57917cb94cbe68e1b8e58c5e49e62bba16a0c29c50980a9fab9df3cf4->leave($__internal_c19a40a57917cb94cbe68e1b8e58c5e49e62bba16a0c29c50980a9fab9df3cf4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
";
    }
}
