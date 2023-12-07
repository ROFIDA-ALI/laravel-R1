<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
@include('includes.header')

		

@include('includes.topArea')

@yield('content')
@include('includes.reviews')
@include('includes.footer')
 @include('includes.footerJS')

		


</body>
</html>