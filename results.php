  
    </div>
    <div class="resultados">
        <h3 class="title text-center">Visualizar Todos los Zombies</h3>
    <table>
    <tr class="topchart">
        <td><strong>Nombre</strong></td>
        <td><strong>Estado</strong></td>
        <td><strong>Fecha</strong></td>
    </tr>
        
    
    <tr>

    <?php
          
        $conexion_bd = conectar();
        $consulta1 = "SELECT z.Nombre, e.Nombre, a.`created-at` FROM actualiza a, Zombie z, Estado e WHERE e.idEstado = a.idEstado AND z.idZombie = a.idZombie"; 

        $ejecutarConsulta1 = mysqli_query($conexion_bd, $consulta1);
        $verFilas1 = mysqli_num_rows($ejecutarConsulta1);
        $fila1 = mysqli_fetch_array($ejecutarConsulta1);
        if(!$ejecutarConsulta1){
            echo"Error en la consulta";
        }else{
            if($verFilas1<1){
                echo"<tr><td>Sin registros</td></tr>";
            }else{
                for($i=0; $i<=$verFilas1; $i++){
				echo'
				    <tr>
				    <td>'.$fila1[0].'</td>
                    <td>'.$fila1[1].'</td>
                    <td>'.$fila1[2].'</td>
				    <a href="dashboard.php"><td></td></a>
				    </tr>
				';
                    $fila1 = mysqli_fetch_array($ejecutarConsulta1);
                }
            }
        }
    ?>
    </tr>
    
    </table>
    </div>
    </div>
    <div class="grid-2">
    <div class="resultados">
    <h3 class="title text-center">Zombies Infectados</h3>
 

    <?php
          
          $conexion_bd = conectar();
          $consulta2 = "SELECT Estado.Nombre, count(*) from actualiza join Estado on Estado.idEstado=actualiza.idEstado group by Estado.idEstado";
          var_dump($ejecutarConsulta2);
          $ejecutarConsulta2 = mysqli_query($conexion_bd, $consulta2);
          $verFilas2 = mysqli_num_rows($ejecutarConsulta2);
          $fila2 = mysqli_fetch_array($ejecutarConsulta2);
          echo($fila2);
          if(!$ejecutarConsulta2){
              echo("Error en la consulta");
          }else{
              if($verFilas2<1){
                  echo"<tr><td>Sin registros</td></tr>";
              }else{
                  for($i=0; $i<=$verFilas2; $i++){
                  echo'
                      <tr>
                      <td>'.$fila2[0].'</td>
                      <td>'.$fila2[1].'</td>
                      </tr>
                  ';
                      $fila2 = mysqli_fetch_array($ejecutarConsulta);
                  }
              }
          }
      ?>
       <table>
    <tr class="topchart">
        <td><strong>Estado</strong></td>
        <td><strong>Zombies</strong></td>
        <td><strong>Desorientacion</strong></td>
        <td><strong>Violencia</strong></td>
        <td><strong>Desmayo</strong></td>
        <td><strong>Transformacion</strong></td>
    </tr>
        
    <tr>
        <td>Total</td>
        <td>Infeccion</td>
        <td>Desorientacion</td>
        <td>Violencia</td>
        <td>Desmayo</td>
        <td>Transformacion</td>        
    </tr>
    
    </table>
    </div>    
    
  
