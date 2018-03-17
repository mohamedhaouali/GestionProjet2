<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d695aaa3eb1b81059654019c74baa57545c0bbe31989ce84fc443fa65a4c0fb1 extends Twig_Template
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
        $__internal_7e3dc71304c99e3afc294181b3c3cafbcfbdb51f075875307086eba9659b755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3dc71304c99e3afc294181b3c3cafbcfbdb51f075875307086eba9659b755d->enter($__internal_7e3dc71304c99e3afc294181b3c3cafbcfbdb51f075875307086eba9659b755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7e3dc71304c99e3afc294181b3c3cafbcfbdb51f075875307086eba9659b755d->leave($__internal_7e3dc71304c99e3afc294181b3c3cafbcfbdb51f075875307086eba9659b755d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
