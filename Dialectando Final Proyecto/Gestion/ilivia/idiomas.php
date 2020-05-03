<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anuncios de Idiomas</title>
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
        <a class="navbar-brand" href="https://i-livia.000webhostapp.com/index.html">Regresar a la página principal</a>

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

          <!-- -->
    <div id= fondo class="container-fluid">
        <section class="main row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
                <div class="row">
                    <div id="selector" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="row">
               
                          </div>
                          <div class="row">
                          <label>Busca por titulo :</label>
                          <br />
                            <form autocomplete="off" action="javascript:void(0)"; class="form-inline">
                            <input class="form-control form-control-lg mr-sm-2" type="search" placeholder="" aria-label="Search" id="search1">
                            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                            </form>
                            <br>
                          </div>

                          <div class="row">
                            <br>
                          <form autocomplete="off" action="javascript:void(0)"; class="form-inline">
                          <label>Buscar por año :</label>
                          <br />
                            <input class="form-control form-control-lg mr-sm-2" type="search" placeholder="dd/mes/año" aria-label="Search" id="search2">
                            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                            </form>
                          </div>
                          <div class="row">
                              
                          </div>
                          <div class="row">
                            
                          </div>
                          <div class="row">
                              
                          </div>

                        </div>  

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                          <div id="fill" class="row">
                        
                          </div>
                          <div id= contenedorDeCartas class="card-columns">

                          </div>
                        </div>   
                </div>
            </article>
        </section>
    </div>
    
    <footer id="footer-main">
        <div class="container">
            <div class="row">
               
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
    
    <?php 
    require 'con_db.php'; 
    $hola = "Holaa";

    $cartel = $mysqli->query("SELECT * FROM carta where id_categoria='2'");
	if (mysqli_num_rows($cartel)==0) { 
        echo "no hay ningun cartel :(";
	} else {
    $titulo = array();
    $url = array();
    $subtitulo = array();
    $texto = array();
    $day= array();
    $month = array();
    $year = array();
    $id_categoria = array();

    while ($rows = $cartel->fetch_assoc()){
        $titulo[] = $rows['titulo'];
        $url[] = $rows['imagen_url'];
        $subtitulo[] = $rows['subtitulo'];
        $texto[] = $rows['texto'];
        $day[] = $rows['day'];
        $month[] = $rows['month'];
        $year[] = $rows['year'];
        $id_categoria[] = $rows['id_categoria'];
      }                   					
    }
    ?>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  
    
<script>
    var titulo = <?php echo json_encode($titulo); ?>;
    var array = <?php echo json_encode($url); ?>;
    var subtitulo = <?php echo json_encode($subtitulo); ?>;
    var texto = <?php echo json_encode($texto); ?>; 
    var day = <?php echo json_encode($day); ?>;
    var month = <?php echo json_encode($month); ?>;
    var year = <?php echo json_encode($year); ?>;
    var categoria = <?php echo json_encode($url); ?>;

    var container = document.getElementById("contenedorDeCartas");

    var actual = 0;

    function getEm() {
    const div = document.createElement('div');
    setTimeout(() => {
    div.innerHTML = 
    `
   
    <div class="card p-3" data-category="${categoria[actual]}">
    <div class="card-header">
    <h4 class="tituloPrincipal">${titulo[actual]}</h4>
    </div>
    <div class="view overlay">
        <img class="url card-img-top" src="${array[actual]}" alt="Card image cap" width="100%" height="100%">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>    
        </a>
    </div>
    
    <div class="card-body">
        <h4 class="subtitle card-title">${subtitulo[actual]}</h4>
        <p class="texto card-text">${texto[actual]}</p>
        <h5 class="card-text"><small class="text-muted">${day[actual]}/${month[actual]}/${year[actual]}</small></h5>
    </div> 

    <div id="hide" class="dia">
    <h4 class="dia">${day[actual]}</h4>
    </div>

    <div id="hide" class="mes">
    <h4 class="mes">${month[actual]}</h4>
    </div>

    <div id="hide" class="año">
    <h4 class="año">${year[actual]}</h4>
    </div>

     <div id="hide" class="año">
    <h4 class="categoria">${year[actual]}</h4>
    </div>

</div>
     `
     
    container.appendChild(div);

    actual++
    if (actual < array.length) {
      getEm();
    }
  }, 50);
}

getEm();
</script>

<script>
  var iso = new Isotope( '.contenedorDeCartas', {
  itemSelector: '.card',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.tituloPrincipal',
    symbol: '.dia',
    number: '.año',
  }
});

// bind sort button click
var sortByGroup = document.querySelector('.sort-by-button-group');
sortByGroup.addEventListener( 'click', function( event ) {
  // only button clicks
  if ( !matchesSelector( event.target, '.button' ) ) {
    return;
  }
  var sortValue = event.target.getAttribute('data-sort-value');
  iso.arrange({ sortBy: sortValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for ( var i=0; i < buttonGroups.length; i++ ) {
  buttonGroups[i].addEventListener( 'click', onButtonGroupClick );
}

function onButtonGroupClick( event ) {
  // only button clicks
  if ( !matchesSelector( event.target, '.button' ) ) {
    return;
  }
  var button = event.target;
  button.parentNode.querySelector('.is-checked').classList.remove('is-checked');
  button.classList.add('is-checked');
}

</script>

<script>
$('#search1').keyup(function (){ 
    $('.card').removeClass('d-none');
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.card-columns').find('.card .card-header h4:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
})

$('#search2').keyup(function (){ 
    $('.card').removeClass('d-none');
    var filter = $(this).val(); // get the value of the input, which we filter on
    $('.card-columns').find('.card .card-body h5:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
})

</script>
  </body>
</html>
