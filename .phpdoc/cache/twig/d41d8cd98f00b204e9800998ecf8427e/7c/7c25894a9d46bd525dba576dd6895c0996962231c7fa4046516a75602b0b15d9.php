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

/* elements/constant.html.twig */
class __TwigTemplate_dfc17c20e37c334afed8b34812e9242cc8a9f06f1ffbdbea51813cbf929f5590 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'constant' => [$this, 'block_constant'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('constant', $context, $blocks);
    }

    public function block_constant($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row-fluid\">
        <div class=\"span8 content class\">
            <a id=\"constant_";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" name=\"constant_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"anchor\"></a>
            <article id=\"constant_";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"constant\">
                <h3 class=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "deprecated", [], "any", false, false, false, 6)) {
            echo "deprecated";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
                <pre class=\"signature\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "value", [], "any", false, false, false, 7), "html", null, true);
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "types", [], "any", false, false, false, 7))) {
            echo " : ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "types", [], "any", false, false, false, 7), "|"), "html", null, true);
        }
        echo "</pre>
                <p><em>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "summary", [], "any", false, false, false, 8), "html", null, true);
        echo "</em></p>
                ";
        // line 9
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "description", [], "any", false, false, false, 9)]);
        echo "
            </article>
        </div>
        <aside class=\"span4 detailsbar\">
            <h1><i class=\"icon-arrow-down\"></i></h1>
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "deprecated", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <aside class=\"alert alert-block alert-error\">
                    <h4>Deprecated</h4>
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "tags", [], "any", false, false, false, 17), "deprecated", [], "any", false, false, false, 17)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "description", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </aside>
            ";
        }
        // line 20
        echo "            <dl>
                ";
        // line 21
        if ((null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 21))) {
            // line 22
            echo "                <dt>File</dt>
                <dd><a href=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 23), "url"]);
            echo "\"><div class=\"path-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "path", [], "any", false, false, false, 23), "html", null, true);
            echo "</div></a></dd>
                ";
        }
        // line 25
        echo "                ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 25)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "parent", [], "any", false, false, false, 25), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 25) != twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 25)))) {
            // line 26
            echo "                    <dt>Inherited from</dt>
                    <dd><a href=\"";
            // line 27
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "parent", [], "any", false, false, false, 27), "url"]);
            echo "\"><div class=\"path-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "parent", [], "any", false, false, false, 27), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 27), "html", null, true);
            echo "</div></a></dd>
                ";
        }
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "tags", [], "any", false, false, false, 29));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "link", 1 => "see"])) {
                // line 30
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                        <dt>See also</dt>
                    ";
                }
                // line 33
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 34
                    echo "                        <dd><a href=\"";
                    ((call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 34), "url"])) ? (print (call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 34), "url"]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 34), "html", null, true))));
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 34))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "tags", [], "any", false, false, false, 37));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "uses"])) {
                // line 38
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                        <dt>Uses</dt>
                    ";
                }
                // line 41
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 42
                    echo "                        <dd><a href=\"";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 42), "url"]);
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 42)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 42)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 42))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </dl>
            <h2>Tags</h2>
            <table class=\"table table-condensed\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["constant"] ?? null), "tags", [], "any", false, false, false, 48));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (!twig_in_filter($context["tagName"], [0 => "link", 1 => "see", 2 => "var", 3 => "deprecated", 4 => "uses"])) {
                // line 49
                echo "                    <tr>
                        <th>
                            ";
                // line 51
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "
                        </th>
                        <td>
                            ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 55
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 55)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 55), "html", null, true);
                    }
                    // line 56
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 56)]);
                    echo "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                    <tr><td colspan=\"2\"><em>None found</em></td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </table>
        </aside>
    </div>
";
    }

    public function getTemplateName()
    {
        return "elements/constant.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 63,  266 => 61,  258 => 58,  249 => 56,  244 => 55,  240 => 54,  234 => 51,  230 => 49,  224 => 48,  219 => 45,  209 => 44,  198 => 42,  193 => 41,  189 => 39,  186 => 38,  174 => 37,  164 => 36,  153 => 34,  148 => 33,  144 => 31,  141 => 30,  129 => 29,  122 => 27,  119 => 26,  116 => 25,  109 => 23,  106 => 22,  104 => 21,  101 => 20,  95 => 17,  91 => 15,  89 => 14,  81 => 9,  77 => 8,  67 => 7,  59 => 6,  55 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/constant.html.twig", "elements/constant.html.twig");
    }
}
