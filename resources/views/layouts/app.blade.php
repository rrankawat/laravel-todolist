<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container page-container"><br/>
      @include('inc.messages')
      @yield('content')
    </div>

    <footer id="footer">
      <p>Copyright &copy; 2019 TodoList</p>
    </footer>
  </body>
</html>
