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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--------BOOTSTRAP4--------->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Signup</title>
</head>
<body background="IMG/montana1.png" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<!--------navbar--------->
<div class="container">
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-gradient-dark">
  <a class="navbar-brand mt-3" href="http://localhost/fundacion/"><strong>Buen Pastor</strong>  Fundation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mt-3" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2">
   
      <li class="nav-item active  mx-5">
        <a class="nav-link  px-4 rounded-lg wow swing" type="btn" id="btn1" href="http://localhost/fundacion/login.php"><strong>Estudiantes</strong></a>
      </li>
    </ul>
  </div>
</nav>
    </div>

    <!------SIGNUP------->
    <div class="container  <?=$_SESSION['msg_type']?>">
    <div class="alert alert-<?=$_SESSION['alert']?>" style="width: 45%; margin: auto;">
        <?php unset ($_SESSION['alert']);?>
<?php if(isset($_SESSION['message'])):?>
                <?php echo $_SESSION['message'];
                 unset ($_SESSION['message']);?>
                 <?php endif?>
</div>
    <?php unset ($_SESSION['msg_type']);?>
    <form action="process.php" method="post" id="form">
   
        <div class="form1">
            <div class="mb-4">Fundation Register</div>

           <div class="grupo1">
            <div class="row">
           <div>
                <input type="text" name="nombre" id="nom"  placeholder="Nombre"  onkeypress="return soloLetras(event)" required>
            </div>
            <div>
                <input type="text" name="apellido" id="ape" class="mr-2"  placeholder="Apellido"  onkeypress="return soloLetras(event)" required>
            </div>
            </div>
           </div>

            <div class="grupo">
                <input type="text" name="correo" id=""  placeholder="Correo" required>
            </div>
            <div class="grupo">
            <div style="position:absolute; display: block; margin-left: 323px; margin-top: 12px;"id="error1"></div><i class="fa fa-eye-slash mt-3" id="show" style="position:absolute; margin-left: 400px; cursor: pointer;"></i>
            <input type="password" name="password" id="pass1" placeholder="Contraseña" required> 
            </div>
            <div class="grupo">
            <div style="position:absolute; display: block; margin-left: 323px; margin-top: 12px;"id="error2"></div><i class="fa fa-eye-slash mt-3" id="show1" style="position:absolute; margin-left: 400px; cursor: pointer;"></i>
                <input type="password" name="confirm" id="pass2" placeholder="Confirmar"  required>
            </div>
            <div class="grupo">
            <select name="curso" placeholder="Cursos">
                            <option value="-1">Seleccione el curso</option>
                            <option value="Secretaria">Secretaria Auxiliar y Servicio al cliente</option>
                            <option value="AuxFarmacia">Auxiliar en Farmacia </option>
                            <option value="Maquillaje">Facial y maquillaje </option>
                            <option value="RepCelulares">Reparación Celulares </option>
                            <option value="Estilista">Estilista en belleza </option>
                            <option value="UñasAcrilicas">Uñas Acrílicas</option>
                            <option value="AuxEnfermeria">Auxiliar de enfermería</option>
                            <option value="Contabilidad">Contabilidad </option>
                            <option value="CajeroCom">Cajero Computarizado</option>
                            <option value="Masajista">Masajista Profesional</option>
                            <option value="Decoracion">Decoración de interiores</option>
                            <option value="ReparacionPc">Reparación de Pc's </option>
                            <option value="Informatica">Informática Básica </option>
                            <option value="Barberia">Barberia Profesional</option>
                            <option value="Colchas">Colchas y cojines</option>
                            
                            </select>
                        
                </div>

            <div class="ml-2">
            <button type="submit" name="save" class="btn btn-primary mt-4" id="logi">Registrar</button>
            <button type="reset" class="btn btn-danger mt-4" id="cant">Cancelar</button>
            </div>
            <br>
    </form>
  
    </div>

    <!----------SCRIPTS----------->
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="js/main.js"></script>
<script src="js/script1.js"></script>
<!-----------SCRIPS---------------->
<script>
       new WOW().init();
   
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
</body>
</html>