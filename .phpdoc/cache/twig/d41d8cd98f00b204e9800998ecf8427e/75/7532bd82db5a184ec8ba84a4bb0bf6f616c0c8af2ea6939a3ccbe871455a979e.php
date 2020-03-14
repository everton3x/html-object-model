<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* elements/property.html.twig */
class __TwigTemplate_675896fd7a52d97ed4c86333fc0b00f677351e6ccdca427b980db1270869fd09 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'property' => [$this, 'block_property'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('property', $context, $blocks);
    }

    public function block_property($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row-fluid\">
        <div class=\"span8 content class\">
            <a id=\"property_";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" name=\"property_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"anchor\"></a>
            <article class=\"property\">
                <h3 class=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "visibility", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "deprecated", [], "any", false, false, false, 6)) {
            echo "deprecated";
        }
        echo "\">\$";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
                <pre class=\"signature\">\$";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "types", [], "any", false, false, false, 7)) {
            echo " : ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "types", [], "any", false, false, false, 7), "|"), "html", null, true);
        }
        echo "</pre>
                <p><em>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "summary", [], "any", false, false, false, 8), "html", null, true);
        echo "</em></p>
                ";
        // line 9
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "description", [], "any", false, false, false, 9)]);
        echo "

                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "types", [], "any", false, false, false, 11)) {
            // line 12
            echo "                <h4>Type</h4>
                ";
            // line 13
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "types", [], "any", false, false, false, 13)]), "|");
            echo "
                ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "var", [], "any", false, false, false, 14), 0, [], "any", false, false, false, 14), "description", [], "any", false, false, false, 14)) {
                echo "&mdash; ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "var", [], "any", false, false, false, 14), 0, [], "any", false, false, false, 14), "description", [], "any", false, false, false, 14), "html", null, true);
            }
            // line 15
            echo "                ";
        }
        // line 16
        echo "            </article>
        </div>
        <aside class=\"span4 detailsbar\">
            <h1><i class=\"icon-arrow-down\"></i></h1>
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "deprecated", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <aside class=\"alert alert-block alert-error\">
                    <h4>Deprecated</h4>
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "tags", [], "any", false, false, false, 23), "deprecated", [], "any", false, false, false, 23)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "description", [], "any", false, false, false, 23), "html", null, true);
            echo "
                </aside>
            ";
        }
        // line 26
        echo "            <dl>
                ";
        // line 27
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 27)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "parent", [], "any", false, false, false, 27), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 27) != twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 27)))) {
            // line 28
            echo "                    <dt>Inherited from</dt>
                    <dd><a href=\"";
            // line 29
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "parent", [], "any", false, false, false, 29), "url"]);
            echo "\"><div class=\"path-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "parent", [], "any", false, false, false, 29), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 29), "html", null, true);
            echo "</div></a></dd>
                ";
        }
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "tags", [], "any", false, false, false, 31));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "link", 1 => "see"])) {
                // line 32
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                        <dt>See also</dt>
                    ";
                }
                // line 35
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 36
                    echo "                        <dd><a href=\"";
                    ((call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 36), "url"])) ? (print (call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 36), "url"]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 36), "html", null, true))));
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 36)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 36)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 36))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "tags", [], "any", false, false, false, 39));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "uses"])) {
                // line 40
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                        <dt>Uses</dt>
                    ";
                }
                // line 43
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 44
                    echo "                        <dd><a href=\"";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 44), "url"]);
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 44)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 44)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 44))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </dl>
            <h2>Tags</h2>
            <table class=\"table table-condensed\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "tags", [], "any", false, false, false, 50));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (!twig_in_filter($context["tagName"], [0 => "link", 1 => "see", 2 => "access", 3 => "var", 4 => "deprecated", 5 => "uses"])) {
                // line 51
                echo "                    <tr>
                        <th>
                            ";
                // line 53
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "
                        </th>
                        <td>
                            ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 57
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 57)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 57), "html", null, true);
                    }
                    // line 58
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 58)]);
                    echo "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                    <tr><td colspan=\"2\"><em>None found</em></td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </table>
        </aside>
    </div>
";
    }

    public function getTemplateName()
    {
        return "elements/property.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  277 => 65,  270 => 63,  262 => 60,  253 => 58,  248 => 57,  244 => 56,  238 => 53,  234 => 51,  228 => 50,  223 => 47,  213 => 46,  202 => 44,  197 => 43,  193 => 41,  190 => 40,  178 => 39,  168 => 38,  157 => 36,  152 => 35,  148 => 33,  145 => 32,  133 => 31,  126 => 29,  123 => 28,  121 => 27,  118 => 26,  112 => 23,  108 => 21,  106 => 20,  100 => 16,  97 => 15,  92 => 14,  88 => 13,  85 => 12,  83 => 11,  78 => 9,  74 => 8,  66 => 7,  56 => 6,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/property.html.twig", "elements/property.html.twig");
    }
}
