<?php
/**
 * Created by PhpStorm.
 * User: Praktikant.STTINSM
 * Date: 12.07.2016
 * Time: 08:58
 */

// TODO -- Includes von JS und CSS (Bootstrap und JQ)


require_once ("class/class_Header.php");
$html= "";

$html.= "<link rel='stylesheet' href='css/wfPhpTester.css'>";
$html.= "<script src=\"/wfPhpTester/bower_components/jquery/dist/jquery.min.js\"></script>";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/bower_components/bootstrap/dist/css/bootstrap.min.css\">";
$html.= " <script src=\"/wfPhpTester/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>";
$html.= "<script src=\"/wfPhpTester/bower_components/jquery/dist/jquery.min.js\"></script>";
$html.= "<script src=\"script/main.js\"></script>";


$html.="

</a>
<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
  Button with data-target
</button>
<div class=\"collapse\" id=\"collapseExample\">
  <div class=\"well\">
    Tic Tac Toe is suppa!!!
  </div>
</div>
<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
      <h4 class=\"panel-title\">
        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Warum mein Tic Tac Toe das Beste ist
        </a>
      </h4>
    </div>
    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
      <div class=\"panel-body\">
       Weil es mit verschiedenen Gamemodes kommt und mit vier verschiedenen Schwierigkeitsstufen.
       Es gib außerdem einen Multiplayer-Modus!
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Tic TAc Toe
        </a>
      </h4>
    </div>
    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
      <div class=\"panel-body\">
        Nur das Beste für ihr Kind! ;)
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
          Tic Tac Toe
        </a>
      </h4>
    </div>
    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
      <div class=\"panel-body\">
        Bei Risiken und Nebenwirkungen lesen sie die Packungsbeilage oder fragen sie Arzt oder Apotheker. Batterien nicht imbegriffen!!!
      </div>
    </div>
  </div>
</div>
<div class=\"btn-group\" data-toggle=\"buttons\">
  <label class=\"btn btn-primary active\">
    <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\" checked> Tic
  </label>
  <label class=\"btn btn-primary\">
    <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\"> Tac
  </label>
  <label class=\"btn btn-primary\">
    <input type=\"radio\" name=\"options\" id=\"option3\" autocomplete=\"off\"> Toe
  </label>
</div>
<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Tooltip on left\">Tic Tac Toe</button>
<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Tooltip on top\">Toe Tac Tic</button>
<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Tooltip on bottom\">Tac Tic Toe</button>
<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Tooltip on right\">Tic Toe Tac</button>
<button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Tooltip on right\">Tac Toe Tic</button>
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">Modal title</h4>
      </div>
      <div class=\"modal-body\">
        <p>One fine body&hellip;</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">Large modal</button>
<div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      O Mane
    </div>
  </div>
</div>
<button type=\"button\" class=\"btn btn-danger btn-lg\"  data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">
<span class='glyphicon glyphicon-alert'></span> Dei Pc is hi</button>
<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      It's a prank!
    </div>
  </div>
</div>
<div class=\"dropdown\">
  <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
    Dropdown
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
    <li><a href=\"#\">Action</a></li>
    <li><a href=\"#\">Another action</a></li>
    <li><a href=\"#\">Something else here</a></li>
    <li role=\"separator\" class=\"divider\"></li>
    <li><a href=\"#\">Separated link</a></li>
  </ul>
</div>

<!-- Single button -->
<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Action <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\">
    <li><a href=\"#\">Action</a></li>
    <li><a href=\"#\">Another action</a></li>
    <li><a href=\"#\">Something else here</a></li>
    <li role=\"separator\" class=\"divider\"></li>
    <li><a href=\"#\">Separated link</a></li>
  </ul>
</div>

<div class=\"btn-group\">
  <button class=\"btn btn-default btn-lg dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Large button <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\">
    :)
  </ul>
</div>

<!-- Small button group -->
<div class=\"btn-group\">
  <button class=\"btn btn-default btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Small button <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\">
                :)
  </ul>
</div>

<!-- Extra small button group -->
<div class=\"btn-group\">
  <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Extra small button <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\">
    :)
  </ul>
</div>

<div class=\"input-group input-group-lg\">
  <span class=\"input-group-addon\" id=\"sizing-addon1\">@</span>
  <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"sizing-addon1\">
</div>

<div class=\"input-group\">
  <span class=\"input-group-addon\" id=\"sizing-addon2\">@</span>
  <input type=\"text\" class=\"form-control\" placeholder=\"Passwort\" aria-describedby=\"sizing-addon2\">
</div>

<div class=\"input-group input-group-sm\">
  <span class=\"input-group-addon\" id=\"sizing-addon3\">@</span>
  <input type=\"text\" class=\"form-control\" placeholder=\"bestätige Passwort\" aria-describedby=\"sizing-addon3\">
</div>








";
print $html;

