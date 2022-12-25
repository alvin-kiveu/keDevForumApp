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
                    <h5>Log in</h5>
                  </div>
                  <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">or</span> <span><a href="/register">Create an account</a></span></div>
                </div>
                <form>
                  <label for="basic-checkbox">Email or Username</label>
                  <div class="mb-3"><input class="form-control" type="text" placeholder="Email or Username" /></div>
                  <label for="basic-checkbox">Password</label>
                  <div class="mb-3"><input class="form-control" type="password" placeholder="Password" /></div>
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked" /><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                    </div>
                    <div class="col-auto"><a class="fs--1" href="/forgot-password">Forgot Password?</a></div>
                  </div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button></div>
                </form>
                <div class="position-relative mt-4">
                  <hr />
                  <div class="divider-content-center">or log in with</div>
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
