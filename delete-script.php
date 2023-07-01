<?php

include("connection.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($connection, $id);

}

// delete data query
function delete_data($connection, $id){
   
    $query="DELETE from customer WHERE c_no=$id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:admin.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>