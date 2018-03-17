<?php

/* ::base.html.twig */
class __TwigTemplate_100ba1a5d2e72ab780af56e0b6beb4c5b95f5703316815bba71308af3f5f51ba extends Twig_Template
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
        $__internal_be27aed0dd62d18932dc93e767c12a087023f1949c8b95c0995be8409ff9eee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be27aed0dd62d18932dc93e767c12a087023f1949c8b95c0995be8409ff9eee4->enter($__internal_be27aed0dd62d18932dc93e767c12a087023f1949c8b95c0995be8409ff9eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_be27aed0dd62d18932dc93e767c12a087023f1949c8b95c0995be8409ff9eee4->leave($__internal_be27aed0dd62d18932dc93e767c12a087023f1949c8b95c0995be8409ff9eee4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e312d1aa39ed1b9f485558e17bb6d73d25ae6cea99b0d4f0c5f11f51405fb26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e312d1aa39ed1b9f485558e17bb6d73d25ae6cea99b0d4f0c5f11f51405fb26d->enter($__internal_e312d1aa39ed1b9f485558e17bb6d73d25ae6cea99b0d4f0c5f11f51405fb26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e312d1aa39ed1b9f485558e17bb6d73d25ae6cea99b0d4f0c5f11f51405fb26d->leave($__internal_e312d1aa39ed1b9f485558e17bb6d73d25ae6cea99b0d4f0c5f11f51405fb26d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78f29cd0c299f5ddf9c5cbd4f42bbeb102903bb8c2b4c552462f3745887712ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f29cd0c299f5ddf9c5cbd4f42bbeb102903bb8c2b4c552462f3745887712ff->enter($__internal_78f29cd0c299f5ddf9c5cbd4f42bbeb102903bb8c2b4c552462f3745887712ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_78f29cd0c299f5ddf9c5cbd4f42bbeb102903bb8c2b4c552462f3745887712ff->leave($__internal_78f29cd0c299f5ddf9c5cbd4f42bbeb102903bb8c2b4c552462f3745887712ff_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9f7193d84eb76af200f2f5e5ec310232e7c6600754ef39c5fad482386afe11af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7193d84eb76af200f2f5e5ec310232e7c6600754ef39c5fad482386afe11af->enter($__internal_9f7193d84eb76af200f2f5e5ec310232e7c6600754ef39c5fad482386afe11af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_9f7193d84eb76af200f2f5e5ec310232e7c6600754ef39c5fad482386afe11af->leave($__internal_9f7193d84eb76af200f2f5e5ec310232e7c6600754ef39c5fad482386afe11af_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf57c92cc54a7a1752aaba85c135c9cf303d7276f6a7be0d4c9352fa88b7767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf57c92cc54a7a1752aaba85c135c9cf303d7276f6a7be0d4c9352fa88b7767->enter($__internal_bbf57c92cc54a7a1752aaba85c135c9cf303d7276f6a7be0d4c9352fa88b7767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "

        ";
        
        $__internal_bbf57c92cc54a7a1752aaba85c135c9cf303d7276f6a7be0d4c9352fa88b7767->leave($__internal_bbf57c92cc54a7a1752aaba85c135c9cf303d7276f6a7be0d4c9352fa88b7767_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ae88a76ce3b85da0a373023b3b073bf1a7b2f9dba57480bb068c25e744e6880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae88a76ce3b85da0a373023b3b073bf1a7b2f9dba57480bb068c25e744e6880->enter($__internal_3ae88a76ce3b85da0a373023b3b073bf1a7b2f9dba57480bb068c25e744e6880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ae88a76ce3b85da0a373023b3b073bf1a7b2f9dba57480bb068c25e744e6880->leave($__internal_3ae88a76ce3b85da0a373023b3b073bf1a7b2f9dba57480bb068c25e744e6880_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
