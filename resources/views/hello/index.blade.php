<!DOCTYPE html>
<html lang="ja">
<head>
  <link href="/bootstrap/app.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script>
    function doAction(){
        var id = document.querySelector('#id').value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'hello/json'  + id, true);
        xhr.responseType = 'json';
        xhr.onload = function(e){
            if(this.status == 200) {
                var result = this.response;
                document.querySelector('#name').textContent = result.name;
                document.querySelector('#mail').textContent = result.mail;
                document.querySelector('#age').textContent = result.age;
            }
        };
        xhr.send();
    }
  </script>
</head>
<body>
  <h1>Hello/Index</h1>
  <p>{{$msg}}</p>
  <div>
    <form action="/hello" method="post">
        @csrf
        <input type="text" id="find" name="find" value="{{$input}}">
        <input type="submit">
    </form>
  </div>
  <hr>
  <table border="1">
    @foreach($data as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->all_data}}</td>
    </tr>
    @endforeach
  </table>
</body>

</html>
