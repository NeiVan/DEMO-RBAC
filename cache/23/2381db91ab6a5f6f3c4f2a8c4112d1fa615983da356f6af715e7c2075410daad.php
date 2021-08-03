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

/* index/index.html */
class __TwigTemplate_1f42781eae81120501961a6a3894f2a232c7cf30c0c1d8a33f91aa9f93822481 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "index/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "    <li class=\"am-u-sm-3\">
        <div>
            <h1>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "content", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
            <p><span>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "createtime", [], "any", false, false, false, 9), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
            <a class=\"\" href=\"/index/info/id/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">删除留言</a>
        </div>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}
{% block content %}
<ul>
    {% for val in data %}
    <li class=\"am-u-sm-3\">
        <div>
            <h1>{{ val.title }}</h1>
            <p>{{ val.content }}</p>
            <p><span>{{ val.createtime | date('Y-m-d H:i:s') }}</span></p>
            <a class=\"\" href=\"/index/info/id/{{ val.id }}\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/{{ val.id }}\">删除留言</a>
        </div>
    </li>
    {% endfor %}
</ul>

{% endblock %}", "index/index.html", "/Users/mycomputer/Desktop/demo/app/views/index/index.html");
    }
}
