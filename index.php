<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <style type="text/css">
            p{
                text-align: justify;
            }
        </style>


        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include './menu.php';
        ?>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/moto.png"> <!-- random image -->
                    <div class="caption center-align">
                        
                    </div>
                </li>

                
                
            </ul>
        </div>


        <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="img/fusca.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>Me chamo Eduardo. Sou um mecanico muito sortificado, fiz diversos porjetos com a Ferrari.
            Decidi abrir uma oficina com meu amigo Joao. 
          </p>
        </div>
        <div class="card-action">
          <a href="#">Saiba mais sobre mim</a>
        </div>
      </div>
    </div>
  </div>

        <div class="carousel">
            <a class="carousel-item"  href="exibir_os.php"><img src="img/lista.png" width="200"></a>
            <a class="carousel-item" href="exibir.php"><img src="img/add_cliente.png" width="200"></a>
        </div>

       
        <?php
        include './footer.php';
        ?>




        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>

            $(document).ready(function () {
                $('.slider').slider();
            });

            $(document).ready(function () {
                $('.carousel').carousel();
            });

        </script>
    </body>
</html>


    