<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_54024e4e232bc047fa295359694e7a73c4db3d685b004b36a5fc8fe2aeacc7c1 extends Twig_Template
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
        $__internal_593818391c60bcc35e95e80b6605697b39f507596cbcb343f2178166c1b75dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593818391c60bcc35e95e80b6605697b39f507596cbcb343f2178166c1b75dd5->enter($__internal_593818391c60bcc35e95e80b6605697b39f507596cbcb343f2178166c1b75dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_593818391c60bcc35e95e80b6605697b39f507596cbcb343f2178166c1b75dd5->leave($__internal_593818391c60bcc35e95e80b6605697b39f507596cbcb343f2178166c1b75dd5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
