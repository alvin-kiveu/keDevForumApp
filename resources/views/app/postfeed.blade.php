@extends('mainlayout')

@section('content')
<script src="/editor/ckeditor.js"></script>
<link href="/editor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css" rel="stylesheet">
<link href="/assets/css/snippetheme.css" rel="stylesheet">
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header bg-light overflow-hidden">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-m">
                        <img class="rounded-circle" src="/assets/img/post.png" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0 fs-0">Create a Devit</h5>
                    </div>
                </div>
            </div>
            <div class="card-body p-5">
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

                <form action="/postuserfeed" method="POST" id='postfeedform'>
                    @csrf
                    <div class="col-md-12">
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa-solid fa-heading"></i> Heading
                        </label>
                        <input class="shadow-none form-control rounded-0 resize-none px-x1 border-y-2 border-200"
                            id="post-title" type="text" name="heading" placeholder="Type post heading..." required />
                    </div>
                    
                    <label for="file-upload" class="custom-file-upload">
                        <i class="fa-solid fa-circle-info"></i> Devit Content
                    </label>
                    <textarea id="diviteditor" name="content"
                        class="ckeditor shadow-none form-control rounded-0 resize-none px-x1 border-y-2 border-200"
                        placeholder="What do you want to talk about?" rows="4" required></textarea>
                    {{-- <div class="d-flex align-items-center ps-x1 border border-200">
                        <label class="text-nowrap mb-0 me-2" for="hash-tags">
                            <i class="fa-solid fa-hashtag"></i><span class="fw-medium fs--1">Add
                                hashtag</span></label><input class="form-control border-0 fs--1 shadow-none" id="hash-tags"
                            type="text" name="hashtag" placeholder="Help the right person to see" required />
                    </div> --}}
                    <div class="row g-0 justify-content-between mt-3 px-x1 pb-3">
                        {{-- <div class="col-12">
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

                        </div> --}}
                    
                    </div>
                    <div class="col-12">
                        <button id="postfeed" class="btn btn-primary text-secondary  d-block w-100 mt-3" type="submit"
                            name="post" enabled>Devit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const postfeed = document.getElementById('postfeed');
        const postfeedform = document.getElementById('postfeedform');

        postfeed.addEventListener('click', function() {
            //SUBMIT FORM
            postfeed.disabled = true;
            postfeed.innerHTML = "Posting New Devit...";
            postfeedform.submit();
        });
    </script>
@endsection
