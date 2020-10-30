<!doctype html>
<html lang="en">
  <head>
    <style>
  div{
   display:inline;
  /* margin-right: -4px; */
}

</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="instala.php">Agendar Instalação <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="casa1.php">Casa 1</a>
          <a class="dropdown-item" href="casa2.php">Casa 2</a>
          <a class="dropdown-item" href="escritorio.php">Escritorio</a>
      </li>
    </ul>
  </div>
</nav>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <title>Gerenciamento Residencial</title>
  </head>
  <body style="background-color:lightgray;">
   
  <center><h1>Escritório</h1> </center>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="card">
  <div class="card-header">
    Recepção
  </div>
  <div class="card-body">

    <p class="card-text"><h4>Luz:</h4> <div class="custom-control custom-switch" >
     <input type="checkbox" class="custom-control-input" id="customSwitches">
  <label class="custom-control-label" for="customSwitches" > </label>
</div></p> 

    <p class="card-text"><h4>Ar condicionado:</h4> <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitches2">
  <label class="custom-control-label" for="customSwitches2"> </label>
</div> <div class="d-flex justify-content-center my-4">
  <div class="w-75">
    <input type="range" class="custom-range" id="customRange11" min="16" max="32">
  </div>
  <span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
</div></p>
  </div>
</div>

<div class="card">
  <div class="card-header">
   Sala Escritório
  </div>
  <div class="card-body">

    <p class="card-text"><h4>Luz: </h4><div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitches5">
  <label class="custom-control-label" for="customSwitches5"> </label>
</div></p> 

    <p class="card-text"> <h4>Ar condicionado:</h4> <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitches6">
  <label class="custom-control-label" for="customSwitches6"> </label>
</div> <div class="d-flex justify-content-center my-4">
  <div class="w-75">
    <input type="range" class="custom-range" id="customRange5" min="16" max="32">
  </div>
  <span class="font-weight-bold text-primary ml-2 valueSpan5"></span>
</div></p>


  </div>
  
</div>








<script>
$(document).ready(function() {

const $valueSpan = $('.valueSpan2');
const $value = $('#customRange11');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan22');
const $value = $('#customRange112');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan3');
const $value = $('#customRange3');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan4');
const $value = $('#customRange4');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan5');
const $value = $('#customRange5');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});

$(document).ready(function() {

const $valueSpan = $('.valueSpan6');
const $value = $('#customRange6');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());
});
});
  </script>
 
  </body>
  <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://twitter.com/difuntosoueu/"> Difunto</a>
  </div>
  <!-- Copyright -->

</footer>
</html>