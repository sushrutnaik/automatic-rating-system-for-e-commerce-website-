<?php

session_start();

if(!isset($_SESSION['luser']))

{

    	

    

}

else

{

 // checking the time now when home page starts


    

        session_destroy();
        
    
}
    
 //starting this else one [else1]

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>RESULTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
#radio1 {
  display: none;
}
.topnav input[type=text] {
  position: absolute;
  left: 240px;
  top: 300px;
  height: 50px;
  width: 650px;
 box-shadow: 0 10px 30px rgba(0,0,0,1);
 border-radius: 30px;
}
.topnav input[type=text] {
    border: 1px solid #ccc;
  }
    .navbar{
      margin-bottom: 0px;
      border-radius: 0px;
      background-color:#5E4485;
      color: #FFF;
      padding: 1% 0;
      font-size: 1.2em;
      border: 0;
    }

  .box:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.05);
    transform: skew(-3deg);
    pointer-events: none;
  }

  .button{
    position: absolute;
  left: 895px;
  top: 300px;
  height: 50px;
  width: 100px;
  background-color: #5E4485;
  color:#fff;
  border-radius: 30px;
box-shadow: 0 10px 30px rgba(0,0,0,1);
  }
.button:hover{
  background:#fff;
  color: #5E4485; 
}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
 }
.center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  margin-top: 30px;
}
  </style>
</head>
 

 
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
<span style="float:right"><a href='logout.php'>LogOut</a></span>

      </nav>
    </div>
  </nav>
<form action="product.php" method="post">
<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'fp');
$q="select * from sellerpostinfo";
$query=mysqli_query($con,$q);
while ($rows=mysqli_fetch_array($query)) {
      ?>
<label class="center2">
<input type ="radio" id="radio1" name="quiz" value="<?php echo $rows['id'];?>">
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['PIMG'] ).'" width=500 height=300 class="center2">' ?>
</label>
<input type="submit" name ="submit" value="buy" class="center2">
<br>
<?php

}
?>
</form>
</body>
</html>
