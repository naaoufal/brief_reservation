<?php
    // $name = $_POST['Nom'];
    // $prenom = $_POST['Prenom'];
    // $address = $_POST['Address'];
    // $codepostal = $_POST['CodePostal'];
    // $ville = $_POST['Ville'];
    // $num_passport = $_POST['NumeroPassport'];
    // $num_places = $_POST['Numplaces'];

    // $dbconnect = mysqli_connect('localhost', 'root', '', 'gestion_vols');

    // // if(mysqli_connect_errno($dbconnect)){
    // //     echo "Connexion Echouée";
    // // }else{
    // //     echo "Connecté";
    // // }

    // $sql = "INSERT INTO client(CodeClient, Nom, Prenom, Address, CodePostal, Ville, NumeroPassport, Num_places) values('', '$name', '$prenom', '$address', '$codepostal', '$ville', '$num_passport', '$num_places')";

    // $run = mysqli_query($dbconnect, $sql);
    // if($run == TRUE){
    //     echo "Les informations inserees";
    // }else{
    //     "il y a un probleme";
    // }
    
    // session_start();
    // $connect = mysqli_connect("localhost", "root", "", "gestion_vols");
    // $result = $connect->query("SELECT * FROM vol WHERE id = ".$_GET['id']);

    // print_r($_POST);

    $conn = mysqli_connect("localhost", "root", "", "gestion_vols");

    session_start();
  
    $id=$_POST['id'];
    //echo "<input hidden value='$id' name='idvol'>";
    
    
    
    if(isset($_POST['id'] )){
        
      $_SESSION['vol']=$id;
    
      $sql = "SELECT * FROM vol WHERE Numvol=' $id'";
     
  
      $result = $conn->query($sql);
     
  
  }
  
  
  if(isset($_POST['submit1'])){
     
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $address = $_POST['address'];
    $codepostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $num_passport = $_POST['numeroPassport'];
      
      $query = "INSERT INTO client(nom, prenom, address, codePostal, ville, numeroPassport) VALUES('$name', '$prenom', '$address', '$codepostal', '$ville', '$num_passport')";
      
      $test=mysqli_query($conn,$query);

      if($test){
          echo "les informations sont inserées";
      }else{
          echo "il y a une erreur";
      }

      $row1=mysqli_insert_id($conn);
      
  
      $id=$_SESSION['vol'];
      
       $query2 = "INSERT INTO reservation(Id_client,Id_vol,DateReservation) VALUES('$row1','$id',NOW())";
       $test2=mysqli_query($conn,$query2);

       if($test2){
           echo "reservation confirmée";
           header('location:reservation.php');
           $_SESSION['Id_vol'] = $id;
           $_SESSION['Id_client'] = $row1;
           $_SESSION['nom'] = $name;
           $_SESSION['prenom'] = $prenom;
           $_SESSION['address'] = $address;
           $_SESSION['codePostal'] = $codepostal;
           $_SESSION['ville'] = $ville;
           $_SESSION['numeroPassport'] = $num_passport;
       }else{
           echo "Erreur";
       }
   };
?>