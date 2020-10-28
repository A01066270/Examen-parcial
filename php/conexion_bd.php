<?php
//Conectar a base de datos con host, usuario, contraseña y nombre de la base de datos
function conectar() {
    $host="localhost";
    $name="fer";
    $pass="micontra";
    $dbname="examen2";

    $conexion_bd = mysqli_connect($host,$name,$pass,$dbname);
    if (!$conexion_bd){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return $conexion_bd;
}
//Desconectar de la base de datos
function desconectar($conexion_bd) {
    mysqli_close($conexion_bd);
}


function insertar_zombie($nombre){
    $conexion_bd = conectar();
    $id = rand(20000,49999);
    $insertarRegistro = "INSERT INTO `Zombie` (idZombie, Nombre) VALUES (".$id.", '".$nombre."')";
    var_dump($insertarRegistro);
    $ejecutarInsertar = mysqli_query($conexion_bd,$insertarRegistro);
    //Deteccion de errores
    if (!$ejecutarInsertar){
        echo "Error en consulta sql.";
        $insertarRegistro -> error;
    }else{
        ?>
    <script type=text/javascript>
            
    alert('Registro completado');
    </script><?php
    }
    desconectar($conexion_bd);

}

function insertar_actualizacion($idZombie,$idEstado){
    $conexion_bd = conectar();
    $consulta = "INSERT INTO actualiza (idZombie, idEstado) VALUES (".$idZombie.",".$idEstado.")";
    $ejecutarInsertar = mysqli_query($conexion_bd,$insertarRegistro);
        
    //Deteccion de errores
    if (!$ejecutarInsertar){
        echo "Error en consulta sql.";
        $insertarPaciente -> error;
    }
    desconectar($conexion_bd);
    return $resultado;

}

function consultar_idZombie ($nombre, $tabla){
    $conexion_bd = conectar();
    $consulta = "SELECT idZombie FROM Zombie WHERE Nombre LIKE '%".$nombre."'";
    $ejecutarConsulta = mysqli_query($conexion_bd, $consulta);
    $verRegistros = mysqli_num_rows($ejecutarConsulta);
    $registro = mysqli_fetch_array($ejecutarConsulta);
    $resultado = registro[0];
    return $resultado;
}

function consultar_idEstado ($nombre, $tabla){
    $conexion_bd = conectar();
    $consulta = "SELECT idEstado FROM Estado WHERE Nombre LIKE '%".$nombre."%'";
    $ejecutarConsulta = mysqli_query($conexion_bd, $consulta);
    $verRegistros = mysqli_num_rows($ejecutarConsulta);
    $registro = mysqli_fetch_array($ejecutarConsulta);
    $resultado = registro[0];
    return $resultado;

}

function registro_bd($zombie,$estado){
    insertar_zombier($zombie);
    $z = consultar_idZombie($zombie, "Zombie");
    $e = consultar_idEstado($estado, "Estado");
    
    insertar_actualizacion($z,$e);
}

//funcion para agregar registros a la tabla de pacientes en la base de datos
function agregar_paciente($sexo,$nombre, $telefono, $rfc, $email, $fechaNacimiento, $emailFacturas, $razonSocial, $direccion, $codigoPostal){
    $conexion_bd = conectar();
    
    $id = rand(20000,29999);
    // $sexo = $_POST["sexo"];
    // $nombre = $_POST["nombre"];
    // $telefono = $_POST["telefono"];
    // $rfc = $_POST["rfc"];
    // $email = $_POST["email"];
    // $fechaNacimiento = $_POST["fechaNacimiento"];
    // $emailFacturas = $_POST["emailFactura"];
    // $razonsocial =$_POST["razonsocial"];
    // $direccion = $_POST["direccion"];
    // $codigoPostal = $_POST["codigoPostal"];

    //Consulta específica para la tabla paciente de la base de datos.
    $insertarPaciente = "INSERT INTO Paciente (idPaciente, sexo, nombre, fechanacimiento, telefono, rfc, email, emailFacturas, razonsocial, direccion, codigopostal) 
    VALUES ($id, $sexo,'".$nombre."', '".$fechaNacimiento."', ".$telefono.", '".$rfc."', '".$email."', '".$emailFacturas."', '".$razonsocial."', '".$direccion."', $codigoPostal)";
        
    var_dump($insertarPaciente);
    $ejecutarInsertar = mysqli_query($conexion_bd,$insertarPaciente);
        
    //Deteccion de errores
    if (!$ejecutarInsertar){
        echo "Error en consulta sql.";
        $insertarPaciente -> error;
    }else{
        ?>
    <script type=text/javascript>
            
    alert('Registro completado');
    </script><?php
    }
}

//Funcion para buscar registros utilizando un parámetro
function busqueda_registros($nombre,$tabla) {

    
    $conexion_bd = conectar();
    $consulta = "SELECT * FROM ".$tabla." WHERE nombre LIKE '%".$nombre."%'"; 
    var_dump($ejecutarConsulta);
    $ejecutarConsulta = mysqli_query($conexion_bd, $consulta);
    $verRegistros = mysqli_num_rows($ejecutarConsulta);
    $registro = mysqli_fetch_array($ejecutarConsulta);
    if(!$ejecutarConsulta){
        echo"Error en la consulta";
    }else{
        //Detecta si no hay ningun registro con esos parámetros
        if($verRegistros<1){
            echo"<tr><td>Sin registros</td></tr>";
        }else{
            for($i=0; $i<=$verRegistros; $i++){
				echo'
				    <tr>
				    <td>'.$registro[1].'</td>
				    <td>'.$registro[3].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $registro = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }
    
    return $resultado;
}

//function tabla_acusaciones() {
//    
//    $conexion_bd = conectar();
//    
//    $consulta = 'SELECT t.nombre as acusador, s.nombre as acusado, created_at as fecha ';
//    $consulta .= 'FROM acusa, tripulante  t, tripulante s ';
//     $consulta .= 'WHERE  t.Id = acusa.acusador_id AND s.Id = acusa.acusado_id';
//    
//    $resultados_consulta = $conexion_bd->query($consulta);  
//    
//    $resultado = '<table>';
//    $resultado .= '<tr><th>Acusador</th><th>Acusado</th><th>Fecha</th><tr>';
//    
//    while ($row = mysqli_fetch_array($resultados_consulta, MYSQLI_BOTH)) { 
//        $resultado .= '<tr>';
//        $resultado .= '<td>'.$row["acusador"].'</td>';
//        $resultado .= '<td>'.$row["acusado"].'</td>';
//        $resultado .= '<td>'.$row["fecha"].'</td>';
//        $resultado .= '</tr>';
//    }
//    
//    mysqli_free_result($resultados_consulta); //Liberar la memoria
//    
//    $resultado .= '</table>';
//    
//    desconectar($conexion_bd);
//    return $resultado;
//}


?>
