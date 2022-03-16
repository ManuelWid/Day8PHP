<?php 
require_once 'db_connect.php';


$sql = "SELECT * FROM dishes where dish_id = $_GET[dish_id]";
$result = mysqli_query($connect ,$sql);
$tbody='';
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){   
        $tbody .=  "<tr>
        <td><img class='img-thumbnail' src='" .$row['image']."'</td>
           <td>" .$row['name']."</td>
           <td>" .$row['price']."€</td>
           <td>" .$row['description']."</td>
            </tr>";
   };
} else {
   $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP CRUD</title>
       <?php require_once 'boot.php'?>
       <style type="text/css">
           .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
               height: 70px !important;
           }
           td {          
               text-align: center;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
       </style>
   </head>
   <body>
       <div class="manageProduct w-75 mt-3">
           <p class='h2'>Meals</p>

            <table class='table table-striped'>
               <thead class='table-success'>
                   <tr>

                        <th>Picture</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Description</th>
                   </tr>
               </thead>
               <tbody>
                    <?= $tbody;?>

                </tbody>
           </table>
       </div>
   </body>
</html>