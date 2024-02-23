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
        <h1>Chi tiết Bài viết: {{ $post['name'] }}</h1>

        <div class="row">
            <table class="table">
                <tr>
                    <th>Trường dữ liệu</th>
                    <th>Gía trị</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>{{ $post['p_id'] }}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>{{ $post['c_name'] }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $post['p_title'] }}</td>
                </tr>
                <tr>
                    <td>Excerpt</td>
                    <td>{{ $post['p_excerpt'] }}</td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>{{ $post['p_content'] }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="{{ $post['p_image'] }}" alt="" width="100px">
                    </td>
                </tr>
            </table>
            <a href="/admin/posts" class="btn btn-success">Danh sách Bài viết</a>
        </div>
    </div>

</body>

</html>