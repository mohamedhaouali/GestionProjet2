<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_27280d83fa333d4def1f611d8561f517db4eb5de5c5d393b810874f02f113f84 extends Twig_Template
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
        $__internal_16a4f6d741e1ee795a969e624b13225886981f3d7a491280137c33e2ef053f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a4f6d741e1ee795a969e624b13225886981f3d7a491280137c33e2ef053f96->enter($__internal_16a4f6d741e1ee795a969e624b13225886981f3d7a491280137c33e2ef053f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_16a4f6d741e1ee795a969e624b13225886981f3d7a491280137c33e2ef053f96->leave($__internal_16a4f6d741e1ee795a969e624b13225886981f3d7a491280137c33e2ef053f96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
