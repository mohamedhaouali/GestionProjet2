<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ddbf1bf03dfbb3e9eff6dd313da7eaa5ca6113502dc8b4504a01ac5b177a03af extends Twig_Template
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
        $__internal_25cfa44019d2bc0443cb82d15cbd9faa33031ab8d02f47a4dd1de3915641db04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cfa44019d2bc0443cb82d15cbd9faa33031ab8d02f47a4dd1de3915641db04->enter($__internal_25cfa44019d2bc0443cb82d15cbd9faa33031ab8d02f47a4dd1de3915641db04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_25cfa44019d2bc0443cb82d15cbd9faa33031ab8d02f47a4dd1de3915641db04->leave($__internal_25cfa44019d2bc0443cb82d15cbd9faa33031ab8d02f47a4dd1de3915641db04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
