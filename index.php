<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fundación El Buen Pastor</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <!----------------CSS------------------>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/animate.min.css">
    <!------------FONTS------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <!-------------BOOTSTRAP--------------->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>



      <header>
           <!--------NAVBAR-------->
    

 <nav class="navbar sticky-top navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-gradient-dark" style="background-color: #36a1b6;">
  <a class="navbar-brand mt-3" href="#"><strong>Buen Pastor</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mt-3" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2">
      <li class="nav-item active mx-5">
        <a class="nav-link text-center wow swing" href="#historia"><strong>Historia</strong> </a>
      </li>
      <li class="nav-item active mx-5">
        <a class="nav-link text-center wow swing" href="#pro"><strong>Propósitos</strong></a>
      </li>
      <li class="nav-item active mx-5">
        <a class="nav-link text-center wow swing" href="#cursos"><strong>Cursos</strong> </a>
      </li>
      <li class="nav-item active  mx-5">
        <a class="nav-link text-center wow swing" href="#con"><strong>Contactos</strong></a>
      </li>
      <li class="nav-item active  mx-5">
        <a class="nav-link  px-4 rounded-lg wow swing" type="btn" id="btn1" href="http://localhost/fundacion/login.php"><strong>Estudiantes</strong></a>
      </li>
    
    </ul>
</nav>
      <div class="textos-header" id="header" style="margin-top: 80px">
        <div class="container">
                <div class="row">
                <div class="col-md-6">
                <div class="contenedor-img ">
                <img src="IMG/win.svg" style="margin-right: 40px; max-width:100%" >
                </div>
                </div>
                <div class="col-md-6 mt-5">
                <h1 style="margin-top:15%;">Fundación El Buen Pastor</h1>
                <h3 class="texto">Capacitate para <span class="typed"></span></h3>
                </div>
                </div>
            </div>
            <div><img src="IMG/cloud.png" class="cloud" width="100%"></div>
 
      
            </div>
      </header>
      
       
   

        <section id="historia" class="sobre-nosotros ">
          <div class="container text-center wow zoomInDown">
          <h2>Historia</h2>
          <hr width="5%" color="black" solid>
           <p>La Fundación Esperanza y Alegría se crea el 25 de mayo de 2001 en Madrid. La funda su presidenta María Moreno, quien desde muy joven fue voluntaria de diversas organizaciones. Fruto de ese voluntariado conoce a la Madre Teresa de Calcuta quien la inspira y la anima a llevar a cabo proyectos antes de crear la Fundación.
           </p>
           <div class="row">
             <div class="col-md-4 wow lightSpeedIn">
<h2  class="border-left border-right border-top">Misión</h2>
<hr width="16%" color="white" solid>
<p class="border-left border-right border-bottom">Somos una empresa dedicada a la comercialización y distribución de productos informáticos, fabricación de ordenadores, desarrollo de aplicaciones informáticas de gestión, soluciones en Internet, servicio técnico y mantenimiento de equipos y sistemas informáticos, hosting, y consultoría de protección de datos. Ofreciendo una solución global a empresas, profesionales, administraciones y usuarios particulares, a todo el territorio nacional.</p>
             </div>
             <div class="col-md-4 wow lightSpeedIn">
<h2 class="border-left border-right border-top">Visión</h2>
<hr width="16%" color="white" solid>
<p class="border-left border-right border-bottom">Pretendemos ser un referente en el mercado nacional en el sector de las TIC, y para ello abarcaremos todos los servicios que ofrecemos actualmente incrementando los que vayan surgiendo debido a la necesidad de cambio provocado por los avances tecnológicos. Esto es así ya que somos una empresa en constante innovación ya que el sector de la tecnología así lo requiere.</p>
             </div>
             <div class="col-md-4 wow lightSpeedIn">
<h2 class="border-left border-right border-top">Valores</h2>
<hr width="16%" color="white" solid>
<p class="border-left border-right border-bottom"><strong>Trabajo en equipo:</strong> Promoviendo y apoyando un equipo homogéneo, polivalente e interdepartamental. <br>
<strong>Colaboración:</strong> Nos integramos con nuestros proveedores y clientes para mejorar día a día la calidad con los mismos para satisfacer sus necesidades.</p>
            </div>
          </div>
          </div> 
        
           
        </section>
        <!------------PROPÓSITOS---------------->
        <section id="pro" class="portafolio">
        <img src="IMG/cloud-bottom.png" class="cloudb" width="100%">

        <div class="container text-center">
  <div class="row wow jackInTheBox">
  <div class="card border-primary mb-3 mx-5" style="width: 40%;">
  <div class="card-header">Header</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Inscripción</h5>
    <p class="card-text"><strong>RD$100</strong> 3 meses y medio de duración!</p>
  </div>
</div>
<div class="card border-primary mb-3 mx-5" style="width: 40%;">
  <div class="card-header">Header</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Horario</h5>
    <p class="card-text"><strong>Sábados</strong> desde las 8:30 AM!</p>
  </div>
</div>
  </div>
</div>
            <img src="IMG/mountain.png" class="cloudb" width="100%">
        </section>
        <!----------SERVICES----------->
        <section id="cursos" class="clientes">
        <h2 align="center">Cursos</h2>
<hr width="5%" color="black" solid>
<div class="cursos container">
<div class="row">
  <div class="col-md-4">

