<?php
    include 'includes/header.php';
    ?>

<form action="includes/receber.php" method="post">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="img/mec.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Formuladrio de Cadastro</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nome" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Nome</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="cpf" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Cpf</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="endereco" id="form3Example1m1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Endereço</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="bairro" id="form3Example1n1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Bairro</label>
                      
                    </div>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="telefone" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Telefone</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="text" name="email" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">Email</label>
                </div>
             <div class="d-flex justify-content-end pt-3">
             <button type="submit" name="action" class="btn btn-warning btn-lg ms-2">Cadastrar</button>                       
             </button>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>



