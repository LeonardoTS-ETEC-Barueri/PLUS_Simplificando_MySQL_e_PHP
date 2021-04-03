<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Testes</title>

    <style>
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%vw;
        }

        table {
            background-color: lightgray;
            border: solid black 1px;
            border-collapse: collapse;
            margin-bottom: 20px;
            padding: 1px;
            width: 50%;
            
        }
        th, td {
            padding: 5px;
            border: solid black 1px;
            text-overflow: ellipsis;
        }

        .text-center {
            text-align: center;
        }
    </style>

</head>
<body>

    <div id="conteudo" class="content">

        <h1> Lista de usuários </h1> 

        <table>
            <tr>
                <th title="ID">ID</th>
                <th title="Usuário">Usuário</th>
                <th title="Senha">Senha</th>
            </tr>

            <?php
                include_once './models/model_listarUsers.php';
            ?>

        </table>

        <a href="index.php">Voltar</a>
    </div>

</body>
</html>