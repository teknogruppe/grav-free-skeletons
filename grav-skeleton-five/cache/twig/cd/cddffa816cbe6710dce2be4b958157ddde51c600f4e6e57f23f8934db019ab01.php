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

/* partials/navigation.html.twig */
class __TwigTemplate_a2936f1d1f6067e0ba060fbd946adf70c8e90df183eaf168f394d14050685b77 extends \Twig\Template
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
        // line 24
        echo "
<ul class=\"nav navbar-nav navbar-right\">
    ";
        // line 26
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
</ul>
";
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("dropdown-toggle") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li class=\"dropdown\">
                <a href=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 7
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "<span class=\"caret\"></span>
                </a>
                <div class=\"dropdown-menu\">
                    <ul>
                        ";
                    // line 11
                    echo $this->getAttribute($this, "nav_loop", [0 => $context["p"]], "method");
                    echo "
                    </ul>
                </div>
            </li>
        ";
                } else {
                    // line 16
                    echo "            <li>
                <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                    echo "\">
                    ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 22,  95 => 18,  89 => 17,  86 => 16,  78 => 11,  71 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  53 => 2,  41 => 1,  34 => 26,  30 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page) %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'dropdown-toggle' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"dropdown\">
                <a href=\"{{ p.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ p.menu }}<span class=\"caret\"></span>
                </a>
                <div class=\"dropdown-menu\">
                    <ul>
                        {{ _self.nav_loop(p) }}
                    </ul>
                </div>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"nav navbar-nav navbar-right\">
    {{ _self.nav_loop(pages) }}
</ul>
", "partials/navigation.html.twig", "C:\\wamp64\\www\\grav-skeleton-timer\\user\\themes\\timer\\templates\\partials\\navigation.html.twig");
    }
}
