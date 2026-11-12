<?php
include "../../infra/conn.php";

session_start();

$id = $_GET["id"];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($id){ 
        $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
        
        if($stmt = $conn -> prepare($sql)){
            $stmt -> bind_param("sssi", $nome, $email, $senha, $id);
        }else{
            echo "Não foi possivel Atualizar";
        }
    }else{
        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES (?,?,?)";
        
        if($stmt = $conn -> prepare($sql)){
        $stmt -> bind_param("sss", $nome, $email, $senha);

        $stmt->execute();

        header("Location: ../../index.php");
        exit();
    
        }else{
            echo "Não foi possivel Cadastrar";
        }
    }


    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - RTS</title>
    
  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Ícones (Font Awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="../../assets/style/style.css">
</head>
<body>
    <span class="blob blob-tl"></span>
    <span class="blob blob-tr"></span>
    <br>
    <span class="blob blob-bl"></span>
    <span class="blob blob-br"></span>

    <main>
        <div class="ttl_login">
            <h1>Renato <span class="destaque">Tech Solutions</span></h1>
        </div>
        <div class="card_cad">
            <div class="fm_login">
                <div>
                    <h1>
                        <?php
                            if($id){
                                echo ("Atualizar");
                            }else{
                                echo ("Cadastrar");
                            }
                        ?>
                    </h1>       
                </div>
                <form action="" method="POST">
                    <div class="content_login">
                        <label for="nome">Nome:</label><br>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <br>
                    <div class="content_login">
                        <label for="email">Email:</label><br>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <br>
                    <div class="content_login">
                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <br>
                    <div class="content_login">
                        <p>Caso você tenha conta <a href="login.php" class="destaque">clique aqui</a> para logar.</p>
                    </div>
                    <br>
                    <div class="content_login">
                        <button type="submit" class="btn_login"><?php
                            if($id){
                                echo "Atualizar";
                            }else{
                                echo "Cadastrar";
                            }
                        ?></button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>