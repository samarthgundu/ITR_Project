<?php
$conn = mysqli_connect("localhost", "root", "","coffeedb");
// Check connection
if($conn)
{
    echo"connected";
}
else{
    echo "error".mysqli_error($con);
}
?>