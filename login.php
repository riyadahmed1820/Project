<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style ="background: url(https://image.freepik.com/free-vector/motorbike-delivery-concept-delivery-motorcycles-with-box-delivery-digital-technology-from-phone-design-new-age-revolution-delivery-business-background-backdrop-website-landing-page_33800-238.jpg); background-size: 100% 170%">


<?php
    $uname = $password = "";
    $flag = 0;
    $filepath = "info.txt";
    $f = fopen($filepath,'r');
 
    if ($_SERVER["REQUEST_METHOD"] =="POST" )
    {
        if(empty($_POST['uname'])) 

            {
                $unameErr = "Please Fill Up the UserName";
            }
            else
            {
                $uname = $_POST['uname'];
            }

        if(empty($_POST['password'])) 

            {
                $passwordErr = "Please Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }



            while($row = fgets($f)) {

                list($userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail) = explode( ",", $row );
                
        
                if($userName == $uname && $password == $password){
                    $flag++;
                    echo "<script>location.href='Welcompage.php'</script>";
                    break;
                }
        
              
        
            }

            if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='reg.php'</script>";
        }
        
           /*if ($flag>0)
            {
                $msg = "Successful";
                echo $msg;
                echo "<br>";
        
                $_SESSION['userId'] = $uname;
                $_SESSION['password'] = $password;
            
                echo "User Id is: " . $_SESSION['userId'];
                echo "<br>";
                echo "Password is: " . $_SESSION['password'];
            }*/
        
            else
            {
                $msg = "Try Again";
                echo "Unsuccessful! " .$msg;
            }


    }




    session_unset();
    session_destroy();
    fclose($f);


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login</h1>
    <center>
         <legend style="text-align: center;">Deivery-Man Login</legend>
         <table>
        <tr>
         <br>
        <td>
             <input type="text" name="uname" placeholder="             User Name" value="">
          </td>
        </tr>

        <tr>
        <td>
             <input type="password" name="password" placeholder="              Password" value="" >
         </td>
    </tr>

     

    
            </table>                   
   
    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="fpwd" value="Forget Password">
    <br> <br> <input type="submit" name="signup" value="Signup">
    </center>
</form>
    
</body>
</html>