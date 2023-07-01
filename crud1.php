<?php
include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
</style>
</head>
<body>


<div class="table w3-table w3-margin-left">
        <div class="title">
        <h2>EDIT USER TABLE</h2>
        </div>

    <table border="1">

        <tr>

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

</body>
</html>