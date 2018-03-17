<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_948ae24c341bbe19bcc835062fe6c133767be229a17a5815eb12db8e2fc3c51c extends Twig_Template
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
        $__internal_a92170951951f037abb921e125ef0ecb989dffd6e9a94d8d2dc91239870a5934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92170951951f037abb921e125ef0ecb989dffd6e9a94d8d2dc91239870a5934->enter($__internal_a92170951951f037abb921e125ef0ecb989dffd6e9a94d8d2dc91239870a5934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_a92170951951f037abb921e125ef0ecb989dffd6e9a94d8d2dc91239870a5934->leave($__internal_a92170951951f037abb921e125ef0ecb989dffd6e9a94d8d2dc91239870a5934_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
