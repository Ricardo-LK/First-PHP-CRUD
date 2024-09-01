<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cadastro </h1>

    <form action="?page=usuarioAPI" method="POSt">
        <input type="hidden" name="acao" value="criar">
        
        <label for="name">Nome</label>
        <input type="text" id="name" name="name">

        <label for="pass">Senha</label>
        <input type="password" id="pass" name="pass">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="birth_date">Data de nascimento</label>
        <input type="date" id="birth_date" name="birth_date">

        <button type="Submit">Cadastrar</button>
    </form>
</body>
</html>