<?php

require_once 'phpmysqlconnect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = ("SELECT (select count(Haaletus_id) from HAALETUS) as voters, (select count(Otsus) from HAALETUS  where Otsus='In Favour') AS totalpoolt, (select count(Otsus) from HAALETUS where Otsus='Against') AS totalvastu;");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tul1 = "<table style= 'border: 1px solid;'><tbody><tr><th>Voters</th><th>In Favour</th><th>Against</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tul2 = "<tr><td>".$row["voters"]."</td><td>".$row["totalpoolt"]."</td><td>".$row["totalvastu"]."</td></tr>";
    }
    $tul3 = "</tbody></table>";
    $tulemus = $tul1.$tul2.$tul3;
    echo $tulemus;
} else {
    echo "0 results";
}

$conn->close();

    
?>
