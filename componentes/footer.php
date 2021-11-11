<footer>
            <div id="footerSec"></div>
            <div id="footer__fila">
                <div id="footer__contacto">
                    <form action="" method="POST">
                        <p class="texto__footer textoMediano textoFooter">Mandame un mail</p>
                        
                        <label for="nombreAsunto" class="textoChico textoFooter">Nombre</label>
                        <input type="text" name="nombreAsunto" placeholder="Ingresá tu nombre" autocomplete="name" required>

                        <label for="emisor" class="textoChico textoFooter">Mail</label>
                        <input type="email" name="emisor" autocomplete="email" placeholder="Ingresá tu mail" required>

                        <textarea name="mensaje" style="resize: none;" placeholder="Escribí tu mensaje acá" required></textarea>

                        <input type="submit" name="enviarMail" id="enviarMail">
                    </form>

                    <!--MODAL-->
                    <?php  
                        if(isset($_POST["enviarMail"])) {
                            $emisor = $_POST['emisor'];
                            
                            
                            if(isset($_POST['emisor']) && $emisor = filter_var($emisor, FILTER_VALIDATE_EMAIL)) {
                                $mensajeMail = $_POST['mensaje'];
                                $mensajeMail = wordwrap( $mensajeMail, 70, "\r\n" );
                                $asunto = $_POST['nombreAsunto'] . " - Contacta desde mi página";

                                mail('martina.fernandez.sa@gmail.com', $asunto, $mensajeMail, "From: " . $emisor); //destinatario, asunto, mensaje, quien lo envía
                                $mensaje = "Gracias por su mensaje! Lo contestaré a la brevedad";
                                
                            }else {
                                $mensaje = "Por favor, inserta una dirección de mail válida";
                            }
                        }

                        if(isset($mensaje)) { //Si $mensaje existe...
                                
                            echo "<section id='contenedorDeModal'>
                                <div id='modalAviso'>
                                    <div class='modalPHP textoChico'>
                                        <p>" . $mensaje . "</p>
                                    </div>
                                </div>
            
                            </section>";
                        }
                    ?>
                </div>

                <div id="footer__redes"> 
                    <p class="texto__footer textoMediano textoFooter">Seguime en mis redes</p>
                    <div class="social">
                        <a href="https://github.com/MartinaFSA"  itemprop="url" target="_blank" class="footer__social--link"> <i class="fab fa-github" style="font-size: 4vh; margin-top: 0.5vw; margin-top: 1vh;"> </i> </a>
                        <a href="https://www.linkedin.com/in/martina-fernandez-suarez-anzorena/"  itemprop="url" target="_blank" class="footer__social--link"> <i class="fab fa-linkedin-in" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                        <a href="#" target="_blank" class="footer__social--link" itemprop="url"> <i class="fab fa-instagram" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                    </div>
                </div>
            </div>
            <div id="backToTop">
                <a href="#pageIntro" class="texto__footer textoMediano textoFooter">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
        </footer>