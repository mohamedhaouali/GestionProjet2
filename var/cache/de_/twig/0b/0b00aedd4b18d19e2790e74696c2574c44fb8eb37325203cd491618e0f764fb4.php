<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7f8da405eaab8f578f58d3b5713ff9e1fd4406ecad27005ce246b062a0d9ca93 extends Twig_Template
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
        $__internal_4bfc8a0222786e3ab886fb694e3c93065223c9ac4488f00630ff795cfd322362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfc8a0222786e3ab886fb694e3c93065223c9ac4488f00630ff795cfd322362->enter($__internal_4bfc8a0222786e3ab886fb694e3c93065223c9ac4488f00630ff795cfd322362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4bfc8a0222786e3ab886fb694e3c93065223c9ac4488f00630ff795cfd322362->leave($__internal_4bfc8a0222786e3ab886fb694e3c93065223c9ac4488f00630ff795cfd322362_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
