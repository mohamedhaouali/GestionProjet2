<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ffad20d71fd5f87187bd9e314f87163cab202323cc3bd7de397ebf154ea6d13 extends Twig_Template
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
        $__internal_693e15831f9201d9d3c3c9c4d3981c66f4c927be5884484a017552520ff3e9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693e15831f9201d9d3c3c9c4d3981c66f4c927be5884484a017552520ff3e9bb->enter($__internal_693e15831f9201d9d3c3c9c4d3981c66f4c927be5884484a017552520ff3e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_693e15831f9201d9d3c3c9c4d3981c66f4c927be5884484a017552520ff3e9bb->leave($__internal_693e15831f9201d9d3c3c9c4d3981c66f4c927be5884484a017552520ff3e9bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
