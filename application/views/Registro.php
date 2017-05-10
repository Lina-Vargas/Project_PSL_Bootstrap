<?= form_open("/Registro/registrardatos")?>
<div class="container col-sm-10 col-sm-offset-1" style="margin-top: 90px;">
  <form role="form" action="" method="post" >
    <div class="col-lg-6">
      <?php       

        $id = array('name'=>'id','placeholder'=>'Ingresa identificación', 'class' => 'form-control','value'=>set_value('id'));
        $nombres = array('name'=>'nombres','placeholder'=>'Ingresa Nombres completos', 'class' => 'form-control','value'=>set_value('nombres'));
        $apellidos =array('name'=>'apellidos','placeholder'=>'Ingresa Apellidos', 'class' => 'form-control','value'=>set_value('apellidos'));
        $telefono = array('name'=>'telefono','placeholder'=>'Ingresa número de teléfono', 'class' => 'form-control','value'=>set_value('telefono'));
        $celular = array('name'=>'celular','placeholder'=>'Ingresa número celular', 'class' => 'form-control','value'=>set_value('celular'));
        $correo =  array('name'=>'correo','placeholder'=>'Ingresa correo Electrónico', 'class' => 'form-control','value'=>set_value('correo'));
        $direccion = array('name'=>'direccion','placeholder'=>'Ingresa direccion', 'class' => 'form-control','value'=>set_value('direccion'));
        $clave = array('name'=>'clave','placeholder'=>'Ingresa clave', 'type'=>'password','class' => 'form-control','value'=>set_value('clave'));

      ?>  
      
      <?= form_label('Numero De Documento *:','id')?>
      <?= form_input($id)?><?php echo form_error('id')?>
      <?= form_label('Nombres *:','nombres')?>
      <?= form_input($nombres)?><?php echo form_error('nombres')?>
      <?= form_label('Apellidos *:','apellidos')?>
      <?= form_input($apellidos)?><?php echo form_error('apellidos')?>
      <?= form_label('Telefono *:','telefono')?>
      <?= form_input($telefono)?><?php echo form_error('telefono')?>
      <?= form_label('Celular *:','celular')?>
      <?= form_input($celular)?><?php echo form_error('celular')?>
      <?= form_label('Correo *:','correo')?>
      <?= form_input($correo)?><?php echo form_error('correo')?>
      <?= form_label('Direccion:','direccion')?>
      <?= form_input($direccion)?> <?php echo form_error('direccion')?>
      <?= form_label('Clave *:','clave')?>
      <?= form_input($clave)?><?php echo form_error('clave')?>
      <br>
      <input type="submit" name="submit" id="submit" value="Registrar Usuario" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
   <a><?= $mensaje ?></a><br>
  </div>
</div>

</div>
<?= form_close() ?>