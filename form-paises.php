<?php require "header.php"?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Destino</h1>
                    </div>
                    <br>
                    <p class="display-4">
                    <strong>Destino do Formulário (inserção)</strong>
                    </p>
                    <br>
	
                    <?php
                    $nome = empty($_POST['nome'] ?? 'Não informado') ? 'Não informado' : $_POST['nome'];
                    $populacao = empty($_POST['populacao'] ?? 'Não informado') ? 'Não informado' : $_POST['populacao'];
                    $imagem = empty($_POST['imagem'] ?? 'Não informado') ? 'Não informado' : $_POST['imagem'];
                    $continente = empty($_POST['continente'] ?? 'Não informado') ? 'Não informado' : $_POST['continente'];
                    ?>

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome:</strong> <?php echo $nome; ?></li>
                        <li class="list-group-item"><strong>População:</strong> <?php echo $populacao; ?></li>
                        <li class="list-group-item"><strong>Imagem:</strong> <?php echo $imagem; ?></li>
                        <li class="list-group-item"><strong>Continente:</strong> <?php echo $continente; ?></li>
                    </ul>
                    <br>
                    <?php
    				require "conection.php";
                    $sql = "INSERT INTO `paises`(`nome`, `bandeira`, `continente`, `populacao`) VALUES (?,?,?,?)";
                    $stmt = $conn->prepare($sql);
                    $result = $stmt->execute([$nome, $imagem, $continente, $populacao]);

                    if($result == true){
                        // deu certo o insert
                        ?>
                        <div class="alert alert-sucess" role="alert"><h4>Dados gravados com sucesso.</h4></div>
                        <?php

                    }else{
                        ?>
                        <div class="alert alert-danger" role="alert"><h4>Falha ao efetuar gravação.</h4>
                        <p><?= $stmt->error; ?></p>
                        </div>
                        <?php
                        // nao deu certo, erro

                    }
                    ?>
                    <a href="formulario.php" class="btn btn-primary">Voltar</a>
                    <?php
                    require "footer.php"?>
