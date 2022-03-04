<?php

require 'phpmysqlconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Eesnimi = $_POST['fname'];
  $Perenimi = $_POST['lname'];
  $Otsus = $_POST['otsus'];
  if (empty($Eesnimi && $Perenimi)) {
    echo "Inputs empty";
  } else {
      $result = $conn->query("SELECT Haaletus_id FROM HAALETUS WHERE Eesnimi = '$Eesnimi' and Perenimi = '$Perenimi'");
        if($result->num_rows == 0) {
            $sql = "INSERT INTO HAALETUS (Eesnimi, Perenimi, Otsus) VALUES ('$Eesnimi', '$Perenimi', '$Otsus')";
        } else {
          $sql = "UPDATE HAALETUS SET Eesnimi = '$Eesnimi', Perenimi = '$Perenimi', Otsus = '$Otsus' where Eesnimi='$Eesnimi' and Perenimi='$Perenimi'";
        }
        if ($conn->query($sql) === TRUE) {
          echo 'New record created successfully';
        } else {
          echo "Error: try again! (check logs)";
        }
  }
}

$conn->close();

?>
