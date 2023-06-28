<?php
    session_start();
    include 'includes/conexao.php';
    include 'includes/header.php';

    // Busca
    if(isset($_POST['exibir'])){
        if($_POST['exibir'] == "Ordem de Serviço"){
            if(isset($_GET['search'])){
            $data = $_GET['search'];
            $sql = "SELECT o.idOrdem, c.nome, c.telefone, c.cpf, c.telefone, o.func, o.modelo, o.placa, o.marca, o.valor_total,o.data_atual, o.data_entrega FROM cliente C INNER JOIN ordemservico O ON c.idCliente = o.fk_idCliente   WHERE idCliente='$data' or nome LIKE '%$data%' or modelo  LIKE '%$data%' or marca LIKE '%$data%' or func  LIKE '%$data%' ORDER BY idOrdem ASC";
            }
            else{
                $sql = "SELECT o.idOrdem, c.nome, c.telefone, c.cpf, c.telefone, o.func, o.modelo, o.placa, o.marca, o.valor_total,o.data_atual, o.data_entrega FROM cliente C INNER JOIN ordemservico O ON c.idCliente = o.fk_idCliente ORDER BY idOrdem ASC";
            }
        }
        elseif($_POST['exibir'] == "Cliente"){
            if(isset($_GET['search'])){
                $data = $_GET['search'];
                $sql = "SELECT * FROM cliente WHERE idCliente LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' ORDER BY idCliente ASC";
                }
                else{
                    $sql = "SELECT * FROM cliente ORDER BY idCliente ASC";
                }
        }
        $resultado = $con->query($sql);

    }
    else{
        if(isset($_GET['search'])){
            $data = $_GET['search'];
            $sql = "SELECT * FROM cliente WHERE idCliente LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' ORDER BY idCliente ASC";
        }
        else{
            $sql = "SELECT * FROM cliente ORDER BY idCliente ASC";
        }

        $resultado = $con->query($sql);
    }
?>

<head>
<title>Admin | Oficina Fortaleza</title>
    <meta charset="utf-8">
	<meta author="Kayan Tchian">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
	<!--Animation Aos -->
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">


</head>

