<style>
    .carouselFondo2 {
        background-image: url('/images/fondo-informacion-seguros.jpg');
        background-size: cover;
        background-position: center center;
        /* Centra la imagen verticalmente */
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        height: 600px;
    }


    .overlay2 {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(59, 85, 202, 0.3);
        /* Color azul con 50% de opacidad */
    }

    .overlay2 h2 {
        color: white;
        font-size: 87px;
        font-weight: bold;
        position: relative;
        text-align: left;
        margin-left: 70px;
    }

    @media screen and (max-width: 440px) {
        .overlay2 h2 {
            color: white;
            font-size: 45px;
            font-weight: bold;
            position: relative;
            text-align: left;
        }
    }

    .overlay2 p {
        color: white;
        font-size: 20px;
        position: relative;
        text-align: left;
        margin-left: 53px;
    }

    .enlace2 {
        text-decoration: none;
        color: white;
        text-align: left;
        margin-left: 55px;
        transition: text-shadow 0.3s ease;
        /* Agrega una transición suave al efecto de brillo */
    }

    .enlace2 h4 {
        font-size: 15px;
        text-decoration: none;
        margin-left: 30px;
    }

    .enlace2:hover {
        text-decoration: none;
        text-shadow: 0 0 20px white;
        /* Crea un efecto de brillo con una sombra blanca */
        color: white;
        /* Asegura que el texto siga siendo blanco */
        text-align: left;
        margin-left: 55px;
    }
</style>
<div class="carouselFondo2">
    <div class="overlay2">
        <div>
            <br><br><br><br><br>
        </div>
        <h2>SEGUROS</h2>
        <P>¡Te brindamos información acerca de nuestras pólizasde seguros <br>
            para que escojas el más adecuado para tu situación!</P>
        <a class="enlace2" href="">
            <div style="margin-top: 30px; margin-left: 35px;">&#8594;</div><br>
            <h4>Ver mas</h4>
        </a>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" id="input-busqueda" class="form-control" placeholder="Buscar..."
                    aria-label="Buscar..." aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="boton-busqueda"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
