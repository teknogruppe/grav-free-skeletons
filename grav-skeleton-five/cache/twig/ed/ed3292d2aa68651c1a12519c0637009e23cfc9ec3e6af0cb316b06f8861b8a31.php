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

/* modular/hero.html.twig */
class __TwigTemplate_87dc5d5e0d9dff75db14784bd4eec9a1c052070f7cc43d1be54c4ad6a6f37fb7 extends \Twig\Template
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
  Slider Section Start
  ================================================== -->
<section id=\"hero-area\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
        echo "');\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        <div class=\"block wow fadeInUp\" data-wow-delay=\".3s\">
          <!-- Slider -->
          <section class=\"cd-intro\">
            <h1 class=\"wow fadeInUp animated cd-headline slide\" data-wow-delay=\".4s\" >
              <span>";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "heading", []);
        echo "</span><br>
              <span class=\"cd-words-wrapper\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "heading_items", []));
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
            // line 16
            echo "                <b ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo "class=\"is-visible\" ";
            }
            echo ">";
            echo $this->getAttribute($context["item"], "content", []);
            echo "</b>
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
        // line 18
        echo "              </span>
            </h1>
          </section> <!-- cd-intro -->
          <!-- /.slider -->
          
          <h2 class=\"wow fadeInUp animated\" data-wow-delay=\".6s\" >
            ";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subheading", []);
        echo "
          </h2>
          <a class=\"btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green\" data-wow-delay=\".9s\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
        echo "\" data-section=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_label", []), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#main-slider-->
";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  98 => 24,  90 => 18,  69 => 16,  52 => 15,  47 => 13,  36 => 5,  30 => 1,);
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
  Slider Section Start
  ================================================== -->
<section id=\"hero-area\" style=\"background-image: url('{{ page.media.images[page.header.background].cache.url() }}');\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        <div class=\"block wow fadeInUp\" data-wow-delay=\".3s\">
          <!-- Slider -->
          <section class=\"cd-intro\">
            <h1 class=\"wow fadeInUp animated cd-headline slide\" data-wow-delay=\".4s\" >
              <span>{{ page.header.heading|raw }}</span><br>
              <span class=\"cd-words-wrapper\">
                {% for item in page.header.heading_items %}
                <b {% if loop.first %}class=\"is-visible\" {% endif %}>{{ item.content|raw }}</b>
                {% endfor %}
              </span>
            </h1>
          </section> <!-- cd-intro -->
          <!-- /.slider -->
          
          <h2 class=\"wow fadeInUp animated\" data-wow-delay=\".6s\" >
            {{ page.header.subheading|raw }}
          </h2>
          <a class=\"btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green\" data-wow-delay=\".9s\" href=\"{{ page.header.button_url }}\" data-section=\"{{ page.header.button_url }}\">{{ page.header.button_label }}</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#main-slider-->
", "modular/hero.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\hero.html.twig");
    }
}
