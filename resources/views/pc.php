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
    <link rel="stylesheet" href="../css/res.css">

    <link rel="stylesheet" media="all" href="../../public/ej.css" />
    
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

            <i class='bx bx-chevron-right toggle'></i>
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
                        <a href="#">
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
    <!-- Background animtion-->
<div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
    <section class="home">

    <div class='recuadro' id="cero">
        <p class="t3"><a href="">
        PC
    </a></p>
	</div>     
    <div class='recuadro' id="uno">
    <p class="t7"><a href="">
    RESE??A DE VIDEOJUEGOS
  </a></p>
	</div>
    <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos" >
        <h1 class="tit">League of Legends</h1><br>
        <p class="tx">League of Legends es un juego de estrategia por equipos en el que dos equipos de cinco campeones se enfrentan para ver qui??n destruye antes la base del otro. Elige de entre un elenco de 140 campeones para realizar jugadas ??picas, asesinar rivales y derribar torretas para alzarte con la victoria.
En el juego, dos equipos de cinco jugadores luchan en un combate jugador contra jugador, cada equipo ocupando y defendiendo su mitad del mapa. Cada uno de los diez jugadores controla un personaje, conocido como "campe??n", con habilidades ??nicas y diferentes estilos de juego. Durante una partida, los campeones se vuelven m??s poderosos acumulando puntos de experiencia y ganando oro que se emplea para la compra de art??culos para derrotar al equipo contrario. 
</p><br>
        <p class="tx">En el modo principal de juego de LoL, League, "La Grieta del Invocador", un equipo gana al abrirse paso hasta la base enemiga y destruir su "nexo", una gran estructura ubicada dentro de la cual se emanan tres l??neas de s??bditos o "minions", personajes no jugadores que al ser eliminados por el equipo enemigo otorgan oro y experiencia. League of Legends ha recibido cr??ticas generalmente positivas; los cr??ticos destacaron su accesibilidad, dise??os de personajes y valor de producci??n. La larga antig??edad del juego ha resultado en una reevaluaci??n cr??tica, con rese??as con una tendencia positiva; el comportamiento negativo y abusivo de sus jugadores en el juego, criticado desde su lanzamiento, persiste a pesar de los intentos de Riot por solucionar el problema. En 2019, LoL alcanz?? regularmente un m??ximo de ocho millones de jugadores simult??neos, y su popularidad ha llevado a vinculaciones como videos musicales, c??mics, cuentos y hasta una serie animada de Netflix, Arcane. 
        </p><br><br><br>
	</div>
    <div class='circulo4' id="tres">
        <img src="../img/LUL.png" class='imagen'><br><br><br>
        <p class="sub">Un gran juego que te engancha facilmente</p>
    </div>
                </hr>
                <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="tres">

        <h1 class="tit">Valorant</h1><br>
        <p class="tx">Valorant es un juego de disparos en primera persona que se desarrolla online y en equipo, por lo que es un deporte electr??nico multijugador. Su modo de juego principal es ???buscar y destruir???, muy similar a lo que se hace generalmente en Counter Strike: plantar una bomba y defender zonas.
Los jugadores asumen el control de agentes, personajes que provienen de una gran cantidad de pa??ses y culturas de todo el mundo. 
</p><br>
         <p class="tx">En el modo de juego principal, los jugadores se unen al equipo atacante o defensor con cada equipo que tiene cinco jugadores. Los agentes tienen habilidades ??nicas y usan un sistema econ??mico para comprar sus habilidades y armas. El videojuego tiene una variedad de armas que incluyen pistolas, subfusiles, escopetas, ametralladoras, fusiles de asalto y fusiles de francotirador.56 Cada arma tiene un patr??n de retroceso que debe ser controlado por el jugador para poder disparar con precisi??n. El equipo atacante tiene una bomba, llamada Spike, que necesitan plantar en un sitio. Si el equipo atacante protege con ??xito la Spike durante 40 segundos y detona, obtendr??n un punto. Si el equipo defensor desactiva con ??xito la Spike, o el temporizador de la ronda de 100 segundos expira, el equipo defensor obtiene un punto. Si se eliminan todos los miembros de un equipo, el equipo contrario gana un punto. Despu??s de doce rondas, el equipo atacante cambia al equipo defensor y viceversa. </p><br><br><br><br>
        <p class="tx">El primer equipo en ganar 13 rondas gana la partida. Exceptuando el tiempo extra, donde deber??s conseguir 2 victorias/rondas seguidas. En total, hay seis modos de juego: No Competitivo, Competitivo, Combate a Muerte, Fiebre De La Spike, R??plica y Carrera Armament??stica. Tambi??n cuenta con un modo llamado personalizado en el cual se puede crear una partida con los ajustes que el jugador desee.
        
        </p><br><br><br><br><br><br>
	</div>
    <div class='circulo4' id="dos">
        <img src="../img/Valorant.png" class='imagen'>
    </div>
                </hr>
                <hr style="height:2px;border:none;color:#333;background-color:#333;">
    <div class='recuadro' id="dos">

    
        <h1 class="tit">Counter-Strike: Global Offensive "CSGO"</h1><br>
        <p class="tx">Counter-Strike: Global Offensive (CS:GO) es un videojuego de disparos en primera persona desarrollado por Valve Corporation y Hidden Path Entertainment. 
