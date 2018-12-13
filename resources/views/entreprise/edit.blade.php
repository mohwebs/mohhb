@extends('layouts.entreprise.profile.template')

@section('content')

    @php
    $categories = DB::table('categories')->get();
    @endphp


    <script language="JavaScript" type="text/javascript">
        function griser() {
            with (document.form) {

                if (pays.options[pays.options.selectedIndex].value == "Algerie") {
                    Region.style.visibility = 'visible';

                }
            }
        }
        </script>

    <!-- Main Content -->
    <div class="careerfy-main-content">

        <!-- Main Section -->
        <div class="careerfy-main-section careerfy-dashboard-fulltwo">
            <div class="container">
                <div class="row">

                    @include('layouts.entreprise.profile.aside')

                    <div class="careerfy-column-9">
                        <div class="careerfy-typo-wrap">
                            <form name="form" class="careerfy-employer-dasboard"  action="{{url('entreprise/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}

                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title"><h2>Welcome {{Auth::user()->name}}</h2></div>
                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Nom *</label>
                                            <input value="{{Auth::user()->name}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->name}}'; }" onfocus="if(this.value =='{{Auth::user()->name}}') { this.value = ''; }" type="text" name="name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Email *</label>
                                            <input value="{{Auth::user()->email}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->email}}'; }" onfocus="if(this.value =='{{Auth::user()->email}}') { this.value = ''; }" type="text" name="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Telephone *</label>
                                            <input value="{{Auth::user()->tel}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->tel}}'; }" onfocus="if(this.value =='{{Auth::user()->tel}}') { this.value = ''; }" type="text" name="tel"
                                                   class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('tel'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>SiteWeb</label>
                                            <input value="{{Auth::user()->site}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->site}}'; }" onfocus="if(this.value =='{{Auth::user()->site}}') { this.value = ''; }" type="text" name="siteweb"
                                                   class="form-control{{ $errors->has('siteweb') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('siteweb'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('siteweb') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Category</label>
                                            <div class="careerfy-profile-select">
                                                <select name="categorie">
                                                    @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}"> {{$categorie->nom}} </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Date de foundation *</label>
                                            <input value="{{Auth::user()->datefoundation}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->datefoundation}}'; }" onfocus="if(this.value =='{{Auth::user()->datefoundation}}') { this.value = ''; }" type="text"
                                                   name="datefoundation" class="form-control{{ $errors->has('datefoundation') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('datefoundation'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('datefoundation') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-12">
                                            <label>Description *</label>
                                            <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{Auth::user()->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title"><h2>Addresse </h2></div>
                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Pays *</label>
                                            <div class="careerfy-profile-select">
                                                <select name="pays" onChange="griser();">


                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algerie">Algerie</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                </select>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Region *</label>
                                            <div class="careerfy-profile-select">
                                                <select name="Region" style="visibility:hidden">

                                                        <option value="16">Alger</option>
                                                        <option value="23">Annaba</option>
                                                        <option value="44">Aïn-Defla</option>
                                                        <option value="46">Aïn-Témouchent</option>
                                                        <option value="5">Batna</option>
                                                        <option value="7">Biskra</option>
                                                        <option value="9">Blida</option>
                                                        <option value="34">Bordj-Bou-Arreridj</option>
                                                        <option value="10">Bouira</option>
                                                        <option value="35">Boumerdès</option>
                                                        <option value="6">Béjaïa</option>
                                                        <option value="2">Chlef</option>
                                                        <option value="25">Constantine</option>
                                                        <option value="17">Djelfa</option>
                                                        <option value="39">El-Oued</option>
                                                        <option value="36">El-Taref</option>
                                                        <option value="24">Guelma</option>
                                                        <option value="18">Jijel</option>
                                                        <option value="40">Khenchela</option>
                                                        <option value="3">Laghouat</option>
                                                        <option value="28">M'Sila</option>
                                                        <option value="29">Mascara</option>
                                                        <option value="43">Mila</option>
                                                        <option value="27">Mostaganem</option>
                                                        <option value="26">Médéa</option>
                                                        <option value="31">Oran</option>
                                                        <option value="4">Oum-El-Bouaghi</option>
                                                        <option value="48">Relizane</option>
                                                        <option value="20">Saida</option>
                                                        <option value="22">Sidi-Bel-Abbès</option>
                                                        <option value="21">Skikda</option>
                                                        <option value="41">Souk-Ahras</option>
                                                        <option value="19">Sétif</option>
                                                        <option value="14">Tiaret</option>
                                                        <option value="42">Tipaza</option>
                                                        <option value="38">Tissemsilt</option>
                                                        <option value="15">Tizi-Ouzou</option>
                                                        <option value="13" selected="selected">Tlemcen</option>
                                                        <option value="12">Tébessa</option>
                                                    </select>

                                                </select>
                                            </div>
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Ville*</label>
                                            <input value="{{Auth::user()->ville}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->ville}}'; }" onfocus="if(this.value =='{{Auth::user()->ville}}') { this.value = ''; }" type="text"
                                                   name="ville" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('ville'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                            @endif


                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Code postal *</label>
                                            <input value="{{Auth::user()->postal}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->postal}}'; }" onfocus="if(this.value =='{{Auth::user()->postal}}') { this.value = ''; }" type="text"
                                                   class="form-control{{ $errors->has('postal') ? ' is-invalid' : '' }}" name="postal">
                                            @if ($errors->has('postal'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postal') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-10">
                                            <label>Adresse *</label>
                                            <input value="{{Auth::user()->adresse}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->adresse}}'; }" onfocus="if(this.value =='{{Auth::user()->adresse}}') { this.value = ''; }" type="text"
                                                   name="adresse" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('adresse'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                            @endif
                                        </li>


                                    </ul>
                                </div>
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title"><h2>Résaux Sociaux</h2></div>
                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Facebook</label>
                                            <input value="{{Auth::user()->facebook}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->facebook}}'; }" onfocus="if(this.value =='{{Auth::user()->facebook}}') { this.value = ''; }" type="text"
                                                   name="facebook" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('facebook'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Twitter</label>
                                            <input value="{{Auth::user()->twitter}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->twitter}}'; }" onfocus="if(this.value =='{{Auth::user()->twitter}}') { this.value = ''; }" type="text"
                                                   name="twitter" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('twitter'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Google Plus</label>
                                            <input value="{{Auth::user()->googleplus}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->googleplus}}'; }" onfocus="if(this.value =='{{Auth::user()->googleplus}}') { this.value = ''; }" type="text"
                                                   name="googleplus" class="form-control{{ $errors->has('googleplus') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('googleplus'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('googleplus') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Youtube</label>
                                            <input value="{{Auth::user()->youtube}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->youtube}}'; }" onfocus="if(this.value =='{{Auth::user()->youtube}}') { this.value = ''; }" type="text"
                                                   name="youtube" class="form-control{{ $errors->has('youtube') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('youtube'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('youtube') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Instagram</label>
                                            <input value="{{Auth::user()->instagram}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->instagram}}'; }" onfocus="if(this.value =='{{Auth::user()->instagram}}') { this.value = ''; }" type="text"
                                                   name="instagram" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('instagram'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Linkedin</label>
                                            <input value="{{Auth::user()->linkdin}}" onblur="if(this.value == '') { this.value ='{{Auth::user()->linkdin}}'; }" onfocus="if(this.value =='{{Auth::user()->linkdin}}') { this.value = ''; }" type="text"
                                                   name="linkdin" class="form-control{{ $errors->has('linkdin') ? ' is-invalid' : '' }}">
                                            @if ($errors->has('linkdin'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('linkdin') }}</strong>
                                    </span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="careerfy-employer-box-section">
                                    <div class="careerfy-profile-title"><h2>Galeries Entreprise</h2></div>
                                    <div class="careerfy-company-photo">
                                        <img src="images/employer-profile-nonphoto.png" alt="">
                                        <h2>Drag & Drop Photos here to upload</h2>
                                        <small>You can upload up to 5 images under your profile</small>
                                        <div class="careerfy-fileUpload">
                                            <span><i class="careerfy-icon careerfy-upload"></i> Upload Images</span>
                                            <input type="file" class="careerfy-upload" />
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" class="careerfy-employer-profile-submit" value="Enregistrer">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Main Section -->

    </div>
    <!-- Main Content -->

    @endsection
