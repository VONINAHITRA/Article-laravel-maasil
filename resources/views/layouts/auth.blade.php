<!DOCTYPE html>
<html>

@include('layouts.partials.htmlheader')

@yield('content')

@section('scripts')
<!-- Inclusion de page Javascript/Jquery/Ajax -->
  @include('layouts.partials.scripts')
@show
</html>