<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM pessoas WHERE id=".$_REQUEST['id'];

        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>

    <h1> Editar </h1>

    <form action="?page=usuarioAPI" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id;?>">
        
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" value="<?php print $row->name;?>">

        <label for="pass">Senha</label>
        <input type="password" id="pass" name="pass" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php print $row->email;?>">

        <label for="birth_date">Data de nascimento</label>
        <input type="date" id="birth_date" name="birth_date" value="<?php print $row->date_of_birth;?>">

        <button type="Submit">Cadastrar</button>
    </form>
</body>
</html>