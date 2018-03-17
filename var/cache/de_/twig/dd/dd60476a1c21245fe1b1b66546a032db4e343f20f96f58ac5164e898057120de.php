<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0e796f136d88db0e171af43d473818e3dc25230415131f0e1e988b79b5e80402 extends Twig_Template
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
        $__internal_4099f0b74498ed6bfff135f11026d0ae4539d9a6b96c8f0033d4152574d2724c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4099f0b74498ed6bfff135f11026d0ae4539d9a6b96c8f0033d4152574d2724c->enter($__internal_4099f0b74498ed6bfff135f11026d0ae4539d9a6b96c8f0033d4152574d2724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4099f0b74498ed6bfff135f11026d0ae4539d9a6b96c8f0033d4152574d2724c->leave($__internal_4099f0b74498ed6bfff135f11026d0ae4539d9a6b96c8f0033d4152574d2724c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
