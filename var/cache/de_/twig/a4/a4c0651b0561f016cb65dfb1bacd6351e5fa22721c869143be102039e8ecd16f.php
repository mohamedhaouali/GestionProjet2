<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_30a7d965fab671f1f32830bca85c0940d13769df0d019721d0c3960b12d20e4e extends Twig_Template
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
        $__internal_650780de12e45df504a9d762af7d6f2100a98aedcfb2e30950d85fa96b75c61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650780de12e45df504a9d762af7d6f2100a98aedcfb2e30950d85fa96b75c61f->enter($__internal_650780de12e45df504a9d762af7d6f2100a98aedcfb2e30950d85fa96b75c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_650780de12e45df504a9d762af7d6f2100a98aedcfb2e30950d85fa96b75c61f->leave($__internal_650780de12e45df504a9d762af7d6f2100a98aedcfb2e30950d85fa96b75c61f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
