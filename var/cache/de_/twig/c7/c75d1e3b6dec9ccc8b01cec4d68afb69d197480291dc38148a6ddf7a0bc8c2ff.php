<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9a390f0f7c6a50550e95525e06a12ab83ad57875d535ae58fdaa609eb9f11fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e30cae9782dae42cee36439df4b48c30da7eab7279ace6a0e2a2cea62ad25500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30cae9782dae42cee36439df4b48c30da7eab7279ace6a0e2a2cea62ad25500->enter($__internal_e30cae9782dae42cee36439df4b48c30da7eab7279ace6a0e2a2cea62ad25500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e30cae9782dae42cee36439df4b48c30da7eab7279ace6a0e2a2cea62ad25500->leave($__internal_e30cae9782dae42cee36439df4b48c30da7eab7279ace6a0e2a2cea62ad25500_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cbe1ad3eb382a6efcc8cda39f2019afda211caf1661f4b27be10d9a72c27862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbe1ad3eb382a6efcc8cda39f2019afda211caf1661f4b27be10d9a72c27862->enter($__internal_8cbe1ad3eb382a6efcc8cda39f2019afda211caf1661f4b27be10d9a72c27862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8cbe1ad3eb382a6efcc8cda39f2019afda211caf1661f4b27be10d9a72c27862->leave($__internal_8cbe1ad3eb382a6efcc8cda39f2019afda211caf1661f4b27be10d9a72c27862_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
