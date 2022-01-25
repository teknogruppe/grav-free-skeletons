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

/* modular/block_items.html.twig */
class __TwigTemplate_7251d949f792a72438304de41dab94a47021e58eae86517077114186b72610d7 extends \Twig\Template
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
    Company Feature Section Start
================================================== -->
<section class=\"about-feature clearfix\">
  <div class=\"container-fluid\">
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
            echo "      <div class=\"block about-feature-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo " wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", []) * 0.2) + 0.3), "html", null, true);
            echo "s\">
        <h2>";
            // line 10
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h2>
        <p>";
            // line 11
            echo $this->getAttribute($context["item"], "content", []);
            echo "</p>
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
        // line 14
        echo "    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/block_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  67 => 11,  63 => 10,  56 => 9,  39 => 8,  30 => 1,);
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
    Company Feature Section Start
================================================== -->
<section class=\"about-feature clearfix\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      {% for item in page.header.items %}
      <div class=\"block about-feature-{{ loop.index }} wow fadeInDown\" data-wow-duration=\"500ms\" data-wow-delay=\"{{ loop.index * 0.2 + 0.3 }}s\">
        <h2>{{ item.title|raw }}</h2>
        <p>{{ item.content|raw }}</p>
      </div>
      {% endfor %}
    </div>
  </div>
</section>

", "modular/block_items.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\block_items.html.twig");
    }
}
