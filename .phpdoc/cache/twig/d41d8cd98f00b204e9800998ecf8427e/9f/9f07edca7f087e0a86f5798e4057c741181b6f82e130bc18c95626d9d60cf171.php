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

/* /file.html.twig */
class __TwigTemplate_f8349d531282c8956d544538aad8e60dcb79f505c12d50a87060d5a3aee86ea0 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "/file.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script type=\"text/javascript\">
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
                <div class=\"span8 content file\">
                    <nav>
                        ";
        // line 67
        echo "                        ";
        // line 68
        echo "                    </nav>

                    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "settings", [], "any", false, false, false, 70), "shouldIncludeSource", [], "any", false, false, false, 70)) {
            // line 71
            echo "                        <a href=\"#source-view\" role=\"button\" class=\"pull-right btn\" data-toggle=\"modal\"><i class=\"icon-code\"></i></a>
                    ";
        }
        // line 73
        echo "                    <h1><small>";
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "path", [], "any", false, false, false, 73), "/"), 0,  -1), "/"), "html", null, true);
        echo "</small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "</h1>
                    <p><em>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "summary", [], "any", false, false, false, 74), "html", null, true);
        echo "</em></p>
                    ";
        // line 75
        echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "description", [], "any", false, false, false, 75)]);
        echo "

                    ";
        // line 77
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "traits", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            echo "                    <h2>Traits</h2>
                    <table class=\"table table-hover\">
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "traits", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["trait"]) {
                // line 81
                echo "                            <tr>
                                <td>";
                // line 82
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["trait"], "class:short"]);
                echo "</td>
                                <td><em>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trait"], "summary", [], "any", false, false, false, 83), "html", null, true);
                echo "</em></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    </table>
                    ";
        }
        // line 88
        echo "
                    ";
        // line 89
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            echo "                    <h2>Interfaces</h2>
                    <table class=\"table table-hover\">
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "interfaces", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 93
                echo "                            <tr>
                                <td>";
                // line 94
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["interface"], "class:short"]);
                echo "</td>
                                <td><em>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["interface"], "summary", [], "any", false, false, false, 95), "html", null, true);
                echo "</em></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                    </table>
                    ";
        }
        // line 100
        echo "
                    ";
        // line 101
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "classes", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            echo "                    <h2>Classes</h2>
                    <table class=\"table table-hover\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "classes", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 105
                echo "                        <tr>
                            <td>";
                // line 106
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["class"], "class:short"]);
                echo "</td>
                            <td><em>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "summary", [], "any", false, false, false, 107), "html", null, true);
                echo "</em></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </table>
                    ";
        }
        // line 112
        echo "                </div>

                <aside class=\"span4 detailsbar\">
                    <dl>
                        ";
        // line 116
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 116)) && (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 116) != "\\"))) {
            // line 117
            echo "                            <dt>Package</dt>
                            <dd><div class=\"namespace-wrapper\">";
            // line 118
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "subpackage", [], "any", false, false, false, 118)) ? (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 118) . "\\") . twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "subpackage", [], "any", false, false, false, 118))) : (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "package", [], "any", false, false, false, 118))), "html", null, true);
            echo "</div></dd>
                        ";
        }
        // line 120
        echo "
                        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 121));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (twig_in_filter($context["tagName"], [0 => "link", 1 => "see"])) {
                // line 122
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "                                <dt>See also</dt>
                            ";
                }
                // line 125
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 126
                    echo "                                <dd><a href=\"";
                    ((call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 126), "url"])) ? (print (call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 126), "url"]))) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "link", [], "any", false, false, false, 126), "html", null, true))));
                    echo "\"><div class=\"namespace-wrapper\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 126)) ? (twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 126)) : (twig_get_attribute($this->env, $this->source, $context["tag"], "reference", [], "any", false, false, false, 126))), "html", null, true);
                    echo "</div></a></dd>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
                    </dl>
                    <h2>Tags</h2>
                    <table class=\"table table-condensed\">
                        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "tags", [], "any", false, false, false, 133));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tagName"] => $context["tags"]) {
            if (!twig_in_filter($context["tagName"], [0 => "link", 1 => "see", 2 => "package", 3 => "subpackage"])) {
                // line 134
                echo "                            <tr>
                                <th>
                                    ";
                // line 136
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "
                                </th>
                                <td>
                                    ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["tags"]);
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 140
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 140)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "version", [], "any", false, false, false, 140), "html", null, true);
                    }
                    // line 141
                    echo "                                        ";
                    echo call_user_func_array($this->env->getFilter('markdown')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 141)]);
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 146
            echo "                            <tr><td colspan=\"2\"><em>None found</em></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                    </table>

                </aside>
            </div>

            ";
        // line 153
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 153)) > 0)) {
            // line 154
            echo "            <div class=\"row-fluid\">
                <section class=\"span8 content file\">
                    <h2>Constants</h2>
                </section>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "constants", [], "any", false, false, false, 161));
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
                // line 162
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
            // line 164
            echo "            ";
        }
        // line 165
        echo "
            ";
        // line 166
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "functions", [], "any", false, false, false, 166)) > 0)) {
            // line 167
            echo "            <div class=\"row-fluid\">
                <section class=\"span8 content file\">
                    <h2>Functions</h2>
                </section>
                <aside class=\"span4 detailsbar\"></aside>
            </div>

                ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "functions", [], "any", false, false, false, 174));
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
                // line 175
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
            // line 177
            echo "            ";
        }
        // line 178
        echo "
        </div>
    </section>

    <div id=\"source-view\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"source-view-label\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"source-view-label\">";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "file", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"modal-body\">
            <pre data-src=\"";
        // line 188
        echo call_user_func_array($this->env->getFunction('path')->getCallable(), [(("files/" . twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "path", [], "any", false, false, false, 188)) . ".txt")]);
        echo "\" class=\"language-php line-numbers\"></pre>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 188,  482 => 185,  473 => 178,  470 => 177,  453 => 175,  436 => 174,  427 => 167,  425 => 166,  422 => 165,  419 => 164,  402 => 162,  385 => 161,  376 => 154,  374 => 153,  367 => 148,  360 => 146,  352 => 143,  343 => 141,  338 => 140,  334 => 139,  328 => 136,  324 => 134,  318 => 133,  312 => 129,  302 => 128,  291 => 126,  286 => 125,  282 => 123,  279 => 122,  268 => 121,  265 => 120,  260 => 118,  257 => 117,  255 => 116,  249 => 112,  245 => 110,  236 => 107,  232 => 106,  229 => 105,  225 => 104,  221 => 102,  219 => 101,  216 => 100,  212 => 98,  203 => 95,  199 => 94,  196 => 93,  192 => 92,  188 => 90,  186 => 89,  183 => 88,  179 => 86,  170 => 83,  166 => 82,  163 => 81,  159 => 80,  155 => 78,  153 => 77,  148 => 75,  144 => 74,  137 => 73,  133 => 71,  131 => 70,  127 => 68,  125 => 67,  113 => 58,  111 => 57,  107 => 55,  103 => 54,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/file.html.twig", "/file.html.twig");
    }
}
