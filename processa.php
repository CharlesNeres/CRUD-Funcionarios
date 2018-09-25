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
        header("location: cadastro.html");

        require_once 'classe/Funcionario.php';

        $n = $_GET["nome"];
        $s = $_GET["salario"];
        $id = $_GET["id"];

        $f = new Funcionario();
        $f->save($n, $s);
        
    ?>
</body>
</html>