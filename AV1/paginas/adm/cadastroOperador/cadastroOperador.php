<html>
    <?php
        include "../../../config.php";
    ?>
    <head>
        <title>Cadastro de Operadores</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/cadastros.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="well well-xs" id="t50">
            <h2>Cadastro Operador</h2>
        </div> 
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-4" >
                        <div class="col-xs-6" id="a150">
                            <div class="well well-sm" id="a200">
                                Nome do Operador
                            </div>
                            <input type="text" class="form-control" id="nomeOperador" placeholder="Nome" name="nomeOperador"><br>
                        </div>
                        <img src="../../../imgs/pastavazia.jpg" class="img-rounded" alt="Foto do operador" width="50%" >
                        <h5>Selecionar foto do operador</h5>        
                    
                        <input type="file" name="imagem"><br><br>
                        <input type="submit" name="enviar">
                        <input type='button' value='Voltar' onclick='history.go(-1)'/>
                    </div>
                
                    <div class="col-xs-8">
                        <div class="well">
                            Dados do Operador
                        </div>
                        <div class="col-xs-8">
                            <div class="well well-sm" id="a200" >
                                Nome completo
                            </div>
                            <input type="text" class="form-control" id="nomeCompleto" placeholder="Digite o nome" name="nomeCompleto">
                        </div>
                        <div class="col-xs-4">
                            <div class="well well-sm" id="a200" >
                                CPF
                            </div>
                            <input type="text" class="form-control" id="CPF" placeholder="Digite o CPF" name="CPF"><br>
                        </div>
                            
                        <div class="col-xs-4">
                            <div class="well well-sm" id="a200" >
                                Data de nascimento
                            </div>
                            <input type="date" class="form-control" id="dataNascimento" placeholder="dd/mm/aaaa" name="dataNascimento">
                        </div>

                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200" >
                                Celular
                            </div>
                            <input type="text" class="form-control" id="celular" placeholder="(xx) xxxxx-xxxx" size="11" name="celular">
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
                            <input type="text" class="form-control" id="logradouro" placeholder="Digite o endereço" name="logradouro">
                        </div>
                        <div class="col-xs-4">
                            <div class="well well-sm" id="a200">
                                Número
                            </div>
                            <input type="text" class="form-control" id="numero" placeholder="Digite o número" name="numero"><br>
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
                
                <?PHP 
                if(isset($_POST["enviar"])){
                    $nomeOperador = $_POST['nomeOperador'];
                    $nomeCompleto = $_POST["nomeCompleto"];
                    $cpf = $_POST["CPF"];
                    $dataNascimento = $_POST["dataNascimento"];
                    $celular = $_POST["celular"];
                    $rg = $_POST["RG"];
                    $logradouro= $_POST["logradouro"];
                    $numero = $_POST["numero"];
                    $complemento = $_POST["complemento"];
                    $bairro = $_POST["bairro"];
                    $cidade = $_POST['cidade'];
                    // $foto = $_POST["imagem"];


                    $sql = "INSERT INTO operador(nome, nomecompleto, cpf, rg, datanasc, endereco, numero, complemento)
                    VALUES ('$nomeOperador', '$nomeCompleto', '$cpf', '$rg', '$dataNascimento', '$logradouro', '$numero', '$complemento')";
                    $sql2 = "INSERT INTO contato(celular) VALUES('$celular')";
                    $sql3 = "INSERT INTO bairro(nome) VALUES('$bairro')";
                    $sql4 = "INSERT INTO cidade(nome) VALUES('$cidade')";
                    
                    $query4 = mysqli_query($mysqli,$sql4);
                    $query3 = mysqli_query($mysqli,$sql3);
                    $query2 = mysqli_query($mysqli,$sql2);
                    $query1 = mysqli_query($mysqli,$sql);
                }
                ?>
            </form>
        </div>
    </body>
</html>