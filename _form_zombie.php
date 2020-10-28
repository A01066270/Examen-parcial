
    <form mothod="POST">
        <div class="card">
            <label class="label">Nombre*</label><br>
            <input type="text" class="formulario1" name="nombre" placeholder="Nombre Apellido(s)" required>
            <br>
            <label class="label">Estado</label><br>
        <div class="custom-select" style="width:200px;" name="estado">
            <select>
            <option value="0">Selecciona un estado:</option>
            <option value="Infeccion">Infeccion</option>
            <option value="Desorientacion">Desorientacion</option>
            <option value="Violencia">Violencia</option>
            <option value="Desmayo">Desmayo</option>
            <option value="Transformacion">Transformacion</option>
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
        echo($nombre);

        
        $insertarPaciente = "INSERT INTO `Zombie` (`idZombie`, `Nombre`) VALUES ('".$id."', '".$nombre."')";
        
        var_dump($ejecutarInsertar);
        $ejecutarInsertar = mysqli_query($conexion_bd,$insertarPaciente);
        
        
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
    
    ?>