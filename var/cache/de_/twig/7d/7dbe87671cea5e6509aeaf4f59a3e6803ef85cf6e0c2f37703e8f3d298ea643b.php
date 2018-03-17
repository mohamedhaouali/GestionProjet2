<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_470dc03584077be722cfe252371fde226026c2b100df4cf6360cab4e01699583 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe800e6ce5ff9728c30a8049c898b67816099b6a87dd9d8c036b1369dc2b6a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe800e6ce5ff9728c30a8049c898b67816099b6a87dd9d8c036b1369dc2b6a76->enter($__internal_fe800e6ce5ff9728c30a8049c898b67816099b6a87dd9d8c036b1369dc2b6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe800e6ce5ff9728c30a8049c898b67816099b6a87dd9d8c036b1369dc2b6a76->leave($__internal_fe800e6ce5ff9728c30a8049c898b67816099b6a87dd9d8c036b1369dc2b6a76_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_cc81e4eb6eb1aea45344b1bbe0967afd0c64ff4a0697f68eed52f36a85358b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc81e4eb6eb1aea45344b1bbe0967afd0c64ff4a0697f68eed52f36a85358b8e->enter($__internal_cc81e4eb6eb1aea45344b1bbe0967afd0c64ff4a0697f68eed52f36a85358b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_cc81e4eb6eb1aea45344b1bbe0967afd0c64ff4a0697f68eed52f36a85358b8e->leave($__internal_cc81e4eb6eb1aea45344b1bbe0967afd0c64ff4a0697f68eed52f36a85358b8e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
";
    }
}
