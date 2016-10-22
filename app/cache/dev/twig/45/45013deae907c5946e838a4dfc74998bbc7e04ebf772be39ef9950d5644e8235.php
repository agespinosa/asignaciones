<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1e50cd99526e135cf84c7e2e0274c327cc632576beb1d8abd73999b83a72887c extends Twig_Template
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
        $__internal_56ed4eb1d8110346ceefbfb84748ac4e3d61773f08f4ec3f9821fda0e0963eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ed4eb1d8110346ceefbfb84748ac4e3d61773f08f4ec3f9821fda0e0963eb3->enter($__internal_56ed4eb1d8110346ceefbfb84748ac4e3d61773f08f4ec3f9821fda0e0963eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ed4eb1d8110346ceefbfb84748ac4e3d61773f08f4ec3f9821fda0e0963eb3->leave($__internal_56ed4eb1d8110346ceefbfb84748ac4e3d61773f08f4ec3f9821fda0e0963eb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8286a06e0bbb4b7d795e9ac1af3fc4442383b8c03ec0c115b9f61f137e03f50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8286a06e0bbb4b7d795e9ac1af3fc4442383b8c03ec0c115b9f61f137e03f50f->enter($__internal_8286a06e0bbb4b7d795e9ac1af3fc4442383b8c03ec0c115b9f61f137e03f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8286a06e0bbb4b7d795e9ac1af3fc4442383b8c03ec0c115b9f61f137e03f50f->leave($__internal_8286a06e0bbb4b7d795e9ac1af3fc4442383b8c03ec0c115b9f61f137e03f50f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce7e690b092f4581b65dca7318f85c714d942dfc831ca3414917f86aafa2526e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e690b092f4581b65dca7318f85c714d942dfc831ca3414917f86aafa2526e->enter($__internal_ce7e690b092f4581b65dca7318f85c714d942dfc831ca3414917f86aafa2526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce7e690b092f4581b65dca7318f85c714d942dfc831ca3414917f86aafa2526e->leave($__internal_ce7e690b092f4581b65dca7318f85c714d942dfc831ca3414917f86aafa2526e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a66e6e3ba86181b2d13ce05fbf4fec531caab5016e909d93cc8604a038bd7915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66e6e3ba86181b2d13ce05fbf4fec531caab5016e909d93cc8604a038bd7915->enter($__internal_a66e6e3ba86181b2d13ce05fbf4fec531caab5016e909d93cc8604a038bd7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a66e6e3ba86181b2d13ce05fbf4fec531caab5016e909d93cc8604a038bd7915->leave($__internal_a66e6e3ba86181b2d13ce05fbf4fec531caab5016e909d93cc8604a038bd7915_prof);

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
