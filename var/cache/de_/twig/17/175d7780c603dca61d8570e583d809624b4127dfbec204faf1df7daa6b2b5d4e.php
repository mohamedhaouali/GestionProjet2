<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e90a03147f4b8f53483b70a4203219c19fb60a290f1f552df7f563d8b265a33 extends Twig_Template
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
        $__internal_9237eeec9344ec63b90369b2ff1727704803d6525764b6fd2a368230bb6451a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9237eeec9344ec63b90369b2ff1727704803d6525764b6fd2a368230bb6451a0->enter($__internal_9237eeec9344ec63b90369b2ff1727704803d6525764b6fd2a368230bb6451a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9237eeec9344ec63b90369b2ff1727704803d6525764b6fd2a368230bb6451a0->leave($__internal_9237eeec9344ec63b90369b2ff1727704803d6525764b6fd2a368230bb6451a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
