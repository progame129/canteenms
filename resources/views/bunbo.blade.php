<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Menu</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="{{ asset('theme/asset/css/style.css')}}">
<script src="{{ asset('theme/asset/js/jquery.js')}}"></script>
<script src="{{ asset('theme/asset/js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{ asset('theme/asset/js/superfish.js')}}"></script>
<script src="{{ asset('theme/asset/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('theme/asset/js/sForm.js')}}"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <header>
      

    <div class="container_12">
      <div class="grid_12">
        <h1><a href="index.html"><img src="{{asset('theme/asset/images/logo.png')}}" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li class="with_ul"><a href="{{ route('home-page') }}">Home</a></li>
              <li class="with_ul"><a href="{{ route('about-page') }}">About Us</a></li>
              <li class="current"><a href="{{ route('menu-page') }}">Menu</a></li>
              <li><a href="{{ route('new-page') }}">News</a></li>
              <li><a href="{{ route('contact-page') }}">Contacts</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <div class="content">
    <div class="container_12">
      <div class="grid_6">
        <h2>Our Menu</h2>
        <p class="col2 inn1"><a href="#">
        
        <div class="menu">
          <div class="grid_3 alpha"> <img src="{{asset('theme/asset/images/Bun bo.jpg')}}" style="width:209px;height:152px;" alt="" class="img_inner">
            <h3><a href="#">Bún Bò huế</a></h3>
          </div>
          
        </div>
        <div class="clear"></div>
      </div>
     
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"><a href="https://www.facebook.com/hung.daton"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li class="with_ul"><a href="{{ route('home-page') }}">Home</a></li>
              <li class="with_ul"><a href="{{ route('about-page') }}">About Us</a></li>
              <li class="current"><a href="{{ route('menu-page') }}">Menu</a></li>
              <li><a href="{{ route('new-page') }}">News</a></li>
              <li><a href="{{ route('contact-page') }}">Contacts</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12"> Gourmet Traditional Restaurant &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="https://www.facebook.com/hung.daton/">Hung Nguyen</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>