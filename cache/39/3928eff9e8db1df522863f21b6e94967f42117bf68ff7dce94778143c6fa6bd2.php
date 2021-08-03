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

/* index/add.html */
class __TwigTemplate_6fd5b6e8145ed807940a529f9b405e52aeb34a749fe35a48ea654f50c39c5c95 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "index/add.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<form action=\"/index/save\" method=\"POST\" class=\"am-form\">
    <fieldset>
        <legend>添加留言</legend>
        <div class=\"am-form-group\">
            <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入title\" />
        </div>
        <div style=\"margin-top: 10px;\" class=\"am-form-group\">
            <textarea name=\"content\" class=\"\"
            placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btn am-btn-default\">提交</button></p>
    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "index/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}
{% block content %}
<form action=\"/index/save\" method=\"POST\" class=\"am-form\">
    <fieldset>
        <legend>添加留言</legend>
        <div class=\"am-form-group\">
            <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入title\" />
        </div>
        <div style=\"margin-top: 10px;\" class=\"am-form-group\">
            <textarea name=\"content\" class=\"\"
            placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btn am-btn-default\">提交</button></p>
    </fieldset>
</form>

{% endblock %}", "index/add.html", "/Users/mycomputer/Desktop/demo/app/views/index/add.html");
    }
}
