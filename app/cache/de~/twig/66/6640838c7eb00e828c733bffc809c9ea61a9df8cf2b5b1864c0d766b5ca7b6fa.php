<?php

/* MyAlphabusBundle:AfficheAffectation:cheraffectations.html.twig */
class __TwigTemplate_ee3740fc345f9b6089f464e79bb8b021ba15d4fe1bd86aba48537b5ea8e72f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:AfficheAffectation:cheraffectations.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12fc2b9714ae3a084f6b3725141f530ff7c003d732e7f4734d96a4daa472d274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fc2b9714ae3a084f6b3725141f530ff7c003d732e7f4734d96a4daa472d274->enter($__internal_12fc2b9714ae3a084f6b3725141f530ff7c003d732e7f4734d96a4daa472d274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:AfficheAffectation:cheraffectations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12fc2b9714ae3a084f6b3725141f530ff7c003d732e7f4734d96a4daa472d274->leave($__internal_12fc2b9714ae3a084f6b3725141f530ff7c003d732e7f4734d96a4daa472d274_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50da5e3dd559a15df04d50039f36273d5d80cbeb4f1c800f4b7d1a16fa6a3e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50da5e3dd559a15df04d50039f36273d5d80cbeb4f1c800f4b7d1a16fa6a3e97->enter($__internal_50da5e3dd559a15df04d50039f36273d5d80cbeb4f1c800f4b7d1a16fa6a3e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:AfficheAffectation:cheraffectations";
        
        $__internal_50da5e3dd559a15df04d50039f36273d5d80cbeb4f1c800f4b7d1a16fa6a3e97->leave($__internal_50da5e3dd559a15df04d50039f36273d5d80cbeb4f1c800f4b7d1a16fa6a3e97_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88b830a7f682dfa21267cc0336a4d060424a0fe3afbf0cc42215c2436414fb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b830a7f682dfa21267cc0336a4d060424a0fe3afbf0cc42215c2436414fb26->enter($__internal_88b830a7f682dfa21267cc0336a4d060424a0fe3afbf0cc42215c2436414fb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"container\">
      <h1>Welcome to the AfficheAffectation:cheraffectations page</h1>
        <form>
            <table class=\"table\">
              <thead>
                <tr>
                <th>N° Serie Alpha</th>
                <th>Date Réception</th>
                <th>N° Clients</th>
                <th>N° Chassis</th>
            </tr>
            </thead>

            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["affectation"] ?? $this->getContext($context, "affectation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 24
            echo "                <tr>

                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "seriealpha", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "dateaffectation", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nclients", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "chassis", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                <tr><td>Aucune Affectation  n''a été trouvé.</td></tr>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>
    </form>
</div>












";
        
        $__internal_88b830a7f682dfa21267cc0336a4d060424a0fe3afbf0cc42215c2436414fb26->leave($__internal_88b830a7f682dfa21267cc0336a4d060424a0fe3afbf0cc42215c2436414fb26_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:AfficheAffectation:cheraffectations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  101 => 32,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MyAlphabusBundle:AfficheAffectation:cheraffectations{% endblock %}

{% block body %}



    <div class=\"container\">
      <h1>Welcome to the AfficheAffectation:cheraffectations page</h1>
        <form>
            <table class=\"table\">
              <thead>
                <tr>
                <th>N° Serie Alpha</th>
                <th>Date Réception</th>
                <th>N° Clients</th>
                <th>N° Chassis</th>
            </tr>
            </thead>

            <tbody>
            {% for st in affectation %}
                <tr>

                    <td>{{ st.seriealpha }}</td>
                    <td>{{ st.dateaffectation|date('d-m-Y') }}</td>
                    <td>{{ st.nclients  }}</td>
                    <td>{{ st.chassis }}</td>
                </tr>
            {% else %}
                <tr><td>Aucune Affectation  n''a été trouvé.</td></tr>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </form>
</div>












{% endblock %}
", "MyAlphabusBundle:AfficheAffectation:cheraffectations.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/AfficheAffectation/cheraffectations.html.twig");
    }
}
