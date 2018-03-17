<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2cad300db76b4ae913a4806a435847b6a74f1bd0783a45a76adae548b5982113 extends Twig_Template
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
        $__internal_c75bd35e08c6d81d57dd825a75f51b35ad7e6c8c7efc6bda479bd552ea3ea7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75bd35e08c6d81d57dd825a75f51b35ad7e6c8c7efc6bda479bd552ea3ea7fb->enter($__internal_c75bd35e08c6d81d57dd825a75f51b35ad7e6c8c7efc6bda479bd552ea3ea7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c75bd35e08c6d81d57dd825a75f51b35ad7e6c8c7efc6bda479bd552ea3ea7fb->leave($__internal_c75bd35e08c6d81d57dd825a75f51b35ad7e6c8c7efc6bda479bd552ea3ea7fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
