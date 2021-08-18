<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body class="grad">
    <h1 id="titulo">Gerenciador de Tarefas</h1>
    <!-- Aqui irá o restante do código -->
    <div class="box">
    <form class="form">
        <fieldset>
            <legend> Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" id="fundo-forms" />
            </label>
            <input type="submit" value="Cadastrar" / >
        </fieldset>
    </form>
    <?php

        if(array_key_exists('nome', $_GET)){
            $_COOKIE['lista_tarefas'][] = $_GET['nome'];
        }

        $lista_tarefas = [];

        if(array_key_exists('lista_tarefas', $_COOKIE)){
            $lista_tarefas = $_COOKIE['lista_tarefas'];
        }
    ?>

    <table> 
        <tr>
            <th id="Tarefas">Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
        <?php endforeach; ?>
    
    </table>
</div>
<footer>
<h2 id ="copyright"> &copy; Leonardo Paschoa e Lucas Passos. Todos o direitos reservados </h2>
</footer>
</body>
</html>