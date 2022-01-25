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

/* modular/latest_works.html.twig */
class __TwigTemplate_5c72b5b606e4cbd802c8577767210c366bdd5da9b12416aa39078e2495dede5b extends \Twig\Template
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
Portfolio Section Start
================================================== -->
<section id=\"works\" class=\"works\">
  <div class=\"container\">
    <div class=\"section-heading\">
      <h1 class=\"title wow fadeInDown\" data-wow-delay=\".3s\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
        <p class=\"wow fadeInDown\" data-wow-delay=\".5s\">
          ";
        // line 10
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []), "<b><strong><br><i><em><blockquote>");
        echo "
        </p>
    </div>

    <div class=\"row\">
      ";
        // line 15
        $context["source_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "source", [])], "method");
        // line 16
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["source_page"] ?? null), "collection", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 17
            echo "      <div class=\"col-sm-4 col-xs-12\">
        <figure class=\"wow fadeInLeft animated portfolio-item\" data-wow-duration=\"500ms\" data-wow-delay=\"";
            // line 18
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) * 300), "html", null, true);
            echo "ms\">
          <div class=\"img-wrapper\">
            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "media", []), "images", [])), "cache", []), "url", [], "method"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "title", []), "html", null, true);
            echo "\" >
            <div class=\"overlay\">
              <div class=\"buttons\">
                <a rel=\"gallery\" class=\"fancybox\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["child"], "media", []), "images", [])), "cache", []), "url", [], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.DEMO"), "html", null, true);
            echo "</a>
                <a target=\"_blank\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.DETAIL"), "html", null, true);
            echo "</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
            echo "\">";
            echo $this->getAttribute($context["child"], "title", []);
            echo "</a>
            </h4>
            <p>";
            // line 32
            echo $this->getAttribute($this->getAttribute($context["child"], "header", []), "short_description", []);
            echo "</p>
          </figcaption>
        </figure>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
  </div>
</section> <!-- #works -->";
    }

    public function getTemplateName()
    {
        return "modular/latest_works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  112 => 32,  105 => 30,  94 => 24,  88 => 23,  80 => 20,  75 => 18,  72 => 17,  54 => 16,  52 => 15,  44 => 10,  39 => 8,  30 => 1,);
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
Portfolio Section Start
================================================== -->
<section id=\"works\" class=\"works\">
  <div class=\"container\">
    <div class=\"section-heading\">
      <h1 class=\"title wow fadeInDown\" data-wow-delay=\".3s\">{{ page.title|raw }}</h1>
        <p class=\"wow fadeInDown\" data-wow-delay=\".5s\">
          {{ page.content|striptags('<b><strong><br><i><em><blockquote>')|raw }}
        </p>
    </div>

    <div class=\"row\">
      {% set source_page = page.find(page.header.source) %}
      {% for child in source_page.collection() %}
      <div class=\"col-sm-4 col-xs-12\">
        <figure class=\"wow fadeInLeft animated portfolio-item\" data-wow-duration=\"500ms\" data-wow-delay=\"{{ loop.index * 300 }}ms\">
          <div class=\"img-wrapper\">
            <img src=\"{{ child.media.images|first.cache.url() }}\" class=\"img-responsive\" alt=\"{{ child.title }}\" >
            <div class=\"overlay\">
              <div class=\"buttons\">
                <a rel=\"gallery\" class=\"fancybox\" href=\"{{ child.media.images|first.cache.url() }}\">{{ 'THEME.SITE.DEMO'|t }}</a>
                <a target=\"_blank\" href=\"{{ child.url }}\">{{ 'THEME.SITE.DETAIL'|t }}</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href=\"{{ child.url }}\">{{ child.title|raw }}</a>
            </h4>
            <p>{{ child.header.short_description|raw }}</p>
          </figcaption>
        </figure>
      </div>
      {% endfor %}
    </div>
  </div>
</section> <!-- #works -->", "modular/latest_works.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\latest_works.html.twig");
    }
}
