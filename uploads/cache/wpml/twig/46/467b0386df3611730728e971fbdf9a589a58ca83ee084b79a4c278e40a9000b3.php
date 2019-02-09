<?php

/* log.twig */
class __TwigTemplate_b52af0108422a53b748c573f2d2345a49cdc91faee26ad03e43a74db4a676f2b extends Twig_Template
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
        echo "<!--suppress CssInvalidPropertyValue, CssOverwrittenProperties -->
<div class=\"icl_tm_wrap\" style=\"overflow: auto;\">
\t<p>
\t\t";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "header", array()), "html", null, true);
        echo "
\t</p>
\t";
        // line 6
        if (($context["rows"] ?? null)) {
            // line 7
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["urls"] ?? null), "switch_mode", array()), "html", null, true);
            echo "\" class=\"button-secondary\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "switch_mode", array()), "html", null, true);
            echo "</a>
\t\t</p>
\t\t<table class=\"widefat\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["header_key"] => $context["header_label"]) {
                // line 14
                echo "\t\t\t\t\t<th scope=\"col\" class=\"manage-column manage-column-";
                echo twig_escape_filter($this->env, $context["header_key"], "html", null, true);
                echo "\" style=\"font-size:10px;\">
\t\t\t\t\t\t";
                // line 15
                echo twig_escape_filter($this->env, $context["header_label"], "html", null, true);
                echo "
\t\t\t\t\t</th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header_key'], $context['header_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["header_key"] => $context["header_label"]) {
                // line 23
                echo "\t\t\t\t\t<th scope=\"col\" class=\"manage-column manage-column-";
                echo twig_escape_filter($this->env, $context["header_key"], "html", null, true);
                echo "\" style=\"font-size:10px;\">
\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, $context["header_label"], "html", null, true);
                echo "
