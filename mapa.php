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
    <title>Mapa de sitio</title>
</head>
<body background="IMG/montana1.png" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<!--------navbar--------->
<div class="container">
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-gradient-dark ">
  <a class="navbar-brand mt-3" href="http://localhost/fundacion/"><strong>Buen Pastor</strong>  Fundation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mt-3" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2">
    </ul>
  </div>
</nav>
    </div>

    <!------LOGIN------->
    
    <div class="container ml-7 mb-4" style="margin-top: 10%;">
      <div class="row">
        <div class="col-md-4 text-center wow rubberBand ">
        <h3>Servicios</h3>
        <hr width="100%" color="white" solid>
        <a href="http://localhost/fundacion/#pro" style="text-decoration: none; color: white; :hover: background: white; margin-top: 5px; margin-bottom: 5px;" >Horario</a><br>
        <a href="http://localhost/fundacion/#pro" style="text-decoration: none; color: white;">Inscripción</a><br>
        <a href="http://localhost/fundacion/#cursos" style="text-decoration: none; color: white;">Cursos</a>
        </div>
        <div class="col-md-4 text-center wow rubberBand">
        <h3>Sobre nosotros</h3>
        <hr width="100%" color="white" solid>
        <a href="http://localhost/fundacion/#historia" style="text-decoration: none; color: white;">Historia</a><br>
        <a href="http://localhost/fundacion/#historia" style="text-decoration: none; color: white;">Misión</a><br>
        <a href="http://localhost/fundacion/#historia" style="text-decoration: none; color: white;">Visión</a><br>
        <a href="http://localhost/fundacion/#historia" style="text-decoration: none; color: white;">Valores</a>
        </div>
        <div class="col-md-4 text-center wow rubberBand">
        <h3>Medios</h3>
        <hr width="100%" color="white" solid>
        <a href="http://localhost/fundacion/Contact.php" style="text-decoration: none ; color: white;">Contacto</a><br>
        <a href="http://localhost/fundacion/login.php" style="text-decoration: none ; color: white;"> Login</a>
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