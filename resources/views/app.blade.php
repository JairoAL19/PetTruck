<!DOCTYPE html>

<html>

@include('partials.htmlheader')
@include('partials.scripts')
<body>
	 <section class="content">
	 	@include('partials.sidebar')
	    @yield('main-content')
	 </section><!-- /.content -->	
</body>
</html>