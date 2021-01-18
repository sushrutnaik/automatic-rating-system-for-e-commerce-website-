
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form  style="border:1px solid #ccc" name="myForm" onsubmit="return (validate());" method="post" action="data1.php">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="text"><b>USERNAME</b></label>
    <input type="text" placeholder="USERNAME" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <label for="CITY"><b>CITY</b></label>
    <input type="text" placeholder="CITY" name="city" required>
    <label for="mobileno"><b>MOBILE NO</b></label>
    <input type="text" placeholder="MOBILE NO" name="mobileno" required>
    
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="window.location.href='index1.php'">Cancel</button>
      <button type="submit" class="signupbtn" name="submit11">Sign Up</button>
    </div>
  </div>
</form>
<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.username.focus() ;
            return false;
         }
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.password.value == "" ||
            document.myForm.password.value.length != 10 ) {
            
            alert( "Please provide a password of 10 charcter" );
            document.myForm.password.focus() ;
            return false;
}
if( document.myForm.psw-repeat.value == "" ||
            document.myForm.psw-repeat.value.length != 10 ) {
            
            alert( "Please provide a cpassword of 10 charcter" );
            document.myForm.psw-repeat.focus() ;
            return false;
}
         if(document.myForm.password.value!=document.myForm.psw-repeat.value){
          document.myForm.psw-repeat.focus();
          return false;
         }
  
                // If same return True. 
                
         
         if( document.myForm.city.value == "" ) {
            alert( "Please provide your city!" );
            return false;
         }

         if( document.myForm.mobileno.value == "" ) {
            alert( "Please provide mobileno!" );
            return false;
         }
         return( true );
      }
   //-->
</script>
</body>
</html>

