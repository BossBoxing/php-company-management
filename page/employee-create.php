<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มพนักงาน</title>
</head>
<body>
    <h1>เพิ่มพนักงาน</h1>
    <a href="../page/employee.php">Back to List</a>
    <form method="post" action="action/store.php">
        <!-- <th>รหัสพนักงาน</th>
            <th>รหัสบริษัท</th>
            <th>ชื่อเต็ม (ภาษาอังกฤษ)</th>
            <th>ชื่อเต็ม (ภาษาไทย)</th>
            <th>ชื่อเล่น</th>
            <th>เบอร์ติดต่อ</th>
            <th>อีเมลล์</th>
            <th>ชื่อผู้ใช้</th>
            <th>รหัสผ่าน</th>
            <th>สถานะ</th>

            echo "<td>" . $row["WB_EMPLOYEEID"] . "</td>";
                    echo "<td>" . $row["WB_DATAAREA"] . "</td>";
                    echo "<td>" . $row["WB_EMPNAMEEN"] . "</td>";
                    echo "<td>" . $row["WB_EMPNAMETH"] . "</td>";
                    echo "<td>" . $row["WB_NICKNAME"] . "</td>";
                    echo "<td>" . $row["WB_TEL"] . "</td>";
                    echo "<td>" . $row["WB_MAIL"] . "</td>";
                    echo "<td>" . $row["WB_USERNAME"] . "</td>";
                    echo "<td>" . $row["WB_PASSWORD"] . "</td>";
                    echo "<td>" . $row["WB_STATUS"] . "</td>"; -->
        <label for="WB_EMPLOYEEID">รหัสพนักงาน:</label>
        <input type="text" name="WB_EMPLOYEEID" required><br>
        <label for="WB_DATAAREA">รหัสบริษัท (อักขระ 3 ตัว):</label>
        <input type="text" name="WB_DATAAREA" required><br>
        <label for="WB_EMPNAMEEN">ชื่อพนักงาน (ภาษาอังกฤษ):</label>
        <input type="text" name="WB_EMPNAMEEN" required><br>
        <label for="WB_EMPNAMETH">ชื่อพนักงาน (ภาษาไทย):</label>
        <input type="text" name="WB_EMPNAMETH" required><br>
        <label for="WB_NICKNAME">ชื่อเล่น:</label>
        <input type="text" name="WB_NICKNAME" required><br>
        <label for="WB_TEL">เบอร์ติดต่อ:</label>
        <input type="text" name="WB_TEL" required><br>
        <label for="WB_MAIL">อีเมลล์:</label>
        <input type="text" name="WB_MAIL" required><br>
        <label for="WB_USERNAME">ชื่อผู้ใช้:</label>
        <input type="text" name="WB_USERNAME" required><br>
        <label for="WB_PASSWORD">รหัสผ่าน:</label>
        <input type="text" name="WB_PASSWORD" required><br>
        <label for="WB_STATUS">สถานะ:</label>
        <input type="text" name="WB_STATUS" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>