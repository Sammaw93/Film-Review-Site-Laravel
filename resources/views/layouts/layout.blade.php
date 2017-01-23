

<!DOCTYPE HTML>

<!--This page is used to set the layout of all the pages-->

<html>
<head>
  <title> @yield('title') </title>

</head>


<body>
  @include('layouts.menu')
  @yield('body')

</body>

</html>
