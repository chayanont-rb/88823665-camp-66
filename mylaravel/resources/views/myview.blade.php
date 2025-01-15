<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for styling -->
    <style>
        body {
            background-color: #87CEEB; /* พื้นหลังสีฟ้า */
        }
        .container {
            background-color: #ffffff; /* พื้นหลังของกรอบเป็นสีขาว */
            border-radius: 10px; /* มุมกรอบโค้ง */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เงากรอบ */
        }
        .alert {
            margin-top: 20px; /* ขยับข้อความเตือนให้ห่างจากฟอร์ม */
        }
        h1, h2 {
            color: #333; /* สีข้อความหัวข้อ */
        }
        .btn-primary {
            background-color: #007bff; /* สีปุ่ม */
            border-color: #007bff; /* สีขอบปุ่ม */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1>ตารางสูตรคูณ</h1>
            <form method="post" action="{{ url('/mycontroller') }}" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="myinput" class="form-label">ป้อนแม่สูตรคูณ:</label>
                    <input type="text" name="myinput" class="form-control" value="{{ old('myinput') }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

            @if(isset($error))
                <div class="alert alert-danger">
                    {{ $error }}  <!-- แสดงข้อความผิดพลาดถ้าผู้ใช้กรอกข้อมูลไม่ถูกต้อง -->
                </div>
            @endif

            @if(isset($multiplicationTable))
                <h2 class="text-center">ผลลัพธ์:</h2>
                <div class="fs-3">
                    @foreach($multiplicationTable as $key => $value)
                        <p>{{ $input }} x {{ $key }} = {{ $value }}</p>  <!-- แสดงตารางสูตรคูณ -->
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
