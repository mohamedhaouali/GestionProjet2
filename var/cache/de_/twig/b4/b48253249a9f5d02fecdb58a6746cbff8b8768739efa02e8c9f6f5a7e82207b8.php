<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b27fdabe71114d7c6c6abac42096ca15d67d64ddbb328a161a52a935dbf0db70 extends Twig_Template
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
        $__internal_6e37423641fc91bd33041234e347adfe60a14bee7323c8c76807f3c3f8b82fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e37423641fc91bd33041234e347adfe60a14bee7323c8c76807f3c3f8b82fec->enter($__internal_6e37423641fc91bd33041234e347adfe60a14bee7323c8c76807f3c3f8b82fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_6e37423641fc91bd33041234e347adfe60a14bee7323c8c76807f3c3f8b82fec->leave($__internal_6e37423641fc91bd33041234e347adfe60a14bee7323c8c76807f3c3f8b82fec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
