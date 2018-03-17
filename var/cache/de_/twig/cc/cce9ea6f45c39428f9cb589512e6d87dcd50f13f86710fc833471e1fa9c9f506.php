<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b82b94cbddd1c9d59c53fb4ab8b03b78f9c5bb71786fa01cf67e389796b560ff extends Twig_Template
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
        $__internal_f9ec098bc2a79d305f9b83ea35ad9d67e93d56033e7e2f7199a7536f92a7ec47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ec098bc2a79d305f9b83ea35ad9d67e93d56033e7e2f7199a7536f92a7ec47->enter($__internal_f9ec098bc2a79d305f9b83ea35ad9d67e93d56033e7e2f7199a7536f92a7ec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_f9ec098bc2a79d305f9b83ea35ad9d67e93d56033e7e2f7199a7536f92a7ec47->leave($__internal_f9ec098bc2a79d305f9b83ea35ad9d67e93d56033e7e2f7199a7536f92a7ec47_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
