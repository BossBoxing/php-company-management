<!DOCTYPE html>
<html>
<head>
    <title>ระบบจัดการพนักงานบริษัท</title>
</head>
<body>
    <h1>ระบบจัดการบริษัท</h1>
    <a href="create.php">เพิ่มบริษัท</a>
    <table border="1">
        <tr>
            <th>รหัสบริษัท</th>
            <th>ชื่อบริษัท (อังกฤษ)</th>
            <th>ชื่อบริษัท (ภาษาไทย)</th>
            <th>ตัวเลือก</th>
        </tr>
        <?php
            // Database connection
            $conn = new mysqli("localhost", "root" , "", "wb_db");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch records
            $sql = "SELECT * FROM wb_companyinfoview";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["WB_DATAAREA"] . "</td>";
                    echo "<td>" . $row["WB_NAME_EN"] . "</td>";
                    echo "<td>" . $row["WB_NAME_TH"] . "</td>";
                    echo "<td><a href='edit.php?id=" . $row["WB_DATAAREA"] . "'>แก้ไข</a> | <a href='delete.php?id=" . $row["WB_DATAAREA"] . "'>ลบ</a> | <a href='employee.php?id=" . $row["WB_DATAAREA"] . "'>ดูพนักงานทั้งหมด</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>