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

/* base/macros.html.twig */
class __TwigTemplate_eb289bfd2615d3ec8c3b6ff1e24564e7cfbfefadaffbd51bfef9a345a5bb267b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 16
        echo "
";
        // line 24
        echo "
";
    }

    // line 1
    public function macro_renderMarkerCounter($__files__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "files" => $__files__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context["count"] = 0;
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 4
                echo "        ";
                $context["count"] = (($context["count"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "markers", [], "any", false, false, false, 4)));
                // line 5
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
    public function macro_renderDeprecatedCounter($__elements__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 10
            echo "    ";
            $context["count"] = 0;
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if (twig_get_attribute($this->env, $this->source, $context["element"], "deprecated", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "        ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 13
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 17
    public function macro_renderErrorCounter($__files__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "files" => $__files__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 18
            echo "    ";
            $context["count"] = 0;
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 20
                echo "        ";
                $context["count"] = (($context["count"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "allerrors", [], "any", false, false, false, 20)));
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo "</span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_buildBreadcrumb($__element__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "element" => $__element__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 26
            echo "    ";
            $macros["self"] = $this;
            // line 27
            echo "
    ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "parentNamespace", [], "any", false, false, false, 28) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "parentNamespace", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28) != "\\"))) {
                // line 29
                echo "        ";
                echo twig_call_macro($macros["self"], "macro_buildBreadcrumb", [twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "parentNamespace", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 31
            echo "
    <li><span class=\"divider\">\\</span><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), [($context["element"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "base/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 32,  203 => 31,  197 => 29,  195 => 28,  192 => 27,  189 => 26,  176 => 25,  164 => 22,  158 => 21,  155 => 20,  150 => 19,  147 => 18,  134 => 17,  122 => 14,  115 => 13,  112 => 12,  106 => 11,  103 => 10,  90 => 9,  78 => 6,  72 => 5,  69 => 4,  64 => 3,  61 => 2,  48 => 1,  43 => 24,  40 => 16,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/macros.html.twig", "base/macros.html.twig");
    }
}
