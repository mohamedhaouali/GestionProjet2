<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_253289336694ecdbafb85c337b43d8bcf90faede05baebe6ad917e98f071c430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e41159bc144b2aebfb5d96cc551351fef79ad0430cdb67f9a40b6c86f3b6560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e41159bc144b2aebfb5d96cc551351fef79ad0430cdb67f9a40b6c86f3b6560->enter($__internal_0e41159bc144b2aebfb5d96cc551351fef79ad0430cdb67f9a40b6c86f3b6560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_0e41159bc144b2aebfb5d96cc551351fef79ad0430cdb67f9a40b6c86f3b6560->leave($__internal_0e41159bc144b2aebfb5d96cc551351fef79ad0430cdb67f9a40b6c86f3b6560_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
