<?php
error_reporting(0);
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: mobile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
span {
color:red
}
h2

{
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}
hr

{
border:0;
border-bottom:1px solid;
margin:10px -40px;
margin-bottom:30px
}
#login

{
margin: auto;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:#b6e6ff;
}
input[type=text],input[type=password]

{
width:96.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:20px;
}
input[type=submit]

{
width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
}
#profile

{
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7
}
#logout

{
float:right;
padding:5px;
border:dashed 1px gray
}
a

{
text-decoration:none;
color:#6495ed
}
i

{
color:#6495ed
}
</style>
<div id="login">
<h2>User Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<input name="sign" type="submit" value="Sign-Up">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['sign'])){
header('location:usersign.php');
}
?>