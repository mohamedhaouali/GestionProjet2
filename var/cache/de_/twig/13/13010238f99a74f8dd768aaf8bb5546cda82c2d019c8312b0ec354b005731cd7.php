<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_e85e1e2a1818a855abf6fe9037bee5381a7b93647103846503fa93b3696758ac extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860ec82ea8bb0ef6c6b969aa4f42f6c9d37507a4e57935c5462554486aa29f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860ec82ea8bb0ef6c6b969aa4f42f6c9d37507a4e57935c5462554486aa29f53->enter($__internal_860ec82ea8bb0ef6c6b969aa4f42f6c9d37507a4e57935c5462554486aa29f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860ec82ea8bb0ef6c6b969aa4f42f6c9d37507a4e57935c5462554486aa29f53->leave($__internal_860ec82ea8bb0ef6c6b969aa4f42f6c9d37507a4e57935c5462554486aa29f53_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
";
    }
}
