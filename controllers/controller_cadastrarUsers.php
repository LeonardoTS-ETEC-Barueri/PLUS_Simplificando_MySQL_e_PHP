<?php

    // Controller Teste - Fará a validação dos dados.

    /*
        A entrada de dados dos usuários está sendo enviada 
        através do formulário via método POST do HTTP (Hypertext Transfer Protocol).

        Vamos analisar os dados acessando as variáveis globais do PHP de dados enviados via método HTTP POST [ $_POST ].

        Essa análise retornará mensagens, as mensagens devem ser pequenas, pois podem ser recebida por requisições [ assíncronas ] com AJAX (Assyncronous Javascript).

        Depois de analisar os dados, se eles não forem inválidos, nós capturamos os dados atribuindo-os à variávels.
        
        Sobre as mensagens e requisições assíncronas:

            Dependendo da mensagem recebida pela requisição assíncrona, o Javascript pode executar algo na página
            como exibir uma mensagem legal pro usuário informando que o cadastro foi realizado com sucesso.
    */

    // Início das Validações dos valores digitados nos campos pelo usuário.
        // Observe que estamos analisando os valores digitados pelo usuário diretamente, acesando as variáveis globais do PHP para dados enviados via POST.

        if (empty($_POST['usuario'])){   // "empty()" - Função do PHP para verificar se a variável está vazia ou é null.
            exit('NomeVazio');  // Retorna a mensagem e encerra a execução do script. Similar à " return echo('NomeVazio'); "
        }

        if (empty($_POST['senha'])){
            exit('SenhaVazia');
        }

    // Fim das validações.

    // Tudo certo! Capturando os dados das variáveis globais que contém os valores digitados pelo usuário por meio do formulário.

        $usuario = $_POST['usuario'];       // Se você capturar esses valores antes das validações acima, a mensagem retornada pelo controller possuirá erros do PHP ao invés da mensagem que você definiu e isso dificultará a possibilidade de disparar certas ações via requisição assíncrona.
        $senha = $_POST['senha'];
   
    // Fim da captura dos dados enviados via formulário.

    // Inclusão do Model, responsável por efetivar o cadastro do usuário no Banco de Dados.

        include_once '../models/model_cadastrarUsers.php';
        // Se todas as verificações deste controller não resultarem em "exit(mensagemDeErro)"... O código continuará sua execução no Model.

    // Fim da inclusão do Model.

?>