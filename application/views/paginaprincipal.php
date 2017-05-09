<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo $img1; ?>" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PARA UNA NOCHE INOLVIDABLE</h1>
              <p>En Zafiro podrás hacer de cada fecha un acontecimiento inolvidable.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url() ; ?>Plan/Quince" role="button">Quinceaños</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo $img2; ?>" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PARA UN DÍA ESPECIAL</h1>
              <p>Tu felicidad nuestra mayor satisfacción.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url() ; ?>Plan/Cumple" role="button">Cumpleaños</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo $img3; ?>" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>EL MEJOR DÍA DE TU VIDA</h1>
              <p>´Lo mejor para para el día más importante de tu vida.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url() ; ?>Plan/Boda" role="button">Bodas</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container marketing">

	    <div class="row">
	        <div class="col-lg-4">
	          <img class="img-circle" src="<?php echo $img4; ?>" alt="Generic placeholder image" width="140" height="140">
	          <h2>Quinceaños</h2>
	          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
	          <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Quince" role="button">Ver Planes &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4">
	          <img class="img-circle" src="<?php echo $img5; ?>" alt="Generic placeholder image" width="140" height="140">
	          <h2>Evento ejecutivo</h2>
	          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
	          <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Evento" role="button">Ver Planes &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4">
	          <img class="img-circle" src="<?php echo $img6; ?>" alt="Generic placeholder image" width="140" height="140">
	          <h2>Boda</h2>
	          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	          <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Boda" role="button">Ver Planes &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	      </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo $img7; ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Cumpleaños</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Cumple" role="button">Ver Planes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo $img8; ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Primera comunión</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Comuni" role="button">Ver Planes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo $img9; ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Bautizo</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Bauti" role="button">Ver Planes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo $img10; ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Baby Shower</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Baby" role="button">Ver Planes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo $img11; ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Fiestas empresariales</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="<?php echo base_url() ; ?>Plan/Fiesta" role="button">Ver Planes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
	    </div>