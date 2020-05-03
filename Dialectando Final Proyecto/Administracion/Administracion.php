<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- titulo de la pestaña-->
		<title>Abecedario</title>
		
		<!-- favicon (el cuadrito de imagen en la pestaña-->
		<link rel="icon" type="image/png" href="../Recursos/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="../Recursos/favicon-16x16.png" sizes="16x16" />
		<!-- favicon (el cuadrito de imagen en la pestaña-->
		
		<!-- metadata de la pagina, para ser encontrada en google-->
        <meta name="description" content="Aprendamos Náhualt basico, desde colores hasta palabras elementales como Papá y Mamá, pequeña plataforma creada como un proyecto escolar">
        <meta name="keywords" content="Enseñanza, Náhuatl, Escolar, Niños, Proyecto escolar, ITSX"/>
		<!-- metadata de la pagina, para ser encontrada en google-->
		
		<!-- link a css-->
		<link rel="stylesheet" href="/Recursos/adm.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
        
		<!-- link a css-->
	</head>
	
<!-- inicio del cuerpo-->
<body>
		    
    <!-- inicio de la clase container (esta contiene toda la estructura de la pagina) -->
	<div class="container">
    	
		<!-- inicio de la case header -->
  		<div class="header"><a href="/index.php"><img src="../Recursos/LogoP.png" alt="Insertar logotipo aquí" name="Insert_logo" width="35%" height="90" id="Insert_logo"  style="background-color: #FFBB33; 		
		display:bock;" 		/></a>  <p> Enseñanza basica del Náhuatl</p>   
    
		<!-- fin de la case header -->
		</div>
   		<!-- fin de la case header -->
		
        <!-- inicio de la clase content-->
        <div class="content">      	
            <!-- inicio de la clase contenido-->
		  	<div class="contenido">
           	  	<div class="principal">
                	<form action="" method="post">
						<?php require 'AdminDB.php'; ?>
                    	<div class= "idioma">
							<label>Idioma</label><br><br>
							De 
							<select ="idiomaOrigen">
								<?php 
								$resultado = $mysqli->query("SELECT * FROM idioma");
								while ($rows = $resultado->fetch_assoc()){
								$idioma = $rows['descripcion_idioma'];
								$id_idioma= $row['id_idioma'];
								echo "<option value='$id_idioma'>$idioma</option>";
								}
								?>
							</select>
							a 
							<select ="idiomaDestino">
								<?php 
								$resultado = $mysqli->query("SELECT * FROM idioma");
								while ($rows = $resultado->fetch_assoc()){
								$idioma = $rows['descripcion_idioma'];
								$id_idioma= $row['id_idioma'];
								echo "<option value='$id_idioma'>$idioma</option>";
								}
								?>
							</select>
                    	</div>
                    
                  		<div class= "palabra">
                    		<div class="palabraOrigen">
                            	<label>Palabra a Traducir</label><br><br>
                            	<input type="text" name ="palabraOrigen" id="palabraOrigen">
                        	</div>
                   	  
                      		<div class="palabraDestino">
                   	      		<label>Traducción</label><br><br>
                   	      		<input type="text" name ="palabraDestino" id="palabraDestino">
                   	    	</div>
                   		</div>
                    
                    	<div class="categoria">
                    		<label>Categoria</label><br><br>
                    		<select ="categoria">
								<?php 
								$resultado = $mysqli->query("SELECT * FROM categoria");
								while ($rows = $resultado->fetch_assoc()){
									$categoria = $rows['descripcion_categoria'];
									$id_categoria = $rows['id_categoria'];
									echo "<option value='$id_categoria'>$categoria</option>";
								}
								?>
                    		</select>
                    	</div>
                    
                    	<div class="enviar">
                    		<input type="submit" name="botonAgregar" id="botonAgregar">
                    	</div>
                		</form>
                    
                    <?php 
					if (isset($_POST["botonAgregar"])){
					}
					?>
                </div>
                
            	<div class="secundaria">
					<div class="busqueda">
						<?php
						$resultado = $mysqli->query("SELECT `palabra`.`texto`, `traduccion`.`id_idioma`, `traduccion`.`id_traduccion` FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` where `traduccion`.`id_idioma`= 'ESP' ORDER BY rand()");
						if (mysqli_num_rows($resultado)==0) { 
							echo "no hay nada";
						} else {
								$rows = mysqli_fetch_assoc($resultado);
								$texto = $rows['texto'];
								$id_idioma = $rows['id_idioma'];
								$id_traduccion = $rows['id_traduccion'];
								$descripcion_Idioma = $rows['descripcion_Idioma'];
								$descripcion_Categoria = $rows['descripcion_Categoria'];
								echo $texto . " pertenece al idioma ";
								echo $id_idioma . " se traduce en ";
								
								$traduccion = $mysqli->query("SELECT `palabra`.`texto`, `traduccion`.`id_idioma` , `traduccion`.`id_traduccion`FROM `palabra` LEFT JOIN `traduccion` ON `palabra`.`id_palabra` = `traduccion`.`id_palabra` where `traduccion`.`id_traduccion` = $id_traduccion and `traduccion`.`id_idioma`= 'NAH' limit 1" );
								if (mysqli_num_rows($traduccion)==0){
									echo "error 404 no tiene traduccion";
								} else{
									$rows = mysqli_fetch_assoc($traduccion);
									$textoTraducido = $rows['texto'];
									echo $textoTraducido;
								}
							}
						if ($texto==$textoTraducido){
							
							echo "<br>"."funciona"."<br>";
							echo "<br>". $texto;
							echo "<br>". $textoTraducido;
						} else {
							echo "<br>"."no funciona"."<br>";
							echo "<br>". $texto;
							echo "<br>". $textoTraducido;

						}
						?>
						<div>
							<form action="javascript:void(0)"; method="post" id="probando">
								<input type="text" name ="palabraDestino" id="palabraDestino">
								<input type="submit" name="Test" id="Test">
							</form>
							
							<?php

							if(isset($_POST['Test'])){
								$prueba =$_POST['Test'];
								echo $textoTraducido;
								echo $prueba;
									if ($prueba==$textoTraducido){
										echo "muy bien";
									}
									else {
										echo "no le atinaste chavo :(";
									}
							} else {
								echo "no jala viejón";
							}
							?>
						</div>

						<div>
						<?php 
								

								$resultado = $mysqli->query("SELECT * FROM palabra where id_idioma='ESP' ORDER BY rand() limit 10");
								$result = array();
								while ($rows = $resultado->fetch_assoc()){
									$result[] = $rows['texto'];
								}

								echo $result[0]."<br>";
								echo $result[1]."<br>";
								echo $result[2]."<br>";
								echo $result[3]."<br>";
								echo $result[4]."<br>";
								echo $result[5]."<br>";
								echo $result[6]."<br>";
								echo $result[7]."<br>";
								echo $result[8]."<br>";
								echo $result[9]."<br>";
								

								
								?>
						</div>
                    </div>
				</div>

            <!-- fin de la clase contenido-->
			</div>
			<!-- fin de la clase contenido-->  
		
        <!-- fin de la clase content--> 	  
		</div>
      	<!-- fin de la clase content--> 
		       
		<!-- inicio de la clase footer-->   
		<div class="footer">
   			
            <center>Todos los derechos de autor pertenecen a sus respectivos dueños, pagina para fines educativos</center>
        <!-- fin de la clase footer-->
		</div>
		<!-- fin de la clase footer-->
	
	<!-- fin del container-->        
    </div>
    <!-- fin del container-->

<!-- fin del cuerpo-->
</body>
<!-- fin del cuerpo-->
</html>
