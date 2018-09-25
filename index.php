<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
    <style>

        

        table{
           width: 70%;
           margin: 0 auto; 
        }

        table, th, td {
            border: 1px solid black;
        }

        table td{
            text-align: left;            
            padding: 15px;
        }

        button{
            border: none;
            color: #fff;
            padding: 5px;
            border-radius: 2px; 
            cursor: pointer;
        }

        .remover{
            background-color:red;
        }

        .alterar{
            background-color:green;
        }
    </style>
</head>

<body>

    <?php
        require_once 'classe/Funcionario.php';
        $f = new Funcionario();       

    ?>
    <header>
        <nav>
            <a href="index.php">inicio</a>
            <a href="cadastro.html">cadastrar produto</a>
        </nav>
    </header>
        <table>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>salario</th>
                <th>remover</th>
                <th>alterar</th>
            </tr>      
           
            <?php $f->listAll();?>                  
            
        </table>
    
</body>

</html>