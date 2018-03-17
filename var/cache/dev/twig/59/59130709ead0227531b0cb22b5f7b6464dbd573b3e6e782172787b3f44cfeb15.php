<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c3370dbbf19205848582d218da66af1db75cd4aa0d933031e623c76913a428ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05eec71cec720a5e66b3e3f68007b5db9cd98fded80ff77fe3ca95b3864aeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05eec71cec720a5e66b3e3f68007b5db9cd98fded80ff77fe3ca95b3864aeaf->enter($__internal_e05eec71cec720a5e66b3e3f68007b5db9cd98fded80ff77fe3ca95b3864aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05eec71cec720a5e66b3e3f68007b5db9cd98fded80ff77fe3ca95b3864aeaf->leave($__internal_e05eec71cec720a5e66b3e3f68007b5db9cd98fded80ff77fe3ca95b3864aeaf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8383efecc0ae173ff8811c5db379dea023156ecd475ea2c4c013d233973b4f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8383efecc0ae173ff8811c5db379dea023156ecd475ea2c4c013d233973b4f59->enter($__internal_8383efecc0ae173ff8811c5db379dea023156ecd475ea2c4c013d233973b4f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8383efecc0ae173ff8811c5db379dea023156ecd475ea2c4c013d233973b4f59->leave($__internal_8383efecc0ae173ff8811c5db379dea023156ecd475ea2c4c013d233973b4f59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
