<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Danh sách Danh mục</h1>

        <a href="/admin/categories/create" class="btn btn-info">Thêm mới</a>
        <a href="/admin/" class="btn btn-info">Quay lại</a>

        <div class="row">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($categories as $category)
                    <tr>
                        <td> {{ $category['id'] }} </td>
                        <td> {{ $category['name'] }} </td>
                        <td>
                            <a href="/admin/categories/{{ $category['id'] }}/update" class="btn btn-warning">Cập nhật</a>
                            <a href="/admin/categories/{{ $category['id'] }}/show" class="btn btn-info">Xem chi tiết</a>
                            <a href="/admin/categories/{{ $category['id'] }}/delete"
                                onclick="return confirm('Có chắc xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

</body>

</html>