<?php include "connect.php" ?>

<html>
<head><meta chaset="utf-8"></head>
<body>
<form action="insert.php" method="post">
ชื่อสมาชิก:
<input type="text" name="username"><br><br>

รหัสผ่าน:
<input type="text" name="password"><br><br>

ชื่อ-สกุล: <input type="text" name="name"><br>
ที่อยู่: <br>
<textarea name="address" rows="3" cols="40"></textarea><br><br>
เบอร์โทรศัพท์: <input type="text" name="mobile" ><br><br>
อีเมล: <input type="text" name="email"><br><br>
<input type="submit" value="เพิ่มสมาชิก">
</form>

</body>
</html>