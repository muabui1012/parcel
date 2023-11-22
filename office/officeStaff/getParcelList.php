<?php
  session_start();
    require_once '../../connect.php';
    $sql = "SELECT * FROM parcel";
    
    
    
    $result = $conn->query($sql);
    $row = mysqli_fetch_all($result);
    print json_encode($row);

    $conn->close();

?>