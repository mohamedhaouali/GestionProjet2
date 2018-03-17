<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_e0d622b56bd2230c5d7c4629343e253d4e3df831e90b16ec6626965b5c794084 extends Twig_Template
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
        $__internal_7a76eab7b3ae4ce0eac5dd3c02f4b0344b39be73aee1b1c67d489c9634cae5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a76eab7b3ae4ce0eac5dd3c02f4b0344b39be73aee1b1c67d489c9634cae5b7->enter($__internal_7a76eab7b3ae4ce0eac5dd3c02f4b0344b39be73aee1b1c67d489c9634cae5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7a76eab7b3ae4ce0eac5dd3c02f4b0344b39be73aee1b1c67d489c9634cae5b7->leave($__internal_7a76eab7b3ae4ce0eac5dd3c02f4b0344b39be73aee1b1c67d489c9634cae5b7_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_115faeda4dd07ff9b4c0680f1d87ef7f13400f1b94c8524a7e6daccaf91bcf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115faeda4dd07ff9b4c0680f1d87ef7f13400f1b94c8524a7e6daccaf91bcf98->enter($__internal_115faeda4dd07ff9b4c0680f1d87ef7f13400f1b94c8524a7e6daccaf91bcf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_115faeda4dd07ff9b4c0680f1d87ef7f13400f1b94c8524a7e6daccaf91bcf98->leave($__internal_115faeda4dd07ff9b4c0680f1d87ef7f13400f1b94c8524a7e6daccaf91bcf98_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
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
