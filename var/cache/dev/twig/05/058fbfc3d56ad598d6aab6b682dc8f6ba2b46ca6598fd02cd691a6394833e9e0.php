<?php

/* FrontBundle:Departement:index.html.twig */
class __TwigTemplate_3cdcd65b8a31c67fe1a6d70bd291efb7ad4f4e521eeeea4a741f4399c82ca409 extends Twig_Template
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
        $__internal_046dd51b5ab43218ff3c2c20d415099d5a5ca06c7eccc52f04fd1bc60d25c5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046dd51b5ab43218ff3c2c20d415099d5a5ca06c7eccc52f04fd1bc60d25c5bf->enter($__internal_046dd51b5ab43218ff3c2c20d415099d5a5ca06c7eccc52f04fd1bc60d25c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Departement:index.html.twig"));

        // line 1
        echo "
<table border=1>
    <tr>
        <td>ID</td>
        <td>Nom</td>
    </tr>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departement"]) ? $context["departement"] : $this->getContext($context, "departement")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 9
            echo "    <tr>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>
";
        
        $__internal_046dd51b5ab43218ff3c2c20d415099d5a5ca06c7eccc52f04fd1bc60d25c5bf->leave($__internal_046dd51b5ab43218ff3c2c20d415099d5a5ca06c7eccc52f04fd1bc60d25c5bf_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Departement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 11,  38 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "
<table border=1>
    <tr>
        <td>ID</td>
        <td>Nom</td>
    </tr>

{% for d in departement %}
    <tr>
        <td>{{ d.id}}</td>
        <td>{{ d.nom}}</td>
    </tr>
{% endfor %}
</table>
";
    }
}
