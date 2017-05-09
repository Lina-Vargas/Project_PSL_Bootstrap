<!-- Descripció de planes -->
    

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Planes<span class="text-muted"></span></h2>
          <p class="lead">    <body>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>

      


   <table>
  <tr style="background-color:"";color:white">
 
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Confirmar Reserva</th>
    
  </tr>
      <?php 

       foreach($datosdelplan as $plan): ?>
         
            
          
            <tr>
            <td style="color:black"> <?php echo $plan->nombre ?></td>
            <td style="color:black"> <?php echo $plan->descripcion ?> </td>
            <td style="color:black"> <?php echo $plan->precio ?> </td>
            <td><a href="<?=base_url()?>Reserva/reservar/<?php echo $plan->id?>">Confirmar Reserva</a></td>
            
            </tr>

     
            

         <?php endforeach; ?>
      </table>


   <a href="<?=base_url()?>Plan/index">Devolver</a>
        </div>
        
            </div>

    
      <!-- /Fin descripción -->