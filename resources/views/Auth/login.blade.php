<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dist/create.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    @section('style')
        @parent
        <style>
            .login .from-control {
                text-align: center;
                padding-bottom: 8px;
            }

            .login .from-control .email,
            .password {
                width: 320px;
                height: 34px;
                border-radius: 4px;
                padding: 10px;
                border: 1px solid #ced4da;
                font-size: 14px;
            }

            .login .from-control .forcus:focus {
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            .login .lable {
                color: #B1B5C3;
                font-size: 12px;
                padding-left: 16px;
                position: relative;
                left: 314px;
            }
        </style>
    @show
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="title">Đăng nhập</div>
            <div class="form">
                <form accept="{{route('auth.login.post')}}" method="POST">
                    @csrf
                    <label for="" class="lable">Email</label><br>
                    <div class="from-control">
                        <input type="text" class="email forcus" name="email" placeholder="Mời nhập email" id="email"><br>
                    </div>
                    <label for="" class="lable">Mật khẩu</label><br>
                    <div class="from-control">
                        <input type="password" class="password forcus" name="password" placeholder="Mời nhập mật khẩu"
                            id="password"><br>
                    </div>
                    <center><button type="submit" class="btn-button" id="btn-button">Đăng nhập</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
