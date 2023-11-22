<?php
    session_start();
    require_once("../../connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn gửi</title>
</head>
<body>
    <h1>Quản lý đơn gửi</h1>
    <span id="list"></span>

    <script>
        setInterval(myFunction, 10);
        function myFunction() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("list").innerHTML = xhttp.responseText;
                    <?php
                
                    ?>
                }
            };
            xhttp.open("GET", "getParcelList.php", true);
            xhttp.send();
        }
    </script>
</body>
</html>