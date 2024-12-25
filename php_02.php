<?php
/**
 * แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่หรือเลขคี่</title>
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
    <h1>เลขคู่หรือเลขคี่</h1>
    <table>
        <tr>
            <th>ตัวเลข</th>
            <th>ประเภท</th>
        </tr>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            $type = ($i % 2 === 0) ? "เลขคู่" : "เลขคี่";
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$type</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>


