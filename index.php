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
$html.= "<script src=\"/wfPhpTester/js/main.js\"></script>";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/bower_components/bootstrap/dist/css/bootstrap.min.css\">";
$html.= " <script src=\"/wfPhpTester/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>";

$html.= " <script src=\"/wfPhpTester/bower_components/angular/angular.min.js\"></script>";



/** UserComponents  */
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/main.css\">";
$html.= "<link rel=\"stylesheet\" href=\"/wfPhpTester/css/sideMenue.css\">";
$html.= "<script src=\"/wfPhpTester/script/sideMenue.js\"></script>";
/** UserComponents - NG App   controller*/
$html.= "<script src=\"/wfPhpTester/script/controller/app.js\"></script>";
$html.= "<script src=\"/wfPhpTester/script/controller/index.js\"></script>";


/**
 * einbinden der dashboard Teile
 */
$html.= "<script src=\"/wfPhpTester/js/zusatz-script.js\"></script>";
$html.="script src=\"/wfPhpTester/js/main.js\"></sript";
/*
 *einbinden?!
 *
 */




print $html;
/** Page Content (html)*/
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







<!-- start:Left Menu -->
<div id="left-menu">
    <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
                <h1 class="animated fadeInLeft">21:00</h1>
                <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>
            <li class="active ripple">
                <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                    <li><a href="dashboard-v2.html">Dashboard v.2</a></li>





                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-diamond fa"></span> Layout
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="topnav.html">Top Navigation</a></li>
                    <li><a href="boxed.html">Boxed</a></li>
                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-area-chart fa"></span> Charts
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="chartjs.html">ChartJs</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="sparkline.html">SparkLine</a></li>
                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Ui Elements  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="color.html">Color</a></li>
                    <li><a href="weather.html">Weather</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="panels.html">Panels & Tabs</a></li>
                    <li><a href="notifications.html">Notifications & Tooltip</a></li>
                    <li><a href="badges.html">Badges & Label</a></li>
                    <li><a href="progress.html">Progress</a></li>
                    <li><a href="sliders.html">Sliders</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="modal.html">Modals</a></li>
                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="formelement.html">Form Element</a></li>
                    <li><a href="#">Wizard</a></li>
                    <li><a href="#">File Upload</a></li>
                    <li><a href="#">Text Editor</a></li>
                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="datatables.html">Data Tables</a></li>
                    <li><a href="handsontable.html">handsontable</a></li>
                    <li><a href="tablestatic.html">Static</a></li>
                </ul>
            </li>
            <li class="ripple"><a href="calendar.html"><span class="fa fa-calendar-o"></span>Calendar</a></li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="mail-box.html">Inbox</a></li>
                    <li><a href="compose-mail.html">Compose Mail</a></li>
                    <li><a href="view-mail.html">View Mail</a></li>
                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Pages  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="forgotpass.html">Forgot Password</a></li>
                    <li><a href="login.html">SignIn</a></li>
                    <li><a href="reg.html">SignUp</a></li>
                    <li><a href="article-v1.html">Article v1</a></li>
                    <li><a href="search-v1.html">Search Result v1</a></li>
                    <li><a href="productgrid.html">Product Grid</a></li>
                    <li><a href="profile-v1.html">Profile v1</a></li>
                    <li><a href="invoice-v1.html">Invoice v1</a></li>
                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="view-mail.html">Level 1</a></li>
                    <li><a href="view-mail.html">Level 1</a></li>
                    <li class="ripple">
                        <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                        <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="credits.html">Credits</a></li>
        </ul>
    </div>
</div>
<!-- end: Left Menu -->





<div id="mainContent">






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




































































<!-- start: content -->
<div id="content" class="content">
    <div class="col-md-12" style="padding:20px;">
        <div class="col-md-12 padding-0">
            <div class="col-md-8 padding-0">
                <div class="col-md-12">
                    <div class="panel box-v4">
                        <div class="panel-heading bg-white border-none">
                        </div>
                        <div class="panel-body padding-0">
                            <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                                AUSLASTUNG DER MASCHINEN
                            </div>
                            <div class="calendar">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 padding-0">
                    <div class="col-md-6">
                        <div class="panel box-v1">
                            <div class="panel-heading bg-white border-none">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left"><br>Auslastung</h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <h4>
                                        <span class="icon-user icons icon text-right"></span>
                                    </h4>
                                </div>
                            </div>


                            <div class="panel-body text-center">
                                <h1>1%</h1>
                                <p>Maschine 1</p>
                                <hr/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel box-v1">
                            <div class="panel-heading bg-white border-none">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left"><br>Auslastung2</h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <h4>
                                        <span class="icon-basket-loaded icons icon text-right"></span>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <h1>{{data.Auslastung2}}99%</h1>
                                <p>Maschine 2</p>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="col-md-12 padding-0">
                    <div class="panel box-v2">
                        <div class="panel-heading padding-0">

                            <div class="box-v2-detail">

                                <h4>Akihiko Avaron</h4>
                            </div>
                        </div>


                        <!--Feld-->
                        <div class ="stuecke">
                        <div class="panel-body">
                            <div class="col-md-12 padding-0 text-center">
                                <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                    <h3>2.000</h3>
                                    <p>Heute</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                    <h3>17.573</h3>
                                    <p>Woche</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 padding-0">
                                    <h3>67.456</h3>
                                    <p>Monat</p>
                                </div>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-12 padding-0">
                    <div class="panel box-v3">
                        <div class="panel-heading bg-white border-none">
                            <h4>Report</h4>
                        </div>
                        <div class="panel-body">

                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-folder icons" style="font-size:2em;"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Document Handling</h5>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-pie-chart icons" style="font-size:2em;"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">UI/UX Development</h5>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-energy icons" style="font-size:2em;"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Server Optimation</h5>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-user icons" style="font-size:2em;"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">User Status</h5>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="media-left">
                                    <span class="icon-fire icons" style="font-size:2em;"></span>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Firewall Status</h5>
                                    <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer bg-white border-none">
                            <center>
                                <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none"/>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel bg-green text-white">
                <div class="panel-body">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="maps" style="height:300px;">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <canvas class="doughnut-chart hidden-xs"></canvas>
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <h1>72.993</h1>
                                <p>People</p>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <h1>12.000</h1>
                                <p>Active</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






</div>