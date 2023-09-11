<!-- <script type="text/javascript">
    function loadDoc() {


        setInterval(function () {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("noti_number").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "data.php", true);
            xhttp.send();

        }, 1000);


    }
    loadDoc();
</script>


data.php -->

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $currentUserId = 11; // Replace 123 with the ID of the currently logged-in user

// $sql = "SELECT * FROM notification_data WHERE user_id = $currentUserId";
// $result = $conn->query($sql);

// echo $result->num_rows;
// /*
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Notification: " . $row["description"];
//     }
// } else {
//     echo "0 results";
// }
// */
// $conn->close();
?>