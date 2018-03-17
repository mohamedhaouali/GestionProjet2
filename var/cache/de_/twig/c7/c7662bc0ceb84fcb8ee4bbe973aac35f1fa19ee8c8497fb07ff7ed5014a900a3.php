<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fde8e6f1728bae9122da270562ea8ed27a2321713f9ec1e0c24ce2bdfe6e5329 extends Twig_Template
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
        $__internal_cd7d0fc262317e46a5046854df67fa137f2a1a47aa51543baa88c19fde31a1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7d0fc262317e46a5046854df67fa137f2a1a47aa51543baa88c19fde31a1a2->enter($__internal_cd7d0fc262317e46a5046854df67fa137f2a1a47aa51543baa88c19fde31a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cd7d0fc262317e46a5046854df67fa137f2a1a47aa51543baa88c19fde31a1a2->leave($__internal_cd7d0fc262317e46a5046854df67fa137f2a1a47aa51543baa88c19fde31a1a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
