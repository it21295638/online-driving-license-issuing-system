<!DOCTYPE html>
<html>
 
<head>
    <title>Form for Replacing a Lost License</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => license
        $conn = mysqli_connect("localhost", "root", "", "license");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $full_name =  $_REQUEST['full_name'];
        $user_ID = $_REQUEST['user_ID'];
        $license_no =  $_REQUEST['license_no'];
        $vehicle_no = $_REQUEST['vehicle_no'];
        $date_issued = $_REQUEST['date_issued'];
		$date = $_REQUEST['date'];
         
        // Performing insert query execution
        // here our table name is lost_license
        $sql = "INSERT INTO lost_license  VALUES ('$full_name',
            '$user_ID','$license_no','$vehicle_no','$date_issued','$date')";
       
		 
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            
        } else{
            echo "ERROR: Oops! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>