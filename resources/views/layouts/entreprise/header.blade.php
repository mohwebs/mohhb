<header id="careerfy-header" class="careerfy-header-two">

    <aside class="col-md-2"> <a href="index-two.html" class="careerfy-logo"><img src="hbhome/images/logo.png" alt=""></a> </aside>
    <aside class="col-md-10">
        <div class="careerfy-right">
            <nav class="careerfy-navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                    <ul class="navbar-nav">
                        <li class="active"><a href="index.html">Accueil</a>

                        </li>
                        <li><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">Tourisme</a>
                                <ul class="sub-menu">
                                    <li><a href="">Résidence et visa</a>
                                    <li><a href="">Voyages Organisés</a> </li>
                                    </li></ul></li>
                                <li><a href="cv-packages.html">Tourisme Médical</a></li>
                                <li><a href="faq.html">Informatique</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Investisment</a>
                            <ul class="sub-menu">
                                <li><a href="candidate-dashboard-applied-jobs.html">Immobilier</a></li>
                                <li><a href="candidate-dashboard-changed-password.html">Industriel</a></li>
                                <li><a href="candidate-dashboard-cv-manager.html">Agricole</a></li>
                                <li><a href="candidate-dashboard-job-alert.html">Tourisme</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Business</a>
                            <ul class="sub-menu">
                                <li><a href="employer-list.html">Création d’entreprise & Startups</a></li>
                                <li><a href="employer-grid.html">Installation des usines</a></li>
                                <li><a href="employer-detail.html">Commerce international</a></li>


                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </nav>

                 @auth('entreprise')
                <ul class="careerfy-user-option">
                    <li><a href="{{url('entreprise/logout')}}" class="careerfy-post-btn "><i class="careerfy-icon careerfy-arrows-2"></i> Se deconnecter</a></li>
                    <li><a href="#" class="careerfy-btn-icon "><i class="careerfy-icon careerfy-social-1"></i>
                         </a></li>
                </ul>
            @endauth

            @guest('entreprise')
                <ul class="careerfy-user-option">
                    <li><a href="#" class="careerfy-post-btn careerfy-open-signin-tab"><i class="careerfy-icon careerfy-arrows-2"></i> S'incrire</a></li>
                    <li><a href="#" class="careerfy-btn-icon careerfy-open-signup-tab"><i class="careerfy-icon careerfy-social-1"></i></a></li>
                </ul>
                @endguest




        </div>
    </aside>

</header>
