<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('html_header')
@include('items.html_header')
@show

<body style="min-height: 329px;" class="skin-blue  pace-done fixed>
    <!-- Page Loader -->
	<div class="pace  pace-inactive">
		<div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div></div>
    <!-- #END# Page Loader -->
    <div id="wrapper">

        @include('items.mainheader')

        @include('items.sidebar_admin')

        <!-- Content Wrapper. Contains page content -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div> <!-- /.Wrapper -->
    @section('scripts')
    @include('items.scripts')
    @show

</body>

</html>