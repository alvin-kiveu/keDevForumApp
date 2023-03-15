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
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/589a5b1ebd.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

</head>

<body>

    <body>

        <div class="container-fluid">
            <div class="row">

                <div class="col-2  bg-primary" id="main">
                    <nav class="navbar navbar-expand-lg  bg-primary navbar-glass display-block"
                        data-double-top-nav="data-double-top-nav">

                        <div class="navbar-brand text-secondary font-weight-bold">
                            {{-- ke<span class="text-white">Dev</span>Forum --}}
                            <img src="/assets/img/newKedev.png" alt="kedevforum">
                        </div>
                        <hr />
                        {{-- CREATE PROFIE --}}
                        <div class="row">
                            <div class="col-12">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="text-secondary font-weight-bold">Username</h6>
                                            <p class="text-secondary">Fullname</p>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr />
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <div class="row">

                                        <li class="nav-item active col-6">
                                            <a class="nav-link" href="/">Feeds</a>
                                        </li>
                                        <?php
                                if (session()->has('userEmailLogin')) {
                                ?>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="/postfeed">Post</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">Profile</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">Settings</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">FAQ</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">Terms</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">Privacy</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="#">Jobs</a>
                                        </li>
                                        <li class="nav-item active col-6">
                                            <a class="nav-link" href="/logout">logout</a>
                                        </li>
                                        <?php
                                } else {
                                ?>

                                        <li class="nav-item active col-6">
                                            <a class="nav-link" href="/login">Login</a>
                                        </li>
                                        <li class="nav-item col-6">
                                            <a class="nav-link" href="/register">Register</a>
                                        </li>
                                        <?php
                                }
                                ?>
                                    </div>
                                </ul>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                    </nav>
                </div>



                <div class="col-10">
                    <div class="container-fluid mt-6">
                        <div class="row">
