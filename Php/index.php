<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script> alert("Por favor debes iniciar sesión"); window.location: = "InicioSesion.php"; </script>'; 
    header("location: ../Php/InicioSesion.php");  
    session_destroy();
    die();
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Luna Graf</title>
        <link href="../Css/Estilos.css" rel="stylesheet" type="text/css"/>
        <link href="../Css/menu.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="shortcut icon" href="../Img/logo.png" type="image/x-icon">
    </head>
    <body>
        <header class="header">
            <div class="logo"> 
                <img src="../Img/logo.png" alt="">
            </div> 
         <div class="Menu"> 

             <input type="checkbox" id="check">
             <label for="check" class="checkbtn">
             
                 <i class="icono-menu"> <img src="../Img/menu2.png" alt=""></i>
             </label>
          <ul>
              <li><a href="../Php/index.php"><b>Inicio</b></a></li>
              <li><a href="../Php/Nosotros.php"><b>Nosotros</b></a></li>           
              <li><a href="../Php/Servicios.php"><b>Servicios</b></a></li>
              <li><a href="../Php/Galeria.php"><b>Galería</b></a></li>
              <li><a href="../Php/Contacto.php"><b>Contacto</b></a></li>
              <li><a href="../Php/InicioSesion.php"><i class="uil uil-sign-in-alt"></i></a></li>
              <li><a href="../Php/CerrarSesion.php"><i class="uil uil-sign-out-alt"></i></a></li>
            
          </ul>
            </div>
        </header>
  
  <div class="container">
  
      <div class="slider">
          <ul>
              <li><img src="../Img/prueba1234.png" alt=""></li>
              <li><img src="../Img/prueba3.png" alt=""></li> 
              <li><img src="../Img/prueba4.png" alt=""></li> 
              <li><img src="../Img/prueba24.png" alt=""></li> 
              <li><img src="../Img/prueba25.png" alt=""></li> 
          </ul>
      </div>
</div>

<div class="cajas">

<div class="cajas fila ">
<br>

    <div class="cajamision servicio-col" > 
        <img src="../Img/mision2.png" class="servi_icono">
        <h1> Misión</h1>
        <p>Somos una empresa que brinda servicios de calidad, cumpliendo un
           objetivo de dar soluciones claras y precisas que se adapten a las 
           necesidades de colaboradores y la sociedad, para así lograr un buen
           posicionamiento a los estándares requeridos por nuestros clientes. </p>
    </div>

 <div class="cajavision servicio-col" > 
     <img src="../Img/vision2.png" class="servi_icono">
        <h1> Visión</h1>
            <p>Ser una empresa reconocida a nivel nacional e internacional, enfocada
           y dedicada a brindar de la mejor manera nuestros servicios. Aportando
           a la publicidad de pequeñas y grandes empresas. </p>
    </div>

<div class="cajavalores servicio-col" > 
    <img src="../Img/valores2.png" class="servi_icono">
        <h1> Valores</h1>
        <ul>
            <li>Responsabilidad</li>
            <li>Calidad</li>
            <li>Respeto</li>
            <li>Servicio</li>
            <li>Puntualidad</li>
        </ul>
    </div>
  </div>
</div>
        <div class="divtitulo">
             <h2 class="titulos">Servicios</h2>
        </div>
        
        <div class="servigeneral">
 <div class="servi">
        <div class="servi_iconos">
           <img src="../Img/diseñograf.png" class="servi_icono">
             <h3 class="servi_titulo">Diseño Gráfico</h3>
              <p class="servi_parrafo">Nuestra labor como diseñadores gráficos es encontrar
                    la solución que mejor se ajuste a tus necesidades de comunicación visual.</p>
         </div>
         <div class="servi_iconos">
             <img src="../Img/bordaicono.png" class="servi_icono">
             <h3 class="servi_titulo">Bordados</h3>
              <p class="servi_parrafo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore porro eius facilis?</p>
          </div>
              <div class="servi_iconos">
                  <img src="../Img/gorraa.png" class="servi_icono">
              <h3 class="servi_titulo">Personalizaciones</h3>
           <p class="servi_parrafo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore porro eius facilis?</p>
            </div>
     <br>
         <a href="Servicios.php" class="btn" id="btnbuscar">Ver Más</a>
    </div>
            
             <br>
             <br>
      </div>

<div class="divtitulo">
             <h2 class="titulos">Galería</h2>
        </div>

        <div class="galeeria">
            <img src="../Img/1.10.png">
            <img src="../Img/1.18.png">
            <img src="../Img/1.13.png">
            <img src="../Img/1.19.png">
            
            <a href="Galeria.php" class="btn" id="btnbuscar">Ver Más</a>
        </div>
<div class="separador"></div>
    <br>
    <br>


<br>
<br>
<br>
<br>
<br>
<br>

<div class="separador"></div>


       <div class="divtitulo">
             <h2 class="titulos">Ubicación</h2>
        </div>

<div class="ubicacion">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15044.629220144356!2d-70.7067323!3d19.4918669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2348788ec6057acb!2sLuna%20Graf!5e0!3m2!1ses-419!2sdo!4v1650598417486!5m2!1ses-419!2sdo" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    <footer class="footer">

  <div class="izqui">

  <h3>Luna<span> Graf</span></h3>

  <p class="links">
      <a href="index.php">Inicio</a>
      <a href="Servicios.php">Servicios</a>
      <a href="Galeria.php">Galeria</a>
      <a href="Nosotros.php">Nosotros</a>     
      <a href="Contacto.php">Contacto</a>
  </p>

  <p class="nombrecomp">Luna Graf &copy; 2015</p>
  </div>

  <div class="centro">
  <div>
  <i class="direccion"></i>
  <p><span>Av.hatuey plaza yliamar</span> Santiago, RD</p>
  </div>

  <div>
  <i class="telefono"></i>
  <p>829-660-6887</p>
  </div>

  <div>
    <i class="correo"></i>
    <p><a href="hotmail.com">support@company.com</a></p>
  </div>

  </div>

  <div class="dere">

  <p class="sobrecomp">
  <span>Redes Sociales</span>
        </p>

  <div class="iconos">

  <a href="https://www.instagram.com/luna_graf/"><i class="uil uil-instagram"></i></a>
  <a href="#"><i class="uil uil-facebook-f"></i></a>
  <a href="#"><i class="uil uil-envelope-edit"></i></a>

  </div>
  </div>

  </footer>
      
    </body>
</html>
