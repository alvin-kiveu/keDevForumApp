@extends('mainlayout')

@section('content')
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
    <div class="col-lg-8">


        <?php
        //GET FEEDS
        $feeds = DB::table('feeds')->orderBy('ID', 'desc')->get();
        //CEHCK IF FEEDS ARE AVAILABLE
        if (count($feeds) == 0) {
            echo '<div class="alert alert-danger">No feeds available , please try again later.</div>';
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
                            <div class="avatar avatar-2xl status-online">
                                <img class="rounded-circle" src="https://umeskiasoftwares.com/images/umeskia_s.png"
                                    alt="" />
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
                    <h5 class="card-title"><?php echo $feedTitle; ?></h5>
                    <div class="card-text" style="-webkit-line-clamp: 4; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical;">
                        <p><?php echo $feedContent; ?></p>
                        <a href="#" class="read-more-link" style="display: none;">Read More</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="vote-count text-success mx-3" onclick="devitup('<?php echo $feedID; ?>')">
                        <i class="fas fa-circle-up"></i> <?php echo $feedDevitup; ?> <small style="font-size:10px;">Devitups</small>
                    </div>
                    <div class="vote-count text-danger mx-3" onclick="devitdown('<?php echo $feedID; ?>')">
                        <i class="fas fa-circle-down"></i> <?php echo $feedDevitdown; ?> <small
                            style="font-size:10px;">Devitdowns</small>
                    </div>
                    <div class="views-count mx-3">
                        <i class="fas fa-eye"></i> <?php echo $feedViews; ?> <small style="font-size:10px;">Views</small>
                    </div>
                    <div class="replies-count mx-3">
                        <i class="fas fa-comments"></i> 0 <small style="font-size:10px;">Comments</small>
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



    <div class="col-lg-4" id="sideholder">
        <div class="card  mb-3 mb-lg-0">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Trending Devits</h5>
            </div>
            <div class="card-body fs--1">
                {{-- <div class="d-flex btn-reveal-trigger">

                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-0 mb-0"><a href="../events/event-detail.html">Newmarket Nights</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                        <p class="text-1000 mb-0">Time: 6:00AM</p>
                        <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge<div
                            class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>

                <div class="d-flex btn-reveal-trigger">

                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-0 mb-0"><a href="../events/event-detail.html">31st Night Celebration</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                        <p class="text-1000 mb-0">Time: 11:00PM</p>
                        <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York<div
                            class="border-bottom border-dashed my-3"></div>
                    </div>
                </div> --}}

            </div>
            <div class="card-footer bg-light p-0 border-top"><a class="btn btn-link d-block w-100"
                    href="../events/event-list.html">View All<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    </div>
    <script>
        function devitup(devitid) {
            //UPDATE DEVIT WITH DEVUP USING AJAX
            // const devit = {
            //     devitid: devitid
            // };
            // $.ajax({
            //     url: '/devit/devup',
            //     type: 'POST',
            //     data: devit,
            //     success: function (data) {
            //         alert(data);
            //     }
            // });
            //CALL SOUND
            var audio = new Audio('/assets/sounds/devup.mp3');
            //REDEUCE VOLUME
            audio.volume = 0.2;
            audio.play();
            window.location.href = "/#" + devitid;
        }

        function devitdown(devitid) {
            //CALL SOUND
            var audio = new Audio('/assets/sounds/devdown.mp3');
            //REDEUCE VOLUME
            audio.volume = 0.2;
            audio.play();
            window.location.href = "/#" + devitid;
        }
    </script>

@endsection
