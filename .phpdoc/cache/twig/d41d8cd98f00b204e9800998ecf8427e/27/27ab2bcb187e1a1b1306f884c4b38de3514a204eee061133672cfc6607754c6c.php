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

/* elements/method.html.twig */
class __TwigTemplate_a4d1f04909c6e38fd00677d217470c19c0155a35184130b31acb01827bc37567 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'method' => [$this, 'block_method'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('method', $context, $blocks);
    }

    public function block_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row-fluid\">
        <div class=\"span8 content class\">
            <a id=\"method_";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" name=\"method_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"anchor\"></a>
            <article class=\"method\">
                <h3 class=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "visibility", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "deprecated", [], "any", false, false, false, 6)) {
            echo "deprecated";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "()</h3>
                <a href=\"#source-view\" role=\"button\" class=\"pull-right btn\" data-toggle=\"modal\" style=\"font-size: 1.1em; padding: 9px 14px\"><i class=\"icon-code\"></i></a>
                <pre class=\"signature\" style=\"margin-right: 54px;\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "(";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "arguments", [], "any", false, false, false, 8));
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
        foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
            ((twig_get_attribute($this->env, $this->source, $context["argument"], "types", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, (twig_join_filter(twig_get_attribute($this->env, $this->source, $context["argument"], "types", [], "any", false, false, false, 8), "|") . " "), "html", null, true))) : (print ("")));
            echo " <span class=\"argument\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["argument"], "isVariadic", [], "any", false, false, false, 8)) ? ("...") : (""));
            echo "\$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["argument"], "name", [], "any", false, false, false, 8), "html", null, true);
            ((twig_get_attribute($this->env, $this->source, $context["argument"], "default", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, (" = " . twig_get_attribute($this->env, $this->source, $context["argument"], "default", [], "any", false, false, false, 8)), "html", null, true))) : (print ("")));
            echo "</span>";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                echo ", ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ") ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 8), "types", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, (": " . twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 8), "types", [], "any", false, false, false, 8), "|")), "html", null, true))) : (print ("")));
        echo "</pre>
                <p><em>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "summary", [], "any", false, false, false, 9), "html", null, true);
        echo "</em></p>
                ";
        // line 10
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 10)]);
        echo "

                ";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "arguments", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            echo "                    <h4>Parameters</h4>
                    <table class=\"table table-condensed table-hover\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "arguments", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
                // line 16
                echo "                            <tr>
                                <td>";
                // line 17
                echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["argument"], "types", [], "any", false, false, false, 17)]), "|");
                echo "</td>
                                <td>\$";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["argument"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["argument"], "isVariadic", [], "any", false, false, false, 18)) ? ("<small style=\"color: gray\">variadic</small>") : (""));
                echo "</td>
                                <td>";
                // line 19
                echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["argument"], "description", [], "any", false, false, false, 19)]);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </table>
                ";
        }
        // line 24
        echo "
                ";
        // line 25
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 25), "throws", [], "any", false, false, false, 25)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 25), "throw", [], "any", false, false, false, 25)) > 0))) {
            // line 26
            echo "                    <h4>Throws</h4>
                    <dl>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 28), "throws", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
                // line 29
                echo "                            <dt>";
                echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["exception"], "types", [], "any", false, false, false, 29)]), "|");
                echo "</dt>
                            <dd>";
                // line 30
                echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["exception"], "description", [], "any", false, false, false, 30)]);
                echo "</dd>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 32), "throw", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
                // line 33
                echo "                            <dt>";
                echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["exception"], "types", [], "any", false, false, false, 33)]), "|");
                echo "</dt>
                            <dd>";
                // line 34
                echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["exception"], "description", [], "any", false, false, false, 34)]);
                echo "</dd>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </dl>
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 39) && (twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 39), "types", [], "any", false, false, false, 39)) != "void"))) {
            // line 40
            echo "                    <h4>Returns</h4>
                    ";
            // line 41
            echo twig_join_filter(call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 41), "types", [], "any", false, false, false, 41)]), "|");
            echo "
                    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 42), "description", [], "any", false, false, false, 42)) {
                // line 43
                echo "                        &mdash; ";
                echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "response", [], "any", false, false, false, 43), "description", [], "any", false, false, false, 43)]);
                echo "
                    ";
            }
            // line 45
            echo "                ";
        }
        // line 46
        echo "
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 47));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "example"])) {
                // line 48
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                        <h4>Examples</h4>
                    ";
                }
                // line 51
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 52
                    echo "                        <h5>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 52));
                    echo "</h5>
                        <pre class=\"pre-scrollable\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "example", [], "any", false, false, false, 53));
                    echo "</pre>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </article>
        </div>
        <aside class=\"span4 detailsbar\">
            <h1><i class=\"icon-arrow-down\"></i></h1>
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "static", [], "any", false, false, false, 60)) {
            // line 61
            echo "                <span class=\"label label-info\">static</span>
            ";
        }
        // line 63
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "abstract", [], "any", false, false, false, 63)) {
            // line 64
            echo "                <span class=\"label label-info\">abstract</span>
            ";
        }
        // line 66
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "final", [], "any", false, false, false, 66)) {
            // line 67
            echo "                <span class=\"label label-info\">final</span>
            ";
        }
        // line 69
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "deprecated", [], "any", false, false, false, 69)) {
            // line 70
            echo "                <aside class=\"alert alert-block alert-error\">
                    <h4>Deprecated";
            // line 71
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 71), "deprecated", [], "any", false, false, false, 71)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "version", [], "any", false, false, false, 71)) {
                echo " since ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 71), "deprecated", [], "any", false, false, false, 71)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "version", [], "any", false, false, false, 71), "html", null, true);
            }
            echo "</h4>
                    ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 72), "deprecated", [], "any", false, false, false, 72)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "description", [], "any", false, false, false, 72), "html", null, true);
            echo "
                </aside>
            ";
        }
        // line 75
        echo "            <dl>
                ";
        // line 76
        if ((null === twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "parent", [], "any", false, false, false, 76))) {
            // line 77
            echo "                    <dt>File</dt>
                    <dd><a href=\"";
            // line 78
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "file", [], "any", false, false, false, 78), "url"]);
            echo "\"><div class=\"path-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "path", [], "any", false, false, false, 78), "html", null, true);
            echo "</div></a></dd>
                ";
        }
        // line 80
        echo "                ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "parent", [], "any", false, false, false, 80)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "parent", [], "any", false, false, false, 80), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 80) != twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 80)))) {
            // line 81
            echo "                    <dt>Inherited from</dt>
                    <dd><a href=\"";
            // line 82
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "parent", [], "any", false, false, false, 82), "url"]);
            echo "\"><div class=\"path-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "parent", [], "any", false, false, false, 82), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 82), "html", null, true);
            echo "</div></a></dd>
                ";
        }
        // line 84
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 84));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "link", 1 => "see"])) {
                // line 85
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                        <dt>See also</dt>
                    ";
                }
                // line 88
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 89
                    echo "                        <dd><a href=\"";
                    ((call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 89), "url"])) ? (print (call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 89), "url"]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 89), "html", null, true))));
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 89)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 89)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 89))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 92));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "uses"])) {
                // line 93
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "                        <dt>Uses</dt>
                    ";
                }
                // line 96
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 97
                    echo "                        <dd><a href=\"";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 97), "url"]);
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 97)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 97)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 97))), "html", null, true);
                    echo "</span></a></dd>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </dl>
            <h2>Tags</h2>
            <table class=\"table table-condensed\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 103));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (!twig_in_filter($context["tagName"], [0 => "link", 1 => "see", 2 => "abstract", 3 => "example", 4 => "param", 5 => "return", 6 => "access", 7 => "deprecated", 8 => "throws", 9 => "throw", 10 => "uses"])) {
                // line 104
                echo "                    <tr>
                        <th>
                            ";
                // line 106
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "
                        </th>
                        <td>
                            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 110
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 110)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 110), "html", null, true);
                    }
                    // line 111
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 111)]);
                    echo "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 116
            echo "                    <tr><td colspan=\"2\"><em>None found</em></td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </table>
        </aside>
    </div>
