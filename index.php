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

$html.= " <script src=\"/wfPhpTester/bower_components/angular/angular.min.js\"></script>";



/** UserComponents  */
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/main.css\">";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/sideMenue.css\">";
$html.= "<script src=\"/wfPhpTester/script/sideMenue.js\"></script>";
/** UserComponents - NG App  */
$html.= "<script src=\"/wfPhpTester/script/controller/app.js\"></script>";
$html.= "<script src=\"/wfPhpTester/script/controller/index.js\"></script>";

print $html;



/** Page Content */
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#page1">Page 1</a></li>
            <li><a href="#page2">Page 2</a></li>
            <!-- Trennstrich == class ="divider"-->
            <li class="divider"></li>

<!-- 2. Dropdown-Feld-->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#page1">Page 1</a></li>
                    <li><a href="#page2">Page 2</a></li>
                    <!-- Trennstrich == class ="divider"-->
                    <li class="divider"></li>

                    <li><a href="#"><input type=text ng-></a></li>
                </ul>
            </li>



            <li><a href="#"><input type=text ng-></a></li>
        </ul>
    </li>
    <li><a href="#">Page 2</a></li>
    <li><a href="#">Page 3</a></li>
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
        <div class="panel-body">

            <label>Hallo Text</label><br>
            <input type=text ng-model='txtHallo' >{{ txtHallo }}

            <hr>

            <div class="row">
                <div class="col-lg-5">
                    <form novalidate role=form id="userForm" name="userForm">
                        <div class="form-group">
                            <label>Vorname</label>
                            <input
                                required
                                name='Vorname'
                                type="text"
                                class="form-control"
                                ng-model="users.Vorname"
                                placeholder="Vorname">
                        </div>

                        <div class="form-group">
                            <label>Nachname</label>
                            <input
                                required
                                name='Nachname'
                                type="text"
                                class="form-control"
                                ng-model="users.Nachname"
                                placeholder="Nachname">
                        </div>

                        <div class="form-group">
                            <label>Adresse</label>
                            <input
                                required
                                name='Adresse'
                                type="text"
                                class="form-control"
                                ng-model="users.Adresse"
                                placeholder="Adresse">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" ng-hide="attrView" type="button" ng-click="eintragen()" ng-disabled="userForm.$invalid">Eintragen</button>
                        </div>

                        <div class='well well-lg'> {{ users }}</div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <table class="table-bordered table-hover table-condensed">
                        <thead>
                        <tr>
                            <th></th>
                            <th> Vorname </th>
                            <th> Nachname </th>
                            <th> Adresse </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="item in userData">
                            <td><button class="btn btn-success btn-xs glyphicon glyphicon-edit" ng-click="" title="Bearbeiten"></button></td>
                            <td>{{ item.Vorname }}</td>
                            <td>{{ item.Nachname }}</td>
                            <td>{{ item.Adresse }}</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
    <li class="sidebar-brand">
        <a href="#">
            WebFactory
        </a>
    </li>
    <li>
        <a href="#">Home</a>
    </li>
    <li>
        <a href="#">About</a>
    </li>
    <li>
        <a href="#">Events</a>
    </li>
    <li>
        <a href="#">Team</a>
    </li>
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Home</a>
        </li>
        <li>


        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
            <div class="unter">
                <li class="dropdown-header">Dropdown heading</li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                <li class="dropdown">

                    <!-- Unterordner in der 3. Ebene -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <div class="unter">
                            <li class="dropdown-header">Dropdown heading</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
<!-- Unterordner in der 3. Ebene -->



        </ul>
    </li>
    <li>
        <a href="#">Services</a>
    </li>
    <li>
        <a href="#">Contact</a>
    </li>
    <li>
        <a href="">Follow me</a>
    </li>
    </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
</body>







