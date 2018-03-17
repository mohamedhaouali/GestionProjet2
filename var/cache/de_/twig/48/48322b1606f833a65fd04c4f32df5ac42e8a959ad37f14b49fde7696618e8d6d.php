<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_92e4071b2c3562c048dce5299eb1359e3ee81291c774a2201fe8fd3b3aed2559 extends Twig_Template
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
        $__internal_f55a29cbb73df4be74bb117b38d96d9ae893d24475376d7cb659845354bca33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55a29cbb73df4be74bb117b38d96d9ae893d24475376d7cb659845354bca33c->enter($__internal_f55a29cbb73df4be74bb117b38d96d9ae893d24475376d7cb659845354bca33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f55a29cbb73df4be74bb117b38d96d9ae893d24475376d7cb659845354bca33c->leave($__internal_f55a29cbb73df4be74bb117b38d96d9ae893d24475376d7cb659845354bca33c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
