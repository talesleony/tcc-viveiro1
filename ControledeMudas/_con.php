<?php

$host = 'localhost'; // host q vai rodar
$nome = 'root'; // seu usuario, no xampp é o root
$senha = ''; // n tem senha no xampp
$database = 'Teste1'; //nome do banco de dados


$mysqli = new mysqli($host, $nome, $senha, $database);

// if p ver se a conexao deu certo
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}




//$result = $mysqli->query("SELECT * FROM mudas;");

//if ($result) {
    //if ($result->num_rows > 0) {
        //while ($row = $result->fetch_assoc()) {
            //echo "ID Muda: " . $row['id_muda'] . "<br>";
            //echo "ID Lote: " . $row['id_lote'] . "<br>";
            //echo "Muda: " . $row['muda'] . "<br>";
            //echo "Substrato: " . $row['substrato'] . "<br>";
            //echo "Data de Plantio: " . $row['dataPlantio'] . "<br>";
            //echo "Data de Colheita: " . $row['dataColheita'] . "<br>";
            //echo "Quantidade: " . $row['quantidade'] . "<br>";
            //echo "<hr>"; // Uma linha horizontal para separar os resultados
        //}
    //} else {
       // echo "nd encontrado.";
    //}
//} else {
    //echo "erro: " . $mysqli->error;
//}