Es el cuarto juego de la saga Counter-Strike. Fue lanzado al mercado en agosto de 2012 para las plataformas de Microsoft Windows, macOS y Xbox 360 y PlayStation 3.
 La versi??n para Linux estuvo disponible al p??blico en septiembre de 2014.
</p><br>
         <p class="tx">
El juego consiste en dos equipos, los Terroristas y los Antiterroristas (T y CT, respectivamente), los cuales se enfrentan entre ellos en diferentes modos de juego.
El modo m??s com??n es en el cual el bando Terrorista tienen que plantar y defender una bomba mientras los Antiterroristas defender las zonas de plante de la bomba y su posterior desactivaci??n. 
Hay 9 modos de juego oficiales, cada uno con sus caracter??sticas espec??ficas.
</p><br>
        <p class="tx">El juego tambi??n tiene un sistema de emparejamiento, que permite a los jugadores demostrar su nivel en servidores dedicados de la propia desarrolladora, adem??s de servidores creados por la comunidad. A finales de 2018, CS:GO se uni?? a la moda de los Battle-Royale sacando su propio modo de juego, "Danger-Zone".
CS:GO est?? centrado sobre todo en el modo competitivo. Tras su salida, se acept?? como sucesor de Counter-Strike 1.6 y Counter-Strike: Source, continuando el legado competitivo internacional de la saga. A d??a de hoy es uno de los principales videojuegos en la escena de los Esports, con equipos de todo el mundo luchando en ligas y torneos.
        </p><br><br><br><br>
	</div>
    <div class='circulo4' id="tres">
        <img src="../img/gg.png" class='imagen'><br><br><br>
        <p class="sub">Se hacen torneos anuales con gran repercusi??n en el mundo</p>
        </div>
                </hr>
            <hr style="height:2px;border:none;color:#333;background-color:#333;">
	<div class='recuadro' id="seis">
        <h1 style="text-align:center">COMENTARIOS</h1>
        <br>
        <?php $usuario=(!empty($_SESSION['Usuario'])) ? $_SESSION['Usuario'] : NULL;
                        if($usuario){
                        echo "

                        <div id='disqus_thread'></div>
                        <script>
    
                        (function() {
                        var d = document, s = d.createElement('script');
                        s.src = 'https://idgsgamers.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        
                        
                        ";
                        }else{
                            echo '
                            <h3 style="text-align:center">Debes iniciar sesion para dar tu rese??as</h3>
                            <br>
                            <a class="hfondo2" href="login.php">Iniciar Sesion</a>
                        ';
                        }
        ?>
    </div>
	

    <hr>
    <!--Waves Container-->
<div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
        </div>
        <!--Waves end-->
        
        </div>
        <!--Header ends-->
        
        <!--Content starts-->
        <div class="content flex">


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
            <a class="tooltip" href="https://www.tiktok.com/@idgs_gamer?lang=es"><span style="font-size: 15px; line-height: 23px;" class="tooltiptext">Tik-Tok</span><i class='fab fa-tiktok'></i></i></a>
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

<!-- C??digo de instalaci??n Cliengo para antoniozigaluna@gmail.com --> 
<script type="text/javascript">(function () { 
    var ldk = document.createElement('script'); 
    ldk.type = 'text/javascript';
    ldk.async = true;
    ldk.src = '../js/chatbot.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ldk, s); })();
</script>

</body>

</html>