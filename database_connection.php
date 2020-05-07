<?php


$conn = mysqli_connect("localhost", "root", "", "gestion_vols");


// $conn = mysqli_connect("localhost", "root", "", "gestion_vols");
if($conn->connect_error){
    die("Connexion echoue". $conn->connect_error);
}
$sql = "SELECT num_vol, lieu_depart, lieu_arrive, date_depart, date_arrive FROM vol";
$result = $conn->query($sql);
if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["num_vol"]."</td><td>" . $row["lieu_depart"]."</td><td>".$row["lieu_arrive"]."</td><td>".$row["date_depart"]."</td><td>".$row["date_arrive"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resulat";
}
$conn-> close();



?>