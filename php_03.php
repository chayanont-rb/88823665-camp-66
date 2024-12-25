<?php
/**
 * แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* สีพื้นหลังเข้ม */
            margin: 0;
            padding: 20px;
            text-align: center;
            color: #ddd; /* สีข้อความหลัก */
        }
        h1 {
            color: #b39ddb; /* สีม่วง */
        }
        form {
            margin: 20px auto;
            width: 300px;
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #292929;
            color: #ddd;
        }
        form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #7e57c2;
            color: #fff;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #9575cd;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 50%;
            background-color: #1e1e1e; /* สีพื้นหลังของตาราง */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #444;
            color: #ddd; /* สีข้อความในตาราง */
        }
        table th {
            background-color: #7e57c2; /* สีม่วง */
            color: #fff; /* สีข้อความในหัวตาราง */
            font-size: 18px;
        }
        table tr:nth-child(even) {
            background-color: #292929; /* สีพื้นหลังแถวคู่ */
        }
        table tr:hover {
            background-color: #333; /* สีพื้นหลังเมื่อ hover */
        }
    </style>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <form method="POST">
        <label for="multiplier">กรอกแม่สูตรคูณ:</label>
        <input type="number" name="multiplier" id="multiplier" placeholder="เช่น 5" required>
        <input type="submit" value="แสดงตารางสูตรคูณ">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $multiplier = intval($_POST["multiplier"]);

        echo "<h2>แม่สูตรคูณ: $multiplier</h2>";
        echo "<table>";
        echo "<tr><th>ตัวเลข</th><th>ผลลัพธ์</th></tr>";

        for ($i = 1; $i <= 12; $i++) {
            $result = $multiplier * $i;
            echo "<tr>";
            echo "<td>$multiplier × $i</td>";
            echo "<td>$result</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
