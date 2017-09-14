<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_59854c5a88d745b1a07fea89f186493f80c125d906d918ce90135d177e7c9e47 extends Twig_Template
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
        $__internal_bb8ccf3571f0d597ab39ffc1ccbfa7269c498bd3e7368699390f69386a3cedda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8ccf3571f0d597ab39ffc1ccbfa7269c498bd3e7368699390f69386a3cedda->enter($__internal_bb8ccf3571f0d597ab39ffc1ccbfa7269c498bd3e7368699390f69386a3cedda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_773fe4d1231557b93191f9be4ecd5756b9e8d1c812bb58db1126a163882f7342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773fe4d1231557b93191f9be4ecd5756b9e8d1c812bb58db1126a163882f7342->enter($__internal_773fe4d1231557b93191f9be4ecd5756b9e8d1c812bb58db1126a163882f7342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_bb8ccf3571f0d597ab39ffc1ccbfa7269c498bd3e7368699390f69386a3cedda->leave($__internal_bb8ccf3571f0d597ab39ffc1ccbfa7269c498bd3e7368699390f69386a3cedda_prof);

        
        $__internal_773fe4d1231557b93191f9be4ecd5756b9e8d1c812bb58db1126a163882f7342->leave($__internal_773fe4d1231557b93191f9be4ecd5756b9e8d1c812bb58db1126a163882f7342_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "C:\\xampp\\symfonyprojects\\symfony_api_project\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
