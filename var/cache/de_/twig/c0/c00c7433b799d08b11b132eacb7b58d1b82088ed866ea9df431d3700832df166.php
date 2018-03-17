<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c5367e660842ec216f7e9974dfff8e2c63e9dc34f226899110a369a42dcb71b3 extends Twig_Template
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
        $__internal_7ac5c883f8405a2ac7145651942bad3a669d4a925ddf8dc5a26da83915360ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac5c883f8405a2ac7145651942bad3a669d4a925ddf8dc5a26da83915360ae8->enter($__internal_7ac5c883f8405a2ac7145651942bad3a669d4a925ddf8dc5a26da83915360ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7ac5c883f8405a2ac7145651942bad3a669d4a925ddf8dc5a26da83915360ae8->leave($__internal_7ac5c883f8405a2ac7145651942bad3a669d4a925ddf8dc5a26da83915360ae8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
