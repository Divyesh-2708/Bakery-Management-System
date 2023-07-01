<?php
include('read-script.php');

if(isset($_POST['add_cart_prod'])){
  $id = $_POST['id'];
  $name =$_POST['name'];
  $image = $_POST['image'];
  $price =$_POST['price'];

  $q="insert into tbl_product(id,name,image,price) values('$id','$name','$image','$price')";
    $result=mysqli_query($connection,$q);
    if($result == true){
        echo "<script>salert('Item Inserted')</script>";
        header("location:crud.php");
        exit();
    }
    else{
        echo "<script> alert ('Please try again')</script>";
        header("location:crud.php");
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ONLY FOR ADMIN </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS ><link rel="stylesheet" href="abt.css"-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
*{
    margin: 0%;
    padding: 0%;
    font-family: 'Roboto', sans-serif;
    font-family: 'Roboto Mono', monospace;
}
body{
    /* height: 100vh; */
    background:#fff;
}
.navbar{
    border-radius: 10px;
    margin-top: 10px;
    background: rgba(0, 0, 0, 0.890) ;
    color: whitesmoke;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}
.sec1{
    width: 100%;
    background-image: url(./images/360_F_251199155_tNN3Fm9MgYRBXfBq1BglJIZVrjks2qDl.jpg);
    background-size:contain;
    background-attachment: fixed;
    background-position: center;
    height: 100vh;
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
    float: right;
  }
table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}
table {
    border-collapse: collapse;
    max-width: 100%;
    width:90%;
}
.table-data{
    width:65%;
    float: right;
}
th, td {
    padding: 15px;
}
.u_tbl{
    margin-top: 200px;
}
body{
    overflow-x: hidden;
}

*{
  box-sizing: border-box;
}
</style>
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
                        <a class="nav-link " href="#" style="color: whitesmoke;">Home <span class="sr-only">(current)</span></a>
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
          		      <button type="button"  class="nav-item w3-margin-left btn-dark btn-lg  btn-outline-success" id="cart"><i class="fa fa-cart-plus "aria-hidden="false"></i></button></a>
        			      </div>
                  </form>
              </div>
              </div>
          </nav>
        </div>
      </header>
    <div class="sec1">
    <div class="u_tbl container">
    <div class="table w3-table w3-margin-left w3-text-white" style="background:black;">
        <div class="title">
          <h2><center>EDIT USER TABLE</center></h2>
        </div>
    <table border="1" class="col-12">

        <tr class=" w3-gray">

        <th>C_no</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>

        </tr>
<?php

        if(count($fetchData)>0){
        $sn = 1;
        foreach($fetchData as $data){
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['address'];?></td>
<td><?php echo $data['mobile']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['password']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['c_no']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['c_no']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>

<?php

    }
?>

    </table>
    </div>
<div class="additem container w3-black w3-margin-left">
  <form action="#" method="POST">
    <div class="addItems w3-text-white ">
      <center><h1>ADD ITEMS HERE..</h1></center>
      <div class="form-group">
        <label for="">CARD ID</label>
        <input type="text"
          class="form-control col-md-5" name="id" id="id" aria-describedby="helpId" placeholder="Enter id">
      </div>
      <div class="form-group">
        <label for="">CARD NAME</label>
        <input type="text"
          class="form-control col-md-5" name="name" id="name" aria-describedby="helpId" placeholder="Add Title ">
      </div>
      <div class="form-group">
        <label for="">UPLOAD IMAGE</label>
        <input type="file" class="form-control-file col-md-5" name="image" id="image" placeholder="Please Select Image...!!" aria-describedby="fileHelpId">
      </div>
      <div class="form-group">
        <label for="">PRICE</label>
        <input type="text"
          class="form-control col-md-5" name="price" id="price" aria-describedby="helpId" placeholder="ENTER PRICE...!!s">
      </div>
      <button type="submit" id="add_cart_prod" name="add_cart_prod" class="btn btn-primary w3-margin-bottom">ADD in Items</button>
    </div>
  </form>
</div>
  </div><br><br>
  <div class="card_update container">
  <div class="table w3-table w3-margin-left w3-text-white" style="background:black;">

<?php
$con=mysqli_connect("localhost","root","","myown") or die("Connection Failed"); 
$result = mysqli_query($con,"select * from tbl_product");
$num_row = mysqli_num_rows($result);
if($num_row > 0)
{
    ?>
    <br>
    <table border="2" class="col-12">
      <h1><center>EDIT AND DELET PRODUCT</center></h1>
        <thead>
            <tr class=" w3-gray">
                <th>ID</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['image']."</td>
                    <td>".$row['price']."</td>";?>
                    <td><a href="cart-from.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete-card.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr><?php
                }
                ?>
        </tbody>
     </table>
                <?php
}
?></div>
  </div>
  <div class="feedback">
  <?php
$result = mysqli_query($con,"select * from feed");
$num_row = mysqli_num_rows($result);
if($num_row > 0)
{
  ?>
  <br>
  <table border="2" class="col-12">
    <h1><center>FEEDBACKS FROM USER</center></h1>
      <tbody>
          <?php
              while($row = mysqli_fetch_assoc($result))
              {
                  echo "<tr>
                  <td><h3>E-MAIL FROM :<br></h3><h5><span class=' w3-margin-left'></span>".$row['m_from']."  </h5><br><h3>MESSAGE :</h3><br><h5><span class=' w3-margin-left'></span>".$row['msg']."</h5></td>
                  </tr>";
              }
              ?>
      </tbody>
   </table>
              <?php
}
?>
</div>

<footer>
  <div class="footer w3-text-white">
    <div class="foot1">
        <label for="footerabout" class="lblfoot w3-border-bottom w3-cursive"><h2>About us</h2></label>
        <p class="par col-sm-10  w3-cursive">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, placeat ut! Consectetur, repudiandae doloremque accusantium perferendis amet quis in facilis? Rerum optio voluptatem dolorum itaque. Sed pariatur quisquam dolores perspiciatis!
        </p>
        <p class="par col-sm-10  w3-cursive">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis libero, dolore itaque eius laboriosam exercitationem ratione suscipit. Laudantium, totam a!</p>
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
  </div>

</footer>
</div>
</body>
</html>