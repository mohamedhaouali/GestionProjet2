<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ccdadc9e921d54219111f59befb590827302ab13f5f44fdbedefb4f87dc3526c extends Twig_Template
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
        $__internal_96f51688ff92a6f43eedc117be1a4b07ec6fba7d4493156cebcdad86e9a02be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f51688ff92a6f43eedc117be1a4b07ec6fba7d4493156cebcdad86e9a02be6->enter($__internal_96f51688ff92a6f43eedc117be1a4b07ec6fba7d4493156cebcdad86e9a02be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_96f51688ff92a6f43eedc117be1a4b07ec6fba7d4493156cebcdad86e9a02be6->leave($__internal_96f51688ff92a6f43eedc117be1a4b07ec6fba7d4493156cebcdad86e9a02be6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
