<?php
	require ("db.php");
	session_start();
	if(!isset($_SESSION["nome"]) || !isset($_SESSION["senha"]) ){
        header ("Location: index.php?msg=2");
    }

	if(isset($_GET['msg'])){
			$msg = $_GET['msg'];

			switch($msg){
				case 1:
				?>
					<div class="message">
						<div class="alert alert-success">
							<a href="index.php" class="close" data-dismiss="alert">&times</a>
							Usuário cadastrado com sucesso.
						</div>
					</div>
				<?php
				break;
                case 2:
                    ?>
                    <div class="message">
                        <div class="alert alert-success">
                            <a href="index.php" class="close" data-dismiss="alert">&times</a>
                            Usuário excluido com sucesso.
                        </div>
                    </div>
                    <?php
                    break;
                case 3:
                    ?>
                    <div class="message">
                        <div class="alert alert-danger">
                            <a href="index.php" class="close" data-dismiss="alert">&times</a>
                            Erro ao excluir usuario.
                        </div>
                    </div>
                    <?php
                    break;
                case 4:
                    ?>
                    <div class="message">
                        <div class="alert alert-danger">
                            <a href="index.php" class="close" data-dismiss="alert">&times</a>
                            Necessario selecionar um usuario.
                        </div>
                    </div>
                    <?php
                    break;
			}
		}
				?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        .form-cadusu{
            max-width: 500px;
        }
        .form-cadusu input[type="password"]{
            margin-bottom: 10px;
        }

        .listagem{
            position: relative;
            height: auto;
            padding: 10px;
            font-size: 16px;
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
    <div id="page-content-wrapper">
        <div class="container-fluid">


                <form action="cadusu.php" method="post" class="form-cadusu">
                    <h2 class="form-login-heading" style="text-align: center">Cadastre o usuário</h2>
                    <label for="inputNome">Nome:</label>
                    <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome" required autofocus>
                    <label for="inputEmail">E-mail:</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
                    <label for="inputPassword">Senha:</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar</button>
                </form>


            <div class="listagem">
                <table border="2" class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>

                    <?php
                    $sql = "SELECT id, email, nome FROM usuarios";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_array()){
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td class="actions text-right">
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-danger"> Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
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