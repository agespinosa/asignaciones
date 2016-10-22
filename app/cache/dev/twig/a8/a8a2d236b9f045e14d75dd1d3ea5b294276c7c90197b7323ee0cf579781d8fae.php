<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12904449d18e6a4ab5146bffb1aea8fa52d4c60fdc41836bad1068e6d5aa9a9f extends Twig_Template
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
        $__internal_e0f8a7e23066504f541c99930ad8fb16cb783b1a6eb9546a4354ad0b1d7c5193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f8a7e23066504f541c99930ad8fb16cb783b1a6eb9546a4354ad0b1d7c5193->enter($__internal_e0f8a7e23066504f541c99930ad8fb16cb783b1a6eb9546a4354ad0b1d7c5193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f8a7e23066504f541c99930ad8fb16cb783b1a6eb9546a4354ad0b1d7c5193->leave($__internal_e0f8a7e23066504f541c99930ad8fb16cb783b1a6eb9546a4354ad0b1d7c5193_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96667cd8682f47fad7a1a5b36a2a613f9e20bab85c12883378b9256dcb35967e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96667cd8682f47fad7a1a5b36a2a613f9e20bab85c12883378b9256dcb35967e->enter($__internal_96667cd8682f47fad7a1a5b36a2a613f9e20bab85c12883378b9256dcb35967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96667cd8682f47fad7a1a5b36a2a613f9e20bab85c12883378b9256dcb35967e->leave($__internal_96667cd8682f47fad7a1a5b36a2a613f9e20bab85c12883378b9256dcb35967e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2f6d10616e27f71889e6ae2fa27bf70ead0e74e7861047ae731e902642d0db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f6d10616e27f71889e6ae2fa27bf70ead0e74e7861047ae731e902642d0db6->enter($__internal_e2f6d10616e27f71889e6ae2fa27bf70ead0e74e7861047ae731e902642d0db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2f6d10616e27f71889e6ae2fa27bf70ead0e74e7861047ae731e902642d0db6->leave($__internal_e2f6d10616e27f71889e6ae2fa27bf70ead0e74e7861047ae731e902642d0db6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af0573233cf203b7785a7b5ce077e5b289677ad21b2e4ee6f904094e3d7396a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0573233cf203b7785a7b5ce077e5b289677ad21b2e4ee6f904094e3d7396a1->enter($__internal_af0573233cf203b7785a7b5ce077e5b289677ad21b2e4ee6f904094e3d7396a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af0573233cf203b7785a7b5ce077e5b289677ad21b2e4ee6f904094e3d7396a1->leave($__internal_af0573233cf203b7785a7b5ce077e5b289677ad21b2e4ee6f904094e3d7396a1_prof);

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
