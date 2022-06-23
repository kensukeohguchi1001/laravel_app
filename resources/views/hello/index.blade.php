<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{!!$msg!!}</p>
  <form action="/hello" method="post">
    @csrf

    <div>Name:<input type="text" name="name"></div>
    <div>Mail:<input type="text" name="mail"></div>
    <div>Tel:<input type="text" name="tel"></div>
    <input type="submit">
    <hr>
    <ol>
      @for($i = 0; $i < count($keys); $i++)
        <li>{{$keys[$i]}}:{{$values}</li>
      @endfor
    </ol>
  </form>
</body>
</html>
