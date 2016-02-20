<?php
//Start session
session_start();?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Directorio de Instituciones en El Salvador</title>
</head>


<body>

<div class="page-wrapper">
    
    <header class="header header-transparent">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="assets/img/logoColegio2.png" alt="Logo">
                        <span><?php echo $_SESSION["sitio"] ?></span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <div class="header-action">
                            
                        </div><!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li class="active">
        <a href="index.html#">Inicio </a>

    </li>
    
    
    <li>
        <a href="empresa.html">Empresa </a>

    </li>

    <li >
        <a href="index.html#">Directorio<i class="fa fa-chevron-down"></i></a>

        <ul class="sub-menu">
            <li><a href="institucion-colegios.html">Colegios</a></li>
            <li><a href="institucion-academia.html">Academia de Idiomas</a></li>
        </ul>
    </li>

    <li>
        <a href="servicios.html">Servicios <i class="fa fa-chevron-down"></i></a>
		<ul class="sub-menu">
            <li><a href="servicios.html#transporte">Transporte Escolar</a></li>
            <li><a href="servicios.html#utiles">&Uacute;tiles Escolares</a></li>
            <li><a href="servicios.html#forrado">Forrado &Uacute;tiles</a></li>
             <li><a href="servicios.html#medico">Directorio M&eacute;dico</a></li>
        </ul>

    </li>
    <li >
        <a href="blog.html">Blog de Salud </a>

     </li>

    <li >
        <a href="contactenos.html">Cont&aacute;ctenos</i></a>
            </li>
</ul>

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <div class="hero-image-inner" style="background-image: url('assets/img/tmp/slider-large-3.jpg');">
        <div class="hero-image-content">
            <div class="container">
                <h1>Busca una mejor educaci&oacute;n</h1>

                <p>Encuentra los mejores colegios del pa&iacute;s para tus hijos.</p>

                <a href="listing-row.html" class="btn btn-primary btn-lg">Comienza Ahora</a>
                <a href="listing-submit.html" class="btn btn-secondary btn-lg">Nuestros Servicios</a>
            </div><!-- /.container -->
        </div><!-- /.hero-image-content -->

        <div class="hero-image-form-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 col-lg-4 col-lg-offset-7">
                        <form method="get" action="?">
                            <h2>Empieza a Buscar</h2>

                            <div class="hero-image-keyword form-group">
                                <input type="text" class="form-control" placeholder="Ingresa el nombre del Colegio">
                            </div><!-- /.form-group -->

                            <div class="hero-image-location form-group">
                                <select class="form-control" title="Ubicaci&oacute;n">
                                    <option>San Salvador</option>
                                    <option>Santa Ana</option>
                                    <option>Ahuachap&aacute;n</option>
                                    <option>Sonsonate</option>
                                </select>
                            </div><!-- /.form-group -->

                          <div class="hero-image-category form-group">
                                <select class="form-control" title="Categor&iacute;a">
                                    <option value="">Maristas</option>
                                    <option value="">Cat&oacute;licos</option>
                                    <option value="">Salesianos</option>
                                    <option value="">Bilingues</option>
                                </select>
                            </div><!-- /.form-group -->
                           
                            <div class="hero-image-price form-group">
                                <input type="text" class="form-control" placeholder="M&aacute;xima Cuota Mensual (opcional)">
                            </div><!-- /.form-group -->
                            
   


                            <button type="submit" class="btn btn-primary btn-block">Buscar</button>
                        </form>
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.hero-image-form-wrapper -->
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>



    <div class="page-header">
    <h1>Categor&iacute;as de Colegios &amp; Academias de Idiomas</h1>
    <p>Lista de las instituciones mas buscadas por nuestros usuarios <br>Ingrese a una de las categor&iacute;as de su inter&eacute;s</p>
</div><!-- /.page-header -->

<div class="cards-simple-wrapper">
    <div class="row">
        

        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-2.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Buscar Colegios Cat&oacute;licos</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Cat&oacute;lico</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-3.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Buscar Colegios Laicos</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Laicos</div>
                        
                            <div class="card-simple-price">12 Colegios</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-4.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Buscar Colegios Deportivos</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Deportivos</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-5.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Buscar Colegios Bilingues</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

                        <div class="card-simple-label">Bilingues</div>
                        
                    </div><!-- /.card-simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->
        
            
<!--
            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-6.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Italian Restaurant</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->
<!--
                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
