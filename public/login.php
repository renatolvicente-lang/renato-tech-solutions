<?php
include "../infra/conn.php";

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = ?";

    if($stmt = $conn -> prepare($sql)){
        $stmt -> bind_param("s", $email);

        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $usuario = $result->fetch_assoc();

            $_SESSION["usuario"] = $usuario["nome"];
            $_SESSION["cargo"] = $usuario["cargo"];

            header("Location: ../index.php");
            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RTS</title>
    
  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Ícones (Font Awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="../assets/style/style.css">
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
        <div class="card_login">
            <div class="fm_login">
                <div>
                    <h1>Login</h1>
                </div>
                <form action="" method="POST">
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
                        <button type="submit">Logar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>