<br>
<style>
    .info-div {
        border: 4px solid #4968af;
        /* Borde del rectángulo */
        border-radius: 70px;
        /* Borde circular */
        padding: 1.2px;
        margin-bottom: 20px;
        overflow: hidden;
        /* Para contener el float */
        position: relative;
    }

    .info-div img {
        float: left;
        /* Alinea la imagen a la izquierda */
        margin-right: 40px;
        /* Margen a la derecha para separarla del texto */

        /* Hace que la imagen tenga forma circular */
        width: 359px;
        height: 230px;
        /* Tamaño máximo de la imagen */
        /* Altura automática para mantener la proporción */
        transition: transform 0.3s ease;
    }

    .info-div:hover img {
        transform: scale(1.1);
        /* Agrandar la imagen al pasar el mouse */
    }



    /* Para que el texto se alinee a la derecha */
    .info-div .info-text {
        overflow: visible;
        /* Para contener el float */
    }

    /* Agrega un clearfix para limpiar los floats */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 500px) {
        .info-div img {
            float: left;
            /* Alinea la imagen a la izquierda */
            margin-right: 20px;
            width: 461px;
            height: 271px;
            margin-bottom: 20px;
        }
        .info-div {
            border-radius: 32px;
        }
        .enlace-leer {
            margin-left: 38%;
        }
    }
    @media screen and (max-width: 420px) {
        .info-div img {
            float: left;
            /* Alinea la imagen a la izquierda */
            margin-right: 20px;
            width: 380px;
            height: 250px;
        }


        .info-text ul {
            list-style-type: none;
            /* Elimina la viñeta predeterminada */
            padding-left: 20px;
            font-size: 14px;
            /* Añade un espacio a la izquierda para el texto */
        }

        .info-text ul li:before {
            content: "\2022";
            /* Utiliza un punto como viñeta */
            color: black;
            /* Color del punto */
            display: inline-block;
            /* Muestra el punto como un elemento de bloque */
            width: 1em;
            /* Ancho del punto */
            margin-left: -1em;
            /* Mueve el punto al margen izquierdo */
        }

        .info-text h3 {

            font-size: 25px;
            /* Para contener el float */
        }


        .enlace-leer a {
            margin-top: -15px;
        }
    }

    .info-text ul {
        list-style-type: none;
        /* Elimina la viñeta predeterminada */
        padding-left: 20px;
        /* Añade un espacio a la izquierda para el texto */
    }

    .info-text ul li:before {
        content: "\2022";
        /* Utiliza un punto como viñeta */
        color: black;
        /* Color del punto */
        display: inline-block;
        /* Muestra el punto como un elemento de bloque */
        width: 1em;
        /* Ancho del punto */
        margin-left: -1em;
        /* Mueve el punto al margen izquierdo */
    }

    .enlace-leer {
        text-decoration: none;
        color: white;
        background-color: #244289;
        padding: 0;
        padding-left: 5px;
        padding-right: 5px;
        border: 2px solid #244289;
        border-radius: 30px;
    }

    .enlace-leer:hover {
        text-decoration: none;
        color: black;
        background-color: white;
        border: 1px solid #244289;

    }

    h3 {
        font-weight: 680;

    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="info-div clearfix">
                <img src="/images/seguro-vida.jpg" alt="Imagen 1">
                <div class="info-text">
                    <h3>Seguros de Salud</h3>
                    <ul>
                        <li>Atención ambulatoria y hospitalaria.</li>
                        <li>Te protegemos si eres trabajador independiente.</li>
                        <li>Contamos con cobertura frente a accidentes.</li>
                        <li>Ofrecemos cobertura internacional para emergencias médicas cuando estás fuera de tu país de
                            origen.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-salud">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-eps-empresas.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros EPS(empresas y persona natural)</h3>
                    <ul>
                        <li>Atención ambulatoria y hospitalaria.</li>
                        <li>Te protegemos si eres trabajador independiente.</li>
                        <li>Contamos con cobertura frente a accidentes.</li>
                        <li>Ofrecemos cobertura internacional para emergencias médicas cuando estás fuera de tu país de
                            origen.</li>
                    </ul>
                    <a class="enlace-leer" href="Seguro-EPS-empresas">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-de-accidentes.png" alt="Imagen 3">
                <div class="info-text">
                    <h3>Seguros contra Accidentes</h3>
                    <ul>
                        <li>Beneficio por fallecimiento accidental.</li>
                        <li>Cubrimos los costos asociados con la atención médica necesaria como resultado de un
                            accidente, como visitas al médico, hospitalización, cirugía, y otros tratamientos médicos.
                        </li>
                        <li>Reembolso de gastos de transporte médico, gastos funerarios o pagos diarios por
                            hospitalización</li>
                    </ul>
                    <a class="enlace-leer" href="Seguro-contra-Accidentes">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-oncologico.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros Oncológico</h3>
                    <ul>
                        <li>Cuentas con un plan anual de exámenes preventivos diferenciados</li>
                        <li>Ofrecemos un tratamiento completo, incluyendo cirugías, quimioterapia, radioterapia y
                            terapias dirigidas, entre otros.</li>
                        <li>Chequeo preventivo y tratamientos cubiertos al 100%.</li>
                    </ul>
                    <a class="enlace-leer" href="Seguro-Oncologico">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-ahorro.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros de Ahorro</h3>
                    <ul>
                        <li>Proporcionamos beneficios en caso de fallecimiento del titular del seguro durante el plazo
                            del contrato.</li>
                        <li>Tu familia estara protegida desde el primer dia.</li>
                        <li>Te ofrecemos una cobertura por fallecimiento para que quienes más amas estén protegidos.
                        </li>
                        <li>Tenemos la mejor rentabilidad para tu dinero.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-ahorro">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-corto-plazo.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros de Vida a Corto Plazo</h3>
                    <ul>
                        <li>Garantizamos la estabilidad financiera durante un período específico.</li>
                        <li>Protección durante un viaje o una situación de riesgo temporal.</li>
                        <li>Cobertura para un proyecto específico.</li>
                        <li>Cobertura en caso de fallecimiento.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-cortoPlazo">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-largo-plazo.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros de Vida a Largo Plazo</h3>
                    <ul>
                        <li>Proporcionamos un beneficio por fallecimiento.</li>
                        <li>Permitimos la flexibilidad en cuanto al pago de primas y la cantidad de cobertura.</li>
                        <li>Beneficios fiscales.</li>
                        <li>Proporcionamos al asegurado tener la opción de tomar préstamos contra ese valor o retirar
                            parte de él.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-largoPlazo">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-academico.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros Académico</h3>
                    <ul>
                        <li>Ahorro para el futuro universitario.</li>
                        <li>Protección de los alumnos contra el riesgo de accidentes dentro o fuera de su centro de
                            estudios.</li>
                        <li>Asegurar el pago de las pensiones estudiantiles en caso de fallecimiento del padre o
                            apoderado.</li>
                        <li>Elección del monto y el plazo asegurado.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-academico">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-vehicular.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros Vehicular</h3>
                    <ul>
                        <li>Cubrimos los daños a terceros en caso de que seas responsable de un accidente.</li>
                        <li>Cobertura por los daños a tu propio vehículo en caso de un accidente, sin importar quién
                            tenga la culpa.</li>
                        <li>Ofrecemos protección contra robos, vandalismo, incendios y otros eventos no relacionados con
                            accidentes de tráfico.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-vehicular">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-viajes.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros de Viajes</h3>
                    <ul>
                        <li>Cubrimos gastos médicos y hospitalarios en caso de enfermedad o lesión durante el viaje.
                        </li>
                        <li>Ofrecemos reembolso de los gastos si debes cancelar o interrumpir tu viaje debido a
                            circunstancias imprevistas, como enfermedad grave, accidente, entre otros.</li>
                        <li>Cubrimos la pérdida, robo o daño del equipaje durante el viaje.</li>
                    </ul>
                    <a class="enlace-leer" href="Seguro-de-Viajes">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-hogar.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros de Hogar</h3>
                    <ul>
                        <li>Cubre daños a la estructura de la casa, como paredes, techos, suelos, etc.</li>
                        <li>Ofrece protección si alguien resulta lesionado en tu propiedad y decides demandarte.</li>
                        <li>Cubrimos los costos de alojamiento si tu casa se vuelve inhabitable debido a un evento
                            cubierto.</li>
                        <li>Tenemos la mejor cobertura para tu casa.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-hogar">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-soat.png" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros SOAT</h3>
                    <ul>
                        <li>Cobertura por accidentes.</li>
                        <li>Cobertura médica, asi como los gastos para la rehabilitación.</li>
                        <li>Cubrimos la atencion médica completa.</li>
                        <li>Cobertura de sepelio y muerte.</li>
                    </ul>
                    <a class="enlace-leer" href="seguros-soat">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-sctr.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>SCTR</h3>
                    <ul>
                        <li>Cobertura integral para salud y seguridad en el trabajo.</li>
                        <li>Pólizas flexibles adaptadas a las características de tu empresa y necesidades específicas.
                        </li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de SCTR.</li>
                        <li>Proceso de gestión de reclamaciones rápido y eficiente.</li>
                    </ul>
                    <a class="enlace-leer" href="SCTR">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-eps.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>EPS</h3>
                    <ul>
                        <li>Cobertura completa para servicios médicos y tratamientos.</li>
                        <li>Pólizas flexibles adaptadas a tus necesidades de salud.</li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de salud.</li>
                        <li>Proceso de gestión de reclamaciones ágil y eficiente.</li>
                    </ul>
                    <a class="enlace-leer" href="EPS">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-vida-ley.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Vida Ley</h3>
                    <ul>
                        <li>Ofrecemos remuneraciones mensuales asegurables.</li>
                        <li>Protegemos contra la invalidez Total y Permanente por Accidente.</li>
                        <li>Cubrimos lesiones y fallecimientos de los empleados.</li>
                        <li>Brindamos tranquilidad a los beneficiarios del asegurado fallecido por causas naturales.
                        </li>
                    </ul>
                    <a class="enlace-leer" href="Vida-Ley">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-transporte.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguro de Transporte</h3>
                    <ul>
                        <li>Protección para la carga.</li>
                        <li>Cubrimos todos los envíos dentro de un período determinado, o específicas, cubriendo un solo
                            envío.</li>
                        <li>Cubrimos contra el robo con fractura del medio conductor.</li>
                        <li>Cubrimos pérdidas o daños a la mercancía durante el tránsito.</li>
                    </ul>
                    <a class="enlace-leer" href="Transporte">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-incendio.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros contra Incendios</h3>
                    <ul>
                        <li>Cobertura integral contra daños por incendio.</li>
                        <li>Pólizas flexibles adaptadas a tus propiedades y necesidades específicas.</li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros contra incendios.</li>
                        <li>Proceso de reclamaciones rápido y eficiente.</li>
                    </ul>
                    <a class="enlace-leer" href="Incendio">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="/images/seguro-car.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros CAR</h3>
                    <ul>
                        <li>Cobertura completa para proyectos de construcción de todo tipo.</li>
                        <li>Pólizas flexibles adaptadas a las necesidades específicas de tu proyecto.</li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de construcción.</li>
                        <li>Proceso de reclamaciones rápido y eficiente para minimizar interrupciones.</li>
                    </ul>
                    <a class="enlace-leer" href="CAR">Leer más</a>
                </div>
            </div>

            <div class="info-div clearfix">
                <img src="/images/seguro-rotura-maquinaria.jpg" alt="Imagen 2">
                <div class="info-text">
                    <h3>Seguros contra rotura de maquinaria</h3>
                    <ul>
                        <li>Cobertura integral para daños y pérdidas por rotura de maquinaria.</li>
                        <li>Pólizas flexibles adaptadas a las características de tus equipos y necesidades específicas.
                        </li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de Rotura de
                            Maquinaria.</li>
                        <li>Proceso de reclamaciones rápido y eficiente.</li>
                    </ul>
                    <a class="enlace-leer" href="Rotura-Maquinaria">Leer más</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Botón Ver más -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <button id="ver-mas-btn" class="btn btn-primary mt-4">Ver más</button>
        </div>
    </div>
</div>

<br>
<!-- Contenedor de los elementos que se mostrarán después de hacer clic en "Ver más" -->
<div id="contenido-adicional" style="display: none;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="info-div clearfix">
                    <img src="/images/seguro-responsabilidad-civil.jpg" alt="Imagen 1">
                    <div class="info-text">
                        <h3>Responsabilidad Civil</h3>
                        <ul>
                            <li>Cobertura integral para responsabilidad civil general y profesional.</li>
                            <li>Pólizas flexibles adaptadas a las características de tus actividades y riesgos
                                específicos.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de Responsabilidad
                                Civil.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Responsabilidad-Civil">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-cascos-maritimos.png" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Cascos Marítimos</h3>
                        <ul>
                            <li>Cobertura completa para embarcaciones de todo tipo.</li>
                            <li>Pólizas flexibles adaptadas a tus necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros marítimos.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Cascos-Maritimos">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-lucros-cesantes.jpg" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Lucro Cesante</h3>
                        <ul>
                            <li>Cobertura integral para pérdida de ingresos debido a eventos cubiertos.</li>
                            <li>Pólizas flexibles adaptadas a las características de tu negocio.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de Lucro Cesante.
                            </li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Lucro-Cesante">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-multiriesgos.png" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Multirriesgo</h3>
                        <ul>
                            <li>Cobertura integral para daños materiales y responsabilidad civil.</li>
                            <li>Pólizas flexibles adaptadas a las características de tus activos y operaciones.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros Multirriesgos.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Multirriesgo">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-trec.jpg" alt="Imagen 2">
                    <div class="info-text">
                        <h3>TREC</h3>
                        <ul>
                            <li>Proporcionamos cobertura en caso de robo o vandalismo de los equipos asegurados.</li>
                            <li>Cubrimos daños causados por defectos en el diseño o fabricación de los equipos.</li>
                            <li>Cubrimos los daños que puedan ocurrir durante el transporte de los equipos hacia o desde
                                el lugar de trabajo.</li>
                        </ul>
                        <a class="enlace-leer" href="TREC">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-robo-asalto.jpg" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Robo y Asalto</h3>
                        <ul>
                            <li>Cobertura integral contra pérdidas por robo y asalto.</li>
                            <li>Pólizas flexibles adaptadas a tus bienes y necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros contra Robo y
                                Asalto.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Robo-Asalto">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-caucion-credito.png" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Caución/Crédito</h3>
                        <ul>
                            <li>Cobertura completa para operaciones de caución y crédito.</li>
                            <li>Pólizas flexibles adaptadas a tus necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros financieros.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Caucion-Credito">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-3d.png" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Seguro 3D</h3>
                        <ul>
                            <li>Actos deshonestos</li>
                            <li>Robo de bienes</li>
                            <li>Robo de dinero en local y en tránsito</li>
                            <li>Falsificaciones de documentos</li>
                        </ul>
                        <a class="enlace-leer" href="Seguro-3D">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-ear.jpg" alt="Imagen 2">
                    <div class="info-text">
                        <h3>EAR</h3>
                        <ul>
                            <li>Cobertura completa para equipos y activos de diversa índole.</li>
                            <li>Pólizas flexibles adaptadas a tus necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros EAR.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="EAR">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="/images/seguro-equipo-electronico.jpg" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Equipo Electrónico</h3>
                        <ul>
                            <li>Cobertura completa para equipos electrónicos de todo tipo.</li>
                            <li>Pólizas flexibles adaptadas a tus necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros electrónicos.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Equipo-electronico">Leer más</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Contenedor del texto -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mt-4">
            <p class="texto-centrado">¡Tu seguridad es nuestra prioridad número uno!</p>
        </div>
    </div>
</div>

<!-- Estilos CSS para el texto centrado -->
<style>
    .texto-centrado {
        margin-top: 70px;
        font-size: 25px;
        color: #30519E;
        margin-bottom: 140px;
    }

    @media screen and (max-width: 768px) {
        .texto-centrado {
            font-size: 16px;
        }
    }
</style>


<!-- Script para mostrar más contenido al hacer clic en el botón -->
<script>
    // Obtener el botón "Ver más" y el contenido adicional
    var verMasBtn = document.getElementById('ver-mas-btn');
    var contenidoAdicional = document.getElementById('contenido-adicional');

    // Función para mostrar más contenido
    function mostrarMasContenido() {
        contenidoAdicional.style.display = 'block'; // Mostrar el contenido adicional
        verMasBtn.style.display = 'none'; // Ocultar el botón "Ver más"
    }

    // Agregar un event listener para el clic en el botón
    verMasBtn.addEventListener('click', mostrarMasContenido);
</script>

<!-- Script para hacer la funcion de busqueda del input de busqueda -->
<script>
    function buscarSeguro() {
        var textoBusqueda = document.getElementById('input-busqueda').value.toLowerCase();

        var seguros = document.getElementsByClassName('info-div');

        for (var i = 0; i < seguros.length; i++) {
            var seguro = seguros[i];
            var nombreSeguro = seguro.getElementsByClassName('info-text')[0].getElementsByTagName('h3')[0].innerText
                .toLowerCase();

            if (nombreSeguro.includes(textoBusqueda)) {
                seguro.style.display = 'block';
            } else {
                seguro.style.display = 'none';
            }
        }
    }

    var inputBusqueda = document.getElementById('input-busqueda');

    inputBusqueda.addEventListener('input', buscarSeguro);
</script>
