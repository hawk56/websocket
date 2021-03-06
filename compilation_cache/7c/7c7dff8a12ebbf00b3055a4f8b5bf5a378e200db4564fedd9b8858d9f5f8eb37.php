<?php

/* books.html.twig */
class __TwigTemplate_e36a319d48554db1f982fe36ccc276dcff4a720dd629b732ea3b7a44811a16a5 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <script src=\"vendor/components/jquery/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/script.js\"></script>
</head>
<body>
<style type=\"text/css\">
    <!--
    .chat_wrapper {
        width: 500px;
        margin-right: auto;
        margin-left: auto;
        background: #CCCCCC;
        border: 1px solid #999999;
        padding: 10px;
        font: 12px 'lucida grande',tahoma,verdana,arial,sans-serif;
    }
    .chat_wrapper .message_box {
        background: #FFFFFF;
        height: 150px;
        overflow: auto;
        padding: 10px;
        border: 1px solid #999999;
    }
    .chat_wrapper .panel input{
        padding: 2px 2px 2px 5px;
    }
    .system_msg{color: #BDBDBD;font-style: italic;}
    .user_name{font-weight:bold;}
    .user_message{color: #88B6E0;}
    -->
</style>

";
        // line 42
        $this->loadTemplate("header.html.twig", "books.html.twig", 42)->display($context);
        // line 43
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            <p>Список пользователей</p>
            <ul class=\"userList\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "                    <li id=\"list_user_id_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </ul>
        </div>
        <div class=\"col-md-10\">
            <h3>Окно чата</h3>
        </div>
    </div>
</div>



";
        // line 62
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                user: <div id=\"user_name\" data-id=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</div>

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"chat_wrapper\">
                    <div class=\"message_box\" id=\"message_box\"></div>
                    <div class=\"panel\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your Name\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" maxlength=\"10\" disabled/>
                            </div>
                            <div class=\"col-md-3\">
                                <select class=\"form-control\" id=\"users_list\">
                                    <option value=\"0\" selected>Всем</option>
                                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </select>
                            </div>
                            <div class=\"col-md-4\">
                                <input class=\"form-control\" type=\"text\" name=\"message\" id=\"message\" placeholder=\"Message\" maxlength=\"80\" />
                            </div>
                            <div class=\"col-md-2\">
                                <button id=\"send-btn\" class=\"btn btn-success\">Send</button>
                            </div>
                        </div>


            </div>
        </div>
    </div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 84,  133 => 82,  129 => 81,  121 => 76,  105 => 65,  100 => 62,  88 => 51,  75 => 49,  71 => 48,  64 => 43,  62 => 42,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="ru">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Document</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link rel="stylesheet" href="css/bootstrap.css">*/
/*     <link rel="stylesheet" href="css/style.css">*/
/*     <script src="vendor/components/jquery/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js"></script>*/
/*     <script src="js/script.js"></script>*/
/* </head>*/
/* <body>*/
/* <style type="text/css">*/
/*     <!--*/
/*     .chat_wrapper {*/
/*         width: 500px;*/
/*         margin-right: auto;*/
/*         margin-left: auto;*/
/*         background: #CCCCCC;*/
/*         border: 1px solid #999999;*/
/*         padding: 10px;*/
/*         font: 12px 'lucida grande',tahoma,verdana,arial,sans-serif;*/
/*     }*/
/*     .chat_wrapper .message_box {*/
/*         background: #FFFFFF;*/
/*         height: 150px;*/
/*         overflow: auto;*/
/*         padding: 10px;*/
/*         border: 1px solid #999999;*/
/*     }*/
/*     .chat_wrapper .panel input{*/
/*         padding: 2px 2px 2px 5px;*/
/*     }*/
/*     .system_msg{color: #BDBDBD;font-style: italic;}*/
/*     .user_name{font-weight:bold;}*/
/*     .user_message{color: #88B6E0;}*/
/*     -->*/
/* </style>*/
/* */
/* {% include 'header.html.twig' %}*/
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-md-2">*/
/*             <p>Список пользователей</p>*/
/*             <ul class="userList">*/
/*                 {% for user in users %}*/
/*                     <li id="list_user_id_{{ user.id }}" data-id="{{ user.id }}">{{ user.username }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-md-10">*/
/*             <h3>Окно чата</h3>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {# OLD #}*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-2">*/
/*                 user: <div id="user_name" data-id="{{ id }}">{{ name }}</div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="chat_wrapper">*/
/*                     <div class="message_box" id="message_box"></div>*/
/*                     <div class="panel">*/
/*                         <div class="row">*/
/*                             <div class="col-md-3">*/
/*                                 <input class="form-control" type="text" name="name" id="name" placeholder="Your Name" value="{{ name }}" maxlength="10" disabled/>*/
/*                             </div>*/
/*                             <div class="col-md-3">*/
/*                                 <select class="form-control" id="users_list">*/
/*                                     <option value="0" selected>Всем</option>*/
/*                                     {% for user in users %}*/
/*                                         <option value="{{ user.id }}">{{ user.username }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="col-md-4">*/
/*                                 <input class="form-control" type="text" name="message" id="message" placeholder="Message" maxlength="80" />*/
/*                             </div>*/
/*                             <div class="col-md-2">*/
/*                                 <button id="send-btn" class="btn btn-success">Send</button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
