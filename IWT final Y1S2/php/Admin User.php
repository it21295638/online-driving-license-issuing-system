<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link rel="stylesheet" href="../CSS/Admin.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="body">

<center><h2>Registered Users Details</h2></center>

<center><table border="2">
  <tr>
    <td><b>ID</b></td>
    <td><b>Name</b></td>
    <td><b>E-Mail</b></td>
    <td><b>Password</b></td>
    <td><b>University Type</b></td>
    <td><b>University</b></td>
    <td><b>University Course</b></td>
    <td>Delete</td>
  </tr>

<?php

include "Admin dbConn.php"; 

$records = mysqli_query($db,"select * from *****"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['passowrd']; ?></td>
    <td><?php echo $data['university_type']; ?></td>
    <td><?php echo $data['university']; ?></td> 
    <td><?php echo $data['university_course']; ?></td>   
    <td><a href="Admin User delete.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="but();" value="Delete"></a></td>
  </tr>	
<?php
}
?>
</table></center>

<script>

  function but(){
    var retVal = confirm("Do you want to continue?");
    if (retVal== true){
      document.write("User wants to continue!");
      return true;
    }
    else{
      document.write("User doesn't want to continue!");
      return false;
    }
  }

</script>

</body>
</html>

