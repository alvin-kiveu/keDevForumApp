@extends('mainlayout')

@section('content')
    <?php
    $userEmail = session()->get('userEmailLogin');
    $userDetails = DB::table('members')
        ->where('email', $userEmail)
        ->get();
    foreach ($userDetails as $user) {
        $username = $user->username;
    }
    //GET USER DATA FROM TABLE members
    $user = DB::table('members')
        ->where('username', $username)
        ->first();
    $userFirstName = $user->fulnames;
    $userUsername = $user->username;
    $userEmail = $user->email;
    $userDevter = $user->Deviters;
    $userDevees = $user->Devees;
    ?>
    <div class="container">
        <div class="row" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding:5%;">
            <div class="col-md-3">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="profile mr-3">
                        <?php
                        $email = session()->get('userEmailLogin');
                        
                        //GET USER INFO
                        $userDetails = DB::table('members')
                            ->where('email', $email)
                            ->get();
                        foreach ($userDetails as $user) {
                            $profilepic = $user->profilepic;
                        }
                        //CHECK IF PROFILE IS EMPTY
                        if ($profilepic == '' || $profilepic == null || $profilepic == ' ') {
                            $profilephoto = '/assets/img/user.png';
                        } else {
                            $profilephoto = '/images/userprofile/' . $profilepic;
                        }
                        ?>
                        <img src="<?php echo $profilephoto; ?>" width="100%" height="200px" alt="My Profile Picture"
                            class="rounded mb-2 img-thumbnail">
                    </div>
                    <form action="/changeaverter" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                        <button type="submit" name="submit" class="btn btn-primary text-secondary  d-block w-100 mt-3"><i
                                class="fas fa-pencil-alt"></i>
                            Change Profile</button>
                    </form>
                </div>
            </div>

            <div class="col-md-9">
                <p><span style="font-weight: 600;"> Name: </span> <?php echo $userFirstName; ?></p>
                <p><span style="font-weight: 600;">Username: </span><?php echo $userUsername; ?></p>
                <p><span style="font-weight: 600;">Email: </span> <?php echo $userEmail; ?></p>
                <div class="d-flex">
                    <div class="col-md-3 d-flex">
                        <span class="fa-solid fa-user-group fs--1 me-1 me-lg-1 me-xl-1"></span>
                        <p><?php echo $userDevter; ?> Deviters</p>
                    </div>
                    <div class="col-md-3 d-flex">
                        <span class="fa-solid fa-user-check fs--1 me-2 me-lg-1 me-xl-1"></span>
                        <p><?php echo $userDevees; ?> Deviting</p>
                    </div>
                </div>
            </div>

        </div>
        <hr />
        <div class="row">

            <?php
        //GET FEEDS WHERE EMAIL = $userEmail LIMIT 5
        $feeds = DB::table('feeds')
            ->where('email', $userEmail)
            ->orderBy('ID', 'desc')
            ->limit(5)
            ->get();
        //GET FEEDS
        // $feeds = DB::table('feeds')->orderBy('ID', 'desc')->get();
        //CEHCK IF FEEDS ARE AVAILABLE
        if (count($feeds) == 0) {
            echo '<div class="alert alert-danger">No Devits available , please try again later.</div>';
        }else{
        //ECHOS FEEDS TO THE PAGE
        foreach ($feeds as $feed) {
            $feedID = $feed->feedid;
            $feedTitle = $feed->title;
            $feedContent = $feed->content;
            $feedTime = $feed->postedTime;
            //COUNT VIEWS IN devitviews WHERE devitid = $feedID
            $feedViews = DB::table('devitviews')->where('devitid', $feedID)->count(); 
            $feedDevitup = $feed->devitup;
            $feedDevitdown = $feed->devitdown;
            $feedComments = $feed->comment;

            //GET DATE POSTED
            $date = DateTime::createFromFormat('Y-m-d H:i:s', $feedTime);
            $feedPostedDate = $date->format('M d Y');
            $feedUseremail = $feed->email;
            //GET HOW LONG AFTER POSTED
            $date = new DateTime($feedTime);
            $now = new DateTime();

            $diff = $now->diff($date);
            $elapsed = "";

            if ($diff->y > 0) {
                $elapsed = $diff->y . " year" . ($diff->y > 1 ? "s" : "") . " ago";
            } elseif ($diff->m > 0) {
                $elapsed = $diff->m . " month" . ($diff->m > 1 ? "s" : "") . " ago";
            } elseif ($diff->d > 0) {
                $elapsed = $diff->d . " day" . ($diff->d > 1 ? "s" : "") . " ago";
            } elseif ($diff->h > 0) {
                $elapsed = $diff->h . " hour" . ($diff->h > 1 ? "s" : "") . " ago";
            } elseif ($diff->i > 0) {
                $elapsed = $diff->i . " min" . ($diff->i > 1 ? "s" : "") . " ago";
            } else {
                $elapsed = "just now";
            }
            //GET USER DETAILS
            $user = DB::table('members')->where('email', $feedUseremail)->first();
            $userFirstName = $user->fulnames;
            $userUsername = $user->username;
           
        
        ?>

            <div class="card mb-3 shadow fade-hover  bounce" id="<?php echo $feedID; ?>">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="d-flex">
                                <div class="avatar avatar-2xl status">
                                    <?php
                                    $profilepic = $user->profilepic;
                                    //CHECK IF PROFILE IS EMPTY
                                    if ($profilepic == '' || $profilepic == null || $profilepic == ' ') {
                                        $profilephoto = '/assets/img/user.png';
                                    }else{
                                        $profilephoto = '/images/userprofile/'.$profilepic;
                                    }
                                    ?>
                                    <img class="rounded-circle" src="<?php echo $profilephoto; ?>" alt="" />
                                </div>
                                <div class="flex-1 align-self-center ms-2">
                                    <p class="mb-1 lh-1"><a class="fw-semi-bold"
                                            href="dev/<?php echo $userUsername; ?>"><?php echo $userFirstName; ?></a></p>
                                    <p class="mb-0 fs--1"><?php echo $elapsed; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div onclick="window.location.href = 'devit/<?php echo $feedID; ?>';">
                        <h5 class="card-title"
                            style="-webkit-line-clamp: 2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical;">
                            <?php echo $feedTitle; ?></h5>
                        <div class="card-text"
                            style="-webkit-line-clamp: 4; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical;">
                            <p><?php echo $feedContent; ?></p>
                            <a href="#" class="read-more-link" style="display: none;">Read More</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <?php
                        //CHECK IF USER HAS UPVOTED OR DOWNVOTED
                        $userDevKdfId = session()->get('userDevKdfId');
                        $checkDevitUp = DB::table('devitupdown')
                            ->where('devitid', $feedID)
                            ->where('userKdfId', $userDevKdfId)
                            ->where('devitype', 'divitup')
                            ->first();
                        if ($checkDevitUp) {
                            $devitUptext = 'text-success';
                        } else {
                            $devitUptext = 'text-dark';
                        }
                        $checkDevitDown = DB::table('devitupdown')
                            ->where('devitid', $feedID)
                            ->where('userKdfId', $userDevKdfId)
                            ->where('devitype', 'divitdown')
                            ->first();
                        if ($checkDevitDown) {
                            $devitDowntext = 'text-danger';
                        } else {
                            $devitDowntext = 'text-dark';
                        }
                        ?>
                        <div class="vote-count <?php echo $devitUptext; ?> mx-3"
                            onclick="devitUpDown('divitup','<?php echo $feedID; ?>','<?php echo $userDevKdfId = session()->get('userDevKdfId'); ?>')">
                            <i class="fas fa-circle-up"></i> <?php echo $feedDevitup; ?> <small
                                style="font-size:10px;">Devitups</small>
                        </div>
                        <div class="vote-count <?php echo $devitDowntext; ?> mx-3"
                            onclick="devitUpDown('divitdown','<?php echo $feedID; ?>','<?php echo $userDevKdfId = session()->get('userDevKdfId'); ?>')">
                            <i class="fas fa-circle-down"></i> <?php echo $feedDevitdown; ?> <small
                                style="font-size:10px;">Devitdowns</small>
                        </div>
                        <div class="views-count mx-3">
                            <i class="fas fa-eye"></i> <?php echo $feedViews; ?> <small style="font-size:8px;">Views</small>
                        </div>
                        <div class="replies-count mx-3">
                            <i class="fas fa-comments"></i> <?php echo $feedComments; ?> <small
                                style="font-size:8px;">Comments</small>
                        </div>
                    </div>
                    <p class="card-text">
                        <small class="text-muted">
                            <i class="fas fa-user mr-1"></i> devited by <?php echo $userUsername; ?> on
                            <i class="fas fa-calendar-alt mr-1"></i> <?php echo $feedPostedDate; ?>
                        </small>
                    </p>
                </div>
            </div>

            <?php }
    } ?>

        </div>
    </div>
@endsection
