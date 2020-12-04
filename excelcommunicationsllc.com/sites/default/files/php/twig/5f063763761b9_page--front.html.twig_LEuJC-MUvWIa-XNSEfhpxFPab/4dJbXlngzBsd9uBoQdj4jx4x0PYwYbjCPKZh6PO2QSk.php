<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/excel/templates/page--front.html.twig */
class __TwigTemplate_7e14ce2398fc039e1b92373d6cc4e019c390521db5596c65cf814b6af14e35e7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "
";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "toparea", [])), "html", null, true);
        echo "
";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliderarea", [])), "html", null, true);
        echo " 
";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "welcomearea", [])), "html", null, true);
        echo "
<section id=\"teamArea\">
";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "maparea", [])), "html", null, true);
        echo "   
";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "introarea", [])), "html", null, true);
        echo "
</section>
";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "workarea", [])), "html", null, true);
        echo "



<section id=\"contactArea\">
        <div id=\"map\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26631.611380401653!2d-79.93077946256325!3d35.88041335995572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88531281cec5b425%3A0x998d9cbaf2f4e0f4!2s9107+US-311%2C+High+Point%2C+NC+27263!5e1!3m2!1sen!2sus!4v1522264926552\" style=\"border:0\" width=\"100%\" height=\"650\" frameborder=\"0\"></iframe>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contactform", [])), "html", null, true);
        echo "
                </div>
                <div class=\"col-sm-3 col-sm-offset-4 map-block\">
                    <h4 style=\"border: none !important; text-align: center;\">Contact Information</h4>
                    <h4><small style=\"text-decoration: none;\">Virginia, North Carolina, South Carolina (N) </small></h4>
                    <address>
                        <i class=\"fa fa-home\"></i> PO Box 14589, Archdale, NC<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27263, USA<br />
                        <i class=\"fa fa-phone\"></i> <a href=\"tel:1+336+932+3578\" title=\"Click to call us\"> (336) 932-3578<br />
                            <i class=\"fa fa-phone\"></i> <a href=\"tel:1+336+257+4517\" title=\"Click to call us\"> (336)-257-4517</a><br />
                    </address>
                    <h4><small>South Carolina (S), Georgia</small></h4>
                    <address>
                        <p><i class=\"fa fa-user\"></i> Rep: Ronnie Mason<br />
                            <i class=\"fa fa-phone\"></i> <a href=\"tel:1+910+813+5323\">910-813-5323</a></p>
                    </address>
                    <h4 style=\"border: none !important; text-align: center;\">General Email</h4>
                    <address>
                        <i class=\"fa fa-envelope\"></i> <a href=\"mailto:info@excelcommunicationsllc.com\" title=\"email us\">info@excelcommunicationsllc.com</a>
                    </address>
                </div>
            </div>
        </div>
    </section>

";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/excel/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 99,  98 => 74,  84 => 63,  79 => 61,  75 => 60,  70 => 58,  66 => 57,  62 => 56,  58 => 55,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/excel/templates/page--front.html.twig", "/home/jjunderrzd/excelcommunicationsllc.com/themes/custom/excel/templates/page--front.html.twig");
    }
}
