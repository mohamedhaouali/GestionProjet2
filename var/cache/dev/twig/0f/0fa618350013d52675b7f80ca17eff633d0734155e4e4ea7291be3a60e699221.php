<?php

/* base.html.twig */
class __TwigTemplate_95545701347cffcb0116332d099d3a4d79b29d76fd8f6b260c902ae644f63711 extends Twig_Template
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
        $__internal_672ea09cea68ca53c1f678188a3fc0a0d4c04725ae1ef93f6fa6016811f33a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672ea09cea68ca53c1f678188a3fc0a0d4c04725ae1ef93f6fa6016811f33a3f->enter($__internal_672ea09cea68ca53c1f678188a3fc0a0d4c04725ae1ef93f6fa6016811f33a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_672ea09cea68ca53c1f678188a3fc0a0d4c04725ae1ef93f6fa6016811f33a3f->leave($__internal_672ea09cea68ca53c1f678188a3fc0a0d4c04725ae1ef93f6fa6016811f33a3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1cbc879f44c16fcf2aa91a10b6f3d667296d8b85b5129d39b767c06e25057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1cbc879f44c16fcf2aa91a10b6f3d667296d8b85b5129d39b767c06e25057b->enter($__internal_8b1cbc879f44c16fcf2aa91a10b6f3d667296d8b85b5129d39b767c06e25057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b1cbc879f44c16fcf2aa91a10b6f3d667296d8b85b5129d39b767c06e25057b->leave($__internal_8b1cbc879f44c16fcf2aa91a10b6f3d667296d8b85b5129d39b767c06e25057b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a467d83756d98c54c6ad6068d66d8df66944e90194c07cf2b12f6d9c9839f577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a467d83756d98c54c6ad6068d66d8df66944e90194c07cf2b12f6d9c9839f577->enter($__internal_a467d83756d98c54c6ad6068d66d8df66944e90194c07cf2b12f6d9c9839f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        
        $__internal_a467d83756d98c54c6ad6068d66d8df66944e90194c07cf2b12f6d9c9839f577->leave($__internal_a467d83756d98c54c6ad6068d66d8df66944e90194c07cf2b12f6d9c9839f577_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_777ab9dcbbc3809344509a96b1c88695427c4449d46a9cadc3ded02452416f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777ab9dcbbc3809344509a96b1c88695427c4449d46a9cadc3ded02452416f5b->enter($__internal_777ab9dcbbc3809344509a96b1c88695427c4449d46a9cadc3ded02452416f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_777ab9dcbbc3809344509a96b1c88695427c4449d46a9cadc3ded02452416f5b->leave($__internal_777ab9dcbbc3809344509a96b1c88695427c4449d46a9cadc3ded02452416f5b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_0648f4612e28c3c985ff930b0e890565a89f1bd3ae015579c811a78720d1d764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0648f4612e28c3c985ff930b0e890565a89f1bd3ae015579c811a78720d1d764->enter($__internal_0648f4612e28c3c985ff930b0e890565a89f1bd3ae015579c811a78720d1d764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "

        ";
        
        $__internal_0648f4612e28c3c985ff930b0e890565a89f1bd3ae015579c811a78720d1d764->leave($__internal_0648f4612e28c3c985ff930b0e890565a89f1bd3ae015579c811a78720d1d764_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8264b74c0baf2f2f87eea3b04e04d96bae8a3e27727bb4b70679a19555189d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8264b74c0baf2f2f87eea3b04e04d96bae8a3e27727bb4b70679a19555189d82->enter($__internal_8264b74c0baf2f2f87eea3b04e04d96bae8a3e27727bb4b70679a19555189d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8264b74c0baf2f2f87eea3b04e04d96bae8a3e27727bb4b70679a19555189d82->leave($__internal_8264b74c0baf2f2f87eea3b04e04d96bae8a3e27727bb4b70679a19555189d82_prof);

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
