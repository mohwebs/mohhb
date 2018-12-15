@extends('layouts.entreprise.profile.template')

@section('content')

<!-- Main Content -->
<div class="careerfy-main-content">

    <!-- Main Section -->
    <div class="careerfy-main-section careerfy-dashboard-fulltwo">
        <div class="container">
            <div class="row">

                @include('layouts.entreprise.profile.aside')

                <div class="careerfy-column-9">
                    <div class="careerfy-typo-wrap">
                        <div class="careerfy-employer-dasboard">
                            <form name="form" class="careerfy-employer-dasboard"  action="{{url('entreprise/'.Auth::user()->slug.'/offre/commerciales')}}" method="post" enctype="multipart/form-data">


                                {{ csrf_field() }}
                                <div class="careerfy-employer-box-section">
                                    <!-- Profile Title -->
                                    <div class="careerfy-profile-title">
                                        <h2>Postuler un nouveau Offre</h2>
                                    </div>

                                    <ul class="careerfy-row careerfy-employer-profile-form">
                                        <li class="careerfy-column-6">
                                            <label>Le titre - *</label>
                                            <input value="Entrer un titre" onblur="if(this.value == '') { this.value ='Entrer un titre'; }" onfocus="if(this.value =='Entrer un titre') { this.value = ''; }" type="text" name="titre">
                                        </li>

                                        <li class="careerfy-column-12">
                                            <label>Description *</label>
                                            <textarea name="description">Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt. Donec pretium gravida erat, a faucibus velit egestas eget. Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam itae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt. Donec pretium gravida erat, a faucibus velit egestas eget.</textarea>
                                        </li>
                                        <li class="careerfy-column-6">
                                            <label>Service / Produit</label>
                                            <input name="produit" value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" type="text">
                                        </li>



                                    </ul>
                                </div>

                                <input type="submit" class="careerfy-employer-profile-submit" value="Update Setting">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main Section -->

</div>
<!-- Main Content -->

    @endsection
