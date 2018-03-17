<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_11c37dbb83961c472fd962d08be390b6fe07de77d073d88acb7b997686040de0 extends Twig_Template
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
        $__internal_b1d6d878f782a262cd18db331200d59bad8a21f154c3b3e37a0e9f0b66e1acb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d6d878f782a262cd18db331200d59bad8a21f154c3b3e37a0e9f0b66e1acb3->enter($__internal_b1d6d878f782a262cd18db331200d59bad8a21f154c3b3e37a0e9f0b66e1acb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b1d6d878f782a262cd18db331200d59bad8a21f154c3b3e37a0e9f0b66e1acb3->leave($__internal_b1d6d878f782a262cd18db331200d59bad8a21f154c3b3e37a0e9f0b66e1acb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
