<?php require_once '../php/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDGSGamers</title>
    <link rel="shortcut icon" href="../img/logo.png" />
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/titulos.css">
    
    <!----===== ICONOS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!----===== BOOTSTRAP ===== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <!----===== SCRIPT ===== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="../img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">IDGSGamers</span>
                    <span class="profession">amantes del gaming</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle boton'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box" style="display: none">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../../index.php">
                            <i class='fas fa-home icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="nav-link xbox">
                        <a href="xbox.php">
                            <i class='fab fa-xbox icon'></i>
                            <span class="text nav-text">Xbox</span>
                        </a>
                    </li>

                    <li class="nav-link ps">
                        <a href="ps.php">
                            <i class='fab fa-playstation icon'></i>
                            <span class="text nav-text">Play Station</span>
                        </a>
                    </li>

                    <li class="nav-link pc">
                        <a href="pc.php">
                            <i class='fab fa-steam icon'></i>
                            <span class="text nav-text">PC</span>
                        </a>
                    </li>

                    <li class="nav-link nintendo">
                        <a href="nintendo.php">
                            <i class='fas fa-gamepad icon'></i>
                            <span class="text nav-text">Nintendo</span>
                        </a>
                    </li>

                    <li class="nav-link tienda">
                        <a href="tienda.php">
                            <i class='fas fa-shopping-cart icon'></i>
                            <span class="text nav-text">Tienda</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">

                <li><a href="../views/info.php">
                <i class='fas fa-user-circle icon'></i>
                <span class="text nav-text">


                <?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo $_SESSION['Usuario'];
                    }else{
                    echo 'Iniciar Sesion';
                    }
                ?>

                
                </span>
                </a></li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    <a href="#" class="fas fa-arrow-alt-circle-up icon scroll-top" title="Ir arriba"></a>
    
