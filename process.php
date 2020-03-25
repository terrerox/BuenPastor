<?php
session_start();

require 'database.php';
if (isset($_POST['contact'])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $sql = "INSERT INTO comentarios (nombre, apellido, telefono, direccion, correo, mensaje ) values ('$nombre','$apellido','$telefono','$direccion','$correo','$mensaje')";
    mysqli_query($conn,$sql) or die ($mysqli->error());

    header("location: /fundacion/contact.php");
    $_SESSION['message'] = "Successfully added!";
    $_SESSION['msg_type'] = "wow pulse";
    $_SESSION['alert'] = "success";

    header("location: /fundacion/Contact.php");
}
if (isset($_POST['save'])) {
    if (($_POST['confirm']) == ($_POST['password'])) {  
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $curso = $_POST["curso"];
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, password, curso) values ('$nombre','$apellido','$correo','$password','$curso')";
    $sql2= "SELECT id FROM usuarios WHERE correo='".$correo."'";
    $result= mysqli_query($conn,$sql2) or die ($mysqli->error());
    if (!empty($klk=mysqli_fetch_array($result))) {
        header("location: /fundacion/signup.php");
        $_SESSION['message'] = "Email already exist!";
        $_SESSION['msg_type'] = "wow shake";
        $_SESSION['alert'] = "danger";
    }else{
        mysqli_query($conn,$sql) or die ($mysqli->error());
        $sql5 = "SELECT * FROM usuarios WHERE correo='$correo'";
        $result2 = mysqli_query($conn,$sql5) or die ($mysqli->error());
    
        while($row=mysqli_fetch_array($result2)){
            if ($row['correo']==$correo && $row['curso']=='Secretaria') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Secretaria.php");
                  }  
            }
            elseif ($row['correo']==$correo &&  $row['curso']=='AuxFarmacia') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: AuxFarmacia.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Maquillaje') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Maquillaje.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='RepCelulares') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: RepCelulares.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Estilista') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Estilista.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='UñasAcrilicas') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: UñasAcrilicas.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='AuxEnfermeria') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: AuxEnfermeria.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Contabilidad') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Contabilidad.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='CajeroCom') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: CajeroCom.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Corte/Peinado') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Corte/Peinado.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Masajista') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Masajista.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Decoracion') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Decoracion.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='ReparacionPc') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: ReparacionPc.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Informatica') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Informatica.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Barberia') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Barberia.php");
                  }  
            }
            elseif ($row['correo']==$correo && $row['curso']=='Colchas') {
                $_SESSION['user_name'] = $row['nombre'];
                $_SESSION['user_curso'] = $row['curso'];
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_apellido'] = $row['apellido'];
                $_SESSION['user_direccion'] = $row['direccion'];
                $_SESSION['user_correo'] = $row['correo'];
                $_SESSION['user_cel'] = $row['telefono_celular'];
                $_SESSION['user_res'] = $row['telefono_residencial'];
                $_SESSION['user_tra'] = $row['telefono_trabajo'];
                $_SESSION['user_sector'] = $row['sector'];
                $_SESSION['user_municipio'] = $row['municipio'];
                $_SESSION['user_pro'] = $row['provincia'];
                $_SESSION['user_img'] = $row['imagen'];
                $_SESSION['user_pass'] = $password;
                if (isset($_SESSION['user_id'])) {
                    header("location: Colchas.php");
                  }  
            }
                 else{
                    header("location: login.php");
                    $_SESSION['message'] = "Invalid pass!";
                    $_SESSION['msg_type'] = "wow shake";
                    $_SESSION['alert'] = "danger";
                    
                }
                
    
    }
    }
}else{
    header("location: /fundacion/signup.php");
    $_SESSION['message'] = "Passwords dont match!";
    $_SESSION['msg_type'] = "wow shake";
    $_SESSION['alert'] = "danger";
}
}
if (isset($_POST['update4'])) {
    $id = $_POST['id'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $direccion = $_POST["direccion"];
    $cell = $_POST["cell"];
    $res = $_POST["res"];
    $tra = $_POST["tra"];
    $sector = $_POST["sector"];
    $muni = $_POST["muni"];
    $pro = $_POST["pro"];


    $profileImageName = time() . ' ' . $_FILES['profileImage']['name'];
    $target = 'images/' . $profileImageName;

   if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){

    if (($_POST['confirm']) == ($_POST['password'])) {  
    $sql = "update usuarios set nombre = '".$nombre."' , apellido = '".$apellido."' , correo = '".$correo."' ,
    password = '".$password."', direccion = '".$direccion."', telefono_celular = '".$cell."', telefono_residencial = '".$res."', 
    telefono_trabajo = '".$tra."', sector = '".$sector."', municipio = '".$muni."', provincia = '".$pro."',
    imagen = '".$profileImageName."' where id = '".$id."'";
   mysqli_query($conn,$sql) or die ($mysqli->error());

   $sql = "SELECT * FROM usuarios WHERE id='$id'";
   $result = mysqli_query($conn,$sql) or die ($mysqli->error());
   $row=mysqli_fetch_array($result);
   $_SESSION['user_name'] = $row['nombre'];
   $_SESSION['user_curso'] = $row['curso'];
   $_SESSION['user_id'] = $row['id'];
   $_SESSION['user_apellido'] = $row['apellido'];
   $_SESSION['user_direccion'] = $row['direccion'];
   $_SESSION['user_correo'] = $row['correo'];
   $_SESSION['user_cel'] = $row['telefono_celular'];
   $_SESSION['user_res'] = $row['telefono_residencial'];
   $_SESSION['user_tra'] = $row['telefono_trabajo'];
   $_SESSION['user_sector'] = $row['sector'];
   $_SESSION['user_municipio'] = $row['municipio'];
   $_SESSION['user_pro'] = $row['provincia'];
   $_SESSION['user_img'] = $row['imagen'];
   $_SESSION['user_pass'] = $password;
   
   $_SESSION['message'] = "Actualizado correctamente!";
    $_SESSION['msg_type'] = "wow shake";
    $_SESSION['alert'] = "danger";

   header("location: ".$row['curso'].".php");
   }else{
    $_SESSION['message'] = "Contraseñas no coinciden!";
    $_SESSION['msg_type'] = "wow shake";
    $_SESSION['alert'] = "danger";
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $result = mysqli_query($conn,$sql) or die ($mysqli->error());
    $row=mysqli_fetch_array($result);
    header("location: ".$row['curso'].".php");
   }
}else{
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $result = mysqli_query($conn,$sql) or die ($mysqli->error());
    $row=mysqli_fetch_array($result);
    $_SESSION['message'] = "Error al actualizar!";
    $_SESSION['msg_type'] = "wow shake";
    $_SESSION['alert'] = "danger";
    header("location: ".$row['curso'].".php");
}
}   

