<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_48174b333bd764d4dcb0df8052e1e7b4692fc4d272236b231ed2fd328b88542a extends Twig_Template
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
        $__internal_3223bff84a1712774a75cad1ff69ec962ad0c194bff2d31f50917d636f363f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3223bff84a1712774a75cad1ff69ec962ad0c194bff2d31f50917d636f363f30->enter($__internal_3223bff84a1712774a75cad1ff69ec962ad0c194bff2d31f50917d636f363f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3223bff84a1712774a75cad1ff69ec962ad0c194bff2d31f50917d636f363f30->leave($__internal_3223bff84a1712774a75cad1ff69ec962ad0c194bff2d31f50917d636f363f30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
