<!DOCTYPE html>
<html>
<head>
  <title>AL AMIN | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="keywords" content="Interior Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="<?php echo base_url()?>_template/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url()?>_template/bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
</head>
<body style="background-image: url(<?php echo base_url();?>gambar/mie.jpg); ">
<!-- <div class="signupform"> -->
<!-- <h1> AL BAITUL AMIEN</h1> -->
  <div style="margin-top: 90px;" class="container">
    
    <div class="agile_info">
      <div class="w3l_form">
        <div class="left_grid_info">
          <h3>Selamat datang !</h3>
          <h4>Ini adalah Halaman login WEB Admin PPDB AL Baitul Amien Jember</h4>
          <p> </p>
          <ul class="social_section_1info">
            <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="w3_pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" class="w3_youtube"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="w3_info">
        <h2>Login Form</h2>
        <p>Khusus untuk admin</p>
            <form action="<?php echo base_url('login/ceklogin'); ?>" method="post">
            <div class="form-group">
              <span><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" placeholder="Username" required="" name="username"> 
            </div>
            <div class="form-group">
              <span><i class="fa fa-lock" aria-hidden="true"></i></span>
              <input type="Password" placeholder="Password" required="" name="password">
            </div>
                  
              <button class="btn btn-danger btn-block" type="submit">Login</button >                
          </form>
      </div>
      <div class="clear"></div>
      </div>
      
    </div>
    <div class="footer">

 <p>&copy;  Register form 2018. All Rights Reserved </a></p>
 </div>
  <!-- </div> -->
  </body>
</html>