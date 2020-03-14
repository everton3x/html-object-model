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

/* /class.html.twig */
class __TwigTemplate_9e05281951ecd39ad6ba153d1386f86215519807264005cc8fd6fb916cc776cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "/class.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script type=\"text/javascript\">
    function loadExternalCodeSnippets() {
        Array.prototype.slice.call(document.querySelectorAll('pre[data-src]')).forEach(function (pre) {
            var src = pre.getAttribute('data-src').replace( /\\\\/g, '/');
            var extension = (src.match(/\\.(\\w+)\$/) || [, ''])[1];
            var language = 'php';

            var code = document.createElement('code');
            code.className = 'language-' + language;

            pre.textContent = '';

            code.textContent = 'Loading…';

            pre.appendChild(code);

            var xhr = new XMLHttpRequest();

            xhr.open('GET', src, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {

                    if (xhr.status < 400 && xhr.responseText) {
                        code.textContent = xhr.responseText;

                        Prism.highlightElement(code);
                    }
                    else if (xhr.status >= 400) {
                        code.textContent = '✖ Error ' + xhr.status + ' while fetching file: ' + xhr.statusText;
                    }
                    else {
                        code.textContent = '✖ Error: File does not exist, is empty or trying to view from localhost';
                    }
                }
            };

            xhr.send(null);
        });
    }

    \$(document).ready(function(){
        loadExternalCodeSnippets();
    });
    \$('#source-view').on('shown', function () {
        loadExternalCodeSnippets();
    })
