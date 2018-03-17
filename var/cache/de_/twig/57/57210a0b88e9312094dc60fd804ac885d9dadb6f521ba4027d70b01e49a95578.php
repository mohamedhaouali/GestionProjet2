<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c974ce36af31271891b73a167412d83adb5334258173c72ab8a6a7d5eb2a9db2 extends Twig_Template
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
        $__internal_aaa60d6218845141b0d49cfcda70120837361446ad31ab6a71f6d2bcb3f19eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa60d6218845141b0d49cfcda70120837361446ad31ab6a71f6d2bcb3f19eaf->enter($__internal_aaa60d6218845141b0d49cfcda70120837361446ad31ab6a71f6d2bcb3f19eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_aaa60d6218845141b0d49cfcda70120837361446ad31ab6a71f6d2bcb3f19eaf->leave($__internal_aaa60d6218845141b0d49cfcda70120837361446ad31ab6a71f6d2bcb3f19eaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
