<!DOCTYPE html>
<html>
    <head>
        <title>Deleting Inventory from the Database</title>
    </head>
    <body style="background-color: rgb(229, 243, 247);">
    <h3>Deleting records Using PHP</h3>
    <h4>Programmed by {Manveet Kaur}</h4>
    <?php
      require_once('includes/bootstrap.php');
//Trim Incoming data.
      $title= trim($_POST['Title']);
$result = Movie::delete ($dbc, $title);
if($result){
    echo"The DELETE query was successfully execuated";
    
    }else{
    echo"The DELETE query could not excuated";
    }

    ?>
    </body>
</html>