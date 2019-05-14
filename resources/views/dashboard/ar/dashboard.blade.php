<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="">
  <input type="text" name="en_name">
  <input type="text" name="ar_name">
  <input type="text" name="prof">
  <input type="submit">
  </form>
  <hr>
  <form action="">
  <input type="text" name="en_name">
  <input type="text" name="ar_name">
  <input type="text" name="dec">
  <input type="file" name="photo">
  <input type="submit">
  </form>
  <hr>
  <form action="">
  <input type="text" name="en_name">
  <input type="text" name="ar_name">
  <input type="text" name="dec">
  <input type="file" name="photo">
  <input type="submit">
  </form>
  <hr>
  <form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="text" name="en_name">
  <input type="text" name="ar_name">
  <input type="text" name="en_spec">
  <input type="text" name="ar_spec">
  <input type="file" name="photo">
  <input type="submit">
  </form>
</body>
</html>