<?php
include 'includes/header.php'
?>


<?php
include 'developers.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
 <div class="row d-flex justify-content-center align-items-center h-100">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>Id</th>
         <th>Nome</th>
         <th>Cpf</th>
         <th>Email</th>
         <th>Endereco/th>
         <th>Bairro</th>
         <th>Telefone</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['nome']??''; ?></td>
      <td><?php echo $data['cpf']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['endereco']??''; ?></td>
      <td><?php echo $data['bairro']??''; ?></td>
      <td><?php echo $data['telefone']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