</script>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    <section class=\"row-fluid\">
        <div class=\"span2 sidebar\">
            ";
        // line 57
        $context["namespace"] = twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 57);
        // line 58
        echo "            ";
        $this->displayBlock("sidebarNamespaces", $context, $blocks);
        echo "
        </div>
    </section>
    <section class=\"row-fluid\">
        <div class=\"span10 offset2\">
            <div class=\"row-fluid\">
                <div class=\"span8 content class\">
                    <nav>
                        ";
        // line 67
        echo "                        ";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "namespace", [], "any", false, false, false, 67)]);
        echo " <i class=\"icon-level-up\"></i>
                        ";
        // line 69
        echo "                    </nav>
                    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "settings", [], "any", false, false, false, 70), "shouldIncludeSource", [], "any", false, false, false, 70)) {
            // line 71
            echo "                    <a href=\"#source-view\" role=\"button\" class=\"pull-right btn\" data-toggle=\"modal\"><i class=\"icon-code\"></i></a>
                    ";
        }
        // line 73
        echo "
                    <h1><small>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "namespace", [], "any", false, false, false, 74), "html", null, true);
        echo "</small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "</h1>
                    <p><em>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "summary", [], "any", false, false, false, 75), "html", null, true);
        echo "</em></p>
                    ";
        // line 76
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "description", [], "any", false, false, false, 76)]);
        echo "
                    
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 78));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "example"])) {
                // line 79
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                            <h3>Examples</h3>
                        ";
                }
                // line 82
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 83
                    echo "                            <h4>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 83));
                    echo "</h4>
                            <pre class=\"pre-scrollable\">";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "example", [], "any", false, false, false, 84));
                    echo "</pre>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    
                    <section id=\"summary\">
                        <h2>Summary</h2>
                        <section class=\"row-fluid heading\">
                            <section class=\"span4\">
                                <a href=\"#methods\">Methods</a>
                            </section>
                            <section class=\"span4\">
                                <a href=\"#properties\">Properties</a>
                            </section>
                            <section class=\"span4\">
                                <a href=\"#constants\">Constants</a>
                            </section>
                        </section>
                        <section class=\"row-fluid public\">
                            <section class=\"span4\">
                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 103), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 103), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 103)], "method", false, false, false, 103)], "method", false, false, false, 103));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 103) == "public")) {
                // line 104
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["method"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["method"], "deprecated", [], "any", false, false, false, 104)) ? ("deprecated") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 104), "html", null, true);
                echo "()</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 106
            echo "                                    <em>No public methods found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                            </section>
                            <section class=\"span4\">
                                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 110), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 110), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 110)], "method", false, false, false, 110)], "method", false, false, false, 110));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 110) == "public")) {
                // line 111
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["property"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["property"], "deprecated", [], "any", false, false, false, 111)) ? ("deprecated") : (""));
                echo "\">\$";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 111), "html", null, true);
                echo "</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 113
            echo "                                    <em>No public properties found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </section>
                            <section class=\"span4\">
                                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedConstants", [], "any", false, false, false, 117), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 117)], "method", false, false, false, 117));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 118
            echo "                                    <a href=\"";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["constant"], "url"]);
            echo "\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["constant"], "deprecated", [], "any", false, false, false, 118)) ? ("deprecated") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["constant"], "name", [], "any", false, false, false, 118), "html", null, true);
            echo "</a><br />
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "                                    <em>No constants found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                            </section>
                        </section>
                        <section class=\"row-fluid protected\">
                            <section class=\"span4\">
                                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 126), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 126), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 126)], "method", false, false, false, 126)], "method", false, false, false, 126));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 126) == "protected")) {
                // line 127
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["method"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["method"], "deprecated", [], "any", false, false, false, 127)) ? ("deprecated") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 127), "html", null, true);
                echo "()</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 129
            echo "                                    <em>No protected methods found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                            </section>
                            <section class=\"span4\">
                                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 133), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 133), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 133)], "method", false, false, false, 133)], "method", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 133) == "protected")) {
                // line 134
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["property"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["property"], "deprecated", [], "any", false, false, false, 134)) ? ("deprecated") : (""));
                echo "\">\$";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 134), "html", null, true);
                echo "</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 136
            echo "                                    <em>No protected properties found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                            </section>
                            <section class=\"span4\">
                                <em>N/A</em>
                            </section>
                        </section>
                        <section class=\"row-fluid private\">
                            <section class=\"span4\">
                                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 145), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 145), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 145)], "method", false, false, false, 145)], "method", false, false, false, 145));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 145) == "private")) {
                // line 146
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["method"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["method"], "deprecated", [], "any", false, false, false, 146)) ? ("deprecated") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo "()</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 148
            echo "                                    <em>No private methods found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            </section>
                            <section class=\"span4\">
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 152), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 152), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 152)], "method", false, false, false, 152)], "method", false, false, false, 152));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 152) == "private")) {
                // line 153
                echo "                                    <a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["property"], "url"]);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["property"], "deprecated", [], "any", false, false, false, 153)) ? ("deprecated") : (""));
                echo "\">\$";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 153), "html", null, true);
                echo "</a><br />
                                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 155
            echo "                                    <em>No private properties found</em>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                            </section>
                            <section class=\"span4\">
                                <em>N/A</em>
                            </section>
                        </section>
                    </section>
                </div>
                <aside class=\"span4 detailsbar\">
                    ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "abstract", [], "any", false, false, false, 165)) {
            // line 166
            echo "                        <span class=\"label label-info\">abstract</span>
                    ";
        }
        // line 168
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "final", [], "any", false, false, false, 168)) {
            // line 169
            echo "                        <span class=\"label label-info\">final</span>
                    ";
        }
        // line 171
        echo "
                    ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "deprecated", [], "any", false, false, false, 172)) {
            // line 173
            echo "                        <aside class=\"alert alert-block alert-error\">
                            <h4>Deprecated</h4>
                            ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "tags", [], "any", false, false, false, 175), "deprecated", [], "any", false, false, false, 175)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "description", [], "any", false, false, false, 175), "html", null, true);
            echo "
                        </aside>
                    ";
        }
        // line 178
        echo "
                    <dl>
                        <dt>File</dt>
                            <dd><a href=\"";
        // line 181
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 181), "url"]);
        echo "\"><div class=\"path-wrapper\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "path", [], "any", false, false, false, 181), "html", null, true);
        echo "</div></a></dd>
                        ";
        // line 182
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 182), "name", [], "any", false, false, false, 182)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 182), "name", [], "any", false, false, false, 182) != "\\"))) {
            // line 183
            echo "                        <dt>Package</dt>
                            <dd><div class=\"namespace-wrapper\">";
            // line 184
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 184), "parent", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184) != "\\")) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 184), "parent", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184) . "\\") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184))), "html", null, true);
            echo "</div></dd>
                        ";
        }
        // line 186
        echo "                        <dt>Class hierarchy</dt>
                            <dd class=\"hierarchy\">
                                ";
        // line 188
        $context["class"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "parent", [], "any", false, false, false, 188);
        // line 189
        echo "                                ";
        $this->displayBlock('hierarchy_element', $context, $blocks);
        // line 197
        echo "                                <div class=\"namespace-wrapper\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fullyQualifiedStructuralElementName", [], "any", false, false, false, 197), "html", null, true);
        echo "</div>
                            </dd>

                        ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 200));
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
        foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
            // line 201
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 201)) {
                // line 202
                echo "                        <dt>Implements</dt>
                            ";
            }
            // line 204
            echo "                            <dd><a href=\"";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["interface"], "url"]);
            echo "\"><div class=\"namespace-wrapper\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interface"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 204), "html", null, true);
            echo "</div></a></dd>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
                        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "usedTraits", [], "any", false, false, false, 207));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trait"]) {
            // line 208
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 208)) {
                // line 209
                echo "                                <dt>Uses traits</dt>
                            ";
            }
            // line 211
            echo "                            <dd>
                                ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, $context["trait"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 212)) {
                echo "<a href=\"";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["trait"], "url"]);
                echo "\">";
            }
            // line 213
            echo "                                    <div class=\"namespace-wrapper\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["trait"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 213)) ? (twig_get_attribute($this->env, $this->source, $context["trait"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 213)) : ($context["trait"])), "html", null, true);
            echo "</div>
                                ";
            // line 214
            if (twig_get_attribute($this->env, $this->source, $context["trait"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 214)) {
                echo "</a>";
            }
            // line 215
            echo "                            </dd>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "
                        ";
        // line 227
        echo "
                        ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 228));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "link", 1 => "see"])) {
                // line 229
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "                        <dt>See also</dt>
                            ";
                }
                // line 232
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 233
                    echo "                                <dd><a href=\"";
                    ((call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 233), "url"])) ? (print (call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 233), "url"]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 233), "html", null, true))));
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 233)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 233)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 233))), "html", null, true);
                    echo "</span></a></dd>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 236));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "uses"])) {
                // line 237
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "                                <dt>Uses</dt>
                            ";
                }
                // line 240
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 241
                    echo "                                <dd><a href=\"";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 241), "url"]);
                    echo "\"><span class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 241)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 241)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 241))), "html", null, true);
                    echo "</span></a></dd>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "
                        ";
        // line 246
        echo "                            ";
        // line 247
        echo "                    </dl>
                    <h2>Tags</h2>
                    <table class=\"table table-condensed\">
                    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 250));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (!twig_in_filter($context["tagName"], [0 => "link", 1 => "see", 2 => "uses", 3 => "abstract", 4 => "example", 5 => "method", 6 => "property", 7 => "property-read", 8 => "property-write", 9 => "package", 10 => "subpackage"])) {
                // line 251
                echo "                        <tr>
                            <th>
                                ";
                // line 253
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "
                            </th>
                            <td>
                                ";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 257
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 257)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 257), "html", null, true);
                    }
                    // line 258
                    echo "                                    ";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 258)]);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 263
            echo "                        <tr><td colspan=\"2\"><em>None found</em></td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                    </table>
                </aside>
            </div>

            ";
        // line 269
        $context["constants"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedConstants", [], "any", false, false, false, 269), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 269)], "method", false, false, false, 269);
        // line 270
        echo "            ";
        if ((twig_length_filter($this->env, ($context["constants"] ?? null)) > 0)) {
            // line 271
            echo "            <a id=\"constants\" name=\"constants\"></a>
            <div class=\"row-fluid\">
                <div class=\"span8 content class\">
                    <h2>Constants</h2>
                </div>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

            ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["constants"] ?? null));
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
                // line 280
                echo "                ";
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
            // line 282
            echo "            ";
        }
        // line 283
        echo "
            ";
        // line 284
        $context["properties"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedProperties", [], "any", false, false, false, 284), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "properties", [], "any", false, false, false, 284), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicProperties", [], "any", false, false, false, 284)], "method", false, false, false, 284)], "method", false, false, false, 284);
        // line 285
        echo "            ";
        if ((twig_length_filter($this->env, ($context["properties"] ?? null)) > 0)) {
            // line 286
            echo "            <a id=\"properties\" name=\"properties\"></a>
            <div class=\"row-fluid\">
                <div class=\"span8 content class\">
                    <h2>Properties</h2>
                </div>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 294) == "public")) {
                    // line 295
                    echo "                ";
                    $this->displayBlock("property", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 297) == "protected")) {
                    // line 298
                    echo "                ";
                    $this->displayBlock("property", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["property"], "visibility", [], "any", false, false, false, 300) == "private")) {
                    // line 301
                    echo "                ";
                    $this->displayBlock("property", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "            ";
        }
        // line 304
        echo "
            ";
        // line 305
        $context["methods"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "inheritedMethods", [], "any", false, false, false, 305), "merge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "methods", [], "any", false, false, false, 305), "merge", [0 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "magicMethods", [], "any", false, false, false, 305)], "method", false, false, false, 305)], "method", false, false, false, 305);
        // line 306
        echo "            ";
        if ((twig_length_filter($this->env, ($context["methods"] ?? null)) > 0)) {
            // line 307
            echo "            <a id=\"methods\" name=\"methods\"></a>
            <div class=\"row-fluid\">
                <div class=\"span8 content class\"><h2>Methods</h2></div>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 313) == "public")) {
                    // line 314
                    echo "                ";
                    $this->displayBlock("method", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 316) == "protected")) {
                    // line 317
                    echo "                ";
                    $this->displayBlock("method", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["method"], "visibility", [], "any", false, false, false, 319) == "private")) {
                    // line 320
                    echo "                ";
                    $this->displayBlock("method", $context, $blocks);
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "            ";
        }
        // line 323
        echo "        </div>
    </section>

    <div id=\"source-view\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"source-view-label\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"source-view-label\">";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 329), "name", [], "any", false, false, false, 329), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"modal-body\">
            <pre data-src=\"";
        // line 332
        echo call_user_func_array($this->env->getFunction('path')->getCallable(), [(("files/" . twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "path", [], "any", false, false, false, 332)) . ".txt")]);
        echo "\" class=\"language-php line-numbers\"></pre>
        </div>
    </div>
