<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_37d1316ff9586fc5b2d33bcdee2b9912f75ef7feb2e263bd4bfc07b1dbc8ba56 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_581c405223d38a5c08f5eefadba2f543469cfc001971e9c7d2324677e1c5d90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581c405223d38a5c08f5eefadba2f543469cfc001971e9c7d2324677e1c5d90f->enter($__internal_581c405223d38a5c08f5eefadba2f543469cfc001971e9c7d2324677e1c5d90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581c405223d38a5c08f5eefadba2f543469cfc001971e9c7d2324677e1c5d90f->leave($__internal_581c405223d38a5c08f5eefadba2f543469cfc001971e9c7d2324677e1c5d90f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig";
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
