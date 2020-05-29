<?php

$conn = mysqli_connect("localhost", "root", "", "gestion_vols2");

if(mysqli_connect_errno()){
  
    echo "Connection Failed : ".mysqli_connect_error();

};

?>