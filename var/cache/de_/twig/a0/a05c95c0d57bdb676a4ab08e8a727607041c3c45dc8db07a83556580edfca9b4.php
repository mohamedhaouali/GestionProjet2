<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_1d72ca7055e66efe12cf6c7d03d302b6de197eed4ee2b018e3d866c2d694f318 extends Twig_Template
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
        $__internal_e81be07fa5c38cdadaa351fb788fc9326de15ec9e54e36a1dbbb3d25526c10c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81be07fa5c38cdadaa351fb788fc9326de15ec9e54e36a1dbbb3d25526c10c1->enter($__internal_e81be07fa5c38cdadaa351fb788fc9326de15ec9e54e36a1dbbb3d25526c10c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_e81be07fa5c38cdadaa351fb788fc9326de15ec9e54e36a1dbbb3d25526c10c1->leave($__internal_e81be07fa5c38cdadaa351fb788fc9326de15ec9e54e36a1dbbb3d25526c10c1_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_233c35013adc375736d943cc54d8500829069ed940e65da6b905a938f9f109fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c35013adc375736d943cc54d8500829069ed940e65da6b905a938f9f109fd->enter($__internal_233c35013adc375736d943cc54d8500829069ed940e65da6b905a938f9f109fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_233c35013adc375736d943cc54d8500829069ed940e65da6b905a938f9f109fd->leave($__internal_233c35013adc375736d943cc54d8500829069ed940e65da6b905a938f9f109fd_prof);

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
