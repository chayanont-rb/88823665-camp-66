<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MyController extends Controller{

    public function myfunction(Request $req)
    {
        $data = [];
        $input = $req->input('myinput');

        // Validate the input
        if (!is_numeric($input) || $input <= 0) {
            $data['error'] = 'กรุณาป้อนตัวเลขที่ถูกต้อง (ต้องเป็นจำนวนเต็มบวก)';
        } else {
            $data['input'] = $input;
            $data['multiplicationTable'] = $this->generateMultiplicationTable($input);
        }

        return view('myview', $data);
    }

    // Function to generate multiplication table
    private function generateMultiplicationTable($number)
    {
        $table = [];
        for ($i = 1; $i <= 12; $i++) {
            $table[$i] = $number * $i;
        }
        return $table;
    }
}
