<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
 
  <link rel="shortcut icon" href="{{ url('/flatui') }}/dist/favicon.ico">
 
  <!--CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css">
<link rel="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/html5shiv.js">
<link rel="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/respond.min.js">





<!--自作CSS -->
  @yield('styles')
</head>
<body class="mx-3">
@include('partials.header')
<div class="container">
  @yield('content')
</div><!-- /.container -->
 
<footer class="footer">
  <div class="container">
  <p class="text-muted">認証デモ</p>
  </div>
</footer>
 
<!-- Bootstrap core JavaScript
  ================================================== -->


<!--JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/vendor/video.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.js"></script>

@yield('scripts')
</body>
</html>