<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <title>shtpst</title>
</head>

<body>
  <header>
    <div class="shtpst">borovichkian shitpost</div>
  </header>

  <aside>
    <img src="img/bosinn-bo-sinn.gif" width="40%">
  </aside>
  
    @yield('content')

  <footer>
    <img src="@yield('footer')">
  </footer>

  <button onclick="topFunction()" id="myBtn" title="Go to top">наверх</button>

  <script src="{{asset('js/script.js')}}"></script>
</body>
</html>