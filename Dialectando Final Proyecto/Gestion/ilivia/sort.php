<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creatividad BOOTSTRAP 4</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    
  </head>
  <body>

    
 
 
    
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Menú</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Alumnos.php">Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Docentes</a>
            </li>
            </ul>

            
            
        </div>
    </nav>

          <!-- -->
    <div class="container-fluid">
    <h1>Isotope - sorting, vanilla JS</h1>

<div class="button-group sort-by-button-group">
  <button class="button is-checked" data-sort-value="original-order">original order</button>
  <button class="button" data-sort-value="name">name</button>
  <button class="button" data-sort-value="symbol">symbol</button>
  <button class="button" data-sort-value="number">number</button>
</div>

<div class="card-columns">
    <div class ="card p-3">
        <div class="card-header">
            <h4 class="tituloPrincipal">Mercury</h4>
        </div>
        
            <div class="card-body">
                <h3 class="namee">Gato1</h3>
                <p class="dia">Hg</p>
                <p class="año">80</p>
                <p class="weight">D</p>
            </div>
        
    </div>

    <div class ="card p-3"> 
        <div class="card-header">
            <h4 class="tituloPrincipal">Tellurium</h4>
        </div>
        
            <div class="card-body">
                <h3 class="name">Gato2</h3>
                <p class="dia">Te</p>
                <p class="año">52</p>
                <p class="weight">C</p>
            </div>
        
    </div>

    <div class ="card p-3">
        <div class="card-header">
            <h4 class="tituloPrincipal">Bismuth</h4>
        </div>
        
            <div class="card-body">
                <h3 class="name">Gato3</h3>
                <p class="dia">Bi</p>
                <p class="año">83</p>
                <p class="weight">B</p>
            </div>
        
    </div>  

    <div class ="card p-3">
        <div class="card-header">
            <h4 class="tituloPrincipal">Lead</h4>
        </div>
       
        <div class="card-body"> 
            <h3 class="name">Gato1</h3>
            <p class="dia">Pb</p>
            <p class="año">82</p>
            <p class="weight">A</p>
        </div>
    </div>
</div>

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
        <p class="card-text"><small class="text-muted">${day[actual]}/${month[actual]}/${year[actual]}</small></p>
    </div> 
    
    <div id="hide" class="dia">
    <h4 class="day">${day[actual]}</h4>
    </div>

    <div id="hide" class="mes">
    <h4 class="month">${month[actual]}</h4>
    </div>

    <div id="hide" class="año">
    <h4 class="year">${year[actual]}</h4>
    </div>

     <div id="hide" class="año">
    <h4 class="categoria">${year[actual]}</h4>
    </div>
    </div>
    </div>
    </div>
    
    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p>Creado por Render2Web</p>
                    <p>desarrollo <a href="http://www.render2web.com">Render2Web</a></p>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Acerca de</a></li>
                        <li><a href="">Render2Web</a></li>
                        <li><a href="">Últimas noticias</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="">facebook</a></li>
                        <li><a href="">twitter</a></li>
                        <li><a href="">youtube</a></li>
                        <li><a href="">linkedin</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h6>Info</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam expedita fugit saepe, eum ad, quam! Eum magnam suscipit nulla ullam aliquam consectetur provident, nihil consequuntur porro labore asperiores corrupti esse?</p>
                </div>
            </div>
        </div>
      
      


</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  
<script>
    var iso = new Isotope( '.card-columns', {
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

  </body>
</html>


 
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
        <p class="card-text"><small class="text-muted">${day[actual]}/${month[actual]}/${year[actual]}</small></p>
    </div> 
    <div class="element-item post-transition metal " data-category="post-transition">
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
</div>


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

    var htmlElements = "";
    for (var i = 0; i < array.length; i++) {
    htmlElements +=  ' <div class ="card p-3"> <div class="card-header"> <h4 class="tituloPrincipal">'+titulo[i]+'</h4> </div> <div class="card-body"><h3 class="namee">'+array[i]+'</h3><p class="dia">Hg</p><p class="año">80</p><p class="weight">D</p></div></div>';
    }
    var container = document.getElementById("contenedorDeCartas");
    container.innerHTML = htmlElements;

var iso = new Isotope( '.card-columns', {
  itemSelector: '.card',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.tituloPrincipal',
    symbol: '.dia',
    number: '.año',
  }
});