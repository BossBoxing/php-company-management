<!DOCTYPE html>
<html>
<head>
    <title>ระบบจัดการพนักงานบริษัท</title>
</head>
<body>
<h1>ระบบจัดการพนักงานบริษัท</h1>
    <a href="employee-create.php">เพิ่มพนักงาน</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>รหัสพนักงาน</th>
            <th>รหัสบริษัท</th>
            <th>ชื่อเต็ม (ภาษาอังกฤษ)</th>
            <th>ชื่อเต็ม (ภาษาไทย)</th>
            <th>ชื่อเล่น</th>
            <th>เบอร์ติดต่อ</th>
            <th>อีเมลล์</th>
            <th>ชื่อผู้ใช้</th>
            <th>รหัสผ่าน</th>
            <th>สถานะ</th>
        </tr>
        <?php
            $companyId = $_GET["id"];
            // Database connection
            $conn = new mysqli("localhost", "root" , "", "wb_db");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch records
            $sql = "SELECT * from wb_employee where WB_DATAAREA = '$companyId'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["WB_EMPLOYEEID"] . "</td>";
                    echo "<td>" . $row["WB_DATAAREA"] . "</td>";
                    echo "<td>" . $row["WB_EMPNAMEEN"] . "</td>";
                    echo "<td>" . $row["WB_EMPNAMETH"] . "</td>";
                    echo "<td>" . $row["WB_NICKNAME"] . "</td>";
                    echo "<td>" . $row["WB_TEL"] . "</td>";
                    echo "<td>" . $row["WB_MAIL"] . "</td>";
                    echo "<td>" . $row["WB_USERNAME"] . "</td>";
                    echo "<td>" . $row["WB_PASSWORD"] . "</td>";
                    echo "<td>" . $row["WB_STATUS"] . "</td>";
                    // echo "<td><a href='edit.php?id=" . $row["WB_DATAAREA"] . "'>แก้ไข</a> | <a href='delete.php?id=" . $row["WB_DATAAREA"] . "'>ลบ</a></td> | <a href='employee.php?id=" . $row["WB_DATAAREA"] . "'>ดูพนักงานทั้งหมด</a></td>";
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