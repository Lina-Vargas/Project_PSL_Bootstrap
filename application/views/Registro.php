<?= form_open("/Registro/registrardatos")?>
<div class="container col-sm-10 col-sm-offset-1" style="margin-top: 90px;">
<div class="row">
  <div class="col-md-12">
    
  </div>
  <form role="form" action="" method="post" >
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
      <?php       

    $id = array('name'=>'id','placeholder'=>'escribe tu id', 'class' => 'form-control','value'=>set_value('id'));
    $nombres = array('name'=>'nombres','placeholder'=>'escribe tus nombres', 'class' => 'form-control','value'=>set_value('nombres'));
  $apellidos =array('name'=>'apellidos','placeholder'=>'escribe tus apellidos', 'class' => 'form-control','value'=>set_value('apellidos'));
    $telefono = array('name'=>'telefono','placeholder'=>'escribe tu telefono', 'class' => 'form-control','value'=>set_value('telefono'));
    $celular = array('name'=>'celular','placeholder'=>'escribe tu celular', 'class' => 'form-control','value'=>set_value('celular'));
    $correo =  array('name'=>'correo','placeholder'=>'escribe tu correo', 'class' => 'form-control','value'=>set_value('correo'));
  $direccion = array('name'=>'direccion','placeholder'=>'escribe tu direccion', 'class' => 'form-control','value'=>set_value('direccion'));
    $clave = array('name'=>'clave','placeholder'=>'escribe tu clave', 'class' => 'form-control','value'=>set_value('clave'));
?>
<?= form_label('Numero De Documento *:','id')?>
<?= form_input($id)?><?php echo form_error('id')?>
<br><br>
<?= form_label('Nombres *:','nombres')?>
<?= form_input($nombres)?><?php echo form_error('nombres')?>
<br><br>
<?= form_label('Apellidos *:','apellidos')?>
<?= form_input($apellidos)?><?php echo form_error('apellidos')?>
<br><br>
<?= form_label('Telefono *:','telefono')?>
<?= form_input($telefono)?><?php echo form_error('telefono')?>
<br><br>
<?= form_label('Celular *:','celular')?>
<?= form_input($celular)?><?php echo form_error('celular')?>
<br><br>
<?= form_label('Correo *:','correo')?>
<?= form_input($correo)?><?php echo form_error('correo')?>
<br><br>
<?= form_label('Direccion:','direccion')?>
<?= form_input($direccion)?><?php echo form_error('direccion')?>
<br><br>
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