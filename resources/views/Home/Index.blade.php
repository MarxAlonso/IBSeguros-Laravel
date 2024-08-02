<!-- *************  INICIO BANNER *************** -->
<div class="hero_area">
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="slider_bg-container"></div>
      <div class="slider-container">
        <div class="detail-box">
          <h1>RECIBE EL MEJOR<br>ASESORAMIENTO PARA<br>TU SEGURO</h1>
          <p>"La elección más segura para tus seguros de vida, vehiculares y mucho más."</p>
          <div>
            <a href="contacto" class="slider-link">Contáctanos</a>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
        <div class="img-box">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/images/seguro1.jpg')}}" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/seguro2.jpg')}}" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/seguro3.jpg')}}" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/images/seguro4.jpg')}}" alt="">
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- ********************* FIN BANNER ****************-->
  
  <!-- *************  INICIO NOSOTROS *************** -->
  <section id="nosotros">
  
    <div class="container ">
  
      <h2 class="mt-5" style="text-align: center; font-family: fantasy; 
  font-size: 28px; border: 2px solid black; border-radius: 10vmax;
  border-color:#5c92ba; padding: 18px;color:#456bb1;margin-bottom: 50px;">¿CÓMO ASESORARSE?</h2>
      <style>
        .columns-container {
          display: flex;
          width: 100%;
        }
  
  
        .paso {
          font-size: 30px;
          /* Tamaño de fuente */
          color: #486cae;
          /* Color del texto */
          font-family: system-ui;
          /* Familia de fuente */
          font-weight: 700;
  
        }
  
        .paso2 {
          font-size: 30px;
          /* Tamaño de fuente */
          color: #486cae;
          /* Color del texto */
          font-family: system-ui;
          /* Familia de fuente */
          font-weight: 700;
          margin-left: 8%;
        }
  
        .contenido-paso2 {
          margin-left: 12%;
        }
  
  
        @media (max-width: 500px) {
          .row {
            flex-direction: column;
          }
  
          .col-md-4 {
            width: 100%;
          }
  
          .col-md-4 {
            order: 2;
          }
  
          .col-md-6 {
            width: 100%;
          }
  
          .col-md-6.a {
            order: 2;
          }
  
          .col-md-6:not(.a) {
            order: 1;
          }
  
          .paso2 {
            margin-left: 0;
          }
  
          .contenido-paso2 {
            margin-left: 15px;
  
          }
        }
  
        @media (max-width: 800px) {
          .paso2 {
            margin-left: 0;
          }
  
          .contenido-paso2 {
            margin-left: 0;
          }
        }
  
        @media screen and (max-width: 1070px) {
          .menu {
            height: 85px;
            position: relative;
            z-index: 1000;
  
  
          }
        }
      </style>
  
  
  
      <div class="container">
        <div class="row">
          <div class="col-md-6 a">
            <img src="{{asset('/images/IMAGEN-1-PASO-1.png')}}" alt="Imagen" class="img-fluid mx-auto d-block">
          </div>
          <div class="col-md-6 ">
            <p class="paso">Primer paso:</p>
            <div class="contenido-paso" style="margin-left: 15px;">
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">¡Para hacer uso de nuestros servicios entra a</p>
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">"Contáctanos" que se encuentra al inicio de la</p>
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">página!</p>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-6 align-self-center">
            <p class="paso2">Segundo paso:</p>
            <div class="contenido-paso2">
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">Completa tus datos y en instantes estaremos</p>
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">contactándonos con usted.</p>
            </div>
          </div>
          <div class="col-md-4 align-self-center ">
            <img src="{{asset('/images/IMAGEN-2-PASO-2.png')}}" alt="Imagen" class="img-fluid mx-auto d-block">
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-6 a">
            <img src="{{asset('/images/IMAGEN-3-PASO-3.png')}}" alt="Imagen" class="img-fluid mx-auto d-block" style="width: 33%;height: auto;">
          </div>
          <div class="col-md-6 align-self-center">
            <p class="paso">Tercer paso:</p>
            <div class="contenido-paso " style="margin-left: 15px;">
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">¡Coméntanos cuáles son sus necesidades y</p>
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">buscaremos la póliza más adecuada para su</p>
              <p style="margin-bottom: 0; color:#41629f; font-size:18px">bolsillo!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- *************  FIN NOSOTROS *************** -->
    <!-- ****** Servicios ******** -->
    <section id="bloghome">
      <div class="container py-5 wow animate__animated animate__fadeInUp " data-wow-duration="3s">
        <div class="carousel">
          <div class="text-center logo__blog">
  
            <h2 class="mt-4le" Style="margin-top:30px">NUESTROS SEGUROS</h2>
  
          </div>
  
          <div class="carousel__contenedor_blog">
            <button arial-label="Anterior" class="carousel__anterior_blog">
              <i class="fas fa-angle-left"></i>
            </button>
            <button arial-label="Siguiente" class="carousel__siguiente_blog">
              <i class="fas fa-angle-right"></i>
            </button>
            <div class="carousel__lista_blog">
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos_blog container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
  
                        <img src="{{asset('/images/seguro-sctr.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white">
                          <h5 style="font-size:medium;font-weight: 600;">SCTR</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            Brindamos el Seguro Complementario de Trabajo de Riesgo (SCTR),
                            un seguro obligatorio que protege a los trabajadores
                            que realizan actividades de alto riesgo. </p>
                        </div>
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
                        <img src="{{asset('/images/seguro-eps.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white">
                          <h5 style="font-size:medium;font-weight: 600;">EPS</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            El seguro brinda acceso a servicios de salud de calidad a un
                            costo asequible. Los trabajadores que se encuentran afiliados
                            al Seguro EPS tienen derecho a una serie de beneficios.
                          </p>
                        </div>
  
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
                        <img src="{{asset('/images/seguro-vida.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white texte-white">
                          <h5 style="font-size:medium;font-weight: 600;">Seguro de vida</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            Un seguro de salud es una inversión en tu bienestar y tranquilidad.
                            Proporciona la seguridad de acceder a atención médica de calidad
                            cuando más lo necesitas.</p>
                        </div>
  
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
  
  
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
  
                        <img src="{{asset('/images/seguro-vida-ley.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white texte-white">
                          <h5 style="font-size:medium;font-weight: 600;">
                            Seguro de Vida Ley</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            Un seguro de vida de acuerdo con la ley es una garantía de seguridad
                            y protección para ti y tus seres queridos.</p>
                        </div>
  
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
  
                        <img src="{{asset('/images/seguro-vehicular.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white texte-white">
                          <h5 style="font-size:medium;font-weight: 600;">Seguro Vehicular</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            Un seguro vehicular es tu escudo de protección en la carretera.
                            Con nuestro seguro de auto, puedes disfrutar de la libertad de
                            conducir sabiendo que estás respaldado en caso de accidentes.</p>
                        </div>
  
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="carousel__elemento">
                <div class="container-fluid cards-inicio">
                  <div class="lista_elementos container homeport1">
                    <div class="card_elemento">
                      <div class="card__blog">
  
                        <img src="{{asset('/images/seguro-viajes.jpg')}}" style="height: 194px;width: 100%;" />
                        <div class="p-3 bg-white texte-white">
                          <h5 style="font-size:medium;font-weight: 600;">Seguro de Viaje</h5>
                          <p class="p-0 m-0 text-justify" style="color:gray">
                            Un seguro de viajes es tu compañero de confianza cuando
                            exploras el mundo.Nuestro seguro de viajes está diseñado
                            para brindarte protección y tranquilidad durante tus aventuras. </p>
                        </div>
  
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
          <div class="container text-center mt-4">
            <a href="seguros">
              <button class="btn btn-primary">Ver Más</button>
            </a>
          </div>
        </div>
      </div>
      </div>
    </section>
  
    <!-- ****** Fin  Servicios ******** -->
  
    <!-- ****** Ini Promociones ******** -->
    <style>
      .custom-col-80 {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
      }
  
      .img-container {
        position: relative;
        overflow: hidden;
        height: 440px;
        /* Altura de la imagen */
  
      }
  
      .zoom-img {
        width: 100%;
        /* Asegura que la imagen ocupe toda la altura del contenedor */
      }
  
      .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(22, 51, 77, 0.52);
        display: flex;
        justify-content: center;
        align-items: center;
      }
  
      .form-container {
        width: 70%;
        /* Ancho del formulario */
  
        padding: 20px;
  
      }
  
      .paso-1 {
        font-size: 27px;
        /* Tamaño de fuente */
        color: #486cae;
        /* Color del texto */
        font-family: system-ui;
        /* Familia de fuente */
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
  
      }
  
      .paso-2 {
        font-size: 36px;
        /* Tamaño de fuente */
        color: #486cae;
        /* Color del texto */
        font-family: system-ui;
        /* Familia de fuente */
        font-weight: 700;
        text-align: center;
  
      }
  
      .paso-3 {
        font-size: 36px;
        /* Tamaño de fuente */
        color: #486cae;
        /* Color del texto */
        font-family: system-ui;
        /* Familia de fuente */
        font-weight: 700;
        text-align: center;
        margin-top: -15px;
      }
  
      .paso-4 {
        color: #41629f;
        /* Color del texto */
        font-family: system-ui;
        /* Familia de fuente */
        margin-top: 25px;
        margin-left: 8%;
        margin-right: 2%
      }
  
      .paso-5 {
        color: #41629f;
        /* Color del texto */
        font-family: monospace;
        /* Familia de fuente */
        margin-top: 25px;
        text-align: center;
        font-weight: 700;
      }
  
      .paso-6 {
        color: #41629f;
        /* Color del texto */
        font-family: monospace;
        /* Familia de fuente */
        text-align: center;
        margin-top: -15px;
        font-weight: 700;
      }
    </style>
    <div class="container" style="margin-top:50px">
      <div class="row">
        <div class="col-md-6 custom-col-80" style="margin-top:2%;">
          <div class="img-container" style="position: relative;">
            <img src="{{asset('/images/ibseguros4.png')}} " style="filter: invert(19%) sepia(18%) saturate(877%) hue-rotate(144deg) brightness(89%) contrast(87%); margin-top: -20px;" alt="Imagen" class="img-fluid mx-auto d-block zoom-img" Style="height:400px">
            <div class="content" style="position: absolute; top: 0; left: 0; width: 100%;">
              <p class="paso-1">IBSEGUROS</p>
              <p class="paso-2">¿Deseas encontrar </p>
              <p class="paso-3 "> promociones?</p>
              <p class="paso-4">En nuestra página web podrás encontrar blogs donde describimos acerca de todos los tipos de seguro y cómo los manejamos para que sepas que póliza se adecua a tus necesidades.</p>
              <p class="paso-5">¡No dejes nada al azar! Asegura tu bienestar</p>
              <p class="paso-6">con nosotros.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6">
          <div class="contenido-paso" style="margin-left: 15px; position: relative;">
            <div class="img-container" style="height: 438px;">
              <img src="{{asset('/images/emergency-room.jpg')}}" alt="Imagen" class="img-fluid mx-auto d-block zoom-img" Style="height: 437px;">
              <div class="overlay">
                <div class="form-container">
                  <!-- Aquí va tu formulario -->
                  <form>
                    <div class="form-group">
                      <label style="color:white;" for="nombre">Nombre:</label>
                      <input style="border:none; width:100%" type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                      <label style="color:white" for="apellido">Apellido:</label>
                      <input style="border:none;  width:100%" type="text" class="form-control" id="apellido">
                    </div>
                    <div class="form-group">
                      <label style="color:white" for="email">Correo electrónico:</label>
                      <input style="border:none;  width:100%" type="email" class="form-control" id="email">
                    </div>
                    <div class="text-center"> <!-- Div para centrar el botón -->
                      <button style="width:70%;margin-top:15px;background-color: #6982be;border:none;font-family:monospace" type="submit" class="btn btn-primary">REGISTRAR</button>
                    </div>
  
                    <div style="text-align: center; margin-top: 20px;">
                      <p style="color: #ffffffa6;font-family:monospace;font-size:14px;">¡Estaremos en contacto y cualquier promoción se le haremos saber!</p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- ****** Fin  Promociones ******** -->
    <!-- *************** contactos ********************* -->
  
    <section class="contact_section layout_padding-bottom mt-5">
      <div class="container-fluid">
        <div class="text-center logo__blog">
          <div class="custom_heading-container">
            <h2 class="mt-4le">
              CONTACTENOS
            </h2>
            <br>
          </div>
        </div>
        <div class="layout_padding-top layout_padding2-bottom">
          <div class="row">
            <div class="col-md-3 a" style="margin-left:150px">
              <form class="ajaxcontacto" method="POST" action="controller/mailcontacto.php">
                <div class="contact_form-container">
                  <div class="" id="grupo__nombres">
                    <div class="formulario__grupo-input">
                      <input required type="text" pattern="^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+$" id="nombres" name="nombres" placeholder="Nombres y Apellidos" />
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre que ser de mínimo de 3 caracteres y máximo de 72 caracteres y solo puede contener letras. </p>
                  </div>
                  <div class="" id="grupo__correo">
                    <div class="formulario__grupo-input">
                      <input required type="email" id="email" name="email" placeholder="Correo" />
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo tiene que tener la siguiente forma "example@example.com". </p>
                  </div>
                  <div id="grupo__telefono">
                    <div class="formulario__grupo-input">
                      <input type="text" id="celular" name="celular" pattern="[9][0-9]{8}" oninvalid="setCustomValidity('Ingrese un numero valido, debe ser de nueve digitos y valido para Lima-Perú')" oninput="setCustomValidity('')" maxlength="9" minlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Celular">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El telefono tiene que ser de 9 caracteres y solo puede contener numeros. </p>
                  </div>
                  <div class="" id="grupo__comentario">
                    <div class="formulario__grupo-input">
                      <input type="text" name="comentario" id="comentario" placeholder="Comentario" class="message_input" required="required">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Un comentario tiene que ser de minimo 100 caracteres y máximo de 500 caracteres y solo puede contener numeros, letras </p>
                  </div>
                </div>
                <div class="col mt-4">
                  <div class="g-recaptcha" data-sitekey="6LcjeNYhAAAAADsEeMzI2CnqPdN4yufNFIjGxcD0"></div>
                </div>
                <div class="formulario__mensaje mb-4 mt-4" id="formulario__mensaje">
                  <p><i class="fas fa-exclamation-triangle"></i> <b>Error: </b><span id="error-mensaje"></span></p>
                </div>
                <span class="help-block">
                  <input required class="btn btn-warning btn-lg marginlastmin justify-content-center" type="submit" name="submit" value="Enviar" />
                  <span class="spinner-border text-success spinner-border-sm" id="spinnerPersona" role="status" aria-hidden="true" style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;"></span>
                </span>
              </form>
            </div>
            <div class="col-md-4">
              <div class="map-box">
                <div id="map">
                  <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.83709799223138!2d-76.96944849806715!3d-12.085186778097572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ab78294add%3A0xe2ec52def207e626!2sAv.%20Club%20Golf%20los%20Incas%20208%2C%20Santiago%20de%20Surco%2015023!5e0!3m2!1ses!2spe!4v1655932838924!5m2!1ses!2spe" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
                  <br>
                  <br>
                  <br>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="text-center" style="width:415px">
                <img src="{{asset('/images/personaje.png')}}" alt="Descripción de la imagen" class="img-fluid" style="margin-left:8px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- *************** FIN CONTACTO ********************* -->
    <style>
      @media (max-width: 480px) {
        .a {
          margin-left: 0 !important;
        }
      }
  
  
      @media (max-width: 844px) {
        .a {
          margin-left: 0 !important;
        }
      }
  
      @media (max-width: 1132px) {
        .a {
          margin-left: 0 !important;
        }
      }
  
      @media (max-width: 574px) {
        .carousel__anterior_blog {
  
          left: -9px;
        }
      }
    </style>