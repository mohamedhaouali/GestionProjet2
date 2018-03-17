<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_20e2d32e1f6b44c6ccd09a24a11c04c34f9fb166d4c0e3ae41339c2fd7f07ade extends Twig_Template
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
        $__internal_8102795b00a1f5a9a04c42cbb8c1f17db13ad56fb80e5e0bf74aff9bf26da020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8102795b00a1f5a9a04c42cbb8c1f17db13ad56fb80e5e0bf74aff9bf26da020->enter($__internal_8102795b00a1f5a9a04c42cbb8c1f17db13ad56fb80e5e0bf74aff9bf26da020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8102795b00a1f5a9a04c42cbb8c1f17db13ad56fb80e5e0bf74aff9bf26da020->leave($__internal_8102795b00a1f5a9a04c42cbb8c1f17db13ad56fb80e5e0bf74aff9bf26da020_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
