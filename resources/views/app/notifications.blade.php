@extends('mainlayout')

@section('content')
<?php
//UPDATE NOTIFICATION STATUS
DB::table('notifications')
    ->where('usernotified', session()->get('userDevKdfId'))
    ->update(['notificationstatus' => 'read']);
?>
    <div class="container">
        <h2 class="mb-5">Notifications</h2>
        <div class="row">
            <div class="mx-auto mx-lg-n6 mb-5 border-bottom border-300">

                <?php 
                //GET NOTIFICATIONS
                $notifications = DB::table('notifications')
                    ->where('usernotified', session()->get('userDevKdfId'))
                    ->orderBy('ID', 'desc')
                    ->get();
                foreach ($notifications as $notification) {
                    $notificationUserNotifer = $notification->usernotifer;
                    //GET NOTFER INFO
                    $user = DB::table('members')
                        ->where('devkdfid', $notificationUserNotifer)
                        ->first();
                    $userUsername = $user->username;
                    $notificationType = $notification->notificatointype;
                    $notificationMessage = $notification->notificationmessage;
                    $notificationTime = $notification->notificationtime;
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $notificationTime);
                    $notificationDate = $date->format('M d Y');
                    //GET HOW LONG AFTER POSTED
                    $date = new DateTime($notificationTime);
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
                ?>

                <div 
                    class="d-flex align-items-center justify-content-between py-3 border-300 px-lg-6 px-4 notification-card border-top read">
                    <div class="d-flex">
                        <div class="avatar avatar-xl me-1"><img class="rounded-circle" src="/assets/img/user.png"
                                alt="" /></div>
                        <div class="me-3 flex-1 mt-2">
                            <h4 class="fs--1 text-black"><?php echo $userUsername; ?></h4>
                            <p class="fs--1 text-1000">
                                <?php if ($notificationType == 'comment') { ?>
                                <i class="fas fa-comments"></i>
                                <?php } else if ($notificationType == 'divitup') { ?>
                                    <i class="fas fa-circle-up"></i>
                                <?php } else if ($notificationType == 'deviter') { ?>
                                <i class="fas fa-user-plus"></i>
                                <?php } ?>
                                <?php echo $userUsername; ?>  <?php echo $notificationMessage; ?></span><span
                                    class="ms-2 text-600 fw-bold fs--2"><?php echo $elapsed;?></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold"><?php echo $notificationDate; ?>
                                </span></p>
                        </div>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </div>
@endsection
