<?php
include "../infra/conn.php";

session_start();

if(!isset($_SESSION["usuario"])){
  header("Location: login.php"); 
  exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
</head>
<body>
    <main>
        <div class="ttl_cadastro">
            <h1></h1>
        </div>
        <div class = "form_cadastro">
            <form action="" method="post">

            </form>
        </div>
    </main>

</body>
</html>