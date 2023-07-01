<?php
 require('connection.php');

 if(isset($_POST['send'])){
  $m_from = $_POST['m_from'];
  $msg = $_POST['msg'];

  $qa = "insert into feed(m_from,msg) values('$m_from','$msg')";
  $res = mysqli_query($connection,$qa);
  if($res == true){
      echo "<script> alert ('Your meessage is sended.....!!!')</script>";
      header("cnct.php");
  }else{
     echo "<script>alert ('Please try again...')</script>";
  }
}
?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <title>CONTACT Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cnct.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
  <body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <header class="header container-fluid">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-sm   container-fluid">
              <a class="navbar-brand w3-animate-zoom col-form-label-lg" style="color: whitesmoke;" href=""><b style="font-family:'Times New Roman', Times, serif;"><big>MA</big></b><small style="font-size:small ;">kery</small></a>
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler d-lg-none w3-text-white" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation" >&#9776;</button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link " href="index.php" style="color: whitesmoke;">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="about.php" style="color: whitesmoke;">About Us</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="cnct.php" style="color: whitesmoke;">Contact Us </a>
                      </li>
                      <li class="nav-item dropdown active">
                          <a class="nav-link active" href="order.php" style="color: whitesmoke;" aria-haspopup="true" aria-expanded="false">Order Cakes</a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <div><a href="login.php">
          		      <button type="button"  class="nav-item w3-margin-left btn-dark btn-lg btn-outline-success" id="cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
        			      </div>
                  </form>
              </div>
          </nav>
        </div>
      </header>

    <form action="#" method="POST">
      <div class="cnct container ">
        <div class="w3-text-white w3-margin-left">
        <label for="footerabout" class="lblfoot w3-margin-left w3-hover-border-black w3-cursive w3-border-bottom"><h2>Feed back</h2></label>
          <div class="form-group w3-margin-left col-lg">
            <label for="email"> <h4>FROM :</h4></label>
            <input type="email" class="form-control btn-outline-success col-10 w3-margin-left" placeholder="ENTER YOUR EMAIL" name="m_from" id="m_from" aria-describedby="emailHelpId" placeholder=""><br>
            <label for="msg"> <h4> Write Your Message Here :</h4></label>
            <textarea class="form-control col-10 w3-margin-left btn-outline-success" name="msg" placeholder="WRITE MESSAGE YOU WANT TO SEND" id="msg" rows="3"></textarea><br><br>
            <button type="submit" class="btn btn-dark w3-margin-left w3-margin-bottom btn-outline-success col-5 " id="send" name="send">Send</button>
          </div>
        </div>
      </div></form>
      <div class="cnct container">
        <div class="w3-text-white w3-margin-left">
        <div class="foot2">
        <label for="footerabout" class="lblfoot w3-cursive w3-border-bottom col-11"><h1>Contact Us</h1></label>
        <p class="par col-sm-12 w3-cursive">
          <h2>Address :</h2><p class="w3-large w3-margin">Sanitize company, #208KLH Reld Trainer Avenue street, Corner Market, NY - 62617.</p><br>
          <h2>Phone No :</h2><p class="w3-margin">+12 82367123 | +12 8236746 | +12 82367789 </p><br>
          <h2>Send Mail :</h2><p class="w3-margin">themakery278@gmail.com</p><br>
        </p>
        </div>
        <div class="foot3">
          <label for="footerabout" class="lblfoot w3-cursive w3-border-bottom col-11"><h1>Follow Us</h1></label>
            <h4> ON FACEBOOK <br></h4><h3 class="w3-margin-left"><a href="http://www.facebook.com"><i class="fab fa-facebook"> </i>  The Makery Cakes</a></h3><br>
            <h4> ON INSTAGRAM <br></h4><h3 class="w3-margin-left"><a href="http://www.instagram.com"><i class="fab fa-instagram"> </i>  @themakerybakers</a></h3><br>
            <h4> ON TWITTER <br></h4><h3 class="w3-margin-left"><a href="http://www.facebook.com"><i class="fab fa-twitter"> </i> @themakerybakers</a></h3><br>
            <h4> ON YOUTUBE <br></h4><h3 class="w3-margin-left"><a href="http://www.facebook.com"><i class="fab fa-youtube"> </i> The MAkery Bakers</a></h3><br>
        </div>
        </div>
      </div>
  <footer>
    <div class="footer w3-text-white">
      <div class="foot1">
          <label for="footerabout" class="lblfoot w3-border-bottom w3-cursive"><h2>About us</h2></label>
          <p class="par col-sm-10  w3-cursive">
          We at The Cake Shop specialize in Desserts & Cakes. we believe in "Quality in our Edge", from selecting the ingredients around India to the final exqusite creation that "Bring you smiles for Sure"

Our cakes & Desserts receive a lot of compliments and are complimented by wide range of exclusive desserts.

Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation,

So we Perfectly Personalize to the Needs          </p>
      </div>
      <div class="foot2">
          <label for="footerabout" class="lblfoot w3-cursive w3-border-bottom
          "><h2>Contact Us</h2></label>
          <p class="par col-sm-12 w3-cursive">
            <h4>Address :</h4><p> Sanitize company, #208KLH Reld Trainer Avenue street, Corner Market, NY - 62617.</p>
            <h4>Phone No :</h4><p>+12 82367123 | +12 8236746 | +12 82367789 </p>
            <h4>Send Mail :</h4><p>themakery278@gmail.com</p>
          </p>
      </div>
      <div class="foot3">
          <label for="footerabout" class="lblfoot w3-cursive w3-border-bottom "><h2>Follow Us</h2></label>
            <h4><b><a href="http://www.facebook.com"><i class="fab fa-facebook "> </i> </b> The Makery Cakes</a></h4>
            <h4><b><a href="http://www.instagram.com"><i class="fab fa-instagram"> </i> </b> @themakerybakers</a></h4>
            <h4><b><a href="http://www.facebook.com"><i class="fab fa-twitter"> </i> </b> @themakerybakers</a> </h4>
            <h4><b><a href="http://www.facebook.com"><i class="fab fa-youtube"> </i> </b> The MAkery Bakers</a> </h4>
          <form action="form1" method="POST">
            <label for=""><b> Send Your Review </b></label>
            <div class="form-group">
              <textarea class="form-control-md" style="width:300px;" name="txtreview" id="txtreview" rows="3"> </textarea>
              <button type="submit" class="btn btn-outline-success" style=" margin-left:10px;margin-bottom:50px">Submit</button>
            </div>
          </form>
      </div>
      <div>
      <h5 class=" w3-display-bottommiddle w3-cursive"> <b>©</b> 2022 All Rights Reseverd by <b> DIVYESH SOLANKI</b></h5>
      </div>
  </footer>
</body>
</html>