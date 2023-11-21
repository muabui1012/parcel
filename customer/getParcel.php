<?php
  session_start();
    $q = $_REQUEST["q"];
    require_once '../connect.php';
    $sql = "SELECT * FROM parcel WHERE pid='$q'";
    
    
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["pid"]. " - Status: " . $row["status"]. "<br>";
        }
      } else {
        echo "0 results";
      }

    $conn->close();

?>