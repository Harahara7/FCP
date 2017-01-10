<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../jQuery-ui/jquery-ui.css">
    <script type="javascript" src="../jQuery-ui/external/jquery/jquery.js"></script>
    <script type="javascript" src="../jQuery-ui/jquery-ui.min.js"></script>
    <script type="javascript">
        $("document").ready(function () {
            $("#datepicker").datepicker()

        });

    </script>


    <title>Cadastrar</title>

</head>

<style>
    textarea {
        resize: none;
        overflow: auto;
    }
</style>
<body class="container">

<h2>Cadastrar Evento</h2>
<hr>

<form class="form-inline" method="post" action="../controller/testeCtrl.php">
    <input type="hidden" name="sOP" value="cadastro">


    <label>Nome:</label>
    <br>
    <input class="form-control" autofocus="autofocus" maxlength="80" placeholder="Maximo de Caractéres 80" type="text"
           name="nome">
    <br>
    <br>
    <label>Descrição:</label>
    <br>
    <textarea class="form-control" placeholder="Caracteres Maximos 255" maxlength="255" cols="30" rows="5"
              name="descricao"></textarea>
    <br>
    <br>
    <label>Horário:</label>
    <br>
    <input type="text" name="horario" placeholder="aaaa-dd-mm hh:mm:ss" class="form-control">
    <br>
    <br>
    <label>Preço:</label>
    <br>
    <input type="text" name="horario" placeholder="Ex. 10.5" class="form-control">
    <br>
    <br>
    <input class="btn-success btn-lg" type="submit" value="Cadastrar">

</form>
</body>
</html>
