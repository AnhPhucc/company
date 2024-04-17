<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="top-section">
        <!-- Logo và Banner -->
        <div class="header-logo">
          <div class="logo">
            <img
            src="./images/1.png"
              alt="Logo"
            />
          </div>

          <div class="banner">
            <img
              src="./images/banner.png"
              alt=""
            />
          </div>
        </div>

        <div class="bottom-section">
          <!-- Menu -->
          <nav>
            <ul>
              <li><a href="{{ route('home') }}">Trang chủ</a></li>
              <li><a href="#">Dự Án</a></li>
              <li><a href="#">Tuyển dụng</a></li>
              <li><a href="#">Liên Hệ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="danh_muc">
        <div class="">Danh mục A</div>
        <div class="">    
        @yield('content')
        </div>
     </div>
      
      <div class="tom_tat">Tóm tắt bài viết 1</div>
      <div class="logo_dt">
        <div class="">
          <img
          src="./images/2.png"
            alt=""
          />
        </div>
        <div class="">
          <img
          src="./images/3.png"
            alt=""
          />
        </div>
        <div class="">
          <img
            src="./images/4.png"
            alt=""
          />
        </div>
      </div>
    </main>