<!--                        </div><!-- /.card-simple-content -->
<!--
                        <div class="card-simple-label">Restaurant</div>
                        
                            <div class="card-simple-price">$28 / person</div>
                        
                    </div><!-- /.card-simple-background -->
<!--                </div><!-- /.card-simple -->
 <!--           </div><!-- /.col-* -->
        
            
<!--
            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-7.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

 <!--                           <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
     <!--                   </div><!-- /.card-simple-content -->

         <!--               <div class="card-simple-label">Pub</div>
                        
                    </div><!-- /.card-simple-background -->
          <!--      </div><!-- /.card-simple -->
           <!-- </div><!-- /.col-* -->
        
            

      <!--      <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-8.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Retro Shop</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

        <!--                    <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
  <!--                      </div><!-- /.card-simple-content -->
<!--
                        <div class="card-simple-label">Shop</div>
                        
                            <div class="card-simple-price">$3 / cup</div>
                        
                    </div><!-- /.card-simple-background -->
  <!--              </div><!-- /.card-simple -->
 <!--           </div><!-- /.col-* -->
        
    <!--        

            <div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image="assets/img/tmp/product-9.jpg">
                    <div class="card-simple-background">
                        <div class="card-simple-content">
                            <h2><a href="listing-detail.html">Wine Tasting</a></h2>
                            <div class="card-simple-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->
<!--
                            <div class="card-simple-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div><!-- /.card-simple-actions -->
<!--                        </div><!-- /.card-simple-content -->
<!--
                        <div class="card-simple-label">Event</div>
                        
                            <div class="card-simple-price">$13 / ticket</div>
                        
 <!--                   </div><!-- /.card-simple-background -->
  <!--              </div><!-- /.card-simple -->
      <!--      </div><!-- /.col-* -->
        
    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->


            
            <div class="page-header">
    <h1>Colegios M&aacute;s Buscados</h1>
    <p>Lista de los colegios que nuestros clientes m&aacute;s frecuentan</p>
</div><!-- /.page-header -->


<div class="container">
    <div class="block background-white fullwidth pt0 pb0">
        <div class="partners">
    <a href="index.html#">
        <img src="assets/img/tmp/partner-1.jpg" alt="">
    </a>

    <a href="index.html#">
        <img src="assets/img/tmp/partner-2.jpg" alt="">
    </a>

    <a href="index.html#">
        <img src="assets/img/tmp/partner-3.jpg" alt="">
    </a>

    <a href="index.html#">
        <img src="assets/img/tmp/partner-4.jpg" alt="">
    </a>

    <a href="index.html#">
        <img src="assets/img/tmp/partner-5.jpg" alt="">
    </a>
</div><!-- /.partners -->

    </div>    
<!--
    <div class="block background-white fullwidth mt80">
        <div class="row">
            <div class="col-sm-6">
                <div class="posts">
    

    <div class="post">
        <div class="post-image">
            <img src="assets/img/tmp/product-6.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

 <!--       <div class="post-content">
            <div class="post-label">Automotive</div><!-- /.post-label -->
 <!--           <div class="post-date">07/12/2015</div><!-- /.post-date -->
<!--            <h2>The Deep South</h2>
            <p>Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Calculon is gonna kill us and it's a...</p>
        </div><!-- /.post-content -->
 <!--   </div><!-- /.post -->

<!--    

    <div class="post">
        <div class="post-image">
            <img src="assets/img/tmp/product-8.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->
<!--
        <div class="post-content">
            <div class="post-label">Transport</div><!-- /.post-label -->
<!--            <div class="post-date">06/18/2015</div><!-- /.post-date -->
 <!--           <h2>Raging Bender</h2>
            <p>For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. Then throw her in the laundry roo...</p>
        </div><!-- /.post-content -->
<!--    </div><!-- /.post -->

  <!--  

    <div class="post">
        <div class="post-image">
            <img src="assets/img/tmp/product-10.jpg" alt="">
            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
        </div><!-- /.post-image -->

 <!--       <div class="post-content">
            <div class="post-label">Vacation</div><!-- /.post-label -->
 <!--           <div class="post-date">05/26/2015</div><!-- /.post-date -->
 <!--           <h2>The Prisoner of Benda</h2>
            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet, I'm now bored with. Is there a place on th...</p>
        </div><!-- /.post-content -->
<!--    </div><!-- /.post -->
<!--</div><!-- /.posts -->

         <!--   </div><!-- /.col-* -->



    <div class="block background-white background-transparent-image fullwidth">
        <div class="page-header">
    <h1>Servicios</h1>
    <p>Vea los servicios que ofrecemos a lo largo de todo el pa&iacute;s.  Brindamos servicio de transporte escolar, tenemos a su disposici&oacute;n un <br>Blog de Salud y hacemos env&iacute;os de &uacute;tiles escolares a domicilio. Visite nuestra tienda en l&iacute;nea.</p>
