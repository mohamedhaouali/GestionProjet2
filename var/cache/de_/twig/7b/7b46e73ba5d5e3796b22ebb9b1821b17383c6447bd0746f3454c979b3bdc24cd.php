<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_391eb90b2801779097eb710056dc7bde0f847128a785ac3a8f055f939add616d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9933fe2a8c5a9006c6c0c1be7b1a19f5bad456a77689d382b1e5aa151c4f7fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9933fe2a8c5a9006c6c0c1be7b1a19f5bad456a77689d382b1e5aa151c4f7fff->enter($__internal_9933fe2a8c5a9006c6c0c1be7b1a19f5bad456a77689d382b1e5aa151c4f7fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9933fe2a8c5a9006c6c0c1be7b1a19f5bad456a77689d382b1e5aa151c4f7fff->leave($__internal_9933fe2a8c5a9006c6c0c1be7b1a19f5bad456a77689d382b1e5aa151c4f7fff_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_19dadfc967eb1f8f75b07f7bc8dc2b22888517349ff46ec55e38e39616953e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dadfc967eb1f8f75b07f7bc8dc2b22888517349ff46ec55e38e39616953e42->enter($__internal_19dadfc967eb1f8f75b07f7bc8dc2b22888517349ff46ec55e38e39616953e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_19dadfc967eb1f8f75b07f7bc8dc2b22888517349ff46ec55e38e39616953e42->leave($__internal_19dadfc967eb1f8f75b07f7bc8dc2b22888517349ff46ec55e38e39616953e42_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
";
    }
}
