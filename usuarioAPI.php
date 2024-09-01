<?php

switch ($_REQUEST["acao"])
{
    case "criar":
            $name = $_POST["name"];
            $pass = md5($_POST["pass"]);
            $email = $_POST["email"];
            $birth_date = $_POST["birth_date"];

            $sql = "INSERT INTO pessoas (name, pass, email, date_of_birth) VALUES ('{$name}', '{$pass}', '{$email}', '{$birth_date}')";

            $res = $conn->query($sql);
            if ($res) 
            {
                print "<script>alert('Cadastrado com Sucesso!')</script>";
                print "<script>location.href='?page=catalogo'</script>";
            }
            else{
                print "<script>alert('Falha ao Cadastrar!')</script>";
                print "<script>location.href='index.php'</script>";
            }

            break;

        case "editar":
            $name = $_POST["name"];
            $pass = md5($_POST["pass"]);
            $email = $_POST["email"];
            $birth_date = $_POST["birth_date"];


            $sql = "UPDATE pessoas SET name          = '{$name}',
                                       pass          = '{$pass}',
                                       email         = '{$email}',
                                       date_of_birth = '{$birth_date}'
                    WHERE id={$_REQUEST["id"]}";

            $res = $conn->query($sql);
            if ($res) 
            {
                print "<script>alert('Editado com Sucesso!')</script>";
                print "<script>location.href='?page=catalogo'</script>";
            }
            else{
                print "<script>alert('Falha ao Editar!')</script>";
                print "<script>location.href='index.php'</script>";
            }
            break;

        case "excluir":
            $sql = "DELETE FROM pessoas WHERE id={$_REQUEST["id"]}";

            $res = $conn->query($sql);
            if ($res) 
            {
                print "<script>alert('Cadastrado Excluido com Sucesso!')</script>";
                print "<script>location.href='?page=catalogo'</script>";
            }
            else{
                print "<script>alert('Falha ao Excluir Cadastro!')</script>";
            }
            break;
    }
?>