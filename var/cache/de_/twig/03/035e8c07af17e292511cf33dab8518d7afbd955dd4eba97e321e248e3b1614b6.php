<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b443c02a438b6d4aaf35156ca33ef0286ae02e943f2ea14901dd39ecbbc8e105 extends Twig_Template
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
        $__internal_33aace953cce62c5ac4ce99a6da2ed64ba13482801b1d854e48d17a797ba0d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aace953cce62c5ac4ce99a6da2ed64ba13482801b1d854e48d17a797ba0d08->enter($__internal_33aace953cce62c5ac4ce99a6da2ed64ba13482801b1d854e48d17a797ba0d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33aace953cce62c5ac4ce99a6da2ed64ba13482801b1d854e48d17a797ba0d08->leave($__internal_33aace953cce62c5ac4ce99a6da2ed64ba13482801b1d854e48d17a797ba0d08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
