// Gracias a freeCodeCamp.org por enseñar las bases de un Memorama en JavaScript
// https://www.youtube.com/channel/UC8butISFwT-Wl7EV0hUK0BQ
// https://www.youtube.com/watch?v=ZniVgo8U7ek

const cards = document.querySelectorAll('.carta');

var 	overlayMemo = document.getElementById('overlayMemo');
var   reloadPage = document.getElementById('final');


function sonido1(){
var audio1 = document.getElementById("1");
audio1.play();
}

function sonido2(){
var audio2 = document.getElementById("2");
audio2.play();
}
function sonido3(){
var audio3 = document.getElementById("3");
audio3.play();
}

function sonido4(){
var audio4 = document.getElementById("4");
audio4.play();
}
function sonido5(){
var audio5 = document.getElementById("5");
audio5.play();
}

function sonido6(){
var audio6 = document.getElementById("6");
audio6.play();
}

function sonido7(){
var audio7 = document.getElementById("7");
audio7.play();
}

function sonido8(){
var audio8 = document.getElementById("8");
audio8.play();
}

function sonido9(){
var audio9 = document.getElementById("9");
audio9.play();
}

function sonido10(){
var audio10 = document.getElementById("10");
audio10.play();
}

function genial(){
var audio11 = document.getElementById("genial");
audio11.play();
}


var contador = 0;
var prueba = 0;

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

function flipCard() {

  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add('voltear');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this; 
 

    if(firstCard.dataset.framework == 1){
      sonido1();
    }
    if(firstCard.dataset.framework == 2){
      sonido2();
    }
    if(firstCard.dataset.framework == 3){
      sonido3();
    }
    if(firstCard.dataset.framework == 4){
      sonido4();
    }
    if(firstCard.dataset.framework == 5){
      sonido5();
    }
    if(firstCard.dataset.framework == 6){
      sonido6();
    }
    if(firstCard.dataset.framework == 7){
      sonido7();
    }
    if(firstCard.dataset.framework == 8){
      sonido8();
    }
    if(firstCard.dataset.framework == 9){
      sonido9();
    }
    if(firstCard.dataset.framework == 10){
      sonido10();
    }  
    return;
    }
  
  secondCard = this;
    
  checkForMatch();

  if(secondCard.dataset.framework == 1){
    sonido1();
  }
  if(secondCard.dataset.framework == 2){
    sonido2();
  }
  if(secondCard.dataset.framework == 3){
    sonido3();
  }
  if(secondCard.dataset.framework == 4){
    sonido4();
  }
  if(secondCard.dataset.framework == 5){
    sonido5();
  }
  if(secondCard.dataset.framework == 6){
    sonido6();
  }
  if(secondCard.dataset.framework == 7){
    sonido7();
  }
  if(secondCard.dataset.framework == 8){
    sonido8();
  }
  if(secondCard.dataset.framework == 9){
    sonido9();
  }
  if(secondCard.dataset.framework == 10){
    sonido10();
  }  
}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;

  isMatch ? disableCards() : unflipCards();
  contador ++;
  if(contador ==1){
    document.getElementById("movimientos").innerHTML = "Has realizado " + contador + " movimiento ";
  }
  else{
    document.getElementById("movimientos").innerHTML = "Has realizado " + contador + " movimientos ";
  }
  

}



function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);
  prueba ++;
    
  if(prueba==1){
    document.getElementById("prueba").innerHTML = "Has encontrado " + prueba + " par";
  }
  else{
    document.getElementById("prueba").innerHTML = "Has encontrado " + prueba + " pares";
  }
  
  resetBoard();
  genial();
  if (prueba ==10){par();
    ender();
  }
  
}

function ender(){
  overlayMemo.classList.add('active');
  reloadPage.classList.add('active');
}


function unflipCards() {
  lockBoard = true;

  setTimeout(() => {
    firstCard.classList.remove('voltear');
    secondCard.classList.remove('voltear');

    resetBoard();
  }, 1500);
}

function resetBoard() {
  hasFlippedCard =  lockBoard = false;
  firstCard = secondCard = null
}

cards.forEach(card => {
  const ramdomPos = Math.floor(Math.random() * cards.length); 
  card.style.order = ramdomPos;
});

cards.forEach(card => card.addEventListener('click', flipCard));

