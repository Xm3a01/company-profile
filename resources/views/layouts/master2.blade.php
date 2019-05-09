<!DOCTYPE html>
<html lang="en">
 @include('en-parts._head')
  <body>

	 @include('en-parts._topnav')

	 @include('en-parts._nav')
    
   @yield('content')
		
	  @include('en-parts._footer')
 
   <!-- loader -->
   <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#007bff"/></svg></div>
		
	  @include('en-parts._javascript')
	  
  </body>
</html>