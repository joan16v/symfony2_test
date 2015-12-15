<?php

/* AcmeStoreBundle:Default:show.html.twig */
class __TwigTemplate_aa42b5c0d7a84da0cf3df5af3ea172c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Show</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
        <th>desc</th>
    </tr>

    <tr>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "id"), "html", null, true);
        echo "</td>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
        echo "</td>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "price"), "html", null, true);
        echo "</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "description"), "html", null, true);
        echo "</td>
    </tr>

</table>";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
