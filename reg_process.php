<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>MWE | Register</title>
</head>

<body>
    <?php
        if (file_exists($_POST['input_nric'] . '.txt')){     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
        else{   //filename not found, write to file
            $content_to_write = array();
            array_push($content_to_write, "Name: " . $_POST['input_name'] . "\n");
            array_push($content_to_write, "Phone Number:" . $_POST['input_phonenumber'] . "\n");
            array_push($content_to_write, "NRIC: " . $_POST['input_nric'] . "\n");
            array_push($content_to_write, "Date Of Birth: " . $_POST['input_dob'] . "\n");
            array_push($content_to_write, "Address: " . $_POST['input_address'] . "\n");
           
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
	            $error_msg = array();

                if(!isset($_POST['input_agegroup'])){
                    $error_msg[] = "No radio buttons were checked.";
                }else{
                    array_push($content_to_write, "Age group: " . $_POST['input_agegroup'] . "\n");
                }

            if(!empty($_POST['input_pre-existing_conditions'])){
                array_push($content_to_write, "Pre-existing Conditions: \n");

                foreach($_POST['input_pre-existing_conditions'] as $selected){
                    array_push($content_to_write, "\t" . $selected . "\n");
                }
            }
                
                array_push($content_to_write, "Questions and Concerns: " . $_POST['input_questions'] . "\n");

                $dt=$_POST['input_datetime'];
                $dt = "02/28/2007"; // Setting a date in m/d/Y format 
                $arr = explode("/", $dt); // breaking string to create an array
                $dd = $arr[0]; // first element of the array is date
                $mm = $arr[1]; // second element is month
                $yy = $arr[2]; // third element is year

            if (!checkdate((int)$mm, (int)$dd, (int)$yy)) {
                echo "invalid date";
            } else {
                echo "Entry date is correct";
            }

            file_put_contents($_POST['input_nric'] . '.txt', $content_to_write);
            echo '<h3>Registration is successful!</h3>';
        }
    }
    ?>
   
</body>
</html>