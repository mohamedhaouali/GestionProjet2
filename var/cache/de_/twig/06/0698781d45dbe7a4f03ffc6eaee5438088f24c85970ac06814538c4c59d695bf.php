<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0e5860fcae20d8cb91a01f070a7ab121b6f4201a43cb00b7682776216be4a936 extends Twig_Template
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
        $__internal_9dbe761849948b26af65d9d759a7a1431574889e2a107b4f82fcb98eadf2242f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe761849948b26af65d9d759a7a1431574889e2a107b4f82fcb98eadf2242f->enter($__internal_9dbe761849948b26af65d9d759a7a1431574889e2a107b4f82fcb98eadf2242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9dbe761849948b26af65d9d759a7a1431574889e2a107b4f82fcb98eadf2242f->leave($__internal_9dbe761849948b26af65d9d759a7a1431574889e2a107b4f82fcb98eadf2242f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
