<?php

/* base.html.twig */
class __TwigTemplate_3dff40c24bb41e3bfa6a32edb424818ac6db75460f87418da4a82899fd05cb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eeb2c205b42c7435a7891f1e19c7a6a473eb89aee256367b077d69de165fccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eeb2c205b42c7435a7891f1e19c7a6a473eb89aee256367b077d69de165fccc->enter($__internal_5eeb2c205b42c7435a7891f1e19c7a6a473eb89aee256367b077d69de165fccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_5eeb2c205b42c7435a7891f1e19c7a6a473eb89aee256367b077d69de165fccc->leave($__internal_5eeb2c205b42c7435a7891f1e19c7a6a473eb89aee256367b077d69de165fccc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9587761f2ec8d0d3b09609d6b8e6d23b6cea7f24d9c07c5e2a78b13b3e7edbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9587761f2ec8d0d3b09609d6b8e6d23b6cea7f24d9c07c5e2a78b13b3e7edbc7->enter($__internal_9587761f2ec8d0d3b09609d6b8e6d23b6cea7f24d9c07c5e2a78b13b3e7edbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9587761f2ec8d0d3b09609d6b8e6d23b6cea7f24d9c07c5e2a78b13b3e7edbc7->leave($__internal_9587761f2ec8d0d3b09609d6b8e6d23b6cea7f24d9c07c5e2a78b13b3e7edbc7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e48c9b7aa3a6a92c3066dc3c9c4d44ad30bb98c64717d9bd16a6a066754eecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e48c9b7aa3a6a92c3066dc3c9c4d44ad30bb98c64717d9bd16a6a066754eecf->enter($__internal_8e48c9b7aa3a6a92c3066dc3c9c4d44ad30bb98c64717d9bd16a6a066754eecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_8e48c9b7aa3a6a92c3066dc3c9c4d44ad30bb98c64717d9bd16a6a066754eecf->leave($__internal_8e48c9b7aa3a6a92c3066dc3c9c4d44ad30bb98c64717d9bd16a6a066754eecf_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0e839bf370d160f617cfc93ad794bb6445734201a335440b343f73d2fca93782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e839bf370d160f617cfc93ad794bb6445734201a335440b343f73d2fca93782->enter($__internal_0e839bf370d160f617cfc93ad794bb6445734201a335440b343f73d2fca93782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 14
        echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Project name</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\">Dashboard</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Profile</a></li>
                            <li><a href=\"#\">Help</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-right\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                        </form>
                    </div>
                </div>
            </nav>   

        ";
        
        $__internal_0e839bf370d160f617cfc93ad794bb6445734201a335440b343f73d2fca93782->leave($__internal_0e839bf370d160f617cfc93ad794bb6445734201a335440b343f73d2fca93782_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_d76ee9ed2435ef04fe9f439d9bd7e2590ee8b104c2f93b9a73eed628840377a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76ee9ed2435ef04fe9f439d9bd7e2590ee8b104c2f93b9a73eed628840377a8->enter($__internal_d76ee9ed2435ef04fe9f439d9bd7e2590ee8b104c2f93b9a73eed628840377a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "

        ";
        
        $__internal_d76ee9ed2435ef04fe9f439d9bd7e2590ee8b104c2f93b9a73eed628840377a8->leave($__internal_d76ee9ed2435ef04fe9f439d9bd7e2590ee8b104c2f93b9a73eed628840377a8_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68f72326fdaf9506be56be28aec78f8c776554ee43b90ac462b6f71a5a5938d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f72326fdaf9506be56be28aec78f8c776554ee43b90ac462b6f71a5a5938d0->enter($__internal_68f72326fdaf9506be56be28aec78f8c776554ee43b90ac462b6f71a5a5938d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_68f72326fdaf9506be56be28aec78f8c776554ee43b90ac462b6f71a5a5938d0->leave($__internal_68f72326fdaf9506be56be28aec78f8c776554ee43b90ac462b6f71a5a5938d0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  137 => 41,  131 => 40,  99 => 14,  93 => 13,  85 => 7,  79 => 6,  67 => 5,  58 => 45,  55 => 44,  52 => 40,  50 => 13,  44 => 10,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\"  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\" />
    </head>
    <body>
        {% block nav %}
            <nav class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Project name</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\">Dashboard</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Profile</a></li>
                            <li><a href=\"#\">Help</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-right\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                        </form>
                    </div>
                </div>
            </nav>   

        {% endblock %}
        {% block body %}


        {% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>
";
    }
}
