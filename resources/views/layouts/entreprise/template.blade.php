
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Careerfy Home 2</title>
@include('layouts.partials._stylesheet')
</head>

<body>

<!-- Wrapper -->
<div class="careerfy-wrapper">

    <!-- Header -->
  @include('layouts.entreprise.header')
    <!-- Header -->

    <!-- Banner -->
@include('layouts.entreprise.banner')
    <!-- Banner -->

@yield('content')

    <!-- Footer -->
@include('layouts.entreprise.footer')
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- ModalLogin Box -->

@include('layouts.login')

<!-- Modal S'incrire Box -->

@include('layouts.signub')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@include('layouts.partials._script')

</body>

</html>
