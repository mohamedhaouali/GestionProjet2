<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_649e5efa557a8a41590136fb591524696501f9d05097204f33216939e3e97d2a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bec7a3df6790b749981275ab90d0aba98117170ec6dbba5e8c287ee36f4e24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec7a3df6790b749981275ab90d0aba98117170ec6dbba5e8c287ee36f4e24f->enter($__internal_2bec7a3df6790b749981275ab90d0aba98117170ec6dbba5e8c287ee36f4e24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bec7a3df6790b749981275ab90d0aba98117170ec6dbba5e8c287ee36f4e24f->leave($__internal_2bec7a3df6790b749981275ab90d0aba98117170ec6dbba5e8c287ee36f4e24f_prof);

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
