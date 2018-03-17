<?php

/* @SonataAdmin/Button/acl_button.html.twig */
class __TwigTemplate_5ca640204c84fa6821d44fcd898ac8c949eaeceb0e56590209549aade9c80d4f extends Twig_Template
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
        $__internal_00af713a39dab06cb80980f4c35f7df2d2d6957a7f36f55e8c25988c2f2e84b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00af713a39dab06cb80980f4c35f7df2d2d6957a7f36f55e8c25988c2f2e84b9->enter($__internal_00af713a39dab06cb80980f4c35f7df2d2d6957a7f36f55e8c25988c2f2e84b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_00af713a39dab06cb80980f4c35f7df2d2d6957a7f36f55e8c25988c2f2e84b9->leave($__internal_00af713a39dab06cb80980f4c35f7df2d2d6957a7f36f55e8c25988c2f2e84b9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 14,  24 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
        <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
        {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
";
    }
}
