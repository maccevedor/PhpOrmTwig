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

/* index.html */
class __TwigTemplate_efab90a651857f687bf0f90e0c1ba5e7a5707e2ae204b875930f4a46fad0e3e1 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/customColors.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/ion.rangeSlider.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/ion.rangeSlider.skinFlat.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/index.css\" media=\"screen,projection\" />
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Formulario</title>
</head>

<body>
    <video src=\"img/video.mp4\" id=\"vidFondo\"></video>

    <div class=\"contenedor\">
        <div class=\"card rowTitulo\">
            <h1>Bienes Intelcost</h1>
        </div>
        <div class=\"colFiltros\">
            <form action=\"#\" method=\"post\" id=\"formulario\">
                <div class=\"filtrosContenido\">
                    <div class=\"tituloFiltros\">
                        <h5>Filtros</h5>
                    </div>
                    <div class=\"filtroCiudad input-field\">
                        <p><label for=\"selectCiudad\">Ciudad:</label><br></p>
                        <select name=\"ciudad\" id=\"selectCiudad\">
                            <option value=\"\" selected>Elige una ciudad</option>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ciudades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 35
            echo "                                <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciudad"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciudad"], "nombre", [], "any", false, false, false, 35), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </select>
                    </div>
                    <div class=\"filtroTipo input-field\">
                        <p><label for=\"selecTipo\">Tipo:</label></p>
                        <br>
                        <select name=\"tipo\" id=\"selectTipo\">
                            <option value=\"\">Elige un tipo</option>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 45
            echo "                                <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tipo"], "nombre", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </select>
                    </div>
                    <div class=\"filtroPrecio\">
                        <label for=\"rangoPrecio\">Precio:</label>
                        <input type=\"text\" id=\"rangoPrecio\" name=\"precio\" value=\"\" />
                    </div>
                    <div class=\"botonField\">
                        <input type=\"submit\" class=\"btn white\" value=\"Buscar\" id=\"submitButton\">
                    </div>
                </div>
            </form>
        </div>
        <div id=\"tabs\" style=\"width: 75%;\">
            <ul>
                <li><a href=\"#tabs-1\">Bienes disponibles</a></li>
                <li><a href=\"#tabs-2\">Mis bienes</a></li>
            </ul>
            <div id=\"tabs-1\">
                <div class=\"colContenido\" id=\"divResultadosBusqueda\">
                    <div class=\"tituloContenido card\" style=\"justify-content: center;\">
                        <h5>Resultados de la búsqueda:</h5>
                        <div class=\"divider\"></div>
                    </div>
                </div>
            </div>

            <div id=\"tabs-2\">
                <div class=\"colContenido\" id=\"divResultadosBusqueda\">
                    <div class=\"tituloContenido card\" style=\"justify-content: center;\">
                        <h5>Bienes guardados:</h5>
                        <div class=\"divider\"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\" src=\"js/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"js/ion.rangeSlider.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/index.js\"></script>
        <script type=\"text/javascript\" src=\"js/buscador.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$(\"#tabs\").tabs();
            });
        </script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  100 => 45,  96 => 44,  87 => 37,  76 => 35,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/materialize.min.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/customColors.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/ion.rangeSlider.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/ion.rangeSlider.skinFlat.css\" media=\"screen,projection\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/index.css\" media=\"screen,projection\" />
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Formulario</title>
</head>

<body>
    <video src=\"img/video.mp4\" id=\"vidFondo\"></video>

    <div class=\"contenedor\">
        <div class=\"card rowTitulo\">
            <h1>Bienes Intelcost</h1>
        </div>
        <div class=\"colFiltros\">
            <form action=\"#\" method=\"post\" id=\"formulario\">
                <div class=\"filtrosContenido\">
                    <div class=\"tituloFiltros\">
                        <h5>Filtros</h5>
                    </div>
                    <div class=\"filtroCiudad input-field\">
                        <p><label for=\"selectCiudad\">Ciudad:</label><br></p>
                        <select name=\"ciudad\" id=\"selectCiudad\">
                            <option value=\"\" selected>Elige una ciudad</option>
                            {% for ciudad in ciudades %}
                                <option value='{{ ciudad.id }}'>{{ ciudad.nombre }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"filtroTipo input-field\">
                        <p><label for=\"selecTipo\">Tipo:</label></p>
                        <br>
                        <select name=\"tipo\" id=\"selectTipo\">
                            <option value=\"\">Elige un tipo</option>
                            {% for tipo in tipos %}
                                <option value='{{ tipo.id }}'>{{ tipo.nombre }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"filtroPrecio\">
                        <label for=\"rangoPrecio\">Precio:</label>
                        <input type=\"text\" id=\"rangoPrecio\" name=\"precio\" value=\"\" />
                    </div>
                    <div class=\"botonField\">
                        <input type=\"submit\" class=\"btn white\" value=\"Buscar\" id=\"submitButton\">
                    </div>
                </div>
            </form>
        </div>
        <div id=\"tabs\" style=\"width: 75%;\">
            <ul>
                <li><a href=\"#tabs-1\">Bienes disponibles</a></li>
                <li><a href=\"#tabs-2\">Mis bienes</a></li>
            </ul>
            <div id=\"tabs-1\">
                <div class=\"colContenido\" id=\"divResultadosBusqueda\">
                    <div class=\"tituloContenido card\" style=\"justify-content: center;\">
                        <h5>Resultados de la búsqueda:</h5>
                        <div class=\"divider\"></div>
                    </div>
                </div>
            </div>

            <div id=\"tabs-2\">
                <div class=\"colContenido\" id=\"divResultadosBusqueda\">
                    <div class=\"tituloContenido card\" style=\"justify-content: center;\">
                        <h5>Bienes guardados:</h5>
                        <div class=\"divider\"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type=\"text/javascript\" src=\"js/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"js/ion.rangeSlider.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/materialize.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/index.js\"></script>
        <script type=\"text/javascript\" src=\"js/buscador.js\"></script>
        <script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$(\"#tabs\").tabs();
            });
        </script>
</body>

</html>
", "index.html", "/usr/share/nginx/html/prueba/src/Templates/index.html");
    }
}
