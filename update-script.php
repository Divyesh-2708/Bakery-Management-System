<?php

include('connection.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
}
function edit_data($connection, $id)
{
 $query= "SELECT * FROM customer WHERE c_no= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $full_name= legal_input($_POST['name']);
    $email_address= legal_input($_POST['address']);
    $city = legal_input($_POST['mobile']);
    $country = legal_input($_POST['email']);
    $password = legal_input($_POST['password']);
      $query="UPDATE customer SET
                name='$full_name',
                address='$email_address',
                mobile= '$city',
                email='$country',
                password='$password',
                cof_password='$password' WHERE c_no=$id";
      $exec= mysqli_query($connection,$query);
      if($exec){
        header('location:admin.php');
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
        echo $msg;
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>