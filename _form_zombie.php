<!--Form-->
<section class=" container registro">
    <div class="grid-2">
    <div class="formulario">
        <form action="index.php" mothod="post">
        <div class="card">
            <label class="label">Nombre</label><br>
            <input type="text" class="formulario1" name="nombre" placeholder="Nombre Apellido(s)">
            <br>
            <label class="label">Estado</label><br>
            <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Selecciona un estado:</option>
    <option value="1">Infeccion</option>
    <option value="2">Desorientacion</option>
    <option value="3">Violencia</option>
    <option value="4">Desmayo</option>
    <option value="5">Transformacion</option>
  </select>
</div>
            <br>
            <br><br>
            <input type="submit" class ="submit" value="Ingresar" >
         </div>
            <?
             if(isset($_POST['submit'])){$nombre=$_POST["nombre"];insertar_registro($nombre,'zombie');}
                                        
            ?>
    </form>   
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
        
    </tr>
    
    </table>
    </div>
    </div>
    <div class="grid-2">
    <div class="resultados">
    <h3 class="title text-center">Visualizar Zombies</h3>
    <table>
    <tr class="topchart">
        <td><strong>Zombies</strong></td>
        <td><strong>Estado</strong></td>
    </tr>
    
    <tr>
        
    </tr>
    
    </table>
    </div>
    <div>
    <div class="resultados">
    <h3 class="title text-center">Zombies Infectados</h3>
  <table>
    <tr class="topchart">
        <td><strong>Total</strong></td>
        <td><strong>Infeccion</strong></td>
        <td><strong>Desorientacion</strong></td>
        <td><strong>Violencia</strong></td>
        <td><strong>Desmayo</strong></td>
        <td><strong>Transformacion</strong></td>
    </tr>
    
    <tr>
        <td></td>
        <td>Infeccion</td>
        <td>Desorientacion</td>
        <td>Violencia</td>
        <td>Desmayo</td>
        <td>Transformacion</td>        
    </tr>
    
    </table>
    </div>    
    </div>
    </div>
</section>

  
    
    