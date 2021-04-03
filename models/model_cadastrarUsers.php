<?php

    // Inclusão do documento responsável pela conexão com o Banco de Dados.
        include_once 'conexao.php';
    // Fim da inclusão do documento responsável pela conexão com o BD.

    // Início do processo de inclusão de dados no Banco de Dados.

        $sql = $conn->prepare(" INSERT INTO tbl_usuario
                                   (usuario, senha)
                                VALUES
                                    (?, ?) ");
            // "$sql" recebe o objeto contendo as funções que permitem a manipulação do comando preparado sobre a conexão.

            /*
             Também podemos entender da seguinte forma: A conexão -> prepara o comando SQL...
             O comando SQL preparado da conexão entrega uma interface de manipulação do comando SQL pra variável "$sql"...

             A variável "$sql" agora pode executar funções providas por essa interface...
            */
        
        $sql -> bind_param("ss", $usuario, $senha);
            // bind_param('umTipoPraCadaValorEmOrdem', variavelValor_1, variavelValor2, etc..);

            // Note que "bind_param()" é uma função da interface de manipulação gerada pela função de preparação do comando SQL na conexão... Doideira né?
            // A seta "->" serve pra acessar essa interface (contida agora em $sql) e executar a função.

        $sql -> execute() or exit("ErroBanco");
            // Execute o comando SQL preparado, se não for possível, envie a mensagem "ErroBanco".

        echo "SucessoCadastro";     // Envie a mensagem "SucessoCadastro" se tudo der certo.

        $sql -> close();    // Encerre a conexão.
        $conn -> close();   // Encerre a conexão.

        exit(); // Encerra o documento sem retornar mais nada.

    // Fim do processo de inclusão de dados no Banco de Dados.
?>