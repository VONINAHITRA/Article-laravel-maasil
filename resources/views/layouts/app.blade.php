<!DOCTYPE html>

<html lang="fr">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show
<body >
<div id="app" v-cloak>
    <div class="wrapper">
    @include('layouts.partials.mainheader')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: -9px;margin-right: 5px">

        @include('layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('layouts.partials.scripts')
@show
</body>
</html>
