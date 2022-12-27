@extends('mainlayout')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header bg-light overflow-hidden">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-m">
                        <img class="rounded-circle" src="/assets/img/post.png" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0">Create post</h5>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
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

                <form action="/postuserfeed" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa-solid fa-heading"></i> Heading
                        </label>
                        <input class="shadow-none form-control rounded-0 resize-none px-x1 border-y-2 border-200"
                            id="post-title" type="text" placeholder="Type post heading..." />
                    </div>
                    <label for="file-upload" class="custom-file-upload">
                        <i class="fa-solid fa-circle-info"></i> Details
                    </label>
                    <textarea id="editor" class="ckeditor shadow-none form-control rounded-0 resize-none px-x1 border-y-2 border-200"
                        placeholder="What do you want to talk about?" rows="4"></textarea>
                    <div class="d-flex align-items-center ps-x1 border border-200">
                        <label class="text-nowrap mb-0 me-2" for="hash-tags">
                            <i class="fa-solid fa-hashtag"></i><span class="fw-medium fs--1">Add
                                hashtag</span></label><input class="form-control border-0 fs--1 shadow-none" id="hash-tags"
                            type="text" placeholder="Help the right person to see" />
                    </div>
                    <div class="row g-0 justify-content-between mt-3 px-x1 pb-3">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label for="file-upload" class="custom-file-upload">
                                            <i class="fa-solid fa-layer-group"></i></i> Choose Technology
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-html5"></i> Html
                                        </label>
                                    </div>


                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-css3-alt"></i> Css
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-js"></i> JS
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox1" value="option1">
                                        <label class="form-check-label" for="checkbox1">
                                            <i class="fa-brands fa-php"></i> PHP
                                        </label>
                                    </div>


                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-python"></i> Python
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-java"></i> Java
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-golang"></i> Golanng
                                        </label>
                                    </div>


                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-erlang"></i> Erlang
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-node-js"></i> Node JS
                                        </label>
                                    </div>


                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-laravel"></i> Laravel
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="checkbox2" value="option2">
                                        <label class="form-check-label" for="checkbox2">
                                            <i class="fa-brands fa-swift"></i> Swift
                                        </label>
                                    </div>





                                </div>


                            </div>

                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-sm px-4 px-sm-5" type="submit">POST</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
