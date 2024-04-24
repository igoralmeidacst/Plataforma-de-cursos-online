<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$db = "pederato";

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($connection, $query);

$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($connection, $query);

$query = "SELECT alunos.nome_aluno, cursos.nome_curso, cursos.carga_horaria
            FROM alunos, cursos, aluno_curso
            WHERE aluno_curso.id_aluno = alunos.id_aluno
            AND aluno_curso.id_curso = cursos.id_curso
            || cursos.carga_horaria = aluno_curso.id_carga_horaria";
$consulta_matriculas = mysqli_query($connection, $query);
