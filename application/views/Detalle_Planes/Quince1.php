<!-- Descripció de planes -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Planes <span class="text-muted">choose your plan.</span></h2>
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

      <center><h1 style="background-color:"";color:white"> Lista de Planes</h1></center>


   <table>
  <tr style="background-color:"";color:white">
 
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
   
    
  </tr>
      <?php  foreach($datosdelplan as $plan): ?>
         
            
          
            <tr>
            <td style="color:black"> <?php echo $plan->nombre ?></td>
            <td style="color:black"> <?php echo $plan->descripcion ?> </td>
            <td style="color:black"> <?php echo $plan->precio ?> </td>
            
            
            </tr>

     
            

         <?php endforeach; ?>
      </table>
   
        </div>
        
            </div>

      <hr class="featurette-divider">

      <!-- /Fin descripción -->