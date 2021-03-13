<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Registration</title>
</head>
<body style ="background: url(https://image.freepik.com/free-vector/digital-online-global-delivery-scooter-with-phone-mobile-website-background-perspective-illustration_255625-123.jpg); background-size: 100% 100%">

    <?php
        $firstName = $lastName = $email = $gender = $userName = $password = $dateofbirth = $address= $mobilenumber= $drivinglicence= $profilepic= "";
        $count = 0;

        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if($firstName = $_POST['fname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($lastName = $_POST['lname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($email = $_POST['email']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if(isset($_POST['gender'])) 
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }  
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($userName = $_POST['uname']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($password = $_POST['password']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($dateofbirth = $_POST['dof']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($address = $_POST['add']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }
            if($mobilenumber = $_POST['mobo']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($drivinglicence = $_POST['dl']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }

            if($profilepic = $_POST['propic']) 
            {
                $count++;
            }
            else
            {
                echo"Please Fill Up the All Information";
            }


            if ($count >= 11)
            {
            $filepath = "info.txt";
            $f = fopen($filepath,'a');
            fwrite($f,"$userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail,$dateofbirth,$address,$mobilenumber,$drivinglicence,$profilepic\n");
            fclose($f);
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <h1 style="text-align: center;">Registertion-form</h1>
        <center>
        <style>table{border:10px  solid cyan;}</style>
            <h4><legend style="text-align: center;">DeliveryMan-Registration</legend></h4>
             <table bgcolor="cyan">
             <tr>
                    <td>
                       <b><font size="4"> Upload Profile Picture</font><b>
                    </td>
                    <td>
                        <input type="file" name="propic" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b><font size="4"> First Name</font><b>
                    </td>
                    <td>
                        <input type="text" name="fname" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <b><font size="4"> Last Name</font><b>
                    </td>
                    <td>
                        <input type="text" name="lname" value="" >
                    </td>
                </tr>

                <tr>
                    <td>
                        <b><font size="4"> Gender</font><b>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" >  Male 
                        <input type="radio" name="gender" value="Female" > Female
                    </td>
                </tr>

                <tr>
                    <td>
                       <b><font size="4"> Date Of Birth</font><b>
                    </td>
                    <td>
                        <input type="date" name="dof" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <b><font size="4"> Address</font><b>
                    </td>
                    <td>
                        <input type="text" name="add" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <b><font size="4> Mobile Number</font><b>
                    </td>
                    <td>
                        <input type="text" name="mobo" value="">
                    </td>
                </tr>
            
                    <td>
                        <b><font size="4"> User Name</font><b> 
                    </td>
                    <td>
                        <input type="text" name="uname" value="">
                    </td>
                    </tr>
                    <br>

                    <tr>
                    <td>
                        <b><font size="4"> Password</font><b>
                    </td>
                    <td>
                        <input type="password" name="password" value="">
                    </td>
                    </tr>
                    <br>

                    <tr>
                    <td>
                         <b><font size="4"> Email</font><b>
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="">
                    </td>
                    </tr>
                    <tr>
                    <td>
                         <b><font size="4" > Driving Lincese</font><b>
                    </td>
                    <td>
                        <input type="text" name="dl" id="" value="">
                    </td>
                    </tr>

            </table>
                <br>
                <tr >
                <td>
                    <input type="submit" name="" value="Submit"> 
                    <input type="reset" name="" value="Reset">
                    <input  type="submit" name="done" value="Back">  
                </td>
            </tr>
            </center>
    </form>  

<?php
if(isset($_POST["done"]))
{
    echo "<script>location.href='login.php'</script>";
    
}
?>
</body>
</html>