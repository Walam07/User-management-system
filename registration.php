<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
    <script type="text/javascript" defer src="reg.js"></script>
</head>
<body>

        <div class="container">
            <div class="left-side">
               <p>welcome to our<br>website</p>
            </div>
            
            <div class="content-side">
                <div class="login-heading">
                    <img src="Images/Agro.Rent-logo.png" alt="Agro.Rent-Logo" title="Agro.Rent">
                </div>

                   <div class="sub-heading">
                    <p>Create Your Free Account</p>
                   </div>
                   <div id="error"></div>
                   <div class="form">

<?php
include_once('dbconnection.php');
// $name = $_SESSION['Pass'];

if (isset($_POST['submit'])) {
    //Fetch from html
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $MobileNo = $_POST['MobileNo'];
    $Npassword = $_POST['Npassword'];
    $Cpassword = $_POST['Cpassword'];
    $query1 = mysqli_query($con, "SELECT UserName FROM 'membership' WHERE UserName= '$UserName'");
    $duplicate = mysqli_query($con, $query1);


//validation
    if(preg_match("/^({0-9}{10})$/",$MobileNo))
    {
        echo "<script>alert('MobileNo is invalid');</script>";

    }


    if (mysqli_num_rows($duplicate) > 0) {
        //Duplication check
        echo "<script>alert('UserName has been already taken');</script>";
        //header("location:registration.php");
    } else {
        if ($Npassword == $Cpassword) {
            //Insert into database
            $query1 = mysqli_query($con, "INSERT INTO membership (UserName,MobileNo,Email,Password) 
    VALUES ('$UserName','$MobileNo','$Email','$Npassword')") or die ("error") ;
            $result = mysqli_query($con, $query);
            if ($result) 
            {
                echo "<script>alert('Registration Sucessful')</script>";
                header("location:login.html");
            }
        } 
        else 
        {
            echo "<script>alert('Password doesnt match')</script>";
        }

    }
}

?>


                    <form action="registration.php" method="post" id="form" >
                        
                        <label for="fname">Username</label><br>
                        <input type="text" id="UserName" name="UserName" class="fname" placeholder="Sample852#" required><br>

                        <label for="email">Email</label><br>
                        <input type="email" id="Email"name="Email" class="email" placeholder="Example@email.com" required><br>

                        <label for="phoneno">MobileNo</label><br>
                        <input type="tel" id="MobileNo" name="MobileNo" class="phoneno" placeholder="07########" required><br>

                        <label for="password">New Password</label><br>
                        <input type="password" id="Npassword" name="Npassword" class="password" placeholder="Enter Password" required><br>

                        <label for="cpassword">Confirm Password</label><br>
                        <input type="password" id="Cpassword" name="Cpassword" class="cpassword" placeholder="Confirm Password" required><br>
                        
                        <input type="submit" id="submit" name="submit" value="Create your account">
                    
                        
                    </form>
                   </div>

                   <div class="sign-in-option">
                  <p>Already have an account? <a href="login.html">Sign in</a></p>
                   </div>
            </div>
        </div>
    
</body>
</html>