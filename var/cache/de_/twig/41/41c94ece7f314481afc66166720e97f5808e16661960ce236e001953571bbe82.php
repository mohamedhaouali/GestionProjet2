<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_998e7c61ef3013dff982a579e2b2b211b82d9517bbb923ae7dfbacff589689f6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a44dc371fc0ef32e781b05be209c2781b3bf4cc011bd16395689ef821bdd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a44dc371fc0ef32e781b05be209c2781b3bf4cc011bd16395689ef821bdd62->enter($__internal_22a44dc371fc0ef32e781b05be209c2781b3bf4cc011bd16395689ef821bdd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a44dc371fc0ef32e781b05be209c2781b3bf4cc011bd16395689ef821bdd62->leave($__internal_22a44dc371fc0ef32e781b05be209c2781b3bf4cc011bd16395689ef821bdd62_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_833ea2efe5068814484226974b855026bd6c6a1ede8ebe4d9113c704d245b1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833ea2efe5068814484226974b855026bd6c6a1ede8ebe4d9113c704d245b1b0->enter($__internal_833ea2efe5068814484226974b855026bd6c6a1ede8ebe4d9113c704d245b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_833ea2efe5068814484226974b855026bd6c6a1ede8ebe4d9113c704d245b1b0->leave($__internal_833ea2efe5068814484226974b855026bd6c6a1ede8ebe4d9113c704d245b1b0_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_785d183f20434847c4121b0b57a5a77c464e43c07dc392ed33e23baabe9585ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d183f20434847c4121b0b57a5a77c464e43c07dc392ed33e23baabe9585ff->enter($__internal_785d183f20434847c4121b0b57a5a77c464e43c07dc392ed33e23baabe9585ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_785d183f20434847c4121b0b57a5a77c464e43c07dc392ed33e23baabe9585ff->leave($__internal_785d183f20434847c4121b0b57a5a77c464e43c07dc392ed33e23baabe9585ff_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_58f6b486ad6d3e7f207fff1e378d42c9a58e7b1bff5002f54a66b6a72016a93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f6b486ad6d3e7f207fff1e378d42c9a58e7b1bff5002f54a66b6a72016a93f->enter($__internal_58f6b486ad6d3e7f207fff1e378d42c9a58e7b1bff5002f54a66b6a72016a93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_58f6b486ad6d3e7f207fff1e378d42c9a58e7b1bff5002f54a66b6a72016a93f->leave($__internal_58f6b486ad6d3e7f207fff1e378d42c9a58e7b1bff5002f54a66b6a72016a93f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_8d386f645301860c706c320daef6700b959304a44c9c7cebb5b589be68d80d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d386f645301860c706c320daef6700b959304a44c9c7cebb5b589be68d80d0d->enter($__internal_8d386f645301860c706c320daef6700b959304a44c9c7cebb5b589be68d80d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_8d386f645301860c706c320daef6700b959304a44c9c7cebb5b589be68d80d0d->leave($__internal_8d386f645301860c706c320daef6700b959304a44c9c7cebb5b589be68d80d0d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcc6285ede5f2413a262dfa0f413adc90a5512971ce21f8ba5f6fea97cdad6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc6285ede5f2413a262dfa0f413adc90a5512971ce21f8ba5f6fea97cdad6e2->enter($__internal_fcc6285ede5f2413a262dfa0f413adc90a5512971ce21f8ba5f6fea97cdad6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fcc6285ede5f2413a262dfa0f413adc90a5512971ce21f8ba5f6fea97cdad6e2->leave($__internal_fcc6285ede5f2413a262dfa0f413adc90a5512971ce21f8ba5f6fea97cdad6e2_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_20e949abeb75e7f266d9cae285645dbfa8bca7e2b6a4444ff34b7e70582d29f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e949abeb75e7f266d9cae285645dbfa8bca7e2b6a4444ff34b7e70582d29f1->enter($__internal_20e949abeb75e7f266d9cae285645dbfa8bca7e2b6a4444ff34b7e70582d29f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_20e949abeb75e7f266d9cae285645dbfa8bca7e2b6a4444ff34b7e70582d29f1->leave($__internal_20e949abeb75e7f266d9cae285645dbfa8bca7e2b6a4444ff34b7e70582d29f1_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_22e8d30ee31611969ba16c237969d24522ede785ff11337105d34e34810b2166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e8d30ee31611969ba16c237969d24522ede785ff11337105d34e34810b2166->enter($__internal_22e8d30ee31611969ba16c237969d24522ede785ff11337105d34e34810b2166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_22e8d30ee31611969ba16c237969d24522ede785ff11337105d34e34810b2166->leave($__internal_22e8d30ee31611969ba16c237969d24522ede785ff11337105d34e34810b2166_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
