<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ebeb13b95c3180d2b708200be5f43be191d4d5de896044fbaf5b6b74758c5146 extends Twig_Template
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
        $__internal_12b59a81dec3a5bbd233de84f27d312aaa486d75cf533a91350799d6d2d9660f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b59a81dec3a5bbd233de84f27d312aaa486d75cf533a91350799d6d2d9660f->enter($__internal_12b59a81dec3a5bbd233de84f27d312aaa486d75cf533a91350799d6d2d9660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_12b59a81dec3a5bbd233de84f27d312aaa486d75cf533a91350799d6d2d9660f->leave($__internal_12b59a81dec3a5bbd233de84f27d312aaa486d75cf533a91350799d6d2d9660f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
