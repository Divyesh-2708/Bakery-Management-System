<?php
  require 'login.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
*{
    font-family: 'Roboto', sans-serif;
    font-family: 'Roboto Mono', monospace;
}
.navbar{
  border-radius: 10px;
  margin-top: 10px;
  background: rgba(0, 0, 0, 0.890) ;
  color: whitesmoke;
}
.cards{
  font-family: 'Roboto', sans-serif;
  font-family: 'Roboto Mono', monospace;
  width: 150vh;
  height: 92vh;
  margin-left: 60px;
  border-radius: 50px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  -ms-border-radius: 50px;
  -o-border-radius: 50px;
}
.card1{
  display: inline-block;
  color: black;
  width: 300px;
  background:rgba(245, 245, 220, 0.925);
  height: 330px;
  margin-top: 100px;
  margin-left: 30px;
  border-width: 4px;
  box-shadow: 0px 5px 10px 3px black;
}
.card1:hover{
  transition: 1s linear;
  zoom:1.005;
  box-shadow: 10px 10px 15px 6px black;
}
#card{
  margin-left: 50px;
  margin-top: 20px;
  width: 200px;
  height: 150px;
  display: inline-flex;
}
.btn{
  display:inline-flex;
  float: right;
}
.btncart{
  float: right;
  margin-right: 200px;
}
</style>
</head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h1 class="lblcard w3-text-white w3-border w3-center  w3-animate-right " style="width:700px;margin-left:150px;"> Beautiful Cakes </h1>
    <div class=" card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  id="add_to_cart" aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
      <div class="card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
      <div class="card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
      <div class="card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
      <div class="card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
      <div class="card1 card text-left">
        <img class="card-img" id="card" src="./images/cutecup.jpg" alt="Cute Cup Cake">
        <div class="card-body">
          <h4 class="card-title">CUTE CUP CAKES</h4>
          <p class="card-text">Body</p>
          <button type="button" class="btn btn-dark btn-outline-success"  aria-pressed="false" autocomplete="off"><h4><i class="fa fa-cart-plus" aria-hidden="false"></h4></i></button>
        </div>
      </div>
  </body>
</html>
