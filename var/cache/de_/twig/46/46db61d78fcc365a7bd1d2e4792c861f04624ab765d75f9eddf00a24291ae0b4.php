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
        $__internal_1f01c873e8ca5990ac9a57333e43a34acafdce23884d0602cc32ac1f076c0d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f01c873e8ca5990ac9a57333e43a34acafdce23884d0602cc32ac1f076c0d9b->enter($__internal_1f01c873e8ca5990ac9a57333e43a34acafdce23884d0602cc32ac1f076c0d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1f01c873e8ca5990ac9a57333e43a34acafdce23884d0602cc32ac1f076c0d9b->leave($__internal_1f01c873e8ca5990ac9a57333e43a34acafdce23884d0602cc32ac1f076c0d9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12be35f823524af8a86fab8580b9b9cc188630b41926ec6f221614f05d82f288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12be35f823524af8a86fab8580b9b9cc188630b41926ec6f221614f05d82f288->enter($__internal_12be35f823524af8a86fab8580b9b9cc188630b41926ec6f221614f05d82f288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12be35f823524af8a86fab8580b9b9cc188630b41926ec6f221614f05d82f288->leave($__internal_12be35f823524af8a86fab8580b9b9cc188630b41926ec6f221614f05d82f288_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a3acbe3f045fab07db9d9b19f4c6d7ddd0df07c7adebad2318eda201b930db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3acbe3f045fab07db9d9b19f4c6d7ddd0df07c7adebad2318eda201b930db3->enter($__internal_2a3acbe3f045fab07db9d9b19f4c6d7ddd0df07c7adebad2318eda201b930db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_2a3acbe3f045fab07db9d9b19f4c6d7ddd0df07c7adebad2318eda201b930db3->leave($__internal_2a3acbe3f045fab07db9d9b19f4c6d7ddd0df07c7adebad2318eda201b930db3_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_203ab88dcff5f7d85e0bddb2da5c8639e4a004a665de8ce05b89a2ad1bdea544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203ab88dcff5f7d85e0bddb2da5c8639e4a004a665de8ce05b89a2ad1bdea544->enter($__internal_203ab88dcff5f7d85e0bddb2da5c8639e4a004a665de8ce05b89a2ad1bdea544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_203ab88dcff5f7d85e0bddb2da5c8639e4a004a665de8ce05b89a2ad1bdea544->leave($__internal_203ab88dcff5f7d85e0bddb2da5c8639e4a004a665de8ce05b89a2ad1bdea544_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d063b513e9b3f39ab292128aa2bd1b586c4feec3b4698cf297017fe65740b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d063b513e9b3f39ab292128aa2bd1b586c4feec3b4698cf297017fe65740b70->enter($__internal_4d063b513e9b3f39ab292128aa2bd1b586c4feec3b4698cf297017fe65740b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "

        ";
        
        $__internal_4d063b513e9b3f39ab292128aa2bd1b586c4feec3b4698cf297017fe65740b70->leave($__internal_4d063b513e9b3f39ab292128aa2bd1b586c4feec3b4698cf297017fe65740b70_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fae4a2c315f8c021df9c6fefb9a3d962ed11402d1789f14863f45123961cbb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae4a2c315f8c021df9c6fefb9a3d962ed11402d1789f14863f45123961cbb18->enter($__internal_fae4a2c315f8c021df9c6fefb9a3d962ed11402d1789f14863f45123961cbb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fae4a2c315f8c021df9c6fefb9a3d962ed11402d1789f14863f45123961cbb18->leave($__internal_fae4a2c315f8c021df9c6fefb9a3d962ed11402d1789f14863f45123961cbb18_prof);

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
