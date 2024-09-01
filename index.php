<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <br>
    <br>
    <a href="index.php">Home</a>
    <br>
    <br>
    <a href="?page=catalogo">Ver catalogo</a>
    <br>
    <br>
    <a href="?page=cadastro">Cadastrar</a>

    <?php
    include("config.php");
        switch(@$_REQUEST["page"])
        {
            case "catalogo":
                print "<br><br>";
                include("catalogo.php");
                break;

            case "cadastro":
                print "<br><br>";
                include("cadastro.php");
                break;

            case "usuarioAPI":
                include("usuarioAPI.php");
                break;

            case "editarUsuario":
                include("editarUsuario.php");
                break;

            default:
                print "<h1>Floricultura</h1>";
        }
    ?>
</body>
</html>