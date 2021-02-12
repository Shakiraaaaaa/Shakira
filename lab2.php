<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";  
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";  
  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      

    if (emptyempty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
     
    if (emptyempty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  

     if(preg_match("/dob/i",$field))
        {
       if(!preg_match("“/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/”",$value)) code from web
          {
            $errors[]="$value is not a valid dob please enter only year.";
          } 
        }
    
    
      
    
      
    
    if (emptyempty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
    } else {  
            $gender = input_data($_POST["gender"]);  
    } 

    
    if (emptyempty ($_POST["degree"])) {  
        $genderErr = "Degree is required";  
} else {  
        $gender = input_data($_POST["degree"]);  
}


    
    
  
    
    if (!isset($_POST['agree'])){  
            $agreeErr = "Accept terms of services before submit.";  
    } else {  
            $agree = input_data($_POST["agree"]);  
    } 
    
    if(preg_match("/bloodgroup/i",$field))
        {
       if(!preg_match("/^[a-zA-Z ]*$/",$value)) code from web
          {
            $errors[]="$value is not a valid bloodgroup please enter only year.";
          } 
        }
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>                             
    <input type="submit" name="submit" value="Submit">   
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    <input type="submit" name="submit" value="Submit">   
    <br><br>  
    Date of birth:   
    <label for="date of birth">    date of birth: </label>
    <input type="date" name="date of birth" id="date of birth">
    <br><br>  
    <input type="submit" name="submit" value="Submit">   
    <br><br> 
    
    
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
    <input type="submit" name="submit" value="Submit">   
    <br><br>  

    DEGREE:  
    <input type="radio" name="degree" value="SSC"> SSC 
    <input type="radio" name="degree" value="HSC"> HSC
    <input type="radio" name="degree" value="BSc"> BSC 
    <input type="radio" name="degree" value="MSc"> Msc 
    <span class="error">* <?php echo $genderErr; ?> </span>  
    <br><br>  
    <input type="submit" name="submit" value="Submit">   
    <br><br> 

    BLOOD GROUP:  
    <select class="form-control" name="blood_group">
						<option value="A+VE">A+VE</option>
						<option value="A-VE">A-VE</option>
						<option value="B+VE">B+VE</option>
						<option value="B-VE">B-VE</option>
						<option value="O+VE">O+VE</option>
						<option value="O-VE">O-VE</option>
						<option value="AB+VE">AB+VE</option>
						<option value="AB-VE">AB-VE</option>
					</select>                      
    <br><br>  
    <input type="submit" name="submit" value="Submit">                              
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $dateofbirthErr == "" && $genderErr == "" && $degreeErr == "" && $bloodgroupErr == "") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Name: " .$name;  
        echo "<br>";  
        echo "Email: " .$email;  
        echo "<br>";  
        echo "Date of Birth: " .$dateofbirth;  
        echo "<br>";  
        echo "Gender: " .$gender; 
        echo "<br>";  
        echo "Degree: " .$degree;  
        echo "<br>";   
        echo "Blood Group: " .$bloodgroup;  
        echo "<br>";  
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    }  
?>  
  
</body>  
</html>  