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

/* /reports/errors.html.twig */
class __TwigTemplate_429a1a17b6e3c2b964ffb948fb13da4ea585785dc6442af4ac9f3ba9adad5bac extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "/reports/errors.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " &raquo; Compilation errors
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"row-fluid\">
        <div class=\"span2 sidebar\">

            <ul class=\"side-nav nav nav-list\">
                <li class=\"nav-header\">Navigation</li>
                ";
        // line 13
        $context["errorCount"] = 0;
        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 15
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 15), "count", [], "any", false, false, false, 15) > 0)) {
                // line 16
                echo "                        <li><a href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 16), "html", null, true);
                echo "\"><i class=\"icon-file\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 16), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 18
            echo "                    ";
            $context["errorCount"] = (($context["errorCount"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 18), "count", [], "any", false, false, false, 18));
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div>

        <div class=\"span10 offset2\">
            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "\"><i class=\"icon-remove-sign\"></i></a><span class=\"divider\">\\</span></li>
                <li>Compilation Errors</li>
            </ul>

            ";
        // line 29
        if ((($context["errorCount"] ?? null) <= 0)) {
            // line 30
            echo "                <div class=\"alert alert-info\">No errors have been found in this project.</div>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 34
            echo "                <div class=\"package-contents\">
                    ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 35), "count", [], "any", false, false, false, 35) > 0)) {
                // line 36
                echo "                        <a name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 36), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 36), "html", null, true);
                echo "\"></a>
                        <h3>
                            <i class=\"icon-file\"></i>
                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 39), "html", null, true);
                echo "
                            <small style=\"float: right;padding-right: 10px;\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40), "html", null, true);
                echo "</small>
                        </h3>
                        <div>
                            <table class=\"table markers table-bordered\">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Line</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 53
                    echo "                                    <tr>
                                        <td>";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 54), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "line", [], "any", false, false, false, 55), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 56
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('trans')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["error"], "code", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, $context["error"], "context", [], "any", false, false, false, 56)]), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                            </tbody>
                            </table>
                        </div>
                    ";
            }
            // line 63
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "/reports/errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 65,  186 => 63,  180 => 59,  171 => 56,  167 => 55,  163 => 54,  160 => 53,  156 => 52,  141 => 40,  137 => 39,  128 => 36,  126 => 35,  123 => 34,  119 => 33,  116 => 32,  112 => 30,  110 => 29,  103 => 25,  96 => 20,  90 => 19,  87 => 18,  79 => 16,  76 => 15,  71 => 14,  69 => 13,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/reports/errors.html.twig", "/reports/errors.html.twig");
    }
}
