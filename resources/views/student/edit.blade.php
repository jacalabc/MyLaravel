<!DOCTYPE html>
<html lang="en">
<head>
  <title>單筆新增</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>單筆修改</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
      </tr>
    </thead>
    <form action="{{route('student0309.update',['student0309'=>$data->id])}}" method="post">
        @csrf
        @method('PUT')

    <tbody>
      <tr>
        <td>{{$data->id}}</td>
        <td><input type="text" name="name" id="name" value="{{$data->name}}"></td>
        <td><input type="text" name="age" id="age" value="{{$data->age}}"></td>
        <td><input type="submit" value="修改" class="btn btn-success"></td>
      </tr>
    </tbody>
</form>
  </table>
</div>

</body>
</html>
