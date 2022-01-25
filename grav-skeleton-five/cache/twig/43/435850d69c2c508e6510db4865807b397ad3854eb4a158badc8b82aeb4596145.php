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

/* modular/features.html.twig */
class __TwigTemplate_b7dc08534494a1d484685e73f407a5d416dc9916e10e5131664a55c1116bb11c extends \Twig\Template
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
        echo "<section class=\"works service-page\">
  <div class=\"container\">
    <h2 class=\"subtitle wow fadeInUp animated\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h2>
    <p class=\"subtitle-des wow fadeInUp animated\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">
      ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "
    </p>
    <div class=\"row\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "      <div class=\"col-sm-3\">
        <figure class=\"wow fadeInLeft animated portfolio-item\" data-wow-duration=\"500ms\" data-wow-delay=\"";
            // line 10
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) * 300), "html", null, true);
            echo "ms\">
          <div class=\"img-wrapper\">
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["item"], "thumb", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", []), "html", null, true);
            echo "\" >
            <div class=\"overlay\">
              <div class=\"buttons\">
                <a rel=\"gallery\" class=\"fancybox\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["item"], "image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.DEMO"), "html", null, true);
            echo "</a>        
                <a target=\"_blank\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.DETAIL"), "html", null, true);
            echo "</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</a>
            </h4>
            <p>";
            // line 24
            echo $this->getAttribute($context["item"], "description", []);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  102 => 24,  95 => 22,  84 => 16,  78 => 15,  70 => 12,  65 => 10,  62 => 9,  45 => 8,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"works service-page\">
  <div class=\"container\">
    <h2 class=\"subtitle wow fadeInUp animated\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">{{ page.title }}</h2>
    <p class=\"subtitle-des wow fadeInUp animated\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">
      {{ page.header.description|raw }}
    </p>
    <div class=\"row\">
      {% for item in page.header.items %}
      <div class=\"col-sm-3\">
        <figure class=\"wow fadeInLeft animated portfolio-item\" data-wow-duration=\"500ms\" data-wow-delay=\"{{ loop.index * 300 }}ms\">
          <div class=\"img-wrapper\">
            <img src=\"{{ page.media.images[item.thumb].cache.url() }}\" class=\"img-responsive\" alt=\"{{ item.alt }}\" >
            <div class=\"overlay\">
              <div class=\"buttons\">
                <a rel=\"gallery\" class=\"fancybox\" href=\"{{ page.media.images[item.image].cache.url() }}\">{{ 'THEME.SITE.DEMO'|t }}</a>        
                <a target=\"_blank\" href=\"{{ item.url }}\">{{ 'THEME.SITE.DETAIL'|t }}</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href=\"{{ item.url }}\">{{ item.name }}</a>
            </h4>
            <p>{{ item.description|raw }}</p>
          </figcaption>
        </figure>
      </div>
      {% endfor %}
    </div>
  </div>
</section>", "modular/features.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\features.html.twig");
    }
}
