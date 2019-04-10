<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="<?php echo e(asset('theme/asset/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('theme/asset/css/form.css')); ?>">
<script src="<?php echo e(asset('theme/asset/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('theme/asset/js/jquery-migrate-1.1.1.js')); ?>"></script>
<script src="<?php echo e(asset('theme/asset/js/superfish.js')); ?>"></script>
<script src="<?php echo e(asset('theme/asset/js/jquery.easing.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('theme/asset/js/sForm.js')); ?>"></script>
<script src="<?php echo e(asset('theme/asset/js/Forms.js')); ?>"></script>
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
        <h1><a href="<?php echo e(route('home-page')); ?>"><img src="<?php echo e(asset('theme/asset/images/logo.png')); ?>" alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
             <li class="with_ul"><a href="<?php echo e(route('home-page')); ?>">Home</a></li>
              <li class="with_ul"><a href="<?php echo e(route('about-page')); ?>">About Us</a>
              <li class="with_ul"><a href="<?php echo e(route('menu-page')); ?>">Menu</a></li>
              
              <li class="current"><a href="<?php echo e(route('contact-page')); ?>">Contacts</a></li>
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
        <h2>Find Us</h2>
        <div class="map">
          <figure class="img_inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.095307416725!2d105.77955771493261!3d21.028872185998377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMA!5e0!3m2!1svi!2s!4v1537501658867"></iframe>
          </figure>
          <address>
          <dl>
            <dt>
              <p>Số 8, Tôn Thất Thuyết, Mỹ Đình, Từ Liêm</p>
            </dt>
            <dd><span>Hotline:</span>(024) 6 656 5652</dd>
            
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_5 prefix_1">
        <h2>Contact Us</h2>
        <form id="form" action="#">
          <div class="success_wrapper">
            <div class="success">Contact form submitted!<br>
              <strong>We will be in touch soon.</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="email">
              <input type="text" value="E-mail:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="phone">
              <input type="tel" value="Phone:">
              <br class="clear">
              <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
            <label class="message">
              <textarea>Message:</textarea>
              <br class="clear">
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">clear</a><a data-type="submit" class="btn">send</a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li class="with_ul"><a href="<?php echo e(route('home-page')); ?>">Home</a></li>
              <li class="with_ul"><a href="<?php echo e(route('about-page')); ?>">About Us</a></li>
              <li class="current"><a href="<?php echo e(route('menu-page')); ?>">Menu</a></li>
              
              <li><a href="<?php echo e(route('contact-page')); ?>">Contacts</a></li>
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
    <div class="grid_12"> Canteenms &copy; 2019 | <a href="#">Privacy Policy</a> | Design by: <a href="https://www.facebook.com/hung.daton/">Hung Nguyen</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>
<?php /* C:\xampp\htdocs\canteenms\resources\views/contacts.blade.php */ ?>