</div><!-- /.page-header -->

<div class="cards-wrapper">
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card" data-background-image="assets/img/tmp/bus.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">Transporte Escolar</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Revisa nuestras ofertas de Transporte Escolar</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> Disponible en San Salvador y La Libertad
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div>

                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="card" data-background-image="assets/img/tmp/school-supply.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">&Uacute;tiles Escolares</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Compra el Paquete Completo</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> Hacemos env&iacute;os a todo El Salvador
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="index.html#" class="fa fa-bookmark-o"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div>

                <div class="col-sm-6">
                    <div class="card" data-background-image="assets/img/tmp/salud-blog.jpg">
                        <div class="card-label">
                            <a href="listing-detail.html">Blog de Salud</a>
                        </div><!-- /.card-label -->

                        <div class="card-content">
                            <h2><a href="listing-detail.html">Revisa nuestro Blog de Salud</a></h2>

                            <div class="card-meta">
                                <i class="fa fa-map-o"></i> Tips diarios por Expertos
                            </div><!-- /.card-meta -->

                            <div class="card-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.card-rating -->

                            <div class="card-actions">
                                <a href="index.html#" class="fa fa-bookmark-o marked"></a>
                                <a href="listing-detail.html" class="fa fa-search"></a>
                                <a href="index.html#" class="fa fa-heart-o"></a>
                            </div>
                        </div><!-- /.card-content -->
                    </div><!-- /.card -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.col-* -->

        <div class="col-sm-4">
            <div class="card card-tall" data-background-image="assets/img/tmp/medic.jpg">
                <div class="card-label">
                    <a href="listing-detail.html">Directorio Medico</a>
                </div><!-- /.card-label -->

                <div class="card-content">
                    <h2><a href="listing-detail.html">B&uacute;squedas por Especialidad</a></h2>

                    <div class="card-meta">
                        <i class="fa fa-map-o"></i> Directorio Medico Nacional
                    </div><!-- /.card-meta -->

                    <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.card-rating -->

                    <div class="card-actions">
                        <a href="index.html#" class="fa fa-bookmark-o"></a>
                        <a href="listing-detail.html" class="fa fa-search"></a>
                        <a href="index.html#" class="fa fa-heart-o marked"></a>
                    </div>
                </div><!-- /.card-content -->
            </div><!-- /.card -->
        </div><!-- /.col-* -->
    </div><!-- /.row -->
</div><!-- /.cards-wrapper -->

    </div>

   


    <div class="block background-secondary fullwidth mt80 mb-80 pt60 pb60">
        <div class="row">
    <div class="col-sm-12">
        <div class="contact-info-wrapper">
            <h2>¿Tienes alguna pregunta?</h2>

            <div class="contact-info">
                <span class="contact-info-item">
                    <i class="fa fa-at"></i>
                    <span>support@cesaldir.com</span>
                </span><!-- /.contact-info-item -->

                <span class="contact-info-item">
                    <i class="fa fa-phone"></i>
                    <span>+(503) - 7777 - 8888</span>
                </span><!-- /.contact-info-item -->
            </div><!-- /.contact-info-->
        </div><!-- /.contact-info-wrapper -->
    </div><!-- /.col-* -->
</div><!-- /.row -->

    </div>
</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Acerca de Cesaldir</h2>

                    <p>Cesaldir es un directorio de b&uacute;squeda para encontrar una soluci&oacute;n educativa para tus hijos que se adapte a tus necesidades.</p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Informaci&oacute;n de Contacto</h2>

                    <p>
                        Calle Zocalo, Antiguo Cuscatl&aacute;n, El Salvador<br>
                        +(503) - 7777 - 8888, <a href="index.html#">admin@cesaldir.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Mant&eacute;ngase Conectado</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-left">
                &copy; 2016 Todos los derechos reservados. Hecho por <a href="index.html#">Imagine Studio Solutions</a>.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="empresa.html">Empresa</a></li>
                    <li><a href="terms-conditions.html">T&eacute;rminos &amp; Condiciones</a></li>
                    <li><a href="contact-1.html">Contacto</a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/map.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&sensor=false" type="text/javascript"></script>

<script type="text/javascript" src="assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="assets/js/superlist.js" type="text/javascript"></script>

</body>
</html>
