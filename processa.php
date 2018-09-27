<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //redirecionar para a pagina de cadastro
        header("location: alterar.php");

        require_once 'classe/Funcionario.php';

        $n = $_GET["nome"];
        $s = $_GET["salario"];
        $id = $_GET["id"];
        $pessoa = listId($_GET["id"];);

        $f = new Funcionario();
        $f->update($id, $n, $s);
        
    ?>
</body>
</html>