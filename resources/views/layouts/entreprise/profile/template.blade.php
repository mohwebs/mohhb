<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Profile Setting</title>

    @include('layouts.partials._stylesheet')
</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->
@include('layouts.frontoffice.header1')
<!-- Header -->

    <!-- SubHeader -->
    <div class="careerfy-subheader careerfy-subheader-without-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="careerfy-page-title">
                        <h1>Companies</h1>
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

    @yield('content')

    <!-- Footer -->
@include('layouts.entreprise.profile.footer')
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- ModalLogin Box -->
<div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
    <div class="modal-inner-area">&nbsp;</div>
    <div class="modal-content-area">
        <div class="modal-box-area">

            <div class="careerfy-modal-title-box">
                <h2>Login to your account</h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>
            <form>
                <div class="careerfy-box-title">
                    <span>Choose your Account Type</span>
                </div>
                <div class="careerfy-user-options">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="careerfy-icon careerfy-user"></i>
                                <span>Candidate</span>
                                <small>I want to discover awesome companies.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="careerfy-icon careerfy-building"></i>
                                <span>Employer</span>
                                <small>I want to attract the best talent.</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="careerfy-user-form">
                    <ul>
                        <li>
                            <label>Email Address:</label>
                            <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-mail"></i>
                        </li>
                        <li>
                            <label>Password:</label>
                            <input value="Enter Password" onblur="if(this.value == '') { this.value ='Enter Password'; }" onfocus="if(this.value =='Enter Password') { this.value = ''; }" type="text">
                            <i class="careerfy-icon careerfy-multimedia"></i>
                        </li>
                        <li>
                            <input type="submit" value="Sign In">
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="careerfy-user-form-info">
                        <p>Forgot Password? | <a href="#">Sign Up</a></p>
                        <div class="careerfy-checkbox">
                            <input type="checkbox" id="r10" name="rr" />
                            <label for="r10"><span></span> Remember Password</label>
                        </div>
                    </div>
                </div>
                <div class="careerfy-box-title careerfy-box-title-sub">
                    <span>Or Sign In With</span>
                </div>
                <div class="clearfix"></div>
                <ul class="careerfy-login-media">
                    <li><a href="#"><i class="fa fa-facebook"></i> Sign In with Facebook</a></li>
                    <li><a href="#" data-original-title="google"><i class="fa fa-google"></i> Sign In with Google</a></li>
                    <li><a href="#" data-original-title="twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</a></li>
                    <li><a href="#" data-original-title="linkedin"><i class="fa fa-linkedin"></i> Sign In with LinkedIn</a></li>
                </ul>
            </form>

        </div>
    </div>
</div>
<!-- Modal Signup Box -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@include('layouts.partials._script')

</body>

</html>
