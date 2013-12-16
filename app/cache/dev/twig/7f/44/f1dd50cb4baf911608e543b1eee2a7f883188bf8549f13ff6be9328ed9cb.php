<?php

/* EnsJobeetBundle:Pages:contactEmail.txt.twig */
class __TwigTemplate_7f44f1dd50cb4baf911608e543b1eee2a7f883188bf8549f13ff6be9328ed9cb extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "<header>
    <h1>Contact symblog</h1>
</header>

";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "Jobeet-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"jobeet-notice\">
        ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<p>Want to contact symblog?</p>

";
        // line 17
        echo "
";
        // line 19
        echo "A contact enquiry was made by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".

Reply-To: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email"), "html", null, true);
        echo "
Subject: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject"), "html", null, true);
        echo "
Body:
";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Pages:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  64 => 22,  60 => 21,  52 => 19,  49 => 17,  44 => 13,  35 => 10,  32 => 9,  28 => 8,  22 => 4,  19 => 2,);
    }
}
