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

/* /reports/markers.html.twig */
class __TwigTemplate_0b45e48f83e3e32f9bdcf35bea27c49c8cfc7da925089c62c4ddb6ffb78461c1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "/reports/markers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " &raquo; Markers
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
        // line 12
        $context["markerCount"] = 0;
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 14
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 14), "count", [], "any", false, false, false, 14) > 0)) {
                // line 15
                echo "                    <li><a href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\"><i class=\"icon-file\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 15), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 17
            echo "                    ";
            $context["markerCount"] = (($context["markerCount"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17));
            // line 18
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </ul>
        </div>

        <div class=\"span10 offset2\">

            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/"]), "html", null, true);
        echo "\"><i class=\"icon-map-marker\"></i></a><span class=\"divider\">\\</span></li>
                <li>Markers</li>
            </ul>

            ";
        // line 29
        if ((($context["markerCount"] ?? null) <= 0)) {
            // line 30
            echo "                <div class=\"alert alert-info\">No markers have been found in this project.</div>
            ";
        }
        // line 32
        echo "
            <div id=\"marker-accordion\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 35
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 35), "count", [], "any", false, false, false, 35) > 0)) {
                // line 36
                echo "                        <div class=\"package-contents\">
                            <a name=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 37), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 37), "html", null, true);
                echo "\"></a>
                            <h3>
                            <i class=\"icon-file\"></i>
                                ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 40), "html", null, true);
                echo "
                                <small style=\"float: right;padding-right: 10px;\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41), "html", null, true);
                echo "</small>
                            </h3>
                            <div>
                                <table class=\"table markers table-bordered\">
                                    <tr>
                                        <th>Type</th>
                                        <th>Line</th>
                                        <th>Description</th>
                                    </tr>
                                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["marker"]) {
                    // line 51
                    echo "                                        <tr>
                                            <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marker"], "type", [], "any", false, false, false, 52), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marker"], "line", [], "any", false, false, false, 53), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marker"], "message", [], "any", false, false, false, 54), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marker'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                                </table>
                            </div>
                        </div>
                    ";
            }
            // line 61
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "/reports/markers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 62,  184 => 61,  178 => 57,  169 => 54,  165 => 53,  161 => 52,  158 => 51,  154 => 50,  142 => 41,  138 => 40,  130 => 37,  127 => 36,  124 => 35,  120 => 34,  116 => 32,  112 => 30,  110 => 29,  103 => 25,  95 => 19,  89 => 18,  86 => 17,  78 => 15,  75 => 14,  70 => 13,  68 => 12,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/reports/markers.html.twig", "/reports/markers.html.twig");
    }
}
