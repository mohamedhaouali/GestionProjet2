<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_e20cf29baf32a5f7c9b966483824858838c932e1c730f84904fbb1851705bd5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f92e9625b48155f8466a3fc795885c6119743a077095edd531d01645e42893d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92e9625b48155f8466a3fc795885c6119743a077095edd531d01645e42893d5->enter($__internal_f92e9625b48155f8466a3fc795885c6119743a077095edd531d01645e42893d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_f92e9625b48155f8466a3fc795885c6119743a077095edd531d01645e42893d5->leave($__internal_f92e9625b48155f8466a3fc795885c6119743a077095edd531d01645e42893d5_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_e6d55788b24b743bdd4533c9a369b75fb62ffdc9f89efa4955ff5978c17f25a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d55788b24b743bdd4533c9a369b75fb62ffdc9f89efa4955ff5978c17f25a8->enter($__internal_e6d55788b24b743bdd4533c9a369b75fb62ffdc9f89efa4955ff5978c17f25a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_e6d55788b24b743bdd4533c9a369b75fb62ffdc9f89efa4955ff5978c17f25a8->leave($__internal_e6d55788b24b743bdd4533c9a369b75fb62ffdc9f89efa4955ff5978c17f25a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  59 => 24,  54 => 23,  52 => 22,  48 => 20,  46 => 19,  40 => 18,  37 => 17,  31 => 14,  28 => 13,  26 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
";
    }
}
