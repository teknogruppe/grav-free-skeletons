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

/* modular/services.html.twig */
class __TwigTemplate_0b5966d7591185b0ace0c3614b219d7df4ea6c9307a5613398df6021f0780b5e extends \Twig\Template
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
        echo "<section id=\"service-page\" class=\"pages service-page\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"block\">
          <h2 class=\"subtitle wow fadeInUp animated\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
          <p class=\"subtitle-des wow fadeInUp animated\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
          <div class=\"row service-parts\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "            <div class=\"col-md-6\">
              <div class=\"block wow fadeInUp animated\" data-wow-duration=\"400ms\" data-wow-delay=\"600ms\">
                <i class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "icon", []), "html", null, true);
            echo "\"></i>
                <h4>";
            // line 13
            echo $this->getAttribute($context["service"], "title", []);
            echo "</h4>
                <p>";
            // line 14
            echo $this->getAttribute($context["service"], "content", []);
            echo "</p>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"block\">
          <img class=\"img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_alt", []), "html", null, true);
        echo "\">
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 18,  62 => 14,  58 => 13,  54 => 12,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"service-page\" class=\"pages service-page\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"block\">
          <h2 class=\"subtitle wow fadeInUp animated\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">{{ page.header.title|raw }}</h2>
          <p class=\"subtitle-des wow fadeInUp animated\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">{{ page.content|raw }}</p>
          <div class=\"row service-parts\">
            {% for service in page.header.services %}
            <div class=\"col-md-6\">
              <div class=\"block wow fadeInUp animated\" data-wow-duration=\"400ms\" data-wow-delay=\"600ms\">
                <i class=\"{{ service.icon }}\"></i>
                <h4>{{ service.title|raw }}</h4>
                <p>{{ service.content|raw }}</p>
              </div>
            </div>
            {% endfor %}
          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"block\">
          <img class=\"img-responsive\" src=\"{{ page.media.images[page.header.image].cache.url() }}\" alt=\"{{ page.header.image_alt }}\">
        </div>
      </div>
    </div>
  </div>
</section>", "modular/services.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\services.html.twig");
    }
}
