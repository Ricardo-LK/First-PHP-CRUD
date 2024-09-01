<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Catalogo </h1>

    <?php
        $sql = "SELECT * FROM pessoas";
        $res = $conn->query($sql);

        $qtd = $res->num_rows;
        if ($qtd > 0)
        {
            print "<table>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Email</th>";
                print "<th>Data de nascimento</th>";
                print "<th>Ações</th>";
                while ($row = $res->fetch_object())
                {
                    print "<tr>";
                        print "<td>$row->id </td>";
                        print "<td>$row->name </td>";
                        print "<td>$row->email </td>";
                        print "<td>$row->date_of_birth</td>";
                        print "<td>
                                <button onclick=\"location.href='?page=editarUsuario&acao=editar&id=".$row->id."'\">Editar</button>
                                <button onclick=\"(confirm('Tem certeza que deseja apagar o usuario?')) ? location.href='?page=usuarioAPI&acao=excluir&id={$row->id}' : false;\">Excluir</button>
                              </td>";

                    print "</tr>";
                }
            print "</table>";

        }   
        else {
            print "<p>Nenhum usuario encontrado</p>";
        }
    ?>
</body>
</html>