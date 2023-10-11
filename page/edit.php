<!DOCTYPE html>
<html>
<head>
    <title>แก้ไขบริษัท</title>
</head>
<body>
    <h1>แก้ไขบริษัท</h1>
    <a href="index.php">Back to List</a>
    <?php
    $companyId = $_GET["id"];
    
    // Database connection
    $conn = new mysqli("localhost", "root" , "", "wb_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch record to edit
    $sql = "SELECT * FROM wb_companyinfoview WHERE WB_DATAAREA = '$companyId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        exit();
    }
    
    ?>
    <form method="post" action='../action/update.php?companyId='>
        <input type="hidden" name="companyId" value="<?=$companyId?>">
        <h4>Company: <?=$companyId?></h4>
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <label for="nameTh">ชื่อบริษัท (ภาษาไทย):</label>
        <input type="text" name="nameTh" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>