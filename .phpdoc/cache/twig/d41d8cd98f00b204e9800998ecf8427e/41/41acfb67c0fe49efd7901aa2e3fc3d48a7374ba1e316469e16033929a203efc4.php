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

/* /index.html.twig */
class __TwigTemplate_d4297a8b76f8ac87b9a2e8f7d993e8ea653200b78bcb8ad45e09ae5bad8885f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'heroUnit' => [$this, 'block_heroUnit'],
            'content' => [$this, 'block_content'],
            'listRootNamespaces' => [$this, 'block_listRootNamespaces'],
            'listRootPackages' => [$this, 'block_listRootPackages'],
            'listCharts' => [$this, 'block_listCharts'],
            'listReports' => [$this, 'block_listReports'],
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
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("base/macros.html.twig", "/index.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_heroUnit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"hero-unit\">
        <h1>";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 7);
        echo "</h1>
        <h2>Documentation</h2>
    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"row\">
        <div class=\"span7\">
            ";
        // line 15
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 15), "namespaces", [], "any", false, false, false, 15)) > 0) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 15), "packages", [], "any", false, false, false, 15))) {
            // line 16
            echo "                <div class=\"well\">
                    <ul class=\"nav nav-list\">
                        <li class=\"nav-header\">Namespaces</li>
                        ";
            // line 19
            $this->displayBlock('listRootNamespaces', $context, $blocks);
            // line 25
            echo "                    </ul>
                </div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 29), "packages", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            echo "                <div class=\"well\">
                    <ul class=\"nav nav-list\">
                        <li class=\"nav-header\">Packages</li>
                        ";
            // line 33
            $this->displayBlock('listRootPackages', $context, $blocks);
            // line 39
            echo "                    </ul>
                </div>
            ";
        }
        // line 42
        echo "
        </div>
        <div class=\"span5\">
            <div class=\"well\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Charts</li>
                    ";
        // line 48
        $this->displayBlock('listCharts', $context, $blocks);
        // line 51
        echo "                </ul>
            </div>
            <div class=\"well\">
                <ul class=\"nav nav-list\">
                    <li class=\"nav-header\">Reports</li>
                    ";
        // line 56
        $this->displayBlock('listReports', $context, $blocks);
        // line 73
        echo "                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 19
    public function block_listRootNamespaces($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">Global (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo ")</a></li>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 21), "children", [], "any", false, false, false, 21)]));
        foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
            // line 22
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), [$context["namespace"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["namespace"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        ";
    }

    // line 33
    public function block_listRootPackages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                            <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), [twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 34), "packages", [], "any", false, false, false, 34))]), "html", null, true);
        echo "\">Global (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 34), "packages", [], "any", false, false, false, 34)), "name", [], "any", false, false, false, 34), "html", null, true);
        echo ")</a></li>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 35), "packages", [], "any", false, false, false, 35)), "children", [], "any", false, false, false, 35)]));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 36
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), [$context["package"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        ";
    }

    // line 48
    public function block_listCharts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["graph_class.html"]), "html", null, true);
        echo "\"><i class=\"icon-list-alt\"></i> Class inheritance diagram</a></li>
                    ";
    }

    // line 56
    public function block_listReports($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                        <li>
                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["errors.html"]), "html", null, true);
        echo "\">
                                <i class=\"icon-list-alt\"></i> Errors ";
        // line 59
        echo twig_call_macro($macros["macros"], "macro_renderErrorCounter", [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["deprecated.html"]), "html", null, true);
        echo "\">
                                <i class=\"icon-list-alt\"></i> Deprecated ";
        // line 64
        echo twig_call_macro($macros["macros"], "macro_renderDeprecatedCounter", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "indexes", [], "any", false, false, false, 64), "elements", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["markers.html"]), "html", null, true);
        echo "\">
                                <i class=\"icon-list-alt\"></i> Markers ";
        // line 69
        echo twig_call_macro($macros["macros"], "macro_renderMarkerCounter", [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "files", [], "any", false, false, false, 69)], 69, $context, $this->getSourceContext());
        echo "
                            </a>
                        </li>
                    ";
    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 69,  235 => 68,  228 => 64,  224 => 63,  217 => 59,  213 => 58,  210 => 57,  206 => 56,  199 => 49,  195 => 48,  191 => 38,  180 => 36,  176 => 35,  169 => 34,  165 => 33,  161 => 24,  150 => 22,  146 => 21,  139 => 20,  135 => 19,  127 => 73,  125 => 56,  118 => 51,  116 => 48,  108 => 42,  103 => 39,  101 => 33,  96 => 30,  94 => 29,  91 => 28,  86 => 25,  84 => 19,  79 => 16,  77 => 15,  73 => 13,  69 => 12,  61 => 7,  58 => 6,  54 => 5,  49 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/index.html.twig", "/index.html.twig");
    }
}
