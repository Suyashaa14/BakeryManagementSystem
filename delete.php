<?php

    include('connection.php');
    $sql = "DELETE FROM products WHERE  ProductId = ". $_REQUEST["ProductId"];
    $r = mysqli_query($conn, $sql);

?>
        <script>
            location.replace("adminIndex.php");
        </script>
              
            
<?php
             
?>