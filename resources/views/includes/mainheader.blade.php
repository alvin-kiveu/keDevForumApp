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
    <meta property="og:image" content="https://kedevforum.com/assets/img/newKedev.png">
    <link rel="canonical" href="https://kedevforum.com/" />
    <?php
    // CREATE KEY WORGD AND DESCRIPTION FOR SEO ACCORDING TO PAGE
    if (isset($page)) {
        if ($page == 'feed') {
            $description = 'Post on kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, post';
        } elseif ($page == 'about') {
            $description = 'About kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, about';
        } elseif ($page == 'contact') {
            $description = 'Contact kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, contact';
        } elseif ($page == 'privacy') {
            $description = 'Privacy kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, privacy';
        } elseif ($page == 'terms') {
            $description = 'Terms kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev
                            , forum, community, developers, programmers, knowledge, experience, terms';
        } elseif ($page == 'devitview') {
            $subdec = $feed->content;
            $subdec = substr($subdec, 0, 50);
            $description = $subdec;
            $keywords = $feed->title;
        } elseif ($page == 'profileview') {
            $keywords = $user->fulnames;
            $description = "View $user->fulnames profile on kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.";
        } else {
            $description = 'kedevforum is a community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience';
        }
    } else {
        $description = 'kedevforum is a community of developers and programmers who share their knowledge and experience with each other.';
        $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience';
    }
    ?>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
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
    <link rel="stylesheet" href="/assets/css/appcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/589a5b1ebd.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="/assets/css/snippetheme.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{-- CKEDITOR --}}

    <style>
        img[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .feedsocials {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-color: #2C3539;
            border-top-width: 1px;
            border-top-style: solid;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-bottom-color: #2C3539;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            color: #fff;
            font-weight: 600;
            border-radius: 4px;
        }

        .feedsocials i {
            font-size: 16px;
        }

        .feedsocials small {
            font-size: 20px;
        }

        .feedsocials p {
            font-size: 10px;

        }

        .feedsocials .vote-count {
            background-color: rgb(255, 255, 255);
            color: #000;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 110px;
            height: 35px;
            border: 1px solid rgb(30, 29, 28);
            padding-bootom: 30px;
        }

        .feedsocials .replies-count {
            background-color: rgb(255, 255, 255);
            color: #000;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 110px;
            height: 35px;
            border: 1px solid rgb(30, 29, 28);
            padding-bootom: 30px;
        }

        .feedsocials .views-count {
            background-color: rgb(255, 255, 255);
            color: #000;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            width: 110px;
            height: 35px;
            border: 1px solid rgb(30, 29, 28);
            padding-bootom: 30px;
        }

        .feedsocials .vote-count:hover {
            background-color: rgb(30, 29, 28);
            color: #ffffff;
            border-radius: 10px;
        }

        .feedsocials .replies-count:hover {
            background-color: rgb(30, 29, 28);
            color: #ffffff;
            border-radius: 10px;
        }

        .feedsocials .views-count:hover {
            background-color: rgb(30, 29, 28);
            color: #ffffff;
            border-radius: 10px;
        }

        .fa-regular {
            font-size: 15px;
        }
        #explorecard .card{
            margin-bottom: 10%;
        }

        #explorecard img{
            height: 200px;
            object-fit: contain;
        }

        @media only screen and (max-width: 600px) {
            .contentcomment .cke_widget_wrapper{
              width: 300px;
            }
            #infodata {
                display: none;
            }

            .feedsocials {
                padding: 5px;
                justify-content: center;
            }

            .feedsocials i {
                font-size: 15px;
                padding-right: 5px;
            }
        }
    </style>
</head>

