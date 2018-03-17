<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_adb38c72b68e32b633a4839be20f8c724ae60bf853b9379917f60905f2c65257 extends Twig_Template
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
        $__internal_7b0e6747129d32dcb2e81c573930b2b5e3e355c799eae9781501823f76cdae62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0e6747129d32dcb2e81c573930b2b5e3e355c799eae9781501823f76cdae62->enter($__internal_7b0e6747129d32dcb2e81c573930b2b5e3e355c799eae9781501823f76cdae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_7b0e6747129d32dcb2e81c573930b2b5e3e355c799eae9781501823f76cdae62->leave($__internal_7b0e6747129d32dcb2e81c573930b2b5e3e355c799eae9781501823f76cdae62_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d3eaebe9de5e1db2a3365f0e319fd9024e8ad1bf4f844133f2bd44809e5b1342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3eaebe9de5e1db2a3365f0e319fd9024e8ad1bf4f844133f2bd44809e5b1342->enter($__internal_d3eaebe9de5e1db2a3365f0e319fd9024e8ad1bf4f844133f2bd44809e5b1342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d3eaebe9de5e1db2a3365f0e319fd9024e8ad1bf4f844133f2bd44809e5b1342->leave($__internal_d3eaebe9de5e1db2a3365f0e319fd9024e8ad1bf4f844133f2bd44809e5b1342_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
