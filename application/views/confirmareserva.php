<?= form_open("/Reserva/confirmar")?>
 <div class="container" style="margin-top: 90px;">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
           
            <p id="profile-name" class="profile-name-card"></p>
           
      <?php 


 
 $last = end($this->uri->segments);
        $fecha= array('name'=>'fecha','placeholder'=>'escribe tu fecha');
   $hora = array('name'=>'hora','placeholder'=>'escribe tu hora'); 
   

   ?>

<?=form_hidden('idPlan',$last);?>
<br><br>
<?= form_label('Fecha:','fecha')?>
<?= form_input($fecha)?><?php echo form_error('area')?>
<br><br>
<?= form_label('hora:','hora')?>
<?= form_input($hora)?><?php echo form_error('nivel')?>
<br><br>



                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Reservar</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
  </div><!-- /container -->
  <?= form_close()?>