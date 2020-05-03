<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz!</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Recursos/secciones.css">
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
    <section id="rosete" class="main row">
         
            <script src = "TestScript.js"></script> 
            

            <?php require 'dbcon.php'; ?>

            <!-- las querys estan hechas de forma en la que en un futuro se puedan modificar para poder preguntar incluso en diferentes idiomas al mismo tiempo, por eso son extensas-->
            <!-- la primera query sirve para obtener la palabta del idioma origianl, la segunda query obtiene la traduccion de esta palabra ademas de su idioma-->

            <?php 
            $categoria_query1 = "Abecedario";
            $categoria_query2 = "Animales";
            $categoria_query3 = "Familia";
            $categoria_query4 = "Colores";
            $categoria_query5 = "Numeros";         
            ?>

            <!--query de pregunta 1-->
            <?php
						$resultado1 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query1'   ORDER BY rand()");
						if (mysqli_num_rows($resultado1)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado1);
								$texto1 = $rows['texto'];
								$id_idioma1 = $rows['id_idioma'];
                $id_traduccion1 = $rows['id_traduccion'];
                
                			
								$traduccion1 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion1 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion1)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion1);
                  $textoTraducido1 = $rows['texto'];
                  $idiomatraducido1 = $rows['descripcion_idioma'];
                }
							}
            ?>

            <!--query de pregunta 2-->
            <?php
						$resultado2 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query1'   ORDER BY rand()");
						if (mysqli_num_rows($resultado2)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado2);
								$texto2 = $rows['texto'];
								$id_idioma2 = $rows['id_idioma'];
                $id_traduccion2 = $rows['id_traduccion'];
                
                			
								$traduccion2 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion2 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion1)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion2);
                  $textoTraducido2 = $rows['texto'];
                  $idiomatraducido2 = $rows['descripcion_idioma'];
                }
							}
            ?>

            <!--query de pregunta 3-->
            <?php
						$resultado3 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query2'   ORDER BY rand()");
						if (mysqli_num_rows($resultado3)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado3);
								$texto3 = $rows['texto'];
								$id_idioma3 = $rows['id_idioma'];
                $id_traduccion3 = $rows['id_traduccion'];
                
                			
								$traduccion3 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion3 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion2)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion3);
                  $textoTraducido3 = $rows['texto'];
                  $idiomatraducido3 = $rows['descripcion_idioma'];
                }
							}
            ?>

            <!--query de pregunta 4-->
            <?php
						$resultado4 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query3'   ORDER BY rand()");
						if (mysqli_num_rows($resultado2)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado4);
								$texto4 = $rows['texto'];
								$id_idioma4 = $rows['id_idioma'];
                $id_traduccion4 = $rows['id_traduccion'];
                
                			
								$traduccion4 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion4 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion4)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion4);
                  $textoTraducido4 = $rows['texto'];
                  $idiomatraducido4 = $rows['descripcion_idioma'];
                }
							}
            ?>

            <!--query de pregunta 5-->
            <?php
						$resultado5 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query4'   ORDER BY rand()");
						if (mysqli_num_rows($resultado2)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado5);
								$texto5 = $rows['texto'];
								$id_idioma5 = $rows['id_idioma'];
                $id_traduccion5 = $rows['id_traduccion'];
                
                			
								$traduccion5 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion5 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion5)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion5);
                  $textoTraducido5 = $rows['texto'];
                  $idiomatraducido5 = $rows['descripcion_idioma'];
                }
							}
            ?>

            <!--query de pregunta 6-->
            <?php
						$resultado6 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_idioma`= 'ESP' and `categoria`.`descripcion_categoria`= '$categoria_query5'   ORDER BY rand()");
						if (mysqli_num_rows($resultado2)==0) { 
						} else {
								$rows = mysqli_fetch_assoc($resultado6);
								$texto6 = $rows['texto'];
								$id_idioma6 = $rows['id_idioma'];
                $id_traduccion6 = $rows['id_traduccion'];
                
                			
								$traduccion6 = $mysqli->query("SELECT `palabra`.`id_palabra`, `palabra`.`texto`, `categoria`.`descripcion_categoria`, `idioma`.`id_idioma` , `idioma`.`descripcion_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` LEFT JOIN `idioma` ON `palabra`.`id_Idioma` = `idioma`.`id_Idioma` LEFT JOIN `categoria` ON `palabra`.`id_categoria` = `categoria`.`id_categoria` where `traduccion`.`id_traduccion` = $id_traduccion6 and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion6)==0){
								} else{
									$rows = mysqli_fetch_assoc($traduccion6);
                  $textoTraducido6 = $rows['texto'];
                  $idiomatraducido6 = $rows['descripcion_idioma'];
                }
							}
            ?>

          
                   
    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1> Prueba de conocimiento </h1>
    </div>        

    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class = "row">
        <article id="blanco" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
                 
          <!-- en esta parte se haran las preguntas, los datos los sacare de una query de la base de datos-->
          <!-- cada una de estas cuenta como una pregunta -->
          <!-- los datos son obtenidos de la base de datos, de acuerdo a las querys de arriba-->
          <!-- de esta forma se vuelve algo dinamico, ademas de evaluar las respuestas mediante un script-->
          <form action="javascript:void(0)"; id ="test" name = "test">

          <!-- pregunta 1 -->
          <p> <?php echo "1.- ¿Cuál es la traducción de " . $texto1 . " al idioma " . "náhuatl" . "?" ?></p>
          <input id ="textbox1" type = "text" name = "pregunta1">
          <p id="correcta1"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource1" value ="<?php echo $textoTraducido1; ?>"> <?php echo $textoTraducido1?> <br>
          </div>
        </article>           
          <!-- explicacion rapida -->
          <!-- primero de acuerdo a la query, obtengo la palabra y a que idioma va a ser traducido -->
          <!-- esos datos van a ir a un radio invisible, para que de esta forma me permita enviar las variables a un Script(TestScript.js) que las evaluara -->
          <!-- por ultimo, solo espera un input de texto que esperara que el usario introduzca texto para evaluarlo-->
        <article id="blanco" class="col-xs-12 col-sm-12 col-md-12 col-lg-4">          
          <!-- pregunta 2 -->
          <p> <?php echo "2.- ¿Cuál es la traducción de " . $texto2 . " al idioma " . "náhuatl" . "?" ?></p>
          <input id ="textbox2" type = "text" name = "pregunta2">
          <p id="correcta2"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource2" value ="<?php echo $textoTraducido2; ?>"> <?php echo $textoTraducido2?> <br>
          </div>
        </article> 

        <article id="rojo" class="col-xs-12 col-sm-12 col-md-12 col-lg-4">   
          <!-- pregunta 3 -->
          <p> <?php echo "3.- ¿Cuál es la traducción de " . $texto3 . " al idioma " . "náhuatl" . "?"?></p>
          <input id ="textbox3" type = "text" name = "pregunta3">
          <p id="correcta3"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource3" value ="<?php echo $textoTraducido3; ?>"> <?php echo $textoTraducido3?> <br>
          </div>
        </article> 
      </div>
      
      <div class =row>
        <article id="rojo" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
          <!-- pregunta 4 -->
          <p> <?php echo "4.- ¿Cuál es la traducción de " . $texto4 . " al idioma " . "náhuatl" . "?"?></p>
          <input id ="textbox4" type = "text" name = "pregunta4">
          <p id="correcta4"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource4" value ="<?php echo $textoTraducido4; ?>"> <?php echo $textoTraducido4?> <br>
          </div>
        </article> 
        <article id="blanco" class="col-xs-12 col-sm-12 col-md-12 col-lg-4">         
          <!-- pregunta 5 -->
          <p> <?php echo "5.- ¿Cuál es la traducción de " . $texto5 . " al idioma " . "náhuatl" . "?"?></p>
          <input id ="textbox5" type = "text" name = "pregunta5">
          <p id="correcta5"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource5" value ="<?php echo $textoTraducido5; ?>"> <?php echo $textoTraducido5?> <br>
          </div>
        </article> 
        <article id="negro" class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
          <!-- pregunta 6 -->
          <p> <?php echo "6.- ¿Cuál es la traducción de " . $texto6 . " al idioma " . "náhuatl" . "?"?></p>
          <input id ="textbox6" type = "text" name = "pregunta6">
          <p id="correcta6"><p>
          <div id ="invisible">
          <input type = "radio" id = "mc" name = "resource6" value ="<?php echo $textoTraducido6; ?>"> <?php echo $textoTraducido6?> <br>
          </div>
      </article>           
      </div>     
      
      <div id= "azul" class = row>

      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-8"> 
      </article>  
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
        <input id = "boton-test" class="boton-test" type = "button" value = "Terminé" onclick = "check();">
        </form>
          
      </article>

      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-2"> 
        <p id ="correctas"></p>
      </article>
      </div>
      </div>
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
                <a href="https://twitter.com/dialectando" target="_blank" ><img border="0" alt="Colores" src="/Recursos/twitter.jpg" width="60" height="60"></a>
                <a href="https://www.instagram.com/dialectando/" target="_blank" ><img border="0" alt="Instagram" src="/Recursos/Instagram.png" width="60" height="60"></a>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="somos">
            
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <font color="white">
            <center>
              <br>
              <p>Todos los derechos de autor pertenecen a sus respectivos dueños, página para fines educativos</p>
              <p>Tienes alguna sugerencia o ¿simplemente quieres enviarnos un correo? <a href = "mailto: contacto@dialectando.com">Contáctanos</a></p>
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
   
  <script src="/popup.js"></script>
  <script src="/bootstrap/js/jquery.js">
  <script src="/bootstrap/js/bootstrap.min.js">
  
</body>
</html>