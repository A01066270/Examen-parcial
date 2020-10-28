<!--Form-->
<section class=" container registro">
    <div class="grid-2">
    <div class="formulario">
        <form mothod="post">
        <div class="card">
            <label class="label">Nombre</label><br>
            <input type="text" class="formulario1" name="nombre" placeholder="Nombre Apellido(s)">
            <br>
            <label class="label">Estado</label><br>

            <input type="text" class="formulario1" name="estado" placeholder="Estado">
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
        
    </tr>
    
    </table>
    </div>    
    </div>
    </div>
</section>

  
    
    