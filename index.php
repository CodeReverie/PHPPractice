<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<form method="post">  
Enter First Name:  
<input type="text" name="fname" /><br><br>  
Enter Last Name:  
<input type="text" name="lname" /><br><br> 
Enter Middle Name:  
<input type="text" name="mname" /><br><br> 
Enter Barangay:  
<input type="text" name="barangay" /><br><br> 
Enter City:  
<input type="text" name="city" /><br><br> 
Enter Course:  
<input type="text" name="course" /><br><br> 
Enter Major in:  
<input type="text" name="major" /><br><br> 

<input  type="submit" name="submit" value="Submit">  
<input  type="reset" name="submit" value="Reset">  
</form> 



<?php  
    if(isset($_POST['submit']))  
    {  
        $fname = $_POST['fname'];  
        $lname= $_POST['lname'];  
        $mname=  $_POST['mname'];   
        $course=  $_POST['course']; 
        $major=  $_POST['major']; 
        
        $barangay =  $_POST['barangay'];
        $city = $_POST['city'];

        $A = ucfirst($course);
        $B = ucfirst($major);

        $W = 2022;
        $Z = 2023; 

        $capitalFname = ucfirst($fname);
        $capitalLname = ucfirst($lname);
        $capitalMname = ucfirst($mname);
      

        $C = strtolower($barangay);
        $D = ucwords($city);
        
        $fnamel = strlen("$fname");
        $lnamel = strlen("$lname");
        $mnamel = strlen("$mname");
        $coursel = strlen("$A");
        $majorl = strlen("$B");
        $barangayl =strlen("$C");
        $cityl =strlen("$D");

        $ifnamel = intval($fnamel);
        $ilnamel = intval($lnamel);
        $imnamel = intval($mnamel);

        $strW = strval ($W);
        $strZ = strval ($Z);
        

        $totalStringname = $ifnamel + $ilnamel + $imnamel;
        $value = $coursel + $majorl + $barangayl+ $cityl;

        $M = $capitalFname. " ". $capitalMname." ". $capitalLname;

        <div>
        echo "Total String Length of your name: ". "$totalStringname"."<br>";   
        echo "Welcome ". "$M"."<br>";  
        echo "Of " ."$C"." "."$D"."<br>";
        echo "$M".": "."$A"." - "."$B"."<br>";
        echo "Total Number of String Length: "."$value"."<br>";
        echo "Year ". "$strW"." - "."$strZ";
        </div>
}   
?>  
</body>  
</html>

