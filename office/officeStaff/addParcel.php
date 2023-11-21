<?php
  session_start();
    require_once '../../connect.php';
    $name = $_REQUEST["name"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $address = $_REQUEST["address"];
    echo $name . $phoneNumber . $address;
    $sql = "insert into parcel(name, phoneNumber, address) values('$name','$phoneNumber', '$address')";
    echo $sql;
    mysqli_query($conn, $sql);
    // INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
    // VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
    
    $conn->close();

?>