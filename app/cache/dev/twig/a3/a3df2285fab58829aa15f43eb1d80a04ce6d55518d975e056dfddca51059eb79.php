<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2342f10b1b0275c91c028abcc6e71bfd7e6f353970f1511504976d479954eb6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eb5ad025e9cfd510897612d1ec5c67c56337faa338c9a76768311567f294b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb5ad025e9cfd510897612d1ec5c67c56337faa338c9a76768311567f294b22->enter($__internal_8eb5ad025e9cfd510897612d1ec5c67c56337faa338c9a76768311567f294b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb5ad025e9cfd510897612d1ec5c67c56337faa338c9a76768311567f294b22->leave($__internal_8eb5ad025e9cfd510897612d1ec5c67c56337faa338c9a76768311567f294b22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9a8563b6186add38b159cc7c6eb5beab956cc09f25f4947450327a3a289c31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a8563b6186add38b159cc7c6eb5beab956cc09f25f4947450327a3a289c31e->enter($__internal_e9a8563b6186add38b159cc7c6eb5beab956cc09f25f4947450327a3a289c31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e9a8563b6186add38b159cc7c6eb5beab956cc09f25f4947450327a3a289c31e->leave($__internal_e9a8563b6186add38b159cc7c6eb5beab956cc09f25f4947450327a3a289c31e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63c13619b08ef3bdd34c5cc913e65135b566a0847b0477a4d8d940fb6817c9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c13619b08ef3bdd34c5cc913e65135b566a0847b0477a4d8d940fb6817c9e4->enter($__internal_63c13619b08ef3bdd34c5cc913e65135b566a0847b0477a4d8d940fb6817c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63c13619b08ef3bdd34c5cc913e65135b566a0847b0477a4d8d940fb6817c9e4->leave($__internal_63c13619b08ef3bdd34c5cc913e65135b566a0847b0477a4d8d940fb6817c9e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb0c8ce49dfe5b8fab2208403fc79c594eb2cb6c51317cc10c7c1c7f79e64f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb0c8ce49dfe5b8fab2208403fc79c594eb2cb6c51317cc10c7c1c7f79e64f2->enter($__internal_feb0c8ce49dfe5b8fab2208403fc79c594eb2cb6c51317cc10c7c1c7f79e64f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_feb0c8ce49dfe5b8fab2208403fc79c594eb2cb6c51317cc10c7c1c7f79e64f2->leave($__internal_feb0c8ce49dfe5b8fab2208403fc79c594eb2cb6c51317cc10c7c1c7f79e64f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
