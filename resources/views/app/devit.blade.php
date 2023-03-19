@extends('mainlayout')

@section('content')
    <?php
    $feedID = $id;
    $userDevKdfId = session()->get('userDevKdfId');
    $feedViews = DB::table('devitviews')->where('devitid', $feedID)->count(); 
    $devit = DB::table('devitviews')
        ->where('devitid', $feedID)
        ->where('devkdfid', $userDevKdfId)
        ->first();
    
    if (!$devit) {
        DB::table('devitviews')->insert([
            'devitid' => $feedID,
            'devkdfid' => $userDevKdfId,
        ]);
    }
    
    $feed = DB::table('feeds')
        ->where('feedid', $feedID)
        ->first();
    $feedTitle = $feed->title;
    $feedContent = $feed->content;
    $feedTime = $feed->postedTime;
    $feedDevitup = $feed->devitup;
    $feedDevitdown = $feed->devitdown;
    $feedUseremail = $feed->email;
    //GET DATE POSTED
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $feedTime);
    $feedPostedDate = $date->format('M d Y');
    //GET HOW LONG AFTER POSTED
    $date = new DateTime($feedTime);
    $now = new DateTime();
    
    $diff = $now->diff($date);
    $elapsed = '';
    
    if ($diff->y > 0) {
        $elapsed = $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
    } elseif ($diff->m > 0) {
        $elapsed = $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
    } elseif ($diff->d > 0) {
        $elapsed = $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
    } elseif ($diff->h > 0) {
        $elapsed = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
    } elseif ($diff->i > 0) {
        $elapsed = $diff->i . ' min' . ($diff->i > 1 ? 's' : '') . ' ago';
    } else {
        $elapsed = 'just now';
    }
    //GET USER DETAILS
    $user = DB::table('members')
        ->where('email', $feedUseremail)
        ->first();
    $userFirstName = $user->fulnames;
    $userUsername = $user->username;
    ?>

    <div class="col-lg-12">
        <div class="card mb-3 shadow fade-hover">
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
                                        href="<?php echo $userUsername; ?>"><?php echo $userFirstName; ?></a></p>
                                <p class="mb-0 fs--1">by <?php echo $userUsername; ?> <?php echo $elapsed; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <hr />
                <div class="row justify-content-between md-10">
                    <div class="col">
                        <div class="d-flex">
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1 fw-semi-bold"><?php echo $feedTitle; ?></p>
                                <p class="mb-0 fs--1"><?php echo $feedContent; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="vote-count text-success mx-3" onclick="devitup('<?php echo $feedID; ?>')">
                            <i class="fas fa-circle-up"></i> <?php echo $feedDevitup; ?> <small
                                style="font-size:10px;">Devitups</small>
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
                </div>


                {{-- COMMENT CECTION --}}

                <div class="row justify-content-between">
                    <div class="col">
                        <div class="d-flex">
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1 fw-semi-bold">Comments</p>
                                <p class="mb-0 fs--1">No comments yet</p>
                            </div>
                        </div>
                    </div>
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
            window.location.href = "/devit/" + devitid;
        }

        function devitdown(devitid) {
            //CALL SOUND
            var audio = new Audio('/assets/sounds/devdown.mp3');
            //REDEUCE VOLUME
            audio.volume = 0.2;
            audio.play();
            window.location.href = "/devit/" + devitid;
        }
    </script>
@endsection
