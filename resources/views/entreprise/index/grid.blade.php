@include('layouts.partials._stylesheet')

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

                    <!-- Aside List entreprise Filtrage -->

                    @include('layouts.entreprise.index.aside')

                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">
                            <!-- FilterAble -->

                            @include('layouts.entreprise.index.filtre')

                            <!-- Candidate Listings -->
                            <div class="careerfy-candidate careerfy-candidate-grid">
                                <ul class="careerfy-row">
                                    @foreach($entreprises as $entreprise)

                                    <li class="careerfy-column-4">
                                        <figure>
                                            <a href="#" class="careerfy-candidate-grid-thumb"><img src="{{asset('hbhome/extra-images/candidates-grid-thumb-1.jpg')}}" alt=""> <span class="careerfy-candidate-grid-status"></span></a>
                                            <figcaption>
                                                <h2><a href="#">{{$entreprise->name}}</a></h2>
                                                <p>{{$entreprise->categories->nom}} 
                                                    <a href="#">{{$entreprise->tel}}</a></p>
                                                <span>{{$entreprise->region, $entreprise->ville}}</span>
                                            </figcaption>
                                        </figure>
                                        <ul class="careerfy-candidate-grid-option">
                                            <li>
                                                <span>Email:</span>
                                                <a href="#">{{$entreprise->email}}</a>
                                            </li>
                                            <li>
                                                <div class="careerfy-right">
                                                    <span>Date de Foundation:</span>
                                                   {{$entreprise->datefoundation}}
                                                </div>
                                            </li>


                                        </ul>
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


             @include('layouts.partials._script')
