<!DOCTYPE html>
<html lang="en-us">

<head>
  
    <title>MWE | Check</title>
    
</head>

<body>
    <?php

    // echo $_POST['check_nric'];

    if (file_exists($_POST['check_nric'] . '.txt')){
            echo '<h3>You are already registered!</h3>';
    } 
    else {
            echo '<h3>You have not registered!</h3><br>';
            echo '<a href ="register.php">Register here</a>';
    }

    ?>
   
</body>
</html>