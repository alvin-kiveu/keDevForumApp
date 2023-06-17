@extends('mainlayout')

@section('content')
    <?php
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Deviters</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">

                                    <?php
                                    //GET ALL KeDevForum Users Randomly from the database
                                    $fetchUsers = DB:: table('members')
                                        // ->inRandomOrder()
                                        // ->limit(10)
                                        ->get();
                                    //ECHO ALL Users from the database
                                    foreach ($fetchUsers as $row) {
                                        $userDevter = $row->Deviters;
                                        $userDevees = $row->Devees;
                                        $userDevAdded = $row->devkdfid;
                                        $userDevAdder = session()->get('userDevKdfId');
                                        if ($userDevAdded == $userDevAdder) {
                                            //Do Nothing
                                        }else{
                                          ?>
                                    <div id="explorecard" class="col-md-4">
                                        <div class="card">
                                            <div class="card-body" onclick="window.location.href = 'dev/<?php echo $row->username; ?>';">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <?php
                                                        $profilepic = $row->profilepic;
                                                        //CHECK IF PROFILE IS EMPTY
                                                        if ($profilepic == '' || $profilepic == null || $profilepic == ' ') {
                                                            $profilephoto = '/assets/img/user.png';
                                                        } else {
                                                            $profilephoto = '/images/userprofile/' . $profilepic;
                                                        }
                                                        ?>
                                                        <img src="<?php echo $profilephoto; ?>" width="100%"
                                                            alt="My Profile Picture" class="rounded mb-2 img-thumbnail">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h5 style="font-weight:600;">
                                                            <?php echo $row->fulnames; ?>
                                                        </h5>
                                                        <p><?php echo $row->username; ?></p>
                                                        <div class="d-block mb-2">
                                                            <span class="badge bg-primary">Deviters:
                                                                <?php echo $userDevter; ?></span>
                                                            <span class="badge bg-primary">Devees:
                                                                <?php echo $userDevees; ?></span>
                                                        </div>
                                                        <?php
                                                                $checkDeviter = DB::table('deviters')
                                                                    ->where('userDevAdded', $userDevAdded)
                                                                    ->where('userDevAdder', $userDevAdder)
                                                                    ->first();
                                                                if ($checkDeviter) {
                                                            ?>
                                                        <button
                                                            onclick="deviterRemove('<?php echo $userDevAdded; ?>','<?php echo $userDevAdder; ?>')"
                                                            class="btn btn-primary btn-sm btn-block btn-sm follow text-secondary">REMOVE
                                                            DEVITER</button>
                                                        <?php
                                                                } else {
                                                                ?>
                                                        <button text-secondary
                                                            onclick="deviterAdd('<?php echo $userDevAdded; ?>','<?php echo $userDevAdder; ?>')"
                                                            class="btn btn-primary btn-sm btn-block btn-sm follow">ADD
                                                            DEVITER</button>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deviterAdd(userDevAdded, userDevAdder) {
            if (userDevAdder == '') {
                var snackbarbtn = document.getElementById("snackbar");
                snackbarbtn.className = "show";
                snackbarbtn.innerHTML = "Please login to devitup or devitdown";
                setTimeout(function() {
                    snackbarbtn.className = snackbarbtn.className.replace("show", "");
                }, 3000);
            } else {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', '/api/deviteradd', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var jsonData = JSON.parse(xhr.responseText);
                        var status = jsonData.status;
                        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                        // Reload the page
                        location.reload();
                        // Set the scroll position to the previously saved value after the page has finished reloading
                        window.onload = function() {
                            window.scrollTo(0, scrollPosition);
                        };
                    }
                }
                let data = {
                    userDevAdded: userDevAdded,
                    userDevAdder: userDevAdder
                };
                let payload = JSON.stringify(data);
                xhr.send(payload);
            }
        }

        function deviterRemove(userDevAdded, userDevAdder) {
            if (userDevAdder == '') {
                alert('Please login to add deviter');
            } else {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', '/api/deviterremove', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var jsonData = JSON.parse(xhr.responseText);
                        var status = jsonData.status;
                        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

                        // Reload the page
                        location.reload();

                        // Set the scroll position to the previously saved value after the page has finished reloading
                        window.onload = function() {
                            window.scrollTo(0, scrollPosition);
                        };
                    }
                }
                let data = {
                    userDevAdded: userDevAdded,
                    userDevAdder: userDevAdder
                };
                let payload = JSON.stringify(data);
                xhr.send(payload);
            }
        }
    </script>
@endsection
