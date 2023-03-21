<?php
$page = 'feed';
?>
@extends('mainlayout')

@section('content')
    <div class="col-lg-8">


        <?php
        //GET FEEDS
        // if(isset($_GET['offset'])){
        //     $pageFeed = $_GET['offset'];
        // }else{
        //     $pageFeed = 2;
        // }
        // $limit = $pageFeed;
        // $offset = 0;
        // $feeds = DB::table('feeds')->orderBy('ID', 'desc')->skip($offset)->take($limit)->get();
        //CEHCK IF FEEDS ARE AVAILABLE
        $feeds = DB::table('feeds')->orderBy('ID', 'desc')->get();
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
        <style>
            pre {
                height: 100px;
            }
        </style>

        <div class="card mb-3 shadow fade-hover  bounce" id="<?php echo $feedID; ?>">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="d-flex">
                            {{-- <div class="avatar avatar-2xl status-online"> --}}
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
                    <div class="replies-count mx-3" onclick="window.location.href = 'devit/<?php echo $feedID; ?>';">
                        <i class="fas fa-comments"></i> <?php echo $feedComments; ?> <small style="font-size:8px;">Comments</small>
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


        {{-- <a href="?offset=10">Load More</a> --}}

    </div>


    <div class="col-lg-4" id="sideholder">
        <div class="card  mb-3 mb-lg-0">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Top 10 Trending Devits</h5>
            </div>
            <div class="card-body fs--1">
                <?php
                //GET TRENDING DEVITS WITH HIGHEST VIEWS AND COMMENTS AND DEVITUPS
                $trendingDevits = DB::table('feeds')->orderBy('devitup', 'desc')->orderBy('devitdown', 'desc')->orderBy('views', 'desc')->orderBy('comment', 'desc')->limit(10)->get();
                foreach ($trendingDevits as $trendingDevit) {
                    $trendingDevitID = $trendingDevit->feedid;
                    $trendingDevitTitle = $trendingDevit->title;
                    $trendingDevitUp = $trendingDevit->devitup;
                    $trendingDevitDown = $trendingDevit->devitdown;
                    $trendingDevitViews = $trendingDevit->views;
                    $trendingDevitComments = $trendingDevit->comment;
                ?>
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-1 align-self-center ms-2">
                        <p class="mb-1 lh-1"
                            style="-webkit-line-clamp: 2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical;">
                            <a class="fw-semi-bold" href="devit/<?php echo $trendingDevitID; ?>"><?php echo $trendingDevitTitle; ?></a>
                        </p>
                        <p class="mb-0 fs--1">Trending</p>
                    </div>
                    <hr />
                </div>
                <div class="vote-count text-success mx-3">
                    <i class="fas fa-circle-up"></i> <?php echo $trendingDevitUp; ?> <small style="font-size:10px;">Devitups</small>
                    <i class="fas fa-circle-down"></i> <?php echo $trendingDevitDown; ?> <small
                        style="font-size:10px;">Devitdowns</small>
                    <br>
                    <i class="fas fa-eye"></i> <?php echo $trendingDevitViews; ?> <small style="font-size:10px;">Views</small>
                    <i class="fas fa-comments"></i> <?php echo $trendingDevitComments; ?> <small style="font-size:10px;">Comments</small>
                </div>
                <hr />
                <?php } ?>

            </div>
        </div>
    </div>

    </div>

    <script>
        function devitUpDown(divitype, devitid, userKdfId) {
            //UPDATE DEVIT WITH DEVUP USING AJAX
            if (userKdfId == '') {
                var snackbarbtn = document.getElementById("snackbar");
                snackbarbtn.className = "show";
                snackbarbtn.innerHTML = "Please login to devitup or devitdown";
                setTimeout(function() {
                    snackbarbtn.className = snackbarbtn.className.replace("show", "");
                }, 3000);
            } else {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', '/api/devitprosessor', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Do something with the response
                        var jsonData = JSON.parse(xhr.responseText);
                        //GET STATUS
                        var status = jsonData.status;

                        var divitype = jsonData.divitype;
                        if (status == "success") {
                            if (divitype == 'divitup') {
                                var audio = new Audio('/assets/sounds/devup.mp3');
                                //REDEUCE VOLUME
                            } else if (divitype == 'divitdown') {
                                var audio = new Audio('/assets/sounds/devdown.mp3');
                            }
                            audio.volume = 0.2;
                            audio.play();

                        }
                        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                        // Reload the page
                        location.reload();

                        // Set the scroll position to the previously saved value after the page has finished reloading
                        window.onload = function() {
                            window.scrollTo(0, scrollPosition);
                        };
                    }
                };
                let data = {
                    devitid: devitid,
                    userKdfId: userKdfId,
                    divitype: divitype
                };
                let payload = JSON.stringify(data);
                xhr.send(payload);
            }
        }
    </script>
@endsection