\t\t\t\t\t</th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['header_key'], $context['header_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t</tr>
\t\t\t</tfoot>
\t\t\t<tbody>
\t\t\t";
            // line 30
            $context["row"] = 0;
            // line 31
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["log_item"]) {
                // line 32
                echo "\t\t\t\t<tr class=\"";
                echo (((0 == ($context["row"] ?? null) % 2)) ? ("alternate") : (""));
                echo "\">
\t\t\t\t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
                foreach ($context['_seq'] as $context["header_key"] => $context["header_label"]) {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    $context["item_value"] = (($this->getAttribute($context["log_item"], $context["header_label"], array(), "array", true, true)) ? ($this->getAttribute($context["log_item"], $context["header_label"], array(), "array")) : (""));
                    // line 35
                    echo "\t\t\t\t\t\t<td class=\"column-";
                    echo twig_escape_filter($this->env, $context["header_key"], "html", null, true);
                    echo "\" style=\"font-size:10px; overflow-wrap: break-word; word-wrap: break-word; -ms-word-break: break-all; word-break: break-all; word-break: break-word; -ms-hyphens: auto; -moz-hyphens: auto; -webkit-hyphens: auto; hyphens: auto;\">
\t\t\t\t\t\t\t";
                    // line 36
                    if (call_user_func_array($this->env->getFunction('is_url')->getCallable(), array(($context["item_value"] ?? null)))) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, ($context["item_value"] ?? null), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log_item"], "Title", array()), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_test_iterable(($context["item_value"] ?? null))) {
                            // line 40
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["sub_items_count"] = twig_length_filter($this->env, ($context["item_value"] ?? null));
                            // line 41
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["sub_items_index"] = 1;
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["item_value"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["item_value_sub_item"]) {
                                // line 43
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $context["item_value_sub_item"], "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t\t";
                                // line 44
                                if ((($context["sub_items_index"] ?? null) < ($context["sub_items_count"] ?? null))) {
                                    // line 45
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 47
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                $context["sub_items_index"] = (($context["sub_items_index"] ?? null) + 1);
                                // line 48
                                echo "\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_value_sub_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 49
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, ($context["item_value"] ?? null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 52
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 54
                    $context["row"] = (($context["row"] ?? null) + 1);
                    // line 55
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['header_key'], $context['header_label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t</tbody>
\t\t</table>
\t\t<form method=\"post\" id=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["misc"] ?? null), "ui_key", array()), "html", null, true);
            echo "-form\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["misc"] ?? null), "ui_key", array()), "html", null, true);
            echo "-form\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["urls"] ?? null), "main", array()), "html", null, true);
            echo "\">
\t\t\t<p>
\t\t\t\t<input class=\"button-secondary\" type=\"submit\" name=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["misc"] ?? null), "ui_key", array()), "html", null, true);
            echo "-clear\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "clear_log", array()), "html", null, true);
            echo "\">&nbsp;<input class=\"button-secondary\" type=\"submit\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["misc"] ?? null), "ui_key", array()), "html", null, true);
            echo "-export-csv\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "export_csv", array()), "html", null, true);
            echo "\">
\t\t\t</p>
\t\t</form>
\t";
        } else {
            // line 66
            echo "\t\t<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "empty_log", array()), "html", null, true);
            echo "</strong>
\t";
        }
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 68,  215 => 66,  202 => 62,  193 => 60,  189 => 58,  182 => 56,  176 => 55,  174 => 54,  171 => 53,  168 => 52,  162 => 50,  159 => 49,  153 => 48,  150 => 47,  146 => 45,  144 => 44,  139 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  117 => 37,  115 => 36,  110 => 35,  107 => 34,  103 => 33,  98 => 32,  93 => 31,  91 => 30,  86 => 27,  77 => 24,  72 => 23,  68 => 22,  62 => 18,  53 => 15,  48 => 14,  44 => 13,  34 => 8,  31 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--suppress CssInvalidPropertyValue, CssOverwrittenProperties -->
<div class=\"icl_tm_wrap\" style=\"overflow: auto;\">
\t<p>
\t\t{{ strings.header }}
\t</p>
\t{% if rows %}
\t\t<p>
\t\t\t<a href=\"{{ urls.switch_mode }}\" class=\"button-secondary\">{{ strings.switch_mode }}</a>
\t\t</p>
\t\t<table class=\"widefat\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t{% for header_key, header_label in headers %}
\t\t\t\t\t<th scope=\"col\" class=\"manage-column manage-column-{{ header_key }}\" style=\"font-size:10px;\">
\t\t\t\t\t\t{{ header_label }}
\t\t\t\t\t</th>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t{% for header_key, header_label in headers %}
\t\t\t\t\t<th scope=\"col\" class=\"manage-column manage-column-{{ header_key }}\" style=\"font-size:10px;\">
\t\t\t\t\t\t{{ header_label }}
\t\t\t\t\t</th>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t\t</tfoot>
\t\t\t<tbody>
\t\t\t{% set row = 0 %}
\t\t\t{% for log_item in rows %}
\t\t\t\t<tr class=\"{{ row is divisible by(2) ? 'alternate' : '' }}\">
\t\t\t\t\t{% for header_key, header_label in headers %}
\t\t\t\t\t\t{% set item_value = log_item[header_label] is defined ? log_item[header_label] : '' %}
\t\t\t\t\t\t<td class=\"column-{{ header_key }}\" style=\"font-size:10px; overflow-wrap: break-word; word-wrap: break-word; -ms-word-break: break-all; word-break: break-all; word-break: break-word; -ms-hyphens: auto; -moz-hyphens: auto; -webkit-hyphens: auto; hyphens: auto;\">
\t\t\t\t\t\t\t{% if is_url(item_value) %}
\t\t\t\t\t\t\t\t<a href=\"{{ item_value }}\" target=\"_blank\">{{ log_item.Title }}</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% if item_value is iterable %}
\t\t\t\t\t\t\t\t\t{% set sub_items_count = item_value|length %}
\t\t\t\t\t\t\t\t\t{% set sub_items_index = 1 %}
\t\t\t\t\t\t\t\t\t{% for item_value_sub_item in item_value %}
\t\t\t\t\t\t\t\t\t\t{{ item_value_sub_item }}
\t\t\t\t\t\t\t\t\t\t{% if sub_items_index < sub_items_count %}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% set sub_items_index = sub_items_index + 1 %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ item_value }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% set row = row + 1 %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<form method=\"post\" id=\"{{ misc.ui_key }}-form\" name=\"{{ misc.ui_key }}-form\" action=\"{{ urls.main }}\">
\t\t\t<p>
\t\t\t\t<input class=\"button-secondary\" type=\"submit\" name=\"{{ misc.ui_key }}-clear\" value=\"{{ strings.clear_log }}\">&nbsp;<input class=\"button-secondary\" type=\"submit\" name=\"{{ misc.ui_key }}-export-csv\" value=\"{{ strings.export_csv }}\">
\t\t\t</p>
\t\t</form>
\t{% else %}
\t\t<strong>{{ strings.empty_log }}</strong>
\t{% endif %}
</div>
", "log.twig", "/nas/content/staging/madicomain/wp-content/plugins/wpml-translation-management/templates/jobs-pickup-logger/log.twig");
    }
}
