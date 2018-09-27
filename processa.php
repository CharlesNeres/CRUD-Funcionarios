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
        header("location: index.php");

        require_once 'classe/Funcionario.php';

        $n = $_GET["nome"];
        $s = $_GET["salario"];
        $id = $_GET["id"];
        $action = $_GET["action"];

        $f = new Funcionario();

        switch ($action){
            case "insert":
                $f->save($n, $s);          
                break;

            case "update":
                $f->update($id, $n, $s);         
                break;
            
            case "remove":
                $f->remove($id); 
                break;

            default:
                echo "Error";
                break;
        }


        
        
        
    ?>
</body>
</html>