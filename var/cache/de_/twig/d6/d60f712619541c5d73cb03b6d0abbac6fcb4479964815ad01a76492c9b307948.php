<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4e6b653a6ae9c65129a767d124837b9d00385d50e743d9405ddc8ff8b0415d07 extends Twig_Template
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
        $__internal_1266f700f12bf892b9504e30b1b09a5df3871f49e4327d8489e9260f179098bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1266f700f12bf892b9504e30b1b09a5df3871f49e4327d8489e9260f179098bd->enter($__internal_1266f700f12bf892b9504e30b1b09a5df3871f49e4327d8489e9260f179098bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1266f700f12bf892b9504e30b1b09a5df3871f49e4327d8489e9260f179098bd->leave($__internal_1266f700f12bf892b9504e30b1b09a5df3871f49e4327d8489e9260f179098bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
