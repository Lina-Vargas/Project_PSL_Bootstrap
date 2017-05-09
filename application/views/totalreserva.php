<!-- Descripció de planes -->
    

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Datos Reserva Realizada<span class="text-muted"></span></h2>
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
     <th>identificacion</th>
    <th>Nombres</th>
     <th>Apellidos</th>
      <th>Telefonos</th>
       <th>Celular</th>
        <th>Correo</th>
         <th>Direccion</th>
         <th>Nombre Del Plan</th>
         <th>Descripcion Del Plan</th>
         <th>Precio Del Plan</th>
         <th>Fecha De La Reserva</th>
         <th>Hora De La Rerserva</th>
          
    
    
  </tr>
        <?php  foreach($usu as $plan): ?>
         
            
          
            <tr>
            <td style="color:black"> <?php echo $plan->idUsuario ?></td>
            <td style="color:black"> <?php echo $plan->nombres ?></td>
            <td style="color:black"> <?php echo $plan->apellidos ?></td>
            <td style="color:black"> <?php echo $plan->telefono ?></td>
            <td style="color:black"> <?php echo $plan->celular ?></td>
            <td style="color:black"> <?php echo $plan->correo ?></td>
            <td style="color:black"> <?php echo $plan->direccion ?></td>
            <td style="color:black"> <?php echo $plan->nombre ?></td>
            <td style="color:black"> <?php echo $plan->descripcion ?> </td>
            <td style="color:black"> <?php echo $plan->precio ?> </td>
            <td style="color:black"> <?php echo $plan->fecha ?> </td>
            <td style="color:black"> <?php echo $plan->hora ?> </td>

          
            
            </tr>
     
            

         <?php endforeach; ?>
      <table>

<a href="<?php echo base_url() ?>Sesion/cerrar_sesion"> Cerrar sesión </a>
        </div>
        
            </div>

    
      <!-- /Fin descripción -->