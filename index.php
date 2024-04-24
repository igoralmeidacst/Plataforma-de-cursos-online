<?php

#Base de dados:
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}
if ($pagina == 'cursos') {
    include 'views/cursos.php';
} elseif ($pagina == 'alunos') {
    include 'views/alunos.php';
} elseif ($pagina == 'inserir_curso') {
    include 'views/inserir_curso.php';
} elseif ($pagina == 'matriculas') {
    include 'views/matriculas.php';
} elseif ($pagina == 'politica_privacidade') {
    include 'views/politica_privacidade.php';
} elseif ($pagina == 'quem_somos') {
    include 'views/quem_somos.php';
} elseif ($pagina == 'fale_conosco') {
    include 'views/fale_conosco.php';
} elseif ($pagina == 'termos') {
    include 'views/termos.php';
} elseif ($pagina == 'logica_programacao') {
    include 'views/logica_programacao.php';
} elseif ($pagina == 'php_basico') {
    include 'views/php_basico.php';
} elseif ($pagina == 'python_basico') {
    include 'views/python_basico.php';
} elseif ($pagina == 'js_basico') {
    include 'views/js_basico.php';
} elseif ($pagina == 'html_css_avancado') {
    include 'views/html_css_avancado.php';
} else {
    include 'views/home.php';
}

#Rodapé
include 'footer.php';