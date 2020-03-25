
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--------CSS & BOOTSTRAP------>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/cursos.css">
    <link rel="stylesheet" href="CSS/animate.min.css">

    <script src="js/jquery.js"></script>
    <!------------FONTS------------>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php if(!empty($_SESSION['user_id'])): ?>
<script type="text/javascript">
</script>
  
<!---NAVBAR---->
<nav class="navbar fixed-top navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-gradient-dark" style="background-color: black;">
  <a class="navbar-brand mt-3" href="#" data-toggle="modal" data-target=".bd-example-modal-xl"><img src="images/<?php if(!empty($_SESSION['user_img'])){ echo $_SESSION['user_img'];} else{ echo '1576360140 place.png';}?>" id="profileDisplay1" width="80" style=" width: 10%; border-radius: 50%; cursor: pointer;" ></a>
<ul class="navbar-nav ">
<li class="nav-item active">
        <a class="nav-link text-center" href=""><strong>Buen Pastor</strong></a>
      </li>
</ul>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mt-3" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2">
      <li class="nav-item active mx-5">
        <a class="nav-link text-center" href="#down"><strong>Descargar curso</strong> </a>
      </li>
      
      <li class="nav-item active  mx-5">
        <a class="nav-link  px-4 rounded-lg" type="btn" id="btn3" href="logout.php"><strong>Cerrar sesión</strong></a>
      </li>
    
    </ul>
</nav>
<header>

<div class="klk">
<div class="textos-header">

                <div class="row">
                <div class="col-md-12 mt-5">
                <h4 style="">
                Auxiliar
              <span>Auxiliar</span>
              <span>Auxiliar</span>
              <span>farmacia</span>
              </h4>
                </div>
            </div>
          </div>
  
  </div>
</header>
 <section id="skewed">
 <ul class="bubbles">

<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
</ul>
</section>

<section id="info">
<div class="container">
  <div class="row">
    <div class="col-md-6">
<img src="cursos/1.jpg" width="70%" class="rounded">
    </div>
   <div class="col-md-6 text-center">
     <p>Es aquella persona que colabora con el profesional farmacéutico en la atención del cliente-paciente, y cumple varias funciones, como la interpretación de las recetas médicas, la dispensación de medicamentos, la facturación a Obras Sociales o el control de stock y los pedidos a las droguerías.</p><br>
     <p><strong>Sabados</strong> de 11AM a 1:00PM</p>
   
    </div>
  </div>
</div>
</section>
<section id="down" >
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
    <h2 class="mt-4">
      Descarga el PDF aquí
      <div class="separator mt-4"></div>
      <a href="pdf/c_auxfarma.pdf" class="btn btn-primary  mb-4">Decargar</a>
     
    </h2>
    </div>
  </div>
</div>
</section>
<footer id="con">
        <div class="contenedor-footer text-center">
        Fundacion Educativa El Buen Pastor
        <br>
        Escuela República de Panama Av.Venezuela, Ensanchez Ozama RD Este
        <br>
   <li class="fa fa-phone">829-458-3753</li>
  <li class="fa fa-envelope">buenpastor@gmail.com</li>
   <br> 
        &copy; Terrerox | Francis Terrero 
        <br>
        <div class="wow bounceInRight">
    <a href="https://www.facebook.com/" style="text-decoration: none"><li class="fa fa-facebook-square"></li> </a>
    <a href="https://twitter.com/login?lang=es" style="text-decoration: none"><li class="fa fa-twitter-square"></li> </a>
    <a href="https://www.instagram.com" style="text-decoration: none"> <li class="fa fa-instagram"></li> </a>
    <a href="https://www.youtube.es/" style="text-decoration: none"> <li class="fa fa-youtube"></li> </a>
     <br>
     </div>
     <div class="wow bounceInLeft">
     <a href="http://localhost/fundacion/Contact.php" >¿Tiene algún problema? Contáctenos!</a>
     </div>
        </div>
    </footer>
