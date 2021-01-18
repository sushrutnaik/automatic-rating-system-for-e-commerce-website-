<?php
 $connect = mysqli_connect("localhost", "root", "", "fp");
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body>
           <br /><br />
           <div class="container" style="width:500px;">
                <h3 align="center">Your Products</h3>
                <br />
                <br />
                <br />
                <table class="table table-bordered">
                     <tr>
                          <th>Products</th>
                     </tr>
                <?php
                $query = "SELECT * FROM sellerpostinfo";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result))
                {
                     echo '
                          <tr>
                               <td>

                                    <img    src="data:image/jpeg;base64,'.base64_encode($row['PIMG']).'" height="300" width="500" class="img-thumnail" />
                                    <h4>Product Name: '.$row['PNAME'].'</h4>
                               </td>
                          </tr>
                     ';
                }
                ?>
                </table>
           </div>
      </body>
 </html>
