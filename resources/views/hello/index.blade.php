<!DOCTYPE html>
<html lang="en">
<head>
  <link href="/css/app.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{{$msg}}</p>
  <table>
    @foreach($data as $item)
    <li>{{$item->name}} [{{$item->mail}},{{$item->age}}]</li>
    @endforeach
  </table>
  {!! $data->links() !!}
</body>
</html>
