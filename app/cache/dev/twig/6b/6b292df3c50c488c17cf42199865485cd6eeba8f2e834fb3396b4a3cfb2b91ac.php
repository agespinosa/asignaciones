<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a1d9009b28a8454686bde97fddf5c520c899a8f2556ca434680454c59932a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db3e1d8a2418300bc94475c102d83e67231301d2218ff598b0b8b931209da67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db3e1d8a2418300bc94475c102d83e67231301d2218ff598b0b8b931209da67->enter($__internal_6db3e1d8a2418300bc94475c102d83e67231301d2218ff598b0b8b931209da67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db3e1d8a2418300bc94475c102d83e67231301d2218ff598b0b8b931209da67->leave($__internal_6db3e1d8a2418300bc94475c102d83e67231301d2218ff598b0b8b931209da67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f617d948d6d65992da53d3e1482160fc3ea043aadd31b07e9a72a819d2ec490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f617d948d6d65992da53d3e1482160fc3ea043aadd31b07e9a72a819d2ec490->enter($__internal_5f617d948d6d65992da53d3e1482160fc3ea043aadd31b07e9a72a819d2ec490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f617d948d6d65992da53d3e1482160fc3ea043aadd31b07e9a72a819d2ec490->leave($__internal_5f617d948d6d65992da53d3e1482160fc3ea043aadd31b07e9a72a819d2ec490_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1814340a6c925ec6fd428ffc215c3ad81bbad005174a093e5a9bfcb22f009e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1814340a6c925ec6fd428ffc215c3ad81bbad005174a093e5a9bfcb22f009e2->enter($__internal_c1814340a6c925ec6fd428ffc215c3ad81bbad005174a093e5a9bfcb22f009e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c1814340a6c925ec6fd428ffc215c3ad81bbad005174a093e5a9bfcb22f009e2->leave($__internal_c1814340a6c925ec6fd428ffc215c3ad81bbad005174a093e5a9bfcb22f009e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c6fd154bf72f2eb26dcb71d9b6ef05f3d4f5cd98d6a5006ac22bb7c4011de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c6fd154bf72f2eb26dcb71d9b6ef05f3d4f5cd98d6a5006ac22bb7c4011de8->enter($__internal_25c6fd154bf72f2eb26dcb71d9b6ef05f3d4f5cd98d6a5006ac22bb7c4011de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_25c6fd154bf72f2eb26dcb71d9b6ef05f3d4f5cd98d6a5006ac22bb7c4011de8->leave($__internal_25c6fd154bf72f2eb26dcb71d9b6ef05f3d4f5cd98d6a5006ac22bb7c4011de8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
