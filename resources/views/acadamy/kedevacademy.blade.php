@extends('mainlayout')

@section('content')
    <style>
        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
        }

        .badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px 20px;
            font-size: 12px;
            color: white;
            font-weight: 600;
        }

        .rating {
            color: rgb(255, 145, 0);
        }

        .price {
            font-weight: 600;
            color: black;
        }

        .card-title {
            font-weight: 600;
            color: black;
        }

        .auther {
            color: rgb(75, 71, 71);
        }

        .rate-num {
            font-weight: 600;
            color: rgb(211, 190, 0);
            font-size: 20px;
        }

        .rate-sudent {
            font-weight: 600;
            color: rgb(75, 71, 71);
            font-size: 20px;
        }
        .card-title {
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Limit the title to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .free{
            background-color: orange;
        }
        .paid{
            background-color: green;
            colo
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h1>KeDev Academy</h1>
                <p>KeDeve Academy is a training program for people who want to learn how to code. </p>
                <form action="" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Search for courses"> <span
                            class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search">Search</span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>

        </div>
        {{-- courses --}}

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $courses = DB::table('course')->get();
                    foreach ($courses as $course) {
                    ?>

                    <div class="col-md-4">
                        <div class="card mb-3">
                            <?php
                            if($course->course_type == 'free'){
                            ?>
                            <div class="card-img-overlay">
                                <span class="badge free">Free</span>
                            </div>
                            <?php
                            }else{
                            ?>
                           <div class="card-img-overlay">
                                <span class="badge paid">Paid</span>
                            </div>
                            <?php
                            }
                            ?>
                            <img src="<?php echo $course->course_photo; ?>" class="card-img-top"
                                alt="Course Thumbnail">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $course->course_name; ?></h4>
                                <p class="card-text auther"><?php echo $course->course_auther; ?></p>
                                <div class="rating">
                                    {{-- <span class="rate-num">4.6</span> --}}
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    {{-- <span class="rate-sudent">(100,345)</span> --}}
                                </div>
                                <p class="card-text price">Ksh <?php echo number_format($course->course_price, 2); ?></p>
                                <a href="#" class="btn btn-primary text-secondary">View Course</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                       
                </div>
            </div>
        </div>

        {{-- end of courses --}}

    </div>
@endsection
