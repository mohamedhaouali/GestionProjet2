<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_714f2c4b69bb1d264b2f1988b483bf8cefde6ad187963186a062a767316373a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a954171566d58e7e6f4a75f87eb30fcc71e4f68178eca09ad315565305038dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a954171566d58e7e6f4a75f87eb30fcc71e4f68178eca09ad315565305038dcf->enter($__internal_a954171566d58e7e6f4a75f87eb30fcc71e4f68178eca09ad315565305038dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_a954171566d58e7e6f4a75f87eb30fcc71e4f68178eca09ad315565305038dcf->leave($__internal_a954171566d58e7e6f4a75f87eb30fcc71e4f68178eca09ad315565305038dcf_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c7c51fb9cb0b2e6addb0a248dbf52e37799c6043ed3a6c803afaa99e5e54e0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c51fb9cb0b2e6addb0a248dbf52e37799c6043ed3a6c803afaa99e5e54e0ad->enter($__internal_c7c51fb9cb0b2e6addb0a248dbf52e37799c6043ed3a6c803afaa99e5e54e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c7c51fb9cb0b2e6addb0a248dbf52e37799c6043ed3a6c803afaa99e5e54e0ad->leave($__internal_c7c51fb9cb0b2e6addb0a248dbf52e37799c6043ed3a6c803afaa99e5e54e0ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
