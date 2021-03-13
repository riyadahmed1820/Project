<?php
session_start();
?>
<?php
$firstName = $lastName = $email = $gender = $id = $password = $dateofbirth = $address= $mobilenumber= $drivinglicence= $profilepic= "";

$arr1 = array('fname'=>'Riyad','lname'=>'Ahmed','gen'=>'Male','uname' => 'Riyad18', 'password' => '123', 'email' => 'riyadahmed@gmail.com','rmail'=>'arnobahmed@gmail.com','propic'=>'propic.jpg');
		$json_encoded_text =  json_encode($arr1); 

		$file1 = fopen("orderlist.txt", "w");
		fwrite($file1, $json_encoded_text);

		fclose($file1);

		$file2 = fopen("profile.txt", "r");
		$read = fread($file2, filesize("profile.txt"));
		fclose($file2);

		$json_decoded_text = json_decode($read, true);
?>
<body style ="background: url(https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/nutraingredients-usa.com/article/2020/04/15/new-delivery-services-pop-up-amid-social-distancing-era/10914556-1-eng-GB/New-delivery-services-pop-up-amid-social-distancing-era_wrbm_large.jpg); background-size: 100% 100%">
<h1 style="text-align: center;">Order </h1>
<form class ="search-form">
<center>
 <input type="text" placeholder="search">
 <button>Search</button>
 </center>
 </form>
 <form method ="POST">
 <style>table,th,td{border:1px solid black;}</style>
 <table >

 
    
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th class="text-center">Action</th>
            
        </tr>
    

  
 </table>
  <br><br>
 <input  type="submit" name="back" value="Back">
 </form>
 
 



 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcompage.php'</script>";
}

?>
 </body>


