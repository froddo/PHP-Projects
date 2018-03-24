<!DOCTYPE html>
<html>
<head>
<title>TodoList</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.3/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

<footer id="footer" class="text-center">
    <h4 class="text-warning">Copyright &copy; {{date('Y')}}</h4>
</footer>
<script src="{{asset('/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.3/combined/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap'
    });
</script>
</body>
</html>