<!DOCTYPE html>
<html lang="fr">
    @section('styles-page')
       @include('layouts.partials.__styles')
    @show
<body >
<!-- inclusion page entete et menus -->
      @include('layouts.partials.__entete')
      @include('layouts.partials.__menus')
  <div id="app" v-cloak>
      @yield('contenu-page')
  </div>
<!-- inclusion js -->
   @section('scripts')
    @include('layouts.partials.__scripts')
   @show
  </body>
</html>
