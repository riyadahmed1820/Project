<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body style ="background: url(https://st2.depositphotos.com/4162325/6061/v/950/depositphotos_60616287-stock-illustration-delivery-man.jpg);background-size: 50% 170%">


<?php 

		$arr1 = array('fname'=>'Riyad','lname'=>'Ahmed','gen'=>'Male','uname' => 'Riyad18', 'password' => '123', 'email' => 'riyadahmed@gmail.com','rmail'=>'arnobahmed@gmail.com','propic'=>'propic.jpg');
		$json_encoded_text =  json_encode($arr1); 

		$file1 = fopen("profile.txt", "w");
		fwrite($file1, $json_encoded_text);

		fclose($file1);

		$file2 = fopen("profile.txt", "r");
		$read = fread($file2, filesize("profile.txt"));
		fclose($file2);

		$json_decoded_text = json_decode($read, true);

		/*echo $json_decoded_text['userId'];
		echo "<br>";
		echo $json_decoded_text['password'];
		echo "<br>";
		echo $json_decoded_text['name'];*/
	?>
    

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <center>
    <h2>Hello <?php echo $json_decoded_text['fname']; ?></h2>
        <table bgcolor="white">
        <tr>
                    <td >
                        Profile Picture
                    </td>
                    <td>
                        <?php echo $json_decoded_text['propic']; ?>
                    </td>
                </tr>
        <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        <input type="text" name="fname" value="<?php echo $json_decoded_text['fname']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $json_decoded_text['lname']; ?>" >
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo $json_decoded_text['gen']; ?>">
                    </td>
                </tr>

                    <td>
                        UserName 
                    </td>
                    <td>
                        <input type="text" name="uname" value="<?php echo $json_decoded_text['uname']; ?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                         Email
                    </td>
                    <td>
                        <input type="email" name="email" id="" value="<?php echo $json_decoded_text['email']; ?>">
                    </td>
                    </tr>

                    <tr>
                    <td>
                        Recovery Email
                    </td>
                    <td>
                        <input type="email" name="remail" value="<?php echo $json_decoded_text['rmail']; ?>">
                    </td>
                     </tr>

                     

    </table>
    <br><br>
    <input  type="submit" name="uppro" value="Update Profile">
    <input  type="submit" name="back" value="Back">
    <?php
    if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcompage.php'</script>";
}
?>
    
    
    
                    

</form>
    
</body>
</html>