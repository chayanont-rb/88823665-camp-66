<?php
/**
 * แสดงข้อมูลตัวเลข จาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงเลขคู่หรือเลขคี่</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* สีพื้นหลังเข้ม */
            margin: 0;
            padding: 20px;
            text-align: center;
            color: #ddd; /* สีข้อความหลัก */
        }
        h1, h2 {
            color: #b39ddb; /* สีม่วง */
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            margin: 5px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #1e1e1e; /* สีพื้นหลังช่องกรอก */
            color: #ddd;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #7e57c2; /* สีม่วง */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5e35b1; /* สีม่วงเข้มเมื่อ hover */
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
            max-width: 600px;
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
        p {
            color: #f44336; /* สีแดงสำหรับข้อความผิดพลาด */
        }
    </style>
</head>
<body>
    <h1>เลขคู่หรือเลขคี่</h1>
    <form method="post" action="">
        <label for="start">เริ่มต้น:</label>
        <input type="number" id="start" name="start" required>
        <label for="end">สิ้นสุด:</label>
        <input type="number" id="end" name="end" required>
        <input type="submit" value="แสดงผล">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["start"]) && isset($_POST["end"])) {
        $start = intval($_POST["start"]);
        $end = intval($_POST["end"]);

        if ($start > $end) {
            echo "<p>ค่าเริ่มต้นต้องน้อยกว่าค่าสิ้นสุด!</p>";
        } else {
            echo "<h2>ตัวเลขตั้งแต่ $start ถึง $end</h2>";
            echo "<table>";
            echo "<tr><th>ตัวเลข</th><th>ประเภท</th></tr>";

            for ($i = $start; $i <= $end; $i++) {
                $type = ($i % 2 === 0) ? "เลขคู่" : "เลขคี่";
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$type</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }
    ?>
</body>
</html>