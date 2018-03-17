<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7a0fe994742c858a8198437e20c53db3a31a4bf3eab1a918063ffb574cbd3bb8 extends Twig_Template
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
        $__internal_0be2546a6860d20acb4fb2a73d01fd1260ac3388a995ec3ce949f9ce9491245c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be2546a6860d20acb4fb2a73d01fd1260ac3388a995ec3ce949f9ce9491245c->enter($__internal_0be2546a6860d20acb4fb2a73d01fd1260ac3388a995ec3ce949f9ce9491245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0be2546a6860d20acb4fb2a73d01fd1260ac3388a995ec3ce949f9ce9491245c->leave($__internal_0be2546a6860d20acb4fb2a73d01fd1260ac3388a995ec3ce949f9ce9491245c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
