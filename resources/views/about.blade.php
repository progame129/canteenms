<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | About Us</title>
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
    $('.carousel2').carouFredSel({
        auto: false,
        prev: '.prev1',
        next: '.next1',
        width: 410,
        items: {
            visible: {
                min: 1,
                max: 1
            },
            height: 'auto',
            width: 410,
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
              <li class="current"><a href="{{ route('about-page') }}">About Us</a>
              <li class="with_ul"><a href="{{ route('menu-page') }}">Menu</a>
              </li>
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
      <div class="grid_5">
        <h2>About Us</h2>
        <img src="{{asset('theme/asset/images/page2_img1.jpg')}}" alt="" class="img_inner">
        <p class="col1">Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget. </p>
        <p>Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget. </p>
        Donec eu felis purus, iaculis fringilla ipsum. Integer non. nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus. <br>
        <a href="#" class="btn m1">More</a> </div>
      <div class="grid_5 prefix_2">
        <h2>Testimonials</h2>
        <ul class="carousel2">
          <li>
            <blockquote> <img src="images/page2_img2.png')}}" alt="">
              <div class="extra_wrapper">
                <div class="title">Sara &amp; Kevin <br>
                  Jonson</div>
              </div>
              <div class="clear"></div>
              <p class="col1"><a href="#">Euismod pellentesque in dui. Semper, enim eget eleifend faucibus, sem libero gravida erat, sit amet viverra dui nisl non nulla. Pellentesque in dui euismod. </a></p>
              <p>Curabitur felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio.  Aliquam consectetur. Fringilla ipsum. </p>
              <p>Ringilla ipsum. Donec et nibh non turpis pellentesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop pelle ntesque suscipit eget consectetur.</p>
            </blockquote>
          </li>
          <li>
            <blockquote> <img src="{{asset('theme/asset/images/page2_img2-1.png')}}" alt="">
              <div class="extra_wrapper">
                <div class="title">Moira &amp; Brett<br>
                  Clark</div>
              </div>
              <div class="clear"></div>
              <p class="col1">Pellentesque in dui euismod. Aliquam semper, enim eget eleifend faucibus, sem libero gravida erat, sit amet viverra dui nisl non nulla. Pellentesque in dui euismod nibh suscipi. </p>
              <p>Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringilla ipsum. Inte ger non nulla sem, eget volutpat augue. Curabitur in turpisju massa. Donec et nibh non turpis pellentesque suscipit eget vel odio.  Aliquam consectetur. Ghfgop Maecnas cursus frin.</p>
              <p>Curabitur in turpisju massa. Donec et nibh non turpis pellen tesque suscipit eget vel odio. Sed tempus orci tempus libero suscipit elementum. Aliquam consectetur. Ghfgop Maecnas cursus fringilla sagittis. Donec eu felis purus, iaculis fringi. ipsum. Integer non nulla sem, eget volutpat augue. Ghfgop Maecnas cursus fringilla sagittis.</p>
            </blockquote>
          </li>
        </ul>
        <a href="#" class="next1"></a> <a href="#" class="prev1"></a> </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator hor1"></div>
        <h2 class="head1">Our Best Chefs</h2>
      </div>
      <div class="clear"></div>
      <div class="chefs">
        <div class="grid_3"> <img src="{{asset('theme/asset/images/page2_img3.jpg')}}" alt="" class="img_inner">
          <p class="col1"><a href="#">Ann Franklin</a></p>
          Nulla pellentesque tempus quam nec porta. Donec nec lorem enim. Aenean velit velit, faucibus sed porta quis, gt er semper ac elit. Aliquam hendrerit mo lestie turpis condimentum tristique. Fty aliquam malesuada orci a massa yht. semper sed interdum arcu </div>
        <div class="grid_3"> <img src="{{asset('theme/asset/images/page2_img4.jpg')}}" alt="" class="img_inner">
          <p class="col1"><a href="#"> Milisa Dayemond</a></p>
          Lorem ipsum pellentesque tempus quam nec porta. Donec nec lorem enim. Aenean velit velit, faucibus sed porta quis, gt er semper ac elit. Aliquam hendrerit mo lestie turpis condimentum tristique. Fty aliquam malesuada orci a massa iaculis. Integer a diam a odio. </div>
        <div class="grid_3"> <img src="{{asset('theme/asset/images/page2_img5.jpg')}}" alt="" class="img_inner">
          <p class="col1"><a href="#">Liza Croft</a></p>
          Aenean velittempus quam nec porta. Donec nec lorem enim. Aenean velit velit, faucibus sed porta quis, gt er semper ac elit. Aliquam hendrerit mo lestie turpis condimentum tristique. Fty aliquam malesuada orci a massa yht. semper sed interdum. </div>
        <div class="grid_3"> <img src="{{asset('theme/asset/images/page2_img6.jpg')}}" alt="" class="img_inner">
          <p class="col1"><a href="#">Alan Soares</a></p>
          Donec necllentesque tempus quam nec porta. Donec nec lorem enim. Aenean velit velit, faucibus sed porta quis, gt er semper ac elit. Aliquam hendrerit mo lestie turpis condimentum tristique. Fty aliquam malesuada orci a massa yht. semper sed interdum. </div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li class="current"><a href="about-us.html">About Us</a></li>
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