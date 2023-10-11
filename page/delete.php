<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $companyId = $_GET["id"];

    // Database connection
    $conn = new mysqli("localhost", "root" , "", "wb_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete record
    $sql = "DELETE FROM wb_companyinfoview WHERE WB_DATAAREA = '$companyId'";

    if ($conn->query($sql) === TRUE) {
        echo "ลบสำเร็จ \n";
        header("Location: ./page/index.php");
    } else {
        echo "ลบไม่สำเร็จ \n";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>