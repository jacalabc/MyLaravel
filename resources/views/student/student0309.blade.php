<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel練習LOLOLO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>練習</h2>         
  <a href="{{route('student0309.create')}}" class="btn btn-success mb-3 mt-3">單筆新增</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>修改/刪除</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>
                <a href="http://">修改</a>
                <a href="http://">刪除</a>
            </td>
      </tr> 
        @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
