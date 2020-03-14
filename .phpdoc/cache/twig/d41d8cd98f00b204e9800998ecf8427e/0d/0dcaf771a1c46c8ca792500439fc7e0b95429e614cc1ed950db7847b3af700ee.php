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

/* /reports/deprecated.html.twig */
class __TwigTemplate_dbe2d286d8b9d422480119f4a9fe030dfe3f1a9a6c2ee3f015fbf7b0960dc17d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "/reports/deprecated.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " &raquo; Deprecated elements
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"row-fluid\">

        <div class=\"span2 sidebar\">
            <ul class=\"side-nav nav nav-list\">
                <li class=\"nav-header\">Navigation</li>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 13), "elements", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            if (twig_get_attribute($this->env, $this->source, $context["element"], "deprecated", [], "any", false, false, false, 13)) {
                // line 14
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14) != ($context["previousPath"] ?? null))) {
                    // line 15
                    echo "                        <li><a href=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
                    echo "\"><i class=\"icon-file\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 17
                echo "                    ";
                $context["previousPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17);
                // line 18
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </div>

        <div class=\"span10 offset2\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "\"><i class=\"icon-remove-sign\"></i></a><span class=\"divider\">\\</span></li>
                <li>Deprecated elements</li>
            </ul>

            <div id=\"marker-accordion\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 29), "elements", [], "any", false, false, false, 29));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            if (twig_get_attribute($this->env, $this->source, $context["element"], "deprecated", [], "any", false, false, false, 29)) {
                // line 30
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30) != ($context["previousPath"] ?? null))) {
                    // line 31
                    echo "                    ";
                    if (($context["previousPath"] ?? null)) {
                        // line 32
                        echo "                        </table>
                    </div>
                    ";
                    }
                    // line 35
                    echo "                    <a name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
                    echo "\"></a>
                    <h3>
                        <i class=\"icon-file\"></i>
                        ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 38), "path", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                        <small style=\"float: right;padding-right: 10px;\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "tags", [], "any", false, false, false, 39), "deprecated", [], "any", false, false, false, 39), "count", [], "any", false, false, false, 39), "html", null, true);
                    echo "</small>
                    </h3>
                    <div>
                        <table class=\"table markers table-bordered\">
                            <tr>
                                <th>Element</th>
                                <th>Line</th>
                                <th>Description</th>
                            </tr>
                    ";
                }
                // line 49
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "tags", [], "any", false, false, false, 49), "deprecated", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 50
                    echo "                                <tr>
                                    <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "fullyQualifiedStructuralElementName", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "line", [], "any", false, false, false, 52), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "description", [], "any", false, false, false, 53), "html", null, true);
                    echo "</td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    ";
                $context["previousPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "file", [], "any", false, false, false, 56), "path", [], "any", false, false, false, 56);
                // line 57
                echo "                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                    <div class=\"alert alert-info\">No deprecated elements have been found in this project.</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/reports/deprecated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 60,  187 => 58,  181 => 57,  178 => 56,  169 => 53,  165 => 52,  161 => 51,  158 => 50,  153 => 49,  140 => 39,  136 => 38,  127 => 35,  122 => 32,  119 => 31,  116 => 30,  110 => 29,  102 => 24,  95 => 19,  88 => 18,  85 => 17,  77 => 15,  74 => 14,  69 => 13,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/reports/deprecated.html.twig", "/reports/deprecated.html.twig");
    }
}
