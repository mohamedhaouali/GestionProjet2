<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_879dd295aeb5633d6b9277daa460fde43a799d53e94a647f0c23706b56eacea5 extends Twig_Template
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
        $__internal_a7b889753cb3af1d1815dff3d2a88491eaab74d02198b806f0f1579720a990eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b889753cb3af1d1815dff3d2a88491eaab74d02198b806f0f1579720a990eb->enter($__internal_a7b889753cb3af1d1815dff3d2a88491eaab74d02198b806f0f1579720a990eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a7b889753cb3af1d1815dff3d2a88491eaab74d02198b806f0f1579720a990eb->leave($__internal_a7b889753cb3af1d1815dff3d2a88491eaab74d02198b806f0f1579720a990eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
