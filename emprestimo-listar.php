<h1>Empréstimos Listar</h1>
<?php
    $sql = "SELECT * FROM emprestimo AS l 
            INNER JOIN livro AS b ON l.livro_id_livro = b.id_livro 
            INNER JOIN usuario AS u ON l.usuario_id_usuario = u.id_usuario 
            INNER JOIN atendente AS a ON l.atendente_id_atendente = a.id_atendente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-triped table-hover'>";
        print "<tr>";
        print "<th>Livro</th>";
        print "<th>Usuário</th>";
        print "<th>Atendente</th>";
        print "<th>Data do Emprestimo</th>";
        print "<th>Data da Devolução</th>";
        print "</tr>";

        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->livro_id_livro."</td>";
            print "<td>".$row->usuario_id_usuario."</td>";
            print "<td>".$row->id_atendente."</td>";
            print "<td>".$row->data_emprestimo."</td>";
            print "<td>".$row->data_devolucao."</td>";
            print "</tr>";
        }        
        print "</table>";
    } else {
        print "<p>Não encontrou resultado</p>";
    }
?>