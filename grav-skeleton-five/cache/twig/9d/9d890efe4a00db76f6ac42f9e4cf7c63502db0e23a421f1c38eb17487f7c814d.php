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

/* partials/header.html.twig */
class __TwigTemplate_70c475b36e00edcdcddc302315fe299d819aae48559167f9fda55e97a0b85954 extends \Twig\Template
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
    Global Page Section Start
================================================== -->
<section class=\"global-page-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block\">
          <h2>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
          ";
        // line 11
        $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/header.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  41 => 10,  30 => 1,);
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
    Global Page Section Start
================================================== -->
<section class=\"global-page-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block\">
          <h2>{{ page.title|raw }}</h2>
          {% include 'partials/breadcrumbs.html.twig' %}
        </div>
      </div>
    </div>
  </div>
</section>
", "partials/header.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\partials\\header.html.twig");
    }
}
