<?php

/* boucle.html */
class __TwigTemplate_4ef4da66196be75881615910447cd783cefff56c2221d890378e15c4848bc750 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Mes boucles</title>
    </head>
    <body>
        
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "    i ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</br>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "    a ";
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "boucle.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  48 => 13,  44 => 12,  41 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Mes boucles</title>*/
/*     </head>*/
/*     <body>*/
/*         */
/* {% for i in 0..10 %}*/
/*     i {{ i }}*/
/* {% endfor %}*/
/* </br>*/
/* {% for a in 0..100 %}*/
/*     a {{ a }}*/
/* {% endfor %}*/
/*     </body>*/
/* </html>*/
