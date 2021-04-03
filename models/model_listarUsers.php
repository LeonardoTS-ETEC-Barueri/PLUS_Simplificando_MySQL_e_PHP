<?php

    // Inclusão do documento responsável pela conexão com o Banco de Dados.
        include_once 'conexao.php';
    // Fim da inclusão do documento responsável pela conexão com o BD.

    // Início do processo de busca de dados no Banco de Dados.

        $sql = $conn->prepare(" SELECT * FROM tbl_usuario ");
        
        $sql -> execute() or exit("ErroBanco");

        $result = $sql -> get_result();

        if ($result -> num_rows > 0){

            while ($row = $result -> fetch_assoc()){
               
                echo '
                <tr>
                    <td class="text-center" title="'.$row['cod_usuario'].'">'.$row['cod_usuario'].'</td> 
                    <td title="'.$row['usuario'].'">'.$row['usuario'].'</td>
                    <td title="'.$row['senha'].'">'.$row['senha'].'</td>
                </tr>
                ';

            }

        }

        $sql -> close();
        $conn -> close();

    // Fim do processo de busca de dados no Banco de Dados.
?>