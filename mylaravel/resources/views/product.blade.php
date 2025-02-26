<html>
    <head>
        <title>Product List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
@extends('layouts.default_with_menu')
@section('content')
<form action="{{ url ('/product') }}" method="post">
    @csrf
    <div class="mt-3">
        <div class="col-6">
            <label>Category Name</label>
            <input name="category_name" type="text" class="form-control">
        </div>
    </div>
    <button class="mt-3 btn btn-primary" id="btn-add-product-list" type="button"> + เพิ่ม Product</button>
    <div class="mt-3" id="product-list">
        <div class="col-6">
            <label>Product Name <button type="button"
                                        class="mt-2 mb-2 ml-3 btn btn-danger btn-del-product-list">ลบ</button></label>
            <input name="product_name[]" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="mt-3 mb-0 btn btn-success ">บันทึก</button>
</form>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>ProductList Name</td>
                <td>User Name</td>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Category Name</td>
                <td>
                    <ul>
                        <li>Product 01.</li>
                        <li>Product 02.</li>
                    </ul>
                </td>
                <td>User Name</td>
            </tr>
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#btn-add-product-list').on('click', function () {
                $('#product-list').append
                ('<div class="col-6"><label>Product Name <button type="button" class="mt-2 mb-2 ml-3 btn btn-danger btn-del-product-list">ลบ</button></label><input name="product_name[]" type="text" class="form-control"></div>');
            });

            $(document).on('click', '.btn-del-product-list', function () {
                $(this).parent().parent().remove();
            });
        });

    </script>

@endsection
</html>
