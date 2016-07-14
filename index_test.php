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



$html.="<script>
$(function() {

});
</script>";

$header = new Header(4,"Hallo");
$header->setLabel("Ueberschrift");
$html .= $header->getHtml();

$header = new Header(3,"Test");
$html .= $header->getHtml();

$header = new Header(3,"Test");
$html .= $header->getHtml();

$header = new Header(3,"Test");
$html .= $header->getHtml();

$header = new Header(3,"Test");
$html .= $header->getHtml();

/** Erstellen der Seite  */
print $html;