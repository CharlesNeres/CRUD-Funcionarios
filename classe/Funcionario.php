<?php



class Funcionario {
    private $nome;
    private $salario;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function save($nome, $salario) {
        

        require_once 'config/conexao.php';

        $query = "insert into funcionarios (nome, salario) values ('{$nome}', {$salario})";
                
        if (mysqli_query($link, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . mysqli_error($link);
        }

        
        //fechando a conexao
        mysqli_close($link);
        /*nao eh obrigado fechar a conexao porque quando o servidor devolve a requisicao ja eh fechado*/
    }
         
    public function update($id, $nome, $salario) {    
        require_once 'config/conexao.php';       

        $query = "update funcionarios set nome='{$nome}', salario={$salario} where id = {$id}";

        if (mysqli_query($link, $query)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
        
        mysqli_close($link);
    }
         
    public function remove($id) {
        require_once 'config/conexao.php';

        $query = "delete from funcionarios where id = {$id}";

        if (mysqli_query($link, $query)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($link);
        }
        
        mysqli_close($link);

    }
         
    public function listAll() {
        // logica para listar toodos os clientes do banc'
        require_once 'config/conexao.php';

        $query = "select * from funcionarios";
        $resultado = mysqli_query($link, $query);

        if (mysqli_num_rows($resultado) > 0) {
                    // output data of each row
            while($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row["id"] ."</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["salario"] . "</td>";
                // echo "<td>"."<input type='hidden' value=". $row["id"] .">"."</td>"; testar depois
                echo "<td><button class='remover'>Remover</button></td>";
                echo "<td><button class='alterar'>Alterar</button></td>";
                echo "<tr>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($link);

    }
}