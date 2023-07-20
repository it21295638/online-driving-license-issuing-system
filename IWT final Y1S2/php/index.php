<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Form for Replacing a Lost License</title>
	  <link rel ="stylesheet" href = "css/styleonlineservicE.css"/>
	  
   </head>
   <body>
      <center>
         <h1>Form for Replacing a Lost License</h1>
         <form action="insert2.php" method="post">
             
<p>
               <label for="Full name">Full name:</label>
               <input type="text" name="full_name" id="full_name" placeholder="Your full name.." required> <br>
            </p>
 
          
<p>
               <label for="User ID">User ID:</label>
               <input type="text" name="user_ID" id="user_ID"  placeholder="Enter user ID.." required> <br>
            </p>
 
             
<p>
               <label for="License no">License no:</label>
               <input type="text" name="license_no" id="license_no" placeholder="Enter license no.." required> <br>
            </p>
 
             
<p>
               <label for="Vehicle no">Vehicle no:</label>
               <input type="text" name="vehicle_no" id="vehicle_no" placeholder="Enter vehicle no.." required> <br>
            </p>
 
             
<p>
               <label for="Date issued">Date issued:</label>
               <input type="date" name="date_issued" id="date_issued" min="1960-01-01" max="2022-12-31" required>
            </p>
			
			
<p>
               <label for="Date">Date:</label>
               <input type="date" name="date" id="date" required>
            </p>			
			
			
 
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>