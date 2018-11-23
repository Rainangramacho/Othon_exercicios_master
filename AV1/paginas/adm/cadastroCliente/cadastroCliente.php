<html>
    <head>
        <title>Cadastro de Clientes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/cadastros.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="well well-xs" id="t50">
            <h2>Cadastro Cliente</h2>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col-xs-4" >
                    <div class="col-xs-8" id="a150">
                        <div class="well well-sm" id="a200">
                            Nome do Cliente
                        </div>
                        <input type="text" class="form-control" id="nomeCliente" placeholder="Nome" name="nomeCliente"><br>
                    </div>
                    <div class="col-xs-offset-4">
                        <br><br>
                        <input type="submit">
                        <input type='button' value='Voltar' onclick='history.go(-1)'/>
                    </div>   
                </div>
            
                <div class="col-xs-8">
                    <div class="well">
                        Dados do Cliente
                    </div>
                    <div class="col-xs-8" >
                        <div class="well well-sm" id="a200" >
                            Nome completo
                        </div>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
                    </div>
                    <div class="col-xs-4" >
                        <div class="well well-sm" id="a200" >
                            CPF
                        </div>
                        <input type="text" class="form-control" id="CPF" placeholder="Digite o CPF" name="CPF"><br>
                    </div>
                        
                    <div class="col-xs-4" >
                        <div class="well well-sm" id="a200" >
                            Data de nascimento
                        </div>
                        <input type="date" class="form-control" id="dataNascimento" placeholder="dd/mm/aaaa" name="dataNascimento">
                    </div>

                    <div class="col-xs-4" >
                        <div class="well well-sm" id="a200" >
                            Celular
                        </div>
                        <input type="text" class="form-control" id="celular" placeholder="(xx) xxxxx-xxxx" size="11" name="precoCompra">
                    </div>

                    <div class="col-xs-4" >
                        <div class="well well-sm" id="a200">
                            RG
                        </div>
                        <input type="text" class="form-control" id="RG" placeholder="Digite o RG" name="RG"><br>
                    </div>
                    <div class="col-xs-8" >
                        <div class="well well-sm" id="a200">
                            Endereço
                        </div>
                        <input type="text" class="form-control" id="logradouro" placeholder="Digite o endereço" name="endereço">
                    </div>
                    <div class="col-xs-4">
                        <div class="well well-sm" id="a200">
                            Número
                        </div>
                        <input type="number" class="form-control" id="numero" placeholder="Digite o número" name="numero"><br>
                    </div>
                    <div class="col-xs-4">
                            <div class="well well-sm" id="a200">
                                Complemento
                            </div>
                            <input type="text" class="form-control" id="complemento" placeholder="Digite o complemento" name="complemento"><br>
                    </div>
                    <div class="col-xs-4">
                            <div class="well well-sm" id="a200">
                                Bairro
                            </div>
                            <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="bairro"><br>
                    </div>
                    <div class="col-xs-4">
                            <div class="well well-sm" id="a200">
                                Cidade
                            </div>
                            <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade" name="cidade"><br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>