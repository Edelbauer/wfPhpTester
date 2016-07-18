<?php
/**
 * Created by PhpStorm.
 * User: Praktikant.STTINSM
 * Date: 12.07.2016
 * Time: 13:52
 */

$html ="";

/** Bower Components  */
$html.= "<script src=\"/wfPhpTester/bower_components/jquery/dist/jquery.min.js\"></script>";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/bower_components/bootstrap/dist/css/bootstrap.min.css\">";
$html.= " <script src=\"/wfPhpTester/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>";

$html.= "<script src=\"/wfPhpTester/bower_components/angular/angular.min.js\"></script>";
$html.="<script src=\"/wfPhpTester/bower_components/angular-route/angular-route.min.js\"></script>";


/** UserComponents  */
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/main.css\">";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/dashboard.css\">";

/** UserComponents - NG App   controller*/
$html.= "<script src=\"/wfPhpTester/script/controller/app.js\"></script>";
$html.= "<script src=\"/wfPhpTester/script/controller/index.js\"></script>";

/** Seite 1 */
$html.= "<script src=\"/wfPhpTester/views/Page1/page1.js\"></script>";
$html.= "<script src=\"/wfPhpTester/views/Page2/page2.js\"></script>";


print $html;
/** Page Content (html)*/
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body ng-controller=CtrlIndex>
<h1 class="Header" href="#">WebFactory</h1>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">SomSoft</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#page1">Page 1</a></li>
    <li><a href="#page2">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div>
</nav>

<div class="container">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">Content</div>
                <div class="panel-body" ng-view><!-- Achtung wird von NG erstellt -->></div>
            </div>
    </div>
</div>