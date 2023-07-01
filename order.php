<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "myown");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ORDER OUR CAKE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="" rel="stylesheet" type="text/css">
    <style>
      *{
    margin: 0%;
    padding: 0%;
    font-family: 'Roboto', sans-serif;
    font-family: 'Roboto Mono', monospace;
    color: #fff;
}
body{
    height: 100vh;
}
.sec1{
    height: 200vh;
    background-image:linear-gradient(rgba(255, 255, 255, 0.597), rgba(255,255,255,0.590)), url(./images/istockphoto-1332632645-612x612.jpg);
    background-attachment: fixed;
    background-position: 500vh ;
    background-size:contain;
}
.nav-item:hover{
    text-decoration:underline;
    content: '\f244';
    transition: 1s;
}
.navbar{
    border-radius: 10px;
    margin-top: 10px;
    background: rgba(0, 0, 0, 0.890) ;
    color: whitesmoke;
}
header{
    position:fixed;
    top:auto;
    width: 100%;
    z-index: 200;
}
footer{
    width: 100%;
    height: 400px;
    display: inline;
    position: absolute;
    background-color: #000;
}
.foot1{
    margin-top: 20px;
    width: 500px;
    margin-left: 20px;
    float: left;
}
.foot2{
    margin-top: 20px;
    width: 400px;
    margin-right: 0px;
    float: left;
}
.foot3{
    margin-top: 20px;
    width: 500px;
    margin-left: 30px;
    color:#fff;
    float: right;
}
a{
    color: #fff;
}
.cntnt{
    background: rgba(0, 0, 0, 0.890);
    margin-top: 100px;
    position: absolute;
    margin-left: 30px;
    width: 184.5vh;
    padding: 20px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
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
    <script>
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
  <div class= "cntnt" id="cntnt">
    <div class="cards w3-animate-bottom" id="demo1">
    <?php
    /* code by webdevtrick ( https://webdevtrick.com ) */
    if(isset($_POST["add_to_cart"]))
    {
        if(isset($_SESSION["shopping_cart"]))
        {
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'item_id'			=>	$_GET["id"],
                    'item_name'			=>	$_POST["hidden_name"],
                    'item_price'		=>	$_POST["hidden_price"],
                    'item_quantity'		=>	$_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
            }
            else
            {
                echo '<script>alert("Item Already Added")</script>';
            }
        }
        else
        {
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }
    ?>
    <div class="container cards grid" style="display:inline-flex;">
                <br /><br />
                <?php
                    $query = "SELECT * FROM tbl_product ORDER BY id ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                <div class="col-md-3">
                    <form method="post" action="login.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px; height:400px" align="center">
                            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" style="width:200px; height:200px;"/><br />
    
                            <h4 class="text-info"><?php echo $row["name"]; ?></h4>
    
                            <h4 class="text-danger">RS <?php echo $row["price"]; ?></h4>
    
                            <input type="text" name="quantity" value="1" class="form-control" />
    
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
    
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
    
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
    
                        </div>
                    </form>
                </div>
                <?php
                        }
                    }
                ?>
                <div style="clear:both"></div>
    </div>
  </div>
</body>
</html>