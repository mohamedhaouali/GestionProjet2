<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dfefb15b2d297010790fdcfda791af262dae15c2533c4635ddc54469c1bcb074 extends Twig_Template
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
        $__internal_ac7c319514241cb1f3fd914180d4268501382f4628808aa1df5ca31924a8556c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7c319514241cb1f3fd914180d4268501382f4628808aa1df5ca31924a8556c->enter($__internal_ac7c319514241cb1f3fd914180d4268501382f4628808aa1df5ca31924a8556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ac7c319514241cb1f3fd914180d4268501382f4628808aa1df5ca31924a8556c->leave($__internal_ac7c319514241cb1f3fd914180d4268501382f4628808aa1df5ca31924a8556c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
