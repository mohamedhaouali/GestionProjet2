<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_45fb40038f50202e97b1693b43142ceffd9a24b645ccce1bfb6bd8301938d6f5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_843c51e1891e81122fdfd5dd61984a0d5665afee058ffbd0766ff577c958fea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843c51e1891e81122fdfd5dd61984a0d5665afee058ffbd0766ff577c958fea6->enter($__internal_843c51e1891e81122fdfd5dd61984a0d5665afee058ffbd0766ff577c958fea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_843c51e1891e81122fdfd5dd61984a0d5665afee058ffbd0766ff577c958fea6->leave($__internal_843c51e1891e81122fdfd5dd61984a0d5665afee058ffbd0766ff577c958fea6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_93df8a3dcb00d38c3a8fb72dde811bf5d0123cbd1cb540efcbd9ebb811bb3f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93df8a3dcb00d38c3a8fb72dde811bf5d0123cbd1cb540efcbd9ebb811bb3f21->enter($__internal_93df8a3dcb00d38c3a8fb72dde811bf5d0123cbd1cb540efcbd9ebb811bb3f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_93df8a3dcb00d38c3a8fb72dde811bf5d0123cbd1cb540efcbd9ebb811bb3f21->leave($__internal_93df8a3dcb00d38c3a8fb72dde811bf5d0123cbd1cb540efcbd9ebb811bb3f21_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
