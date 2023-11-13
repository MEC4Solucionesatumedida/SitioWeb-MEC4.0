<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ejemplo";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEC4.0 - Soluciones a tu medida</title>
    <link rel="shortcut icon" href="./assets/img/logo-minimizado.png" type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,700&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- HOJA DE ESTILOS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <div class="nav-bar">
            <ul>
                <a href="#inicio"><li>Inicio</li></a>
                <a href="#servicios"><li>Servicios</li></a>
                <a href="#nosotros"><li>Nosotros</li></a>
                <a href="#experiencia"><li>Clientes</li></a>
                <a href="#contactanos"><li>Contáctanos</li></a>
            </ul>
        </div>
    </nav>
    <main>
        <section id="inicio" class="seccion-inicio">
            <div class="contenedor-inicio">
                <img class="imagen-fondo" src="./assets/img/background-image.png" alt="">
                <!-- <img class="logo-mec" src="./assets/img/logo-mec4.png" alt=""> -->
                
                <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.490/build/spline-viewer.js"></script>
                <spline-viewer url="https://prod.spline.design/agqUeRhC1q5zYeJ2/scene.splinecode"></spline-viewer>

                <p>En MEC 4.0 realizamos soluciones a tu medida <br> aquí algunos de nuestros principales servicios:</p>
                <!--
                <div class="iconos-3d">
                    <img src="./assets/img/logos-servicios/FACTORY.png" alt="">
                    <img src="./assets/img/logos-servicios/INVENTORY.png" alt="">
                    <img src="./assets/img/logos-servicios/LAPTOP.png" alt="">
                </div> -->
                <div class="botones-inicio">
                    <a href="#carrusel-industria">
                        <div class="boton">
                            Industria
                        </div>
                    </a>
                    <a href="#carrusel-inventario">
                        <div class="boton">
                            Inventarios
                        </div>
                    </a>
                    <a href="#carrusel-software">
                        <div class="boton">
                            Software
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="seccion-nosotros">
            <!-- NOSOTROS -->
            <div class="contenedor">
                <div class="introduccion">
                    <h1>En Mec 4.0 creamos valor a través de la tecnología</h1>    <!-- Aumentar barra-->
                    <div class="descripcion">
                        <p>Ayudamos a nuestros clientes a prosperar en la era digital, a través de una cartera completa de soluciones y servicios de mantenimiento regular, correctivo o preventivo que permiten la transformación y mejoran la eficiencia empresarial e industrial.</p>
                        <p>Desde nuestro inicio el 2019, MEC 4.0 ha sido impulsado por la pasión, innovación y tecnología, de esta manera hemos servido con éxito a empresas industriales del medio.<br>Permítenos ser tu solución integral para todas tus necesidades de mantenimiento industrial.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="servicios" class="seccion-servicios">
            <div class="contenedor">
                <!-- SERVICIOS -->
                <div class="encabezado">
                    <h1>Nuestros Servicios</h1>    <!-- Aumentar barra-->
                </div>
                <!--<div class="tab">
                    <ul>
                        <li>Industria</li>
                        <li>Inventario</li>
                        <li>Software</li>
                    </ul>
                </div> -->
                <div class="carrusel">
                    <h2>Industria</h2>
                    <!-- INDUSTRIA -->
                    
                    <div id="carrusel-industria" class="carrusel-industria">
                        <div id="diseno-fabricacion" class="carta">
                            <div  class="bloque-descripcion">
                                <p>Diseño y Fabricación</p>
                            </div>
                        </div>
                        <div id="ingenieria-integral"  class="carta">
                            <div class="bloque-descripcion">
                                <p>Ingeniería Integral</p>
                            </div>
                        </div>
                        <div id="mantenimiento-industrial" class="carta">
                            <div  class="bloque-descripcion">
                                <p>Mantenimiento Industrial</p>
                            </div>
                        </div>
                        <div  id="suministro-directo" class="carta">
                            <div class="bloque-descripcion">
                                <p>Suministro Directo</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- INVENTARIO -->
                    <h2>Inventarios</h2>
                    <div id="carrusel-inventario" class="carrusel-inventario">
                        
                        <div id="diseno-almacenes-asesoria-inventarios" class="carta">
                            <div   class="bloque-descripcion">
                                <p>Diseño de Almacenes y Asesoría en Inventarios</p>
                            </div>
                        </div>
                        <div id="revaluo-activos" class="carta">
                            <div  class="bloque-descripcion">
                                <p>Revalúo de activos</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- SOFTWARE -->
                    <h2>Software</h2>
                    <div id="carrusel-software" class="carrusel-software">
                        <div id="aplicaciones-gestion-integral" class="carta">
                            <div  class="bloque-descripcion">
                                <p>Aplicaciones de gestión integral con inteligencia artificial</p>
                            </div>
                        </div>
                        <div id="oficinas-virtuales" class="carta">
                            <div  class="bloque-descripcion">
                                <p>Oficinas Virtuales</p>
                            </div>
                        </div>
                        <div id="sitios-web" class="carta">
                            <div class="bloque-descripcion">
                                <p>Sitios Web</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        
        <section id="nosotros" class="seccion-principios">
            <div class="contenedor">
                <div class="seccion-principios__left">
                    <h1>¿Por qué MEC 4.0?</h1>
                    <p>Proporcionamos soluciones a tu medida diseñadas para satisfacer tus necesidades específicas, optimizando los costos superfluos y re dirigiendo recursos hacia el fomento de la innovación.</p>
                    <div class="boton">
                        Conócenos
                    </div>
                </div>
                <div class="seccion-principios__middle">
                    
                </div>
                <div class="seccion-principios__right">
                    <div id="item-1" class="item">Cultura de trabajo responsable</div>
                    <div id="accordion-1" class="accordion">
                        <h2>Cultura de trabajo responsable</h2>
                        <p>Fomentamos una cultura de trabajo responsable y efectiva ante los retos venideros trabajamos brindando lo mejor de nosotros en cualquier situación.</p>
                    </div>
                    <div id="item-2" class="item">Comprometidos con tus objetivos</div>
                    <div id="accordion-2" class="accordion">
                        <h2>Comprometidos con tus objetivos</h2>
                        <p>Con el fin de garantizar la satisfacción del cliente, manteniendo la fidelidad a los principios de tu empresa.</p>
                    </div>
                    <div id="item-3" class="item">Equipo proactivo y talentoso</div>
                    <div id="accordion-3" class="accordion">
                        <h2>Equipo proactivo y talentoso</h2>
                        <p>Damos valor agregado a tus ideas aplicando el concepto de mejora continua en cada uno de los servicios que ofrecemos</p>
                    </div>
                    <div  id="item-4" class="item">Comunicación transpartente y eficáz</div>
                    <div id="accordion-4" class="accordion">
                        <h2>Comunicación transpartente y eficáz</h2>
                        <p>Mantenemos una retroalimentación constante con nuestros clientes atendiendo cada uno de sus requerimientos con la calidad que nos caracteriza.</p>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section id="experiencia" class="seccion-clientes">
            <div class="contenedor">
                <h1 class="introduccion">Creamos valor atraves de experiencia, proactividad y mejora continua.</h1>
                <div class="encabezado">
                    <h1>Clientes que confían en nuestros servicios</h1>    <!-- Aumentar barra-->
                </div>
                <div class="carrusel-comentarios">
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Son un equipo que entiende la criticidad y la importancia de los trabajos requeridos, más de un año trabajando Planta Huari - Mec 4.0 y supieron acomodarse a las complejidades y necesidades de planta.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Alejandro Argandoña Lizon</p>
                            <p class="cargo-persona">Packaging Planner - CBN</p>
                        </div>
                    </div>
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Excelente servicio, rapido y confiable. Ademas brindan asesoria para mejorar y optimizar los sistemas.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Luis Carlos Iturricha Cáceres</p>
                            <p class="cargo-persona">Gerente Regional - PRECONSUR S.R.L.</p>
                        </div>
                    </div>
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Recomiendo a la empresa, trabajo con ellos y siempre recibí una excelente atención y servicio.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Ricardo Álvarez Barriga</p>
                            <p class="cargo-persona">Soporte de Calidad en Elaboración - CBN</p>
                        </div>
                    </div>
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Buen servicio, empresa con mucha seriedad y compromiso.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Luis Ferrufino Iriarte</p>
                            <p class="cargo-persona">Ingeniero Electromecánico - EECI</p>
                        </div>
                    </div>
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Sin duda la agilidad en soluciónes van de la mano con el compromiso que tiene está empresa.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Alvaro Almanza Villarroel</p>
                            <p class="cargo-persona">Supervisor de Mantenimiento - CBN</p>
                        </div>
                    </div>
                    <div class="container-comentario">
                        <div class="comentario">
                            <img src="./assets/iconos/comilla-izquierda.png" alt="">
                            <p>Excelente servicio, puntualidad, diversidad.Profesionales destacados en servicios, acabados excelentes, te asesoran de forma muy profesional. Un equipo de trabajo diverso y con alta experiencia en muchos ámbitos.</p>
                            <img src="./assets/iconos/comilla-derecha.png" alt="">
                        </div>
                        <div class="container-persona">
                            <img src="" alt="" class="foto-persona">
                            <p class="nombre-persona">Mariana Lino Sánchez</p>
                            <p class="cargo-persona">Supervisor de Mantenimiento - CBN</p>
                        </div>
                    </div>
                </div>
                <div class="carrusel-empresas">
                    <img src="./assets/img/empresas/AMDECO.png" alt="">
                    <img src="./assets/img/empresas/CBN.png" alt="">
                    <img src="./assets/img/empresas/ECOLAB.png" alt="">
                    <img src="./assets/img/empresas/EMAP.png" alt="">
                    <img src="./assets/img/empresas/EMSA.png" alt="">
                    <img src="./assets/img/empresas/GRUPO SAN JOAQUIN HIDRO.png" alt="">
                    <img src="./assets/img/empresas/INDUSTRIAS ALIMENTICIAS DEL VALLE.png" alt="">
                    <img src="./assets/img/empresas/MMAYA.png" alt="">
                    <img src="./assets/img/empresas/YPFB.png" alt="">
                </div>
            </div>
            
        </section>
        <section id="contactanos" class="seccion-contactanos">
            <div class="encabezado">
                <h1>Conéctate con nosotros</h1>    <!-- Aumentar barra-->
            </div>
            <div class="tab">
                <ul>
                    <li id="tab-servicios">Servicios de MEC4.0</li>
                    <li>Únete a nuestro equipo</li>
                    <li id="tab-programas">Aplica a nuestros programas</li> <!-- Ocultar -->
                </ul>
            </div>
            <div class="bloque-form">
                <div class="formularios">
                    <form class="formulario-servicios" action="/submit_form" name="ejemplo" method="post">
                        <div class="contenedor-bloque">
                            <label for="fnombre">Nombre completo:</label>
                            <input type="text" id="fname" name="nombre" placeholder="Nombre completo">
                        </div>
                        <div class="contenedor-bloque">
                            <label for="lpuesto">Puesto de trabajo / cargo:</label>
                            <input type="text" name="puesto" placeholder="Puesto de trabajo / cargo">
                        </div>
                        <div class="contenedor-bloque">
                            <label for="lempresa">Nombre de la empresa:</label>
                            <input type="text" name="empresa" placeholder="Nombre de la empresa">
                        </div>
                        <div class="contenedor-bloque">
                            <label for="lemail">Email:</label>
                            <input type="text"  name="email" placeholder="Email">
                        </div>
                        <div class="contenedor-bloque">
                            <label for="ltelefono">Teléfono:</label>
                            <div class="contenedor-bloque-2">
                                <!--
                                <select id="codigo" name="codigo">
                                    <option value="bolivia">+591</option>
                                    <option value="argentina">+54</option>
                                    <option value="chile">+56</option>
                                </select>
                                -->
                                <input type="text" name="telefono" placeholder="Teléfono de la empresa">
                            </div>
                        </div>
                        <!-- 
                        <div class="contenedor-bloque">
                            <label for="lname">Servicios:</label>
                            <select id="servicios" name="servicios">
                                <option value="bolivia">Diseño y fabricación</option>
                                <option value="argentina">Ingeniería Integral</option>
                                <option value="chile">Mantenimiento Industrial</option>
                                <option value="chile">Suministro Directo</option>
                                <option value="chile">Diseño de almacenes y asesoría en inventarios</option>
                                <option value="chile">Revalúo de activos</option>
                                <option value="chile">Aplicaciones de Gestión Integral</option>
                                <option value="chile">Oficinas Virtuales</option>
                                <option value="chile">Sitios Web</option>
                            </select>
                        </div>
                        -->
                        <div class="contenedor-bloque">
                            <label for="lname">Cómo podemos ayudarte:</label>
                            <input type="text" name="mensaje" placeholder="Cómo podemos ayudarte">
                        </div>
                        <div class="contenedor-bloque" id="checkbox-permisos">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="">Permito a MEC 4.0 almacenar, procesar y usar la información personal 
                                registrada en el formulario para recibir noticias y actualizaciones de la empresa 
                                y estoy de acuerdo con la política de privacidad</label>
                        </div>
                        <div class="boton" name="registro">
                            Enviar
                        </div>
                    </form>
                    <!-- Aumentar formularios -->
                </div>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d591.0851310116673!2d-66.1649419303695!3d-17.375887648392748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1698679310036!5m2!1ses-419!2sbo" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="informacion">
                        <div class="contenedor-bloque">
                            <img src="./assets/iconos/location.png" alt="">
                            <p>Nuestra oficina se encuentra en Cochabamba: Av. Teofilo Vargas #361, Edificio Ayala. Piso 5 oficina A</p>
                        </div>
                        <div class="contenedor-bloque">
                            <img src="./assets/iconos/user.png" alt="">
                            <p>Gerente General: Ing. Gonzalo Vilar Quiroga</p>
                        </div>
                        <div class="contenedor-bloque">
                            <img src="./assets/iconos/phone.png" alt="">
                            <p>Número celular: +591-759-76565</p>
                        </div>
                        <div class="contenedor-bloque">
                            <img src="./assets/iconos/mail.png" alt="">
                            <p>Email de la empresa: gerencia@mec4.com.bo</p>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            
    </main>
    <footer>
        <div class="logo-derechos-reservados">
            <img class="logo-footer" src="./assets/img/logo-mec4.png" alt="">
            <p>© 2023 MEC 4.0. All rights reserved</p>
        </div>
        <div class="redes-sociales">
            <a href=""><img src="./assets/iconos/facebook.png" alt=""></a>
            <a href=""><img src="./assets/iconos/instagram.png" alt=""></a>
            <a href=""><img src="./assets/iconos/LinkedIn.png" alt=""></a>
        </div>
    </footer>
</body>
</html>

<?php
    if(isset($_POST['registro'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
    }

    
    
    $sql = "INSERT INTO tabla (nombre, email) VALUES ('$nombre', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
?>