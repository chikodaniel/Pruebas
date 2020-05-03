<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memorama</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Recursos/secciones.css">
    <link rel="stylesheet" href="/Recursos/memoramaStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
    <link rel="icon" type="image/png" href="/Rercursos/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/Rercursos/favicon-16x16.png" sizes="16x16" />

    <meta name="description" content="Aprendamos Náhualt basico, desde colores hasta palabras elementales como Papá y Mamá, pequeña plataforma creada como un proyecto escolar">
    <meta name="keywords" content="Enseñanza, Náhuatl, Escolar, Niños, Proyecto escolar, ITSX"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153784693-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153784693-1');
</script>

    
</head>
<body>

<header>
    <div class="container-fluid">
      <div class="logo">
        <a href="index.php"><img border="0" alt="logo" src="/Recursos/logoP.png" width="100%" height="100%"/></a>   
      </div>
    </div>    
  </header>
  
  <div class="container-fluid">
    
    <section class="main row">
    
     <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
        <div id="fillarriba" class="row">
        <div>
      </article>

      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
        <div class="row">
          <div class="col-1 col-xs-1 col-sm-2 col-md-1 col-lg-1">
          </div>

          <div class="col-0 col-xs-1 col-sm-1 col-md-1 col-lg-1">
           
          </div>

          <div id="cabecera" class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-1">
            <a href="index.php"><img border="0" alt="regresar" src="/Recursos/Regresar.png" width="100%" height="100%"/></a> 
          </div>
        <div>
      </article>
      
        <div class="memorama">
          <?php require 'dbcon.php'; ?>
          <?php 
          
          $resultado = $mysqli->query("SELECT * FROM palabra where id_idioma='ESP' ORDER BY rand() limit 10");
          $imagenes = array();
          while ($rows = $resultado->fetch_assoc()){
            $imagenes[] = $rows['texto'];
          }
          ?>
          <div class="carta" data-framework="1">
            <img class="front-face" src="/memorama/<?php echo $imagenes[0]; ?>.png" alt="<?php echo $imagenes[0]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='1' src='/MemoAudios/<?php echo $imagenes[0]; ?>.ogg'/></audio>
            <audio id='genial' src='/MemoAudios/genial.ogg'/> </audio>
          </div>
          <div class="carta" data-framework="1">
            <img class="front-face" src="/memorama/<?php echo $imagenes[0]; ?>.png" alt="<?php echo $imagenes[0]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='1' src='/MemoAudios/<?php echo $imagenes[0]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="2">
            <img class="front-face" src="/memorama/<?php echo $imagenes[1]; ?>.png" alt="<?php echo $imagenes[1]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='2' src='/MemoAudios/<?php echo $imagenes[1]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="2">
            <img class="front-face" src="/memorama/<?php echo $imagenes[1]; ?>.png" alt="<?php echo $imagenes[1]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='2' src='/MemoAudios/<?php echo $imagenes[1]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="3">
            <img class="front-face" src="/memorama/<?php echo $imagenes[2]; ?>.png" alt="<?php echo $imagenes[2]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='3' src='/MemoAudios/<?php echo $imagenes[2]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="3">
            <img class="front-face" src="/memorama/<?php echo $imagenes[2]; ?>.png" alt="<?php echo $imagenes[2]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='3' src='/MemoAudios/<?php echo $imagenes[2]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="4">
            <img class="front-face" src="/memorama/<?php echo $imagenes[3]; ?>.png" alt="<?php echo $imagenes[3]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='4' src='/MemoAudios/<?php echo $imagenes[3]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="4">
            <img class="front-face" src="/memorama/<?php echo $imagenes[3]; ?>.png" alt="<?php echo $imagenes[3]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='4' src='/MemoAudios/<?php echo $imagenes[3]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="5">
            <img class="front-face" src="/memorama/<?php echo $imagenes[4]; ?>.png" alt="<?php echo $imagenes[4]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='5' src='/MemoAudios/<?php echo $imagenes[4]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="5">
            <img class="front-face" src="/memorama/<?php echo $imagenes[4]; ?>.png" alt="<?php echo $imagenes[4]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='5' src='/MemoAudios/<?php echo $imagenes[4]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="6">
            <img class="front-face" src="/memorama/<?php echo $imagenes[5]; ?>.png" alt="<?php echo $imagenes[5]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='6' src='/MemoAudios/<?php echo $imagenes[5]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="6">
            <img class="front-face" src="/memorama/<?php echo $imagenes[5]; ?>.png" alt="<?php echo $imagenes[5]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='6' src='/MemoAudios/<?php echo $imagenes[5]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="7">
            <img class="front-face" src="/memorama/<?php echo $imagenes[6]; ?>.png" alt="<?php echo $imagenes[6]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='7' src='/MemoAudios/<?php echo $imagenes[6]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="7">
            <img class="front-face" src="/memorama/<?php echo $imagenes[6]; ?>.png" alt="<?php echo $imagenes[6]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='7' src='/MemoAudios/<?php echo $imagenes[6]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="8">
            <img class="front-face" src="/memorama/<?php echo $imagenes[7]; ?>.png" alt="<?php echo $imagenes[7]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='8' src='/MemoAudios/<?php echo $imagenes[7]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="8">
            <img class="front-face" src="/memorama/<?php echo $imagenes[7]; ?>.png" alt="<?php echo $imagenes[7]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='8' src='/MemoAudios/<?php echo $imagenes[7]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="9">
            <img class="front-face" src="/memorama/<?php echo $imagenes[8]; ?>.png" alt="<?php echo $imagenes[8]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='9' src='/MemoAudios/<?php echo $imagenes[8]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="9">
            <img class="front-face" src="/memorama/<?php echo $imagenes[8]; ?>.png" alt="<?php echo $imagenes[8]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='9' src='/MemoAudios/<?php echo $imagenes[8]; ?>.ogg'/></audio>
          </div>

          <div class="carta" data-framework="10">
            <img class="front-face" src="/memorama/<?php echo $imagenes[9]; ?>.png" alt="<?php echo $imagenes[9]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='10' src='/MemoAudios/<?php echo $imagenes[9]; ?>.ogg'/></audio>
          </div>
          <div class="carta" data-framework="10">
            <img class="front-face" src="/memorama/<?php echo $imagenes[9]; ?>.png" alt="<?php echo $imagenes[9]; ?>" />
            <img class="back-face" src="/recursos/Card.png" alt="Dialectando" />
            <audio id='10' src='/MemoAudios/<?php echo $imagenes[9]; ?>.ogg'/></audio>
          </div>
          
        </div>
      

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
          <div id="fillmemo" class="row">
            <div class="col-2 col-xs-2 col-sm-4 col-md-4 col-lg-7">
            </div>

            <div id="texto" class="col-5 col-xs-5 col-sm-2 col-md-2 col-lg-2">
            <p id ="prueba"></p>
            </div>

            <div id="texto" class="col-5 col-xs-5 col-sm-2 col-md-2 col-lg-2">
            <p id ="movimientos"></p>
            </div>
            
          <div>
        </article>
        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
          <div id="fillmemo" class="row">
          <div>
        </article>

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
          <div id="fillmemo" class="row">
      
          <div>
        </article>

        
      </article>
    </section>
  </div>
  

  <footer>
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="row justify-content-between">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="contacto">
                <a href="https://www.facebook.com/Dialectando-106974887374683/" target="_blank"  ><img border="0" alt="Colores" src="/Recursos/Facebook.png" width="60" height="60"></a>
                <a href="https://twitter.com/dialectando1" target="_blank" ><img border="0" alt="Colores" src="/Recursos/twitter.jpg" width="60" height="60"></a>
                <a href="https://www.instagram.com/dialectando/" target="_blank" ><img border="0" alt="Instagram" src="/Recursos/Instagram.png" width="60" height="60"></a>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="somos">
            <button id="boton-abrir-popup" class="boton-abrir-popup">¿Quiénes somos?</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <font color="white">
            <center>
              <br>
              <p>Todos los derechos de autor pertenecen a sus respectivos dueños, página para fines educativos</p>
              <p>Tienes alguna sugerencia o ¿simplemente quieres enviarnos un correo?<a href = "mailto: contacto@dialectando.com"> Contáctanos</a></p>
                </center>
                </font>
        </div>
      </div>
    <div>
  </footer>

  <div class="overlay" id="overlay">
    <div class="popup" id="popup">
    	<h3> ¿Quiénes somos? </h3>
        <h4> Somos alumnos de 7° semestre del ITSX. Esta página web fue creada con la 
                finalidad de crear un proyecto en la materia de Programación Web.</h4>
        <a href="#" id="boton-cerrar-popup" class="boton-cerrar-popup">CERRAR</a>
    </div>
  </div>	
   
  <script>
    setTimeout(function(){ 
    alert("Se ha agotado el tiempo =("); 
    window.location.reload(1);
    }, 600000);
  </script>
  
  <div class="overlayMemo" id="overlayMemo">
    <div class="final" id="final" >
      <p><h2> ¡¡Felicidades has completado el memorama!! </h2></p>
      <p><h3> Haz clic aquí para jugar otra vez </h3></p>
      <button class="boton-abrir-popup" value="Refresh Page" onClick="window.location.reload();"> ¡¡Jugar otra vez!! </button>
    </div>
  </div>
  
  <script src="/memo.js"></script>
  <script src="/popup.js"></script>
  <script src="/bootstrap/js/jquery.js">
  <script src="/bootstrap/js/bootstrap.min.js">

</body>
</html>

