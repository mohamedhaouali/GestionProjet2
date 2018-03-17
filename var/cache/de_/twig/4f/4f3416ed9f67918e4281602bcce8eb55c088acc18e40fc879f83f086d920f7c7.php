<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_25c35d7e9c25be88e634a7388d32086277583d8aea029a9d4228e2eea2563205 extends Twig_Template
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
        $__internal_c547f12c9046876fd2a5627170b2881f9bad054bc3200c9b2fccc5d91cf4182e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c547f12c9046876fd2a5627170b2881f9bad054bc3200c9b2fccc5d91cf4182e->enter($__internal_c547f12c9046876fd2a5627170b2881f9bad054bc3200c9b2fccc5d91cf4182e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c547f12c9046876fd2a5627170b2881f9bad054bc3200c9b2fccc5d91cf4182e->leave($__internal_c547f12c9046876fd2a5627170b2881f9bad054bc3200c9b2fccc5d91cf4182e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
