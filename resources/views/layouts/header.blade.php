<header>
    <div class="logo-menu">
        <div class="logo"><img src="{{ asset('dist/image/Logo.svg') }}" alt=""></div>
        <div class="menu">
            <ul>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Giải pháp</a></li>
                <li><a href="">Tin tức & Sự kiện</a></li>
                <li><a href="">Cơ hội nghề nghiệp</a></li>
                @if (auth()->user())
                    <li><a href="{{route('auth.logout')}}">Đăng xuất</a></li>
                @else
                    <li><a href="{{route('auth.login')}}">Đăng nhập</a></li>
                @endif
            </ul>
        </div>
    </div>
</header>
