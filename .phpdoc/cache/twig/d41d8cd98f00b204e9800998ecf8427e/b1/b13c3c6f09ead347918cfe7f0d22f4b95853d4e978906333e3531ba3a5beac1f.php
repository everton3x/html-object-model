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

/* /namespace.html.twig */
class __TwigTemplate_90d6a2207853eb3a40e534203d7a58944787c999fd06b166fc0e23413961eb88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'hierarchy_element' => [$this, 'block_hierarchy_element'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "/namespace.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section class=\"row-fluid\">
        <div class=\"span2 sidebar\">
            ";
        // line 6
        $context["namespace"] = twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 6);
        // line 7
        echo "            ";
        $this->displayBlock("sidebarNamespaces", $context, $blocks);
        echo "
        </div>
    </section>
    <section class=\"row-fluid\">
        <div class=\"span10 offset2\">
            <div class=\"row-fluid\">
                <div class=\"span8 content namespace\">
                    <nav>
                        ";
        // line 16
        echo "                        ";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 16)]);
        echo "
                        ";
        // line 18
        echo "                    </nav>
                    <h1><small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 19), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 19), "html", null, true);
        echo "</small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>

                    ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "children", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            echo "                    <h2>Namespaces</h2>
                    <table class=\"table table-hover\">
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "children", [], "any", false, false, false, 24)]));
            foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
                // line 25
                echo "                            <tr>
                                <td>";
                // line 26
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["namespace"], "class:short"]);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </table>
                    ";
        }
        // line 31
        echo "
                    ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "traits", [], "any", false, false, false, 32)) > 0)) {
            // line 33
            echo "                    <h2>Traits</h2>
                    <table class=\"table table-hover\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "traits", [], "any", false, false, false, 35)]));
            foreach ($context['_seq'] as $context["_key"] => $context["trait"]) {
                // line 36
                echo "                            <tr>
                                <td>";
                // line 37
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["trait"], "class:short"]);
                echo "</td>
                                <td><em>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trait"], "summary", [], "any", false, false, false, 38), "html", null, true);
                echo "</em></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    </table>
                    ";
        }
        // line 43
        echo "
                    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 44)) > 0)) {
            // line 45
            echo "                    <h2>Interfaces</h2>
                    <table class=\"table table-hover\">
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 47)]));
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 48
                echo "                            <tr>
                                <td>";
                // line 49
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["interface"], "class:short"]);
                echo "</td>
                                <td><em>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interface"], "summary", [], "any", false, false, false, 50), "html", null, true);
                echo "</em></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    </table>
                    ";
        }
        // line 55
        echo "
                    ";
        // line 56
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "classes", [], "any", false, false, false, 56)) > 0)) {
            // line 57
            echo "                    <h2>Classes</h2>
                    <table class=\"table table-hover\">
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "classes", [], "any", false, false, false, 59)]));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 60
                echo "                        <tr>
                            <td>";
                // line 61
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["class"], "class:short"]);
                echo "</td>
                            <td><em>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "summary", [], "any", false, false, false, 62), "html", null, true);
                echo "</em></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    </table>
                    ";
        }
        // line 67
        echo "                </div>

                <aside class=\"span4 detailsbar\">
                    <dl>
                        <dt>Namespace hierarchy</dt>
                        <dd class=\"hierarchy\">
                            ";
        // line 73
        $context["namespace"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 73);
        // line 74
        echo "                            ";
        $this->displayBlock('hierarchy_element', $context, $blocks);
        // line 82
        echo "                            <div class=\"namespace-wrapper\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
                        </dd>
                    </dl>
                </aside>
            </div>

            ";
        // line 88
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 88)) > 0)) {
            // line 89
            echo "            <div class=\"row-fluid\">
                <section class=\"span8 content namespace\">
                    <h2>Constants</h2>
                </section>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 96)]));
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
            foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
                // line 97
                echo "                    ";
                $this->displayBlock("constant", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "            ";
        }
        // line 100
        echo "
            ";
        // line 101
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "functions", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            echo "            <div class=\"row-fluid\">
                <section class=\"span8 content namespace\">
                    <h2>Functions</h2>
                </section>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "functions", [], "any", false, false, false, 109)]));
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
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 110
                echo "                    ";
                $this->displayBlock("method", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            ";
        }
        // line 113
        echo "
        </div>
    </section>
";
    }

    // line 74
    public function block_hierarchy_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                ";
        if (($context["namespace"] ?? null)) {
            // line 76
            echo "                                    ";
            $context["child"] = ($context["namespace"] ?? null);
            // line 77
            echo "                                    ";
            $context["namespace"] = twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "parent", [], "any", false, false, false, 77);
            // line 78
            echo "                                    ";
            $this->displayBlock("hierarchy_element", $context, $blocks);
            echo "
                                    <div class=\"namespace-wrapper\">";
            // line 79
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [($context["child"] ?? null)]);
            echo "</div>
                                ";
        }
        // line 81
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "/namespace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 81,  356 => 79,  351 => 78,  348 => 77,  345 => 76,  342 => 75,  338 => 74,  331 => 113,  328 => 112,  311 => 110,  294 => 109,  285 => 102,  283 => 101,  280 => 100,  277 => 99,  260 => 97,  243 => 96,  234 => 89,  232 => 88,  222 => 82,  219 => 74,  217 => 73,  209 => 67,  205 => 65,  196 => 62,  192 => 61,  189 => 60,  185 => 59,  181 => 57,  179 => 56,  176 => 55,  172 => 53,  163 => 50,  159 => 49,  156 => 48,  152 => 47,  148 => 45,  146 => 44,  143 => 43,  139 => 41,  130 => 38,  126 => 37,  123 => 36,  119 => 35,  115 => 33,  113 => 32,  110 => 31,  106 => 29,  97 => 26,  94 => 25,  90 => 24,  86 => 22,  84 => 21,  77 => 19,  74 => 18,  69 => 16,  57 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/namespace.html.twig", "/namespace.html.twig");
    }
}