<section class="home">

    <div class='recuadro' id="cero">
    <p class="t6"><a href="">
    POLITICA DE PRIVACIDAD
  </a></p>
	</div>
    <div class='recuadro' id="uno">
        <h1 style="text-align:center">En vigor desde el 10 de Mayo de 2022</h1>
        <h2 style="text-align:left">Descripci??n general de la Pol??tica de privacidad</h2><br>
        <p style="text-align:justify">okla, LLC, con su empresa matriz Ziff Davis, LLC, sus otras filiales y sus subsidiarias 
        (en conjunto, ???Ookla???, ???nosotros???, ???nos??? o ???nuestro???), posee, opera o brinda acceso a varios sitios web interactivos, 
        aplicaciones m??viles y conectadas, y otras funciones y servicios interactivos en l??nea, que incluyen, entre otros, 
        correos electr??nicos, boletines informativos, ??reas de chat, foros, comunidades, sorteos y concursos (en conjunto, ???Servicios???). 
        Esta Pol??tica de privacidad rige para toda la informaci??n que recopile Ookla sobre usted en relaci??n con los Servicios, 
        independientemente de la forma en que se recopile o almacene, y describe, entre otras cosas, los tipos de informaci??n que 
        se obtiene sobre usted cuando interact ??a con los Servicios, c??mo se puede usar su informaci??n, cu??ndo se puede divulgar 
        su informaci??n, c??mo puede controlar el uso y divulgaci??n de su informaci??n, y c??mo se protege su informaci??n. <br><br>

        Salvo que se indique lo contrario en esta Pol??tica de privacidad, Ookla es un controlador de datos (tal como se usa dicho 
        t??rmino conforme el Reglamento general de protecci??n de datos de la UE [???RGPD???]), lo que significa que nosotros decidimos 
        c??mo y por qu?? se procesa la informaci??n que usted nos proporciona. Comun??quese con nosotros desde nuestro Portal de DSAR. 
        Esta Pol??tica puede ser enmendada o actualizada de vez en cuando para reflejar cambios en nuestras pr??cticas con respecto 
        al Procesamiento de su informaci??n o modificaciones en la ley aplicable. Le recomendamos que lea esta Pol??tica detenidamente 
        y que visite con regularidad esta p??gina para revisar cualquier cambio que podamos implementar.<br><br>

        Esta Pol??tica de privacidad cubre la informaci??n recopilada a trav??s de los siguientes sitios web y aplicaciones m??viles:<br><br>

        Sitios web:<br><br>

        *Ookla<br>
        *Speedtest.net<br>
        *Speedtest Custom<br>
        *Mosaik<br>
        *Sensorly<br>
        *Map Elements<br>
        *Cell Maps<br>
        *Tower Source<br>
        *Downdetector (y otros sitios web de Downdetector)<br>
        *RootMetrics<br><br></p><br>

        <h2 style="text-align:left">Categor??as de informaci??n que podemos Procesar</h2><br>
        <p style="text-align:justify">Informaci??n personal??? significa informaci??n que trata sobre cualquier persona, o que permite 
        identificar a cualquier persona, directa o indirectamente.<br><br>

        ???Procesar???, ???Procesamiento??? o ???Procesado??? significa cualquier cosa que se haga con la Informaci??n personal, ya sea por medios 
        automatizados o no, como recolecci??n, registro, organizaci??n, estructuraci??n, almacenamiento, adaptaci??n o alteraci??n, 
        recuperaci??n, consulta, uso, divulgaci??n por transmisi??n, difusi??n o puesta a disposici??n, alineaci??n o combinaci??n, 
        restricci??n, eliminaci??n o destrucci??n.<br><br>

        Podemos Procesar las siguientes categor??as de Informaci??n personal sobre usted:<br><br>

        Datos personales: su nombre; nombre de usuario o datos de inicio de sesi??n; contrase??a; ??reas o temas de inter??s; y fotograf??as
         (si usted u otro usuario publica una foto en el Servicio).
         <br>Informaci??n demogr??fica: g??nero; edad/fecha de nacimiento; nacionalidad; tratamiento; puesto laboral, informaci??n de la compa????a,
         educaci??n, experiencia laboral y dem??s informaci??n profesional; y preferencias de idioma.
         <br>Datos de contacto: direcci??n postal; n ??mero de tel??fono fijo o m??vil; direcci??n de correo electr??nico; y sus identificadores 
        o perfiles de los medios sociales.
        <br>Registros de consentimiento: registros de cualquier consentimiento que pueda haber dado, junto con la fecha y la hora, 
        los medios de consentimiento y cualquier informaci??n relacionada (por ejemplo, el objeto del consentimiento).
        <br>Informaci??n de ubicaci??n: datos de localizaci??n que describen la ubicaci??n geogr??fica exacta de su dispositivo (???Datos sobre 
        ubicaci??n exacta???).
        <br>Datos sobre compras y pagos: registros de compras y precios; registros de facturas; registros de pagos; direcci??n de env??o; 
        m??todo de pago; nombre del titular de la tarjeta o del titular de la cuenta; monto del pago y fecha de pago.
        <br>Datos sobre el empleador: el lugar en el cual interact ??a con nosotros en calidad de empleado y la informaci??n de contacto 
        de su empleador (que incluye nombre, direcci??n, n ??mero de tel??fono y direcci??n de correo electr??nico) en la medida que sea 
        relevante.
        <br>Puntos de vista y opiniones: todas las opiniones y los puntos de vista que usted u otros usuarios decidan enviarnos o publicar 
        sobre nosotros en plataformas de medios sociales o en los Servicios, incluso en los foros.
        <br><br>Tambi??n recopilamos otras clases de informaci??n suya o de otras fuentes, que denominamos ???Otra informaci??n??? en esta Pol??tica, 
        como lo siguiente:
        <br><br>
        Informaci??n sobre su uso de los Servicios, como datos de uso e informaci??n estad??stica, que puede combinarse.
        <br>Historial de navegaci??n, incluidos los sitios web u otros servicios que visit?? antes y despu??s de interactuar con los Servicios.
        B ??squedas e interacciones con oportunidades de comercio electr??nico, como comerciantes y ofertas contenidas en los Servicios.
        <br>Informaci??n no precisa sobre la ubicaci??n f??sica aproximada (por ejemplo, ciudad o c??digo postal) de la computadora o el 
        dispositivo de un usuario a partir de la direcci??n IP de dicha computadora o dispositivo (???Datos GeoIP???).
        <br>Identificaci??n del dispositivo (???Identificaci??n???), que es un n ??mero distintivo asociado con un tel??fono inteligente 
        u otro dispositivo port??til similar, pero es diferente a un n ??mero de serie de hardware.
        <br>Identificaci??n de publicidad, que es un n ??mero de identificaci??n ??nico y que puede restablecer el usuario para la publicidad 
        asociada a un dispositivo (por ejemplo, iOS usa el identificador de publicidad (o Identifier for Advertisers [???IDFA???, 
        identificador de publicidad]) y Android usa el identificador de publicidad de Google).
        <br>Direcci??n de Internet Protocol (???IP???, protocolo de Internet), que es una cadena ??nica de n ??meros asignados autom??ticamente 
        a su dispositivo cada vez que accede a Internet.
        <br>Medios de conexi??n a Internet, como Internet Service Provider (???ISP???, proveedor de servicios de Internet), operador de 
        telefon??a m??vil, conexi??n wifi, Service Set Identifier (???SSID???, identificador de conjunto de servicios), International 
        <br>Mobile Subscriber Identity (???IMSI???, identidad internacional de suscriptor m??vil) e International Mobile Equipment Identity 
        (???IMEI???, identidad internacional de equipos m??viles).
        <br>La informaci??n recopilada mediante el uso de cookies, etiquetas electr??nicas, Javascript, etiquetas de p??xeles, seguimiento 
        de identificaci??n de dispositivos, identificadores an??nimos y otras tecnolog??as, incluida la informaci??n recopilada mediante 
        dichos m??todos y tecnolog??as sobre (i) sus visitas a los Servicios y las interacciones con ellos, contenido y anuncios en 
        sitios web de terceros, aplicaciones, plataformas y otros canales de medios (???Canales???), y (ii) su interacci??n con correos 
        electr??nicos que incluyen el contenido y los anuncios en ellos (en conjunto, ???Datos en l??nea???).
        <br>Tipo de dispositivo, configuraciones y software empleado.
        <br>Los archivos de registros, que pueden incluir direcciones IP, tipo de navegador, p??ginas de referencia/salida de ISP, 
        sistema operativo, sellos de fecha/hora o datos de historial de clics, incluidos los clics en enlaces personalizados.
        <br>Las balizas web, que son archivos electr??nicos que permiten a un sitio web contar a los usuarios que visitaron esa p??gina 
        o acceder a ciertas cookies.
        <br>Las etiquetas de p??xeles, tambi??n conocidas como GIF invisibles, balizas, faros web o ???web bugs???, son un m??todo para pasar 
        informaci??n de la computadora del usuario a un sitio web de un tercero.
        <br>Los objetos locales compartidos, como las cookies flash, y el almacenamiento local, como HTML5.
        <br>An??lisis m??vil para comprender la funcionalidad de nuestras aplicaciones m??viles y software en su tel??fono.
        <br><br>Bajo ciertas circunstancias y seg ??n la ley aplicable, parte de esta Otra informaci??n puede constituir Informaci??n personal. 
        Se denomina en adelante a la Informaci??n personal junto con la Otra informaci??n

        <br><br>???Informaci??n del usuario???. </p>
	</div>

