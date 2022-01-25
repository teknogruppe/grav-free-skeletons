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

/* modular/simple_content.html.twig */
class __TwigTemplate_b3929290ee1e506f1f728ac4c5bc86307a14500605e460121375c2853c88b484 extends \Twig\Template
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
    Company Description Section Start
================================================== -->
<section class=\"company-description\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 wow fadeInLeft\" data-wow-delay=\".3s\" >
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cache", []), "url", [], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"img-responsive\">
      </div>
      
      <div class=\"col-md-6\">
        <div class=\"block\">
          <h3 class=\"subtitle wow fadeInUp\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h3>
          <p  class=\"wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">
            ";
        // line 16
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []), "<b><strong><br><i><em><blockquote>");
        echo "
          </p>
                    
        </div>
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/simple_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  50 => 14,  40 => 9,  30 => 1,);
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
    Company Description Section Start
================================================== -->
<section class=\"company-description\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 wow fadeInLeft\" data-wow-delay=\".3s\" >
        <img src=\"{{ page.media.images|first.cache.url() }}\" alt=\"{{ page.title }}\" class=\"img-responsive\">
      </div>
      
      <div class=\"col-md-6\">
        <div class=\"block\">
          <h3 class=\"subtitle wow fadeInUp\" data-wow-delay=\".3s\" data-wow-duration=\"500ms\">{{ page.title }}</h3>
          <p  class=\"wow fadeInUp\" data-wow-delay=\".5s\" data-wow-duration=\"500ms\">
            {{ page.content|striptags('<b><strong><br><i><em><blockquote>')|raw }}
          </p>
                    
        </div>
      </div>
    </div>
  </div>
</section>

", "modular/simple_content.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\simple_content.html.twig");
    }
}
