<?php

include 'db.php';

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES ('$nome_curso', $carga_horaria)";

mysqli_query($connection, $query);

header('Location: index.php?pagina=cursos');
