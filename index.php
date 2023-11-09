<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Estados e Cidades</title>
</head>
<body>
    <h1>CRUD de Estados e Cidades</h1>

    <h2>Estados</h2>
    <ul>
        <li><a href="estado.php">Cadastrar Estado</a></li>
        <li><a href="estado.php?listar_estados">Listar Estados</a></li>
        <!-- Adicione links para outras operações CRUD de Estados, se necessário -->
    </ul>

    <h2>Cidades</h2>
    <ul>
        <li><a href="cidade.php">Cadastrar Cidade</a></li>
        <li><a href="cidade.php?listar_cidades">Listar Cidades</a></li>
        <!-- Adicione links para outras operações CRUD de Cidades, se necessário -->
    </ul>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
        background-color: #f4f4f4;
    }

    h2 {
        color: #333;
    }

    form {
        margin-bottom: 20px;
    }

    input, select {
        margin-bottom: 10px;
        padding: 8px;
    }

    button {
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: #4caf50;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</body>
</html>
