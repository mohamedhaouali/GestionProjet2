<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_01aa1a1f0c9693f1fa8856db1f2b94b1511f20da3735771c4ccf172ee4fe1edf extends Twig_Template
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
        $__internal_898ef372f655e510588914c6b093487b651759fbc24f51402dd41e14f5d3434e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898ef372f655e510588914c6b093487b651759fbc24f51402dd41e14f5d3434e->enter($__internal_898ef372f655e510588914c6b093487b651759fbc24f51402dd41e14f5d3434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_898ef372f655e510588914c6b093487b651759fbc24f51402dd41e14f5d3434e->leave($__internal_898ef372f655e510588914c6b093487b651759fbc24f51402dd41e14f5d3434e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
