<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-------CSS------->
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/animate.min.css">
    <!--------BOOTSTRAP4--------->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Login</title>
</head>
<body background="IMG/montana1.png" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<!--------navbar--------->


    <!------LOGIN------->
    
    <? require_once 'process.php';?>



<div class="row">
<div class="col-md-6 image-container">
<style>
.image-container {
  background-image: url("IMG/nino.jpg");
  background-size: cover;
  position: relative;
  height: 608px;

}
.wrapper{
  background: rgba(90, 90, 90, 0.6);
  background-size: cover;
  position: relative;
  height: 608px;
  width: 683px;
}

.text a {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
margin:0;
padding: 0;
color: white;
letter-spacing: 2px;
font-size: 6em;
-webkit-text-fill-color: transparent;
-webkit-text-stroke-width: 2px;
}
</style>

<div class="wrapper">
  <div class="text"> <a href="http://localhost/fundacion/">Buen Pastor Fundation</a></div>
</div>
</div>
<div class="col-md-6">
<div class="container  <?=$_SESSION['msg_type']?>">
<?php unset ($_SESSION['msg_type']);?>


  <form action="process.php" method="post" id="form2">  
        <div class="form">
        <div class="alert alert-<?=$_SESSION['alert']?>">
        <?php unset ($_SESSION['alert']);?>
<?php if(isset($_SESSION['message'])):?>
                <?php echo $_SESSION['message'];
                 unset ($_SESSION['message']);?>
                 <?php endif?>
</div>
            <div class="mb-4">Fundation Login</div>
            <div class="grupo">
           <a href=""></a>
                <input type="email" name="correo" id="" placeholder="Correo" required> 
            </div>

            <div class="grupo">
            <i class="fa fa-eye-slash mt-3" id="show2" style="position:absolute; margin-left: 230px; cursor: pointer;"></i>
                <input type="password" name="password" class="" id="pass3"  placeholder="Contraseña" required>
           
                

            </div>
            <button type="submit" name="login" class="btn btn-primary mt-4" id="log">Loguear</button>
            <button type="reset" class="btn btn-danger mt-4" id="can">Cancelar</button>
            <br>
    </form>
   <div class="mt-4"> <a href="http://localhost/fundacion/signup.php" class="text-muted" id="forgot">¿No estás registrado? <strong>Solicita tu acceso</strong></a></div>
    </div>
</div>
</div>

    <!----------SCRIPTS----------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="js/main.js"></script>
<script src="js/jquery.js"></script>
<script src="js/script1.js"></script>
<!-----------SCRIPS---------------->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
     
       new WOW().init();
      </script>

</body>
</html>