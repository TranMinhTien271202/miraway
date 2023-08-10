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
            Viết bài mới
        </div>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <label for="" class="title-name">Tiêu đề <span style="color: red;">*</span></label>
                <div class="from-control">
                    <input type="text" class="name" placeholder="  Mời Nhập tiêu đề" name="name" id="">
                </div>
                <label for="" class="file">Ảnh đại diện<span style="color: red;">*</span></label>
                <div class="from-control">
                    <input class="custom-file-input" name="file" type="file">
                </div>
                <label for="" class="cate">Danh mục</label>
                <div class="from-control">
                    <select name="cate" class="select" id="">
                        <option value="" class="select">Mời chọn danh mục</option>
                        <option value="1" class="select">Tin tức</option>

                    </select>
                </div>
                <label for="" class="content">Nội dung<span style="color: red;">*</span></label>
                <textarea name="content" id="editor" cols="30" rows="10"></textarea>
            </div>
            <div class="button">
                <button class="btn-button">Xuất bản bài viết</button>
            </div>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
