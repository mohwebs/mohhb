<div class="careerfy-modal fade careerfy-typo-wrap" id="JobSearchModalSignup">
    <div class="modal-inner-area">&nbsp;</div>
    <div class="modal-content-area">
        <div class="modal-box-area">

            <div class="careerfy-modal-title-box">
                <h2>Connectez-vous à votre compte
                </h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>
            <form method="POST" action="{{ route('entreprise.login.submit') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class="careerfy-box-title">
                    <span></span>
                </div>
                <div class="careerfy-user-options">
                    <ul>

                        <li class="active" >
                            <a href="#">
                                <i class="careerfy-icon careerfy-building"></i>
                                <span>Entreprise</span>
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

            </form>

        </div>
    </div>
</div>
