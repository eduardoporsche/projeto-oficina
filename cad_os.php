<?php 
    session_start();
    include 'includes/header.php';
    include 'includes/conexao.php';
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
    <form action="savecadastro_os.php" method="post" class="appointment-form"> 
        <center>
        <section id="veiculo-cadastro" class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-color:#252525;">
                <div class="container">
                        <div class="col-md-12 col-lg-10 py-5 ftco-animate heading-section heading-section-white">
                            <span style="color:white" class="subheading">faça o cadastro do</span>
                            <h2 style="color:white" class="mb-4">Veículo</h2>
    				
    					<div class="row">
    						
						<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="modelo" class="form-control" placeholder="Modelo">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                    <input type="text" name="marca" class="form-control" placeholder="Marca">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
                                    <input type="text" name="placa" class="form-control" placeholder="Placa"></div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="quilometragem"  class="form-control" name="email" placeholder="Quilometragem">
			
							</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			    
			            		<input type="number"  class="form-control" name="ano_fabricacao" placeholder="Ano fabricação">
			
						
								</div>
    					</div>
		    			
			          </div>
					</center>
                    
		</section>

        <center>
        <section id="pecas-cadastro" class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-md-6 justify-content-end">
            <div class="container">
                        <div class="col-md-12 col-lg-10 py-5 ftco-animate heading-section heading-section-white">
                            <span style="color:black" class="subheading">faça o cadastro das</span>
                            <h2 style="color:black" class="mb-4">Peças</h2>
    				
    					<div class="row">
    						
						<div class="col-md-10">
									<div class="form-group">
			              <input type="text" name="descricao1" class="form-control" placeholder="Descrição">
			            </div>
								</div>

								<div class="col-md-2">
									<div class="form-group">
			              <input type="text" name="valor1" valor class="form-control" placeholder="Valor">
			            </div>
								</div>
						<div class="col-md-10">
									<div class="form-group">
			              <input type="text" name="descricao2" class="form-control" placeholder="Descrição">
			            </div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
			              <input type="text" name="valor2"  valor class="form-control" placeholder="Valor">
			            </div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
			              <input type="text" name="descricao3" class="form-control" placeholder="Descrição">
			            </div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
			              <input type="text" name="valor3"  valor class="form-control" placeholder="Valor">
			            </div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
			              <input type="text" name="descricao4" class="form-control" placeholder="Descrição">
			            </div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
			              <input type="text" name="valor4"  valor class="form-control" placeholder="Valor">
			            </div>
								</div>
								<div class="col-md-10">
									<div class="form-group">
			              <input type="text" name="descricao5" class="form-control" placeholder="Descrição">
			            </div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
			              <input type="text" name="valor5"  valor class="form-control" placeholder="Valor">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<center>
									<span class="subheading">Valor total</span>
			              <input type="text" id="resultado" name="valor_total" class="form-control" placeholder="Total"></center>
			            </div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
									<span class="subheading">status</span>
						<div class="custom-control custosm-radio">
							<input type="radio" class="custom-control-input" value="pago" id="pago" name="status" >
							<label style="color:black" class="custom-control-label" for="pago">Pago</label>
						</div>
						<div class="custom-control custosm-radio">
							<input type="radio" class="custom-control-input" value="não pago" id="npago" name="status" >
							<label style="color:black" class="custom-control-label" for="npago">Não Pago</label>
						</div>
			            </div>
								</div>
									
    			</div>
    		</div>
    	</div>
</center>
    </section>
<center>
    <section id="veiculo-cadastro" class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-color:#252525;">
                <div class="container">
                        <div class="col-md-12 col-lg-10 py-5 ftco-animate heading-section heading-section-white">
                            <span style="color:white" class="subheading">Finalizando o</span>
                            <h2 style="color:white" class="mb-4">Cadastro</h2>
                            <div class="row">
						<div class="col-md-12">
									<div class="form-group">
			              <input type="text" name="valor_servico" class="form-control" placeholder="Valor de Serviço">
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <select name="idCliente" class="form-control">
	                      	<option  value="">Selecione um cliente</option>
							  <?php
							  if(empty($_GET['id'])){
								$resultado = $con->query("SELECT idCliente, nome FROM cliente ORDER BY idCliente ASC");
								while($user_data = mysqli_fetch_assoc($resultado)){
									?>
									<option value="<?php echo $user_data['idCliente']?>">
										<?php echo $user_data['nome']?></option>
								<?php										
								}}
								else{
									$id = $_GET['id'];
									$resultado = $con->query("SELECT idCliente, nome FROM cliente WHERE idCliente=$id");
								while($user_data = mysqli_fetch_assoc($resultado)){
									?>
									<option value="<?php echo $user_data['idCliente']?>" selected>
										<?php echo $user_data['nome']?></option>
								<?php
								}}
								?> 
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
									<span style="color:white" class="subheading">Data Pedido</span>
			            		<input type="date" name="data_atual" placeholder="Data Atual">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
									<span style="color:white" class="subheading">Data Entrega</span>
			            		<input type="date"  name="data_entrega" placeholder="Data de Entrega">
		            		</div>
			    				</div>
								</div>

                                <div class="col-md-12">
								<button type="submit" name="cadastrar" class="btn btn-dark py-3 px-4">Cadastrar</button>
									<div class="form-group">
			              </div>
								</div>
</div></div>
		</section></center>

        

    </form>
  
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

  <script type="text/javascript" src="../js/script1.js"></script>

<!-- Inputs Máscara-->
<script src="../js/mask.js"></script>

<script>
      $(document).ready(function(){
  $('select').formSelect();
});
      $(document).ready(function(){
  $('.datepicker').datepicker();
});
      $(document).ready(function(){
  $('.sidenav').sidenav();
});
  </script>

</body>