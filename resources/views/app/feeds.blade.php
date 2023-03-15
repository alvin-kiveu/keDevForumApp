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
    {{-- <div class="col-lg-8">
        <div class="card mb-3 shadow fade-hover  bounce">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="d-flex">
                            <div class="avatar avatar-2xl status-online">
                                <img class="rounded-circle" src="https://umeskiasoftwares.com/images/umeskia_s.png"
                                    alt="" />
                            </div>
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1"><a class="fw-semi-bold" href="#">Umeskia</a></p>
                                <p class="mb-0 fs--1">14 Feb &bull; Nairobi&bull; <span
                                        class="fas fa-globe-americas"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Post Title</h5>
                <p class="card-text text-truncate" style="max-height: 3.6em;">This will apply the ellipsis truncation to any
                    p element </p>
                <div class="d-flex align-items-center">
                    <div class="vote-count text-success mx-3">
                        <i class="fas fa-thumbs-up"></i> 0
                    </div>
                    <div class="vote-count text-danger mx-3">
                        <i class="fas fa-thumbs-down"></i> 0
                    </div>
                    <div class="mx-auto"></div>
                    <div class="views-count mx-3">
                        <i class="fas fa-eye"></i> 0
                    </div>
                    <div class="replies-count mx-3">
                        <i class="fas fa-comments"></i> 0
                    </div>
                </div>
                <p class="card-text">
                    <small class="text-muted">
                        <i class="fas fa-user mr-1"></i> posted by user123 on
                        <i class="fas fa-calendar-alt mr-1"></i> Jan 1, 2020
                    </small>
                </p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="d-flex">
                            <div class="avatar avatar-2xl status-offline">
                                <img class="rounded-circle"
                                    src="https://qph.cf2.quoracdn.net/main-thumb-1265164455-50-oufqkxrfojwectcfvdswfwtnqpxqdtnu.jpeg"
                                    alt="" />
                            </div>
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1"><a class="fw-semi-bold" href="#">Alvin Kiveu</a></p>
                                <p class="mb-0 fs--1">14 Feb &bull; Nairobi&bull; <span
                                        class="fas fa-globe-americas"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Post Title</h5>
                <p class="card-text">Post content goes here</p>
                <p class="card-text"><small class="text-muted">posted by user123 on Jan 1, 2020</small></p>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="d-flex">
                            <div class="avatar avatar-2xl status-online">
                                <img class="rounded-circle" src="https://avatars.githubusercontent.com/u/99127888?v=4"
                                    alt="" />
                            </div>
                            <div class="flex-1 align-self-center ms-2">
                                <p class="mb-1 lh-1"><a class="fw-semi-bold" href="#">TrizahNabwire</a></p>
                                <p class="mb-0 fs--1">14 Feb &bull; Nairobi&bull; <span
                                        class="fas fa-globe-americas"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Post Title</h5>
                <p class="card-text">Post content goes here</p>
                <button class="btn btn-success btn-sm upvote">Approve</button>
                <button class="btn btn-danger btn-sm downvote">Disapprove</button>
                <p class="card-text"><small class="text-muted">posted by user123 on Jan 1, 2020</small></p>
            </div>
        </div>
    </div>



    <div class="col-lg-4">
        <div class="card  mb-3 mb-lg-0">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white">Top Discussion</h5>
            </div>
            <div class="card-body fs--1">
                <div class="d-flex btn-reveal-trigger">

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
                </div>

            </div>
            <div class="card-footer bg-light p-0 border-top"><a class="btn btn-link d-block w-100"
                    href="../events/event-list.html">All Events<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    </div> --}}
@endsection
