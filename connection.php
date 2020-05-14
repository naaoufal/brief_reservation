<?php

$conn = mysqli_connect("localhost", "root", "", "gestion_vols");

if(mysqli_connect_errno()){
  
    echo "Connection Failed : ".mysqli_connect_error();

};

?>