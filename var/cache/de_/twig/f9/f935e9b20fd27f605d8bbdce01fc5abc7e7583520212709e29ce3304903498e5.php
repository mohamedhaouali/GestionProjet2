<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_74823bc4bc9eb56fa6e5033bc9e984bdc99f787c0dc9c844c0e4e37522a6e53d extends Twig_Template
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
        $__internal_cfb308066f43ceda0e878db22eca4cf07b6f591509d24e0f76640f8cd23ec577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb308066f43ceda0e878db22eca4cf07b6f591509d24e0f76640f8cd23ec577->enter($__internal_cfb308066f43ceda0e878db22eca4cf07b6f591509d24e0f76640f8cd23ec577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cfb308066f43ceda0e878db22eca4cf07b6f591509d24e0f76640f8cd23ec577->leave($__internal_cfb308066f43ceda0e878db22eca4cf07b6f591509d24e0f76640f8cd23ec577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