if (isset($_POST['login'])) {
    $correo = $_POST["correo"];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = mysqli_query($conn,$sql) or die ($mysqli->error());

    while($row=mysqli_fetch_array($result)){
        if ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Secretaria') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Secretaria.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='AuxFarmacia') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: AuxFarmacia.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Maquillaje') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Maquillaje.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='RepCelulares') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: RepCelulares.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Estilista') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Estilista.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='UñasAcrilicas') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: UñasAcrilicas.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='AuxEnfermeria') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: AuxEnfermeria.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Contabilidad') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Contabilidad.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='CajeroCom') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: CajeroCom.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Corte/Peinado') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Corte/Peinado.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Masajista') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Masajista.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Decoracion') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Decoracion.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='ReparacionPc') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: ReparacionPc.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Informatica') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Informatica.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Barberia') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Barberia.php");
              }  
        }
        elseif ($row['correo']==$correo &&  password_verify($password, $row['password']) && $row['curso']=='Colchas') {
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_curso'] = $row['curso'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_apellido'] = $row['apellido'];
            $_SESSION['user_direccion'] = $row['direccion'];
            $_SESSION['user_correo'] = $row['correo'];
            $_SESSION['user_cel'] = $row['telefono_celular'];
            $_SESSION['user_res'] = $row['telefono_residencial'];
            $_SESSION['user_tra'] = $row['telefono_trabajo'];
            $_SESSION['user_sector'] = $row['sector'];
            $_SESSION['user_municipio'] = $row['municipio'];
            $_SESSION['user_pro'] = $row['provincia'];
            $_SESSION['user_img'] = $row['imagen'];
            $_SESSION['user_pass'] = $password;
            if (isset($_SESSION['user_id'])) {
                header("location: Colchas.php");
              }  
        }
             else{
                header("location: login.php");
                $_SESSION['message'] = "Invalid pass!";
                $_SESSION['msg_type'] = "wow shake";
                $_SESSION['alert'] = "danger";
                
            }
            

}
}
   
?>