<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_7ae9f9eef911f70974a95a2279fdf239cbd7dee2c565b0cd3d540f772c67caa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae948f0459a9704ccbe117fd8a77369426a9ed4359a061d1e2fa697394f8fea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae948f0459a9704ccbe117fd8a77369426a9ed4359a061d1e2fa697394f8fea3->enter($__internal_ae948f0459a9704ccbe117fd8a77369426a9ed4359a061d1e2fa697394f8fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_ae948f0459a9704ccbe117fd8a77369426a9ed4359a061d1e2fa697394f8fea3->leave($__internal_ae948f0459a9704ccbe117fd8a77369426a9ed4359a061d1e2fa697394f8fea3_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d41b2b354b5eaaf8358fd61cb27257443f017d02b6284050faba8344f16e42fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41b2b354b5eaaf8358fd61cb27257443f017d02b6284050faba8344f16e42fb->enter($__internal_d41b2b354b5eaaf8358fd61cb27257443f017d02b6284050faba8344f16e42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d41b2b354b5eaaf8358fd61cb27257443f017d02b6284050faba8344f16e42fb->leave($__internal_d41b2b354b5eaaf8358fd61cb27257443f017d02b6284050faba8344f16e42fb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
