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
 $query= "SELECT * FROM tbl_product WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $full_name= legal_input($_POST['name']);
      $email_address= legal_input($_POST['image']);
      $city = legal_input($_POST['price']);

      $query="UPDATE tbl_product SET
                name='$full_name',
                image='$email_address',
                price= '$city'  WHERE id=$id";

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