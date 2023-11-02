<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form method = "POST" action = "index.php">
       <label>Nome</label>
       <input type  = "text" name  = "name">
       <input type ="submit" value  = "enviar dados">
    </form>

    <button id = "btGet" >Obter dados</button>

    <div id = "resultado" style="background-color: blue;">

    </div>

</body>
<script src = "get_data.js" type = "text/javascript"></script>

</html>



<?php

include_once ('conn.php');


$name_user = ($_POST['name']);
$search = ($_POST['name']);

if($conn ->connect_error){
    die ("Erro na conexão com o banco de dados" . $conn ->connect_error); //acessando connect_error
}else{

    $user = "INSERT INTO usuarios (nome) VALUES ('$name_user')";
    echo "<br>";
    echo "<b>" .$name_user ."</b>" . " foi enviado com sucesso !";
}





$sql_request = mysqli_query($conn, $user);




?>