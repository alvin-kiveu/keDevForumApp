<?php
$randomeID = $id;
if (isset($randomeID)) {
    //CHECK IF THE LINK IS EXPIRED OR NOT
    $check = DB::table('members')
        ->where('resetpassword', $randomeID)
        ->first();
    if (!$check) {
        redirect('/login')->with('error', 'forgot password link is expired or is invalid please reset your password again.');
    }
} else {
    redirect('/login')->with('error', 'forgot password link is expired or is invalid please reset your password again.');
}
?>

@extends('layout')

@section('content')
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <div class="row flex-center min-vh-100 py-6">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row flex-between-center mb-2">
                                <div class="col-auto">
                                    <h5>RESET PASSWORD</h5>
                                </div>
                            </div>
                            {{-- Error Handling --}}
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

                            <form action="/reseruser" method="POST">
                                @csrf
                                <label for="basic-checkbox">Password</label>
                                <div class="mb-3"><input name="password" class="form-control" type="password"
                                        placeholder="Password" required /></div>
                                <label for="basic-checkbox">Confirm Password</label>
                                <div class="mb-3"><input name="password_confirmation" class="form-control" type="password"
                                        placeholder="Confirm Password" required /></div>
                                        <input name="randid" class="form-control" type="hidden"
                                        value="<?php echo $randomeID; ?>" />

                                        <div class="row flex-between-center">
                                            <div class="col-auto"><a class="fs--1" href="/login">Login</a></div>
                                            <div class="col-auto"><a class="fs--1" href="/forgot-password">Forgot Password?</a></div>
                                          </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary text-secondary  d-block w-100 mt-3"
                                        type="submit" name="submit">SET NEW PASSWORD</button>
                                    </div>
                            </form>
                            <div class="position-relative mt-4">
                                <hr />
                                <div class="divider-content-center"></div>
                            </div>
                            <div class="row g-2 mt-2">
                                {{-- <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
