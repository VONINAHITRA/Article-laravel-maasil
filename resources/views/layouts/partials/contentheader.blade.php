<!-- Content Header (Page header) -->
<section class="content-header" style="background-color: #d41428">
    <h1>
        @yield('contentheader_title', 'En-tête de page ici')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb" >
        @yield('contentheader_levelactive')
    </ol>
</section>