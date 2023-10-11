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

    // Insert record
    $sql = "INSERT INTO wb_companyinfoview (WB_DATAAREA, WB_NAME_EN, WB_NAME_TH, WB_STATUS) VALUES ('$companyId','$nameEn','$nameTh','เปิด')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ./page/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>