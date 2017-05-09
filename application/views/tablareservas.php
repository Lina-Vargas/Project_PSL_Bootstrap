<!-- Descripció de usuarios -->

     
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Usuarios<span class="text-muted"></span></h2>
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

</head>

      


   <table>
  <tr style="background-color:"";color:white">
     <th>identificacion</th>
    <th>Nombres</th>
     <th>Apellidos</th>
      <th>Telefonos</th>
       <th>Celular</th>
        <th>Correo</th>
         <th>Direccion</th>
          
    
    
  </tr>
      <?php  foreach($usuario as $plan): ?>
         
            
          
            <tr>
            <td style="color:black"> <?php echo $plan->id ?></td>
            <td style="color:black"> <?php echo $plan->nombres ?></td>
            <td style="color:black"> <?php echo $plan->apellidos ?></td>
            <td style="color:black"> <?php echo $plan->telefono ?></td>
            <td style="color:black"> <?php echo $plan->celular ?></td>
            <td style="color:black"> <?php echo $plan->correo ?></td>
            <td style="color:black"> <?php echo $plan->direccion ?></td>
            

          
            
            </tr>
     
            

         <?php endforeach; ?>
     
      </table>


      </div>
        
            </div>

    

      <!-- /Fin descripción -->