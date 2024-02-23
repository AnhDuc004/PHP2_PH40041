<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h1>Login</h1>

        @if(!empty($_SESSION['errors']))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($_SESSION['errors'] as $key => $errors)
                        <li>Key : {{ $key }} - Error: {{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
            {{-- @php
                unset($_SESSION['errors']);
            @endphp --}}
        @endif

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</body>
</html>