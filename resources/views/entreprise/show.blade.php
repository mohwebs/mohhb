



    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Detail</title>

    <!-- Css -->
    @include('layouts.partials._stylesheet')


    <![endif]-->
</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->

    @include('layouts.frontoffice.header1')

    <!-- Header -->

    <!-- SubHeader -->
    <div class="careerfy-employer-subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Frontend Developer</h1>
                    <p>We are looking for a frontend developer to help us build the startup connection platform of the future.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- SubHeader -->

    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section">
            <div class="container">
                <div class="row">

                    <!-- Employer Detail Top List -->
                    <div class="careerfy-column-12">
                        <div class="careerfy-employer-detail2-toparea">
                            <figure><a href="#"><img src="{{asset('hbhome/extra-images/employer-detail2-logo.jpg')}}" alt=""></a>
                                <figcaption>
                                    <h2>{{$entreprise->name}}</h2>

                                </figcaption>
                            </figure>

                        </div>

     @include('layouts.frontoffice.nav')

                    </div>
                    <!-- Employer Detail Top List -->

                    <!-- Job Detail Content -->
                    <div class="careerfy-column-8 careerfy-typo-wrap">
                        <div class="careerfy-jobdetail-content careerfy-employerdetail-twocontent">
                            <div class="careerfy-content-title"><h2>Essentra Components Overview</h2></div>
                            <div class="careerfy-jobdetail-services">
                                <ul class="careerfy-row">
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-group"></i>
                                        <div class="careerfy-services-text">Services <small>10-50</small></div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-briefcase"></i>
                                        <div class="careerfy-services-text">Offres publiés<small>15</small></div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-view"></i>
                                        <div class="careerfy-services-text">Vu<small>124</small></div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-folder"></i>
                                        <div class="careerfy-services-text">Categories <small>{{$entreprise->categories->nom}}}</small></div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-time"></i>
                                        <div class="careerfy-services-text">Fondée en<small>{{$entreprise->datefoundation}}</small></div>
                                    </li>
                                    <li class="careerfy-column-4">
                                        <i class="careerfy-icon careerfy-credit-card"></i>
                                        <div class="careerfy-services-text">Chiffre d'affaires <small>500 Million (DA) par année</small></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="careerfy-content-title"><h2>Company Description</h2></div>
                            <div class="careerfy-description">
                                <p>{{$entreprise->description}}</p>

                            </div>
                        </div>

                    </div>
                    <!-- Job Detail Content -->
                    <!-- Job Detail SideBar -->
                    <aside class="careerfy-column-4 careerfy-typo-wrap">

                        <div class="widget widget_your_info">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22589232.038285658!2d-103.9763543971716!3d46.28054447273778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1507595834401"></iframe>
                            <div class="widget_your_info_wrap">
                                <ul class="widget_your_info_list">
                                    <li><i class="careerfy-color careerfy-icon careerfy-maps-and-flags"></i> {{$entreprise->adresse.','.$entreprise->ville}}</li>
                                    <li><i class="careerfy-color careerfy-icon careerfy-internet"></i> <a href="#">{{$entreprise->siteweb}}</a></li>
                                    <li><i class="careerfy-color careerfy-icon careerfy-envelope"></i> <a href="#">Email: {{$entreprise->email}}</a></li>
                                    <li><i class="careerfy-color careerfy-icon careerfy-technology"></i> Telephone: {{$entreprise->tel}}}</li>
                                </ul>
                                <ul class="widget_your_info_social">
                                    <li><a href="{{$entreprise->facebook}}" class="fa fa-facebook"></a></li>
                                    <li><a href="{{$entreprise->twitter}}" class="fa fa-twitter"></a></li>
                                    <li><a href="{{$entreprise->linkedin}}" class="fa fa-linkedin"></a></li>
                                    <li><a href="{{$entreprise->googleplus}}" class="fa fa-google-plus"></a></li>
                                    <li><a href="{{$entreprise->instagram}}" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_contact_form">
                            <form>
                                <div class="careerfy-widget-title"><h2>Contact Form</h2></div>
                                <ul>
                                    <li>
                                        <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                        <i class="careerfy-icon careerfy-user"></i>
                                    </li>
                                    <li>
                                        <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                        <i class="careerfy-icon careerfy-mail"></i>
                                    </li>
                                    <li>
                                        <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                                        <i class="careerfy-icon careerfy-technology"></i>
                                    </li>
                                    <li>
                                        <textarea>After using Big Interview, I now feel much more confident about handling real interviews. I really liked the recording & playback functionality, which allowed me to hear my voice and analyze the strength and confidence of my answer.</textarea>
                                    </li>
                                    <li> <img src="extra-images/widget-contact-captcha.jpg" alt=""> </li>
                                    <li>
                                        <input type="submit" value="Send now">
                                        <p>You accepts our <a href="#">Terms and Conditions</a></p>
                                    </li>
                                </ul>
                            </form>
                        </div>

                    </aside>
                    <!-- Job Detail SideBar -->

                    <!-- Job's Listing's -->

                    <!-- Job's Listing's -->

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










