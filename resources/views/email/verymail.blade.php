<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dist/create.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <div class="container">
        <div class="title">
            Very Email Account
        </div>
        <div class="input">
            <div class="button">
                <center>
                    <form action="{{route('users.update', ['id' => request()->route('id') ])}}" method="POST">
                        @csrf
                        <button class="btn-button">Kích hoạt tài khoản</button>
                    </form>
                </center>
            </div>
        </div>
</body>

</html>