<a href="Secretaria.php" class="a"><span class="tec"><img src="IMG/secre.png" class="wow bounceInDown" ></span><div class="liquid"></div></a>
<h3 class="service-tittle">Servicio al cliente</h3>
<p class="content">Es el que ofrece una empresa para relacionarse con sus clientes.</p>
  </div>
  <div class="col-md-4">
  <a href="AuxFarmacia.php"  class="a"><span class="tec"><img src="IMG/farmacia.png" class="wow bounceInDown" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Auxiliar en Farmacia</h3>
  <p class="content">Es aquella persona que colabora con el profesional farmacéutico en la atención del cliente-paciente.</p>
  </div>
  <div class="col-md-4">
  <a href="Maquillaje.php" class="a"><span class="tec"><img src="IMG/facial.png" class="wow bounceInDown" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Facial y maquillaje</h3>
  <p class="content"> es el proceso con el cual se eliminan las células muertas depositadas en la piel a base de lociones, cremas y productos naturales que no causen irritación a la piel.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <a href="RepCelulares.php" class="a"><span class="tec"><img src="IMG/fix.png"class="wow bounceInLeft" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Reparación Celulares</h3>
  <p class="content"> Es, en sentido amplio, la restitución de algo que está dañado a su estado original.</p>
  </div>
  <div class="col-md-4">
  <a href="Estilista.php" class="a"><span class="tec"><img src="IMG/beauty.png" class="wow bounceInDown"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Estilista en belleza</h3>
  <p class="content">Un estilista es un profesional de la belleza que se ha formado no sólo en peluquería sino que también abarca el mundo de la estética y por ello es capaz de peinar o maquillar en función de las características de cada persona.</p>
  </div>
  <div class="col-md-4">
 <a href="UñasAcrilicas.php" class="a"> <span class="tec"><img src="IMG/nail.png" class="wow bounceInRight"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Uñas Acrílicas</h3>
  <p class="content">Las uñas de porcelana o acrílicas se utilizan para embellecer las manos, alargar la uñas naturales y corregir los malos hábitos. Indicado en casos de onicofagia, traumatismos ungueales.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <a href="AuxEnfermeria.php" class="a"><span class="tec"><img src="IMG/nurse.png" class="wow bounceInLeft"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Auxiliar de enfermería</h3>
  <p class="content">Persona que tiene por oficio asistir o atender a enfermos, heridos o lesionados bajo las prescripciones de un médico, o ayudar al médico o cirujano.</p>
  </div>
  <div class="col-md-4">
 <a href="Contabilidad.php" class="a"> <span class="tec"><img src="IMG/calculadora.png" class="wow bounceInDown"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Contabilidad</h3>
  <p class="content">Sistema de control y registro de los gastos e ingresos y demás operaciones económicas que realiza una empresa o entidad.</p>
  </div>
  <div class="col-md-4">
  <a href="CajeroCom.php" class="a"><span class="tec"><img src="IMG/bank.png" class="wow bounceInRight" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Cajero Computarizado</h3>
  <p class="content">es una máquina expendedora usada para extraer dinero utilizando una tarjeta de plástico con banda magnética o un chip.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <a href="" class="a"><span class="tec"><img src="IMG/corte.png"class="wow bounceInLeft" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Corte y peinado</h3>
  <p class="content"> Es la forma de cortarse o arreglarse el cabello.</p>
  </div>
  <div class="col-md-4">
  <a href="Masajista.php" class="a"><span class="tec"><img src="IMG/masaje.png" class="wow bounceInDown"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Masajista Profesional</h3>
  <p class="content">Acción que consiste en presionar, frotar o golpear rítmicamente y con intensidad adecuada determinadas zonas del cuerpo, principalmente las masas musculares, con fines terapéuticos, deportivos, estéticos, etc.</p>
  </div>
  <div class="col-md-4">
  <a href="Decoracion.php" class="a"><span class="tec"><img src="IMG/interior.png"class="wow bounceInRight" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Decoración de interiores</h3>
  <p class="content">Se conoce como decoración de interiores o interiorismo a la profesión que busca desarrollar una ambientación agradable y funcional. </p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
  <a href="ReparacionPc.php" class="a"><span class="tec"><img src="IMG/pcfix.png"class="wow bounceInLeft" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Reparación de Pc's </h3>
  <p class="content">es un tipo de microcomputadora diseñada en principio para ser utilizada por una sola persona. Habitualmente, la sigla PC se refiere a las computadoras IBM PC compatibles.</p>
  </div>
  <div class="col-md-4">
  <a href="Informatica.php" class="a"><span class="tec"><img src="IMG/tech.png"class="wow bounceInDown" ></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Informática Básica</h3>
  <p class="content"> es una Ciencia. Es la Ciencia que estudia el Tratamiento Automático de la Información. </p>
  </div>
  <div class="col-md-4">
  <a href="Barberia.php" class="a"><span class="tec"><img src="IMG/barber.png" class="wow bounceInRight"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Barberia Profesional</h3>
  <p class="content">es la persona cuya ocupación es afeitar, cortar y acondicionar el pelo o cabello.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
  <a href="Colchas.php" class="a"><span class="tec"><img src="IMG/sofa.png" class="wow bounceInDown"></span><div class="liquid"></div></a>
  <h3 class="service-tittle">Colchas y cojines</h3>
  <p class="content">es el objeto de decoración textil que se coloca sobre la cama una vez que está hecha.</p>
</div>
</div>

        </section>
        <img src="IMG/ocean.png" class="cloudb" width="100%">
<!----------FOOTER---------->
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
       <a href="http://localhost/fundacion/mapa.php" style="text-decoration: none">Mapa de sitio</a><br>
     <a href="http://localhost/fundacion/Contact.php"style="text-decoration: none">¿Tiene algún problema? Contáctenos!</a>
     </div>
        </div>
    </footer>

    <!-------CDN js-------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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