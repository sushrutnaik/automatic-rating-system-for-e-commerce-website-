<?php
 // echo "<body bgcolor = 'lavender'>";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'fp');
$con=mysqli_connect("localhost","root","","fp");;



if(isset($_POST["insert"]))
{
  $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $sname = $_POST['sellerName'];
  $sid = $_POST['sellerId'];
  $pname = $_POST['productName'];
  $pdes = $_POST['productDescription'];
  $pprice = $_POST['productPrice'];



$query ="Insert into sellerpostinfo
(SNAME,SID,PNAME,PDES,PPRICE,PIMG)
values('$sname','$sid','$pname','$pdes','$pprice','$file')";
if($con->query($query) === TRUE)
{
$query1 ="Insert into final
(pid,neu,neg,pos)
values('$sid',0,0,0)";
if($con->query($query1) === TRUE)	{
  echo "<script>
  alert('SUCESSFULLY UPLOADED PRODUCT')
  </script>";
}}
else {
  echo"hii";
}


}
?>


<head>
<link href="thanksu.css" rel="stylesheet">
</head>
<style>
*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#32CD32;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#32CD32;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#32CD32;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
</style>
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>CONGRATS ON UPLOADING PRODUCT!!</h1>

      <button class="go-home" onclick="window.location.href='http://localhost/finalproject/seller1.php';">
      go home
      </button>
    </div>
    
</div>
</div>



