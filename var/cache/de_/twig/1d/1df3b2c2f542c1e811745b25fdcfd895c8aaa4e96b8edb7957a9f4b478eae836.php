<?php

/* @Front/Employe/index.html.twig */
class __TwigTemplate_26aa6910c7f91b3a1fc7a925081b1189dc939b72dcf340a347158a3816d9d752 extends Twig_Template
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
        $__internal_d99cb2298f317349e2063bea200b2811ccb2f7681b5bbd0744152df7a6a25390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99cb2298f317349e2063bea200b2811ccb2f7681b5bbd0744152df7a6a25390->enter($__internal_d99cb2298f317349e2063bea200b2811ccb2f7681b5bbd0744152df7a6a25390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Employe/index.html.twig"));

        // line 1
        echo "<table border=1>
    <tr>
        <td>ID</td>
        <td>dep</td>
         <td>Nom</td>
        <td>prenom</td>
                      <td>date</td> 

           <td>sexe</td>
              <td>pays</td>
              
              
    </tr>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 16
            echo "    <tr>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["d"], "departement", array()), "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "prenom", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>

        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "sexe", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "pays", array()), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
";
        
        $__internal_d99cb2298f317349e2063bea200b2811ccb2f7681b5bbd0744152df7a6a25390->leave($__internal_d99cb2298f317349e2063bea200b2811ccb2f7681b5bbd0744152df7a6a25390_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Employe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  70 => 24,  66 => 23,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  42 => 16,  38 => 15,  22 => 1,);
    }

    public function getSource()
    {
        return "<table border=1>
    <tr>
        <td>ID</td>
        <td>dep</td>
         <td>Nom</td>
        <td>prenom</td>
                      <td>date</td> 

           <td>sexe</td>
              <td>pays</td>
              
              
    </tr>

{% for d in employe %}
    <tr>
        <td>{{ d.id}}</td>
          <td>{{ d.departement.nom}}</td>
        <td>{{ d.nom}}</td>
         <td>{{ d.prenom}}</td>
    <td>{{ d.date |date('d-m-y')}}</td>

        <td>{{ d.sexe}}</td>
        <td>{{ d.pays}}</td>
    </tr>
{% endfor %}
</table>
";
    }
}