<!-- Modal -->

<div class="modal fullscreen-modal fade" id="JAJA" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido  <?php echo $_SESSION['user_name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>  <h5><?php if(isset($_SESSION['message'])):?>
                <?php echo $_SESSION['message'];
                 unset ($_SESSION['message']);
                 endif?></h5>
      </div>
      <div class="modal-footer">
       
   <a href="#"data-dismiss="modal" type="button" class="btn btn-primary">Aceptar</a>
      </div>
    </div>
  </div>
</div>

<!---------EDITAR---------->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar perfil</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>
   <div class="modal-body">
  
  <div class="container mx-4">
<form action="process.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-12">
    <div class="form-group text-center" style="margin-left:300px; margin-right:300px;">
  
   <div class="wrapper">
   <img src="images/<?php if(!empty($_SESSION['user_img'])){ echo $_SESSION['user_img'];} else{ echo '1576360140 place.png';}?>" width="80" id="profileDisplay" style="display: block; width: 40%; margin: 10px auto; border-radius: 50%; cursor: pointer;" onClick="triggerClick()">
  <div class="overlay" style="display: block; width: 40%; margin: 10px auto; border-radius: 50%; cursor: pointer;" onClick="triggerClick()">
    <div class="content"> <li class="fa fa-camera"></li><br> Subir foto</div>
  </div> 
  </div>
                      
                        <input type="file" name="profileImage" id="profileImage" style="display: none;" onChange="displayImage(this)" required>
                    </div>
                    </div>
  </div>
<div class="container" style="margin-left: 5%">
<div class="row" style="margin-top: 22%;">
    <div class="col-md-3 mx-4">
    <input type="hidden" name="id" id="update_id" value="<?php echo $_SESSION['user_id'];?>">
   
                          <div class="form-group mx-4">
                       <label>
                           Nombre <span class="req"></span>
                       </label>
                       <input type="text" name="nombre" value=" <?php echo $_SESSION['user_name'];?>" id="pro" class="form-control" required>
                   </div>
                           <div class="form-group mx-4">
                               <label>
                                   Apellido 
                               </label>
                               <input type="text" name="apellido"  value=" <?php echo $_SESSION['user_apellido'];?>"  id="can"  class="form-control" required> 
                           </div>
                           <div class="form-group mx-4">
                               <label>
                                   Correo 
                               </label>
                               <input type="text" name="correo" value="<?php echo $_SESSION['user_correo'];?>" id="pre" class="form-control" required> 
                           </div>   
                           <div class="form-group mx-4">
                       <label>
                           Contraseña <span class="req"></span>
                       </label>
                       <i class="fa fa-eye-slash " id="show3" style="position:absolute; display: block;margin-top: 12px; color: black; margin-left: 165px;cursor: pointer;"></i>
                       <input type="password" name="password" value="<?php echo $_SESSION['user_pass'];?>" id="pass4" class="form-control" required>
                      
                   </div>
        </div>
        <div class="col-md-3 mx-4">
                           <div class="form-group">
                               <label>
                                   Dirección 
                               </label>
                               <input type="text" name="direccion"  value="<?php echo $_SESSION['user_direccion'];?>"  id="can"  class="form-control" required> 
                           </div>
                           <div class="form-group">
                               <label>
                                   Telefono celular
                               </label>
                               <input type="tel" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" name="cell" value="<?php echo $_SESSION['user_cel'];?>" id="pre" class="form-control" required> 
                           </div>    

    
                    <div class="form-group">
                       <label>
                           Telefono residencial <span class="req"></span>
                       </label>
                       <input type="tel" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}"  name="res" value="<?php echo $_SESSION['user_res'];?>" id="pro" class="form-control" required>
                   </div>
                           <div class="form-group">
                               <label>
                                 Telefono trabajo
                               </label>
                               <input type="tel" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}"  name="tra"  value="<?php echo $_SESSION['user_tra'];?>" id="can"  class="form-control" required> 
                           </div>
                    </div>
                    <div class="col-md-3 mx-4">
                           <div class="form-group">
                               <label>
                                   Sector 
                               </label>
                               <input type="text" name="sector" value="<?php echo $_SESSION['user_sector'];?>"id="pre" class="form-control" required> 
                           </div>   
                           <div class="form-group">
                       <label>
                           Municipio <span class="req"></span>
                       </label>
                       <input type="text" name="muni" value="<?php echo $_SESSION['user_municipio'];?>" id="pro" class="form-control" required>
                   </div>
                           <div class="form-group">
                               <label>
                                   Provincia 
                               </label>
                               <input type="text" name="pro"  value="<?php echo $_SESSION['user_pro'];?>" id="can"  class="form-control" required> 
                           </div>
                           <div class="form-group">
                               <label>
                                   Curso 
                               </label>
                               <input type="text" name="cantidad"  value="<?php echo $_SESSION['user_curso'];?>" id="can"  class="form-control" readonly> 
                           </div>
                  </div>
