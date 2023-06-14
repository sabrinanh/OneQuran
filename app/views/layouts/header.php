<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Quran - <?=$data['judul']?></title>
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="<?=BASEURL?>/assets/css/style.css">
    
</head>
<body  >
    
    <!-- header  starts -->

    <header class="header">

        <a href="#" class="logo"><i class="fas fa-book"></i> OneQuran</a>

        <nav class="navbar">
            <a href="<?=BASEURL?>" class="hover-underline">home</a>
                <a href="<?=BASEURL?>" class="hover-underline">My Course</a>
            <a href="<?=BASEURL?>/#about" class="hover-underline">about</a>
            <a href="<?=BASEURL?>/course" class="hover-underline">courses</a>
            <a href="<?=BASEURL?>/teacher" class="hover-underline">teacher</a>
            <a href="<?=BASEURL?>/#review" class="hover-underline">review</a>
            <a href="<?=BASEURL?>/blog" class="hover-underline">blog</a>
            <a href="<?=BASEURL?>/#contact" class="hover-underline">contact</a>
        </nav>

        <div class="icons">
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <!-- login form -->

        <form action="" method="post" class="login-form">
            <h3>login form</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember">
                <label for="remember-me">remember me</label>
            </div>
            <div class="remember">
                <small style="color: blue; cursor: pointer;" id="register-btn">don't have acccount, register now</small>
            </div>
            <button type="submit" class="btn" name="submit-login">
                <span class="text text-1">login now</span>
                <span class="text text-2" aria-hidden="true">login now</span>
            </button>
        </form>
            

        <form action="" class="register-form">
            <h3>register form</h3>
            <input type="text" placeholder="enter your full name" class="box">
            <input type="number" placeholder="enter your phone number" class="box">
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            
            <a href="#" class="btn">
                <span class="text text-1" id="form-regis-submit">register now</span>
                <span class="text text-2" aria-hidden="true">register now</span>
            </a>
        </form>

    </header>

    <!-- header end -->