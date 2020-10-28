
   
    <form method="POST">
        <div class="card">
            <label class="label">Nombre*</label><br>
            <input type="text" class="formulario1" name="nombre" placeholder="Nombre Apellido(s)" required>
            <br>
            <label class="label">Estado</label><br>
        <div class="custom-select" style="width:200px;" name="estado">
            <select>
            <option value="0">Selecciona un estado:</option>
            <option value="20000">Infeccion</option>
            <option value="20001">Desorientacion</option>
            <option value="20002">Violencia</option>
            <option value="20003">Desmayo</option>
            <option value="20004">Transformacion</option>
            </select>
        </div>
            <br>
            <br><br>
            <input type="submit" name="submit" value="Registrar" >
    </form> 
    
    <?php
    if(isset($_POST["submit"])){
        $conexion_bd = conectar();
        $id = rand(20000,29999);
        $nombre = $_POST["nombre"];
        
        
        $insertarPaciente = "INSERT INTO `Zombie` (`idZombie`, `Nombre`) VALUES ('".$id."', '".$nombre."')";
        

        $ejecutarInsertar = mysqli_query($conexion_bd,$insertarPaciente);
        
        $consulta2 = "INSERT INTO `actualiza` (`idZombie`, `idEstado`, `created-at`) VALUES (".$id.", ".$_POST["estado"].", current_timestamp())";
         $ejecutarInsertar2 = mysqli_query($conexion_bd,$consulta);
         
        echo($POST_["estado"]);
        
        if (!$ejecutarInsertar && !$ejecutarInsertar2){
            echo "Error en consulta sql.";
            $insertarPaciente -> error;
        }else{
            ?>
        <script type=text/javascript>
                
        alert('Registro completado');
        </script><?php
        }
        
    }
    
    ?>