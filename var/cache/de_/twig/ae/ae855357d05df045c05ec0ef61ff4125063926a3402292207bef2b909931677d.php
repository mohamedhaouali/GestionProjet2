<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_586d004defa7636ef58ba857d91f2138a5ad41e315de35598df25be1c1deb501 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9723a099f2fa7b519e9208035599b16eac46c533fd0282458282b03aabfa15bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9723a099f2fa7b519e9208035599b16eac46c533fd0282458282b03aabfa15bb->enter($__internal_9723a099f2fa7b519e9208035599b16eac46c533fd0282458282b03aabfa15bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9723a099f2fa7b519e9208035599b16eac46c533fd0282458282b03aabfa15bb->leave($__internal_9723a099f2fa7b519e9208035599b16eac46c533fd0282458282b03aabfa15bb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
