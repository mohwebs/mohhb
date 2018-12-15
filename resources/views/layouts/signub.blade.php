@php
    $categories = DB::table('categories')->get();

@endphp

<div class="careerfy-modal fade careerfy-typo-wrap " id="JobSearchModalLogin">
    <div class="modal-inner-area">&nbsp;</div>
    <div class="modal-content-area">
        <div class="modal-box-area">

            <div class="careerfy-modal-title-box">
                <h2>Inscrivez Vous</h2>
                <span class="modal-close"><i class="fa fa-times"></i></span>
            </div>

            <div class="careerfy-box-title">
                <span>Choose your Account Type</span>
            </div>
            <div class="careerfy-user-options">
                <ul>
                    <li >
                        <a href="#">
                            <i class="careerfy-icon careerfy-user"></i>
                            <span>Candidat</span>
                            <small>I want to discover awesome companies.</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="active">
                            <i class="careerfy-icon careerfy-building"></i>
                            <span>Entreprise</span>
                            <small>I want to attract the best talent.</small>
                        </a>
                    </li>
                </ul>
            </div>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="careerfy-user-form careerfy-user-form-coltwo">
                    <ul>
                        <li>
                            <label>Nom d'entreprise:</label>
                            <input value="entrer le nom de l'entreprise"
                                   onblur="if(this.value == '') { this.value ='entrer le nom de l\'entreprise'; }" onfocus="if(this.value =='entrer le nom de l\'entreprise') { this.value = ''; }"
                                   type="text" name="name" value="{{old('name')}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Email Address:</label>
                            <input value="Entrer votre email" onblur="if(this.value == '') { this.value ='Entrer votre email'; }" onfocus="if(this.value =='Entrer votre email') { this.value = ''; }"
                                   type="text" name="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>
                        <li>
                            <label>Mot de passe:</label>
                            <input value="Entrer votre mot passe" onblur="if(this.value == '') { this.value ='Entrer votre mot passe'; }" onfocus="if(this.value =='Entrer votre mot passe') { this.value = ''; }"
                                   type="password" name="password" >
                            <i class="careerfy-icon careerfy-user"></i>
                        </li>

                        <li>
                            <label>Date Foundation :</label>
                            <input value="jj-mm-yy" onblur="if(this.value == '') { this.value ='jj-mm-yy'; }" onfocus="if(this.value =='jj-mm-yy') { this.value = ''; }"
                                   type="text" name="datefoundation" value="{{old('datefoundation')}}" class="form-control{{ $errors->has('datefoundation') ? ' is-invalid' : '' }}">
                            @if ($errors->has('datefoundation'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('datefoundation') }}</strong>
                                    </span>
                            @endif
                            <i class="careerfy-icon careerfy-mail" ></i>
                        </li>
                        <li>
                            <label>Telephone:</label>
                            <input value="Entrer le numero telephone" onblur="if(this.value == '') { this.value ='Entrer le numero telephone'; }" onfocus="if(this.value =='Entrer le numero telephone') { this.value = ''; }"
                                   type="text" name="tel" value="{{old('tel')}}" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}">
                            @if ($errors->has('tel'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                            @endif
                            <i class="careerfy-icon careerfy-technology" ></i>
                        </li>
                        <li class="careerfy-user-form-coltwo-full">
                            <label>Categories:</label>
                            <div class="careerfy-profile-select">
                                <select name="categorie">
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}"> {{$categorie->nom}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </li>

                        <li class="careerfy-user-form-coltwo-full">
                            <input type="submit" value="Envoyer">
                        </li>
                    </ul>
                </div>

            </form>

        </div>
    </div>
</div>
