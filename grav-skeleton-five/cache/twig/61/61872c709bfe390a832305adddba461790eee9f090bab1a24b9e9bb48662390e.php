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

/* modular/list_item.html.twig */
class __TwigTemplate_9d8086e5e5e0c27b50665bafd667b80b1cdbb96314e351e0a56f8cd42226e816 extends \Twig\Template
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
<section id=\"feature\">
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
            // line 16
            echo "      <div class=\"col-md-4 col-lg-4 col-xs-12\">
        <div class=\"media wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\"";
            // line 17
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) * 300), "html", null, true);
            echo "ms\">
          <div class=\"media-left\">
            <div class=\"icon\">
              <i class=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
            echo "\"></i>
            </div>
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">";
            // line 24
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h4>
            <p>";
            // line 25
            echo $this->getAttribute($context["item"], "content", []);
            echo "</p>
          </div>
        </div>
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
        // line 30
        echo "    </div>
  </div>
</section> <!-- /#feature -->
";
    }

    public function getTemplateName()
    {
        return "modular/list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  89 => 25,  85 => 24,  78 => 20,  72 => 17,  69 => 16,  52 => 15,  44 => 10,  39 => 8,  30 => 1,);
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
<section id=\"feature\">
  <div class=\"container\">
    <div class=\"section-heading\">
      <h1 class=\"title wow fadeInDown\" data-wow-delay=\".3s\">{{ page.title|raw }}</h1>
      <p class=\"wow fadeInDown\" data-wow-delay=\".5s\">
        {{ page.content|striptags('<b><strong><br><i><em><blockquote>')|raw }}
      </p>
    </div>
    
    <div class=\"row\">
      {% for item in page.header.items %}
      <div class=\"col-md-4 col-lg-4 col-xs-12\">
        <div class=\"media wow fadeInUp animated\" data-wow-duration=\"500ms\" data-wow-delay=\"{{ loop.index * 300 }}ms\">
          <div class=\"media-left\">
            <div class=\"icon\">
              <i class=\"{{ item.icon }}\"></i>
            </div>
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">{{ item.title|raw }}</h4>
            <p>{{ item.content|raw }}</p>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
  </div>
</section> <!-- /#feature -->
", "modular/list_item.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\list_item.html.twig");
    }
}
