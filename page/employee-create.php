<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มพนักงาน</title>
</head>
<body>
    <h1>เพิ่มพนักงาน</h1>
    <a href="./page/index.php">Back to List</a>
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
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <label for="nameTh">ชื่อบริษัท (ภาษาไทย):</label>
        <input type="text" name="nameTh" required><br>
        <label for="companyId">รหัสบริษัท (อักขระ 3 ตัว):</label>
        <input type="text" name="companyId" required><br>
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <label for="nameTh">ชื่อบริษัท (ภาษาไทย):</label>
        <input type="text" name="nameTh" required><br>
        <label for="companyId">รหัสบริษัท (อักขระ 3 ตัว):</label>
        <input type="text" name="companyId" required><br>
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <label for="nameTh">ชื่อบริษัท (ภาษาไทย):</label>
        <input type="text" name="nameTh" required><br>
        <label for="companyId">รหัสบริษัท (อักขระ 3 ตัว):</label>
        <input type="text" name="companyId" required><br>
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>