</div>
</div>
</div>

   </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="update4" class="btn btn-primary">Actualizar</button> 
      </div>
      </form>
   </div>
  </div>
</div>
</div>
    <!-------CDN js-------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

<script src="js/main.js"></script>
<script src="js/script1.js"></script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    function triggerClick(){
      document.querySelector('#profileImage').click();
    }

    function displayImage(e){
      if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
          document.querySelector('#profileDisplay1').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  
       new WOW().init();
      </script>
<?php else:?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <header>

<div class="klk">
<div class="textos-header">

                <div class="row">
                <div class="col-md-12 mt-5">
                <h4 style="">
                Auxiliar
              <span>Auxiliar</span>
              <span>Auxiliar</span>
              <span>farmacia</span>
              </h4>
                </div>
            </div>
          </div>
  
  </div>
</header>
 <section id="skewed">
 <ul class="bubbles">

<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
<li><img src="IMG/farmacia.png" alt=""></li>
</ul>
</section>

<section id="info">
<div class="container">
  <div class="row">
    <div class="col-md-6">
<img src="cursos/1.jpg" width="70%" class="rounded">
    </div>
   <div class="col-md-6 text-center">
     <p>Es aquella persona que colabora con el profesional farmacéutico en la atención del cliente-paciente, y cumple varias funciones, como la interpretación de las recetas médicas, la dispensación de medicamentos, la facturación a Obras Sociales o el control de stock y los pedidos a las droguerías.</p><br>
     <p><strong>Sabados</strong> de 11AM a 1:00PM</p>
   
    </div>
  </div>
</div>
</section>
<footer id="con">
        <div class="contenedor-footer text-center">
        Fundacion Educativa El Buen Pastor
        <br>
        Escuela República de Panama Av.Venezuela, Ensanchez Ozama RD Este
        <br>
   <li class="fa fa-phone">829-458-3753</li>
  <li class="fa fa-envelope">buenpastor@gmail.com</li>
   <br> 
        &copy; Terrerox | Francis Terrero 
        <br>
        <div class="wow bounceInRight">
    <a href="https://www.facebook.com/" style="text-decoration: none"><li class="fa fa-facebook-square"></li> </a>
    <a href="https://twitter.com/login?lang=es" style="text-decoration: none"><li class="fa fa-twitter-square"></li> </a>
    <a href="https://www.instagram.com" style="text-decoration: none"> <li class="fa fa-instagram"></li> </a>
    <a href="https://www.youtube.es/" style="text-decoration: none"> <li class="fa fa-youtube"></li> </a>
     <br>
     </div>
     <div class="wow bounceInLeft">
     <a href="http://localhost/fundacion/Contact.php" >¿Tiene algún problema? Contáctenos!</a>
     </div>
        </div>
    </footer>
<?php endif;?>
</body>
</html>

  
  