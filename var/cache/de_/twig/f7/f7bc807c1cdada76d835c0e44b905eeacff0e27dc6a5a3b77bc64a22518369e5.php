<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_301b56d6ef5ab3c8f7071ab631d0f356f33ea241a96ddf920593b73e0861317d extends Twig_Template
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
        $__internal_a6492b0f8d14ecb6e80ec7178b6a9fafd275f3de8b9ad60868d672ae114493bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6492b0f8d14ecb6e80ec7178b6a9fafd275f3de8b9ad60868d672ae114493bc->enter($__internal_a6492b0f8d14ecb6e80ec7178b6a9fafd275f3de8b9ad60868d672ae114493bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a6492b0f8d14ecb6e80ec7178b6a9fafd275f3de8b9ad60868d672ae114493bc->leave($__internal_a6492b0f8d14ecb6e80ec7178b6a9fafd275f3de8b9ad60868d672ae114493bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
