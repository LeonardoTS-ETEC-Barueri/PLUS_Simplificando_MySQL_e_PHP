<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Testes</title>

    <style>
        .formularios {
            background-color: lightgray;
            border: solid black 1px;
            padding: 10px;
            width: fit-content;
        }

        .divInputs {
            padding: 10px;
            display: block;
        }

        .centerSubmitButton {
            margin: auto; display: block;
        }

        .inputBox {
            margin: 10px 0px;
            border: solid white 1px;
        }

        .text-center {
            text-align: center;
        }
    </style>

</head>
<body>

    <form id="formCadUsuario" class="formularios" action="./controllers/controller_cadastrarUsers.php" method="POST">
        <legend class="text-center"><h1>Cadastro Usuário</h1></legend>
        <div class="inputBox">
            <div class="divInputs">
                <label for="usuario"><b>Usuário</b></label>
                <input type="text" id="usuario" name="usuario" />
            </div>

            <div class="divInputs">
                <label for="usuario"><b>Senha</b></label>
                <input type="text" id="senha" name="senha"/>
            </div>
        </div>
        <input class="centerSubmitButton" type="submit">
    </form>

    <br>

    <a href="listaUsuarios.php">Lista de usuários cadastrados</a>

    <!-- Remova o comentário da tag de script para ativar a requisição AJAX. --> 
    <!-- <script type="text/javascript">

        // Essa parte deveria ser um script Javascript separado que você vai importar no seu HTML...

        // Quer ver os dados que cada parte retorna?
            // 1. Remova os comentários dos [ console.log() ].
            // 2. Abra a Ferramenta de Desenvolver do seu navegador e vá até a sessão "Console".
            // 3. Atualize a página e faça o cadastro. Observe as saídas no console.

        let form = document.querySelector('#formCadUsuario');       // Captura o formulário.
        
        form.addEventListener('submit', async (event) => {          // Faz o monitoramento do evento de Submit do formulário.

            event.preventDefault();     // Previne a execução padrão do evento (submit -> envia os dados diretamente à Action). Fazemos isso pois vamos montar o pacote de dados da requisição programaticamente.

            let campos_cadastro = new FormData();   // Inicia um conjunto de dados que será enviado na requisição assíncrona.

            form.querySelectorAll('input[name]').forEach((element) => {     // Coleta cada input do formulário.

                // console.log('Elemento detectado: ', element);

                if (element && element.value){  // Se o input possui um valor...
                    // console.log('Elemento adicionado ao conjunto de dados: ', element);
                    campos_cadastro.append(element.name, String(element.value).trim()); // Adicione o input e o valor dele no conjunto de dados (campos_cadastro).
                }
            });

            // Utilização do "fetch". API Nativa do Javascript para requisições assíncronas (AJAX).

                // console.log('Iniciando a Requisição Assíncrona (AJAX) com Fetch...');
                // console.log('Parâmetros do Fetch...');
                // console.log('form.getAttribute("action") = ', form.getAttribute('action'));
                // console.log('method: form.getAttribute("method") = ', form.getAttribute('method'));
                // let reqBody = {}
                // campos_cadastro.forEach((value, key) => {
                //     reqBody[key] = value;
                // });
                // console.log('body: ', reqBody);

            fetch(form.getAttribute('action'), {      
                method: form.getAttribute('method'),
                body: campos_cadastro
            })
            .then((headerResponse) => {
                console.log('HEADER RESPONSE:', headerResponse)
                return headerResponse.text();
            })
            .then((bodyResult) => {

                return console.log('BODY RESULT: ', bodyResult);

                if (bodyResult == 'SucessoCadastro'){   // Se a mensagem retornada pela camada Model foi "SucessoCadastro" então...
                    return alert('Usuário cadastrado com sucesso!');
                } else {    // Se não ...
                    return alert('Ops, algo deu errado!');
                }
                
            })
            .catch((error) => {
				return console.log('Não foi possível terminar a requisição HTTP.', error);
			});

        });

    </script> -->
    
</body>
</html>