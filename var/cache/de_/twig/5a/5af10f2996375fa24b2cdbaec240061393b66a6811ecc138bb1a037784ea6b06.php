<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_be2cd16d8bb1a6755294e5f350de1b4142ba29dc373b51d3b364cc82b378cb59 extends Twig_Template
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
        $__internal_a9b11675c61bcbc704d8cb73a7ac47af8c15017980d87842c4b60f0f10a24ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b11675c61bcbc704d8cb73a7ac47af8c15017980d87842c4b60f0f10a24ce5->enter($__internal_a9b11675c61bcbc704d8cb73a7ac47af8c15017980d87842c4b60f0f10a24ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a9b11675c61bcbc704d8cb73a7ac47af8c15017980d87842c4b60f0f10a24ce5->leave($__internal_a9b11675c61bcbc704d8cb73a7ac47af8c15017980d87842c4b60f0f10a24ce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
