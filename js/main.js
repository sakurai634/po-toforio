console.log("Hello Lololia");

var rellax = new Rellax('.rellax');


// hamburger
(function() {
  'use strict';

  var show = document.getElementById('show');
  var hide = document.getElementById('hide');

  show.addEventListener('click', function() {
    document.body.className = 'menu-open';
  });

  hide.addEventListener('click', function() {
    document.body.className = '';
  });

  cover.addEventListener('click', function() {
    document.body.className = '';
  });
})