<body>

    <body>

        <div id="snackbar"></div>

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
                                    $Deviters = $user->Deviters;
                                    $Devees = $user->Devees;
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
                                        <div class="d-flex align-items-center text-secondary">
                                            <div class="d-flex">
                                                <span class="fa-solid fa-user-group fs--1 me-1 me-lg-1 me-xl-1"></span>
                                                <h6 class="d-inline-block mb-0" style="color:white; font-size:10px;">
                                                    <?php echo $Deviters; ?><span
                                                        class="fw-semi-bold ms-1 me-4">Deviters</span></h6>
                                            </div>
                                            <div class="d-flex">
                                                <span class="fa-solid fa-user-check fs--1 me-2 me-lg-1 me-xl-1"></span>
                                                <h6 style="color:white; font-size:10px;"
                                                    class="d-block d-xl-inline-block mb-0"><?php echo $Devees; ?><span
                                                        class="fw-semi-bold ms-1">Deviting</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php } ?>
                        <div id="navbarNav">

                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <hr />
                                <div class="row">
                                    <a href="/" class="col-6">
                                        <li class="nav-item active">
                                            <i class="fas fa-rss-square"></i>
                                            <div class="nav-link">Devits</div>
                                        </li>
                                    </a>
                                    <?php
                                if (session()->has('userEmailLogin')) {
                                ?>

                                    <a href="/postfeed" class="col-6">
                                        <li class="nav-item">
                                            <i class="fas fa-plus-circle"></i>
                                            <div class="nav-link">Post Devit</div>
                                        </li>
                                    </a>
                                    <a href="/notifications" class="col-6">
                                        <li class="nav-item">
                                            <?php
                                            //COUNT NUMBER OF UNREAD NOTIFICATIONS
                                            $userDevKdfId = session()->get('userDevKdfId');
                                            $countNotifications = DB::table('notifications')
                                                ->where('usernotified', $userDevKdfId)
                                                ->where('notificationstatus', 'unread')
                                                ->count();
                                            //ECHO  COUNT
                                            if ($countNotifications > 0) {
                                                echo '<span id="newnotification">' . $countNotifications . '</span>';
                                            }
                                            ?>
                                            <i class="fas fa-bell"></i>
                                            <div class="nav-link">Notification</div>
                                        </li>
                                    </a>
                                    <a href="/explore" class="col-6">
                                        <li class="nav-item">
                                            <i class="fa-solid fa-compass"></i>
                                            <div class="nav-link">Explore</div>
                                        </li>
                                    </a>
                                    <a href="#" onclick="commitingSoon()" class="col-6">
                                        <li class="nav-item">
                                            <i class="fas fa-users"></i>
                                            <div class="nav-link">Devit Zones</div>
                                        </li>
                                    </a>
                                    <a href="#" onclick="commitingSoon()" class="col-6">
                                        <li class="nav-item">
                                            <i class="fa-regular fa-square-plus"></i>
                                            <div class="nav-link">Create Zones</div>
                                        </li>
                                    </a>

                                    <a href="/profile" class="col-6">
                                        <li class="nav-item">
                                            <i class="fas fa-user"></i>
                                            <div class="nav-link">Profile</div>
                                        </li>
                                    </a>
                                    {{-- <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-question-circle"></i>
                                                <div class="nav-link">FAQ</div>
                                            </li>
                                        </a> --}}
                                    {{-- <a href="#" class="col-6">
                                            <li class="nav-item">
                                                <i class="fas fa-info-circle"></i>
                                                <div class="nav-link">Terms</div>
                                            </li>
                                        </a> --}}
                                    <a href="/logout" class="col-6">
                                        <li class="nav-item active">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <div class="nav-link">logout</div>
                                        </li>
                                    </a>

                                    <?php
                                } else {
                                ?>
                                    <a href="/explore" class="col-6">
                                        <li class="nav-item">
                                            <i class="fa-solid fa-compass"></i>
                                            <div class="nav-link">Explore</div>
                                        </li>
                                    </a>
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
                                    {{-- <a href="#" class="col-6">
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
                                    </a> --}}

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
                        <div class="divideline"></div>
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
                            <?php
                            if (session()->has('userEmailLogin')) {
                                $email = session()->get('userEmailLogin');
                                //GET USER INFO
                                $userDetails = DB::table('members')
                                    ->where('email', $email)
                                    ->get();
                                foreach ($userDetails as $user) {
                                    $profilepic = $user->profilepic;
                                }
                                //CHECK IF PROFILE IS EMPTY
                                if ($profilepic == '') {
                                    $profilephoto = '/assets/img/user.png';
                                } else {
                                    $profilephoto = '/images/userprofile/' . $user->profilepic;
                                }
                            } else {
                                $profilephoto = '/assets/img/user.png';
                            }
                            ?>
                            <img src="<?php echo $profilephoto; ?>" alt="kedevforum">
                        </div>
                    </div>

                    <div class="container-fluid mt-6">
                        <div class="row">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