<body>
    <!-- Sair -->
    <div  class="py-1 bg-black top">
            <div class="container">
                <div  class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            </div>
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a style="color:black" href="cadastrar.php" class="mr-3">Cadastrar Cliente</a></p>
                                <p class="mb-0 register-link"><a style="color:black" href="cadastrar_os.php" class="mr-3">Nova Ordem de Serviço</a></p>
                                <p class="mb-0 register-link"> <a style="color:black" href="sair.php" class="mr-3">Sair</a></p>
				<p class="mb-0 register-link"><a style="color:black" href="../home.php" class="mr-3">Home</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<!-- Lista -->
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-4"> <b>Painel</b> </h2>
        
        <form id="exibicao" method="post" action="" onchange="autoSubmit()">
        <div class="center">
        <div class="col-md-10">
									<div class="form-group">
									<span class="subheading">Opções de exibição</span>
						<div class="custom-control custosm-radio">
							<input type="radio" class="custom-control-input" value="Cliente" id="Cliente" name="exibir" >
							<label style="color:black" class="custom-control-label" for="Cliente">Cliente</label>
						</div>
						<div class="custom-control custosm-radio">
							<input type="radio" class="custom-control-input" value="Ordem de Serviço" id="Ordem de Serviço" name="exibir" >
							<label style="color:black" class="custom-control-label" for="Ordem de Serviço">Ordem de Serviço</label>
						</div>
			            </div>
								</div>
                                </div>
    </form>

        <!-- Barra de pesquisa -->
        <div  style="display:flex;
            justify-content: center;
            gap: .1%;" class="box-search">
            <div class="input-group">
                <input type="search" id="busca" class="form-control rounded" placeholder="Digite sua busca" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" onclick="Pesquisar()" class="btn btn-outline-primary">Pesquisar</button>
            </div>
        </div>
        </div>
        <div class="card my-3 mx-5">
    
        <table class="table">
                <thead>
                    <tr>
                <?php
                if(!empty($_POST['exibir'])){
                    if($_POST['exibir'] == "Cliente"){
                        echo '<th scope="col">Id Cliente</th>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">CPF</th>';
                        echo '<th scope="col">Email</th>';
                        echo '<th scope="col">endereco</th>';
                        echo '<th scope="col">bairro</th>';
                        echo '<th scope="col">telefone</th>';
                        
                    }
                    elseif($_POST['exibir'] == "Ordem de Serviço"){
                        echo '<th scope="col">Id Ordem</th>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">CPF</th>';
                        echo '<th scope="col">Telefone</th>';
                        echo '<th scope="col">Funcionário</th>';
                        echo '<th scope="col">Modelo</th>';
                        echo '<th scope="col">Marca</th>';
                        echo '<th scope="col">Placa</th>';
                        echo '<th scope="col">Valor Total</th>';
                        echo '<th scope="col">Data Pedido</th>';
                        echo '<th scope="col">Data Entrega</th>';
                        echo '<th scope="col">...</th>';}}
                
                    else{
                        echo '<th scope="col">Id Cliente</th>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">CPF</th>';
                        echo '<th scope="col">Telefone</th>';
                        echo '<th scope="col">Email</th>';
                        echo '<th scope="col">RG</th>';
                        echo '<th scope="col">Bairro</th>';
                        echo '<th scope="col">Rua</th>';
                        echo '<th scope="col">Número</th>';
                        echo '<th scope="col">...</th>';}
                    ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($resultado)){
                            if(!empty($_POST['exibir'])){
                                if($_POST['exibir'] == "Cliente"){
                                    echo "<tr>";
                                echo "<td>".$user_data['idCliente']."</td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['cpf']."</td>";
                                echo "<td>".$user_data['telefone']."</td>";
                                echo "<td>".$user_data['email']."</td>";
                                echo "<td>".$user_data['rg']."</td>";
                                echo "<td>".$user_data['bairro']."</td>";
                                echo "<td>".$user_data['rua']."</td>";
                                echo "<td>".$user_data['numero']."</td>";
                                echo "<td>
                                    <a class='btn btn-primary' href='editar.php?id=$user_data[idCliente]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                <a class='btn btn-danger' href='deletar.php?id=$user_data[idCliente]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                </a>
                                <a class='btn btn-danger' href='cadastrar_os.php?id=$user_data[idCliente]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-book' viewBox='0 0 16 16'>
                                <path d='M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z'/>
                                </svg>
                                    </a>
                                </td>";}
                                elseif($_POST['exibir'] == "Ordem de Serviço"){
                                    echo "<tr>";
                                    echo "<td>".$user_data['idOrdem']."</td>";
                                    echo "<td>".$user_data['nome']."</td>";
                                    echo "<td>".$user_data['cpf']."</td>";
                                    echo "<td>".$user_data['telefone']."</td>";
                                    echo "<td>".$user_data['func']."</td>";
                                    echo "<td>".$user_data['modelo']."</td>";
                                    echo "<td>".$user_data['marca']."</td>";
                                    echo "<td>".$user_data['placa']."</td>";
                                    echo "<td>".$user_data['valor_total']."</td>";
                                    echo "<td>".date("d/m/y", strtotime($user_data['data_atual']))."</td>";
                                    echo "<td>".date("d/m/y", strtotime($user_data['data_entrega']))."</td>";
                                    echo "<td>
                                        <a class='btn btn-primary' href='editar_os.php?id=$user_data[idOrdem]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                    </svg>
                                    <a class='btn btn-danger' href='deletar_os.php?id=$user_data[idOrdem]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg>
                                    </a>
                                    </td>";
    
                                    echo "</tr>";}
                                
                            }
                                else{
                                echo "<td>".$user_data['idCliente']."</td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['cpf']."</td>";
                                echo "<td>".$user_data['telefone']."</td>";
                                echo "<td>".$user_data['email']."</td>";
                                echo "<td>".$user_data['rg']."</td>";
                                echo "<td>".$user_data['bairro']."</td>";
                                echo "<td>".$user_data['rua']."</td>";
                                echo "<td>".$user_data['numero']."</td>";
                               
                                     <a class='btn btn-primary' href='editar.php?id=$user_data[idCliente]'</a> 
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                               
                                <a class='btn btn-danger' href='deletar.php?id=$user_data[idCliente]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                </a>
                                <a class='btn btn-danger' href='cadastrar_os.php?id=$user_data[idCliente]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-book' viewBox='0 0 16 16'>
                                <path d='M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z'/>
                                </svg>
                                    </a>
                                </td>";
    
                                    echo "</tr>";

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include 'footer.php';

    ?>

    <script>
    var busca = document.getElementById('busca');
        
        busca.addEventListener("keydown", function(event){
            if(event.key == "Enter"){
                Pesquisar();
            }
        });
        
        function Pesquisar(){
            window.location = 'painel.php?search=' + busca.value;
        }
        
        //Atualização automatica da pagina conforme opcao
        function autoSubmit() {
            document.getElementById("exibicao").submit();
        }
    </script>


</body>