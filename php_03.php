<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            color: #555;
        }
        input[type="number"] {
            padding: 8px;
            font-size: 16px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 150px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        table th {
            background-color: #007BFF;
            color: #fff;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        p {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <form method="post">
        <label for="number">กรุณาใส่แม่สูตรคูณ:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">แสดงตาราง</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // รับค่าจากฟอร์ม
        $number = intval($_POST['number']);

        // ตรวจสอบว่าแม่สูตรคูณเป็นค่าบวก
        if ($number > 0) {
            echo "<h2>แม่สูตรคูณ $number</h2>";
            echo "<table>";
            echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$number x $i</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>กรุณากรอกตัวเลขที่มากกว่า 0</p>";
        }
    }
    ?>
</body>
</html>
