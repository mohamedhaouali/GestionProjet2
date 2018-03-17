<?php

/* UserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_6c88c98c9c230ca891ba94830d71b8ae366c637bf05541153672af57ca492c26 extends Twig_Template
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
        $__internal_0b7d6856ae8e66ef4eb21e3eb584f2efbc65c6a4992d58bbc5ec0f6bad08aa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7d6856ae8e66ef4eb21e3eb584f2efbc65c6a4992d58bbc5ec0f6bad08aa96->enter($__internal_0b7d6856ae8e66ef4eb21e3eb584f2efbc65c6a4992d58bbc5ec0f6bad08aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0b7d6856ae8e66ef4eb21e3eb584f2efbc65c6a4992d58bbc5ec0f6bad08aa96->leave($__internal_0b7d6856ae8e66ef4eb21e3eb584f2efbc65c6a4992d58bbc5ec0f6bad08aa96_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
";
    }
}
