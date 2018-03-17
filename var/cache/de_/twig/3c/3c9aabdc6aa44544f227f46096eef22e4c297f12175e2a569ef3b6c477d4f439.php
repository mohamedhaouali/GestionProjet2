<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_e38c323fc085c94d2709d0b0b9c6d89e70414f4122df15aeefd380839caa2b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2716ea569b29ff9d34abec19ccac53355ba3a6ccfeafda004d8b88a81009abac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2716ea569b29ff9d34abec19ccac53355ba3a6ccfeafda004d8b88a81009abac->enter($__internal_2716ea569b29ff9d34abec19ccac53355ba3a6ccfeafda004d8b88a81009abac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2716ea569b29ff9d34abec19ccac53355ba3a6ccfeafda004d8b88a81009abac->leave($__internal_2716ea569b29ff9d34abec19ccac53355ba3a6ccfeafda004d8b88a81009abac_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_498d1177385636c755dfb0057e765626a0d2cc713960352f3b427cbce40f010f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498d1177385636c755dfb0057e765626a0d2cc713960352f3b427cbce40f010f->enter($__internal_498d1177385636c755dfb0057e765626a0d2cc713960352f3b427cbce40f010f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_498d1177385636c755dfb0057e765626a0d2cc713960352f3b427cbce40f010f->leave($__internal_498d1177385636c755dfb0057e765626a0d2cc713960352f3b427cbce40f010f_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9bf54fafd9e2459f55f169051e5733f7c801fa808ebc40449d193d2e7dcfc8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf54fafd9e2459f55f169051e5733f7c801fa808ebc40449d193d2e7dcfc8d5->enter($__internal_9bf54fafd9e2459f55f169051e5733f7c801fa808ebc40449d193d2e7dcfc8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9bf54fafd9e2459f55f169051e5733f7c801fa808ebc40449d193d2e7dcfc8d5->leave($__internal_9bf54fafd9e2459f55f169051e5733f7c801fa808ebc40449d193d2e7dcfc8d5_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3df8155da3d60b269f1c8701300bcdee285b5f7b9a1773bafe5cc9e3e9d7d209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8155da3d60b269f1c8701300bcdee285b5f7b9a1773bafe5cc9e3e9d7d209->enter($__internal_3df8155da3d60b269f1c8701300bcdee285b5f7b9a1773bafe5cc9e3e9d7d209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3df8155da3d60b269f1c8701300bcdee285b5f7b9a1773bafe5cc9e3e9d7d209->leave($__internal_3df8155da3d60b269f1c8701300bcdee285b5f7b9a1773bafe5cc9e3e9d7d209_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_b5caa1587c3a77accc444b6936f6d95299a0a471c01e01981b1b72932a80a89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5caa1587c3a77accc444b6936f6d95299a0a471c01e01981b1b72932a80a89b->enter($__internal_b5caa1587c3a77accc444b6936f6d95299a0a471c01e01981b1b72932a80a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_b5caa1587c3a77accc444b6936f6d95299a0a471c01e01981b1b72932a80a89b->leave($__internal_b5caa1587c3a77accc444b6936f6d95299a0a471c01e01981b1b72932a80a89b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_197a997fe779dfd539bca677b9517d74cf786ab89a696a215fe8037da4b8b746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197a997fe779dfd539bca677b9517d74cf786ab89a696a215fe8037da4b8b746->enter($__internal_197a997fe779dfd539bca677b9517d74cf786ab89a696a215fe8037da4b8b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_197a997fe779dfd539bca677b9517d74cf786ab89a696a215fe8037da4b8b746->leave($__internal_197a997fe779dfd539bca677b9517d74cf786ab89a696a215fe8037da4b8b746_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f6eb8826441a90f9f06eaeb8e7e443ff69fad8644dc05f862d3428e1f9e21f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6eb8826441a90f9f06eaeb8e7e443ff69fad8644dc05f862d3428e1f9e21f25->enter($__internal_f6eb8826441a90f9f06eaeb8e7e443ff69fad8644dc05f862d3428e1f9e21f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f6eb8826441a90f9f06eaeb8e7e443ff69fad8644dc05f862d3428e1f9e21f25->leave($__internal_f6eb8826441a90f9f06eaeb8e7e443ff69fad8644dc05f862d3428e1f9e21f25_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_23bb423d2a91d892faa075f4fea875f03338233f6d585654382f83da817c9dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bb423d2a91d892faa075f4fea875f03338233f6d585654382f83da817c9dac->enter($__internal_23bb423d2a91d892faa075f4fea875f03338233f6d585654382f83da817c9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_23bb423d2a91d892faa075f4fea875f03338233f6d585654382f83da817c9dac->leave($__internal_23bb423d2a91d892faa075f4fea875f03338233f6d585654382f83da817c9dac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
";
    }
}
