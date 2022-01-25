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

/* modular/team.html.twig */
class __TwigTemplate_2b98950b4e88e7b80ecf3ccc131a22b45c82bfee6ee837087f0360bc18865491 extends \Twig\Template
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
    Team Section Start
================================================== -->
<section id=\"team\">
  <div class=\"container\">
    <div class=\"row\">
      <h2 class=\"subtitle text-center\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "members", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "      <div class=\"col-md-3\">
        <div class=\"team-member wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", []) * 0.2) + 0.3), "html", null, true);
            echo "s\">
          <div class=\"team-img\">
            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["member"], "image", []), [], "array"), "cache", []), "url", [], "method"), "html", null, true);
            echo "\" class=\"team-pic\" alt=\"";
            echo $this->getAttribute($context["member"], "name", []);
            echo "\">
          </div>
          <h3 class=\"team_name\">";
            // line 15
            echo $this->getAttribute($context["member"], "name", []);
            echo "</h3>
          <p class=\"team_designation\">";
            // line 16
            echo $this->getAttribute($context["member"], "designation", []);
            echo "</p>
          <p class=\"team_text\">";
            // line 17
            echo $this->getAttribute($context["member"], "about", []);
            echo " </p>
          <p class=\"social-icons\">
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "facebook", []), "html", null, true);
            echo "\" class=\"facebook\" target=\"_blank\"><i class=\"ion-social-facebook-outline\"></i></a>
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "twitter", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"ion-social-twitter-outline\"></i></a>
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "linkedin", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"ion-social-linkedin-outline\"></i></a>
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "googleplus", []), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"ion-social-googleplus-outline\"></i></a>
          </p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  83 => 17,  79 => 16,  75 => 15,  68 => 13,  63 => 11,  60 => 10,  43 => 9,  39 => 8,  30 => 1,);
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
    Team Section Start
================================================== -->
<section id=\"team\">
  <div class=\"container\">
    <div class=\"row\">
      <h2 class=\"subtitle text-center\">{{ page.title|raw }}</h2>
      {% for member in page.header.members %}
      <div class=\"col-md-3\">
        <div class=\"team-member wow fadeInLeft\" data-wow-duration=\"500ms\" data-wow-delay=\"{{ loop.index * 0.2 + 0.3 }}s\">
          <div class=\"team-img\">
            <img src=\"{{ page.media.images[member.image].cache.url() }}\" class=\"team-pic\" alt=\"{{ member.name|raw }}\">
          </div>
          <h3 class=\"team_name\">{{ member.name|raw }}</h3>
          <p class=\"team_designation\">{{ member.designation|raw }}</p>
          <p class=\"team_text\">{{ member.about|raw }} </p>
          <p class=\"social-icons\">
            <a href=\"{{ member.facebook }}\" class=\"facebook\" target=\"_blank\"><i class=\"ion-social-facebook-outline\"></i></a>
            <a href=\"{{ member.twitter }}\" target=\"_blank\"><i class=\"ion-social-twitter-outline\"></i></a>
            <a href=\"{{ member.linkedin }}\" target=\"_blank\"><i class=\"ion-social-linkedin-outline\"></i></a>
            <a href=\"{{ member.googleplus }}\" target=\"_blank\"><i class=\"ion-social-googleplus-outline\"></i></a>
          </p>
        </div>
      </div>
      {% endfor %}
            
        </div>
    </div>
</section>
", "modular/team.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\modular\\team.html.twig");
    }
}
