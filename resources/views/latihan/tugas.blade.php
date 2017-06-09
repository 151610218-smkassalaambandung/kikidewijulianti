<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>parameter</title>
</head>
<body>
<br>
   <td> Daftar : <b>{{$data}} {{$data2}} </br>
   @foreach($query as $key)

   <ul>
   <li>{{$key}}</li>
   </ul>
   @endforeach
</body>
</html>