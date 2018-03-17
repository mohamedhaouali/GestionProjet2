<?php

/* FrontBundle:projet:show.html.twig */
class __TwigTemplate_84c41c978f81fa73b62e093242f5ba1fcd00d8d434247abd986d19a3e0baa75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:projet:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b44c77cc20c3ef2bafbba4a3111ae0e99c4dfc6aa6178acc6317696d13352a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b44c77cc20c3ef2bafbba4a3111ae0e99c4dfc6aa6178acc6317696d13352a0->enter($__internal_3b44c77cc20c3ef2bafbba4a3111ae0e99c4dfc6aa6178acc6317696d13352a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b44c77cc20c3ef2bafbba4a3111ae0e99c4dfc6aa6178acc6317696d13352a0->leave($__internal_3b44c77cc20c3ef2bafbba4a3111ae0e99c4dfc6aa6178acc6317696d13352a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1073d9b382c0ed09ff089ac62cae9d906d6bf6e95d116d077e7f1520d01bc1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1073d9b382c0ed09ff089ac62cae9d906d6bf6e95d116d077e7f1520d01bc1cc->enter($__internal_1073d9b382c0ed09ff089ac62cae9d906d6bf6e95d116d077e7f1520d01bc1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projet</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cout</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "cout", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1073d9b382c0ed09ff089ac62cae9d906d6bf6e95d116d077e7f1520d01bc1cc->leave($__internal_1073d9b382c0ed09ff089ac62cae9d906d6bf6e95d116d077e7f1520d01bc1cc_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:projet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Projet</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ projet.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ projet.nom }}</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>{% if projet.dateDebut %}{{ projet.dateDebut|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Cout</th>
                <td>{{ projet.cout }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
";
    }
}
