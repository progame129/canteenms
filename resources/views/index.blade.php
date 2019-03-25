<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="{{ asset('theme/asset/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('theme/asset/css/slider.css')}}">
<script src="{{asset('theme/asset/js/jquery.js')}}"></script>
<script src="{{asset('theme/asset/js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{asset('theme/asset/js/superfish.js')}}"></script>
<script src="{{asset('theme/asset/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('theme/asset/js/sForm.js')}}"></script>
<script src="{{asset('theme/asset/js/jquery.carouFredSel-6.1.0-packed.js')}}"></script>
<script src="{{asset('theme/asset/js/tms-0.4.1.js')}}"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<!--[if lt IE 9]>
<script src="/html5shiv.js"></script>
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
              <li class="current"><a href="{{ route('home-page') }}">Home</a></li>
              <li class="with_ul"><a href="{{ route('about-page') }}">About Us</a></li>
              <li class="with_ul"><a href="{{ route('menu-page') }}">Menu</a></li>
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
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="{{asset('theme/asset/images/slide.jpg')}}" alt="sdfsd"></li>
          <li><img src="{{asset('theme/asset/images/slide1.jpg')}}" alt=""></li>
          <li class="mb0"><img src="{{asset('theme/asset/images/slide2.jpg')}}" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
      <div class="grid_7">
        <h2>Welcome</h2>
        <div class="page1_block col1"> <img src="{{asset('theme/asset/images/welcome_img.png')}}" alt="">
          <div class="extra_wrapper">
            <p><span class="col2"><a href="#">Click here</a></span> for more info about this free website template created by TemplateMonster.com </p>
            Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. <br>
            <a href="#" class="btn">more</a> </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>Features</h2>
        <ul class="list">
          <li><a href="#">Unlimited consultations and/or planning</a></li>
          <li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
          <li><a href="#">Determine and stay within budget</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Assist with wedding scheme and design</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Best Choice</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="{{asset('theme/asset/images/page1_img1.jpg')}}" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="{{asset('theme/asset/images/page1_img2.jpg')}}" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="{{asset('theme/asset/images/page1_img3.jpg')}}" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="{{asset('theme/asset/images/page1_img4.jpg')}}" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="{{asset('theme/asset/images/page1_img3.jpg')}}" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="menu.html">Menu</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="news.html">News</a></li>
              <li><a href="contacts.html">Contacts</a></li>
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
    <div class="grid_12"> Gourmet Traditional Restaurant &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>