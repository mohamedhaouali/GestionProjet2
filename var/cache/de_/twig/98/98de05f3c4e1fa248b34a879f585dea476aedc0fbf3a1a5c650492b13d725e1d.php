<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_6dd1c4a7ebfcbd447707e52270c017d2430753c28c47152d3ef9095bcf6a9b31 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_753691a94c77e4cff3f810971b7c5c93a4639edd8a5d956302af213ddded9985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753691a94c77e4cff3f810971b7c5c93a4639edd8a5d956302af213ddded9985->enter($__internal_753691a94c77e4cff3f810971b7c5c93a4639edd8a5d956302af213ddded9985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753691a94c77e4cff3f810971b7c5c93a4639edd8a5d956302af213ddded9985->leave($__internal_753691a94c77e4cff3f810971b7c5c93a4639edd8a5d956302af213ddded9985_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_99b81c98ed099332a021d271599cba033a7608329efcf4a5cc0e21ccca48f206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b81c98ed099332a021d271599cba033a7608329efcf4a5cc0e21ccca48f206->enter($__internal_99b81c98ed099332a021d271599cba033a7608329efcf4a5cc0e21ccca48f206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_99b81c98ed099332a021d271599cba033a7608329efcf4a5cc0e21ccca48f206->leave($__internal_99b81c98ed099332a021d271599cba033a7608329efcf4a5cc0e21ccca48f206_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
