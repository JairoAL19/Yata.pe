<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

@include('partials.htmlheader_iphone')

<body>
<div class="wrapper">
    @include('partials.sidebar')
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div>
</div><!-- ./wrapper -->
@include('partials.scripts')
</body>
</html>