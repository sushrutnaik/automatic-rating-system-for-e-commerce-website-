<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'fp');
if(isset($_POST['submit'])){
$selected=$_POST['quiz'];
$q="select SNAME,PNAME,PDES,PPRICE from sellerpostinfo where SID=$selected";
$query=mysqli_query($con,$q);
while ($rows=mysqli_fetch_array($query)) {
}
$query1="select sum(neg) as neg from final where pid=$selected";
$result1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($result1)){
$neg=$row1['neg'];
}
$query2="select sum(neu) as neu from final where pid=$selected";
$result2=mysqli_query($con,$query2);
while($row2=mysqli_fetch_array($result2)){
$neu=$row2['neu'];
}
$query3="select sum(pos) as pos from final where pid=$selected";
$result3= mysqli_query($con,$query3);
while($row3=mysqli_fetch_array($result3)){
$pos=$row3['pos'];
}                                                                    
//$rating=(($pos-$neg)+($neu));      // claculation for less comments
$rating=(($pos-$neg)+($neu)/(2));  // claculation for more comments

}



 $connect = mysqli_connect("localhost", "root", "", "fp");
?> 
 <!DOCTYPE html>
 <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

           <style>
           	#pid1{
           		display: none;
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

             .btn{
                 font-size: 18px;
                 color: #fff;
                 padding: 10px 22px;
                 background-color: #5E4485;
                 border: 2px solid #fff;
                 position: relative;

               }

             .textarea {
                 position: absolute;
                 left: 750px;
                 top: 400px;
               }

             .carousel{
               padding: 5% 5%;
               background-color:black;
               position:absolute;
               left:0;
               top: 130px;
               left:50px;
             }
           </style>
      </head>
      <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
          </div>
          </nav>

           <br /><br />
           <div class="container" style="width:500px;" id="ss">
                <h3 align="center">Company Name</h3>
                <?php
                          $selected=$_POST['quiz'];
                          $query = "SELECT * FROM sellerpostinfo WHERE id=$selected";
                          $result = mysqli_query($connect, $query);
                          while($row = mysqli_fetch_array($result))
                          {
                          	echo '<center><h2>'.$row[1].'</h2></center>';
                          }
                          ?>
                <br />
                <br />
                <br />
                <table style="border: 2px solid black;" class="table table-bordered" >
                     <tr>
                          <td>
                            <!-- <h2>Photo Frame Set</h2>
                          <img src="images/p6.jpg"  class="img-responsive" width="450" height="500" >
                          <h2>Rs 1500</h2> -->
                          <?php
                          $selected=$_POST['quiz'];
                          $query = "SELECT * FROM sellerpostinfo WHERE id=$selected";
                          $result = mysqli_query($connect, $query);
                          while($row = mysqli_fetch_array($result))
                          {

                               echo '<h2>'.$row[3].'</h2>';
                               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['PIMG'] ).'" width=200 height=200 class="center2">'; 
                               echo '<h2>Rs '.$row[5].'</h2>';
                          }
                          ?>
                        </td>
                     </tr>
                     <tr>
                          <td style="border: 2px solid black;">
                            <h2>Description</h2>
                <?php
                $query = "SELECT * FROM sellerpostinfo WHERE id=$selected";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result))
                {

                     echo '<h4>'.$row[4].'</h4>';
                }

 if($rating>=1 && $rating<1.5){
echo "<img src='star1.jpeg'/>";
}else if($rating>=1.5 && $rating<2){
echo "<img src='star1h.jpeg'/>";
}else if($rating>=2 && $rating<2.5){
echo "<img src='star2.jpeg'/>";
}else if($rating>=2.5 && $rating<3){
echo "<img src='star2h.jpeg'/>";
}
else if($rating>=3.0 && $rating<3.5){
echo "<img src='star3.jpeg'/>";
}
else if($rating>=3.5 && $rating<4){
echo "<img src='star3h.jpeg'/>";
}
else if($rating>=4 && $rating<4.5){
echo "<img src='star4.jpeg'/>";
}
else if($rating>=4.5 && $rating<5){
echo "<img src='star4h.jpeg'/>";
}
else if($rating>=5){
echo "<img src='star5.jpeg'/>";
}else{
echo "<img src='starhh.jpeg'/>";
}
                ?>
              </td>
         </tr>
         <tr>
              <td align="center">
               <body> <button id="Add">BUY NOW</button> 
    <div id="textboxDiv"></div>  
    <script>  
        $(document).ready(function() {  
            $("#Add").on("click", function() {  
            	<?php
                $query = "SELECT * FROM sellerpostinfo WHERE id=$selected";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result))
                {
                	?>
                $("#textboxDiv").append("<div><br><form action='sss.php' method='post'><input type='textarea' name='comment'><br><input type='hidden' class='pid1' name='pid' value='<?php echo($row['SID']);?> '><br><input type='submit' value='POST' name='submit11'></div>");    
            });  
             
        });  
    <?php }?>
    </script>  
</body>  
  
            </td>
         </tr>
                </table>
           </div>
      </body>
 </html>
</div>
</nav


