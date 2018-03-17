<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_c65f581251cef9a429076309a34b3e5c43af5453dc1cc2fdca9c6c8f498194e0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e52ead3bb49674a8ce26786fa29f5a754a1dfd3c477880c27d00f76ee03cbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e52ead3bb49674a8ce26786fa29f5a754a1dfd3c477880c27d00f76ee03cbec->enter($__internal_6e52ead3bb49674a8ce26786fa29f5a754a1dfd3c477880c27d00f76ee03cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e52ead3bb49674a8ce26786fa29f5a754a1dfd3c477880c27d00f76ee03cbec->leave($__internal_6e52ead3bb49674a8ce26786fa29f5a754a1dfd3c477880c27d00f76ee03cbec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
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
