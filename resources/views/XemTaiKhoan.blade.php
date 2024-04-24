
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Thông tin tài khoản</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#"><?php echo Session::get('name'); ?></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            
            <a class="btn btn-sm btn-danger" href="{{URL::to('/dangxuat')}}">Đăng xuất</a>
          </div>
        </div>
      </header>

      <!-- <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div> -->

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php echo Session::get('name'); ?> ơi, hãy xem lại những thông tin về bạn..</h1>
          <p class="lead my-3">Bạn có thể sửa chúng nếu bạn muốn</p>
          <p class="lead mb-0"><a href="{{URL::to('/suataikhoan')}}" class="text-white font-weight-bold">>> Đi đến form sửa >></a></p>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Đây là form chỉ xem</strong>
              <h3 class="mb-4">
                <a class="text-dark" href="#">Về bạn</a>
              </h3>
              <div class="mb-4">
                <strong>Họ và tên: </strong><p class="card-text mb-auto"><?php echo Session::get('name'); ?></p>
                <strong>E-mail: </strong><p class="card-text mb-auto"><?php echo Session::get('email'); ?></p>
                <strong>Mật khẩu: </strong><p class="card-text mb-auto">Đã ẩn</p>
              </div>
              <a href="{{URL::to('/suataikhoan')}}">Sửa thông tin của bạn</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div> -->
      </div>
    </div>

  

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2024 - Trường Đại học Công Thương</small>
        </div>
        <div class="col-6 col-md">
          <h5>Các tính năng</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Xác thực người dùng</a></li>
            <li><a class="text-muted" href="#">Xem lịch đặt xe</a></li>
            <li><a class="text-muted" href="#">Đặt xe và xác thực email</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Công nghệ sử dụng</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Laravel (PHP)</a></li>
            <li><a class="text-muted" href="#">MySQL</a></li>
            <li><a class="text-muted" href="#">Bootstrap</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Giới thiệu</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Nhóm 6</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