<hr/>


<footer class="footer-distributed">

        <div class="footer-left">
  
          <img class="logof" src="../img/logo.png" alt="">
  
          <p class="footer-links">
            <a href="../../index.php">Inicio</a>
            ??
            <a href="politica.php">Politica de Privacidad</a>
            
          </p>
  
          <p class="footer-company-name">IDGSGamers ?? 2022</p>
  
          <div class="footer-icons">
   
            <a class="tooltip" href="https://www.facebook.com/IDGSGamers-103492925755993"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Facebook</span><i class='fab fa-facebook-square'></i></a>
            <a class="tooltip" href="https://twitter.com/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Twitter</span><i class='fab fa-twitter'></i></i></a>
            <a class="tooltip" href="https://github.com/AntonyZuniga/IDGSGamers"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">GitHub</span><i class='fab fa-github'></i></i></a>
            <a class="tooltip" href="https://store.steampowered.com/?l=spanish"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Steam</span><i class='fab fa-steam'></i></i></a>
  
          </div>
  
        </div>
  
        <div class="footer-right">
  
          <p>Contactanos</p>
  
          <form action="#" method="post">
  
                

            <input type="email" name="email" placeholder="<?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                    echo 'Correo Electronico';
                    }else{
                    echo 'Correo Electronico';
                    }
                ?>"
                
                value="<?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                    if($usuario){
                        echo $_SESSION['Correo'];
                    }else{
                    echo '';
                    }
                ?>"
                >
            </input>
            <textarea name="message" placeholder="Mensaje"></textarea>
            <button type="submit" name="register">Enviar</button>
          </form><br><br>
            <?php 
            include("../php/ac.php");
            ?>
            
  
        </div>
  
 </footer>
 
 </section>
    

    

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Modo Luz";
    }else{
        modeText.innerText = "Modo Oscuro";
        
    }
});
    </script>

<script language="JavaScript" type="text/javascript" src="../js/arriba.js"></script>

</body>

</html>