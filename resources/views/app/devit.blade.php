<?php
 $feedID = $id;
$page = 'devitview';
$feed = DB::table('feeds')
        ->where('feedid', $feedID)
        ->first();
?>
@extends('mainlayout')

@section('content')
    <?php
    $userDevKdfId = session()->get('userDevKdfId');
    $feedViews = DB::table('devitviews')
        ->where('devitid', $feedID)
        ->count();
    if (session()->has('userEmailLogin')) {
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
    }
    $feedTitle = $feed->title;
    $feedContent = $feed->content;
    $feedTime = $feed->postedTime;
    $feedDevitup = $feed->devitup;
    $feedDevitdown = $feed->devitdown;
    $feedComments = $feed->comment;
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
                                <img class="rounded-circle" src="/assets/img/user.png" alt="" />
                            </div>
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1"><a class="fw-semi-bold"
                                        href="/dev/<?php echo $userUsername; ?>"><?php echo $userFirstName; ?></a></p>
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
                    <hr />
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

                </div>
                <hr />
                <!-- Comment container -->
                <div id="comment-container" class="mt-4">
                    <div class="row justify-content-between">
                        <div class="commentholder">
                            <?php
                        //GET COMMENTS
                        $comments = DB::table('comments')
                            ->where('devitid', $feedID)
                            ->orderBy('ID', 'desc')
                            ->get();
                        //CHECK IF COMMENTS EXIST
                        if ($comments) {
                            //LOOP THROUGH COMMENTS
                        foreach ($comments as $comment) {
                            $commentID = $comment->ID;
                            $commentDevitID = $comment->devitid;
                            $commentUserKdfId = $comment->userKdfId;
                            $commentContent = $comment->devitcomment;
                            $commentDate = $comment->commenttime;
                            //GET DATE POSTED
                            $date = DateTime::createFromFormat('Y-m-d H:i:s', $commentDate);
                            $feedPostedDate = $date->format('M d Y');
                            //GET HOW LONG AFTER POSTED
                            $date = new DateTime($commentDate);
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
                            $commentUser = DB::table('members')
                                ->where('devkdfid', $commentUserKdfId)
                                ->first();
                            $commentUserFirstName = $commentUser->fulnames;
                            $commentUserUsername = $commentUser->username;

                         ?>

                            <div class="bg-100 border-top p-3 p-sm-4">
                                <div class="d-flex align-items-start">
                                    <div class="avatar avatar-m status-online me-2"><img class="rounded-circle"
                                            src="/assets/img/user.png" alt="alt" /></div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center"><a
                                                class="fw-bold mb-0 text-decoration-none text-black"
                                                href="/dev/<?php echo $commentUserUsername; ?>"><?php echo $commentUserFirstName; ?></a><span
                                                class="text-600 fw-semi-bold fs--2 ms-2"><?php echo $elapsed; ?></span>
                                        </div>
                                        <p class="mb-0"><?php echo $commentContent; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } }else{ ?>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-1 align-self-center ms-2">
                                        <p class="mb-1 lh-1 fw-semi-bold">Comments</p>
                                        <p class="mb-0 fs--1">No comments yet</p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php
                        if (session()->has('userEmailLogin')) {
                        ?>
                        <div class="d-flexr">
                            <div class="flex-1">
                                <div class="mb-3 col-12">
                                    <textarea id="diviteditor" name="comment" class="form-control" placeholder="Type you comment here" rows="4"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <button type="button" onclick="addComment('<?php echo $feedID;
                                ?>','<?php echo $userDevKdfId = session()->get('userDevKdfId');
                                ?>')"
                                    class="btn btn-primary">Comment</button>
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>

                    <div class="d-flex">
                        <div class="flex-1">
                            <div class="mb-3 col-12">
                                <span class="text-600 fw-semi-bold fs--2 ms-2 text-danger">Login to comment</span>
                                <span class='text-dark fs--2'>Click <a href="/login" class="text-success">here</a> to
                                    login</span>
                            </div>
                            <div class="mb-3 col-12">
                                <textarea id="diviteditor" name="comment" class="form-control" placeholder="Type you comment here" rows="4"
                                    required disabled></textarea>
                            </div>
                            <div class="mb-3 col-12">
                                <button type="button" class="btn btn-primary" disabled>Comment</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>

    </div>
    <script>
        function devitUpDown(divitype, devitid, userKdfId) {
            //UPDATE DEVIT WITH DEVUP USING AJAX
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

        function addComment(devitid, userKdfId) {
            var doc = document.querySelector('.cke_wysiwyg_frame').contentDocument;
            var comment = doc.querySelector('body').innerHTML;
            let commentxhr = new XMLHttpRequest();
            commentxhr.open('POST', '/api/devitcomment', true);
            commentxhr.setRequestHeader('Content-Type', 'application/json');
            commentxhr.onreadystatechange = function() {
                if (commentxhr.readyState === 4 && commentxhr.status === 200) {
                    // Do something with the response
                    var jsonData = JSON.parse(commentxhr.responseText);
                    //GET STATUS
                    var status = jsonData.status;
                    if (status == "success") {
                        var audio = new Audio('/assets/sounds/notification.mp3');
                        //REDEUCE VOLUME
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
                devitcomment: comment
            };
            let payload = JSON.stringify(data);
            commentxhr.send(payload);
        }
    </script>
@endsection
