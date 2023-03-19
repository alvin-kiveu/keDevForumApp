<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta data-react-helmet="true" name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="description" content="keDevForum">
    <meta name="keywords" content="keDevForum">
    <meta name="author" content="keDevForum">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="keDevForum">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="keDevForum">
    <meta name="msapplication-TileColor" content="#0000000">
    <meta name="msapplication-TileImage" content="/assets/img/newKedev.png">
    <meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/newKedev.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/newKedev.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/newKedev.png">
    <link rel="manifest" href="/assets/img/newKedev.png">
    <link rel="mask-icon" href="/assets/img/newKedev.png" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/img/newKedev.png">
    <title>keDevForum</title>
    <meta name="theme-color" content="#000000">
    <script src="/vendors/simplebar/simplebar.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    {{-- INJECTINGIG MY THEME --}}
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="stylesheet" href="/assets/css/mainmain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/589a5b1ebd.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    
</head>

<body>

    <body>



        <div class="container-fluid">
            <div class="row">

                <div class="col-3  bg-primary" id="main">
                    <nav class="navbar navbar-expand-lg  bg-primary navbar-glass display-block"
                        data-double-top-nav="data-double-top-nav">
                        <div class="cancel" id='cancel'>
                            <i class="fas fa-times"></i>
                        </div>

                        <div class="navbar-brand text-secondary font-weight-bold">
                            {{-- ke<span class="text-white">Dev</span>Forum --}}
                            <img src="/assets/img/newKedev.png" alt="kedevforum">
                        </div>
                        <hr />
                        {{-- CREATE PROFIE --}}
                        <div class="row">
                            <?php
                            if (session()->has('userEmailLogin')) {
                                //GET USER DETAILS
                                $userEmail = session()->get('userEmailLogin');
                                $userDetails = DB::table('members')->where('email', $userEmail)->get();
                                foreach ($userDetails as $user) {
                                    $userFullName = $user->fulnames;
                                    $userUsername = $user->username;
                                    $email = $user->email;
                                }
                            ?>
                            <div class="col-12">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12" id="userdetails">
                                            <p class="text-secondary"><span style="color:white;">Username : </span>
                                                <?php echo $userUsername; ?></h6>
                                            <p class="text-secondary"><span style="color:white;">Fullname :
                                                </span><?php echo $userFullName; ?></p>
                                            <p class="text-secondary"><span style="color:white;">Email :
                                                </span><?php echo $email; ?></p>
                                         
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php } ?>
                            <div  id="navbarNav">

                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <hr />
                                    <div class="row">
                                        <?php
                                if (session()->has('userEmailLogin')) {
                                ?>
                                        <a href="/" class="col-6">
                                            <li class="nav-item active">
                                                <i class="fas fa-rss-square"></i>
                                                <div class="nav-link">Devits</div>
                                            </li>
                                        </a>
                                        <a href="/postfeed" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-plus-circle"></i>
                                                <div class="nav-link">Post Devit</div>
                                            </li>
                                        </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-users"></i>
                                                <div class="nav-link">Devit Zones</div>
                                            </li>
                                        </a>
                                        <a href="/postfeed" class="col-6">
                                            <li class="nav-item">
                                              <i class="fas fa-bell"></i>
                                              <div class="nav-link">Notification</div>
                                            </li>
                                          </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-user"></i>
                                                <div class="nav-link">Profile</div>
                                            </li>
                                        </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-question-circle"></i>
                                                <div class="nav-link">FAQ</div>
                                            </li>
                                        </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-info-circle"></i>
                                                <div class="nav-link">Terms</div>
                                            </li>
                                        </a>
                                        <a href="/logout" class="col-6">
                                            <li class="nav-item active">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <div class="nav-link">logout</div>
                                            </li>
                                        </a>

                                        <?php
                                } else {
                                ?>

                                        <a href="/login" class="col-6">
                                            <li class="nav-item active">
                                                <i class="fas fa-sign-in-alt"></i>
                                                <div class="nav-link">Login</div>
                                            </li>
                                        </a>
                                        <a href="/register" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-sign-in-alt"></i>
                                                <div class="nav-link">Register</div>
                                            </li>
                                        </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-question-circle"></i>
                                                <div class="nav-link">FAQ</div>
                                            </li>
                                        </a>
                                        <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-info-circle"></i>
                                                <div class="nav-link">Terms</div>
                                            </li>
                                        </a>

                                        <?php
                                }
                                ?>
                                    </div>
                                </ul>
                            </div>


                    </nav>
                </div>



                <div class="col-12" id="maincontent">
                    <div class="container-fluid" id="topbar">
                        <div class="nav-btn" id="bar">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class='tital'>
                            <h1>keDev<span style="color:#04893d;">Forum</h1>
                        </div>
                        {{-- <div class="search">
                            <form action="/search" method="POST">
                                @csrf
                                <input type="text" name="search" placeholder="Search" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div> --}}
                        <div class="logo">
                            <img src="/assets/img/newKedev.png" alt="kedevforum">
                        </div>
                    </div>
               
                <div class="container-fluid mt-6">
                    <div class="row">
