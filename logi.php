<?php

require_once 'phpmysqlconnect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM LOGI";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tul1 = "<table style= 'border: 1px solid;'><tbody><tr><th>Id</th><th>Voter Id</th><th>Action</th><th>Time</th><th>First name</th><th>Last name</th><th>Decision</th></tr>";
    // output data of each row
    $tul2;
    while($row = $result->fetch_assoc()) {
        $tul2.="<tr><td>".$row["id"]."</td><td>".$row["Haaletus_id"]."</td><td>".$row["toiming"]."</td><td>".$row["aeg"]."</td><td>".$row["Eesnimi"]."</td><td>".$row["Perenimi"]."</td><td>".$row["Otsus"]."</td></tr>";
    }
    $tul3 = "</tbody></table>";
    $tulemus = $tul1.$tul2.$tul3;
    echo $tulemus;
} else {
    echo "0 results";
}

$conn->close();
    
?>
