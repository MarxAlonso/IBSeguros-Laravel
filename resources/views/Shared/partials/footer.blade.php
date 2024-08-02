<section class="info_section layout_padding">

    <div class="container">
        <div class="row rfot">

            <div class="col-lg-4 col-sm-6 mt-4">
                <div>
                    <img class="footer-logo" src="{{ asset ('/images/ibseguros4.png') }}" style="max-height: 120px">
                </div>
                <p class="text-justify nav-link">
                    Ibseguros.com es tu plataforma de seguros completamente digital, diseñada para brindarte una
                    experiencia sin complicaciones. </p> <br>
            </div>
            <div class="r1 col-lg-4 col-sm-4 mt-4">
                <div>
                    <h3>Canales Digitales</h3> <br>
                </div>
                <ul>
                    <div>
                        <div class="social-buttons">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=61554534006364"
                                class="social-button social-button--facebook" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/company/ib-seguros/"
                                class="social-button social-button--linkedin" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@corporacionibgroup"
                                class="social-button social-button--tiktok" aria-label="Tiktok">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/ibsegurosperu/"
                                class="social-button social-button--instagram" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <h3 class="fw-bold">Atención Comercial</h3>
                    <p>Lunes - Viernes: 9am a 6pm <br> Sábados: 9am a 3pm</p>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4">
                <div>
                    <h3 class="fw-bold font-weight-bold">Contáctanos</h3>
                </div>
                <div>
                    <br>
                    <span> Av. Circunvalación Golf Los Incas Nro. 208, Torre 3, Oficina 602B , Santiago de Surco</span>
                    <br>
                    Móvil: <span><a class="nav-link "style="color: white;">(+51) 912 027 724</a></span><br>
                    E-Mail: <a class="nav-link" href="mailto:ibseguros@corpibgroup.com"><span
                            style="color: white;">ibseguros@corpibgroup.com</span></a>
                    <br>
                </div>
            </div>
        </div>
        <div align="center">
            <?php
            //Easy Counter code begins
            $ec_username = 'masencio'; // <--- your username
            
            if (!($ec_fsock = fsockopen('ssl://www.easycounter.com', 443, $errno, $errstr, 2))) {
                echo '<img  src="https://www.easycounter.com/images/error.png"  >';
            } else {
                fputs($ec_fsock, 'GET /php.counter.php?username=' . urlencode($ec_username) . " HTTP/1.0\r\n" . "Host:www.easycounter.com\r\n\r\n");
                $ec_buffer = '';
                while (!feof($ec_fsock)) {
                    $ec_buffer .= fgets($ec_fsock, 1024);
                }
                echo substr($ec_buffer, strpos($ec_buffer, "\n\r\n") + 3);
                fclose($ec_fsock);
            }
            
            //Easy Counter code ends
            
            ?>
        </div>
        <br>
    </div>
</section>
<section class="container-fluid footer_section">
    <p>
        ®Copyright &copy; 2022 Corporación
        <a href="https://corpibgroup.com/">CorpIbGroup | All Rights Reserved</a>
    </p>
</section>
