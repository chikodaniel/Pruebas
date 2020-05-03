<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Insertar un cartel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    
  </head>
  <body>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Buen día =D</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>
            </ul>

            
            
        </div>
    </nav>
  <div class="container-fluid">
        <section class="main row">
            <article id= contenedorDeCartas class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  

<?php
 require 'con_db.php';  // Do Database Connection in this file (create a file namely connect.php inside MyProject Folder)

 ?>


<form autocomplete="off" action="insertar.php" onsubmit="setTimeout(function(){window.location.reload();},100)" method="post">
            <label>Insertar cartel :</label>
            <br />
            <label>Titulo :</label>
            <br />
            <input id="titulo" type="text" name="titulo" id="titulo" />
            <br />
            <label>URL :</label>
            <br />
            <input id="url" type="text" name="url" id="url" />
            <br />
            <label>Subtitulo :</label>
            <br />
            <input id="subtitulo" type="text" name="subtitulo" id="subtitulo" />
            <br />
            <label>Texto :</label>
            <br />
            <textarea name="texto" id="texto" rows="10" cols="30"></textarea>
            <br />
            <label>categoria :</label>
            <br />


            <select name="categoria">
            <option value="1">escolares</option> 
            <option value="2">idiomas</option>
            <option value="3">deportes</option>
            <option value="4">artisticas</option>
            <option value="5">competencias</option>
            <option value="6">cursos</option>
            <br />
			
            </select>      
            <br />
            <br />

            <input type="submit" name="ejecutar" value="Insertar cartel">  

            <?php
            if (isset($_POST['ejecutar'])) {
            $titulo = $_POST['titulo'];
	        $url = $_POST['url'];
            $subtitulo = $_POST['subtitulo'];
            $texto = $_POST['texto'];
            $categoria = $_POST['categoria'];
            
            if($mysqli->connect_error){
                die($mysqli->connect_error);
            }
            $sql = "INSERT INTO carta values (null ,'$titulo','$url','$subtitulo','$texto',(SELECT DAY(CURRENT_DATE())) ,(SELECT MONTH(CURRENT_DATE())) ,(SELECT YEAR(CURRENT_DATE())), $categoria)";
            if (mysqli_query($mysqli, $sql)) {
                echo "Cartel insertado con exito =D";
             } else {
                echo "Error: " . $sql . "" . mysqli_error($mysqli);
             }  
             $mysqli->close(); 
            }
            ?>
            
           
            
            

            </article >
        </section>
    </div>
</form>
<footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                    
                    </ul>
                </div>
                <div class="col-sm-3">
                   </div>
            </div>
        </div>
    </footer>
</body>
</html>
