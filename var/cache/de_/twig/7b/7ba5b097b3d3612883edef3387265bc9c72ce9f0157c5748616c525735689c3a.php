<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d143814a49f77c23f044c0a5db3f89a35b47b2cc19863292497f8090c7bb24f1 extends Twig_Template
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
        $__internal_a0cd4e08c5b07e0f76db437458ab5370965ccdba617a229f21a2c06822393630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd4e08c5b07e0f76db437458ab5370965ccdba617a229f21a2c06822393630->enter($__internal_a0cd4e08c5b07e0f76db437458ab5370965ccdba617a229f21a2c06822393630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0cd4e08c5b07e0f76db437458ab5370965ccdba617a229f21a2c06822393630->leave($__internal_a0cd4e08c5b07e0f76db437458ab5370965ccdba617a229f21a2c06822393630_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
