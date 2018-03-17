<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2e0e67244d78ff2f9a5b168e05e44ed0c59fd47a4c1f2586fee093542245bd5a extends Twig_Template
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
        $__internal_71aa146d51f294fd3912b169473dcf4fa188949eb17c4335ddcc01bee5d64318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71aa146d51f294fd3912b169473dcf4fa188949eb17c4335ddcc01bee5d64318->enter($__internal_71aa146d51f294fd3912b169473dcf4fa188949eb17c4335ddcc01bee5d64318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_71aa146d51f294fd3912b169473dcf4fa188949eb17c4335ddcc01bee5d64318->leave($__internal_71aa146d51f294fd3912b169473dcf4fa188949eb17c4335ddcc01bee5d64318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
