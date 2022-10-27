<?php

$con=mysqli_connect('localhost','root','','registration');
if(!$con){
    // echo "Connection successful";
    die(mysqli_connect_error());
}
// else{
//     // die(mysqli_error($con));
//     die(mysqli_connect_error());
// }

?>