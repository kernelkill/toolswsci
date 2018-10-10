<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 08/10/18
 * Time: 11:06
 */
require("db.php");
session_start();
if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"]) ){
    header ("Location: index.php?msg=2");
}

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Joabe Kachorroski">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <title>WS-TOOLS</title>

    <style>
        body{

            background-image: url("img/back_1.jpg");
            background-repeat: no-repeat;
            background-size: auto;
            background-attachment: scroll;
        }
    </style>

</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                   WS  TOOLS
                </a>
            </li>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="tools.php">Tools</a>
            </li>
            <li>
                <a href="form_cadusu.php">Cadastro</a>
            </li>
            <li>
                <a href="#">Serviços</a>
            </li>
            <li>
                <a href="logout.php"> Sair</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ferramenta</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>OFFICE 2013 W32</td>
                    <td>740MB</td>
                    <td>Office Completo Atualizado</td>
                    <td><button type="button" class="btn btn-outline-success">DOWN</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Ativador OFFICE 2013</td>
                    <td>49MB</td>
                    <td>Ativador do OFFICE 2013 Atualizado</td>
                    <td><button type="button" class="btn btn-outline-success">DOWN</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Service Pack Windows 7</td>
                    <td>1,50G</td>
                    <td>Service Pack para Windows 7 64 e 32.</td>
                    <div class="btn-group" >
                        <td><button type="button" class="btn btn-outline-success">DOWN-x32</button>
                        <button type="button" class="btn btn-outline-success">DOWN-x64</button></td>
                    </div>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Firefox 51</td>
                    <td>42MB</td>
                    <td>Firefox 32bits com suporte a plugins como java e outros plugins.</td>
                    <td><a href="tools_/FirefoxSetup51.0.exe"><button type="button" class="btn btn-outline-success">DOWN</button></a></td>
                </tr>
                </tbody>
            </table>
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle" style="background-color: #337ab7">DASHBOARD</a>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>