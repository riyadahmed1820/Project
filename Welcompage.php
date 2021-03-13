<?php
session_start();
?>
<body style ="background: url(https://www.gpstracker.at/wp-content/uploads/2019/03/How-GPS-Tracking-Can-Benefit-Delivery-Services.jpg);background-size: 100% 100%">
 <form method ="POST">
<h1>Welcome</h1>
<input type="radio" name="availability" value="Online" >  Online <br>
<input type="radio" name="availability" value="Offline" > Offline<br>
<input type="radio" name="availability" value="On Delivery" > On Delivery

<br>
 <input  type="submit" name="back" value="Back">
 <input  type="submit" name="profile" value="Profile">
 <input  type="submit" name="orderlist" value="Order List">
 <input  type="submit" name="salary" value="Salary Statment">
 </form>
</body>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Login.php'</script>";
}
if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
if(isset($_POST["orderlist"]))
{
    echo "<script>location.href='orderlist.php'</script>";
}
if(isset($_POST["salary"]))
{
    echo "<script>location.href='Salary.php'</script>";
}
?>



