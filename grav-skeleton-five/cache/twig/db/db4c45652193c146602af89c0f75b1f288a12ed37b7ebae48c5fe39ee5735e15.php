<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* error.html.twig */
class __TwigTemplate_2221a86c2745d3c4a731b069643ad959a80027753c57596f57a21f096bce48c7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "  <section class=\"moduler wrapper_404\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"text-center\">
            <h1 class=\"wow fadeInUp animated cd-headline slide\" data-wow-delay=\".4s\" >";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
            <h2 class=\"wow fadeInUp animated\" data-wow-delay=\".6s\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.ERROR"), "html", null, true);
        echo "</h2>
            <p class=\"wow fadeInUp animated\" data-wow-delay=\".9s\">";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
            <a href=\"";
        // line 12
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\" class=\"btn btn-default btn-home wow fadeInUp animated\" data-wow-delay=\"1.1s\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.GO_HOME"), "html", null, true);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
  </section
  ";
        // line 18
        $this->loadTemplate("partials/cta.html.twig", "error.html.twig", 18)->display($context);
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
  <section class=\"moduler wrapper_404\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"text-center\">
            <h1 class=\"wow fadeInUp animated cd-headline slide\" data-wow-delay=\".4s\" >{{ page.header.http_response_code }}</h1>
            <h2 class=\"wow fadeInUp animated\" data-wow-delay=\".6s\">{{ 'THEME.SITE.ERROR'|t }}</h2>
            <p class=\"wow fadeInUp animated\" data-wow-delay=\".9s\">{{ page.content|raw }}</p>
            <a href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"btn btn-default btn-home wow fadeInUp animated\" data-wow-delay=\"1.1s\">{{ 'THEME.SITE.GO_HOME'|t }}</a>
          </div>
        </div>
      </div>
    </div>
  </section
  {% include 'partials/cta.html.twig' %}
{% endblock %}
", "error.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\error.html.twig");
    }
}
