<!DOCTYPE html>
<html>
<head>
    <title>เพิ่มบริษัท</title>
</head>
<body>
    <h1>เพิ่มบริษัท</h1>
    <a href="./page/index.php">Back to List</a>
    <form method="post" action="action/store.php">
        <label for="companyId">รหัสบริษัท (อักขระ 3 ตัว):</label>
        <input type="text" name="companyId" required><br>
        <label for="nameEn">ชื่อบริษัท (อังกฤษ):</label>
        <input type="text" name="nameEn" required><br>
        <label for="nameTh">ชื่อบริษัท (ภาษาไทย):</label>
        <input type="text" name="nameTh" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>