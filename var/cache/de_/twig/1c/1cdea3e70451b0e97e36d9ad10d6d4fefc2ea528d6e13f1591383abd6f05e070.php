<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_11e155a8ca683557d75f633969c7cb1d0f2f97748de807849f993ecb86298318 extends Twig_Template
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
        $__internal_1cdc86b0eb1e429bdee6f5230147b5ec3476b82a2a67bcb5229773449e0458d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdc86b0eb1e429bdee6f5230147b5ec3476b82a2a67bcb5229773449e0458d0->enter($__internal_1cdc86b0eb1e429bdee6f5230147b5ec3476b82a2a67bcb5229773449e0458d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1cdc86b0eb1e429bdee6f5230147b5ec3476b82a2a67bcb5229773449e0458d0->leave($__internal_1cdc86b0eb1e429bdee6f5230147b5ec3476b82a2a67bcb5229773449e0458d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
