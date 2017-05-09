<?= form_open("/Sesion/revisardatos")?>
 <div class="container" style="margin-top: 90px;">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
           
            <?php
     $correo= array('name'=>'correo', 'class' => 'form-control', 'value' => set_value('correo'));
     $clave= array('name'=>'clave', 'class' => 'form-control', 'type'=>'password','value' => set_value('clave'));
     
?>
            
                <span id="reauth-email" class="reauth-email"></span>
                <a><?= $mensaje ?></a><br>
                

  <?= form_label('Correo Electrónico/Email:','correo')?>
<?=form_input($correo)?><?php echo form_error('correo')?>
<br><br>
<?= form_label('Contraseña/clave:','clave')?>
<?=form_input($clave)?><?php echo form_error('clave')?>
<br><br>


                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar Usuario
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste la clave?
            </a>
        </div><!-- /card-container -->
  </div><!-- /container -->
  <?= form_close()?>