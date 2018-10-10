<?php
require ("db.php");
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
                   WS TOOLS
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
            <h1>Bem Vindo ao Sistema <?php echo $_SESSION['nome'] ?>.</h1>
            <p>Sistema desenvolvido para gerenciar ferramentas, ferramentas essas usadas no dia a dia do técnico de informatica, tal como softwares, Office, Cracks e etc.</p>
            <p>O sistema é bem simples, em vez de ficar passando softwares pela rede ou por drive, aqui centralizaremos tudo.</code>.</p>
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