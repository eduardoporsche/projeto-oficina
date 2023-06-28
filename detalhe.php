<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <body>
    
    <?php
include 'includes/header.php';

?>
<div class="container">

<div class="row">
    <table>
        <thead>
            <tr>
           <th>ID</th>
           <th>Nome</th>
           <th>CPF</th>
           <th>E-mail</th>
           <th>Endereço </th>
           <th>Bairro </th>
           <th>Telefone </th>
           <th>Gerar OS </th>
    </tr>
        </thead>
        <?php
         include './conexao.php';
         $id_pesquisa = $_GET['id'];
 echo "ID selecionado: " , $id_pesquisa,"<br>";
 $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
 $restultado = mysqli_query($conn, $sql);
 while ($dados = mysqli_fetch_array($restultado)) {
        ?>
        <tbody>
             <td> <?php echo  $dados['id'] ?></td>
             <td> <?php echo $dados['nome'] ?></td>
             <td> <?php echo $dados['cpf'] ?></td>
             <td> <?php echo $dados['email'] ?></td>
             <td> <?php echo $dados['endereco'] ?></td>
             <td> <?php echo $dados['bairro'] ?></td>
             <td> <?php echo $dados['telefone'] ?></td>
             
     <td> 
      <a href="cadastro_ordem_servico.php?id=<?php echo $dados['id'] ?>">
      <i class="material-icons prefix" title="Gerar OS">content_paste
</i> 
      </a>   
     </td>   
             
          </tbody>
        
    <?php } ?>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>