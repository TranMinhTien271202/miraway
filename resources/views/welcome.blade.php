@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="banner">
                <div class="left-banner">
                    <div class="image"><img src="{{ asset('dist/image/image 90.png') }}" width="550px" alt=""></div>
                    <div class="text">
                        <h3>DATA - TRÁI TIM CÔNG NGHỆ CHUYỂN ĐỔI SỐ</h3>
                        <p>Chuyển đổi công nghệ số đang trở thành xu hướng không thể tránh khỏi đối với các doanh nghiệp
                            trong thời đại ngày nay. Với sự phát triển của 4.0 thì chuyển đổi số đã không còn là sự lựa
                            chọn mà là con đường bắt buộc của những doanh nghiệp muốn thành công. Vậy phải làm thế nào?
                            Dựa trên cái gì? Hãy cùng Miraway tìm hiểu</p>
                        <div class="text-botton">
                            <p>_ 07/07/2023_ Phạm Uyên_ 0 Comments</p>
                            <a href="">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="right-banner">
                    <div class="top-right">
                        <div class="image"><img src="{{ asset('dist/image/image 92.png') }}" width="90%" height="165px"
                                alt=""></div>
                        <div class="text">
                            <p>Ứng dụng CDP phân tích nguyện vọng và hành vi của khách hàng lĩnh vực tài chính ngân hàng
                            </p>
                        </div>
                        <div class="text-botton">
                            <p>_ 07/07/2023_</p>
                            <a href="">Xem thêm</a>
                        </div>
                    </div>
                    <div class="botton-right">
                        <div class="image"><img src="{{ asset('dist/image/image 93.png') }}" width="90%" height="165px"
                                alt=""></div>
                        <div class="text">
                            <p>Miraway tài trợ hội thảo IDG – Chuyển đổi số trong lĩnh vực Tài chính – Ngân hàng và
                                Fintech – Dữ liệu cá nhân</p>
                        </div>
                        <div class="text-botton">
                            <p>_ 07/07/2023_</p>
                            <a href="">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <p>Miraway trên mạng xã hội</p>
            </div>
            <div class="icon">
                <ul>
                    <li><a href=""><img src="{{ asset('dist/image/Social Media.png') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('dist/image/Social Media (1).png') }}" alt=""></a></li>
                    <li><a href=""><img class="image" src="{{ asset('dist/image/Group 16642.png') }}"
                                alt=""></a></li>
                    <li><a href=""><img src="{{ asset('dist/image/Social Media (2).png') }}" alt=""></a></li>
                    <li><a href=""><img src="{{ asset('dist/image/Social Media (3).png') }}" alt=""></a></li>
                </ul>
            </div>
            <div class="blog">
                <div class="blog-hot">
                    <div class="blog-blog-hot">
                        <div class="title-blog-hot">
                            <div class="text">
                                <p>Bài viết tiêu biểu</p>
                            </div>
                            <div class="icon-blog">
                                <ul>
                                    <li><a href=""><img src="{{ asset('dist/image/Left arrow.png') }}"
                                                alt=""></a></li>
                                    <li><a href=""><img src="{{ asset('dist/image/Right arrow.png') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        @foreach ($blog_hot as $item)
                            <div class="blog-detail">
                                <div class="blog-detail-image">
                                    <img class="image" src="{{asset($item->image)}}" width="100%">
                                </div>
                                <div class="blog-detail-desc">
                                    <h3>{{$item->name}}</h3>
                                    <p>{!! $item->description !!}</p>
                                </div>
                                <a href="" class="show">Xem Thêm</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="login">
                        <div class="title">Đăng ký tài khoản viết bài</div>
                        <div class="form">
                            <form>
                                <label for="" class="lable-name">Họ và tên</label><br>
                                <div class="from-control">
                                    <input type="text" class="name forcus" placeholder="   Mời nhập họ và tên"
                                        id="name"><br>
                                </div>
                                <label for="" class="lable-email">Email</label><br>
                                <div class="from-control">
                                    <input type="text" class="email forcus" placeholder="  Mời nhập email"
                                        id="email"><br>
                                </div>
                                <label for="" class="lable-password">Mật khẩu</label><br>
                                <div class="from-control">
                                    <input type="password" class="password forcus" placeholder="  Mời nhập mật khẩu"
                                        id="password"><br>
                                </div>
                                <center><button type="submit" class="btn-button" id="btn-button">Đăng Ký</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="blog-new">
                    <div class="blog-blog-new">
                        <div class="title-blog-new">
                            <div class="text">
                                <p>Bài viết mới</p>
                            </div>
                            <div class="icon-blog">
                                <ul>
                                    <li><a href=""><img src="{{ asset('dist/image/Left arrow.png') }}"
                                                alt=""></a></li>
                                    <li><a href=""><img src="{{ asset('dist/image/Right arrow.png') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        @foreach ($blog_new as $row)
                            <div class="blog-detail">
                                <div class="blog-detail-image">
                                    <img class="image" src="{{asset($row->image)}}" width="100%">
                                </div>
                                <div class="blog-detail-desc">
                                    <h3>{{$row->name}}</h3>
                                    <p>{!! $row->description !!}</p>
                                </div>
                                <a href="" class="show">Xem Thêm</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="blog-show">
                        <div class="show-list-blog">
                            <div class="title-list">
                                <img src="{{ asset('dist/image/Magazines.png') }}" alt=""> <a href="">XEM
                                    THÊM</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                            <div class="list-blog">
                                <a href="">Thông báo Hợp tác chiến lược giữa Miraway – Bắc Hải –
                                    Viettelconstruction</a>
                            </div>
                        </div>
                        <div class="tag">
                            <div class="title-tag">
                                <img src="{{ asset('dist/image/Vector.png') }}" alt=""><a href="">TAG</a>
                            </div>
                            <div class="show-tag">
                                <div class="tag-row">
                                    <a href="" class="item">TAG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="contact-title">
                    <p>Đăng ký xem bài viết mới</p>
                </div>
                <div class="contact-input">
                    <label for="" class="label-contact-email">Email</label>
                    <div class="contact-btn-input">
                        <input type="text" class="btn-email" placeholder="    Mời nhập Email" name=""
                            id="">
                    </div>
                    <button type="submit" class="btn-submit">Đăng ký</button>
                </div>
            </div>
        </div>
    </main>
    <br>
@endsection
@section('script')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(function() {
            /*Pass Header Token*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#btn-button').click(function(e) {
                e.preventDefault();
                var _token = $("input[name='_token']").val();
                var url = "{{ route('users.store') }}"
                var email = $('#email').val();
                var password = $('#password').val();
                var name = $('#name').val();
                console.log(url, email, password, name);
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: email,
                        password: password,
                        name: name,
                    },
                    success: function(data) {
                        console.log(data);
                        if ($.isEmptyObject(data.message)) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer)
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer)
                                },
                            })
                            Toast.fire({
                                icon: 'success',
                                title: data.success
                            })
                            setTimeout(() => {
                                window.location = '/';
                            }, 8000);
                        } else {
                            printErrorMsg(data.message);
                        }
                    }
                })
            });

            function printErrorMsg(msg) {
                $.each(msg, function(key, value) {
                    console.log(key);
                    $('.' + key + '_err').text(value);
                });
            }
        });
    </script>
@endsection
