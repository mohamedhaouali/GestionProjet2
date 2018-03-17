<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_90430d47b6ff145ba70f5a26113e58f445facee66e87d4275f51e81bb94b0d5a extends Twig_Template
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
        $__internal_33d297070f90b0046e5b896819655fbe378556921cfc6349da818bb3513177ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d297070f90b0046e5b896819655fbe378556921cfc6349da818bb3513177ee->enter($__internal_33d297070f90b0046e5b896819655fbe378556921cfc6349da818bb3513177ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_33d297070f90b0046e5b896819655fbe378556921cfc6349da818bb3513177ee->leave($__internal_33d297070f90b0046e5b896819655fbe378556921cfc6349da818bb3513177ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
