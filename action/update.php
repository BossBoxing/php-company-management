<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyId = $_POST["companyId"];
    $nameEn = $_POST["nameEn"];
    $nameTh = $_POST["nameTh"];

    // Database connection
    $conn = new mysqli("localhost", "root" , "", "wb_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update record
    $sql = "UPDATE wb_companyinfoview SET WB_NAME_EN = '$nameEn', WB_NAME_TH = '$nameTh', WB_STATUS = 'เปิด' WHERE WB_DATAAREA = '$companyId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../page/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>