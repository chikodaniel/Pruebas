var array = ["sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg","sYDqBU1.jpg", "t1LuvGZ.jpg", "l660ATK.jpg", "iNWWr7b.jpg"]

 
var container = document.getElementById("contenedorDeCartas");

var current = 0;

function getEm() {
  const div = document.createElement('div');
  setTimeout(() => {
    div.innerHTML = `<div id="box" class="card p-3">

    <div class="card-header">Header</div>
    <img src="https://i.imgur.com/${array[current]}" class="card-img-top" width="100%" height="100%">
    
    <div class="card-body">
     <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    
    
    </div>`
    container.appendChild(div);

    current++
    if (current < array.length) {
      getEm();
    }
  }, 50);
}

getEm();