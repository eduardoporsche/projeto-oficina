<!DOCTYPE html>
<html>
    <head>

<script>
    function ok(){
    setTimeout("window.location='index.php'",2000);        
    }

    function erro(){
    setTimeout("window.location='login.php'",2000);        
    }
</script>




    <style type="text/css">

html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    background: #4ECDC4;
}

#login-page {
width: 500px;
}

.card {
/*      position: absolute;
    left: 50%;
    top: 50%;
    -moz-transform: translate(-50%, -50%)
    -webkit-transform: translate(-50%, -50%)
    -ms-transform: translate(-50%, -50%)
    -o-transform: translate(-50%, -50%)
     transform: translate(-50%, -50%); */

}
</style>
    <!--Import Google Icon Font-->
    <meta charset="UTF-8">
    <title>projeto</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body ng-app="mainModule" ng-controller="mainController">
    
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
        <div class ="title" aling = "center">
            <h3>Asseso Login</h3>
    <form action="login.php" method="post" class="login-form">
        <div class="row">
        </div>
        <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email" name="email">
            <label for="email" data-error="wrong" data-success="right"></label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" name="senha">
            <label for="password"></label> </div>
        </div>
        <div class="row">          
        <div class="input-field col s12 m12 l12  login-text">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
<button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
</button> 


        </div>
        </div>
        <div class="row">
        <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="#">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
            <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
        </div>          
        </div>

    </form>
        </div> 
    </div>

</div> 

<?php
include './conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = $con->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");


if(mysqli_num_rows($sql) > 0){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];

    echo "Você foi logado";
    echo "<script>ok() </script>";
}
    
    else{
        echo "email ou senha incorreta";
        echo "<script> erro()<\script>";

    }



?>


</body>

</html>