";
    }

    public function getTemplateName()
    {
        return "elements/method.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  494 => 118,  487 => 116,  479 => 113,  470 => 111,  465 => 110,  461 => 109,  455 => 106,  451 => 104,  445 => 103,  440 => 100,  430 => 99,  419 => 97,  414 => 96,  410 => 94,  407 => 93,  395 => 92,  385 => 91,  374 => 89,  369 => 88,  365 => 86,  362 => 85,  350 => 84,  343 => 82,  340 => 81,  337 => 80,  330 => 78,  327 => 77,  325 => 76,  322 => 75,  316 => 72,  309 => 71,  306 => 70,  303 => 69,  299 => 67,  296 => 66,  292 => 64,  289 => 63,  285 => 61,  283 => 60,  277 => 56,  267 => 55,  259 => 53,  254 => 52,  249 => 51,  245 => 49,  242 => 48,  231 => 47,  228 => 46,  225 => 45,  219 => 43,  217 => 42,  213 => 41,  210 => 40,  208 => 39,  205 => 38,  201 => 36,  193 => 34,  188 => 33,  183 => 32,  175 => 30,  170 => 29,  166 => 28,  162 => 26,  160 => 25,  157 => 24,  153 => 22,  144 => 19,  138 => 18,  134 => 17,  131 => 16,  127 => 15,  123 => 13,  121 => 12,  116 => 10,  112 => 9,  67 => 8,  56 => 6,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/method.html.twig", "elements/method.html.twig");
    }
}
