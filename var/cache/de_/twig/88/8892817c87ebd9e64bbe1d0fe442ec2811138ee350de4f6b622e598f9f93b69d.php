<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_30d76b2d4008b122ef1adcdf8c36634c01d5e32e0b41d9f9538c362237f4b0aa extends Twig_Template
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
        $__internal_4d44401a38ec98ec6af5a561a0d42513b6c03119308b030004069c79f411e2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d44401a38ec98ec6af5a561a0d42513b6c03119308b030004069c79f411e2b2->enter($__internal_4d44401a38ec98ec6af5a561a0d42513b6c03119308b030004069c79f411e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4d44401a38ec98ec6af5a561a0d42513b6c03119308b030004069c79f411e2b2->leave($__internal_4d44401a38ec98ec6af5a561a0d42513b6c03119308b030004069c79f411e2b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
