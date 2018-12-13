<aside class="careerfy-column-3">
    <div class="careerfy-typo-wrap">
        <div class="careerfy-employer-dashboard-nav">
            <figure>
                <a href="#" class="employer-dashboard-thumb"><img src="extra-images/employer-dashboard-1.png" alt=""></a>
                <figcaption>
                    <div class="careerfy-fileUpload">
                        <span><i class="careerfy-icon careerfy-add"></i> Telecharger Photo</span>
                        <input type="file" class="careerfy-upload" />
                    </div>
                    <h2>{{Auth::user()->name}}</h2>
                </figcaption>
            </figure>
            <ul>
                <li class="active"><a href="{{url('entreprise/'.Auth::user()->id.'/edit')}}"><i class="careerfy-icon careerfy-user"></i> Mon Profile </a></li>
                <li><a href="{{url('entreprise/'.Auth::user()->id.'/offre/commerciales')}}"><i class="careerfy-icon careerfy-briefcase-1"></i> Mes Offres Commerciales</a></li>
                <li><a href="{{url('entreprise/'.Auth::user()->id.'/offre/emploies')}}"><i class="careerfy-icon careerfy-salary"></i> Mes offres d'emploies</a></li>
                <li><a href="{{url('entreprise/'.Auth::user()->id.'/offre/commerciales/create')}}"><i class="careerfy-icon careerfy-heart"></i> Ajouter Offre Commerciale</a></li>
                <li><a href="{{url('entreprise/'.Auth::user()->id.'/offre/emploies/create')}}"><i class="careerfy-icon careerfy-credit-card-1"></i> Ajouter Offres Emploie</a></li>

                <li><a href="{{url('entreprise/logout')}}"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</aside>
