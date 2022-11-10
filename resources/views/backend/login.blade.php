<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập</title>
        <base href="">
        <link rel="stylesheet" href="resources/css/login.css">
        <link rel="stylesheet" href="resources/css/cuahang.css">
    </head>
    <body >
        <div id="wrapper">
            <header class="header">
                <div class="top-bar" >
                    <div class="flex-row container">
                        <div class="flex-left">
                            <ul class="ul-left" >
                                <li class="header-contact-wrapper">
                                    <ul id="header-contact" class="ul-contact"> 
                                        <li class><img src="img\email.jpg" alt="" id="img-email"></li>
                                        <li class>
                                            <i class="icon-email" style="font-size: 16px;"></i>
                                            <a href="mailto:khaihacang123@gmail.com" class="email">
                                            <span id="email">khaipn.21it@vku.udn.vn</span>
                                            </a>
                                            <span id="gach">|</span>
                                        </li>
                                        <li class><img src="img\download.jpg" alt="" id="img-phone"></li>
                                        <li class>
                                            <a href="tel:0919016614" class="phone">
                                                <i class="icon-phone"></i>
                                                <span id="phone">&nbsp;091 901 6614</span>
                                                
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-center">
                            <ul class="ul-center"></ul>
                        </div>
                        <div class="flex-right">
                            <ul class="ul-right">
                                <li class="account">
                                    <a href="login.html">
                                        <span id="account">Đăng nhập / Đăng ký </span>
                                    </a>
                                    <span id="gach">|</span>
                                </li>
                                <li class="giohang">
                                    <a href="giohang.html" title="Giỏ hàng">
                                        <span class="header-cart-title" id="giohang">Giỏ hàng
                                        </span>
                                        <i class="icon-shopping-cart">
                                            
                                        </i>
                                        
                                    </a>
                                    <ul class="nav-dropdown nav-dropdown-simple" style>
                                        <li class="html widget_shopping_cart">
                                            <div class="widget_shopping_cart_content"></div>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                <li class="img-giohang"><img src="img\giohang1.jpg" alt="" id="img-giohang"></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div  class="header-main">
                    <header class="header-menu">
                        <div class="flex-headermain container"> 
                            
                            <div class="flex-col logo" id="logo">
                                <a href="index.html"><img width="400px" height="50px" src="resources/img/logo1.jpg" alt="" id="img-logo"></a>
                            </div>
                            <div class="menu">
                                <ul class="menu-header">
                                    <li class="menubar1">
                                        <a href="index.html" class="menu-link">Trang chủ</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="gioithieu.html" class="menu-link">Giới thiệu</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="cuahang.html" class="menu-link">Cửa hàng</a>
                                        <ul class="sub-menu" style="font-weight: 500;font-size: 16px;">
                                            <li><a href="cuahang.html">Rau củ</a></li>
                                            <li><a href="cuahang.html">Hải sản</a></li>
                                            <li><a href="cuahang.html">Thịt trứng</a></li>
                                            <li><a href="cuahang.html">Trái cây</a></li>
                                            <li><a href="cuahang.html">Đồ khô</a></li>
                                            <li><a href="cuahang.html">Đồ uống</a></li>
                                        </ul>
                                    </li>
                                    <li class="menubar1">
                                        <a href="./DanhBa/danhBa.html" class="menu-link">Danh bạ nhà nông</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="./KienThuc/KienThuc.html" class="menu-link">Kiến thức</a>
                                    </li>
                                    <li class="menubar1">
                                        <a href="lienhe.html" class="menu-link">Liên hệ</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="header-search">
                                <div class="searchform">
                                    <form action="" role="search" method="get" class="searchform">
                                        <input type="search" class="search" value placeholder="Tìm kiếm...">
                                    </form>
                                </div>
                            </div>
                        
                        </div>
                    </header>       
                </div>
            </header>
            <div class="title" style="background-image: url(resources/img/thanh.png);margin-top: 15px; color: #fff; height:160px; background-size: cover;">
                <div class="flex-row container">
                    <div class="left-title">
                        <nav class="title-main" >
                            <h1 href="login.html" style="color: #fff;  padding-top: 20px;">ĐĂNG NHẬP</h1>
                        </nav>
                    </div>
                </div>
            </div>
                <div class="login" style="margin-top: 30px;">
                    <h3 class="h3">Đăng nhập</h3>
                    <form action="" method="POST">
                        @csrf
                        @include('errors.note')
                        <p>
                            <label for="" class="lb">Địa chỉ email&nbsp;
                                <span>*</span>
                            </label>
                            <input type="text" name="email" id="tk" value="{{ old('email') }}">
                        </p>
                        <p>
                            <label for="" class="lb">Mật khẩu&nbsp;
                                <span>*</span>
                            </label>
                            <input type="password" name="password" id="mk">
                        </p>
                        <p class="form_row">
                            <button type="submit" name="login" value="Đăng nhập" class="btdn" onclick="dangnhap()">Đăng nhập</button>
                            
                            <label for="" id="sub_form">
                                <input type="checkbox" name="remember" id="checkbox" value="remember me">
                                <span>Ghi nhớ mật khẩu</span>
                            </label>
                        </p>
                        <p>
                            <a href="" class="a">Quên mật khẩu ?</a>
                        </p>
                        <p style="text-decoration: none;
                        color: #1c1c1c;
                        font-size: 20px;">Bạn chưa có tài khoản ?
                            <a class="abt" href="dangky.html" style="">ĐĂNG KÝ NGAY</a>
                        </p>
                    </form>
                </div>

            <footer class="foot" style="padding-bottom: 20px">
                <div class="foot-container">
                    <div class="row-foot">
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Fresh Organic Food</h2>
                                <p>Hệ thống cung cấp thực phẩm  sạch từ vườn,
                                   được chính những người nông dân làm nên với công
                                   nghệ Organic đạt chuẩn.</p>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Sản phẩm</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Rau củ</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Hải sản</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Trái cây</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Đồ uống</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Thịt trứng</a></li>  
                                </ul>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2>Danh mục</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Trang chủ</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Giới thiệu</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Cửa hàng</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Kiến thức</a></li>
                                    <li class="element-chuc-vu"><a href="" class="link-chucvu">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-foot">
                            <div class="content-col">
                                <h2 style="padding-left: 20px;">Liên hệ</h2>
                                <ul class="chuc-vu">
                                    <li class="element-chuc-vu">
                                        <i class="ti-location-pin"></i>
                                        <span>Hòa Hải, Ngũ Hành sơn</span>
                                    </li>
                                    <li class="element-chuc-vu">
                                        <i class="ti-email"></i>
                                        <span>0919016614</span>
                                    </li>
                                    <li class="element-chuc-vu">
                                        <i class="ti-email"></i>
                                        <span>khaipn.21it@vku.udn.vn</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>  
        <!--js nav-->
        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                var header = document.querySelector(".header-menu");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>  
    </body>
</html>