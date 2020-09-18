<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>start</title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @foreach ($arr as $ar)
        <p>number: {{ $ar }}</p>
      @endforeach
    </div>
  </body>
</html>
