<?php

/* base.html.twig */
class __TwigTemplate_e384e00637efc87680aa7465fe7a30696b7a82749cc312ae035d440a1e1aa700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d84bbca3b89995c2f00cb87ac527663440720169c28d5d9946e56e1d0e0b29a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84bbca3b89995c2f00cb87ac527663440720169c28d5d9946e56e1d0e0b29a6->enter($__internal_d84bbca3b89995c2f00cb87ac527663440720169c28d5d9946e56e1d0e0b29a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d84bbca3b89995c2f00cb87ac527663440720169c28d5d9946e56e1d0e0b29a6->leave($__internal_d84bbca3b89995c2f00cb87ac527663440720169c28d5d9946e56e1d0e0b29a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44f4e302bc905820f424933acf344bb1613bbd0d64c37dcfea5ede58389a0de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f4e302bc905820f424933acf344bb1613bbd0d64c37dcfea5ede58389a0de8->enter($__internal_44f4e302bc905820f424933acf344bb1613bbd0d64c37dcfea5ede58389a0de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_44f4e302bc905820f424933acf344bb1613bbd0d64c37dcfea5ede58389a0de8->leave($__internal_44f4e302bc905820f424933acf344bb1613bbd0d64c37dcfea5ede58389a0de8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12618a4c6aa108d172355b85c3e94a0eef393be48f27045c7525ad8315c96a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12618a4c6aa108d172355b85c3e94a0eef393be48f27045c7525ad8315c96a1->enter($__internal_d12618a4c6aa108d172355b85c3e94a0eef393be48f27045c7525ad8315c96a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d12618a4c6aa108d172355b85c3e94a0eef393be48f27045c7525ad8315c96a1->leave($__internal_d12618a4c6aa108d172355b85c3e94a0eef393be48f27045c7525ad8315c96a1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c8e90d08647add19920e47e03838ee83f1483a145ac28bfcd7c4e4019d7280d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8e90d08647add19920e47e03838ee83f1483a145ac28bfcd7c4e4019d7280d->enter($__internal_3c8e90d08647add19920e47e03838ee83f1483a145ac28bfcd7c4e4019d7280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c8e90d08647add19920e47e03838ee83f1483a145ac28bfcd7c4e4019d7280d->leave($__internal_3c8e90d08647add19920e47e03838ee83f1483a145ac28bfcd7c4e4019d7280d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51cdf7676eee90e86df5f5eb75a793e2bf7e4616c3e6b6eb2fa8d4defaf8b86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cdf7676eee90e86df5f5eb75a793e2bf7e4616c3e6b6eb2fa8d4defaf8b86d->enter($__internal_51cdf7676eee90e86df5f5eb75a793e2bf7e4616c3e6b6eb2fa8d4defaf8b86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51cdf7676eee90e86df5f5eb75a793e2bf7e4616c3e6b6eb2fa8d4defaf8b86d->leave($__internal_51cdf7676eee90e86df5f5eb75a793e2bf7e4616c3e6b6eb2fa8d4defaf8b86d_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
