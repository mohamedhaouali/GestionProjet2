<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a1aec32af45a8e422b8424e58fe6a88b08a63eba7b3c3e1004781922fb6f85e4 extends Twig_Template
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
        $__internal_74e69cca74f735545a7400caa43320a951c1b81312722e9c9492fcc140a692a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e69cca74f735545a7400caa43320a951c1b81312722e9c9492fcc140a692a5->enter($__internal_74e69cca74f735545a7400caa43320a951c1b81312722e9c9492fcc140a692a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_74e69cca74f735545a7400caa43320a951c1b81312722e9c9492fcc140a692a5->leave($__internal_74e69cca74f735545a7400caa43320a951c1b81312722e9c9492fcc140a692a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
