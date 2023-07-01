<!doctype html>
<html lang="en">
  <head>
    <title>WELCOME  TO MAKERY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="exp.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      function loadDoc4(){
       var xp = new XMLHttpRequest();
       xp.onreadystatechange = function(){
        document.getElementById("demo1").innerHTML=this.responseText;
       }
       xp.open("GET","card1.php",true);
       xp.send();
      }
    </script>
<div class="sec1">
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
                          <a class="nav-link" href="order.php" style="color: whitesmoke;" onclick="loadDoc4()" aria-haspopup="true" aria-expanded="false">Order Cakes</a>
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
  <!-- <div class="container-fluid">
    <div class="slidebar container-fluid col-2">
      <nav class="nav btn-group-vertical justify-content-start w3-bar-block"><label class="col-form-label-lg color w3-border-bottom" for="Categories">Catagories</label>
        <a class="nav-item w3-bar-item active w3-border-white " onclick="loadDoc()" >CAKES</a>
        <a class="nav-item w3-bar-item active w3-border-white" onclick="loadDoc2()">CUP CAKES </a>
        <a class="nav-item w3-bar-item active" onclick="loadDoc3()">SNACKS</a>
      </nav>
    </div>
  </div> -->
  <div class= "cntnt" id="cntnt">
    <div class="cards w3-animate-bottom" id="demo1">
    <center>
      <div class="bghome">
        <img src="./images/2020-11-16.jpg" alt="Makery" width="500px" class="img-thumbnail">
          <h1 class="h1tag w3-border-top w3-border-20 w3-text-white w3-animate-bottom" style="margin:20px;">The Makery Cake Company</h1>
          <h3 class=" w3-text-white"> Welcome to our Online Cake Order Platform </h3>
          <p class="paragharph w3-text-white w3-border col-9 " >We at The Cake Shop specialize in Desserts & Cakes. we believe in "Quality in our Edge", from selecting the ingredients around India to the final exqusite creation that "Bring you smiles for Sure"

Our cakes & Desserts receive a lot of compliments and are complimented by wide range of exclusive desserts.

Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation,

So we Perfectly Personalize to the Needs</p>
      </div><br>
    </center>
    <div class="container">
      <img  class="img1 img-thumbnail" width="300px"  src="./images/depositphotos_261132096-stock-photo-a-confectioner-squeezes-liquid-chocolate.jpg" alt="">
      <p class="primg1 w3-padding-large w3-border col-8 float-right w3-text-white">lorem ipsum dolora itis exercitationem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur veritatis. Vero ipsa dolorum hic impedit deleniti earum ipsum inventore ipsam officiis. Nam tempore quos atque nobis cupiditate, corrupti ipsam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic cupiditate vero quisquam excepturi numquam praesentium. Quis vitae deleniti molestias quae, voluptatum dignissimos repudiandae hic asperiores eos autem minus quas rem doloremque, necessitatibus eaque. Tenetur, neque maxime iure ullam similique perspiciatis!lorem40
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas similique nulla asperiores nisi accusantium, numquam totam. Illum soluta adipisci deleniti ipsa aperiam, rerum exercitationem, porro quibusdam iusto, cupiditate tempora amet. temporibus eveniet cupiditate illum quae earum asperiores odit. Vero, atque!</p>
    </div><br><br>
    <div class="container">
      <img  class="img2 img-thumbnail " width="400px" src="./images/workshop.jpg" alt="">
      <p class="primg1 w3-padding-large w3-border col-7 float-left w3-text-white" >lorem ipsum dolora itis exercitationem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, aspernatur veritatis. Vero ipsa dolorum hic impedit deleniti earum ipsum inventore ipsam officiis. Nam tempore quos atque nobis cupiditate, corrupti ipsam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic cupiditate vero quisquam excepturi numquam praesentium. Quis vitae deleniti molestias quae, voluptatum dignissimos repudiandae hic asperiores eos autem minus quas rem doloremque, necessitatibus eaque. Tenetur, neque maxime iure ullam similique perspiciatis!lorem40
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas similique nulla asperiores nisi accusantium, numquam totam. Illum soluta adipisci deleniti ipsa aperiam, rerum exercitationem, porro quibusdam iusto, cupiditate tempora amet. temporibus eveniet cupiditate illum quae earum asperiores odit. Vero, atque!</p>
    </div><br>
    </div>
  </div>
<div class="sec2">
<footer>
  <div class="footer w3-text-white">
    <div class="foot1">
        <label for="footerabout" class="lblfoot w3-border-bottom w3-cursive"><h2>About us</h2></label>
        <p class="par col-sm-10  w3-cursive">
        We at The Cake Shop specialize in Desserts & Cakes. we believe in "Quality in our Edge", from selecting the ingredients around India to the final exqusite creation that "Bring you smiles for Sure"

Our cakes & Desserts receive a lot of compliments and are complimented by wide range of exclusive desserts.

Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation,

So we Perfectly Personalize to the Needs
        </p>
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
            <button type="submit" class="btn btn-outline-success" style="margin-right: 100px; margin-top: 20px;">Submit</button>
          </div>
        </form>
    </div>
    <div class=" w3-display-bottommiddle" style="margin-top: 10px; width:100%;">
    <h5 class=" w3-display-bottommiddle w3-cursive w3-text "><b></b> Reseverd by <b> DIVYESH SOLANKI</b></h5>
    </div>
</footer>
</div>
</div>
</body>
</html>