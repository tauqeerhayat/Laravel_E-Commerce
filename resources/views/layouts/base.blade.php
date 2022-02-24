<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.head')

    @yield('title')

    @include('includes.styles')

    @yield('onPageStyle')

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    @include('includes.mobile-menu')

	<!--header-->
	@include('includes.menu')

    @yield('content')

    @include('includes.footer')

    @include('includes.scripts')

</body>
</html>
