<div class="resultados">
    <h3 class="title text-center">Visualizar Zombies</h3>
    <table>
    <tr class="topchart">
        <td><strong>Zombies</strong></td>
        <td><strong>Estado</strong></td>
    </tr>
    <?php
          
        $conexion_bd = conectar();
        $consulta = "SELECT z.Nombre, e.Nombre, a.`created-at` FROM actualiza a, Zombie z, Estado e WHERE e.idEstado = a.idEstado AND z.idZombie = a.idZombie"; 
        $ejecutarConsulta = mysqli_query($conexion_bd, $consulta);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila = mysqli_fetch_array($ejecutarConsulta);
        if(!$ejecutarConsulta){
            echo"Error en la consulta";
        }else{
            if($verFilas<1){
                echo"<tr><td>Sin registros</td></tr>";
            }else{
                for($i=0; $i<=$verFilas; $i++){
				echo'
				    <tr>
				    <td>'.$fila[0].'</td>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[2].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $fila = mysqli_fetch_array($ejecutarConsulta);
                }
            }
        }
    ?>
    <tr>
        
    </tr>
    
    </table>
    </div>
    <div> 

</section>