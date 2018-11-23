<html>
    <?php
        include "../../../config.php";
    ?>
    <head>
        <title>Cadastro de Produtos</title>
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
            <h2>Cadastro Produto</h2>
        </div> 
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xs-4" >
                        <div class="col-xs-6" id="a150">
                            <div class="well well-sm" id="a200">
                                Nome do Produto
                            </div>
                            <input type="text" class="form-control" id="nomeProduto" placeholder="Nome" name="nomeProduto"><br>
                        </div>
                        <img src="../../../imgs/pastavazia.jpg" class="img-rounded" alt="Imagem do produto" width="50%" >
                        <h5>Selecionar Produto</h5>
                        
                        <input type="file" name="imagem"><br><br>
                        <input type="submit" name="enviar">
                        <input type='button' value='Voltar' onclick='history.go(-1)'/>
                    </div>
                
                    <div class="col-xs-8">
                        <div class="well">
                            Cadastro de Produtos
                        </div>
                        <div class="col-xs-8" >
                            <div class="well well-sm" id="a200" >
                                Descrição do Produto
                            </div>
                            <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao">
                        </div>
                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200" >
                                Código do Produto
                            </div>
                            <input type="text" class="form-control" id="codigoProduto" placeholder="Código" name="codigoProduto"><br>
                        </div>
                            
                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200" >
                                Data de Validade
                            </div>
                            <input type="date" class="form-control" id="dataValidade" placeholder="dd/mm/aaaa" name="dataValidade">
                        </div>

                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200" >
                                Preço de Venda
                            </div>
                            <input type="text" class="form-control" id="precoVenda" placeholder="Preço" name="precoVenda">
                        </div>

                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200">
                                Quantidade Comprada
                            </div>
                            <input type="number" class="form-control" id="qtdComprada" placeholder="Quantidade" name="qtdComprada"><br>
                        </div>
                        <div class="col-xs-4" >
                            <div class="well well-sm" id="a200">
                                Fornecedor
                            </div>
                            <input type="text" class="form-control" id="fornecedor" placeholder="Nome do Fornecedor" name="fornecedor">
                        </div>
                    </div>
                </div>
                
                <?PHP
                if(isset($_POST["enviar"])){
                    $nomeProduto = $_POST['nomeProduto'];
                    $descricao = $_POST["descricao"];
                    $codigo = $_POST["codigoProduto"];
                    $dataValidade = $_POST["dataValidade"];
                    $precoVenda = $_POST["precoVenda"];
                    $qtdComprada = $_POST["qtdComprada"];
                    $fornecedor = $_POST["fornecedor"];
                    
                    // Recupera os dados dos campos
                    $foto = $_FILES['imagem'];
                    $nome = $foto['name'];
                    $tipo = $foto['type'];
                    $tamanho = $foto['size'];

                    // Transformando foto em dados (binário)
                    $conteudo = file_get_contents($foto['tmp_name']);
                    
                    echo "$nome<br>, $tipo<br>, $tamanho<br>";
                    // Preparando comando
                    $var1 = "INSERT INTO produto (produtoimg) VALUES ('$conteudo')";
                    $stmt = $pdo->prepare($var1);

                    // $id = (int) $_GET['id'];
 
                    // Selecionando fotos
                    // $stmt = $pdo->prepare('SELECT produtoimg FROM produtos WHERE id = $id');
                    // $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    
                    // Se executado
                    // if ($stmt->execute())
                    // {
                    //     // Alocando foto
                        // $foto = $stmt->fetchObject();
                        
                        // Se existir
                        // if ($foto != null)
                        // {
                        //     // Definindo tipo do retorno
                        //     header('Content-Type: '. $foto->tipo);
                            
                        //     // Retornando conteudo
                        //     echo $foto->conteudo;
                        // }
                    // }

                   // Definindo parâmetros
                    // $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
                    // $stmt->bindParam(':conteudo', $conteudo, PDO::PARAM_LOB);
                    // $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
                    // $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_INT);

                    // Executando e exibindo resultado
                    // echo ($stmt->execute()) ? retorno('Foto cadastrada com sucesso', true) : retorno($stmt->errorInfo());

                    // $sql = "INSERT INTO produto(nome, descricao, idcodigo, datavalidade, precovenda, qntcomprada)
                    // VALUES ('$nomeProduto','$descricao', '$codigo', '$dataValidade', '$precoVenda', '$qtdComprada')";

                    // $sql2 = "INSERT INTO fornecedor(nome) VALUES('$fornecedor')";
                    
                    // $query1 = mysqli_query($mysqli,$sql);
                    // $query2 = mysqli_query($mysqli, $sql2);

                }
                ?>
            </form>
        </div>
    </body>
</html>