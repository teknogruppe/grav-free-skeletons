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

/* partials/cta.html.twig */
class __TwigTemplate_2586af9e5158b7d0a89b6e5f8f94a8c202098bd00a24af4142c19f19e4f78b95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!--
==================================================
Call To Action Section Start
================================================== -->
";
        // line 5
        $context["title"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "title", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "title", [])) : ($this->getAttribute(($context["page"] ?? null), "title", [])));
        // line 6
        $context["content"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "content", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "content", [])) : ($this->getAttribute(($context["page"] ?? null), "content", [])));
        // line 7
        $context["button_url"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "button_url", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "button_url", [])) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", [])));
        // line 8
        $context["button_label"] = (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "button_label", [])) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cta", []), "button_label", [])) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", [])));
        // line 9
        echo "
<section id=\"call-to-action\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block\">
          <h2 class=\"title wow fadeInDown\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
            ";
        // line 16
        echo strip_tags(($context["content"] ?? null), "<b><strong><br><i><em><blockquote>");
        echo "
          </p>
          <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["button_url"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-default btn-contact wow fadeInDown\" data-wow-delay=\".7s\" data-wow-duration=\"500ms\">";
        echo twig_escape_filter($this->env, ($context["button_label"] ?? null), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  56 => 16,  52 => 15,  44 => 9,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!--
==================================================
Call To Action Section Start
================================================== -->
{% set title = theme_config.cta.title ? theme_config.cta.title : page.title %}
{% set content = theme_config.cta.content ? theme_config.cta.content : page.content %}
{% set button_url = theme_config.cta.button_url ? theme_config.cta.button_url : page.header.button_url %}
{% set button_label = theme_config.cta.button_label ? theme_config.cta.button_label : page.header.button_label %}

<section id=\"call-to-action\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block\">
          <h2 class=\"title wow fadeInDown\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">{{ title }}</h2>
            {{ content|striptags('<b><strong><br><i><em><blockquote>')|raw }}
          </p>
          <a href=\"{{ button_url }}\" class=\"btn btn-default btn-contact wow fadeInDown\" data-wow-delay=\".7s\" data-wow-duration=\"500ms\">{{ button_label }}</a>
        </div>
      </div>
    </div>
  </div>
</section>", "partials/cta.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\partials\\cta.html.twig");
    }
}
