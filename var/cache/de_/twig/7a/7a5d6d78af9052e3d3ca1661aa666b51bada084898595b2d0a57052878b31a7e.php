<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dbe05968c96261228de304aa2b0a3a626dbd9b2072c686856bc2eea51ea5ac05 extends Twig_Template
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
        $__internal_d5f9ff9f47a9e3dc55e37598aae17b2f13ef062ede484f020dee90484b8cb1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f9ff9f47a9e3dc55e37598aae17b2f13ef062ede484f020dee90484b8cb1ab->enter($__internal_d5f9ff9f47a9e3dc55e37598aae17b2f13ef062ede484f020dee90484b8cb1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d5f9ff9f47a9e3dc55e37598aae17b2f13ef062ede484f020dee90484b8cb1ab->leave($__internal_d5f9ff9f47a9e3dc55e37598aae17b2f13ef062ede484f020dee90484b8cb1ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
