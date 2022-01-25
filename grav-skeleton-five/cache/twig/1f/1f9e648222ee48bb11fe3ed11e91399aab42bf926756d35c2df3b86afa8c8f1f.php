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

/* modular/clients.html.twig */
class __TwigTemplate_e7cc41c129fd1f4e3b0f3cc9b73a2025e447e3730708564a9872f6a30d712111 extends \Twig\Template
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
    Clients Section Start
================================================== -->
<section id=\"clients\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2 class=\"subtitle text-center wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\".3s\">";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
        <p class=\"subtitle-des text-center wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\".5s\">";
        // line 10
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []), "<b><strong><br><i><em><blockquote>");
        echo "</p>
        <div id=\"clients-logo\" class=\"owl-carousel\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "clients", []));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 13
            echo "          <div>
            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["client"], "image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "alt", []), "html", null, true);
            echo "\">
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
      </div>
    </div>
  </div>
</section>




";
    }

    public function getTemplateName()
    {
        return "modular/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  56 => 14,  53 => 13,  49 => 12,  44 => 10,  40 => 9,  30 => 1,);
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
    Clients Section Start
================================================== -->
<section id=\"clients\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2 class=\"subtitle text-center wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\".3s\">{{ page.title|raw }}</h2>
        <p class=\"subtitle-des text-center wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\".5s\">{{ page.content|striptags('<b><strong><br><i><em><blockquote>')|raw }}</p>
        <div id=\"clients-logo\" class=\"owl-carousel\">
          {% for client in page.header.clients %}
          <div>
            <img src=\"{{ page.media.images[client.image].cache.url() }}\" alt=\"{{ client.alt }}\">
          </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>




", "modular/clients.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\clients.html.twig");
    }
}
