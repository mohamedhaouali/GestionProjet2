<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ab7d613e437316a82be303f3b86f1f2a25a1a01d501e2c02b3b7474add0fc79d extends Twig_Template
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
        $__internal_ded6ea9314f663a1dbad648d63f55c5c5e1489fd9891974409672f0da52aaa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded6ea9314f663a1dbad648d63f55c5c5e1489fd9891974409672f0da52aaa2f->enter($__internal_ded6ea9314f663a1dbad648d63f55c5c5e1489fd9891974409672f0da52aaa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ded6ea9314f663a1dbad648d63f55c5c5e1489fd9891974409672f0da52aaa2f->leave($__internal_ded6ea9314f663a1dbad648d63f55c5c5e1489fd9891974409672f0da52aaa2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
