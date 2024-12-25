<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบเลขคู่หรือเลขคี่</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fdfdfd;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            margin: 10px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="number"]:focus {
            border-color: #007BFF;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        p {
            color: red;
            font-size: 16px;
            font-weight: bold;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <form method="post">
            <label for="start">เริ่มต้น:</label>
            <input type="number" id="start" name="start" placeholder="เช่น 1" required>
            <label for="end">สิ้นสุด:</label>
            <input type="number" id="end" name="end" placeholder="เช่น 10" required>
            <button type="submit">แสดงผล</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

            if ($start <= $end) {
                echo "<h2>ตัวเลขตั้งแต่ $start ถึง $end</h2>";
                echo "<table>";
                echo "<tr><th>ตัวเลข</th><th>ประเภท</th></tr>";
                for ($i = $start; $i <= $end; $i++) {
                    $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                    echo "<tr><td>$i</td><td>$type</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>กรุณาใส่ค่าเริ่มต้นที่น้อยกว่าหรือเท่ากับค่าสิ้นสุด</p>";
            }
        }
        ?>
    </div>
</body>
</html>
