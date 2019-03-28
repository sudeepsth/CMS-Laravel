<!DOCTYPE html>
<html lang="en">

  <head>
    @include('site/layout/meta')
  </head>

  <body class="container-fluid">
    @include('site/layout/header')
    @section('main-content')
        @show

    @include('site/layout/footer')
    @include('site/layout/script')

  </body>

</html>
