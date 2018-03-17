<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ff53debcf7267906832af11e0426db346148e5c49ce4dc8520cd27e14deeff11 extends Twig_Template
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
        $__internal_bde5e38c7e9873fe5dd3872da0b568e16bbc306b5c5f272a486e0e659e8fd8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde5e38c7e9873fe5dd3872da0b568e16bbc306b5c5f272a486e0e659e8fd8ea->enter($__internal_bde5e38c7e9873fe5dd3872da0b568e16bbc306b5c5f272a486e0e659e8fd8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bde5e38c7e9873fe5dd3872da0b568e16bbc306b5c5f272a486e0e659e8fd8ea->leave($__internal_bde5e38c7e9873fe5dd3872da0b568e16bbc306b5c5f272a486e0e659e8fd8ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
