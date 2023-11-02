

<?php

include("conn.php");

$sql_request = "SELECT * FROM usuarios";

$result = $conn->query($sql_request); //execução de consulta

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "<br>". "ID: " .$row["ID"] . "<br>".  "Nome: "  .$row["nome"];
    }

}else if ($result ->num_rows == ''){
    echo "Nada encontrado";
}

if($conn ->connect_error){
    die ("Erro na conexão com o banco de dados" . $conn ->connect_error); //acessando connect_error
}








?>