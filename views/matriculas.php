<table style="border: 1px solid #ccc; width: 100%">
    <tr>
        <th>Nome aluno</th>
        <th>Curso</th>
        <th>Carga horária</th>
    </tr>

    <?php

    while ($linha = mysqli_fetch_array($consulta_matriculas)) {
        echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
        echo '<td>' . $linha['nome_curso'] . '</td>';
        echo '<td>' . $linha['carga_horaria'] . '</td></tr>';
    }

    ?>

</table>