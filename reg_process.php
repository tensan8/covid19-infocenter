<!DOCTYPE html>
<html lang="en-us">

<head>
  
	<title>MWE | Register</title>
    
</head>

<body>
    <?php
        // echo $_POST['input_name'];
        // echo '<br>';
        // echo $_POST['input_nric'];
        
        if (file_exists($_POST['vIC'] . '.txt')){     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
        else{   //filename not found, write to file
            
           $content_to_write = "Name: " . $_POST['vName'] . "\n";
           $content_to_write = "Phone Number" . $_POST['input_phonenumber'] . "\n";
           $content_to_write = "NRIC: " . $_POST['input_nric'] . "\n";
           $content_to_write = "Date Of Birth: " . $_POST['input_dob'] . "\n";
           $content_to_write = "Address: " . $_POST['input_address'] . "\n";
           
          
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error_msg = array();
	if(!isset($_POST['input_agegroup'])){
		$error_msg[] = "No radio buttons were checked.";
	}
	if(!isset($_POST['input_pre-existing conditions'])){
		$error_msg[] = "Graguate was checked";
	}
     	else
	{
			$submission_status = 'No age group selected';
						
	}
     
        $content_to_write = "Questions and Concerns: " . $_POST['input_questions'] . "\n";
        $dt=$_POST['dt'];
        $dt="02/28/2007"; // Setting a date in m/d/Y format 
        $arr=explode("/",$dt); // breaking string to create an array
        $dd=$arr[0]; // first element of the array is date
        $mm=$arr[1]; // second element is month
        $yy=$arr[2]; // third element is year
        If(!checkdate($mm,$dd,$yy)){
             echo "invalid date";
        }else {
          echo "Entry date is correct";
        }
           file_put_contents($_POST['vIC'] . '.txt', $content_to_write);
           echo '<h3>Registration is successful!</h3>';
        }
        }

    ?>
   
</body>
</html>