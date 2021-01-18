<?php
error_reporting(0);
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'fp');
$con=mysqli_connect("localhost","root","","fp");
$sql0 = 'SELECT SID FROM sellerpostinfo';
$query=mysqli_query($con,$sql0);
while($rows=mysqli_fetch_array($query)){
$id=$rows['SID'];}
$idd=$id+1;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Product</title>
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

  <style>
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
        <a class="navbar-brand" href="#">SELLER</a>
      </div>
      </nav>

        <hr>
        <div>
      					<form name="sellerForm" action="sellerpostinfo.php"  method="post" enctype="multipart/form-data" style="padding:10px;margin-left:30px;margin-right:30px;">

                <div class="row form-group">

      					<div class="row form-group">
                    <div class="col-md-12">
      				       Seller name :
      			       	<input type="text" class="form-control" name="sellerName" id="sellerName" placeholder="Seller Name" value="" required>
                    </div>
      					</div>

      					<div class="row form-group">
      							<div class="col-md-12">
      								Product Id:
      								<input type="text" class="form-control" name="sellerId" id="sellerId" placeholder="Seller Id" value="<?php echo $idd;?>" required>
      							</div>
                </div>

                <div class="row form-group">
      							<div class="col-md-12">
      								 Product name:
                       	<input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name" value="" required>
      							</div>
                </div>

                <div class="row form-group">
      							<div class="col-md-12">
      								Product Description:
                    <textarea rows="5" class="form-control" name="productDescription" id="productDesc" placeholder="Product Description" value"" required></textarea>
                  	</div>
                </div>

                <div class="row form-group">
      							<div class="col-md-12">
      								 Product price:
                       	<input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="Product Price" value="" required>
      							</div>
                </div>


                <div class="row form-group">
      							<div class="col-md-12">
                      <label for="fileupload"> Select a file to upload</label>
                      <input type="file" name="image" value="image" id="image" required>
      							</div>
                </div>

       <hr>
      </div>


    				<script type="text/javascript" src="js/script.js"></script>

    					<p style="text-align:center;">
    						<input type="submit" name="insert" id="insert"  value="Submit" class="btn btn-success" onClick=""  />
    					</p>
              </form>
      </div>

      <br />
      <br />


      	<div class="gototop js-top">
      		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
      	</div>
  </body>
</html>

<script>
$(document).ready(function(){
  $('#insert').click(function(){
    var sellerName=$('#sellerName').val();
    var sellerId=$('#sellerId').val();
    var productName=$('#productName').val();
    var productDesc=$('#productDesc').val();
    var productPrice=$('#productPrice').val();
    var image_name=$('#image').val();
    if(sellerName=='')
    {
      alert("Please enter seller name");
      return false;
    }
    if(sellerId=='')
    {
      alert("Please enter seller id");
      return false;
    }
    if(productName=='')
    {
      alert("Please enter product name");
      return false;
    }
    if(productDesc=='')
    {
      alert("Please enter product description");
      return false;
    }
    if(productPrice=='')
    {
      alert("Please enter product price");
      return false;
    }
    if(image_name=='')
    {
      alert("Please Select Image");
      return false;
    }
    else
    {
      var extension=$('#image').val().split('.').pop().toLowerCase();
      if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])== -1)
      {
        alert('Invalid Image File');
        $('#image').val('');
        return false;
      }
    }
  });
});
</script>
