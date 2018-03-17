<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_253289336694ecdbafb85c337b43d8bcf90faede05baebe6ad917e98f071c430 extends Twig_Template
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
        $__internal_4a1ba59f2dc0828b3dfc01032f94698ad3e457420745cb2dddc1c69341eab562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1ba59f2dc0828b3dfc01032f94698ad3e457420745cb2dddc1c69341eab562->enter($__internal_4a1ba59f2dc0828b3dfc01032f94698ad3e457420745cb2dddc1c69341eab562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4a1ba59f2dc0828b3dfc01032f94698ad3e457420745cb2dddc1c69341eab562->leave($__internal_4a1ba59f2dc0828b3dfc01032f94698ad3e457420745cb2dddc1c69341eab562_prof);

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
