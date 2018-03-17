<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_f02eac0e62f5b77735f4178dfd2e732ea7c406c573bb627d6c33e994f6373cd5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0537df02129368e536bb4d7bac85f705c4735913ef7f5a34c1a4edd34a04165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0537df02129368e536bb4d7bac85f705c4735913ef7f5a34c1a4edd34a04165->enter($__internal_e0537df02129368e536bb4d7bac85f705c4735913ef7f5a34c1a4edd34a04165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0537df02129368e536bb4d7bac85f705c4735913ef7f5a34c1a4edd34a04165->leave($__internal_e0537df02129368e536bb4d7bac85f705c4735913ef7f5a34c1a4edd34a04165_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bde5edf4c18bf195e665d6708cf2c02532bd60caf7cb90833006ad5ef0335be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde5edf4c18bf195e665d6708cf2c02532bd60caf7cb90833006ad5ef0335be8->enter($__internal_bde5edf4c18bf195e665d6708cf2c02532bd60caf7cb90833006ad5ef0335be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_bde5edf4c18bf195e665d6708cf2c02532bd60caf7cb90833006ad5ef0335be8->leave($__internal_bde5edf4c18bf195e665d6708cf2c02532bd60caf7cb90833006ad5ef0335be8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
