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

/* partials/base.html.twig */
class __TwigTemplate_2c4d06f9ce50e6e43143c1909b7b5075f77b596b4c7d11a399673c6e6400b8ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_classes' => [$this, 'block_body_classes'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\" class=\"no-js\">
  <head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "  </head>

  <body id=\"top\" class=\"";
        // line 44
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <!--
    ==================================================
    Header Section Start
    ================================================== -->
    <header id=\"top-bar\" class=\"navbar-fixed-top animated-header\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <!-- responsive nav button -->
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <!-- /responsive nav button -->
                      
          <!-- logo -->
          <div class=\"navbar-brand\">
            <a href=\"";
        // line 63
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\" >
              <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . $this->getAttribute(($context["theme_config"] ?? null), "logo", []))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\">
            </a>
          </div>
          <!-- /logo -->

        </div>
        
        <!-- main menu -->
        <nav class=\"collapse navbar-collapse navbar-right\" role=\"navigation\">
          <div class=\"main-menu\">
            ";
        // line 74
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 74)->display($context);
        // line 75
        echo "          </div>
        </nav>
        
        <!-- /main nav -->
      </div>
    </header>
          
    ";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "  
    <!--
    ==================================================
    Footer Section Start
    ================================================== -->
    <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"col-md-8\">
          <p class=\"copyright\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME.SITE.COPYRIGHT"), "html", null, true);
        echo ": 
            <span>";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span> 
            ";
        // line 93
        echo $this->getAttribute(($context["theme_config"] ?? null), "copyright", []);
        echo "
          </p>
        </div>

        <div class=\"col-md-4\">
          <!-- Social Media -->
          <ul class=\"social\">
            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "social_icons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "            <li>
              <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "classes", []), "html", null, true);
            echo "\">
                <i class=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
            echo "\"></i>
              </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "          </ul>
        </div>
      </div>
    </footer> <!-- /#footer -->

    ";
        // line 112
        $this->displayBlock('bottom', $context, $blocks);
        // line 115
        echo "
  </body>
</html>";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <title>";
        // line 13
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>


    <link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . $this->getAttribute(($context["theme_config"] ?? null), "favicon", []))), "html", null, true);
        echo "\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

  ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css"], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ionicons.min.css"], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slider.css"], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.carousel.css"], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.theme.css"], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jquery.fancybox.css"], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/owl.carousel.min.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/wow.min.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fancybox.js", 1 => ["group" => "bottom"]], "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slider.js", 1 => ["group" => "bottom"]], "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 38
        echo "    ";
    }

    // line 44
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
    }

    // line 112
    public function block_bottom($context, array $blocks = [])
    {
        // line 113
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 113,  290 => 112,  285 => 82,  279 => 44,  275 => 38,  272 => 37,  269 => 36,  266 => 35,  263 => 34,  260 => 33,  257 => 32,  254 => 31,  251 => 30,  247 => 27,  244 => 26,  241 => 25,  238 => 24,  235 => 23,  232 => 22,  229 => 21,  226 => 20,  223 => 19,  220 => 18,  212 => 39,  210 => 30,  204 => 28,  202 => 18,  197 => 16,  187 => 13,  184 => 12,  182 => 11,  176 => 7,  173 => 6,  167 => 115,  165 => 112,  158 => 107,  148 => 103,  142 => 102,  139 => 101,  135 => 100,  125 => 93,  121 => 92,  117 => 91,  107 => 83,  105 => 82,  96 => 75,  94 => 74,  79 => 64,  75 => 63,  53 => 44,  49 => 42,  47 => 6,  42 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\" class=\"no-js\">
  <head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>


    <link rel=\"icon\" href=\"{{ url('theme://images/' ~ theme_config.favicon) }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/bootstrap.min.css') %}
        {% do assets.addCss('theme://css/ionicons.min.css') %}
        {% do assets.addCss('theme://css/animate.css') %}
        {% do assets.addCss('theme://css/slider.css') %}
        {% do assets.addCss('theme://css/owl.carousel.css') %}
        {% do assets.addCss('theme://css/owl.theme.css') %}
        {% do assets.addCss('theme://css/jquery.fancybox.css') %}
        {% do assets.addCss('theme://css/style.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/owl.carousel.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/bootstrap.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/wow.min.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.fancybox.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/slider.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/main.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js()|raw }}

  {% endblock head %}
  </head>

  <body id=\"top\" class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
    <!--
    ==================================================
    Header Section Start
    ================================================== -->
    <header id=\"top-bar\" class=\"navbar-fixed-top animated-header\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <!-- responsive nav button -->
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <!-- /responsive nav button -->
                      
          <!-- logo -->
          <div class=\"navbar-brand\">
            <a href=\"{{ base_url == '' ? '/' : base_url }}\" >
              <img src=\"{{ url('theme://images/' ~ theme_config.logo) }}\" alt=\"{{ site.title }}\">
            </a>
          </div>
          <!-- /logo -->

        </div>
        
        <!-- main menu -->
        <nav class=\"collapse navbar-collapse navbar-right\" role=\"navigation\">
          <div class=\"main-menu\">
            {% include 'partials/navigation.html.twig' %}
          </div>
        </nav>
        
        <!-- /main nav -->
      </div>
    </header>
          
    {% block content %}{% endblock %}
  
    <!--
    ==================================================
    Footer Section Start
    ================================================== -->
    <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"col-md-8\">
          <p class=\"copyright\">{{ 'THEME.SITE.COPYRIGHT'|t }}: 
            <span>{{ \"now\"|date(\"Y\") }}</span> 
            {{ theme_config.copyright|raw }}
          </p>
        </div>

        <div class=\"col-md-4\">
          <!-- Social Media -->
          <ul class=\"social\">
            {% for item in theme_config.social_icons %}
            <li>
              <a href=\"{{ item.url }}\" class=\"{{ item.classes }}\">
                <i class=\"{{ item.icon }}\"></i>
              </a>
            </li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </footer> <!-- /#footer -->

    {% block bottom %}
      {{ assets.js('bottom')|raw }}
    {% endblock %}

  </body>
</html>", "partials/base.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\partials\\base.html.twig");
    }
}
