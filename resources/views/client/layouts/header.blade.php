<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <meta name="description" content="{{isset($meta_description)?$meta_description:"Trang web chia sẻ hướng dẫn lễ tục tại đền Ông Hoàng Mười."}}">
    <meta name="googlebot" content="index, follow">
    <meta name="keywords" content="{{isset($meta_keywords) ? $meta_keywords: ""}}">
    <title>{{isset($title)? $title:"Đền Ông Hoàng Mười"}}</title>



    
    <meta property="og:title" content="{{ isset($title) ?$title : "Dịch vụ lễ Đền Ông Hoàng Mười - Cung cấp dịch vụ và hướng dẫn cúng - bái - vái - lạy"  }}" />
    <meta property="og:description" content="{{ isset($meta_description) ?substr($meta_description, 0, 200)."..."  : "Cung cấp đầy đủ tất cả dịch vụ và hướng dẫn lễ thức Việt Nam"  }}" />
    <meta property="og:image" content="/assets/img/logo-tab.png" />
    <meta property="og:url" content="{{isset($link) ? $link : "datledenhoangmuoi.com"}} " />
    <meta property="og:type" content="website" />


    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/root.css" />
    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/index.css" />
    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/style.css" />
    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/write.css" />
    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/blog.css" />
    <link rel="stylesheet" href="/onghoangmuoi-assets/style/css/about.css" />
    <link rel="icon" href="/onghoangmuoi-assets/img/logo.jpg" />
    <link rel="stylesheet" href="/shared-assets/style/css/auth.css">
    <link rel="stylesheet" href="/shared-assets/style/css/form-pop-up.css">
  </head>
  <body>

    @include('client.layouts.contact-pop-up')

    @session('auth_message')
      <script>
          alert('{{session('auth_message')}}')
      </script>
    @endsession

    {{-- banner side --}}
    <div class="banner-side">
      
      @if (!Auth::check())
          <div class="banner-side-item" id="openFormContainer">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M11 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm1.293 6.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414-1.414L13.586 13H5a1 1 0 1 1 0-2h8.586l-1.293-1.293a1 1 0 0 1 0-1.414" clip-rule="evenodd"/></svg>
              <div class="banner-side-item-detail">
                <h5 class="banner-side-item-detail-login">Đăng nhập</h5>
                <hr />
                <p>Đăng nhập - Đăng ký !</p>
              </div>
            </div>
      @else

            <div class="banner-side-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M3.5 9.568v4.864c0 2.294 0 3.44.722 4.153c.655.647 1.674.706 3.596.712c-.101-.675-.122-1.48-.128-2.428a.734.734 0 0 1 .735-.734a.735.735 0 0 1 .744.726c.006 1.064.033 1.818.14 2.39c.103.552.267.87.507 1.108c.273.27.656.445 1.38.54c.744.1 1.73.101 3.145.101h.985c1.415 0 2.401-.002 3.146-.1c.723-.096 1.106-.272 1.378-.541c.273-.27.451-.648.548-1.362c.1-.734.102-1.709.102-3.105V8.108c0-1.397-.002-2.37-.102-3.105c-.097-.714-.275-1.093-.547-1.362c-.273-.27-.656-.445-1.38-.54C17.728 3 16.742 3 15.327 3h-.985c-1.415 0-2.401.002-3.146.1c-.723.096-1.106.272-1.379.541c-.24.237-.404.556-.507 1.108c-.107.572-.134 1.326-.14 2.39a.735.735 0 0 1-.744.726a.734.734 0 0 1-.735-.734c.006-.948.027-1.753.128-2.428c-1.922.006-2.94.065-3.596.712c-.722.713-.722 1.86-.722 4.153m2.434 2.948a.723.723 0 0 1 0-1.032l1.97-1.946a.746.746 0 0 1 1.046 0a.723.723 0 0 1 0 1.032l-.71.7h7.086c.408 0 .74.327.74.73s-.332.73-.74.73H8.24l.71.7a.723.723 0 0 1 0 1.032a.746.746 0 0 1-1.046 0z" clip-rule="evenodd"/></svg>
              <div class="banner-side-item-detail">
                <h5 class="banner-side-item-detail-login"><a class="banner-side-item-detail-login" href="{{route('logout')}}">Đăng xuất</a></h5>
                <hr />
                <p>{{Auth::user()->email}}</p>
              </div>
            </div>

          
            
      
      @endif

           
      @if (Auth::check() && Auth::user()->isAdmin())
      <div class="banner-side-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.29em" height="1.2em" viewBox="0 0 1920 1792"><path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256m1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5M640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181m704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640m576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353m-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181"/></svg>        <div class="banner-side-item-detail">
          <h5 class="banner-side-item-detail-login"><a class="banner-side-item-detail-login" href="{{route('client.user.index')}}">Quản lý người dùng</a></h5>
          <hr />
          <p>Danh sách và cấp quyền</p>
        </div>
      </div>

    @endif
      
      @if (Auth::check() && Auth::user()->isCreator())

         


      <div class="banner-side-item" >
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="-0.5 -0.5 24 24"><path fill="currentColor" d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.93.93 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z"/></svg>
        <div class="banner-side-item-detail">
          <h5 ><a href="{{route('client.post.store')}}" class="banner-side-item-detail-login">Viết bài</a></h5>
          <hr />
          <p>Viết bài mới !</p>
        </div>
      </div>
      <div class="banner-side-item" >
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M2 2h9v9H2zm15.5 0C20 2 22 4 22 6.5S20 11 17.5 11S13 9 13 6.5S15 2 17.5 2m-11 12l4.5 8H2zM19 17h3v2h-3v3h-2v-3h-3v-2h3v-3h2z"/></svg>
        <div class="banner-side-item-detail">
          <h5 ><a href="{{route('client.category.index')}}" class="banner-side-item-detail-login">Thể loại</a></h5>
          <hr />
          <p>Quản lý thể loại !</p>
        </div>
      </div>


      @livewire('right-side-menu')

      <div class="banner-side-item" >
        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zm10 2h-6v-2h6zm0-4h-6v-2h6zm0-4h-6V7h6z"/></svg>        <div class="banner-side-item-detail">
          <h5 ><a href="{{route('client.post.hidden_post')}}" class="banner-side-item-detail-login">Bài viết đã ẩn</a></h5>
          <hr />
          <p>Danh sách bài viết đã ẩn</p>
        </div>
      </div>

      @endif

      
      <div class="banner-side-item">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.2em"
            height="1.2em"
            viewBox="0 0 24 24"
          >
            <g
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            >
              <path
                d="M4 18V8.5A4.5 4.5 0 0 1 8.5 4h7A4.5 4.5 0 0 1 20 8.5v7a4.5 4.5 0 0 1-4.5 4.5H6a2 2 0 0 1-2-2"
              />
              <path
                d="M8 12h3.5a2 2 0 1 1 0 4H8V9a1 1 0 0 1 1-1h1.5a2 2 0 1 1 0 4H9m7 4h.01"
              />
            </g>
        </svg>
        <div class="banner-side-item-detail">
          <h5> <a href="#to-infor" class="banner-side-item-detail-login">Đặt dịch vụ</a></h5>
          <hr />
          <p>Để lại thông tin liên lạc</p>
        </div>
      </div>
      <div class="banner-side-item">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1.2em"
          height="1.2em"
          viewBox="0 0 24 24"
        >
          <path
            fill="currentColor"
            d="M19 19H5V5h14m0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5.04 9.29l-2.75 3.54l-1.96-2.36L6.5 17h11z"
          />
        </svg>
        <div class="banner-side-item-detail">
          <h5> <a href="#to-images" class="banner-side-item-detail-login">Hình ảnh</a></h5>
          <hr />
          <p>Khoảnh khắc tại Đền Ông Hoàng Mười</p>
        </div>
      </div>
      <div
        class="banner-side-item"
        id="scroll-to-top"
        title="Bấm để cuộn lên đầu trang"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1.2em"
          height="1.2em"
          viewBox="0 0 48 48"
          {...$$props}
        >
          <path
            fill="currentColor"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="4"
            d="M5 24L24 6l19 18H31v18H17V24z"
          />
        </svg>
      </div>
    </div>
    {{-- end banner side --}}

    {{-- login form --}}
    
    <div class="authenticate-form" id="form-container" style="display: none">
        <div class="authenticate-form-inner">
          <div class="authenticate-form-inner-cancel">
            <button id="authenticate-form-inner-cancel" >
              <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 16 16"><path fill="currentColor" d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94z"/></svg>
            </button>
          </div>
            <div class="authenticate-form-inner-tabs">
                <button id="shared-button-form-login" class="active">Chuyển sang trang ĐĂNG KÝ</button>
              
            </div>
            <form id="shared-form-login" action="{{route('login')}}" class="authenticate-form-inner-form login" method="POST">
              @csrf
              <div class="authenticate-form-inner-form-element">
                <p>Email</p>
                <input type="email" required name="email">
              </div>
              <div class="authenticate-form-inner-form-element">
                <p>Mật khẩu</p>
                <input type="password" required name="password">
              </div>
              <div class="authenticate-form-inner-form-element">
                <input type="checkbox"  name="remember"
                id="remember">
                <label for="remember">Ghi nhớ đăng nhập</label>
                
              </div>
              <div class="authenticate-form-inner-form-element">
                
                <a href="">Quên mật khẩu?</a>
                
              </div>
                <button type="submit">Đăng nhập</button>
            </form>
            <form id="shared-form-register"  action="{{route('register')}}" class="authenticate-form-inner-form register hidden-form" method="POST">
              @csrf
              <div class="authenticate-form-inner-form-element">
                <p>Email</p>
                <input type="email" required name="email">
              </div>
              <div class="authenticate-form-inner-form-element">
                <p>Tên</p>
                <input type="text" required name="name">
              </div>
              <div class="authenticate-form-inner-form-element">
                <p>Mật khẩu *Tối thiểu 8 ký tự</p>
                <input type="password" required name="password">
              </div>
              <div class="authenticate-form-inner-form-element">
                <p>Bio</p>
                <textarea type="text"  name="bio"></textarea>
              </div>
              
              <div class="authenticate-form-inner-form-element">
                
                <a href="">Quên mật khẩu?</a>
                
              </div>
                <button type="submit">Đăng ký</button>
            </form>
        </div>
    </div>
    <script src="/shared-assets/js/shared-form.js"></script>
    {{-- end login form --}}
   
    @livewire('header')
    @php
      $display_banner_var = isset($display_banner) ? $display_banner : true
    @endphp
    <div class="header-banner" style="display:{{$display_banner_var ? "block" : "none"}}" >
      
      <img
        src="/onghoangmuoi-assets/img/bia web anh hong.png"
        width="100%"
        alt=""
      />
    </div>
  </header>