";
    }

    // line 189
    public function block_hierarchy_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                                    ";
        if (($context["class"] ?? null)) {
            // line 191
            echo "                                        ";
            $context["child"] = ($context["class"] ?? null);
            // line 192
            echo "                                        ";
            $context["class"] = twig_get_attribute($this->env, $this->source, ($context["class"] ?? null), "parent", [], "any", false, false, false, 192);
            // line 193
            echo "                                        ";
            $this->displayBlock("hierarchy_element", $context, $blocks);
            echo "
                                        <div class=\"namespace-wrapper\">";
            // line 194
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [($context["child"] ?? null)]);
            echo "</div>
                                    ";
        }
        // line 196
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "/class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1056 => 196,  1051 => 194,  1046 => 193,  1043 => 192,  1040 => 191,  1037 => 190,  1033 => 189,  1025 => 332,  1019 => 329,  1011 => 323,  1008 => 322,  995 => 320,  983 => 319,  970 => 317,  958 => 316,  945 => 314,  934 => 313,  926 => 307,  923 => 306,  921 => 305,  918 => 304,  915 => 303,  902 => 301,  890 => 300,  877 => 298,  865 => 297,  852 => 295,  841 => 294,  831 => 286,  828 => 285,  826 => 284,  823 => 283,  820 => 282,  803 => 280,  786 => 279,  776 => 271,  773 => 270,  771 => 269,  765 => 265,  758 => 263,  750 => 260,  741 => 258,  736 => 257,  732 => 256,  726 => 253,  722 => 251,  716 => 250,  711 => 247,  709 => 246,  706 => 244,  696 => 243,  685 => 241,  680 => 240,  676 => 238,  673 => 237,  661 => 236,  651 => 235,  640 => 233,  635 => 232,  631 => 230,  628 => 229,  617 => 228,  614 => 227,  611 => 217,  596 => 215,  592 => 214,  587 => 213,  581 => 212,  578 => 211,  574 => 209,  571 => 208,  554 => 207,  551 => 206,  532 => 204,  528 => 202,  525 => 201,  508 => 200,  501 => 197,  498 => 189,  496 => 188,  492 => 186,  487 => 184,  484 => 183,  482 => 182,  476 => 181,  471 => 178,  465 => 175,  461 => 173,  459 => 172,  456 => 171,  452 => 169,  449 => 168,  445 => 166,  443 => 165,  433 => 157,  426 => 155,  413 => 153,  407 => 152,  403 => 150,  396 => 148,  383 => 146,  377 => 145,  368 => 138,  361 => 136,  348 => 134,  342 => 133,  338 => 131,  331 => 129,  318 => 127,  312 => 126,  306 => 122,  299 => 120,  287 => 118,  282 => 117,  278 => 115,  271 => 113,  258 => 111,  252 => 110,  248 => 108,  241 => 106,  228 => 104,  222 => 103,  204 => 87,  194 => 86,  186 => 84,  181 => 83,  176 => 82,  172 => 80,  169 => 79,  158 => 78,  153 => 76,  149 => 75,  143 => 74,  140 => 73,  136 => 71,  134 => 70,  131 => 69,  126 => 67,  114 => 58,  112 => 57,  108 => 55,  104 => 54,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/class.html.twig", "/class.html.twig");
    }
}
