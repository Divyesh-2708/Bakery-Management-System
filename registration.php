<?php
    $con = mysqli_connect("localhost","root","","myown") or die("not connected...");
    //error_reporting(0);
    if(isset($_POST['sub'])){
        $c_no = $_POST['c_no'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cof_password = $_POST['cof_password'];

        $q = "insert into customer(c_no,name,address,mobile,email,password,cof_password) values('$c_no','$name','$address','$mobile','$email','$password','$cof_password')";
        $res = mysqli_query($con,$q);
        if($res == true){
            echo "<script> alert ('You are Successfully Registered ')</script>";
            header("location:home.php");
            exit();
        }else{
           echo "<script>alert ('Please try again...')</script>";
        }
    }

    if(isset($_POST['login'])){
      $lemail = $_POST['lemail'];
      $lpassword =$_POST['lpassword'];
      $q="select * from customer where email='".$lemail."' AND password='".$lpassword."' limit 1";
	    $result=mysqli_query($con,$q);
	    if(mysqli_num_rows($result)==1){
	    	echo "<script> alert ('You Login Successfully')</script>";
		    header("location:home.php");
		    exit();
	    }
	    else{
		    echo "<script> alert ('Please Enter Valid Username or Password')</script>";
		    exit();
		  }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/registrat.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="exp.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        function check() {
            valFname = document.form1.name.value;
            if (valFname.length == 0) {
                alert("Please enter your name");
                return;
            }
            valcntct = document.from1.mobile.value;
            var numExp = /^[0-9]+$/
            if (valcntct.match(numExp) && valMno.length == 10) {
                //fas
            } else {
                alert("please enter proper mobile number");
            }
            valEid = document.form1.email.value;
            var emailExp = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            if (valEid.match(emailExp)) {} else {
                alert("please enter proper Email address");

            }
        }
    </script>
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="register container-fluid">
<form name="from1"  method="post" class="from-control" action="#">
  <div class="box">
    <div class="boxcn">
      <center>
        <h4>LOG IN HERE...</h4>
        <div class="loginfrm form-group w3-margin">
          <label for="">USER NAME :</label>
          <input type="text" class="form-control-md" style="color: black;" name="lemail" id="lemail" aria-describedby="helpId" placeholder="ENTER YOUR E-MAIL">
          <small id="helpId" class="form-text text-muted">ENTER YOUR REGISTERED EMAIL</small><br>
          <label for="">PASSWORD :</label>
          <input type="password" class="form-control-md" name="lpassword" style="color: black;" id="lpassword" aria-describedby="helpId" placeholder="ENTER PASSWORD">
          <small id="helpId" class="form-text text-muted">ENTER YOUR REGISTERED PASSWORD</small><br>
          <button type="reset" class="btn btn-outline-success w3-margin-left form-control-sm" style="margin-left: 30px; margin-right:50px;">RESET</button>
          <button type="submit" class=" btn btn-outline-success form-control-sm" id="login" name="login">LOG IN</button>
        </div>
      </center>
    </div>
    <div class="line"></div>
    <div class="boxcn2">
      <center><h4>REGISTER YOUR SELF HERE</h4></center><br>
        
          <table width="500">
            <tr>
              <th scope="row"><label>CUSTOMER ID  :</label></th>
              <td>
                <input type="text" class="c_no form-control" name="c_no" id="c_no" aria-describedby="helpId" placeholder="ENTER NO">
                <!-- <small id="helpId" class="form-text text-muted">ENTER your name here...</small> -->
              </td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>NAME :</label></th>
              <td>
                <input type="text" class="c_name form-control" name="name" id="name" aria-describedby="helpId" placeholder="ENTER FULL NAME..">
                <!-- <small id="helpId" class="form-text text-muted">ENTER your name here...</small> -->
              </td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>ADDRESS :</label></th>
              <td>
                <textarea class="form-control" name="address" id="address" rows="3" placeholder="ENTER YOUR HOME ADDRESS.."></textarea>
              </td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>MOBILE :</label></th>
              <td><input type="number" class="mobile form-control" name="mobile" id="mobile" placeholder="ENTER YOUR MOBILE NUMBER "></td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>E_mail :</label></th>
              <td><input type="email" name="email" id="email" class="email form-control" placeholder="ENTER YOUR E-MAIL"></td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>PASSWORD :</label></th>
              <td><input type="password" name="password" id="password" class="password form-control" placeholder="ENTER PASSWORD"></td>
              <td>*</td>
            </tr>
            <tr>
              <th scope="row"><label>CONFIRM PASWORD :</label></th>
              <td><input type="password" name="cof_password" id="cof_password" class="cof_password form-control" placeholder="RE-ENTER PASWORD"></td>
              <td>*</td>
            </tr>
            <tr>
              <td>
              <button type="submit" name="sub" id="sub" onsubmit="check()" class="sub table-active btn-outline-success form-control-sm w3-center" >Submit</button>
              </td>
              <td>
              <button type="reset" class="res table-active btn-outline-success form-control-sm w3-center">Reset</button>
              </td>
            </tr>
          </table>
        
    </div>
  </div>
  </form>
</div>
</body>

</html>