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

/* modular/about.html.twig */
class __TwigTemplate_e2c65bfb28d799fa5ee61ba0a2929292523de71dd8cbb923bddd878cb988a4fd extends \Twig\Template
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
About Section Start
================================================== -->
<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-sm-6\">
        <div class=\"block wow fadeInLeft\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">
          <h2>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
          ";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
        </div>
      </div>
      
      <div class=\"col-md-6 col-sm-6\">
        <div class=\"block wow fadeInRight\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">
          <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "\">
        </div>
      </div>
    </div>
  </div>
</section> <!-- /#about -->";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  45 => 11,  41 => 10,  30 => 1,);
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
About Section Start
================================================== -->
<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-sm-6\">
        <div class=\"block wow fadeInLeft\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">
          <h2>{{ page.title|raw }}</h2>
          {{ page.content|raw }}
        </div>
      </div>
      
      <div class=\"col-md-6 col-sm-6\">
        <div class=\"block wow fadeInRight\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">
          <img src=\"{{ page.media.images[page.header.image].cache.url() }}\" alt=\"{{ page.title }}\">
        </div>
      </div>
    </div>
  </div>
</section> <!-- /#about -->", "modular/about.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\about.html.twig");
    }
}
