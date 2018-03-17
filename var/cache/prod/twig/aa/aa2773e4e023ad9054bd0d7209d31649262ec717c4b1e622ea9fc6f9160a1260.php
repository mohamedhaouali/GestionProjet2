<?php

/* base.html.twig */
class __TwigTemplate_0dec4d893673b136d2d65db73ad5b9295963ac9def5c3c8f429b32db19465ad7 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
        ";
    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
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
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "

        ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  116 => 44,  110 => 41,  107 => 40,  78 => 14,  75 => 13,  70 => 7,  67 => 6,  61 => 5,  55 => 45,  52 => 44,  49 => 40,  47 => 13,  41 => 10,  36 => 9,  34 => 6,  30 => 5,  24 => 1,);
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
