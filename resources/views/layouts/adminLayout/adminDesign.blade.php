<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend-css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/uniform.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend-css/matrix-media.css')}}" />
<link href="{{ asset('fonts/backend-fonts/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend-css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.adminLayout.adminHeader')

@include('layouts.adminLayout.adminSideBar')

@yield('content')

@include('layouts.adminLayout.adminFooter')

<script src="{{ asset('js/backend-js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend-js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend-js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend-js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend-js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend-js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/backend-js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend-js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend-js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backend-js/matrix.form_validation.js') }}"></script> 
</body>
</html>
