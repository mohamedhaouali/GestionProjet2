<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_f8690dca2403b4c76a47c9a963689ec59af56f505e1d4c769cdc3f3b4021a098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40b804a614776557756ce755c0fc7fa46259837ad6af8eac140f8bcce228508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40b804a614776557756ce755c0fc7fa46259837ad6af8eac140f8bcce228508->enter($__internal_d40b804a614776557756ce755c0fc7fa46259837ad6af8eac140f8bcce228508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_d40b804a614776557756ce755c0fc7fa46259837ad6af8eac140f8bcce228508->leave($__internal_d40b804a614776557756ce755c0fc7fa46259837ad6af8eac140f8bcce228508_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_2325549cacb5ba7f123b5fd5840369697469ba74e622bedae16815613a3f7879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2325549cacb5ba7f123b5fd5840369697469ba74e622bedae16815613a3f7879->enter($__internal_2325549cacb5ba7f123b5fd5840369697469ba74e622bedae16815613a3f7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2325549cacb5ba7f123b5fd5840369697469ba74e622bedae16815613a3f7879->leave($__internal_2325549cacb5ba7f123b5fd5840369697469ba74e622bedae16815613a3f7879_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
";
    }
}
