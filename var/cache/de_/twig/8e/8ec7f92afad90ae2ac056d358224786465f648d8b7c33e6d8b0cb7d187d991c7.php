<?php

/* @Front/Departement/index.html.twig */
class __TwigTemplate_986055f02bb25c0e8b769079370f5382f8aa9de877c5434ef1aa21cc7e20bcc6 extends Twig_Template
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
        $__internal_0ee3d0090e66a8cb18eda9e54543c1dc3593f245447d207fabba98019e956989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee3d0090e66a8cb18eda9e54543c1dc3593f245447d207fabba98019e956989->enter($__internal_0ee3d0090e66a8cb18eda9e54543c1dc3593f245447d207fabba98019e956989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Departement/index.html.twig"));

        // line 1
        echo "<table border=1>
    <tr>
        <td>ID</td>
        <td>Nom</td>
    </tr>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departement"]) ? $context["departement"] : $this->getContext($context, "departement")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 8
            echo "    <tr>
        <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>";
        
        $__internal_0ee3d0090e66a8cb18eda9e54543c1dc3593f245447d207fabba98019e956989->leave($__internal_0ee3d0090e66a8cb18eda9e54543c1dc3593f245447d207fabba98019e956989_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Departement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  41 => 10,  37 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<table border=1>
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
</table>";
    }
}
