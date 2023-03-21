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
   <?php
   if (isset($page)) {
        if ($page == 'login') {
            $description = 'Login to kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, login';
        } elseif ($page == 'register') {
            $description = 'Register to kedevforum to get access to the community of developers and programmers who share their knowledge and experience with each other.';
            $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience, register';
        }
    }else{
        $description = 'kedevforum is a community of developers and programmers who share their knowledge and experience with each other.';
        $keywords = 'kedevforum, kedev, forum, community, developers, programmers, knowledge, experience';
    }
   ?>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
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
  </head>
  <body>

    