<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_16b7373c79ee154ecc3014b4df7bffb5c49629054d8a719bedbbbc722a724378 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c9fb6e289288f5c4ce45c433ffcd4f581a7ff69377547aa4e2ae2e21562f892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9fb6e289288f5c4ce45c433ffcd4f581a7ff69377547aa4e2ae2e21562f892->enter($__internal_1c9fb6e289288f5c4ce45c433ffcd4f581a7ff69377547aa4e2ae2e21562f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9fb6e289288f5c4ce45c433ffcd4f581a7ff69377547aa4e2ae2e21562f892->leave($__internal_1c9fb6e289288f5c4ce45c433ffcd4f581a7ff69377547aa4e2ae2e21562f892_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2c0e85af95bb22a557b4b9dc86aa22356b6f28a56cba1337f060464cfedbd626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0e85af95bb22a557b4b9dc86aa22356b6f28a56cba1337f060464cfedbd626->enter($__internal_2c0e85af95bb22a557b4b9dc86aa22356b6f28a56cba1337f060464cfedbd626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_2c0e85af95bb22a557b4b9dc86aa22356b6f28a56cba1337f060464cfedbd626->leave($__internal_2c0e85af95bb22a557b4b9dc86aa22356b6f28a56cba1337f060464cfedbd626_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
