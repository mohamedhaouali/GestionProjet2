<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a0c9bb81d570b9861c474ba55e581d94ccca1b3a2c0cdb88c84f0b46ea2efa91 extends Twig_Template
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
        $__internal_fa384791405152c0ad202ac5750ee4009d9dc0daeaebc8cb867ac954161d744a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa384791405152c0ad202ac5750ee4009d9dc0daeaebc8cb867ac954161d744a->enter($__internal_fa384791405152c0ad202ac5750ee4009d9dc0daeaebc8cb867ac954161d744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fa384791405152c0ad202ac5750ee4009d9dc0daeaebc8cb867ac954161d744a->leave($__internal_fa384791405152c0ad202ac5750ee4009d9dc0daeaebc8cb867ac954161d744a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
