/*część wspólna*/
/*navbar część wspólna */
window.addEventListener('scroll', function() {
    var nav = document.querySelector('.sticky-nav');
    if (window.pageXOffset> nav.offsetTop) {
      nav.classList.add('sticky');
    } else {
      nav.classList.remove('sticky');
    }
  });
  
  
  
/*koniec części wspólnej*/

var cards = ["pong-memory.png","doom-memory.png","pong-memory.png","the-witcher-memory.png","the-legend-of-zelda-memory.png","thps2-memory.png","Contra-memory.png","doom-memory.png","the-witcher-memory.png","the-legend-of-zelda-memory.png","thps2-memory.png","Contra-memory.png"];

if (window.matchMedia("(max-width: 900px)").matches) {
    cards = ["pong-memory-small.png","doom-memory-small.png","pong-memory-small.png","the-witcher-memory-small.png","the-legend-of-zelda-memory-small.png","thps2-memory-small.png","Contra-memory-small.png","doom-memory-small.png","the-witcher-memory-small.png","the-legend-of-zelda-memory-small.png","thps2-memory-small.png","Contra-memory-small.png"];
  }
  var c0 = document.getElementById('c0');
  var c1= document.getElementById('c1');
  var c2 = document.getElementById('c2');
  var c3 = document.getElementById('c3');
  
  var c4 = document.getElementById('c4');
  var c5 = document.getElementById('c5');    
  var c6 = document.getElementById('c6');
  var c7 = document.getElementById('c7');
  
  var c8 = document.getElementById('c8');
  var c9 = document.getElementById('c9');
  var c10 = document.getElementById('c10');
  var c11 = document.getElementById('c11');
  
  c0.addEventListener("click", function() {revealcard(0);});
  c1.addEventListener("click", function() {revealcard(1);});
  c2.addEventListener("click", function() {revealcard(2);});
  c3.addEventListener("click", function() {revealcard(3);});
  
  c4.addEventListener("click", function() {revealcard(4);});
  c5.addEventListener("click", function() {revealcard(5);});
  c6.addEventListener("click", function() {revealcard(6);});
  c7.addEventListener("click", function() {revealcard(7);});
  
  c8.addEventListener("click", function() {revealcard(8);});
  c9.addEventListener("click", function() {revealcard(9);});  
  c10.addEventListener("click", function() {revealcard(10);});
  c11.addEventListener("click", function() {revealcard(11);});
  
  
  var oneVisible = false;
  var turnCounter = 0;
  var visible_nr;
  var lock = false;
  var pairsLeft = 6;
  
  function revealcard(nr)
  {
  
      var opacityValue = $('#c'+nr).css('opacity');
      if(opacityValue != 0 && lock == false)
      {
          lock = true;
      }
  
      var obraz = "url(img/" + cards[nr] + ")";
  
      $('#c'+nr).css('background-image',obraz);
      $('#c'+nr).addClass('cardA');
      $('#c'+nr).removeClass('card');
  
  
  
  
  
      if(oneVisible == false)
      {
          oneVisible = true;
          visible_nr = nr;
          lock = false ;
      }
      else
      {
          if(cards[visible_nr] == cards[nr])
          {
              alert("para");
              hide2Cards(nr, visible_nr);
              setTimeout(function() {hide2Cards(nr, visible_nr) }, 750);
          }
          else
          {
              alert("pudło");
              setTimeout(function() { restore2Cards(nr,visible_nr)} , 750);
          }
  
          turnCounter++;
          $('.score').html('Turn counter: ' + turnCounter);
          oneVisible = false;
      }
  }
  function hide2Cards(nr1,nr2)
  {
      $('#c'+nr1).css('opacity','0');
      $('#c'+nr2).css('opacity','0');
  
      pairsLeft--;
  
      if (pairsLeft == 0) {
        $('.board').html('<h1>Wygraleś !<br>Wykonano w ' +turnCounter+ ' turach</h1>').css({
          'font-family': 'Cantora One, sans-serif',
          'color': 'white',
          'font-size': '300%',
          'text-shadow': '4px 3px 4px #44f',
          'padding-top': '5%',
          'text-align': 'center'
        });
      }
      lock = false;
    }
  function restore2Cards(nr1,nr2)
  {
      $('#c'+nr1).css('background-image', 'url(img/karta.png)');
      $('#c'+nr1).addClass('card');
      $('c'+nr1).removeClass('cardA');
  
      $('#c'+nr2).css('background-image', 'url(img/karta.png)');
      $('#c'+nr2).addClass('card');
      $('c'+nr2).removeClass('cardA');
  
      lock = false;
  }
