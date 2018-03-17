<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_360e9ff6679d8a050ea8503fcea02a027c6e29b97bd5d6c8de623671884bf6a1 extends Twig_Template
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
        $__internal_4edc8528441b0612afce7fa699b9ba6c4ee8138ab2e3709def5e5a5d90020013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edc8528441b0612afce7fa699b9ba6c4ee8138ab2e3709def5e5a5d90020013->enter($__internal_4edc8528441b0612afce7fa699b9ba6c4ee8138ab2e3709def5e5a5d90020013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4edc8528441b0612afce7fa699b9ba6c4ee8138ab2e3709def5e5a5d90020013->leave($__internal_4edc8528441b0612afce7fa699b9ba6c4ee8138ab2e3709def5e5a5d90020013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
