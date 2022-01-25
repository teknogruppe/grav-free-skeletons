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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_e1765a5d5e9a86065fc6338d72de2e262bc81ce9937a30e831488d398cf14571 extends \Twig\Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", []))) {
            // line 6
            echo "<ol class=\"breadcrumb\" id=\"breadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 9
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 10
                    echo "            ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 11
                        echo "                <li>
                    <a href=\"";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", []), "html", null, true);
                        echo "\">
                        ";
                        // line 13
                        if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", [])) {
                            // line 14
                            echo "                            <i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", []), "html", null, true);
                            echo "\"></i>
                        ";
                        }
                        // line 16
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "menu", []), "html", null, true);
                        echo "
                    </a>
                </li>
            ";
                    } else {
                        // line 20
                        echo "                <li>
                    <a href=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", []), "html", null, true);
                        echo "\">
                        ";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "menu", []), "html", null, true);
                        echo "
                    </a>
                </li>
            ";
                    }
                    // line 26
                    echo "        ";
                } else {
                    // line 27
                    echo "            ";
                    if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "link_trailing", [])) {
                        // line 28
                        echo "                <li class=\"active\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "menu", []), "html", null, true);
                        echo "</li>
            ";
                    } else {
                        // line 30
                        echo "                <li class=\"active\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "menu", []), "html", null, true);
                        echo "</li>
            ";
                    }
                    // line 32
                    echo "        ";
                }
                // line 33
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  126 => 33,  123 => 32,  117 => 30,  111 => 28,  108 => 27,  105 => 26,  98 => 22,  94 => 21,  91 => 20,  83 => 16,  77 => 14,  75 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<ol class=\"breadcrumb\" id=\"breadcrumbs\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    
    {% for crumb in crumbs %}
        {% if not loop.last %}
            {% if loop.first %}
                <li>
                    <a href=\"{{ crumb.url }}\">
                        {% if breadcrumbs_config.icon_home %}
                            <i class=\"{{ breadcrumbs_config.icon_home }}\"></i>
                        {% endif %}
                        {{ crumb.menu }}
                    </a>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ crumb.url }}\">
                        {{ crumb.menu }}
                    </a>
                </li>
            {% endif %}
        {% else %}
            {% if breadcrumbs_config.link_trailing %}
                <li class=\"active\">{{ crumb.menu }}</li>
            {% else %}
                <li class=\"active\">{{ crumb.menu }}</li>
            {% endif %}
        {% endif %}
    {% endfor %}
</ol>
{% endif %}
", "partials/breadcrumbs.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\partials\\breadcrumbs.html.twig");
    }
}
