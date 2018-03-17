<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_384dc315caaab3b6dea7989f5e062497547ba26f742e6f48525aebd58a23b55c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac30fcde1a2ea12dcdd3bd16a8b6a50a58eeec2f6316f5b15ce766600dfbbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac30fcde1a2ea12dcdd3bd16a8b6a50a58eeec2f6316f5b15ce766600dfbbc2->enter($__internal_fac30fcde1a2ea12dcdd3bd16a8b6a50a58eeec2f6316f5b15ce766600dfbbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac30fcde1a2ea12dcdd3bd16a8b6a50a58eeec2f6316f5b15ce766600dfbbc2->leave($__internal_fac30fcde1a2ea12dcdd3bd16a8b6a50a58eeec2f6316f5b15ce766600dfbbc2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ea26421fd36b15d51b162d1e7e9562c52851b84e80189264f79ed0a47d923f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea26421fd36b15d51b162d1e7e9562c52851b84e80189264f79ed0a47d923f85->enter($__internal_ea26421fd36b15d51b162d1e7e9562c52851b84e80189264f79ed0a47d923f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ea26421fd36b15d51b162d1e7e9562c52851b84e80189264f79ed0a47d923f85->leave($__internal_ea26421fd36b15d51b162d1e7e9562c52851b84e80189264f79ed0a47d923f85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
