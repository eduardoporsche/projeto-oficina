<?php
    include 'includes/header.php';
    ?>


<div class="container">

                    <div class="row height d-flex justify-content-center align-items-center">

                      <div class="col-md-8">
                      <form action="exibir.php" method="post">
                        <div class="search">
                          <i class="fa fa-search"></i>
                          <input type="text" class="form-control" placeholder="Faça sua pesquisa">
                          <button class="btn btn-primary">Pesquisar</button>
                        </div>

                        </div>
      <h6 class="blue-text lighten-5">Clientes cadastrados: </h6>
            <table>
                <thead class="">
                <th>ID</th>
                <th>Nome</th>
                </thead>
                <?php
                include 'includes/conexao.php';
                $nome_pesquisa = @$_POST['nome_pesquisa'];
                
                $sql = "SELECT * FROM cliente WHERE nome LIKE '%".$nome_pesquisa."%'";
                $restultado = mysqli_query($con, $sql);
                while ($dados = mysqli_fetch_array($restultado)) {
                    ?>
                <tbody>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td> 
                      <a href="detalhe.php?id=<?php echo $dados['id'] ?>">
                        <i class="material-icons prefix">format_list_bulleted</i> 
                      </a>   
                    </td>
                    
                    <td> 
                      <a href="cadastro_ordem_servico.php?id=<?php echo $dados['id'] ?>">
                          <i class="material-icons prefix" title="ADD OS">add_circle</i> 
                      </a>   
                    </td>
                    
                    
                </tbody>
                <?php } ?>
                        




                      </div>
                      
                    </div>
                </div>