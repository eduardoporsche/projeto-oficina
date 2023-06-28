<?php 
	session_start();
		
    if(!empty($_GET['id']))
    {
        include_once '../includes/conexao.php';

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cliente WHERE idCliente = $id";
        $resultado = $con->query($sqlSelect);


        if($resultado-> num_rows >0)
        {   
            while($user_data = mysqli_fetch_assoc($resultado))
            {
            $nome = $user_data['nome'];
            $cpf = $user_data['cpf'];
            $telefone = $user_data['telefone'];
            $email = $user_data['email'];
            $rg = $user_data['rg'];
            $bairro = $user_data['bairro'];
            $rua = $user_data['rua'];
            $numero = $user_data['numero'];

        }
            
        }
        else{
            header("location: painel.php");
        }
    }
    else{
        header("location: painel.php");
    }
    
?>


<head>
    <title>Cadastrar | Oficina Fortaleza</title>
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
	<!--voltar -->
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a style="color:black" href="painel.php" class="mr-3">Voltar</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    
    <!-- Agendar -->
	<form action="saveedit.php" method="post" class="appointment-form"> 
   <center>
        <section id="veiculo-cadastro" class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-color:#252525;">
                <div class="container">
                        <div class="col-md-12 col-lg-10 py-5 ftco-animate heading-section heading-section-white">
                            <span style="color:white" class="subheading">faça o cadastro do</span>
                            <h2 style="color:white" class="mb-4">Cliente</h2>
    				
    					<div class="row">
    						
						<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control" placeholder="Nome Completo">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="cpf" value="<?php echo $cpf ?>" maxlength="14" id="cpf" onkeypress="cpf_maskara()" class="form-control" placeholder="CPF">
			            </div>
								</div>
						
							
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="text" id="telefone" minlength="14" maxlength="14" value="<?php echo $telefone ?>" onkeypress="telefone_mask()" class="form-control" name="telefone" placeholder="Telefone">
			
							</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="email"  class="form-control" value="<?php echo $email ?>" name="email" placeholder="Email">
			
							</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="text"  class="form-control" name="rg" value="<?php echo $rg ?>" placeholder="RG">
			
							</div>
			    				</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									<input type="text" name="bairro" class="form-control" value="<?php echo $bairro ?>" placeholder="Bairro">
		            		
							</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="text" name="rua" class="form-control" value="<?php echo $rua ?>" placeholder="Rua">
								
							</div>
			    				</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="number" name="numero" class="form-control" value="<?php echo $numero ?>" placeholder="Nº">
								
							</div>
			    				</div>
								</div>
								<div class="col-md-12">
								<input type="hidden" name="id" value=<?php echo $id ?>>
								<button type="submit" name="update" class="btn btn-dark py-3 px-4">Atualizar</button>
									<div class="form-group">
			              </div>
								</div>
    					</div>
		    			</form>
			          </div>
			        </div>
					</center>
		</section>

  
  <!-- animações/loader-->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <!-- Inputs Máscara-->
  <script src="../js/mask.js"></script>
</body>