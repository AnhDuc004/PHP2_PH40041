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
        <h1>Cập nhật Bài viết: {{ $post['title'] }} </h1>

        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select class="form-control" id="category_id" required name="category_id">
                        {{-- <option value="" selected>--Chưa Chọn--</option> --}}
                        @foreach ($categories as $category)
                            <option 
                                @if ($category['id'] == $post['p_category_id']) selected @endif 
                                value="{{ $category['id'] }}">
                                {{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" required placeholder="Enter title"
                        value="{{ $post['p_title'] }}" name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="excerpt" class="form-label">Excerpt:</label>
                    <input type="text" class="form-control" id="excerpt" placeholder="Enter excerpt"
                        value="{{ $post['p_excerpt'] }}" name="excerpt">
                </div>
                <div class="mb-3 mt-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea name="content" id="content" class="form-control">{{ $post['p_content'] }}</textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="{{ $post['p_image'] }}" alt="" width="100px">
                </div>
                <button type="submit" class="btn btn-primary" onclick='alert("Cập nhật thành công")'>Submit</button>
               
                <a href="/admin/posts" class="btn btn-success">Danh sách Bài viết</a>
            </form>
        </div>
    </div>

</body>

</html>