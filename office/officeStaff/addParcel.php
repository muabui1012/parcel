<?php
  session_start();
    require_once '../../connect.php';
    $name = $_REQUEST["name"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $address = $_REQUEST["address"];
    $sql = "insert into parcel(name, phoneNumber, address) values('$name','$phoneNumber', '$address');";
    //$result = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "Tiếp nhận đơn hàng thành công, mã đơn hàng là: " . $last_id;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
    // VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');
    
    $conn->close();

?>