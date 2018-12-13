<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Listings</title>

    <!-- Css -->
 @include('layouts.partials._stylesheet')
    <![endif]-->
</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->
    @include('layouts.entreprise.header')
    <!-- Header -->

    <!-- SubHeader -->
    <div class="careerfy-subheader careerfy-subheader-without-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="careerfy-page-title">
                        <h1>Candidates List with Filterable</h1>
                        <p>Thousands of prestigious employers for you, search for a recruiter right now.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="careerfy-breadcrumb">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Candidates</li>
            </ul>
        </div>
    </div>
    <!-- SubHeader -->

    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-top-full">
            <div class="container">
                <div class="row">

             @include('layouts.entreprise.index.aside')


                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">
                            <!-- FilterAble -->

                            @include('layouts.entreprise.index.filtre')

                            <!-- Candidate Listings -->
                            <div class="careerfy-candidate careerfy-candidate-default">
                                <ul class="careerfy-row">

                                    @foreach($entreprises as $entreprise)

                                    <li class="careerfy-column-12">
                                        <div class="careerfy-candidate-default-wrap">
                                            <figure><a href="#"><img src="{{asset('hbhome/extra-images/candidate-listing-thumb-1.jpg')}}" alt=""></a></figure>
                                            <div class="careerfy-candidate-default-text">
                                                <div class="careerfy-candidate-default-left">
                                                    <h2><a href="#">{{$entreprise->name}}</a> <i class="careerfy-icon careerfy-check-mark"></i></h2>
                                                    <ul>
                                                        <li>{{$entreprise->categories->nom}} <a href="#" class="careerfy-candidate-default-studio">{{$entreprise->tel}}</a></li>
                                                        <li><i class="fa fa-map-marker"></i> {{$entreprise->region, $entreprise->ville}}</li>
                                                        <li><i class="careerfy-icon careerfy-envelope"></i> <a href="#">{{$entreprise->email}}</a></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="careerfy-candidate-default-btn"><i class="careerfy-icon careerfy-add-list"></i> Shortlist</a>
                                            </div>
                                        </div>
                                    </li>
                                        @endforeach

                                </ul>
                            </div>
                            <!-- Pagination -->
                            <div class="careerfy-pagination-blog">
                                <ul class="page-numbers">
                                    <li><a class="prev page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                    <li><span class="page-numbers current">01</span></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="page-numbers" href="#">03</a></li>
                                    <li><a class="page-numbers" href="#">04</a></li>
                                    <li><a class="next page-numbers" href="#"><span><i class="careerfy-icon careerfy-arrows4"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>
    <!-- Main Content -->

    <!-- Footer -->
@include('layouts.entreprise.footer')

    <!-- Footer -->

</div>
<!-- Wrapper -->


<!-- ModalLogin Box -->
@include('layouts.login')

<!-- Modal Signup Box -->
@include('layouts.signub')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@include('layouts.partials._script')

</body>

</html>
