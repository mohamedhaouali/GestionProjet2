<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_70178a647e1d1daff114bc418dc0568ddb15ff811d840f73c97e44761965e45d extends Twig_Template
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
        $__internal_57d024dc87148c24ab6235ff428758fd09db6fa83a196654713edd1aa288445e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d024dc87148c24ab6235ff428758fd09db6fa83a196654713edd1aa288445e->enter($__internal_57d024dc87148c24ab6235ff428758fd09db6fa83a196654713edd1aa288445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_57d024dc87148c24ab6235ff428758fd09db6fa83a196654713edd1aa288445e->leave($__internal_57d024dc87148c24ab6235ff428758fd09db6fa83a196654713edd1aa288445e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
